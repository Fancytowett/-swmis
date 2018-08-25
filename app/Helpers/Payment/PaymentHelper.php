<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 2/7/18
 * Time: 9:28 AM
 */

namespace App\Helpers\Payment;


use App\Helpers\AfricasTalkingGateway;
use App\Helpers\AfricasTalkingGatewayException;
use App\PaymentConfirmation;
use App\Recycler;
use App\User;
use App\Wasterequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PaymentHelper
{
    /**
     * @var AfricasTalkingGateway
     */
    private $sms;

    /**
     * PaymentHelper constructor.
     *
     * @param AfricasTalkingGateway $sms
     */
    public function __construct(AfricasTalkingGateway $sms)
    {
        $this->sms = $sms;
    }

    public function process($input)
    {
        if (!PaymentConfirmation::query()->where(['trans_id' => $input['trans_id']])->exists()) {

            DB::transaction(function () use ($input) {
                #payment confirmation
                $data = $input;
                $p_conf = PaymentConfirmation::query()->create($data);
                $user = Recycler::where(['phone'=>$input['msisdn']]);
                if($user->exists()){
                    $user = $user->get()->first();
                    //get list of requests.
                    $wastesreqs = Wasterequest::where(['recycler_id'=>$user->id,'status'=>1])->first();
                    if($wastesreqs != null){
                        $wastesreqs->status = 2;
                        $wastesreqs->save();
                    }
                }
                return ;
            });
        }
    }

}
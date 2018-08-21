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
    public function __construct( AfricasTalkingGateway $sms)
    {
        $this->sms = $sms;
    }

    public function process($input)
    {
        if (!PaymentConfirmation::query()->where(['trans_id' => $input['trans_id']])->exists()) {
            DB::transaction(function () use ($input) {
                #payment confirmation
                $data = $input;
                return PaymentConfirmation::query()->create($data);
            });
        }
    }

}
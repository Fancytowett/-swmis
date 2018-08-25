<?php

namespace App\Http\Controllers;

use App\Companywaste;
use App\Mail\SendInvoice;
use App\PaymentConfirmation;
use App\Wasterequest;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class PaymentController extends Controller
{
    public function outputPayment(){
        $payment = PaymentConfirmation::all();

        $total = $payment->sum('trans_amount');

        $c_quantity  =  Companywaste::all()->sum('quantity');
//        $c_quantity  =  Companywaste::all()->sum('quantity');

        return view('payments.paymentrecords')->withPayments($payment);
    }

    public function sendInvoice(Wasterequest $wasterequest)
    {
        $wasterequest->status = 1;
        $wasterequest->save();

        $options = new Options();
        $options->setIsRemoteEnabled(true);
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml(view('emails.invoice')->with([
            'wrequest' => $wasterequest
        ]));
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();

        try {
            if (!is_dir(public_path('uploads'))) {
                $success = mkdir(public_path('uploads'), 0777, true);
            }
        }catch (\ErrorException $e){
            Log::error($e);
        }

        $file_name = public_path('uploads/INVOICE_'.$wasterequest->id.'.pdf');

        File::put($file_name, $dompdf->output());

        Mail::to($wasterequest->recycler->user->email)->send(new SendInvoice($wasterequest));

        Session::flash("Invoice sent to customer.");

        return redirect()->back();
    }

}

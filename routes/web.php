<?php

use App\Companywaste;
use App\Notifications\WasteUnailable;
use App\Wasterequest;
use App\wastes;
use Carbon\Carbon;
use Dompdf\Dompdf;
use Dompdf\Options;
use Faker\Provider\da_DK\Payment;
use Illuminate\Support\Facades\Notification;

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Headers: content-type,x-xsrf-token, X-Request-Signature');

Route::resource('/mnet/sms/gateway', 'GatewayAPI');
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth','admin']],function(){
    //Send email
    Route::post('send-contact-email','ContactUsController@send')->name('send.contactus');
    Route::get('send-invoice-email/{wasterequest}/process','PaymentController@sendInvoice')->name('send.invoice');

    Route::get('send-unavailable-email/{wasterequest}/send',function(Wasterequest $wasterequest){
//        $wasterequest->load('recycler.user');
        Notification::route('mail',$wasterequest->recycler->user->email)
            ->notify(new WasteUnailable($wasterequest));
        return redirect()->back();
    })->name('send.not-available');

    Route::get('residentwastes','AdminController@residentwastes');
    Route::get('companywastes','AdminController@companywastes');


    Route::get('/payments',function (){
        return view('payments');
    });

    Route::get('/payments/print',function (){
        $options = new Options();
        $options->setIsRemoteEnabled(true);

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml(view('report.payments')->with([
            'payments' => \App\PaymentConfirmation::latest()->get()
        ]));
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();
        return $dompdf->stream(Carbon::today()->format('d M Y'));
    })->name('print.payments');

    Route::get('/wrequests/print',function (){
        $options = new Options();
        $options->setIsRemoteEnabled(true);

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml(view('report.requests')->with([
            'requests' => \App\Wasterequest::latest()->get()
        ]));
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();
        return $dompdf->stream(Carbon::today()->format('d M Y'));
    })->name('print.wrequests');

    Route::get('/wastes/print',function (){
        $options = new Options();
        $options->setIsRemoteEnabled(true);

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml(view('report.wastes')->with([
            'residentwastes' => \App\Residentwaste::latest()->get(),
            'companywastes' => Companywaste::with('zone')->latest()->get()
        ]));
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();
        return $dompdf->stream(Carbon::today()->format('d M Y'));
    })->name('print.wastes');

    Route::get('recyclerschedule',function (){
        return view('recyclerschedule');
    });
    Route::get('wasteproducersschedule',function (){
        return view('wasteproducersschedule');
    });
    Route::get('allavailablewaste',function (){
        $waste=Wastes::all();
        return view('generalavailablewaste')->withWastes($waste);
    });
    Route::get('adminviewwasterequests',function (){

        $requests=\App\Wasterequest::all();
        return view('adminviewwasterequests')->withRequests($requests);
    });

    Route::get('/home', 'HomeController@index')->name('home')->middleware('admin');

    Route::get('/paymentsrecords', 'PaymentController@outputPayment');

    Route::group(['namespace'=>'Schedule'],function (){

        Route::get('/schedule','ResidentscheduleController@scheduleview');
    });

});


Route::group(['namespace'=>'Registration'],function(){
    Route::get('/resident','ResidentsController@residentreg');

    Route::post('/resident/save','ResidentsController@store');
    Route::get('resident/delete/{id}','ResidentsController@destroy');

    Route::get('/zones/add','ZoneController@regzone');

    Route::get('/zones/delete/{id}','ZoneController@destroy');
    Route::patch('/zones/update','ZoneController@update');

    Route::get('/edit/{id}','ZoneController@update');



    Route::post('/zones/save','ZoneController@create');

    Route::get('/recycler','RecyclerController@regrecycler');

    Route::post('/recycler/save','RecyclerController@store');
    Route::get('recycler/delete/{id}','RecyclerController@destroy');


    Route::get('/company', 'CompanyController@index');

    Route::post('/company/save','CompanyController@store');
    Route::get('company/delete/{id}','CompanyController@destroy');

    Route::get('/agents/add','AgentController@regagent');

    Route::post('/agents/save','AgentController@saveagent');
    Route::get('agent/delete/{id}','AgentController@destroy');

    Route::get('/zoneadmin','ZoneadminController@regzoneadmin');

    Route::post('/zoneadmin/save','ZoneadminController@store');

    Route::get('zoneadmin/delete/{id}','ZoneadminController@destroy');

    Route::get('/links','RegisterlinkController@registerlink');
    Route::get('/zoneadmin','ZoneadminController@regzoneadmin');



});

Route::group(['namespace'=>'Lists'],function(){
    Route::get('/residentlist','ResidentlistController@index');
    Route::get('/companylist','CompanylistController@index');
    Route::get('/agentlist','agentlistController@index');
    Route::get('/recyclerlist','RecyclerlistController@index');
    Route::get('/zoneadminlist','ZoneadminlistController@index');
    Route::get('/zonelists','ZoneListController@index');
    Route::get('/deletehome','ZoneListController@delete');
    Route::get('/search','ZoneListController@search');

});
//Route::group(['namespace'=>'Zonelist'],function(){
//
//    Route::get('/zonelist','ZonelistController@index');

//});


Route::group(['namespace'=>'Landing'],function() {


    Route::get('/agentslanding','AgentController@index');
    Route::get('/agentresidents','AgentController@agentresidents');
    Route::get('/agentcompanies','AgentController@agentcompanies');
    Route::get('/agentresidentwasterecord','AgentController@agentresidentwasterecord');
    Route::post('/agentcompanywastesave','AgentController@agentcompanywastesave');
    Route::post('/agentresidentwastesave','AgentController@agentresidentwastesave');
    Route::get('/agentcompanywasterecord','AgentController@agentcompanywasterecord');
    Route::get('/agentsschedule','AgentController@agentsschedule');
    Route::get('/zoneadminlanding','ZoneadminController@index');


    Route::get('/recyclerlanding','RecyclerController@index');
    Route::get('/recyclerprofile','RecyclerController@profile');
    Route::get('/recyclernots','RecyclerController@recyclernots');
    Route::get('/reccompanywastes','RecyclerController@companywastes');
    Route::get('/recresidentwastes','RecyclerController@residentwastes');



//    Route::get('/wasteproducerslanding','WasteproducersController@index');
    Route::get('/wasteproducerslanding','WasteproducersController@wasteproducerprofile');
    Route::get('/zoneresidents','WasteproducersController@zoneresidents');
    Route::get('/zonecompanies','WasteproducersController@zonecompanies');
    Route::get('/zonewasteproducersschedule','WasteproducersController@wasteproducersschedule');

    Route::get('/agentprofile','AgentController@profile');
    Route::get('/agentprofile/{agent}/get','AgentController@getProfile')->name('agent.profile.get');
    Route::post('/agentprofile/{agent}/update','AgentController@updateProfile')->name('agent.profile.update');
    Route::get('/residentprofile/{resident}/get','WasteproducersController@residentgetProfile')->name('resident.profile.get');
    Route::post('/residentprofile/{resident}/update','WasteproducersController@residentupdateProfile')->name('resident.profile.update');
    Route::get('/recyclerprofile/{recycler}/get','RecyclerController@getProfile')->name('recycler.profile.get');
    Route::post('/recyclerprofile/{recycler}/update','RecyclerController@updateProfile')->name('recycler.profile.update');
    Route::get('/companyprofile/{company}/get','WasteproducersController@getcompanyprofile')->name('company.profile.get');
    Route::post('/companyprofile/{company}/update','WasteproducersController@updateprofile')->name('company.profile.update');
    Route::get('/zoneadminprofile/{zoneadmin}/get','ZoneadminController@getprofile')->name('zoneadmin.profile.get');
    Route::post('/zoneadminprofile/{zoneadmin}/update','ZoneadminController@updateprofile')->name('zoneadmin.profile.update');


    Route::get('/zoneadminprofile','ZoneadminController@zoneadminprofile');
    Route::get('/zoneagents','ZoneadminController@zoneagents');
    Route::get('/zoneagentsschedule','ZoneadminController@zoneagentsschedule');
    Route::get('/zonepayments','ZoneadminController@payments');

    Route::get('/zonesagentslist','ZoneadminController@listzoneagents');
    Route::get('/zonesresidentslist','ZoneadminController@listzoneresidents');
    Route::get('/zonescompanieslist','ZoneadminController@listzonecompanies');

    Route::post ('/zonewastereport/save','ZoneadminController@zonewastereportsave');
    Route::get('/zonewastereport','ZoneadminController@zonewastereport');
    Route::get('/zonewastereportlist','ZoneadminController@zonewastereportlist');
    Route::get('/recyclerviewwaste','RecyclerController@recyclerviewwaste');
    Route::post('/recyclerrequestwastesave','RecyclerController@recylerwasterequestsave');
    Route::get('/recyclerrequestwaste','RecyclerController@recyclerrequestwaste');


});
Route::group(['namespace'=>'Schedule'], function(){
    Route::get('/wasteproducersschedule','AdscheduleController@Wasteproducersschedule');
    Route::post('/wasteproducersschedule/save','AdscheduleController@saveschedule');
    Route::get('/wasteproducersschedulelist','AdscheduleController@wasteproducersschedulelist');
    Route::get('/agentsschedule','AgentScheduleController@agentsschedule');
    Route::get('/zonewasteproducersschedule','WasteproducersscheduleController@zonewasteproducersschedule');
    Route::get('/wasteproducersscheduleview','WasteproducersscheduleController@wasteproducersscheduleview');


});
Route::group(['namespace'=>'Mails'] , function(){

    Route::get('contact_us', 'ContactUSController@contactUS');
    Route::post('contact_us', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);

});
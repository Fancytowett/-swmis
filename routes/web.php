<?php

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
Route::get('/payments',function (){
    return view('payments');
});

Route::get('recyclerschedule',function (){
    return view('recyclerschedule');
});
Route::get('wasteproducersschedule',function (){
    return view('wasteproducersschedule');
});


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace'=>'Schedule'],function (){

    Route::get('/schedule','ResidentscheduleController@scheduleview');
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

    Route::post('/company/save','Companycontroller@store');
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
    Route::get('/zonelists','zonelistController@index');
    Route::get('/deletehome','zonelistController@delete');
    Route::get('/search','zonelistController@search');

});
//Route::group(['namespace'=>'Zonelist'],function(){
//
//    Route::get('/zonelist','ZonelistController@index');

//});


Route::group(['namespace'=>'Landing'],function() {


    Route::get('/agentslanding','AgentController@index');
    Route::get('/agentsschedule','AgentController@agentsschedule');
    Route::get('/zoneadminlanding','ZoneadminController@index');

    Route::get('/recyclerlanding','RecyclerController@index');
    Route::get('/recyclerprofile','RecyclerController@profile');

    Route::get('/wasteproducerslanding','wasteproducersController@index');
    Route::get('/wasteproducerprofile','wasteproducersController@wasteproducerprofile');
    Route::get('/zoneresidents','wasteproducersController@zoneresidents');
    Route::get('/zonecompanies','wasteproducersController@zonecompanies');
    Route::get('/zonewasteproducersschedule','wasteproducersController@wasteproducersschedule');

    Route::get('/agentprofile','AgentController@profile');
    Route::get('/agentprofile/{agent}/get','AgentController@getProfile')->name('agent.profile.get');
    Route::post('/agentprofile/{agent}/update','AgentController@updateProfile')->name('agent.profile.update');
    Route::get('/residentprofile/{resident}/get','wasteproducersController@tresidentgetProfile')->name('resident.profile.get');
    Route::post('/residentprofile/{resident}/update','wasteproducersController@residentupdateProfile')->name('resident.profile.update');
    Route::get('/recyclerprofile/{recycler}/get','RecyclerController@getProfile')->name('recycler.profile.get');
    Route::post('/recyclerprofile/{recycler}/update','RecyclerController@updateProfile')->name('recycler.profile.update');
    Route::get('/companyprofile/{company}/get','wasteproducersController@getcompanyprofile')->name('company.profile.get');
    Route::post('/companyprofile/{company}/update','wasteproducersController@updateprofile')->name('company.profile.update');
    Route::get('/zoneadminprofile/{zoneadmin}/get','ZoneadminController@getprofile')->name('zoneadmin.profile.get');
    Route::post('/zoneadminprofile/{zoneadmin}/update','ZoneadminController@updateprofile')->name('zoneadmin.profile.update');


    Route::get('/zoneadminprofile','ZoneadminController@zoneadminprofile');
    Route::get('/zoneagents','ZoneadminController@zoneagents');
    Route::get('/zoneagentsschedule','ZoneadminController@zoneagentsschedule');
    Route::get('/zonepayments','ZoneadminController@zonepayments');
    Route::get('/zonepayments','ZoneadminController@zonepayments');

    Route::get('/zonesagentslist','ZoneadminController@listzoneagents');
    Route::get('/zonesresidentslist','ZoneadminController@listzoneresidents');
    Route::get('/zonescompanieslist','ZoneadminController@listzonecompanies');

});
Route::group(['namespace'=>'Schedule'], function(){
    Route::get('/wasteproducersschedule','AdscheduleController@Wasteproducersschedule');
    Route::post('/wasteproducersschedule/save','AdscheduleController@saveschedule');
    Route::get('/wasteproducersschedulelist','AdscheduleController@wasteproducersschedulelist');



});
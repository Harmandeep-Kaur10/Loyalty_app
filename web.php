<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\CustomerView;
use \App\Http\Controllers\MerchantAppSetup;
use \App\Http\Controllers\MerchantViewCustomers;

//agar route exist ni krta toh 404 page not found return hoga
Route::fallback(function(){
    return response('404');
});

Route::controller(CustomerView::class)->group(function (){

	Route::get('/js','get_js');

	Route::get('/signup_popup/{our_passw_token}', 'get_signup_popup_view');

	Route::get('/points_popup/{our_passw_token}/{cust_id}', 'get_points_popup_view');

});

Route::controller(MerchantAppSetup::class)->group(function (){

	Route::get('/home/{our_passw_token}', 'get_dashboard_view');

	Route::get('/points_earn_setup/{our_passw_token}', 'get_points_earn_setup_view');

	Route::get('/enable_or_disable_activity/{our_passw_token}/{activity_name}', 'enable_or_disable_activity_state');

	Route::get('/rewards_setup/{our_passw_token}', 'get_rewards_setup_view');

	Route::get('/enable_or_disable_reward/{our_passw_token}', 'enable_or_disable_reward_state');

        Route::get('/customize_widget/{our_passw_token}', 'get_customize_widget_view');

});

Route::controller(MerchantViewCustomers::class)->group(function (){

	Route::get('/customers/{our_passw_token}/', 'get_customers_table_view');

        Route::get('/customer_history/{our_passw_token}/', 'get_customer_history_view');

});

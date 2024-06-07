<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ShopLink;
use \App\Http\Controllers\CustomerView;
use \App\Http\Controllers\MerchantAppSetup;
use \App\Http\Controllers\HandleWebhooks;

Route::controller(ShopLink::class)->group(function(){
	Route::post("/save/new_install", "save_new_install");       
});

Route::controller(HandleWebhooks::class)->group(function(){

        Route::post('/shopify_webhooks', 'handle_shopify_webhooks');
});

Route::controller(CustomerView::class)->group(function(){

	Route::get("/save_visit_entry/{our_passw_token}/{cust_id}", "set_visit_entry");

	Route::get("/compare_points_with_reward_cost/{msd}/{customer_id}/", "compare_points_with_reward_cost");

	Route::post("/save_claimed_reward/{msd}/{customer_id}/", "save_claimed_reward");

});

Route::controller(MerchantAppSetup::class)->group(function(){

	Route::get("/enable_theme/{our_passw_token}", "enable_theme_extension");

	Route::post("/save_updated_points/{our_passw_token}/{activity_name}", "handle_update_points_request");

	Route::post("/save_updated_costs/{our_passw_token}", "handle_update_costs_request");

	Route::post("/store_customization/{our_passw_token}/", "save_customization");

});

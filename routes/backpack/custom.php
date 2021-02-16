<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    //dashboard
    Route::get('dashboard', 'AdminController@dashboard')->name('backpack.dashboard');
    Route::get('charts/purchase-order', 'Charts\PurchaseOrderChartController@response')->name('charts.purchase-order.index');
    Route::get('charts/counter', 'Charts\CounterChartController@response')->name('charts.counter.index');

    // Out
    Route::crud('warehouseout', 'WarehouseOutCrudController');
    Route::post('item_to-bag', 'ApiController@itemToBag');
    Route::get('item_on-bag', 'ApiController@checkItemOnBagById');
    Route::post('delete-item_on-bag', 'ApiController@deleteItemOnBag');
    Route::post('accept', 'ApiController@accept');
    Route::post('decline', 'ApiController@decline');

    // In
    Route::crud('warehousein', 'WarehouseInCrudController');
    Route::post('item_to-bag_in', 'ApiController@itemToBagIn');
    Route::get('item_on-bag_in', 'ApiController@checkItemOnBagInById');
    Route::post('delete-item_on-bag_in', 'ApiController@deleteItemOnBagIn');
    Route::post('accept-po', 'ApiController@acceptPO');
    Route::post('decline-po', 'ApiController@declinePO');


    Route::crud('customer', 'CustomerCrudController');
    Route::crud('item', 'ItemCrudController');
    Route::crud('company', 'CompanyCrudController');
    Route::crud('supplier', 'SupplierCrudController');
    Route::crud('role', 'RoleCrudController');
}); // this should be the absolute last line of this file

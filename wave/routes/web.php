<?php

Route::impersonate();
Route::get('/export', 'ExportController@export')->name('export');

Route::get('/', '\Wave\Http\Controllers\HomeController@index')->name('wave.home');
Route::get('/card/{slug}', '\Wave\Http\Controllers\CardController@show')->name('card.show');
Route::post('/cart', '\Wave\Http\Controllers\CardController@addToCard')->name('add.cart');
Route::post('/update/cart', '\Wave\Http\Controllers\CardController@updateCart')->name('update.cart');
Route::post('/delete/cart', '\Wave\Http\Controllers\CardController@deleteCart')->name('delete.cart');
Route::get('/checkout', '\Wave\Http\Controllers\CardController@checkout')->name('cart.checkout');
Route::post('/order', '\Wave\Http\Controllers\CardController@orderCart')->name('cart.order');
Route::get('/list/card', '\Wave\Http\Controllers\CardController@list')->name('card.list');
Route::get('/news', '\Wave\Http\Controllers\NewsController@index')->name('news.list');
Route::get('/news/{slug}', '\Wave\Http\Controllers\NewsController@show')->name('news.show');
Route::get('/guide', '\Wave\Http\Controllers\GuideController@index')->name('guide.list');
Route::get('/term', '\Wave\Http\Controllers\TermController@index')->name('term.list');

Route::view('/privacy', 'theme::privacy')->name('privacy');
Route::view('/shipping-payment', 'theme::shipping_payment')->name('shipping_payment');

Route::get('/payment', '\Wave\Http\Controllers\PaymentController@index')->name('payment.list');
Route::get('/news/{slug}', '\Wave\Http\Controllers\NewsController@show')->name('news.show');
Route::get('@{username}', '\Wave\Http\Controllers\ProfileController@index')->name('wave.profile');

// Documentation routes
Route::view('docs/{page?}', 'docs::index')->where('page', '(.*)');

// Additional Auth Routes
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('user/verify/{verification_code}', 'Auth\RegisterController@verify')->name('verify');
Route::post('register/complete', '\Wave\Http\Controllers\Auth\RegisterController@complete')->name('wave.register-complete');

Route::get('blog', '\Wave\Http\Controllers\BlogController@index')->name('wave.blog');
Route::get('blog/{category}', '\Wave\Http\Controllers\BlogController@category')->name('wave.blog.category');
Route::get('blog/{category}/{post}', '\Wave\Http\Controllers\BlogController@post')->name('wave.blog.post');

Route::view('install', 'wave::install')->name('wave.install');

/***** Pages *****/
Route::get('{page}', '\Wave\Http\Controllers\PageController@page');

/***** Pricing Page *****/
Route::view('pricing', 'theme::pricing')->name('wave.pricing');

/***** Billing Routes *****/
Route::post('/billing/webhook', '\Wave\Http\Controllers\WebhookController@handleWebhook');
Route::post('paddle/webhook', '\Wave\Http\Controllers\SubscriptionController@hook');
Route::post('checkout', '\Wave\Http\Controllers\SubscriptionController@checkout')->name('checkout');

Route::get('test', '\Wave\Http\Controllers\SubscriptionController@test');

Route::group(['middleware' => 'wave'], function () {
	Route::get('dashboard', '\Wave\Http\Controllers\DashboardController@index')->name('wave.dashboard');
});

Route::group(['middleware' => 'auth'], function(){
	Route::get('settings/{section?}', '\Wave\Http\Controllers\SettingsController@index')->name('wave.settings');

	Route::post('settings/profile', '\Wave\Http\Controllers\SettingsController@profilePut')->name('wave.settings.profile.put');
	Route::put('settings/security', '\Wave\Http\Controllers\SettingsController@securityPut')->name('wave.settings.security.put');

	Route::post('settings/api', '\Wave\Http\Controllers\SettingsController@apiPost')->name('wave.settings.api.post');
	Route::put('settings/api/{id?}', '\Wave\Http\Controllers\SettingsController@apiPut')->name('wave.settings.api.put');
	Route::delete('settings/api/{id?}', '\Wave\Http\Controllers\SettingsController@apiDelete')->name('wave.settings.api.delete');

	Route::get('settings/invoices/{invoice}', '\Wave\Http\Controllers\SettingsController@invoice')->name('wave.invoice');

	Route::get('notifications', '\Wave\Http\Controllers\NotificationController@index')->name('wave.notifications');
	Route::get('announcements', '\Wave\Http\Controllers\AnnouncementController@index')->name('wave.announcements');
	Route::get('announcement/{id}', '\Wave\Http\Controllers\AnnouncementController@announcement')->name('wave.announcement');
	Route::post('announcements/read', '\Wave\Http\Controllers\AnnouncementController@read')->name('wave.announcements.read');
	Route::get('notifications', '\Wave\Http\Controllers\NotificationController@index')->name('wave.notifications');
	Route::post('notification/read/{id}', '\Wave\Http\Controllers\NotificationController@delete')->name('wave.notification.read');

    /********** Checkout/Billing Routes ***********/
    Route::post('cancel', '\Wave\Http\Controllers\SubscriptionController@cancel')->name('wave.cancel');
    Route::view('checkout/welcome', 'theme::welcome');

    Route::post('subscribe', '\Wave\Http\Controllers\SubscriptionController@subscribe')->name('wave.subscribe');
	Route::view('trial_over', 'theme::trial_over')->name('wave.trial_over');
	Route::view('cancelled', 'theme::cancelled')->name('wave.cancelled');
    Route::post('switch-plans', '\Wave\Http\Controllers\SubscriptionController@switchPlans')->name('wave.switch-plans');
});

Route::group(['middleware' => 'admin.user'], function(){
    Route::view('admin/do', 'wave::do');
});



// Admin router
Route::group(['middleware' => 'admin.user', 'prefix' => 'admin'], function() {
	Route::view('home-pages', 'vendor.voyager.home_page.browser')->name('voyager.home-pages.index');
	Route::post('home-pages', '\Wave\Http\Controllers\HomeController@store')->name('voyager.home-pages.store');
});

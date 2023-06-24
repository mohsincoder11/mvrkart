<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\NameOfGeneralCategoryController;
use App\Http\Controllers\NameOfCollegeCategoryController;
use App\Http\Controllers\ManageImageController;
use App\Http\Controllers\ManageVideoController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\RegistrationController1;
use App\Http\Controllers\RegistrationController2;
use App\Http\Controllers\PaymentGatewayController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

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

// Route::get('/1', function () {
//     return view('manageimage.index');
// });
// Route::get('/', function () {
//     return redirect()->route('locations.index');
// });

Route::view('login','login')->name('login');
Route::post('post-login',[LoginController::class,'post_login'])->name('post-login');
Route::get('logout', [LoginController::class,'logout'])->name('logout');

Route::group(['middleware' => ['AuthCheck']], function () {
Route::resource('/locations', LocationController::class);
Route::resource('banners', BannerController::class);
Route::resource('categories', NameOfGeneralCategoryController::class);
Route::resource('college', NameOfCollegeCategoryController::class);
Route::resource('manageimage', ManageImageController::class);
Route::resource('managevideo', ManageVideoController::class);
Route::resource('events', EventController::class);
Route::get('edit-event',[EventController::class,'edit_event'])->name('edit-event');
Route::post('update-event',[EventController::class,'update_event'])->name('update-event');

Route::get('general',[RegistrationController2::class,'registration2_table'])->name('general');
Route::get('college1',[RegistrationController1::class,'registration1_table'])->name('college1');

});

Route::get('/',[HomeController::class,'index'])->name('home');
Route::view('social-media','Home.social-media')->name('social-media');
Route::get('event',[EventController::class,'event'])->name('event');
Route::get('event_detail/{id}',[EventController::class,'detail'])->name('event_detail');
Route::get('mail_test',[RegistrationController1::class,'mail_test']);
Route::get('pastevent',[EventController::class,'past_event'])->name('pastevent');
Route::get('pasteventdetail/{id}',[EventController::class,'past_event_detail'])->name('pasteventdetail');
Route::get('register/{id}',[RegistrationController1::class,'register'])->name('register');
Route::get('register-pay-later1/{id}',[RegistrationController1::class,'register_pay_later1'])->name('register-pay-later1');
Route::post('register_insert',[RegistrationController1::class,'insert'])->name('register_insert');
Route::post('register_insert_pay_later',[RegistrationController1::class,'insert_pay_later'])->name('register_insert_pay_later');
Route::post('success_callback',[RegistrationController1::class,'success_callback'])->name('success_callback');
Route::post('cancel_callback',[RegistrationController1::class,'cancel_callback'])->name('cancel_callback');
Route::get('html_email',[RegistrationController1::class,'html_email'])->name('html_email');

Route::get('register2/{id}',[RegistrationController2::class,'registers2'])->name('register2');
Route::get('register-pay-later2/{id}',[RegistrationController2::class,'register_pay_later2'])->name('register-pay-later2');

Route::post('register2_insert',[RegistrationController2::class,'insert'])->name('register2_insert');
Route::post('register2_insert_pay_later',[RegistrationController2::class,'insert_pay_later'])->name('register2_insert_pay_later');
//paymentGateway
Route::get('dataform',[PaymentGatewayController::class,'index'])->name('dataform');
Route::post('paymentgateway',[PaymentGatewayController::class,'ccavrequest_handeler'])->name('paymentgateway');
Route::get('general_delete/{id}',[RegistrationController1::class,'delete'])->name('general_delete');
Route::get('college_delete/{id}',[RegistrationController2::class,'delete'])->name('college_delete');
Route::post('success_callback2',[RegistrationController2::class,'success_callback'])->name('success_callback2');
Route::post('cancel_callback2',[RegistrationController2::class,'cancel_callback'])->name('cancel_callback2');
Route::get('philosophy',[HomeController::class,'philosophy_index'])->name('philosophy');
Route::get('gallery',[HomeController::class,'gallery_index'])->name('gallery');
Route::get('contact',[HomeController::class,'contact_index'])->name('contact');
Route::post('save-contact-form',[HomeController::class,'save_contact_form'])->name('save-contact-form');
Route::get('faq',[HomeController::class,'faq_index'])->name('faq');
Route::get('terms',[HomeController::class,'terms_index'])->name('terms');
Route::get('refund',[HomeController::class,'refund_index'])->name('refund');
Route::get('privacy',[HomeController::class,'privacy_index'])->name('privacy');

Route::view('success-landing','success-landing')->name('success-landing');
Route::view('cancel-landing','cancel-landing')->name('cancel-landing');





Route::get('/clear-cache', function () {
	Artisan::call('cache:clear');
	Artisan::call('route:clear');
	Artisan::call('config:clear');
	Artisan::call('view:clear');
	return redirect()->back();
	//return "All cache cleared!";
});


















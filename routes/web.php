<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\Payment\PaymentController;
use App\Http\Controllers\Payment\StripeController;
use App\Http\Controllers\PaymentLinkController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\BriefsController;
use App\Http\Controllers\LogoBriefsController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AudioBriefController;

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


//FRONTEND
Route::name('front.')->group(function() {

//    Route::get('/', [FrontendController::class, 'index'])->name('home');
   Route::get('/', function () {
     return redirect('/wd5');
     })->name('home');
   Route::get('/wd1', [FrontendController::class, 'wd1'])->name('wd1');
   Route::get('/wd2', [FrontendController::class, 'wd2'])->name('wd2');
   Route::get('/wd3', [FrontendController::class, 'wd3'])->name('wd3');
   Route::get('/wd4', [FrontendController::class, 'wd4'])->name('wd4');
   Route::get('/wd5', [FrontendController::class, 'wd5'])->name('wd5');
   Route::get('/wd6', [FrontendController::class, 'wd6'])->name('wd6');
   Route::get('/wd7', [FrontendController::class, 'wd7'])->name('wd7');
   Route::get('/custom-website-design', [FrontendController::class, 'custom_website_design'])->name('custom.website.design');
   Route::get('/custom-website-design-v2', [FrontendController::class, 'custom_website_design_v2'])->name('custom.website.design.v2');
   Route::get('/shopify-web-design', [FrontendController::class, 'shopify_web_design'])->name('shopify.web.design');
   Route::get('/wordpress-web-design', [FrontendController::class, 'wordpress_web_design'])->name('wordpress.web.design');
   Route::get('/magento-web-design', [FrontendController::class, 'magento_web_design'])->name('magento.web.design');
   Route::get('/ecommerce-web-design', [FrontendController::class, 'ecommerce_web_design'])->name('ecommerce.web.design');
   Route::get('/digital-marketing', [FrontendController::class, 'digital_marketing'])->name('digital.marketing');
   Route::get('/logo-design', [FrontendController::class, 'logo_design'])->name('logo.design');
   Route::get('/content-writing', [FrontendController::class, 'content_writing'])->name('content.writing');
   Route::get('/video-animation', [FrontendController::class, 'video_animation'])->name('video.animation');
   Route::get('/portfolio', [FrontendController::class, 'portfolio'])->name('portfolio');
   Route::get('/discounted-pricing', [FrontendController::class, 'discounted_pricing'])->name('discounted.pricing');
   Route::get('/contact-us', [FrontendController::class, 'contact'])->name('contact');
   Route::get('/about-us', [FrontendController::class, 'about'])->name('about');
   Route::get('/terms-conditions', [FrontendController::class, 'terms_condition'])->name('terms.condition');
   Route::get('/privacy-policy', [FrontendController::class, 'privacy_policy'])->name('privacy.policy');
   Route::get('/thank-you', [FrontendController::class, 'thankyou'])->name('thankyou');

});

Route::get('/link-storage', function () {
   Artisan::call('storage:link');
});

Route::get('/clear-cache', function () {
   Artisan::call('optimize:clear');
});

Route::get('/config-clear', function () {
   Artisan::call('config:clear');
});

Route::controller(PaymentLinkController::class)->group(function() {
   Route::get('/payment/ptoken', 'index')->name('payment.ptoken');
   Route::post('/payment/link/store', 'paymentGeneratorStore')->name('payment.link.store');
   Route::post('/payment/ordernow/store', 'orderNow')->name('payment.ordernow.store');
});

//Invoice routes
Route::controller(InvoiceController::class)->group(function () {
   Route::any('/invoice/send', 'send')->name('invoice.send');
});

//Stripe routes
Route::controller(StripeController::class)->group(function () {
   Route::get('/payment/stripe', 'index')->name('payment.stripe')->middleware(['verifyPaymentToken']);
   Route::get('/payment/stripe/three_step', 'three_step')->name('payment.stripe_three_step')->middleware(['verifyPaymentToken']);
   Route::post('/payment/stripe/paymentIntent', 'paymentIntent')->name('payment.stripe.paymentIntent');
   Route::post('/payment/stripe/paymentIntent_3d', 'paymentIntent_3d')->name('payment.stripe.paymentIntent_3d');
   Route::post('/payment/stripe/paymentIntent_3d3step', 'paymentIntent_3d3step')->name('payment.stripe.paymentIntent_3d3step');
   Route::post('/payment/stripe/paymentIntentThreeStep_3d', 'paymentIntentThreeStep_3d')->name('payment.stripe.paymentIntentThreeStep_3d');
   Route::post('/payment/stripe/PaymentIntent_succeeded', 'PaymentIntent_succeeded')->name('payment.stripe.PaymentIntent_succeeded');
   Route::get('/payment/stripe/success', 'success')->name('payment.stripe.success');
   Route::any('/payment/stripe/createPaymentMethod', 'createPaymentMethod')->name('payment.stripe.createPaymentMethod');
   Route::any('/payment/stripe/createThreeStepPaymentMethod', 'createThreeStepPaymentMethod')->name('payment.stripe.createThreeStepPaymentMethod');
   Route::post('/payment/stripe/process', 'process')->name('payment.stripe.process');

   Route::any('/payment/sendInvoice', 'sendInvoice')->name('payment.sendInvoice');
   Route::any('/payment/stripe/confirm3DSecure', 'confirm3DSecure')->name('payment.stripe.confirm3DSecure');
});

Route::controller(PaymentController::class)->group(function() {
   Route::get('/payment/success/{token?}', 'success')->name('payment.success');
   Route::get('/payment/failed/{token?}', 'failed')->name('payment.failed');
   Route::get('/payment/expired', 'expired')->name('payment.expired');
   Route::get('/payment/fetch', 'tokenData')->name('payment.fetch.token')->middleware(['verifyPaymentToken']);
   Route::get('/payment/generatelink/{id}', 'generatelink')->name('payment.generatelink');
   Route::any('/payment/storePaymentApi', 'storePaymentApi')->name('payment.store.checkout');
   Route::any('/payment/redeemCoupon', 'redeemCoupon')->name('payment.redeem.coupon');
   Route::post('/payment/sendEmailToClient', 'sendEmailToClient')->name('payment.sendEmailToClient');
   Route::get('/payment/previous/{token?}', 'previousData')->name('payment.previousData')->middleware(['verifyPaymentToken']);
   Route::any('/payment/download/invoice', 'downloadInvoice')->name('client.payment.download.invoice');

});

Route::controller(ContactController::class)->group(function() {
   Route::post('/popup-store', 'popup_store')->name('popup.store');
   Route::post('/solution-store', 'solution_store')->name('solution.store');
   Route::post('/signup-store', 'signup_store')->name('signup.store');
   Route::post('/contact-store', 'contact_store')->name('contact.store');

});


Route::controller(BriefsController::class)->group(function() {
    Route::get('/brief', 'index')->name('brief');
    Route::post('/brief/create', 'store')->name('brief.store');
    Route::get('/brief/thank-you', 'thankyou')->name('brief.thankyou');
    Route::post('/brief/sendBriefEmail', 'sendBriefEmail')->name('brief.sendBriefEmail');

 });


Route::controller(LogoBriefsController::class)->group(function() {
   Route::get('/logo-brief', 'index')->name('logo.brief');
   Route::post('/logo-brief/create', 'store')->name('logo.brief.store');
   Route::get('/logo-brief/thankyou', 'thankyou')->name('logo.brief.thankyou');
   Route::post('/logo-brief/sendBriefEmail', 'sendBriefEmail')->name('logo.brief.sendBriefEmail');

});

Route::controller(ReviewsController::class)->group(function() {
   Route::get('/reviews/getReviews', 'getReviews')->name('reviews.getReviews');
   Route::post('/reviews/one_reviews', 'one_reviews')->name('reviews.one_reviews');
});

Route::controller(AudioBriefController::class)->group(function(){

});


Route::match(['get','post'],'/submit-audio',[AudioBriefController::class, 'analyzeAudio'])->name('submit-audio');
Route::post('/submit-answer', [AudioBriefController::class, 'submitAnswer'])->name('submit-answer');
//Route::get('/showBriefs', [BriefsController::class, 'showBriefs'])->middleware(['auth'])->name('showBriefs');


Route::get('/dashboard',[BriefsController::class, 'showBriefs'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

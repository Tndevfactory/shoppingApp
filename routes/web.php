<?php

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\LoginController;
use Illuminate\Auth\Events\PasswordReset;
use App\Http\Controllers\PaimentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\ResetPasswordController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;


//auth

Route::get('/login-form', [LoginController::class, 'loginFormDisplay'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authLogin'])->name('auth-login');

Route::get('/register-form', [LoginController::class, 'registerFormDisplay'])
    ->name('register-form')->middleware('guest');

Route::post('/register', [LoginController::class, 'authRegister'])->name('auth-register');

Route::get('/logout', [LoginController::class, 'authLogout'])->name('auth-logout')->middleware('auth');

// socialite
// La redirection vers le provider
Route::get("redirect/{provider}", [SocialiteController::class,"redirect"])->name('socialite.redirect');

// Le callback du provider
Route::get("callback/{provider}", [SocialiteController::class,"callback"])->name('socialite.callback');


// profile user registred must be verified
Route::get('/profile-client', function () { return view('profile.client');
})->name('profile-client')->middleware(['auth', 'verified']);

Route::get('/profile-admin', function () { return view('profile.admin');
})->name('profile-admin')->middleware('auth');


// ProductController
// affichage page racine
Route::get('/', [ProductController::class, "index"])->name('welcome');

// affichage page details produit
Route::get('/details/{slug}', [ProductController::class, "detailsProduct"])->name('details-product');


// cart controller 
// add to cart
Route::get('/acheter/{product}', [CartController::class, "addToCart"])->name('cart-add');
// view cart page
Route::get('/cart-content', [CartController::class, "viewCart"])->name('cart-show');
// view cart page
Route::get('/cart-effacer', [CartController::class, "destroyCart"])->name('cart-destroy');
// remove item
Route::get('/cart-effacer-item/{rowId}', [CartController::class, "removeCartitem"])->name('remove-cart-item');
// increment quantity by one
Route::get('/cart-incrementer/{rowId}', [CartController::class, "incrementCartQty"])->name('increment-cart-qte');
// decrement quantity by one
Route::get('/cart-decrementer/{rowId}', [CartController::class, "decrementCartQty"])->name('decrement-cart-qte');



//paiement Controller
// create order
Route::post('/paiment-proceed', [PaimentController::class, "index"])->name('paiment-proceed');





// return route trigger method  (to execute payment) paimentStatus 
Route::get('/paiment-status', [PaimentController::class, "paimentStatus"])->name('paiment-status');
// triger method cancel paimentCancel if payer cancel payment
Route::get('/paiment-cancel', [PaimentController::class, "paimentCancel"])->name('paiment-cancel');



// payment-success paypal
Route::get('/payment-success', function () { return view('paiement.paiement-success');})->name('payment-success');
//payment-fail
Route::get('/payment-fail', function () { return view('paiement.paiement-fail');})->name('payment-fail');

// payment ala livraison
Route::get('/payment-livraison', function () { return view('paiement.paiement-livraison');})->name('payment-livraison');

//password reset 
// view password email form
    Route::get('/forgot-password', [ResetPasswordController::class, "passwordEmailForm"])->middleware('guest')->name('password.request');

// send reset link to mail recepient
    Route::post('/forgot-password', [ResetPasswordController::class, "passwordResetLink"])->middleware('guest')->name('password.email');

// generating reset form view when click reset link from mail recepient 
    Route::get('/reset-password/{token}', [ResetPasswordController::class, "passwordResetForm"])->middleware('guest')->name('password.reset');

// reset password finaly in db 
    Route::post('/reset-password', [ResetPasswordController::class, "passwordUpdate"])
    ->middleware('guest')->name('password.update');


// email verification after registration
// verification screen
    Route::get('/email/verify', [VerificationController::class, "verifyEmailView"])
    ->middleware('auth')->name('verification.notice');

// handle request after click email link 
    Route::get('/email/verify/{id}/{hash}', [VerificationController::class, "handleVerifyLinkClick"])
    ->middleware(['auth', 'signed'])->name('verification.verify');

// if user delete the first mail notice  
    Route::post('/email/verification-notification', [VerificationController::class, "newVerifyEmailLink"])
    ->middleware(['auth', 'throttle:6,1'])->name('verification.send');


// about page

    Route::get('/about', function () {
        return view('about');
    })->name('about');
   
   





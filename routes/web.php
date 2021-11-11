<?php


use App\Http\Controllers\QuotationController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/comingsoon', function () {
    return view('pages/coming-soon');
});

Route::get('/error-page', function () {
    return view('pages/error-page');
});

Route::get('about', function () {
    return view('pages/about');
});


Route::get('/agent-list', function () {
    return view('pages/agent-list');
});

Route::get('/articles', function () {
    return view('pages/articles');
});

Route::get('/article-detail', function () {
    return view('pages/article-detail');
});

Route::get('/compareinsurance', function () {
    return view('quotations/compareinsurance');
});

Route::get('/comparemedicalinsurance', function () {
    return view('quotations/comparemedicalinsurance');
});

Route::get('/comparemotorcommercial', function () {
    return view('quotations/comparemotorcommercial');
});

Route::get('/contact', function () {
    return view('pages/contact');
});

/*Route::prefix('quotations')->group(function () {*/
Route::get('private-motor-quotation', [QuotationController::class, 'getCars'])->name('private-motor-quotation');
Route::post('private-motor-quotations-results', [QuotationController::class, 'motorSaveQoute'])->name('private-motor-quotations-results');
/* });*/

/*Route::resource('quotations', QuotationController::class);*/

/*Route::get('/private-motor-quotation', function () {
    return view('quotations/private-motor-quotation');
});

Route::get('/private-motor-quotations-results', function () {
    return view('quotations/private-motor-quotations-results');
});*/

Route::get('/insurance-products', function () {
    return view('pages/insurance-products');
});

Route::get('/insurance-details', function () {
    return view('pages/insurance-details');
});

Route::get('/insurance-product-detail', function () {
    return view('pages/insurance-product-detail');
});

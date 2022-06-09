<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('inventory-dashboard');
});
Route::get('/sidebar', function () {
    return view('layout/sidebar');
});
Route::get('/add-customer', function () {
    return view('add-customer');
});
Route::get('/add-supplier', function () {
    return view('add-supplier');
});
Route::get('/bills', function () {
    return view('bills');
});
Route::get('/leads', function () {
    return view('leads');
});
Route::get('/new-po', function () {
    return view('new-po');
});
Route::get('/payment-recieved', function () {
    return view('payment-recieved');
});
Route::get('/payment', function () {
    return view('payment');
});
Route::get('/purchase-order', function () {
    return view('purchase-order');
});
Route::get('/supplier-list', function () {
    return view('supplier-list');
});
Route::get('/vendor-list', function () {
    return view('vendor-list');
});
Route::get('/groups', function () {
    return view('groups');
});
Route::get('/unpaidinvoice', function () {
    return view('unpaidinvoice');
});
Route::get('/unpaidenpenseinvoice', function () {
    return view('unpaidenpenseinvoice');
});
Route::get('/unclearedtransaction', function () {
    return view('unclearedtransaction');
});
Route::get('/transaction', function () {
    return view('Transaction');
});
Route::get('/supplierinvoice', function () {
    return view('supplierinvoice');
});
Route::get('/salesinvoice', function () {
    return view('salesinvoice');
});
Route::get('/recurringinvoices', function () {
    return view('recurringinvoices');
});
Route::get('/quote', function () {
    return view('quote');
});
Route::get('/PaidInvoice', function () {
    return view('PaidInvoice');
});
Route::get('/paidexpenses', function () {
    return view('paidexpenses');
});
Route::get('/paidcustomers', function () {
    return view('paidcustomers');
});
Route::get('/newtransfer', function () {
    return view('newtransfer');
});
Route::get('/newsalesinvoice', function () {
    return view('newsalesinvoice');
});
Route::get('/newquote', function () {
    return view('newquote');
});
Route::get('/manageinvoices', function () {
    return view('manageinvoices');
});
Route::get('/manageexpenseinvoice', function () {
    return view('manageexpenseinvoice');
});
Route::get('/managecategories', function () {
    return view('managecategories');
});
Route::get('/ExpireProducts', function () {
    return view('ExpireProducts');
});
Route::get('/Edittransaction', function () {
    return view('Edittransaction');
});
Route::get('/deadstock', function () {
    return view('deadstock');
});







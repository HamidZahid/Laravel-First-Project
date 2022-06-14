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
Route::get('/unpaidexpenseinvoice', function () {
    return view('unpaidexpenseinvoice');
});
Route::get('/unclearedtransaction', function () {
    return view('unclearedtransaction');
});
Route::get('/transaction', function () {
    return view('transaction');
});
Route::get('/salesinvoice', function () {
    return view('salesinvoice');
});
Route::get('/recurringinvoices', function () {
    return view('recurringinvoices');
});
Route::get('/newquote', function () {
    return view('newquote');
});
Route::get('/newsalesinvoice', function () {
    return view('newsalesinvoice');
});
Route::get('/newtransfer', function () {
    return view('newtransfer');
});
Route::get('/paidcustomers', function () {
    return view('paidcustomers');
});
Route::get('/paidexpenses', function () {
    return view('paidexpenses');
});
Route::get('/PaidInvoice', function () {
    return view('PaidInvoice');
});
Route::get('/managecategories', function () {
    return view('managecategories');
});
Route::get('/manageexpenseinvoice', function () {
    return view('manageexpenseinvoice');
});
Route::get('/manageinvoices', function () {
    return view('manageinvoices');
});
Route::get('/manageaccounts', function () {
    return view('manageaccounts');
});
Route::get('/deadstock', function () {
    return view('deadstock');
});
Route::get('/edittransaction', function () {
    return view('edittransaction');
});
Route::get('/expireproductlist', function () {
    return view('expireproductlist');
});
Route::get('/addexpense', function () {
    return view('addexpense');
});
Route::get('/addnewaccount', function () {
    return view('addnewaccount');
});
Route::get('/addsupplier', function () {
    return view('addsupplier');
});
Route::get('/addwarehouse', function () {
    return view('addwarehouse');
});
Route::get('/assets', function () {
    return view('assets');
});







<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

Route::get('/', function () {
    return view('home');
});
// Route::view("/", "home");
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});
Route::fallback(function () {
    return view("404");
});
Route::post('/enquiryForm', 'EnquiryController@enquiryForm');
Route::view("enquiry", "enquiry");
Route::view("/contact-us", "contact-us");
Route::view("/about-us", "about-us");
Route::view("/gallery", "gallery");
Route::view("thank-you", "thank-you");
Route::view("/blogs", "blogs");
Route::view("/blog-details", "blog-details");
Route::view("/air-heater", "air-heater");
Route::view("/all-products", "all-products");
Route::view("/alkaline-heater", "alkaline-heater");
Route::view("/bobbin-heater", "bobbin-heater");
Route::view("/brass-heater", "brass-heater");
Route::view("/bth-heater", "bth-heater");
Route::view("/creamic-heater", "creamic-heater");
Route::view("/coil-heater", "coil-heater");
Route::view("/fin-tube-heater", "fin-tube-heater");
Route::view("/furnace-heater", "furnace-heater");
Route::view("/hd-heater", "hd-heater");
Route::view("/nozzle-heater", "nozzle-heater");
Route::view("/pencil-heater", "pencil-heater");
Route::view("/posline-heater", "posline-heater");
Route::view("/ring-heater", "ring-heater");
Route::view("/silica-tube-heater", "silica-tube-heater");
Route::view("/strip-heater", "strip-heater");
Route::view("/titanium-heater", "titanium-heater");
Route::view("/tubular-heater", "tubular-heater");
Route::view("/u-tube-heater", "u-tube-heater");
Route::view("/aluminium-casting-heater", "aluminium-casting-heater");
Route::view("/thermocouple-heater", "thermocouple-heater");
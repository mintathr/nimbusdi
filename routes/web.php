<?php

use App\Http\Controllers\WebNimController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */
/* Route::fallback(function () {
    return view('under-construction');
}); */

Route::get('/', fn () => view('under-construction'))->name('home');

/* Route::get('/', fn () => view('web-layout.pages.index'))->name('home');
Route::get('/cloudsuite-automotive', fn () => view('web-layout.pages.csa'))->name('page.csa');
Route::get('/cloudsuite-industrial-enterprise', fn () => view('web-layout.pages.csie'))->name('page.csie');
Route::get('/enterprise-asset-management', fn () => view('web-layout.pages.eam'))->name('page.eam');
Route::get('/mes', fn () => view('web-layout.pages.mes'))->name('page.mes');
Route::get('/factory-track', fn () => view('web-layout.pages.factory_track'))->name('page.factory.track');
Route::get('/erp-implementation', fn () => view('web-layout.pages.erp_implemen'))->name('page.erp.implemen');
Route::get('/cloud-migration-services', fn () => view('web-layout.pages.cloud_migration'))->name('page.cloud.migration');
Route::get('/local-maintenance-support', fn () => view('web-layout.pages.local_maintenance'))->name('page.local.maintenance');
Route::get('/about', fn () => view('web-layout.pages.about'))->name('about');
Route::get('contact-us', fn () => view('web-layout.pages.contact'))->name('contact');
 */

Route::get('/development-nimbus', fn () => view('web-layout.pages.index_tailwind'))->name('home.tailwind');
#Route::get('/erp-implementation-tailwind', fn () => view('web-layout.pages.erp_implemen_tailwind'))->name('page.erp.implemen.tailwind');
Route::post('contact-us', [WebNimController::class, 'store'])->name('contact.store');

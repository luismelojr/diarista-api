<?php

use App\Http\Controllers\Api\Diarists\GetDiaristsByZipCodeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
   Route::get('diaristas/localidades', GetDiaristsByZipCodeController::class)->name('diarists.by-zip-code');
});

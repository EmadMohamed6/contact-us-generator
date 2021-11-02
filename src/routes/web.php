<?php

use Emad\ContactUsPackage\Http\Controllers\ContactController;


Route::get('contact',[ContactController::class,'index'])->name('contact');
Route::post('contact',[ContactController::class,'send'])->name('contact.send')
?>

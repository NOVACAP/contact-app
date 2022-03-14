<?php

use App\Http\Controllers\ContactController;
use App\Models\Contact;
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
    return view('welcome');
});

//when not use controller file
// Route::get('/contacts', function() {
//     //return "<h1>All Contacts</h1>";
//     return view('contacts.index');
// })->name('contacts.index');

Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');

// Route::get('/contacts/create', function() {
//     //return "<h1>Add new Contact</h1>";
//     return view('contacts.create');
// })->name('contacts.create');
Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');

// Route::get('/contacts/{id}', function($id) {
//     $contact = Contact::find($id);
//     return view('contacts.show', compact('contact')); // ['contact' => $contact]
// })->name('contacts.show');

Route::get('/contacts/{id}', [ContactController::class, 'show'])->name('contacts.show');

Route::get('/contacts/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
Route::put('/contacts/{id}', [ContactController::class, 'update'])->name('contacts.update');
Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');

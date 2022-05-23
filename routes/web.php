<?php

use App\Http\Livewire\Constituency\DevelopmentActivities;
use App\Http\Livewire\Constituency\WelfairActivities;
use App\Http\Livewire\Contact;
use App\Http\Livewire\Events\GoodMorningDenduluru;
use App\Http\Livewire\Events\JaganMaata;
use App\Http\Livewire\Events\SkillUpDenduluru;
use App\Http\Livewire\Home\Home;
use App\Http\Livewire\Registration;
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

Route::get('/', Home::class)->name('home');
Route::get('/constituency/developement-activities', DevelopmentActivities::class)->name('development');
Route::get('/constituency/welfair-activities', WelfairActivities::class)->name('welfair');
Route::get('/events/good-morning-denduluru', GoodMorningDenduluru::class)->name('goodmorning');
Route::get('/events/skill-up-denduluru', SkillUpDenduluru::class)->name('skill');
Route::get('/events/jagan-maata-abbaya-bata', JaganMaata::class)->name('jagan');
Route::get('/contact', Contact::class)->name('contact');
Route::get('/registration', Registration::class)->name('registration');
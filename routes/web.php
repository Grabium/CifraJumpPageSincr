<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Page\ColeAquiController;
use App\Http\Controllers\Aplic\ConectAPIController;

/*
Aleluia by Orlando
    Am  G/B  C        F   E
Aleluia A..leluia Alelu...ia 
    Am  G/B  C       F E Am
Aleluia A..leluia Alelu...ia 
Am G F E
C#m7(5-) G#Maj7 Bm7M
Deixa acontecer naturalmente
DMaj7 G7M F#7M Bm7 Bbm7
Eu não quero ver você chorar
 Am7 D7(9) G7M F#7 Bm7
Deixa que  o amor encontre a gente
 D7(9) F#maj7 B

 https://paletadecolores.online/pt/vintage/
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', ColeAquiController::class);//chama __invoke(), que chama a página inicial.
Route::post('/changed_chords', ConectAPIController::class)->name('changed_chords');//chama __invoke(), que envia a requisição.


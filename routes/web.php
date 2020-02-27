<?php

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

/*ruta para arreglos 
multidimensionales*/

route::get('arreglom', function(){ 
    $paises = [ "Colombia"=> [
                                "Capital" => "Bogotá",
                                "Moneda" => "Peso",
                                "Población" => 50
                             ],
                "Perú" => [
                                "Capital" => "Lima",
                                "Moneda" => "Sol",
                                "Población" => 32                               
                          ],
                "Bolivia" =>[
                                "Capital" => "Lima",
                                "Moneda" => "Sol",
                                "Población" => 12
                            ]
                ];
/*
    echo "<pre>";            
    var_dump($paises);
    echo "</pre>";
*/
    //Recorrer el arreglo países
    foreach($paises as $pais => $informacion ){
        echo"<h1> $pais</h1>";
        echo $informacion["Capital"]. "<br/>";
        echo"<hr />";
    }
    
});



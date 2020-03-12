<?php

use App\Producto;

 /*   echo "<pre>";            
    var_dump($paises);
    echo "</pre>";

    //Recorrer el arreglo países
    foreach($paises as $pais => $informacion ){
        echo"<h1> $pais</h1>";
        echo $informacion["Capital"]. "<br/>";
        echo"<hr />";
    }*/

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

Route::get("pruebaprod",function(){
    //Insertar Producto
    $p->nombre="Bicicleta";
    $p->valor_unitario= 450.000;
    //guardar en BD
    $p->save();
} );

Route::get('nuevoproducto',function(){
//MOSTRAR EL FORMULARI0
return view('productos.create');

} );

Route::post('guardarproducto', function(){
//recibir los datos que vienen desde el formulario
    $p=new Producto();
    $p->nombre=$_POST["nombre"];
    $p->valor_unitario=$_POST["valor"];
    //guardar en BD
    $p->save();
    echo "Producto agregado correctamente al sistema";

/*echo"<pre>";
var_dump($_POST);
echo"</pre>";*/
});

route::get('arreglom', function(){ 
    $paises = [ "Colombia"=> [
                                "Capital" => "Bogotá",
                                "Moneda" => "Peso",
                                "Población" => 50,
                                "Ciudades"=>["Cali","Medellín"]
                             ],
                "Perú" => [
                                "Capital" => "Lima",
                                "Moneda" => "Sol",
                                "Población" => 32,
                                "Ciudades"=>["Cuzco","Arequipa"]                          
                          ],
                "Bolivia" =>[
                                "Capital" => "La Paz",
                                "Moneda" => "Boliviano",
                                "Población" => 12,
                                "Ciudades"=>["Cochabamba","Santacruz"]

                            ]
                ];
                return  view('paises')
                ->with('paises' , $paises);
} );





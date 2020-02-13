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

Route::get('/model',function(){
    //$products = \App\Product::all();//select * from products
//Active records.
    //$user = new \App\User();
    //   $user= \App\User::find(1);
    //   $user->name='Usuario Teste Editando';

    //   $user->save();
//return
      // return \App\User::all(); //-> retorna todos os usuario
      // \App\User::find(3) - retorna o usuário com base no id
    //   return \App\User::where('name', 'Prof. Zoila Carter')->get();
    // return \App\User::paginate(10);
//Mass Assigment - Atribuicao em Massa

    // $user = \App\User::create([
    //     'name' => 'Nanderson Castro',
    //     'email'=> 'email100@gmail.com',
    //     'password' => bcrypt('1234566')
    // ]);

    //MassUpdate

    // $user=\App\User::find(42);
    // $user= $user->update([
    //     'name' => 'Atualizando com Mass Update'
    // ]); //true or false

        $user = \App\User::find(4);

        return $user->store;


        return \App\User::all();
});


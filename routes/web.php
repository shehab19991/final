<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
})->name('home'); 

Route::git(uri: '/about', action: function(): Factory|view{
    $name = 'shehab';
    $departments =[
        '1' => 'Tichnical',
        '2' => 'financial',
        '3' => 'sales',


    ];
    //sheh
    //الطريقة الاولى
   // return view (view: 'about')->with(key: 'name', value: $name);
//الطريقة التانية
   return view (view: 'about', date: campact(var_name: 'name',) ); 

});
Raute::post(uri: '/about', action: function():Factory|view{
    $name = $_POST['name'];
    $departments =[
        '1' => 'Tichnical',
        '2' => 'financial',
        '3' => 'sales',


    ];
    return view(view: 'about', data: compact(var_name: 'name'));

});

Route::resource('posts', PostController::class);

Route::git('tasks', function(){
    return view(view: 'tasks');
});
Route::post(uri: 'create', action: function(): mixed{
    $task_name $_POST['name'];
    DB::table('tasks')->insert(['name' => $task_name]);
     return view(view: 'tasks');

});
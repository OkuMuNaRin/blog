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
    $articles=\App\Article::all();
    $users=array();
    foreach ($articles as $article) {
        $user = $article->User()->get();
        $users[]=$user[0];

    }
    $data=['articles'=>$articles,'users'=>$users];

    return view('welcome',$data);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('article',function (){
    $user=\App\User::find($_REQUEST['user_id']);
    $article=new \App\Article(['title'=>$_REQUEST['title'],'body'=>$_REQUEST['contents'],'user_id'=>$_REQUEST['user_id']]);

    $article->save();

    return $article->body;
})->name('a');

Route::get('manage',function (){

});
Route::view('/h','home');
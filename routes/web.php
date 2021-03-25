<?php

use Illuminate\Support\Facades\Route;



// makes a get request to view the "welcome" view
Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
    // 'articles' equals to App\Models\Article (so equals everything in the articles table in the database)
    // shows the about.php page. latest shows the 3 latest post first
    return view('about', [
        'articles' => App\Models\Article::take(3)->latest()->get()
    ]);
});

Route::get('/articles',  'App\Http\Controllers\ArticlesController@index')->name('articles.index');
Route::post('/articles', 'App\Http\Controllers\ArticlesController@store');
Route::get('/articles/create', 'App\Http\Controllers\ArticlesController@create');
// article must be the same name here as it is in the show method in the controller.
Route::get('/articles/{article}', 'App\Http\Controllers\ArticlesController@show')->name('articles.show');
// laravel is looking for an id the equals the one in the webpage to one in the database
Route::get('/articles/{article}/edit', 'App\Http\Controllers\ArticlesController@edit');
// this will run after the edit page is submitted
Route::put('/articles/{article}', 'App\Http\Controllers\ArticlesController@update');








// GET /videos          ---      shows some videos
// GET /videos/2        ---      shows one videos
// POST /videos         ---      saves the video
// GET /videos/create   ---      a place to create a video
// GET /videos/2/edit   ---      shows a form to edit the video
// put /videos/2        ---      Does updates
// DELETE /videos/2     ---      deletes







// the old way to do it:    Route::get('/posts/{post}', 'PostsController@show');
//Route::get('/posts/{post}', 'App\Http\Controllers\PostsController@show');



/*
// this can be done by just using a controller as shown below
// This will get whatever is after posts/ (website.com/posts/123  -  will return 123). Known as a wildlcard
// $post is equal to the wildcard ({post})
Route::get('posts/{post}', function ($post) {
    // this just simulates a database
    $posts = [
        'my-first-post' => 'Hello, this is my first blog post',
        'my-second-post' => "Now I am getting the hang of this blogging thing"
    ];
    // this checks if the wildcard exsist in our database or not
    if (! array_key_exists($post, $posts)) {
        abort(404, 'Sorry, that post was not found.');
    }
    // returns a view called post and passes the value of the wildcard (my-first-post) if the wildcard is found in our database.
    return view('post', [
        // post variable is equal to the value after website.com/posts/
        'post' => $posts[$post]
    ]);

});


//This is the code above done a different way.
// the old way to do it:    Route::get('/posts/{post}', 'PostsController@show');
// A method is needed for every controller. This one is "show". below is the only thing needed to show the page above.
Route::get('/posts/{post}', 'App\Http\Controllers\PostsController@show');
*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

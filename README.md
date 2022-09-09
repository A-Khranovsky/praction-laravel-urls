## Vocation 
Praction with transformations of the routes, urls. Praction with middleware,
signed links, temporart signed links. Editing DB record thorogh PATCH request, handly made
erorr view.

## Description
Project uses DB table posts (title, content). At home page it outputs titles and 
edit as links. Title link provides info what laravel's function:

* url('/post/{$post->id}')
* url()->current() 
* url()->full()
* url()->previous()
* route('tmp', ['post' => $post])
* URL::signedRoute('tmp', ['id' => $post])
* URL::temporarySignedRoute('tmp', now()->addMinutes(1), ['id' => $post])
* action([\App\Http\Controllers\PostController::class, 'index'], ['id' => $post->id])

has returned, the content itself (of first record in table posts), links:

* <-Previous
* This by signed temporary link
* Next->
* Home
* This by post_reversed route.

"This by signed temporary link" opens this post by temporay singned link. If time is reached out
project outputs view with ane error message (handly made not Laravle's).

"This by post_reversed route" opens this post by run-time generated url(route), using middleware and 
URL::default.

In home by link edit enabled edition of post through UI and route::patch.

## How to run
* Clone the repository
* ```docker-compose up -d```
* ```docker exec -it 50_php-apache_1 bash```
* ```php artisan migrate:fresh --seed```
* open http://localhost

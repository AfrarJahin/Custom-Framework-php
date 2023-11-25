<?php
use Afra\App\Http\Controllers\PostController;
use Afra\App\Providers\Route;


$route = new Route();

$route->get('posts', [PostController::class, 'index']);

echo $route->dispatch();
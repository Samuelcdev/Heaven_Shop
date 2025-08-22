<?php

use App\Core\Router;

Router::get('/', 'HomeController@homeView');
Router::get('/productos', 'ProductController@index');

<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/login', 'LoginController@login');
$router->get('/cadastro', 'LoginController@cadastro');
$router->post('/loginAction', 'LoginController@loginAction');
$router->post('/cadastroAction', 'LoginController@cadastroAction');
$router->get('/logout', 'LoginController@logout');
$router->get('/home', 'HomeController@home');
$router->post('/postagem/{id}', 'PostController@feedAction');
$router->get('/perfil', 'HomeController@perfil');
$router->post('/search_Action', 'SearchingController@search');



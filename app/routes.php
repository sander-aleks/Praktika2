<?php

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');
$router->get('tasks', 'TasksController@index');
$router->get('blogs', 'BlogController@blog');
$router->get('add', 'PagesController@add');
$router->get('login', 'PagesController@login');
$router->get('alad', 'PagesController@alad');
// $router->get('edit', 'PagesController@edit');

$router->post('task', 'TasksController@store');
$router->post('delete','TasksController@delete');
$router->post('edit','PagesController@edit');
$router->post('sedit','TasksController@edit');
$router->post('home', 'PagesController@home');
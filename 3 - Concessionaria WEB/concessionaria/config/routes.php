<?php

use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;


Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {
    $routes->setExtensions(['json']);
    $routes->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);    
    $routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);
    

    //estado routes
    $routes->resources('estado');
    $routes->get('/estado', ['controller' => 'estado', 'action' => 'index']); 
    $routes->get('/estado/:id', ['controller' => 'estado', 'action' => 'view']);  
    $routes->post('/estado', ['controller' => 'estado', 'action' => 'add']);
    $routes->patch('/estado/id', ['controller' => 'estado', 'action' => 'edit']);
    $routes->options('/estado/id', ['controller' => 'estado', 'action' => 'delete']);

    //fabricantecarro routes
    $routes->resources('fabricantecarro');
    $routes->get('/fabricantecarro', ['controller' => 'fabricantecarro', 'action' => 'index']); 
    $routes->get('/fabricantecarro/:id', ['controller' => 'fabricantecarro', 'action' => 'view']);  
    $routes->post('/fabricantecarro', ['controller' => 'fabricantecarro', 'action' => 'add']);
    $routes->patch('/fabricantecarro/id', ['controller' => 'fabricantecarro', 'action' => 'edit']);
    $routes->options('/fabricantecarro/id', ['controller' => 'fabricantecarro', 'action' => 'delete']);


    //fabricanteitem routes
    $routes->resources('fabricanteitem');
    $routes->get('/fabricanteitem', ['controller' => 'fabricanteitem', 'action' => 'index']); 
    $routes->get('/fabricanteitem/:id', ['controller' => 'fabricanteitem', 'action' => 'view']);  
    $routes->post('/fabricanteitem', ['controller' => 'fabricanteitem', 'action' => 'add']);
    $routes->patch('/fabricanteitem/id', ['controller' => 'fabricanteitem', 'action' => 'edit']);
    $routes->options('/fabricanteitem/id', ['controller' => 'fabricanteitem', 'action' => 'delete']);

    
    
    
    
    $routes->fallbacks(DashedRoute::class);
});


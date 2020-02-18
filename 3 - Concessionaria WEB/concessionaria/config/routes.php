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

    //cidade routes
    $routes->resources('cidade');
    $routes->get('/cidade', ['controller' => 'cidade', 'action' => 'index']); 
    $routes->get('/cidade/:id', ['controller' => 'cidade', 'action' => 'view']);  
    $routes->post('/cidade', ['controller' => 'cidade', 'action' => 'add']);
    $routes->patch('/cidade/id', ['controller' => 'cidade', 'action' => 'edit']);
    $routes->options('/cidade/id', ['controller' => 'cidade', 'action' => 'delete']);

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

    //item routes
    $routes->resources('item');
    $routes->get('/item', ['controller' => 'item', 'action' => 'index']); 
    $routes->get('/item/:id', ['controller' => 'item', 'action' => 'view']);  
    $routes->post('/item', ['controller' => 'item', 'action' => 'add']);
    $routes->patch('/item/id', ['controller' => 'item', 'action' => 'edit']);
    $routes->options('/item/id', ['controller' => 'item', 'action' => 'delete']);

    

    
    
    
    
    $routes->fallbacks(DashedRoute::class);
});


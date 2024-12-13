<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Ckeditor::index');
$routes->post('/upload/image', 'Ckeditor::save');
$routes->get('/file-manager', 'SimpleFileManagerCkEditor::index');
$routes->post('/file-manager', 'SimpleFileManagerCkEditor::delete');

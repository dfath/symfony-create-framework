<?php
require_once __DIR__.'/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$response = new Response();
$response->setStatusCode(404);
$response->setContent('Not Found');
$response->send();

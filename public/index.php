<?php

require_once(__DIR__ . '/../vendor/autoload.php');

use Smarty\Smarty;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;

// Initialize Smarty
$smarty = new Smarty();
$smarty->setTemplateDir(__DIR__ . '/../templates');
$smarty->setCompileDir(__DIR__ . '/../templates_c');
$smarty->setCacheDir(__DIR__ . '/../cache');
$smarty->setConfigDir(__DIR__ . '/../config/smarty');

$request = Request::createFromGlobals();
$context = new RequestContext();
$context->fromRequest($request);

require_once(__DIR__ . '/../config/database.php');
require_once(__DIR__ . '/../config/validation.php');
$routes = require __DIR__  . '/../config/routes.php';
$matcher = new UrlMatcher($routes, $context);

try {
    $parameters = $matcher->match($request->getPathInfo());

    if (isset($parameters['_controller'])) {
        if (is_array($parameters['_controller'])) {
            // Handle array format
            list($controller, $method) = $parameters['_controller'];
        } elseif (is_string($parameters['_controller'])) {
            // Handle string format
            list($controller, $method) = explode('::', $parameters['_controller']);
        } else {
            throw new Exception('Invalid _controller format.');
        }

        // Extract additional route parameters (e.g., id) and pass them to the controller method
        unset($parameters['_controller'], $parameters['_route']);
        $response = call_user_func_array([new $controller($smarty), $method], array_merge([$request], $parameters));
    } else {
        throw new Exception('No _controller defined.');
    }
} catch (Exception $e) {
    $response = new Response('Not Found: ' . $e->getMessage(), 404);
}

$response->send();

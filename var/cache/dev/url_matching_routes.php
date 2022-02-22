<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/canal/findAll' => [[['_route' => 'CanalAll_show', '_controller' => 'App\\Controller\\CanalController::findCanalByAll'], null, null, null, false, false, null]],
        '/mapanav' => [[['_route' => 'mapa_nav', '_controller' => 'App\\Controller\\MapaNavController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\RootController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/stream' => [[['_route' => 'stream', '_controller' => 'App\\Controller\\StreamController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/canal/(?'
                    .'|precio/([^/]++)(*:67)'
                    .'|find/([^/]++)(*:87)'
                    .'|crear/([^/]++)(*:108)'
                .')'
                .'|/user/edit/([^/]++)(*:136)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        67 => [[['_route' => 'precioCanal_show', '_controller' => 'App\\Controller\\CanalController::findPrecioByAuthor'], ['author'], null, null, false, true, null]],
        87 => [[['_route' => 'CanalAuthor_show', '_controller' => 'App\\Controller\\CanalController::findCanalByAuthor'], ['author'], null, null, false, true, null]],
        108 => [[['_route' => 'CanalAdd', '_controller' => 'App\\Controller\\CanalController::addCanal'], ['id'], null, null, false, true, null]],
        136 => [
            [['_route' => 'editUser', '_controller' => 'App\\Controller\\UserController::editUset'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

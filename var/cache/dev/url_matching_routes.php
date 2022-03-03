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
        '/mapaNav' => [[['_route' => 'mapa_nav', '_controller' => 'App\\Controller\\MapaNavController::index'], null, null, null, false, false, null]],
        '/pdf' => [[['_route' => 'p_d_f', '_controller' => 'App\\Controller\\PDFController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\RootController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/c(?'
                    .'|anal/(?'
                        .'|precio/([^/]++)(*:70)'
                        .'|find/([^/]++)(*:90)'
                        .'|crear/([^/]++)(*:111)'
                    .')'
                    .'|heck/(?'
                        .'|email/([^/]++)(*:142)'
                        .'|user/([^/]++)(*:163)'
                    .')'
                .')'
                .'|/stream/([^/]++)(*:189)'
                .'|/user/edit/([^/]++)(*:216)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        70 => [[['_route' => 'precioCanal_show', '_controller' => 'App\\Controller\\CanalController::findPrecioByAuthor'], ['author'], null, null, false, true, null]],
        90 => [[['_route' => 'CanalAuthor_show', '_controller' => 'App\\Controller\\CanalController::findCanalByAuthor'], ['author'], null, null, false, true, null]],
        111 => [[['_route' => 'CanalAdd', '_controller' => 'App\\Controller\\CanalController::addCanal'], ['id'], null, null, false, true, null]],
        142 => [[['_route' => 'checkEmail', '_controller' => 'App\\Controller\\UserController::checkEmail'], ['value'], null, null, false, true, null]],
        163 => [[['_route' => 'checkUser', '_controller' => 'App\\Controller\\UserController::checkUser'], ['value'], null, null, false, true, null]],
        189 => [[['_route' => 'stream', '_controller' => 'App\\Controller\\StreamController::index'], ['canalId'], null, null, false, true, null]],
        216 => [
            [['_route' => 'editUser', '_controller' => 'App\\Controller\\UserController::editUset'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

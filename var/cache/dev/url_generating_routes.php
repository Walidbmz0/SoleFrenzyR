<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_accessories' => [[], ['_controller' => 'App\\Controller\\AccessoriesController::index'], [], [['text', '/accessories']], [], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], [], []],
    'basket_index' => [[], ['_controller' => 'App\\Controller\\BasketController::index'], [], [['text', '/mon-panier']], [], [], []],
    'basket_add' => [['id'], ['_controller' => 'App\\Controller\\BasketController::addToBasket'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/mon-panier/add']], [], [], []],
    'basket_remove' => [['id'], ['_controller' => 'App\\Controller\\BasketController::removeBasket'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/mon-panier/remove']], [], [], []],
    'basket_decrease' => [['id'], ['_controller' => 'App\\Controller\\BasketController::decrease'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/mon-panier/decrease']], [], [], []],
    'basket_removeAll' => [[], ['_controller' => 'App\\Controller\\BasketController::removeBasketAll'], [], [['text', '/mon-panier/removeAll']], [], [], []],
    'app_clothes' => [[], ['_controller' => 'App\\Controller\\ClothesController::index'], [], [['text', '/clothes']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'order_index' => [[], ['_controller' => 'App\\Controller\\OrderController::index'], [], [['text', '/order/create']], [], [], []],
    'order_prepare' => [[], ['_controller' => 'App\\Controller\\OrderController::prepareOrder'], [], [['text', '/order/verify']], [], [], []],
    'payment_stripe' => [['reference'], ['_controller' => 'App\\Controller\\PaymentController::stripeCheckout'], [], [['variable', '/', '[^/]++', 'reference', true], ['text', '/order/create-session-stripe']], [], [], []],
    'payment_success' => [['reference'], ['_controller' => 'App\\Controller\\PaymentController::StripeSuccess'], [], [['variable', '/', '[^/]++', 'reference', true], ['text', '/order/success']], [], [], []],
    'payment_error' => [['reference'], ['_controller' => 'App\\Controller\\PaymentController::StripError'], [], [['variable', '/', '[^/]++', 'reference', true], ['text', '/order/error']], [], [], []],
    'product_index' => [[], ['_controller' => 'App\\Controller\\ProductController::index'], [], [['text', '/product']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_verify_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_shoes' => [[], ['_controller' => 'App\\Controller\\ShoesController::index'], [], [['text', '/shoes']], [], [], []],
];

<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/choose' => [[['_route' => 'admin_choose', '_controller' => 'App\\Controller\\AdminController::chooseAssociation'], null, null, null, false, false, null]],
        '/associations' => [[['_route' => 'association', '_controller' => 'App\\Controller\\AssociationController::index'], null, null, null, false, false, null]],
        '/contact-us' => [[['_route' => 'app_contact_us', '_controller' => 'App\\Controller\\ContactUsController::index'], null, null, null, false, false, null]],
        '/faq' => [[['_route' => 'app_faq', '_controller' => 'App\\Controller\\FaqController::index'], null, null, null, false, false, null]],
        '/' => [
            [['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null],
            [['_route' => 'base', '_controller' => 'App\\Controller\\HomeController::isAdmin'], null, null, null, false, false, null],
        ],
        '/ajax_endpoint' => [[['_route' => 'data_user', '_controller' => 'App\\Controller\\HomeController::getDataFromUser'], null, null, null, false, false, null]],
        '/info-saisies' => [[['_route' => 'app_info_saisies', '_controller' => 'App\\Controller\\InfoSaisiesController::index'], null, null, null, false, false, null]],
        '/mailer' => [[['_route' => 'app_mailer', '_controller' => 'App\\Controller\\MailerController::index'], null, null, null, false, false, null]],
        '/moncompte' => [[['_route' => 'mon_compte', '_controller' => 'App\\Controller\\MonCompteController::index'], null, null, null, false, false, null]],
        '/conditions-utilisation' => [[['_route' => 'utilisation', '_controller' => 'App\\Controller\\RGPDController::index'], null, null, null, false, false, null]],
        '/recapitulatif' => [[['_route' => 'recapitulatif', '_controller' => 'App\\Controller\\RecapitulatifController::index'], null, null, null, false, false, null]],
        '/assocRegister' => [[['_route' => 'register_association', '_controller' => 'App\\Controller\\RegisterAssociationController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/saisie' => [[['_route' => 'saisie', '_controller' => 'App\\Controller\\SaisieController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/superadmin' => [[['_route' => 'super_admin', '_controller' => 'App\\Controller\\SuperAdminController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|pi(?'
                        .'|/\\.well\\-known/genid/([^/]++)(*:46)'
                        .'|(?:/(index)(?:\\.([^/]++))?)?(*:81)'
                        .'|/(?'
                            .'|docs(?:\\.([^/]++))?(*:111)'
                            .'|contexts/([^.]+)(?:\\.(jsonld))?(*:150)'
                        .')'
                    .')'
                    .'|dmin/([^/]++)(?'
                        .'|(*:176)'
                        .'|/(?'
                            .'|user/(?'
                                .'|([^/]++)(*:204)'
                                .'|remove/([^/]++)(*:227)'
                                .'|([^/]++)/remove/([^/]++)(*:259)'
                            .')'
                            .'|changeLogo(*:278)'
                            .'|ajax_endpoint(*:299)'
                        .')'
                    .')'
                    .'|ssociations/(?'
                        .'|adherer/([^/]++)(*:340)'
                        .'|quitter/([^/]++)(*:364)'
                        .'|([^/]++)(*:380)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:421)'
                    .'|wdt/([^/]++)(*:441)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:487)'
                            .'|router(*:501)'
                            .'|exception(?'
                                .'|(*:521)'
                                .'|\\.css(*:534)'
                            .')'
                        .')'
                        .'|(*:544)'
                    .')'
                .')'
                .'|/re(?'
                    .'|capitulatif/(?'
                        .'|remove/([^/]++)(*:590)'
                        .'|pdf/([^/]++)(*:610)'
                        .'|([^/]++)(*:626)'
                    .')'
                    .'|set\\-password/reset(?:/([^/]++))?(*:668)'
                .')'
                .'|/endPointCharges/([^/]++)(*:702)'
                .'|/superadmin/([^/]++)(?'
                    .'|(*:733)'
                    .'|/(?'
                        .'|user/([^/]++)(?'
                            .'|(*:761)'
                            .'|/delete/([^/]++)(*:785)'
                        .')'
                        .'|deleteUser/([^/]++)(*:813)'
                        .'|change/admin(?'
                            .'|(*:836)'
                            .'|/([^/]++)/endpoint(*:862)'
                        .')'
                        .'|ajax_endpoint(*:884)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        46 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        81 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        111 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        150 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        176 => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::index'], ['idAssoc'], null, null, false, true, null]],
        204 => [[['_route' => 'admin_user', '_controller' => 'App\\Controller\\AdminController::userInfo'], ['idAssoc', 'id'], null, null, false, true, null]],
        227 => [[['_route' => 'remove_user', '_controller' => 'App\\Controller\\AdminController::removeUserFromAssoc'], ['idAssoc', 'id'], null, null, false, true, null]],
        259 => [[['_route' => 'admin_remove', '_controller' => 'App\\Controller\\AdminController::RemoveActionEndpoint'], ['assocId', 'userId', 'id'], null, null, false, true, null]],
        278 => [[['_route' => 'change_logo', '_controller' => 'App\\Controller\\AdminController::changeLogo'], ['idAssoc'], null, null, false, false, null]],
        299 => [[['_route' => 'data_user_admin', '_controller' => 'App\\Controller\\AdminController::DataAdminActions'], ['idAssoc'], null, null, false, false, null]],
        340 => [[['_route' => 'association_adherer', '_controller' => 'App\\Controller\\AssociationController::adhererAssociation'], ['id'], null, null, false, true, null]],
        364 => [[['_route' => 'association_quitter', '_controller' => 'App\\Controller\\AssociationController::quitterAssociation'], ['id'], null, null, false, true, null]],
        380 => [[['_route' => 'unique_association', '_controller' => 'App\\Controller\\AssociationIdController::index'], ['id'], null, null, false, true, null]],
        421 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        441 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        487 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        501 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        521 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        534 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        544 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        590 => [[['_route' => 'recapitulatif_remove', '_controller' => 'App\\Controller\\RecapitulatifController::removeAction'], ['id'], null, null, false, true, null]],
        610 => [[['_route' => 'recapitulatif_pdf', '_controller' => 'App\\Controller\\RecapitulatifController::pdfAction'], ['id'], null, null, false, true, null]],
        626 => [[['_route' => 'recapitulatif_more', '_controller' => 'App\\Controller\\RecapitulatifController::presiseAction'], ['id'], null, null, false, true, null]],
        668 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        702 => [[['_route' => 'end_point_charges', '_controller' => 'App\\Controller\\SaisieController::superAdminEndPoint'], ['values'], null, null, false, true, null]],
        733 => [[['_route' => 'super_admin_assoc', '_controller' => 'App\\Controller\\SuperAdminController::assoc'], ['id'], null, null, false, true, null]],
        761 => [[['_route' => 'super_admin_user', '_controller' => 'App\\Controller\\SuperAdminController::user'], ['id', 'userID'], null, null, false, true, null]],
        785 => [[['_route' => 'super_admin_action_delete', '_controller' => 'App\\Controller\\SuperAdminController::DeleteActionEndPoint'], ['idAssoc', 'userId', 'id'], null, null, false, true, null]],
        813 => [[['_route' => 'super_admin_user_delete', '_controller' => 'App\\Controller\\SuperAdminController::deleteUser'], ['id', 'userID'], null, null, false, true, null]],
        836 => [[['_route' => 'super_admin_action_change_admin', '_controller' => 'App\\Controller\\SuperAdminController::changeAdmin'], ['id'], null, null, false, false, null]],
        862 => [[['_route' => 'super_admin_action_change_admin_endpoint', '_controller' => 'App\\Controller\\SuperAdminController::changeAdminEndpoint'], ['id', 'userId'], null, null, false, false, null]],
        884 => [
            [['_route' => 'data_user_super_admin', '_controller' => 'App\\Controller\\SuperAdminController::DataSuperAdminActions'], ['idAssoc'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/choose' => [[['_route' => 'admin_choose', '_controller' => 'App\\Controller\\AdminController::chooseAssociation'], null, null, null, false, false, null]],
        '/associations' => [[['_route' => 'association', '_controller' => 'App\\Controller\\AssociationController::index'], null, null, null, false, false, null]],
        '/contact-us' => [[['_route' => 'app_contact_us', '_controller' => 'App\\Controller\\ContactUsController::index'], null, null, null, false, false, null]],
        '/faq' => [[['_route' => 'app_faq', '_controller' => 'App\\Controller\\FaqController::index'], null, null, null, false, false, null]],
        '/' => [
            [['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null],
            [['_route' => 'base', '_controller' => 'App\\Controller\\HomeController::isAdmin'], null, null, null, false, false, null],
        ],
        '/ajax_endpoint' => [[['_route' => 'data_user', '_controller' => 'App\\Controller\\HomeController::getDataFromUser'], null, null, null, false, false, null]],
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
                .'|/re(?'
                    .'|capitulatif/(?'
                        .'|remove/([^/]++)(*:426)'
                        .'|pdf/([^/]++)(*:446)'
                        .'|([^/]++)(*:462)'
                    .')'
                    .'|set\\-password/reset(?:/([^/]++))?(*:504)'
                .')'
                .'|/endPointCharges/([^/]++)(*:538)'
                .'|/superadmin/([^/]++)(?'
                    .'|(*:569)'
                    .'|/(?'
                        .'|user/([^/]++)(?'
                            .'|(*:597)'
                            .'|/delete/([^/]++)(*:621)'
                        .')'
                        .'|deleteUser/([^/]++)(*:649)'
                        .'|change/admin(?'
                            .'|(*:672)'
                            .'|/([^/]++)/endpoint(*:698)'
                        .')'
                        .'|ajax_endpoint(*:720)'
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
        426 => [[['_route' => 'recapitulatif_remove', '_controller' => 'App\\Controller\\RecapitulatifController::removeAction'], ['id'], null, null, false, true, null]],
        446 => [[['_route' => 'recapitulatif_pdf', '_controller' => 'App\\Controller\\RecapitulatifController::pdfAction'], ['id'], null, null, false, true, null]],
        462 => [[['_route' => 'recapitulatif_more', '_controller' => 'App\\Controller\\RecapitulatifController::presiseAction'], ['id'], null, null, false, true, null]],
        504 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        538 => [[['_route' => 'end_point_charges', '_controller' => 'App\\Controller\\SaisieController::superAdminEndPoint'], ['values'], null, null, false, true, null]],
        569 => [[['_route' => 'super_admin_assoc', '_controller' => 'App\\Controller\\SuperAdminController::assoc'], ['id'], null, null, false, true, null]],
        597 => [[['_route' => 'super_admin_user', '_controller' => 'App\\Controller\\SuperAdminController::user'], ['id', 'userID'], null, null, false, true, null]],
        621 => [[['_route' => 'super_admin_action_delete', '_controller' => 'App\\Controller\\SuperAdminController::DeleteActionEndPoint'], ['idAssoc', 'userId', 'id'], null, null, false, true, null]],
        649 => [[['_route' => 'super_admin_user_delete', '_controller' => 'App\\Controller\\SuperAdminController::deleteUser'], ['id', 'userID'], null, null, false, true, null]],
        672 => [[['_route' => 'super_admin_action_change_admin', '_controller' => 'App\\Controller\\SuperAdminController::changeAdmin'], ['id'], null, null, false, false, null]],
        698 => [[['_route' => 'super_admin_action_change_admin_endpoint', '_controller' => 'App\\Controller\\SuperAdminController::changeAdminEndpoint'], ['id', 'userId'], null, null, false, false, null]],
        720 => [
            [['_route' => 'data_user_super_admin', '_controller' => 'App\\Controller\\SuperAdminController::DataSuperAdminActions'], ['idAssoc'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_wdt']), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_search_results']), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler']), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_router']), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception']), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception_css']), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_twig_error_test']), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

            // gregwar_captcha.generate_captcha
            if (0 === strpos($pathinfo, '/_gcb/generate-captcha') && preg_match('#^/_gcb/generate\\-captcha/(?P<key>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'gregwar_captcha.generate_captcha']), array (  '_controller' => 'Gregwar\\CaptchaBundle\\Controller\\CaptchaController::generateCaptchaAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/reclamation')) {
                // reclamation_index
                if ('/reclamation' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'FrontBundle\\Controller\\reclamationController::indexAction',  '_route' => 'reclamation_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_reclamation_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'reclamation_index'));
                    }

                    return $ret;
                }
                not_reclamation_index:

                // reclamation_new
                if ('/reclamation/new' === $pathinfo) {
                    return array (  '_controller' => 'FrontBundle\\Controller\\reclamationController::newAction',  '_route' => 'reclamation_new',);
                }

                // reclamation_show
                if (preg_match('#^/reclamation/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'reclamation_show']), array (  '_controller' => 'FrontBundle\\Controller\\reclamationController::showAction',));
                }

                // reclamation_edit
                if (preg_match('#^/reclamation/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'reclamation_edit']), array (  '_controller' => 'FrontBundle\\Controller\\reclamationController::editAction',));
                }

                // reclamation_delete
                if (preg_match('#^/reclamation/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'reclamation_delete']), array (  '_controller' => 'FrontBundle\\Controller\\reclamationController::deleteAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if ('/register' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_fos_user_registration_register;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                    }

                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_registration_register;
                    }

                    return $ret;
                }
                not_fos_user_registration_register:

                // fos_user_registration_check_email
                if ('/register/check-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_check_email;
                    }

                    return $ret;
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_registration_confirm']), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_fos_user_registration_confirm;
                        }

                        return $ret;
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ('/register/confirmed' === $pathinfo) {
                        $ret = array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_fos_user_registration_confirmed;
                        }

                        return $ret;
                    }
                    not_fos_user_registration_confirmed:

                }

            }

            elseif (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ('/resetting/request' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_resetting_request;
                    }

                    return $ret;
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_resetting_reset']), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_resetting_reset;
                    }

                    return $ret;
                }
                not_fos_user_resetting_reset:

                // fos_user_resetting_send_email
                if ('/resetting/send-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_fos_user_resetting_send_email;
                    }

                    return $ret;
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ('/resetting/check-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_resetting_check_email;
                    }

                    return $ret;
                }
                not_fos_user_resetting_check_email:

            }

        }

        elseif (0 === strpos($pathinfo, '/conge')) {
            // conge_index
            if ('/conge/listeConges' === $pathinfo) {
                return array (  '_controller' => 'BackBundle\\Controller\\congeController::indexAction',  '_route' => 'conge_index',);
            }

            // conge_new
            if ('/conge/new' === $pathinfo) {
                return array (  '_controller' => 'BackBundle\\Controller\\congeController::newAction',  '_route' => 'conge_new',);
            }

            // conge_show
            if (preg_match('#^/conge/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'conge_show']), array (  '_controller' => 'BackBundle\\Controller\\congeController::showAction',));
            }

            // conge_edit
            if (preg_match('#^/conge/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'conge_edit']), array (  '_controller' => 'BackBundle\\Controller\\congeController::editAction',));
            }

            // conge_delete
            if (preg_match('#^/conge/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'conge_delete']), array (  '_controller' => 'BackBundle\\Controller\\congeController::deleteAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/employee')) {
            // employee_index
            if ('/employee' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'BackBundle\\Controller\\employeeController::indexAction',  '_route' => 'employee_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_employee_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'employee_index'));
                }

                return $ret;
            }
            not_employee_index:

            // employee_new
            if ('/employee/new' === $pathinfo) {
                return array (  '_controller' => 'BackBundle\\Controller\\employeeController::newAction',  '_route' => 'employee_new',);
            }

            // employee_show
            if (preg_match('#^/employee/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'employee_show']), array (  '_controller' => 'BackBundle\\Controller\\employeeController::showAction',));
            }

            // employee_edit
            if (preg_match('#^/employee/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'employee_edit']), array (  '_controller' => 'BackBundle\\Controller\\employeeController::editAction',));
            }

            // employee_delete
            if (preg_match('#^/employee/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'employee_delete']), array (  '_controller' => 'BackBundle\\Controller\\employeeController::deleteAction',));
            }

        }

        // err
        if ('/err' === $pathinfo) {
            $ret = array (  '_controller' => 'fos_user.security.controller:ErrAction',  '_route' => 'err',);
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_err;
            }

            return $ret;
        }
        not_err:

        if (0 === strpos($pathinfo, '/ba')) {
            // back_homepage
            if ('/ba' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'BackBundle\\Controller\\DefaultController::indexAction',  '_route' => 'back_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_back_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'back_homepage'));
                }

                return $ret;
            }
            not_back_homepage:

            if (0 === strpos($pathinfo, '/ba/del')) {
                // delete
                if (preg_match('#^/ba/del/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'delete']), array (  '_controller' => 'BackBundle\\Controller\\employeeController::deleteAction',));
                }

                // deleteC
                if (0 === strpos($pathinfo, '/ba/delC') && preg_match('#^/ba/delC/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'deleteC']), array (  '_controller' => 'BackBundle\\Controller\\congeController::deleteAction',));
                }

                // deletebon
                if (0 === strpos($pathinfo, '/ba/deletebon') && preg_match('#^/ba/deletebon/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'deletebon']), array (  '_controller' => 'BackBundle\\Controller\\BonReductionController::deleteAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/ba/depot')) {
                // depot_index
                if ('/ba/depot' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'BackBundle\\Controller\\DepotController::indexAction',  '_route' => 'depot_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_depot_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'depot_index'));
                    }

                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_depot_index;
                    }

                    return $ret;
                }
                not_depot_index:

                // depot_show
                if (preg_match('#^/ba/depot/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'depot_show']), array (  '_controller' => 'BackBundle\\Controller\\DepotController::showAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_depot_show;
                    }

                    return $ret;
                }
                not_depot_show:

                // depot_new
                if ('/ba/depot/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'BackBundle\\Controller\\DepotController::newAction',  '_route' => 'depot_new',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_depot_new;
                    }

                    return $ret;
                }
                not_depot_new:

                // depot_edit
                if (preg_match('#^/ba/depot/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'depot_edit']), array (  '_controller' => 'BackBundle\\Controller\\DepotController::editAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_depot_edit;
                    }

                    return $ret;
                }
                not_depot_edit:

                // depot_delete
                if (preg_match('#^/ba/depot/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'depot_delete']), array (  '_controller' => 'BackBundle\\Controller\\DepotController::deleteAction',));
                    if (!in_array($requestMethod, ['DELETE'])) {
                        $allow = array_merge($allow, ['DELETE']);
                        goto not_depot_delete;
                    }

                    return $ret;
                }
                not_depot_delete:

                // depot_n_verif
                if ('/ba/depot/verif' === $pathinfo) {
                    $ret = array (  '_controller' => 'BackBundle\\Controller\\DepotController::verifNAction',  '_route' => 'depot_n_verif',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_depot_n_verif;
                    }

                    return $ret;
                }
                not_depot_n_verif:

                // send_notification
                if ('/ba/depot/send-notification' === $pathinfo) {
                    $ret = array (  '_controller' => 'BackBundle\\Controller\\DepotController::sendNotificationAction',  '_route' => 'send_notification',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_send_notification;
                    }

                    return $ret;
                }
                not_send_notification:

                // filterN
                if ('/ba/depot/filterN' === $pathinfo) {
                    $ret = array (  '_controller' => 'BackBundle\\Controller\\DepotController::FilterNAction',  '_route' => 'filterN',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_filterN;
                    }

                    return $ret;
                }
                not_filterN:

                // filterC
                if ('/ba/depot/filterC' === $pathinfo) {
                    $ret = array (  '_controller' => 'BackBundle\\Controller\\DepotController::FilterCAction',  '_route' => 'filterC',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_filterC;
                    }

                    return $ret;
                }
                not_filterC:

                // count
                if ('/ba/depot/count' === $pathinfo) {
                    $ret = array (  '_controller' => 'BackBundle\\Controller\\DepotController::countAction',  '_route' => 'count',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_count;
                    }

                    return $ret;
                }
                not_count:

            }

            elseif (0 === strpos($pathinfo, '/ba/a')) {
                // accepter
                if (0 === strpos($pathinfo, '/ba/accepter') && preg_match('#^/ba/accepter/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'accepter']), array (  '_controller' => 'BackBundle\\Controller\\congeController::AccepterCongeAction',));
                }

                if (0 === strpos($pathinfo, '/ba/aff')) {
                    // affrobot
                    if ('/ba/affrobot' === $pathinfo) {
                        return array (  '_controller' => 'BackBundle\\Controller\\DefaultController::affAction',  '_route' => 'affrobot',);
                    }

                    if (0 === strpos($pathinfo, '/ba/affiche')) {
                        if (0 === strpos($pathinfo, '/ba/afficher')) {
                            if (0 === strpos($pathinfo, '/ba/afficher_')) {
                                // afficher_categorie
                                if ('/ba/afficher_categorie' === $pathinfo) {
                                    return array (  '_controller' => 'BackBundle\\Controller\\CategorieController::AfficheAction',  '_route' => 'afficher_categorie',);
                                }

                                // afficher_produit
                                if ('/ba/afficher_produit' === $pathinfo) {
                                    return array (  '_controller' => 'BackBundle\\Controller\\ProduitController::AfficheAction',  '_route' => 'afficher_produit',);
                                }

                                // afficher_stock
                                if ('/ba/afficher_stock' === $pathinfo) {
                                    return array (  '_controller' => 'BackBundle\\Controller\\StockController::AfficheAction',  '_route' => 'afficher_stock',);
                                }

                            }

                            // affichercommande
                            if ('/ba/affichercommande' === $pathinfo) {
                                return array (  '_controller' => 'BackBundle\\Controller\\CommandeController::AfficheCommandeAction',  '_route' => 'affichercommande',);
                            }

                            // afficherTypeVehicules
                            if ('/ba/afficherTypes' === $pathinfo) {
                                return array (  '_controller' => 'BackBundle\\Controller\\LivraisonController::AfficherTypeVehiculeAction',  '_route' => 'afficherTypeVehicules',);
                            }

                            // afficherLivreurDispo
                            if ('/ba/afficherLivreurDispo' === $pathinfo) {
                                return array (  '_controller' => 'BackBundle\\Controller\\LivraisonController::AfficherLivreurDispoAction',  '_route' => 'afficherLivreurDispo',);
                            }

                            // afficherVehiculeDispo
                            if ('/ba/afficherVehiculeDispo' === $pathinfo) {
                                return array (  '_controller' => 'BackBundle\\Controller\\LivraisonController::AfficherVehiculeDispoAction',  '_route' => 'afficherVehiculeDispo',);
                            }

                            // afficherCommandes
                            if ('/ba/afficherCommandes' === $pathinfo) {
                                return array (  '_controller' => 'BackBundle\\Controller\\LivraisonController::afficherCommandesAction',  '_route' => 'afficherCommandes',);
                            }

                        }

                        // afficheVehicule
                        if ('/ba/afficheVehicule' === $pathinfo) {
                            return array (  '_controller' => 'BackBundle\\Controller\\LivraisonController::AfficherVehiculeAction',  '_route' => 'afficheVehicule',);
                        }

                        // affichePlannigDay
                        if ('/ba/affichePlanningDay' === $pathinfo) {
                            return array (  '_controller' => 'BackBundle\\Controller\\LivraisonController::AfficherVPlanningDayAction',  '_route' => 'affichePlannigDay',);
                        }

                    }

                    // affecterLivraison
                    if ('/ba/affecterLivraison' === $pathinfo) {
                        return array (  '_controller' => 'BackBundle\\Controller\\LivraisonController::AffecterLivraisonAction',  '_route' => 'affecterLivraison',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/ba/ajout')) {
                    if (0 === strpos($pathinfo, '/ba/ajout_')) {
                        // ajout_categorie
                        if ('/ba/ajout_categorie' === $pathinfo) {
                            return array (  '_controller' => 'BackBundle\\Controller\\CategorieController::AjoutAction',  '_route' => 'ajout_categorie',);
                        }

                        // ajout_produit
                        if ('/ba/ajout_produit' === $pathinfo) {
                            return array (  '_controller' => 'BackBundle\\Controller\\ProduitController::AjoutAction',  '_route' => 'ajout_produit',);
                        }

                        // ajout_stock
                        if ('/ba/ajout_stock' === $pathinfo) {
                            return array (  '_controller' => 'BackBundle\\Controller\\StockController::AjoutAction',  '_route' => 'ajout_stock',);
                        }

                    }

                    // ajoutTypeVehicule
                    if ('/ba/ajoutType' === $pathinfo) {
                        return array (  '_controller' => 'BackBundle\\Controller\\LivraisonController::AjouterTypeVehiculeAction',  '_route' => 'ajoutTypeVehicule',);
                    }

                    // ajoutVehicule
                    if ('/ba/ajoutVehicule' === $pathinfo) {
                        return array (  '_controller' => 'BackBundle\\Controller\\LivraisonController::AjouterVehiculeAction',  '_route' => 'ajoutVehicule',);
                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/ba/r')) {
                // refuser
                if (0 === strpos($pathinfo, '/ba/refuser') && preg_match('#^/ba/refuser/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'refuser']), array (  '_controller' => 'BackBundle\\Controller\\congeController::RefuserCongeAction',));
                }

                if (0 === strpos($pathinfo, '/ba/rep')) {
                    // representant_index
                    if ('/ba/rep' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'BackBundle\\Controller\\RepresentantController::indexAction',  '_route' => 'representant_index',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_representant_index;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'representant_index'));
                        }

                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_representant_index;
                        }

                        return $ret;
                    }
                    not_representant_index:

                    // representant_show
                    if (preg_match('#^/ba/rep/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'representant_show']), array (  '_controller' => 'BackBundle\\Controller\\RepresentantController::showAction',));
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_representant_show;
                        }

                        return $ret;
                    }
                    not_representant_show:

                    // representant_new
                    if ('/ba/rep/new' === $pathinfo) {
                        $ret = array (  '_controller' => 'BackBundle\\Controller\\RepresentantController::newAction',  '_route' => 'representant_new',);
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_representant_new;
                        }

                        return $ret;
                    }
                    not_representant_new:

                    // representant_edit
                    if (preg_match('#^/ba/rep/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'representant_edit']), array (  '_controller' => 'BackBundle\\Controller\\RepresentantController::editAction',));
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_representant_edit;
                        }

                        return $ret;
                    }
                    not_representant_edit:

                    // representant_delete
                    if (preg_match('#^/ba/rep/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'representant_delete']), array (  '_controller' => 'BackBundle\\Controller\\RepresentantController::deleteAction',));
                        if (!in_array($requestMethod, ['DELETE'])) {
                            $allow = array_merge($allow, ['DELETE']);
                            goto not_representant_delete;
                        }

                        return $ret;
                    }
                    not_representant_delete:

                    // filter
                    if ('/ba/rep/filter' === $pathinfo) {
                        $ret = array (  '_controller' => 'BackBundle\\Controller\\RepresentantController::FilterAction',  '_route' => 'filter',);
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_filter;
                        }

                        return $ret;
                    }
                    not_filter:

                }

                // robot
                if ('/ba/robot' === $pathinfo) {
                    return array (  '_controller' => 'BackBundle\\Controller\\DefaultController::robotAction',  '_route' => 'robot',);
                }

            }

            // traiter
            if ('/ba/traiter' === $pathinfo) {
                return array (  '_controller' => 'BackBundle\\Controller\\congeController::TraiterCongeAction',  '_route' => 'traiter',);
            }

            // notifier
            if ('/ba/not' === $pathinfo) {
                return array (  '_controller' => 'BackBundle\\Controller\\congeController::notifierAction',  '_route' => 'notifier',);
            }

            if (0 === strpos($pathinfo, '/ba/s')) {
                if (0 === strpos($pathinfo, '/ba/supprimer')) {
                    if (0 === strpos($pathinfo, '/ba/supprimer_')) {
                        // supprimer_categorie
                        if ('/ba/supprimer_categorie' === $pathinfo) {
                            return array (  '_controller' => 'BackBundle\\Controller\\CategorieController::SupprimerAction',  '_route' => 'supprimer_categorie',);
                        }

                        // supprimer_produit
                        if ('/ba/supprimer_produit' === $pathinfo) {
                            return array (  '_controller' => 'BackBundle\\Controller\\ProduitController::SupprimerAction',  '_route' => 'supprimer_produit',);
                        }

                        // supprimer_stock
                        if ('/ba/supprimer_stock' === $pathinfo) {
                            return array (  '_controller' => 'BackBundle\\Controller\\StockController::SupprimerAction',  '_route' => 'supprimer_stock',);
                        }

                    }

                    // supprimer2_stock
                    if ('/ba/supprimer2_stock' === $pathinfo) {
                        return array (  '_controller' => 'BackBundle\\Controller\\StockController::Supprimer2Action',  '_route' => 'supprimer2_stock',);
                    }

                    // supprimercommande
                    if (0 === strpos($pathinfo, '/ba/supprimercommande') && preg_match('#^/ba/supprimercommande/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'supprimercommande']), array (  '_controller' => 'BackBundle\\Controller\\CommandeController::deleteAction',));
                    }

                    // supprimerTypeVehicule
                    if ('/ba/supprimerType' === $pathinfo) {
                        return array (  '_controller' => 'BackBundle\\Controller\\LivraisonController::SupprimerTypeVehiculeAction',  '_route' => 'supprimerTypeVehicule',);
                    }

                    // supprimerVehicule
                    if ('/ba/supprimerVehicule' === $pathinfo) {
                        return array (  '_controller' => 'BackBundle\\Controller\\LivraisonController::SupprimerVehiculeAction',  '_route' => 'supprimerVehicule',);
                    }

                }

                // suivi
                if ('/ba/suivi' === $pathinfo) {
                    return array (  '_controller' => 'BackBundle\\Controller\\LivraisonController::suiviAction',  '_route' => 'suivi',);
                }

                // searchmyass
                if ('/ba/searchmyass' === $pathinfo) {
                    return array (  '_controller' => 'BackBundle\\Controller\\CommandeController::FilterAction',  '_route' => 'searchmyass',);
                }

                // showdetailscommande
                if ('/ba/showdetailscommande' === $pathinfo) {
                    return array (  '_controller' => 'BackBundle\\Controller\\CommandeController::showAction',  '_route' => 'showdetailscommande',);
                }

                if (0 === strpos($pathinfo, '/ba/stat')) {
                    // stat
                    if ('/ba/stat' === $pathinfo) {
                        return array (  '_controller' => 'BackBundle\\Controller\\LivraisonController::statAction',  '_route' => 'stat',);
                    }

                    // statistique
                    if ('/ba/statistique' === $pathinfo) {
                        return array (  '_controller' => 'BackBundle\\Controller\\HistoriqueController::showstatAction',  '_route' => 'statistique',);
                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/ba/modifier')) {
                if (0 === strpos($pathinfo, '/ba/modifier_')) {
                    // modifier_categorie
                    if ('/ba/modifier_categorie' === $pathinfo) {
                        return array (  '_controller' => 'BackBundle\\Controller\\CategorieController::ModifierAction',  '_route' => 'modifier_categorie',);
                    }

                    // modifier_produit
                    if ('/ba/modifier_produit' === $pathinfo) {
                        return array (  '_controller' => 'BackBundle\\Controller\\ProduitController::ModifierAction',  '_route' => 'modifier_produit',);
                    }

                    // modifier_stock
                    if ('/ba/modifier_stock' === $pathinfo) {
                        return array (  '_controller' => 'BackBundle\\Controller\\StockController::ModifierAction',  '_route' => 'modifier_stock',);
                    }

                }

                // modifierTypeVehicule
                if ('/ba/modifierType' === $pathinfo) {
                    return array (  '_controller' => 'BackBundle\\Controller\\LivraisonController::ModifierTypeVehiculeAction',  '_route' => 'modifierTypeVehicule',);
                }

                // modifierVehicule
                if ('/ba/modifierVehicule' === $pathinfo) {
                    return array (  '_controller' => 'BackBundle\\Controller\\LivraisonController::ModifierVehiculeAction',  '_route' => 'modifierVehicule',);
                }

            }

            // imprimer
            if ('/ba/imprimer' === $pathinfo) {
                return array (  '_controller' => 'BackBundle\\Controller\\CommandeController::pdfAction',  '_route' => 'imprimer',);
            }

            if (0 === strpos($pathinfo, '/ba/A')) {
                if (0 === strpos($pathinfo, '/ba/Aff')) {
                    // afficherCommandeNonLivre
                    if ('/ba/AfficherCommandeNonLivre' === $pathinfo) {
                        return array (  '_controller' => 'BackBundle\\Controller\\LivraisonController::AfficherCommandeNonLivreAction',  '_route' => 'afficherCommandeNonLivre',);
                    }

                    if (0 === strpos($pathinfo, '/ba/AfficherPlanning')) {
                        // AfficherPlanning
                        if ('/ba/AfficherPlanning' === $pathinfo) {
                            return array (  '_controller' => 'BackBundle\\Controller\\LivraisonController::AfficherPlanningAction',  '_route' => 'AfficherPlanning',);
                        }

                        // AfficherPlanningAdmin
                        if ('/ba/AfficherPlanningAdmin' === $pathinfo) {
                            return array (  '_controller' => 'BackBundle\\Controller\\LivraisonController::AfficherPlanningAdminAction',  '_route' => 'AfficherPlanningAdmin',);
                        }

                    }

                    // AffecterCommande
                    if ('/ba/AffecterCommande' === $pathinfo) {
                        return array (  '_controller' => 'BackBundle\\Controller\\LivraisonController::AffecterCommandeAction',  '_route' => 'AffecterCommande',);
                    }

                }

                // AjoutAdresseClient
                if ('/ba/AjoutAdresseClient' === $pathinfo) {
                    return array (  '_controller' => 'BackBundle\\Controller\\LivraisonController::AjoutAdresseClientAction',  '_route' => 'AjoutAdresseClient',);
                }

                // Avertir
                if (0 === strpos($pathinfo, '/ba/Avertir') && preg_match('#^/ba/Avertir/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'Avertir']), array (  '_controller' => 'BackBundle\\Controller\\LivraisonController::AvertirAction',));
                }

            }

            // Panne
            if ('/ba/Panne' === $pathinfo) {
                return array (  '_controller' => 'BackBundle\\Controller\\LivraisonController::PanneAction',  '_route' => 'Panne',);
            }

            // TomberPanne
            if ('/ba/TomberPanne' === $pathinfo) {
                return array (  '_controller' => 'BackBundle\\Controller\\LivraisonController::TomberPanneAction',  '_route' => 'TomberPanne',);
            }

            // Reparer
            if ('/ba/Reparer' === $pathinfo) {
                return array (  '_controller' => 'BackBundle\\Controller\\LivraisonController::ReparerAction',  '_route' => 'Reparer',);
            }

            // ReclamationLivraison
            if ('/ba/ReclamationLivraison' === $pathinfo) {
                return array (  '_controller' => 'BackBundle\\Controller\\LivraisonController::ReclamationLivraisonAction',  '_route' => 'ReclamationLivraison',);
            }

            // LivrerCommande
            if ('/ba/LivrerCommande' === $pathinfo) {
                return array (  '_controller' => 'BackBundle\\Controller\\LivraisonController::LivrerCommandeAction',  '_route' => 'LivrerCommande',);
            }

            if (0 === strpos($pathinfo, '/ba/ModifierVehicule2')) {
                // ModifierVehicule2
                if ('/ba/ModifierVehicule2' === $pathinfo) {
                    return array (  '_controller' => 'BackBundle\\Controller\\LivraisonController::ModifierVehicule2Action',  '_route' => 'ModifierVehicule2',);
                }

                // ModifierVehicule22
                if ('/ba/ModifierVehicule22' === $pathinfo) {
                    return array (  '_controller' => 'BackBundle\\Controller\\LivraisonController::ModifierVehicule22Action',  '_route' => 'ModifierVehicule22',);
                }

            }

            // ModifierVehiculePop
            if ('/ba/ModifierVehiculePop' === $pathinfo) {
                return array (  '_controller' => 'BackBundle\\Controller\\LivraisonController::ModifierVehiculePopAction',  '_route' => 'ModifierVehiculePop',);
            }

            if (0 === strpos($pathinfo, '/ba/fournisseur')) {
                // fournisseur_index
                if ('/ba/fournisseur/index' === $pathinfo) {
                    $ret = array (  '_controller' => 'BackBundle\\Controller\\FournisseurController::indexAction',  '_route' => 'fournisseur_index',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fournisseur_index;
                    }

                    return $ret;
                }
                not_fournisseur_index:

                // fournisseur_show
                if (preg_match('#^/ba/fournisseur/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fournisseur_show']), array (  '_controller' => 'BackBundle\\Controller\\FournisseurController::showAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fournisseur_show;
                    }

                    return $ret;
                }
                not_fournisseur_show:

                // fournisseur_new
                if ('/ba/fournisseur/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'BackBundle\\Controller\\FournisseurController::newAction',  '_route' => 'fournisseur_new',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fournisseur_new;
                    }

                    return $ret;
                }
                not_fournisseur_new:

                // fournisseur_edit
                if (preg_match('#^/ba/fournisseur/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fournisseur_edit']), array (  '_controller' => 'BackBundle\\Controller\\FournisseurController::editAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fournisseur_edit;
                    }

                    return $ret;
                }
                not_fournisseur_edit:

                // fournisseur_delete
                if (preg_match('#^/ba/fournisseur/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fournisseur_delete']), array (  '_controller' => 'BackBundle\\Controller\\FournisseurController::deleteAction',));
                    if (!in_array($requestMethod, ['DELETE'])) {
                        $allow = array_merge($allow, ['DELETE']);
                        goto not_fournisseur_delete;
                    }

                    return $ret;
                }
                not_fournisseur_delete:

            }

            // filter2
            if ('/ba/filter2' === $pathinfo) {
                return array (  '_controller' => 'BackBundle\\Controller\\FournisseurController::Filter2Action',  '_route' => 'filter2',);
            }

            if (0 === strpos($pathinfo, '/ba/historique')) {
                // historique_index
                if ('/ba/historique/index' === $pathinfo) {
                    $ret = array (  '_controller' => 'BackBundle\\Controller\\HistoriqueController::indexAction',  '_route' => 'historique_index',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_historique_index;
                    }

                    return $ret;
                }
                not_historique_index:

                // statrecherche
                if ('/ba/historique/statrecherche' === $pathinfo) {
                    return array (  '_controller' => 'BackBundle\\Controller\\HistoriqueController::statrechercheAction',  '_route' => 'statrecherche',);
                }

                // historique_show
                if (preg_match('#^/ba/historique/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'historique_show']), array (  '_controller' => 'BackBundle\\Controller\\HistoriqueController::showAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_historique_show;
                    }

                    return $ret;
                }
                not_historique_show:

                // historique_indexf
                if (preg_match('#^/ba/historique/(?P<id>[^/]++)/indexf$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'historique_indexf']), array (  '_controller' => 'BackBundle\\Controller\\HistoriqueController::indexfAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_historique_indexf;
                    }

                    return $ret;
                }
                not_historique_indexf:

                // historique_new
                if ('/ba/historique/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'BackBundle\\Controller\\HistoriqueController::newAction',  '_route' => 'historique_new',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_historique_new;
                    }

                    return $ret;
                }
                not_historique_new:

                // historique_edit
                if (preg_match('#^/ba/historique/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'historique_edit']), array (  '_controller' => 'BackBundle\\Controller\\HistoriqueController::editAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_historique_edit;
                    }

                    return $ret;
                }
                not_historique_edit:

                // historique_delete
                if (preg_match('#^/ba/historique/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'historique_delete']), array (  '_controller' => 'BackBundle\\Controller\\HistoriqueController::deleteAction',));
                    if (!in_array($requestMethod, ['DELETE'])) {
                        $allow = array_merge($allow, ['DELETE']);
                        goto not_historique_delete;
                    }

                    return $ret;
                }
                not_historique_delete:

            }

            elseif (0 === strpos($pathinfo, '/ba/commandef')) {
                // commandef_index
                if ('/ba/commandef/index' === $pathinfo) {
                    $ret = array (  '_controller' => 'BackBundle\\Controller\\CommandefController::indexAction',  '_route' => 'commandef_index',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_commandef_index;
                    }

                    return $ret;
                }
                not_commandef_index:

                // commandef_show
                if (preg_match('#^/ba/commandef/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'commandef_show']), array (  '_controller' => 'BackBundle\\Controller\\CommandefController::showAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_commandef_show;
                    }

                    return $ret;
                }
                not_commandef_show:

                // commandef_new
                if ('/ba/commandef/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'BackBundle\\Controller\\CommandefController::newAction',  '_route' => 'commandef_new',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_commandef_new;
                    }

                    return $ret;
                }
                not_commandef_new:

                // commandef_edit
                if (preg_match('#^/ba/commandef/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'commandef_edit']), array (  '_controller' => 'BackBundle\\Controller\\CommandefController::editAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_commandef_edit;
                    }

                    return $ret;
                }
                not_commandef_edit:

                // commandef_delete
                if (preg_match('#^/ba/commandef/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'commandef_delete']), array (  '_controller' => 'BackBundle\\Controller\\CommandefController::deleteAction',));
                    if (!in_array($requestMethod, ['DELETE'])) {
                        $allow = array_merge($allow, ['DELETE']);
                        goto not_commandef_delete;
                    }

                    return $ret;
                }
                not_commandef_delete:

                // commandef_accept
                if (preg_match('#^/ba/commandef/(?P<id>[^/]++)/accept$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'commandef_accept']), array (  '_controller' => 'BackBundle\\Controller\\CommandefController::acceptAction',));
                }

            }

            // pdfbon
            if ('/ba/pdfbon' === $pathinfo) {
                return array (  '_controller' => 'BackBundle\\Controller\\BonReductionController::pdf2Action',  '_route' => 'pdfbon',);
            }

            // DetailsProduits
            if ('/ba/DetailsProduits' === $pathinfo) {
                return array (  '_controller' => 'BackBundle\\Controller\\LivraisonController::DetailsProduitsAction',  '_route' => 'DetailsProduits',);
            }

        }

        elseif (0 === strpos($pathinfo, '/bonreduction')) {
            // bonreduction_index
            if ('/bonreduction' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'BackBundle\\Controller\\BonReductionController::indexAction',  '_route' => 'bonreduction_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_bonreduction_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'bonreduction_index'));
                }

                return $ret;
            }
            not_bonreduction_index:

            // bonreduction_new
            if ('/bonreduction/new' === $pathinfo) {
                return array (  '_controller' => 'BackBundle\\Controller\\BonReductionController::newAction',  '_route' => 'bonreduction_new',);
            }

            // bonreduction_show
            if (preg_match('#^/bonreduction/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'bonreduction_show']), array (  '_controller' => 'BackBundle\\Controller\\BonReductionController::showAction',));
            }

            // bonreduction_edit
            if (preg_match('#^/bonreduction/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'bonreduction_edit']), array (  '_controller' => 'BackBundle\\Controller\\BonReductionController::editAction',));
            }

            // bonreduction_delete
            if (preg_match('#^/bonreduction/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'bonreduction_delete']), array (  '_controller' => 'BackBundle\\Controller\\BonReductionController::deleteAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/f')) {
            if (0 === strpos($pathinfo, '/fr')) {
                // front_homepage
                if ('/fr' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'FrontBundle\\Controller\\DefaultController::indexAction',  '_route' => 'front_homepage',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_front_homepage;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'front_homepage'));
                    }

                    return $ret;
                }
                not_front_homepage:

                // traiterr
                if ('/fr/traiterr' === $pathinfo) {
                    return array (  '_controller' => 'FrontBundle\\Controller\\reclamationController::TraiterReclamationAction',  '_route' => 'traiterr',);
                }

                // repondre
                if (0 === strpos($pathinfo, '/fr/repondre') && preg_match('#^/fr/repondre/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'repondre']), array (  '_controller' => 'FrontBundle\\Controller\\reclamationController::RepondreAction',));
                }

                // rating
                if ('/fr/rating' === $pathinfo) {
                    return array (  '_controller' => 'FrontBundle\\Controller\\ProduitController::RatingAction',  '_route' => 'rating',);
                }

                // afficher_produitF
                if ('/fr/afficher_produitF' === $pathinfo) {
                    return array (  '_controller' => 'FrontBundle\\Controller\\ProduitController::AfficheFAction',  '_route' => 'afficher_produitF',);
                }

                // ajouter_pr_pan
                if ('/fr/ajouter_pr_pan' === $pathinfo) {
                    return array (  '_controller' => 'FrontBundle\\Controller\\PanierController::AjouterproduitaupanierAction',  '_route' => 'ajouter_pr_pan',);
                }

                if (0 === strpos($pathinfo, '/fr/d')) {
                    // details_produitF
                    if ('/fr/details_produitF' === $pathinfo) {
                        return array (  '_controller' => 'FrontBundle\\Controller\\ProduitController::DetailsAction',  '_route' => 'details_produitF',);
                    }

                    // decrement
                    if ('/fr/decrement' === $pathinfo) {
                        return array (  '_controller' => 'FrontBundle\\Controller\\PanierController::DecrimentQteAction',  '_route' => 'decrement',);
                    }

                    // dislike_produit
                    if (0 === strpos($pathinfo, '/fr/dislike_produit') && preg_match('#^/fr/dislike_produit(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'dislike_produit']), array (  '_controller' => 'FrontBundle\\Controller\\ProduitController::dislikeAction',));
                    }

                }

                // like_produit
                if (0 === strpos($pathinfo, '/fr/like_produit') && preg_match('#^/fr/like_produit(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'like_produit']), array (  '_controller' => 'FrontBundle\\Controller\\ProduitController::likeAction',));
                }

                // checkout
                if ('/fr/checkout' === $pathinfo) {
                    return array (  '_controller' => 'FrontBundle\\Controller\\PanierController::CheckoutAction',  '_route' => 'checkout',);
                }

                // cart
                if ('/fr/cart' === $pathinfo) {
                    return array (  '_controller' => 'FrontBundle\\Controller\\PanierController::ShowCartAction',  '_route' => 'cart',);
                }

                if (0 === strpos($pathinfo, '/fr/p')) {
                    // produitupdate
                    if ('/fr/produitupdate' === $pathinfo) {
                        return array (  '_controller' => 'FrontBundle\\Controller\\PanierController::ProduitUpdateAction',  '_route' => 'produitupdate',);
                    }

                    // payment
                    if ('/fr/payment' === $pathinfo) {
                        return array (  '_controller' => 'FrontBundle\\Controller\\PanierController::PaimentAction',  '_route' => 'payment',);
                    }

                    // payer
                    if ('/fr/payer' === $pathinfo) {
                        return array (  '_controller' => 'FrontBundle\\Controller\\PanierController::PayerAction',  '_route' => 'payer',);
                    }

                }

                // supprimer
                if ('/fr/supprimer' === $pathinfo) {
                    return array (  '_controller' => 'FrontBundle\\Controller\\PanierController::supprimerAction',  '_route' => 'supprimer',);
                }

                // increment
                if ('/fr/increment' === $pathinfo) {
                    return array (  '_controller' => 'FrontBundle\\Controller\\PanierController::IncrimentQteAction',  '_route' => 'increment',);
                }

                // verifycoupon
                if ('/fr/verifycoupon' === $pathinfo) {
                    return array (  '_controller' => 'FrontBundle\\Controller\\PanierController::verifyCouponAction',  '_route' => 'verifycoupon',);
                }

                // SMS
                if ('/fr/SMS' === $pathinfo) {
                    return array (  '_controller' => 'FrontBundle\\Controller\\PanierController::SMSAction',  '_route' => 'SMS',);
                }

                // homepage
                if ('/front' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexFrontAction',  '_route' => 'homepage',);
                }

            }

            elseif (0 === strpos($pathinfo, '/forum/forum')) {
                if (0 === strpos($pathinfo, '/forum/forum/category')) {
                    // discutea_forum_create_category
                    if ('/forum/forum/category/new' === $pathinfo) {
                        return array (  '_controller' => 'Discutea\\DForumBundle\\Controller\\CategoryController::newCategoryAction',  '_route' => 'discutea_forum_create_category',);
                    }

                    // discutea_forum_edit_category
                    if (0 === strpos($pathinfo, '/forum/forum/category/edit') && preg_match('#^/forum/forum/category/edit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'discutea_forum_edit_category']), array (  '_controller' => 'Discutea\\DForumBundle\\Controller\\CategoryController::editCategoryAction',));
                    }

                    // discutea_forum_remove_category
                    if (0 === strpos($pathinfo, '/forum/forum/category/remove') && preg_match('#^/forum/forum/category/remove/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'discutea_forum_remove_category']), array (  '_controller' => 'Discutea\\DForumBundle\\Controller\\CategoryController::removeCategoryAction',));
                    }

                }

                // discutea_forum_homepage
                if ('/forum/forum' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'Discutea\\DForumBundle\\Controller\\ForumController::indexAction',  '_route' => 'discutea_forum_homepage',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_discutea_forum_homepage;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'discutea_forum_homepage'));
                    }

                    return $ret;
                }
                not_discutea_forum_homepage:

                if (0 === strpos($pathinfo, '/forum/forum/forum')) {
                    // discutea_forum_create_forum
                    if (0 === strpos($pathinfo, '/forum/forum/forum/new') && preg_match('#^/forum/forum/forum/new/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'discutea_forum_create_forum']), array (  '_controller' => 'Discutea\\DForumBundle\\Controller\\ForumController::newForumAction',));
                    }

                    // discutea_forum_edit_forum
                    if (0 === strpos($pathinfo, '/forum/forum/forum/edit') && preg_match('#^/forum/forum/forum/edit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'discutea_forum_edit_forum']), array (  '_controller' => 'Discutea\\DForumBundle\\Controller\\ForumController::editForumAction',));
                    }

                    // discutea_forum_remove_forum
                    if (0 === strpos($pathinfo, '/forum/forum/forum/remove') && preg_match('#^/forum/forum/forum/remove/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'discutea_forum_remove_forum']), array (  '_controller' => 'Discutea\\DForumBundle\\Controller\\ForumController::removeForumAction',));
                    }

                }

                // discutea_forum_topic
                if (0 === strpos($pathinfo, '/forum/forum/cat') && preg_match('#^/forum/forum/cat/(?P<slug>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'discutea_forum_topic']), array (  '_controller' => 'Discutea\\DForumBundle\\Controller\\TopicController::topicAction',));
                }

                if (0 === strpos($pathinfo, '/forum/forum/topic')) {
                    // discutea_forum_topic_delete
                    if (0 === strpos($pathinfo, '/forum/forum/topic/delete') && preg_match('#^/forum/forum/topic/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'discutea_forum_topic_delete']), array (  '_controller' => 'Discutea\\DForumBundle\\Controller\\TopicController::deleteAction',));
                    }

                    // discutea_forum_topic_edit
                    if (0 === strpos($pathinfo, '/forum/forum/topic/edit') && preg_match('#^/forum/forum/topic/edit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'discutea_forum_topic_edit']), array (  '_controller' => 'Discutea\\DForumBundle\\Controller\\TopicController::editAction',));
                    }

                    // discutea_forum_post
                    if (preg_match('#^/forum/forum/topic/(?P<slug>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'discutea_forum_post']), array (  '_controller' => 'Discutea\\DForumBundle\\Controller\\PostController::postAction',));
                    }

                }

                // discutea_forum_post_delete
                if (0 === strpos($pathinfo, '/forum/forum/post/delete') && preg_match('#^/forum/forum/post/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'discutea_forum_post_delete']), array (  '_controller' => 'Discutea\\DForumBundle\\Controller\\PostController::deleteAction',));
                }

                // discutea_forum_post_edit
                if (0 === strpos($pathinfo, '/forum/forum/post/edit') && preg_match('#^/forum/forum/post/edit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'discutea_forum_post_edit']), array (  '_controller' => 'Discutea\\DForumBundle\\Controller\\PostController::editAction',));
                }

                if (0 === strpos($pathinfo, '/forum/forum/label')) {
                    // discutea_label_solved
                    if (0 === strpos($pathinfo, '/forum/forum/label/solved') && preg_match('#^/forum/forum/label/solved/(?P<slug>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'discutea_label_solved']), array (  '_controller' => 'Discutea\\DForumBundle\\Controller\\LabelController::solvedAction',));
                    }

                    // discutea_label_pinned
                    if (0 === strpos($pathinfo, '/forum/forum/label/pinned') && preg_match('#^/forum/forum/label/pinned/(?P<slug>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'discutea_label_pinned']), array (  '_controller' => 'Discutea\\DForumBundle\\Controller\\LabelController::pinnedAction',));
                    }

                    // discutea_label_closed
                    if (0 === strpos($pathinfo, '/forum/forum/label/closed') && preg_match('#^/forum/forum/label/closed/(?P<slug>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'discutea_label_closed']), array (  '_controller' => 'Discutea\\DForumBundle\\Controller\\LabelController::closedAction',));
                    }

                }

                // discutea_forum_admin_dashboard
                if ('/forum/forum/admin' === $pathinfo) {
                    return array (  '_controller' => 'Discutea\\DForumBundle\\Controller\\AdminController::indexAction',  '_route' => 'discutea_forum_admin_dashboard',);
                }

            }

            // ancarebeca_full_calendar_load
            if ('/full-calendar/load' === $pathinfo) {
                return array (  '_controller' => 'AncaRebeca\\FullCalendarBundle\\Controller\\CalendarController::loadAction',  '_route' => 'ancarebeca_full_calendar_load',);
            }

        }

        // app_secure_redirect
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\secureController::RedirectAction',  '_route' => 'app_secure_redirect',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_app_secure_redirect;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'app_secure_redirect'));
            }

            return $ret;
        }
        not_app_secure_redirect:

        if (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_security_login;
                }

                return $ret;
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_fos_user_security_check;
                }

                return $ret;
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            $ret = array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_fos_user_security_logout;
            }

            return $ret;
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_profile_show;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                }

                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_profile_show;
                }

                return $ret;
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_profile_edit;
                }

                return $ret;
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_change_password;
                }

                return $ret;
            }
            not_fos_user_change_password:

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

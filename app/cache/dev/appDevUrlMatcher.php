<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/99471e3')) {
                // _assetic_99471e3
                if ($pathinfo === '/js/99471e3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '99471e3',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_99471e3',);
                }

                // _assetic_99471e3_0
                if ($pathinfo === '/js/99471e3_phone_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '99471e3',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_99471e3_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/5a4a630')) {
                // _assetic_5a4a630
                if ($pathinfo === '/js/5a4a630.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5a4a630',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_5a4a630',);
                }

                if (0 === strpos($pathinfo, '/js/5a4a630_')) {
                    // _assetic_5a4a630_0
                    if ($pathinfo === '/js/5a4a630_jquery-ui-1.10.1_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '5a4a630',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_5a4a630_0',);
                    }

                    // _assetic_5a4a630_1
                    if ($pathinfo === '/js/5a4a630_bootstrap_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '5a4a630',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_5a4a630_1',);
                    }

                    // _assetic_5a4a630_2
                    if ($pathinfo === '/js/5a4a630_modernizr.custom_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '5a4a630',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_5a4a630_2',);
                    }

                    // _assetic_5a4a630_3
                    if ($pathinfo === '/js/5a4a630_classie_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '5a4a630',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_5a4a630_3',);
                    }

                    // _assetic_5a4a630_4
                    if ($pathinfo === '/js/5a4a630_mlpushmenu_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '5a4a630',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_5a4a630_4',);
                    }

                    if (0 === strpos($pathinfo, '/js/5a4a630_d')) {
                        // _assetic_5a4a630_5
                        if ($pathinfo === '/js/5a4a630_dialog_6.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '5a4a630',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_5a4a630_5',);
                        }

                        // _assetic_5a4a630_6
                        if ($pathinfo === '/js/5a4a630_dropdown_7.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '5a4a630',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_5a4a630_6',);
                        }

                    }

                    // _assetic_5a4a630_7
                    if ($pathinfo === '/js/5a4a630_jquery.maskedinput_8.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '5a4a630',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_5a4a630_7',);
                    }

                    // _assetic_5a4a630_8
                    if ($pathinfo === '/js/5a4a630_couleurs-stats_9.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '5a4a630',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_5a4a630_8',);
                    }

                    // _assetic_5a4a630_9
                    if ($pathinfo === '/js/5a4a630_jquery.number_10.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '5a4a630',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_5a4a630_9',);
                    }

                    // _assetic_5a4a630_10
                    if ($pathinfo === '/js/5a4a630_date_11.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '5a4a630',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_5a4a630_10',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/1ea8096')) {
                // _assetic_1ea8096
                if ($pathinfo === '/js/1ea8096.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '1ea8096',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_1ea8096',);
                }

                // _assetic_1ea8096_0
                if ($pathinfo === '/js/1ea8096_jquery.raty_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '1ea8096',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_1ea8096_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/5584ba6')) {
                // _assetic_5584ba6
                if ($pathinfo === '/js/5584ba6.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5584ba6',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_5584ba6',);
                }

                if (0 === strpos($pathinfo, '/js/5584ba6_')) {
                    // _assetic_5584ba6_0
                    if ($pathinfo === '/js/5584ba6_jquery.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '5584ba6',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_5584ba6_0',);
                    }

                    // _assetic_5584ba6_1
                    if ($pathinfo === '/js/5584ba6_skel.min_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '5584ba6',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_5584ba6_1',);
                    }

                    // _assetic_5584ba6_2
                    if ($pathinfo === '/js/5584ba6_jquery.dropotron_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '5584ba6',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_5584ba6_2',);
                    }

                    // _assetic_5584ba6_3
                    if ($pathinfo === '/js/5584ba6_config_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '5584ba6',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_5584ba6_3',);
                    }

                    // _assetic_5584ba6_4
                    if ($pathinfo === '/js/5584ba6_skel-panels.min_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '5584ba6',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_5584ba6_4',);
                    }

                    // _assetic_5584ba6_5
                    if ($pathinfo === '/js/5584ba6_html5shiv_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '5584ba6',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_5584ba6_5',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // front_end_super_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'front_end_super_homepage');
            }

            return array (  '_controller' => 'FrontEnd\\SuperBundle\\Controller\\DefaultController::indexAction',  '_route' => 'front_end_super_homepage',);
        }

        // myapp_utilisateur_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_utilisateur_default_index')), array (  '_controller' => 'MyApp\\UtilisateurBundle\\Controller\\DefaultController::indexAction',));
        }

        // fos_user_security_login
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/login$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_security_login')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',));
        }

        // fos_user_security_check
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/login_check$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_fos_user_security_check;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_security_check')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',));
        }
        not_fos_user_security_check:

        // fos_user_security_logout
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/logout$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_security_logout')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',));
        }

        // fos_user_profile_show
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/profile/?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_user_profile_show;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_profile_show')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',));
        }
        not_fos_user_profile_show:

        // fos_user_profile_edit
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/profile/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_profile_edit')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',));
        }

        // fos_user_registration_register
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/register/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_register')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',));
        }

        // fos_user_registration_check_email
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/register/check\\-email$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_user_registration_check_email;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_check_email')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',));
        }
        not_fos_user_registration_check_email:

        // fos_user_registration_confirm
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_user_registration_confirm;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
        }
        not_fos_user_registration_confirm:

        // fos_user_registration_confirmed
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/register/confirmed$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_user_registration_confirmed;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirmed')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',));
        }
        not_fos_user_registration_confirmed:

        // fos_user_resetting_request
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/resetting/request$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_user_resetting_request;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_request')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',));
        }
        not_fos_user_resetting_request:

        // fos_user_resetting_send_email
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/resetting/send\\-email$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_fos_user_resetting_send_email;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_send_email')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',));
        }
        not_fos_user_resetting_send_email:

        // fos_user_resetting_check_email
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/resetting/check\\-email$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_user_resetting_check_email;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_check_email')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',));
        }
        not_fos_user_resetting_check_email:

        // fos_user_resetting_reset
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_resetting_reset;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
        }
        not_fos_user_resetting_reset:

        // fos_user_change_password
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/change\\-password/change\\-password$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_change_password')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',));
        }
        not_fos_user_change_password:

        // myapp_choisir_langue
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/choisir\\-langue/(?P<langue>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_choisir_langue')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\MessageController::choisirLangueAction',));
        }

        // myapp_client_rechercher
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/client/rechercher$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_myapp_client_rechercher;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_client_rechercher')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ClientController::rechercherAction',));
        }
        not_myapp_client_rechercher:

        // myapp_contrat_rechercher
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/contrat/rechercher$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_myapp_contrat_rechercher;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_contrat_rechercher')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ContratController::rechercherAction',));
        }
        not_myapp_contrat_rechercher:

        // myapp_client_date
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/client/date$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_myapp_client_date;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_client_date')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ClientController::dateAction',));
        }
        not_myapp_client_date:

        // myapp_front_index
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/index/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'myapp_front_index');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_front_index')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\FrontController::indexAction',));
        }

        // myapp_client_lister
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/client/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'myapp_client_lister');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_client_lister')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ClientController::listerAction',));
        }

        // client
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/client/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'client');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'client')), array (  'page' => 1,  '_controller' => 'MyApp\\ApBundle\\Controller\\ClientController::listerAction',));
        }

        // client_paginated
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/client/page(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_paginated')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ClientController::listerAction',));
        }

        // myapp_client_ajouter
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/client/ajouter$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_client_ajouter')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ClientController::ajouterAction',));
        }

        // myapp_client_note
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/(?P<id>[^/]++)/note$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_client_note')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ClientController::noteAction',));
        }

        // myapp_client_modifier
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/client/(?P<id>[^/]++)/modifier$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_client_modifier')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ClientController::modifierAction',));
        }

        // myapp_client_supprimer
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/client/(?P<id>[^/]++)/supprimer$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_client_supprimer')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ClientController::supprimerAction',));
        }

        // myapp_production_ajouter
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/production/(?P<id>[^/]++)/ajouter$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_production_ajouter')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ProductionController::ajouterAction',));
        }

        // myapp_production_lister
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/production/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'myapp_production_lister');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_production_lister')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ProductionController::listerAction',));
        }

        // myapp_production_booke
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/production/booke$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_production_booke')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ProductionController::bookeAction',));
        }

        // myapp_production_termine
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/production/termine$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_production_termine')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ProductionController::termineAction',));
        }

        // myapp_production_modifier
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/production/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_production_modifier')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ProductionController::modifierAction',));
        }

        // myapp_production_comptabilite
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/production/comptabilite/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_production_comptabilite')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ProductionController::comptabiliteAction',));
        }

        // myapp_comptabilite_ajouter
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/comptabilite/ajouter$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_comptabilite_ajouter')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ComptabiliteController::ajouterAction',));
        }

        // myapp_comptabilite_supprimer
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/comptabilite/(?P<id>[^/]++)/supprimer$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_comptabilite_supprimer')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ComptabiliteController::supprimerAction',));
        }

        // myapp_comptabilite_lister
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/comptabilite/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'myapp_comptabilite_lister');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_comptabilite_lister')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ComptabiliteController::listerAction',));
        }

        // myapp_comptabilite_voir
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/comptabilite/bill/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_comptabilite_voir')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ComptabiliteController::voirAction',));
        }

        // myapp_comptabilite_voirEssence
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/comptabilite/bill/autre/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_comptabilite_voirEssence')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ComptabiliteController::voirEssenceAction',));
        }

        // myapp_satisfaction_ajouter
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/(?P<id>[^/]++)/satisfaction$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_satisfaction_ajouter')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\SatisfactionController::ajouterAction',));
        }

        // myapp_satisfaction_remerciement
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/(?P<id>[^/]++)/remerciement$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_satisfaction_remerciement')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\SatisfactionController::emailAction',));
        }

        // myapp_satisfaction_equipe
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/(?P<id>[^/]++)/satisfaction_equipe$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_satisfaction_equipe')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\SatisfactionController::equipeAction',));
        }

        // myapp_service_ajouter
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/(?P<id>[^/]++)/services$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_service_ajouter')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ClientController::creerServiceAction',));
        }

        // myapp_service_supprimerService
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/(?P<idd>[^/]++)/(?P<id>[^/]++)/services/supprimer$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_service_supprimerService')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ClientController::supprimerServiceAction',));
        }

        // myapp_estimation_voirClient
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/(?P<id>[^/]++)/estimation$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_estimation_voirClient')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\EstimationController::voirClientAction',));
        }

        // myapp_estimation_suivant
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/(?P<id>[^/]++)/estimation/suivant$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_estimation_suivant')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\EstimationController::suivantAction',));
        }

        // myapp_estimation_creerService
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/(?P<id>[^/]++)/estimation/ajouter$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_estimation_creerService')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ClientController::creerServiceAction',));
        }

        // myapp_contrat_ajouter
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/(?P<id>[^/]++)/contrat$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_contrat_ajouter')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ContratController::ajouterAction',));
        }

        // myapp_contrat_supprimerService
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/(?P<id>[^/]++)/(?P<idd>[^/]++)/supprimer$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_contrat_supprimerService')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ContratController::supprimerServiceAction',));
        }

        // myapp_contrat_lister
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/contrat/liste$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_contrat_lister')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ContratController::listerAction',));
        }

        // myapp_contrat_listerEstimation
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/contrat/liste\\-Estimation$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_contrat_listerEstimation')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ContratController::listerEstimationAction',));
        }

        // myapp_contrat_listerAnnule
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/contrat/liste\\-Annule$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_contrat_listerAnnule')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ContratController::listerAnnuleAction',));
        }

        // myapp_contrat_voir
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/contrat/voir/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_contrat_voir')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ContratController::voirAction',));
        }

        // myapp_contrat_pdf
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/testpdf$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_contrat_pdf')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ContratController::pdfAction',));
        }

        // myapp_production_start
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/production/(?P<id>[^/]++)/start/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'myapp_production_start');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_production_start')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ProductionController::startAction',));
        }

        // myapp_production_stop
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/production/(?P<id>[^/]++)/stop/(?P<test>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_production_stop')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ProductionController::stopAction',));
        }

        // myapp_production_stat
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/production/stat/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_production_stat')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ProductionController::statAction',));
        }

        // myapp_map_voir
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/map/voir$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_map_voir')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\MapController::voirToutClientAction',));
        }

        // myapp_map_journey
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/map/jour/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'myapp_map_journey');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_map_journey')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\MapController::journeyAction',));
        }

        // myapp_map_voirClient
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/map/voir/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_map_voirClient')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\MapController::voirClientAction',));
        }

        // myapp_message_liste
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/message/liste$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_message_liste')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\MessageController::listerAction',));
        }

        // myapp_message_ajouter
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/message/ajouter$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_message_ajouter')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\MessageController::ajouterAction',));
        }

        // myapp_rdv_lister
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/rendez\\-vous/liste$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_rdv_lister')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\RdvController::listerAction',));
        }

        // myapp_rdv_listerRdv
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/rendez\\-vous/liste\\-RDV$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_rdv_listerRdv')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\RdvController::listerRdvAction',));
        }

        // myapp_rdv_listerRien
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/rendez\\-vous/liste\\-Rien$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_rdv_listerRien')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\RdvController::listerRienAction',));
        }

        // myapp_rdv_listerDone
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/rendez\\-vous/liste\\-Done$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_rdv_listerDone')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\RdvController::listerDoneAction',));
        }

        // myapp_rdv_listerSeconde
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/rendez\\-vous/Second\\-service$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_rdv_listerSeconde')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\RdvController::listerSecondeAction',));
        }

        // myapp_rdv_listerAnnee
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/rendez\\-vous/2013$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_rdv_listerAnnee')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\RdvController::listerAnneeAction',));
        }

        // myapp_client_index
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/mail/liste$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_client_index')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ClientController::indexAction',));
        }

        // myapp_clientContrat_voir
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/contrat_client/voir/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_clientContrat_voir')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\ClientContratController::voirAction',));
        }

        // myapp_dashboard_principal
        if (preg_match('#^/(?P<_locale>en|fr)/intranet/admin/dashboard$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_dashboard_principal')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\DashboardController::voirAction',));
        }

        if (0 === strpos($pathinfo, '/group')) {
            // fos_user_group_list
            if ($pathinfo === '/group/list') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_group_list;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::listAction',  '_route' => 'fos_user_group_list',);
            }
            not_fos_user_group_list:

            // fos_user_group_new
            if ($pathinfo === '/group/new') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::newAction',  '_route' => 'fos_user_group_new',);
            }

            // fos_user_group_show
            if (preg_match('#^/group/(?P<groupName>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_group_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_show')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::showAction',));
            }
            not_fos_user_group_show:

            // fos_user_group_edit
            if (preg_match('#^/group/(?P<groupName>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_edit')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::editAction',));
            }

            // fos_user_group_delete
            if (preg_match('#^/group/(?P<groupName>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_group_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_delete')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::deleteAction',));
            }
            not_fos_user_group_delete:

        }

        // MyAppApBundle_traduction
        if (0 === strpos($pathinfo, '/traduction') && preg_match('#^/traduction/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'MyAppApBundle_traduction')), array (  '_controller' => 'MyApp\\ApBundle\\Controller\\BlogController::traductionAction',));
        }

        if (0 === strpos($pathinfo, '/console')) {
            // console
            if (rtrim($pathinfo, '/') === '/console') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_console;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'console');
                }

                return array (  '_controller' => 'CoreSphere\\ConsoleBundle\\Controller\\ConsoleController::consoleAction',  '_route' => 'console',);
            }
            not_console:

            // console_exec
            if (0 === strpos($pathinfo, '/console/commands') && preg_match('#^/console/commands(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_console_exec;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'console_exec')), array (  '_controller' => 'CoreSphere\\ConsoleBundle\\Controller\\ConsoleController::execAction',  '_format' => 'json',));
            }
            not_console_exec:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

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

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

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
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // acme_test_default_index
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'acme_test_default_index');
            }

            return array (  '_controller' => 'Acme\\TestBundle\\Controller\\DefaultController::indexAction',  '_route' => 'acme_test_default_index',);
        }

        // wot
        if ('/wot' === $pathinfo) {
            return array (  '_controller' => 'Acme\\TestBundle\\Controller\\DefaultController::indexActionTwo',  '_route' => 'wot',);
        }

        // user_register
        if ('/register' === $pathinfo) {
            return array (  '_controller' => 'Acme\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'user_register',);
        }

        if (0 === strpos($pathinfo, '/login')) {
            // login
            if ('/login' === $pathinfo) {
                return array (  '_controller' => 'Acme\\UserBundle\\Controller\\SecurityController::login',  '_route' => 'login',);
            }

            // login_check
            if ('/login_check' === $pathinfo) {
                return array (  '_controller' => 'Acme\\UserBundle\\Controller\\SecurityController::loginCheckAction',  '_route' => 'login_check',);
            }

        }

        // logout
        if ('/logout' === $pathinfo) {
            return array (  '_controller' => 'Acme\\UserBundle\\Controller\\SecurityController::logout',  '_route' => 'logout',);
        }

        if (0 === strpos($pathinfo, '/posts')) {
            if (0 === strpos($pathinfo, '/posts/b')) {
                // allposts
                if ('/posts/b' === $pathinfo) {
                    return array (  '_controller' => 'Acme\\PostBundle\\Controller\\PostsController::allPostsAction',  '_route' => 'allposts',);
                }

                // post_likePost
                if (preg_match('#^/posts/b/(?P<id>[^/]++)/likePost(?:\\.(?P<format>json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_likePost')), array (  '_controller' => 'Acme\\PostBundle\\Controller\\PostsController::likePostAction',  'format' => 'html',));
                }

                // post_removeLikePost
                if (preg_match('#^/posts/b/(?P<id>[^/]++)/removeLikePost(?:\\.(?P<format>json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_removeLikePost')), array (  '_controller' => 'Acme\\PostBundle\\Controller\\PostsController::removeLikePostAction',  'format' => 'html',));
                }

            }

            // myposts
            if ('/posts/myposts' === $pathinfo) {
                return array (  '_controller' => 'Acme\\PostBundle\\Controller\\PostsController::myPostsAction',  '_route' => 'myposts',);
            }

            // topposts
            if ('/posts/topposts' === $pathinfo) {
                return array (  '_controller' => 'Acme\\PostBundle\\Controller\\PostsController::topPostsAction',  '_route' => 'topposts',);
            }

            // acme_post_report_updatedevents
            if ('/posts/report/allposts.csv' === $pathinfo) {
                return array (  '_controller' => 'Acme\\PostBundle\\Controller\\ReportController::updatedEventsAction',  '_route' => 'acme_post_report_updatedevents',);
            }

            // post_new
            if ('/posts/new' === $pathinfo) {
                return array (  '_controller' => 'Acme\\PostBundle\\Controller\\CRUDController::newAction',  '_route' => 'post_new',);
            }

            // post_create
            if ('/posts/create' === $pathinfo) {
                return array (  '_controller' => 'Acme\\PostBundle\\Controller\\CRUDController::createAction',  '_route' => 'post_create',);
            }

            // post_edit
            if (preg_match('#^/posts/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_edit')), array (  '_controller' => 'Acme\\PostBundle\\Controller\\CRUDController::editAction',));
            }

            // post_update
            if (preg_match('#^/posts/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_update')), array (  '_controller' => 'Acme\\PostBundle\\Controller\\CRUDController::updateAction',));
            }

        }

        // post_delete
        if (preg_match('#^/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_delete')), array (  '_controller' => 'Acme\\PostBundle\\Controller\\CRUDController::deleteAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = urldecode($pathinfo);

        // console
        if (rtrim($pathinfo, '/') === '/console') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_console;
            }
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'console');
            }
            return array (  '_controller' => 'CoreSphere\\ConsoleBundle\\Controller\\ConsoleController::indexAction',  '_route' => 'console',);
        }
        not_console:

        // console_exec
        if (0 === strpos($pathinfo, '/console') && preg_match('#^/console(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_console_exec;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CoreSphere\\ConsoleBundle\\Controller\\ConsoleController::execAction',  '_format' => 'json',)), array('_route' => 'console_exec'));
        }
        not_console_exec:

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
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
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        if (0 === strpos($pathinfo, '/mobile')) {
            // MyAppMobileBundle_homepage
            if (rtrim($pathinfo, '/') === '/mobile') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'MyAppMobileBundle_homepage');
                }
                return array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\DefaultController::indexAction',  '_route' => 'MyAppMobileBundle_homepage',);
            }

            // MyAppMobileBundle_hebergement
            if ($pathinfo === '/mobile/hebergements.html') {
                return array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\HebergementController::hebergementIndexAction',  '_route' => 'MyAppMobileBundle_hebergement',);
            }

            // MyAppMobileBundle_hebergement_region_ajax
            if ($pathinfo === '/mobile/hebergements_region.html') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_MyAppMobileBundle_hebergement_region_ajax;
                }
                return array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\HebergementController::hebergementRegionAjaxAction',  '_route' => 'MyAppMobileBundle_hebergement_region_ajax',);
            }
            not_MyAppMobileBundle_hebergement_region_ajax:

            // MyAppMobileBundle_hebergement_ville_ajax
            if ($pathinfo === '/mobile/hebergements_ville.html') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_MyAppMobileBundle_hebergement_ville_ajax;
                }
                return array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\HebergementController::hebergementVilleAjaxAction',  '_route' => 'MyAppMobileBundle_hebergement_ville_ajax',);
            }
            not_MyAppMobileBundle_hebergement_ville_ajax:

            // MyAppMobileBundle_hebergement_resultat_canada
            if ($pathinfo === '/mobile/hebergements_resultats_canada.html') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_MyAppMobileBundle_hebergement_resultat_canada;
                }
                return array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\HebergementController::hebergementResultatCanadaAction',  '_route' => 'MyAppMobileBundle_hebergement_resultat_canada',);
            }
            not_MyAppMobileBundle_hebergement_resultat_canada:

            // MyAppMobileBundle_hebergement_resultat_province_ajax
            if (0 === strpos($pathinfo, '/mobile/hebergements_province') && preg_match('#^/mobile/hebergements_province_(?P<id>[^/\\.]+?)\\.html(?:/(?P<page>[^\\.]+?))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_MyAppMobileBundle_hebergement_resultat_province_ajax;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\HebergementController::hebergementResultatProvinceAjaxAction',  'id' => 'id',  'page' => 'page',)), array('_route' => 'MyAppMobileBundle_hebergement_resultat_province_ajax'));
            }
            not_MyAppMobileBundle_hebergement_resultat_province_ajax:

            // MyAppMobileBundle_hebergement_resultat_region_ajax
            if (0 === strpos($pathinfo, '/mobile/hebergements_resultats_region') && preg_match('#^/mobile/hebergements_resultats_region_(?P<id>[^/\\.]+?)\\.html(?:/(?P<page>[^\\.]+?))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_MyAppMobileBundle_hebergement_resultat_region_ajax;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\HebergementController::hebergementResultatRegionAjaxAction',  'id' => 'id',  'page' => 'page',)), array('_route' => 'MyAppMobileBundle_hebergement_resultat_region_ajax'));
            }
            not_MyAppMobileBundle_hebergement_resultat_region_ajax:

            // MyAppMobileBundle_hebergement_resultat_ville_ajax
            if (0 === strpos($pathinfo, '/mobile/hebergements_resultats') && preg_match('#^/mobile/hebergements_resultats_(?P<id>[^/\\.]+?)\\.html(?:/(?P<page>[^\\.]+?))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_MyAppMobileBundle_hebergement_resultat_ville_ajax;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\HebergementController::hebergementResultatVilleAjaxAction',  'id' => 'id',  'page' => 'page',)), array('_route' => 'MyAppMobileBundle_hebergement_resultat_ville_ajax'));
            }
            not_MyAppMobileBundle_hebergement_resultat_ville_ajax:

            // mobile_generic_detail
            if (preg_match('#^/mobile/(?P<section>[^/_]+?)_(?P<id>[^_\\.]+?)\\.html$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_mobile_generic_detail;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\HebergementController::genericCustomerAction',  'section' => 'section',  'id' => 'id',)), array('_route' => 'mobile_generic_detail'));
            }
            not_mobile_generic_detail:

            // MyAppMobileBundle_detail_hebergement
            if (0 === strpos($pathinfo, '/mobile/hebergements') && preg_match('#^/mobile/hebergements_(?P<id>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_MyAppMobileBundle_detail_hebergement;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\HebergementController::hebergementDetailAction',  'id' => 'id',)), array('_route' => 'MyAppMobileBundle_detail_hebergement'));
            }
            not_MyAppMobileBundle_detail_hebergement:

            // MyAppMobileBundle_detail_chambre
            if (0 === strpos($pathinfo, '/mobile/chambres') && preg_match('#^/mobile/chambres_(?P<id>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_MyAppMobileBundle_detail_chambre;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\HebergementController::chambreDetailAction',  'id' => 'id',)), array('_route' => 'MyAppMobileBundle_detail_chambre'));
            }
            not_MyAppMobileBundle_detail_chambre:

            // MyAppMobileBundle_detail_forfait
            if (0 === strpos($pathinfo, '/mobile/forfaits') && preg_match('#^/mobile/forfaits_(?P<id>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_MyAppMobileBundle_detail_forfait;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\HebergementController::forfaitDetailAction',  'id' => 'id',)), array('_route' => 'MyAppMobileBundle_detail_forfait'));
            }
            not_MyAppMobileBundle_detail_forfait:

            // MyAppMobileBundle_detail_corporatif
            if (0 === strpos($pathinfo, '/mobile/corporatif') && preg_match('#^/mobile/corporatif_(?P<id>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_MyAppMobileBundle_detail_corporatif;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\HebergementController::corporatifDetailAction',  'id' => 'id',)), array('_route' => 'MyAppMobileBundle_detail_corporatif'));
            }
            not_MyAppMobileBundle_detail_corporatif:

            // MyAppMobileBundle_detail_activite
            if (0 === strpos($pathinfo, '/mobile/activites_services') && preg_match('#^/mobile/activites_services_(?P<id>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_MyAppMobileBundle_detail_activite;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\HebergementController::activiteDetailAction',  'id' => 'id',)), array('_route' => 'MyAppMobileBundle_detail_activite'));
            }
            not_MyAppMobileBundle_detail_activite:

            // MyAppMobileBundle_detail_galerie
            if (0 === strpos($pathinfo, '/mobile/galerie_photo') && preg_match('#^/mobile/galerie_photo_(?P<id>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_MyAppMobileBundle_detail_galerie;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\HebergementController::galerieDetailAction',  'id' => 'id',)), array('_route' => 'MyAppMobileBundle_detail_galerie'));
            }
            not_MyAppMobileBundle_detail_galerie:

            // MyAppMobileBundle_detail_sante
            if (0 === strpos($pathinfo, '/mobile/centre_sante_spa') && preg_match('#^/mobile/centre_sante_spa_(?P<id>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_MyAppMobileBundle_detail_sante;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\HebergementController::santeDetailAction',  'id' => 'id',)), array('_route' => 'MyAppMobileBundle_detail_sante'));
            }
            not_MyAppMobileBundle_detail_sante:

            // MyAppMobileBundle_detail_restaurant
            if (0 === strpos($pathinfo, '/mobile/restaurant') && preg_match('#^/mobile/restaurant_(?P<id>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_MyAppMobileBundle_detail_restaurant;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\HebergementController::restaurantDetailAction',  'id' => 'id',)), array('_route' => 'MyAppMobileBundle_detail_restaurant'));
            }
            not_MyAppMobileBundle_detail_restaurant:

            // MyAppMobileBundle_detail_information
            if (0 === strpos($pathinfo, '/mobile/information_reservation') && preg_match('#^/mobile/information_reservation_(?P<id>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_MyAppMobileBundle_detail_information;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\HebergementController::informationDetailAction',  'id' => 'id',)), array('_route' => 'MyAppMobileBundle_detail_information'));
            }
            not_MyAppMobileBundle_detail_information:

            // MyAppMobileBundle_detail_direction
            if (0 === strpos($pathinfo, '/mobile/direction_routieres') && preg_match('#^/mobile/direction_routieres_(?P<id>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_MyAppMobileBundle_detail_direction;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\HebergementController::directionDetailAction',  'id' => 'id',)), array('_route' => 'MyAppMobileBundle_detail_direction'));
            }
            not_MyAppMobileBundle_detail_direction:

            // MyAppMobileBundle_demande_reservation
            if ($pathinfo === '/mobile/demande_reservation.html') {
                return array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\HebergementController::demandeReservationAction',  '_route' => 'MyAppMobileBundle_demande_reservation',);
            }

            // MyAppMobileBundle_hebergement_en
            if ($pathinfo === '/mobile/accommodation.html') {
                return array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\HebergementController::hebergementIndexAction',  '_route' => 'MyAppMobileBundle_hebergement_en',);
            }

            // MyAppMobileBundle_forfait
            if ($pathinfo === '/mobile/forfaits.html') {
                return array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\ForfaitController::forfaitIndexAction',  '_route' => 'MyAppMobileBundle_forfait',);
            }

            // MyAppMobileBundle_forfait_en
            if ($pathinfo === '/mobile/packages.html') {
                return array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\ForfaitController::forfaitIndexAction',  '_route' => 'MyAppMobileBundle_forfait_en',);
            }

            // MyAppMobileBundle_corpo
            if ($pathinfo === '/mobile/corporatif_evenement.html') {
                return array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\CorpoController::corpoIndexAction',  '_route' => 'MyAppMobileBundle_corpo',);
            }

            // MyAppMobileBundle_corpo_en
            if ($pathinfo === '/mobile/corporate_events.html') {
                return array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\CorpoController::corpoIndexAction',  '_route' => 'MyAppMobileBundle_corpo_en',);
            }

            // MyAppMobileBundle_promotion
            if ($pathinfo === '/mobile/tarifs_derniere_minute_et_promotions.html') {
                return array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\PromotionController::promotionIndexAction',  '_route' => 'MyAppMobileBundle_promotion',);
            }

            // MyAppMobileBundle_promotion_en
            if ($pathinfo === '/mobile/last_minute_deals_and_promotions.html') {
                return array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\PromotionController::promotionIndexAction',  '_route' => 'MyAppMobileBundle_promotion_en',);
            }

            // MyAppMobileBundle_sante
            if ($pathinfo === '/mobile/centres_sante_spas.html') {
                return array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\SanteController::SanteIndexAction',  '_route' => 'MyAppMobileBundle_sante',);
            }

            // MyAppMobileBundle_sante_en
            if ($pathinfo === '/mobile/health_centers_spas.html') {
                return array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\SanteController::SanteIndexAction',  '_route' => 'MyAppMobileBundle_sante_en',);
            }

            // MyAppMobileBundle_attrait
            if ($pathinfo === '/mobile/attraits_activites.html') {
                return array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\AttraitController::attraitIndexAction',  '_route' => 'MyAppMobileBundle_attrait',);
            }

            // MyAppMobileBundle_attrait_en
            if ($pathinfo === '/mobile/activities_attractions.html') {
                return array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\AttraitController::attraitIndexAction',  '_route' => 'MyAppMobileBundle_attrait_en',);
            }

            // MyAppMobileBundle_restaurant
            if ($pathinfo === '/mobile/restaurants.html') {
                return array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\RestaurantController::restaurantIndexAction',  '_route' => 'MyAppMobileBundle_restaurant',);
            }

            // MyAppMobileBundle_restaurant_en
            if ($pathinfo === '/mobile/restaurants-en.html') {
                return array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\RestaurantController::restaurantIndexAction',  '_route' => 'MyAppMobileBundle_restaurant_en',);
            }

        }

        // _accueil
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_accueil');
            }
            return array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\DefaultController::indexAction',  '_route' => '_accueil',);
        }

        // _accueilen
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_accueilen');
            }
            return array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\DefaultController::indexAction',  '_route' => '_accueilen',);
        }

        // _accueil_province
        if (0 === strpos($pathinfo, '/accueil_province') && preg_match('#^/accueil_province_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\DefaultController::showprovinceAction',  'name' => 'name',)), array('_route' => '_accueil_province'));
        }

        // _accueil_provinceen
        if (0 === strpos($pathinfo, '/home_province') && preg_match('#^/home_province_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\DefaultController::showprovinceAction',  'name' => 'name',)), array('_route' => '_accueil_provinceen'));
        }

        // _accueil_region
        if (0 === strpos($pathinfo, '/accueil_region') && preg_match('#^/accueil_region_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\DefaultController::showregionAction',  'name' => 'name',)), array('_route' => '_accueil_region'));
        }

        // _accueil_regionen
        if (0 === strpos($pathinfo, '/home_region') && preg_match('#^/home_region_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\DefaultController::showregionAction',  'name' => 'name',)), array('_route' => '_accueil_regionen'));
        }

        // _forfaitsfr
        if ($pathinfo === '/forfaits.html') {
            return array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\ForfaitsController::indexAction',  '_route' => '_forfaitsfr',);
        }

        // _forfaitsen
        if ($pathinfo === '/packages.html') {
            return array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\ForfaitsController::indexAction',  '_route' => '_forfaitsen',);
        }

        // _forfaitsprovincefr
        if (0 === strpos($pathinfo, '/forfaits_province') && preg_match('#^/forfaits_province_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\ForfaitsController::provinceforfaitAction',  'name' => 'name',)), array('_route' => '_forfaitsprovincefr'));
        }

        // _forfaitsprovinceen
        if (0 === strpos($pathinfo, '/packages_province') && preg_match('#^/packages_province_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\ForfaitsController::provinceforfaitAction',  'name' => 'name',)), array('_route' => '_forfaitsprovinceen'));
        }

        // _forfaitsregionsfr
        if (0 === strpos($pathinfo, '/forfaits_region') && preg_match('#^/forfaits_region_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\ForfaitsController::regionforfaitAction',  'name' => 'name',)), array('_route' => '_forfaitsregionsfr'));
        }

        // _forfaitsregionsen
        if (0 === strpos($pathinfo, '/package_region') && preg_match('#^/package_region_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\ForfaitsController::regionforfaitAction',  'name' => 'name',)), array('_route' => '_forfaitsregionsen'));
        }

        // _forfaitsvillesfr
        if (0 === strpos($pathinfo, '/forfaits_ville') && preg_match('#^/forfaits_ville_(?P<name>[^/\\.]+?)\\.html/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_forfaitsvillesfr');
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\ForfaitsController::villeforfaitAction',  'name' => 'name',)), array('_route' => '_forfaitsvillesfr'));
        }

        // _forfaitsvillesen
        if (0 === strpos($pathinfo, '/city_packages') && preg_match('#^/city_packages_(?P<name>[^/\\.]+?)\\.html/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_forfaitsvillesen');
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\ForfaitsController::villeforfaitAction',  'name' => 'name',)), array('_route' => '_forfaitsvillesen'));
        }

        // _forfaitsactiviteprovincefr
        if (0 === strpos($pathinfo, '/forfaits') && preg_match('#^/forfaits_(?P<activite>[^/_]+?)_province_(?P<name>[^_\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\ForfaitsController::displayActiviteProvinceAction',  'activite' => 'activite',  'name' => 'name',)), array('_route' => '_forfaitsactiviteprovincefr'));
        }

        // _forfaitsactiviteprovinceen
        if (0 === strpos($pathinfo, '/packages') && preg_match('#^/packages_(?P<activite>[^/_]+?)_province_(?P<name>[^_\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\ForfaitsController::displayActiviteProvinceAction',  'activite' => 'activite',  'name' => 'name',)), array('_route' => '_forfaitsactiviteprovinceen'));
        }

        // _forfaitsactiviteregion
        if (0 === strpos($pathinfo, '/forfaits') && preg_match('#^/forfaits_(?P<activite>[^/_]+?)_region_(?P<name>[^_\\.]+?)\\.html(?:/(?P<page>[^\\.]+?))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\ForfaitsController::displayActiviteRegionAction',  'activite' => 'activite',  'name' => 'name',  'page' => 'page',)), array('_route' => '_forfaitsactiviteregion'));
        }

        // _forfaitsactiviteregionen
        if (0 === strpos($pathinfo, '/packages') && preg_match('#^/packages_(?P<activite>[^/_]+?)_region_(?P<name>[^_\\.]+?)\\.html(?:/(?P<page>[^\\.]+?))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\ForfaitsController::displayActiviteRegionAction',  'activite' => 'activite',  'name' => 'name',  'page' => 'page',)), array('_route' => '_forfaitsactiviteregionen'));
        }

        // _forfaitsactiviteville
        if (0 === strpos($pathinfo, '/forfaits') && preg_match('#^/forfaits_(?P<activite>[^/_]+?)_ville_(?P<name>[^_\\.]+?)\\.html(?:/(?P<page>[^\\.]+?))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\ForfaitsController::displayActiviteVilleAction',  'activite' => 'activite',  'name' => 'name',  'page' => 'page',)), array('_route' => '_forfaitsactiviteville'));
        }

        // _forfaitsactivitevilleen
        if (0 === strpos($pathinfo, '/packages') && preg_match('#^/packages_(?P<activite>[^/_]+?)_city_(?P<name>[^_\\.]+?)\\.html(?:/(?P<page>[^\\.]+?))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\ForfaitsController::displayActiviteVilleAction',  'activite' => 'activite',  'name' => 'name',  'page' => 'page',)), array('_route' => '_forfaitsactivitevilleen'));
        }

        // _forfaitsactiviteindexfr
        if (0 === strpos($pathinfo, '/forfaits') && preg_match('#^/forfaits_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\ForfaitsController::displayActiviteIndexAction',  'name' => 'name',)), array('_route' => '_forfaitsactiviteindexfr'));
        }

        // _forfaitsactiviteindexen
        if (0 === strpos($pathinfo, '/packages') && preg_match('#^/packages_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\ForfaitsController::displayActiviteIndexAction',  'name' => 'name',)), array('_route' => '_forfaitsactiviteindexen'));
        }

        // _corpoeventsfr
        if ($pathinfo === '/corporatif_evenement.html') {
            return array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::indexAction',  '_route' => '_corpoeventsfr',);
        }

        // _corpoeventsen
        if ($pathinfo === '/corporate_events.html') {
            return array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::indexAction',  '_route' => '_corpoeventsen',);
        }

        // _corpoeventsprovince
        if (0 === strpos($pathinfo, '/corporatif_evenements_province') && preg_match('#^/corporatif_evenements_province_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::listerProvinceAction',  'name' => 'name',)), array('_route' => '_corpoeventsprovince'));
        }

        // _corpoeventsprovincefrajax
        if ($pathinfo === '/reservation.html') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not__corpoeventsprovincefrajax;
            }
            return array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::reservationFormulaireAction',  '_route' => '_corpoeventsprovincefrajax',);
        }
        not__corpoeventsprovincefrajax:

        // _corpoeteventsprovinceen
        if (0 === strpos($pathinfo, '/corporate_events_province') && preg_match('#^/corporate_events_province_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::listerProvinceAction',  'name' => 'name',)), array('_route' => '_corpoeteventsprovinceen'));
        }

        // _corpoeventsregions
        if (0 === strpos($pathinfo, '/corporatif_evenements_region') && preg_match('#^/corporatif_evenements_region_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::listerRegionAction',  'name' => 'name',)), array('_route' => '_corpoeventsregions'));
        }

        // _corpoeventsregionsen
        if (0 === strpos($pathinfo, '/corporate_events_region') && preg_match('#^/corporate_events_region_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::listerRegionAction',  'name' => 'name',)), array('_route' => '_corpoeventsregionsen'));
        }

        // _corpoeventsville
        if (0 === strpos($pathinfo, '/corporatif_evenements_ville') && preg_match('#^/corporatif_evenements_ville_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::listerVilleAction',  'name' => 'name',)), array('_route' => '_corpoeventsville'));
        }

        // _corpoeventsvilleen
        if (0 === strpos($pathinfo, '/corporate_events_city') && preg_match('#^/corporate_events_city_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::listerVilleAction',  'name' => 'name',)), array('_route' => '_corpoeventsvilleen'));
        }

        // _appeloffrefr
        if ($pathinfo === '/corporatif_appel_offre.html') {
            return array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::appelOffreAction',  '_route' => '_appeloffrefr',);
        }

        // _appeloffreen
        if ($pathinfo === '/corporate_call_offers.html') {
            return array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::appelOffreAction',  '_route' => '_appeloffreen',);
        }

        // _formulaireprovinceappeloffre
        if ($pathinfo === '/corporatif_province_appel_offre.html') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not__formulaireprovinceappeloffre;
            }
            return array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::appelOffreProvinceAjaxAction',  '_route' => '_formulaireprovinceappeloffre',);
        }
        not__formulaireprovinceappeloffre:

        // _formulaireregionappeloffre
        if ($pathinfo === '/corporatif_region_appel_offre.html') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not__formulaireregionappeloffre;
            }
            return array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::appelOffreRegionAjaxAction',  '_route' => '_formulaireregionappeloffre',);
        }
        not__formulaireregionappeloffre:

        // _formulairevilleappeloffre
        if ($pathinfo === '/corporatif_ville_appel_offre.html') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not__formulairevilleappeloffre;
            }
            return array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::appelOffreVilleAjaxAction',  '_route' => '_formulairevilleappeloffre',);
        }
        not__formulairevilleappeloffre:

        // _activiteCorporativeGroupefr
        if ($pathinfo === '/activite_corporative.html') {
            return array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::corpoActiviteAction',  '_route' => '_activiteCorporativeGroupefr',);
        }

        // _activitecorpoprovincefr
        if (0 === strpos($pathinfo, '/activite_corporative_province') && preg_match('#^/activite_corporative_province_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::corpoActiviteProvinceAction',  'name' => 'name',)), array('_route' => '_activitecorpoprovincefr'));
        }

        // _activitecorporegionfr
        if (0 === strpos($pathinfo, '/activite_corporative_region') && preg_match('#^/activite_corporative_region_(?P<name>[^/\\.]+?)\\.html(?:/(?P<page>[^\\.]+?))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::corpoActiviteRegionAction',  'name' => 'name',  'page' => 'page',)), array('_route' => '_activitecorporegionfr'));
        }

        // _activitecorpovillefr
        if (0 === strpos($pathinfo, '/activite_corporative_ville') && preg_match('#^/activite_corporative_ville_(?P<name>[^/\\.]+?)\\.html(?:/(?P<page>[^\\.]+?))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::corpoActiviteVilleAction',  'name' => 'name',  'page' => 'page',)), array('_route' => '_activitecorpovillefr'));
        }

        // _activiteCorporativeGroupeen
        if ($pathinfo === '/corporate_activities.html') {
            return array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::corpoActiviteAction',  '_route' => '_activiteCorporativeGroupeen',);
        }

        // _activitecorpoprovinceen
        if (0 === strpos($pathinfo, '/corporate_activities_province') && preg_match('#^/corporate_activities_province_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::corpoActiviteProvinceAction',  'name' => 'name',)), array('_route' => '_activitecorpoprovinceen'));
        }

        // _activitecorporegionen
        if (0 === strpos($pathinfo, '/corporate_activities_region') && preg_match('#^/corporate_activities_region_(?P<name>[^/\\.]+?)\\.html(?:/(?P<page>[^\\.]+?))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::corpoActiviteRegionAction',  'name' => 'name',  'page' => 'page',)), array('_route' => '_activitecorporegionen'));
        }

        // _activitecorpovilleen
        if (0 === strpos($pathinfo, '/corporate_activities_city') && preg_match('#^/corporate_activities_city_(?P<name>[^/\\.]+?)\\.html(?:/(?P<page>[^\\.]+?))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::corpoActiviteVilleAction',  'name' => 'name',  'page' => 'page',)), array('_route' => '_activitecorpovilleen'));
        }

        // _forfaitaffaireindexfr
        if ($pathinfo === '/forfait_affaire.html') {
            return array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::forfaitAffaireIndexAction',  '_route' => '_forfaitaffaireindexfr',);
        }

        // _forfaitaffaireindexen
        if ($pathinfo === '/business_packages.html') {
            return array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::forfaitAffaireIndexAction',  '_route' => '_forfaitaffaireindexen',);
        }

        // _forfaitaffaireprovincefr
        if (0 === strpos($pathinfo, '/forfait_affaire_province') && preg_match('#^/forfait_affaire_province_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::forfaitAffaireProvinceAction',  'name' => 'name',)), array('_route' => '_forfaitaffaireprovincefr'));
        }

        // _forfaitaffaireprovinceen
        if (0 === strpos($pathinfo, '/business_packages_province') && preg_match('#^/business_packages_province_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::forfaitAffaireProvinceAction',  'name' => 'name',)), array('_route' => '_forfaitaffaireprovinceen'));
        }

        // _chambreaffairefr
        if ($pathinfo === '/corporatif_chambre_affaire.html') {
            return array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::chambreAffaireAction',  '_route' => '_chambreaffairefr',);
        }

        // _chambreaffaireen
        if ($pathinfo === '/corporate_room_business.html') {
            return array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::chambreAffaireAction',  '_route' => '_chambreaffaireen',);
        }

        // _chambreaffaireprovincefr
        if (0 === strpos($pathinfo, '/corporatif_chambre_affaire_province') && preg_match('#^/corporatif_chambre_affaire_province_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::chambreAffaireProvinceAction',  'name' => 'name',)), array('_route' => '_chambreaffaireprovincefr'));
        }

        // _chambreaffaireprovinceen
        if (0 === strpos($pathinfo, '/corporate_room_business_province') && preg_match('#^/corporate_room_business_province_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::chambreAffaireProvinceAction',  'name' => 'name',)), array('_route' => '_chambreaffaireprovinceen'));
        }

        // _chambreaffaireregionfr
        if (0 === strpos($pathinfo, '/corporatif_chambre_affaire_region') && preg_match('#^/corporatif_chambre_affaire_region_(?P<name>[^/\\.]+?)\\.html(?:/(?P<page>[^\\.]+?))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::chambreAffaireRegionAction',  'name' => 'name',  'page' => 'page',)), array('_route' => '_chambreaffaireregionfr'));
        }

        // _chambreaffaireregionen
        if (0 === strpos($pathinfo, '/corporate_room_business_region') && preg_match('#^/corporate_room_business_region_(?P<name>[^/\\.]+?)\\.html(?:/(?P<page>[^\\.]+?))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::chambreAffaireRegionAction',  'name' => 'name',  'page' => 'page',)), array('_route' => '_chambreaffaireregionen'));
        }

        // _chambreaffairevillefr
        if (0 === strpos($pathinfo, '/corporatif_chambre_affaire_ville') && preg_match('#^/corporatif_chambre_affaire_ville_(?P<name>[^/\\.]+?)\\.html(?:/(?P<page>[^\\.]+?))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::chambreAffaireVilleAction',  'name' => 'name',  'page' => 'page',)), array('_route' => '_chambreaffairevillefr'));
        }

        // _chambreaffairevilleen
        if (0 === strpos($pathinfo, '/corporate_room_business_city') && preg_match('#^/corporate_room_business_city_(?P<name>[^/\\.]+?)\\.html(?:/(?P<page>[^\\.]+?))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::chambreAffaireVilleAction',  'name' => 'name',  'page' => 'page',)), array('_route' => '_chambreaffairevilleen'));
        }

        // _locationsallereunionfr
        if ($pathinfo === '/location_salle_reunion.html') {
            return array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::locationSalleReunionAction',  '_route' => '_locationsallereunionfr',);
        }

        // _locationsallereunionen
        if ($pathinfo === '/meeting room rental.html') {
            return array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::locationSalleReunionAction',  '_route' => '_locationsallereunionen',);
        }

        // _locationsallereunionprovincefr
        if (0 === strpos($pathinfo, '/location_salle_reunion_province') && preg_match('#^/location_salle_reunion_province_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::locationSalleReunionProvinceAction',  'name' => 'name',)), array('_route' => '_locationsallereunionprovincefr'));
        }

        // _locationsallereunionprovinceen
        if (0 === strpos($pathinfo, '/meeting room rental_province') && preg_match('#^/meeting room rental_province_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::locationSalleReunionProvinceAction',  'name' => 'name',)), array('_route' => '_locationsallereunionprovinceen'));
        }

        // _locationsallereunionregionfr
        if (0 === strpos($pathinfo, '/location_salle_reunion_region') && preg_match('#^/location_salle_reunion_region_(?P<name>[^/\\.]+?)\\.html(?:/(?P<page>[^\\.]+?))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::locationSalleReunionRegionAction',  'name' => 'name',  'page' => 'page',)), array('_route' => '_locationsallereunionregionfr'));
        }

        // _locationsallereunionregionen
        if (0 === strpos($pathinfo, '/meeting room rental_region') && preg_match('#^/meeting room rental_region_(?P<name>[^/\\.]+?)\\.html(?:/(?P<page>[^\\.]+?))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::locationSalleReunionRegionAction',  'name' => 'name',  'page' => 'page',)), array('_route' => '_locationsallereunionregionen'));
        }

        // _locationsallereunionvillefr
        if (0 === strpos($pathinfo, '/location_salle_reunion_ville') && preg_match('#^/location_salle_reunion_ville_(?P<name>[^/\\.]+?)\\.html(?:/(?P<page>[^\\.]+?))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::locationSalleReunionVilleAction',  'name' => 'name',  'page' => 'page',)), array('_route' => '_locationsallereunionvillefr'));
        }

        // _locationsallereunionvilleen
        if (0 === strpos($pathinfo, '/meeting room rental_ville') && preg_match('#^/meeting room rental_ville_(?P<name>[^/\\.]+?)\\.html(?:/(?P<page>[^\\.]+?))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::locationSalleReunionVilleAction',  'name' => 'name',  'page' => 'page',)), array('_route' => '_locationsallereunionvilleen'));
        }

        // _centersante
        if ($pathinfo === '/centres_sante_spas.html') {
            return array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CentersanteController::indexAction',  '_route' => '_centersante',);
        }

        // _centersanteen
        if ($pathinfo === '/health_centers_spas.html') {
            return array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CentersanteController::indexAction',  '_route' => '_centersanteen',);
        }

        // _choisirprovincesoin
        if (0 === strpos($pathinfo, '/centres_sante_spas_province') && preg_match('#^/centres_sante_spas_province_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CentersanteController::provincesoinAction',  'name' => 'name',)), array('_route' => '_choisirprovincesoin'));
        }

        // _choisirprovincesoinen
        if (0 === strpos($pathinfo, '/health_centers_spas_province') && preg_match('#^/health_centers_spas_province_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CentersanteController::provincesoinAction',  'name' => 'name',)), array('_route' => '_choisirprovincesoinen'));
        }

        // _centersanteIndex
        if (0 === strpos($pathinfo, '/centres_sante_spas_region') && preg_match('#^/centres_sante_spas_region_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CentersanteController::listerAction',  'name' => 'name',)), array('_route' => '_centersanteIndex'));
        }

        // _centersanteIndexen
        if (0 === strpos($pathinfo, '/health_centers_spas_region') && preg_match('#^/health_centers_spas_region_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CentersanteController::listerAction',  'name' => 'name',)), array('_route' => '_centersanteIndexen'));
        }

        // _centersanteville
        if (0 === strpos($pathinfo, '/centres_sante_spas_ville') && preg_match('#^/centres_sante_spas_ville_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CentersanteController::villesoinAction',  'name' => 'name',)), array('_route' => '_centersanteville'));
        }

        // _centersantevilleen
        if (0 === strpos($pathinfo, '/health_centers_spas_city') && preg_match('#^/health_centers_spas_city_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CentersanteController::villesoinAction',  'name' => 'name',)), array('_route' => '_centersantevilleen'));
        }

        // _typesdesoins
        if (0 === strpos($pathinfo, '/centres_sante_spas_soin') && preg_match('#^/centres_sante_spas_soin_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CentersanteController::detailsoinAction',  'name' => 'name',)), array('_route' => '_typesdesoins'));
        }

        // _typesdesoinsen
        if (0 === strpos($pathinfo, '/health_centers_spas_care') && preg_match('#^/health_centers_spas_care_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CentersanteController::detailsoinAction',  'name' => 'name',)), array('_route' => '_typesdesoinsen'));
        }

        // _provincetypesoin
        if (0 === strpos($pathinfo, '/soin') && preg_match('#^/soin_(?P<name>[^/_]+?)_province_(?P<province>[^_\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CentersanteController::typedesoinprovinceAction',  'name' => 'name',  'province' => 'province',)), array('_route' => '_provincetypesoin'));
        }

        // _provincetypesoinen
        if (0 === strpos($pathinfo, '/care') && preg_match('#^/care_(?P<name>[^/_]+?)_province_(?P<province>[^_\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CentersanteController::typedesoinprovinceAction',  'name' => 'name',  'province' => 'province',)), array('_route' => '_provincetypesoinen'));
        }

        // _typedesoinregion
        if (0 === strpos($pathinfo, '/soin') && preg_match('#^/soin_(?P<name>[^/_]+?)_region_(?P<region>[^_\\.]+?)\\.html(?:/(?P<page>[^\\.]+?))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CentersanteController::typedesoinregionAction',  'name' => 'name',  'region' => 'region',  'page' => 'page',)), array('_route' => '_typedesoinregion'));
        }

        // _typedesoinregionen
        if (0 === strpos($pathinfo, '/care') && preg_match('#^/care_(?P<name>[^/_]+?)_region_(?P<region>[^_\\.]+?)\\.html(?:/(?P<page>[^\\.]+?))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CentersanteController::typedesoinregionAction',  'name' => 'name',  'region' => 'region',  'page' => 'page',)), array('_route' => '_typedesoinregionen'));
        }

        // _typedesoinville
        if (0 === strpos($pathinfo, '/soin') && preg_match('#^/soin_(?P<name>[^/_]+?)_ville_(?P<ville>[^_\\.]+?)\\.html(?:/(?P<page>[^\\.]+?))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CentersanteController::typedesoinvilleAction',  'name' => 'name',  'ville' => 'ville',  'page' => 'page',)), array('_route' => '_typedesoinville'));
        }

        // _typedesoinvilleen
        if (0 === strpos($pathinfo, '/care') && preg_match('#^/care_(?P<name>[^/_]+?)_city_(?P<ville>[^_\\.]+?)\\.html(?:/(?P<page>[^\\.]+?))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CentersanteController::typedesoinvilleAction',  'name' => 'name',  'ville' => 'ville',  'page' => 'page',)), array('_route' => '_typedesoinvilleen'));
        }

        // _attraitsactivity
        if ($pathinfo === '/attraits_activites.html') {
            return array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\AttraitsactivityController::indexAction',  '_route' => '_attraitsactivity',);
        }

        // _attraitsactivityen
        if ($pathinfo === '/activities_attractions.html') {
            return array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\AttraitsactivityController::indexAction',  '_route' => '_attraitsactivityen',);
        }

        // _attraitsIndex
        if (0 === strpos($pathinfo, '/attraits_activites_region') && preg_match('#^/attraits_activites_region_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\AttraitsactivityController::listerRegionAction',  'name' => 'name',)), array('_route' => '_attraitsIndex'));
        }

        // _attraitsIndexen
        if (0 === strpos($pathinfo, '/activities_attractions_region') && preg_match('#^/activities_attractions_region_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\AttraitsactivityController::listerRegionAction',  'name' => 'name',)), array('_route' => '_attraitsIndexen'));
        }

        // _attraitsVille
        if (0 === strpos($pathinfo, '/attraits_activites_ville') && preg_match('#^/attraits_activites_ville_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\AttraitsactivityController::listerVilleAction',  'name' => 'name',)), array('_route' => '_attraitsVille'));
        }

        // _attraitsVilleen
        if (0 === strpos($pathinfo, '/activities_attractions_city') && preg_match('#^/activities_attractions_city_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\AttraitsactivityController::listerVilleAction',  'name' => 'name',)), array('_route' => '_attraitsVilleen'));
        }

        // _attraitsprovince
        if (0 === strpos($pathinfo, '/attraits_activites_province') && preg_match('#^/attraits_activites_province_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\AttraitsactivityController::attraitprovinceAction',  'name' => 'name',)), array('_route' => '_attraitsprovince'));
        }

        // _attraitsprovinceen
        if (0 === strpos($pathinfo, '/activities_attractions_province') && preg_match('#^/activities_attractions_province_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\AttraitsactivityController::attraitprovinceAction',  'name' => 'name',)), array('_route' => '_attraitsprovinceen'));
        }

        // _attraitsactivitedefault
        if (0 === strpos($pathinfo, '/attraits_activites') && preg_match('#^/attraits_activites_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\AttraitsactivityController::attraitActiviteDefaultAction',  'name' => 'name',)), array('_route' => '_attraitsactivitedefault'));
        }

        // _attraitsactivitedefaulten
        if (0 === strpos($pathinfo, '/activities_attractions') && preg_match('#^/activities_attractions_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\AttraitsactivityController::attraitActiviteDefaultAction',  'name' => 'name',)), array('_route' => '_attraitsactivitedefaulten'));
        }

        // _attraitsprovinceactivite
        if (0 === strpos($pathinfo, '/province') && preg_match('#^/province_(?P<province>[^/_]+?)_attraits_activites_(?P<name>[^_\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\AttraitsactivityController::attraitProvinceActiviteAction',  'province' => 'province',  'name' => 'name',)), array('_route' => '_attraitsprovinceactivite'));
        }

        // _attraitsprovinceactiviteen
        if (0 === strpos($pathinfo, '/province') && preg_match('#^/province_(?P<province>[^/_]+?)_activities_attractions_(?P<name>[^_\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\AttraitsactivityController::attraitProvinceActiviteAction',  'province' => 'province',  'name' => 'name',)), array('_route' => '_attraitsprovinceactiviteen'));
        }

        // _attraitslistactivity
        if (0 === strpos($pathinfo, '/region') && preg_match('#^/region_(?P<region>[^/_]+?)_attraits_activites_(?P<name>[^_\\.]+?)\\.html(?:/(?P<page>[^\\.]+?))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\AttraitsactivityController::attraitRegionActiviteAction',  'region' => 'region',  'name' => 'name',  'page' => 'page',)), array('_route' => '_attraitslistactivity'));
        }

        // _attraitslistactivityen
        if (0 === strpos($pathinfo, '/activities_attractions') && preg_match('#^/activities_attractions_(?P<name>[^/_]+?)_region_(?P<region>[^_\\.]+?)\\.html(?:/(?P<page>[^\\.]+?))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\AttraitsactivityController::attraitRegionActiviteAction',  'region' => 'region',  'name' => 'name',  'page' => 'page',)), array('_route' => '_attraitslistactivityen'));
        }

        // _attraitslistactivityajax
        if (0 === strpos($pathinfo, '/region') && preg_match('#^/region_(?P<region>[^/_]+?)_attraits_activites_(?P<name>[^_\\.]+?)\\.html(?:/(?P<page>[^\\.]+?))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not__attraitslistactivityajax;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\AttraitsactivityController::attraitRegionActiviteAction',  'region' => 'region',  'name' => 'name',  'page' => 'page',)), array('_route' => '_attraitslistactivityajax'));
        }
        not__attraitslistactivityajax:

        // _attraitslistactivityville
        if (0 === strpos($pathinfo, '/ville') && preg_match('#^/ville_(?P<ville>[^/_]+?)_attraits_activites_(?P<name>[^_\\.]+?)\\.html(?:/(?P<page>[^\\.]+?))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\AttraitsactivityController::attraitVilleActiviteAction',  'ville' => 'ville',  'name' => 'name',  'page' => 'page',)), array('_route' => '_attraitslistactivityville'));
        }

        // _attraitslistactivityvilleen
        if (0 === strpos($pathinfo, '/city') && preg_match('#^/city_(?P<ville>[^/_]+?)_activities_attractions_(?P<name>[^_\\.]+?)\\.html(?:/(?P<page>[^\\.]+?))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\AttraitsactivityController::attraitVilleActiviteAction',  'ville' => 'ville',  'name' => 'name',  'page' => 'page',)), array('_route' => '_attraitslistactivityvilleen'));
        }

        // _promotion
        if (0 === strpos($pathinfo, '/tarifs_derniere_minute_et_promotions.html') && preg_match('#^/tarifs_derniere_minute_et_promotions\\.html(?:/(?P<page>[^/]+?))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\DestinationController::indexAction',  'page' => 'page',)), array('_route' => '_promotion'));
        }

        // _promotionen
        if (0 === strpos($pathinfo, '/last_minute_deals_and_promotions.html') && preg_match('#^/last_minute_deals_and_promotions\\.html(?:/(?P<page>[^/]+?))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\DestinationController::indexAction',  'page' => 'page',)), array('_route' => '_promotionen'));
        }

        // _promotionstarifderniereminuteprovince
        if (0 === strpos($pathinfo, '/tarifs_derniere_minute_et_promotions_province') && preg_match('#^/tarifs_derniere_minute_et_promotions_province_(?P<name>[^/\\.]+?)\\.html(?:/(?P<page>[^\\.]+?))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\DestinationController::provincePromotionAction',  'name' => 'name',  'page' => 'page',)), array('_route' => '_promotionstarifderniereminuteprovince'));
        }

        // _promotionstarifderniereminuteprovinceen
        if (0 === strpos($pathinfo, '/last_minute_deals_and_promotions_province') && preg_match('#^/last_minute_deals_and_promotions_province_(?P<name>[^/\\.]+?)\\.html(?:/(?P<page>[^\\.]+?))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\DestinationController::provincePromotionAction',  'name' => 'name',  'page' => 'page',)), array('_route' => '_promotionstarifderniereminuteprovinceen'));
        }

        // _promotionstarifderniereminuteregion
        if (0 === strpos($pathinfo, '/tarifs_derniere_minute_et_promotions_region') && preg_match('#^/tarifs_derniere_minute_et_promotions_region_(?P<name>[^/\\.]+?)\\.html(?:/(?P<page>[^\\.]+?))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\DestinationController::regionPromotionAction',  'name' => 'name',  'page' => 'page',)), array('_route' => '_promotionstarifderniereminuteregion'));
        }

        // _promotionstarifderniereminuteregionen
        if (0 === strpos($pathinfo, '/last_minute_deals_and_promotions_region') && preg_match('#^/last_minute_deals_and_promotions_region_(?P<name>[^/\\.]+?)\\.html(?:/(?P<page>[^\\.]+?))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\DestinationController::regionPromotionAction',  'name' => 'name',  'page' => 'page',)), array('_route' => '_promotionstarifderniereminuteregionen'));
        }

        // _promotionfluxrss
        if ($pathinfo === '/rss_promotions.xml') {
            return array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\DestinationController::fluxRSSAction',  'name' => 'name',  '_route' => '_promotionfluxrss',);
        }

        // _promotionfluxrssen
        if ($pathinfo === '/rss_promotions-en.xml') {
            return array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\DestinationController::fluxRSSEnglishAction',  'name' => 'name',  '_route' => '_promotionfluxrssen',);
        }

        // _promotionfluxrssprovince
        if (0 === strpos($pathinfo, '/rss_promotions_province') && preg_match('#^/rss_promotions_province_(?P<name>[^/\\.]+?)\\.xml$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\DestinationController::fluxRSSProvinceAction',  'name' => 'name',)), array('_route' => '_promotionfluxrssprovince'));
        }

        // _promotionfluxrssprovinceen
        if (0 === strpos($pathinfo, '/rss_promotions_province') && preg_match('#^/rss_promotions_province_(?P<name>[^/\\.]+?)\\.xml$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\DestinationController::fluxRSSProvinceAction',  'name' => 'name',)), array('_route' => '_promotionfluxrssprovinceen'));
        }

        // _promotionfluxrssregion
        if (0 === strpos($pathinfo, '/rss_promotions_region') && preg_match('#^/rss_promotions_region_(?P<name>[^/\\.]+?)\\.xml$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\DestinationController::fluxRSSRegionAction',  'name' => 'name',)), array('_route' => '_promotionfluxrssregion'));
        }

        // _promotionfluxrssregionen
        if (0 === strpos($pathinfo, '/rss_promotions_region') && preg_match('#^/rss_promotions_region_(?P<name>[^/\\.]+?)\\.xml$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\DestinationController::fluxRSSRegionAction',  'name' => 'name',)), array('_route' => '_promotionfluxrssregionen'));
        }

        // _restaurant
        if ($pathinfo === '/restaurants.html') {
            return array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\RestaurantController::indexAction',  '_route' => '_restaurant',);
        }

        // _restaurant_province_index
        if (0 === strpos($pathinfo, '/restaurants_province') && preg_match('#^/restaurants_province_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\RestaurantController::displayprovinceAction',  'name' => 'name',)), array('_route' => '_restaurant_province_index'));
        }

        // _restaurantspecialite
        if (0 === strpos($pathinfo, '/restaurants_specialite') && preg_match('#^/restaurants_specialite_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\RestaurantController::displayspecialiteAction',  'name' => 'name',)), array('_route' => '_restaurantspecialite'));
        }

        // _restaurantregion
        if (0 === strpos($pathinfo, '/restaurants_region') && preg_match('#^/restaurants_region_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\RestaurantController::restaurantregionAction',  'name' => 'name',)), array('_route' => '_restaurantregion'));
        }

        // _listespecialiteregion
        if (0 === strpos($pathinfo, '/restaurants') && preg_match('#^/restaurants_(?P<name>[^/_]+?)_region_(?P<region>[^_\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\RestaurantController::listeSpecialiteRegionAction',  'name' => 'name',  'region' => 'region',)), array('_route' => '_listespecialiteregion'));
        }

        // _restaurantprovincenationalite
        if (0 === strpos($pathinfo, '/restaurants') && preg_match('#^/restaurants_(?P<nationalite>[^/_]+?)_province_(?P<name>[^_\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\RestaurantController::displayProvinceNationaliteAction',  'nationalite' => 'nationalite',  'name' => 'name',)), array('_route' => '_restaurantprovincenationalite'));
        }

        // _hebergementfr
        if ($pathinfo === '/hebergements.html') {
            return array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::indexAction',  '_route' => '_hebergementfr',);
        }

        // _hebergementen
        if ($pathinfo === '/accommodation.html') {
            return array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::indexAction',  '_route' => '_hebergementen',);
        }

        // _hebergementregionsquebecfr
        if (0 === strpos($pathinfo, '/hebergements_region') && preg_match('#^/hebergements_region_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::listerAction',  'name' => 'name',)), array('_route' => '_hebergementregionsquebecfr'));
        }

        // _hebergementregionsquebecen
        if (0 === strpos($pathinfo, '/accommodation_region') && preg_match('#^/accommodation_region_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::listerAction',  'name' => 'name',)), array('_route' => '_hebergementregionsquebecen'));
        }

        // _hebergementprovincefr
        if (0 === strpos($pathinfo, '/hebergements_province') && preg_match('#^/hebergements_province_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::showProvinceAction',  'name' => 'name',)), array('_route' => '_hebergementprovincefr'));
        }

        // _hebergementprovinceen
        if (0 === strpos($pathinfo, '/accommodation_province') && preg_match('#^/accommodation_province_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::showProvinceAction',  'name' => 'name',)), array('_route' => '_hebergementprovinceen'));
        }

        // _hebergementreservationenligne
        if ($pathinfo === '/hebergements_reservation.html') {
            return array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::reservationAction',  '_route' => '_hebergementreservationenligne',);
        }

        // _hebergementdisplayfr
        if (0 === strpos($pathinfo, '/hebergements_ville') && preg_match('#^/hebergements_ville_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::villeHebergementAction',  'name' => 'name',)), array('_route' => '_hebergementdisplayfr'));
        }

        // _hebergementdisplayen
        if (0 === strpos($pathinfo, '/accommodation_city') && preg_match('#^/accommodation_city_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::villeHebergementAction',  'name' => 'name',)), array('_route' => '_hebergementdisplayen'));
        }

        // _hebergementtypefr
        if (0 === strpos($pathinfo, '/hebergements') && preg_match('#^/hebergements_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::stylehebergementAction',  'name' => 'name',)), array('_route' => '_hebergementtypefr'));
        }

        // _hebergementtypeen
        if (0 === strpos($pathinfo, '/accommodation') && preg_match('#^/accommodation_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::stylehebergementAction',  'name' => 'name',)), array('_route' => '_hebergementtypeen'));
        }

        // _hebergementtypeprovincefr
        if (0 === strpos($pathinfo, '/categorie') && preg_match('#^/categorie_(?P<name>[^/_]+?)_province_(?P<province>[^_\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::styleHebergementProvinceAction',  'name' => 'name',  'province' => 'province',)), array('_route' => '_hebergementtypeprovincefr'));
        }

        // _hebergementtypeprovinceen
        if (0 === strpos($pathinfo, '/category') && preg_match('#^/category_(?P<name>[^/_]+?)_province_(?P<province>[^_\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::styleHebergementProvinceAction',  'name' => 'name',  'province' => 'province',)), array('_route' => '_hebergementtypeprovinceen'));
        }

        // _hebergementtyperegionfr
        if (0 === strpos($pathinfo, '/categorie') && preg_match('#^/categorie_(?P<name>[^/_]+?)_region_(?P<region>[^_\\.]+?)\\.html(?:/(?P<page>[^\\./]+?)(?:/(?P<ordre>[^/]+?))?)?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::styleHebergementRegionAction',  'name' => 'name',  'region' => 'region',  'page' => 'page',  'ordre' => 'ordre',)), array('_route' => '_hebergementtyperegionfr'));
        }

        // _hebergementtyperegionen
        if (0 === strpos($pathinfo, '/category') && preg_match('#^/category_(?P<name>[^/_]+?)_region_(?P<region>[^_\\.]+?)\\.html(?:/(?P<page>[^\\./]+?)(?:/(?P<ordre>[^/]+?))?)?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::styleHebergementRegionAction',  'name' => 'name',  'region' => 'region',  'page' => 'page',  'ordre' => 'ordre',)), array('_route' => '_hebergementtyperegionen'));
        }

        // _hebergementtypevillefr
        if (0 === strpos($pathinfo, '/categorie') && preg_match('#^/categorie_(?P<name>[^/_]+?)_ville_(?P<ville>[^_\\.]+?)\\.html(?:/(?P<page>[^\\.]+?))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::styleHebergementVilleAction',  'name' => 'name',  'ville' => 'ville',  'page' => 'page',)), array('_route' => '_hebergementtypevillefr'));
        }

        // _hebergementtypevilleen
        if (0 === strpos($pathinfo, '/category') && preg_match('#^/category_(?P<name>[^/_]+?)_city_(?P<ville>[^_\\.]+?)\\.html(?:/(?P<page>[^\\.]+?))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::styleHebergementVilleAction',  'name' => 'name',  'ville' => 'ville',  'page' => 'page',)), array('_route' => '_hebergementtypevilleen'));
        }

        // _hebergementinfoclient
        if (0 === strpos($pathinfo, '/accueil') && preg_match('#^/accueil_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::infoclientAction',  'name' => 'name',)), array('_route' => '_hebergementinfoclient'));
        }

        // _hebergementinfoclienten
        if (0 === strpos($pathinfo, '/home') && preg_match('#^/home_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::infoclientAction',  'name' => 'name',)), array('_route' => '_hebergementinfoclienten'));
        }

        // _hebergementchambre
        if (0 === strpos($pathinfo, '/chambres_tarifs') && preg_match('#^/chambres_tarifs_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::infochambreAction',  'name' => 'name',)), array('_route' => '_hebergementchambre'));
        }

        // _hebergementchambreen
        if (0 === strpos($pathinfo, '/rooms_rates') && preg_match('#^/rooms_rates_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::infochambreAction',  'name' => 'name',)), array('_route' => '_hebergementchambreen'));
        }

        // _hebergementforfait
        if (0 === strpos($pathinfo, '/forfait_promotion') && preg_match('#^/forfait_promotion_(?P<name>[^/\\.]+?)\\.html(?:/(?P<index>[^\\.]+?))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::infoForfaitAction',  'name' => 'name',  'index' => 'index',)), array('_route' => '_hebergementforfait'));
        }

        // _hebergementforfaiten
        if (0 === strpos($pathinfo, '/package_promotion') && preg_match('#^/package_promotion_(?P<name>[^/\\.]+?)\\.html(?:/(?P<index>[^\\.]+?))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::infoForfaitAction',  'name' => 'name',  'index' => 'index',)), array('_route' => '_hebergementforfaiten'));
        }

        // _hebergementactivite
        if (0 === strpos($pathinfo, '/activites_services') && preg_match('#^/activites_services_(?P<name>[^/\\.]+?)\\.html(?:/(?P<page>[^\\.]+?))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::infoactiviteAction',  'name' => 'name',  'page' => 'page',)), array('_route' => '_hebergementactivite'));
        }

        // _hebergementactiviteen
        if (0 === strpos($pathinfo, '/activities_services') && preg_match('#^/activities_services_(?P<name>[^/\\.]+?)\\.html(?:/(?P<page>[^\\.]+?))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::infoactiviteAction',  'name' => 'name',  'page' => 'page',)), array('_route' => '_hebergementactiviteen'));
        }

        // _hebergementcorporatif
        if (0 === strpos($pathinfo, '/corporatif_evenement') && preg_match('#^/corporatif_evenement_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::infocorporatifAction',  'name' => 'name',)), array('_route' => '_hebergementcorporatif'));
        }

        // _hebergementcorporatifen
        if (0 === strpos($pathinfo, '/corporate_event') && preg_match('#^/corporate_event_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::infocorporatifAction',  'name' => 'name',)), array('_route' => '_hebergementcorporatifen'));
        }

        // _hebergementgalery
        if (0 === strpos($pathinfo, '/galerie_photo') && preg_match('#^/galerie_photo_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::infogaleryAction',  'name' => 'name',)), array('_route' => '_hebergementgalery'));
        }

        // _hebergementgaleryen
        if (0 === strpos($pathinfo, '/photo_gallery') && preg_match('#^/photo_gallery_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::infogaleryAction',  'name' => 'name',)), array('_route' => '_hebergementgaleryen'));
        }

        // _hebergementsoin
        if (0 === strpos($pathinfo, '/centre_sante') && preg_match('#^/centre_sante_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::infosoinAction',  'name' => 'name',)), array('_route' => '_hebergementsoin'));
        }

        // _hebergementsoinen
        if (0 === strpos($pathinfo, '/health_center') && preg_match('#^/health_center_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::infosoinAction',  'name' => 'name',)), array('_route' => '_hebergementsoinen'));
        }

        // _hebergementrestaurant
        if (0 === strpos($pathinfo, '/restaurant') && preg_match('#^/restaurant_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::infoRestaurantAction',  'name' => 'name',)), array('_route' => '_hebergementrestaurant'));
        }

        // _hebergementrestauranten
        if (0 === strpos($pathinfo, '/restaurant-en') && preg_match('#^/restaurant\\-en_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::infoRestaurantAction',  'name' => 'name',)), array('_route' => '_hebergementrestauranten'));
        }

        // _hebergementreservation
        if (0 === strpos($pathinfo, '/information_reservation') && preg_match('#^/information_reservation_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::inforeservationAction',  'name' => 'name',)), array('_route' => '_hebergementreservation'));
        }

        // _hebergementreservationen
        if (0 === strpos($pathinfo, '/information_booking') && preg_match('#^/information_booking_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::inforeservationAction',  'name' => 'name',)), array('_route' => '_hebergementreservationen'));
        }

        // _hebergementdirectionroutiere
        if (0 === strpos($pathinfo, '/directions_routieres') && preg_match('#^/directions_routieres_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::infoDirectionRoutiereAction',  'name' => 'name',  'culture' => 'fr',)), array('_route' => '_hebergementdirectionroutiere'));
        }

        // _hebergementdirectionroutiereen
        if (0 === strpos($pathinfo, '/driving_directions') && preg_match('#^/driving_directions_(?P<name>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::infoDirectionRoutiereAction',  'name' => 'name',  'culture' => 'en',)), array('_route' => '_hebergementdirectionroutiereen'));
        }

        // _classementhebergementregionajax
        if ($pathinfo === '/classement.html') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not__classementhebergementregionajax;
            }
            return array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::classementListeAction',  '_route' => '_classementhebergementregionajax',);
        }
        not__classementhebergementregionajax:

        // _hebergementfluxrss
        if (0 === strpos($pathinfo, '/rss') && preg_match('#^/rss_(?P<name>[^/\\.]+?)\\.xml$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::infoRSSAction',  'name' => 'name',)), array('_route' => '_hebergementfluxrss'));
        }

        // _hebergementfluxenrss
        if (0 === strpos($pathinfo, '/rss') && preg_match('#^/rss_(?P<name>[^/\\-]+?)\\-en\\.xml$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::infoRSSEnAction',  'name' => 'name',)), array('_route' => '_hebergementfluxenrss'));
        }

        // _quisommesnous
        if ($pathinfo === '/qui_sommes_nous.html') {
            return array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\QuisommesnousController::indexAction',  '_route' => '_quisommesnous',);
        }

        // _faq
        if ($pathinfo === '/FAQ.html') {
            return array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\QuisommesnousController::faqAction',  '_route' => '_faq',);
        }

        // _contact
        if ($pathinfo === '/contact.html') {
            return array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\QuisommesnousController::contacteznousAction',  '_route' => '_contact',);
        }

        // _conditionUtilisation
        if ($pathinfo === '/condition_utilisation.html') {
            return array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\QuisommesnousController::conditionutilisationAction',  '_route' => '_conditionUtilisation',);
        }

        // _conditionUtilisation_en
        if ($pathinfo === '/provided use.html') {
            return array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\QuisommesnousController::conditionutilisationAction',  '_route' => '_conditionUtilisation_en',);
        }

        // _sitemap
        if ($pathinfo === '/plan.html') {
            return array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\QuisommesnousController::plandusiteAction',  '_route' => '_sitemap',);
        }

        // _sitemapxml
        if ($pathinfo === '/sitemap.xml') {
            return array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\QuisommesnousController::getReturnSchemaSitemapAction',  '_route' => '_sitemapxml',);
        }

        // _transaction_langue_global
        if (0 === strpos($pathinfo, '/traduction') && preg_match('#^/traduction(?:/(?P<langue>[^/]+?))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\DefaultController::choisirLangueClientAction',  'langue' => 'langue',)), array('_route' => '_transaction_langue_global'));
        }

        // _demandesansitem
        if (preg_match('#^/(?P<section>[^/\\.]+?)\\.html$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\DefaultController::demandeSansItemAction',  'section' => 'section',)), array('_route' => '_demandesansitem'));
        }

        // _propositionmoteurrecherche
        if (0 === strpos($pathinfo, '/resultats.html') && preg_match('#^/resultats\\.html(?:/(?P<resultats>[^/]+?))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::propositionResultatAction',  'resultats' => 'resultats',)), array('_route' => '_propositionmoteurrecherche'));
        }

        if (0 === strpos($pathinfo, '/client')) {
            // logout
            if ($pathinfo === '/client/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_logout;
                }
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'logout',);
            }
            not_logout:

            // _redirectionRole
            if (rtrim($pathinfo, '/') === '/client') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not__redirectionRole;
                }
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_redirectionRole');
                }
                return array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::redirigeEnFonctionRoleAction',  '_route' => '_redirectionRole',);
            }
            not__redirectionRole:

            // _langue_admin_client
            if (0 === strpos($pathinfo, '/client/choisir-langue') && preg_match('#^/client/choisir\\-langue(?:/(?P<langue>[^/]+?)(?:/(?P<id>[^/]+?))?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::traductionLangueAdminAction',  'langue' => 'langue',  'id' => 'id',)), array('_route' => '_langue_admin_client'));
            }

            // _Dashboard_compteCustomer
            if (0 === strpos($pathinfo, '/client/compte.html') && preg_match('#^/client/compte\\.html(?:/(?P<id>\\d+)(?:/(?P<name>[^/]+?)(?:/(?P<fiche>[^/]+?)(?:/(?P<redirect>[^/]+?)(?:/(?P<rechargement>[^/]+?))?)?)?)?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::accessCompteCustomerAction',  'id' => 'id',  'name' => 'name',  'fiche' => 'fiche',  'redirect' => 'redirect',  'rechargement' => 'rechargement',)), array('_route' => '_Dashboard_compteCustomer'));
            }

            // MyAppTextAttrait
            if (0 === strpos($pathinfo, '/client/textes_attrait.html') && preg_match('#^/client/textes_attrait\\.html(?:/(?P<id>\\d+)(?:/(?P<name>[^/]+?)(?:/(?P<redirect>[^/]+?))?)?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::texteAttraitAction',  'id' => 'id',  'name' => 'name',  'redirect' => 'redirect',)), array('_route' => 'MyAppTextAttrait'));
            }

            // MyAppPromotion
            if (0 === strpos($pathinfo, '/client/promotion.html') && preg_match('#^/client/promotion\\.html(?:/(?P<idclient>[^/]+?)(?:/(?P<name>[^/]+?)(?:/(?P<redirect>[^/]+?))?)?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::textpromotionAction',  'idclient' => 'idclient',  'name' => 'name',  'redirect' => 'redirect',)), array('_route' => 'MyAppPromotion'));
            }

            // MyAppForfait
            if (0 === strpos($pathinfo, '/client/forfaits.html') && preg_match('#^/client/forfaits\\.html(?:/(?P<id>\\d+)(?:/(?P<name>[^/]+?)(?:/(?P<msg>[^/]+?)(?:/(?P<redirect>[^/]+?))?)?)?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::forfaitAction',  'id' => 'id',  'name' => 'name',  'msg' => 'msg',  'redirect' => 'redirect',)), array('_route' => 'MyAppForfait'));
            }

            // MyAppForfaitAdd
            if (0 === strpos($pathinfo, '/client/ajouter_forfait.html') && preg_match('#^/client/ajouter_forfait\\.html(?:/(?P<idclient>\\d+)(?:/(?P<name>[^/]+?)(?:/(?P<idforfait>[^/]+?)(?:/(?P<redirect>[^/]+?))?)?)?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::addforfaitAction',  'idclient' => 'idclient',  'name' => 'name',  'idforfait' => 'idforfait',  'redirect' => 'redirect',)), array('_route' => 'MyAppForfaitAdd'));
            }

            // MyAppForfaitUpdate
            if (0 === strpos($pathinfo, '/client/modifier_forfait.html') && preg_match('#^/client/modifier_forfait\\.html(?:/(?P<idclient>[^/]+?)(?:/(?P<name>[^/]+?)(?:/(?P<idforfait>[^/]+?)(?:/(?P<redirect>[^/]+?))?)?)?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::addforfaitAction',  'idclient' => 'idclient',  'name' => 'name',  'idforfait' => 'idforfait',  'redirect' => 'redirect',)), array('_route' => 'MyAppForfaitUpdate'));
            }

            // MyAppForfaitDelete
            if (0 === strpos($pathinfo, '/client/supprimer_forfait.html') && preg_match('#^/client/supprimer_forfait\\.html(?:/(?P<idclient>\\d+)(?:/(?P<name>[^/]+?)(?:/(?P<idforfait>\\d+)(?:/(?P<redirect>[^/]+?))?)?)?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::deleteforfaitAction',  'idclient' => 'idclient',  'name' => 'name',  'idforfait' => 'idforfait',  'redirect' => 'redirect',)), array('_route' => 'MyAppForfaitDelete'));
            }

            // MyAppTexteForfait
            if (0 === strpos($pathinfo, '/client/textes_politiques_forfaits.html') && preg_match('#^/client/textes_politiques_forfaits\\.html(?:/(?P<idclient>\\d+)(?:/(?P<name>[^/]+?)(?:/(?P<redirect>[^/]+?))?)?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::addtexteforfaitAction',  'idclient' => 'idclient',  'name' => 'name',  'redirect' => 'redirect',)), array('_route' => 'MyAppTexteForfait'));
            }

            // MyAppTarifHoraire
            if (0 === strpos($pathinfo, '/client/tarifs_horaires.html') && preg_match('#^/client/tarifs_horaires\\.html(?:/(?P<id>\\d+)(?:/(?P<name>[^/]+?)(?:/(?P<redirect>[^/]+?))?)?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::tarifHoraireAction',  'id' => 'id',  'name' => 'name',  'redirect' => 'redirect',)), array('_route' => 'MyAppTarifHoraire'));
            }

            // MyAppPaiementDevise
            if (0 === strpos($pathinfo, '/client/modes_paiements_et_devises.html') && preg_match('#^/client/modes_paiements_et_devises\\.html(?:/(?P<id>\\d+)(?:/(?P<name>[^/]+?)(?:/(?P<msg>[^/]+?)(?:/(?P<redirect>[^/]+?))?)?)?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::paiementDeviseCustomerAction',  'id' => 'id',  'name' => 'name',  'msg' => 'msg',  'redirect' => 'redirect',)), array('_route' => 'MyAppPaiementDevise'));
            }

            // MyAppActiviteHebergement
            if (0 === strpos($pathinfo, '/client/activites_hebergement.html') && preg_match('#^/client/activites_hebergement\\.html(?:/(?P<id>\\d+)(?:/(?P<name>[^/]+?)(?:/(?P<redirect>[^/]+?))?)?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::activiteHebergementAction',  'id' => 'id',  'name' => 'name',  'redirect' => 'redirect',)), array('_route' => 'MyAppActiviteHebergement'));
            }

            // MyAppServiceHebergement
            if (0 === strpos($pathinfo, '/client/services_hebergement.html') && preg_match('#^/client/services_hebergement\\.html(?:/(?P<id>\\d+)(?:/(?P<name>[^/]+?)(?:/(?P<redirect>[^/]+?))?)?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::serviceHebergementAction',  'id' => 'id',  'name' => 'name',  'redirect' => 'redirect',)), array('_route' => 'MyAppServiceHebergement'));
            }

            // MyAppActiviteAttrait
            if (0 === strpos($pathinfo, '/client/activites_attrait.html') && preg_match('#^/client/activites_attrait\\.html(?:/(?P<id>\\d+)(?:/(?P<name>[^/]+?)(?:/(?P<redirect>[^/]+?))?)?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::activiteAttraitAction',  'id' => 'id',  'name' => 'name',  'redirect' => 'redirect',)), array('_route' => 'MyAppActiviteAttrait'));
            }

            // MyAppServiceAttrait
            if (0 === strpos($pathinfo, '/client/services_attrait.html') && preg_match('#^/client/services_attrait\\.html(?:/(?P<id>\\d+)(?:/(?P<name>[^/]+?)(?:/(?P<redirect>[^/]+?))?)?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::serviceAttraitAction',  'id' => 'id',  'name' => 'name',  'redirect' => 'redirect',)), array('_route' => 'MyAppServiceAttrait'));
            }

            // MyAppSoinSanteAttrait
            if (0 === strpos($pathinfo, '/client/soins_sante.html') && preg_match('#^/client/soins_sante\\.html(?:/(?P<id>\\d+)(?:/(?P<name>[^/]+?)(?:/(?P<redirect>[^/]+?))?)?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::soinsanteAttraitAction',  'id' => 'id',  'name' => 'name',  'redirect' => 'redirect',)), array('_route' => 'MyAppSoinSanteAttrait'));
            }

            // MyAppSoinSanteAttraiten
            if (0 === strpos($pathinfo, '/client/soins_sante.html') && preg_match('#^/client/soins_sante\\.html(?:/(?P<id>\\d+)(?:/(?P<name>[^/]+?)(?:/(?P<redirect>[^/]+?))?)?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::soinsanteAttraitAction',  'id' => 'id',  'name' => 'name',  'redirect' => 'redirect',)), array('_route' => 'MyAppSoinSanteAttraiten'));
            }

            // MyAppCouponRabais
            if (0 === strpos($pathinfo, '/client/coupons.html') && preg_match('#^/client/coupons\\.html(?:/(?P<id>\\d+)(?:/(?P<name>[^/]+?)(?:/(?P<redirect>[^/]+?))?)?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::rabaisCouponAction',  'id' => 'id',  'name' => 'name',  'redirect' => 'redirect',)), array('_route' => 'MyAppCouponRabais'));
            }

            // MyAppAddCouponRabais
            if (0 === strpos($pathinfo, '/client/ajouter_coupons.html') && preg_match('#^/client/ajouter_coupons\\.html(?:/(?P<id>\\d+)(?:/(?P<name>[^/]+?)(?:/(?P<redirect>[^/]+?))?)?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::addrabaisCouponAction',  'id' => 'id',  'name' => 'name',  'redirect' => 'redirect',)), array('_route' => 'MyAppAddCouponRabais'));
            }

            // MyAppUpdateCouponRabais
            if (0 === strpos($pathinfo, '/client/modifier_coupons.html') && preg_match('#^/client/modifier_coupons\\.html(?:/(?P<id>\\d+)(?:/(?P<name>[^/]+?)(?:/(?P<couponid>[^/]+?)(?:/(?P<redirect>[^/]+?))?)?)?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::updaterabaisCouponAction',  'id' => 'id',  'name' => 'name',  'couponid' => 'id',  'redirect' => 'redirect',)), array('_route' => 'MyAppUpdateCouponRabais'));
            }

            // MyAppDeleteCouponRabais
            if (0 === strpos($pathinfo, '/client/supprimer_coupons.html') && preg_match('#^/client/supprimer_coupons\\.html/(?P<idcoupon>[^/]+?)/(?P<idclient>[^/]+?)/(?P<name>[^/]+?)/(?P<redirect>[^/]+?)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::deleterabaisCouponAction',  'idcoupon' => 'idcoupon',  'idclient' => 'idclient',  'name' => 'name',)), array('_route' => 'MyAppDeleteCouponRabais'));
            }

            // MyAppTextHebergement
            if (0 === strpos($pathinfo, '/client/textes_hebergement.html') && preg_match('#^/client/textes_hebergement\\.html(?:/(?P<id>\\d+)(?:/(?P<name>[^/]+?)(?:/(?P<msg>[^/]+?)(?:/(?P<redirect>[^/]+?))?)?)?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::texteHebergementAction',  'id' => 'id',  'name' => 'name',  'msg' => 'msg',  'redirect' => 'redirect',)), array('_route' => 'MyAppTextHebergement'));
            }

            // MyAppChambre
            if (0 === strpos($pathinfo, '/client/chambre.html') && preg_match('#^/client/chambre\\.html(?:/(?P<id>\\d+)(?:/(?P<name>[^/]+?)(?:/(?P<redirect>[^/]+?))?)?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::listeChambreAction',  'id' => 'id',  'name' => 'name',  'redirect' => 'redirect',)), array('_route' => 'MyAppChambre'));
            }

            // MyAppAddChambre
            if (0 === strpos($pathinfo, '/client/ajouter_chambre.html') && preg_match('#^/client/ajouter_chambre\\.html(?:/(?P<idclient>[^/]+?)(?:/(?P<name>[^/]+?)(?:/(?P<idchambre>[^/]+?)(?:/(?P<redirect>[^/]+?))?)?)?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::addChambreAction',  'idclient' => 'idclient',  'name' => 'name',  'idchambre' => 'idchambre',  'redirect' => 'redirect',)), array('_route' => 'MyAppAddChambre'));
            }

            // MyAppUpdateChambre
            if (0 === strpos($pathinfo, '/client/modifier_chambre.html') && preg_match('#^/client/modifier_chambre\\.html(?:/(?P<idclient>[^/]+?)(?:/(?P<name>[^/]+?)(?:/(?P<idchambre>[^/]+?)(?:/(?P<redirect>[^/]+?))?)?)?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::addChambreAction',  'idclient' => 'idclient',  'name' => 'name',  'idchambre' => 'idchambre',  'redirect' => 'redirect',)), array('_route' => 'MyAppUpdateChambre'));
            }

            // MyAppDeleteChambre
            if (0 === strpos($pathinfo, '/client/supprimer_chambre.html') && preg_match('#^/client/supprimer_chambre\\.html(?:/(?P<idclient>[^/]+?)(?:/(?P<name>[^/]+?)(?:/(?P<idchambre>[^/]+?)(?:/(?P<redirect>[^/]+?))?)?)?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::deleteChambreAction',  'idclient' => 'idclient',  'name' => 'name',  'idchambre' => 'idchambre',  'redirect' => 'redirect',)), array('_route' => 'MyAppDeleteChambre'));
            }

            // MyAppCorporatif
            if (0 === strpos($pathinfo, '/client/corporatif.html') && preg_match('#^/client/corporatif\\.html(?:/(?P<id>\\d+)(?:/(?P<name>[^/]+?)(?:/(?P<redirect>[^/]+?))?)?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::corporatifAction',  'id' => 'id',  'name' => 'name',  'redirect' => 'redirect',)), array('_route' => 'MyAppCorporatif'));
            }

            // MyAppAddCorporatif
            if (0 === strpos($pathinfo, '/client/ajouter_corporatif.html') && preg_match('#^/client/ajouter_corporatif\\.html(?:/(?P<idclient>[^/]+?)(?:/(?P<name>[^/]+?)(?:/(?P<idcorpo>[^/]+?)(?:/(?P<redirect>[^/]+?))?)?)?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::addCorporatifAction',  'idclient' => 'idclient',  'name' => 'name',  'idcorpo' => 'idcorpo',  'redirect' => 'redirect',)), array('_route' => 'MyAppAddCorporatif'));
            }

            // MyAppUpdateCorporatif
            if (0 === strpos($pathinfo, '/client/modifier_corporatif.html') && preg_match('#^/client/modifier_corporatif\\.html(?:/(?P<idclient>[^/]+?)(?:/(?P<name>[^/]+?)(?:/(?P<idcorpo>[^/]+?)(?:/(?P<redirect>[^/]+?))?)?)?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::addCorporatifAction',  'idclient' => 'idclient',  'name' => 'name',  'idcorpo' => 'idcorpo',  'redirect' => 'redirect',)), array('_route' => 'MyAppUpdateCorporatif'));
            }

            // MyAppDeleteCorporatif
            if (0 === strpos($pathinfo, '/client/supprimer_corporatif.html') && preg_match('#^/client/supprimer_corporatif\\.html(?:/(?P<idclient>\\d+)(?:/(?P<name>[^/]+?)(?:/(?P<idcorpo>\\d+)(?:/(?P<redirect>[^/]+?))?)?)?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::deleteCorporatifAction',  'idclient' => 'idclient',  'name' => 'name',  'idcorpo' => 'idcorpo',  'redirect' => 'redirect',)), array('_route' => 'MyAppDeleteCorporatif'));
            }

            // _periodedelete
            if ($pathinfo === '/client/suppression_periode') {
                return array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::getPeriodeDeleteAction',  '_route' => '_periodedelete',);
            }

            // _displayvignette
            if ($pathinfo === '/client/affichage_vignette_hebergement') {
                return array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::getDisplayThumbnailAction',  '_route' => '_displayvignette',);
            }

            // _galeriehebergementdelete
            if ($pathinfo === '/client/suppression_image_galerie_hebergement') {
                return array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::getGalerieHebergementDeleteAction',  '_route' => '_galeriehebergementdelete',);
            }

            // _galeriehebergementupload
            if ($pathinfo === '/client/upload_image_galerie_hebergement') {
                return array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::getGalerieHebergementUploadAction',  '_route' => '_galeriehebergementupload',);
            }

            // _displayvignetteroom
            if ($pathinfo === '/client/affichage_vignette_chambre') {
                return array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::getDisplayThumbnailRoomAction',  '_route' => '_displayvignetteroom',);
            }

            // _galeriechambredelete
            if ($pathinfo === '/client/suppression_image_galerie_chambre') {
                return array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::getGalerieChambreDeleteAction',  '_route' => '_galeriechambredelete',);
            }

            // _displayvignettepackage
            if ($pathinfo === '/client/affichage_vignette_forfait') {
                return array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::getDisplayThumbnailPackageAction',  '_route' => '_displayvignettepackage',);
            }

            // _galeriePackageforfaitdelete
            if ($pathinfo === '/client/suppression_image_galerie_forfait') {
                return array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::getGaleriePackageDeleteAction',  '_route' => '_galeriePackageforfaitdelete',);
            }

            // _displayvignettecorporatif
            if ($pathinfo === '/client/affichage_vignette_corporatif') {
                return array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::getDisplayThumbnailCorporateAction',  '_route' => '_displayvignettecorporatif',);
            }

            // _galeriePackagedelete
            if ($pathinfo === '/client/suppression_image_galerie_corporatif') {
                return array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::getGalerieCorporateDeleteAction',  '_route' => '_galeriePackagedelete',);
            }

            // _displayvignetteattrait
            if ($pathinfo === '/client/affichage_vignette_attrait') {
                return array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::getDisplayThumbnailAttraitAction',  '_route' => '_displayvignetteattrait',);
            }

            // _galerieAttraitdelete
            if ($pathinfo === '/client/suppression_image_galerie_attrait') {
                return array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::getGalerieAttraitDeleteAction',  '_route' => '_galerieAttraitdelete',);
            }

            // _ordreaffichagechambre
            if ($pathinfo === '/client/ordre_affichage') {
                return array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::getOrdreAffichageChambreAction',  '_route' => '_ordreaffichagechambre',);
            }

            // _uploadimgprincipaleattrait
            if ($pathinfo === '/client/upload_image_principale_attrait.html') {
                return array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::uploadImgMainAttraitAction',  '_route' => '_uploadimgprincipaleattrait',);
            }

            // _uploadimgprincipalehebergement
            if ($pathinfo === '/client/upload_image_principale_hebergement.html') {
                return array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::uploadImgMainHebergementAction',  '_route' => '_uploadimgprincipalehebergement',);
            }

            // _uploadcategoriehebergement
            if ($pathinfo === '/client/upload_categorie_hebergement.html') {
                return array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::uploadImgCategoryHebergementAction',  '_route' => '_uploadcategoriehebergement',);
            }

            // _uploadlogohebergement
            if ($pathinfo === '/client/upload_logo_hebergement.html') {
                return array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::uploadImgLogoHebergementAction',  '_route' => '_uploadlogohebergement',);
            }

            // _uploadimgcategorieattrait
            if ($pathinfo === '/client/upload_image_categorie_attrait.html') {
                return array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::uploadImgCategoryAttraitAction',  '_route' => '_uploadimgcategorieattrait',);
            }

            // _uploadlogoattrait
            if ($pathinfo === '/client/upload_logo_attrait.html') {
                return array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::uploadImgLogoAttraitAction',  '_route' => '_uploadlogoattrait',);
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // _Dashboard
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_Dashboard');
                }
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\DashboardController::dashboardAction',  '_route' => '_Dashboard',);
            }

            // _Dashboard_general
            if ($pathinfo === '/admin/general') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\DashboardController::generalAction',  '_route' => '_Dashboard_general',);
            }

            // _Dashboard_hebergements
            if ($pathinfo === '/admin/hebergements') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\DashboardController::hebergementsAction',  '_route' => '_Dashboard_hebergements',);
            }

            // _Dashboard_attraits
            if ($pathinfo === '/admin/attraits') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\DashboardController::attraitsAction',  '_route' => '_Dashboard_attraits',);
            }

            // _Dashboard_quebec_saison
            if ($pathinfo === '/admin/Quebec_en_saison') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\DashboardController::quebec_saisonAction',  '_route' => '_Dashboard_quebec_saison',);
            }

            // _Dashboard_statistiques
            if ($pathinfo === '/admin/Statistiques') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\DashboardController::statistiquesAction',  '_route' => '_Dashboard_statistiques',);
            }

            // _Dashboard_informations
            if ($pathinfo === '/admin/Informations') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\DashboardController::informationsAction',  '_route' => '_Dashboard_informations',);
            }

            // _Dashboard_pays
            if (0 === strpos($pathinfo, '/admin/Gestion_des_pays') && preg_match('#^/admin/Gestion_des_pays(?:/(?P<province>[^/]+?)(?:/(?P<region>[^/]+?)(?:/(?P<zone>[^/]+?))?)?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::paysAction',  'province' => 'province',  'region' => 'region',  'zone' => 'zone',)), array('_route' => '_Dashboard_pays'));
            }

            // _Dashboard_addpays
            if (0 === strpos($pathinfo, '/admin/Ajouter_un_pays') && preg_match('#^/admin/Ajouter_un_pays(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addPaysAction',  'id' => 'id',)), array('_route' => '_Dashboard_addpays'));
            }

            // _Dashboard_updatepays
            if (0 === strpos($pathinfo, '/admin/Modifier_un_pays') && preg_match('#^/admin/Modifier_un_pays(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addPaysAction',  'id' => 'id',)), array('_route' => '_Dashboard_updatepays'));
            }

            // _Dashboard_deletepays
            if (0 === strpos($pathinfo, '/admin/Supprimer_un_pays') && preg_match('#^/admin/Supprimer_un_pays(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::deletePaysAction',  'id' => 'id',)), array('_route' => '_Dashboard_deletepays'));
            }

            // _Dashboard_provinces
            if (0 === strpos($pathinfo, '/admin/Gestions_des_provinces_etats') && preg_match('#^/admin/Gestions_des_provinces_etats(?:/(?P<province>[^/]+?)(?:/(?P<region>[^/]+?)(?:/(?P<zone>[^/]+?))?)?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::provincesAction',  'province' => 'province',  'region' => 'region',  'zone' => 'zone',)), array('_route' => '_Dashboard_provinces'));
            }

            // _Dashboard_addprovinces
            if (0 === strpos($pathinfo, '/admin/Ajouter_une_province_etat') && preg_match('#^/admin/Ajouter_une_province_etat(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addProvincesAction',  'id' => 'id',)), array('_route' => '_Dashboard_addprovinces'));
            }

            // _Dashboard_updateprovinces
            if (0 === strpos($pathinfo, '/admin/Modifier_une_province_etat') && preg_match('#^/admin/Modifier_une_province_etat(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addProvincesAction',  'id' => 'id',)), array('_route' => '_Dashboard_updateprovinces'));
            }

            // _Dashboard_addtexteprovincecategoriehebergement
            if (0 === strpos($pathinfo, '/admin/Ajouter_texte_categorie_hebergement_pour_province') && preg_match('#^/admin/Ajouter_texte_categorie_hebergement_pour_province(?:/(?P<id>[^/]+?)(?:/(?P<categorie>[^/]+?))?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addTexteProvinceCategorieHebergementAction',  'id' => 'id',  'categorie' => 'categorie',)), array('_route' => '_Dashboard_addtexteprovincecategoriehebergement'));
            }

            // _Dashboard_addtexteprovincecorporatif
            if (0 === strpos($pathinfo, '/admin/Ajouter_texte_corporatif_pour_province') && preg_match('#^/admin/Ajouter_texte_corporatif_pour_province(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addTexteProvinceCorporatifAction',  'id' => 'id',)), array('_route' => '_Dashboard_addtexteprovincecorporatif'));
            }

            // _Dashboard_addtexteprovinceappeldoffre
            if (0 === strpos($pathinfo, '/admin/Ajouter_texte_appel_offre_pour_province') && preg_match('#^/admin/Ajouter_texte_appel_offre_pour_province(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addTexteProvinceAppelOffreAction',  'id' => 'id',)), array('_route' => '_Dashboard_addtexteprovinceappeldoffre'));
            }

            // _Dashboard_addtexteprovincelocationsalle
            if (0 === strpos($pathinfo, '/admin/Ajouter_texte_location_salle_pour_province') && preg_match('#^/admin/Ajouter_texte_location_salle_pour_province(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addTexteProvinceLocationSalleAction',  'id' => 'id',)), array('_route' => '_Dashboard_addtexteprovincelocationsalle'));
            }

            // _Dashboard_addtexteprovinceactivitecorpo
            if (0 === strpos($pathinfo, '/admin/Ajouter_texte_activite_corporative_pour_province') && preg_match('#^/admin/Ajouter_texte_activite_corporative_pour_province(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addTexteProvinceActiviteCorpoAction',  'id' => 'id',)), array('_route' => '_Dashboard_addtexteprovinceactivitecorpo'));
            }

            // _Dashboard_addtexteprovincechambreaffaire
            if (0 === strpos($pathinfo, '/admin/Ajouter_texte_chambre_affaire_pour_province') && preg_match('#^/admin/Ajouter_texte_chambre_affaire_pour_province(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addTexteProvincechambreaffaireAction',  'id' => 'id',)), array('_route' => '_Dashboard_addtexteprovincechambreaffaire'));
            }

            // _Dashboard_addtexteprovinceforfaitaffaire
            if (0 === strpos($pathinfo, '/admin/Ajouter_texte_forfait_affaire_pour_province') && preg_match('#^/admin/Ajouter_texte_forfait_affaire_pour_province(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addTexteProvinceforfaitaffaireAction',  'id' => 'id',)), array('_route' => '_Dashboard_addtexteprovinceforfaitaffaire'));
            }

            // _Dashboard_texteprovinceforfait
            if (0 === strpos($pathinfo, '/admin/Texte_province_forfait') && preg_match('#^/admin/Texte_province_forfait(?:/(?P<id>[^/]+?)(?:/(?P<forfait>[^/]+?))?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::texteForfaitProvinceAction',  'id' => 'id',  'forfait' => 'forfait',)), array('_route' => '_Dashboard_texteprovinceforfait'));
            }

            // _Dashboard_texteprovinceattrait
            if (0 === strpos($pathinfo, '/admin/Texte_province_attrait') && preg_match('#^/admin/Texte_province_attrait(?:/(?P<id>[^/]+?)(?:/(?P<attrait>[^/]+?))?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::texteAttraitProvinceAction',  'id' => 'id',  'attrait' => 'attrait',)), array('_route' => '_Dashboard_texteprovinceattrait'));
            }

            // _Dashboard_texteprovincesante
            if (0 === strpos($pathinfo, '/admin/Texte_province_sante') && preg_match('#^/admin/Texte_province_sante(?:/(?P<id>[^/]+?)(?:/(?P<sante>[^/]+?))?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::texteSanteProvinceAction',  'id' => 'id',  'sante' => 'sante',)), array('_route' => '_Dashboard_texteprovincesante'));
            }

            // _Dashboard_texteprovincerestaurant
            if (0 === strpos($pathinfo, '/admin/Texte_province_restaurant') && preg_match('#^/admin/Texte_province_restaurant(?:/(?P<id>[^/]+?)(?:/(?P<resto>[^/]+?))?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::texteRestaurantProvinceAction',  'id' => 'id',  'resto' => 'resto',)), array('_route' => '_Dashboard_texteprovincerestaurant'));
            }

            // _Dashboard_deleteprovinces
            if (0 === strpos($pathinfo, '/admin/Supprimer_une_province_etat') && preg_match('#^/admin/Supprimer_une_province_etat(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::deleteProvincesAction',  'id' => 'id',)), array('_route' => '_Dashboard_deleteprovinces'));
            }

            // _Dashboard_regions
            if (0 === strpos($pathinfo, '/admin/Gestion_des_regions_touristiques') && preg_match('#^/admin/Gestion_des_regions_touristiques(?:/(?P<page>[^/]+?)(?:/(?P<letter>[^/]+?))?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::regionsAction',  'page' => 'page',  'letter' => 'letter',)), array('_route' => '_Dashboard_regions'));
            }

            // _Dashboard_addregions
            if (0 === strpos($pathinfo, '/admin/Ajouter_une_region_touristique') && preg_match('#^/admin/Ajouter_une_region_touristique(?:/(?P<id>[^/]+?)(?:/(?P<page>[^/]+?))?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addRegionsAction',  'id' => 'id',  'page' => 'page',)), array('_route' => '_Dashboard_addregions'));
            }

            // _Dashboard_updateregions
            if (0 === strpos($pathinfo, '/admin/Modifier_une_region_touristique') && preg_match('#^/admin/Modifier_une_region_touristique(?:/(?P<id>[^/]+?)(?:/(?P<page>[^/]+?))?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addRegionsAction',  'id' => 'id',  'page' => 'page',)), array('_route' => '_Dashboard_updateregions'));
            }

            // _Dashboard_texteregionattrait
            if (0 === strpos($pathinfo, '/admin/Texte_region_attrait') && preg_match('#^/admin/Texte_region_attrait(?:/(?P<id>[^/]+?)(?:/(?P<attrait>[^/]+?))?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::texteAttraitRegionAction',  'id' => 'id',  'attrait' => 'attrait',)), array('_route' => '_Dashboard_texteregionattrait'));
            }

            // _Dashboard_texteregionsante
            if (0 === strpos($pathinfo, '/admin/Texte_region_sante') && preg_match('#^/admin/Texte_region_sante(?:/(?P<id>[^/]+?)(?:/(?P<sante>[^/]+?))?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::texteSanteRegionAction',  'id' => 'id',  'sante' => 'sante',)), array('_route' => '_Dashboard_texteregionsante'));
            }

            // _Dashboard_texteregionrestaurant
            if (0 === strpos($pathinfo, '/admin/Texte_region_restaurant') && preg_match('#^/admin/Texte_region_restaurant(?:/(?P<id>[^/]+?)(?:/(?P<resto>[^/]+?))?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::texteRestaurantRegionAction',  'id' => 'id',  'resto' => 'resto',)), array('_route' => '_Dashboard_texteregionrestaurant'));
            }

            // _Dashboard_addtexteregioncategoriehebergement
            if (0 === strpos($pathinfo, '/admin/Ajouter_texte_categorie_hebergement_pour_region') && preg_match('#^/admin/Ajouter_texte_categorie_hebergement_pour_region(?:/(?P<id>[^/]+?)(?:/(?P<categorie>[^/]+?))?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addTexteRegionCategorieHebergementAction',  'id' => 'id',  'categorie' => 'categorie',)), array('_route' => '_Dashboard_addtexteregioncategoriehebergement'));
            }

            // _Dashboard_deleteregions
            if (0 === strpos($pathinfo, '/admin/Supprimer_une_region_touristique') && preg_match('#^/admin/Supprimer_une_region_touristique(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::deleteRegionsAction',  'id' => 'id',)), array('_route' => '_Dashboard_deleteregions'));
            }

            // _Dashboard_addtexteregioncorporatif
            if (0 === strpos($pathinfo, '/admin/Ajouter_texte_corporatif_par_region') && preg_match('#^/admin/Ajouter_texte_corporatif_par_region(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addTexteRegionCorporatifAction',  'id' => 'id',)), array('_route' => '_Dashboard_addtexteregioncorporatif'));
            }

            // _Dashboard_addtexteregionappeldoffre
            if (0 === strpos($pathinfo, '/admin/Ajouter_texte_appel_offre_par_region') && preg_match('#^/admin/Ajouter_texte_appel_offre_par_region(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addTexteRegionAppelOffreAction',  'id' => 'id',)), array('_route' => '_Dashboard_addtexteregionappeldoffre'));
            }

            // _Dashboard_addtexteregionlocationsalle
            if (0 === strpos($pathinfo, '/admin/Ajouter_texte_location_salle_par_region') && preg_match('#^/admin/Ajouter_texte_location_salle_par_region(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addTexteRegionLocationSalleAction',  'id' => 'id',)), array('_route' => '_Dashboard_addtexteregionlocationsalle'));
            }

            // _Dashboard_addtexteregionactivitecorpo
            if (0 === strpos($pathinfo, '/admin/Ajouter_texte_activite_corporative_par_region') && preg_match('#^/admin/Ajouter_texte_activite_corporative_par_region(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addTexteRegionActiviteCorpoAction',  'id' => 'id',)), array('_route' => '_Dashboard_addtexteregionactivitecorpo'));
            }

            // _Dashboard_addtexteregionchambreaffaire
            if (0 === strpos($pathinfo, '/admin/Ajouter_texte_chambre_affaire_par_region') && preg_match('#^/admin/Ajouter_texte_chambre_affaire_par_region(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addTexteRegionchambreaffaireAction',  'id' => 'id',)), array('_route' => '_Dashboard_addtexteregionchambreaffaire'));
            }

            // _Dashboard_addtexteregionforfaitaffaire
            if (0 === strpos($pathinfo, '/admin/Ajouter_texte_forfait_affaire_par_region') && preg_match('#^/admin/Ajouter_texte_forfait_affaire_par_region(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addTexteRegionforfaitaffaireAction',  'id' => 'id',)), array('_route' => '_Dashboard_addtexteregionforfaitaffaire'));
            }

            // _Dashboard_zones
            if (0 === strpos($pathinfo, '/admin/Gestion_des_zones') && preg_match('#^/admin/Gestion_des_zones(?:/(?P<page>[^/]+?)(?:/(?P<letter>[^/]+?))?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::zonesAction',  'page' => 'page',  'letter' => 'letter',)), array('_route' => '_Dashboard_zones'));
            }

            // _Dashboard_addzones
            if (0 === strpos($pathinfo, '/admin/Ajouter_une_zone') && preg_match('#^/admin/Ajouter_une_zone(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addZonesAction',  'id' => 'id',)), array('_route' => '_Dashboard_addzones'));
            }

            // _Dashboard_updatezones
            if (0 === strpos($pathinfo, '/admin/Modifier_une_zone') && preg_match('#^/admin/Modifier_une_zone(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addZonesAction',  'id' => 'id',)), array('_route' => '_Dashboard_updatezones'));
            }

            // _Dashboard_deletezones
            if (0 === strpos($pathinfo, '/admin/Supprimer_une_zone') && preg_match('#^/admin/Supprimer_une_zone(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::deleteZonesAction',  'id' => 'id',)), array('_route' => '_Dashboard_deletezones'));
            }

            // _Dashboard_villes
            if (0 === strpos($pathinfo, '/admin/Gestion_des_villes') && preg_match('#^/admin/Gestion_des_villes(?:/(?P<page>[^/]+?)(?:/(?P<letter>[^/]+?))?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::villesAction',  'page' => 'page',  'letter' => 'letter',)), array('_route' => '_Dashboard_villes'));
            }

            // _Dashboard_addvilles
            if (0 === strpos($pathinfo, '/admin/Ajouter_une_ville') && preg_match('#^/admin/Ajouter_une_ville(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addVillesAction',  'id' => 'id',)), array('_route' => '_Dashboard_addvilles'));
            }

            // _Dashboard_updatevilles
            if (0 === strpos($pathinfo, '/admin/Modifier_une_ville') && preg_match('#^/admin/Modifier_une_ville(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addVillesAction',  'id' => 'id',)), array('_route' => '_Dashboard_updatevilles'));
            }

            // _Dashboard_deletevilles
            if (0 === strpos($pathinfo, '/admin/Supprimer_une_ville') && preg_match('#^/admin/Supprimer_une_ville(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::deleteVillesAction',  'id' => 'id',)), array('_route' => '_Dashboard_deletevilles'));
            }

            // _Dashboard_modes_paiements
            if ($pathinfo === '/admin/Gestion_des_modes_paiements') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::paiementsAction',  '_route' => '_Dashboard_modes_paiements',);
            }

            // _Dashboard_addmodes_paiements
            if (0 === strpos($pathinfo, '/admin/Ajouter_un_mode_paiement') && preg_match('#^/admin/Ajouter_un_mode_paiement(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addPaiementsAction',  'id' => 'id',)), array('_route' => '_Dashboard_addmodes_paiements'));
            }

            // _Dashboard_updatemodes_paiements
            if (0 === strpos($pathinfo, '/admin/Modifier_un_mode_paiement') && preg_match('#^/admin/Modifier_un_mode_paiement(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addPaiementsAction',  'id' => 'id',)), array('_route' => '_Dashboard_updatemodes_paiements'));
            }

            // _Dashboard_delete_paiements
            if (0 === strpos($pathinfo, '/admin/Supprimer_un_mode_paiement') && preg_match('#^/admin/Supprimer_un_mode_paiement(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::deletePaiementsAction',  'id' => 'id',)), array('_route' => '_Dashboard_delete_paiements'));
            }

            // _Dashboard_devises
            if ($pathinfo === '/admin/Gestion_des_devises') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::devisesAction',  '_route' => '_Dashboard_devises',);
            }

            // _Dashboard_adddevises
            if (0 === strpos($pathinfo, '/admin/Ajouter_une_devise') && preg_match('#^/admin/Ajouter_une_devise(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addDevisesAction',  'id' => 'id',)), array('_route' => '_Dashboard_adddevises'));
            }

            // _Dashboard_updatedevises
            if (0 === strpos($pathinfo, '/admin/Modifier_une_devise') && preg_match('#^/admin/Modifier_une_devise(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addDevisesAction',  'id' => 'id',)), array('_route' => '_Dashboard_updatedevises'));
            }

            // _Dashboard_deletedevises
            if (0 === strpos($pathinfo, '/admin/Supprimer_une_devise') && preg_match('#^/admin/Supprimer_une_devise(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::deleteDevisesAction',  'id' => 'id',)), array('_route' => '_Dashboard_deletedevises'));
            }

            // _Dashboard_acompte
            if ($pathinfo === '/admin/Gestion_des_acomptes') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::acomptesAction',  '_route' => '_Dashboard_acompte',);
            }

            // _Dashboard_addacompte
            if (0 === strpos($pathinfo, '/admin/Ajouter_un_acompte') && preg_match('#^/admin/Ajouter_un_acompte(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addAcomptesAction',  'id' => 'id',)), array('_route' => '_Dashboard_addacompte'));
            }

            // _Dashboard_updateacompte
            if (0 === strpos($pathinfo, '/admin/Modifier_un_acompte') && preg_match('#^/admin/Modifier_un_acompte(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addAcomptesAction',  'id' => 'id',)), array('_route' => '_Dashboard_updateacompte'));
            }

            // _Dashboard_deleteacompte
            if (0 === strpos($pathinfo, '/admin/Supprimer_un_acompte') && preg_match('#^/admin/Supprimer_un_acompte(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::deleteAcomptesAction',  'id' => 'id',)), array('_route' => '_Dashboard_deleteacompte'));
            }

            // _Dashboard_forfaits
            if ($pathinfo === '/admin/Gestion_des_forfaits') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::forfaitsAction',  '_route' => '_Dashboard_forfaits',);
            }

            // _Dashboard_addforfaits
            if (0 === strpos($pathinfo, '/admin/Ajouter_un_forfait') && preg_match('#^/admin/Ajouter_un_forfait(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addForfaitsAction',  'id' => 'id',)), array('_route' => '_Dashboard_addforfaits'));
            }

            // _Dashboard_updateforfaits
            if (0 === strpos($pathinfo, '/admin/Modifier_un_forfait') && preg_match('#^/admin/Modifier_un_forfait(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addForfaitsAction',  'id' => 'id',)), array('_route' => '_Dashboard_updateforfaits'));
            }

            // _Dashboard_texteregionforfait
            if (0 === strpos($pathinfo, '/admin/Texte_region_forfait') && preg_match('#^/admin/Texte_region_forfait(?:/(?P<id>[^/]+?)(?:/(?P<forfait>[^/]+?))?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::texteForfaitRegionAction',  'id' => 'id',  'forfait' => 'forfait',)), array('_route' => '_Dashboard_texteregionforfait'));
            }

            // _Dashboard_deleteforfaits
            if (0 === strpos($pathinfo, '/admin/Supprimer_un_forfait') && preg_match('#^/admin/Supprimer_un_forfait(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::deleteForfaitsAction',  'id' => 'id',)), array('_route' => '_Dashboard_deleteforfaits'));
            }

            // _Dashboard_cotations
            if ($pathinfo === '/admin/Gestion_des_cotations') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::cotationsAction',  '_route' => '_Dashboard_cotations',);
            }

            // _Dashboard_addcotations
            if (0 === strpos($pathinfo, '/admin/Ajouter_une_cotation') && preg_match('#^/admin/Ajouter_une_cotation(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addCotationsAction',  'id' => 'id',)), array('_route' => '_Dashboard_addcotations'));
            }

            // _Dashboard_updatecotations
            if (0 === strpos($pathinfo, '/admin/Modifier_une_cotation') && preg_match('#^/admin/Modifier_une_cotation(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addCotationsAction',  'id' => 'id',)), array('_route' => '_Dashboard_updatecotations'));
            }

            // _Dashboard_deletecotations
            if (0 === strpos($pathinfo, '/admin/Supprimer_une_cotation') && preg_match('#^/admin/Supprimer_une_cotation(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::deleteCotationsAction',  'id' => 'id',)), array('_route' => '_Dashboard_deletecotations'));
            }

            // _Dashboard_classifications
            if ($pathinfo === '/admin/Gestion_des_classification') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::classificationsAction',  '_route' => '_Dashboard_classifications',);
            }

            // _Dashboard_addclassifications
            if (0 === strpos($pathinfo, '/admin/Ajouter_une_classification') && preg_match('#^/admin/Ajouter_une_classification(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addClassificationsAction',  'id' => 'id',)), array('_route' => '_Dashboard_addclassifications'));
            }

            // _Dashboard_updateclassifications
            if (0 === strpos($pathinfo, '/admin/Modifier_une_classification') && preg_match('#^/admin/Modifier_une_classification(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addClassificationsAction',  'id' => 'id',)), array('_route' => '_Dashboard_updateclassifications'));
            }

            // _Dashboard_deleteclassifications
            if (0 === strpos($pathinfo, '/admin/Supprimer_une_classification') && preg_match('#^/admin/Supprimer_une_classification(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::deleteClassificationsAction',  'id' => 'id',)), array('_route' => '_Dashboard_deleteclassifications'));
            }

            // _Dashboard_clients
            if (0 === strpos($pathinfo, '/admin/Gestion_des_clients') && preg_match('#^/admin/Gestion_des_clients(?:/(?P<page>[^/]+?)(?:/(?P<letter>[^/]+?)(?:/(?P<statut>[^/]+?)(?:/(?P<item>[^/]+?))?)?)?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::clientsAction',  'page' => 'page',  'letter' => 'letter',  'statut' => 'statut',  'item' => 'item',)), array('_route' => '_Dashboard_clients'));
            }

            // _Dashboard_addclients
            if ($pathinfo === '/admin/Ajouter_un_client') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addClientsAction',  '_route' => '_Dashboard_addclients',);
            }

            // _Dashboard_updateclients
            if (0 === strpos($pathinfo, '/admin/Modifier_un_client') && preg_match('#^/admin/Modifier_un_client(?:/(?P<id>[^/]+?)(?:/(?P<number>[^/]+?))?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::updateClientsAction',  'id' => 'id',  'number' => 'number',)), array('_route' => '_Dashboard_updateclients'));
            }

            // _Dashboard_deleteclients
            if (0 === strpos($pathinfo, '/admin/Supprimer_un_client') && preg_match('#^/admin/Supprimer_un_client(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::deleteClientsAction',  'id' => 'id',)), array('_route' => '_Dashboard_deleteclients'));
            }

            // _Dashboard_hebergement
            if (0 === strpos($pathinfo, '/admin/Gestion_hebergement') && preg_match('#^/admin/Gestion_hebergement(?:/(?P<page>[^/]+?)(?:/(?P<letter>[^/]+?))?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::hebergementAction',  'page' => 'page',  'letter' => 'letter',)), array('_route' => '_Dashboard_hebergement'));
            }

            // _Dashboard_addhebergement
            if ($pathinfo === '/admin/Ajouter_un_hebergement') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::addHebergementAction',  '_route' => '_Dashboard_addhebergement',);
            }

            // _Dashboard_updatehebergement
            if (0 === strpos($pathinfo, '/admin/Modifier_un_hebergement') && preg_match('#^/admin/Modifier_un_hebergement(?:/(?P<id>[^/]+?)(?:/(?P<number>[^/]+?))?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::updateHebergementAction',  'id' => 'id',  'number' => 'number',)), array('_route' => '_Dashboard_updatehebergement'));
            }

            // _Dashboard_deletehebergement
            if (0 === strpos($pathinfo, '/admin/Supprimer_un_hebergement') && preg_match('#^/admin/Supprimer_un_hebergement(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::deleteHebergementAction',  'id' => 'id',)), array('_route' => '_Dashboard_deletehebergement'));
            }

            // _Dashboard_categoriehebergement
            if ($pathinfo === '/admin/Gestion_categorie_hebergement') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::categorieHebergementAction',  '_route' => '_Dashboard_categoriehebergement',);
            }

            // _Dashboard_addcategoriehebergement
            if ($pathinfo === '/admin/Ajouter_une_categorie_hebergement') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::addCategorieHebergementAction',  '_route' => '_Dashboard_addcategoriehebergement',);
            }

            // _Dashboard_updatecategoriehebergement
            if (0 === strpos($pathinfo, '/admin/Modifier_une_categorie_hebergement') && preg_match('#^/admin/Modifier_une_categorie_hebergement(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::updateCategorieHebergementAction',  'id' => 'id',)), array('_route' => '_Dashboard_updatecategoriehebergement'));
            }

            // _Dashboard_deletecategoriehebergement
            if (0 === strpos($pathinfo, '/admin/Supprimer_une_categorie_hebergement') && preg_match('#^/admin/Supprimer_une_categorie_hebergement(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::deleteCategorieHebergementAction',  'id' => 'id',)), array('_route' => '_Dashboard_deletecategoriehebergement'));
            }

            // _Dashboard_activiteshebergement
            if ($pathinfo === '/admin/Gestion_des_activites') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::activiteAction',  '_route' => '_Dashboard_activiteshebergement',);
            }

            // _Dashboard_addactivite
            if ($pathinfo === '/admin/Ajouter_une_activite_dans_hebergement') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::addActiviteAction',  '_route' => '_Dashboard_addactivite',);
            }

            // _Dashboard_updateactivite
            if (0 === strpos($pathinfo, '/admin/Modifier_une_activite_dans_hebergement') && preg_match('#^/admin/Modifier_une_activite_dans_hebergement(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::updateActiviteAction',  'id' => 'id',)), array('_route' => '_Dashboard_updateactivite'));
            }

            // _Dashboard_deleteactivite
            if (0 === strpos($pathinfo, '/admin/Supprimer_une_activite_dans_hebergement') && preg_match('#^/admin/Supprimer_une_activite_dans_hebergement(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::deleteActiviteAction',  'id' => 'id',)), array('_route' => '_Dashboard_deleteactivite'));
            }

            // _Dashboard_serviceshebergement
            if ($pathinfo === '/admin/Gestion_des_services') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::serviceAction',  '_route' => '_Dashboard_serviceshebergement',);
            }

            // _Dashboard_addservice
            if ($pathinfo === '/admin/Ajouter_un_service_dans_hebergement') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::addServiceAction',  '_route' => '_Dashboard_addservice',);
            }

            // _Dashboard_updateservice
            if (0 === strpos($pathinfo, '/admin/Modifier_un_service_dans_hebergement') && preg_match('#^/admin/Modifier_un_service_dans_hebergement(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::updateServiceAction',  'id' => 'id',)), array('_route' => '_Dashboard_updateservice'));
            }

            // _Dashboard_deleteservice
            if (0 === strpos($pathinfo, '/admin/Supprimer_un_service_dans_hebergement') && preg_match('#^/admin/Supprimer_un_service_dans_hebergement(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::deleteServiceAction',  'id' => 'id',)), array('_route' => '_Dashboard_deleteservice'));
            }

            // _Dashboard_styleshebergement
            if ($pathinfo === '/admin/Gestion_des_styles') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::styleAction',  '_route' => '_Dashboard_styleshebergement',);
            }

            // _Dashboard_addstyle
            if ($pathinfo === '/admin/Ajouter_un_style') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::addStyleAction',  '_route' => '_Dashboard_addstyle',);
            }

            // _Dashboard_updatestyle
            if (0 === strpos($pathinfo, '/admin/Modifier_un_style') && preg_match('#^/admin/Modifier_un_style(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::updateStyleAction',  'id' => 'id',)), array('_route' => '_Dashboard_updatestyle'));
            }

            // _Dashboard_deletestyle
            if (0 === strpos($pathinfo, '/admin/Supprimer_un_style') && preg_match('#^/admin/Supprimer_un_style(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::deleteStyleAction',  'id' => 'id',)), array('_route' => '_Dashboard_deletestyle'));
            }

            // _Dashboard_typechambreshebergement
            if ($pathinfo === '/admin/Gestion_types_des_chambres') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::typeChambreAction',  '_route' => '_Dashboard_typechambreshebergement',);
            }

            // _Dashboard_addtypechambre
            if ($pathinfo === '/admin/Ajouter_un_type_de_chambre') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::addTypeChambreAction',  '_route' => '_Dashboard_addtypechambre',);
            }

            // _Dashboard_updatetypechambre
            if (0 === strpos($pathinfo, '/admin/Modifier_un_type_de_chambre') && preg_match('#^/admin/Modifier_un_type_de_chambre(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::updateTypeChambreAction',  'id' => 'id',)), array('_route' => '_Dashboard_updatetypechambre'));
            }

            // _Dashboard_deletetypechambre
            if (0 === strpos($pathinfo, '/admin/Supprimer_un_type_de_chambre') && preg_match('#^/admin/Supprimer_un_type_de_chambre(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::deleteTypeChambreAction',  'id' => 'id',)), array('_route' => '_Dashboard_deletetypechambre'));
            }

            // _Dashboard_chambreshebergement
            if (0 === strpos($pathinfo, '/admin/Gestion_des_chambres') && preg_match('#^/admin/Gestion_des_chambres(?:/(?P<page>[^/]+?)(?:/(?P<letter>[^/]+?))?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::chambreAction',  'page' => 'page',  'letter' => 'letter',)), array('_route' => '_Dashboard_chambreshebergement'));
            }

            // _Dashboard_addchambre
            if ($pathinfo === '/admin/Ajouter_une_chambre') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::addChambreAction',  '_route' => '_Dashboard_addchambre',);
            }

            // _Dashboard_updatechambre
            if (0 === strpos($pathinfo, '/admin/Modifier_une_chambre') && preg_match('#^/admin/Modifier_une_chambre(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::updateChambreAction',  'id' => 'id',)), array('_route' => '_Dashboard_updatechambre'));
            }

            // _Dashboard_deletechambre
            if (0 === strpos($pathinfo, '/admin/Supprimer_une_chambre') && preg_match('#^/admin/Supprimer_une_chambre(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::deleteChambreAction',  'id' => 'id',)), array('_route' => '_Dashboard_deletechambre'));
            }

            // _Dashboard_litshebergement
            if ($pathinfo === '/admin/Gestion_des_lits') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::litAction',  '_route' => '_Dashboard_litshebergement',);
            }

            // _Dashboard_addlit
            if ($pathinfo === '/admin/Ajouter_un_lit') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::addLitAction',  '_route' => '_Dashboard_addlit',);
            }

            // _Dashboard_updatelit
            if (0 === strpos($pathinfo, '/admin/Modifier_un_lit') && preg_match('#^/admin/Modifier_un_lit(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::updateLitAction',  'id' => 'id',)), array('_route' => '_Dashboard_updatelit'));
            }

            // _Dashboard_deletelit
            if (0 === strpos($pathinfo, '/admin/Supprimer_un_lit') && preg_match('#^/admin/Supprimer_un_lit(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::deleteLitAction',  'id' => 'id',)), array('_route' => '_Dashboard_deletelit'));
            }

            // _Dashboard_occupationshebergement
            if ($pathinfo === '/admin/Gestion_des_occupations') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::occupationAction',  '_route' => '_Dashboard_occupationshebergement',);
            }

            // _Dashboard_addoccupation
            if ($pathinfo === '/admin/Ajouter_une_occupation') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::addOccupationAction',  '_route' => '_Dashboard_addoccupation',);
            }

            // _Dashboard_updateoccupation
            if (0 === strpos($pathinfo, '/admin/Modifier_une_occupation') && preg_match('#^/admin/Modifier_une_occupation(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::updateOccupationAction',  'id' => 'id',)), array('_route' => '_Dashboard_updateoccupation'));
            }

            // _Dashboard_deleteoccupation
            if (0 === strpos($pathinfo, '/admin/Supprimer_une_occupation') && preg_match('#^/admin/Supprimer_une_occupation(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::deleteOccupationAction',  'id' => 'id',)), array('_route' => '_Dashboard_deleteoccupation'));
            }

            // _Dashboard_equipementshebergement
            if ($pathinfo === '/admin/Gestion_des_equipements') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::equipementAction',  '_route' => '_Dashboard_equipementshebergement',);
            }

            // _Dashboard_addequipement
            if ($pathinfo === '/admin/Ajouter_un_equipement') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::addEquipementAction',  '_route' => '_Dashboard_addequipement',);
            }

            // _Dashboard_updateequipement
            if (0 === strpos($pathinfo, '/admin/Modifier_un_equipement') && preg_match('#^/admin/Modifier_un_equipement(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::updateEquipementAction',  'id' => 'id',)), array('_route' => '_Dashboard_updateequipement'));
            }

            // _Dashboard_deleteequipement
            if (0 === strpos($pathinfo, '/admin/Supprimer_un_equipement') && preg_match('#^/admin/Supprimer_un_equipement(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::deleteEquipementAction',  'id' => 'id',)), array('_route' => '_Dashboard_deleteequipement'));
            }

            // _Dashboard_affiliationshebergement
            if ($pathinfo === '/admin/Gestion_des_affiliations') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::affiliationAction',  '_route' => '_Dashboard_affiliationshebergement',);
            }

            // _Dashboard_addaffiliation
            if ($pathinfo === '/admin/Ajouter_une_affiliation') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::addAffiliationAction',  '_route' => '_Dashboard_addaffiliation',);
            }

            // _Dashboard_updateaffiliation
            if (0 === strpos($pathinfo, '/admin/Modifier_une_affiliation') && preg_match('#^/admin/Modifier_une_affiliation(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::updateAffiliationAction',  'id' => 'id',)), array('_route' => '_Dashboard_updateaffiliation'));
            }

            // _Dashboard_deleteaffiliation
            if (0 === strpos($pathinfo, '/admin/Supprimer_une_affiliation') && preg_match('#^/admin/Supprimer_une_affiliation(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::deleteAffiliationAction',  'id' => 'id',)), array('_route' => '_Dashboard_deleteaffiliation'));
            }

            // _Dashboard_servicecorporatifhebergement
            if ($pathinfo === '/admin/Gestion_des_services_corporatifs') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::serviceCorporatifAction',  '_route' => '_Dashboard_servicecorporatifhebergement',);
            }

            // _Dashboard_addservicecorporatif
            if ($pathinfo === '/admin/Ajouter_un_service_corporatif') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::addServiceCorporatifAction',  '_route' => '_Dashboard_addservicecorporatif',);
            }

            // _Dashboard_updateservicecorporatif
            if (0 === strpos($pathinfo, '/admin/Modifier_un_service_corporatif') && preg_match('#^/admin/Modifier_un_service_corporatif(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::updateServiceCorporatifAction',  'id' => 'id',)), array('_route' => '_Dashboard_updateservicecorporatif'));
            }

            // _Dashboard_deleteservicecorporatif
            if (0 === strpos($pathinfo, '/admin/Supprimer_un_service_corporatif') && preg_match('#^/admin/Supprimer_un_service_corporatif(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::deleteServiceCorporatifAction',  'id' => 'id',)), array('_route' => '_Dashboard_deleteservicecorporatif'));
            }

            // _Dashboard_sallescorporativeshebergement
            if ($pathinfo === '/admin/Gestion_des_salles_corporatives') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::salleCorporativeAction',  '_route' => '_Dashboard_sallescorporativeshebergement',);
            }

            // _Dashboard_addsallecorporative
            if ($pathinfo === '/admin/Ajouter_une_salle_corporative') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::addSalleCorporativeAction',  '_route' => '_Dashboard_addsallecorporative',);
            }

            // _Dashboard_updatesallecorporative
            if (0 === strpos($pathinfo, '/admin/Modifier_un_salle_corporative') && preg_match('#^/admin/Modifier_un_salle_corporative(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::updateSalleCorporativeAction',  'id' => 'id',)), array('_route' => '_Dashboard_updatesallecorporative'));
            }

            // _Dashboard_deletesallecorporative
            if (0 === strpos($pathinfo, '/admin/Supprimer_un_salle_corporative') && preg_match('#^/admin/Supprimer_un_salle_corporative(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::deleteSalleCorporativeAction',  'id' => 'id',)), array('_route' => '_Dashboard_deletesallecorporative'));
            }

            // _Dashboard_evenementscoporatifshebergement
            if ($pathinfo === '/admin/Gestion_des_evenements_corporatifs') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::evenementCorporatifAction',  '_route' => '_Dashboard_evenementscoporatifshebergement',);
            }

            // _Dashboard_addevenementcorporaif
            if ($pathinfo === '/admin/Ajouter_un_evenement_corporatif') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::addEvenementCorporatifAction',  '_route' => '_Dashboard_addevenementcorporaif',);
            }

            // _Dashboard_updateevenementcorporatif
            if (0 === strpos($pathinfo, '/admin/Modifier_un_evenement_corporatif') && preg_match('#^/admin/Modifier_un_evenement_corporatif(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::updateEvenementCorporatifAction',  'id' => 'id',)), array('_route' => '_Dashboard_updateevenementcorporatif'));
            }

            // _Dashboard_deleteevenementcorporatif
            if (0 === strpos($pathinfo, '/admin/Supprimer_un_evenement_corporatif') && preg_match('#^/admin/Supprimer_un_evenement_corporatif(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::deleteEvenementCorporatifAction',  'id' => 'id',)), array('_route' => '_Dashboard_deleteevenementcorporatif'));
            }

            // _Dashboard_photohebergement
            if (0 === strpos($pathinfo, '/admin/Gestion_des_photos_pour_les_hebergements') && preg_match('#^/admin/Gestion_des_photos_pour_les_hebergements(?:/(?P<page>[^/]+?)(?:/(?P<letter>[^/]+?))?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::photoHebergementAction',  'page' => 'page',  'letter' => 'letter',)), array('_route' => '_Dashboard_photohebergement'));
            }

            // _Dashboard_addphotohebergement
            if ($pathinfo === '/admin/Ajouter_une_photo_pour_hebergement') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::addPhotoHebergementAction',  '_route' => '_Dashboard_addphotohebergement',);
            }

            // _Dashboard_updatephotohebergement
            if (0 === strpos($pathinfo, '/admin/Modifier_une_photo_pour_hebergement') && preg_match('#^/admin/Modifier_une_photo_pour_hebergement/(?P<id>[^/]+?)/(?P<id1>[^/]+?)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::updatePhotoHebergementAction',  'id' => 'id',)), array('_route' => '_Dashboard_updatephotohebergement'));
            }

            // _Dashboard_deletephotohebergement
            if (0 === strpos($pathinfo, '/admin/Supprimer_une_photo_pour_hebergement') && preg_match('#^/admin/Supprimer_une_photo_pour_hebergement(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::deletePhotoHebergementAction',  'id' => 'id',)), array('_route' => '_Dashboard_deletephotohebergement'));
            }

            // _Dashboard_attrait
            if (0 === strpos($pathinfo, '/admin/Gestion_des_attraits') && preg_match('#^/admin/Gestion_des_attraits(?:/(?P<page>[^/]+?)(?:/(?P<letter>[^/]+?))?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::attraitAction',  'page' => 'page',  'letter' => 'letter',)), array('_route' => '_Dashboard_attrait'));
            }

            // _Dashboard_addattrait
            if ($pathinfo === '/admin/Ajouter_un_attrait') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::addAttraitAction',  '_route' => '_Dashboard_addattrait',);
            }

            // _Dashboard_updateattrait
            if (0 === strpos($pathinfo, '/admin/Modifier_un_attrait') && preg_match('#^/admin/Modifier_un_attrait(?:/(?P<id>[^/]+?)(?:/(?P<number>[^/]+?)(?:/(?P<page>[^/]+?)(?:/(?P<lettre>[^/]+?))?)?)?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::updateAttraitAction',  'id' => 'id',  'number' => 'number',  'page' => 'page',  'lettre' => 'lettre',)), array('_route' => '_Dashboard_updateattrait'));
            }

            // _Dashboard_deleteattrait
            if (0 === strpos($pathinfo, '/admin/Supprimer_un_attrait') && preg_match('#^/admin/Supprimer_un_attrait(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::deleteAttraitAction',  'id' => 'id',)), array('_route' => '_Dashboard_deleteattrait'));
            }

            // _Dashboard_attraitcategories
            if ($pathinfo === '/admin/Gestion_des_categories_attraits') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::categorieAttraitAction',  '_route' => '_Dashboard_attraitcategories',);
            }

            // _Dashboard_addattraitcategories
            if ($pathinfo === '/admin/Ajouter_une_categorie_attrait') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::addCategorieAttraitAction',  '_route' => '_Dashboard_addattraitcategories',);
            }

            // _Dashboard_updateattraitcategories
            if (0 === strpos($pathinfo, '/admin/Modifier_une_categorie_attrait') && preg_match('#^/admin/Modifier_une_categorie_attrait(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::updateCategorieAttraitAction',  'id' => 'id',)), array('_route' => '_Dashboard_updateattraitcategories'));
            }

            // _Dashboard_deleteattraitcategories
            if (0 === strpos($pathinfo, '/admin/Supprimer_une_categorie_attrait') && preg_match('#^/admin/Supprimer_une_categorie_attrait(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::deleteCategorieAttraitAction',  'id' => 'id',)), array('_route' => '_Dashboard_deleteattraitcategories'));
            }

            // _Dashboard_attraitsouscategorie
            if ($pathinfo === '/admin/Gestion_des_sous_categories_attraits') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::sousCategorieAttraitAction',  '_route' => '_Dashboard_attraitsouscategorie',);
            }

            // _Dashboard_addattraitsouscategorie
            if ($pathinfo === '/admin/Ajouter_une_sous_categorie_attrait') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::addSousCategorieAttraitAction',  '_route' => '_Dashboard_addattraitsouscategorie',);
            }

            // _Dashboard_updateattraitsouscategorie
            if (0 === strpos($pathinfo, '/admin/Modifier_une_sous_categorie_attrait') && preg_match('#^/admin/Modifier_une_sous_categorie_attrait(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::updateSousCategorieAttraitAction',  'id' => 'id',)), array('_route' => '_Dashboard_updateattraitsouscategorie'));
            }

            // _Dashboard_deleteattraitsouscategorie
            if (0 === strpos($pathinfo, '/admin/Supprimer_une_sous_categorie_attrait') && preg_match('#^/admin/Supprimer_une_sous_categorie_attrait(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::deleteSousCategorieAttraitAction',  'id' => 'id',)), array('_route' => '_Dashboard_deleteattraitsouscategorie'));
            }

            // _Dashboard_attraittypesoins
            if ($pathinfo === '/admin/Gestion_des_types_soins_sante') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::typeSoinsSanteAction',  '_route' => '_Dashboard_attraittypesoins',);
            }

            // _Dashboard_addattraittypesoins
            if (0 === strpos($pathinfo, '/admin/Ajouter_un_type_soin_sante') && preg_match('#^/admin/Ajouter_un_type_soin_sante(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::addTypeSoinSanteAction',  'id' => 'id',)), array('_route' => '_Dashboard_addattraittypesoins'));
            }

            // _Dashboard_updateattraittypesoins
            if (0 === strpos($pathinfo, '/admin/Modifier_un_type_soin_sante') && preg_match('#^/admin/Modifier_un_type_soin_sante(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::addTypeSoinSanteAction',  'id' => 'id',)), array('_route' => '_Dashboard_updateattraittypesoins'));
            }

            // _Dashboard_deleteattraittypesoins
            if (0 === strpos($pathinfo, '/admin/Supprimer_un_type_soin_sante') && preg_match('#^/admin/Supprimer_un_type_soin_sante(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::updateTypeSoinSanteAction',  'id' => 'id',)), array('_route' => '_Dashboard_deleteattraittypesoins'));
            }

            // _Dashboard_attraitsoins
            if (0 === strpos($pathinfo, '/admin/Gestion_des_soins_de_sante') && preg_match('#^/admin/Gestion_des_soins_de_sante(?:/(?P<page>[^/]+?)(?:/(?P<letter>[^/]+?))?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::soinsSanteAction',  'page' => 'page',  'letter' => 'letter',)), array('_route' => '_Dashboard_attraitsoins'));
            }

            // _Dashboard_addattraitsoins
            if (0 === strpos($pathinfo, '/admin/Ajouter_un_soin_de_sante') && preg_match('#^/admin/Ajouter_un_soin_de_sante(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::addSoinSanteAction',  'id' => 'id',)), array('_route' => '_Dashboard_addattraitsoins'));
            }

            // _Dashboard_updateattraitsoins
            if (0 === strpos($pathinfo, '/admin/Modifier_un_soin_de_sante') && preg_match('#^/admin/Modifier_un_soin_de_sante(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::addSoinSanteAction',  'id' => 'id',)), array('_route' => '_Dashboard_updateattraitsoins'));
            }

            // _Dashboard_deleteattraitsoins
            if (0 === strpos($pathinfo, '/admin/Supprimer_un_soin_de_sante') && preg_match('#^/admin/Supprimer_un_soin_de_sante(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::deleteSoinSanteAction',  'id' => 'id',)), array('_route' => '_Dashboard_deleteattraitsoins'));
            }

            // _Dashboard_attraitactivites
            if (0 === strpos($pathinfo, '/admin/Gestion_des_activites_pour_les_attraits') && preg_match('#^/admin/Gestion_des_activites_pour_les_attraits(?:/(?P<page>[^/]+?)(?:/(?P<letter>[^/]+?))?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::activiteAttraitAction',  'page' => 'page',  'letter' => 'letter',)), array('_route' => '_Dashboard_attraitactivites'));
            }

            // _Dashboard_addattraitactivites
            if ($pathinfo === '/admin/Ajouter_une_activite_dans_attrait') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::addActiviteAttraitAction',  '_route' => '_Dashboard_addattraitactivites',);
            }

            // _Dashboard_updateattraitactivites
            if (0 === strpos($pathinfo, '/admin/Modifier_une_activite_dans_attrait') && preg_match('#^/admin/Modifier_une_activite_dans_attrait(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::updateActiviteAttraitAction',  'id' => 'id',)), array('_route' => '_Dashboard_updateattraitactivites'));
            }

            // _Dashboard_deleteattraitactivites
            if (0 === strpos($pathinfo, '/admin/Supprimer_une_activite_dans_attrait') && preg_match('#^/admin/Supprimer_une_activite_dans_attrait(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::deleteActiviteAttraitAction',  'id' => 'id',)), array('_route' => '_Dashboard_deleteattraitactivites'));
            }

            // _Dashboard_attraitservices
            if (0 === strpos($pathinfo, '/admin/Gestion_des_services_pour_les_attraits') && preg_match('#^/admin/Gestion_des_services_pour_les_attraits(?:/(?P<page>[^/]+?)(?:/(?P<letter>[^/]+?))?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::serviceAttraitAction',  'page' => 'page',  'letter' => 'letter',)), array('_route' => '_Dashboard_attraitservices'));
            }

            // _Dashboard_addattraitservices
            if ($pathinfo === '/admin/Ajouter_un_service_dans_attrait') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::addServiceAttraitAction',  '_route' => '_Dashboard_addattraitservices',);
            }

            // _Dashboard_updateattraitservices
            if (0 === strpos($pathinfo, '/admin/Modifier_un_service_dans_attrait') && preg_match('#^/admin/Modifier_un_service_dans_attrait(?:/(?P<id>[^/]+?)(?:/(?P<page>[^/]+?))?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::updateServiceAttraitAction',  'id' => 'id',  'page' => 'page',)), array('_route' => '_Dashboard_updateattraitservices'));
            }

            // _Dashboard_deleteattraitservices
            if (0 === strpos($pathinfo, '/admin/Supprimer_un_service_dans_attrait') && preg_match('#^/admin/Supprimer_un_service_dans_attrait(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::deleteServiceAttraitAction',  'id' => 'id',)), array('_route' => '_Dashboard_deleteattraitservices'));
            }

            // _Dashboard_attraitcusines
            if ($pathinfo === '/admin/Gestion_des_services_pour_les_cuisines') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::cusineAttraitAction',  '_route' => '_Dashboard_attraitcusines',);
            }

            // _Dashboard_addattraitcuisines
            if ($pathinfo === '/admin/Ajouter_une_cuisine') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::addCuisineAttraitAction',  '_route' => '_Dashboard_addattraitcuisines',);
            }

            // _Dashboard_updateattraitcusines
            if (0 === strpos($pathinfo, '/admin/Modifier_une_cuisine') && preg_match('#^/admin/Modifier_une_cuisine(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::updateCuisineAttraitAction',  'id' => 'id',)), array('_route' => '_Dashboard_updateattraitcusines'));
            }

            // _Dashboard_deleteattraitcusines
            if (0 === strpos($pathinfo, '/admin/Supprimer_une_cuisine') && preg_match('#^/admin/Supprimer_une_cuisine(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::deleteCuisineAttraitAction',  'id' => 'id',)), array('_route' => '_Dashboard_deleteattraitcusines'));
            }

            // _Dashboard_attraitphotos
            if (0 === strpos($pathinfo, '/admin/Gestion_des_photos') && preg_match('#^/admin/Gestion_des_photos(?:/(?P<page>[^/]+?)(?:/(?P<letter>[^/]+?))?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::photoAttraitAction',  'page' => 'page',  'letter' => 'letter',)), array('_route' => '_Dashboard_attraitphotos'));
            }

            // _Dashboard_addattraitphotos
            if ($pathinfo === '/admin/Ajouter_des_photos') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::addPhotoAttraitAction',  '_route' => '_Dashboard_addattraitphotos',);
            }

            // _Dashboard_updateattraitphotos
            if (0 === strpos($pathinfo, '/admin/Modifier_des_photos') && preg_match('#^/admin/Modifier_des_photos(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::updatePhotoAttraitAction',  'id' => 'id',)), array('_route' => '_Dashboard_updateattraitphotos'));
            }

            // _Dashboard_deleteattraitphotos
            if (0 === strpos($pathinfo, '/admin/Supprimer_une_photo') && preg_match('#^/admin/Supprimer_une_photo(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::deletePhotoAttraitAction',  'id' => 'id',)), array('_route' => '_Dashboard_deleteattraitphotos'));
            }

            // _Dashboard_typessaison
            if ($pathinfo === '/admin/Gestion_des_types_de_saison') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\Quebec_en_saisonController::typeSaisonAction',  '_route' => '_Dashboard_typessaison',);
            }

            // _Dashboard_addtypessaison
            if ($pathinfo === '/admin/Ajouter_un_type_de_saison') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\Quebec_en_saisonController::addTypeSaisonAction',  '_route' => '_Dashboard_addtypessaison',);
            }

            // _Dashboard_updatetypessaison
            if (0 === strpos($pathinfo, '/admin/Modifier_un_type_de_saison') && preg_match('#^/admin/Modifier_un_type_de_saison(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\Quebec_en_saisonController::updateTypeSaisonAction',  'id' => 'id',)), array('_route' => '_Dashboard_updatetypessaison'));
            }

            // _Dashboard_deletetypessaison
            if (0 === strpos($pathinfo, '/admin/Supprimer_un_type_de_saison') && preg_match('#^/admin/Supprimer_un_type_de_saison(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\Quebec_en_saisonController::deleteTypeSaisonAction',  'id' => 'id',)), array('_route' => '_Dashboard_deletetypessaison'));
            }

            // _Dashboard_typespagessaisons
            if ($pathinfo === '/admin/Gestion_des_types_de_page_des_saisons') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\Quebec_en_saisonController::typePageSaisonAction',  '_route' => '_Dashboard_typespagessaisons',);
            }

            // _Dashboard_addtypespagessaisons
            if ($pathinfo === '/admin/Ajouter_un_type_de_page') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\Quebec_en_saisonController::addTypePageSaisonAction',  '_route' => '_Dashboard_addtypespagessaisons',);
            }

            // _Dashboard_updatetypespagessaisons
            if (0 === strpos($pathinfo, '/admin/Modifier_un_type_de_page') && preg_match('#^/admin/Modifier_un_type_de_page(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\Quebec_en_saisonController::updateTypePageSaisonAction',  'id' => 'id',)), array('_route' => '_Dashboard_updatetypespagessaisons'));
            }

            // _Dashboard_deletetypespagessaisons
            if (0 === strpos($pathinfo, '/admin/Supprimer_un_type_de_page') && preg_match('#^/admin/Supprimer_un_type_de_page(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\Quebec_en_saisonController::deleteTypePageSaisonAction',  'id' => 'id',)), array('_route' => '_Dashboard_deletetypespagessaisons'));
            }

            // _Dashboard_pagesstatiques
            if ($pathinfo === '/admin/Gestion_des_pages_statiques') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\Quebec_en_saisonController::pageStatiqueAction',  '_route' => '_Dashboard_pagesstatiques',);
            }

            // _Dashboard_addpagesstatiques
            if ($pathinfo === '/admin/Ajouter_une_page_statique') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\Quebec_en_saisonController::addPageStatiqueAction',  '_route' => '_Dashboard_addpagesstatiques',);
            }

            // _Dashboard_updatepagesstatiques
            if (0 === strpos($pathinfo, '/admin/Modifier_une_page_statique') && preg_match('#^/admin/Modifier_une_page_statique(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\Quebec_en_saisonController::updatePageStatiqueAction',  'id' => 'id',)), array('_route' => '_Dashboard_updatepagesstatiques'));
            }

            // _Dashboard_deletepagesstatiques
            if (0 === strpos($pathinfo, '/admin/Supprimer_une_page_statique') && preg_match('#^/admin/Supprimer_une_page_statique(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\Quebec_en_saisonController::deletePageStatiqueAction',  'id' => 'id',)), array('_route' => '_Dashboard_deletepagesstatiques'));
            }

            // _Dashboard_saisons
            if ($pathinfo === '/admin/Gestion_des_saisons') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\Quebec_en_saisonController::saisonAction',  '_route' => '_Dashboard_saisons',);
            }

            // _Dashboard_addsaison
            if ($pathinfo === '/admin/Ajouter_une_saison') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\Quebec_en_saisonController::addSaisonAction',  '_route' => '_Dashboard_addsaison',);
            }

            // _Dashboard_updatesaison
            if (0 === strpos($pathinfo, '/admin/Modifier_une_saison') && preg_match('#^/admin/Modifier_une_saison(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\Quebec_en_saisonController::updateSaisonAction',  'id' => 'id',)), array('_route' => '_Dashboard_updatesaison'));
            }

            // _Dashboard_deletesaison
            if (0 === strpos($pathinfo, '/admin/Supprimer_une_saison') && preg_match('#^/admin/Supprimer_une_saison(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\Quebec_en_saisonController::deleteSaisonAction',  'id' => 'id',)), array('_route' => '_Dashboard_deletesaison'));
            }

            // _Dashboard_previewfrench
            if ($pathinfo === '/admin/Apercu_francais') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\Quebec_en_saisonController::previewFrenchAction',  '_route' => '_Dashboard_previewfrench',);
            }

            // _Dashboard_previewenglish
            if ($pathinfo === '/admin/Apercu_anglais') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\Quebec_en_saisonController::previewAnglaisAction',  '_route' => '_Dashboard_previewenglish',);
            }

            // _Dashboard_statistiquesclients
            if (0 === strpos($pathinfo, '/admin/Afficher_statistiques_clients') && preg_match('#^/admin/Afficher_statistiques_clients(?:/(?P<id>[^/]+?)(?:/(?P<page>[^/]+?))?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\StatistiqueController::statistiqueClientAction',  'id' => 'id',  'page' => 'page',)), array('_route' => '_Dashboard_statistiquesclients'));
            }

            // _Dashboard_statistiquesmois
            if (0 === strpos($pathinfo, '/admin/Afficher_statistiques_mois') && preg_match('#^/admin/Afficher_statistiques_mois(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\StatistiqueController::statistiqueMoisAction',  'id' => 'id',)), array('_route' => '_Dashboard_statistiquesmois'));
            }

            // _Dashboard_statistiquesannee
            if (0 === strpos($pathinfo, '/admin/Afficher_statistiques_annee') && preg_match('#^/admin/Afficher_statistiques_annee(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\StatistiqueController::statistiqueAnneeAction',  'id' => 'id',)), array('_route' => '_Dashboard_statistiquesannee'));
            }

            // _Dashboard_archivesstatistiques
            if (0 === strpos($pathinfo, '/admin/Afficher_statistiques_archive') && preg_match('#^/admin/Afficher_statistiques_archive(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\StatistiqueController::statistiqueArchiveAction',  'id' => 'id',)), array('_route' => '_Dashboard_archivesstatistiques'));
            }

            // _Dashboard_utilisateursSysteme
            if (0 === strpos($pathinfo, '/admin/Afficher_utilisateurs_systeme') && preg_match('#^/admin/Afficher_utilisateurs_systeme(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\InformationController::utilisateurAction',  'id' => 'id',)), array('_route' => '_Dashboard_utilisateursSysteme'));
            }

            // _Dashboard_clientSysteme
            if (0 === strpos($pathinfo, '/admin/Afficher_client_systeme') && preg_match('#^/admin/Afficher_client_systeme(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\InformationController::clientAction',  'id' => 'id',)), array('_route' => '_Dashboard_clientSysteme'));
            }

            // _Dashboard_clientSystemepassword
            if (0 === strpos($pathinfo, '/admin/Modifier_mot_de_passe_client.html') && preg_match('#^/admin/Modifier_mot_de_passe_client\\.html(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\InformationController::clientpasswordAction',  'id' => 'id',)), array('_route' => '_Dashboard_clientSystemepassword'));
            }

            // _Dashboard_utilisateurSystemepassword
            if (0 === strpos($pathinfo, '/admin/Modifier_mot_de_passe_utilisateur.html') && preg_match('#^/admin/Modifier_mot_de_passe_utilisateur\\.html(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\InformationController::utilisateurpasswordAction',  'id' => 'id',)), array('_route' => '_Dashboard_utilisateurSystemepassword'));
            }

            // _Dashboard_addutilisateurssysteme
            if (0 === strpos($pathinfo, '/admin/Ajouter_utilisateur_au_systeme') && preg_match('#^/admin/Ajouter_utilisateur_au_systeme(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\InformationController::addUtilisateurAction',  'id' => 'id',)), array('_route' => '_Dashboard_addutilisateurssysteme'));
            }

            // _Dashboard_updateutilisateurssysteme
            if (0 === strpos($pathinfo, '/admin/Modifier_un_utilisateur_du_systeme') && preg_match('#^/admin/Modifier_un_utilisateur_du_systeme(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\InformationController::addUtilisateurAction',  'id' => 'id',)), array('_route' => '_Dashboard_updateutilisateurssysteme'));
            }

            // _Dashboard_deleteutilisateurssysteme
            if (0 === strpos($pathinfo, '/admin/Supprimer_un_utilisateur_du_systeme') && preg_match('#^/admin/Supprimer_un_utilisateur_du_systeme(?:/(?P<id>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\InformationController::deleteUtilisateurAction',  'id' => 'id',)), array('_route' => '_Dashboard_deleteutilisateurssysteme'));
            }

            // _Dashboard_logsanomalies
            if (0 === strpos($pathinfo, '/admin/Afficher_log_et_anomalies') && preg_match('#^/admin/Afficher_log_et_anomalies(?:/(?P<page>[^/]+?)(?:/(?P<letter>[^/]+?))?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\InformationController::logAndAnomalyAction',  'page' => 'page',  'letter' => 'letter',)), array('_route' => '_Dashboard_logsanomalies'));
            }

            // _Dashboard_gestionTexteAccueil
            if ($pathinfo === '/admin/texte_section_accueil.html') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::gestionTexteAccueilAction',  '_route' => '_Dashboard_gestionTexteAccueil',);
            }

            // _Dashboard_gestionTexteAccueil_en
            if ($pathinfo === '/admin/texte_section_accueil_en.html') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::gestionTexteAccueilEnAction',  '_route' => '_Dashboard_gestionTexteAccueil_en',);
            }

            // _google_maps
            if ($pathinfo === '/admin/google_maps_API.html') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::googlemapAction',  '_route' => '_google_maps',);
            }

            // _triregionajax
            if ($pathinfo === '/admin/tri_regions') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::getSortRegionAjaxAdminAction',  '_route' => '_triregionajax',);
            }

            // _trizoneajax
            if ($pathinfo === '/admin/tri_zones') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::getSortZoneAjaxAdminAction',  '_route' => '_trizoneajax',);
            }

            // _trivilleajax
            if ($pathinfo === '/admin/tri_villes') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::getSortVilleAjaxAdminAction',  '_route' => '_trivilleajax',);
            }

            // _displayvignettehebergementadmin
            if ($pathinfo === '/admin/affichage_vignette_hebergemnt') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::getDisplayThumbnailHebergementAdminAction',  '_route' => '_displayvignettehebergementadmin',);
            }

            // _galerieHebergementAdmindelete
            if ($pathinfo === '/admin/suppression_image_galerie_hebergement') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::getGalerieHebergementAdminDeleteAction',  '_route' => '_galerieHebergementAdmindelete',);
            }

            // _displayvignetteattraitadmin
            if ($pathinfo === '/admin/affichage_vignette_attrait') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::getDisplayThumbnailAttraitAdminAction',  '_route' => '_displayvignetteattraitadmin',);
            }

            // _galerieAttraitAdmindelete
            if ($pathinfo === '/admin/suppression_image_galerie_attrait') {
                return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::getGaleriePackageAttraitAdminDeleteAction',  '_route' => '_galerieAttraitAdmindelete',);
            }

        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
        }

        // login_check
        if ($pathinfo === '/login_check') {
            return array('_route' => 'login_check');
        }

        if (0 === strpos($pathinfo, '/sitemap.xml')) {
            // berriart_sitemap
            if (rtrim($pathinfo, '/') === '/sitemap.xml') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_berriart_sitemap;
                }
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'berriart_sitemap');
                }
                return array (  '_controller' => 'berriart_sitemap.controller:sitemap',  '_format' => 'xml',  '_route' => 'berriart_sitemap',);
            }
            not_berriart_sitemap:

            // berriart_sitemap_index
            if ($pathinfo === '/sitemap.xml/sitemapindex.xml') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_berriart_sitemap_index;
                }
                return array (  '_controller' => 'berriart_sitemap.controller:sitemapIndex',  '_format' => 'xml',  '_route' => 'berriart_sitemap_index',);
            }
            not_berriart_sitemap_index:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

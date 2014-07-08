<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       'console' => true,
       'console_exec' => true,
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       'MyAppMobileBundle_homepage' => true,
       'MyAppMobileBundle_hebergement' => true,
       'MyAppMobileBundle_hebergement_region_ajax' => true,
       'MyAppMobileBundle_hebergement_ville_ajax' => true,
       'MyAppMobileBundle_hebergement_resultat_canada' => true,
       'MyAppMobileBundle_hebergement_resultat_province_ajax' => true,
       'MyAppMobileBundle_hebergement_resultat_region_ajax' => true,
       'MyAppMobileBundle_hebergement_resultat_ville_ajax' => true,
       'mobile_generic_detail' => true,
       'MyAppMobileBundle_detail_hebergement' => true,
       'MyAppMobileBundle_detail_chambre' => true,
       'MyAppMobileBundle_detail_forfait' => true,
       'MyAppMobileBundle_detail_corporatif' => true,
       'MyAppMobileBundle_detail_activite' => true,
       'MyAppMobileBundle_detail_galerie' => true,
       'MyAppMobileBundle_detail_sante' => true,
       'MyAppMobileBundle_detail_restaurant' => true,
       'MyAppMobileBundle_detail_information' => true,
       'MyAppMobileBundle_detail_direction' => true,
       'MyAppMobileBundle_demande_reservation' => true,
       'MyAppMobileBundle_hebergement_en' => true,
       'MyAppMobileBundle_forfait' => true,
       'MyAppMobileBundle_forfait_en' => true,
       'MyAppMobileBundle_corpo' => true,
       'MyAppMobileBundle_corpo_en' => true,
       'MyAppMobileBundle_promotion' => true,
       'MyAppMobileBundle_promotion_en' => true,
       'MyAppMobileBundle_sante' => true,
       'MyAppMobileBundle_sante_en' => true,
       'MyAppMobileBundle_attrait' => true,
       'MyAppMobileBundle_attrait_en' => true,
       'MyAppMobileBundle_restaurant' => true,
       'MyAppMobileBundle_restaurant_en' => true,
       '_accueil' => true,
       '_accueilen' => true,
       '_accueil_province' => true,
       '_accueil_provinceen' => true,
       '_accueil_region' => true,
       '_accueil_regionen' => true,
       '_forfaitsfr' => true,
       '_forfaitsen' => true,
       '_forfaitsprovincefr' => true,
       '_forfaitsprovinceen' => true,
       '_forfaitsregionsfr' => true,
       '_forfaitsregionsen' => true,
       '_forfaitsvillesfr' => true,
       '_forfaitsvillesen' => true,
       '_forfaitsactiviteprovincefr' => true,
       '_forfaitsactiviteprovinceen' => true,
       '_forfaitsactiviteregion' => true,
       '_forfaitsactiviteregionen' => true,
       '_forfaitsactiviteville' => true,
       '_forfaitsactivitevilleen' => true,
       '_forfaitsactiviteindexfr' => true,
       '_forfaitsactiviteindexen' => true,
       '_corpoeventsfr' => true,
       '_corpoeventsen' => true,
       '_corpoeventsprovince' => true,
       '_corpoeventsprovincefrajax' => true,
       '_corpoeteventsprovinceen' => true,
       '_corpoeventsregions' => true,
       '_corpoeventsregionsen' => true,
       '_corpoeventsville' => true,
       '_corpoeventsvilleen' => true,
       '_appeloffrefr' => true,
       '_appeloffreen' => true,
       '_formulaireprovinceappeloffre' => true,
       '_formulaireregionappeloffre' => true,
       '_formulairevilleappeloffre' => true,
       '_activiteCorporativeGroupefr' => true,
       '_activitecorpoprovincefr' => true,
       '_activitecorporegionfr' => true,
       '_activitecorpovillefr' => true,
       '_activiteCorporativeGroupeen' => true,
       '_activitecorpoprovinceen' => true,
       '_activitecorporegionen' => true,
       '_activitecorpovilleen' => true,
       '_forfaitaffaireindexfr' => true,
       '_forfaitaffaireindexen' => true,
       '_forfaitaffaireprovincefr' => true,
       '_forfaitaffaireprovinceen' => true,
       '_chambreaffairefr' => true,
       '_chambreaffaireen' => true,
       '_chambreaffaireprovincefr' => true,
       '_chambreaffaireprovinceen' => true,
       '_chambreaffaireregionfr' => true,
       '_chambreaffaireregionen' => true,
       '_chambreaffairevillefr' => true,
       '_chambreaffairevilleen' => true,
       '_locationsallereunionfr' => true,
       '_locationsallereunionen' => true,
       '_locationsallereunionprovincefr' => true,
       '_locationsallereunionprovinceen' => true,
       '_locationsallereunionregionfr' => true,
       '_locationsallereunionregionen' => true,
       '_locationsallereunionvillefr' => true,
       '_locationsallereunionvilleen' => true,
       '_centersante' => true,
       '_centersanteen' => true,
       '_choisirprovincesoin' => true,
       '_choisirprovincesoinen' => true,
       '_centersanteIndex' => true,
       '_centersanteIndexen' => true,
       '_centersanteville' => true,
       '_centersantevilleen' => true,
       '_typesdesoins' => true,
       '_typesdesoinsen' => true,
       '_provincetypesoin' => true,
       '_provincetypesoinen' => true,
       '_typedesoinregion' => true,
       '_typedesoinregionen' => true,
       '_typedesoinville' => true,
       '_typedesoinvilleen' => true,
       '_attraitsactivity' => true,
       '_attraitsactivityen' => true,
       '_attraitsIndex' => true,
       '_attraitsIndexen' => true,
       '_attraitsVille' => true,
       '_attraitsVilleen' => true,
       '_attraitsprovince' => true,
       '_attraitsprovinceen' => true,
       '_attraitsactivitedefault' => true,
       '_attraitsactivitedefaulten' => true,
       '_attraitsprovinceactivite' => true,
       '_attraitsprovinceactiviteen' => true,
       '_attraitslistactivity' => true,
       '_attraitslistactivityen' => true,
       '_attraitslistactivityajax' => true,
       '_attraitslistactivityville' => true,
       '_attraitslistactivityvilleen' => true,
       '_promotion' => true,
       '_promotionen' => true,
       '_promotionstarifderniereminuteprovince' => true,
       '_promotionstarifderniereminuteprovinceen' => true,
       '_promotionstarifderniereminuteregion' => true,
       '_promotionstarifderniereminuteregionen' => true,
       '_promotionfluxrss' => true,
       '_promotionfluxrssen' => true,
       '_promotionfluxrssprovince' => true,
       '_promotionfluxrssprovinceen' => true,
       '_promotionfluxrssregion' => true,
       '_promotionfluxrssregionen' => true,
       '_restaurant' => true,
       '_restaurant_province_index' => true,
       '_restaurantspecialite' => true,
       '_restaurantregion' => true,
       '_listespecialiteregion' => true,
       '_restaurantprovincenationalite' => true,
       '_hebergementfr' => true,
       '_hebergementen' => true,
       '_hebergementregionsquebecfr' => true,
       '_hebergementregionsquebecen' => true,
       '_hebergementprovincefr' => true,
       '_hebergementprovinceen' => true,
       '_hebergementreservationenligne' => true,
       '_hebergementdisplayfr' => true,
       '_hebergementdisplayen' => true,
       '_hebergementtypefr' => true,
       '_hebergementtypeen' => true,
       '_hebergementtypeprovincefr' => true,
       '_hebergementtypeprovinceen' => true,
       '_hebergementtyperegionfr' => true,
       '_hebergementtyperegionen' => true,
       '_hebergementtypevillefr' => true,
       '_hebergementtypevilleen' => true,
       '_hebergementinfoclient' => true,
       '_hebergementinfoclienten' => true,
       '_hebergementchambre' => true,
       '_hebergementchambreen' => true,
       '_hebergementforfait' => true,
       '_hebergementforfaiten' => true,
       '_hebergementactivite' => true,
       '_hebergementactiviteen' => true,
       '_hebergementcorporatif' => true,
       '_hebergementcorporatifen' => true,
       '_hebergementgalery' => true,
       '_hebergementgaleryen' => true,
       '_hebergementsoin' => true,
       '_hebergementsoinen' => true,
       '_hebergementrestaurant' => true,
       '_hebergementrestauranten' => true,
       '_hebergementreservation' => true,
       '_hebergementreservationen' => true,
       '_hebergementdirectionroutiere' => true,
       '_hebergementdirectionroutiereen' => true,
       '_classementhebergementregionajax' => true,
       '_hebergementfluxrss' => true,
       '_hebergementfluxenrss' => true,
       '_quisommesnous' => true,
       '_faq' => true,
       '_contact' => true,
       '_conditionUtilisation' => true,
       '_conditionUtilisation_en' => true,
       '_sitemap' => true,
       '_sitemapxml' => true,
       '_transaction_langue_global' => true,
       '_demandesansitem' => true,
       '_propositionmoteurrecherche' => true,
       'logout' => true,
       '_redirectionRole' => true,
       '_langue_admin_client' => true,
       '_Dashboard_compteCustomer' => true,
       'MyAppTextAttrait' => true,
       'MyAppPromotion' => true,
       'MyAppForfait' => true,
       'MyAppForfaitAdd' => true,
       'MyAppForfaitUpdate' => true,
       'MyAppForfaitDelete' => true,
       'MyAppTexteForfait' => true,
       'MyAppTarifHoraire' => true,
       'MyAppPaiementDevise' => true,
       'MyAppActiviteHebergement' => true,
       'MyAppServiceHebergement' => true,
       'MyAppActiviteAttrait' => true,
       'MyAppServiceAttrait' => true,
       'MyAppSoinSanteAttrait' => true,
       'MyAppSoinSanteAttraiten' => true,
       'MyAppCouponRabais' => true,
       'MyAppAddCouponRabais' => true,
       'MyAppUpdateCouponRabais' => true,
       'MyAppDeleteCouponRabais' => true,
       'MyAppTextHebergement' => true,
       'MyAppChambre' => true,
       'MyAppAddChambre' => true,
       'MyAppUpdateChambre' => true,
       'MyAppDeleteChambre' => true,
       'MyAppCorporatif' => true,
       'MyAppAddCorporatif' => true,
       'MyAppUpdateCorporatif' => true,
       'MyAppDeleteCorporatif' => true,
       '_periodedelete' => true,
       '_displayvignette' => true,
       '_galeriehebergementdelete' => true,
       '_galeriehebergementupload' => true,
       '_displayvignetteroom' => true,
       '_galeriechambredelete' => true,
       '_displayvignettepackage' => true,
       '_galeriePackageforfaitdelete' => true,
       '_displayvignettecorporatif' => true,
       '_galeriePackagedelete' => true,
       '_displayvignetteattrait' => true,
       '_galerieAttraitdelete' => true,
       '_ordreaffichagechambre' => true,
       '_uploadimgprincipaleattrait' => true,
       '_uploadimgprincipalehebergement' => true,
       '_uploadcategoriehebergement' => true,
       '_uploadlogohebergement' => true,
       '_uploadimgcategorieattrait' => true,
       '_uploadlogoattrait' => true,
       '_Dashboard' => true,
       '_Dashboard_general' => true,
       '_Dashboard_hebergements' => true,
       '_Dashboard_attraits' => true,
       '_Dashboard_quebec_saison' => true,
       '_Dashboard_statistiques' => true,
       '_Dashboard_informations' => true,
       '_Dashboard_pays' => true,
       '_Dashboard_addpays' => true,
       '_Dashboard_updatepays' => true,
       '_Dashboard_deletepays' => true,
       '_Dashboard_provinces' => true,
       '_Dashboard_addprovinces' => true,
       '_Dashboard_updateprovinces' => true,
       '_Dashboard_addtexteprovincecategoriehebergement' => true,
       '_Dashboard_addtexteprovincecorporatif' => true,
       '_Dashboard_addtexteprovinceappeldoffre' => true,
       '_Dashboard_addtexteprovincelocationsalle' => true,
       '_Dashboard_addtexteprovinceactivitecorpo' => true,
       '_Dashboard_addtexteprovincechambreaffaire' => true,
       '_Dashboard_addtexteprovinceforfaitaffaire' => true,
       '_Dashboard_texteprovinceforfait' => true,
       '_Dashboard_texteprovinceattrait' => true,
       '_Dashboard_texteprovincesante' => true,
       '_Dashboard_texteprovincerestaurant' => true,
       '_Dashboard_deleteprovinces' => true,
       '_Dashboard_regions' => true,
       '_Dashboard_addregions' => true,
       '_Dashboard_updateregions' => true,
       '_Dashboard_texteregionattrait' => true,
       '_Dashboard_texteregionsante' => true,
       '_Dashboard_texteregionrestaurant' => true,
       '_Dashboard_addtexteregioncategoriehebergement' => true,
       '_Dashboard_deleteregions' => true,
       '_Dashboard_addtexteregioncorporatif' => true,
       '_Dashboard_addtexteregionappeldoffre' => true,
       '_Dashboard_addtexteregionlocationsalle' => true,
       '_Dashboard_addtexteregionactivitecorpo' => true,
       '_Dashboard_addtexteregionchambreaffaire' => true,
       '_Dashboard_addtexteregionforfaitaffaire' => true,
       '_Dashboard_zones' => true,
       '_Dashboard_addzones' => true,
       '_Dashboard_updatezones' => true,
       '_Dashboard_deletezones' => true,
       '_Dashboard_villes' => true,
       '_Dashboard_addvilles' => true,
       '_Dashboard_updatevilles' => true,
       '_Dashboard_deletevilles' => true,
       '_Dashboard_modes_paiements' => true,
       '_Dashboard_addmodes_paiements' => true,
       '_Dashboard_updatemodes_paiements' => true,
       '_Dashboard_delete_paiements' => true,
       '_Dashboard_devises' => true,
       '_Dashboard_adddevises' => true,
       '_Dashboard_updatedevises' => true,
       '_Dashboard_deletedevises' => true,
       '_Dashboard_acompte' => true,
       '_Dashboard_addacompte' => true,
       '_Dashboard_updateacompte' => true,
       '_Dashboard_deleteacompte' => true,
       '_Dashboard_forfaits' => true,
       '_Dashboard_addforfaits' => true,
       '_Dashboard_updateforfaits' => true,
       '_Dashboard_texteregionforfait' => true,
       '_Dashboard_deleteforfaits' => true,
       '_Dashboard_cotations' => true,
       '_Dashboard_addcotations' => true,
       '_Dashboard_updatecotations' => true,
       '_Dashboard_deletecotations' => true,
       '_Dashboard_classifications' => true,
       '_Dashboard_addclassifications' => true,
       '_Dashboard_updateclassifications' => true,
       '_Dashboard_deleteclassifications' => true,
       '_Dashboard_clients' => true,
       '_Dashboard_addclients' => true,
       '_Dashboard_updateclients' => true,
       '_Dashboard_deleteclients' => true,
       '_Dashboard_hebergement' => true,
       '_Dashboard_addhebergement' => true,
       '_Dashboard_updatehebergement' => true,
       '_Dashboard_deletehebergement' => true,
       '_Dashboard_categoriehebergement' => true,
       '_Dashboard_addcategoriehebergement' => true,
       '_Dashboard_updatecategoriehebergement' => true,
       '_Dashboard_deletecategoriehebergement' => true,
       '_Dashboard_activiteshebergement' => true,
       '_Dashboard_addactivite' => true,
       '_Dashboard_updateactivite' => true,
       '_Dashboard_deleteactivite' => true,
       '_Dashboard_serviceshebergement' => true,
       '_Dashboard_addservice' => true,
       '_Dashboard_updateservice' => true,
       '_Dashboard_deleteservice' => true,
       '_Dashboard_styleshebergement' => true,
       '_Dashboard_addstyle' => true,
       '_Dashboard_updatestyle' => true,
       '_Dashboard_deletestyle' => true,
       '_Dashboard_typechambreshebergement' => true,
       '_Dashboard_addtypechambre' => true,
       '_Dashboard_updatetypechambre' => true,
       '_Dashboard_deletetypechambre' => true,
       '_Dashboard_chambreshebergement' => true,
       '_Dashboard_addchambre' => true,
       '_Dashboard_updatechambre' => true,
       '_Dashboard_deletechambre' => true,
       '_Dashboard_litshebergement' => true,
       '_Dashboard_addlit' => true,
       '_Dashboard_updatelit' => true,
       '_Dashboard_deletelit' => true,
       '_Dashboard_occupationshebergement' => true,
       '_Dashboard_addoccupation' => true,
       '_Dashboard_updateoccupation' => true,
       '_Dashboard_deleteoccupation' => true,
       '_Dashboard_equipementshebergement' => true,
       '_Dashboard_addequipement' => true,
       '_Dashboard_updateequipement' => true,
       '_Dashboard_deleteequipement' => true,
       '_Dashboard_affiliationshebergement' => true,
       '_Dashboard_addaffiliation' => true,
       '_Dashboard_updateaffiliation' => true,
       '_Dashboard_deleteaffiliation' => true,
       '_Dashboard_servicecorporatifhebergement' => true,
       '_Dashboard_addservicecorporatif' => true,
       '_Dashboard_updateservicecorporatif' => true,
       '_Dashboard_deleteservicecorporatif' => true,
       '_Dashboard_sallescorporativeshebergement' => true,
       '_Dashboard_addsallecorporative' => true,
       '_Dashboard_updatesallecorporative' => true,
       '_Dashboard_deletesallecorporative' => true,
       '_Dashboard_evenementscoporatifshebergement' => true,
       '_Dashboard_addevenementcorporaif' => true,
       '_Dashboard_updateevenementcorporatif' => true,
       '_Dashboard_deleteevenementcorporatif' => true,
       '_Dashboard_photohebergement' => true,
       '_Dashboard_addphotohebergement' => true,
       '_Dashboard_updatephotohebergement' => true,
       '_Dashboard_deletephotohebergement' => true,
       '_Dashboard_attrait' => true,
       '_Dashboard_addattrait' => true,
       '_Dashboard_updateattrait' => true,
       '_Dashboard_deleteattrait' => true,
       '_Dashboard_attraitcategories' => true,
       '_Dashboard_addattraitcategories' => true,
       '_Dashboard_updateattraitcategories' => true,
       '_Dashboard_deleteattraitcategories' => true,
       '_Dashboard_attraitsouscategorie' => true,
       '_Dashboard_addattraitsouscategorie' => true,
       '_Dashboard_updateattraitsouscategorie' => true,
       '_Dashboard_deleteattraitsouscategorie' => true,
       '_Dashboard_attraittypesoins' => true,
       '_Dashboard_addattraittypesoins' => true,
       '_Dashboard_updateattraittypesoins' => true,
       '_Dashboard_deleteattraittypesoins' => true,
       '_Dashboard_attraitsoins' => true,
       '_Dashboard_addattraitsoins' => true,
       '_Dashboard_updateattraitsoins' => true,
       '_Dashboard_deleteattraitsoins' => true,
       '_Dashboard_attraitactivites' => true,
       '_Dashboard_addattraitactivites' => true,
       '_Dashboard_updateattraitactivites' => true,
       '_Dashboard_deleteattraitactivites' => true,
       '_Dashboard_attraitservices' => true,
       '_Dashboard_addattraitservices' => true,
       '_Dashboard_updateattraitservices' => true,
       '_Dashboard_deleteattraitservices' => true,
       '_Dashboard_attraitcusines' => true,
       '_Dashboard_addattraitcuisines' => true,
       '_Dashboard_updateattraitcusines' => true,
       '_Dashboard_deleteattraitcusines' => true,
       '_Dashboard_attraitphotos' => true,
       '_Dashboard_addattraitphotos' => true,
       '_Dashboard_updateattraitphotos' => true,
       '_Dashboard_deleteattraitphotos' => true,
       '_Dashboard_typessaison' => true,
       '_Dashboard_addtypessaison' => true,
       '_Dashboard_updatetypessaison' => true,
       '_Dashboard_deletetypessaison' => true,
       '_Dashboard_typespagessaisons' => true,
       '_Dashboard_addtypespagessaisons' => true,
       '_Dashboard_updatetypespagessaisons' => true,
       '_Dashboard_deletetypespagessaisons' => true,
       '_Dashboard_pagesstatiques' => true,
       '_Dashboard_addpagesstatiques' => true,
       '_Dashboard_updatepagesstatiques' => true,
       '_Dashboard_deletepagesstatiques' => true,
       '_Dashboard_saisons' => true,
       '_Dashboard_addsaison' => true,
       '_Dashboard_updatesaison' => true,
       '_Dashboard_deletesaison' => true,
       '_Dashboard_previewfrench' => true,
       '_Dashboard_previewenglish' => true,
       '_Dashboard_statistiquesclients' => true,
       '_Dashboard_statistiquesmois' => true,
       '_Dashboard_statistiquesannee' => true,
       '_Dashboard_archivesstatistiques' => true,
       '_Dashboard_utilisateursSysteme' => true,
       '_Dashboard_clientSysteme' => true,
       '_Dashboard_clientSystemepassword' => true,
       '_Dashboard_utilisateurSystemepassword' => true,
       '_Dashboard_addutilisateurssysteme' => true,
       '_Dashboard_updateutilisateurssysteme' => true,
       '_Dashboard_deleteutilisateurssysteme' => true,
       '_Dashboard_logsanomalies' => true,
       '_Dashboard_gestionTexteAccueil' => true,
       '_Dashboard_gestionTexteAccueil_en' => true,
       '_google_maps' => true,
       '_triregionajax' => true,
       '_trizoneajax' => true,
       '_trivilleajax' => true,
       '_displayvignettehebergementadmin' => true,
       '_galerieHebergementAdmindelete' => true,
       '_displayvignetteattraitadmin' => true,
       '_galerieAttraitAdmindelete' => true,
       'login' => true,
       'login_check' => true,
       'berriart_sitemap' => true,
       'berriart_sitemap_index' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function getconsoleRouteInfo()
    {
        return array(array (), array (  '_controller' => 'CoreSphere\\ConsoleBundle\\Controller\\ConsoleController::indexAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/console/',  ),));
    }

    private function getconsole_execRouteInfo()
    {
        return array(array (  0 => '_format',), array (  '_controller' => 'CoreSphere\\ConsoleBundle\\Controller\\ConsoleController::execAction',  '_format' => 'json',), array (  '_method' => 'POST',  '_format' => 'json|html',), array (  0 =>   array (    0 => 'variable',    1 => '.',    2 => 'json|html',    3 => '_format',  ),  1 =>   array (    0 => 'text',    1 => '/console',  ),));
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }

    private function getMyAppMobileBundle_homepageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/mobile/',  ),));
    }

    private function getMyAppMobileBundle_hebergementRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\HebergementController::hebergementIndexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/mobile/hebergements.html',  ),));
    }

    private function getMyAppMobileBundle_hebergement_region_ajaxRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\HebergementController::hebergementRegionAjaxAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/mobile/hebergements_region.html',  ),));
    }

    private function getMyAppMobileBundle_hebergement_ville_ajaxRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\HebergementController::hebergementVilleAjaxAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/mobile/hebergements_ville.html',  ),));
    }

    private function getMyAppMobileBundle_hebergement_resultat_canadaRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\HebergementController::hebergementResultatCanadaAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/mobile/hebergements_resultats_canada.html',  ),));
    }

    private function getMyAppMobileBundle_hebergement_resultat_province_ajaxRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'page',), array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\HebergementController::hebergementResultatProvinceAjaxAction',  'id' => 'id',  'page' => 'page',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^\\.]+?',    3 => 'page',  ),  1 =>   array (    0 => 'text',    1 => '.html',  ),  2 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'id',  ),  3 =>   array (    0 => 'text',    1 => '/mobile/hebergements_province',  ),));
    }

    private function getMyAppMobileBundle_hebergement_resultat_region_ajaxRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'page',), array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\HebergementController::hebergementResultatRegionAjaxAction',  'id' => 'id',  'page' => 'page',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^\\.]+?',    3 => 'page',  ),  1 =>   array (    0 => 'text',    1 => '.html',  ),  2 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'id',  ),  3 =>   array (    0 => 'text',    1 => '/mobile/hebergements_resultats_region',  ),));
    }

    private function getMyAppMobileBundle_hebergement_resultat_ville_ajaxRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'page',), array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\HebergementController::hebergementResultatVilleAjaxAction',  'id' => 'id',  'page' => 'page',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^\\.]+?',    3 => 'page',  ),  1 =>   array (    0 => 'text',    1 => '.html',  ),  2 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'id',  ),  3 =>   array (    0 => 'text',    1 => '/mobile/hebergements_resultats',  ),));
    }

    private function getmobile_generic_detailRouteInfo()
    {
        return array(array (  0 => 'section',  1 => 'id',), array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\HebergementController::genericCustomerAction',  'section' => 'section',  'id' => 'id',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^_\\.]+?',    3 => 'id',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/_]+?',    3 => 'section',  ),  3 =>   array (    0 => 'text',    1 => '/mobile',  ),));
    }

    private function getMyAppMobileBundle_detail_hebergementRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\HebergementController::hebergementDetailAction',  'id' => 'id',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/mobile/hebergements',  ),));
    }

    private function getMyAppMobileBundle_detail_chambreRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\HebergementController::chambreDetailAction',  'id' => 'id',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/mobile/chambres',  ),));
    }

    private function getMyAppMobileBundle_detail_forfaitRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\HebergementController::forfaitDetailAction',  'id' => 'id',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/mobile/forfaits',  ),));
    }

    private function getMyAppMobileBundle_detail_corporatifRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\HebergementController::corporatifDetailAction',  'id' => 'id',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/mobile/corporatif',  ),));
    }

    private function getMyAppMobileBundle_detail_activiteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\HebergementController::activiteDetailAction',  'id' => 'id',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/mobile/activites_services',  ),));
    }

    private function getMyAppMobileBundle_detail_galerieRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\HebergementController::galerieDetailAction',  'id' => 'id',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/mobile/galerie_photo',  ),));
    }

    private function getMyAppMobileBundle_detail_santeRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\HebergementController::santeDetailAction',  'id' => 'id',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/mobile/centre_sante_spa',  ),));
    }

    private function getMyAppMobileBundle_detail_restaurantRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\HebergementController::restaurantDetailAction',  'id' => 'id',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/mobile/restaurant',  ),));
    }

    private function getMyAppMobileBundle_detail_informationRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\HebergementController::informationDetailAction',  'id' => 'id',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/mobile/information_reservation',  ),));
    }

    private function getMyAppMobileBundle_detail_directionRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\HebergementController::directionDetailAction',  'id' => 'id',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/mobile/direction_routieres',  ),));
    }

    private function getMyAppMobileBundle_demande_reservationRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\HebergementController::demandeReservationAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/mobile/demande_reservation.html',  ),));
    }

    private function getMyAppMobileBundle_hebergement_enRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\HebergementController::hebergementIndexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/mobile/accommodation.html',  ),));
    }

    private function getMyAppMobileBundle_forfaitRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\ForfaitController::forfaitIndexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/mobile/forfaits.html',  ),));
    }

    private function getMyAppMobileBundle_forfait_enRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\ForfaitController::forfaitIndexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/mobile/packages.html',  ),));
    }

    private function getMyAppMobileBundle_corpoRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\CorpoController::corpoIndexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/mobile/corporatif_evenement.html',  ),));
    }

    private function getMyAppMobileBundle_corpo_enRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\CorpoController::corpoIndexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/mobile/corporate_events.html',  ),));
    }

    private function getMyAppMobileBundle_promotionRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\PromotionController::promotionIndexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/mobile/tarifs_derniere_minute_et_promotions.html',  ),));
    }

    private function getMyAppMobileBundle_promotion_enRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\PromotionController::promotionIndexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/mobile/last_minute_deals_and_promotions.html',  ),));
    }

    private function getMyAppMobileBundle_santeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\SanteController::SanteIndexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/mobile/centres_sante_spas.html',  ),));
    }

    private function getMyAppMobileBundle_sante_enRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\SanteController::SanteIndexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/mobile/health_centers_spas.html',  ),));
    }

    private function getMyAppMobileBundle_attraitRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\AttraitController::attraitIndexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/mobile/attraits_activites.html',  ),));
    }

    private function getMyAppMobileBundle_attrait_enRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\AttraitController::attraitIndexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/mobile/activities_attractions.html',  ),));
    }

    private function getMyAppMobileBundle_restaurantRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\RestaurantController::restaurantIndexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/mobile/restaurants.html',  ),));
    }

    private function getMyAppMobileBundle_restaurant_enRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\MobileBundle\\Controller\\RestaurantController::restaurantIndexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/mobile/restaurants-en.html',  ),));
    }

    private function get_accueilRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function get_accueilenRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function get_accueil_provinceRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\DefaultController::showprovinceAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/accueil_province',  ),));
    }

    private function get_accueil_provinceenRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\DefaultController::showprovinceAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/home_province',  ),));
    }

    private function get_accueil_regionRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\DefaultController::showregionAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/accueil_region',  ),));
    }

    private function get_accueil_regionenRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\DefaultController::showregionAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/home_region',  ),));
    }

    private function get_forfaitsfrRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\ForfaitsController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/forfaits.html',  ),));
    }

    private function get_forfaitsenRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\ForfaitsController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/packages.html',  ),));
    }

    private function get_forfaitsprovincefrRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\ForfaitsController::provinceforfaitAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/forfaits_province',  ),));
    }

    private function get_forfaitsprovinceenRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\ForfaitsController::provinceforfaitAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/packages_province',  ),));
    }

    private function get_forfaitsregionsfrRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\ForfaitsController::regionforfaitAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/forfaits_region',  ),));
    }

    private function get_forfaitsregionsenRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\ForfaitsController::regionforfaitAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/package_region',  ),));
    }

    private function get_forfaitsvillesfrRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\ForfaitsController::villeforfaitAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html/',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/forfaits_ville',  ),));
    }

    private function get_forfaitsvillesenRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\ForfaitsController::villeforfaitAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html/',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/city_packages',  ),));
    }

    private function get_forfaitsactiviteprovincefrRouteInfo()
    {
        return array(array (  0 => 'activite',  1 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\ForfaitsController::displayActiviteProvinceAction',  'activite' => 'activite',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^_\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '_province',  ),  3 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/_]+?',    3 => 'activite',  ),  4 =>   array (    0 => 'text',    1 => '/forfaits',  ),));
    }

    private function get_forfaitsactiviteprovinceenRouteInfo()
    {
        return array(array (  0 => 'activite',  1 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\ForfaitsController::displayActiviteProvinceAction',  'activite' => 'activite',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^_\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '_province',  ),  3 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/_]+?',    3 => 'activite',  ),  4 =>   array (    0 => 'text',    1 => '/packages',  ),));
    }

    private function get_forfaitsactiviteregionRouteInfo()
    {
        return array(array (  0 => 'activite',  1 => 'name',  2 => 'page',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\ForfaitsController::displayActiviteRegionAction',  'activite' => 'activite',  'name' => 'name',  'page' => 'page',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^\\.]+?',    3 => 'page',  ),  1 =>   array (    0 => 'text',    1 => '.html',  ),  2 =>   array (    0 => 'variable',    1 => '_',    2 => '[^_\\.]+?',    3 => 'name',  ),  3 =>   array (    0 => 'text',    1 => '_region',  ),  4 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/_]+?',    3 => 'activite',  ),  5 =>   array (    0 => 'text',    1 => '/forfaits',  ),));
    }

    private function get_forfaitsactiviteregionenRouteInfo()
    {
        return array(array (  0 => 'activite',  1 => 'name',  2 => 'page',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\ForfaitsController::displayActiviteRegionAction',  'activite' => 'activite',  'name' => 'name',  'page' => 'page',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^\\.]+?',    3 => 'page',  ),  1 =>   array (    0 => 'text',    1 => '.html',  ),  2 =>   array (    0 => 'variable',    1 => '_',    2 => '[^_\\.]+?',    3 => 'name',  ),  3 =>   array (    0 => 'text',    1 => '_region',  ),  4 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/_]+?',    3 => 'activite',  ),  5 =>   array (    0 => 'text',    1 => '/packages',  ),));
    }

    private function get_forfaitsactivitevilleRouteInfo()
    {
        return array(array (  0 => 'activite',  1 => 'name',  2 => 'page',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\ForfaitsController::displayActiviteVilleAction',  'activite' => 'activite',  'name' => 'name',  'page' => 'page',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^\\.]+?',    3 => 'page',  ),  1 =>   array (    0 => 'text',    1 => '.html',  ),  2 =>   array (    0 => 'variable',    1 => '_',    2 => '[^_\\.]+?',    3 => 'name',  ),  3 =>   array (    0 => 'text',    1 => '_ville',  ),  4 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/_]+?',    3 => 'activite',  ),  5 =>   array (    0 => 'text',    1 => '/forfaits',  ),));
    }

    private function get_forfaitsactivitevilleenRouteInfo()
    {
        return array(array (  0 => 'activite',  1 => 'name',  2 => 'page',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\ForfaitsController::displayActiviteVilleAction',  'activite' => 'activite',  'name' => 'name',  'page' => 'page',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^\\.]+?',    3 => 'page',  ),  1 =>   array (    0 => 'text',    1 => '.html',  ),  2 =>   array (    0 => 'variable',    1 => '_',    2 => '[^_\\.]+?',    3 => 'name',  ),  3 =>   array (    0 => 'text',    1 => '_city',  ),  4 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/_]+?',    3 => 'activite',  ),  5 =>   array (    0 => 'text',    1 => '/packages',  ),));
    }

    private function get_forfaitsactiviteindexfrRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\ForfaitsController::displayActiviteIndexAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/forfaits',  ),));
    }

    private function get_forfaitsactiviteindexenRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\ForfaitsController::displayActiviteIndexAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/packages',  ),));
    }

    private function get_corpoeventsfrRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/corporatif_evenement.html',  ),));
    }

    private function get_corpoeventsenRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/corporate_events.html',  ),));
    }

    private function get_corpoeventsprovinceRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::listerProvinceAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/corporatif_evenements_province',  ),));
    }

    private function get_corpoeventsprovincefrajaxRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::reservationFormulaireAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/reservation.html',  ),));
    }

    private function get_corpoeteventsprovinceenRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::listerProvinceAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/corporate_events_province',  ),));
    }

    private function get_corpoeventsregionsRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::listerRegionAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/corporatif_evenements_region',  ),));
    }

    private function get_corpoeventsregionsenRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::listerRegionAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/corporate_events_region',  ),));
    }

    private function get_corpoeventsvilleRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::listerVilleAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/corporatif_evenements_ville',  ),));
    }

    private function get_corpoeventsvilleenRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::listerVilleAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/corporate_events_city',  ),));
    }

    private function get_appeloffrefrRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::appelOffreAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/corporatif_appel_offre.html',  ),));
    }

    private function get_appeloffreenRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::appelOffreAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/corporate_call_offers.html',  ),));
    }

    private function get_formulaireprovinceappeloffreRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::appelOffreProvinceAjaxAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/corporatif_province_appel_offre.html',  ),));
    }

    private function get_formulaireregionappeloffreRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::appelOffreRegionAjaxAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/corporatif_region_appel_offre.html',  ),));
    }

    private function get_formulairevilleappeloffreRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::appelOffreVilleAjaxAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/corporatif_ville_appel_offre.html',  ),));
    }

    private function get_activiteCorporativeGroupefrRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::corpoActiviteAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/activite_corporative.html',  ),));
    }

    private function get_activitecorpoprovincefrRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::corpoActiviteProvinceAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/activite_corporative_province',  ),));
    }

    private function get_activitecorporegionfrRouteInfo()
    {
        return array(array (  0 => 'name',  1 => 'page',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::corpoActiviteRegionAction',  'name' => 'name',  'page' => 'page',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^\\.]+?',    3 => 'page',  ),  1 =>   array (    0 => 'text',    1 => '.html',  ),  2 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  3 =>   array (    0 => 'text',    1 => '/activite_corporative_region',  ),));
    }

    private function get_activitecorpovillefrRouteInfo()
    {
        return array(array (  0 => 'name',  1 => 'page',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::corpoActiviteVilleAction',  'name' => 'name',  'page' => 'page',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^\\.]+?',    3 => 'page',  ),  1 =>   array (    0 => 'text',    1 => '.html',  ),  2 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  3 =>   array (    0 => 'text',    1 => '/activite_corporative_ville',  ),));
    }

    private function get_activiteCorporativeGroupeenRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::corpoActiviteAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/corporate_activities.html',  ),));
    }

    private function get_activitecorpoprovinceenRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::corpoActiviteProvinceAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/corporate_activities_province',  ),));
    }

    private function get_activitecorporegionenRouteInfo()
    {
        return array(array (  0 => 'name',  1 => 'page',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::corpoActiviteRegionAction',  'name' => 'name',  'page' => 'page',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^\\.]+?',    3 => 'page',  ),  1 =>   array (    0 => 'text',    1 => '.html',  ),  2 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  3 =>   array (    0 => 'text',    1 => '/corporate_activities_region',  ),));
    }

    private function get_activitecorpovilleenRouteInfo()
    {
        return array(array (  0 => 'name',  1 => 'page',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::corpoActiviteVilleAction',  'name' => 'name',  'page' => 'page',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^\\.]+?',    3 => 'page',  ),  1 =>   array (    0 => 'text',    1 => '.html',  ),  2 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  3 =>   array (    0 => 'text',    1 => '/corporate_activities_city',  ),));
    }

    private function get_forfaitaffaireindexfrRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::forfaitAffaireIndexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/forfait_affaire.html',  ),));
    }

    private function get_forfaitaffaireindexenRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::forfaitAffaireIndexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/business_packages.html',  ),));
    }

    private function get_forfaitaffaireprovincefrRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::forfaitAffaireProvinceAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/forfait_affaire_province',  ),));
    }

    private function get_forfaitaffaireprovinceenRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::forfaitAffaireProvinceAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/business_packages_province',  ),));
    }

    private function get_chambreaffairefrRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::chambreAffaireAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/corporatif_chambre_affaire.html',  ),));
    }

    private function get_chambreaffaireenRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::chambreAffaireAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/corporate_room_business.html',  ),));
    }

    private function get_chambreaffaireprovincefrRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::chambreAffaireProvinceAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/corporatif_chambre_affaire_province',  ),));
    }

    private function get_chambreaffaireprovinceenRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::chambreAffaireProvinceAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/corporate_room_business_province',  ),));
    }

    private function get_chambreaffaireregionfrRouteInfo()
    {
        return array(array (  0 => 'name',  1 => 'page',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::chambreAffaireRegionAction',  'name' => 'name',  'page' => 'page',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^\\.]+?',    3 => 'page',  ),  1 =>   array (    0 => 'text',    1 => '.html',  ),  2 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  3 =>   array (    0 => 'text',    1 => '/corporatif_chambre_affaire_region',  ),));
    }

    private function get_chambreaffaireregionenRouteInfo()
    {
        return array(array (  0 => 'name',  1 => 'page',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::chambreAffaireRegionAction',  'name' => 'name',  'page' => 'page',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^\\.]+?',    3 => 'page',  ),  1 =>   array (    0 => 'text',    1 => '.html',  ),  2 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  3 =>   array (    0 => 'text',    1 => '/corporate_room_business_region',  ),));
    }

    private function get_chambreaffairevillefrRouteInfo()
    {
        return array(array (  0 => 'name',  1 => 'page',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::chambreAffaireVilleAction',  'name' => 'name',  'page' => 'page',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^\\.]+?',    3 => 'page',  ),  1 =>   array (    0 => 'text',    1 => '.html',  ),  2 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  3 =>   array (    0 => 'text',    1 => '/corporatif_chambre_affaire_ville',  ),));
    }

    private function get_chambreaffairevilleenRouteInfo()
    {
        return array(array (  0 => 'name',  1 => 'page',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::chambreAffaireVilleAction',  'name' => 'name',  'page' => 'page',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^\\.]+?',    3 => 'page',  ),  1 =>   array (    0 => 'text',    1 => '.html',  ),  2 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  3 =>   array (    0 => 'text',    1 => '/corporate_room_business_city',  ),));
    }

    private function get_locationsallereunionfrRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::locationSalleReunionAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/location_salle_reunion.html',  ),));
    }

    private function get_locationsallereunionenRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::locationSalleReunionAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/meeting room rental.html',  ),));
    }

    private function get_locationsallereunionprovincefrRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::locationSalleReunionProvinceAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/location_salle_reunion_province',  ),));
    }

    private function get_locationsallereunionprovinceenRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::locationSalleReunionProvinceAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/meeting room rental_province',  ),));
    }

    private function get_locationsallereunionregionfrRouteInfo()
    {
        return array(array (  0 => 'name',  1 => 'page',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::locationSalleReunionRegionAction',  'name' => 'name',  'page' => 'page',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^\\.]+?',    3 => 'page',  ),  1 =>   array (    0 => 'text',    1 => '.html',  ),  2 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  3 =>   array (    0 => 'text',    1 => '/location_salle_reunion_region',  ),));
    }

    private function get_locationsallereunionregionenRouteInfo()
    {
        return array(array (  0 => 'name',  1 => 'page',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::locationSalleReunionRegionAction',  'name' => 'name',  'page' => 'page',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^\\.]+?',    3 => 'page',  ),  1 =>   array (    0 => 'text',    1 => '.html',  ),  2 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  3 =>   array (    0 => 'text',    1 => '/meeting room rental_region',  ),));
    }

    private function get_locationsallereunionvillefrRouteInfo()
    {
        return array(array (  0 => 'name',  1 => 'page',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::locationSalleReunionVilleAction',  'name' => 'name',  'page' => 'page',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^\\.]+?',    3 => 'page',  ),  1 =>   array (    0 => 'text',    1 => '.html',  ),  2 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  3 =>   array (    0 => 'text',    1 => '/location_salle_reunion_ville',  ),));
    }

    private function get_locationsallereunionvilleenRouteInfo()
    {
        return array(array (  0 => 'name',  1 => 'page',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CorpoeventsController::locationSalleReunionVilleAction',  'name' => 'name',  'page' => 'page',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^\\.]+?',    3 => 'page',  ),  1 =>   array (    0 => 'text',    1 => '.html',  ),  2 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  3 =>   array (    0 => 'text',    1 => '/meeting room rental_ville',  ),));
    }

    private function get_centersanteRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CentersanteController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/centres_sante_spas.html',  ),));
    }

    private function get_centersanteenRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CentersanteController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/health_centers_spas.html',  ),));
    }

    private function get_choisirprovincesoinRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CentersanteController::provincesoinAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/centres_sante_spas_province',  ),));
    }

    private function get_choisirprovincesoinenRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CentersanteController::provincesoinAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/health_centers_spas_province',  ),));
    }

    private function get_centersanteIndexRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CentersanteController::listerAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/centres_sante_spas_region',  ),));
    }

    private function get_centersanteIndexenRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CentersanteController::listerAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/health_centers_spas_region',  ),));
    }

    private function get_centersantevilleRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CentersanteController::villesoinAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/centres_sante_spas_ville',  ),));
    }

    private function get_centersantevilleenRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CentersanteController::villesoinAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/health_centers_spas_city',  ),));
    }

    private function get_typesdesoinsRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CentersanteController::detailsoinAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/centres_sante_spas_soin',  ),));
    }

    private function get_typesdesoinsenRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CentersanteController::detailsoinAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/health_centers_spas_care',  ),));
    }

    private function get_provincetypesoinRouteInfo()
    {
        return array(array (  0 => 'name',  1 => 'province',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CentersanteController::typedesoinprovinceAction',  'name' => 'name',  'province' => 'province',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^_\\.]+?',    3 => 'province',  ),  2 =>   array (    0 => 'text',    1 => '_province',  ),  3 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/_]+?',    3 => 'name',  ),  4 =>   array (    0 => 'text',    1 => '/soin',  ),));
    }

    private function get_provincetypesoinenRouteInfo()
    {
        return array(array (  0 => 'name',  1 => 'province',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CentersanteController::typedesoinprovinceAction',  'name' => 'name',  'province' => 'province',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^_\\.]+?',    3 => 'province',  ),  2 =>   array (    0 => 'text',    1 => '_province',  ),  3 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/_]+?',    3 => 'name',  ),  4 =>   array (    0 => 'text',    1 => '/care',  ),));
    }

    private function get_typedesoinregionRouteInfo()
    {
        return array(array (  0 => 'name',  1 => 'region',  2 => 'page',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CentersanteController::typedesoinregionAction',  'name' => 'name',  'region' => 'region',  'page' => 'page',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^\\.]+?',    3 => 'page',  ),  1 =>   array (    0 => 'text',    1 => '.html',  ),  2 =>   array (    0 => 'variable',    1 => '_',    2 => '[^_\\.]+?',    3 => 'region',  ),  3 =>   array (    0 => 'text',    1 => '_region',  ),  4 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/_]+?',    3 => 'name',  ),  5 =>   array (    0 => 'text',    1 => '/soin',  ),));
    }

    private function get_typedesoinregionenRouteInfo()
    {
        return array(array (  0 => 'name',  1 => 'region',  2 => 'page',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CentersanteController::typedesoinregionAction',  'name' => 'name',  'region' => 'region',  'page' => 'page',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^\\.]+?',    3 => 'page',  ),  1 =>   array (    0 => 'text',    1 => '.html',  ),  2 =>   array (    0 => 'variable',    1 => '_',    2 => '[^_\\.]+?',    3 => 'region',  ),  3 =>   array (    0 => 'text',    1 => '_region',  ),  4 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/_]+?',    3 => 'name',  ),  5 =>   array (    0 => 'text',    1 => '/care',  ),));
    }

    private function get_typedesoinvilleRouteInfo()
    {
        return array(array (  0 => 'name',  1 => 'ville',  2 => 'page',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CentersanteController::typedesoinvilleAction',  'name' => 'name',  'ville' => 'ville',  'page' => 'page',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^\\.]+?',    3 => 'page',  ),  1 =>   array (    0 => 'text',    1 => '.html',  ),  2 =>   array (    0 => 'variable',    1 => '_',    2 => '[^_\\.]+?',    3 => 'ville',  ),  3 =>   array (    0 => 'text',    1 => '_ville',  ),  4 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/_]+?',    3 => 'name',  ),  5 =>   array (    0 => 'text',    1 => '/soin',  ),));
    }

    private function get_typedesoinvilleenRouteInfo()
    {
        return array(array (  0 => 'name',  1 => 'ville',  2 => 'page',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\CentersanteController::typedesoinvilleAction',  'name' => 'name',  'ville' => 'ville',  'page' => 'page',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^\\.]+?',    3 => 'page',  ),  1 =>   array (    0 => 'text',    1 => '.html',  ),  2 =>   array (    0 => 'variable',    1 => '_',    2 => '[^_\\.]+?',    3 => 'ville',  ),  3 =>   array (    0 => 'text',    1 => '_city',  ),  4 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/_]+?',    3 => 'name',  ),  5 =>   array (    0 => 'text',    1 => '/care',  ),));
    }

    private function get_attraitsactivityRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\AttraitsactivityController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/attraits_activites.html',  ),));
    }

    private function get_attraitsactivityenRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\AttraitsactivityController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/activities_attractions.html',  ),));
    }

    private function get_attraitsIndexRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\AttraitsactivityController::listerRegionAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/attraits_activites_region',  ),));
    }

    private function get_attraitsIndexenRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\AttraitsactivityController::listerRegionAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/activities_attractions_region',  ),));
    }

    private function get_attraitsVilleRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\AttraitsactivityController::listerVilleAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/attraits_activites_ville',  ),));
    }

    private function get_attraitsVilleenRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\AttraitsactivityController::listerVilleAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/activities_attractions_city',  ),));
    }

    private function get_attraitsprovinceRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\AttraitsactivityController::attraitprovinceAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/attraits_activites_province',  ),));
    }

    private function get_attraitsprovinceenRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\AttraitsactivityController::attraitprovinceAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/activities_attractions_province',  ),));
    }

    private function get_attraitsactivitedefaultRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\AttraitsactivityController::attraitActiviteDefaultAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/attraits_activites',  ),));
    }

    private function get_attraitsactivitedefaultenRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\AttraitsactivityController::attraitActiviteDefaultAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/activities_attractions',  ),));
    }

    private function get_attraitsprovinceactiviteRouteInfo()
    {
        return array(array (  0 => 'province',  1 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\AttraitsactivityController::attraitProvinceActiviteAction',  'province' => 'province',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^_\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '_attraits_activites',  ),  3 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/_]+?',    3 => 'province',  ),  4 =>   array (    0 => 'text',    1 => '/province',  ),));
    }

    private function get_attraitsprovinceactiviteenRouteInfo()
    {
        return array(array (  0 => 'province',  1 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\AttraitsactivityController::attraitProvinceActiviteAction',  'province' => 'province',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^_\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '_activities_attractions',  ),  3 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/_]+?',    3 => 'province',  ),  4 =>   array (    0 => 'text',    1 => '/province',  ),));
    }

    private function get_attraitslistactivityRouteInfo()
    {
        return array(array (  0 => 'region',  1 => 'name',  2 => 'page',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\AttraitsactivityController::attraitRegionActiviteAction',  'region' => 'region',  'name' => 'name',  'page' => 'page',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^\\.]+?',    3 => 'page',  ),  1 =>   array (    0 => 'text',    1 => '.html',  ),  2 =>   array (    0 => 'variable',    1 => '_',    2 => '[^_\\.]+?',    3 => 'name',  ),  3 =>   array (    0 => 'text',    1 => '_attraits_activites',  ),  4 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/_]+?',    3 => 'region',  ),  5 =>   array (    0 => 'text',    1 => '/region',  ),));
    }

    private function get_attraitslistactivityenRouteInfo()
    {
        return array(array (  0 => 'name',  1 => 'region',  2 => 'page',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\AttraitsactivityController::attraitRegionActiviteAction',  'region' => 'region',  'name' => 'name',  'page' => 'page',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^\\.]+?',    3 => 'page',  ),  1 =>   array (    0 => 'text',    1 => '.html',  ),  2 =>   array (    0 => 'variable',    1 => '_',    2 => '[^_\\.]+?',    3 => 'region',  ),  3 =>   array (    0 => 'text',    1 => '_region',  ),  4 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/_]+?',    3 => 'name',  ),  5 =>   array (    0 => 'text',    1 => '/activities_attractions',  ),));
    }

    private function get_attraitslistactivityajaxRouteInfo()
    {
        return array(array (  0 => 'region',  1 => 'name',  2 => 'page',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\AttraitsactivityController::attraitRegionActiviteAction',  'region' => 'region',  'name' => 'name',  'page' => 'page',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^\\.]+?',    3 => 'page',  ),  1 =>   array (    0 => 'text',    1 => '.html',  ),  2 =>   array (    0 => 'variable',    1 => '_',    2 => '[^_\\.]+?',    3 => 'name',  ),  3 =>   array (    0 => 'text',    1 => '_attraits_activites',  ),  4 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/_]+?',    3 => 'region',  ),  5 =>   array (    0 => 'text',    1 => '/region',  ),));
    }

    private function get_attraitslistactivityvilleRouteInfo()
    {
        return array(array (  0 => 'ville',  1 => 'name',  2 => 'page',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\AttraitsactivityController::attraitVilleActiviteAction',  'ville' => 'ville',  'name' => 'name',  'page' => 'page',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^\\.]+?',    3 => 'page',  ),  1 =>   array (    0 => 'text',    1 => '.html',  ),  2 =>   array (    0 => 'variable',    1 => '_',    2 => '[^_\\.]+?',    3 => 'name',  ),  3 =>   array (    0 => 'text',    1 => '_attraits_activites',  ),  4 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/_]+?',    3 => 'ville',  ),  5 =>   array (    0 => 'text',    1 => '/ville',  ),));
    }

    private function get_attraitslistactivityvilleenRouteInfo()
    {
        return array(array (  0 => 'ville',  1 => 'name',  2 => 'page',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\AttraitsactivityController::attraitVilleActiviteAction',  'ville' => 'ville',  'name' => 'name',  'page' => 'page',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^\\.]+?',    3 => 'page',  ),  1 =>   array (    0 => 'text',    1 => '.html',  ),  2 =>   array (    0 => 'variable',    1 => '_',    2 => '[^_\\.]+?',    3 => 'name',  ),  3 =>   array (    0 => 'text',    1 => '_activities_attractions',  ),  4 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/_]+?',    3 => 'ville',  ),  5 =>   array (    0 => 'text',    1 => '/city',  ),));
    }

    private function get_promotionRouteInfo()
    {
        return array(array (  0 => 'page',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\DestinationController::indexAction',  'page' => 'page',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'page',  ),  1 =>   array (    0 => 'text',    1 => '/tarifs_derniere_minute_et_promotions.html',  ),));
    }

    private function get_promotionenRouteInfo()
    {
        return array(array (  0 => 'page',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\DestinationController::indexAction',  'page' => 'page',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'page',  ),  1 =>   array (    0 => 'text',    1 => '/last_minute_deals_and_promotions.html',  ),));
    }

    private function get_promotionstarifderniereminuteprovinceRouteInfo()
    {
        return array(array (  0 => 'name',  1 => 'page',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\DestinationController::provincePromotionAction',  'name' => 'name',  'page' => 'page',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^\\.]+?',    3 => 'page',  ),  1 =>   array (    0 => 'text',    1 => '.html',  ),  2 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  3 =>   array (    0 => 'text',    1 => '/tarifs_derniere_minute_et_promotions_province',  ),));
    }

    private function get_promotionstarifderniereminuteprovinceenRouteInfo()
    {
        return array(array (  0 => 'name',  1 => 'page',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\DestinationController::provincePromotionAction',  'name' => 'name',  'page' => 'page',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^\\.]+?',    3 => 'page',  ),  1 =>   array (    0 => 'text',    1 => '.html',  ),  2 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  3 =>   array (    0 => 'text',    1 => '/last_minute_deals_and_promotions_province',  ),));
    }

    private function get_promotionstarifderniereminuteregionRouteInfo()
    {
        return array(array (  0 => 'name',  1 => 'page',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\DestinationController::regionPromotionAction',  'name' => 'name',  'page' => 'page',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^\\.]+?',    3 => 'page',  ),  1 =>   array (    0 => 'text',    1 => '.html',  ),  2 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  3 =>   array (    0 => 'text',    1 => '/tarifs_derniere_minute_et_promotions_region',  ),));
    }

    private function get_promotionstarifderniereminuteregionenRouteInfo()
    {
        return array(array (  0 => 'name',  1 => 'page',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\DestinationController::regionPromotionAction',  'name' => 'name',  'page' => 'page',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^\\.]+?',    3 => 'page',  ),  1 =>   array (    0 => 'text',    1 => '.html',  ),  2 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  3 =>   array (    0 => 'text',    1 => '/last_minute_deals_and_promotions_region',  ),));
    }

    private function get_promotionfluxrssRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\DestinationController::fluxRSSAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '/rss_promotions.xml',  ),));
    }

    private function get_promotionfluxrssenRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\DestinationController::fluxRSSEnglishAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '/rss_promotions-en.xml',  ),));
    }

    private function get_promotionfluxrssprovinceRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\DestinationController::fluxRSSProvinceAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.xml',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/rss_promotions_province',  ),));
    }

    private function get_promotionfluxrssprovinceenRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\DestinationController::fluxRSSProvinceAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.xml',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/rss_promotions_province',  ),));
    }

    private function get_promotionfluxrssregionRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\DestinationController::fluxRSSRegionAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.xml',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/rss_promotions_region',  ),));
    }

    private function get_promotionfluxrssregionenRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\DestinationController::fluxRSSRegionAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.xml',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/rss_promotions_region',  ),));
    }

    private function get_restaurantRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\RestaurantController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/restaurants.html',  ),));
    }

    private function get_restaurant_province_indexRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\RestaurantController::displayprovinceAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/restaurants_province',  ),));
    }

    private function get_restaurantspecialiteRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\RestaurantController::displayspecialiteAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/restaurants_specialite',  ),));
    }

    private function get_restaurantregionRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\RestaurantController::restaurantregionAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/restaurants_region',  ),));
    }

    private function get_listespecialiteregionRouteInfo()
    {
        return array(array (  0 => 'name',  1 => 'region',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\RestaurantController::listeSpecialiteRegionAction',  'name' => 'name',  'region' => 'region',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^_\\.]+?',    3 => 'region',  ),  2 =>   array (    0 => 'text',    1 => '_region',  ),  3 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/_]+?',    3 => 'name',  ),  4 =>   array (    0 => 'text',    1 => '/restaurants',  ),));
    }

    private function get_restaurantprovincenationaliteRouteInfo()
    {
        return array(array (  0 => 'nationalite',  1 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\RestaurantController::displayProvinceNationaliteAction',  'nationalite' => 'nationalite',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^_\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '_province',  ),  3 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/_]+?',    3 => 'nationalite',  ),  4 =>   array (    0 => 'text',    1 => '/restaurants',  ),));
    }

    private function get_hebergementfrRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/hebergements.html',  ),));
    }

    private function get_hebergementenRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/accommodation.html',  ),));
    }

    private function get_hebergementregionsquebecfrRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::listerAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/hebergements_region',  ),));
    }

    private function get_hebergementregionsquebecenRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::listerAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/accommodation_region',  ),));
    }

    private function get_hebergementprovincefrRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::showProvinceAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/hebergements_province',  ),));
    }

    private function get_hebergementprovinceenRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::showProvinceAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/accommodation_province',  ),));
    }

    private function get_hebergementreservationenligneRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::reservationAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/hebergements_reservation.html',  ),));
    }

    private function get_hebergementdisplayfrRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::villeHebergementAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/hebergements_ville',  ),));
    }

    private function get_hebergementdisplayenRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::villeHebergementAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/accommodation_city',  ),));
    }

    private function get_hebergementtypefrRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::stylehebergementAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/hebergements',  ),));
    }

    private function get_hebergementtypeenRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::stylehebergementAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/accommodation',  ),));
    }

    private function get_hebergementtypeprovincefrRouteInfo()
    {
        return array(array (  0 => 'name',  1 => 'province',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::styleHebergementProvinceAction',  'name' => 'name',  'province' => 'province',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^_\\.]+?',    3 => 'province',  ),  2 =>   array (    0 => 'text',    1 => '_province',  ),  3 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/_]+?',    3 => 'name',  ),  4 =>   array (    0 => 'text',    1 => '/categorie',  ),));
    }

    private function get_hebergementtypeprovinceenRouteInfo()
    {
        return array(array (  0 => 'name',  1 => 'province',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::styleHebergementProvinceAction',  'name' => 'name',  'province' => 'province',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^_\\.]+?',    3 => 'province',  ),  2 =>   array (    0 => 'text',    1 => '_province',  ),  3 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/_]+?',    3 => 'name',  ),  4 =>   array (    0 => 'text',    1 => '/category',  ),));
    }

    private function get_hebergementtyperegionfrRouteInfo()
    {
        return array(array (  0 => 'name',  1 => 'region',  2 => 'page',  3 => 'ordre',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::styleHebergementRegionAction',  'name' => 'name',  'region' => 'region',  'page' => 'page',  'ordre' => 'ordre',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'ordre',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^\\./]+?',    3 => 'page',  ),  2 =>   array (    0 => 'text',    1 => '.html',  ),  3 =>   array (    0 => 'variable',    1 => '_',    2 => '[^_\\.]+?',    3 => 'region',  ),  4 =>   array (    0 => 'text',    1 => '_region',  ),  5 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/_]+?',    3 => 'name',  ),  6 =>   array (    0 => 'text',    1 => '/categorie',  ),));
    }

    private function get_hebergementtyperegionenRouteInfo()
    {
        return array(array (  0 => 'name',  1 => 'region',  2 => 'page',  3 => 'ordre',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::styleHebergementRegionAction',  'name' => 'name',  'region' => 'region',  'page' => 'page',  'ordre' => 'ordre',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'ordre',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^\\./]+?',    3 => 'page',  ),  2 =>   array (    0 => 'text',    1 => '.html',  ),  3 =>   array (    0 => 'variable',    1 => '_',    2 => '[^_\\.]+?',    3 => 'region',  ),  4 =>   array (    0 => 'text',    1 => '_region',  ),  5 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/_]+?',    3 => 'name',  ),  6 =>   array (    0 => 'text',    1 => '/category',  ),));
    }

    private function get_hebergementtypevillefrRouteInfo()
    {
        return array(array (  0 => 'name',  1 => 'ville',  2 => 'page',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::styleHebergementVilleAction',  'name' => 'name',  'ville' => 'ville',  'page' => 'page',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^\\.]+?',    3 => 'page',  ),  1 =>   array (    0 => 'text',    1 => '.html',  ),  2 =>   array (    0 => 'variable',    1 => '_',    2 => '[^_\\.]+?',    3 => 'ville',  ),  3 =>   array (    0 => 'text',    1 => '_ville',  ),  4 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/_]+?',    3 => 'name',  ),  5 =>   array (    0 => 'text',    1 => '/categorie',  ),));
    }

    private function get_hebergementtypevilleenRouteInfo()
    {
        return array(array (  0 => 'name',  1 => 'ville',  2 => 'page',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::styleHebergementVilleAction',  'name' => 'name',  'ville' => 'ville',  'page' => 'page',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^\\.]+?',    3 => 'page',  ),  1 =>   array (    0 => 'text',    1 => '.html',  ),  2 =>   array (    0 => 'variable',    1 => '_',    2 => '[^_\\.]+?',    3 => 'ville',  ),  3 =>   array (    0 => 'text',    1 => '_city',  ),  4 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/_]+?',    3 => 'name',  ),  5 =>   array (    0 => 'text',    1 => '/category',  ),));
    }

    private function get_hebergementinfoclientRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::infoclientAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/accueil',  ),));
    }

    private function get_hebergementinfoclientenRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::infoclientAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/home',  ),));
    }

    private function get_hebergementchambreRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::infochambreAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/chambres_tarifs',  ),));
    }

    private function get_hebergementchambreenRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::infochambreAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/rooms_rates',  ),));
    }

    private function get_hebergementforfaitRouteInfo()
    {
        return array(array (  0 => 'name',  1 => 'index',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::infoForfaitAction',  'name' => 'name',  'index' => 'index',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^\\.]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '.html',  ),  2 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  3 =>   array (    0 => 'text',    1 => '/forfait_promotion',  ),));
    }

    private function get_hebergementforfaitenRouteInfo()
    {
        return array(array (  0 => 'name',  1 => 'index',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::infoForfaitAction',  'name' => 'name',  'index' => 'index',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^\\.]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '.html',  ),  2 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  3 =>   array (    0 => 'text',    1 => '/package_promotion',  ),));
    }

    private function get_hebergementactiviteRouteInfo()
    {
        return array(array (  0 => 'name',  1 => 'page',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::infoactiviteAction',  'name' => 'name',  'page' => 'page',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^\\.]+?',    3 => 'page',  ),  1 =>   array (    0 => 'text',    1 => '.html',  ),  2 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  3 =>   array (    0 => 'text',    1 => '/activites_services',  ),));
    }

    private function get_hebergementactiviteenRouteInfo()
    {
        return array(array (  0 => 'name',  1 => 'page',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::infoactiviteAction',  'name' => 'name',  'page' => 'page',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^\\.]+?',    3 => 'page',  ),  1 =>   array (    0 => 'text',    1 => '.html',  ),  2 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  3 =>   array (    0 => 'text',    1 => '/activities_services',  ),));
    }

    private function get_hebergementcorporatifRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::infocorporatifAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/corporatif_evenement',  ),));
    }

    private function get_hebergementcorporatifenRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::infocorporatifAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/corporate_event',  ),));
    }

    private function get_hebergementgaleryRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::infogaleryAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/galerie_photo',  ),));
    }

    private function get_hebergementgaleryenRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::infogaleryAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/photo_gallery',  ),));
    }

    private function get_hebergementsoinRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::infosoinAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/centre_sante',  ),));
    }

    private function get_hebergementsoinenRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::infosoinAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/health_center',  ),));
    }

    private function get_hebergementrestaurantRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::infoRestaurantAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/restaurant',  ),));
    }

    private function get_hebergementrestaurantenRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::infoRestaurantAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/restaurant-en',  ),));
    }

    private function get_hebergementreservationRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::inforeservationAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/information_reservation',  ),));
    }

    private function get_hebergementreservationenRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::inforeservationAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/information_booking',  ),));
    }

    private function get_hebergementdirectionroutiereRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::infoDirectionRoutiereAction',  'name' => 'name',  'culture' => 'fr',), array (  'culture' => 'fr',), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/directions_routieres',  ),));
    }

    private function get_hebergementdirectionroutiereenRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::infoDirectionRoutiereAction',  'name' => 'name',  'culture' => 'en',), array (  'culture' => 'en',), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/driving_directions',  ),));
    }

    private function get_classementhebergementregionajaxRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::classementListeAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/classement.html',  ),));
    }

    private function get_hebergementfluxrssRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::infoRSSAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '.xml',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/rss',  ),));
    }

    private function get_hebergementfluxenrssRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::infoRSSEnAction',  'name' => 'name',), array (), array (  0 =>   array (    0 => 'text',    1 => '-en.xml',  ),  1 =>   array (    0 => 'variable',    1 => '_',    2 => '[^/\\-]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/rss',  ),));
    }

    private function get_quisommesnousRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\QuisommesnousController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/qui_sommes_nous.html',  ),));
    }

    private function get_faqRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\QuisommesnousController::faqAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/FAQ.html',  ),));
    }

    private function get_contactRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\QuisommesnousController::contacteznousAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/contact.html',  ),));
    }

    private function get_conditionUtilisationRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\QuisommesnousController::conditionutilisationAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/condition_utilisation.html',  ),));
    }

    private function get_conditionUtilisation_enRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\QuisommesnousController::conditionutilisationAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/provided use.html',  ),));
    }

    private function get_sitemapRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\QuisommesnousController::plandusiteAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/plan.html',  ),));
    }

    private function get_sitemapxmlRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\QuisommesnousController::getReturnSchemaSitemapAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/sitemap.xml',  ),));
    }

    private function get_transaction_langue_globalRouteInfo()
    {
        return array(array (  0 => 'langue',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\DefaultController::choisirLangueClientAction',  'langue' => 'langue',), array (  '_locale' => 'en|fr',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'langue',  ),  1 =>   array (    0 => 'text',    1 => '/traduction',  ),));
    }

    private function get_demandesansitemRouteInfo()
    {
        return array(array (  0 => 'section',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\DefaultController::demandeSansItemAction',  'section' => 'section',), array (), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'section',  ),));
    }

    private function get_propositionmoteurrechercheRouteInfo()
    {
        return array(array (  0 => 'resultats',), array (  '_controller' => 'MyApp\\GlobalBundle\\Controller\\HebergementController::propositionResultatAction',  'resultats' => 'resultats',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'resultats',  ),  1 =>   array (    0 => 'text',    1 => '/resultats.html',  ),));
    }

    private function getlogoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\SecurityController::logoutAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/client/logout',  ),));
    }

    private function get_redirectionRoleRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::redirigeEnFonctionRoleAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/client/',  ),));
    }

    private function get_langue_admin_clientRouteInfo()
    {
        return array(array (  0 => 'langue',  1 => 'id',), array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::traductionLangueAdminAction',  'langue' => 'langue',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'langue',  ),  2 =>   array (    0 => 'text',    1 => '/client/choisir-langue',  ),));
    }

    private function get_Dashboard_compteCustomerRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'name',  2 => 'fiche',  3 => 'redirect',  4 => 'rechargement',), array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::accessCompteCustomerAction',  'id' => 'id',  'name' => 'name',  'fiche' => 'fiche',  'redirect' => 'redirect',  'rechargement' => 'rechargement',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'rechargement',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'redirect',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'fiche',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  4 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  5 =>   array (    0 => 'text',    1 => '/client/compte.html',  ),));
    }

    private function getMyAppTextAttraitRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'name',  2 => 'redirect',), array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::texteAttraitAction',  'id' => 'id',  'name' => 'name',  'redirect' => 'redirect',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'redirect',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  3 =>   array (    0 => 'text',    1 => '/client/textes_attrait.html',  ),));
    }

    private function getMyAppPromotionRouteInfo()
    {
        return array(array (  0 => 'idclient',  1 => 'name',  2 => 'redirect',), array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::textpromotionAction',  'idclient' => 'idclient',  'name' => 'name',  'redirect' => 'redirect',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'redirect',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'idclient',  ),  3 =>   array (    0 => 'text',    1 => '/client/promotion.html',  ),));
    }

    private function getMyAppForfaitRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'name',  2 => 'msg',  3 => 'redirect',), array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::forfaitAction',  'id' => 'id',  'name' => 'name',  'msg' => 'msg',  'redirect' => 'redirect',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'redirect',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'msg',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  4 =>   array (    0 => 'text',    1 => '/client/forfaits.html',  ),));
    }

    private function getMyAppForfaitAddRouteInfo()
    {
        return array(array (  0 => 'idclient',  1 => 'name',  2 => 'idforfait',  3 => 'redirect',), array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::addforfaitAction',  'idclient' => 'idclient',  'name' => 'name',  'idforfait' => 'idforfait',  'redirect' => 'redirect',), array (  'idclient' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'redirect',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'idforfait',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'idclient',  ),  4 =>   array (    0 => 'text',    1 => '/client/ajouter_forfait.html',  ),));
    }

    private function getMyAppForfaitUpdateRouteInfo()
    {
        return array(array (  0 => 'idclient',  1 => 'name',  2 => 'idforfait',  3 => 'redirect',), array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::addforfaitAction',  'idclient' => 'idclient',  'name' => 'name',  'idforfait' => 'idforfait',  'redirect' => 'redirect',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'redirect',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'idforfait',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'idclient',  ),  4 =>   array (    0 => 'text',    1 => '/client/modifier_forfait.html',  ),));
    }

    private function getMyAppForfaitDeleteRouteInfo()
    {
        return array(array (  0 => 'idclient',  1 => 'name',  2 => 'idforfait',  3 => 'redirect',), array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::deleteforfaitAction',  'idclient' => 'idclient',  'name' => 'name',  'idforfait' => 'idforfait',  'redirect' => 'redirect',), array (  'idclient' => '\\d+',  'idforfait' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'redirect',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'idforfait',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'idclient',  ),  4 =>   array (    0 => 'text',    1 => '/client/supprimer_forfait.html',  ),));
    }

    private function getMyAppTexteForfaitRouteInfo()
    {
        return array(array (  0 => 'idclient',  1 => 'name',  2 => 'redirect',), array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::addtexteforfaitAction',  'idclient' => 'idclient',  'name' => 'name',  'redirect' => 'redirect',), array (  'idclient' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'redirect',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'idclient',  ),  3 =>   array (    0 => 'text',    1 => '/client/textes_politiques_forfaits.html',  ),));
    }

    private function getMyAppTarifHoraireRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'name',  2 => 'redirect',), array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::tarifHoraireAction',  'id' => 'id',  'name' => 'name',  'redirect' => 'redirect',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'redirect',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  3 =>   array (    0 => 'text',    1 => '/client/tarifs_horaires.html',  ),));
    }

    private function getMyAppPaiementDeviseRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'name',  2 => 'msg',  3 => 'redirect',), array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::paiementDeviseCustomerAction',  'id' => 'id',  'name' => 'name',  'msg' => 'msg',  'redirect' => 'redirect',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'redirect',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'msg',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  4 =>   array (    0 => 'text',    1 => '/client/modes_paiements_et_devises.html',  ),));
    }

    private function getMyAppActiviteHebergementRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'name',  2 => 'redirect',), array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::activiteHebergementAction',  'id' => 'id',  'name' => 'name',  'redirect' => 'redirect',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'redirect',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  3 =>   array (    0 => 'text',    1 => '/client/activites_hebergement.html',  ),));
    }

    private function getMyAppServiceHebergementRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'name',  2 => 'redirect',), array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::serviceHebergementAction',  'id' => 'id',  'name' => 'name',  'redirect' => 'redirect',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'redirect',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  3 =>   array (    0 => 'text',    1 => '/client/services_hebergement.html',  ),));
    }

    private function getMyAppActiviteAttraitRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'name',  2 => 'redirect',), array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::activiteAttraitAction',  'id' => 'id',  'name' => 'name',  'redirect' => 'redirect',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'redirect',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  3 =>   array (    0 => 'text',    1 => '/client/activites_attrait.html',  ),));
    }

    private function getMyAppServiceAttraitRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'name',  2 => 'redirect',), array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::serviceAttraitAction',  'id' => 'id',  'name' => 'name',  'redirect' => 'redirect',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'redirect',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  3 =>   array (    0 => 'text',    1 => '/client/services_attrait.html',  ),));
    }

    private function getMyAppSoinSanteAttraitRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'name',  2 => 'redirect',), array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::soinsanteAttraitAction',  'id' => 'id',  'name' => 'name',  'redirect' => 'redirect',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'redirect',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  3 =>   array (    0 => 'text',    1 => '/client/soins_sante.html',  ),));
    }

    private function getMyAppSoinSanteAttraitenRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'name',  2 => 'redirect',), array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::soinsanteAttraitAction',  'id' => 'id',  'name' => 'name',  'redirect' => 'redirect',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'redirect',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  3 =>   array (    0 => 'text',    1 => '/client/soins_sante.html',  ),));
    }

    private function getMyAppCouponRabaisRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'name',  2 => 'redirect',), array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::rabaisCouponAction',  'id' => 'id',  'name' => 'name',  'redirect' => 'redirect',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'redirect',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  3 =>   array (    0 => 'text',    1 => '/client/coupons.html',  ),));
    }

    private function getMyAppAddCouponRabaisRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'name',  2 => 'redirect',), array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::addrabaisCouponAction',  'id' => 'id',  'name' => 'name',  'redirect' => 'redirect',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'redirect',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  3 =>   array (    0 => 'text',    1 => '/client/ajouter_coupons.html',  ),));
    }

    private function getMyAppUpdateCouponRabaisRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'name',  2 => 'couponid',  3 => 'redirect',), array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::updaterabaisCouponAction',  'id' => 'id',  'name' => 'name',  'couponid' => 'id',  'redirect' => 'redirect',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'redirect',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'couponid',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  4 =>   array (    0 => 'text',    1 => '/client/modifier_coupons.html',  ),));
    }

    private function getMyAppDeleteCouponRabaisRouteInfo()
    {
        return array(array (  0 => 'idcoupon',  1 => 'idclient',  2 => 'name',  3 => 'redirect',), array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::deleterabaisCouponAction',  'idcoupon' => 'idcoupon',  'idclient' => 'idclient',  'name' => 'name',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'redirect',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'idclient',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'idcoupon',  ),  4 =>   array (    0 => 'text',    1 => '/client/supprimer_coupons.html',  ),));
    }

    private function getMyAppTextHebergementRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'name',  2 => 'msg',  3 => 'redirect',), array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::texteHebergementAction',  'id' => 'id',  'name' => 'name',  'msg' => 'msg',  'redirect' => 'redirect',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'redirect',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'msg',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  4 =>   array (    0 => 'text',    1 => '/client/textes_hebergement.html',  ),));
    }

    private function getMyAppChambreRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'name',  2 => 'redirect',), array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::listeChambreAction',  'id' => 'id',  'name' => 'name',  'redirect' => 'redirect',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'redirect',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  3 =>   array (    0 => 'text',    1 => '/client/chambre.html',  ),));
    }

    private function getMyAppAddChambreRouteInfo()
    {
        return array(array (  0 => 'idclient',  1 => 'name',  2 => 'idchambre',  3 => 'redirect',), array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::addChambreAction',  'idclient' => 'idclient',  'name' => 'name',  'idchambre' => 'idchambre',  'redirect' => 'redirect',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'redirect',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'idchambre',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'idclient',  ),  4 =>   array (    0 => 'text',    1 => '/client/ajouter_chambre.html',  ),));
    }

    private function getMyAppUpdateChambreRouteInfo()
    {
        return array(array (  0 => 'idclient',  1 => 'name',  2 => 'idchambre',  3 => 'redirect',), array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::addChambreAction',  'idclient' => 'idclient',  'name' => 'name',  'idchambre' => 'idchambre',  'redirect' => 'redirect',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'redirect',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'idchambre',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'idclient',  ),  4 =>   array (    0 => 'text',    1 => '/client/modifier_chambre.html',  ),));
    }

    private function getMyAppDeleteChambreRouteInfo()
    {
        return array(array (  0 => 'idclient',  1 => 'name',  2 => 'idchambre',  3 => 'redirect',), array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::deleteChambreAction',  'idclient' => 'idclient',  'name' => 'name',  'idchambre' => 'idchambre',  'redirect' => 'redirect',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'redirect',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'idchambre',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'idclient',  ),  4 =>   array (    0 => 'text',    1 => '/client/supprimer_chambre.html',  ),));
    }

    private function getMyAppCorporatifRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'name',  2 => 'redirect',), array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::corporatifAction',  'id' => 'id',  'name' => 'name',  'redirect' => 'redirect',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'redirect',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  3 =>   array (    0 => 'text',    1 => '/client/corporatif.html',  ),));
    }

    private function getMyAppAddCorporatifRouteInfo()
    {
        return array(array (  0 => 'idclient',  1 => 'name',  2 => 'idcorpo',  3 => 'redirect',), array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::addCorporatifAction',  'idclient' => 'idclient',  'name' => 'name',  'idcorpo' => 'idcorpo',  'redirect' => 'redirect',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'redirect',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'idcorpo',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'idclient',  ),  4 =>   array (    0 => 'text',    1 => '/client/ajouter_corporatif.html',  ),));
    }

    private function getMyAppUpdateCorporatifRouteInfo()
    {
        return array(array (  0 => 'idclient',  1 => 'name',  2 => 'idcorpo',  3 => 'redirect',), array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::addCorporatifAction',  'idclient' => 'idclient',  'name' => 'name',  'idcorpo' => 'idcorpo',  'redirect' => 'redirect',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'redirect',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'idcorpo',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'idclient',  ),  4 =>   array (    0 => 'text',    1 => '/client/modifier_corporatif.html',  ),));
    }

    private function getMyAppDeleteCorporatifRouteInfo()
    {
        return array(array (  0 => 'idclient',  1 => 'name',  2 => 'idcorpo',  3 => 'redirect',), array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::deleteCorporatifAction',  'idclient' => 'idclient',  'name' => 'name',  'idcorpo' => 'idcorpo',  'redirect' => 'redirect',), array (  'idclient' => '\\d+',  'idcorpo' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'redirect',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'idcorpo',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'idclient',  ),  4 =>   array (    0 => 'text',    1 => '/client/supprimer_corporatif.html',  ),));
    }

    private function get_periodedeleteRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::getPeriodeDeleteAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/client/suppression_periode',  ),));
    }

    private function get_displayvignetteRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::getDisplayThumbnailAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/client/affichage_vignette_hebergement',  ),));
    }

    private function get_galeriehebergementdeleteRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::getGalerieHebergementDeleteAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/client/suppression_image_galerie_hebergement',  ),));
    }

    private function get_galeriehebergementuploadRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::getGalerieHebergementUploadAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/client/upload_image_galerie_hebergement',  ),));
    }

    private function get_displayvignetteroomRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::getDisplayThumbnailRoomAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/client/affichage_vignette_chambre',  ),));
    }

    private function get_galeriechambredeleteRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::getGalerieChambreDeleteAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/client/suppression_image_galerie_chambre',  ),));
    }

    private function get_displayvignettepackageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::getDisplayThumbnailPackageAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/client/affichage_vignette_forfait',  ),));
    }

    private function get_galeriePackageforfaitdeleteRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::getGaleriePackageDeleteAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/client/suppression_image_galerie_forfait',  ),));
    }

    private function get_displayvignettecorporatifRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::getDisplayThumbnailCorporateAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/client/affichage_vignette_corporatif',  ),));
    }

    private function get_galeriePackagedeleteRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::getGalerieCorporateDeleteAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/client/suppression_image_galerie_corporatif',  ),));
    }

    private function get_displayvignetteattraitRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::getDisplayThumbnailAttraitAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/client/affichage_vignette_attrait',  ),));
    }

    private function get_galerieAttraitdeleteRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::getGalerieAttraitDeleteAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/client/suppression_image_galerie_attrait',  ),));
    }

    private function get_ordreaffichagechambreRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::getOrdreAffichageChambreAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/client/ordre_affichage',  ),));
    }

    private function get_uploadimgprincipaleattraitRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::uploadImgMainAttraitAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/client/upload_image_principale_attrait.html',  ),));
    }

    private function get_uploadimgprincipalehebergementRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::uploadImgMainHebergementAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/client/upload_image_principale_hebergement.html',  ),));
    }

    private function get_uploadcategoriehebergementRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::uploadImgCategoryHebergementAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/client/upload_categorie_hebergement.html',  ),));
    }

    private function get_uploadlogohebergementRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::uploadImgLogoHebergementAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/client/upload_logo_hebergement.html',  ),));
    }

    private function get_uploadimgcategorieattraitRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::uploadImgCategoryAttraitAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/client/upload_image_categorie_attrait.html',  ),));
    }

    private function get_uploadlogoattraitRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\CustomerBundle\\Controller\\DefaultController::uploadImgLogoAttraitAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/client/upload_logo_attrait.html',  ),));
    }

    private function get_DashboardRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\DashboardController::dashboardAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/',  ),));
    }

    private function get_Dashboard_generalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\DashboardController::generalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/general',  ),));
    }

    private function get_Dashboard_hebergementsRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\DashboardController::hebergementsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/hebergements',  ),));
    }

    private function get_Dashboard_attraitsRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\DashboardController::attraitsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/attraits',  ),));
    }

    private function get_Dashboard_quebec_saisonRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\DashboardController::quebec_saisonAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Quebec_en_saison',  ),));
    }

    private function get_Dashboard_statistiquesRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\DashboardController::statistiquesAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Statistiques',  ),));
    }

    private function get_Dashboard_informationsRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\DashboardController::informationsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Informations',  ),));
    }

    private function get_Dashboard_paysRouteInfo()
    {
        return array(array (  0 => 'province',  1 => 'region',  2 => 'zone',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::paysAction',  'province' => 'province',  'region' => 'region',  'zone' => 'zone',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'zone',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'region',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'province',  ),  3 =>   array (    0 => 'text',    1 => '/admin/Gestion_des_pays',  ),));
    }

    private function get_Dashboard_addpaysRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addPaysAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Ajouter_un_pays',  ),));
    }

    private function get_Dashboard_updatepaysRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addPaysAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Modifier_un_pays',  ),));
    }

    private function get_Dashboard_deletepaysRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::deletePaysAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Supprimer_un_pays',  ),));
    }

    private function get_Dashboard_provincesRouteInfo()
    {
        return array(array (  0 => 'province',  1 => 'region',  2 => 'zone',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::provincesAction',  'province' => 'province',  'region' => 'region',  'zone' => 'zone',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'zone',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'region',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'province',  ),  3 =>   array (    0 => 'text',    1 => '/admin/Gestions_des_provinces_etats',  ),));
    }

    private function get_Dashboard_addprovincesRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addProvincesAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Ajouter_une_province_etat',  ),));
    }

    private function get_Dashboard_updateprovincesRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addProvincesAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Modifier_une_province_etat',  ),));
    }

    private function get_Dashboard_addtexteprovincecategoriehebergementRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'categorie',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addTexteProvinceCategorieHebergementAction',  'id' => 'id',  'categorie' => 'categorie',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'categorie',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/Ajouter_texte_categorie_hebergement_pour_province',  ),));
    }

    private function get_Dashboard_addtexteprovincecorporatifRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addTexteProvinceCorporatifAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Ajouter_texte_corporatif_pour_province',  ),));
    }

    private function get_Dashboard_addtexteprovinceappeldoffreRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addTexteProvinceAppelOffreAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Ajouter_texte_appel_offre_pour_province',  ),));
    }

    private function get_Dashboard_addtexteprovincelocationsalleRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addTexteProvinceLocationSalleAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Ajouter_texte_location_salle_pour_province',  ),));
    }

    private function get_Dashboard_addtexteprovinceactivitecorpoRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addTexteProvinceActiviteCorpoAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Ajouter_texte_activite_corporative_pour_province',  ),));
    }

    private function get_Dashboard_addtexteprovincechambreaffaireRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addTexteProvincechambreaffaireAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Ajouter_texte_chambre_affaire_pour_province',  ),));
    }

    private function get_Dashboard_addtexteprovinceforfaitaffaireRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addTexteProvinceforfaitaffaireAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Ajouter_texte_forfait_affaire_pour_province',  ),));
    }

    private function get_Dashboard_texteprovinceforfaitRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'forfait',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::texteForfaitProvinceAction',  'id' => 'id',  'forfait' => 'forfait',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'forfait',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/Texte_province_forfait',  ),));
    }

    private function get_Dashboard_texteprovinceattraitRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'attrait',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::texteAttraitProvinceAction',  'id' => 'id',  'attrait' => 'attrait',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'attrait',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/Texte_province_attrait',  ),));
    }

    private function get_Dashboard_texteprovincesanteRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'sante',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::texteSanteProvinceAction',  'id' => 'id',  'sante' => 'sante',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'sante',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/Texte_province_sante',  ),));
    }

    private function get_Dashboard_texteprovincerestaurantRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'resto',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::texteRestaurantProvinceAction',  'id' => 'id',  'resto' => 'resto',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'resto',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/Texte_province_restaurant',  ),));
    }

    private function get_Dashboard_deleteprovincesRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::deleteProvincesAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Supprimer_une_province_etat',  ),));
    }

    private function get_Dashboard_regionsRouteInfo()
    {
        return array(array (  0 => 'page',  1 => 'letter',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::regionsAction',  'page' => 'page',  'letter' => 'letter',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'letter',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'page',  ),  2 =>   array (    0 => 'text',    1 => '/admin/Gestion_des_regions_touristiques',  ),));
    }

    private function get_Dashboard_addregionsRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'page',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addRegionsAction',  'id' => 'id',  'page' => 'page',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'page',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/Ajouter_une_region_touristique',  ),));
    }

    private function get_Dashboard_updateregionsRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'page',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addRegionsAction',  'id' => 'id',  'page' => 'page',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'page',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/Modifier_une_region_touristique',  ),));
    }

    private function get_Dashboard_texteregionattraitRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'attrait',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::texteAttraitRegionAction',  'id' => 'id',  'attrait' => 'attrait',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'attrait',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/Texte_region_attrait',  ),));
    }

    private function get_Dashboard_texteregionsanteRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'sante',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::texteSanteRegionAction',  'id' => 'id',  'sante' => 'sante',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'sante',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/Texte_region_sante',  ),));
    }

    private function get_Dashboard_texteregionrestaurantRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'resto',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::texteRestaurantRegionAction',  'id' => 'id',  'resto' => 'resto',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'resto',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/Texte_region_restaurant',  ),));
    }

    private function get_Dashboard_addtexteregioncategoriehebergementRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'categorie',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addTexteRegionCategorieHebergementAction',  'id' => 'id',  'categorie' => 'categorie',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'categorie',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/Ajouter_texte_categorie_hebergement_pour_region',  ),));
    }

    private function get_Dashboard_deleteregionsRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::deleteRegionsAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Supprimer_une_region_touristique',  ),));
    }

    private function get_Dashboard_addtexteregioncorporatifRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addTexteRegionCorporatifAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Ajouter_texte_corporatif_par_region',  ),));
    }

    private function get_Dashboard_addtexteregionappeldoffreRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addTexteRegionAppelOffreAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Ajouter_texte_appel_offre_par_region',  ),));
    }

    private function get_Dashboard_addtexteregionlocationsalleRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addTexteRegionLocationSalleAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Ajouter_texte_location_salle_par_region',  ),));
    }

    private function get_Dashboard_addtexteregionactivitecorpoRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addTexteRegionActiviteCorpoAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Ajouter_texte_activite_corporative_par_region',  ),));
    }

    private function get_Dashboard_addtexteregionchambreaffaireRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addTexteRegionchambreaffaireAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Ajouter_texte_chambre_affaire_par_region',  ),));
    }

    private function get_Dashboard_addtexteregionforfaitaffaireRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addTexteRegionforfaitaffaireAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Ajouter_texte_forfait_affaire_par_region',  ),));
    }

    private function get_Dashboard_zonesRouteInfo()
    {
        return array(array (  0 => 'page',  1 => 'letter',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::zonesAction',  'page' => 'page',  'letter' => 'letter',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'letter',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'page',  ),  2 =>   array (    0 => 'text',    1 => '/admin/Gestion_des_zones',  ),));
    }

    private function get_Dashboard_addzonesRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addZonesAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Ajouter_une_zone',  ),));
    }

    private function get_Dashboard_updatezonesRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addZonesAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Modifier_une_zone',  ),));
    }

    private function get_Dashboard_deletezonesRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::deleteZonesAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Supprimer_une_zone',  ),));
    }

    private function get_Dashboard_villesRouteInfo()
    {
        return array(array (  0 => 'page',  1 => 'letter',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::villesAction',  'page' => 'page',  'letter' => 'letter',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'letter',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'page',  ),  2 =>   array (    0 => 'text',    1 => '/admin/Gestion_des_villes',  ),));
    }

    private function get_Dashboard_addvillesRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addVillesAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Ajouter_une_ville',  ),));
    }

    private function get_Dashboard_updatevillesRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addVillesAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Modifier_une_ville',  ),));
    }

    private function get_Dashboard_deletevillesRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::deleteVillesAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Supprimer_une_ville',  ),));
    }

    private function get_Dashboard_modes_paiementsRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::paiementsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Gestion_des_modes_paiements',  ),));
    }

    private function get_Dashboard_addmodes_paiementsRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addPaiementsAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Ajouter_un_mode_paiement',  ),));
    }

    private function get_Dashboard_updatemodes_paiementsRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addPaiementsAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Modifier_un_mode_paiement',  ),));
    }

    private function get_Dashboard_delete_paiementsRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::deletePaiementsAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Supprimer_un_mode_paiement',  ),));
    }

    private function get_Dashboard_devisesRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::devisesAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Gestion_des_devises',  ),));
    }

    private function get_Dashboard_adddevisesRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addDevisesAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Ajouter_une_devise',  ),));
    }

    private function get_Dashboard_updatedevisesRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addDevisesAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Modifier_une_devise',  ),));
    }

    private function get_Dashboard_deletedevisesRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::deleteDevisesAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Supprimer_une_devise',  ),));
    }

    private function get_Dashboard_acompteRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::acomptesAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Gestion_des_acomptes',  ),));
    }

    private function get_Dashboard_addacompteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addAcomptesAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Ajouter_un_acompte',  ),));
    }

    private function get_Dashboard_updateacompteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addAcomptesAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Modifier_un_acompte',  ),));
    }

    private function get_Dashboard_deleteacompteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::deleteAcomptesAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Supprimer_un_acompte',  ),));
    }

    private function get_Dashboard_forfaitsRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::forfaitsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Gestion_des_forfaits',  ),));
    }

    private function get_Dashboard_addforfaitsRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addForfaitsAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Ajouter_un_forfait',  ),));
    }

    private function get_Dashboard_updateforfaitsRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addForfaitsAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Modifier_un_forfait',  ),));
    }

    private function get_Dashboard_texteregionforfaitRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'forfait',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::texteForfaitRegionAction',  'id' => 'id',  'forfait' => 'forfait',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'forfait',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/Texte_region_forfait',  ),));
    }

    private function get_Dashboard_deleteforfaitsRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::deleteForfaitsAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Supprimer_un_forfait',  ),));
    }

    private function get_Dashboard_cotationsRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::cotationsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Gestion_des_cotations',  ),));
    }

    private function get_Dashboard_addcotationsRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addCotationsAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Ajouter_une_cotation',  ),));
    }

    private function get_Dashboard_updatecotationsRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addCotationsAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Modifier_une_cotation',  ),));
    }

    private function get_Dashboard_deletecotationsRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::deleteCotationsAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Supprimer_une_cotation',  ),));
    }

    private function get_Dashboard_classificationsRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::classificationsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Gestion_des_classification',  ),));
    }

    private function get_Dashboard_addclassificationsRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addClassificationsAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Ajouter_une_classification',  ),));
    }

    private function get_Dashboard_updateclassificationsRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addClassificationsAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Modifier_une_classification',  ),));
    }

    private function get_Dashboard_deleteclassificationsRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::deleteClassificationsAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Supprimer_une_classification',  ),));
    }

    private function get_Dashboard_clientsRouteInfo()
    {
        return array(array (  0 => 'page',  1 => 'letter',  2 => 'statut',  3 => 'item',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::clientsAction',  'page' => 'page',  'letter' => 'letter',  'statut' => 'statut',  'item' => 'item',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'item',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'statut',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'letter',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'page',  ),  4 =>   array (    0 => 'text',    1 => '/admin/Gestion_des_clients',  ),));
    }

    private function get_Dashboard_addclientsRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::addClientsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Ajouter_un_client',  ),));
    }

    private function get_Dashboard_updateclientsRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'number',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::updateClientsAction',  'id' => 'id',  'number' => 'number',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'number',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/Modifier_un_client',  ),));
    }

    private function get_Dashboard_deleteclientsRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::deleteClientsAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Supprimer_un_client',  ),));
    }

    private function get_Dashboard_hebergementRouteInfo()
    {
        return array(array (  0 => 'page',  1 => 'letter',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::hebergementAction',  'page' => 'page',  'letter' => 'letter',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'letter',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'page',  ),  2 =>   array (    0 => 'text',    1 => '/admin/Gestion_hebergement',  ),));
    }

    private function get_Dashboard_addhebergementRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::addHebergementAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Ajouter_un_hebergement',  ),));
    }

    private function get_Dashboard_updatehebergementRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'number',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::updateHebergementAction',  'id' => 'id',  'number' => 'number',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'number',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/Modifier_un_hebergement',  ),));
    }

    private function get_Dashboard_deletehebergementRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::deleteHebergementAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Supprimer_un_hebergement',  ),));
    }

    private function get_Dashboard_categoriehebergementRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::categorieHebergementAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Gestion_categorie_hebergement',  ),));
    }

    private function get_Dashboard_addcategoriehebergementRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::addCategorieHebergementAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Ajouter_une_categorie_hebergement',  ),));
    }

    private function get_Dashboard_updatecategoriehebergementRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::updateCategorieHebergementAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Modifier_une_categorie_hebergement',  ),));
    }

    private function get_Dashboard_deletecategoriehebergementRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::deleteCategorieHebergementAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Supprimer_une_categorie_hebergement',  ),));
    }

    private function get_Dashboard_activiteshebergementRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::activiteAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Gestion_des_activites',  ),));
    }

    private function get_Dashboard_addactiviteRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::addActiviteAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Ajouter_une_activite_dans_hebergement',  ),));
    }

    private function get_Dashboard_updateactiviteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::updateActiviteAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Modifier_une_activite_dans_hebergement',  ),));
    }

    private function get_Dashboard_deleteactiviteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::deleteActiviteAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Supprimer_une_activite_dans_hebergement',  ),));
    }

    private function get_Dashboard_serviceshebergementRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::serviceAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Gestion_des_services',  ),));
    }

    private function get_Dashboard_addserviceRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::addServiceAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Ajouter_un_service_dans_hebergement',  ),));
    }

    private function get_Dashboard_updateserviceRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::updateServiceAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Modifier_un_service_dans_hebergement',  ),));
    }

    private function get_Dashboard_deleteserviceRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::deleteServiceAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Supprimer_un_service_dans_hebergement',  ),));
    }

    private function get_Dashboard_styleshebergementRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::styleAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Gestion_des_styles',  ),));
    }

    private function get_Dashboard_addstyleRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::addStyleAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Ajouter_un_style',  ),));
    }

    private function get_Dashboard_updatestyleRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::updateStyleAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Modifier_un_style',  ),));
    }

    private function get_Dashboard_deletestyleRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::deleteStyleAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Supprimer_un_style',  ),));
    }

    private function get_Dashboard_typechambreshebergementRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::typeChambreAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Gestion_types_des_chambres',  ),));
    }

    private function get_Dashboard_addtypechambreRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::addTypeChambreAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Ajouter_un_type_de_chambre',  ),));
    }

    private function get_Dashboard_updatetypechambreRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::updateTypeChambreAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Modifier_un_type_de_chambre',  ),));
    }

    private function get_Dashboard_deletetypechambreRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::deleteTypeChambreAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Supprimer_un_type_de_chambre',  ),));
    }

    private function get_Dashboard_chambreshebergementRouteInfo()
    {
        return array(array (  0 => 'page',  1 => 'letter',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::chambreAction',  'page' => 'page',  'letter' => 'letter',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'letter',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'page',  ),  2 =>   array (    0 => 'text',    1 => '/admin/Gestion_des_chambres',  ),));
    }

    private function get_Dashboard_addchambreRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::addChambreAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Ajouter_une_chambre',  ),));
    }

    private function get_Dashboard_updatechambreRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::updateChambreAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Modifier_une_chambre',  ),));
    }

    private function get_Dashboard_deletechambreRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::deleteChambreAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Supprimer_une_chambre',  ),));
    }

    private function get_Dashboard_litshebergementRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::litAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Gestion_des_lits',  ),));
    }

    private function get_Dashboard_addlitRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::addLitAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Ajouter_un_lit',  ),));
    }

    private function get_Dashboard_updatelitRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::updateLitAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Modifier_un_lit',  ),));
    }

    private function get_Dashboard_deletelitRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::deleteLitAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Supprimer_un_lit',  ),));
    }

    private function get_Dashboard_occupationshebergementRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::occupationAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Gestion_des_occupations',  ),));
    }

    private function get_Dashboard_addoccupationRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::addOccupationAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Ajouter_une_occupation',  ),));
    }

    private function get_Dashboard_updateoccupationRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::updateOccupationAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Modifier_une_occupation',  ),));
    }

    private function get_Dashboard_deleteoccupationRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::deleteOccupationAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Supprimer_une_occupation',  ),));
    }

    private function get_Dashboard_equipementshebergementRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::equipementAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Gestion_des_equipements',  ),));
    }

    private function get_Dashboard_addequipementRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::addEquipementAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Ajouter_un_equipement',  ),));
    }

    private function get_Dashboard_updateequipementRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::updateEquipementAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Modifier_un_equipement',  ),));
    }

    private function get_Dashboard_deleteequipementRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::deleteEquipementAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Supprimer_un_equipement',  ),));
    }

    private function get_Dashboard_affiliationshebergementRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::affiliationAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Gestion_des_affiliations',  ),));
    }

    private function get_Dashboard_addaffiliationRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::addAffiliationAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Ajouter_une_affiliation',  ),));
    }

    private function get_Dashboard_updateaffiliationRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::updateAffiliationAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Modifier_une_affiliation',  ),));
    }

    private function get_Dashboard_deleteaffiliationRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::deleteAffiliationAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Supprimer_une_affiliation',  ),));
    }

    private function get_Dashboard_servicecorporatifhebergementRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::serviceCorporatifAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Gestion_des_services_corporatifs',  ),));
    }

    private function get_Dashboard_addservicecorporatifRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::addServiceCorporatifAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Ajouter_un_service_corporatif',  ),));
    }

    private function get_Dashboard_updateservicecorporatifRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::updateServiceCorporatifAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Modifier_un_service_corporatif',  ),));
    }

    private function get_Dashboard_deleteservicecorporatifRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::deleteServiceCorporatifAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Supprimer_un_service_corporatif',  ),));
    }

    private function get_Dashboard_sallescorporativeshebergementRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::salleCorporativeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Gestion_des_salles_corporatives',  ),));
    }

    private function get_Dashboard_addsallecorporativeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::addSalleCorporativeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Ajouter_une_salle_corporative',  ),));
    }

    private function get_Dashboard_updatesallecorporativeRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::updateSalleCorporativeAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Modifier_un_salle_corporative',  ),));
    }

    private function get_Dashboard_deletesallecorporativeRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::deleteSalleCorporativeAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Supprimer_un_salle_corporative',  ),));
    }

    private function get_Dashboard_evenementscoporatifshebergementRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::evenementCorporatifAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Gestion_des_evenements_corporatifs',  ),));
    }

    private function get_Dashboard_addevenementcorporaifRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::addEvenementCorporatifAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Ajouter_un_evenement_corporatif',  ),));
    }

    private function get_Dashboard_updateevenementcorporatifRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::updateEvenementCorporatifAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Modifier_un_evenement_corporatif',  ),));
    }

    private function get_Dashboard_deleteevenementcorporatifRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::deleteEvenementCorporatifAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Supprimer_un_evenement_corporatif',  ),));
    }

    private function get_Dashboard_photohebergementRouteInfo()
    {
        return array(array (  0 => 'page',  1 => 'letter',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::photoHebergementAction',  'page' => 'page',  'letter' => 'letter',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'letter',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'page',  ),  2 =>   array (    0 => 'text',    1 => '/admin/Gestion_des_photos_pour_les_hebergements',  ),));
    }

    private function get_Dashboard_addphotohebergementRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::addPhotoHebergementAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Ajouter_une_photo_pour_hebergement',  ),));
    }

    private function get_Dashboard_updatephotohebergementRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'id1',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::updatePhotoHebergementAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id1',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/Modifier_une_photo_pour_hebergement',  ),));
    }

    private function get_Dashboard_deletephotohebergementRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::deletePhotoHebergementAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Supprimer_une_photo_pour_hebergement',  ),));
    }

    private function get_Dashboard_attraitRouteInfo()
    {
        return array(array (  0 => 'page',  1 => 'letter',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::attraitAction',  'page' => 'page',  'letter' => 'letter',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'letter',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'page',  ),  2 =>   array (    0 => 'text',    1 => '/admin/Gestion_des_attraits',  ),));
    }

    private function get_Dashboard_addattraitRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::addAttraitAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Ajouter_un_attrait',  ),));
    }

    private function get_Dashboard_updateattraitRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'number',  2 => 'page',  3 => 'lettre',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::updateAttraitAction',  'id' => 'id',  'number' => 'number',  'page' => 'page',  'lettre' => 'lettre',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'lettre',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'page',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'number',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  4 =>   array (    0 => 'text',    1 => '/admin/Modifier_un_attrait',  ),));
    }

    private function get_Dashboard_deleteattraitRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::deleteAttraitAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Supprimer_un_attrait',  ),));
    }

    private function get_Dashboard_attraitcategoriesRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::categorieAttraitAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Gestion_des_categories_attraits',  ),));
    }

    private function get_Dashboard_addattraitcategoriesRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::addCategorieAttraitAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Ajouter_une_categorie_attrait',  ),));
    }

    private function get_Dashboard_updateattraitcategoriesRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::updateCategorieAttraitAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Modifier_une_categorie_attrait',  ),));
    }

    private function get_Dashboard_deleteattraitcategoriesRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::deleteCategorieAttraitAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Supprimer_une_categorie_attrait',  ),));
    }

    private function get_Dashboard_attraitsouscategorieRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::sousCategorieAttraitAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Gestion_des_sous_categories_attraits',  ),));
    }

    private function get_Dashboard_addattraitsouscategorieRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::addSousCategorieAttraitAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Ajouter_une_sous_categorie_attrait',  ),));
    }

    private function get_Dashboard_updateattraitsouscategorieRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::updateSousCategorieAttraitAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Modifier_une_sous_categorie_attrait',  ),));
    }

    private function get_Dashboard_deleteattraitsouscategorieRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::deleteSousCategorieAttraitAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Supprimer_une_sous_categorie_attrait',  ),));
    }

    private function get_Dashboard_attraittypesoinsRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::typeSoinsSanteAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Gestion_des_types_soins_sante',  ),));
    }

    private function get_Dashboard_addattraittypesoinsRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::addTypeSoinSanteAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Ajouter_un_type_soin_sante',  ),));
    }

    private function get_Dashboard_updateattraittypesoinsRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::addTypeSoinSanteAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Modifier_un_type_soin_sante',  ),));
    }

    private function get_Dashboard_deleteattraittypesoinsRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::updateTypeSoinSanteAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Supprimer_un_type_soin_sante',  ),));
    }

    private function get_Dashboard_attraitsoinsRouteInfo()
    {
        return array(array (  0 => 'page',  1 => 'letter',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::soinsSanteAction',  'page' => 'page',  'letter' => 'letter',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'letter',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'page',  ),  2 =>   array (    0 => 'text',    1 => '/admin/Gestion_des_soins_de_sante',  ),));
    }

    private function get_Dashboard_addattraitsoinsRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::addSoinSanteAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Ajouter_un_soin_de_sante',  ),));
    }

    private function get_Dashboard_updateattraitsoinsRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::addSoinSanteAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Modifier_un_soin_de_sante',  ),));
    }

    private function get_Dashboard_deleteattraitsoinsRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::deleteSoinSanteAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Supprimer_un_soin_de_sante',  ),));
    }

    private function get_Dashboard_attraitactivitesRouteInfo()
    {
        return array(array (  0 => 'page',  1 => 'letter',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::activiteAttraitAction',  'page' => 'page',  'letter' => 'letter',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'letter',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'page',  ),  2 =>   array (    0 => 'text',    1 => '/admin/Gestion_des_activites_pour_les_attraits',  ),));
    }

    private function get_Dashboard_addattraitactivitesRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::addActiviteAttraitAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Ajouter_une_activite_dans_attrait',  ),));
    }

    private function get_Dashboard_updateattraitactivitesRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::updateActiviteAttraitAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Modifier_une_activite_dans_attrait',  ),));
    }

    private function get_Dashboard_deleteattraitactivitesRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::deleteActiviteAttraitAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Supprimer_une_activite_dans_attrait',  ),));
    }

    private function get_Dashboard_attraitservicesRouteInfo()
    {
        return array(array (  0 => 'page',  1 => 'letter',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::serviceAttraitAction',  'page' => 'page',  'letter' => 'letter',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'letter',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'page',  ),  2 =>   array (    0 => 'text',    1 => '/admin/Gestion_des_services_pour_les_attraits',  ),));
    }

    private function get_Dashboard_addattraitservicesRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::addServiceAttraitAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Ajouter_un_service_dans_attrait',  ),));
    }

    private function get_Dashboard_updateattraitservicesRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'page',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::updateServiceAttraitAction',  'id' => 'id',  'page' => 'page',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'page',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/Modifier_un_service_dans_attrait',  ),));
    }

    private function get_Dashboard_deleteattraitservicesRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::deleteServiceAttraitAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Supprimer_un_service_dans_attrait',  ),));
    }

    private function get_Dashboard_attraitcusinesRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::cusineAttraitAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Gestion_des_services_pour_les_cuisines',  ),));
    }

    private function get_Dashboard_addattraitcuisinesRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::addCuisineAttraitAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Ajouter_une_cuisine',  ),));
    }

    private function get_Dashboard_updateattraitcusinesRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::updateCuisineAttraitAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Modifier_une_cuisine',  ),));
    }

    private function get_Dashboard_deleteattraitcusinesRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::deleteCuisineAttraitAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Supprimer_une_cuisine',  ),));
    }

    private function get_Dashboard_attraitphotosRouteInfo()
    {
        return array(array (  0 => 'page',  1 => 'letter',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::photoAttraitAction',  'page' => 'page',  'letter' => 'letter',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'letter',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'page',  ),  2 =>   array (    0 => 'text',    1 => '/admin/Gestion_des_photos',  ),));
    }

    private function get_Dashboard_addattraitphotosRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::addPhotoAttraitAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Ajouter_des_photos',  ),));
    }

    private function get_Dashboard_updateattraitphotosRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::updatePhotoAttraitAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Modifier_des_photos',  ),));
    }

    private function get_Dashboard_deleteattraitphotosRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::deletePhotoAttraitAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Supprimer_une_photo',  ),));
    }

    private function get_Dashboard_typessaisonRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\Quebec_en_saisonController::typeSaisonAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Gestion_des_types_de_saison',  ),));
    }

    private function get_Dashboard_addtypessaisonRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\Quebec_en_saisonController::addTypeSaisonAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Ajouter_un_type_de_saison',  ),));
    }

    private function get_Dashboard_updatetypessaisonRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\Quebec_en_saisonController::updateTypeSaisonAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Modifier_un_type_de_saison',  ),));
    }

    private function get_Dashboard_deletetypessaisonRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\Quebec_en_saisonController::deleteTypeSaisonAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Supprimer_un_type_de_saison',  ),));
    }

    private function get_Dashboard_typespagessaisonsRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\Quebec_en_saisonController::typePageSaisonAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Gestion_des_types_de_page_des_saisons',  ),));
    }

    private function get_Dashboard_addtypespagessaisonsRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\Quebec_en_saisonController::addTypePageSaisonAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Ajouter_un_type_de_page',  ),));
    }

    private function get_Dashboard_updatetypespagessaisonsRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\Quebec_en_saisonController::updateTypePageSaisonAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Modifier_un_type_de_page',  ),));
    }

    private function get_Dashboard_deletetypespagessaisonsRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\Quebec_en_saisonController::deleteTypePageSaisonAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Supprimer_un_type_de_page',  ),));
    }

    private function get_Dashboard_pagesstatiquesRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\Quebec_en_saisonController::pageStatiqueAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Gestion_des_pages_statiques',  ),));
    }

    private function get_Dashboard_addpagesstatiquesRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\Quebec_en_saisonController::addPageStatiqueAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Ajouter_une_page_statique',  ),));
    }

    private function get_Dashboard_updatepagesstatiquesRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\Quebec_en_saisonController::updatePageStatiqueAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Modifier_une_page_statique',  ),));
    }

    private function get_Dashboard_deletepagesstatiquesRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\Quebec_en_saisonController::deletePageStatiqueAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Supprimer_une_page_statique',  ),));
    }

    private function get_Dashboard_saisonsRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\Quebec_en_saisonController::saisonAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Gestion_des_saisons',  ),));
    }

    private function get_Dashboard_addsaisonRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\Quebec_en_saisonController::addSaisonAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Ajouter_une_saison',  ),));
    }

    private function get_Dashboard_updatesaisonRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\Quebec_en_saisonController::updateSaisonAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Modifier_une_saison',  ),));
    }

    private function get_Dashboard_deletesaisonRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\Quebec_en_saisonController::deleteSaisonAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Supprimer_une_saison',  ),));
    }

    private function get_Dashboard_previewfrenchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\Quebec_en_saisonController::previewFrenchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Apercu_francais',  ),));
    }

    private function get_Dashboard_previewenglishRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\Quebec_en_saisonController::previewAnglaisAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Apercu_anglais',  ),));
    }

    private function get_Dashboard_statistiquesclientsRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'page',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\StatistiqueController::statistiqueClientAction',  'id' => 'id',  'page' => 'page',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'page',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/Afficher_statistiques_clients',  ),));
    }

    private function get_Dashboard_statistiquesmoisRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\StatistiqueController::statistiqueMoisAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Afficher_statistiques_mois',  ),));
    }

    private function get_Dashboard_statistiquesanneeRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\StatistiqueController::statistiqueAnneeAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Afficher_statistiques_annee',  ),));
    }

    private function get_Dashboard_archivesstatistiquesRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\StatistiqueController::statistiqueArchiveAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Afficher_statistiques_archive',  ),));
    }

    private function get_Dashboard_utilisateursSystemeRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\InformationController::utilisateurAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Afficher_utilisateurs_systeme',  ),));
    }

    private function get_Dashboard_clientSystemeRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\InformationController::clientAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Afficher_client_systeme',  ),));
    }

    private function get_Dashboard_clientSystemepasswordRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\InformationController::clientpasswordAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Modifier_mot_de_passe_client.html',  ),));
    }

    private function get_Dashboard_utilisateurSystemepasswordRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\InformationController::utilisateurpasswordAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Modifier_mot_de_passe_utilisateur.html',  ),));
    }

    private function get_Dashboard_addutilisateurssystemeRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\InformationController::addUtilisateurAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Ajouter_utilisateur_au_systeme',  ),));
    }

    private function get_Dashboard_updateutilisateurssystemeRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\InformationController::addUtilisateurAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Modifier_un_utilisateur_du_systeme',  ),));
    }

    private function get_Dashboard_deleteutilisateurssystemeRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\InformationController::deleteUtilisateurAction',  'id' => 'id',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Supprimer_un_utilisateur_du_systeme',  ),));
    }

    private function get_Dashboard_logsanomaliesRouteInfo()
    {
        return array(array (  0 => 'page',  1 => 'letter',), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\InformationController::logAndAnomalyAction',  'page' => 'page',  'letter' => 'letter',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'letter',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'page',  ),  2 =>   array (    0 => 'text',    1 => '/admin/Afficher_log_et_anomalies',  ),));
    }

    private function get_Dashboard_gestionTexteAccueilRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::gestionTexteAccueilAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/texte_section_accueil.html',  ),));
    }

    private function get_Dashboard_gestionTexteAccueil_enRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\GeneralController::gestionTexteAccueilEnAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/texte_section_accueil_en.html',  ),));
    }

    private function get_google_mapsRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::googlemapAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/google_maps_API.html',  ),));
    }

    private function get_triregionajaxRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::getSortRegionAjaxAdminAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/tri_regions',  ),));
    }

    private function get_trizoneajaxRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::getSortZoneAjaxAdminAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/tri_zones',  ),));
    }

    private function get_trivilleajaxRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::getSortVilleAjaxAdminAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/tri_villes',  ),));
    }

    private function get_displayvignettehebergementadminRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::getDisplayThumbnailHebergementAdminAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/affichage_vignette_hebergemnt',  ),));
    }

    private function get_galerieHebergementAdmindeleteRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\HebergementController::getGalerieHebergementAdminDeleteAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/suppression_image_galerie_hebergement',  ),));
    }

    private function get_displayvignetteattraitadminRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::getDisplayThumbnailAttraitAdminAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/affichage_vignette_attrait',  ),));
    }

    private function get_galerieAttraitAdmindeleteRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\AttraitController::getGaleriePackageAttraitAdminDeleteAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/suppression_image_galerie_attrait',  ),));
    }

    private function getloginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AdminBundle\\Controller\\SecurityController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login',  ),));
    }

    private function getlogin_checkRouteInfo()
    {
        return array(array (), array (), array (), array (  0 =>   array (    0 => 'text',    1 => '/login_check',  ),));
    }

    private function getberriart_sitemapRouteInfo()
    {
        return array(array (), array (  '_controller' => 'berriart_sitemap.controller:sitemap',  '_format' => 'xml',), array (  '_method' => 'GET',  '_format' => 'xml',), array (  0 =>   array (    0 => 'text',    1 => '/sitemap.xml/',  ),));
    }

    private function getberriart_sitemap_indexRouteInfo()
    {
        return array(array (), array (  '_controller' => 'berriart_sitemap.controller:sitemapIndex',  '_format' => 'xml',), array (  '_method' => 'GET',  '_format' => 'xml',), array (  0 =>   array (    0 => 'text',    1 => '/sitemap.xml/sitemapindex.xml',  ),));
    }
}

<?php
namespace MyApp\MobileBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MyApp\MobileBundle\Controller\HebergementController;
/**
 * Description of ForfaitController
 *
 * @author leonardc
 */
class ForfaitController extends Controller {
    
    /**
     * Page d'accueil pour les forfaits
     */
    public function forfaitIndexAction()
    {
        //Gestionnaire des entités
        $em = $this->getDoctrine()->getEntityManager();    
        //Catégorie des provinces
        $listeCategorie = $em->getRepository("MyAppGlobalBundle:Forfaits_clients")->getAfficheListeForfaitValideCategorieMobile();       
        $tabProvince = $tabRegion = $tabVille = [];
        foreach($listeCategorie as $key){         
            array_push($tabProvince, $key->getHebergementId()->getProvinceId()->getId());            
        }       
        //Liste des forfaits pour les provinces
        $listeProvince = $em->getRepository("MyAppGlobalBundle:Forfaits_clients")->getAfficheListeForfaitProvinceMobile($tabProvince);
        foreach($listeProvince as $key){
            array_push($tabRegion, $key->getHebergementId()->getProvinceId()->getId());
        }
        //Liste des forfaits pour les régions
        $listeRegion = $em->getRepository("MyAppGlobalBundle:Forfaits_clients")->getAfficheListeForfaitRegionMobile($tabRegion);
        foreach($listeRegion as $key){
            array_push($tabVille, $key->getHebergementId()->getRegionId()->getId());
        }
        //Liste des forfaits pour les villes
        $listeVille = $em->getRepository("MyAppGlobalBundle:Forfaits_clients")->getAfficheListeForfaitVilleMobile($tabVille);       
        //langue
        $lang = $this->container->get("session")->getLocale();
        $titleDropDownList = HebergementController::getTitleDropDownList($lang);
        //Rendu de la vue
        return $this->render('MyAppMobileBundle:MobileForfait:index.html.twig', array(
            "listeCategorie"    => $listeCategorie,
            "listeProvince"     => $listeProvince,
            "listeRegion"       => $listeRegion,
            "listeVille"        => $listeVille,   
            "choixprovince"     => $titleDropDownList[0],
            "choixregion"       => $titleDropDownList[1],
            "choixville"        => $titleDropDownList[2],
            "choixcategorie"    => $titleDropDownList[3],
        ));       
    }
    
    /**
     * filtre des listes par ajax
     */
    private function filtreListeForfaitAjax()
    {
        
    }
}

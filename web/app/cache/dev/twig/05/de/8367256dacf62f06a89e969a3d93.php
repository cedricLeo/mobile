<?php

/* MyAppGlobalBundle:Default:index-fr.html.twig */
class __TwigTemplate_05de8367256dacf62f06a89e969a3d93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base2.html.twig");

        $this->blocks = array(
            'picture' => array($this, 'block_picture'),
            'texte_accueil' => array($this, 'block_texte_accueil'),
            'body' => array($this, 'block_body'),
            'gauche' => array($this, 'block_gauche'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_picture($context, array $blocks = array())
    {
        echo "\t
        <p class=\"legendeHome\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("legende.home"), "html", null, true);
        echo "</p>
        ";
        // line 4
        $this->env->loadTemplate("MyAppGlobalBundle:Default:animation.html.twig")->display($context);
        // line 5
        echo "        ";
    }

    // line 7
    public function block_texte_accueil($context, array $blocks = array())
    {
        // line 8
        echo "                <p>";
        echo $this->getContext($context, "texte_accueilfr");
        echo "</p>\t\t\t\t
        ";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "        <div class=\"colonnes2\">
                <h1>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("quoi.faire"), "html", null, true);
        echo "</h1>
                <br class=\"clearfloat\"/>\t
                <div class=\"ajuste_div_home aughauteur\" itemscope itemtype=\"http://data-vocabulary.org/Organization\"> \t\t\t\t
                    <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementfr"), "html", null, true);
        echo "\" itemprop=\"url\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
        echo "\">
                        <span itemprop=\"image\"><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/hebergement.jpg"), "html", null, true);
        echo "\" width=\"80\" height=\"80\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
        echo "\" /></span>
                    </a>
                    <h2><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementfr"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
        echo "\" itemprop=\"url\"><span itemprop=\"name\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
        echo "</span></a></h2>
                        <span itemprop=\"description\"><p>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("home.hebergement.text"), "html", null, true);
        echo "</p></span>\t\t\t  \t
                </div>
                <div class=\"ajuste_div_home aughauteur\" itemscope itemtype=\"http://data-vocabulary.org/Organization\"> \t\t\t\t
                        ";
        // line 28
        echo "                        <a href=\"http://www.quebec-guidetouristique.travel/activites-quebec/\" itemprop=\"url\" target=\"_blank\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("attrait.activite"), "html", null, true);
        echo "\">
                                <span itemprop=\"image\"><img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/attraitsActivites.jpg"), "html", null, true);
        echo "\" width=\"80\" height=\"80\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("attrait.activite"), "html", null, true);
        echo "\" /></span>
                        </a>
                        <h2><a href=\"http://www.quebec-guidetouristique.travel/activites-quebec/\" target=\"_blank\" title=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("attrait.activite"), "html", null, true);
        echo "\" itemprop=\"url\"><span itemprop=\"name\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("attrait.activite"), "html", null, true);
        echo "</span></a></h2>
                                <span itemprop=\"description\"><p>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("home.attrait.text"), "html", null, true);
        echo "</p></span>\t\t\t   \t
                </div>
                <div class=\"ajuste_div_home aughauteur\" itemscope itemtype=\"http://data-vocabulary.org/Organization\">                            
                        ";
        // line 40
        echo "                         <a href=\"http://www.quebec-guidetouristique.travel/activites-quebec/centres-sante-spas/centres-sante-spas.php\" target=\"_blank\" itemprop=\"url\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("centre.sante.spa"), "html", null, true);
        echo "\">
                                <span itemprop=\"image\"><img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/centreDeSante.jpg"), "html", null, true);
        echo "\" width=\"80\" height=\"80\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("centre.sante.spa"), "html", null, true);
        echo "\" /></span>
                         </a>
                        <h2><a href=\"http://www.quebec-guidetouristique.travel/activites-quebec/centres-sante-spas/centres-sante-spas.php\" target=\"_blank\" title=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("centre.sante.spa"), "html", null, true);
        echo "\" itemprop=\"url\"><span itemprop=\"name\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("centre.sante.spa"), "html", null, true);
        echo "</span></a></h2>
                        <span itemprop=\"description\"><p>";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("home.centresante.text"), "html", null, true);
        echo "</p></span>\t\t\t    
                </div>
                <div class=\"ajuste_div_home aughauteur\" itemscope itemtype=\"http://data-vocabulary.org/Organization\"> \t\t    \t
                    <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_forfaitsfr"), "html", null, true);
        echo "\" itemprop=\"url\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forfait"), "html", null, true);
        echo "\">
                        <span itemprop=\"image\"><img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/forfaits.jpg"), "html", null, true);
        echo "\" width=\"80\" height=\"80\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forfait"), "html", null, true);
        echo "\" /></span>
                    </a>
                     <h2><a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_forfaitsfr"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forfait"), "html", null, true);
        echo "\" itemprop=\"url\"><span itemprop=\"name\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forfait"), "html", null, true);
        echo "</span></a></h2>
                        <span itemprop=\"description\"><p>";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("home.forfait.text"), "html", null, true);
        echo "</p></span>\t\t\t   
                </div>
                <div class=\"ajuste_div_home aughauteur\" itemscope itemtype=\"http://data-vocabulary.org/Organization\">
                    <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_corpoeventsfr"), "html", null, true);
        echo "\" itemprop=\"url\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("corporatif.evenement"), "html", null, true);
        echo "\" >
                         <span itemprop=\"image\"><img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/corporatif.jpg"), "html", null, true);
        echo "\" width=\"80\" height=\"80\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("corporatif.evenement"), "html", null, true);
        echo "\" /></span>
                    </a>
                      <h2><a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_corpoeventsfr"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("corporatif.evenement"), "html", null, true);
        echo "\" itemprop=\"url\"><span itemprop=\"name\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("corporatif.evenement"), "html", null, true);
        echo "</span></a></h2>
                        <span itemprop=\"description\"><p>";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("home.corpo.text"), "html", null, true);
        echo "</p></span> \t\t\t\t
               </div> 
                <div class=\"ajuste_div_home aughauteur\" itemscope itemtype=\"http://data-vocabulary.org/Organization\">                             
                     <a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_promotion"), "html", null, true);
        echo "\" itemprop=\"url\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("promotion"), "html", null, true);
        echo "\">
                          <span itemprop=\"image\"><img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/destination.jpg"), "html", null, true);
        echo "\" width=\"80\" height=\"80\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("promotion"), "html", null, true);
        echo "\" /></span>
                     </a>
                      <h2><a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_promotion"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("promotion"), "html", null, true);
        echo "\" itemprop=\"url\"><span itemprop=\"name\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("promotion"), "html", null, true);
        echo "</span></a></h2>
                       <span itemprop=\"description\"><p>";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("home.destination.text"), "html", null, true);
        echo "</p></span>                            
               </div>
                <div itemscope itemtype=\"http://data-vocabulary.org/Organization\"> 
                    ";
        // line 72
        echo "                            
                        <a href=\"http://www.quebec-guidetouristique.travel/activites-quebec/restaurants/restaurants.php\" target=\"_blank\" itemprop=\"url\" title=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("restaurant"), "html", null, true);
        echo "\">
                                <span itemprop=\"image\"><img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/restaurant.jpg"), "html", null, true);
        echo "\" width=\"80\" height=\"80\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("restaurant"), "html", null, true);
        echo "\" /></span>
                        </a>
                        <h2><a href=\"http://www.quebec-guidetouristique.travel/activites-quebec/restaurants/restaurants.php\" target=\"_blank\" title=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("restaurant"), "html", null, true);
        echo "\" itemprop=\"url\"><span itemprop=\"name\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("restaurant"), "html", null, true);
        echo "</span></a></h2>
                       <span itemprop=\"description\"><p>";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("home.restaurant.text"), "html", null, true);
        echo "</p></span>                            
                </div>
        </div>
        <br class=\"clearfloat\" />
        ";
        // line 82
        echo "          <div id=\"zone_01\" class=\"pubGoogleBottom pubGoogleAttrait hackPub\" >
                <script type='text/javascript'>
                        googletag.cmd.push(function() { googletag.display('zone_01'); });
                </script>
          </div>
          <br class=\"clearfloat\" />
        
       <div class=\"region\">
       <h2>";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("choisir.endroit"), "html", null, true);
        echo "</h2>
                    <ul>\t\t
                          ";
        // line 92
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "provinceqc"));
        foreach ($context['_seq'] as $context["_key"] => $context["nomprovinceqc"]) {
            echo "                                          
                                <li class=\"province\"><a href=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_accueil_province", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceqc"), "provinceid"), "repertoirefr")))), "html", null, true);
            echo "\" title=\"Voyage province ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceqc"), "provinceid"), "nomfr"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceqc"), "provinceid"), "nomfr"), "html", null, true);
            echo "</a></li>                                  
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nomprovinceqc'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 95
        echo "                          ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "regionqc"));
        foreach ($context['_seq'] as $context["_key"] => $context["listeregionqc"]) {
            echo "                                  
                                <li><a href=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_accueil_region", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "listeregionqc"), "regionid"), "repertoirefr")))), "html", null, true);
            echo "\" title=\"Voyage région ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "listeregionqc"), "regionid"), "nomfr"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "listeregionqc"), "regionid"), "nomfr"), "html", null, true);
            echo "</a></li>                                
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listeregionqc'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 98
        echo "\t\t      </ul>
\t\t      <ul>\t
                           ";
        // line 100
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "provinceon"));
        foreach ($context['_seq'] as $context["_key"] => $context["nomprovinceon"]) {
            // line 101
            echo "                                  <li class=\"province\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_accueil_province", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceon"), "provinceid"), "repertoirefr")))), "html", null, true);
            echo "\" title=\"Voyage province ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceon"), "provinceid"), "nomfr"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceon"), "provinceid"), "nomfr"), "html", null, true);
            echo "</a></li>                                    
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nomprovinceon'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 103
        echo "                            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "regionon"));
        foreach ($context['_seq'] as $context["_key"] => $context["listeregionon"]) {
            echo "                                    
                                  <li><a href=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_accueil_region", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "listeregionon"), "regionid"), "repertoirefr")))), "html", null, true);
            echo "\" title=\"Voyage région ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "listeregionon"), "regionid"), "nomfr"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "listeregionon"), "regionid"), "nomfr"), "html", null, true);
            echo "</a></li>                                   
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listeregionon'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 106
        echo "\t\t      </ul>
\t\t      <ul>
                            ";
        // line 108
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "provincenb"));
        foreach ($context['_seq'] as $context["_key"] => $context["nomprovincenb"]) {
            echo "                                   
                                  <li class=\"province\"><a href=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_accueil_province", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "provinceid"), "repertoirefr")))), "html", null, true);
            echo "\" title=\"Voyage province ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "provinceid"), "nomfr"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "provinceid"), "nomfr"), "html", null, true);
            echo "</a></li>                                    
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nomprovincenb'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 111
        echo "                            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "regionnb"));
        foreach ($context['_seq'] as $context["_key"] => $context["listeregionnb"]) {
            echo "                                    
                                  <li><a href=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_accueil_region", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "listeregionnb"), "regionid"), "repertoirefr")))), "html", null, true);
            echo "\" title=\"Voyage région ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "listeregionnb"), "regionid"), "nomfr"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "listeregionnb"), "regionid"), "nomfr"), "html", null, true);
            echo "</a></li>                                    
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listeregionnb'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 114
        echo "\t\t      </ul>
\t\t\t<br class=\"clearfloat\" />\t\t
\t    </div>\t\t     
\t\t<div class=\"colonnes4\" id=\"paginator\">
\t\t\t<h4>";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("nos.suggestions.hotel.motel.auberge.quebec"), "html", null, true);
        echo "</h4>\t
\t\t\t";
        // line 120
        echo "\t\t\t";
        $this->env->loadTemplate("MyAppGlobalBundle:Default:suggestionBasDePage-fr.html.twig")->display($context);
        echo " 
\t\t\t<br class=\"clearfloat\" />
\t\t</div> 
\t\t";
    }

    // line 125
    public function block_gauche($context, array $blocks = array())
    {
        echo " 
\t\t\t";
        // line 127
        echo "\t\t\t ";
        $this->env->loadTemplate("::searchCard.html.twig")->display($context);
        // line 128
        echo "                        ";
        // line 129
        echo "\t\t\t";
        $this->env->loadTemplate("MyAppGlobalBundle:Default:suggestionHotel-fr.html.twig")->display($context);
        echo " 
\t\t\t";
        // line 131
        echo "\t\t\t<div id=\"zone_02\" class=\"bigBox\">
\t\t\t\t<script type='text/javascript'>
\t\t\t\t\tgoogletag.cmd.push(function() { googletag.display('zone_02'); });
\t\t\t\t</script>
\t\t\t</div>
\t\t\t";
        // line 137
        echo "\t\t\t";
        $this->env->loadTemplate("MyAppGlobalBundle:Default:suggestionForfait-fr.html.twig")->display($context);
        // line 138
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "MyAppGlobalBundle:Default:index-fr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  426 => 138,  423 => 137,  416 => 131,  411 => 129,  409 => 128,  406 => 127,  401 => 125,  392 => 120,  388 => 118,  382 => 114,  370 => 112,  363 => 111,  351 => 109,  345 => 108,  341 => 106,  329 => 104,  322 => 103,  309 => 101,  305 => 100,  301 => 98,  289 => 96,  282 => 95,  270 => 93,  264 => 92,  259 => 90,  249 => 82,  242 => 77,  236 => 76,  229 => 74,  225 => 73,  222 => 72,  216 => 65,  208 => 64,  201 => 62,  195 => 61,  189 => 58,  181 => 57,  174 => 55,  168 => 54,  162 => 51,  154 => 50,  147 => 48,  141 => 47,  135 => 44,  129 => 43,  122 => 41,  117 => 40,  111 => 32,  105 => 31,  98 => 29,  93 => 28,  87 => 19,  79 => 18,  72 => 16,  66 => 15,  60 => 12,  57 => 11,  54 => 10,  47 => 8,  44 => 7,  40 => 5,  38 => 4,  34 => 3,  29 => 2,);
    }
}

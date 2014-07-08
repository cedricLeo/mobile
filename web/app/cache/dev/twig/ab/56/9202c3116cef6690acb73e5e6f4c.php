<?php

/* ::menu.html.twig */
class __TwigTemplate_ab569202c3116cef6690acb73e5e6f4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<div id=\"navhaut\">
   \t<nav>
\t\t<ul>
                ";
        // line 25
        echo "                ";
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
            // line 26
            echo "\t\t\t<li ";
            if (array_key_exists("accueil", $context)) {
                echo " id=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "insection"), "html", null, true);
                echo "\" ";
            }
            echo " ><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_accueil"), "html", null, true);
            echo "\" > ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("accueil"), "html", null, true);
            echo " </a></li> 
\t\t\t<li ";
            // line 27
            if (array_key_exists("hebergement", $context)) {
                echo " id=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "insection"), "html", null, true);
                echo "\" ";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementfr"), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergements"), "html", null, true);
            echo " </a></li>
\t\t\t<li ";
            // line 28
            if ((array_key_exists("forfaits", $context) && (!twig_test_empty($this->getContext($context, "forfaits"))))) {
                echo " id=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "insection"), "html", null, true);
                echo "\" ";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_forfaitsfr"), "html", null, true);
            echo "\" > ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forfait"), "html", null, true);
            echo " </a></li> 
\t\t\t<li ";
            // line 29
            if ((array_key_exists("corporatif", $context) && (!twig_test_empty($this->getContext($context, "corporatif"))))) {
                echo " id=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "insection"), "html", null, true);
                echo "\" ";
            }
            echo "><a  href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_corpoeventsfr"), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("corporatif.evenement"), "html", null, true);
            echo " </a></li> 
                        <li ";
            // line 30
            if ((array_key_exists("destination", $context) && (!twig_test_empty($this->getContext($context, "destination"))))) {
                echo " id=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "insection"), "html", null, true);
                echo "\" ";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_promotion"), "html", null, true);
            echo "\" class=\"promotionVisible\" > ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("promotion"), "html", null, true);
            echo " </a></li>
\t\t\t<li ";
            // line 31
            if ((array_key_exists("centre", $context) && (!twig_test_empty($this->getContext($context, "centre"))))) {
                echo " id=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "insection"), "html", null, true);
                echo "\" ";
            }
            echo "><a href=\"http://www.quebec-guidetouristique.travel/activites-quebec/centres-sante-spas/centres-sante-spas.php\" target=\"_blank\" rel=\"nofollow\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("centre.sante.spa"), "html", null, true);
            echo " </a></li> 
\t\t\t<li ";
            // line 32
            if ((array_key_exists("attraits", $context) && (!twig_test_empty($this->getContext($context, "attraits"))))) {
                echo " id=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "insection"), "html", null, true);
                echo "\" ";
            }
            echo "><a href=\"http://www.quebec-guidetouristique.travel/activites-quebec/\" target=\"_blank\" rel=\"nofollow\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("attrait.activite"), "html", null, true);
            echo " </a></li> \t
                        <li ";
            // line 33
            if ((array_key_exists("restaurant", $context) && (!twig_test_empty($this->getContext($context, "restaurant"))))) {
                echo " id=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "insection"), "html", null, true);
                echo "\" ";
            }
            echo "><a href=\"http://www.quebec-guidetouristique.travel/activites-quebec/restaurants/restaurants.php\" target=\"_blank\" rel=\"nofollow\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("restaurant"), "html", null, true);
            echo " </a></li>
\t\t";
        } else {
            // line 35
            echo "\t\t\t<li class=\"menulinkenglishcss\" ";
            if (array_key_exists("accueil", $context)) {
                echo " id=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "insection"), "html", null, true);
                echo "\" ";
            }
            echo " ><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_accueil"), "html", null, true);
            echo "\" class=\"typoMenuEnglish\" > ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("accueil"), "html", null, true);
            echo " </a></li> 
\t\t\t<li class=\"menulinkenglishcss\" ";
            // line 36
            if (array_key_exists("hebergement", $context)) {
                echo " id=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "insection"), "html", null, true);
                echo "\" ";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementen"), "html", null, true);
            echo "\" class=\"typoMenuEnglish\" > ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergements"), "html", null, true);
            echo " </a></li>
\t\t\t<li class=\"menulinkenglishcss\" ";
            // line 37
            if ((array_key_exists("forfaits", $context) && (!twig_test_empty($this->getContext($context, "forfaits"))))) {
                echo " id=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "insection"), "html", null, true);
                echo "\" ";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_forfaitsen"), "html", null, true);
            echo "\" class=\"typoMenuEnglish\" > ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forfait"), "html", null, true);
            echo " </a></li> 
\t\t\t<li class=\"menulinkenglishcss\" ";
            // line 38
            if ((array_key_exists("corporatif", $context) && (!twig_test_empty($this->getContext($context, "corporatif"))))) {
                echo " id=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "insection"), "html", null, true);
                echo "\" ";
            }
            echo "><a  href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_corpoeventsen"), "html", null, true);
            echo "\" class=\"typoMenuEnglish\" > ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("corporatif.evenement"), "html", null, true);
            echo " </a></li> 
\t\t\t<li class=\"menulinkenglishcss\" ";
            // line 39
            if ((array_key_exists("destination", $context) && (!twig_test_empty($this->getContext($context, "destination"))))) {
                echo " id=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "insection"), "html", null, true);
                echo "\" ";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_promotionen"), "html", null, true);
            echo "\"  class=\"typoMenuEnglish promotionVisible\" > ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("promotion"), "html", null, true);
            echo " </a></li>
                        <li class=\"menulinkenglishcss\" ";
            // line 40
            if ((array_key_exists("centre", $context) && (!twig_test_empty($this->getContext($context, "centre"))))) {
                echo " id=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "insection"), "html", null, true);
                echo "\" ";
            }
            echo "><a href=\"http://www.quebec-guidetouristique.travel/quebec-activities/health-centres-spas/health-centres-spas.php\" class=\"typoMenuEnglish\" target=\"_blank\" rel=\"nofollow\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("centre.sante.spa"), "html", null, true);
            echo " </a></li> 
\t\t\t<li class=\"menulinkenglishcss\" ";
            // line 41
            if ((array_key_exists("attraits", $context) && (!twig_test_empty($this->getContext($context, "attraits"))))) {
                echo " id=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "insection"), "html", null, true);
                echo "\" ";
            }
            echo "><a href=\"http://www.quebec-guidetouristique.travel/activities.aspx\" class=\"typoMenuEnglish\" target=\"_blank\" rel=\"nofollow\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("attrait.activite"), "html", null, true);
            echo " </a></li> 
                        <li class=\"menulinkenglishcss\" ";
            // line 42
            if ((array_key_exists("restaurant", $context) && (!twig_test_empty($this->getContext($context, "restaurant"))))) {
                echo " id=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "insection"), "html", null, true);
                echo "\" ";
            }
            echo "><a href=\"http://www.quebec-guidetouristique.travel/quebec-activities/restaurants-en/restaurants.php\" target=\"_blank\" class=\"typoMenuEnglish\" rel=\"nofollow\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("restaurant"), "html", null, true);
            echo " </a></li>
                ";
        }
        // line 43
        echo " 
\t\t\t";
        // line 45
        echo "                </ul>
\t</nav>
</div>\t";
    }

    public function getTemplateName()
    {
        return "::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 45,  199 => 42,  189 => 41,  179 => 40,  167 => 39,  143 => 37,  118 => 35,  97 => 32,  87 => 31,  75 => 30,  63 => 29,  51 => 28,  26 => 26,  44 => 11,  41 => 10,  32 => 7,  746 => 148,  741 => 147,  736 => 145,  731 => 144,  726 => 142,  721 => 141,  716 => 139,  711 => 138,  705 => 136,  699 => 134,  691 => 132,  683 => 130,  680 => 129,  675 => 127,  669 => 126,  666 => 125,  661 => 124,  655 => 123,  652 => 122,  647 => 121,  641 => 120,  638 => 119,  633 => 118,  628 => 117,  623 => 115,  618 => 114,  613 => 112,  609 => 111,  606 => 110,  601 => 109,  597 => 108,  594 => 107,  589 => 106,  580 => 105,  575 => 103,  568 => 102,  551 => 100,  532 => 99,  527 => 97,  522 => 96,  506 => 94,  491 => 93,  488 => 92,  483 => 91,  479 => 90,  476 => 89,  472 => 88,  466 => 87,  460 => 85,  458 => 84,  452 => 83,  449 => 82,  444 => 81,  438 => 80,  435 => 79,  430 => 78,  426 => 77,  423 => 76,  418 => 75,  414 => 74,  411 => 73,  406 => 72,  401 => 71,  396 => 69,  385 => 68,  380 => 66,  375 => 65,  373 => 64,  370 => 63,  364 => 59,  355 => 57,  344 => 55,  328 => 53,  323 => 52,  314 => 50,  310 => 49,  298 => 48,  293 => 47,  284 => 45,  280 => 44,  263 => 42,  254 => 40,  238 => 38,  233 => 37,  224 => 35,  220 => 34,  208 => 33,  203 => 32,  192 => 30,  176 => 28,  171 => 27,  160 => 25,  156 => 24,  139 => 22,  130 => 20,  126 => 19,  114 => 18,  110 => 17,  107 => 33,  94 => 15,  78 => 13,  73 => 12,  54 => 10,  50 => 9,  38 => 8,  22 => 4,  19 => 3,  33 => 7,  29 => 6,  25 => 4,  23 => 25,  20 => 3,  17 => 1,  371 => 65,  367 => 62,  361 => 58,  353 => 53,  347 => 50,  340 => 54,  338 => 44,  332 => 42,  326 => 39,  320 => 10,  316 => 9,  311 => 8,  303 => 131,  294 => 129,  278 => 115,  276 => 114,  268 => 43,  265 => 108,  261 => 106,  255 => 103,  250 => 39,  243 => 99,  237 => 98,  231 => 97,  225 => 96,  219 => 95,  214 => 93,  210 => 43,  202 => 89,  197 => 87,  193 => 86,  188 => 29,  185 => 83,  180 => 80,  174 => 79,  168 => 78,  162 => 77,  158 => 76,  155 => 38,  151 => 72,  144 => 23,  142 => 65,  137 => 62,  135 => 42,  131 => 36,  129 => 39,  122 => 37,  119 => 36,  117 => 35,  115 => 34,  112 => 33,  108 => 31,  100 => 29,  92 => 27,  90 => 14,  71 => 25,  59 => 24,  53 => 20,  49 => 18,  45 => 16,  43 => 15,  39 => 27,  37 => 12,  35 => 8,  30 => 6,  28 => 6,  21 => 1,);
    }
}

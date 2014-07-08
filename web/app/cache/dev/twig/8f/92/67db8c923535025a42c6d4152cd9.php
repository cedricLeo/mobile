<?php

/* MyAppMobileBundle:MobileHebergement:ville_default.html.twig */
class __TwigTemplate_8f9267db8c923535025a42c6d4152cd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base_mobile.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base_mobile.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        // line 5
        echo "    <div id=\"menu\">
        ";
        // line 6
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
            echo " 
            <select id=\"idprovince\" class=\"ui-btn ui-icon-carat-d ui-btn-icon-right ui-corner-all ui-shadow modifSelect\">
                ";
            // line 8
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listeProvince"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                echo "          
                <option id=\"";
                // line 9
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "repertoire_fr")), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nom_fr"), "html", null, true);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 11
            echo "            </select>
        ";
        } else {
            // line 13
            echo "            <select id=\"idprovince\" class=\"ui-btn ui-icon-carat-d ui-btn-icon-right ui-corner-all ui-shadow modifSelect\">
                ";
            // line 14
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listeProvince"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                echo "          
                <option id=\"";
                // line 15
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "repertoire_en")), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nom_en"), "html", null, true);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 17
            echo "            </select>
        ";
        }
        // line 19
        echo "    </div>
    ";
        // line 20
        $this->env->loadTemplate("MyAppMobileBundle:MobileHebergement:region.js.twig")->display($context);
        // line 21
        echo "    ";
        $this->env->loadTemplate("MyAppMobileBundle:MobileHebergement:ville.js.twig")->display($context);
        // line 22
        echo "    ";
        $this->env->loadTemplate("MyAppMobileBundle:MobileHebergement:provinceListe.js.twig")->display($context);
        // line 23
        echo "    <p><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppMobileBundle_hebergement_resultat_canada"), "html", null, true);
        echo "\" id=\"recherche\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("rechercher"), "html", null, true);
        echo "</a></p>
    ";
        // line 24
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
            echo " 
        <div class=\"linkNavigation linkNavigationTop\">
            ";
            // line 26
            if (($this->getContext($context, "page") > 1)) {
                // line 27
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppMobileBundle_hebergement_resultat_ville_ajax", array("id" => twig_lower_filter($this->env, $this->getContext($context, "repertoire")), "page" => ($this->getContext($context, "page") - 1))), "html", null, true);
                echo "\" ><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappmobile/images/fleche_gauche.PNG"), "html", null, true);
                echo "\" alt=\"page précedente\" /></a>
            ";
            }
            // line 29
            echo "            ";
            if (($this->getContext($context, "page") < $this->getContext($context, "total"))) {
                // line 30
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppMobileBundle_hebergement_resultat_ville_ajax", array("id" => twig_lower_filter($this->env, $this->getContext($context, "repertoire")), "page" => ($this->getContext($context, "page") + 1))), "html", null, true);
                echo "\" ><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappmobile/images/fleche_droite.PNG"), "html", null, true);
                echo "\" alt=\"page suivante\" /></a>
            ";
            }
            // line 32
            echo "        </div>
        <div id=\"resultat\">
            ";
            // line 34
            if (array_key_exists("listeResultat", $context)) {
                echo " 
                ";
                // line 35
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listeResultat"));
                foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                    // line 36
                    echo "                    <div>
                        <h2>";
                    // line 37
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nom_fr"), "html", null, true);
                    echo "</h2>
                        <p>";
                    // line 38
                    echo strip_tags(twig_truncate_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "texte_description_fr"), 200, "[...]"));
                    echo "</p>                        
                        <p>Ville: ";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "ville"), "html", null, true);
                    echo "</p>
                        ";
                    // line 40
                    if ((!twig_test_empty($this->getAttribute($this->getContext($context, "w"), "prix_a_partir")))) {
                        // line 41
                        echo "                        <p>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tarif.a.partir"), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getContext($context, "w"), "prix_a_partir"), "%\$%", ""), "html", null, true);
                        echo " \$</p>
                        ";
                    }
                    // line 43
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/classifications/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "classification"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "image"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "valeur"), "html", null, true);
                    echo "\" />
                        <p><a href=\"";
                    // line 44
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mobile_generic_detail", array("section" => $this->getContext($context, "section"), "id" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoire_fr")))), "html", null, true);
                    echo "\" title=\"Hébergement ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nom_fr"), "html", null, true);
                    echo "\" target=\"_blank\">En savoir plus</a></p>
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 47
                echo "            ";
            }
            // line 48
            echo "        </div>
        <div class=\"linkNavigation\">
            ";
            // line 50
            if (($this->getContext($context, "page") > 1)) {
                // line 51
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppMobileBundle_hebergement_resultat_ville_ajax", array("id" => twig_lower_filter($this->env, $this->getContext($context, "repertoire")), "page" => ($this->getContext($context, "page") - 1))), "html", null, true);
                echo "\" ><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappmobile/images/fleche_gauche.PNG"), "html", null, true);
                echo "\" alt=\"page précedente\" /></a>
            ";
            }
            // line 53
            echo "            ";
            if (($this->getContext($context, "page") < $this->getContext($context, "total"))) {
                // line 54
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppMobileBundle_hebergement_resultat_ville_ajax", array("id" => twig_lower_filter($this->env, $this->getContext($context, "repertoire")), "page" => ($this->getContext($context, "page") + 1))), "html", null, true);
                echo "\" ><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappmobile/images/fleche_droite.PNG"), "html", null, true);
                echo "\" alt=\"page suivante\" /></a>
            ";
            }
            // line 56
            echo "        </div>
    ";
        } else {
            // line 58
            echo "        <div class=\"linkNavigation linkNavigationTop\">
            ";
            // line 59
            if (($this->getContext($context, "page") > 1)) {
                // line 60
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppMobileBundle_hebergement_resultat_ville_ajax", array("id" => twig_lower_filter($this->env, $this->getContext($context, "repertoire")), "page" => ($this->getContext($context, "page") - 1))), "html", null, true);
                echo "\" ><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappmobile/images/fleche_gauche.PNG"), "html", null, true);
                echo "\" alt=\"prev\" /></a>
            ";
            }
            // line 62
            echo "            ";
            if (($this->getContext($context, "page") < $this->getContext($context, "total"))) {
                // line 63
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppMobileBundle_hebergement_resultat_ville_ajax", array("id" => twig_lower_filter($this->env, $this->getContext($context, "repertoire")), "page" => ($this->getContext($context, "page") + 1))), "html", null, true);
                echo "\" ><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappmobile/images/fleche_droite.PNG"), "html", null, true);
                echo "\" alt=\"next\" /></a>
            ";
            }
            // line 65
            echo "        </div>
        <div id=\"resultat\">
            ";
            // line 67
            if (array_key_exists("listeResultat", $context)) {
                echo " 
                ";
                // line 68
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listeResultat"));
                foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                    // line 69
                    echo "                    <div>
                        <h2>";
                    // line 70
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nom_en"), "html", null, true);
                    echo "</h2>
                        <p>";
                    // line 71
                    echo twig_truncate_filter($this->env, strip_tags($this->getAttribute($this->getContext($context, "w"), "texte_description_en")), 200, "[...]");
                    echo "</p>
                        <p>City: ";
                    // line 72
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "ville"), "html", null, true);
                    echo "</p>
                         ";
                    // line 73
                    if ((!twig_test_empty($this->getAttribute($this->getContext($context, "w"), "prix_a_partir")))) {
                        // line 74
                        echo "                        <p>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tarif.a.partir"), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getContext($context, "w"), "prix_a_partir"), "%\$%", ""), "html", null, true);
                        echo " \$</p>
                        ";
                    }
                    // line 76
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/classifications/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "classification"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "image"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "valeur"), "html", null, true);
                    echo "\" />
                        <p><a href=\"";
                    // line 77
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mobile_generic_detail", array("section" => $this->getContext($context, "section"), "id" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoire_en")))), "html", null, true);
                    echo "\" title=\"Accommodation ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nom_en"), "html", null, true);
                    echo "\" target=\"_blank\">Learn more</a></p>
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 80
                echo "            ";
            }
            // line 81
            echo "        </div>
        <div class=\"linkNavigation\">
            ";
            // line 83
            if (($this->getContext($context, "page") > 1)) {
                // line 84
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppMobileBundle_hebergement_resultat_ville_ajax", array("id" => twig_lower_filter($this->env, $this->getContext($context, "repertoire")), "page" => ($this->getContext($context, "page") - 1))), "html", null, true);
                echo "\" ><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappmobile/images/fleche_gauche.PNG"), "html", null, true);
                echo "\" alt=\"prev\" /></a>
            ";
            }
            // line 86
            echo "            ";
            if (($this->getContext($context, "page") < $this->getContext($context, "total"))) {
                // line 87
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppMobileBundle_hebergement_resultat_ville_ajax", array("id" => twig_lower_filter($this->env, $this->getContext($context, "repertoire")), "page" => ($this->getContext($context, "page") + 1))), "html", null, true);
                echo "\" ><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappmobile/images/fleche_droite.PNG"), "html", null, true);
                echo "\" alt=\"next\" /></a>
            ";
            }
            // line 89
            echo "        </div>
    ";
        }
        // line 91
        echo "    <script>
        
        \$(function(){
            //redonne le selected au bon option de la province            
            if(localStorage.getItem(\"idProvince\") == localStorage.getItem(\"idProvince\"))
            {
                \$(\"#idprovince option[value=\"+localStorage.getItem('idProvince')+\"]\").attr(\"selected\", \"selected\");                                
            }    
            //redonne le selected au bon option de la région          
            if(localStorage.getItem(\"idRegion\") == localStorage.getItem(\"idRegion\"))
            {
                \$(\"#idregion option[value=\"+localStorage.getItem('idRegion')+\"]\").attr(\"selected\", \"selected\");                                
            }      
            //redonne le selected au bon option de la ville           
            if(localStorage.getItem(\"idVille\") == localStorage.getItem(\"idVille\"))
            {
                \$(\"#idville option[value=\"+localStorage.getItem('idVille')+\"]\").attr(\"selected\", \"selected\");                                
            }      
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "MyAppMobileBundle:MobileHebergement:ville_default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 91,  330 => 89,  322 => 87,  319 => 86,  311 => 84,  309 => 83,  305 => 81,  302 => 80,  291 => 77,  281 => 76,  273 => 74,  271 => 73,  267 => 72,  263 => 71,  259 => 70,  256 => 69,  252 => 68,  248 => 67,  244 => 65,  236 => 63,  233 => 62,  225 => 60,  223 => 59,  220 => 58,  216 => 56,  208 => 54,  205 => 53,  197 => 51,  195 => 50,  191 => 48,  188 => 47,  177 => 44,  167 => 43,  159 => 41,  157 => 40,  153 => 39,  149 => 38,  145 => 37,  142 => 36,  138 => 35,  134 => 34,  130 => 32,  122 => 30,  119 => 29,  111 => 27,  109 => 26,  104 => 24,  97 => 23,  94 => 22,  91 => 21,  89 => 20,  86 => 19,  82 => 17,  70 => 15,  64 => 14,  61 => 13,  57 => 11,  45 => 9,  39 => 8,  34 => 6,  31 => 5,  29 => 4,  26 => 3,);
    }
}

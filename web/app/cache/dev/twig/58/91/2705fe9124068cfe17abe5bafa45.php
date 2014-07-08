<?php

/* MyAppMobileBundle:MobileForfait:index.html.twig */
class __TwigTemplate_58912705fe9124068cfe17abe5bafa45 extends Twig_Template
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
        // line 7
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
            echo " 
                <select id=\"idcategoriee\" class=\"ui-btn ui-icon-carat-d ui-btn-icon-right ui-corner-all ui-shadow modifSelect\">
                    <option value=\"0\" class=\"indexListeSelected\">";
            // line 9
            echo twig_escape_filter($this->env, $this->getContext($context, "choixcategorie"), "html", null, true);
            echo "</option>
                    ";
            // line 10
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listeCategorie"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                echo "          
                    <option id=\"";
                // line 11
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "forfaitclientid"), "repertoirefr")), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "forfaitclientid"), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "forfaitclientid"), "nomfr"), "html", null, true);
                echo "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 13
            echo "                </select>
                <select id=\"idprovince\" class=\"ui-btn ui-icon-carat-d ui-btn-icon-right ui-corner-all ui-shadow modifSelect\">
                    <option value=\"0\" class=\"indexListeSelected\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getContext($context, "choixprovince"), "html", null, true);
            echo "</option>
                    ";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listeProvince"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                echo "          
                    <option id=\"";
                // line 17
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "p"), "hebergementid"), "provinceid"), "repertoirefr")), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "p"), "hebergementid"), "provinceid"), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "p"), "hebergementid"), "provinceid"), "nomfr"), "html", null, true);
                echo "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 19
            echo "                </select>
            ";
        } else {
            // line 21
            echo "                <select id=\"idcategorie\" class=\"ui-btn ui-icon-carat-d ui-btn-icon-right ui-corner-all ui-shadow modifSelect\">
                    <option value=\"0\" class=\"indexListeSelected\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getContext($context, "choixcategorie"), "html", null, true);
            echo "</option>
                    ";
            // line 23
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listeCategorie"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                echo "          
                    <option id=\"";
                // line 24
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "forfaitclientid"), "repertoireen")), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "forfaitclientid"), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "forfaitclientid"), "nomen"), "html", null, true);
                echo "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 26
            echo "                </select>
                <select id=\"idprovince\" class=\"ui-btn ui-icon-carat-d ui-btn-icon-right ui-corner-all ui-shadow modifSelect\">
                    <option value=\"0\" class=\"indexListeSelected\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getContext($context, "choixprovince"), "html", null, true);
            echo "</option>
                    ";
            // line 29
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listeProvince"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                echo "          
                    <option id=\"";
                // line 30
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "p"), "hebergementid"), "provinceid"), "repertoireen")), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "p"), "hebergementid"), "provinceid"), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "p"), "hebergementid"), "provinceid"), "nomen"), "html", null, true);
                echo "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 32
            echo "                </select>
            ";
        }
        // line 34
        echo "        
    ";
        // line 35
        $this->env->loadTemplate("MyAppMobileBundle:MobileForfait:region.js.twig")->display($context);
        echo "    
    </div>
    <p><a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppMobileBundle_hebergement_resultat_canada"), "html", null, true);
        echo "\" id=\"recherche\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("rechercher"), "html", null, true);
        echo "</a></p>
    ";
        // line 38
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
            echo "    
        <div id=\"resultat\">
            ";
            // line 40
            if (array_key_exists("listeResultat", $context)) {
                echo " 
                ";
                // line 41
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listeResultat"));
                foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                    // line 42
                    echo "                    <div>
                        <h2>";
                    // line 43
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nom_fr"), "html", null, true);
                    echo "</h2>
                        <p>";
                    // line 44
                    echo twig_truncate_filter($this->env, strip_tags($this->getAttribute($this->getContext($context, "w"), "texte_description_fr")), 200, "[...]");
                    echo "</p>
                        <p>Région: ";
                    // line 45
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "region"), "html", null, true);
                    echo "</p>
                        <p>Ville: ";
                    // line 46
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "ville"), "html", null, true);
                    echo "</p>
                        <img src=\"";
                    // line 47
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/classifications/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "classification"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "image"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "valeur"), "html", null, true);
                    echo "\" />
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 50
                echo "            ";
            }
            // line 51
            echo "        </div>
    ";
        } else {
            // line 53
            echo "        <div id=\"resultat\">
            ";
            // line 54
            if (array_key_exists("listeResultat", $context)) {
                echo " 
                ";
                // line 55
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listeResultat"));
                foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                    // line 56
                    echo "                    <div>
                        <h2>";
                    // line 57
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nom_en"), "html", null, true);
                    echo "</h2>
                        <p>";
                    // line 58
                    echo twig_truncate_filter($this->env, strip_tags($this->getAttribute($this->getContext($context, "w"), "texte_description_en")), 200, "[...]");
                    echo "</p>
                        <p>Region: ";
                    // line 59
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "region"), "html", null, true);
                    echo "</p>
                        <p>City: ";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "ville"), "html", null, true);
                    echo "</p>
                        <img src=\"";
                    // line 61
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/classifications/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "classification"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "image"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "valeur"), "html", null, true);
                    echo "\" />
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 64
                echo "            ";
            }
            // line 65
            echo "        </div>
    ";
        }
        // line 66
        echo " 
";
    }

    public function getTemplateName()
    {
        return "MyAppMobileBundle:MobileForfait:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 66,  261 => 65,  258 => 64,  244 => 61,  240 => 60,  236 => 59,  232 => 58,  228 => 57,  225 => 56,  221 => 55,  217 => 54,  214 => 53,  210 => 51,  207 => 50,  193 => 47,  189 => 46,  185 => 45,  181 => 44,  177 => 43,  174 => 42,  170 => 41,  166 => 40,  161 => 38,  155 => 37,  150 => 35,  147 => 34,  143 => 32,  131 => 30,  125 => 29,  121 => 28,  117 => 26,  105 => 24,  99 => 23,  95 => 22,  92 => 21,  88 => 19,  76 => 17,  70 => 16,  66 => 15,  62 => 13,  50 => 11,  44 => 10,  40 => 9,  35 => 7,  31 => 5,  29 => 4,  26 => 3,);
    }
}

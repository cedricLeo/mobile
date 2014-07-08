<?php

/* MyAppMobileBundle:MobileHebergement:index.html.twig */
class __TwigTemplate_f81e780f90814c05460f74e106bf0c62 extends Twig_Template
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
                <select id=\"idprovince\" class=\"ui-btn ui-icon-carat-d ui-btn-icon-right ui-corner-all ui-shadow modifSelect\">
                    <option value=\"0\" class=\"indexListeSelected\">";
            // line 9
            echo twig_escape_filter($this->env, $this->getContext($context, "choixprovince"), "html", null, true);
            echo "</option>
                    ";
            // line 10
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listeProvince"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                echo "          
                    <option id=\"";
                // line 11
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
            // line 13
            echo "                </select>
            ";
        } else {
            // line 15
            echo "                <select id=\"idprovince\" class=\"ui-btn ui-icon-carat-d ui-btn-icon-right ui-corner-all ui-shadow modifSelect\">
                    <option value=\"0\" class=\"indexListeSelected\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getContext($context, "choixprovince"), "html", null, true);
            echo "</option>
                    ";
            // line 17
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listeProvince"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                echo "          
                    <option id=\"";
                // line 18
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
            // line 20
            echo "                </select>
            ";
        }
        // line 22
        echo "        
    ";
        // line 23
        $this->env->loadTemplate("MyAppMobileBundle:MobileHebergement:region.js.twig")->display($context);
        // line 24
        echo "    ";
        $this->env->loadTemplate("MyAppMobileBundle:MobileHebergement:ville.js.twig")->display($context);
        // line 25
        echo "    </div>
    <p><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppMobileBundle_hebergement_resultat_canada"), "html", null, true);
        echo "\" id=\"recherche\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("rechercher"), "html", null, true);
        echo "</a></p>
    ";
        // line 27
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
            echo "    
        <div id=\"resultat\">
            ";
            // line 29
            if (array_key_exists("listeResultat", $context)) {
                echo " 
                ";
                // line 30
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listeResultat"));
                foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                    // line 31
                    echo "                    <div>
                        <h2>";
                    // line 32
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nom_fr"), "html", null, true);
                    echo "</h2>
                        <p>";
                    // line 33
                    echo twig_truncate_filter($this->env, strip_tags($this->getAttribute($this->getContext($context, "w"), "texte_description_fr")), 200, "[...]");
                    echo "</p>
                        <p>Région: ";
                    // line 34
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "region"), "html", null, true);
                    echo "</p>
                        <p>Ville: ";
                    // line 35
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "ville"), "html", null, true);
                    echo "</p>
                        <img src=\"";
                    // line 36
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
                // line 39
                echo "            ";
            }
            // line 40
            echo "        </div>
    ";
        } else {
            // line 42
            echo "        <div id=\"resultat\">
            ";
            // line 43
            if (array_key_exists("listeResultat", $context)) {
                echo " 
                ";
                // line 44
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listeResultat"));
                foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                    // line 45
                    echo "                    <div>
                        <h2>";
                    // line 46
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nom_en"), "html", null, true);
                    echo "</h2>
                        <p>";
                    // line 47
                    echo twig_truncate_filter($this->env, strip_tags($this->getAttribute($this->getContext($context, "w"), "texte_description_en")), 200, "[...]");
                    echo "</p>
                        <p>Region: ";
                    // line 48
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "region"), "html", null, true);
                    echo "</p>
                        <p>City: ";
                    // line 49
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "ville"), "html", null, true);
                    echo "</p>
                        <img src=\"";
                    // line 50
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
                // line 53
                echo "            ";
            }
            // line 54
            echo "        </div>
    ";
        }
        // line 55
        echo " 
";
    }

    public function getTemplateName()
    {
        return "MyAppMobileBundle:MobileHebergement:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 55,  212 => 54,  209 => 53,  195 => 50,  191 => 49,  187 => 48,  183 => 47,  179 => 46,  176 => 45,  172 => 44,  168 => 43,  165 => 42,  161 => 40,  158 => 39,  144 => 36,  140 => 35,  136 => 34,  132 => 33,  128 => 32,  125 => 31,  121 => 30,  117 => 29,  112 => 27,  106 => 26,  103 => 25,  100 => 24,  98 => 23,  95 => 22,  91 => 20,  79 => 18,  73 => 17,  69 => 16,  66 => 15,  62 => 13,  50 => 11,  44 => 10,  40 => 9,  35 => 7,  31 => 5,  29 => 4,  26 => 3,);
    }
}

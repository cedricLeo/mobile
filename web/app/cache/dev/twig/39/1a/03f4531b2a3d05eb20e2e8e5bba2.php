<?php

/* MyAppMobileBundle:MobileHebergement:ville.js.twig */
class __TwigTemplate_391a03f4531b2a3d05eb20e2e8e5bba2 extends Twig_Template
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
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
            // line 2
            echo "    <div class=\"returnville\">
        <select id=\"idville\" class=\"ui-btn ui-icon-carat-d ui-btn-icon-right ui-corner-all ui-shadow modifSelect\">
            <option value=\"0\">";
            // line 4
            echo twig_escape_filter($this->env, $this->getContext($context, "choixville"), "html", null, true);
            echo "</option>
            ";
            // line 5
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listeVille"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 6
                echo "            <option id=\"";
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
            // line 8
            echo "        </select>
    </div>
";
        } else {
            // line 11
            echo "     <div class=\"returnville\">
        <select id=\"idville\" class=\"ui-btn ui-icon-carat-d ui-btn-icon-right ui-corner-all ui-shadow modifSelect\">
            <option value=\"0\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getContext($context, "choixville"), "html", null, true);
            echo "</option>
            ";
            // line 14
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listeVille"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 15
                echo "            <option id=\"";
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
            echo "        </select>
    </div>
";
        }
        // line 20
        echo "<script>
    \$(function(){
        \$(\"select#idville\").change(function(){               
               \$(\"span.titleville \").text(\$(\"#idville option:selected\").text());    
               var villeargu = parseInt(\$(\"#idville option:selected\").val());  
               var villerepertoire = \$(\"#idville option:selected\").attr(\"id\");
               //stoke la ville dans le navigateur
               localStorage.setItem(\"idVille\", villeargu);      
               if(typeof(villeargu) === \"number\"){        
                    var urlResultatVille = \"";
        // line 29
        echo strtr($this->env->getExtension('routing')->getPath("MyAppMobileBundle_hebergement_resultat_ville_ajax", array("id" => "villerepertoire")), array("villerepertoire" => "\"+villerepertoire+\""));
        echo "\";
                    \$(\"#recherche\").replaceWith(\"<a id='recherche' href='\"+urlResultatVille+\"' >Rechercher</a>\");
               }
        });
         
     //       \$(\"#idville-button span\").text(\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("choix.ville"), "html", null, true);
        echo "\");
        
       
        \$(\"#idregion\").change(function(){ 
            var regionargu = parseInt(\$(\"#idregion option:selected\").val());     
            if(typeof(regionargu) === \"number\"){        
                 var urlResultatRegion = \"";
        // line 40
        echo strtr($this->env->getExtension('routing')->getPath("MyAppMobileBundle_hebergement_resultat_region_ajax", array("id" => "regionargu")), array("regionargu" => "\"+regionargu+\""));
        echo "\";
                 \$(\"#recherche\").replaceWith(\"<a id='recherche' href='\"+urlResultatRegion+\"' >Rechercher</a>\");                 
            }
        });
        
        //remonte le menu lors du clique sur le bouton
       \$(\"#recherche\").on(\"click\", function(){
           \$(\"#menu\").slideUp();
           \$(\".telephone\").html(\"<img src='";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappmobile/images/fleche_bas"), "html", null, true);
        echo "' alt='fleche pour afficher le menu '/>\");
       });
    });
</script>    
";
    }

    public function getTemplateName()
    {
        return "MyAppMobileBundle:MobileHebergement:ville.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 48,  107 => 40,  90 => 29,  151 => 75,  116 => 46,  92 => 28,  86 => 25,  74 => 17,  61 => 15,  57 => 14,  53 => 13,  49 => 11,  27 => 5,  23 => 4,  19 => 2,  17 => 1,  216 => 55,  212 => 54,  209 => 53,  195 => 50,  191 => 49,  187 => 48,  183 => 47,  179 => 46,  176 => 45,  172 => 44,  168 => 43,  165 => 42,  161 => 82,  158 => 39,  144 => 36,  140 => 35,  136 => 34,  132 => 33,  128 => 32,  125 => 52,  121 => 30,  117 => 29,  112 => 27,  106 => 26,  103 => 25,  100 => 24,  98 => 34,  95 => 22,  91 => 20,  79 => 20,  73 => 17,  69 => 16,  66 => 15,  62 => 13,  50 => 11,  44 => 8,  40 => 9,  35 => 7,  31 => 6,  29 => 4,  26 => 3,);
    }
}

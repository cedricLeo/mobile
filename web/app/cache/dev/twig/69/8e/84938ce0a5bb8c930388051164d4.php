<?php

/* MyAppMobileBundle:MobileHebergement:region.js.twig */
class __TwigTemplate_698e84938ce0a5bb8c930388051164d4 extends Twig_Template
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
            echo "    <div class=\"returnregion\">
        <select id=\"idregion\" class=\"ui-btn ui-icon-carat-d ui-btn-icon-right ui-corner-all ui-shadow modifSelect\">
            <option value=\"0\">";
            // line 4
            echo twig_escape_filter($this->env, $this->getContext($context, "choixregion"), "html", null, true);
            echo "</option>
            ";
            // line 5
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listeRegion"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 6
                echo "                <option id=\"";
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
            echo "    <div class=\"returnregion\">
        <select id=\"idregion\" class=\"ui-btn ui-icon-carat-d ui-btn-icon-right ui-corner-all ui-shadow modifSelect\">
            <option value=\"0\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getContext($context, "choixregion"), "html", null, true);
            echo "</option>
            ";
            // line 14
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listeRegion"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 15
                echo "                <option id=\"";
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
  
        //On force a prendre les listes déroulantes les valeurs choisissez ...
        if(provinceExiste === \"\" ){
            \$(\"#idprovince-button span\").text(\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getContext($context, "choixprovince"), "html", null, true);
        echo "\");
        }
        if(regionExiste === \"\" ){
            \$(\"#idregion-button span\").text(\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getContext($context, "choixregion"), "html", null, true);
        echo "\");
        }
        if(villeExiste === \"\" ){
            \$(\"#idville-button span\").text(\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getContext($context, "choixville"), "html", null, true);
        echo "\");
        }
               
        \$(\"#idprovince\").on(\"change\", function(){ 
            \$(this).off(\"change\");
            var paramprovince = \$(\"#idprovince\").val();   
            var provinceargu = \$(\"#idprovince option:selected\").attr(\"id\");  
            
            \$(\"#idprovince\").on(\"click\", function(){
                if( typeof parseInt(paramprovince) === 'number'){  
                    var DATA = \"paramprovince=\" + paramprovince;   
                    //Stocke dans le navigateur le choix de la province
                    localStorage.setItem(\"idProvince\", paramprovince);
                    \$.ajax({
                        type: \"POST\",
                        url: \"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppMobileBundle_hebergement_region_ajax"), "html", null, true);
        echo "\",
                        data: DATA,
                        success: function(data){                                                                               
                            \$(\".returnregion\").html(data);                           
                            //change le lien
                            if(typeof(provinceargu) === \"string\"){                        
                                   \$(\"#recherche\").replaceWith(\"<a id='recherche' style='margin-top:100px;' href='";
        // line 52
        echo strtr($this->env->getExtension('routing')->getPath("MyAppMobileBundle_hebergement_resultat_province_ajax", array("id" => "provinceargu")), array("provinceargu" => "\"+provinceargu+\""));
        echo "' >Rechercher</a>\");
                            }
                            if(\$(\"#idprovince option\").attr(\"id\") == provinceargu)
                            {
                                \$(\"#idprovince option:selected\").attr(\"selected\");
                            }                            
                        }
                    });
                    return false;
                 } 
            });                       
         });                  
         
         \$(\"#idregion\").on(\"change\", function(){ 
               \$(\"span.titleregion\").text(\$(\"#idregion option:selected\").text());
               var paramregion = \$(\"#idregion\").val(); 
               var regionargu = \$(\"#idregion option:selected\").attr(\"id\");                  
               if( typeof parseInt(paramregion) === 'number'){                 
                   var DATA = \"paramregion=\" + paramregion;
                   //Stocke dans le navigateur la région
                   localStorage.setItem(\"idRegion\", paramregion);                 
                   \$.ajax({
                       type: \"POST\",
                       url: \"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppMobileBundle_hebergement_ville_ajax"), "html", null, true);
        echo "\",
                       data: DATA,
                       cache:false,
                       success: function(data){                                                  
                           \$(\".returnville\").html(data);      
                           //change le lien
                            if(typeof(regionargu) === \"string\"){                        
                                   \$(\"#recherche\").replaceWith(\"<a id='recherche' style='margin-top:100px;' href='";
        // line 82
        echo strtr($this->env->getExtension('routing')->getPath("MyAppMobileBundle_hebergement_resultat_region_ajax", array("id" => "regionargu")), array("regionargu" => "\"+regionargu+\""));
        echo "' >Rechercher</a>\");
                            }
                            if(\$(\"#idregion option\").attr(\"id\") == regionargu)
                            {
                                \$(\"#idregion option:selected\").attr(\"selected\");
                            }
                       }
                   });
                   return false;
               }              
         }); 
         
          
    });
</script>    ";
    }

    public function getTemplateName()
    {
        return "MyAppMobileBundle:MobileHebergement:region.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 75,  116 => 46,  92 => 28,  86 => 25,  74 => 17,  61 => 15,  57 => 14,  53 => 13,  49 => 11,  27 => 5,  23 => 4,  19 => 2,  17 => 1,  216 => 55,  212 => 54,  209 => 53,  195 => 50,  191 => 49,  187 => 48,  183 => 47,  179 => 46,  176 => 45,  172 => 44,  168 => 43,  165 => 42,  161 => 82,  158 => 39,  144 => 36,  140 => 35,  136 => 34,  132 => 33,  128 => 32,  125 => 52,  121 => 30,  117 => 29,  112 => 27,  106 => 26,  103 => 25,  100 => 24,  98 => 31,  95 => 22,  91 => 20,  79 => 20,  73 => 17,  69 => 16,  66 => 15,  62 => 13,  50 => 11,  44 => 8,  40 => 9,  35 => 7,  31 => 6,  29 => 4,  26 => 3,);
    }
}

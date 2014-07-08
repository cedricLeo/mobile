<?php

/* MyAppMobileBundle:MobileForfait:region.js.twig */
class __TwigTemplate_115ece6816d23763f40f3a0eb9db71cd extends Twig_Template
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
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "p"), "hebergementid"), "regionid"), "repertoirefr")), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "p"), "hebergementid"), "regionid"), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "p"), "hebergementid"), "regionid"), "nomfr"), "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 8
            echo "        </select>
    </div>
    <div class=\"returnville\">
        <select id=\"idville\" class=\"ui-btn ui-icon-carat-d ui-btn-icon-right ui-corner-all ui-shadow modifSelect\">
            <option value=\"0\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getContext($context, "choixville"), "html", null, true);
            echo "</option>
            ";
            // line 13
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listeVille"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 14
                echo "            <option id=\"";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "p"), "hebergementid"), "villeid"), "repertoirefr")), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "p"), "hebergementid"), "villeid"), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "p"), "hebergementid"), "villeid"), "nomfr"), "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 16
            echo "        </select>
    </div>
";
        } else {
            // line 19
            echo "    <div class=\"returnregion\">
        <select id=\"idregion\" class=\"ui-btn ui-icon-carat-d ui-btn-icon-right ui-corner-all ui-shadow modifSelect\">
            <option value=\"0\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getContext($context, "choixregion"), "html", null, true);
            echo "</option>
            ";
            // line 22
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listeRegion"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 23
                echo "                <option id=\"";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "p"), "hebergementid"), "regionid"), "repertoireen")), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "p"), "hebergementid"), "regionid"), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "p"), "hebergementid"), "regionid"), "nomen"), "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 25
            echo "        </select>
    </div>
    <div class=\"returnville\">
        <select id=\"idville\" class=\"ui-btn ui-icon-carat-d ui-btn-icon-right ui-corner-all ui-shadow modifSelect\">
            <option value=\"0\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getContext($context, "choixville"), "html", null, true);
            echo "</option>
            ";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listeVille"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 31
                echo "            <option id=\"";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "p"), "hebergementid"), "villeid"), "repertoireen")), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "p"), "hebergementid"), "villeid"), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "p"), "hebergementid"), "villeid"), "nomen"), "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 33
            echo "        </select>
    </div>
";
        }
        // line 36
        echo "<script>
    \$(function(){ 
  
        //On force à prendre les listes déroulantes les valeurs choisissez ...
        if(categorieExiste === \"\" ){
            \$(\"#idcategorie-button span\").text(\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getContext($context, "choixcategorie"), "html", null, true);
        echo "\");
        }
        if(provinceExiste === \"\" ){
            \$(\"#idprovince-button span\").text(\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getContext($context, "choixprovince"), "html", null, true);
        echo "\");
        }
        if(regionExiste === \"\" ){
            \$(\"#idregion-button span\").text(\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getContext($context, "choixregion"), "html", null, true);
        echo "\");
        }
        if(villeExiste === \"\" ){
            \$(\"#idville-button span\").text(\"";
        // line 50
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
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppMobileBundle_hebergement_region_ajax"), "html", null, true);
        echo "\",
                        data: DATA,
                        success: function(data){                                                                               
                            \$(\".returnregion\").html(data);                           
                            //change le lien
                            if(typeof(provinceargu) === \"string\"){                        
                                   \$(\"#recherche\").replaceWith(\"<a id='recherche' style='margin-top:100px;' href='";
        // line 71
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
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppMobileBundle_hebergement_ville_ajax"), "html", null, true);
        echo "\",
                       data: DATA,
                       cache:false,
                       success: function(data){                                                  
                           \$(\".returnville\").html(data);      
                           //change le lien
                            if(typeof(regionargu) === \"string\"){                        
                                   \$(\"#recherche\").replaceWith(\"<a id='recherche' style='margin-top:100px;' href='";
        // line 101
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
        return "MyAppMobileBundle:MobileForfait:region.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 101,  211 => 94,  185 => 71,  176 => 65,  158 => 50,  152 => 47,  146 => 44,  140 => 41,  133 => 36,  128 => 33,  115 => 31,  111 => 30,  107 => 29,  101 => 25,  88 => 23,  84 => 22,  80 => 21,  76 => 19,  71 => 16,  58 => 14,  54 => 13,  50 => 12,  44 => 8,  31 => 6,  27 => 5,  23 => 4,  19 => 2,  17 => 1,);
    }
}

<?php

/* ::files_mobile_js.html.twig */
class __TwigTemplate_79cfd3caaa555c2abb03aa9c9cb7e786 extends Twig_Template
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
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappmobile/js/jquery.js"), "html", null, true);
        echo "\"></script>     
    <script type=\"text/javascript\" src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappmobile/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script> 
    <script type=\"text/javascript\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappmobile/js/reservation_ligne.js"), "html", null, true);
        echo "\"></script>     
    <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyACKcE9ixEXmpRIIvIfwBryfUX_7AJOVd4&sensor=true\"></script>       
    <script>
        var provinceExiste = categorieExiste = regionExiste = villeExiste = \"\";        
        \$(function(){
            //force le rechargement de la carte
            \$(\"#menudirection\").on(\"click\", function(){
                if(gmap_init == 0){
                    gmap_init = 1;
                    initialize();
                }
            });
            
            \$(\".calculItineraire\").on(\"click\", function(){
                if(\$(\"#origin\").val() != \"\"){
                    \$(\".imprimerItineraire\").show();
                }
            });
        });
    </script>
  ";
    }

    public function getTemplateName()
    {
        return "::files_mobile_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  17 => 1,);
    }
}

<?php

/* ::base_mobile.html.twig */
class __TwigTemplate_f237187c79b8645a238b35346ce63270 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale"), "html", null, true);
        echo "\" >
    <head>
        <meta name=\"viewport\" content=\"initial-scale=1.0, user-scalable=no\">
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" /> 
        <link rel=\"canonical\" href=\"http://www.global-reservation.com/mobile\"> 
        <meta name=\"robots\" content=\"index, follow\" />
        <meta content=\"ca\" name=\"COUNTRY\">
        <meta http-equiv=\"content-language\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale"), "html", null, true);
        echo "\" />
        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </head>
    <body >
        <div id=\"entete\">
            ";
        // line 16
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
            // line 17
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppMobileBundle_homepage"), "html", null, true);
            echo "\" title=\"Accueil\"><img class=\"logoGlobal\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappmobile/images/logoglobal.jpg"), "html", null, true);
            echo "\" alt=\"logo Global Réservation\" /></a>
                <img src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappmobile/images/flag_en.png"), "html", null, true);
            echo "\" alt=\"English\" class=\"versionLang\"/>   
            ";
        } else {
            // line 20
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppMobileBundle_homepage"), "html", null, true);
            echo "\" title=\"Home\"><img class=\"logoGlobal\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappmobile/images/logoglobal.jpg"), "html", null, true);
            echo "\" alt=\"logo Global Réservation\" /></a>
                <img src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappmobile/images/flag_fr.png"), "html", null, true);
            echo "\" alt=\"Français\" class=\"versionLang\"/>
            ";
        }
        // line 22
        echo " 
        </div>
        <div class=\"telephone\" style=\"border:1px solid red;\">
               ";
        // line 30
        echo "\t\t<img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappmobile/images/pictoTelephone.gif"), "html", null, true);
        echo "\" alt=\"picto_téléphone\" />
\t\t<p>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sans.frais"), "html", null, true);
        echo " : <a href=\"callTo:18777788977\" class=\"callTel\" title=\"N° 1 877 778 8977\" > 1 877 778-8977</a></p>
                <p>Local : <a href=\"callTo:14182662165\" class=\"callTel\" title=\"N° 1-418-266-2165\" > 1-418-266-2165</a></p>
\t\t<p>International : <a href=\"callTo:0014182662165\" class=\"callTel\" title=\"N° 001-418-266-2165\" > 001-418-266-2165</a></p>               
\t </div>                
        ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        echo "    
        ";
        // line 36
        $this->displayBlock('footer', $context, $blocks);
        echo " 
    </body>
</html>
";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo "API MOBILE";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        echo " ";
        $this->env->loadTemplate("::files_mobile_style.html.twig")->display($context);
        echo " ";
    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        echo " ";
        $this->env->loadTemplate("::files_mobile_js.html.twig")->display($context);
        echo " ";
    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
    }

    // line 36
    public function block_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base_mobile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 36,  122 => 12,  114 => 11,  108 => 10,  100 => 36,  96 => 35,  89 => 31,  84 => 30,  79 => 22,  74 => 21,  62 => 18,  55 => 17,  48 => 13,  43 => 11,  39 => 10,  35 => 9,  25 => 2,  22 => 1,  138 => 25,  130 => 35,  124 => 23,  118 => 22,  110 => 21,  102 => 20,  94 => 19,  90 => 17,  81 => 13,  73 => 12,  67 => 20,  61 => 10,  53 => 16,  45 => 12,  37 => 7,  33 => 5,  31 => 4,  26 => 3,);
    }
}

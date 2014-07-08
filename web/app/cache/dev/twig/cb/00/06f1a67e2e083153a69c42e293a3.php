<?php

/* MyAppMobileBundle:Mobile:index.html.twig */
class __TwigTemplate_cb0006f1a67e2e083153a69c42e293a3 extends Twig_Template
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
        echo " 
    ";
        // line 4
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
            // line 5
            echo "        <nav id=\"menu\">
            <ul>
                <li><a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppMobileBundle_hebergement"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement.google"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement.google"), "html", null, true);
            echo "</a></li>
                <li><a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppMobileBundle_forfait"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forfait.google"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forfait.google"), "html", null, true);
            echo "</a></li>
                <li><a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppMobileBundle_corpo"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("corporatif.evenement"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("corporatif.evenement"), "html", null, true);
            echo "</a></li>
                <li><a href=\"http://www.quebec-guidetouristique.travel/activites-quebec/centres-sante-spas/centres-sante-spas.php\" target=\"_blank\" title=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("centre.sante.spa"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("centre.sante.spa"), "html", null, true);
            echo "</a></li>
                <li><a href=\"http://www.quebec-guidetouristique.travel/activites-quebec/\" target=\"_blank\" title=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("attrait.activite.google"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("attrait.activite.google"), "html", null, true);
            echo "</a></li>
                <li><a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppMobileBundle_promotion"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("promotion"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("promotion"), "html", null, true);
            echo "</a></li>
                <li><a href=\"http://www.quebec-guidetouristique.travel/activites-quebec/restaurants/restaurants.php\" target=\"_blank\" title=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("restaurant.google"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("restaurant.google"), "html", null, true);
            echo "</a></li>
            </ul>
        </nav>
    ";
        } else {
            // line 17
            echo "        <nav id=\"menu\">
            <ul>
                <li><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppMobileBundle_hebergement_en"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement.google"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement.google"), "html", null, true);
            echo "</a></li>
                <li><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppMobileBundle_forfait_en"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forfait.google"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forfait.google"), "html", null, true);
            echo "</a></li>
                <li><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppMobileBundle_corpo_en"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("corporatif.evenement"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("corporatif.evenement"), "html", null, true);
            echo "</a></li>
                <li><a href=\"http://www.quebec-guidetouristique.travel/quebec-activities/health-centres-spas/health-centres-spas.php\" target=\"_blank\" title=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("centre.sante.spa"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("centre.sante.spa"), "html", null, true);
            echo "</a></li>
                <li><a href=\"http://www.quebec-guidetouristique.travel/quebec-activities/health-centres-spas/health-centres-spas.php\" target=\"_blank\" title=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("attrait.activite.google"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("attrait.activite.google"), "html", null, true);
            echo "</a></li>
                <li><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppMobileBundle_promotion_en"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("promotion"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("promotion"), "html", null, true);
            echo "</a></li>
                <li><a href=\"http://www.quebec-guidetouristique.travel/quebec-activities/restaurants-en/restaurants.php\" target=\"_blank\" title=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("restaurant.google"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("restaurant.google"), "html", null, true);
            echo "</a></li>
            </ul>
        </nav>
    ";
        }
    }

    public function getTemplateName()
    {
        return "MyAppMobileBundle:Mobile:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 25,  130 => 24,  124 => 23,  118 => 22,  110 => 21,  102 => 20,  94 => 19,  90 => 17,  81 => 13,  73 => 12,  67 => 11,  61 => 10,  53 => 9,  45 => 8,  37 => 7,  33 => 5,  31 => 4,  26 => 3,);
    }
}

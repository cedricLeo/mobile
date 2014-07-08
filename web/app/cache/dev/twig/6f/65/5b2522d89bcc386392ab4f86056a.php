<?php

/* ::files_js.html.twig */
class __TwigTemplate_6f655b2522d89bcc386392ab4f86056a extends Twig_Template
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
        // line 2
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/js/jquery.js"), "html", null, true);
        echo "\" ></script>
    <script type=\"text/javascript\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/js/source/jquery.fancybox.js"), "html", null, true);
        echo "\"></script> 
    <script type=\"text/javascript\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/js/fancybox_custom.js"), "html", null, true);
        echo "\"></script> 
    <script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/js/jquery_custome.js"), "html", null, true);
        echo "\"></script> 
    <script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/js/jquery-ui-1.9.1.custom.js"), "html", null, true);
        echo "\"></script> 
    <script type=\"text/javascript\" async=\"\" src=\"http://www.google-analytics.com/ga.js\" style=\"\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/js/googleDFP.js"), "html", null, true);
        echo "\"></script>  
    <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/js/moment/moment.js"), "html", null, true);
        echo "\"></script>  
    <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyACKcE9ixEXmpRIIvIfwBryfUX_7AJOVd4&sensor=true\"></script>
    <script type=\"text/javascript\">
    \tgoogletag.cmd.push(function() {
        googletag.defineSlot('/5445203/";
        // line 13
        echo twig_escape_filter($this->env, $this->getContext($context, "googledfp2"), "html", null, true);
        echo "', [300, 250], 'zone_02').addService(googletag.pubads()); 
        googletag.defineSlot('/5445203/";
        // line 14
        echo twig_escape_filter($this->env, $this->getContext($context, "googledfp1"), "html", null, true);
        echo "', [468, 60], 'zone_01').addService(googletag.pubads());
        googletag.defineSlot('/5445203/";
        // line 15
        echo twig_escape_filter($this->env, $this->getContext($context, "googledfp3"), "html", null, true);
        echo "', [728, 90], 'zone_03').addService(googletag.pubads());   
        googletag.pubads().setTargeting(\"langue\", ";
        // line 16
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
            echo "'fr'";
        } else {
            echo "'en'";
        }
        echo ");
    \tgoogletag.pubads().enableSingleRequest();
    \tgoogletag.enableServices();
    \t});
    </script>
    <script>
        \$(function() {
            ";
        // line 23
        if (array_key_exists("listeClient", $context)) {
            // line 24
            echo "
               var listeClient = [
                   ";
            // line 26
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listeClient"));
            foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                // line 27
                echo "                       ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "w"));
                foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                    // line 28
                    echo "                           ";
                    // line 29
                    echo "                                \"";
                    echo twig_escape_filter($this->env, strip_tags($this->getAttribute($this->getContext($context, "v"), "nom_fr")), "js", null, true);
                    echo "\",
                           ";
                    // line 31
                    echo "                       ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 32
                echo "                   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 33
            echo "               ];
               \$( \"#moteur_recherche_portail_nom\" ).autocomplete({
                   source: listeClient
               });
             ";
        }
        // line 38
        echo "             ";
        if (array_key_exists("main", $context)) {
            echo "         
                //Enlève l'attribut « href » dans le lien du menu principale pour la section sélectionnée
                \$('#navhaut ul li#inSection a').removeAttr('href');
                \$('#navhaut ul li#inSection a').css('padding','12px 8px');  
            ";
        }
        // line 42
        echo "                            
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "::files_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 42,  110 => 33,  104 => 32,  91 => 28,  86 => 27,  82 => 26,  78 => 24,  76 => 23,  62 => 16,  58 => 15,  50 => 13,  43 => 9,  39 => 8,  30 => 5,  26 => 4,  22 => 3,  17 => 2,  639 => 163,  634 => 160,  631 => 159,  628 => 158,  613 => 155,  610 => 154,  604 => 152,  593 => 150,  591 => 149,  583 => 148,  580 => 147,  575 => 146,  573 => 145,  564 => 142,  551 => 141,  543 => 139,  538 => 138,  535 => 137,  532 => 136,  529 => 135,  514 => 132,  511 => 131,  505 => 129,  494 => 127,  492 => 126,  484 => 125,  481 => 124,  476 => 123,  474 => 122,  465 => 119,  452 => 118,  444 => 116,  439 => 115,  436 => 114,  434 => 113,  429 => 111,  424 => 110,  419 => 108,  413 => 105,  407 => 98,  393 => 12,  385 => 11,  380 => 169,  378 => 168,  372 => 164,  367 => 109,  365 => 108,  359 => 105,  356 => 104,  353 => 102,  350 => 101,  343 => 98,  340 => 96,  333 => 92,  325 => 90,  321 => 89,  316 => 88,  313 => 86,  311 => 85,  300 => 84,  293 => 69,  290 => 68,  287 => 67,  285 => 66,  277 => 63,  274 => 62,  272 => 61,  267 => 59,  262 => 56,  254 => 52,  247 => 51,  244 => 50,  237 => 48,  234 => 47,  231 => 46,  217 => 40,  209 => 38,  207 => 37,  188 => 36,  176 => 35,  169 => 33,  160 => 27,  157 => 26,  114 => 24,  71 => 22,  69 => 21,  65 => 19,  61 => 17,  55 => 14,  52 => 13,  49 => 12,  42 => 10,  36 => 8,  27 => 2,  24 => 1,  426 => 138,  423 => 137,  416 => 131,  411 => 129,  409 => 128,  406 => 127,  401 => 66,  392 => 120,  388 => 118,  382 => 114,  370 => 110,  363 => 111,  351 => 109,  345 => 108,  341 => 106,  329 => 91,  322 => 103,  309 => 101,  305 => 100,  301 => 98,  289 => 96,  282 => 95,  270 => 60,  264 => 57,  259 => 55,  249 => 82,  242 => 77,  236 => 76,  229 => 45,  225 => 42,  222 => 72,  216 => 65,  208 => 64,  201 => 62,  195 => 61,  189 => 58,  181 => 57,  174 => 55,  168 => 54,  162 => 28,  154 => 50,  147 => 48,  141 => 47,  135 => 44,  129 => 43,  122 => 41,  117 => 38,  111 => 32,  105 => 31,  98 => 31,  93 => 29,  87 => 19,  79 => 18,  72 => 16,  66 => 15,  60 => 12,  57 => 15,  54 => 14,  47 => 11,  44 => 7,  40 => 9,  38 => 4,  34 => 6,  29 => 2,);
    }
}

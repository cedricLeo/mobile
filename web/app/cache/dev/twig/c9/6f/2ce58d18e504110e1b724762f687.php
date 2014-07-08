<?php

/* MyAppMobileBundle:MobileHebergement:provinceListe.js.twig */
class __TwigTemplate_c96f2ce58d18e504110e1b724762f687 extends Twig_Template
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
        echo "<script>
    /**
     * Passe la valeur de la province en mémoire à la liste au dropdownliste
     */
    \$(function(){
        ";
        // line 6
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
            // line 7
            echo "               if(typeof(Storage) !== \"undefined\")
               {
                    console.log(localStorage.getItem(\"nomProvince\"));
                    \$(\"#idprovince-button span\").addClass(\"titleprovince\").text(localStorage.getItem(\"nomProvince\")); 
               }
               else
               {
                   console.log(\"Local storage non supporté\");
               }
        ";
        } else {
            // line 17
            echo "               if(typeof(Storage) !== \"undefined\")
               {
                    console.log(localStorage.getItem(\"nomProvince\"));
                    \$(\"#idprovince-button span\").addClass(\"titleprovince\").text(localStorage.getItem(\"nomProvince\"));
               }
               else
               {
                   console.log(\"Local storage not supported\");
               }
        ";
        }
        // line 27
        echo "    });    
</script>";
    }

    public function getTemplateName()
    {
        return "MyAppMobileBundle:MobileHebergement:provinceListe.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 27,  38 => 17,  24 => 6,  17 => 1,  334 => 91,  330 => 89,  322 => 87,  319 => 86,  311 => 84,  309 => 83,  305 => 81,  302 => 80,  291 => 77,  281 => 76,  273 => 74,  271 => 73,  267 => 72,  263 => 71,  259 => 70,  256 => 69,  252 => 68,  248 => 67,  244 => 65,  236 => 63,  233 => 62,  225 => 60,  223 => 59,  220 => 58,  216 => 56,  208 => 54,  205 => 53,  197 => 51,  195 => 50,  191 => 48,  188 => 47,  177 => 44,  167 => 43,  159 => 41,  157 => 40,  153 => 39,  149 => 38,  145 => 37,  142 => 36,  138 => 35,  134 => 34,  130 => 32,  122 => 30,  119 => 29,  111 => 27,  109 => 26,  104 => 24,  97 => 23,  94 => 22,  91 => 21,  89 => 20,  86 => 19,  82 => 17,  70 => 15,  64 => 14,  61 => 13,  57 => 11,  45 => 9,  39 => 8,  34 => 6,  31 => 5,  29 => 4,  26 => 7,);
    }
}

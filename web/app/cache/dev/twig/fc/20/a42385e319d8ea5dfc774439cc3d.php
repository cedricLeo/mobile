<?php

/* MyAppGlobalBundle:Corpo_&_events:reservationregion.xml.twig */
class __TwigTemplate_fc20a42385e319d8ea5dfc774439cc3d extends Twig_Template
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
            echo "<div class=\"retourregion\">
\t<select id=\"formtopregion\" name=\"formtopregion\">
\t\t";
            // line 4
            if (twig_test_empty($this->getContext($context, "reservationRegionAjax"))) {
                // line 5
                echo "\t\t\t<option >Choisissez une région </option>
\t\t";
            } else {
                // line 7
                echo "\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "reservationRegionAjax"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                    // line 8
                    echo "                        
                            ";
                    // line 9
                    if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                        // line 10
                        echo "\t\t\t\t<option >Choisissez une région </option>
                            ";
                    }
                    // line 11
                    echo "                                
                                <option value=\"";
                    // line 12
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "reservit_id"), "html", null, true);
                    echo "\" >";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nom_fr"), "html", null, true);
                    echo "</option>
\t\t\t";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 14
                echo "\t\t";
            }
            // line 15
            echo "\t</select> <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/loading.gif"), "html", null, true);
            echo "\" class=\"formtopregion\" />
</div>
";
        } else {
            // line 18
            echo "<div class=\"retourregion\">
\t<select id=\"formtopregion\" name=\"formtopregion\">
\t\t";
            // line 20
            if (twig_test_empty($this->getContext($context, "reservationRegionAjax"))) {
                // line 21
                echo "\t\t\t<option >Choose a region </option>
\t\t";
            } else {
                // line 23
                echo "\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "reservationRegionAjax"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                    // line 24
                    echo "                            ";
                    if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                        // line 25
                        echo "\t\t\t\t<option >Choose a region </option>
                            ";
                    }
                    // line 27
                    echo "\t\t\t\t<option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "reservit_id"), "html", null, true);
                    echo "\" >";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nom_en"), "html", null, true);
                    echo "</option>
\t\t\t";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 29
                echo "\t\t";
            }
            // line 30
            echo "\t</select> <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/loading.gif"), "html", null, true);
            echo "\" class=\"formtopregion\" />
</div>
";
        }
        // line 33
        echo "
<div class=\"temp\">
<label class=\"displayReponseListeVille\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ville"), "html", null, true);
        echo "</label>
";
        // line 36
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
            // line 37
            echo "<div class=\"retourville displayReponseListeVille\">
\t<select id=\"formtopville\" name=\"formtopville\">
\t\t";
            // line 39
            if (twig_test_empty($this->getContext($context, "reservationVilleAjax"))) {
                // line 40
                echo "\t\t\t<option >Choisissez une ville</option>
\t\t";
            } else {
                // line 42
                echo "\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "reservationVilleAjax"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                    // line 43
                    echo "                            ";
                    if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                        // line 44
                        echo "\t\t\t\t<option >Choisissez une ville</option>
                            ";
                    }
                    // line 46
                    echo "\t\t\t\t<option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "reservit_id"), "html", null, true);
                    echo "\" >";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nom_fr"), "html", null, true);
                    echo "</option>
\t\t\t";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 48
                echo "\t\t";
            }
            // line 49
            echo "\t</select> 
</div>
";
        } else {
            // line 52
            echo "<div class=\"retourville displayReponseListeVille\">
\t<select id=\"formtopville\" name=\"formtopville\">
\t\t";
            // line 54
            if (twig_test_empty($this->getContext($context, "reservationVilleAjax"))) {
                // line 55
                echo "\t\t\t<option >Choose a city</option>
\t\t";
            } else {
                // line 57
                echo "\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "reservationVilleAjax"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                    // line 58
                    echo "                            ";
                    if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                        // line 59
                        echo "\t\t\t\t<option >Choose a city</option>
                            ";
                    }
                    // line 61
                    echo "\t\t\t\t<option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "reservit_id"), "html", null, true);
                    echo "\" >";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nom_en"), "html", null, true);
                    echo "</option>
\t\t\t";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 63
                echo "\t\t";
            }
            // line 64
            echo "\t</select> 
</div>
";
        }
        // line 67
        echo "</div>

<script>
\t\$(function(){
\t\t\$(\".formtopregion\").hide();
\t\t\$(\"select#formtopregion \").change(function(){ 
\t\t    \$(\".formtopregion\").show();
\t\t    var reservationville = \$(\"#formtopregion\").val();
\t\t    \$(\"#zoneid\").attr('value', \$(\"#formtopregion option:selected\").val());
\t\t    var DATA = 'reservationville=' + reservationville  ;
\t\t    \$.ajax({
\t\t        type: \"post\",
\t\t        url: \"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_corpoeventsprovincefrajax"), "html", null, true);
        echo "\",
\t\t        data: DATA, 
\t\t        cache: false,
\t\t        success: function(data){
\t\t           \$('.retourville').html(data);
\t\t           \$(\".formtopregion\").hide();                                             
                           updatelink(ajusteDate(reservationville)); 
                           zoneIdMain = reservationville;      
\t\t        }
\t\t    });  
\t\t    return false;
\t\t});
\t});
        
        //click du bouton
        \$(function(){
            \$(\"select#formtopville \").change(function(){ 
               \$(\"#namecity\").attr('value', \$(\"#formtopville option:selected\").text().toUpperCase());                  
               updatelink(ajusteDate(\$(\"#formtopville\").val()));  
               zoneIdMain = \$(\"#formtopville\").val();
            });
\t});
\t\t
</script>";
    }

    public function getTemplateName()
    {
        return "MyAppGlobalBundle:Corpo_&_events:reservationregion.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 79,  280 => 64,  258 => 61,  251 => 58,  233 => 57,  227 => 54,  223 => 52,  215 => 48,  196 => 46,  192 => 44,  171 => 42,  167 => 40,  165 => 39,  161 => 37,  159 => 36,  155 => 35,  151 => 33,  144 => 30,  118 => 25,  115 => 24,  77 => 14,  59 => 12,  56 => 11,  25 => 5,  23 => 4,  138 => 33,  123 => 20,  94 => 14,  74 => 12,  46 => 7,  19 => 2,  218 => 49,  203 => 107,  182 => 97,  142 => 61,  102 => 25,  99 => 24,  97 => 23,  92 => 22,  90 => 21,  85 => 20,  83 => 19,  80 => 15,  35 => 6,  33 => 5,  21 => 3,  126 => 42,  110 => 33,  104 => 32,  91 => 20,  86 => 27,  82 => 26,  78 => 24,  76 => 16,  62 => 16,  58 => 12,  50 => 9,  43 => 9,  39 => 4,  30 => 5,  26 => 4,  22 => 3,  17 => 1,  639 => 163,  634 => 160,  631 => 159,  628 => 158,  613 => 155,  610 => 154,  604 => 152,  593 => 150,  591 => 149,  583 => 148,  580 => 147,  575 => 146,  573 => 145,  564 => 142,  551 => 141,  543 => 139,  538 => 138,  535 => 137,  532 => 136,  529 => 135,  514 => 132,  511 => 131,  505 => 129,  494 => 127,  492 => 126,  484 => 125,  481 => 124,  476 => 123,  474 => 122,  465 => 119,  452 => 118,  444 => 116,  439 => 115,  436 => 114,  434 => 113,  429 => 111,  424 => 110,  419 => 108,  413 => 105,  407 => 98,  393 => 12,  385 => 11,  380 => 169,  378 => 168,  372 => 164,  367 => 109,  365 => 108,  359 => 105,  356 => 104,  353 => 102,  350 => 101,  343 => 98,  340 => 96,  333 => 92,  325 => 90,  321 => 89,  316 => 88,  313 => 86,  311 => 85,  300 => 84,  293 => 69,  290 => 68,  287 => 175,  285 => 67,  277 => 63,  274 => 62,  272 => 61,  267 => 59,  262 => 56,  254 => 59,  247 => 51,  244 => 50,  237 => 48,  234 => 47,  231 => 46,  217 => 40,  209 => 108,  207 => 37,  188 => 36,  176 => 35,  169 => 33,  160 => 27,  157 => 26,  114 => 24,  71 => 11,  69 => 21,  65 => 9,  61 => 13,  55 => 14,  52 => 10,  49 => 12,  42 => 5,  36 => 8,  27 => 2,  24 => 1,  426 => 138,  423 => 137,  416 => 131,  411 => 129,  409 => 128,  406 => 127,  401 => 66,  392 => 120,  388 => 118,  382 => 114,  370 => 110,  363 => 111,  351 => 109,  345 => 108,  341 => 106,  329 => 91,  322 => 103,  309 => 101,  305 => 100,  301 => 98,  289 => 96,  282 => 95,  270 => 60,  264 => 57,  259 => 55,  249 => 82,  242 => 77,  236 => 76,  229 => 55,  225 => 42,  222 => 113,  216 => 65,  208 => 64,  201 => 62,  195 => 106,  189 => 43,  181 => 57,  174 => 55,  168 => 54,  162 => 28,  154 => 50,  147 => 48,  141 => 29,  135 => 44,  129 => 43,  122 => 27,  117 => 18,  111 => 32,  105 => 31,  98 => 16,  93 => 21,  87 => 18,  79 => 18,  72 => 16,  66 => 15,  60 => 12,  57 => 15,  54 => 10,  47 => 8,  44 => 8,  40 => 9,  38 => 7,  34 => 6,  29 => 7,);
    }
}

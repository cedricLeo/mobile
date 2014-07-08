<?php

/* MyAppGlobalBundle:Hebergement:suggestionColonneGauche.html.twig */
class __TwigTemplate_2869dd890bd5c2851a4686cc6c7528b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'suggestionsHotel' => array($this, 'block_suggestionsHotel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('suggestionsHotel', $context, $blocks);
        // line 303
        echo "
";
    }

    // line 1
    public function block_suggestionsHotel($context, array $blocks = array())
    {
        // line 2
        echo "<div class=\"suggestion \">
";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "clientAleatoire"), "categoriehebergementid"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 4
            echo "\t";
            if (((array_key_exists("valideSuggLeft1", $context) || array_key_exists("valideSuggLeft2", $context)) || array_key_exists("valideSuggLeft3", $context))) {
                // line 5
                echo "\t\t";
                if ((((!twig_test_empty($this->getContext($context, "valideSuggLeft1"))) || (!twig_test_empty($this->getContext($context, "valideSuggLeft2")))) || (!twig_test_empty($this->getContext($context, "valideSuggLeft3"))))) {
                    // line 6
                    echo "\t\t<h5>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("suggestion.hebergement"), "html", null, true);
                    echo "</h5>
\t\t";
                }
                // line 8
                echo "\t\t\t";
                // line 9
                echo "\t\t\t";
                if ((!twig_test_empty($this->getContext($context, "valideSuggLeft1")))) {
                    // line 10
                    echo "\t\t\t    ";
                    echo "               
\t\t\t\t<div>
\t\t\t\t    <h2>
\t\t\t\t    ";
                    // line 13
                    if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                        echo " 
\t\t\t\t    \t";
                        // line 14
                        if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                            // line 15
                            echo "                                            <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtyperegionfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "repertoirefr")), "region" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "displayregion1"), "regionid"), "repertoirefr")))), "html", null, true);
                            echo "\" title=\"Hôtels région ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "displayregion1"), "regionid"), "nomfr"), "html", null, true);
                            echo "\" >Hôtels ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "displayregion1"), "regionid"), "nomfr"), "html", null, true);
                            echo "</a>
                                        ";
                        }
                        // line 17
                        echo "\t\t\t\t    </h2>
\t\t\t\t         <ul>
\t\t\t\t         ";
                        // line 19
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "qcleft1"));
                        foreach ($context['_seq'] as $context["_key"] => $context["qc"]) {
                            echo "                                           
                                              <li><a href=\"";
                            // line 20
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "repertoirefr")))), "html", null, true);
                            echo "\" title=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "nomfr"), "html", null, true);
                            echo " région ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "regionid"), "nomfr"), "html", null, true);
                            echo "\" target=\"_blank\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "nomfr"), "html", null, true);
                            echo "</a><span> ";
                            if (($this->getAttribute((isset($context["qc"]) ? $context["qc"] : null), "tarifminbassessaison", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getContext($context, "qc"), "tarifminbassessaison"))))) {
                                echo " À partir de ";
                                echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getContext($context, "qc"), "tarifminbassesaison"), array("\$" => "")), "html", null, true);
                                echo "\$ ";
                            }
                            echo "</span></li>                                            
\t\t\t\t         ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qc'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 22
                        echo "\t\t\t\t         </ul>
\t\t\t\t         ";
                        // line 23
                        if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                            // line 24
                            echo "\t\t\t\t  \t     <h4>[<a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtyperegionfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "repertoirefr")), "region" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "displayregion1"), "regionid"), "repertoirefr")))), "html", null, true);
                            echo "\" title=\"Hôtels région ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "displayregion1"), "regionid"), "nomfr"), "html", null, true);
                            echo "\">Voir les hôtels de ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "displayregion1"), "regionid"), "nomfr"), "html", null, true);
                            echo "</a>]</h4>
                                         ";
                        }
                        // line 26
                        echo "\t\t\t  \t    ";
                    } else {
                        // line 27
                        echo "\t\t\t  \t    \t";
                        if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                            // line 28
                            echo "                                        <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtyperegionen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "repertoireen")), "region" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "displayregion1"), "regionid"), "repertoireen")))), "html", null, true);
                            echo "\" title=\"Region ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "displayregion1"), "regionid"), "nomen"), "html", null, true);
                            echo " hotels \" >Hotels ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "displayregion1"), "regionid"), "nomen"), "html", null, true);
                            echo "</a>
                                        ";
                        }
                        // line 30
                        echo "\t\t\t\t    </h2>
\t\t\t\t         <ul>
\t\t\t\t         ";
                        // line 32
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "qcleft1"));
                        foreach ($context['_seq'] as $context["_key"] => $context["qc"]) {
                            echo "                                            
                                              <li><a href=\"";
                            // line 33
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "repertoireen")))), "html", null, true);
                            echo "\" title=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "nomen"), "html", null, true);
                            echo " region ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "regionid"), "nomen"), "html", null, true);
                            echo "\" target=\"_blank\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "nomen"), "html", null, true);
                            echo "</a><span> ";
                            if (($this->getAttribute((isset($context["qc"]) ? $context["qc"] : null), "tarifminbassessaison", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getContext($context, "qc"), "tarifminbassessaison"))))) {
                                echo " From ";
                                echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getContext($context, "qc"), "tarifminbassesaison"), array("\$" => "")), "html", null, true);
                                echo "\$ ";
                            }
                            echo "</span></li>                                            
\t\t\t\t         ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qc'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 35
                        echo "\t\t\t\t         </ul>
\t\t\t\t        ";
                        // line 36
                        if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                            // line 37
                            echo "\t\t\t\t  \t\t<h4>[<a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtyperegionen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "repertoireen")), "region" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "displayregion1"), "regionid"), "repertoireen")))), "html", null, true);
                            echo "\" title=\"Hotels region ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "displayregion1"), "regionid"), "nomen"), "html", null, true);
                            echo " \">See hotels ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "displayregion1"), "regionid"), "nomen"), "html", null, true);
                            echo "</a>]</h4>
\t\t\t       \t\t";
                        }
                        // line 39
                        echo "                                   ";
                    }
                    // line 40
                    echo "\t\t\t\t</div>
                        ";
                }
                // line 42
                echo "\t\t\t";
                // line 43
                echo "\t\t\t";
                if ((!twig_test_empty($this->getContext($context, "valideSuggLeft2")))) {
                    // line 44
                    echo "                               <div>
                                   <h2>
                                    ";
                    // line 46
                    if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                        // line 47
                        echo "\t\t\t       \t\t";
                        if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                            // line 48
                            echo "\t\t\t\t     \t <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtyperegionfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "repertoirefr")), "region" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "displayregion2"), "regionid"), "repertoirefr")))), "html", null, true);
                            echo "\" title=\"Hôtels région ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "displayregion2"), "regionid"), "nomfr"), "html", null, true);
                            echo "\" >Hôtels  ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "displayregion2"), "regionid"), "nomfr"), "html", null, true);
                            echo "</a>
\t\t\t\t   \t\t";
                        }
                        // line 50
                        echo "\t\t\t\t   </h2>        
\t\t\t\t         <ul>
\t\t\t\t         ";
                        // line 52
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "qcleft2"));
                        foreach ($context['_seq'] as $context["_key"] => $context["qc"]) {
                            echo "                                           
                                              <li><a href=\"";
                            // line 53
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "repertoirefr")))), "html", null, true);
                            echo "\" title=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "nomfr"), "html", null, true);
                            echo " région ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "regionid"), "nomfr"), "html", null, true);
                            echo "\" target=\"_blank\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "nomfr"), "html", null, true);
                            echo "</a><span> ";
                            if (($this->getAttribute((isset($context["qc"]) ? $context["qc"] : null), "tarifminbassessaison", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getContext($context, "qc"), "tarifminbassessaison"))))) {
                                echo " À partir de ";
                                echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getContext($context, "qc"), "tarifminbassesaison"), array("\$" => "")), "html", null, true);
                                echo "\$ ";
                            }
                            echo "</span></li>                                            
\t\t\t\t         ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qc'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 55
                        echo "\t\t\t\t         </ul>
\t\t\t\t         ";
                        // line 56
                        if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                            // line 57
                            echo "\t\t\t\t \t\t <h4>[<a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtyperegionfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "repertoireen")), "region" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "displayregion2"), "regionid"), "repertoirefr")))), "html", null, true);
                            echo "\" title=\"Hôtels région ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "displayregion2"), "regionid"), "nomfr"), "html", null, true);
                            echo "\">Voir les hôtels de ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "displayregion2"), "regionid"), "nomfr"), "html", null, true);
                            echo "</a>]</h4>
\t\t\t  \t\t\t ";
                        }
                        // line 59
                        echo "\t\t\t\t    ";
                    } else {
                        // line 60
                        echo "\t\t\t\t    \t";
                        if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                            // line 61
                            echo "\t\t\t      \t\t<a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtyperegionen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "repertoireen")), "region" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "displayregion2"), "regionid"), "repertoireen")))), "html", null, true);
                            echo "\" title=\"Region ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "displayregion2"), "regionid"), "nomen"), "html", null, true);
                            echo " hotels\" >Hotels  ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "displayregion2"), "regionid"), "nomen"), "html", null, true);
                            echo "</a>
\t\t\t\t  \t\t";
                        }
                        // line 63
                        echo "\t\t\t\t   </h2>        
\t\t\t\t         <ul>
\t\t\t\t         ";
                        // line 65
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "qcleft2"));
                        foreach ($context['_seq'] as $context["_key"] => $context["qc"]) {
                            echo "                                            
                                              <li><a href=\"";
                            // line 66
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "repertoireen")))), "html", null, true);
                            echo "\" title=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "nomen"), "html", null, true);
                            echo " region ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "regionid"), "nomen"), "html", null, true);
                            echo "\" target=\"_blank\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "nomen"), "html", null, true);
                            echo "</a><span> ";
                            if (($this->getAttribute((isset($context["qc"]) ? $context["qc"] : null), "tarifminbassessaison", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getContext($context, "qc"), "tarifminbassessaison"))))) {
                                echo " From ";
                                echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getContext($context, "qc"), "tarifminbassesaison"), array("\$" => "")), "html", null, true);
                                echo "\$ ";
                            }
                            echo "</span></li>                                            
\t\t\t\t         ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qc'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 68
                        echo "\t\t\t\t         </ul>
\t\t\t\t         ";
                        // line 69
                        if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                            // line 70
                            echo "\t\t\t\t   \t\t <h4>[<a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtyperegionen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "repertoireen")), "region" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "displayregion2"), "regionid"), "repertoireen")))), "html", null, true);
                            echo "\" title=\"Hotels region ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "displayregion2"), "regionid"), "nomen"), "html", null, true);
                            echo "\">See hotels ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "displayregion2"), "regionid"), "nomen"), "html", null, true);
                            echo "</a>]</h4>
\t\t\t\t   \t\t ";
                        }
                        // line 72
                        echo "\t\t\t\t   ";
                    }
                    // line 73
                    echo "\t\t\t\t </div>
\t\t\t";
                }
                // line 74
                echo "  
\t\t\t";
                // line 75
                echo " 
\t\t\t";
                // line 76
                if ((!twig_test_empty($this->getContext($context, "valideSuggLeft3")))) {
                    // line 77
                    echo "\t\t\t\t <div>
                                    <h2>  
\t\t\t         \t";
                    // line 79
                    if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                        // line 80
                        echo "\t\t\t         \t\t";
                        if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                            // line 81
                            echo "\t\t\t\t       \t\t<a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtyperegionfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "repertoirefr")), "region" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "displayregion3"), "regionid"), "repertoirefr")))), "html", null, true);
                            echo "\" title=\"Hôtels région ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "displayregion3"), "regionid"), "nomfr"), "html", null, true);
                            echo "\" >Hôtels ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "displayregion3"), "regionid"), "nomfr"), "html", null, true);
                            echo "</a>
\t\t\t        \t\t";
                        }
                        // line 83
                        echo "                                     </h2>
                                            <ul>
                                            ";
                        // line 85
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "qcleft3"));
                        foreach ($context['_seq'] as $context["_key"] => $context["qc"]) {
                            echo "                                                  
                                                 <li><a href=\"";
                            // line 86
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "repertoirefr")))), "html", null, true);
                            echo "\" title=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "nomfr"), "html", null, true);
                            echo " Région ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "regionid"), "nomfr"), "html", null, true);
                            echo "\" target=\"_blank\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "nomfr"), "html", null, true);
                            echo "</a><span> ";
                            if (($this->getAttribute((isset($context["qc"]) ? $context["qc"] : null), "tarifminbassessaison", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getContext($context, "qc"), "tarifminbassessaison"))))) {
                                echo " À partir de ";
                                echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getContext($context, "qc"), "tarifminbassesaison"), array("\$" => "")), "html", null, true);
                                echo "\$ ";
                            }
                            echo "</span></li>                                                   
                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qc'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 88
                        echo "                                            </ul>
\t\t\t\t\t  \t<h4>[<a href=\"";
                        // line 89
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtyperegionfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomfr")), "region" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "displayregion3"), "regionid"), "nomfr")))), "html", null, true);
                        echo "\" title=\"Hôtels région ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "displayregion3"), "regionid"), "nomfr"), "html", null, true);
                        echo "\">Voir les hôtels de ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "displayregion3"), "regionid"), "nomfr"), "html", null, true);
                        echo "</a>]</h4>
\t\t\t\t\t   ";
                    } else {
                        // line 91
                        echo "\t\t\t\t\t   \t\t";
                        if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                            // line 92
                            echo "\t\t\t\t\t       \t<a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtyperegionen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "repertoireen")), "region" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "displayregion3"), "regionid"), "repertoireen")))), "html", null, true);
                            echo "\" title=\"Region ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "displayregion3"), "regionid"), "nomen"), "html", null, true);
                            echo " hotels\" >Hotels ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "displayregion3"), "regionid"), "nomen"), "html", null, true);
                            echo "</a>
\t\t\t\t\t \t\t";
                        }
                        // line 94
                        echo "\t\t\t\t\t </h2>
                                            <ul>
                                            ";
                        // line 96
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "qcleft3"));
                        foreach ($context['_seq'] as $context["_key"] => $context["qc"]) {
                            echo "                                               
                                                 <li><a href=\"";
                            // line 97
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "repertoireen")))), "html", null, true);
                            echo "\" title=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "nomen"), "html", null, true);
                            echo " region ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "regionid"), "nomen"), "html", null, true);
                            echo "\" target=\"_blank\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "nomen"), "html", null, true);
                            echo "</a><span> ";
                            if (($this->getAttribute((isset($context["qc"]) ? $context["qc"] : null), "tarifminbassessaison", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getContext($context, "qc"), "tarifminbassessaison"))))) {
                                echo " From ";
                                echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getContext($context, "qc"), "tarifminbassessaison"), array("\$" => "")), "html", null, true);
                                echo "\$ ";
                            }
                            echo " </span></li>                                         
                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qc'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 99
                        echo "                                            </ul>
\t\t\t\t\t         ";
                        // line 100
                        if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                            // line 101
                            echo "\t\t\t\t\t   \t     <h4>[<a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtyperegionen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomen")), "region" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "displayregion3"), "regionid"), "repertoireen")))), "html", null, true);
                            echo "\" title=\"Hotels region ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "displayregion3"), "regionid"), "nomen"), "html", null, true);
                            echo "\">See hotels ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "displayregion3"), "regionid"), "nomen"), "html", null, true);
                            echo "</a>]</h4>
\t\t\t\t\t   \t\t ";
                        }
                        // line 103
                        echo "\t\t\t\t\t  ";
                    }
                    // line 104
                    echo "\t\t\t\t </div>
\t\t    ";
                }
                // line 106
                echo "\t";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 108
        echo "\t\t";
        // line 109
        echo "\t\t";
        if ((((array_key_exists("valideSuggLeft1H", $context) && (!twig_test_empty($this->getContext($context, "valideSuggLeft1H")))) || (array_key_exists("valideSuggLeft2H", $context) && (!twig_test_empty($this->getContext($context, "valideSuggLeft2H"))))) || (array_key_exists("valideSuggLeft3H", $context) && (!twig_test_empty($this->getContext($context, "valideSuggLeft3H")))))) {
            // line 110
            echo "\t\t<h5>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("suggestion.hebergement"), "html", null, true);
            echo "</h5>
\t\t\t";
            // line 111
            if ((!twig_test_empty($this->getContext($context, "valideSuggLeft1H")))) {
                // line 112
                echo "\t\t\t    ";
                echo "\t    
\t\t\t\t<div>
\t\t\t\t    <h2>
\t\t\t\t    ";
                // line 115
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    echo " 
\t \t\t\t\t\t\t";
                    // line 116
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "qcleft1"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
                        // line 117
                        echo "\t\t \t\t\t\t\t\t";
                        if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                            // line 118
                            echo "\t\t\t\t\t\t         \t";
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "q"));
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
                            foreach ($context['_seq'] as $context["_key"] => $context["qc"]) {
                                // line 119
                                echo "\t\t\t\t\t\t\t    \t\t";
                                if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                                    // line 120
                                    echo "\t\t\t\t\t\t\t \t\t\t\t<a href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "regionid"), "repertoirefr")))), "html", null, true);
                                    echo "\" title=\"Hôtels région ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "regionid"), "nomfr"), "html", null, true);
                                    echo "\" >Hôtels ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "regionid"), "nomfr"), "html", null, true);
                                    echo "</a>
\t\t\t\t\t\t\t    \t\t";
                                }
                                // line 122
                                echo "\t\t\t\t\t\t\t    \t";
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
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qc'], $context['_parent'], $context['loop']);
                            $context = array_merge($_parent, array_intersect_key($context, $_parent));
                            // line 123
                            echo "\t\t\t\t\t\t\t    ";
                        }
                        // line 124
                        echo "\t\t\t\t\t    \t";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 125
                    echo "\t\t\t\t    </h2>
\t\t\t\t         <ul>
\t\t\t\t         ";
                    // line 127
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "qcleft1"));
                    foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
                        // line 128
                        echo "\t\t\t\t         \t";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "q"));
                        foreach ($context['_seq'] as $context["_key"] => $context["qc"]) {
                            // line 129
                            echo "\t\t\t\t           \t\t<li><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "repertoirefr")))), "html", null, true);
                            echo "\" title=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "nomfr"), "html", null, true);
                            echo " région ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "regionid"), "nomfr"), "html", null, true);
                            echo "\" target=\"_blank\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "nomfr"), "html", null, true);
                            echo "</a><span> ";
                            if (($this->getAttribute((isset($context["qc"]) ? $context["qc"] : null), "tarifminbassessaison", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getContext($context, "qc"), "tarifminbassessaison"))))) {
                                echo " À partir de ";
                                echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getContext($context, "qc"), "tarifminbassesaison"), array("\$" => "")), "html", null, true);
                                echo "\$ ";
                            }
                            echo " </span></li>
\t\t\t\t         \t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qc'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 131
                        echo "\t\t\t\t         ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 132
                    echo "\t\t\t\t         </ul>
\t\t\t\t\t\t";
                    // line 133
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "qcleft1"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
                        // line 134
                        echo "\t\t\t\t\t\t\t";
                        if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                            // line 135
                            echo "\t\t\t\t\t         \t";
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "q"));
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
                            foreach ($context['_seq'] as $context["_key"] => $context["qc"]) {
                                // line 136
                                echo "\t\t\t\t\t\t         \t";
                                if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                                    // line 137
                                    echo "\t\t\t\t\t\t  \t    \t\t<h4>[<a href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "regionid"), "repertoirefr")))), "html", null, true);
                                    echo "\" title=\"Hôtels région ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "regionid"), "nomfr"), "html", null, true);
                                    echo "\">Voir les hôtels de ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "regionid"), "nomfr"), "html", null, true);
                                    echo "</a>]</h4>
\t\t\t\t\t  \t    \t\t";
                                }
                                // line 139
                                echo "\t\t\t\t\t  \t    \t";
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
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qc'], $context['_parent'], $context['loop']);
                            $context = array_merge($_parent, array_intersect_key($context, $_parent));
                            // line 140
                            echo "\t\t\t\t\t  \t    ";
                        }
                        // line 141
                        echo "\t\t\t\t         ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 142
                    echo "\t\t\t\t    ";
                } else {
                    // line 143
                    echo "\t\t\t\t\t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "qcleft1"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
                        // line 144
                        echo "\t\t\t\t\t\t\t";
                        if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                            // line 145
                            echo "\t\t\t\t\t         \t";
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "q"));
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
                            foreach ($context['_seq'] as $context["_key"] => $context["qc"]) {
                                // line 146
                                echo "\t\t\t\t\t\t    \t\t";
                                if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                                    // line 147
                                    echo "\t\t\t\t\t \t\t\t\t\t<a href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "regionid"), "repertoireen")))), "html", null, true);
                                    echo "\" title=\"Region ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "regionid"), "nomen"), "html", null, true);
                                    echo " hotels \" >Hotels ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "regionid"), "nomen"), "html", null, true);
                                    echo "</a>
\t\t\t\t\t\t   \t\t\t";
                                }
                                // line 149
                                echo "\t\t\t\t\t\t   \t\t";
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
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qc'], $context['_parent'], $context['loop']);
                            $context = array_merge($_parent, array_intersect_key($context, $_parent));
                            // line 150
                            echo "\t\t\t\t\t\t   \t";
                        }
                        // line 151
                        echo "\t\t\t\t    \t";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 152
                    echo "\t\t\t\t    </h2>
\t\t\t\t         <ul>
\t\t\t\t         ";
                    // line 154
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "qcleft1"));
                    foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
                        // line 155
                        echo "\t\t\t\t         \t";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "q"));
                        foreach ($context['_seq'] as $context["_key"] => $context["qc"]) {
                            // line 156
                            echo "\t\t\t\t           \t\t<li><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "repertoireen")))), "html", null, true);
                            echo "\" title=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "nomen"), "html", null, true);
                            echo " region ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "regionid"), "nomen"), "html", null, true);
                            echo "\" target=\"_blank\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "nomen"), "html", null, true);
                            echo "</a><span> ";
                            if (($this->getAttribute((isset($context["qc"]) ? $context["qc"] : null), "tarifminbassessaison", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getContext($context, "qc"), "tarifminbassessaison"))))) {
                                echo " From ";
                                echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getContext($context, "qc"), "tarifminbassesaison"), array("\$" => "")), "html", null, true);
                                echo "\$ ";
                            }
                            echo " </span></li>
\t\t\t\t         \t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qc'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 158
                        echo "\t\t\t\t         ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 159
                    echo "\t\t\t\t         </ul>
\t\t\t\t\t\t";
                    // line 160
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "qcleft1"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
                        // line 161
                        echo "\t\t\t\t\t\t\t";
                        if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                            // line 162
                            echo "\t\t\t\t\t         \t";
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "q"));
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
                            foreach ($context['_seq'] as $context["_key"] => $context["qc"]) {
                                // line 163
                                echo "\t\t\t\t\t\t         \t";
                                if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                                    // line 164
                                    echo "\t\t\t\t\t\t  \t\t\t\t<h4>[<a href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "regionid"), "repertoireen")))), "html", null, true);
                                    echo "\" title=\"Hotels region ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "regionid"), "nomen"), "html", null, true);
                                    echo " \">See hotels ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "regionid"), "nomen"), "html", null, true);
                                    echo "</a>]</h4>
\t\t\t\t\t       \t\t\t";
                                }
                                // line 166
                                echo "\t\t\t\t\t       \t\t";
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
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qc'], $context['_parent'], $context['loop']);
                            $context = array_merge($_parent, array_intersect_key($context, $_parent));
                            // line 167
                            echo "\t\t\t\t\t       \t";
                        }
                        // line 168
                        echo "\t\t\t\t         ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    echo " 
\t\t\t\t   ";
                }
                // line 170
                echo "\t\t\t\t</div>
\t\t    ";
            }
            // line 172
            echo "\t\t\t";
            // line 173
            echo "\t\t\t";
            if ((!twig_test_empty($this->getContext($context, "valideSuggLeft2H")))) {
                // line 174
                echo "\t\t\t\t<div>
\t\t\t       <h2>
\t\t\t       \t";
                // line 176
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    // line 177
                    echo "\t\t\t\t\t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "qcleft2"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
                        // line 178
                        echo "\t\t\t\t\t\t\t";
                        if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                            // line 179
                            echo "\t\t\t\t\t         \t";
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "q"));
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
                            foreach ($context['_seq'] as $context["_key"] => $context["qc"]) {
                                // line 180
                                echo "\t\t\t\t\t       \t\t\t";
                                if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                                    // line 181
                                    echo "\t\t\t\t\t\t     \t \t\t<a href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "regionid"), "repertoirefr")))), "html", null, true);
                                    echo "\" title=\"Hôtels région ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "regionid"), "nomfr"), "html", null, true);
                                    echo "\" >Hôtels  ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "regionid"), "nomfr"), "html", null, true);
                                    echo "</a>
\t\t\t\t\t\t  \t\t\t";
                                }
                                // line 183
                                echo "\t\t\t\t\t\t  \t\t";
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
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qc'], $context['_parent'], $context['loop']);
                            $context = array_merge($_parent, array_intersect_key($context, $_parent));
                            // line 184
                            echo "\t\t\t\t\t\t  \t";
                        }
                        // line 185
                        echo "\t\t\t       \t\t";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 186
                    echo "\t\t\t\t   </h2>        
\t\t\t\t         <ul>
\t\t\t\t         ";
                    // line 188
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "qcleft2"));
                    foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
                        // line 189
                        echo "\t\t\t\t         \t";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "q"));
                        foreach ($context['_seq'] as $context["_key"] => $context["qc"]) {
                            // line 190
                            echo "\t\t\t\t           \t\t<li><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "repertoirefr")))), "html", null, true);
                            echo "\" title=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "nomfr"), "html", null, true);
                            echo " région ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "regionid"), "nomfr"), "html", null, true);
                            echo "\" target=\"_blank\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "nomfr"), "html", null, true);
                            echo "</a><span> ";
                            if (($this->getAttribute((isset($context["qc"]) ? $context["qc"] : null), "tarifminbassessaison", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getContext($context, "qc"), "tarifminbassessaison"))))) {
                                echo " À partir de ";
                                echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getContext($context, "qc"), "tarifminbassesaison"), array("\$" => "")), "html", null, true);
                                echo "\$ ";
                            }
                            echo "</span></li>
\t\t\t\t         \t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qc'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 192
                        echo "\t\t\t\t         ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 193
                    echo "\t\t\t\t         </ul>
\t\t\t\t         ";
                    // line 194
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "qcleft2"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
                        // line 195
                        echo "\t\t\t\t         \t";
                        if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                            // line 196
                            echo "\t\t\t\t\t         \t";
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "q"));
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
                            foreach ($context['_seq'] as $context["_key"] => $context["qc"]) {
                                // line 197
                                echo "\t\t\t\t\t\t         \t";
                                if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                                    // line 198
                                    echo "\t\t\t\t\t\t \t\t \t\t<h4>[<a href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "regionid"), "repertoirefr")))), "html", null, true);
                                    echo "\" title=\"Hôtels région ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "regionid"), "nomfr"), "html", null, true);
                                    echo "\">Voir les hôtels de ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "regionid"), "nomfr"), "html", null, true);
                                    echo "</a>]</h4>
\t\t\t\t\t  \t\t\t\t";
                                }
                                // line 200
                                echo "\t\t\t\t\t  \t\t\t";
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
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qc'], $context['_parent'], $context['loop']);
                            $context = array_merge($_parent, array_intersect_key($context, $_parent));
                            // line 201
                            echo "\t\t\t\t\t  \t\t";
                        }
                        // line 202
                        echo "\t\t\t\t         ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 203
                    echo "\t\t\t\t   ";
                } else {
                    // line 204
                    echo "\t\t\t\t\t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "qcleft2"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
                        // line 205
                        echo "\t\t\t\t\t\t\t";
                        if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                            // line 206
                            echo "\t\t\t\t\t         \t";
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "q"));
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
                            foreach ($context['_seq'] as $context["_key"] => $context["qc"]) {
                                // line 207
                                echo "\t\t\t\t\t\t   \t\t\t";
                                if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                                    // line 208
                                    echo "\t\t\t\t\t      \t\t\t\t<a href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "regionid"), "repertoireen")))), "html", null, true);
                                    echo "\" title=\"Region ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "regionid"), "nomen"), "html", null, true);
                                    echo " hotels\" >Hotels  ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "regionid"), "nomen"), "html", null, true);
                                    echo "</a>
\t\t\t\t\t\t\t\t\t";
                                }
                                // line 210
                                echo "\t\t\t\t\t\t\t\t";
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
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qc'], $context['_parent'], $context['loop']);
                            $context = array_merge($_parent, array_intersect_key($context, $_parent));
                            // line 211
                            echo "\t\t\t\t\t\t\t";
                        }
                        // line 212
                        echo "\t\t\t\t   \t\t";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 213
                    echo "\t\t\t      \t</h2>        
\t\t\t\t         <ul>
\t\t\t\t         ";
                    // line 215
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "qcleft2"));
                    foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
                        // line 216
                        echo "\t\t\t\t         \t";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "q"));
                        foreach ($context['_seq'] as $context["_key"] => $context["qc"]) {
                            // line 217
                            echo "\t\t\t\t           \t\t<li><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "repertoireen")))), "html", null, true);
                            echo "\" title=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "nomen"), "html", null, true);
                            echo " region ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "regionid"), "nomen"), "html", null, true);
                            echo "\" target=\"_blank\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "nomen"), "html", null, true);
                            echo "</a><span> ";
                            if (($this->getAttribute((isset($context["qc"]) ? $context["qc"] : null), "tarifminbassessaison", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getContext($context, "qc"), "tarifminbassessaison"))))) {
                                echo " From ";
                                echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getContext($context, "qc"), "tarifminbassesaison"), array("\$" => "")), "html", null, true);
                                echo "\$ ";
                            }
                            echo " </span></li>
\t\t\t\t         \t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qc'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 219
                        echo "\t\t\t\t         ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 220
                    echo "\t\t\t\t         </ul>
\t\t\t\t\t\t";
                    // line 221
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "qcleft2"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
                        // line 222
                        echo "\t\t\t\t\t\t\t";
                        if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                            // line 223
                            echo "\t\t\t\t\t         \t";
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "q"));
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
                            foreach ($context['_seq'] as $context["_key"] => $context["qc"]) {
                                // line 224
                                echo "\t\t\t\t\t\t     \t\t";
                                if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                                    // line 225
                                    echo "\t\t\t\t\t\t   \t\t \t\t<h4>[<a href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "regionid"), "repertoireen")))), "html", null, true);
                                    echo "\" title=\"Hotels region ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "regionid"), "nomen"), "html", null, true);
                                    echo "\">See hotels ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "regionid"), "nomen"), "html", null, true);
                                    echo "</a>]</h4>
\t\t\t\t\t\t   \t\t\t";
                                }
                                // line 227
                                echo "\t\t\t\t\t\t   \t\t";
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
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qc'], $context['_parent'], $context['loop']);
                            $context = array_merge($_parent, array_intersect_key($context, $_parent));
                            // line 228
                            echo "\t\t\t\t\t\t   \t";
                        }
                        // line 229
                        echo "\t\t\t\t     \t";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 230
                    echo "\t\t\t\t   ";
                }
                // line 231
                echo "\t\t\t\t </div>
\t\t\t";
            }
            // line 232
            echo "  
\t\t\t";
            // line 233
            echo " 
\t\t\t";
            // line 234
            if ((!twig_test_empty($this->getContext($context, "valideSuggLeft3H")))) {
                // line 235
                echo "\t\t\t\t  <div>
\t\t\t         <h2>  
\t\t\t         \t";
                // line 237
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    // line 238
                    echo "\t\t\t\t\t\t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "qcleft3"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
                        // line 239
                        echo "\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                            // line 240
                            echo "\t\t\t\t\t\t         \t";
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "q"));
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
                            foreach ($context['_seq'] as $context["_key"] => $context["qc"]) {
                                // line 241
                                echo "\t\t\t\t\t         \t\t\t";
                                if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                                    // line 242
                                    echo "\t\t\t\t\t\t       \t\t\t\t<a href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "regionid"), "repertoirefr")))), "html", null, true);
                                    echo "\" title=\"Hôtels région ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "regionid"), "nomfr"), "html", null, true);
                                    echo "\" >Hôtels ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "regionid"), "nomfr"), "html", null, true);
                                    echo "</a>
\t\t\t\t\t         \t\t\t";
                                }
                                // line 244
                                echo "\t\t\t\t\t         \t\t";
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
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qc'], $context['_parent'], $context['loop']);
                            $context = array_merge($_parent, array_intersect_key($context, $_parent));
                            // line 245
                            echo "\t\t\t\t\t         \t";
                        }
                        // line 246
                        echo "\t\t\t         \t\t";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 247
                    echo "\t\t\t         </h2>
\t\t\t\t\t         <ul>
\t\t\t\t\t         ";
                    // line 249
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "qcleft3"));
                    foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
                        // line 250
                        echo "\t\t\t\t\t         \t";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "q"));
                        foreach ($context['_seq'] as $context["_key"] => $context["qc"]) {
                            // line 251
                            echo "\t\t\t\t\t           \t\t<li><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "repertoirefr")))), "html", null, true);
                            echo "\" title=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "nomfr"), "html", null, true);
                            echo " Région ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "regionid"), "nomfr"), "html", null, true);
                            echo "\" target=\"_blank\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "nomfr"), "html", null, true);
                            echo "</a><span>";
                            if (($this->getAttribute((isset($context["qc"]) ? $context["qc"] : null), "tarifminbassessaison", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getContext($context, "qc"), "tarifminbassesaison"))))) {
                                echo " À partir de ";
                                echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getContext($context, "qc"), "tarifminbassesaison"), array("\$" => "")), "html", null, true);
                                echo "\$ ";
                            }
                            echo "</span></li>
\t\t\t\t\t         \t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qc'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 253
                        echo "\t\t\t\t\t         ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 254
                    echo "\t\t\t\t\t         </ul>
\t\t\t\t\t\t\t\t";
                    // line 255
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "qcleft3"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
                        // line 256
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                            // line 257
                            echo "\t\t\t\t\t\t         \t\t";
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "q"));
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
                            foreach ($context['_seq'] as $context["_key"] => $context["qc"]) {
                                // line 258
                                echo "\t\t\t\t\t\t\t\t         \t";
                                if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                                    // line 259
                                    echo "\t\t\t\t\t\t\t\t  \t\t \t\t<h4>[<a href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "regionid"), "repertoirefr")))), "html", null, true);
                                    echo "\" title=\"Hôtels région ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "regionid"), "nomfr"), "html", null, true);
                                    echo "\">Voir les hôtels de ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "regionid"), "nomfr"), "html", null, true);
                                    echo "</a>]</h4>
\t\t\t\t\t\t\t\t   \t\t\t";
                                }
                                // line 261
                                echo "\t\t\t\t\t\t\t\t   \t\t";
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
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qc'], $context['_parent'], $context['loop']);
                            $context = array_merge($_parent, array_intersect_key($context, $_parent));
                            // line 262
                            echo "\t\t\t\t\t\t\t\t   \t";
                        }
                        // line 263
                        echo "\t\t\t\t\t         ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 264
                    echo "\t\t\t\t\t    ";
                } else {
                    // line 265
                    echo "\t\t\t\t\t\t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "qcleft3"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
                        // line 266
                        echo "\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                            // line 267
                            echo "\t\t\t\t\t\t         \t";
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "q"));
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
                            foreach ($context['_seq'] as $context["_key"] => $context["qc"]) {
                                // line 268
                                echo "\t\t\t\t\t\t\t    \t\t";
                                if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                                    // line 269
                                    echo "\t\t\t\t\t\t\t       \t\t\t<a href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "regionid"), "repertoireen")))), "html", null, true);
                                    echo "\" title=\"Region ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "regionid"), "nomen"), "html", null, true);
                                    echo " hotels\" >Hotels ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "regionid"), "nomen"), "html", null, true);
                                    echo "</a>
\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 271
                                echo "\t\t\t\t\t\t\t\t\t";
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
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qc'], $context['_parent'], $context['loop']);
                            $context = array_merge($_parent, array_intersect_key($context, $_parent));
                            // line 272
                            echo "\t\t\t\t\t\t\t\t";
                        }
                        // line 273
                        echo "\t\t\t\t\t    \t";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 274
                    echo "\t\t\t\t\t </h2>
\t\t\t\t\t         <ul>
\t\t\t\t\t         ";
                    // line 276
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "qcleft3"));
                    foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
                        // line 277
                        echo "\t\t\t\t\t         \t";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "q"));
                        foreach ($context['_seq'] as $context["_key"] => $context["qc"]) {
                            // line 278
                            echo "\t\t\t\t\t           \t\t<li><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "repertoireen")))), "html", null, true);
                            echo "\" title=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "nomen"), "html", null, true);
                            echo " region ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "regionid"), "nomen"), "html", null, true);
                            echo "\" target=\"_blank\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "nomen"), "html", null, true);
                            echo "</a><span> ";
                            if (($this->getAttribute((isset($context["qc"]) ? $context["qc"] : null), "tarifminbassessaison", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getContext($context, "qc"), "tarifminbassessaison"))))) {
                                echo " From ";
                                echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getContext($context, "qc"), "tarifminbassessaison"), array("\$" => "")), "html", null, true);
                                echo "\$ ";
                            }
                            echo "</span></li>
\t\t\t\t\t         \t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qc'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 280
                        echo "\t\t\t\t\t         ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 281
                    echo "\t\t\t\t\t         </ul>
\t\t\t\t\t        ";
                    // line 282
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "qcleft3"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
                        // line 283
                        echo "\t\t\t\t\t        \t";
                        if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                            // line 284
                            echo "\t\t\t\t\t\t         \t";
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "q"));
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
                            foreach ($context['_seq'] as $context["_key"] => $context["qc"]) {
                                // line 285
                                echo "\t\t\t\t\t\t\t         \t";
                                if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                                    // line 286
                                    echo "\t\t\t\t\t\t\t   \t     \t\t<h4>[<a href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "regionid"), "repertoireen")))), "html", null, true);
                                    echo "\" title=\"Hotels region ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "regionid"), "nomen"), "html", null, true);
                                    echo "\">See hotels ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "qc"), "hebergement"), "regionid"), "nomen"), "html", null, true);
                                    echo "</a>]</h4>
\t\t\t\t\t\t\t  \t\t\t";
                                }
                                // line 288
                                echo "\t\t\t\t\t\t\t  \t\t";
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
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qc'], $context['_parent'], $context['loop']);
                            $context = array_merge($_parent, array_intersect_key($context, $_parent));
                            // line 289
                            echo "\t\t\t\t\t\t\t  \t";
                        }
                        // line 290
                        echo "\t\t\t\t\t        ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    echo " 
\t\t\t\t\t  ";
                }
                // line 292
                echo "\t\t\t\t  </div>
\t\t    ";
            }
            // line 294
            echo "\t\t";
        }
        // line 295
        echo "\t    ";
        // line 296
        echo "\t\t<div id=\"zone_02\" class=\"bigBox\">
\t\t\t<script type='text/javascript'>
\t\t\t\tgoogletag.cmd.push(function() { googletag.display('zone_02'); });
\t\t\t</script>
\t\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "MyAppGlobalBundle:Hebergement:suggestionColonneGauche.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1839 => 296,  1834 => 294,  1830 => 292,  1796 => 288,  1786 => 286,  1783 => 285,  1765 => 284,  1762 => 283,  1745 => 282,  1742 => 281,  1713 => 278,  1708 => 277,  1704 => 276,  1683 => 272,  1669 => 271,  1659 => 269,  1656 => 268,  1638 => 267,  1635 => 266,  1617 => 265,  1614 => 264,  1600 => 263,  1597 => 262,  1583 => 261,  1573 => 259,  1570 => 258,  1532 => 255,  1529 => 254,  1523 => 253,  1500 => 251,  1487 => 247,  1473 => 246,  1470 => 245,  1446 => 242,  1443 => 241,  1425 => 240,  1422 => 239,  1404 => 238,  1402 => 237,  1398 => 235,  1396 => 234,  1393 => 233,  1390 => 232,  1386 => 231,  1383 => 230,  1369 => 229,  1366 => 228,  1352 => 227,  1342 => 225,  1339 => 224,  1321 => 223,  1318 => 222,  1301 => 221,  1298 => 220,  1292 => 219,  1269 => 217,  1260 => 215,  1256 => 213,  1242 => 212,  1239 => 211,  1225 => 210,  1215 => 208,  1212 => 207,  1194 => 206,  1191 => 205,  1173 => 204,  1170 => 203,  1156 => 202,  1153 => 201,  1139 => 200,  1126 => 197,  1108 => 196,  1105 => 195,  1088 => 194,  1085 => 193,  1079 => 192,  1056 => 190,  1051 => 189,  1047 => 188,  1029 => 185,  1026 => 184,  1012 => 183,  1002 => 181,  999 => 180,  981 => 179,  978 => 178,  960 => 177,  958 => 176,  954 => 174,  951 => 173,  949 => 172,  945 => 170,  928 => 168,  911 => 166,  901 => 164,  898 => 163,  880 => 162,  877 => 161,  860 => 160,  857 => 159,  828 => 156,  815 => 152,  801 => 151,  798 => 150,  774 => 147,  771 => 146,  753 => 145,  750 => 144,  732 => 143,  729 => 142,  715 => 141,  712 => 140,  698 => 139,  688 => 137,  685 => 136,  667 => 135,  664 => 134,  647 => 133,  644 => 132,  638 => 131,  615 => 129,  610 => 128,  606 => 127,  602 => 125,  588 => 124,  585 => 123,  571 => 122,  561 => 120,  558 => 119,  540 => 118,  537 => 117,  520 => 116,  516 => 115,  510 => 112,  508 => 111,  503 => 110,  500 => 109,  498 => 108,  483 => 106,  479 => 104,  476 => 103,  466 => 101,  464 => 100,  461 => 99,  439 => 97,  433 => 96,  429 => 94,  419 => 92,  416 => 91,  407 => 89,  404 => 88,  382 => 86,  376 => 85,  372 => 83,  362 => 81,  359 => 80,  357 => 79,  353 => 77,  348 => 75,  345 => 74,  341 => 73,  338 => 72,  328 => 70,  326 => 69,  323 => 68,  301 => 66,  295 => 65,  291 => 63,  281 => 61,  278 => 60,  275 => 59,  263 => 56,  260 => 55,  238 => 53,  232 => 52,  228 => 50,  218 => 48,  215 => 47,  213 => 46,  209 => 44,  204 => 42,  200 => 40,  197 => 39,  187 => 37,  185 => 36,  182 => 35,  160 => 33,  154 => 32,  140 => 28,  124 => 24,  122 => 23,  119 => 22,  97 => 20,  91 => 19,  87 => 17,  77 => 15,  75 => 14,  71 => 13,  62 => 9,  60 => 8,  54 => 6,  51 => 5,  48 => 4,  31 => 3,  28 => 2,  25 => 1,  20 => 303,  18 => 1,  3097 => 558,  3094 => 557,  3092 => 556,  3089 => 555,  3087 => 554,  3084 => 553,  3078 => 549,  3075 => 548,  3069 => 547,  3059 => 544,  3049 => 543,  3045 => 542,  3035 => 541,  3032 => 540,  3020 => 538,  3009 => 536,  3007 => 535,  2998 => 534,  2995 => 533,  2990 => 532,  2988 => 531,  2982 => 530,  2972 => 527,  2962 => 526,  2958 => 525,  2948 => 524,  2945 => 523,  2933 => 521,  2922 => 519,  2920 => 518,  2911 => 517,  2908 => 516,  2903 => 515,  2901 => 514,  2895 => 513,  2885 => 510,  2875 => 509,  2871 => 508,  2861 => 507,  2858 => 506,  2846 => 504,  2835 => 502,  2833 => 501,  2824 => 500,  2821 => 499,  2816 => 498,  2814 => 497,  2808 => 496,  2798 => 493,  2788 => 492,  2784 => 491,  2774 => 490,  2771 => 489,  2759 => 487,  2748 => 485,  2746 => 484,  2737 => 483,  2734 => 482,  2729 => 481,  2727 => 480,  2721 => 479,  2711 => 476,  2701 => 475,  2697 => 474,  2687 => 473,  2684 => 472,  2672 => 470,  2661 => 468,  2659 => 467,  2650 => 466,  2647 => 465,  2642 => 464,  2640 => 463,  2634 => 462,  2624 => 459,  2614 => 458,  2610 => 457,  2600 => 456,  2597 => 455,  2585 => 453,  2574 => 451,  2572 => 450,  2563 => 449,  2560 => 448,  2555 => 447,  2553 => 446,  2547 => 445,  2537 => 442,  2527 => 441,  2523 => 440,  2513 => 439,  2510 => 438,  2498 => 436,  2487 => 434,  2485 => 433,  2476 => 432,  2473 => 431,  2468 => 430,  2466 => 429,  2460 => 428,  2450 => 425,  2440 => 424,  2436 => 423,  2426 => 422,  2423 => 421,  2411 => 419,  2400 => 417,  2398 => 416,  2389 => 415,  2386 => 414,  2381 => 413,  2379 => 412,  2373 => 411,  2363 => 408,  2353 => 407,  2349 => 406,  2339 => 405,  2336 => 404,  2324 => 402,  2313 => 400,  2311 => 399,  2302 => 398,  2299 => 397,  2294 => 396,  2292 => 395,  2288 => 394,  2282 => 393,  2272 => 390,  2262 => 389,  2258 => 388,  2248 => 387,  2245 => 386,  2233 => 384,  2222 => 382,  2220 => 381,  2211 => 380,  2208 => 379,  2203 => 378,  2201 => 377,  2195 => 376,  2185 => 373,  2175 => 372,  2171 => 371,  2161 => 370,  2158 => 369,  2146 => 367,  2135 => 365,  2133 => 364,  2124 => 363,  2121 => 362,  2116 => 361,  2114 => 360,  2108 => 359,  2098 => 356,  2088 => 355,  2084 => 354,  2074 => 353,  2071 => 352,  2059 => 350,  2048 => 348,  2046 => 347,  2037 => 346,  2034 => 345,  2029 => 344,  2027 => 343,  2021 => 342,  2011 => 339,  2001 => 338,  1997 => 337,  1987 => 336,  1984 => 335,  1972 => 333,  1961 => 331,  1959 => 330,  1950 => 329,  1947 => 328,  1942 => 327,  1934 => 325,  1924 => 322,  1914 => 321,  1910 => 320,  1900 => 319,  1897 => 318,  1885 => 316,  1874 => 314,  1872 => 313,  1863 => 312,  1860 => 311,  1855 => 310,  1853 => 309,  1847 => 308,  1837 => 295,  1827 => 304,  1823 => 303,  1813 => 290,  1810 => 289,  1798 => 299,  1787 => 297,  1785 => 296,  1776 => 295,  1773 => 294,  1768 => 293,  1766 => 292,  1760 => 291,  1750 => 288,  1740 => 287,  1736 => 280,  1726 => 285,  1723 => 284,  1711 => 282,  1700 => 274,  1698 => 279,  1689 => 278,  1686 => 273,  1681 => 276,  1679 => 275,  1673 => 274,  1663 => 271,  1653 => 270,  1649 => 269,  1639 => 268,  1636 => 267,  1624 => 265,  1613 => 263,  1611 => 262,  1602 => 261,  1599 => 260,  1594 => 259,  1592 => 258,  1586 => 257,  1576 => 254,  1566 => 253,  1562 => 252,  1552 => 257,  1549 => 256,  1537 => 248,  1526 => 246,  1524 => 245,  1515 => 244,  1513 => 243,  1506 => 242,  1504 => 241,  1502 => 240,  1498 => 239,  1495 => 250,  1491 => 249,  1483 => 229,  1479 => 226,  1456 => 244,  1444 => 222,  1441 => 221,  1424 => 220,  1420 => 218,  1397 => 216,  1385 => 214,  1382 => 213,  1365 => 212,  1361 => 210,  1338 => 208,  1326 => 206,  1323 => 205,  1306 => 204,  1302 => 202,  1279 => 200,  1267 => 198,  1264 => 216,  1247 => 196,  1243 => 194,  1220 => 192,  1208 => 190,  1205 => 189,  1188 => 188,  1184 => 186,  1161 => 184,  1149 => 182,  1146 => 181,  1129 => 198,  1125 => 178,  1102 => 176,  1090 => 174,  1087 => 173,  1070 => 172,  1066 => 170,  1043 => 186,  1031 => 166,  1028 => 165,  1011 => 164,  1007 => 162,  984 => 160,  972 => 158,  969 => 157,  952 => 156,  948 => 154,  925 => 167,  913 => 150,  910 => 149,  893 => 148,  889 => 146,  866 => 144,  854 => 142,  851 => 158,  834 => 140,  831 => 139,  823 => 155,  819 => 154,  796 => 128,  784 => 149,  781 => 125,  764 => 124,  760 => 122,  737 => 120,  725 => 118,  722 => 117,  705 => 116,  701 => 114,  678 => 112,  666 => 110,  663 => 109,  646 => 108,  642 => 106,  619 => 104,  607 => 102,  604 => 101,  587 => 100,  583 => 98,  560 => 96,  548 => 94,  545 => 93,  528 => 92,  524 => 90,  501 => 88,  489 => 86,  486 => 85,  469 => 84,  465 => 82,  442 => 80,  430 => 78,  427 => 77,  410 => 76,  406 => 74,  383 => 72,  371 => 70,  368 => 69,  351 => 76,  347 => 66,  324 => 64,  312 => 62,  309 => 61,  292 => 60,  288 => 58,  265 => 57,  253 => 54,  250 => 53,  233 => 52,  229 => 50,  206 => 43,  194 => 46,  191 => 45,  174 => 44,  169 => 42,  165 => 41,  159 => 39,  155 => 37,  150 => 30,  147 => 34,  142 => 33,  137 => 27,  134 => 26,  129 => 27,  126 => 26,  118 => 24,  107 => 22,  105 => 21,  89 => 19,  86 => 18,  78 => 16,  76 => 15,  65 => 10,  63 => 12,  47 => 10,  45 => 9,  41 => 8,  37 => 6,  32 => 4,  29 => 3,);
    }
}

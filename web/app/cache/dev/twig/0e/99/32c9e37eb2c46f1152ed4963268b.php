<?php

/* MyAppGlobalBundle:Hebergement:MiniSitePresentation.html.twig */
class __TwigTemplate_0e9932c9e37eb2c46f1152ed4963268b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'presentation' => array($this, 'block_presentation'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('presentation', $context, $blocks);
    }

    public function block_presentation($context, array $blocks = array())
    {
        // line 5
        echo "\t\t";
        // line 8
        echo "  ";
        // line 9
        echo "  <div class=\"fiche\">
  ";
        // line 10
        if ((twig_length_filter($this->env, $this->getContext($context, "chambre")) != 0)) {
            // line 11
            echo "      <h2>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("type.chambre"), "html", null, true);
            echo "</h2>
      ";
            // line 12
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                // line 13
                echo "\t      ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "chambre"));
                foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                    // line 14
                    echo "                        ";
                    if ((!twig_test_empty($this->getAttribute($this->getContext($context, "w"), "typechambreid")))) {
                        echo " 
                            <div itemscope itemtype=\"http://schema.org/Product\">   
                                ";
                        // line 16
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "w"), "typechambreid"));
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
                        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                            echo " 
                                    ";
                            // line 17
                            if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                                // line 18
                                echo "                                        <a href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementchambre", array("name" => $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergement"), "repertoirefr"))), "html", null, true);
                                echo "#";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "id"), "html", null, true);
                                echo "\" class=\"link_ancre\" title=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                                echo " ";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergement"), "nomfr"), "html", null, true);
                                echo "\"> 
                                            ";
                                // line 19
                                if ((!twig_test_empty($this->getAttribute($this->getContext($context, "w"), "photo1")))) {
                                    // line 20
                                    echo "                                            <img src=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/chambres"), "html", null, true);
                                    echo "/";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "id"), "html", null, true);
                                    echo "/";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "photo1"), "html", null, true);
                                    echo "\" class=\"imgPresentationChambre\" alt=\"";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                                    echo " ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergement"), "nomfr"), "html", null, true);
                                    echo "\" /> 
                                            ";
                                } else {
                                    // line 22
                                    echo "                                            <img src=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/LogoGlobalReservation.jpg"), "html", null, true);
                                    echo "\" class=\"imgPresentationChambre\" alt=\"";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                                    echo " ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergement"), "nomfr"), "html", null, true);
                                    echo "\" /> 
                                            ";
                                }
                                // line 23
                                echo "                                 
                                        </a> 
                                    ";
                            }
                            // line 26
                            echo "                                ";
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
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 27
                        echo "                                <div>
                                    <h3 itemprop=\"name\"><a itemprop=\"url\" href=\"";
                        // line 28
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementchambre", array("name" => $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergement"), "repertoirefr"))), "html", null, true);
                        echo "#";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "id"), "html", null, true);
                        echo "\" class=\"link_ancre\" title=\"";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "w"), "typechambreid"));
                        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergement"), "nomfr"), "html", null, true);
                        echo "\">
                                    ";
                        // line 29
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "w"), "typechambreid"));
                        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                            echo " \t 
                                            <strong>";
                            // line 30
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                            echo "</strong>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 32
                        echo "                                   </a></h3>
\t\t\t ";
                    } else {
                        // line 34
                        echo "                             <div itemscope itemtype=\"http://schema.org/Product\">
                               <a href=\"";
                        // line 35
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementchambre", array("name" => $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergement"), "repertoirefr"))), "html", null, true);
                        echo "#";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "id"), "html", null, true);
                        echo "\" class=\"link_ancre\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergement"), "nomfr"), "html", null, true);
                        echo "\"> 
                                       ";
                        // line 36
                        if ((!twig_test_empty($this->getAttribute($this->getContext($context, "w"), "photo1")))) {
                            // line 37
                            echo "                                       <img src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/chambres"), "html", null, true);
                            echo "/";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "id"), "html", null, true);
                            echo "/";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "photo1"), "html", null, true);
                            echo "\" class=\"imgPresentationChambre\" alt=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergement"), "nomfr"), "html", null, true);
                            echo "\" /> 
                                       ";
                        } else {
                            // line 39
                            echo "                                       <img src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/LogoGlobalReservation.jpg"), "html", null, true);
                            echo "\" class=\"imgPresentationChambre\" alt=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergement"), "nomfr"), "html", null, true);
                            echo "\" /> 
                                       ";
                        }
                        // line 41
                        echo "                               </a>
                                 <div>
                                     <h3 itemprop=\"name\"><a itemprop=\"url\" href=\"";
                        // line 43
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementchambre", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergement"), "repertoirefr")))), "html", null, true);
                        echo "#";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "id"), "html", null, true);
                        echo "\" class=\"link_ancre\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergement"), "nomfr"), "html", null, true);
                        echo "\"> <strong>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                        echo "</strong> </a></h3>
\t\t\t ";
                    }
                    // line 45
                    echo "                                <table width=\"220\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                    <tr>
                                        <td width=\"48\" align=\"center\">
                                            <select>
                                            ";
                    // line 49
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergement"), "deviseid"));
                    foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
                        // line 50
                        echo "                                                <option name=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "q"), "abreviation"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "q"), "abreviation"), "html", null, true);
                        echo "</option>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 52
                    echo "                                            </select>\t
                                        </td>
                                            <td width=\"86\" align=\"center\" class=\"tabgris\">";
                    // line 54
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("a.partir"), "html", null, true);
                    echo "</td>
                                            <td width=\"86\" align=\"center\" class=\"tabgris\">";
                    // line 55
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("jusqua"), "html", null, true);
                    echo "</td>
                                          </tr>
                                          <tr>
                                            <td height=\"50\" align=\"center\">&nbsp;</td>
                                            <td align=\"center\" class=\"agranditprix\"> <p itemprop=\"offers\" itemscope itemtype=\"http://schema.org/Offer\"><span itemprop=\"price\" class=\"microdata\">";
                    // line 59
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, strtr($this->getAttribute($this->getContext($context, "w"), "tarifminbassesaison"), array("%\$%" => "")), 2, ".", ","), "html", null, true);
                    echo " \$</span></p></td>
                                            <td align=\"center\" class=\"agranditprix\"> <p>";
                    // line 60
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, strtr($this->getAttribute($this->getContext($context, "w"), "tarifmaxhautesaison"), array("%\$%" => "")), 2, ".", ","), "html", null, true);
                    echo " \$</p></td>
                                          </tr>
                                  </table>
                                        ";
                    // line 63
                    if ((!twig_test_empty($this->getAttribute($this->getContext($context, "w"), "textepresentationfr")))) {
                        // line 64
                        echo "                                            <p itemprop=\"description\">";
                        echo twig_escape_filter($this->env, twig_truncate_filter($this->env, strip_tags(twig_convert_encoding($this->getAttribute($this->getContext($context, "w"), "textepresentationfr"), "UTF-8", "UTF-8")), 130, "[...]"), "html", null, true);
                        echo "</p>   
                                        ";
                    } else {
                        // line 66
                        echo "                                            <p itemprop=\"description\">";
                        echo twig_escape_filter($this->env, twig_truncate_filter($this->env, strip_tags(twig_convert_encoding($this->getAttribute($this->getContext($context, "w"), "descriptionfr"), "UTF-8", "UTF-8")), 130, "[...]"), "html", null, true);
                        echo "</p>
                                        ";
                    }
                    // line 68
                    echo "                                        <span><a class=\"link_ancre\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementchambre", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergement"), "repertoirefr")))), "html", null, true);
                    echo "#";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "id"), "html", null, true);
                    echo "\" title=\"Description ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergement"), "nomfr"), "html", null, true);
                    echo "\">Description</a> ";
                    if (($this->getAttribute($this->getContext($context, "w"), "tarifpreferentiel") != "")) {
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tarif.preferentiel"), "html", null, true);
                    }
                    echo "</span>
                                </div><br class=\"clearfloat\" />
                          </div>\t\t  \t\t\t
\t\t ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 72
                echo "\t ";
            } else {
                // line 73
                echo "\t \t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "chambre"));
                foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                    // line 74
                    echo "\t \t\t";
                    if ((!twig_test_empty($this->getAttribute($this->getContext($context, "w"), "typechambreid")))) {
                        // line 75
                        echo "\t\t \t\t";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "w"), "typechambreid"));
                        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                            // line 76
                            echo "                                    <div itemscope itemtype=\"http://schema.org/Product\">    
                                       <a href=\"";
                            // line 77
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementchambre", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergement"), "repertoireen")))), "html", null, true);
                            echo "#";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "id"), "html", null, true);
                            echo "\" class=\"link_ancre\" title=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergement"), "nomen"), "html", null, true);
                            echo "\"> 
                                              ";
                            // line 78
                            if ((!twig_test_empty($this->getAttribute($this->getContext($context, "w"), "photo1")))) {
                                // line 79
                                echo "                                              <img src=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/chambres"), "html", null, true);
                                echo "/";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "id"), "html", null, true);
                                echo "/";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "photo1"), "html", null, true);
                                echo "\" class=\"imgPresentationChambre\" alt=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                                echo " ";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergement"), "nomen"), "html", null, true);
                                echo "\" />
                                              ";
                            } else {
                                // line 81
                                echo "                                              <img src=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/LogoGlobalReservation.jpg"), "html", null, true);
                                echo "\" class=\"imgPresentationChambre\" alt=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                                echo " ";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergement"), "nomen"), "html", null, true);
                                echo "\" /> 
                                              ";
                            }
                            // line 83
                            echo "                                       </a>
                                        <div>
                                              <h3 itemprop=\"name\"><a itemprop=\"url\" class=\"link_ancre\" href=\"";
                            // line 85
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementchambre", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergement"), "repertoireen")))), "html", null, true);
                            echo "#";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "id"), "html", null, true);
                            echo "\"  title=\"";
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "w"), "typechambreid"));
                            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                            $context = array_merge($_parent, array_intersect_key($context, $_parent));
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergement"), "nomen"), "html", null, true);
                            echo "\"> 
                                                 ";
                            // line 86
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "w"), "typechambreid"));
                            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                                echo " \t 
                                                      <strong>";
                                // line 87
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                                echo "</strong>
                                                 ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                            $context = array_merge($_parent, array_intersect_key($context, $_parent));
                            // line 89
                            echo "                                              </a></h3>
\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 91
                        echo "\t\t\t";
                    } else {
                        // line 92
                        echo "                                <div itemscope itemtype=\"http://schema.org/Product\">    
                                 <a href=\"";
                        // line 93
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementchambre", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergement"), "repertoireen")))), "html", null, true);
                        echo "#";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "id"), "html", null, true);
                        echo "\" class=\"link_ancre\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergement"), "nomen"), "html", null, true);
                        echo "\"> 
                                        ";
                        // line 94
                        if ((!twig_test_empty($this->getAttribute($this->getContext($context, "w"), "photo1")))) {
                            // line 95
                            echo "                                        <img src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/chambres"), "html", null, true);
                            echo "/";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "id"), "html", null, true);
                            echo "/";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "photo1"), "html", null, true);
                            echo "\" class=\"imgPresentationChambre\" alt=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergement"), "nomen"), "html", null, true);
                            echo "\" />
                                        ";
                        } else {
                            // line 97
                            echo "                                        <img src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/LogoGlobalReservation.jpg"), "html", null, true);
                            echo "\" class=\"imgPresentationChambre\" alt=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergement"), "nomen"), "html", null, true);
                            echo "\" /> 
                                        ";
                        }
                        // line 99
                        echo "                                 </a>
                                 <div>
                                      <h3 itemprop=\"name\"><a itemprop=\"url\" class=\"link_ancre\" href=\"";
                        // line 101
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementchambre", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergement"), "repertoireen")))), "html", null, true);
                        echo "#";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "id"), "html", null, true);
                        echo "\"> <strong>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                        echo "</strong> </a></h3>
\t\t\t";
                    }
                    // line 103
                    echo "                                    <table width=\"220\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                              <tr>
                                                <td width=\"48\" align=\"center\">
                                                    <select>
                                                    ";
                    // line 107
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergement"), "deviseid"));
                    foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
                        // line 108
                        echo "                                                            <option name=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "q"), "abreviation"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "q"), "abreviation"), "html", null, true);
                        echo "</option>
                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 110
                    echo "                                                    </select>\t
                                                </td>
                                                <td width=\"86\" align=\"center\" class=\"tabgris\">";
                    // line 112
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("a.partir"), "html", null, true);
                    echo "</td>
                                                <td width=\"86\" align=\"center\" class=\"tabgris\">";
                    // line 113
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("jusqua"), "html", null, true);
                    echo "</td>
                                              </tr>
                                              <tr>
                                                <td height=\"50\" align=\"center\">&nbsp;</td>
                                                 <td align=\"center\" class=\"agranditprix\"> <p itemprop=\"offers\" itemscope itemtype=\"http://schema.org/Offer\"><span itemprop=\"price\" class=\"microdata\">";
                    // line 117
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, strtr($this->getAttribute($this->getContext($context, "w"), "tarifminbassesaison"), array("%\$%" => "")), 2, ".", ","), "html", null, true);
                    echo " \$</span></p></td>
                                                 <td align=\"center\" class=\"agranditprix\"> <p>";
                    // line 118
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, strtr($this->getAttribute($this->getContext($context, "w"), "tarifmaxhautesaison"), array("%\$%" => "")), 2, ".", ","), "html", null, true);
                    echo " \$</p></td>
                                              </tr>
                                    </table>
                                            ";
                    // line 121
                    if ((!twig_test_empty($this->getAttribute($this->getContext($context, "w"), "textepresentationen")))) {
                        // line 122
                        echo "                                                <p itemprop=\"description\">";
                        echo twig_escape_filter($this->env, twig_truncate_filter($this->env, strip_tags(twig_convert_encoding($this->getAttribute($this->getContext($context, "w"), "textepresentationen"), "UTF-8", "UTF-8")), 130, "[...]"), "html", null, true);
                        echo "</p>    
                                            ";
                    } else {
                        // line 124
                        echo "                                                <p itemprop=\"description\">";
                        echo twig_escape_filter($this->env, twig_truncate_filter($this->env, strip_tags(twig_convert_encoding($this->getAttribute($this->getContext($context, "w"), "descriptionen"), "UTF-8", "UTF-8")), 130, "[...]"), "html", null, true);
                        echo "</p>
                                            ";
                    }
                    // line 126
                    echo "                                            <span><a class=\"link_ancre\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementchambre", array("name" => $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergement"), "repertoireen"))), "html", null, true);
                    echo "#";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "id"), "html", null, true);
                    echo "\" title=\"Description ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergement"), "nomen"), "html", null, true);
                    echo "\">Description</a> ";
                    if (($this->getAttribute($this->getContext($context, "w"), "tarifpreferentiel") != "")) {
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tarif.preferentiel"), "html", null, true);
                    }
                    echo "</span>
                                    </div><br class=\"clearfloat\" />
                             </div>
\t\t ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 130
                echo "\t ";
            }
            // line 131
            echo "  ";
        }
        // line 132
        echo "  </div>
  
  ";
        // line 135
        echo "  <h2>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("information.concernant.etablissement"), "html", null, true);
        echo " <a href=\"#\">haut</a></h2>
  <div class=\"info\">
    <ul>
\t";
        // line 138
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "client"));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 139
            echo "\t    ";
            // line 140
            echo "            ";
            if ((!twig_test_empty($this->getAttribute($this->getContext($context, "s"), "nombrechambre")))) {
                // line 141
                echo "            <li><strong>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("nombre.chambre"), "html", null, true);
                echo " : </strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s"), "nombrechambre"), "html", null, true);
                echo "</li>
\t    ";
            } elseif (($this->getContext($context, "nbChambre") != null)) {
                // line 143
                echo "            <li><strong>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("nombre.chambre"), "html", null, true);
                echo " : </strong>";
                echo twig_escape_filter($this->env, $this->getContext($context, "nbChambre"), "html", null, true);
                echo "</li>
            ";
            }
            // line 145
            echo "\t    ";
            echo " 
\t    ";
            // line 146
            if (($this->getAttribute($this->getContext($context, "s"), "nombreetages") > 0)) {
                // line 147
                echo "\t    <li><strong>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("nombre.etage"), "html", null, true);
                echo " :</strong> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s"), "nombreetages"), "html", null, true);
                echo "</li>
\t    ";
            }
            // line 149
            echo "\t    ";
            // line 150
            echo "\t    ";
            if ((($this->getAttribute($this->getContext($context, "s"), "corporatif") == 1) && ($this->getContext($context, "salleCorporatif") > 0))) {
                // line 151
                echo "\t    <li><strong>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("salle.etablissement"), "html", null, true);
                echo " :</strong> ";
                echo twig_escape_filter($this->env, $this->getContext($context, "salleCorporatif"), "html", null, true);
                echo "</li>
\t    ";
            }
            // line 153
            echo "\t    ";
            // line 154
            echo "\t    <li><strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("heure.arriver.etablissement"), "html", null, true);
            echo " :</strong>  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s"), "checkin"), "html", null, true);
            echo " </li>
\t    <li><strong>";
            // line 155
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("heure.depart.etablissement"), "html", null, true);
            echo " :</strong>  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s"), "checkout"), "html", null, true);
            echo " </li>
    \t";
            // line 157
            echo "\t    \t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "devise"));
            foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                // line 158
                echo "\t\t    \t <li><strong>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("modalite.paiement"), "html", null, true);
                echo " :</strong><br />
\t\t    \t ";
                // line 159
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    echo " 
\t\t    \t\t";
                    // line 160
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "s"), "hebergementpaiementsid"));
                    foreach ($context['_seq'] as $context["_key"] => $context["h"]) {
                        echo " <img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/modes_paiements"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "h"), "id"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "h"), "image"), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "h"), "nomfr"), "html", null, true);
                        echo "\" class=\"thumbnailmodepaiement\"/>  - ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "h"), "nomfr"), "html", null, true);
                        echo "  <br />";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['h'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 161
                    echo "\t\t    \t ";
                } else {
                    echo " 
\t\t    \t \t";
                    // line 162
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "s"), "hebergementpaiementsid"));
                    foreach ($context['_seq'] as $context["_key"] => $context["h"]) {
                        echo " <img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/modes_paiements"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "h"), "id"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "h"), "image"), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "h"), "nomen"), "html", null, true);
                        echo "\" class=\"thumbnailmodepaiement\"/>  - ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "h"), "nomen"), "html", null, true);
                        echo "  <br /> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['h'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    echo " 
\t\t    \t ";
                }
                // line 164
                echo "\t\t    \t </li> 
\t\t    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 166
            echo "\t    <li><strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("devises"), "html", null, true);
            echo " :</strong> 
\t    <br />
\t    ";
            // line 169
            echo "\t    \t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "devise"));
            foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                // line 170
                echo "\t\t    \t";
                if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "deviseid")) > 2)) {
                    // line 171
                    echo "\t\t    \t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "w"), "deviseid"));
                    foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                        // line 172
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "a"), "symbole"), "html", null, true);
                        echo "  ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "a"), "abreviation"), "html", null, true);
                        echo "<br />
\t    \t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 174
                    echo "\t    \t\t";
                } else {
                    // line 175
                    echo "\t    \t\t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "w"), "deviseid"));
                    foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                        // line 176
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "a"), "symbole"), "html", null, true);
                        echo "  ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "a"), "abreviation"), "html", null, true);
                        echo "<br />
\t    \t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 178
                    echo "\t\t    \t";
                }
                // line 179
                echo "\t    \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 180
            echo "\t    </li> 
    </ul>
    <ul>
\t    ";
            // line 184
            echo "\t    <li><strong>Classification :</strong><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/classifications/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "s"), "classificationid"), "id"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "s"), "classificationid"), "image"), "html", null, true);
            echo "\" class=\"classification2\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "s"), "classificationid"), "valeur"), "html", null, true);
            echo "\" /></li> 
            ";
            // line 186
            echo "            ";
            if ((!twig_test_empty($this->getAttribute($this->getContext($context, "s"), "stylehebergementid")))) {
                // line 187
                echo "\t    <li><strong>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("style.hebergement"), "html", null, true);
                echo " :</strong> ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "s"), "stylehebergementid"));
                foreach ($context['_seq'] as $context["_key"] => $context["h"]) {
                    echo " ";
                    if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "h"), "nomfr"), "html", null, true);
                        echo ", ";
                    } else {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "h"), "nomen"), "html", null, true);
                        echo ", ";
                    }
                    echo " ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['h'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                echo " </li>
            ";
            }
            // line 189
            echo "            ";
            // line 190
            echo "                ";
            if (((!twig_test_empty($this->getAttribute($this->getAttribute($this->getContext($context, "s"), "politiquehebergementfr"), "politiqueanimauxfr"))) || (!twig_test_empty($this->getAttribute($this->getAttribute($this->getContext($context, "s"), "politiquehebergementen"), "politiqueanimauxen"))))) {
                // line 191
                echo "                   <li><strong>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("politique.animaux"), "html", null, true);
                echo " :</strong>";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "s"), "politiquehebergementfr"), "politiqueanimauxfr"), "html", null, true);
                    echo " ";
                } else {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "s"), "politiquehebergementen"), "politiqueanimauxen"), "html", null, true);
                    echo " ";
                }
                echo "</li>
                ";
            }
            // line 193
            echo "                ";
            if ((!twig_test_empty($this->getAttribute($this->getContext($context, "s"), "prixapartir")))) {
                // line 194
                echo "                   <strong>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tarif.a.partir"), "html", null, true);
                echo "</strong> ";
                echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getContext($context, "s"), "prixapartir"), "%\$%", ""), "html", null, true);
                echo " \$
                ";
            }
            // line 196
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 197
        echo "    </ul>
  </div>
  <br class=\"clearfloat\" />
  ";
        // line 200
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "client"));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 201
            echo "       ";
            if ((!twig_test_empty($this->getAttribute($this->getAttribute($this->getContext($context, "s"), "politiquehebergementfr"), "politiquegeneralefr")))) {
                // line 202
                echo "            ";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    // line 203
                    echo "            <div class=\"condition\">           
                  <p><span>";
                    // line 204
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("politique.generale"), "html", null, true);
                    echo "</span> : ";
                    echo twig_escape_filter($this->env, strip_tags(twig_convert_encoding($this->getAttribute($this->getAttribute($this->getContext($context, "s"), "politiquehebergementfr"), "politiquegeneralefr"), "UTF-8", "UTF-8")), "html", null, true);
                    echo "</p>                
            </div>
            ";
                }
                // line 207
                echo "       ";
            } elseif ((!twig_test_empty($this->getAttribute($this->getAttribute($this->getContext($context, "s"), "politiquehebergementen"), "politiquegeneraleen")))) {
                // line 208
                echo "            ";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    // line 209
                    echo "            <div class=\"condition\">           
                  <p><span>";
                    // line 210
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("politique.generale"), "html", null, true);
                    echo "</span> : ";
                    echo twig_escape_filter($this->env, strip_tags(twig_convert_encoding($this->getAttribute($this->getAttribute($this->getContext($context, "s"), "politiquehebergementen"), "politiquegeneraleen"), "UTF-8", "UTF-8")), "html", null, true);
                    echo "</p>                
            </div>
            ";
                }
                // line 213
                echo "       ";
            }
            // line 214
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 215
        echo "  ";
        // line 216
        echo "\t  <div id=\"zone_01\" class=\"pubGoogleBottom pubGoogleAttrait\" style=\"margin-top:25px;\">
\t  \t<script type='text/javascript'>
\t\t\tgoogletag.cmd.push(function() { googletag.display('zone_01'); });
\t\t</script>
\t  </div>
  ";
        // line 222
        echo "\t";
        // line 238
        echo "  
  ";
        // line 240
        echo "  <div class=\"col4\">
    ";
        // line 241
        if (($this->getContext($context, "aleatoireCorpo") != "")) {
            // line 242
            echo "\t  <div> 
          ";
            // line 243
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                // line 244
                echo "                ";
                if (($this->getContext($context, "imageCorpo") != "")) {
                    // line 245
                    echo "                  <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementcorporatif", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "aleatoireCorpo"), "sallecorporativehebergement"), "repertoirefr")))), "html", null, true);
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/galerie_corporative"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "imageCorpo"), "id"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "imageCorpo"), "image"), "html", null, true);
                    echo "\" class=\"img_liste_forfait\" alt=\"Corporatif et groupes\" /></a>
                ";
                } else {
                    // line 247
                    echo "                  <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementcorporatif", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "aleatoireCorpo"), "sallecorporativehebergement"), "repertoirefr")))), "html", null, true);
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/manicouagan2.jpg"), "html", null, true);
                    echo "\" class=\"img_liste_forfait\" alt=\"Corporatif et groupes\" /></a>
                ";
                }
                // line 249
                echo "\t      <h3><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementcorporatif", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "aleatoireCorpo"), "sallecorporativehebergement"), "repertoirefr")))), "html", null, true);
                echo "\">Corporatif et groupes</a></h3>
\t      <p>Salle";
                // line 250
                if (($this->getContext($context, "salleCorporatif") > 0)) {
                    echo "s";
                }
                echo " de réunion : ";
                echo twig_escape_filter($this->env, $this->getContext($context, "salleCorporatif"), "html", null, true);
                echo "</p>
\t  ";
            } else {
                // line 252
                echo "                ";
                if (($this->getContext($context, "imageCorpo") != "")) {
                    // line 253
                    echo "                  <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementcorporatif", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "aleatoireCorpo"), "sallecorporativehebergement"), "repertoireen")))), "html", null, true);
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/galerie_corporative"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "imageCorpo"), "id"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "imageCorpo"), "image"), "html", null, true);
                    echo "\" class=\"img_liste_forfait\" alt=\"Corporate group\" /></a>
                ";
                } else {
                    // line 255
                    echo "                  <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementcorporatif", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "aleatoireCorpo"), "sallecorporativehebergement"), "repertoireen")))), "html", null, true);
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/manicouagan2.jpg"), "html", null, true);
                    echo "\" class=\"img_liste_forfait\" alt=\"Corporate groups\" /></a>
                ";
                }
                // line 257
                echo "\t  \t  <h3><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementcorporatif", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "aleatoireCorpo"), "sallecorporativehebergement"), "repertoireen")))), "html", null, true);
                echo "\">Corporate groups </a></h3>
\t      <p>Room";
                // line 258
                if (($this->getContext($context, "salleCorporatif") > 0)) {
                    echo "s";
                }
                echo " meeting : ";
                echo twig_escape_filter($this->env, $this->getContext($context, "salleCorporatif"), "html", null, true);
                echo "</p>
\t  ";
            }
            // line 260
            echo "\t  </div>  
    ";
        }
        // line 262
        echo "\t
\t";
        // line 263
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
            // line 264
            echo "\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "forfait"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 265
                echo "\t\t\t";
                if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                    // line 266
                    echo "\t\t \t<div> 
\t\t      <a href=\"";
                    // line 267
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementforfait", array("name" => $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "hebergementid"), "repertoirefr"))), "html", null, true);
                    echo "\">
\t\t      \t";
                    // line 268
                    if ((!twig_test_empty($this->getAttribute($this->getContext($context, "p"), "imagecategorie")))) {
                        // line 269
                        echo "\t\t      \t\t<img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/forfaits-client/image_categorie"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "id"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "imagecategorie"), "html", null, true);
                        echo "\"class=\"img_liste_forfait\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "forfaitclientid"), "nomfr"), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                        echo "\" />
\t\t        ";
                    } else {
                        // line 271
                        echo "\t\t        \t<img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/manicouagan2.jpg"), "html", null, true);
                        echo "\" class=\"img_liste_forfait\" alt=\"Image de remplacement\" />
\t\t        ";
                    }
                    // line 273
                    echo "\t\t      </a>
\t\t      <h3><a href=\"";
                    // line 274
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementforfait", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "hebergementid"), "repertoirefr")))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "forfaitclientid"), "nomfr"), "html", null, true);
                    echo "</a></h3>
\t\t      <p>  ";
                    // line 275
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "datedebut"), "d"), "html", null, true);
                    echo " 
                            ";
                    // line 277
                    echo "                            ";
                    if ((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "datedebut"), "m") == "01")) {
                        echo " jan
                            ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "datedebut"), "m") == "02")) {
                        // line 278
                        echo " fév
                            ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "datedebut"), "m") == "03")) {
                        // line 279
                        echo " mars
                            ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "datedebut"), "m") == "04")) {
                        // line 280
                        echo " avr
                            ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "datedebut"), "m") == "05")) {
                        // line 281
                        echo " mai
                            ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "datedebut"), "m") == "06")) {
                        // line 282
                        echo " juin
                            ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "datedebut"), "m") == "07")) {
                        // line 283
                        echo " juil
                            ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "datedebut"), "m") == "08")) {
                        // line 284
                        echo " août
                            ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "datedebut"), "m") == "01")) {
                        // line 285
                        echo " sep
                            ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "datedebut"), "m") == "01")) {
                        // line 286
                        echo " oct
                            ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "datedebut"), "m") == "01")) {
                        // line 287
                        echo " nov
                            ";
                    } else {
                        // line 288
                        echo "déc
                            ";
                    }
                    // line 289
                    echo " 
                            ";
                    // line 290
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "datedebut"), "Y"), "html", null, true);
                    echo " -
                            ";
                    // line 291
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "datedefin"), "d"), "html", null, true);
                    echo " 
                            ";
                    // line 293
                    echo "                            ";
                    if ((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "datedefin"), "m") == "01")) {
                        echo " jan 
                            ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "datedefin"), "m") == "02")) {
                        // line 294
                        echo " fév
                            ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "datedefin"), "m") == "03")) {
                        // line 295
                        echo " mars
                            ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "datedefin"), "m") == "04")) {
                        // line 296
                        echo " avr
                            ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "datedefin"), "m") == "05")) {
                        // line 297
                        echo " mai
                            ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "datedefin"), "m") == "06")) {
                        // line 298
                        echo " juin
                            ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "datedefin"), "m") == "07")) {
                        // line 299
                        echo " juil
                            ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "datedefin"), "m") == "08")) {
                        // line 300
                        echo " août
                            ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "datedefin"), "m") == "01")) {
                        // line 301
                        echo " sep
                            ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "datedefin"), "m") == "01")) {
                        // line 302
                        echo " oct
                            ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "datedefin"), "m") == "01")) {
                        // line 303
                        echo " nov
                            ";
                    } else {
                        // line 304
                        echo "déc
                            ";
                    }
                    // line 305
                    echo " 
                            ";
                    // line 306
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "datedefin"), "Y"), "html", null, true);
                    echo "
\t\t      </p>
\t\t      <p>Tarif à partir de ";
                    // line 308
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "tarif"), "html", null, true);
                    echo " </p>  
\t\t    </div>
\t\t    ";
                }
                // line 311
                echo "\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 312
            echo "\t";
        } else {
            // line 313
            echo "\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "forfait"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 314
                echo "\t\t \t<div> 
\t\t      <a href=\"";
                // line 315
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementforfait", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "hebergementid"), "repertoireen")))), "html", null, true);
                echo "\">
\t\t      \t";
                // line 316
                if ((!twig_test_empty($this->getAttribute($this->getContext($context, "p"), "imagecategorie")))) {
                    // line 317
                    echo "\t\t      \t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/forfaits-client/image_categorie"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "id"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "imagecategorie"), "html", null, true);
                    echo "\"class=\"img_liste_forfait\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "forfaitclientid"), "nomen"), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                    echo "\" />
\t\t      \t";
                } else {
                    // line 319
                    echo "\t\t      \t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/manicouagan2.jpg"), "html", null, true);
                    echo "\" class=\"img_liste_forfait\" alt=\"Replacement image \" />
\t\t      \t";
                }
                // line 321
                echo "\t\t      </a>
\t\t      <h3><a href=\"";
                // line 322
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementforfait", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "hebergementid"), "repertoireen")))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "forfaitclientid"), "nomen"), "html", null, true);
                echo "</a></h3>
\t\t      <p> ";
                // line 323
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "datedebut"), "d m Y"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "datedefin"), "d m Y"), "html", null, true);
                echo " </p>
\t\t      <p>Price from ";
                // line 324
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "tarif"), "html", null, true);
                echo " </p>  
\t\t    </div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 327
            echo "\t";
        }
        echo "  
\t";
        // line 328
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listeGps"));
        foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
            // line 329
            echo "\t\t";
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                // line 330
                echo "\t\t  <div > 
\t\t    <a href=\"";
                // line 331
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "client"));
                foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementactivite", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "repertoirefr")))), "html", null, true);
                    echo " ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                echo "\" title=\"Voir les activités et services à proximité\">
\t\t    \t";
                // line 332
                if ((!twig_test_empty($this->getAttribute($this->getContext($context, "w"), "image")))) {
                    // line 333
                    echo "\t\t    \t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/attrait"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "id"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "image"), "html", null, true);
                    echo "\" class=\"img_liste_forfait\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nom_fr"), "html", null, true);
                    echo "\" />
\t\t    \t";
                } else {
                    // line 335
                    echo "\t\t    \t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/manicouagan2.jpg"), "html", null, true);
                    echo "\" class=\"img_liste_forfait\" alt=\"Image de remplacement \" />
\t\t    \t";
                }
                // line 337
                echo "\t\t    </a>
\t\t      <h3><a href=\"";
                // line 338
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "client"));
                foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementactivite", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "repertoirefr")))), "html", null, true);
                    echo " ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                echo "\" title=\"Voir les activités et services à proximité\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activite.service"), "html", null, true);
                echo "</a></h3>
\t\t      <p>Voir les attraits et activités à proximité de ";
                // line 339
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "client"));
                foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                    echo " ";
                    if ((!$this->getAttribute((isset($context["p"]) ? $context["p"] : null), "hebergementid", array(), "any", true, true))) {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                        echo " ";
                    } else {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nom_fr"), "html", null, true);
                        echo " ";
                    }
                    echo " ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                echo "</p>
\t\t  </div>
\t  \t";
            } else {
                // line 342
                echo "\t  \t  <div > 
\t\t    <a href=\"";
                // line 343
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "client"));
                foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementactivite", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "repertoireen")))), "html", null, true);
                    echo " ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                echo "\" title=\"See the activities and services nearby\">
\t\t    \t";
                // line 344
                if ((!twig_test_empty($this->getAttribute($this->getContext($context, "w"), "image")))) {
                    // line 345
                    echo "\t\t    \t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/attrait"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "id"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "image"), "html", null, true);
                    echo "\" class=\"img_liste_forfait\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nom_en"), "html", null, true);
                    echo "\" />
\t\t   \t\t";
                } else {
                    // line 347
                    echo "\t\t   \t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/manicouagan2.jpg"), "html", null, true);
                    echo "\" class=\"img_liste_forfait\" alt=\"Replacement image \" />
\t\t   \t\t";
                }
                // line 349
                echo "\t\t    </a>
\t\t      <h3><a href=\"";
                // line 350
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "client"));
                foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementactivite", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "repertoireen")))), "html", null, true);
                    echo " ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                echo "\" title=\"See the activities and services nearby\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activite.service"), "html", null, true);
                echo "</a></h3>
\t\t      <p>See the attractions and activities near ";
                // line 351
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "client"));
                foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                    echo " ";
                    if ((!$this->getAttribute((isset($context["p"]) ? $context["p"] : null), "hebergementid", array(), "any", true, true))) {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                        echo " ";
                    } else {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nom_en"), "html", null, true);
                        echo " ";
                    }
                    echo " ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                echo "</p>
\t\t  </div>
\t  \t";
            }
            // line 354
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 355
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "restaurantDirection"));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 356
            echo "          ";
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                // line 357
                echo "\t       <div > 
\t\t    <a href=\"";
                // line 358
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementrestaurant", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "r"), "repertoirefr")))), "html", null, true);
                echo "\">
\t\t    \t";
                // line 359
                if ((!twig_test_empty($this->getAttribute($this->getContext($context, "r"), "image")))) {
                    // line 360
                    echo "                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/attrait"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "r"), "id"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "r"), "image"), "html", null, true);
                    echo "\" class=\"img_liste_forfait\" alt=\"Restaurant ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "r"), "nomfr"), "html", null, true);
                    echo "\" />
                        ";
                } else {
                    // line 362
                    echo "                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/manicouagan2.jpg"), "html", null, true);
                    echo "\" class=\"img_liste_forfait\" alt=\"Image de remplacement \" />
                        ";
                }
                // line 364
                echo "\t\t    </a>
\t\t      <h3><a href=\"";
                // line 365
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementrestaurant", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "r"), "repertoirefr")))), "html", null, true);
                echo "\">Restaurant</a></h3>
\t\t      <p>Découvrez le restaurant - ";
                // line 366
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "r"), "nomfr"), "html", null, true);
                echo "</p>    
\t\t  </div>
\t      ";
            } else {
                // line 369
                echo "\t       <div > 
\t\t    <a href=\"";
                // line 370
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementrestaurant", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "r"), "repertoireen")))), "html", null, true);
                echo "\">
\t\t    \t";
                // line 371
                if ((!twig_test_empty($this->getAttribute($this->getContext($context, "r"), "image")))) {
                    // line 372
                    echo "                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/attrait"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "r"), "id"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "r"), "image"), "html", null, true);
                    echo "\" class=\"img_liste_forfait\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "r"), "nomen"), "html", null, true);
                    echo " restaurant\" />
\t\t    \t";
                } else {
                    // line 374
                    echo "                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/manicouagan2.jpg"), "html", null, true);
                    echo "\" class=\"img_liste_forfait\" alt=\"Replacement image \" />
\t\t    \t";
                }
                // line 376
                echo "\t\t    </a>
\t\t      <h3><a href=\"";
                // line 377
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementrestaurant", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "r"), "repertoireen")))), "html", null, true);
                echo "\">Restaurant</a></h3>
\t\t      <p>Discover the restaurant - ";
                // line 378
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "r"), "nomen"), "html", null, true);
                echo "</p>    
\t\t  </div>
          ";
            }
            // line 381
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 382
        echo "\t  <br class=\"clearfloat\" />
  </div> 
  ";
        // line 385
        echo "\t";
    }

    public function getTemplateName()
    {
        return "MyAppGlobalBundle:Hebergement:MiniSitePresentation.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1517 => 385,  1513 => 382,  1507 => 381,  1501 => 378,  1494 => 376,  1488 => 374,  1476 => 372,  1474 => 371,  1461 => 366,  1457 => 365,  1454 => 364,  1448 => 362,  1430 => 358,  1427 => 357,  1424 => 356,  1419 => 355,  1413 => 354,  1390 => 351,  1353 => 344,  1340 => 343,  1337 => 342,  1314 => 339,  1299 => 338,  1296 => 337,  1290 => 335,  1276 => 332,  1263 => 331,  1260 => 330,  1253 => 328,  1248 => 327,  1239 => 324,  1218 => 319,  1204 => 317,  1198 => 315,  1195 => 314,  1190 => 313,  1187 => 312,  1173 => 311,  1162 => 306,  1159 => 305,  1155 => 304,  1151 => 303,  1147 => 302,  1143 => 301,  1139 => 300,  1135 => 299,  1127 => 297,  1123 => 296,  1119 => 295,  1115 => 294,  1109 => 293,  1105 => 291,  1101 => 290,  1098 => 289,  1094 => 288,  1090 => 287,  1082 => 285,  1078 => 284,  1062 => 280,  1058 => 279,  1054 => 278,  1038 => 274,  1035 => 273,  1029 => 271,  1015 => 269,  1009 => 267,  1006 => 266,  1003 => 265,  983 => 263,  980 => 262,  976 => 260,  962 => 257,  954 => 255,  942 => 253,  939 => 252,  930 => 250,  917 => 247,  900 => 243,  897 => 242,  895 => 241,  892 => 240,  889 => 238,  880 => 216,  872 => 214,  869 => 213,  855 => 208,  852 => 207,  841 => 203,  835 => 201,  820 => 196,  812 => 194,  793 => 191,  790 => 190,  788 => 189,  745 => 180,  739 => 179,  736 => 178,  725 => 176,  720 => 175,  701 => 171,  653 => 161,  634 => 160,  630 => 159,  625 => 158,  614 => 155,  597 => 151,  594 => 150,  584 => 147,  582 => 146,  562 => 141,  559 => 140,  557 => 139,  553 => 138,  546 => 135,  542 => 132,  515 => 126,  503 => 122,  501 => 121,  495 => 118,  480 => 112,  476 => 110,  461 => 107,  455 => 103,  442 => 99,  432 => 97,  416 => 94,  406 => 93,  403 => 92,  400 => 91,  393 => 89,  385 => 87,  362 => 85,  358 => 83,  348 => 81,  332 => 78,  314 => 75,  311 => 74,  303 => 72,  282 => 68,  276 => 66,  270 => 64,  262 => 60,  258 => 59,  251 => 55,  247 => 54,  243 => 52,  228 => 49,  222 => 45,  209 => 43,  205 => 41,  179 => 36,  169 => 35,  162 => 32,  154 => 30,  99 => 22,  85 => 20,  72 => 18,  45 => 14,  38 => 12,  33 => 11,  26 => 8,  18 => 1,  1489 => 493,  1480 => 486,  1478 => 485,  1468 => 478,  1465 => 477,  1463 => 476,  1460 => 474,  1451 => 467,  1449 => 466,  1441 => 460,  1436 => 360,  1434 => 359,  1422 => 448,  1420 => 447,  1414 => 445,  1398 => 443,  1395 => 442,  1392 => 441,  1376 => 350,  1373 => 349,  1370 => 437,  1367 => 347,  1351 => 434,  1348 => 433,  1345 => 432,  1329 => 430,  1326 => 429,  1304 => 425,  1293 => 424,  1288 => 423,  1278 => 333,  1275 => 415,  1257 => 329,  1252 => 411,  1233 => 323,  1227 => 322,  1224 => 321,  1205 => 402,  1202 => 316,  1186 => 399,  1183 => 398,  1167 => 308,  1161 => 394,  1142 => 391,  1140 => 390,  1128 => 381,  1126 => 380,  1117 => 378,  1112 => 377,  1104 => 371,  1102 => 370,  1093 => 368,  1088 => 367,  1085 => 366,  1079 => 365,  1073 => 363,  1070 => 282,  1065 => 361,  1060 => 358,  1051 => 351,  1048 => 277,  1042 => 348,  1028 => 347,  1013 => 268,  992 => 340,  988 => 339,  985 => 264,  958 => 334,  956 => 333,  952 => 332,  945 => 331,  937 => 325,  934 => 323,  914 => 321,  908 => 319,  905 => 245,  899 => 316,  874 => 313,  871 => 312,  850 => 310,  844 => 204,  842 => 307,  838 => 202,  831 => 200,  828 => 304,  826 => 197,  823 => 301,  814 => 294,  811 => 292,  805 => 291,  796 => 289,  791 => 288,  787 => 287,  784 => 286,  780 => 284,  777 => 283,  771 => 282,  762 => 280,  753 => 278,  750 => 184,  733 => 272,  730 => 271,  719 => 269,  717 => 174,  712 => 266,  708 => 264,  706 => 172,  698 => 170,  695 => 256,  689 => 255,  675 => 252,  671 => 251,  668 => 250,  658 => 162,  655 => 245,  649 => 244,  640 => 242,  631 => 240,  628 => 239,  626 => 238,  620 => 157,  618 => 235,  615 => 234,  605 => 153,  602 => 231,  591 => 229,  589 => 228,  586 => 227,  580 => 225,  578 => 145,  570 => 143,  568 => 220,  565 => 218,  556 => 211,  554 => 210,  545 => 208,  540 => 207,  532 => 201,  530 => 200,  521 => 198,  516 => 197,  509 => 124,  507 => 194,  504 => 192,  491 => 117,  489 => 183,  486 => 182,  484 => 113,  481 => 159,  475 => 158,  470 => 156,  462 => 154,  447 => 146,  445 => 122,  439 => 121,  429 => 118,  426 => 117,  421 => 116,  418 => 95,  415 => 114,  413 => 113,  410 => 111,  399 => 103,  396 => 102,  382 => 100,  368 => 98,  365 => 97,  351 => 95,  337 => 93,  323 => 91,  321 => 90,  313 => 88,  308 => 87,  300 => 81,  295 => 79,  279 => 77,  246 => 72,  232 => 50,  218 => 68,  212 => 66,  208 => 65,  203 => 64,  200 => 63,  195 => 39,  191 => 58,  183 => 52,  181 => 37,  175 => 50,  166 => 34,  161 => 47,  156 => 46,  148 => 29,  140 => 38,  131 => 28,  126 => 35,  121 => 34,  119 => 33,  116 => 32,  110 => 30,  107 => 29,  83 => 19,  79 => 22,  71 => 20,  68 => 19,  51 => 16,  47 => 15,  39 => 13,  37 => 12,  27 => 6,  24 => 5,  22 => 4,  20 => 3,  17 => 1,  2692 => 738,  2689 => 736,  2686 => 735,  2683 => 734,  2680 => 733,  2677 => 731,  2674 => 730,  2671 => 729,  2668 => 728,  2665 => 726,  2662 => 725,  2659 => 724,  2656 => 723,  2653 => 721,  2650 => 720,  2647 => 719,  2644 => 718,  2641 => 716,  2638 => 715,  2635 => 714,  2632 => 713,  2629 => 711,  2626 => 710,  2623 => 709,  2620 => 708,  2617 => 706,  2614 => 705,  2611 => 704,  2608 => 703,  2605 => 701,  2602 => 700,  2599 => 699,  2596 => 698,  2593 => 696,  2590 => 695,  2587 => 694,  2584 => 693,  2581 => 691,  2578 => 690,  2575 => 689,  2572 => 688,  2570 => 687,  2566 => 684,  2560 => 683,  2557 => 682,  2554 => 681,  2546 => 679,  2527 => 677,  2524 => 676,  2521 => 675,  2513 => 673,  2494 => 671,  2474 => 669,  2471 => 668,  2468 => 667,  2462 => 666,  2454 => 664,  2435 => 662,  2415 => 660,  2412 => 659,  2407 => 658,  2404 => 657,  2402 => 656,  2383 => 654,  2381 => 653,  2378 => 652,  2376 => 649,  2370 => 647,  2364 => 645,  2362 => 644,  2359 => 643,  2357 => 640,  2353 => 639,  2350 => 638,  2347 => 636,  2341 => 635,  2338 => 634,  2330 => 632,  2322 => 630,  2320 => 629,  2315 => 628,  2307 => 626,  2299 => 624,  2296 => 623,  2293 => 622,  2288 => 621,  2285 => 619,  2281 => 616,  2275 => 615,  2269 => 613,  2266 => 612,  2261 => 611,  2258 => 609,  2255 => 608,  2241 => 607,  2238 => 606,  2223 => 604,  2219 => 603,  2212 => 602,  2209 => 601,  2194 => 599,  2190 => 598,  2183 => 597,  2180 => 596,  2173 => 591,  2168 => 590,  2162 => 589,  2159 => 588,  2151 => 586,  2143 => 584,  2140 => 583,  2137 => 582,  2129 => 580,  2121 => 578,  2118 => 577,  2115 => 576,  2111 => 575,  2103 => 569,  2098 => 567,  2093 => 566,  2091 => 565,  2086 => 563,  2082 => 562,  2076 => 561,  2072 => 560,  2065 => 556,  2061 => 554,  2058 => 553,  2047 => 551,  2044 => 550,  2041 => 549,  2038 => 548,  2026 => 546,  2023 => 545,  2020 => 544,  2008 => 542,  2005 => 541,  2002 => 540,  2000 => 539,  1997 => 538,  1994 => 537,  1992 => 536,  1975 => 535,  1970 => 534,  1956 => 533,  1953 => 532,  1938 => 530,  1934 => 529,  1927 => 528,  1924 => 527,  1909 => 525,  1905 => 524,  1898 => 523,  1895 => 522,  1888 => 517,  1883 => 516,  1877 => 515,  1874 => 514,  1866 => 512,  1858 => 510,  1855 => 509,  1852 => 508,  1844 => 506,  1836 => 504,  1833 => 503,  1830 => 502,  1826 => 501,  1818 => 495,  1813 => 493,  1808 => 492,  1806 => 491,  1801 => 489,  1797 => 488,  1791 => 487,  1787 => 486,  1780 => 482,  1777 => 481,  1774 => 479,  1771 => 478,  1760 => 476,  1757 => 475,  1754 => 474,  1751 => 473,  1740 => 471,  1737 => 470,  1734 => 469,  1722 => 467,  1719 => 466,  1716 => 465,  1714 => 464,  1711 => 463,  1708 => 462,  1706 => 461,  1689 => 460,  1684 => 459,  1681 => 457,  1678 => 456,  1671 => 454,  1668 => 453,  1665 => 452,  1658 => 450,  1655 => 449,  1647 => 448,  1644 => 447,  1641 => 446,  1634 => 444,  1631 => 443,  1623 => 442,  1620 => 441,  1617 => 440,  1614 => 439,  1608 => 438,  1605 => 437,  1603 => 436,  1600 => 435,  1597 => 434,  1589 => 432,  1581 => 430,  1578 => 429,  1575 => 428,  1567 => 426,  1559 => 424,  1556 => 423,  1553 => 422,  1550 => 421,  1544 => 420,  1541 => 419,  1539 => 418,  1536 => 417,  1533 => 416,  1530 => 415,  1519 => 413,  1514 => 412,  1506 => 410,  1503 => 409,  1500 => 408,  1497 => 377,  1486 => 405,  1481 => 404,  1473 => 402,  1470 => 370,  1467 => 369,  1464 => 399,  1458 => 398,  1455 => 397,  1453 => 396,  1450 => 395,  1447 => 394,  1439 => 459,  1431 => 455,  1428 => 389,  1425 => 388,  1417 => 446,  1409 => 384,  1406 => 383,  1403 => 382,  1400 => 381,  1394 => 380,  1391 => 379,  1389 => 378,  1383 => 377,  1380 => 376,  1377 => 375,  1374 => 374,  1366 => 372,  1358 => 370,  1355 => 345,  1352 => 368,  1344 => 366,  1336 => 364,  1333 => 363,  1330 => 362,  1327 => 361,  1321 => 360,  1318 => 359,  1315 => 358,  1310 => 427,  1308 => 426,  1305 => 355,  1302 => 354,  1294 => 352,  1286 => 350,  1283 => 349,  1280 => 417,  1272 => 414,  1264 => 344,  1261 => 343,  1258 => 342,  1255 => 341,  1249 => 410,  1246 => 339,  1244 => 338,  1241 => 337,  1238 => 336,  1230 => 407,  1222 => 332,  1219 => 331,  1216 => 330,  1208 => 403,  1200 => 326,  1197 => 325,  1194 => 324,  1191 => 323,  1185 => 322,  1182 => 321,  1180 => 320,  1175 => 319,  1171 => 318,  1165 => 395,  1153 => 315,  1150 => 393,  1145 => 392,  1137 => 388,  1134 => 309,  1131 => 298,  1124 => 306,  1121 => 305,  1113 => 304,  1110 => 303,  1107 => 302,  1100 => 300,  1097 => 299,  1089 => 298,  1086 => 286,  1083 => 296,  1080 => 295,  1074 => 283,  1071 => 293,  1069 => 292,  1066 => 281,  1063 => 360,  1055 => 288,  1047 => 286,  1044 => 275,  1041 => 284,  1033 => 282,  1025 => 280,  1022 => 345,  1019 => 344,  1016 => 277,  1010 => 341,  1007 => 275,  1005 => 274,  1002 => 273,  999 => 272,  996 => 271,  993 => 270,  984 => 268,  979 => 267,  973 => 265,  970 => 264,  967 => 258,  964 => 336,  955 => 260,  950 => 259,  944 => 257,  941 => 256,  938 => 255,  935 => 254,  931 => 253,  928 => 322,  925 => 249,  922 => 250,  919 => 249,  916 => 248,  907 => 246,  902 => 244,  896 => 315,  893 => 242,  890 => 241,  887 => 222,  878 => 215,  873 => 237,  867 => 235,  864 => 234,  861 => 210,  858 => 209,  854 => 231,  851 => 230,  848 => 229,  846 => 228,  843 => 227,  840 => 226,  837 => 225,  829 => 223,  821 => 221,  818 => 220,  815 => 219,  809 => 193,  806 => 217,  803 => 216,  800 => 215,  797 => 214,  794 => 213,  786 => 211,  778 => 209,  775 => 208,  772 => 207,  766 => 206,  763 => 187,  760 => 186,  757 => 279,  755 => 202,  749 => 201,  746 => 275,  743 => 274,  740 => 198,  732 => 196,  724 => 194,  721 => 193,  718 => 192,  710 => 190,  702 => 188,  699 => 187,  696 => 186,  693 => 169,  687 => 166,  685 => 183,  680 => 164,  666 => 249,  663 => 180,  660 => 247,  657 => 178,  654 => 177,  646 => 175,  638 => 173,  635 => 241,  632 => 171,  624 => 169,  616 => 167,  613 => 166,  610 => 165,  607 => 154,  601 => 163,  598 => 162,  595 => 161,  592 => 149,  574 => 222,  571 => 158,  566 => 157,  564 => 156,  561 => 155,  558 => 154,  555 => 153,  547 => 151,  539 => 131,  536 => 130,  533 => 147,  525 => 145,  517 => 143,  514 => 196,  511 => 141,  508 => 140,  502 => 139,  499 => 189,  496 => 137,  493 => 136,  490 => 135,  487 => 134,  479 => 132,  471 => 130,  468 => 129,  465 => 108,  457 => 153,  449 => 147,  446 => 101,  443 => 122,  440 => 121,  434 => 119,  431 => 119,  428 => 118,  425 => 117,  423 => 116,  420 => 115,  417 => 114,  409 => 112,  401 => 104,  398 => 109,  395 => 108,  387 => 106,  379 => 86,  376 => 103,  373 => 102,  370 => 101,  364 => 100,  361 => 99,  359 => 98,  356 => 97,  353 => 96,  350 => 95,  342 => 93,  334 => 79,  331 => 90,  328 => 89,  322 => 77,  319 => 76,  317 => 89,  312 => 85,  309 => 84,  306 => 73,  298 => 80,  290 => 79,  287 => 78,  284 => 77,  278 => 76,  275 => 75,  272 => 74,  268 => 63,  266 => 72,  263 => 75,  260 => 74,  257 => 69,  249 => 67,  241 => 65,  238 => 64,  235 => 63,  227 => 61,  219 => 59,  216 => 67,  213 => 57,  210 => 56,  204 => 55,  201 => 54,  198 => 62,  196 => 52,  193 => 51,  190 => 50,  182 => 48,  174 => 46,  171 => 45,  168 => 44,  160 => 42,  152 => 40,  149 => 39,  146 => 39,  143 => 37,  137 => 36,  134 => 35,  132 => 34,  128 => 27,  123 => 32,  114 => 26,  109 => 23,  103 => 27,  100 => 26,  92 => 21,  84 => 19,  81 => 18,  78 => 17,  70 => 17,  62 => 13,  59 => 12,  56 => 11,  52 => 10,  46 => 8,  40 => 13,  36 => 4,  31 => 10,  28 => 9,);
    }
}

<?php

/* MyAppGlobalBundle:Hebergement:IncludeColonneDroiteMiniSite.html.twig */
class __TwigTemplate_3ed3666730aac8191af6d8cd4fa4a463 extends Twig_Template
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
        echo "<div id=\"cleanLink\">
";
        // line 3
        if (array_key_exists("menuService", $context)) {
            // line 4
            echo "\t";
            // line 5
            echo "\t\t";
            if ((!twig_test_empty($this->getContext($context, "distance")))) {
                // line 6
                echo "\t\t\t<h2 class=\"title_attrait\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activite.place.proximite"), "html", null, true);
                echo "</h2>
\t\t    <table width=\"340\" border=\"0\" cellspacing=\"1\" cellpadding=\"2\" style=\"font-size:12px; margin-top:12px;\">
\t\t\t  <tr>
\t\t\t    <td width=\"136\">&nbsp;</td>
\t\t\t    <td width=\"34\" align=\"center\" bgcolor=\"#999999\" style=\"color:#FFF\" ><strong>Km</strong></td>
\t\t\t  </tr>
\t\t\t";
                // line 12
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    // line 13
                    echo "\t\t\t\t  ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "distance"));
                    foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                        echo "                                    
                                        <tr>
                                          <td>";
                        // line 15
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                        echo "</td>
                                          <td align=\"center\" bgcolor=\"#e5e5e5\">";
                        // line 16
                        if (((((((((($this->getAttribute($this->getContext($context, "w"), "distance") == "0km") || ($this->getAttribute($this->getContext($context, "w"), "distance") == "0 km")) || ($this->getAttribute($this->getContext($context, "w"), "distance") == "0 KM")) || ($this->getAttribute($this->getContext($context, "w"), "distance") == "0KM")) || ($this->getAttribute($this->getContext($context, "w"), "distance") == "0 Km")) || ($this->getAttribute($this->getContext($context, "w"), "distance") == "0 K m")) || ($this->getAttribute($this->getContext($context, "w"), "distance") == "0 k m")) || ($this->getAttribute($this->getContext($context, "w"), "distance") == "0 K M")) || ($this->getAttribute($this->getContext($context, "w"), "distance") == "0"))) {
                            echo " ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sur.place"), "html", null, true);
                            echo "  ";
                        } else {
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "distance"), "html", null, true);
                            echo " ";
                        }
                        echo "</td>
                                        </tr>                                     
                                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 19
                    echo "\t\t\t";
                } else {
                    // line 20
                    echo "\t\t\t\t ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "distance"));
                    foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                        echo "   
                                        <tr>
                                          <td>";
                        // line 22
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                        echo "</td>
                                          <td align=\"center\" bgcolor=\"#e5e5e5\">";
                        // line 23
                        if (((((((((($this->getAttribute($this->getContext($context, "w"), "distance") == "0km") || ($this->getAttribute($this->getContext($context, "w"), "distance") == "0 km")) || ($this->getAttribute($this->getContext($context, "w"), "distance") == "0 KM")) || ($this->getAttribute($this->getContext($context, "w"), "distance") == "0KM")) || ($this->getAttribute($this->getContext($context, "w"), "distance") == "0 Km")) || ($this->getAttribute($this->getContext($context, "w"), "distance") == "0 K m")) || ($this->getAttribute($this->getContext($context, "w"), "distance") == "0 k m")) || ($this->getAttribute($this->getContext($context, "w"), "distance") == "0 K M")) || ($this->getAttribute($this->getContext($context, "w"), "distance") == "0"))) {
                            echo " ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sur.place"), "html", null, true);
                            echo " ";
                        } else {
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "distance"), "html", null, true);
                            echo " ";
                        }
                        echo "</td>
                                        </tr>
\t\t\t\t ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 26
                    echo "\t\t\t";
                }
                // line 27
                echo "\t\t    </table>
                ";
            }
            // line 29
            echo "        ";
            if ((!twig_test_empty($this->getContext($context, "services")))) {
                // line 30
                echo "\t<h2 class=\"title_attrait\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("services.offerts"), "html", null, true);
                echo "</h2>
        ";
            }
            // line 32
            echo "\t<ol>
\t";
            // line 33
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                // line 34
                echo "\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "services"));
                foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                    // line 35
                    echo "                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "w"), "hebergementserviceid"));
                    foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
                        // line 36
                        echo "\t    \t\t<li>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "q"), "nomfr"), "html", null, true);
                        echo "</li>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 38
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 39
                echo "\t    ";
                // line 40
                echo "\t\t<div id=\"zone_02\" style=\"margin:25px 25px 25px 0!important; float:right;\">
\t\t\t<script type='text/javascript'>
\t\t\t\tgoogletag.cmd.push(function() { googletag.display('zone_02'); });
\t\t\t</script>
\t\t</div>
\t";
            } else {
                // line 46
                echo "\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "services"));
                foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                    // line 47
                    echo "                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "w"), "hebergementserviceid"));
                    foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
                        // line 48
                        echo "\t    \t\t<li>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "q"), "nomen"), "html", null, true);
                        echo "</li>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 50
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 51
                echo "\t    ";
                // line 52
                echo "\t\t<div id=\"zone_02\" style=\"margin:25px 25px 25px 0 !important; float:right;\">
\t\t\t<script type='text/javascript'>
\t\t\t\tgoogletag.cmd.push(function() { googletag.display('zone_02'); });
\t\t\t</script>
\t\t</div>
\t";
            }
            // line 58
            echo "\t</ol>
";
        }
        // line 60
        echo "
";
        // line 62
        if (array_key_exists("menuRestaurant", $context)) {
            // line 63
            echo "\t";
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                // line 64
                echo "\t<h2 class=\"title_attrait\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                echo "</h2>
      \t<h3 class=\"slogan_attrait\">";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "metatitrefr"), "html", null, true);
                echo "</h3>
    \t\t<p>";
                // line 66
                echo twig_escape_filter($this->env, strip_tags($this->getAttribute($this->getAttribute($this->getContext($context, "p"), "descriptionattraitfr"), "texteresumefr")), "html", null, true);
                echo "</p>
    \t\t";
                // line 67
                if (array_key_exists("menuRestaurant", $context)) {
                    // line 68
                    echo "    \t\t\t<p><strong>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("plus.info"), "html", null, true);
                    echo " : <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "urlfr"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "zoneid"), "nomfr")), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "repertoirefr"), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                    echo "</a></strong></p>
    \t\t";
                } elseif (array_key_exists("menuPresentation", $context)) {
                    // line 70
                    echo "    \t\t\t<p><strong>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("plus.info"), "html", null, true);
                    echo " : <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "urlfr"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "zoneid"), "nomfr")), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "repertoirefr"), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                    echo "</a></strong></p>
    \t\t";
                } elseif (array_key_exists("menuDirectionRoutiere", $context)) {
                    // line 72
                    echo "    \t\t\t<p><strong>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("plus.info"), "html", null, true);
                    echo " : <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "urlfr"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "zoneid"), "nomfr")), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "repertoirefr"), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                    echo "</a></strong></p>
    \t\t";
                } elseif (array_key_exists("menuReservation", $context)) {
                    // line 74
                    echo "\t\t    \t";
                    if (($this->getAttribute($this->getContext($context, "p"), "hebergementid") == "")) {
                        // line 75
                        echo "\t\t   \t\t\t <p><strong>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("plus.info"), "html", null, true);
                        echo " : <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "urlfr"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "zoneid"), "nomfr")), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "repertoirefr"), "html", null, true);
                        echo "\" target=\"_blank\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                        echo "</a></strong></p>
\t\t    \t";
                    } else {
                        // line 77
                        echo "\t\t    \t <p><strong>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("plus.info"), "html", null, true);
                        echo " : <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "urlfr"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "zoneid"), "nomfr")), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "repertoirefr"), "html", null, true);
                        echo "\" target=\"_blank\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "hebergementid"), "nomfr"), "html", null, true);
                        echo "</a></strong></p>
\t\t    \t";
                    }
                    // line 79
                    echo "\t\t   ";
                }
                // line 80
                echo "\t\t   ";
                // line 81
                echo "\t\t\t<div id=\"zone_02\" class=\"bigBox\">
\t\t\t\t<script type='text/javascript'>
\t\t\t\t\tgoogletag.cmd.push(function() { googletag.display('zone_02'); });
\t\t\t\t</script>
\t\t\t</div>
\t";
            } else {
                // line 87
                echo "\t<h2 class=\"title_attrait\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                echo "</h2>
      \t<h3 class=\"slogan_attrait\">";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "metatitreen"), "html", null, true);
                echo "</h3>
    \t\t<p>";
                // line 89
                echo twig_escape_filter($this->env, strip_tags($this->getAttribute($this->getAttribute($this->getContext($context, "p"), "descriptionattraiten"), "texteresumeen")), "html", null, true);
                echo "</p>
    \t\t";
                // line 90
                if (array_key_exists("menuRestaurant", $context)) {
                    // line 91
                    echo "    \t\t\t<p><strong>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("plus.info"), "html", null, true);
                    echo " : <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "urlen"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "zoneid"), "nomen")), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "repertoireen"), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                    echo "</a></strong></p>
    \t\t";
                } elseif (array_key_exists("menuPresentation", $context)) {
                    // line 93
                    echo "    \t\t\t<p><strong>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("plus.info"), "html", null, true);
                    echo " : <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "urlen"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "zoneid"), "nomen")), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "repertoireen"), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                    echo "</a></strong></p>
    \t\t";
                } elseif (array_key_exists("menuDirectionRoutiere", $context)) {
                    // line 95
                    echo "    \t\t\t<p><strong>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("plus.info"), "html", null, true);
                    echo " : <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "urlen"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "zoneid"), "nomen")), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "repertoireen"), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                    echo "</a></strong></p>
    \t\t";
                } elseif (array_key_exists("menuReservation", $context)) {
                    // line 97
                    echo "\t\t    \t";
                    if (($this->getAttribute($this->getContext($context, "p"), "hebergementid") == "")) {
                        // line 98
                        echo "\t\t   \t\t\t <p><strong>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("plus.info"), "html", null, true);
                        echo " : <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "urlen"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "zoneid"), "nomen"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "repertoireen"), "html", null, true);
                        echo "\" target=\"_blank\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                        echo "</a></strong></p>
\t\t    \t";
                    } else {
                        // line 100
                        echo "\t\t    \t <p><strong>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("plus.info"), "html", null, true);
                        echo " : <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "urlen"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "zoneid"), "nomen")), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "repertoireen"), "html", null, true);
                        echo "\" target=\"_blank\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "hebergementid"), "nomen"), "html", null, true);
                        echo "</a></strong></p>
\t\t    \t";
                    }
                    // line 102
                    echo "\t\t   ";
                }
                // line 103
                echo "\t\t   ";
                // line 104
                echo "\t\t\t<div id=\"zone_02\" class=\"bigBox\">
\t\t\t\t<script type='text/javascript'>
\t\t\t\t\tgoogletag.cmd.push(function() { googletag.display('zone_02'); });
\t\t\t\t</script>
\t\t\t</div>
\t";
            }
        }
        // line 111
        echo "\t
";
        // line 113
        if (array_key_exists("menuForfait", $context)) {
            // line 114
            echo "\t";
            if ((!twig_test_empty($this->getContext($context, "forfait")))) {
                // line 115
                echo "\t\t";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    // line 116
                    echo "                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "client"));
                    foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                        // line 117
                        echo "                            ";
                        if ((!twig_test_empty($this->getAttribute($this->getAttribute($this->getContext($context, "a"), "descriptionhebergementfr"), "descriptionpromotionfr")))) {
                            // line 118
                            echo "                            <h2 class=\"title_attrait\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("promotion"), "html", null, true);
                            echo "</h2>
                            <div class=\"colonneDroiteMinisitepromotion\"> ";
                            // line 119
                            echo $this->getAttribute($this->getAttribute($this->getContext($context, "a"), "descriptionhebergementfr"), "descriptionpromotionfr");
                            echo " </div> 
                            ";
                        }
                        // line 121
                        echo "\t\t    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 122
                    echo "\t\t   ";
                    // line 146
                    echo "\t\t    ";
                    // line 147
                    echo "                        <div id=\"zone_02\" class=\"bigBox\">
                                <script type='text/javascript'>
                                        googletag.cmd.push(function() { googletag.display('zone_02'); });
                                </script>
                        </div>
\t\t";
                } else {
                    // line 153
                    echo "                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "client"));
                    foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                        // line 154
                        echo "                            ";
                        if ((!twig_test_empty($this->getAttribute($this->getAttribute($this->getContext($context, "a"), "descriptionhebergementen"), "descriptionpromotionen")))) {
                            // line 155
                            echo "                            <h2 class=\"title_attrait\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("promotion"), "html", null, true);
                            echo "</h2>
                        <p> ";
                            // line 156
                            echo $this->getAttribute($this->getAttribute($this->getContext($context, "a"), "descriptionhebergementen"), "descriptionpromotionen");
                            echo " </p> 
                        ";
                        }
                        // line 158
                        echo "\t\t    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 159
                    echo "\t\t    ";
                    if ((!twig_test_empty($this->getContext($context, "forfait")))) {
                        // line 160
                        echo "\t\t    \t";
                        // line 182
                        echo "\t\t    ";
                    }
                    // line 183
                    echo "\t\t    ";
                    // line 184
                    echo "                        <div id=\"zone_02\" class=\"bigBox\">
                                <script type='text/javascript'>
                                        googletag.cmd.push(function() { googletag.display('zone_02'); });
                                </script>
                        </div>
\t\t";
                }
                // line 189
                echo "                        
\t";
            }
        }
        // line 192
        echo "\t
";
        // line 194
        if (array_key_exists("menuChambre", $context)) {
            // line 195
            echo "\t<h2 class=\"title_attrait\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement.unite.tarif"), "html", null, true);
            echo "</h2>
\t";
            // line 196
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                // line 197
                echo "\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "client"));
                foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                    // line 198
                    echo "\t    \t<p>";
                    echo $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "descriptionhebergementfr"), "textegeneralechambrefr");
                    echo "</p>
\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 200
                echo "\t    ";
                // line 201
                echo "\t\t<div id=\"zone_02\" class=\"bigBox\">
\t\t\t<script type='text/javascript'>
\t\t\t\tgoogletag.cmd.push(function() { googletag.display('zone_02'); });
\t\t\t</script>
\t\t</div>
\t";
            } else {
                // line 207
                echo "\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "client"));
                foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                    // line 208
                    echo "\t    \t<p>";
                    echo $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "descriptionhebergementen"), "textegeneralechambreen");
                    echo "</p>
\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 210
                echo "\t    ";
                // line 211
                echo "\t\t<div id=\"zone_02\" class=\"bigBox\">
\t\t\t<script type='text/javascript'>
\t\t\t\tgoogletag.cmd.push(function() { googletag.display('zone_02'); });
\t\t\t</script>
\t\t</div>
\t";
            }
        }
        // line 218
        echo "\t
";
        // line 220
        if (array_key_exists("menuCorporatif", $context)) {
            // line 221
            echo "\t";
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                echo " ";
                // line 222
                echo "\t\t<h2 class=\"title_attrait\">Description générale des services corporatif et événements spéciaux</h2>
\t    <p></p>
\t    ";
                // line 224
                if (($this->getContext($context, "nbChambre") != 0)) {
                    // line 225
                    echo "\t    <h2 class=\"title_attrait\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("capacite.corpo"), "html", null, true);
                    echo "</h2>
\t    ";
                }
                // line 227
                echo "\t    <ul>
\t    ";
                // line 228
                if (($this->getContext($context, "nbChambre") >= 1)) {
                    // line 229
                    echo "\t    <li>";
                    echo twig_escape_filter($this->env, $this->getContext($context, "nbChambre"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("chambre"), "html", null, true);
                    if (($this->getContext($context, "nbChambre") > 1)) {
                        echo "s";
                    }
                    echo "</li>
\t    ";
                }
                // line 231
                echo "\t    ";
                if (($this->getContext($context, "nbSalle") >= 1)) {
                    // line 232
                    echo "\t    <li>";
                    echo twig_escape_filter($this->env, $this->getContext($context, "nbSalle"), "html", null, true);
                    echo " salle";
                    if (($this->getContext($context, "nbSalle") > 1)) {
                        echo "s";
                    }
                    echo " de réunion</li>
\t    ";
                }
                // line 234
                echo "\t    </ul>
\t    \t";
                // line 235
                if ((!twig_test_empty($this->getContext($context, "corpo")))) {
                    // line 236
                    echo "\t   \t \t\t<h2 class=\"title_attrait\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("type.even.corpo"), "html", null, true);
                    echo "</h2>
\t\t\t";
                }
                // line 238
                echo "\t    ";
                // line 239
                echo "\t    <ul>
\t    \t";
                // line 240
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "corpo"));
                foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                    // line 241
                    echo "\t    \t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "w"), "typeevenement"));
                    foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                        // line 242
                        echo "\t        \t\t<li>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "e"), "nomfr"), "html", null, true);
                        echo "</li>
\t        \t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 244
                    echo "\t        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 245
                echo "\t    </ul> 
\t  \t\t";
                // line 246
                if ((!twig_test_empty($this->getContext($context, "corpo")))) {
                    // line 247
                    echo "\t    \t\t<h2 class=\"title_attrait\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("service.corpo"), "html", null, true);
                    echo "</h2>
\t    \t";
                }
                // line 249
                echo "\t    ";
                // line 250
                echo "\t    <ul>
\t        ";
                // line 251
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "corpo"));
                foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                    // line 252
                    echo "\t    \t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "w"), "corporatifserviceid"));
                    foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                        // line 253
                        echo "\t        \t\t<li>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "e"), "nomfr"), "html", null, true);
                        echo "</li>
\t        \t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 255
                    echo "\t        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 256
                echo "\t    </ul>
\t    ";
                // line 258
                echo "\t\t<div id=\"zone_02\" class=\"bigBox\">
\t\t\t<script type='text/javascript'>
\t\t\t\tgoogletag.cmd.push(function() { googletag.display('zone_02'); });
\t\t\t</script>
\t\t</div>
    ";
            } else {
                // line 263
                echo " ";
                // line 264
                echo "\t    <h2 class=\"title_attrait\">General description of corporate services and special events</h2>
\t    <p></p>
\t    <h1>";
                // line 266
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("capacite.corpo"), "html", null, true);
                echo "</h1>
\t    <ul>
\t    ";
                // line 268
                if (($this->getContext($context, "nbChambre") >= 1)) {
                    // line 269
                    echo "\t    <li>";
                    echo twig_escape_filter($this->env, $this->getContext($context, "nbChambre"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("chambre"), "html", null, true);
                    if (($this->getContext($context, "nbChambre") > 1)) {
                        echo "s";
                    }
                    echo "</li>
\t    ";
                }
                // line 271
                echo "\t    ";
                if (($this->getContext($context, "nbSalle") >= 1)) {
                    // line 272
                    echo "\t    <li>";
                    echo twig_escape_filter($this->env, $this->getContext($context, "nbSalle"), "html", null, true);
                    echo " meeting room";
                    if (($this->getContext($context, "nbSalle") > 1)) {
                        echo "s";
                    }
                    echo "</li>
\t    ";
                }
                // line 274
                echo "\t    </ul>
\t    <h2 class=\"title_attrait\">";
                // line 275
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("type.even.corpo"), "html", null, true);
                echo "</h2>
\t    ";
                // line 277
                echo "\t    <ul>
\t    \t";
                // line 278
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "corpo"));
                foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                    // line 279
                    echo "\t    \t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "w"), "typeevenement"));
                    foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                        // line 280
                        echo "\t        \t\t<li>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "e"), "nomen"), "html", null, true);
                        echo "</li>
\t        \t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 282
                    echo "\t        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 283
                echo "\t    </ul>
\t    <h2 class=\"title_attrait\">";
                // line 284
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("service.corpo"), "html", null, true);
                echo "</h2>
\t    ";
                // line 286
                echo "\t    <ul>
\t        ";
                // line 287
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "corpo"));
                foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                    // line 288
                    echo "\t    \t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "w"), "corporatifserviceid"));
                    foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                        // line 289
                        echo "\t        \t\t<li>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "e"), "nomen"), "html", null, true);
                        echo "</li>
\t        \t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 291
                    echo "\t        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 292
                echo "\t    </ul>
\t    ";
                // line 294
                echo "\t\t<div id=\"zone_02\" class=\"bigBox\">
\t\t\t<script type='text/javascript'>
\t\t\t\tgoogletag.cmd.push(function() { googletag.display('zone_02'); });
\t\t\t</script>
\t\t</div>
    ";
            }
        }
        // line 301
        echo "
";
        // line 303
        if (array_key_exists("menuSoinSante", $context)) {
            // line 304
            echo "\t";
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                // line 305
                echo "\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "client"));
                foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                    echo " 
\t\t<h2 class=\"title_attrait\">";
                    // line 306
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                    echo "</h2>
\t\t";
                    // line 307
                    if ($this->getAttribute((isset($context["w"]) ? $context["w"] : null), "descriptionattraitfr", array(), "any", true, true)) {
                        // line 308
                        echo "\t    \t<p>";
                        echo twig_escape_filter($this->env, strip_tags($this->getAttribute($this->getAttribute($this->getContext($context, "w"), "descriptionattraitfr"), "texteresumefr")), "html", null, true);
                        echo "</p>
\t    ";
                    }
                    // line 310
                    echo "\t    <p><strong>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("plus.info"), "html", null, true);
                    echo " : <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "regionid"), "urlfr"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "zoneid"), "repertoirefr"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoirefr"), "html", null, true);
                    echo "\" target=\"_blank\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("soins"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                    echo "</a></strong></p>
\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 312
                echo "\t    <ul>
\t    \t";
                // line 313
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listeSoin"));
                foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                    // line 314
                    echo "\t    \t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "p"), "soinssanteid"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                        // line 315
                        echo "\t    \t\t\t";
                        if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                            // line 316
                            echo "\t    \t\t\t\t<h2 class=\"title_attrait\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("soin.offert"), "html", null, true);
                            echo "</h2>
\t    \t\t\t";
                        }
                        // line 318
                        echo "\t    \t\t\t";
                        if (($this->getAttribute($this->getContext($context, "e"), "nomfr") != "-----------------Aucun soin de santé--------------")) {
                            // line 319
                            echo "\t        \t\t\t<li>";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "e"), "nomfr"), "html", null, true);
                            echo "</li>
\t        \t\t";
                        }
                        // line 321
                        echo "\t        \t";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 322
                    echo "\t        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 323
                echo "\t    </ul>
\t    ";
                // line 325
                echo "\t\t<div id=\"zone_02\" class=\"bigBox\">
\t\t\t<script type='text/javascript'>
\t\t\t\tgoogletag.cmd.push(function() { googletag.display('zone_02'); });
\t\t\t</script>
\t\t</div>
\t";
            } else {
                // line 331
                echo "\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "client"));
                foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                    echo " 
\t\t<h2 class=\"title_attrait\">";
                    // line 332
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                    echo "</h2>
\t\t";
                    // line 333
                    if ($this->getAttribute((isset($context["w"]) ? $context["w"] : null), "descriptionattraiten", array(), "any", true, true)) {
                        // line 334
                        echo "\t    \t<p>";
                        echo twig_escape_filter($this->env, strip_tags($this->getAttribute($this->getAttribute($this->getContext($context, "w"), "descriptionattraiten"), "texteresumeen")), "html", null, true);
                        echo "</p>
\t    ";
                    }
                    // line 336
                    echo "\t    <p><strong>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("plus.info"), "html", null, true);
                    echo " : <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "regionid"), "urlen"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "zoneid"), "repertoireen"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoireen"), "html", null, true);
                    echo "\" target=\"_blank\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("soins"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                    echo "</a></strong></p>
\t     ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 338
                echo "\t    <ul>
\t    \t";
                // line 339
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listeSoin"));
                foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                    // line 340
                    echo "\t    \t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "p"), "soinssanteid"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                        // line 341
                        echo "\t    \t\t\t";
                        if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                            // line 342
                            echo "\t    \t\t\t\t<h2 class=\"title_attrait\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("soin.offert"), "html", null, true);
                            echo "</h2>
\t    \t\t\t";
                        }
                        // line 344
                        echo "\t    \t\t\t";
                        if (($this->getAttribute($this->getContext($context, "e"), "nomfr") != "-----------------Aucun soin de santé--------------")) {
                            // line 345
                            echo "\t        \t\t\t<li>";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "e"), "nomfr"), "html", null, true);
                            echo "</li>
\t        \t\t";
                        }
                        // line 347
                        echo "\t        \t";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 348
                    echo "\t        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 349
                echo "\t    </ul>
\t    ";
                // line 351
                echo "\t\t<div id=\"zone_02\" class=\"bigBox\">
\t\t\t<script type='text/javascript'>
\t\t\t\tgoogletag.cmd.push(function() { googletag.display('zone_02'); });
\t\t\t</script>
\t\t</div>
\t";
            }
        }
        // line 358
        echo "
";
        // line 360
        if (array_key_exists("menuReservation", $context)) {
            // line 361
            echo "\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "client"));
            foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                // line 362
                echo "\t\t";
                if (((!twig_test_empty($this->getAttribute($this->getAttribute($this->getContext($context, "w"), "politiquehebergementfr"), "politiqueannulationforfaitfr"))) || (!twig_test_empty($this->getAttribute($this->getAttribute($this->getContext($context, "w"), "politiquehebergementen"), "politiqueannulationforfaiten"))))) {
                    // line 363
                    echo "\t\t<h2 class=\"title_attrait\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("condition.annulation"), "html", null, true);
                    echo "</h2>
\t\t";
                }
                // line 365
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 366
            echo "\t";
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                // line 367
                echo "\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "client"));
                foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                    // line 368
                    echo "\t    \t<p class=\"red\">";
                    echo $this->getAttribute($this->getAttribute($this->getContext($context, "a"), "politiquehebergementfr"), "politiqueannulationforfaitfr");
                    echo "</p>
\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 370
                echo "\t    ";
                // line 371
                echo "\t\t<div id=\"zone_02\" class=\"bigBox\">
\t\t\t<script type='text/javascript'>
\t\t\t\tgoogletag.cmd.push(function() { googletag.display('zone_02'); });
\t\t\t</script>
\t\t</div>
\t";
            } else {
                // line 377
                echo "\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "client"));
                foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                    // line 378
                    echo "\t    \t<p class=\"red\">";
                    echo $this->getAttribute($this->getAttribute($this->getContext($context, "a"), "politiquehebergementen"), "politiqueannulationforfaiten");
                    echo "</p>
\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 380
                echo "\t    ";
                // line 381
                echo "\t\t<div id=\"zone_02\" class=\"bigBox\">
\t\t\t<script type='text/javascript'>
\t\t\t\tgoogletag.cmd.push(function() { googletag.display('zone_02'); });
\t\t\t</script>
\t\t</div>
\t";
            }
        }
        // line 388
        echo "
";
        // line 390
        if (array_key_exists("menuPresentation", $context)) {
            // line 391
            echo "\t";
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                // line 392
                echo "\t<h2 class=\"title_attrait\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                echo "</h2> 
      \t<h3 class=\"slogan_attrait\">";
                // line 393
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "villeid"), "nomfr"), "html", null, true);
                echo "</h3><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/classifications/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "classificationid"), "id"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "classificationid"), "image"), "html", null, true);
                echo "\" class=\"classification2\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "classificationid"), "valeur"), "html", null, true);
                echo "\" />
    \t\t<p> ";
                // line 394
                echo $this->getContext($context, "textefr");
                echo " </p>
                        ";
                // line 395
                if (array_key_exists("menuRestaurant", $context)) {
                    // line 396
                    echo "                                <p><strong>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("plus.info"), "html", null, true);
                    echo " : <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "urlfr"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "zoneid"), "repertoirefr"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "repertoirefr"), "html", null, true);
                    echo "\" target=\"_blank\" title=\"Plus d'information sur ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                    echo "</a></strong></p>
                        ";
                } elseif (array_key_exists("menuPresentation", $context)) {
                    // line 398
                    echo "                            ";
                    if ((!twig_test_empty($this->getContext($context, "soinsExiste")))) {
                        // line 399
                        echo "                                <p><strong>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("plus.info"), "html", null, true);
                        echo " : <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "urlfr"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "zoneid"), "repertoirefr"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "repertoirefr"), "html", null, true);
                        echo "\" target=\"_blank\" title=\"Plus d'information sur ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                        echo "</a></strong></p>
                            ";
                    }
                    // line 401
                    echo "                        ";
                } elseif (array_key_exists("menuDirectionRoutiere", $context)) {
                    // line 402
                    echo "                            ";
                    if ((!twig_test_empty($this->getContext($context, "soinsExiste")))) {
                        // line 403
                        echo "                                <p><strong>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("plus.info"), "html", null, true);
                        echo " : <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "urlfr"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "zoneid"), "repertoirefr"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "repertoirefr"), "html", null, true);
                        echo "\" target=\"_blank\" title=\"Plus d'information sur ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                        echo "</a></strong></p>
                            ";
                    }
                    // line 405
                    echo "                        ";
                } elseif (array_key_exists("menuReservation", $context)) {
                    // line 406
                    echo "                            ";
                    if (($this->getAttribute($this->getContext($context, "p"), "hebergementid") == "")) {
                        // line 407
                        echo "                                ";
                        if (((!twig_test_empty($this->getContext($context, "soinsExiste"))) || array_key_exists("menuRestaurant", $context))) {
                            // line 408
                            echo "                                     <p><strong>";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("plus.info"), "html", null, true);
                            echo " : <a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "urlfr"), "html", null, true);
                            echo "/";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "zoneid"), "repertoirefr"), "html", null, true);
                            echo "/";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "repertoirefr"), "html", null, true);
                            echo "\" target=\"_blank\" title=\"Plus d'information sur ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                            echo "</a></strong></p>
                                ";
                        }
                        // line 410
                        echo "                            ";
                    } else {
                        // line 411
                        echo "                                ";
                        if (((!twig_test_empty($this->getContext($context, "soinsExiste"))) || array_key_exists("menuRestaurant", $context))) {
                            echo " 
                                    <p><strong>";
                            // line 412
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("plus.info"), "html", null, true);
                            echo " : <a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "urlfr"), "html", null, true);
                            echo "/";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "zoneid"), "repertoirefr"), "html", null, true);
                            echo "/";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "repertoirefr"), "html", null, true);
                            echo "\" target=\"_blank\" title=\"Plus d'information sur ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "hebergementid"), "nomfr"), "html", null, true);
                            echo "</a></strong></p>
                                ";
                        }
                        // line 414
                        echo "                        ";
                    }
                    // line 415
                    echo "\t\t   ";
                }
                // line 416
                echo "\t\t   ";
                // line 417
                echo "\t\t\t<div id=\"zone_02\" class=\"bigBox\">
\t\t\t\t<script type='text/javascript'>
\t\t\t\t\tgoogletag.cmd.push(function() { googletag.display('zone_02'); });
\t\t\t\t</script>
\t\t\t</div>
\t";
            } else {
                // line 423
                echo "\t<h2 class=\"title_attrait\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                echo "</h2>
      \t<h3 class=\"slogan_attrait\">";
                // line 424
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "villeid"), "nomen"), "html", null, true);
                echo "</h3><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/classifications/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "classificationid"), "id"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "classificationid"), "image"), "html", null, true);
                echo "\" class=\"classification2\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "classificationid"), "valeur"), "html", null, true);
                echo "\" />
    \t\t<p> ";
                // line 425
                echo $this->getContext($context, "texteen");
                echo " </p>
                        ";
                // line 426
                if (array_key_exists("menuRestaurant", $context)) {
                    // line 427
                    echo "                                <p><strong>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("plus.info"), "html", null, true);
                    echo " : <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "urlen"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "zoneid"), "repertoireen"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "repertoireen"), "html", null, true);
                    echo "\" target=\"_blank\" title=\"More information ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                    echo "</a></strong></p>
                        ";
                } elseif (array_key_exists("menuPresentation", $context)) {
                    // line 429
                    echo "                            ";
                    if ((!array_key_exists("soinsExiste", $context))) {
                        // line 430
                        echo "                                <p><strong>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("plus.info"), "html", null, true);
                        echo " : <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "urlen"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "zoneid"), "repertoireen"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "repertoireen"), "html", null, true);
                        echo "\" target=\"_blank\" title=\"More information ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                        echo "</a></strong></p>
                            ";
                    }
                    // line 432
                    echo "                        ";
                } elseif (array_key_exists("menuDirectionRoutiere", $context)) {
                    // line 433
                    echo "                            ";
                    if ((!twig_test_empty($this->getContext($context, "soinsExiste")))) {
                        // line 434
                        echo "                                <p><strong>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("plus.info"), "html", null, true);
                        echo " : <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "urlen"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "zoneid"), "repertoireen"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "repertoireen"), "html", null, true);
                        echo "\" target=\"_blank\" title=\"More information ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                        echo "</a></strong></p>
                            ";
                    }
                    // line 436
                    echo "                        ";
                } elseif (array_key_exists("menuReservation", $context)) {
                    // line 437
                    echo "                            ";
                    if (($this->getAttribute($this->getContext($context, "p"), "hebergementid") == "")) {
                        // line 438
                        echo "                                ";
                        if (((!twig_test_empty($this->getContext($context, "soinsExiste"))) || array_key_exists("menuRestaurant", $context))) {
                            // line 439
                            echo "                                    <p><strong>";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("plus.info"), "html", null, true);
                            echo " : <a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "urlen"), "html", null, true);
                            echo "/";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "zoneid"), "repertoireen"), "html", null, true);
                            echo "/";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "repertoireen"), "html", null, true);
                            echo "\" target=\"_blank\" title=\"More information ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                            echo "</a></strong></p>
                                ";
                        }
                        // line 441
                        echo "                            ";
                    } else {
                        // line 442
                        echo "                                 ";
                        if (((!twig_test_empty($this->getContext($context, "soinsExiste"))) || array_key_exists("menuRestaurant", $context))) {
                            // line 443
                            echo "                                    <p><strong>";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("plus.info"), "html", null, true);
                            echo " : <a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "urlen"), "html", null, true);
                            echo "/";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "zoneid"), "repertoireen"), "html", null, true);
                            echo "/";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "repertoireen"), "html", null, true);
                            echo "\" target=\"_blank\" title=\"More information ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "hebergementid"), "nomen"), "html", null, true);
                            echo "</a></strong></p>
                                 ";
                        }
                        // line 445
                        echo "                            ";
                    }
                    // line 446
                    echo "                        ";
                }
                // line 447
                echo "\t\t   ";
                // line 448
                echo "\t\t\t<div id=\"zone_02\" class=\"bigBox\">
\t\t\t\t<script type='text/javascript'>
\t\t\t\t\tgoogletag.cmd.push(function() { googletag.display('zone_02'); });
\t\t\t\t</script>
\t\t\t</div>
\t";
            }
        }
        // line 455
        echo "
";
        // line 457
        if (array_key_exists("menuDirectionRoutiere", $context)) {
            // line 458
            echo "\t";
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                // line 459
                echo "\t";
                // line 460
                echo "\t\t<div id=\"zone_02\" class=\"bigBox\">
\t\t\t<script type='text/javascript'>
\t\t\t\tgoogletag.cmd.push(function() { googletag.display('zone_02'); });
\t\t\t</script>
\t\t</div>
\t";
            } else {
                // line 466
                echo "\t";
                // line 467
                echo "\t\t<div id=\"zone_02\" class=\"bigBox\">
\t\t\t<script type='text/javascript'>
\t\t\t\tgoogletag.cmd.push(function() { googletag.display('zone_02'); });
\t\t\t</script>
\t\t</div>
\t";
            }
        }
        // line 474
        echo "
";
        // line 476
        if (array_key_exists("menuGalerie", $context)) {
            // line 477
            echo "\t";
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                // line 478
                echo "\t";
                // line 479
                echo "\t\t<div id=\"zone_02\" class=\"bigBox\">
\t\t\t<script type='text/javascript'>
\t\t\t\tgoogletag.cmd.push(function() { googletag.display('zone_02'); });
\t\t\t</script>
\t\t</div>
\t";
            } else {
                // line 485
                echo "\t";
                // line 486
                echo "\t\t<div id=\"zone_02\" class=\"bigBox\">
\t\t\t<script type='text/javascript'>
\t\t\t\tgoogletag.cmd.push(function() { googletag.display('zone_02'); });
\t\t\t</script>
\t\t</div>
\t";
            }
        }
        // line 493
        echo "</div>                                    ";
    }

    public function getTemplateName()
    {
        return "MyAppGlobalBundle:Hebergement:IncludeColonneDroiteMiniSite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1489 => 493,  1480 => 486,  1478 => 485,  1468 => 478,  1465 => 477,  1463 => 476,  1460 => 474,  1451 => 467,  1449 => 466,  1441 => 460,  1436 => 458,  1434 => 457,  1422 => 448,  1420 => 447,  1414 => 445,  1398 => 443,  1395 => 442,  1392 => 441,  1376 => 439,  1373 => 438,  1370 => 437,  1367 => 436,  1351 => 434,  1348 => 433,  1345 => 432,  1329 => 430,  1326 => 429,  1304 => 425,  1293 => 424,  1288 => 423,  1278 => 416,  1275 => 415,  1257 => 412,  1252 => 411,  1233 => 408,  1227 => 406,  1224 => 405,  1205 => 402,  1202 => 401,  1186 => 399,  1183 => 398,  1167 => 396,  1161 => 394,  1142 => 391,  1140 => 390,  1128 => 381,  1126 => 380,  1117 => 378,  1112 => 377,  1104 => 371,  1102 => 370,  1093 => 368,  1088 => 367,  1085 => 366,  1079 => 365,  1073 => 363,  1070 => 362,  1065 => 361,  1060 => 358,  1051 => 351,  1048 => 349,  1042 => 348,  1028 => 347,  1013 => 342,  992 => 340,  988 => 339,  985 => 338,  958 => 334,  956 => 333,  952 => 332,  945 => 331,  937 => 325,  934 => 323,  914 => 321,  908 => 319,  905 => 318,  899 => 316,  874 => 313,  871 => 312,  850 => 310,  844 => 308,  842 => 307,  838 => 306,  831 => 305,  828 => 304,  826 => 303,  823 => 301,  814 => 294,  811 => 292,  805 => 291,  796 => 289,  791 => 288,  787 => 287,  784 => 286,  780 => 284,  777 => 283,  771 => 282,  762 => 280,  753 => 278,  750 => 277,  733 => 272,  730 => 271,  719 => 269,  717 => 268,  712 => 266,  708 => 264,  706 => 263,  698 => 258,  695 => 256,  689 => 255,  675 => 252,  671 => 251,  668 => 250,  658 => 246,  655 => 245,  649 => 244,  640 => 242,  631 => 240,  628 => 239,  626 => 238,  620 => 236,  618 => 235,  615 => 234,  605 => 232,  602 => 231,  591 => 229,  589 => 228,  586 => 227,  580 => 225,  578 => 224,  570 => 221,  568 => 220,  565 => 218,  556 => 211,  554 => 210,  545 => 208,  540 => 207,  532 => 201,  530 => 200,  521 => 198,  516 => 197,  509 => 195,  507 => 194,  504 => 192,  491 => 184,  489 => 183,  486 => 182,  484 => 160,  481 => 159,  475 => 158,  470 => 156,  462 => 154,  447 => 146,  445 => 122,  439 => 121,  429 => 118,  426 => 117,  421 => 116,  418 => 115,  415 => 114,  413 => 113,  410 => 111,  399 => 103,  396 => 102,  382 => 100,  368 => 98,  365 => 97,  351 => 95,  337 => 93,  323 => 91,  321 => 90,  313 => 88,  308 => 87,  300 => 81,  295 => 79,  279 => 77,  246 => 72,  232 => 70,  218 => 68,  212 => 66,  208 => 65,  203 => 64,  200 => 63,  195 => 60,  191 => 58,  183 => 52,  181 => 51,  175 => 50,  166 => 48,  161 => 47,  156 => 46,  148 => 40,  140 => 38,  131 => 36,  126 => 35,  121 => 34,  119 => 33,  116 => 32,  110 => 30,  107 => 29,  83 => 23,  79 => 22,  71 => 20,  68 => 19,  51 => 16,  47 => 15,  39 => 13,  37 => 12,  27 => 6,  24 => 5,  22 => 4,  20 => 3,  17 => 1,  2692 => 738,  2689 => 736,  2686 => 735,  2683 => 734,  2680 => 733,  2677 => 731,  2674 => 730,  2671 => 729,  2668 => 728,  2665 => 726,  2662 => 725,  2659 => 724,  2656 => 723,  2653 => 721,  2650 => 720,  2647 => 719,  2644 => 718,  2641 => 716,  2638 => 715,  2635 => 714,  2632 => 713,  2629 => 711,  2626 => 710,  2623 => 709,  2620 => 708,  2617 => 706,  2614 => 705,  2611 => 704,  2608 => 703,  2605 => 701,  2602 => 700,  2599 => 699,  2596 => 698,  2593 => 696,  2590 => 695,  2587 => 694,  2584 => 693,  2581 => 691,  2578 => 690,  2575 => 689,  2572 => 688,  2570 => 687,  2566 => 684,  2560 => 683,  2557 => 682,  2554 => 681,  2546 => 679,  2527 => 677,  2524 => 676,  2521 => 675,  2513 => 673,  2494 => 671,  2474 => 669,  2471 => 668,  2468 => 667,  2462 => 666,  2454 => 664,  2435 => 662,  2415 => 660,  2412 => 659,  2407 => 658,  2404 => 657,  2402 => 656,  2383 => 654,  2381 => 653,  2378 => 652,  2376 => 649,  2370 => 647,  2364 => 645,  2362 => 644,  2359 => 643,  2357 => 640,  2353 => 639,  2350 => 638,  2347 => 636,  2341 => 635,  2338 => 634,  2330 => 632,  2322 => 630,  2320 => 629,  2315 => 628,  2307 => 626,  2299 => 624,  2296 => 623,  2293 => 622,  2288 => 621,  2285 => 619,  2281 => 616,  2275 => 615,  2269 => 613,  2266 => 612,  2261 => 611,  2258 => 609,  2255 => 608,  2241 => 607,  2238 => 606,  2223 => 604,  2219 => 603,  2212 => 602,  2209 => 601,  2194 => 599,  2190 => 598,  2183 => 597,  2180 => 596,  2173 => 591,  2168 => 590,  2162 => 589,  2159 => 588,  2151 => 586,  2143 => 584,  2140 => 583,  2137 => 582,  2129 => 580,  2121 => 578,  2118 => 577,  2115 => 576,  2111 => 575,  2103 => 569,  2098 => 567,  2093 => 566,  2091 => 565,  2086 => 563,  2082 => 562,  2076 => 561,  2072 => 560,  2065 => 556,  2061 => 554,  2058 => 553,  2047 => 551,  2044 => 550,  2041 => 549,  2038 => 548,  2026 => 546,  2023 => 545,  2020 => 544,  2008 => 542,  2005 => 541,  2002 => 540,  2000 => 539,  1997 => 538,  1994 => 537,  1992 => 536,  1975 => 535,  1970 => 534,  1956 => 533,  1953 => 532,  1938 => 530,  1934 => 529,  1927 => 528,  1924 => 527,  1909 => 525,  1905 => 524,  1898 => 523,  1895 => 522,  1888 => 517,  1883 => 516,  1877 => 515,  1874 => 514,  1866 => 512,  1858 => 510,  1855 => 509,  1852 => 508,  1844 => 506,  1836 => 504,  1833 => 503,  1830 => 502,  1826 => 501,  1818 => 495,  1813 => 493,  1808 => 492,  1806 => 491,  1801 => 489,  1797 => 488,  1791 => 487,  1787 => 486,  1780 => 482,  1777 => 481,  1774 => 479,  1771 => 478,  1760 => 476,  1757 => 475,  1754 => 474,  1751 => 473,  1740 => 471,  1737 => 470,  1734 => 469,  1722 => 467,  1719 => 466,  1716 => 465,  1714 => 464,  1711 => 463,  1708 => 462,  1706 => 461,  1689 => 460,  1684 => 459,  1681 => 457,  1678 => 456,  1671 => 454,  1668 => 453,  1665 => 452,  1658 => 450,  1655 => 449,  1647 => 448,  1644 => 447,  1641 => 446,  1634 => 444,  1631 => 443,  1623 => 442,  1620 => 441,  1617 => 440,  1614 => 439,  1608 => 438,  1605 => 437,  1603 => 436,  1600 => 435,  1597 => 434,  1589 => 432,  1581 => 430,  1578 => 429,  1575 => 428,  1567 => 426,  1559 => 424,  1556 => 423,  1553 => 422,  1550 => 421,  1544 => 420,  1541 => 419,  1539 => 418,  1536 => 417,  1533 => 416,  1530 => 415,  1519 => 413,  1514 => 412,  1506 => 410,  1503 => 409,  1500 => 408,  1497 => 407,  1486 => 405,  1481 => 404,  1473 => 402,  1470 => 479,  1467 => 400,  1464 => 399,  1458 => 398,  1455 => 397,  1453 => 396,  1450 => 395,  1447 => 394,  1439 => 459,  1431 => 455,  1428 => 389,  1425 => 388,  1417 => 446,  1409 => 384,  1406 => 383,  1403 => 382,  1400 => 381,  1394 => 380,  1391 => 379,  1389 => 378,  1383 => 377,  1380 => 376,  1377 => 375,  1374 => 374,  1366 => 372,  1358 => 370,  1355 => 369,  1352 => 368,  1344 => 366,  1336 => 364,  1333 => 363,  1330 => 362,  1327 => 361,  1321 => 360,  1318 => 359,  1315 => 358,  1310 => 427,  1308 => 426,  1305 => 355,  1302 => 354,  1294 => 352,  1286 => 350,  1283 => 349,  1280 => 417,  1272 => 414,  1264 => 344,  1261 => 343,  1258 => 342,  1255 => 341,  1249 => 410,  1246 => 339,  1244 => 338,  1241 => 337,  1238 => 336,  1230 => 407,  1222 => 332,  1219 => 331,  1216 => 330,  1208 => 403,  1200 => 326,  1197 => 325,  1194 => 324,  1191 => 323,  1185 => 322,  1182 => 321,  1180 => 320,  1175 => 319,  1171 => 318,  1165 => 395,  1153 => 315,  1150 => 393,  1145 => 392,  1137 => 388,  1134 => 309,  1131 => 308,  1124 => 306,  1121 => 305,  1113 => 304,  1110 => 303,  1107 => 302,  1100 => 300,  1097 => 299,  1089 => 298,  1086 => 297,  1083 => 296,  1080 => 295,  1074 => 294,  1071 => 293,  1069 => 292,  1066 => 291,  1063 => 360,  1055 => 288,  1047 => 286,  1044 => 285,  1041 => 284,  1033 => 282,  1025 => 280,  1022 => 345,  1019 => 344,  1016 => 277,  1010 => 341,  1007 => 275,  1005 => 274,  1002 => 273,  999 => 272,  996 => 271,  993 => 270,  984 => 268,  979 => 267,  973 => 265,  970 => 264,  967 => 263,  964 => 336,  955 => 260,  950 => 259,  944 => 257,  941 => 256,  938 => 255,  935 => 254,  931 => 253,  928 => 322,  925 => 251,  922 => 250,  919 => 249,  916 => 248,  907 => 246,  902 => 245,  896 => 315,  893 => 242,  890 => 241,  887 => 240,  878 => 314,  873 => 237,  867 => 235,  864 => 234,  861 => 233,  858 => 232,  854 => 231,  851 => 230,  848 => 229,  846 => 228,  843 => 227,  840 => 226,  837 => 225,  829 => 223,  821 => 221,  818 => 220,  815 => 219,  809 => 218,  806 => 217,  803 => 216,  800 => 215,  797 => 214,  794 => 213,  786 => 211,  778 => 209,  775 => 208,  772 => 207,  766 => 206,  763 => 205,  760 => 204,  757 => 279,  755 => 202,  749 => 201,  746 => 275,  743 => 274,  740 => 198,  732 => 196,  724 => 194,  721 => 193,  718 => 192,  710 => 190,  702 => 188,  699 => 187,  696 => 186,  693 => 185,  687 => 184,  685 => 183,  680 => 253,  666 => 249,  663 => 180,  660 => 247,  657 => 178,  654 => 177,  646 => 175,  638 => 173,  635 => 241,  632 => 171,  624 => 169,  616 => 167,  613 => 166,  610 => 165,  607 => 164,  601 => 163,  598 => 162,  595 => 161,  592 => 160,  574 => 222,  571 => 158,  566 => 157,  564 => 156,  561 => 155,  558 => 154,  555 => 153,  547 => 151,  539 => 149,  536 => 148,  533 => 147,  525 => 145,  517 => 143,  514 => 196,  511 => 141,  508 => 140,  502 => 139,  499 => 189,  496 => 137,  493 => 136,  490 => 135,  487 => 134,  479 => 132,  471 => 130,  468 => 129,  465 => 155,  457 => 153,  449 => 147,  446 => 123,  443 => 122,  440 => 121,  434 => 119,  431 => 119,  428 => 118,  425 => 117,  423 => 116,  420 => 115,  417 => 114,  409 => 112,  401 => 104,  398 => 109,  395 => 108,  387 => 106,  379 => 104,  376 => 103,  373 => 102,  370 => 101,  364 => 100,  361 => 99,  359 => 98,  356 => 97,  353 => 96,  350 => 95,  342 => 93,  334 => 91,  331 => 90,  328 => 89,  322 => 88,  319 => 87,  317 => 89,  312 => 85,  309 => 84,  306 => 83,  298 => 80,  290 => 79,  287 => 78,  284 => 77,  278 => 76,  275 => 75,  272 => 74,  268 => 73,  266 => 72,  263 => 75,  260 => 74,  257 => 69,  249 => 67,  241 => 65,  238 => 64,  235 => 63,  227 => 61,  219 => 59,  216 => 67,  213 => 57,  210 => 56,  204 => 55,  201 => 54,  198 => 62,  196 => 52,  193 => 51,  190 => 50,  182 => 48,  174 => 46,  171 => 45,  168 => 44,  160 => 42,  152 => 40,  149 => 39,  146 => 39,  143 => 37,  137 => 36,  134 => 35,  132 => 34,  128 => 33,  123 => 32,  114 => 26,  109 => 25,  103 => 27,  100 => 26,  92 => 21,  84 => 19,  81 => 18,  78 => 17,  70 => 15,  62 => 13,  59 => 12,  56 => 11,  52 => 10,  46 => 8,  40 => 5,  36 => 4,  31 => 3,  28 => 2,);
    }
}

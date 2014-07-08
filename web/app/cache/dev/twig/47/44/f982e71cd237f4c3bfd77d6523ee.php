<?php

/* MyAppGlobalBundle:Hebergement:MiniSiteTemplate.html.twig */
class __TwigTemplate_4744f982e71cd237f4c3bfd77d6523ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base2.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'gauche' => array($this, 'block_gauche'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/css/clientgr.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/js/source/jquery.fancybox.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/css/css/ui-lightness/jquery-ui-1.9.1.custom.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        echo " 
\t <div class=\"telepnone reservation_en_ligne\">
\t \t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "client"));
        foreach ($context['_seq'] as $context["_key"] => $context["z"]) {
            // line 11
            echo "\t \t\t";
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                // line 12
                echo "\t\t \t\t";
                if (($this->getAttribute((isset($context["z"]) ? $context["z"] : null), "reservitid", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getContext($context, "z"), "reservitid"))))) {
                    // line 13
                    echo "\t\t\t\t\t<a style=\"margin-top:0;\" class=\"btreservation hackbtn\" rel=\"nofollow\" href=\"http://reservation.global-reservation.com/reservit/reserhotel.php?action=resa&hotelid=";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "z"), "reservitid"), "html", null, true);
                    echo "&lang=fr\" target=\"_blank\" title=\"Réservation en ligne\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("reservation.ligne"), "html", null, true);
                    echo "</a>
\t\t \t\t";
                } elseif ((($this->getAttribute((isset($context["z"]) ? $context["z"] : null), "hebergementid", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getContext($context, "z"), "hebergementid")))) && (!twig_test_empty($this->getAttribute($this->getAttribute($this->getContext($context, "z"), "hebergementid"), "reservitid"))))) {
                    // line 15
                    echo "\t\t\t\t\t<a style=\"margin-top:0;\" class=\"btreservation hackbtn\" rel=\"nofollow\" href=\"http://reservation.global-reservation.com/reservit/reserhotel.php?action=resa&hotelid=";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "z"), "hebergementid"), "reservitid"), "html", null, true);
                    echo "&lang=fr\" target=\"_blank\" title=\"Réservation en ligne\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("reservation.ligne"), "html", null, true);
                    echo "</a>
\t\t \t\t";
                }
                // line 17
                echo "\t\t\t";
            } else {
                // line 18
                echo "\t\t\t\t";
                if (($this->getAttribute((isset($context["z"]) ? $context["z"] : null), "reservitid", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getContext($context, "z"), "reservitid"))))) {
                    // line 19
                    echo "\t\t\t\t\t<a style=\"margin-top:0;\" class=\"btreservation hackbtn\" rel=\"nofollow\" href=\"http://reservation.global-reservation.com/reservit/reserhotel.php?action=resa&hotelid=";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "z"), "reservitid"), "html", null, true);
                    echo "&lang=en\" target=\"_blank\" title=\"Online Booking\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("reservation.ligne"), "html", null, true);
                    echo "</a>
\t\t\t\t";
                } elseif (($this->getAttribute((isset($context["z"]) ? $context["z"] : null), "hebergementid", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getAttribute($this->getContext($context, "z"), "hebergementid"), "reservitid"))))) {
                    // line 21
                    echo "\t\t\t\t\t<a style=\"margin-top:0;\" class=\"btreservation hackbtn\" rel=\"nofollow\" href=\"http://reservation.global-reservation.com/reservit/reserhotel.php?action=resa&hotelid=";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "z"), "hebergementid"), "reservitid"), "html", null, true);
                    echo "&lang=en\" target=\"_blank\" title=\"Online Booking\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("reservation.ligne"), "html", null, true);
                    echo "</a>
\t\t\t\t";
                }
                // line 23
                echo "\t\t\t";
            }
            // line 24
            echo "\t \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['z'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 25
        echo "\t\t<img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/pictoTelephone.gif"), "html", null, true);
        echo "\" width=\"37\" height=\"29\" alt=\"Téléphone Global Réservation\" />
\t\t<p>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sans.frais"), "html", null, true);
        echo " : <a href=\"callTo:18777788977\" class=\"callTel\" title=\"N° 1 877 778 8977\" rel=\"nofollow\" > 1 877 778-8977</a></p>
                <p>Local : <a href=\"callTo:14182662165\" class=\"callTel\" title=\"N° 1-418-266-2165\" rel=\"nofollow\"> 1-418-266-2165</a></p>
\t\t<p>International : <a href=\"callTo:0014182662165\" class=\"callTel\" title=\"N° 001-418-266-2165\" rel=\"nofollow\" > 001-418-266-2165</a></p>
                
\t </div>
\t <ul class=\"navclient\">
\t ";
        // line 32
        if (($this->getContext($context, "categorieHebergement") != "")) {
            echo " ";
            echo " 
\t \t";
            // line 33
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "client"));
            foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                // line 34
                echo "                    ";
                // line 35
                echo "                    ";
                if (array_key_exists("menuPresentation", $context)) {
                    // line 36
                    echo "\t\t    \t<li><a name=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "views"), "html", null, true);
                    echo "\" >";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("presentation"), "html", null, true);
                    echo "</a></li>";
                    // line 37
                    echo "\t\t    ";
                } else {
                    // line 38
                    echo "\t\t    \t";
                    if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                        // line 39
                        echo "                        ";
                        if (($this->getAttribute((isset($context["w"]) ? $context["w"] : null), "hebergementid", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "w"), "hebergementid") != ""))) {
                            // line 40
                            echo "                            <li><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergementid"), "repertoirefr")))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("presentation"), "html", null, true);
                            echo "</a></li>
                        ";
                        } else {
                            // line 42
                            echo "                            <li><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoirefr")))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("presentation"), "html", null, true);
                            echo "</a></li>
                        ";
                        }
                        // line 44
                        echo "\t\t    \t";
                    } else {
                        // line 45
                        echo "                        ";
                        if (($this->getAttribute((isset($context["w"]) ? $context["w"] : null), "hebergementid", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "w"), "hebergementid") != ""))) {
                            // line 46
                            echo "                            <li><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "repertoireen"), "repertoireen")))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("presentation"), "html", null, true);
                            echo "</a></li>
                        ";
                        } else {
                            // line 48
                            echo "                            <li><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoireen")))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("presentation"), "html", null, true);
                            echo "</a></li>
                        ";
                        }
                        // line 50
                        echo "\t\t    \t";
                    }
                    // line 51
                    echo "\t\t    ";
                }
                // line 52
                echo "\t\t    ";
                // line 53
                echo "\t\t    ";
                if ((!twig_test_empty($this->getContext($context, "chambre")))) {
                    // line 54
                    echo "\t\t\t    ";
                    if (array_key_exists("menuChambre", $context)) {
                        // line 55
                        echo "\t\t\t    \t<li><a name=\"";
                        echo twig_escape_filter($this->env, $this->getContext($context, "views"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("chambre.tarif"), "html", null, true);
                        echo "</a></li>";
                        // line 56
                        echo "\t\t\t    ";
                    } else {
                        // line 57
                        echo "\t\t\t    \t";
                        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                            // line 58
                            echo "\t\t\t    \t\t";
                            if (($this->getAttribute((isset($context["w"]) ? $context["w"] : null), "hebergementid", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "w"), "hebergementid") != ""))) {
                                // line 59
                                echo "\t\t\t    \t\t\t<li><a href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementchambre", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergementid"), "repertoirefr")))), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("chambre.tarif"), "html", null, true);
                                echo "</a></li>
\t\t\t    \t\t";
                            } else {
                                // line 61
                                echo "\t\t\t    \t\t\t<li><a href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementchambre", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoirefr")))), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("chambre.tarif"), "html", null, true);
                                echo "</a></li>
\t\t\t    \t\t";
                            }
                            // line 63
                            echo "\t\t\t    \t";
                        } else {
                            // line 64
                            echo "\t\t\t    \t\t";
                            if (($this->getAttribute((isset($context["w"]) ? $context["w"] : null), "hebergementid", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "w"), "hebergementid") != ""))) {
                                // line 65
                                echo "\t\t\t    \t\t\t<li><a href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementchambreen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergementid"), "repertoireen")))), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("chambre.tarif"), "html", null, true);
                                echo "</a></li>
\t\t\t    \t\t";
                            } else {
                                // line 67
                                echo "\t\t\t    \t\t\t<li><a href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementchambreen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoireen")))), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("chambre.tarif"), "html", null, true);
                                echo "</a></li>
\t\t\t    \t\t";
                            }
                            // line 69
                            echo "\t\t\t    \t";
                        }
                        // line 70
                        echo "\t\t\t    ";
                    }
                    // line 71
                    echo "\t\t\t";
                }
                // line 72
                echo "\t\t    ";
                // line 73
                echo "\t\t      ";
                if (($this->getAttribute($this->getAttribute((isset($context["w"]) ? $context["w"] : null), "acompteid", array(), "any", false, true), "id", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($this->getContext($context, "w"), "acompteid"), "id") != 1))) {
                    echo " ";
                    // line 74
                    echo "\t\t\t    ";
                    if ((!twig_test_empty($this->getContext($context, "forfait")))) {
                        // line 75
                        echo "\t\t\t\t    ";
                        if (array_key_exists("menuForfait", $context)) {
                            // line 76
                            echo "\t\t\t\t    \t<li><a name=\"";
                            echo twig_escape_filter($this->env, $this->getContext($context, "views"), "html", null, true);
                            echo "\" style=\"color:red;\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forfait.promotion"), "html", null, true);
                            echo "</a></li>";
                            // line 77
                            echo "\t\t\t\t    ";
                        } else {
                            // line 78
                            echo "\t\t\t\t    \t";
                            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                                // line 79
                                echo "\t\t\t\t    \t\t\t<li><a href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementforfait", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoirefr")))), "html", null, true);
                                echo "\" style=\"color:red;\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forfait.promotion"), "html", null, true);
                                echo "</a></li>
\t\t\t\t    \t";
                            } else {
                                // line 81
                                echo "\t\t\t\t    \t\t\t<li><a href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementforfaiten", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoireen")))), "html", null, true);
                                echo "\" style=\"color:red;\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forfait.promotion"), "html", null, true);
                                echo "</a></li>
\t\t\t\t    \t";
                            }
                            // line 83
                            echo "\t\t\t\t    ";
                        }
                        // line 84
                        echo "\t\t\t\t";
                    }
                    // line 85
                    echo "\t\t\t";
                } elseif (($this->getAttribute((isset($context["w"]) ? $context["w"] : null), "hebergementid", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergementid"), "acompteid"), "id") != 1))) {
                    echo "\t
\t\t\t\t";
                    // line 86
                    if ((!twig_test_empty($this->getContext($context, "forfait")))) {
                        // line 87
                        echo "\t\t\t\t    ";
                        if (array_key_exists("menuForfait", $context)) {
                            // line 88
                            echo "\t\t\t\t    \t<li><a name=\"";
                            echo twig_escape_filter($this->env, $this->getContext($context, "views"), "html", null, true);
                            echo "\" style=\"color:red;\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forfait.promotion"), "html", null, true);
                            echo "</a></li>";
                            // line 89
                            echo "\t\t\t\t    ";
                        } else {
                            // line 90
                            echo "\t\t\t\t    \t";
                            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                                // line 91
                                echo "\t\t\t\t    \t\t\t<li><a href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementforfait", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergementid"), "repertoirefr")))), "html", null, true);
                                echo "\" style=\"color:red;\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forfait.promotion"), "html", null, true);
                                echo "</a></li>
\t\t\t\t    \t";
                            } else {
                                // line 93
                                echo "\t\t\t\t    \t\t\t<li><a href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementforfaiten", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergementid"), "repertoireen")))), "html", null, true);
                                echo "\" style=\"color:red;\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forfait.promotion"), "html", null, true);
                                echo "</a></li>
\t\t\t\t    \t";
                            }
                            // line 95
                            echo "\t\t\t\t    ";
                        }
                        // line 96
                        echo "\t\t\t\t";
                    }
                    // line 97
                    echo "\t\t\t";
                }
                // line 98
                echo "\t\t    ";
                // line 99
                echo "\t\t    ";
                if (array_key_exists("menuService", $context)) {
                    // line 100
                    echo "\t\t    \t<li><a name=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "views"), "html", null, true);
                    echo "\" >";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activite.service"), "html", null, true);
                    echo "</a></li>";
                    // line 101
                    echo "\t\t    ";
                } else {
                    // line 102
                    echo "\t\t    \t";
                    if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                        // line 103
                        echo "\t\t    \t\t";
                        if (($this->getAttribute((isset($context["w"]) ? $context["w"] : null), "hebergementid", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "w"), "hebergementid") != ""))) {
                            // line 104
                            echo "\t\t    \t\t\t<li><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementactivite", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergementid"), "repertoirefr")))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activite.service"), "html", null, true);
                            echo "</a></li>
\t\t    \t\t";
                        } else {
                            // line 106
                            echo "\t\t    \t\t\t<li><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementactivite", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoirefr")))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activite.service"), "html", null, true);
                            echo "</a></li>
\t\t    \t\t";
                        }
                        // line 108
                        echo "\t\t    \t";
                    } else {
                        // line 109
                        echo "\t\t    \t\t";
                        if (($this->getAttribute((isset($context["w"]) ? $context["w"] : null), "hebergementid", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "w"), "hebergementid") != ""))) {
                            // line 110
                            echo "\t\t    \t\t\t<li><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementactiviteen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergementid"), "repertoireen")))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activite.service"), "html", null, true);
                            echo "</a></li>
\t\t    \t\t";
                        } else {
                            // line 112
                            echo "\t\t    \t\t\t<li><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementactiviteen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoireen")))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activite.service"), "html", null, true);
                            echo "</a></li>
\t\t    \t\t";
                        }
                        // line 114
                        echo "\t\t    \t";
                    }
                    // line 115
                    echo "\t\t    ";
                }
                // line 116
                echo "\t\t    ";
                // line 117
                echo "\t\t    ";
                if ((!$this->getAttribute((isset($context["w"]) ? $context["w"] : null), "hebergementid", array(), "any", true, true))) {
                    // line 118
                    echo "\t\t    \t";
                    if (($this->getAttribute($this->getContext($context, "w"), "corporatif") == 1)) {
                        // line 119
                        echo "\t\t\t\t    ";
                        if (array_key_exists("menuCorporatif", $context)) {
                            // line 120
                            echo "\t\t\t\t    \t<li><a name=\"";
                            echo twig_escape_filter($this->env, $this->getContext($context, "views"), "html", null, true);
                            echo "\" >";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("corporatif.speciaux"), "html", null, true);
                            echo "</a></li>";
                            // line 121
                            echo "\t\t\t\t    ";
                        } else {
                            // line 122
                            echo "\t\t\t\t    \t";
                            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                                // line 123
                                echo "\t\t\t\t    \t\t";
                                if (($this->getAttribute((isset($context["w"]) ? $context["w"] : null), "hebergementid", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "w"), "hebergementid") != ""))) {
                                    // line 124
                                    echo "                                                        <li><a href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementcorporatif", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergementid"), "repertoirefr")))), "html", null, true);
                                    echo "\">";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("corporatif.speciaux"), "html", null, true);
                                    echo "</a></li>
                                                ";
                                } else {
                                    // line 126
                                    echo "                                                        <li><a href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementcorporatif", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoirefr")))), "html", null, true);
                                    echo "\">";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("corporatif.speciaux"), "html", null, true);
                                    echo "</a></li>
                                                ";
                                }
                                // line 128
                                echo "\t\t\t\t    \t";
                            } else {
                                // line 129
                                echo "\t\t\t\t    \t\t";
                                if (($this->getAttribute((isset($context["w"]) ? $context["w"] : null), "hebergementid", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "w"), "hebergementid") != ""))) {
                                    // line 130
                                    echo "                                                        <li><a href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementcorporatifen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergementid"), "repertoireen")))), "html", null, true);
                                    echo "\">";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("corporatif.speciaux"), "html", null, true);
                                    echo "</a></li>
                                                ";
                                } else {
                                    // line 132
                                    echo "                                                        <li><a href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementcorporatifen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoireen")))), "html", null, true);
                                    echo "\">";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("corporatif.speciaux"), "html", null, true);
                                    echo "</a></li>
                                                ";
                                }
                                // line 134
                                echo "\t\t\t\t    \t";
                            }
                            // line 135
                            echo "\t\t\t\t    ";
                        }
                        // line 136
                        echo "\t\t\t\t";
                    }
                    // line 137
                    echo "\t\t\t";
                } elseif ((($this->getAttribute((isset($context["w"]) ? $context["w"] : null), "hebergementid", array(), "any", true, true) && $this->getAttribute((isset($context["w"]) ? $context["w"] : null), "hebergementid", array(), "any", true, true)) && ($this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergementid"), "corporatif") == 1))) {
                    // line 138
                    echo "\t\t\t\t";
                    if (array_key_exists("menuCorporatif", $context)) {
                        // line 139
                        echo "\t\t\t    \t<li><a name=\"";
                        echo twig_escape_filter($this->env, $this->getContext($context, "views"), "html", null, true);
                        echo "\" >";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("corporatif.speciaux"), "html", null, true);
                        echo "</a></li>";
                        // line 140
                        echo "\t\t\t    ";
                    } else {
                        // line 141
                        echo "\t\t\t    \t";
                        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                            // line 142
                            echo "\t\t\t    \t\t";
                            if (($this->getAttribute((isset($context["w"]) ? $context["w"] : null), "hebergementid", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "w"), "hebergementid") != ""))) {
                                // line 143
                                echo "                                                <li><a href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementcorporatif", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergementid"), "repertoirefr")))), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("corporatif.speciaux"), "html", null, true);
                                echo "</a></li>
                                        ";
                            } else {
                                // line 145
                                echo "                                                <li><a href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementcorporatif", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoirefr")))), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("corporatif.speciaux"), "html", null, true);
                                echo "</a></li>
                                        ";
                            }
                            // line 147
                            echo "\t\t\t    \t";
                        } else {
                            // line 148
                            echo "\t\t\t    \t\t";
                            if (($this->getAttribute((isset($context["w"]) ? $context["w"] : null), "hebergementid", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "w"), "hebergementid") != ""))) {
                                // line 149
                                echo "                                                <li><a href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementcorporatifen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergementid"), "repertoireen")))), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("corporatif.speciaux"), "html", null, true);
                                echo "</a></li>
                                        ";
                            } else {
                                // line 151
                                echo "                                                <li><a href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementcorporatifen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoireen")))), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("corporatif.speciaux"), "html", null, true);
                                echo "</a></li>
                                        ";
                            }
                            // line 153
                            echo "\t\t\t    \t";
                        }
                        // line 154
                        echo "\t\t\t    ";
                    }
                    // line 155
                    echo "\t\t\t";
                }
                // line 156
                echo "\t\t    ";
                // line 157
                echo "\t\t    ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "client"));
                foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                    // line 158
                    echo "\t\t    \t";
                    if ((!$this->getAttribute((isset($context["p"]) ? $context["p"] : null), "hebergementid", array(), "any", true, true))) {
                        // line 159
                        echo "\t\t\t\t\t";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "p"), "galeriehebergement"));
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
                            // line 160
                            echo "\t\t\t\t\t\t";
                            if ((($this->getAttribute($this->getContext($context, "q"), "image") != "") && ($this->getAttribute($this->getContext($context, "loop"), "index") == 1))) {
                                // line 161
                                echo "\t\t\t\t\t    \t";
                                if (((!$this->getAttribute((isset($context["p"]) ? $context["p"] : null), "hebergementid", array(), "any", true, true)) && (!twig_test_empty($this->getAttribute($this->getContext($context, "p"), "galeriehebergement"))))) {
                                    // line 162
                                    echo "\t\t\t\t\t\t\t    ";
                                    if (array_key_exists("menuGalerie", $context)) {
                                        // line 163
                                        echo "\t\t\t\t\t\t\t    \t<li><a name=\"";
                                        echo twig_escape_filter($this->env, $this->getContext($context, "views"), "html", null, true);
                                        echo "\" >";
                                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("galerie.photo"), "html", null, true);
                                        echo "</a></li>";
                                        // line 164
                                        echo "\t\t\t\t\t\t\t    ";
                                    } else {
                                        // line 165
                                        echo "\t\t\t\t\t\t\t    \t";
                                        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                                            // line 166
                                            echo "\t\t\t\t\t\t\t    \t\t";
                                            if (($this->getAttribute((isset($context["w"]) ? $context["w"] : null), "hebergementid", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "w"), "hebergementid") != ""))) {
                                                // line 167
                                                echo "\t\t\t\t\t\t\t    \t\t\t<li><a href=\"";
                                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementgalery", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergementid"), "repertoirefr")))), "html", null, true);
                                                echo "\">";
                                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("galerie.photo"), "html", null, true);
                                                echo "</a></li>
\t\t\t\t\t\t\t    \t\t";
                                            } else {
                                                // line 169
                                                echo "\t\t\t\t\t\t\t    \t\t\t<li><a href=\"";
                                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementgalery", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoirefr")))), "html", null, true);
                                                echo "\">";
                                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("galerie.photo"), "html", null, true);
                                                echo "</a></li>
\t\t\t\t\t\t\t    \t\t";
                                            }
                                            // line 171
                                            echo "\t\t\t\t\t\t\t    \t";
                                        } else {
                                            // line 172
                                            echo "\t\t\t\t\t\t\t    \t\t";
                                            if (($this->getAttribute((isset($context["w"]) ? $context["w"] : null), "hebergementid", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "w"), "hebergementid") != ""))) {
                                                // line 173
                                                echo "\t\t\t\t\t\t\t    \t\t\t<li><a href=\"";
                                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementgaleryen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergementid"), "repertoireen")))), "html", null, true);
                                                echo "\">";
                                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("galerie.photo"), "html", null, true);
                                                echo "</a></li>
\t\t\t\t\t\t\t    \t\t";
                                            } else {
                                                // line 175
                                                echo "\t\t\t\t\t\t\t    \t\t\t<li><a href=\"";
                                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementgaleryen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoireen")))), "html", null, true);
                                                echo "\">";
                                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("galerie.photo"), "html", null, true);
                                                echo "</a></li>
\t\t\t\t\t\t\t    \t\t";
                                            }
                                            // line 177
                                            echo "\t\t\t\t\t\t\t    \t";
                                        }
                                        // line 178
                                        echo "\t\t\t\t\t\t\t    ";
                                    }
                                    // line 179
                                    echo "\t\t\t\t\t\t\t";
                                }
                                // line 180
                                echo "\t\t\t\t\t\t";
                            }
                            // line 181
                            echo "\t\t\t\t\t";
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
                        // line 182
                        echo "\t\t\t\t";
                    } else {
                        echo "\t\t\t 
\t\t\t\t    ";
                        // line 183
                        if (array_key_exists("menuGalerie", $context)) {
                            // line 184
                            echo "\t\t\t\t    \t<li><a name=\"";
                            echo twig_escape_filter($this->env, $this->getContext($context, "views"), "html", null, true);
                            echo "\" >";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("galerie.photo"), "html", null, true);
                            echo "</a></li>";
                            // line 185
                            echo "\t\t\t\t    ";
                        } else {
                            // line 186
                            echo "\t\t\t\t    \t";
                            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                                // line 187
                                echo "\t\t\t\t    \t\t";
                                if (($this->getAttribute((isset($context["w"]) ? $context["w"] : null), "hebergementid", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "w"), "hebergementid") != ""))) {
                                    // line 188
                                    echo "\t\t\t\t    \t\t\t<li><a href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementgalery", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergementid"), "repertoirefr")))), "html", null, true);
                                    echo "\">";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("galerie.photo"), "html", null, true);
                                    echo "</a></li>
\t\t\t\t    \t\t";
                                } else {
                                    // line 190
                                    echo "\t\t\t\t    \t\t\t<li><a href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementgalery", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoirefr")))), "html", null, true);
                                    echo "\">";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("galerie.photo"), "html", null, true);
                                    echo "</a></li>
\t\t\t\t    \t\t";
                                }
                                // line 192
                                echo "\t\t\t\t    \t";
                            } else {
                                // line 193
                                echo "\t\t\t\t    \t\t";
                                if (($this->getAttribute((isset($context["w"]) ? $context["w"] : null), "hebergementid", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "w"), "hebergementid") != ""))) {
                                    // line 194
                                    echo "\t\t\t\t    \t\t\t<li><a href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementgaleryen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergementid"), "repertoireen")))), "html", null, true);
                                    echo "\">";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("galerie.photo"), "html", null, true);
                                    echo "</a></li>
\t\t\t\t    \t\t";
                                } else {
                                    // line 196
                                    echo "\t\t\t\t    \t\t\t<li><a href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementgaleryen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoireen")))), "html", null, true);
                                    echo "\">";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("galerie.photo"), "html", null, true);
                                    echo "</a></li>
\t\t\t\t    \t\t";
                                }
                                // line 198
                                echo "\t\t\t\t    \t";
                            }
                            // line 199
                            echo "\t\t\t\t\t";
                        }
                        // line 200
                        echo "\t\t\t\t";
                    }
                    // line 201
                    echo "\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 202
                echo "\t\t    ";
                // line 203
                echo "\t\t    ";
                if (($this->getAttribute($this->getAttribute((isset($context["w"]) ? $context["w"] : null), "acompteid", array(), "any", false, true), "id", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($this->getContext($context, "w"), "acompteid"), "id") != 1))) {
                    // line 204
                    echo "\t\t\t    ";
                    if ((($this->getContext($context, "soinsExiste") != "") && ($this->getContext($context, "soinsExiste") != 126))) {
                        // line 205
                        echo "\t\t    \t\t ";
                        if (array_key_exists("menuSoinSante", $context)) {
                            // line 206
                            echo "\t\t\t\t    \t<li><a name=\"";
                            echo twig_escape_filter($this->env, $this->getContext($context, "views"), "html", null, true);
                            echo "\" >";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("centre.sante.spa"), "html", null, true);
                            echo "</a></li>";
                            // line 207
                            echo "\t\t\t\t     ";
                        } else {
                            // line 208
                            echo "\t\t\t\t\t    ";
                            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                                // line 209
                                echo "\t\t\t\t\t   \t \t\t<li><a href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementsoin", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoirefr")))), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("centre.sante.spa"), "html", null, true);
                                echo "</a></li>
\t\t\t\t\t   \t ";
                            } else {
                                // line 211
                                echo "\t\t\t\t\t   \t \t\t<li><a href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementsoinen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoireen")))), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("centre.sante.spa"), "html", null, true);
                                echo "</a></li>
\t\t\t\t\t   \t ";
                            }
                            // line 213
                            echo "\t\t\t\t     ";
                        }
                        // line 214
                        echo "\t\t\t\t";
                    }
                    // line 215
                    echo "\t\t\t";
                } elseif (($this->getAttribute((isset($context["w"]) ? $context["w"] : null), "hebergementid", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergementid"), "acompteid"), "id") != 1))) {
                    // line 216
                    echo "\t\t\t\t";
                    if ((($this->getContext($context, "soinsExiste") != "") && ($this->getContext($context, "soinsExiste") != 126))) {
                        // line 217
                        echo "\t\t    \t\t ";
                        if (array_key_exists("menuSoinSante", $context)) {
                            // line 218
                            echo "\t\t\t\t    \t<li><a name=\"";
                            echo twig_escape_filter($this->env, $this->getContext($context, "views"), "html", null, true);
                            echo "\" >";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("centre.sante.spa"), "html", null, true);
                            echo "</a></li>";
                            // line 219
                            echo "\t\t\t\t     ";
                        } else {
                            // line 220
                            echo "\t\t\t\t\t    ";
                            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                                // line 221
                                echo "\t\t\t\t\t   \t \t\t<li><a href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementsoin", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergementid"), "repertoirefr")))), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("centre.sante.spa"), "html", null, true);
                                echo "</a></li>
\t\t\t\t\t   \t ";
                            } else {
                                // line 223
                                echo "\t\t\t\t\t   \t \t\t<li><a href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementsoinen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergementid"), "repertoireen")))), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("centre.sante.spa"), "html", null, true);
                                echo "</a></li>
\t\t\t\t\t   \t ";
                            }
                            // line 225
                            echo "\t\t\t\t     ";
                        }
                        // line 226
                        echo "\t\t\t\t";
                    }
                    // line 227
                    echo "\t\t\t";
                }
                // line 228
                echo "\t\t    ";
                // line 229
                echo "\t\t    ";
                if (($this->getAttribute((isset($context["w"]) ? $context["w"] : null), "hebergementid", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergementid"), "acompteid"), "id") != 1))) {
                    // line 230
                    echo "\t\t\t    ";
                    if (array_key_exists("menuRestaurant", $context)) {
                        // line 231
                        echo "\t\t\t    \t<li><a name=\"";
                        echo twig_escape_filter($this->env, $this->getContext($context, "views"), "html", null, true);
                        echo "\" >Restaurant</a></li>";
                        // line 232
                        echo "\t\t\t    ";
                    } else {
                        // line 233
                        echo "\t\t\t    \t";
                        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                            // line 234
                            echo "\t                        ";
                            if ($this->getAttribute((isset($context["w"]) ? $context["w"] : null), "hebergementid", array(), "any", true, true)) {
                                // line 235
                                echo "\t                            <li><a href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementrestaurant", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoirefr")))), "html", null, true);
                                echo "\">Restaurants</a></li>
\t                        ";
                            } else {
                                // line 237
                                echo "\t                        \t";
                                $context['_parent'] = (array) $context;
                                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "restaurantDirection"));
                                foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                                    // line 238
                                    echo "\t                            <li><a href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementrestaurant", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "t"), "repertoirefr")))), "html", null, true);
                                    echo "\">Restaurant</a></li>
\t                            ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
                                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                                // line 240
                                echo "\t                        ";
                            }
                            // line 241
                            echo "\t\t\t    \t";
                        } else {
                            // line 242
                            echo "\t                        ";
                            if ($this->getAttribute((isset($context["w"]) ? $context["w"] : null), "hebergementid", array(), "any", true, true)) {
                                // line 243
                                echo "\t                            <li><a href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementrestaurant", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoireen")))), "html", null, true);
                                echo "\">Restaurants</a></li>
\t                        ";
                            } else {
                                // line 245
                                echo "\t                        \t";
                                $context['_parent'] = (array) $context;
                                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "restaurantDirection"));
                                foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                                    // line 246
                                    echo "\t                            <li><a href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementrestaurant", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "t"), "repertoireen")))), "html", null, true);
                                    echo "\">Restaurant</a></li>
\t                            ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
                                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                                // line 248
                                echo "\t                        ";
                            }
                            // line 249
                            echo "\t\t\t    \t";
                        }
                        // line 250
                        echo "\t\t\t    ";
                    }
                    // line 251
                    echo "\t\t\t";
                } elseif (($this->getAttribute($this->getAttribute((isset($context["w"]) ? $context["w"] : null), "acompteid", array(), "any", false, true), "id", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($this->getContext($context, "w"), "acompteid"), "id") != 1))) {
                    // line 252
                    echo "\t\t\t\t";
                    if (array_key_exists("menuRestaurant", $context)) {
                        // line 253
                        echo "\t\t\t    \t<li><a name=\"";
                        echo twig_escape_filter($this->env, $this->getContext($context, "views"), "html", null, true);
                        echo "\" >Restaurant</a></li>";
                        // line 254
                        echo "\t\t\t    ";
                    } else {
                        // line 255
                        echo "\t\t\t    \t";
                        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                            // line 256
                            echo "\t                        ";
                            if ($this->getAttribute((isset($context["w"]) ? $context["w"] : null), "hebergementid", array(), "any", true, true)) {
                                // line 257
                                echo "\t                            <li><a href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementrestaurant", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoirefr")))), "html", null, true);
                                echo "\">Restaurants</a></li>
\t                        ";
                            } else {
                                // line 259
                                echo "\t                        \t";
                                $context['_parent'] = (array) $context;
                                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "restaurantDirection"));
                                foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                                    // line 260
                                    echo "\t                            <li><a href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementrestaurant", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "t"), "repertoirefr")))), "html", null, true);
                                    echo "\">Restaurant</a></li>
\t                            ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
                                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                                // line 262
                                echo "\t                        ";
                            }
                            // line 263
                            echo "\t\t\t    \t";
                        } else {
                            // line 264
                            echo "\t                        ";
                            if ($this->getAttribute((isset($context["w"]) ? $context["w"] : null), "hebergementid", array(), "any", true, true)) {
                                // line 265
                                echo "\t                            <li><a href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementrestaurant", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoireen")))), "html", null, true);
                                echo "\">Restaurants</a></li>
\t                        ";
                            } else {
                                // line 267
                                echo "\t                        \t";
                                $context['_parent'] = (array) $context;
                                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "restaurantDirection"));
                                foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                                    // line 268
                                    echo "\t                            <li><a href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementrestaurant", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "t"), "repertoireen")))), "html", null, true);
                                    echo "\">Restaurant</a></li>
\t                            ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
                                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                                // line 270
                                echo "\t                        ";
                            }
                            // line 271
                            echo "\t\t\t    \t";
                        }
                        // line 272
                        echo "\t\t\t    ";
                    }
                    // line 273
                    echo "\t\t\t";
                }
                // line 274
                echo "\t\t    ";
                // line 275
                echo "\t\t    ";
                if (array_key_exists("menuReservation", $context)) {
                    // line 276
                    echo "\t\t    \t\t<li><a name=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "views"), "html", null, true);
                    echo "\" >";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("information.reservation"), "html", null, true);
                    echo "</a></li>";
                    // line 277
                    echo "\t\t    ";
                } else {
                    // line 278
                    echo "\t\t    \t";
                    if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                        // line 279
                        echo "\t\t    \t\t";
                        if (($this->getAttribute((isset($context["w"]) ? $context["w"] : null), "hebergementid", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "w"), "hebergementid") != ""))) {
                            // line 280
                            echo "\t\t    \t\t\t<li><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementreservation", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergementid"), "repertoirefr")))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("information.reservation"), "html", null, true);
                            echo "</a></li>
\t\t    \t\t";
                        } else {
                            // line 282
                            echo "\t\t    \t\t\t<li><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementreservation", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoirefr")))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("information.reservation"), "html", null, true);
                            echo "</a></li>
\t\t    \t\t";
                        }
                        // line 284
                        echo "\t\t    \t";
                    } else {
                        // line 285
                        echo "\t\t    \t\t";
                        if (($this->getAttribute((isset($context["w"]) ? $context["w"] : null), "hebergementid", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "w"), "hebergementid") != ""))) {
                            // line 286
                            echo "\t\t    \t\t\t<li><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementreservationen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergementid"), "repertoireen")))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("information.reservation"), "html", null, true);
                            echo "</a></li>
\t\t    \t\t";
                        } else {
                            // line 288
                            echo "\t\t    \t\t\t<li><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementreservationen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoireen")))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("information.reservation"), "html", null, true);
                            echo "</a></li>
\t\t    \t\t";
                        }
                        // line 290
                        echo "\t\t    \t";
                    }
                    // line 291
                    echo "\t\t    ";
                }
                // line 292
                echo "\t\t    ";
                // line 293
                echo "\t\t    ";
                if (array_key_exists("menuDirectionRoutiere", $context)) {
                    // line 294
                    echo "\t\t    \t\t<li><a name=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "views"), "html", null, true);
                    echo "\" >";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("direction.routiere"), "html", null, true);
                    echo "</a></li>";
                    // line 295
                    echo "\t\t    ";
                } else {
                    // line 296
                    echo "\t\t    \t";
                    if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                        // line 297
                        echo "\t\t\t\t    ";
                        if ((($this->getAttribute((isset($context["w"]) ? $context["w"] : null), "hebergementid", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "w"), "latitude") != 0)) && ($this->getAttribute($this->getContext($context, "w"), "longitude") != 0))) {
                            // line 298
                            echo "\t\t\t\t    \t<li><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementdirectionroutiere", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergementid"), "repertoirefr")))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("direction.routiere"), "html", null, true);
                            echo "</a></li>
\t\t\t\t    ";
                        } elseif ((($this->getAttribute($this->getContext($context, "w"), "latitude") != 0) && ($this->getAttribute($this->getContext($context, "w"), "longitude") != 0))) {
                            // line 299
                            echo "\t
\t\t\t\t    \t<li><a href=\"";
                            // line 300
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementdirectionroutiere", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoirefr")))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("direction.routiere"), "html", null, true);
                            echo "</a></li>
\t\t\t\t    ";
                        }
                        // line 302
                        echo "\t\t\t\t ";
                    } else {
                        // line 303
                        echo "                        ";
                        if ((($this->getAttribute((isset($context["w"]) ? $context["w"] : null), "hebergementid", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "w"), "latitude") != 0)) && ($this->getAttribute($this->getContext($context, "w"), "longitude") != 0))) {
                            // line 304
                            echo "\t\t\t\t    \t<li><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementdirectionroutiereen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergementid"), "repertoireen")))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("direction.routiere"), "html", null, true);
                            echo "</a></li>
\t\t\t\t    ";
                        } elseif ((($this->getAttribute($this->getContext($context, "w"), "latitude") != 0) && ($this->getAttribute($this->getContext($context, "w"), "longitude") != 0))) {
                            // line 305
                            echo "\t
\t\t\t\t    \t<li><a href=\"";
                            // line 306
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementdirectionroutiereen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoireen")))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("direction.routiere"), "html", null, true);
                            echo "</a></li>
\t\t\t\t    ";
                        }
                        // line 308
                        echo "\t\t\t\t ";
                    }
                    // line 309
                    echo "\t\t\t";
                }
                // line 310
                echo "\t\t\t    <!--<li><a href=\"hotel71_commentaire.html#commentaire\">Vos commentaires</a></li>
\t\t\t    <li><a href=\"hotel71_monItineraire.html#itineraire\">Ajoutez à mon itinéraire</a></li>-->
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 313
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "client"));
            foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                // line 314
                echo "                        ";
                if (((!$this->getAttribute((isset($context["w"]) ? $context["w"] : null), "hebergementid", array(), "any", true, true)) && ($this->getAttribute($this->getAttribute($this->getContext($context, "w"), "cotationid"), "id") != 28))) {
                    // line 315
                    echo "                                <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/cotations"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "cotationid"), "id"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "cotationid"), "image"), "html", null, true);
                    echo "\" class=\"imgCotation\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "cotationid"), "valeur"), "html", null, true);
                    echo "\" />
                        ";
                }
                // line 317
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 318
            echo "\t ";
        } else {
            echo "\t";
            // line 319
            echo "\t \t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "client"));
            foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                // line 320
                echo "\t \t \t";
                // line 321
                echo "\t\t    ";
                if (array_key_exists("menuForfait", $context)) {
                    // line 322
                    echo "\t\t    \t<li><a name=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "views"), "html", null, true);
                    echo "\" >";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forfait.promotion"), "html", null, true);
                    echo "</a></li>";
                    // line 323
                    echo "\t\t    ";
                } else {
                    // line 324
                    echo "\t\t    \t";
                    if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                        // line 325
                        echo "\t\t    \t\t";
                        if (($this->getAttribute((isset($context["w"]) ? $context["w"] : null), "hebergementid", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "w"), "hebergementid") != ""))) {
                            // line 326
                            echo "\t\t    \t\t\t<li><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementforfait", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergementid"), "repertoirefr")))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forfait.promotion"), "html", null, true);
                            echo "</a></li>
\t\t    \t\t";
                        } else {
                            // line 328
                            echo "\t\t    \t\t\t<li><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementforfait", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoirefr")))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forfait.promotion"), "html", null, true);
                            echo "</a></li>
\t\t    \t\t";
                        }
                        // line 330
                        echo "\t\t    \t";
                    } else {
                        // line 331
                        echo "\t\t    \t\t";
                        if (($this->getAttribute((isset($context["w"]) ? $context["w"] : null), "hebergementid", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "w"), "hebergementid") != ""))) {
                            // line 332
                            echo "\t\t    \t\t\t<li><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementforfait", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergementid"), "repertoireen")))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forfait.promotion"), "html", null, true);
                            echo "</a></li>
\t\t    \t\t";
                        } else {
                            // line 334
                            echo "\t\t    \t\t\t<li><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementforfait", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoireen")))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forfait.promotion"), "html", null, true);
                            echo "</a></li>
\t\t    \t\t";
                        }
                        // line 336
                        echo "\t\t    \t";
                    }
                    // line 337
                    echo "\t\t    ";
                }
                // line 338
                echo "\t\t    ";
                // line 339
                echo "\t\t    ";
                if (array_key_exists("menuService", $context)) {
                    // line 340
                    echo "\t\t    \t<li><a name=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "views"), "html", null, true);
                    echo "\" >";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activite.service"), "html", null, true);
                    echo "</a></li>";
                    // line 341
                    echo "\t\t    ";
                } else {
                    // line 342
                    echo "\t\t    \t";
                    if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                        // line 343
                        echo "\t\t    \t\t";
                        if (($this->getAttribute((isset($context["w"]) ? $context["w"] : null), "hebergementid", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "w"), "hebergementid") != ""))) {
                            // line 344
                            echo "\t\t    \t\t\t<li><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementactivite", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergementid"), "repertoirefr")))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activite.service"), "html", null, true);
                            echo "</a></li>
\t\t    \t\t";
                        } else {
                            // line 346
                            echo "\t\t    \t\t\t<li><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementactivite", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoirefr")))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activite.service"), "html", null, true);
                            echo "</a></li>
\t\t    \t\t";
                        }
                        // line 348
                        echo "\t\t    \t";
                    } else {
                        // line 349
                        echo "\t\t    \t\t";
                        if (($this->getAttribute((isset($context["w"]) ? $context["w"] : null), "hebergementid", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "w"), "hebergementid") != ""))) {
                            // line 350
                            echo "\t\t    \t\t\t<li><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementactivite", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergementid"), "repertoireen")))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activite.service"), "html", null, true);
                            echo "</a></li>
\t\t    \t\t";
                        } else {
                            // line 352
                            echo "\t\t    \t\t\t<li><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementactivite", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoireen")))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activite.service"), "html", null, true);
                            echo "</a></li>
\t\t    \t\t";
                        }
                        // line 354
                        echo "\t\t    \t";
                    }
                    // line 355
                    echo "\t\t    ";
                }
                // line 356
                echo "\t\t    ";
                // line 357
                echo "\t\t    ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "p"), "galeriehebergement"));
                foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
                    // line 358
                    echo "\t  \t\t\t";
                    if (($this->getAttribute($this->getContext($context, "q"), "image") != "")) {
                        // line 359
                        echo "\t\t\t\t    ";
                        if (array_key_exists("menuGalerie", $context)) {
                            // line 360
                            echo "\t\t\t\t    \t<li><a name=\"";
                            echo twig_escape_filter($this->env, $this->getContext($context, "views"), "html", null, true);
                            echo "\" >";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("galerie.photo"), "html", null, true);
                            echo "</a></li>";
                            // line 361
                            echo "\t\t\t\t    ";
                        } else {
                            // line 362
                            echo "\t\t\t\t    \t";
                            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                                // line 363
                                echo "\t\t\t\t    \t\t";
                                if (($this->getAttribute((isset($context["w"]) ? $context["w"] : null), "hebergementid", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "w"), "hebergementid") != ""))) {
                                    // line 364
                                    echo "\t\t\t\t    \t\t\t<li><a href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementgalery", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergementid"), "repertoirefr")))), "html", null, true);
                                    echo "\">";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("galerie.photo"), "html", null, true);
                                    echo "</a></li>
\t\t\t\t    \t\t";
                                } else {
                                    // line 366
                                    echo "\t\t\t\t    \t\t\t<li><a href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementgalery", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoirefr")))), "html", null, true);
                                    echo "\">";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("galerie.photo"), "html", null, true);
                                    echo "</a></li>
\t\t\t\t    \t\t";
                                }
                                // line 368
                                echo "\t\t\t\t    \t";
                            } else {
                                // line 369
                                echo "\t\t\t\t    \t\t";
                                if (($this->getAttribute((isset($context["w"]) ? $context["w"] : null), "hebergementid", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "w"), "hebergementid") != ""))) {
                                    // line 370
                                    echo "\t\t\t\t    \t\t\t<li><a href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementgalery", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergementid"), "repertoireen")))), "html", null, true);
                                    echo "\">";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("galerie.photo"), "html", null, true);
                                    echo "</a></li>
\t\t\t\t    \t\t";
                                } else {
                                    // line 372
                                    echo "\t\t\t\t    \t\t\t<li><a href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementgalery", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoireen")))), "html", null, true);
                                    echo "\">";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("galerie.photo"), "html", null, true);
                                    echo "</a></li>
\t\t\t\t    \t\t";
                                }
                                // line 374
                                echo "\t\t\t\t    \t";
                            }
                            // line 375
                            echo "\t\t\t\t    ";
                        }
                        // line 376
                        echo "\t\t\t\t";
                    }
                    // line 377
                    echo "\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 378
                echo "\t\t    ";
                // line 379
                echo "\t\t    ";
                if (array_key_exists("menuSoinSante", $context)) {
                    // line 380
                    echo "\t\t    \t<li><a name=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "views"), "html", null, true);
                    echo "\" >";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("centre.sante.spa"), "html", null, true);
                    echo "</a></li>";
                    // line 381
                    echo "\t\t    ";
                } else {
                    // line 382
                    echo "\t\t\t    ";
                    if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                        // line 383
                        echo "\t\t\t    \t";
                        if (($this->getAttribute((isset($context["w"]) ? $context["w"] : null), "hebergementid", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "w"), "hebergementid") != ""))) {
                            // line 384
                            echo "\t\t\t   \t \t\t<li><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementsoin", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergementid"), "repertoirefr")))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("centre.sante.spa"), "html", null, true);
                            echo "</a></li>
\t\t\t   \t \t";
                        } else {
                            // line 386
                            echo "\t\t\t   \t \t\t<li><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementsoin", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoirefr")))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("centre.sante.spa"), "html", null, true);
                            echo "</a></li>
\t\t\t   \t \t";
                        }
                        // line 388
                        echo "\t\t\t   \t ";
                    } else {
                        // line 389
                        echo "\t\t\t   \t \t";
                        if (($this->getAttribute((isset($context["w"]) ? $context["w"] : null), "hebergementid", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "w"), "hebergementid") != ""))) {
                            // line 390
                            echo "\t\t\t   \t \t\t<li><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementsoin", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergementid"), "repertoireen")))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("centre.sante.spa"), "html", null, true);
                            echo "</a></li>
\t\t\t   \t \t";
                        } else {
                            // line 392
                            echo "\t\t\t   \t \t\t<li><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementsoin", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoireen")))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("centre.sante.spa"), "html", null, true);
                            echo "</a></li>
\t\t\t   \t \t";
                        }
                        // line 394
                        echo "\t\t\t   \t ";
                    }
                    // line 395
                    echo "\t\t    ";
                }
                // line 396
                echo "\t\t    ";
                // line 397
                echo "\t\t    ";
                if (array_key_exists("menuRestaurant", $context)) {
                    // line 398
                    echo "\t\t    \t<li><a name=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "views"), "html", null, true);
                    echo "\" >";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("restaurant"), "html", null, true);
                    echo "</a></li>";
                    // line 399
                    echo "\t\t    ";
                } else {
                    // line 400
                    echo "\t\t    \t";
                    if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                        // line 401
                        echo "                        ";
                        if ($this->getAttribute((isset($context["w"]) ? $context["w"] : null), "hebergementid", array(), "any", true, true)) {
                            // line 402
                            echo "                            <li><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementrestaurant", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoirefr")))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("restaurant"), "html", null, true);
                            echo "</a></li>
                        ";
                        } else {
                            // line 404
                            echo "                        \t";
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "restaurantDirection"));
                            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                                // line 405
                                echo "                            <li><a href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementrestaurant", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "t"), "repertoirefr")))), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("restaurant"), "html", null, true);
                                echo "</a></li>
                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
                            $context = array_merge($_parent, array_intersect_key($context, $_parent));
                            // line 407
                            echo "                        ";
                        }
                        // line 408
                        echo "\t\t    \t";
                    } else {
                        // line 409
                        echo "                        ";
                        if ($this->getAttribute((isset($context["w"]) ? $context["w"] : null), "hebergementid", array(), "any", true, true)) {
                            // line 410
                            echo "                            <li><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementrestaurant", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoireen")))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("restaurant"), "html", null, true);
                            echo "</a></li>
                        ";
                        } else {
                            // line 412
                            echo "                        \t";
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "restaurantDirection"));
                            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                                // line 413
                                echo "                            <li><a href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementrestaurant", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "t"), "repertoireen")))), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("restaurant"), "html", null, true);
                                echo "</a></li>
                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
                            $context = array_merge($_parent, array_intersect_key($context, $_parent));
                            // line 415
                            echo "                        ";
                        }
                        // line 416
                        echo "\t\t    \t";
                    }
                    // line 417
                    echo "\t\t    ";
                }
                // line 418
                echo "\t\t    ";
                // line 419
                echo "\t\t    ";
                if (array_key_exists("menuReservation", $context)) {
                    // line 420
                    echo "\t\t    \t\t<li><a name=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "views"), "html", null, true);
                    echo "\" >";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("information.reservation"), "html", null, true);
                    echo "</a></li>";
                    // line 421
                    echo "\t\t    ";
                } else {
                    // line 422
                    echo "\t\t    \t";
                    if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                        // line 423
                        echo "\t\t    \t\t";
                        if (($this->getAttribute((isset($context["w"]) ? $context["w"] : null), "hebergementid", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "w"), "hebergementid") != ""))) {
                            // line 424
                            echo "\t\t    \t\t\t<li><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementreservation", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergementid"), "repertoirefr")))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("information.reservation"), "html", null, true);
                            echo "</a></li>
\t\t    \t\t";
                        } else {
                            // line 426
                            echo "\t\t    \t\t\t<li><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementreservation", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoirefr")))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("information.reservation"), "html", null, true);
                            echo "</a></li>
\t\t    \t\t";
                        }
                        // line 428
                        echo "\t\t    \t";
                    } else {
                        // line 429
                        echo "\t\t    \t\t";
                        if (($this->getAttribute((isset($context["w"]) ? $context["w"] : null), "hebergementid", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "w"), "hebergementid") != ""))) {
                            // line 430
                            echo "\t\t    \t\t\t<li><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementreservation", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergementid"), "repertoireen")))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("information.reservation"), "html", null, true);
                            echo "</a></li>
\t\t    \t\t";
                        } else {
                            // line 432
                            echo "\t\t    \t\t\t<li><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementreservation", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoireen")))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("information.reservation"), "html", null, true);
                            echo "</a></li>
\t\t    \t\t";
                        }
                        // line 434
                        echo "\t\t    \t";
                    }
                    // line 435
                    echo "\t\t    ";
                }
                // line 436
                echo "\t\t    ";
                // line 437
                echo "\t\t    ";
                if (array_key_exists("menuDirectionRoutiere", $context)) {
                    // line 438
                    echo "\t\t    \t\t<li><a name=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "views"), "html", null, true);
                    echo "\" >";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("direction.routiere"), "html", null, true);
                    echo "</a></li>";
                    // line 439
                    echo "\t\t    ";
                } else {
                    // line 440
                    echo "\t\t    \t";
                    if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                        // line 441
                        echo "\t\t\t\t    ";
                        if ((($this->getAttribute((isset($context["w"]) ? $context["w"] : null), "hebergementid", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "w"), "latitude") != 0)) && ($this->getAttribute($this->getContext($context, "w"), "longitude") != 0))) {
                            // line 442
                            echo "\t\t\t\t    \t<li><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementdirectionroutiere", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergementid"), "repertoirefr")))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("direction.routiere"), "html", null, true);
                            echo "</a></li>
\t\t\t\t    ";
                        } elseif ((($this->getAttribute($this->getContext($context, "w"), "latitude") != 0) && ($this->getAttribute($this->getContext($context, "w"), "longitude") != 0))) {
                            // line 443
                            echo "\t
\t\t\t\t    \t<li><a href=\"";
                            // line 444
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementdirectionroutiere", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoirefr")))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("direction.routiere"), "html", null, true);
                            echo "</a></li>
\t\t\t\t    ";
                        }
                        // line 446
                        echo "\t\t\t\t ";
                    } else {
                        // line 447
                        echo "                        ";
                        if ((($this->getAttribute((isset($context["w"]) ? $context["w"] : null), "hebergementid", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "w"), "latitude") != 0)) && ($this->getAttribute($this->getContext($context, "w"), "longitude") != 0))) {
                            // line 448
                            echo "\t\t\t\t    \t<li><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementdirectionroutiere", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergementid"), "repertoireen")))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("direction.routiere"), "html", null, true);
                            echo "</a></li>
\t\t\t\t    ";
                        } elseif ((($this->getAttribute($this->getContext($context, "w"), "latitude") != 0) && ($this->getAttribute($this->getContext($context, "w"), "longitude") != 0))) {
                            // line 449
                            echo "\t
\t\t\t\t    \t<li><a href=\"";
                            // line 450
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementdirectionroutiere", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoireen")))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("direction.routiere"), "html", null, true);
                            echo "</a></li>
\t\t\t\t    ";
                        }
                        // line 452
                        echo "\t\t\t\t ";
                    }
                    // line 453
                    echo "\t\t\t";
                }
                // line 454
                echo "
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 456
            echo "\t ";
        }
        // line 457
        echo "\t </ul>
\t ";
        // line 459
        echo "\t ";
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
            echo "\t
\t  \t";
            // line 460
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "client"));
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
                // line 461
                echo "\t  \t\t";
                // line 462
                echo "\t  \t\t";
                $this->env->loadTemplate("MyAppGlobalBundle:Hebergement:IncludeColonneDroiteMiniSite.html.twig")->display($context);
                // line 463
                echo "\t\t\t    <div class=\"remplace_logo\">
\t\t\t    \t";
                // line 464
                if ($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "hebergementid", array(), "any", true, true)) {
                    // line 465
                    echo "\t\t\t    \t\t";
                    if (($this->getAttribute($this->getContext($context, "p"), "hebergementid") == "")) {
                        // line 466
                        echo "\t\t\t    \t\t\t";
                        if ((!twig_test_empty($this->getAttribute($this->getContext($context, "p"), "logo")))) {
                            // line 467
                            echo "\t\t\t    \t\t\t\t<img class=\"logo\" src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/attrait"), "html", null, true);
                            echo "/";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "id"), "html", null, true);
                            echo "/";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "logo"), "html", null, true);
                            echo "\" alt=\"Logo ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                            echo "\" />
\t\t\t    \t\t\t";
                        }
                        // line 469
                        echo "\t\t\t    \t\t";
                    } elseif (($this->getAttribute($this->getAttribute($this->getContext($context, "p"), "hebergementid"), "id") != "")) {
                        // line 470
                        echo "\t\t\t    \t\t\t";
                        if ((!twig_test_empty($this->getAttribute($this->getAttribute($this->getContext($context, "p"), "hebergementid"), "logo")))) {
                            // line 471
                            echo "\t\t\t    \t\t\t\t<img class=\"logo\" src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/hebergement/logos/logo"), "html", null, true);
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "hebergementid"), "id"), "html", null, true);
                            echo "/";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "hebergementid"), "logo"), "html", null, true);
                            echo "\" alt=\"Logo ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                            echo "\" />
\t\t\t    \t\t\t";
                        }
                        // line 473
                        echo "\t\t\t    \t\t";
                    }
                    // line 474
                    echo "\t\t\t    \t";
                } else {
                    // line 475
                    echo "\t\t\t    \t\t";
                    if ((!twig_test_empty($this->getAttribute($this->getContext($context, "p"), "logo")))) {
                        // line 476
                        echo "\t\t\t    \t\t\t<img class=\"logo\" src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/hebergement/logos/logo"), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "id"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "logo"), "html", null, true);
                        echo "\" alt=\"Logo ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                        echo "\" />
\t\t\t    \t\t";
                    }
                    // line 478
                    echo "\t\t\t    \t";
                }
                // line 479
                echo "\t\t\t    </div>
\t\t\t    ";
                // line 481
                echo "\t\t\t    <div itemscope itemtype=\"http://data-vocabulary.org/Organization\"> 
\t\t\t\t<h2><span itemprop=\"name\">";
                // line 482
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                echo "</span></h2>
\t\t\t\t  <adresse>
\t\t\t\t     \t<span itemprop=\"address\" itemscope  itemtype=\"http://data-vocabulary.org/Address\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><span itemprop=\"street-address\">";
                // line 486
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "adresse"), "html", null, true);
                echo "</span></li>
\t\t\t\t\t\t\t<li><span itemprop=\"locality\">";
                // line 487
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "villeid"), "nomfr"), "html", null, true);
                echo "</span> (<span itemprop=\"region\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "provinceetatid"), "nomfr"), "html", null, true);
                echo "</span>)</li>
                                                        <li>";
                // line 488
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "provinceetatid"), "nomfr")), "html", null, true);
                echo "</li>
                                                        <li itemprop=\"postal-code\">";
                // line 489
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "codepostal")), "html", null, true);
                echo " </li>
\t\t\t\t\t\t\t<span itemprop=\"geo\" itemscope itemtype=\"http://schema.org/GeoCoordinates\">
\t\t\t\t\t\t\t";
                // line 491
                if ((((($this->getAttribute($this->getContext($context, "p"), "latitude") != 0) && ($this->getAttribute($this->getContext($context, "p"), "latitude") != "")) && ($this->getAttribute($this->getContext($context, "p"), "longitude") != 0)) && ($this->getAttribute($this->getContext($context, "p"), "longitude") != ""))) {
                    // line 492
                    echo "\t\t\t\t\t\t\t\t<meta itemprop=\"latitude\" content=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "latitude"), "html", null, true);
                    echo "\" />
\t\t\t\t\t\t\t\t<meta itemprop=\"longitude\" content=\"";
                    // line 493
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "longitude"), "html", null, true);
                    echo "\" />
\t\t\t\t\t\t\t";
                }
                // line 495
                echo "\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</ul>
                                        </span>
                                 </adresse>
                           </div>
                           <div class=\"telepnone\">
                            ";
                // line 501
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "client"));
                foreach ($context['_seq'] as $context["_key"] => $context["z"]) {
                    // line 502
                    echo "                                    ";
                    if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                        // line 503
                        echo "                                            ";
                        if (($this->getAttribute((isset($context["z"]) ? $context["z"] : null), "reservitid", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getContext($context, "z"), "reservitid"))))) {
                            // line 504
                            echo "                                                    <a style=\"margin-top:0;\" class=\"btreservation hackbtn\" rel=\"nofollow\" href=\"http://reservation.global-reservation.com/reservit/reserhotel.php?action=resa&hotelid=";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "z"), "reservitid"), "html", null, true);
                            echo "&lang=fr\" target=\"_blank\" title=\"Réservation en ligne\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("reservation.ligne"), "html", null, true);
                            echo "</a>
                                            ";
                        } elseif ((($this->getAttribute((isset($context["z"]) ? $context["z"] : null), "hebergementid", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getAttribute($this->getContext($context, "z"), "hebergementid"), "reservitid")))) && (!twig_test_empty($this->getAttribute($this->getAttribute($this->getContext($context, "z"), "hebergementid"), "reservit"))))) {
                            // line 506
                            echo "                                                    <a style=\"margin-top:0;\" class=\"btreservation hackbtn\" rel=\"nofollow\" href=\"http://reservation.global-reservation.com/reservit/reserhotel.php?action=resa&hotelid=";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "z"), "hebergementid"), "reservitid"), "html", null, true);
                            echo "&lang=fr\" target=\"_blank\" title=\"Réservation en ligne\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("reservation.ligne"), "html", null, true);
                            echo "</a>
                                            ";
                        }
                        // line 508
                        echo "                                    ";
                    } else {
                        // line 509
                        echo "                                            ";
                        if (($this->getAttribute((isset($context["z"]) ? $context["z"] : null), "reservitid", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getContext($context, "z"), "reservitid"))))) {
                            // line 510
                            echo "                                                    <a style=\"margin-top:0;\" class=\"btreservation hackbtn\" rel=\"nofollow\" href=\"http://reservation.global-reservation.com/reservit/reserhotel.php?action=resa&hotelid=";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "z"), "reservitid"), "html", null, true);
                            echo "&lang=en\" target=\"_blank\" title=\"Online Booking\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("reservation.ligne"), "html", null, true);
                            echo "</a>
                                            ";
                        } elseif ((($this->getAttribute((isset($context["z"]) ? $context["z"] : null), "hebergementid", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getAttribute($this->getContext($context, "z"), "hebergementid"), "reservitid")))) && (!twig_test_empty($this->getAttribute($this->getAttribute($this->getContext($context, "z"), "hebergementid"), "reservit"))))) {
                            // line 512
                            echo "                                                    <a style=\"margin-top:0;\" class=\"btreservation hackbtn\" rel=\"nofollow\" href=\"http://reservation.global-reservation.com/reservit/reserhotel.php?action=resa&hotelid=";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "z"), "hebergementid"), "reservitid"), "html", null, true);
                            echo "&lang=en\" target=\"_blank\" title=\"Online Booking\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("reservation.ligne"), "html", null, true);
                            echo "</a>
                                            ";
                        }
                        // line 514
                        echo "                                    ";
                    }
                    // line 515
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['z'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 516
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/pictoTelephone.gif"), "html", null, true);
                echo "\" width=\"37\" height=\"29\" />
                                    <p>";
                // line 517
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sans.frais"), "html", null, true);
                echo " : <a href=\"callTo:18777788977\" class=\"callTel\" title=\"N° 1 877 778 8977\" rel=\"nofollow\"> 1 877 778-8977</a></p>
                                    <p>Local : <a href=\"callTo:14182662165\" class=\"callTel\" title=\"N° 1-418-266-2165\" rel=\"nofollow\"> 1-418-266-2165</a></p>
                                    <p>International : <a href=\"callTo:0014182662165\" class=\"callTel\" title=\"N° 001-418-266-2165\" rel=\"nofollow\"> 001-418-266-2165</a></p>                
                            </div>
\t\t\t";
                // line 522
                echo "\t\t\t";
                if (((!$this->getAttribute((isset($context["p"]) ? $context["p"] : null), "hebergementid", array(), "any", true, true)) && (!twig_test_empty($this->getAttribute($this->getContext($context, "p"), "affiliationid"))))) {
                    // line 523
                    echo "\t\t\t\t<h3>Affiliation";
                    if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "affiliationid")) > 1)) {
                        echo "s";
                    }
                    echo "</h3>
\t\t\t\t";
                    // line 524
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "p"), "affiliationid"));
                    foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                        // line 525
                        echo "\t\t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/affiliations"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "id"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "image"), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                        echo "\" class=\"logo_affiliation_client\" />
\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 527
                    echo "\t\t\t";
                } elseif (($this->getAttribute($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "hebergementid", array(), "any", false, true), "affiliationid", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getAttribute($this->getContext($context, "p"), "hebergementid"), "affiliationid"))))) {
                    // line 528
                    echo "\t\t\t\t<h3>Affiliation";
                    if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "hebergementid"), "affiliationid")) > 1)) {
                        echo "s";
                    }
                    echo "</h3>
\t\t\t\t";
                    // line 529
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "p"), "hebergementid"), "affiliationid"));
                    foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                        // line 530
                        echo "\t\t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/affiliations"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "id"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "image"), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                        echo "\" class=\"logo_affiliation_client\" />
\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 532
                    echo "\t\t\t";
                }
                // line 533
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
            // line 534
            echo "\t";
        } else {
            echo "\t
\t\t";
            // line 535
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "client"));
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
                // line 536
                echo "\t\t\t";
                // line 537
                echo "\t\t    ";
                $this->env->loadTemplate("MyAppGlobalBundle:Hebergement:IncludeColonneDroiteMiniSite.html.twig")->display($context);
                // line 538
                echo "\t\t\t\t <div class=\"remplace_logo\">
\t\t\t    \t";
                // line 539
                if ($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "hebergementid", array(), "any", true, true)) {
                    // line 540
                    echo "\t\t\t    \t\t";
                    if (($this->getAttribute($this->getContext($context, "p"), "hebergementid") == "")) {
                        // line 541
                        echo "\t\t\t    \t\t\t";
                        if ((!twig_test_empty($this->getAttribute($this->getContext($context, "p"), "logo")))) {
                            // line 542
                            echo "\t\t\t    \t\t\t\t<img class=\"logo\" src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/attrait"), "html", null, true);
                            echo "/";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "id"), "html", null, true);
                            echo "/";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "logo"), "html", null, true);
                            echo "\" alt=\"Logo ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                            echo "\" />
\t\t\t    \t\t\t";
                        }
                        // line 544
                        echo "\t\t\t    \t\t";
                    } elseif (($this->getAttribute($this->getAttribute($this->getContext($context, "p"), "hebergementid"), "id") != "")) {
                        // line 545
                        echo "\t\t\t    \t\t\t";
                        if ((!twig_test_empty($this->getAttribute($this->getAttribute($this->getContext($context, "p"), "hebergementid"), "logo")))) {
                            // line 546
                            echo "\t\t\t    \t\t\t\t<img class=\"logo\" src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/hebergement/logos/logo"), "html", null, true);
                            echo "/";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "hebergementid"), "id"), "html", null, true);
                            echo "/";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "hebergementid"), "logo"), "html", null, true);
                            echo "\" alt=\"Logo ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                            echo "\" />
\t\t\t    \t\t\t";
                        }
                        // line 548
                        echo "\t\t\t    \t\t";
                    }
                    // line 549
                    echo "\t\t\t    \t";
                } else {
                    // line 550
                    echo "\t\t\t    \t\t";
                    if ((!twig_test_empty($this->getAttribute($this->getContext($context, "p"), "logo")))) {
                        // line 551
                        echo "\t\t\t    \t\t\t<img class=\"logo\" src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/hebergement/logos/logo"), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "id"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "logo"), "html", null, true);
                        echo "\" alt=\"Logo ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                        echo "\" />
\t\t\t    \t\t";
                    }
                    // line 553
                    echo "\t\t\t    \t";
                }
                // line 554
                echo "\t\t\t    </div>
\t\t\t\t<div itemscope itemtype=\"http://data-vocabulary.org/Organization\"> 
\t\t\t\t    <h2><span itemprop=\"name\">";
                // line 556
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                echo "</span></h2>
\t\t\t\t     <adresse>
\t\t\t\t     \t<span itemprop=\"address\" itemscope  itemtype=\"http://data-vocabulary.org/Address\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><span itemprop=\"street-address\">";
                // line 560
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "adresse"), "html", null, true);
                echo "</span></li>
                                                        <li><span itemprop=\"locality\">";
                // line 561
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "villeid"), "nomen"), "html", null, true);
                echo "</span> (<span itemprop=\"region\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "provinceetatid"), "nomen"), "html", null, true);
                echo "</span>)</li>
                                                        <li>";
                // line 562
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "provinceetatid"), "nomen")), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t<li>";
                // line 563
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "codepostal")), "html", null, true);
                echo " </li>
\t\t\t\t\t\t\t<span itemprop=\"geo\" itemscope itemtype=\"http://schema.org/GeoCoordinates\">
\t\t\t\t\t\t\t";
                // line 565
                if ((((($this->getAttribute($this->getContext($context, "p"), "latitude") != 0) && ($this->getAttribute($this->getContext($context, "p"), "latitude") != "")) && ($this->getAttribute($this->getContext($context, "p"), "longitude") != 0)) && ($this->getAttribute($this->getContext($context, "p"), "longitude") != ""))) {
                    // line 566
                    echo "\t\t\t\t\t\t\t\t<meta itemprop=\"latitude\" content=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "latitude"), "html", null, true);
                    echo "\" />
\t\t\t\t\t\t\t\t<meta itemprop=\"longitude\" content=\"";
                    // line 567
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "longitude"), "html", null, true);
                    echo "\" />
\t\t\t\t\t\t\t";
                }
                // line 569
                echo "\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</span>
\t\t\t\t\t</adresse>
\t\t\t\t</div>
                               <div class=\"telepnone\">
                                    ";
                // line 575
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "client"));
                foreach ($context['_seq'] as $context["_key"] => $context["z"]) {
                    // line 576
                    echo "                                            ";
                    if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                        // line 577
                        echo "                                                    ";
                        if (($this->getAttribute((isset($context["z"]) ? $context["z"] : null), "reservitid", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getContext($context, "z"), "reservitid"))))) {
                            // line 578
                            echo "                                                            <a style=\"margin-top:0;\" class=\"btreservation hackbtn\" rel=\"nofollow\" href=\"http://reservation.global-reservation.com/reservit/reserhotel.php?action=resa&hotelid=";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "z"), "reservitid"), "html", null, true);
                            echo "&lang=fr\" target=\"_blank\" title=\"Réservation en ligne\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("reservation.ligne"), "html", null, true);
                            echo "</a>
                                                    ";
                        } elseif ((($this->getAttribute((isset($context["z"]) ? $context["z"] : null), "hebergementid", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getAttribute($this->getContext($context, "z"), "hebergementid"), "reservitid")))) && (!twig_test_empty($this->getAttribute($this->getAttribute($this->getContext($context, "z"), "hebergementid"), "reservit"))))) {
                            // line 580
                            echo "                                                            <a style=\"margin-top:0;\" class=\"btreservation hackbtn\" rel=\"nofollow\" href=\"http://reservation.global-reservation.com/reservit/reserhotel.php?action=resa&hotelid=";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "z"), "hebergementid"), "reservitid"), "html", null, true);
                            echo "&lang=fr\" target=\"_blank\" title=\"Réservation en ligne\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("reservation.ligne"), "html", null, true);
                            echo "</a>
                                                    ";
                        }
                        // line 582
                        echo "                                            ";
                    } else {
                        // line 583
                        echo "                                                    ";
                        if (($this->getAttribute((isset($context["z"]) ? $context["z"] : null), "reservitid", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getContext($context, "z"), "reservitid"))))) {
                            // line 584
                            echo "                                                            <a style=\"margin-top:0;\" class=\"btreservation hackbtn\" rel=\"nofollow\" href=\"http://reservation.global-reservation.com/reservit/reserhotel.php?action=resa&hotelid=";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "z"), "reservitid"), "html", null, true);
                            echo "&lang=en\" target=\"_blank\" title=\"Online Booking\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("reservation.ligne"), "html", null, true);
                            echo "</a>
                                                    ";
                        } elseif ((($this->getAttribute((isset($context["z"]) ? $context["z"] : null), "hebergementid", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getAttribute($this->getContext($context, "z"), "hebergementid"), "reservitid")))) && (!twig_test_empty($this->getAttribute($this->getAttribute($this->getContext($context, "z"), "hebergementid"), "reservit"))))) {
                            // line 586
                            echo "                                                            <a style=\"margin-top:0;\" class=\"btreservation hackbtn\" rel=\"nofollow\" href=\"http://reservation.global-reservation.com/reservit/reserhotel.php?action=resa&hotelid=";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "z"), "hebergementid"), "reservitid"), "html", null, true);
                            echo "&lang=en\" target=\"_blank\" title=\"Online Booking\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("reservation.ligne"), "html", null, true);
                            echo "</a>
                                                    ";
                        }
                        // line 588
                        echo "                                            ";
                    }
                    // line 589
                    echo "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['z'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 590
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/pictoTelephone.gif"), "html", null, true);
                echo "\" width=\"37\" height=\"29\" />
                                            <p>";
                // line 591
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sans.frais"), "html", null, true);
                echo " : <a href=\"callTo:18777788977\" class=\"callTel\" title=\"N° 1 877 778 8977\" > 1 877 778-8977</a></p>
                                            <p>Local : <a href=\"callTo:14182662165\" class=\"callTel\" title=\"N° 1-418-266-2165\" > 1-418-266-2165</a></p>
                                            <p>International : <a href=\"callTo:0014182662165\" class=\"callTel\" title=\"N° 001-418-266-2165\" > 001-418-266-2165</a></p>                
                                    </div>
                                    ";
                // line 596
                echo "                                    ";
                if (((!$this->getAttribute((isset($context["p"]) ? $context["p"] : null), "hebergementid", array(), "any", true, true)) && (!twig_test_empty($this->getAttribute($this->getContext($context, "p"), "affiliationid"))))) {
                    // line 597
                    echo "                                            <h3>Affiliate";
                    if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "affiliationid")) > 1)) {
                        echo "s";
                    }
                    echo "</h3>
                                            ";
                    // line 598
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "p"), "affiliationid"));
                    foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                        // line 599
                        echo "                                                    <img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/affiliations"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "id"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "image"), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                        echo "\" class=\"logo_affiliation_client\" />
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 601
                    echo "                                    ";
                } elseif (($this->getAttribute($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "hebergementid", array(), "any", false, true), "affiliationid", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getAttribute($this->getContext($context, "p"), "hebergementid"), "affiliationid"))))) {
                    // line 602
                    echo "                                            <h3>Affiliate";
                    if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "hebergementid"), "affiliationid")) > 1)) {
                        echo "s";
                    }
                    echo "</h3>
                                            ";
                    // line 603
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "p"), "hebergementid"), "affiliationid"));
                    foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                        // line 604
                        echo "                                                    <img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/affiliations"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "id"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "image"), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                        echo "\" class=\"logo_affiliation_client\" />
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 606
                    echo "                                    ";
                }
                // line 607
                echo "                            ";
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
            // line 608
            echo "                    ";
        }
        // line 609
        echo "\t
\t";
        // line 611
        echo "\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "client"));
        foreach ($context['_seq'] as $context["_key"] => $context["z"]) {
            // line 612
            echo "\t\t";
            if ((!twig_test_empty($this->getAttribute($this->getAttribute($this->getContext($context, "z"), "villeid"), "codemeteomedia")))) {
                // line 613
                echo "\t\t\t<iframe marginheight=\"0\" marginwidth=\"0\" name=\"wxButtonFrame\" id=\"wxButtonFrame\" height=\"160\" src=\"http://btn.meteomedia.ca/weatherbuttons/template7.php?placeCode=";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "z"), "villeid"), "codemeteomedia"), "html", null, true);
                echo "&category0=Cities&containerWidth=180&btnNo=&backgroundColor=blue&multipleCity=0&citySearch=0&celsiusF=C\" align=\"top\" frameborder=\"0\" width=\"170\" scrolling=\"no\" class=\"styleMeteo\" allowTransparency=\"true\"></iframe>
\t\t";
            }
            // line 615
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['z'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 616
        echo "\t";
    }

    // line 619
    public function block_gauche($context, array $blocks = array())
    {
        // line 621
        echo "\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "client"));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 622
            echo "\t    ";
            if (($this->getAttribute((isset($context["k"]) ? $context["k"] : null), "hebergementid", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "k"), "villeid") != ""))) {
                // line 623
                echo "\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    // line 624
                    echo "\t\t\t\t<p class=\"legendeHome\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "k"), "nomfr"), "html", null, true);
                    echo ",  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "k"), "villeid"), "nomfr"), "html", null, true);
                    echo "</p>
\t\t\t";
                } else {
                    // line 626
                    echo "\t\t\t\t<p class=\"legendeHome\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "k"), "nomen"), "html", null, true);
                    echo ",  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "k"), "villeid"), "nomen"), "html", null, true);
                    echo "</p>
\t\t\t";
                }
                // line 628
                echo "\t\t";
            } else {
                echo " 
\t\t\t";
                // line 629
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    // line 630
                    echo "\t\t\t\t<p class=\"legendeHome\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "k"), "nomfr"), "html", null, true);
                    echo ",  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "k"), "villeid"), "nomfr"), "html", null, true);
                    echo "</p>
\t\t\t";
                } else {
                    // line 632
                    echo "\t\t\t\t<p class=\"legendeHome\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "k"), "nomen"), "html", null, true);
                    echo ",  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "k"), "villeid"), "nomen"), "html", null, true);
                    echo "</p>
\t\t\t";
                }
                // line 634
                echo "\t\t";
            }
            // line 635
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 636
        echo "\t
\t";
        // line 638
        echo "\t<div id=\"photoprincipale\">
\t\t";
        // line 639
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "client"));
        foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
            // line 640
            echo "\t\t";
            // line 643
            echo "\t\t\t<div class=\"nomHotel\">
\t\t\t\t";
            // line 644
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                // line 645
                echo "\t\t\t\t\t\t<h1>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                echo "</h1>
\t\t\t\t";
            } else {
                // line 647
                echo "\t\t\t\t\t\t<h1>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                echo "</h1>
\t\t\t\t";
            }
            // line 649
            echo "\t\t\t\t";
            // line 652
            echo "\t\t\t</div>
\t\t\t\t";
            // line 653
            if (($this->getAttribute((isset($context["w"]) ? $context["w"] : null), "hebergementid", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "w"), "cotationid") != ""))) {
                // line 654
                echo "\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/attrait/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "id"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "photopayante"), "html", null, true);
                echo "\" class=\"big_picture\" alt=\"";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                    echo " ";
                } else {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                    echo " ";
                }
                echo "\" />
\t\t\t\t";
            } else {
                // line 656
                echo "\t\t\t\t\t";
                // line 657
                echo "\t\t\t\t\t";
                if (array_key_exists("menuForfait", $context)) {
                    // line 658
                    echo "\t\t\t\t\t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "forfaitAleatoire"));
                    foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                        // line 659
                        echo "\t\t\t\t\t\t\t";
                        if (($this->getAttribute($this->getContext($context, "w"), "imageprincipale") != "")) {
                            // line 660
                            echo "\t\t\t\t\t\t\t<img src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/forfaits-client/image_principale"), "html", null, true);
                            echo "/";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "id"), "html", null, true);
                            echo "/";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "imageprincipale"), "html", null, true);
                            echo "\" class=\"big_picture\" alt=\"";
                            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                                echo " ";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                                echo " ";
                            } else {
                                echo " ";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                                echo " ";
                            }
                            echo "\" />
\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergementid"), "photopayante") != "")) {
                            // line 662
                            echo "                                                        <img src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/hebergement/photo_payante/photo_payante"), "html", null, true);
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergementid"), "id"), "html", null, true);
                            echo "/";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "hebergementid"), "photopayante"), "html", null, true);
                            echo "\" class=\"big_picture\" alt=\"";
                            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                                echo " ";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                                echo " ";
                            } else {
                                echo " ";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                                echo " ";
                            }
                            echo "\" />
                                                        ";
                        } else {
                            // line 664
                            echo "\t\t\t\t\t\t\t<div class=\"imgRemplacementGlobal ajusteHauteurMinisite\"><img src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/logoglobal.jpg"), "html", null, true);
                            echo "\" alt=\"Image de remplacement pour ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                            echo " \"></div>
\t\t\t\t\t\t\t";
                        }
                        // line 666
                        echo "\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 667
                    echo "\t\t\t\t\t";
                } elseif (array_key_exists("menuChambre", $context)) {
                    // line 668
                    echo "\t\t\t\t\t\t";
                    if ((!twig_test_empty($this->getAttribute($this->getContext($context, "chambreAleatoire"), "photo1")))) {
                        // line 669
                        echo "\t\t\t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/chambres"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "chambreAleatoire"), "id"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "chambreAleatoire"), "photo1"), "html", null, true);
                        echo "\" class=\"big_picture\" alt=\"";
                        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                            echo " ";
                        } else {
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                            echo " ";
                        }
                        echo "\" />
\t\t\t\t\t\t";
                    } elseif ((!twig_test_empty($this->getAttribute($this->getContext($context, "w"), "photopayante")))) {
                        // line 671
                        echo "\t\t\t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/hebergement/photo_payante/photo_payante"), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "id"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "photopayante"), "html", null, true);
                        echo "\" class=\"big_picture\" alt=\"";
                        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                            echo " ";
                        } else {
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                            echo " ";
                        }
                        echo "\" />
                                                ";
                    } else {
                        // line 673
                        echo "\t\t\t\t\t\t<div class=\"imgRemplacementGlobal ajusteHauteurMinisite\"><img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/logoglobal.jpg"), "html", null, true);
                        echo "\" alt=\"Image de remplacement pour ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                        echo " \"></div>
\t\t\t\t\t\t";
                    }
                    // line 675
                    echo "\t\t\t\t\t";
                } else {
                    // line 676
                    echo "\t\t\t\t\t\t";
                    if ((!twig_test_empty($this->getAttribute($this->getContext($context, "w"), "photopayante")))) {
                        // line 677
                        echo "\t\t\t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/hebergement/photo_payante/photo_payante"), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "id"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "photopayante"), "html", null, true);
                        echo "\" class=\"big_picture\" alt=\"";
                        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                            echo " ";
                        } else {
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                            echo " ";
                        }
                        echo "\" />
\t\t\t\t\t\t";
                    } else {
                        // line 679
                        echo "\t\t\t\t\t\t<div class=\"imgRemplacementGlobal ajusteHauteurMinisite\"><img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/logoglobal.jpg"), "html", null, true);
                        echo "\" alt=\"Image de remplacement pour ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                        echo " \"></div>
\t\t\t\t\t\t";
                    }
                    // line 681
                    echo "\t\t\t\t\t";
                }
                // line 682
                echo "\t\t\t\t";
            }
            // line 683
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 684
        echo "\t</div>
\t
\t";
        // line 687
        echo "\t";
        // line 688
        echo "\t";
        if (array_key_exists("menuRestaurant", $context)) {
            // line 689
            echo "\t\t";
            $this->env->loadTemplate("MyAppGlobalBundle:Hebergement:MiniSiteRestaurant.html.twig")->display($context);
            // line 690
            echo "\t";
        }
        // line 691
        echo "\t
\t";
        // line 693
        echo "\t";
        if (array_key_exists("menuForfait", $context)) {
            // line 694
            echo "\t\t";
            $this->env->loadTemplate("MyAppGlobalBundle:Hebergement:MiniSiteForfaitPromotion.html.twig")->display($context);
            // line 695
            echo "\t";
        }
        // line 696
        echo "\t
\t";
        // line 698
        echo "\t";
        if (array_key_exists("menuChambre", $context)) {
            // line 699
            echo "\t\t";
            $this->env->loadTemplate("MyAppGlobalBundle:Hebergement:MiniSiteChambre.html.twig")->display($context);
            // line 700
            echo "\t";
        }
        // line 701
        echo "\t
\t";
        // line 703
        echo "\t";
        if (array_key_exists("menuService", $context)) {
            // line 704
            echo "\t\t";
            $this->env->loadTemplate("MyAppGlobalBundle:Hebergement:MiniSiteActiviteService.html.twig")->display($context);
            // line 705
            echo "\t";
        }
        // line 706
        echo "\t
\t";
        // line 708
        echo "\t";
        if (array_key_exists("menuCorporatif", $context)) {
            // line 709
            echo "\t\t";
            $this->env->loadTemplate("MyAppGlobalBundle:Hebergement:MiniSiteCorporatifEvenement.html.twig")->display($context);
            // line 710
            echo "\t";
        }
        // line 711
        echo "\t
\t";
        // line 713
        echo "\t";
        if (array_key_exists("menuSoinSante", $context)) {
            // line 714
            echo "\t\t";
            $this->env->loadTemplate("MyAppGlobalBundle:Hebergement:MiniSiteCentreSante.html.twig")->display($context);
            // line 715
            echo "\t";
        }
        // line 716
        echo "\t
\t";
        // line 718
        echo "\t";
        if (array_key_exists("menuDirectionRoutiere", $context)) {
            // line 719
            echo "\t\t";
            $this->env->loadTemplate("MyAppGlobalBundle:Hebergement:MiniSiteDirectionRoutiere.html.twig")->display($context);
            // line 720
            echo "\t";
        }
        // line 721
        echo "\t
\t";
        // line 723
        echo "\t";
        if (array_key_exists("menuGalerie", $context)) {
            // line 724
            echo "\t\t";
            $this->env->loadTemplate("MyAppGlobalBundle:Hebergement:MiniSiteGaleriePhoto.html.twig")->display($context);
            // line 725
            echo "\t";
        }
        // line 726
        echo "\t
\t";
        // line 728
        echo "\t";
        if (array_key_exists("menuReservation", $context)) {
            // line 729
            echo "\t\t";
            $this->env->loadTemplate("MyAppGlobalBundle:Hebergement:MiniSiteReservation.html.twig")->display($context);
            // line 730
            echo "\t";
        }
        // line 731
        echo "\t
\t";
        // line 733
        echo "\t";
        if (array_key_exists("menuPresentation", $context)) {
            // line 734
            echo "\t\t";
            $this->env->loadTemplate("MyAppGlobalBundle:Hebergement:MiniSitePresentation.html.twig")->display($context);
            // line 735
            echo "\t";
        }
        // line 736
        echo "\t
\t";
        // line 738
        echo "\t";
    }

    public function getTemplateName()
    {
        return "MyAppGlobalBundle:Hebergement:MiniSiteTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2692 => 738,  2689 => 736,  2686 => 735,  2683 => 734,  2680 => 733,  2677 => 731,  2674 => 730,  2671 => 729,  2668 => 728,  2665 => 726,  2662 => 725,  2659 => 724,  2656 => 723,  2653 => 721,  2650 => 720,  2647 => 719,  2644 => 718,  2641 => 716,  2638 => 715,  2635 => 714,  2632 => 713,  2629 => 711,  2626 => 710,  2623 => 709,  2620 => 708,  2617 => 706,  2614 => 705,  2611 => 704,  2608 => 703,  2605 => 701,  2602 => 700,  2599 => 699,  2596 => 698,  2593 => 696,  2590 => 695,  2587 => 694,  2584 => 693,  2581 => 691,  2578 => 690,  2575 => 689,  2572 => 688,  2570 => 687,  2566 => 684,  2560 => 683,  2557 => 682,  2554 => 681,  2546 => 679,  2527 => 677,  2524 => 676,  2521 => 675,  2513 => 673,  2494 => 671,  2474 => 669,  2471 => 668,  2468 => 667,  2462 => 666,  2454 => 664,  2435 => 662,  2415 => 660,  2412 => 659,  2407 => 658,  2404 => 657,  2402 => 656,  2383 => 654,  2381 => 653,  2378 => 652,  2376 => 649,  2370 => 647,  2364 => 645,  2362 => 644,  2359 => 643,  2357 => 640,  2353 => 639,  2350 => 638,  2347 => 636,  2341 => 635,  2338 => 634,  2330 => 632,  2322 => 630,  2320 => 629,  2315 => 628,  2307 => 626,  2299 => 624,  2296 => 623,  2293 => 622,  2288 => 621,  2285 => 619,  2281 => 616,  2275 => 615,  2269 => 613,  2266 => 612,  2261 => 611,  2258 => 609,  2255 => 608,  2241 => 607,  2238 => 606,  2223 => 604,  2219 => 603,  2212 => 602,  2209 => 601,  2194 => 599,  2190 => 598,  2183 => 597,  2180 => 596,  2173 => 591,  2168 => 590,  2162 => 589,  2159 => 588,  2151 => 586,  2143 => 584,  2140 => 583,  2137 => 582,  2129 => 580,  2121 => 578,  2118 => 577,  2115 => 576,  2111 => 575,  2103 => 569,  2098 => 567,  2093 => 566,  2091 => 565,  2086 => 563,  2082 => 562,  2076 => 561,  2072 => 560,  2065 => 556,  2061 => 554,  2058 => 553,  2047 => 551,  2044 => 550,  2041 => 549,  2038 => 548,  2026 => 546,  2023 => 545,  2020 => 544,  2008 => 542,  2005 => 541,  2002 => 540,  2000 => 539,  1997 => 538,  1994 => 537,  1992 => 536,  1975 => 535,  1970 => 534,  1956 => 533,  1953 => 532,  1938 => 530,  1934 => 529,  1927 => 528,  1924 => 527,  1909 => 525,  1905 => 524,  1898 => 523,  1895 => 522,  1888 => 517,  1883 => 516,  1877 => 515,  1874 => 514,  1866 => 512,  1858 => 510,  1855 => 509,  1852 => 508,  1844 => 506,  1836 => 504,  1833 => 503,  1830 => 502,  1826 => 501,  1818 => 495,  1813 => 493,  1808 => 492,  1806 => 491,  1801 => 489,  1797 => 488,  1791 => 487,  1787 => 486,  1780 => 482,  1777 => 481,  1774 => 479,  1771 => 478,  1760 => 476,  1757 => 475,  1754 => 474,  1751 => 473,  1740 => 471,  1737 => 470,  1734 => 469,  1722 => 467,  1719 => 466,  1716 => 465,  1714 => 464,  1711 => 463,  1708 => 462,  1706 => 461,  1689 => 460,  1684 => 459,  1681 => 457,  1678 => 456,  1671 => 454,  1668 => 453,  1665 => 452,  1658 => 450,  1655 => 449,  1647 => 448,  1644 => 447,  1641 => 446,  1634 => 444,  1631 => 443,  1623 => 442,  1620 => 441,  1617 => 440,  1614 => 439,  1608 => 438,  1605 => 437,  1603 => 436,  1600 => 435,  1597 => 434,  1589 => 432,  1581 => 430,  1578 => 429,  1575 => 428,  1567 => 426,  1559 => 424,  1556 => 423,  1553 => 422,  1550 => 421,  1544 => 420,  1541 => 419,  1539 => 418,  1536 => 417,  1533 => 416,  1530 => 415,  1519 => 413,  1514 => 412,  1506 => 410,  1503 => 409,  1500 => 408,  1497 => 407,  1486 => 405,  1481 => 404,  1473 => 402,  1470 => 401,  1467 => 400,  1464 => 399,  1458 => 398,  1455 => 397,  1453 => 396,  1450 => 395,  1447 => 394,  1439 => 392,  1431 => 390,  1428 => 389,  1425 => 388,  1417 => 386,  1409 => 384,  1406 => 383,  1403 => 382,  1400 => 381,  1394 => 380,  1391 => 379,  1389 => 378,  1383 => 377,  1380 => 376,  1377 => 375,  1374 => 374,  1366 => 372,  1358 => 370,  1355 => 369,  1352 => 368,  1344 => 366,  1336 => 364,  1333 => 363,  1330 => 362,  1327 => 361,  1321 => 360,  1318 => 359,  1315 => 358,  1310 => 357,  1308 => 356,  1305 => 355,  1302 => 354,  1294 => 352,  1286 => 350,  1283 => 349,  1280 => 348,  1272 => 346,  1264 => 344,  1261 => 343,  1258 => 342,  1255 => 341,  1249 => 340,  1246 => 339,  1244 => 338,  1241 => 337,  1238 => 336,  1230 => 334,  1222 => 332,  1219 => 331,  1216 => 330,  1208 => 328,  1200 => 326,  1197 => 325,  1194 => 324,  1191 => 323,  1185 => 322,  1182 => 321,  1180 => 320,  1175 => 319,  1171 => 318,  1165 => 317,  1153 => 315,  1150 => 314,  1145 => 313,  1137 => 310,  1134 => 309,  1131 => 308,  1124 => 306,  1121 => 305,  1113 => 304,  1110 => 303,  1107 => 302,  1100 => 300,  1097 => 299,  1089 => 298,  1086 => 297,  1083 => 296,  1080 => 295,  1074 => 294,  1071 => 293,  1069 => 292,  1066 => 291,  1063 => 290,  1055 => 288,  1047 => 286,  1044 => 285,  1041 => 284,  1033 => 282,  1025 => 280,  1022 => 279,  1019 => 278,  1016 => 277,  1010 => 276,  1007 => 275,  1005 => 274,  1002 => 273,  999 => 272,  996 => 271,  993 => 270,  984 => 268,  979 => 267,  973 => 265,  970 => 264,  967 => 263,  964 => 262,  955 => 260,  950 => 259,  944 => 257,  941 => 256,  938 => 255,  935 => 254,  931 => 253,  928 => 252,  925 => 251,  922 => 250,  919 => 249,  916 => 248,  907 => 246,  902 => 245,  896 => 243,  893 => 242,  890 => 241,  887 => 240,  878 => 238,  873 => 237,  867 => 235,  864 => 234,  861 => 233,  858 => 232,  854 => 231,  851 => 230,  848 => 229,  846 => 228,  843 => 227,  840 => 226,  837 => 225,  829 => 223,  821 => 221,  818 => 220,  815 => 219,  809 => 218,  806 => 217,  803 => 216,  800 => 215,  797 => 214,  794 => 213,  786 => 211,  778 => 209,  775 => 208,  772 => 207,  766 => 206,  763 => 205,  760 => 204,  757 => 203,  755 => 202,  749 => 201,  746 => 200,  743 => 199,  740 => 198,  732 => 196,  724 => 194,  721 => 193,  718 => 192,  710 => 190,  702 => 188,  699 => 187,  696 => 186,  693 => 185,  687 => 184,  685 => 183,  680 => 182,  666 => 181,  663 => 180,  660 => 179,  657 => 178,  654 => 177,  646 => 175,  638 => 173,  635 => 172,  632 => 171,  624 => 169,  616 => 167,  613 => 166,  610 => 165,  607 => 164,  601 => 163,  598 => 162,  595 => 161,  592 => 160,  574 => 159,  571 => 158,  566 => 157,  564 => 156,  561 => 155,  558 => 154,  555 => 153,  547 => 151,  539 => 149,  536 => 148,  533 => 147,  525 => 145,  517 => 143,  514 => 142,  511 => 141,  508 => 140,  502 => 139,  499 => 138,  496 => 137,  493 => 136,  490 => 135,  487 => 134,  479 => 132,  471 => 130,  468 => 129,  465 => 128,  457 => 126,  449 => 124,  446 => 123,  443 => 122,  440 => 121,  434 => 120,  431 => 119,  428 => 118,  425 => 117,  423 => 116,  420 => 115,  417 => 114,  409 => 112,  401 => 110,  398 => 109,  395 => 108,  387 => 106,  379 => 104,  376 => 103,  373 => 102,  370 => 101,  364 => 100,  361 => 99,  359 => 98,  356 => 97,  353 => 96,  350 => 95,  342 => 93,  334 => 91,  331 => 90,  328 => 89,  322 => 88,  319 => 87,  317 => 86,  312 => 85,  309 => 84,  306 => 83,  298 => 81,  290 => 79,  287 => 78,  284 => 77,  278 => 76,  275 => 75,  272 => 74,  268 => 73,  266 => 72,  263 => 71,  260 => 70,  257 => 69,  249 => 67,  241 => 65,  238 => 64,  235 => 63,  227 => 61,  219 => 59,  216 => 58,  213 => 57,  210 => 56,  204 => 55,  201 => 54,  198 => 53,  196 => 52,  193 => 51,  190 => 50,  182 => 48,  174 => 46,  171 => 45,  168 => 44,  160 => 42,  152 => 40,  149 => 39,  146 => 38,  143 => 37,  137 => 36,  134 => 35,  132 => 34,  128 => 33,  123 => 32,  114 => 26,  109 => 25,  103 => 24,  100 => 23,  92 => 21,  84 => 19,  81 => 18,  78 => 17,  70 => 15,  62 => 13,  59 => 12,  56 => 11,  52 => 10,  46 => 8,  40 => 5,  36 => 4,  31 => 3,  28 => 2,);
    }
}

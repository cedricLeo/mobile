<?php

/* ::filAriane.html.twig */
class __TwigTemplate_7c7f8e8714d5d036d317232e96f3f41d extends Twig_Template
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
        echo "<ul class=\"ulAriane\">
";
        // line 3
        echo "\t<li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_accueil"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("return.home"), "html", null, true);
        echo "\" > ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("global.reservation"), "html", null, true);
        echo " </a></li> \t
\t\t\t";
        // line 4
        echo "\t
\t\t\t";
        // line 6
        echo "\t\t\t \t";
        if (array_key_exists("urlaccueil", $context)) {
            // line 7
            echo "\t\t\t\t\t";
            if ((array_key_exists("province", $context) && array_key_exists("views", $context))) {
                // line 8
                echo "\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"javascript:void(0);\" > ";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "province"), "nomfr"), "html", null, true);
                    echo " ";
                } else {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "province"), "nomen"), "html", null, true);
                    echo " ";
                }
                echo "</a></li>
\t\t\t\t\t";
            } else {
                // line 10
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    // line 11
                    echo "\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_accueil_province", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "region"), "provinceetatid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"Province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "region"), "provinceetatid"), "nomfr"), "html", null, true);
                    echo "\">  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "region"), "provinceetatid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t";
                } else {
                    // line 13
                    echo "\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_accueil_province", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "region"), "provinceetatid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"Province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "region"), "provinceetatid"), "nomen"), "html", null, true);
                    echo "\">  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "region"), "provinceetatid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t";
                }
                // line 15
                echo "\t\t\t\t\t";
            }
            // line 16
            echo "\t\t\t\t";
        }
        // line 17
        echo "\t\t\t";
        // line 18
        echo "\t\t\t\t";
        if (array_key_exists("urlhebergement", $context)) {
            // line 19
            echo "\t\t\t\t\t";
            if (((!array_key_exists("views", $context)) && (!array_key_exists("arborecense", $context)))) {
                // line 20
                echo "\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"javascript:void(0);\" > ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                echo " </a></li>
\t\t\t\t\t";
            } else {
                // line 22
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    // line 23
                    echo "\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementfr"), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t";
                } else {
                    // line 25
                    echo "\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementen"), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t";
                }
                // line 27
                echo "\t\t\t\t\t";
            }
            // line 28
            echo "\t\t\t";
            // line 29
            echo "\t\t\t\t";
        } elseif (array_key_exists("urlforfaits", $context)) {
            // line 30
            echo "\t\t\t\t\t";
            if (array_key_exists("menuForfait", $context)) {
                // line 31
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    // line 32
                    echo "\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_forfaitsfr"), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forfait"), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forfait"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t";
                } else {
                    // line 34
                    echo "\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_forfaitsen"), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forfait"), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forfait"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t";
                }
                // line 36
                echo "\t\t\t\t\t";
            } else {
                // line 37
                echo "\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"javascript:void(0)\" > ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forfait"), "html", null, true);
                echo " </a></li>
\t\t\t\t\t";
            }
            // line 39
            echo "\t\t\t";
            // line 40
            echo "\t\t\t\t";
        } elseif ((array_key_exists("urlcorpo", $context) && ($this->getContext($context, "urlcorpo") == "index"))) {
            // line 41
            echo "\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"javascript:void(0)\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("corporatif.evenement.speciaux"), "html", null, true);
            echo " </a></li>
\t\t\t\t";
        } elseif ((array_key_exists("urlcorpo", $context) && ($this->getContext($context, "urlcorpo") != "index"))) {
            // line 43
            echo "\t\t\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                // line 44
                echo "\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_corpoeventsfr"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("corporatif.evenement.speciaux"), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("corporatif.evenement.speciaux"), "html", null, true);
                echo " </a></li>
\t\t\t\t\t";
            } else {
                // line 46
                echo "\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_corpoeventsen"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("corporatif.evenement.speciaux"), "html", null, true);
                echo "\" > ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("corporatif.evenement.speciaux"), "html", null, true);
                echo " </a></li>
\t\t\t\t\t";
            }
            // line 48
            echo "\t\t\t";
            // line 49
            echo "\t\t\t\t";
        } elseif (array_key_exists("urlcentersante", $context)) {
            // line 50
            echo "\t\t\t\t\t";
            if ((!array_key_exists("views", $context))) {
                // line 51
                echo "\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"javascript:void(0)\" > ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("centre.sante.spa"), "html", null, true);
                echo " </a></li>
\t\t\t\t\t";
            } else {
                // line 53
                echo "\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_centersante"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("centre.sante.spa"), "html", null, true);
                echo "\" > ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("centre.sante.spa"), "html", null, true);
                echo " </a></li>
\t\t\t\t\t";
            }
            // line 55
            echo "\t\t\t";
            // line 56
            echo "\t\t\t\t";
        } elseif (array_key_exists("urlattraitsactivity", $context)) {
            // line 57
            echo "\t\t\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                // line 58
                echo "\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_attraitsactivity"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("attrait.activite"), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("attrait.activite"), "html", null, true);
                echo "\" ";
                if (array_key_exists("classCssFirstNode", $context)) {
                    echo " class=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "classCssFirstNode"), "html", null, true);
                    echo "\" ";
                }
                echo "> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("attrait.activite"), "html", null, true);
                echo " </a></li>
\t\t\t\t\t";
            } else {
                // line 60
                echo "\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_attraitsactivityen"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("attrait.activite"), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("attrait.activite"), "html", null, true);
                echo "\" ";
                if (array_key_exists("classCssFirstNode", $context)) {
                    echo " class=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "classCssFirstNode"), "html", null, true);
                    echo "\" ";
                }
                echo "> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("attrait.activite"), "html", null, true);
                echo " </a></li>
\t\t\t\t\t";
            }
            // line 62
            echo "\t\t\t";
            // line 63
            echo "\t\t\t\t";
        } elseif (array_key_exists("urldestination", $context)) {
            // line 64
            echo "\t\t\t\t\t";
            if (array_key_exists("destination", $context)) {
                // line 65
                echo "\t\t\t\t\t\t";
                if (((!array_key_exists("destinationprovince", $context)) && (!array_key_exists("destinationregion", $context)))) {
                    // line 66
                    echo "\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"javascript:void(0)\" > ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tarif.derniere.minute.promotion"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t";
                } elseif (array_key_exists("destinationprovince", $context)) {
                    // line 68
                    echo "\t\t\t\t\t\t\t";
                    if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                        // line 69
                        echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_promotion"), "html", null, true);
                        echo "\"  title=\" ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tarif.derniere.minute.promotion"), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tarif.derniere.minute.promotion"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"javascript:void(0)\" > ";
                        // line 70
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "provinceid"), "repertoirefr"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t\t";
                    } else {
                        // line 72
                        echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_promotionen"), "html", null, true);
                        echo "\"  title=\" ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tarif.derniere.minute.promotion"), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tarif.derniere.minute.promotion"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"javascript:void(0)\" > ";
                        // line 73
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "provinceid"), "repertoireen"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t\t";
                    }
                    // line 75
                    echo "\t\t\t\t\t\t";
                } elseif (array_key_exists("destinationregion", $context)) {
                    // line 76
                    echo "\t\t\t\t\t\t\t";
                    if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                        // line 77
                        echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_promotion"), "html", null, true);
                        echo "\"  title=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tarif.derniere.minute.promotion"), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tarif.derniere.minute.promotion"), "html", null, true);
                        echo "  </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                        // line 78
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_promotionstarifderniereminuteprovince", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "provinceid"), "repertoirefr")))), "html", null, true);
                        echo "\"  title=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tarif.derniere.minute.promotion"), "html", null, true);
                        echo " province ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "provinceid"), "nomfr"), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "provinceid"), "nomfr"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"javascript:void(0)\" > ";
                        // line 79
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "regionid"), "repertoirefr"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t\t";
                    } else {
                        // line 81
                        echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_promotionen"), "html", null, true);
                        echo "\"  title=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tarif.derniere.minute.promotion"), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tarif.derniere.minute.promotion"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                        // line 82
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_promotionstarifderniereminuteprovinceen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "provinceid"), "repertoireen")))), "html", null, true);
                        echo "\"  title=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tarif.derniere.minute.promotion"), "html", null, true);
                        echo " province ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "provinceid"), "nomen"), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "provinceid"), "nomen"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"javascript:void(0)\" > ";
                        // line 83
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "regionid"), "repertoireen"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t\t";
                    }
                    // line 85
                    echo "\t\t\t\t\t\t";
                }
                // line 86
                echo "\t\t\t\t\t";
            }
            // line 87
            echo "\t\t\t";
            // line 88
            echo "\t\t\t\t";
        } elseif (array_key_exists("urlrestaurant", $context)) {
            // line 89
            echo "\t\t\t\t\t";
            if ((!array_key_exists("views", $context))) {
                // line 90
                echo "\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a  name=\"javascript:void(0)\" > ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("restaurant"), "html", null, true);
                echo " </a></li>
\t\t\t\t\t";
            } else {
                // line 92
                echo "\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_restaurant"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("restaurant"), "html", null, true);
                echo "\" > ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("restaurant"), "html", null, true);
                echo " </a></li>
\t\t\t\t\t";
            }
            // line 94
            echo "\t\t\t";
            // line 95
            echo "\t\t\t\t";
        } elseif (array_key_exists("contacteznous", $context)) {
            // line 96
            echo "\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"javascript:void(0)\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("contactez.nous"), "html", null, true);
            echo "</a></li>
\t\t\t";
            // line 98
            echo "\t\t\t\t";
        } elseif (array_key_exists("quisommesnous", $context)) {
            // line 99
            echo "\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"javascript:void(0)\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("qui.sommes.nous.ariane"), "html", null, true);
            echo "</a></li>\t
\t\t\t";
            // line 101
            echo "\t\t\t\t";
        } elseif (array_key_exists("faq", $context)) {
            // line 102
            echo "\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"javascript:void(0)\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("FAQ"), "html", null, true);
            echo "</a></li>\t
\t\t\t";
            // line 104
            echo "\t\t\t\t";
        } elseif (array_key_exists("conditionutilisation", $context)) {
            // line 105
            echo "\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"javascript:void(0)\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("condition.utilisation"), "html", null, true);
            echo "</a></li>
\t\t\t";
            // line 107
            echo "\t\t\t\t";
        } elseif (array_key_exists("plandusite", $context)) {
            // line 108
            echo "\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"javascript:void(0)\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("plan.site"), "html", null, true);
            echo "</a></li>
\t\t\t\t";
        }
        // line 110
        echo "\t\t\t\t
\t\t\t\t\t";
        // line 112
        echo "\t\t\t\t\t";
        if (((array_key_exists("region", $context) && array_key_exists("urlaccueil", $context)) && (!array_key_exists("provinceHome", $context)))) {
            // line 113
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                // line 114
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "region"), "nomfr"), "html", null, true);
                echo " </a></li>
\t\t\t\t\t\t";
            } else {
                // line 116
                echo "\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "region"), "nomen"), "html", null, true);
                echo " </a></li>
\t\t\t\t\t\t";
            }
            // line 118
            echo "\t\t\t\t\t";
        }
        // line 119
        echo "\t\t\t\t\t";
        // line 120
        echo "\t\t\t\t\t";
        if (array_key_exists("menuHebergement", $context)) {
            // line 121
            echo "\t\t\t\t\t\t";
            // line 122
            echo "\t\t\t\t\t\t ";
            if (array_key_exists("hebergementProvince", $context)) {
                // line 123
                echo "\t\t\t\t\t\t \t";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    echo "\t\t\t\t\t \t\t 
\t\t\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" >";
                    // line 124
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t \t";
                } else {
                    // line 126
                    echo "\t\t\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" >";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomen"), "html", null, true);
                    echo " </a></li> 
\t\t\t\t\t\t \t";
                }
                // line 128
                echo "\t\t\t\t\t\t ";
                // line 129
                echo "\t\t\t\t\t\t ";
            } elseif (array_key_exists("hebergementRegion", $context)) {
                // line 130
                echo "\t\t\t\t\t\t \t";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    echo "\t
\t\t\t\t\t\t \t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 131
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovincefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                    echo " province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomfr"), "html", null, true);
                    echo " \" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomfr"), "html", null, true);
                    echo " </a></li>\t\t\t\t \t\t 
\t\t\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" >";
                    // line 132
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t \t";
                } else {
                    // line 134
                    echo "\t\t\t\t\t\t \t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovinceen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                    echo " province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomen"), "html", null, true);
                    echo " \" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" >";
                    // line 135
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "nomen"), "html", null, true);
                    echo " </a></li> 
\t\t\t\t\t\t \t";
                }
                // line 137
                echo "\t\t\t\t\t\t ";
                // line 138
                echo "\t\t\t\t\t\t ";
            } elseif (array_key_exists("hebergementVille", $context)) {
                // line 139
                echo "\t\t\t\t\t\t \t";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    echo "\t
\t\t\t\t\t\t \t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 140
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovincefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                    echo " province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomfr"), "html", null, true);
                    echo " \" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomfr"), "html", null, true);
                    echo " </a></li>\t\t\t
\t\t\t\t\t\t \t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 141
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                    echo " région ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "nomfr"), "html", null, true);
                    echo " \" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "nomfr"), "html", null, true);
                    echo " </a></li>\t\t\t\t \t\t \t \t\t 
\t\t\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" >";
                    // line 142
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "villeid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t \t";
                } else {
                    // line 144
                    echo "\t\t\t\t\t\t \t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovinceen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                    echo " province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomen"), "html", null, true);
                    echo " \" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 145
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                    echo " region ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "nomen"), "html", null, true);
                    echo " \" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" >";
                    // line 146
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "villeid"), "nomen"), "html", null, true);
                    echo " </a></li> 
\t\t\t\t\t\t \t";
                }
                // line 148
                echo "\t\t\t\t\t\t ";
            } elseif (array_key_exists("hebergementCate", $context)) {
                // line 149
                echo "\t\t\t\t\t\t \t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "clientAleatoire"), "categoriehebergementid"));
                foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
                    // line 150
                    echo "\t\t\t\t\t\t\t \t";
                    if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                        echo "\t\t\t\t\t \t\t 
\t\t\t\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" >";
                        // line 151
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomfr"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t\t \t";
                    } else {
                        // line 153
                        echo "\t\t\t\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" >";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomen"), "html", null, true);
                        echo " </a></li> 
\t\t\t\t\t\t\t \t";
                    }
                    // line 155
                    echo "\t\t\t\t\t\t\t ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 156
                echo "\t\t\t\t\t\t ";
                // line 157
                echo "\t\t\t\t\t\t ";
            } elseif (array_key_exists("hebergementCateProvince", $context)) {
                // line 158
                echo "\t\t\t\t\t\t \t";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    // line 159
                    echo "\t\t\t\t\t\t \t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "clientAleatoire"), "categoriehebergementid"));
                    foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
                        echo "  
\t\t\t\t\t\t \t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                        // line 160
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "repertoirefr")))), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomfr")), "html", null, true);
                        echo " \" > ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomfr"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" >";
                        // line 161
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "repertoirefr"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t \t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 162
                    echo " 
\t\t\t\t\t\t \t";
                } else {
                    // line 164
                    echo "\t\t\t\t\t\t \t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "clientAleatoire"), "categoriehebergementid"));
                    foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
                        echo " 
\t\t\t\t\t\t \t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                        // line 165
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypeen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "repertoireen")))), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomen")), "html", null, true);
                        echo " \" > ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomen"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                        // line 166
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "repertoireen"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t \t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 167
                    echo " 
\t\t\t\t\t\t \t";
                }
                // line 168
                echo "\t
\t\t\t\t\t\t ";
                // line 170
                echo "\t\t\t\t\t\t ";
            } elseif (array_key_exists("hebergementCateRegion", $context)) {
                // line 171
                echo "\t\t\t\t\t\t \t";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    // line 172
                    echo "\t\t\t\t\t\t \t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "clientAleatoire"), "categoriehebergementid"));
                    foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
                        echo "  
\t\t\t\t\t\t \t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                        // line 173
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "repertoirefr")))), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomfr")), "html", null, true);
                        echo " \" > ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomfr"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t \t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                        // line 174
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypeprovincefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "repertoirefr")), "province" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "repertoirefr")))), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomfr"), "html", null, true);
                        echo " province ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomfr"), "html", null, true);
                        echo "\" > ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomfr"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" >";
                        // line 175
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "nomfr"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t \t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 176
                    echo " 
\t\t\t\t\t\t \t";
                } else {
                    // line 178
                    echo "\t\t\t\t\t\t \t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "clientAleatoire"), "categoriehebergementid"));
                    foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
                        echo " 
\t\t\t\t\t\t \t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                        // line 179
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypeen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "repertoireen")))), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomen")), "html", null, true);
                        echo " \" > ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomen"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t \t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                        // line 180
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypeprovinceen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "repertoireen")), "province" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "repertoireen")))), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomen"), "html", null, true);
                        echo " province ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomen"), "html", null, true);
                        echo "\" > ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomen"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                        // line 181
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "nomen"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t \t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 182
                    echo " 
\t\t\t\t\t\t \t";
                }
                // line 183
                echo "\t
\t\t\t\t\t\t ";
                // line 185
                echo "\t\t\t\t\t\t ";
            } elseif (array_key_exists("hebergementCateVille", $context)) {
                // line 186
                echo "\t\t\t\t\t\t \t";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    // line 187
                    echo "\t\t\t\t\t\t \t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "clientAleatoire"), "categoriehebergementid"));
                    foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
                        echo "  
\t\t\t\t\t\t \t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                        // line 188
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "repertoirefr")))), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomfr")), "html", null, true);
                        echo " \" > ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomfr"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t \t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                        // line 189
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypeprovincefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "repertoirefr")), "province" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "repertoirefr")))), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomfr"), "html", null, true);
                        echo " province ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomfr"), "html", null, true);
                        echo "\" > ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomfr"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t \t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                        // line 190
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtyperegionfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "repertoirefr")), "region" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "repertoirefr")))), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomfr"), "html", null, true);
                        echo " région ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "nomfr"), "html", null, true);
                        echo "\" > ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "nomfr"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" >";
                        // line 191
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "villeid"), "nomfr"), "html", null, true);
                        echo " </a></li> 
\t\t\t\t\t\t \t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 192
                    echo " 
\t\t\t\t\t\t \t";
                } else {
                    // line 194
                    echo "\t\t\t\t\t\t \t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "clientAleatoire"), "categoriehebergementid"));
                    foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
                        echo " 
\t\t\t\t\t\t \t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                        // line 195
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypeen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "repertoireen")))), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomen")), "html", null, true);
                        echo " \" > ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomen"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t \t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                        // line 196
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypeprovinceen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "repertoireen")), "province" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "repertoireen")))), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomen"), "html", null, true);
                        echo " province ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomen"), "html", null, true);
                        echo "\" > ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomen"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                        // line 197
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtyperegionen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "repertoireen")), "region" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "repertoireen")))), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomen"), "html", null, true);
                        echo " region ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "nomen"), "html", null, true);
                        echo "\" > ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "nomen"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                        // line 198
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "villeid"), "nomen"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t \t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 199
                    echo " 
\t\t\t\t\t\t \t";
                }
                // line 200
                echo "\t
\t\t\t\t\t\t ";
            }
            // line 202
            echo "\t\t\t\t\t";
        }
        // line 203
        echo "\t\t\t\t\t";
        // line 204
        echo "\t\t\t\t\t";
        if (array_key_exists("noeudArianeAttrait", $context)) {
            // line 205
            echo "\t\t\t\t\t\t";
            if (array_key_exists("nodeAttraitProvince", $context)) {
                // line 206
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    echo "\t
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 207
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                } else {
                    // line 209
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                }
                // line 211
                echo "\t\t\t\t\t\t";
            }
            // line 212
            echo "\t\t\t\t\t\t";
            if (array_key_exists("nodeAttraitRegion", $context)) {
                // line 213
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    // line 214
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_attraitsprovince", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"Province - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomfr"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 215
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "repertoirefr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                } else {
                    // line 217
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_attraitsprovince", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"Province - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomen"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 218
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regioneid"), "repertoireen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                }
                // line 220
                echo "\t\t\t\t\t\t";
            }
            // line 221
            echo "\t\t\t\t\t\t";
            if (array_key_exists("nodeAttraitVille", $context)) {
                // line 222
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    // line 223
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_attraitsprovince", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "provinceetatid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"Province - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "provinceetatid"), "nomfr"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "provinceetatid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 224
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_attraitsIndex", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"Région - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "nomfr"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 225
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "villeid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                } else {
                    // line 227
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_attraitsprovince", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "provinceetatid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"Province - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "provinceetatid"), "nomen"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "provinceetatid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 228
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_attraitsIndexen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"Region - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "nomen"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 229
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "villeid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                }
                // line 231
                echo "\t\t\t\t\t\t";
            }
            // line 232
            echo "\t\t\t\t\t\t";
            if (array_key_exists("nodeAttraitActiviteDefault", $context)) {
                // line 233
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    echo "\t
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 234
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "categorieattrait"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                } else {
                    // line 236
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "categorieattrait"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                }
                // line 238
                echo "\t\t\t\t\t\t";
            }
            // line 239
            echo "\t\t\t\t\t\t";
            if (array_key_exists("nodeAttraitActiviteProvince", $context)) {
                // line 240
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    // line 241
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_attraitsactivitedefault", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "categorieattrait"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"Attraits et activités - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "categorieattrait"), "nomfr"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "categorieattrait"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 242
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                } else {
                    // line 244
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_attraitsactivitedefaulten", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "categorieattrait"), "reppertoireen")))), "html", null, true);
                    echo "\" title=\"Attractions and activities - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "categorieattrait"), "nomen"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "categorieattrait"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 245
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                }
                // line 247
                echo "\t\t\t\t\t\t";
            }
            // line 248
            echo "\t\t\t\t\t\t";
            if (array_key_exists("nodeAttraitActiviteRegion", $context)) {
                // line 249
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    // line 250
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_attraitsactivitedefault", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "categorieattrait"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"Attraits et activités - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "categorieattrait"), "nomfr"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "categorieattrait"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 251
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_attraitsprovinceactivite", array("province" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "repertoirefr")), "name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "categorieattrait"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"Province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomfr"), "html", null, true);
                    echo "  attraits et activités  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "categorieattrait"), "nomfr"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 252
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                } else {
                    // line 254
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_attraitsactivitedefaulten", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "categorieattrait"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"Attractions and activities - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "categorieattrait"), "nomen"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "categorieattrait"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 255
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_attraitsprovinceactiviteen", array("province" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "repertoireen")), "name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "categorieattrait"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"Province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomen"), "html", null, true);
                    echo "  attractions and activities  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "categorieattrait"), "nomen"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 256
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                }
                // line 258
                echo "\t\t\t\t\t\t";
            }
            // line 259
            echo "\t\t\t\t\t\t";
            if (array_key_exists("nodeAttraitActiviteVille", $context)) {
                // line 260
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    // line 261
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_attraitsactivitedefault", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "categorieattrait"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"Attraits et activités - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "categorieattrait"), "nomfr"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "categorieattrait"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 262
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_attraitsprovinceactivite", array("province" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "repertoirefr")), "name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "categorieattrait"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"Province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomfr"), "html", null, true);
                    echo "  attraits et activités  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "categorieattrait"), "nomfr"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 263
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_attraitsprovinceactivite", array("region" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "repertoirefr")), "name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "categorieattrait"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"Region ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "nomfr"), "html", null, true);
                    echo "  attraits et activités  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "categorieattrait"), "nomfr"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 264
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "villeid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                } else {
                    // line 266
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_attraitsactivitedefaulten", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "categorieattrait"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"Attractions and activities - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "categorieattrait"), "nomen"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "categorieattrait"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 267
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_attraitsprovinceactiviteen", array("province" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "repertoireen")), "name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "categorieattrait"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"Province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomen"), "html", null, true);
                    echo "  attractions and activities  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "categorieattrait"), "nomen"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 268
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_attraitsprovinceactiviteen", array("region" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "repertoireen")), "name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "categorieattrait"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"Region ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "nomen"), "html", null, true);
                    echo "  attractions and activities  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "categorieattrait"), "nomen"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 269
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "villeid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                }
                // line 271
                echo "\t\t\t\t\t\t";
            }
            // line 272
            echo "\t\t\t\t\t";
        }
        // line 273
        echo "\t\t\t\t\t";
        // line 274
        echo "\t\t\t\t    ";
        if (array_key_exists("urlcorpo", $context)) {
            // line 275
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                // line 276
                echo "\t\t\t\t\t\t\t";
                if (array_key_exists("noeudcorpoprovince", $context)) {
                    // line 277
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "provinceid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                }
                // line 279
                echo "\t\t\t\t\t\t\t";
                if (array_key_exists("noeudcorporegion", $context)) {
                    // line 280
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_corpoeventsprovince", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "provinceid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"Corporatif et événements province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "provinceid"), "nomfr"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "provinceid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 281
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "provinceid"), "repertoirefr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                }
                // line 283
                echo "\t\t\t\t\t\t\t";
                if (array_key_exists("noeudcorpoville", $context)) {
                    // line 284
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_corpoeventsprovince", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "provinceid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"Corporatif et événements province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "provinceid"), "nomfr"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "provinceid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 285
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_corpoeventsregions", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "regionid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"Corporatif et événements région ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "regionid"), "nomfr"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "regionid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 286
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "villeid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                }
                // line 288
                echo "\t\t\t\t\t\t";
            } else {
                // line 289
                echo "\t\t\t\t\t\t\t";
                if (array_key_exists("noeudcorpoprovince", $context)) {
                    // line 290
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "provinceid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                }
                // line 292
                echo "\t\t\t\t\t\t\t";
                if (array_key_exists("noeudcorporegion", $context)) {
                    // line 293
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_corpoeteventsprovinceen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "provinceid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"Corporate and events province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "provinceid"), "nomen"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "provinceid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 294
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "provinceid"), "repertoireen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                }
                // line 296
                echo "\t\t\t\t\t\t\t";
                if (array_key_exists("nouedcorpoville", $context)) {
                    // line 297
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_corpoeventsprovince", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "provinceid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"Corporatif et événements province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "provinceid"), "nomen"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "provinceid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 298
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_corpoeventsregionsen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "regionid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"Corporatif et événements region ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "regionid"), "nomen"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "regionid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 299
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "villeid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                }
                // line 301
                echo "\t\t\t\t\t\t";
            }
            // line 302
            echo "\t\t\t\t\t\t";
            if (array_key_exists("nodeappeloffre", $context)) {
                // line 303
                echo "\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("appeloffre"), "html", null, true);
                echo " </a></li>
\t\t\t\t\t\t";
            }
            // line 305
            echo "\t\t\t\t\t\t";
            if (array_key_exists("metachambreAffaire", $context)) {
                // line 306
                echo "\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("chambreaffaire"), "html", null, true);
                echo " </a></li>
\t\t\t\t\t\t";
            } elseif (array_key_exists("metachambreAffaireProvince", $context)) {
                // line 308
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    // line 309
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_chambreaffairefr"), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("chambreaffaire"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("chambreaffaire"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 310
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergement"), "provinceid"), "repertoirefr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                } else {
                    // line 312
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_chambreaffaireen"), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("chambreaffaire"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("chambreaffaire"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 313
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergement"), "provinceid"), "repertoireen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                }
                // line 315
                echo "\t\t\t\t\t\t";
            } elseif (array_key_exists("metachambreAffaireRegion", $context)) {
                // line 316
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    // line 317
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_chambreaffairefr"), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("chambreaffaire"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("chambreaffaire"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 318
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_chambreaffaireprovincefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergement"), "provinceid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("chambreaffaire"), "html", null, true);
                    echo " province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergement"), "provinceid"), "nomfr"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergement"), "provinceid"), "nomfr"), "html", null, true);
                    echo "</a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 319
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergement"), "regionid"), "repertoirefr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                } else {
                    // line 321
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_chambreaffaireen"), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("chambreaffaire"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("chambreaffaire"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 322
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_chambreaffaireprovinceen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergement"), "provinceid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("chambreaffaire"), "html", null, true);
                    echo " province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergement"), "provinceid"), "nomen"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergement"), "provinceid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 323
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergement"), "regionid"), "repertoireen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                }
                // line 325
                echo "\t\t\t\t\t\t";
            } elseif (array_key_exists("metachambreAffaireVille", $context)) {
                // line 326
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    // line 327
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_chambreaffairefr"), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("chambreaffaire"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("chambreaffaire"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 328
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_chambreaffaireprovincefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergement"), "provinceid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("chambreaffaire"), "html", null, true);
                    echo " province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergement"), "provinceid"), "nomfr"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergement"), "provinceid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 329
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_chambreaffaireregionfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergement"), "regionid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("chambreaffaire"), "html", null, true);
                    echo " région ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergement"), "regionid"), "nomfr"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergement"), "regionid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 330
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergement"), "villeid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                } else {
                    // line 332
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_chambreaffaireen"), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("chambreaffaire"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("chambreaffaire"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 333
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_chambreaffaireprovinceen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergement"), "provinceid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("chambreaffaire"), "html", null, true);
                    echo " province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergement"), "provinceid"), "nomen"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergement"), "provinceid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 334
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_chambreaffaireregionfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergement"), "regionid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("chambreaffaire"), "html", null, true);
                    echo " region ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergement"), "regionid"), "nomen"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergement"), "regionid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 335
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergement"), "villeid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                }
                // line 337
                echo "\t\t\t\t\t\t";
            }
            // line 338
            echo "\t\t\t\t\t\t";
            // line 339
            echo "\t\t\t\t\t\t";
            if (array_key_exists("corposalle", $context)) {
                // line 340
                echo "\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("locationsallereunion"), "html", null, true);
                echo " </a></li>
\t\t\t\t\t\t";
            } elseif (array_key_exists("corposalleprovince", $context)) {
                // line 342
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    // line 343
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_locationsallereunionfr"), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("locationsallereunion"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("locationsallereunion"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 344
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "provinceid"), "repertoirefr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                } else {
                    // line 346
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_locationsallereunionen"), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("locationsallereunion"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("locationsallereunion"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 347
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "provinceid"), "repertoireen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                }
                // line 349
                echo "\t\t\t\t\t\t";
            } elseif (array_key_exists("corposalleregion", $context)) {
                // line 350
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    // line 351
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_locationsallereunionfr"), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("locationsallereunion"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("locationsallereunion"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 352
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_locationsallereunionprovincefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "provinceid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("locationsallereunion"), "html", null, true);
                    echo " province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "provinceid"), "nomfr"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "provinceid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 353
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "regionid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                } else {
                    // line 355
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_locationsallereunionen"), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("locationsallereunion"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("locationsallereunion"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 356
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_locationsallereunionprovinceen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "provinceid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("locationsallereunion"), "html", null, true);
                    echo " province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "provinceid"), "nomen"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "provinceid"), "nomen"), "html", null, true);
                    echo "} </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 357
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "regionid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                }
                // line 359
                echo "\t\t\t\t\t\t";
            } elseif (array_key_exists("corposalleville", $context)) {
                // line 360
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    // line 361
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_locationsallereunionfr"), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("locationsallereunion"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("locationsallereunion"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 362
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_locationsallereunionprovincefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "provinceid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("locationsallereunion"), "html", null, true);
                    echo " province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "provinceid"), "nomfr"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "provinceid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 363
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_locationsallereunionregionfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "regionid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("locationsallereunion"), "html", null, true);
                    echo " région ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "regionid"), "nomfr"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "regionid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 364
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "villeid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                } else {
                    // line 366
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_locationsallereunionen"), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("locationsallereunion"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("locationsallereunion"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 367
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_locationsallereunionprovinceen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "provinceid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("locationsallereunion"), "html", null, true);
                    echo " province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "provinceid"), "nomen"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "provinceid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 368
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_locationsallereunionregionen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "regionid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("locationsallereunion"), "html", null, true);
                    echo " region ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "regionid"), "nomen"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "regionid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 369
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "villeid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                }
                // line 371
                echo "\t\t\t\t\t\t";
            }
            // line 372
            echo "\t\t\t\t\t\t";
            // line 373
            echo "\t\t\t\t\t\t";
            if (array_key_exists("activitecorpo", $context)) {
                // line 374
                echo "\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activitescorporative"), "html", null, true);
                echo " </a></li>
\t\t\t\t\t\t";
            } elseif (array_key_exists("activitecorpoprovince", $context)) {
                // line 376
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    // line 377
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_activiteCorporativeGroupefr"), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activitescorporative"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activitescorporative"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 378
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "repertoirefr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                } else {
                    // line 380
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_activiteCorporativeGroupeen"), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activitescorporative"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activitescorporative"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 381
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "repertoireen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                }
                // line 383
                echo "\t\t\t\t\t\t";
            } elseif (array_key_exists("activitecorporegion", $context)) {
                // line 384
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    // line 385
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_activiteCorporativeGroupefr"), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activitescorporative"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activitescorporative"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 386
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_activitecorpoprovincefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activitescorporative"), "html", null, true);
                    echo " province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomfr"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 387
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                } else {
                    // line 389
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_activiteCorporativeGroupeen"), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activitescorporative"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activitescorporative"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 390
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_activitecorpoprovinceen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activitescorporative"), "html", null, true);
                    echo " province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomen"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 391
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                }
                // line 393
                echo "\t\t\t\t\t\t";
            } elseif (array_key_exists("activitecorpoville", $context)) {
                // line 394
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    // line 395
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_activiteCorporativeGroupefr"), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activitescorporative"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activitescorporative"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 396
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_activitecorpoprovincefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activitescorporative"), "html", null, true);
                    echo " province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomfr"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 397
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_activitecorporegionfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activitescorporative"), "html", null, true);
                    echo " région ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "nomfr"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 398
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "villeid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                } else {
                    // line 400
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_activiteCorporativeGroupeen"), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activitescorporative"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activitescorporative"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 401
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_activitecorpoprovinceen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activitescorporative"), "html", null, true);
                    echo " province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomen"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 402
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_activitecorporegionen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activitescorporative"), "html", null, true);
                    echo " region ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "nomen"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 403
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "villeid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                }
                // line 405
                echo "\t\t\t\t\t\t";
            }
            // line 406
            echo "\t\t\t\t\t";
        }
        // line 407
        echo "\t\t\t\t\t";
        // line 408
        echo "\t\t\t\t\t";
        if (array_key_exists("urlcentersante", $context)) {
            // line 409
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                // line 410
                echo "\t\t\t\t\t\t\t";
                if (array_key_exists("noeudsanteprovince", $context)) {
                    // line 411
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                }
                // line 413
                echo "\t\t\t\t\t\t\t";
                if (array_key_exists("noeudsanteregion", $context)) {
                    // line 414
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_choisirprovincesoin", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"Centre de santé et spas province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomfr"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 415
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                }
                // line 417
                echo "\t\t\t\t\t\t\t";
                if (array_key_exists("noeudsanteville", $context)) {
                    // line 418
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_choisirprovincesoin", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"Centre de santé et spas province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomfr"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 419
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_choisirprovincesoin", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"Centre de santé et spas région ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "nomfr"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 420
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "villeid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                }
                // line 422
                echo "\t\t\t\t\t\t\t";
                // line 423
                echo "\t\t\t\t\t\t\t";
                if (array_key_exists("metatypesoin", $context)) {
                    // line 424
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "clientAleatoire"), "typesoinsid"));
                    foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomfr"), "html", null, true);
                        echo " ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    echo "</a></li>
\t\t\t\t\t\t\t";
                }
                // line 426
                echo "\t\t\t\t\t\t\t";
                if (array_key_exists("centresoinprovince", $context)) {
                    // line 427
                    echo "\t\t\t\t\t\t\t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "clientAleatoire"), "typesoinsid"));
                    foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
                        echo "<li>&nbsp;&gt;&nbsp;<a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_typesdesoins", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "repertoirefr")))), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("centre.sante.spa"), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomfr")), "html", null, true);
                        echo "\" > ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomfr"), "html", null, true);
                        echo " </a></li>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 428
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "repertoirefr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                }
                // line 430
                echo "\t\t\t\t\t\t\t";
                if (array_key_exists("centresoinregion", $context)) {
                    // line 431
                    echo "\t\t\t\t\t\t\t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "clientAleatoire"), "typesoinsid"));
                    foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
                        // line 432
                        echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_typesdesoins", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "repertoirefr")))), "html", null, true);
                        echo "\" title=\"Centre de santé et spas ";
                        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomfr")), "html", null, true);
                        echo "\" > ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomfr"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                        // line 433
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_provincetypesoin", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "repertoirefr")), "province" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "repertoirefr")))), "html", null, true);
                        echo "\" title=\"Centre de santé et spas ";
                        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomfr")), "html", null, true);
                        echo " province ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomfr"), "html", null, true);
                        echo "\" > ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomfr"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 435
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "repertoirefr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                }
                // line 437
                echo "\t\t\t\t\t\t\t";
                if (array_key_exists("centresoinville", $context)) {
                    // line 438
                    echo "\t\t\t\t\t\t\t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "clientAleatoire"), "typesoinsid"));
                    foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
                        // line 439
                        echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_typesdesoins", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "repertoirefr")))), "html", null, true);
                        echo "\" title=\"Centre de santé et spas ";
                        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomfr")), "html", null, true);
                        echo "\" > ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomfr"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                        // line 440
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_provincetypesoin", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "repertoirefr")), "province" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "repertoirefr")))), "html", null, true);
                        echo "\" title=\"Centre de santé et spas ";
                        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomfr")), "html", null, true);
                        echo " province ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomfr"), "html", null, true);
                        echo "\" > ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomfr"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                        // line 441
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_typedesoinregion", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "repertoirefr")), "region" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "repertoirefr")))), "html", null, true);
                        echo "\" title=\"Centre de santé et spas ";
                        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomfr")), "html", null, true);
                        echo " région ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "nomfr"), "html", null, true);
                        echo "\" > ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "nomfr"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 443
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "villeid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                }
                // line 445
                echo "\t\t\t\t\t\t";
            } else {
                // line 446
                echo "\t\t\t\t\t\t\t";
                if (array_key_exists("noeudsanteprovince", $context)) {
                    // line 447
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                }
                // line 449
                echo "\t\t\t\t\t\t\t";
                if (array_key_exists("noeudsanteregion", $context)) {
                    // line 450
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_choisirprovincesoinen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"Health centers spas province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomen"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 451
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                }
                // line 453
                echo "\t\t\t\t\t\t\t";
                if (array_key_exists("noeudsanteville", $context)) {
                    // line 454
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_choisirprovincesoinen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"Health centers spas province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomen"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 455
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_choisirprovincesoinen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"Health centers spas region ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "nomen"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 456
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "villeid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                }
                // line 458
                echo "\t\t\t\t\t\t\t";
                // line 459
                echo "\t\t\t\t\t\t\t";
                if (array_key_exists("metatypesoin", $context)) {
                    // line 460
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "clientAleatoire"), "typesoinsid"));
                    foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomen"), "html", null, true);
                        echo " ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    echo "</a></li>
\t\t\t\t\t\t\t";
                }
                // line 462
                echo "\t\t\t\t\t\t\t";
                if (array_key_exists("centresoinprovince", $context)) {
                    // line 463
                    echo "\t\t\t\t\t\t\t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "clientAleatoire"), "typesoinsid"));
                    foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
                        echo "<li>&nbsp;&gt;&nbsp;<a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_typesdesoinsen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "repertoireen")))), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("centre.sante.spa"), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomen")), "html", null, true);
                        echo "\" > ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomen"), "html", null, true);
                        echo " </a></li>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 464
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                }
                // line 466
                echo "\t\t\t\t\t\t\t";
                if (array_key_exists("centresoinregion", $context)) {
                    // line 467
                    echo "\t\t\t\t\t\t\t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "clientAleatoire"), "typesoinsid"));
                    foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
                        // line 468
                        echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_typesdesoinsen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "repertoireen")))), "html", null, true);
                        echo "\" title=\"Health centers spas ";
                        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomen")), "html", null, true);
                        echo " \" > ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomfr"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                        // line 469
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_provincetypesoinen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "repertoireen")), "province" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "repertoireen")))), "html", null, true);
                        echo "\" title=\"Health centers spas ";
                        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomen")), "html", null, true);
                        echo "  province ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomen"), "html", null, true);
                        echo "\" > ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomen"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 471
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                }
                // line 473
                echo "\t\t\t\t\t\t\t";
                if (array_key_exists("centresoinville", $context)) {
                    // line 474
                    echo "\t\t\t\t\t\t\t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "clientAleatoire"), "typesoinsid"));
                    foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
                        // line 475
                        echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_typesdesoinsen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "repertoireen")))), "html", null, true);
                        echo "\" title=\"Health centers spas ";
                        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomen")), "html", null, true);
                        echo " \" > ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomfr"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                        // line 476
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_provincetypesoinen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "repertoireen")), "province" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "repertoireen")))), "html", null, true);
                        echo "\" title=\"Health centers spas ";
                        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomen")), "html", null, true);
                        echo "  province ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomen"), "html", null, true);
                        echo "\" > ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomen"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                        // line 477
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_typedesoinregionen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "repertoireen")), "region" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "repertoireen")))), "html", null, true);
                        echo "\" title=\"Health centers spas ";
                        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomen")), "html", null, true);
                        echo "  region ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "nomen"), "html", null, true);
                        echo "\" > ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "nomen"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 479
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "villeid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                }
                // line 481
                echo "\t\t\t\t\t\t";
            }
            // line 482
            echo "\t\t\t\t\t";
        }
        // line 483
        echo "\t\t\t\t\t";
        // line 484
        echo "\t\t\t\t\t";
        if (array_key_exists("noeudAriane", $context)) {
            // line 485
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                echo "\t
\t\t\t\t\t \t\t";
                // line 486
                if (array_key_exists("restoProvince", $context)) {
                    // line 487
                    echo "\t\t\t\t\t \t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t \t\t";
                } elseif (array_key_exists("restoRegion", $context)) {
                    // line 489
                    echo "\t\t\t\t\t \t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_restaurantregion", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("restaurant"), "html", null, true);
                    echo " région ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "nomfr"), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 490
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                } elseif (array_key_exists("restoSpecialite", $context)) {
                    // line 492
                    echo "\t\t\t\t\t\t\t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "clientAleatoire"), "cuisineid"));
                    foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
                        echo "<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomfr"), "html", null, true);
                        echo " </a></li>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 493
                    echo "\t\t\t\t\t \t\t";
                } elseif (array_key_exists("nodeSpecProvince", $context)) {
                    // line 494
                    echo "\t\t\t\t\t \t\t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "clientAleatoire"), "cuisineid"));
                    foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
                        echo "<li>&nbsp;&gt;&nbsp;<a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_restaurantspecialite", array("nationalite" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "repertoirefr")))), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("restaurant"), "html", null, true);
                        echo " spécialité ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomfr"), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomfr"), "html", null, true);
                        echo " </a></li>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 495
                    echo "\t\t\t\t\t \t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                } elseif (array_key_exists("restoSpecRegion", $context)) {
                    // line 497
                    echo "\t\t\t\t\t\t\t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "clientAleatoire"), "cuisineid"));
                    foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
                        echo "<li>&nbsp;&gt;&nbsp;<a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_restaurantspecialite", array("nationalite" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "repertoirefr")))), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("restaurant"), "html", null, true);
                        echo " spécialité ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomfr"), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomfr"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t \t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                        // line 498
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_restaurantprovincenationalite", array("nationalite" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomfr")), "name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "repertoirefr")))), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("restaurant"), "html", null, true);
                        echo " spécialité ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomfr"), "html", null, true);
                        echo " province ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomfr"), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomfr"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t \t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 500
                    echo "\t\t\t\t\t \t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t \t\t";
                }
                // line 502
                echo "\t\t\t\t\t\t";
            } else {
                // line 503
                echo "\t\t\t\t\t \t\t";
                if (array_key_exists("restoProvince", $context)) {
                    // line 504
                    echo "\t\t\t\t\t \t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t \t\t";
                } elseif (array_key_exists("restoRegion", $context)) {
                    // line 506
                    echo "\t\t\t\t\t \t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_restaurantregion", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("restaurant"), "html", null, true);
                    echo " region ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "nomen"), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 507
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                } elseif (array_key_exists("restoSpecialite", $context)) {
                    // line 509
                    echo "\t\t\t\t\t\t\t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "clientAleatoire"), "cuisineid"));
                    foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
                        echo "<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomen"), "html", null, true);
                        echo " </a></li>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 510
                    echo "\t\t\t\t\t \t\t";
                } elseif (array_key_exists("nodeSpecProvince", $context)) {
                    // line 511
                    echo "\t\t\t\t\t \t\t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "clientAleatoire"), "cuisineid"));
                    foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
                        echo "<li>&nbsp;&gt;&nbsp;<a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_restaurantspecialite", array("nationalite" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "repertoireen")))), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("restaurant"), "html", null, true);
                        echo " specialite ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomen"), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomen"), "html", null, true);
                        echo " </a></li>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 512
                    echo "\t\t\t\t\t \t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                } elseif (array_key_exists("restoSpecRegion", $context)) {
                    // line 514
                    echo "\t\t\t\t\t\t\t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "clientAleatoire"), "cuisineid"));
                    foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
                        echo "<li>&nbsp;&gt;&nbsp;<a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_restaurantspecialite", array("nationalite" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "repertoireen")))), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("restaurant"), "html", null, true);
                        echo " specialite ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomen"), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomen"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t \t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                        // line 515
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_restaurantprovincenationalite", array("nationalite" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomen")), "name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "repertoireen")))), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("restaurant"), "html", null, true);
                        echo " specialite ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nomen"), "html", null, true);
                        echo " province ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomen"), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "provinceid"), "nomen"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t \t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 517
                    echo "\t\t\t\t\t \t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t \t\t";
                }
                // line 519
                echo "\t\t\t\t\t\t";
            }
            // line 520
            echo "\t\t\t\t\t";
        }
        // line 521
        echo "\t\t\t\t\t
\t\t\t\t\t";
        // line 523
        echo "\t\t\t\t\t";
        // line 524
        echo "\t\t\t\t\t";
        if ((array_key_exists("menuPresentation", $context) && array_key_exists("infoComplementaire", $context))) {
            // line 525
            echo "\t\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "client"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 526
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    echo "\t
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 527
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"Catégorie - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "nomfr"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 528
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovincefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"Hébergements province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "nomfr"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "nomfr"), "html", null, true);
                    echo " </a></li>\t\t\t
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 529
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"Hébergements région ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "nomfr"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "nomfr"), "html", null, true);
                    echo " </a></li>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a name=\"javascript:void(0)\" > ";
                    // line 530
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                } else {
                    // line 532
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypeen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"Category - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "nomen"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 533
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovinceen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"Accommodation province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "nomen"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 534
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"Accommodation region ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "nomen"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a name=\"javascript:void(0)\" > ";
                    // line 535
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                }
                // line 537
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 538
            echo "\t\t\t\t\t";
        }
        // line 539
        echo "\t\t\t\t\t";
        // line 540
        echo "\t\t\t\t\t";
        if ((array_key_exists("menuChambre", $context) && array_key_exists("infoComplementaire", $context))) {
            // line 541
            echo "\t\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "client"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 542
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    echo "\t\t
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 543
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"Catégorie - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "nomfr"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 544
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovincefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"Hébergements province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "nomfr"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "nomfr"), "html", null, true);
                    echo " </a></li>\t\t\t
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 545
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"Hébergements région ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "nomfr"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "nomfr"), "html", null, true);
                    echo " </a></li>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 546
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                    echo "\"  > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                } else {
                    // line 547
                    echo "\t
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 548
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypeen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"Category - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "nomen"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 549
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovinceen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"Accommodation province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "nomen"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 550
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"Accommodation region ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "nomen"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "nomen"), "html", null, true);
                    echo " </a></li>\t\t\t\t\t\t\t\t \t\t
\t\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 551
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                }
                // line 553
                echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"javascript:void(0)\" > ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("chambre.tarif"), "html", null, true);
                echo " </a></li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 555
            echo "\t\t\t\t\t";
        }
        // line 556
        echo "\t\t\t\t\t";
        // line 557
        echo "\t\t\t\t\t";
        if ((array_key_exists("menuForfait", $context) && array_key_exists("infoComplementaire", $context))) {
            // line 558
            echo "\t\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "client"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 559
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    echo "\t
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 560
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"Catégorie - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "nomfr"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "nomfr"), "html", null, true);
                    echo " </a></li>\t
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 561
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovincefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"Hébergements province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "nomfr"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "nomfr"), "html", null, true);
                    echo " </a></li>\t\t\t
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 562
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"Hébergements région ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "nomfr"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "nomfr"), "html", null, true);
                    echo " </a></li>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 563
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                    echo "\"  > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                } else {
                    // line 564
                    echo "\t
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 565
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypeen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"Category - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "nomen"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 566
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovinceen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"Accommodation province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "nomen"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 567
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"Accommodation region ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "nomen"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "nomen"), "html", null, true);
                    echo " </a></li>\t\t\t\t\t\t\t\t \t\t
\t\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 568
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t";
                }
                // line 570
                echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"javascript:void(0)\" > ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forfait.promotion"), "html", null, true);
                echo " </a></li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 572
            echo "\t\t\t\t\t";
        }
        // line 573
        echo "\t\t\t\t\t";
        // line 574
        echo "\t\t\t\t\t";
        if ((array_key_exists("menuService", $context) && array_key_exists("infoComplementaire", $context))) {
            // line 575
            echo "\t\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "client"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 576
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    echo "\t
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 577
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"Catégorie - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "nomfr"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "nomfr"), "html", null, true);
                    echo " </a></li>\t
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 578
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovincefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"Hébergements province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "nomfr"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "nomfr"), "html", null, true);
                    echo " </a></li>\t\t\t
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 579
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"Hébergements région ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "nomfr"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "nomfr"), "html", null, true);
                    echo " </a></li>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 580
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                    echo " </a></li>\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                } else {
                    // line 582
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypeen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"Category - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "nomen"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 583
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovinceen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"Accommodation province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "nomen"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 584
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"Accommodation region ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "nomen"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "nomen"), "html", null, true);
                    echo " </a></li>\t\t
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 585
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                    echo " </a></li>\t\t\t\t\t\t\t \t\t\t
\t\t\t\t\t\t\t";
                }
                // line 587
                echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"javascript:void(0)\" > ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("attrait.activite"), "html", null, true);
                echo " </a></li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 589
            echo "\t\t\t\t\t";
        }
        // line 590
        echo "\t\t\t\t\t";
        // line 591
        echo "\t\t\t\t\t";
        if ((array_key_exists("menuCorporatif", $context) && array_key_exists("infoComplementaire", $context))) {
            // line 592
            echo "\t\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "client"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 593
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    echo "\t
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 594
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"Catégorie - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "nomfr"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 595
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovincefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"Hébergements province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "nomfr"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "nomfr"), "html", null, true);
                    echo " </a></li>\t\t\t
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 596
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"Hébergements région ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "nomfr"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "nomfr"), "html", null, true);
                    echo " </a></li>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 597
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                    echo " </a></li>\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                } else {
                    // line 598
                    echo "\t
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 599
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypeen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"Category - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "nomen"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 600
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovinceen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"Accommodation province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "nomen"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 601
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"Accommodation region ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "nomen"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "nomen"), "html", null, true);
                    echo " </a></li>\t\t\t
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 602
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                    echo " </a></li>\t\t\t\t\t\t\t \t\t
\t\t\t\t\t\t\t";
                }
                // line 604
                echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"javascript:void(0)\" > ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("corporatif.speciaux"), "html", null, true);
                echo " </a></li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 606
            echo "\t\t\t\t\t";
        }
        // line 607
        echo "\t\t\t\t\t";
        // line 608
        echo "\t\t\t\t\t";
        if ((array_key_exists("menuGalerie", $context) && array_key_exists("infoComplementaire", $context))) {
            // line 609
            echo "\t\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "client"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 610
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    echo "\t
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 611
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"Catégorie - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "nomfr"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 612
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovincefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"Hébergements province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "nomfr"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "nomfr"), "html", null, true);
                    echo " </a></li>\t\t\t
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 613
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"Hébergements région ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "nomfr"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "nomfr"), "html", null, true);
                    echo " </a></li>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 614
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                    echo " </a></li>\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                } else {
                    // line 615
                    echo "\t
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 616
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypeen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"Category - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "nomen"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 617
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovinceen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"Accommodation province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "nomen"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 618
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"Accommodation region ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "nomen"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "nomen"), "html", null, true);
                    echo " </a></li>\t\t\t
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 619
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                    echo " </a></li>\t\t\t\t\t\t\t \t\t
\t\t\t\t\t\t\t";
                }
                // line 621
                echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"javascript:void(0)\" > ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("galerie.photo"), "html", null, true);
                echo " </a></li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 623
            echo "\t\t\t\t\t";
        }
        // line 624
        echo "\t\t\t\t\t";
        // line 625
        echo "\t\t\t\t\t";
        if ((array_key_exists("menuSoinSante", $context) && array_key_exists("infoComplementaire", $context))) {
            // line 626
            echo "\t\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "client"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 627
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    echo "\t
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 628
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"Catégorie - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "nomfr"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 629
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovincefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"Hébergements province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "nomfr"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "nomfr"), "html", null, true);
                    echo " </a></li>\t\t\t
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 630
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"Hébergements région ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "nomfr"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "nomfr"), "html", null, true);
                    echo " </a></li>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 631
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                    echo " </a></li>\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                } else {
                    // line 633
                    echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypeen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"Category - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "nomen"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "nomen"), "html", null, true);
                    echo " </a></li>\t
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 634
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovinceen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"Accommodation province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "nomen"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 635
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"Accommodation region ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "nomen"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "nomen"), "html", null, true);
                    echo " </a></li>\t\t\t
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 636
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                    echo " </a></li>\t\t\t\t\t\t\t \t\t
\t\t\t\t\t\t\t";
                }
                // line 638
                echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"javascript:void(0)\" > ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("centre.sante.spa"), "html", null, true);
                echo " </a></li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 640
            echo "\t\t\t\t\t";
        }
        // line 641
        echo "\t\t\t\t\t";
        // line 642
        echo "\t\t\t\t\t";
        if ((array_key_exists("menuRestaurant", $context) && ($this->getContext($context, "infoComplementaire") != ""))) {
            // line 643
            echo "\t\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "client"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 644
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getContext($context, "p"), "hebergementid") != "")) {
                    echo " ";
                    // line 645
                    echo "\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                        // line 646
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "repertoirefr")))), "html", null, true);
                        echo "\" title=\"Catégorie - ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "nomfr"), "html", null, true);
                        echo "\" > ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "nomfr"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                        // line 647
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_restaurant_province_index", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "repertoirefr")))), "html", null, true);
                        echo "\" title=\"Province - ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "nomfr"), "html", null, true);
                        echo "\" > ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "nomfr"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                        // line 648
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_restaurant_province_index", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "repertoirefr")))), "html", null, true);
                        echo "\" title=\"Région - ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "nomfr"), "html", null, true);
                        echo "\" > ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "nomfr"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                        // line 649
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_restaurant_province_index", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "hebergementid"), "repertoirefr")))), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "hebergementid"), "nomfr"), "html", null, true);
                        echo "\" > ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "hebergementid"), "nomfr"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 651
                        echo "\t\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypeen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "repertoireen")))), "html", null, true);
                        echo "\" title=\"Category - ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "nomen"), "html", null, true);
                        echo "\" > ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "nomen"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                        // line 652
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_restaurant_province_index", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "repertoireen")))), "html", null, true);
                        echo "\" title=\"Province - ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "nomen"), "html", null, true);
                        echo "\" > ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "nomen"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                        // line 653
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_restaurant_province_index", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "repertoireen")))), "html", null, true);
                        echo "\" title=\"Region - ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "nomen"), "html", null, true);
                        echo "\" > ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "nomen"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                        // line 654
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_restaurant_province_index", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "hebergementid"), "repertoireen")))), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "hebergementid"), "nomen"), "html", null, true);
                        echo "\" > ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "hebergementid"), "nomen"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t\t\t";
                    }
                    // line 656
                    echo "\t\t\t\t\t\t\t";
                } else {
                    // line 657
                    echo "\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                        // line 658
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_restaurant_province_index", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "repertoirefr")))), "html", null, true);
                        echo "\" title=\"Hébergement - ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "nomfr"), "html", null, true);
                        echo "\" > ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "nomfr"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                        // line 659
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_restaurant_province_index", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "categorieattrait"), "repertoirefr")))), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "categorieattrait"), "nomfr"), "html", null, true);
                        echo "\" > ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "categorieattrait"), "nomfr"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 661
                        echo "\t\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_restaurant_province_index", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "repertoireen")))), "html", null, true);
                        echo "\" title=\"Hébergement - ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "nomen"), "html", null, true);
                        echo "\" > ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "nomen"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                        // line 662
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_restaurant_province_index", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "categorieattrait"), "repertoireen")))), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "categorieattrait"), "nomen"), "html", null, true);
                        echo "\" > ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "categorieattrait"), "nomen"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t\t\t";
                    }
                    // line 664
                    echo "\t\t\t\t\t\t\t";
                }
                // line 665
                echo "\t\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"javascript:void(0)\" title=\"Hébergement - ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("restaurant"), "html", null, true);
                echo "\" > ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("restaurant"), "html", null, true);
                echo " </a></li>
\t\t\t\t\t\t ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 667
            echo "\t\t\t\t\t";
        }
        // line 668
        echo "\t\t\t\t\t";
        // line 669
        echo "\t\t\t\t\t";
        if ((array_key_exists("menuReservation", $context) && array_key_exists("infoComplementaire", $context))) {
            // line 670
            echo "\t\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "client"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 671
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    echo "\t
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 672
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"Catégorie - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "nomfr"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 673
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovincefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"Hébergements province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "nomfr"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "nomfr"), "html", null, true);
                    echo " </a></li>\t\t\t
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 674
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"Hébergements région ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "nomfr"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "nomfr"), "html", null, true);
                    echo " </a></li>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 675
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                    echo " </a></li>\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                } else {
                    // line 676
                    echo "\t
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 677
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypeen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"Category - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "nomen"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 678
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovinceen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"Accommodation province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "nomen"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 679
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"Accommodation region ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "nomen"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "nomen"), "html", null, true);
                    echo " </a></li>\t\t\t
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 680
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                    echo " </a></li>\t\t\t\t\t\t\t \t\t
\t\t\t\t\t\t\t";
                }
                // line 682
                echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"javascript:void(0)\" > ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("information.reservation"), "html", null, true);
                echo " </a></li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 684
            echo "\t\t\t\t\t";
        }
        // line 685
        echo "\t\t\t\t\t";
        // line 686
        echo "\t\t\t\t\t";
        if ((array_key_exists("menuDirectionRoutiere", $context) && array_key_exists("infoComplementaire", $context))) {
            // line 687
            echo "\t\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "client"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 688
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    echo "\t
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 689
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"Catégorie - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "nomfr"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 690
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovincefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"Hébergements province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "nomfr"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "nomfr"), "html", null, true);
                    echo " </a></li>\t\t\t
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 691
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"Hébergements région ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "nomfr"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "nomfr"), "html", null, true);
                    echo " </a></li>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 692
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                    echo " </a></li>\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                } else {
                    // line 693
                    echo "\t
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 694
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypeen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"Category - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "nomen"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorieHebergement"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 695
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovinceen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"Accommodation province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "nomen"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 696
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"Accommodation region ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "nomen"), "html", null, true);
                    echo "\" >  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "regionid"), "nomen"), "html", null, true);
                    echo " </a></li>\t\t\t
\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 697
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                    echo " </a></li>\t\t\t\t\t\t\t \t\t
\t\t\t\t\t\t\t";
                }
                // line 699
                echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"javascript:void(0)\" > ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("direction.routiere"), "html", null, true);
                echo " </a></li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 701
            echo "\t\t\t\t\t";
        }
        // line 702
        echo "\t\t\t\t\t";
        // line 703
        echo "\t\t\t\t\t
\t\t\t\t\t";
        // line 705
        echo "\t\t\t\t\t";
        if (array_key_exists("menuForfait", $context)) {
            // line 706
            echo "\t\t\t\t\t\t\t";
            if (array_key_exists("province", $context)) {
                echo " ";
                echo " ";
                // line 707
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "province"));
                foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                    // line 708
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                        echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                        // line 709
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 710
                        echo "\t\t\t\t\t\t\t\t\t \t\t
\t\t\t\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                        // line 711
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 712
                    echo "\t\t\t
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 714
                echo "\t\t\t\t\t\t\t";
            } elseif (array_key_exists("region", $context)) {
                echo " ";
                echo " ";
                // line 715
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "region"));
                foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                    // line 716
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                        echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                        // line 717
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_forfaitsprovincefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceetatid"), "repertoirefr")))), "html", null, true);
                        echo "\" title=\" ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forfait"), "html", null, true);
                        echo " province - ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceetatid"), "nomfr"), "html", null, true);
                        echo "\" > ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceetatid"), "nomfr"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                        // line 718
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 719
                        echo "\t\t\t\t\t\t\t\t\t \t\t
\t\t\t\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                        // line 720
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_forfaitsprovinceen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceetatid"), "repertoireen")))), "html", null, true);
                        echo "\" title=\" ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forfait"), "html", null, true);
                        echo " province - ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceetatid"), "nomen"), "html", null, true);
                        echo "\" > ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "provinceetatid"), "nomen"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                        // line 721
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 723
                    echo "\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 724
                echo "\t\t\t\t\t\t\t";
            } elseif (array_key_exists("titleVille", $context)) {
                // line 725
                echo "\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    // line 726
                    echo "\t\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_forfaitsprovincefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "provinceid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forfait"), "html", null, true);
                    echo " province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "provinceid"), "nomfr"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "provinceid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 727
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_forfaitsregionsfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "regionid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forfait"), "html", null, true);
                    echo " région ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "regionid"), "nomfr"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "regionid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 728
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "villeid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 730
                    echo "\t\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_forfaitsprovinceen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "provinceid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forfait"), "html", null, true);
                    echo " province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "provinceid"), "nomen"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "provinceid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 731
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_forfaitsregionsen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "regionid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forfait"), "html", null, true);
                    echo " region ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "regionid"), "nomen"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "regionid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 732
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "villeid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t";
                }
                // line 734
                echo "\t\t\t\t\t\t\t";
            } elseif (array_key_exists("filarianeforfaitindex", $context)) {
                echo " ";
                echo " ";
                // line 735
                echo "\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 736
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "filarianeforfaitindex"), "nom_fr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 737
                    echo "\t\t\t\t\t\t\t\t\t \t\t
\t\t\t\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 738
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "filarianeforfaitindex"), "nom_en"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t\t";
                }
                // line 740
                echo "\t\t\t\t\t\t\t";
            } elseif (array_key_exists("activite", $context)) {
                echo " ";
                echo " ";
                // line 741
                echo "\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 742
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovincefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "provinceid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\" Province - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "provinceid"), "nomfr"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "provinceid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 743
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovincefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "regionid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\" Région - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "regionid"), "nomfr"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "regionid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 744
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovincefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "villeid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\" Ville - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "villeid"), "nomfr"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "villeid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 745
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "forfaitclientid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 746
                    echo "\t\t\t\t\t\t\t\t\t \t\t
\t\t\t\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 747
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovinceen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "provinceid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\" Province - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "provinceid"), "nomen"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "provinceid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 748
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovinceen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "regionid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\" Region - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "regionid"), "nomen"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "regionid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 749
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovinceen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "villeid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\" city - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "villeid"), "nomen"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "villeid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 750
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "forfaitclientid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t\t";
                }
                // line 752
                echo "\t\t\t\t\t\t\t";
            } elseif (array_key_exists("activiteProvince", $context)) {
                // line 753
                echo "\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    // line 754
                    echo "\t\t\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_forfaitsactiviteindexfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "forfaitclientid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\" Forfaits - ";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "forfaitclientid"), "nomfr")), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "forfaitclientid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 755
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "provinceid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 757
                    echo "\t\t\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_forfaitsactiviteindexen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "forfaitclientid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\" Packages - ";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "forfaitclientid"), "nomen")), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "forfaitclientid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 758
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "provinceid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t\t";
                }
                // line 760
                echo "\t\t\t\t\t\t\t";
            } elseif (array_key_exists("activiteRegion", $context)) {
                echo " 
\t\t\t\t\t\t\t\t\t";
                // line 761
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    // line 762
                    echo "\t\t\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_forfaitsactiviteindexfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "forfaitclientid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\" Forfaits - ";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "forfaitclientid"), "nomfr")), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "forfaitclientid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 763
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_forfaitsactiviteprovincefr", array("activite" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "forfaitclientid"), "repertoirefr")), "name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "provinceid"), "nomfr")))), "html", null, true);
                    echo "\" title=\" Forfaits ";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "forfaitclientid"), "nomfr")), "html", null, true);
                    echo " province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "provinceid"), "nomfr"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "provinceid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 764
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "regionid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 766
                    echo "\t\t\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_forfaitsactiviteindexen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "forfaitclientid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\" Packages - ";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "forfaitclientid"), "nomen")), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "forfaitclientid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 767
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_forfaitsactiviteprovinceen", array("activite" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "forfaitclientid"), "repertoireen")), "name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "provinceid"), "nomen")))), "html", null, true);
                    echo "\" title=\" Packages ";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "forfaitclientid"), "nomen")), "html", null, true);
                    echo " province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "provinceid"), "nomen"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "provinceid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 768
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "regionid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t\t";
                }
                // line 770
                echo "\t\t\t\t\t\t\t";
            } elseif (array_key_exists("activiteVille", $context)) {
                // line 771
                echo "\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    // line 772
                    echo "\t\t\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_forfaitsactiviteindexfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "forfaitclientid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\" Forfaits - ";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "forfaitclientid"), "nomfr")), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "forfaitclientid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 773
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_forfaitsactiviteprovincefr", array("activite" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "forfaitclientid"), "repertoirefr")), "name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "provinceid"), "nomfr")))), "html", null, true);
                    echo "\" title=\" Forfaits ";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "forfaitclientid"), "nomfr")), "html", null, true);
                    echo " province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "provinceid"), "nomfr"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "provinceid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 774
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_forfaitsactiviteregion", array("activite" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "forfaitclientid"), "repertoirefr")), "name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "regionid"), "nomfr")))), "html", null, true);
                    echo "\" title=\" Forfaits ";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "forfaitclientid"), "nomfr")), "html", null, true);
                    echo " région ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "regionid"), "nomfr"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "regionid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 775
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "villeid"), "nomfr"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 777
                    echo "\t\t\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_forfaitsactiviteindexen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "forfaitclientid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\" Packages - ";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "forfaitclientid"), "nomen")), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "forfaitclientid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 778
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_forfaitsactiviteprovinceen", array("activite" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "forfaitclientid"), "repertoireen")), "name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "provinceid"), "nomen")))), "html", null, true);
                    echo "\" title=\" Packages ";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "forfaitclientid"), "nomen")), "html", null, true);
                    echo " province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "provinceid"), "nomen"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "provinceid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                    // line 779
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_forfaitsactiviteregionen", array("activite" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "forfaitclientid"), "repertoireen")), "name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "regionid"), "nomen")))), "html", null, true);
                    echo "\" title=\" Packages ";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "forfaitclientid"), "nomen")), "html", null, true);
                    echo " region ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "regionid"), "nomen"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "regionid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                    // line 780
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "villeid"), "nomen"), "html", null, true);
                    echo " </a></li>
\t\t\t\t\t\t\t\t\t";
                }
                // line 782
                echo "\t\t\t\t\t\t\t";
            }
            // line 783
            echo "\t\t\t\t\t";
        }
        // line 784
        echo "\t\t\t\t\t";
        // line 785
        echo "\t\t\t\t\t";
        if ((array_key_exists("menuGalerie", $context) && (!array_key_exists("infoComplementaire", $context)))) {
            // line 786
            echo "\t\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "client"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 787
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    // line 788
                    echo "\t\t\t\t\t\t\t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "p"), "categoriehebergementid"));
                    foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                        // line 789
                        echo "\t\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovincefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "repertoirefr")))), "html", null, true);
                        echo "\" title=\" ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                        echo "\" > ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 791
                    echo "\t\t\t\t\t\t\t";
                } else {
                    echo "\t
\t\t\t\t\t\t\t\t";
                    // line 792
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "p"), "categoriehebergementid"));
                    foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                        echo "\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t \t\t<li>&nbsp;&gt;&nbsp;<a href=\"";
                        // line 793
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovinceen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "repertoireen")))), "html", null, true);
                        echo "\" title=\" ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                        echo "\" > ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                        echo " </a></li>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 795
                    echo "\t\t\t\t\t\t\t";
                }
                // line 796
                echo "\t\t\t\t\t\t\t\t<li>&nbsp;&gt;&nbsp;<a name=\"#\" > ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("galerie.photo"), "html", null, true);
                echo " </a></li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 798
            echo "\t\t\t\t\t";
        }
        // line 799
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "::filAriane.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3946 => 799,  3943 => 798,  3934 => 796,  3931 => 795,  3917 => 793,  3911 => 792,  3906 => 791,  3891 => 789,  3886 => 788,  3883 => 787,  3878 => 786,  3875 => 785,  3873 => 784,  3870 => 783,  3867 => 782,  3862 => 780,  3852 => 779,  3842 => 778,  3833 => 777,  3828 => 775,  3818 => 774,  3808 => 773,  3799 => 772,  3796 => 771,  3793 => 770,  3788 => 768,  3778 => 767,  3769 => 766,  3764 => 764,  3754 => 763,  3745 => 762,  3743 => 761,  3738 => 760,  3733 => 758,  3724 => 757,  3719 => 755,  3710 => 754,  3707 => 753,  3704 => 752,  3699 => 750,  3691 => 749,  3683 => 748,  3675 => 747,  3672 => 746,  3667 => 745,  3659 => 744,  3651 => 743,  3643 => 742,  3638 => 741,  3633 => 740,  3628 => 738,  3625 => 737,  3620 => 736,  3615 => 735,  3610 => 734,  3605 => 732,  3595 => 731,  3584 => 730,  3579 => 728,  3569 => 727,  3558 => 726,  3555 => 725,  3552 => 724,  3546 => 723,  3541 => 721,  3531 => 720,  3528 => 719,  3523 => 718,  3513 => 717,  3508 => 716,  3503 => 715,  3498 => 714,  3491 => 712,  3486 => 711,  3483 => 710,  3478 => 709,  3473 => 708,  3468 => 707,  3463 => 706,  3460 => 705,  3457 => 703,  3455 => 702,  3452 => 701,  3443 => 699,  3434 => 697,  3426 => 696,  3418 => 695,  3410 => 694,  3407 => 693,  3398 => 692,  3390 => 691,  3382 => 690,  3374 => 689,  3369 => 688,  3364 => 687,  3361 => 686,  3359 => 685,  3356 => 684,  3347 => 682,  3338 => 680,  3330 => 679,  3322 => 678,  3314 => 677,  3311 => 676,  3302 => 675,  3294 => 674,  3286 => 673,  3278 => 672,  3273 => 671,  3268 => 670,  3265 => 669,  3263 => 668,  3260 => 667,  3249 => 665,  3246 => 664,  3237 => 662,  3228 => 661,  3219 => 659,  3211 => 658,  3206 => 657,  3203 => 656,  3194 => 654,  3186 => 653,  3178 => 652,  3169 => 651,  3160 => 649,  3152 => 648,  3144 => 647,  3136 => 646,  3131 => 645,  3127 => 644,  3122 => 643,  3119 => 642,  3117 => 641,  3114 => 640,  3105 => 638,  3096 => 636,  3088 => 635,  3080 => 634,  3071 => 633,  3062 => 631,  3054 => 630,  3046 => 629,  3038 => 628,  3033 => 627,  3028 => 626,  3025 => 625,  3023 => 624,  3020 => 623,  3011 => 621,  3002 => 619,  2994 => 618,  2986 => 617,  2978 => 616,  2975 => 615,  2966 => 614,  2958 => 613,  2950 => 612,  2942 => 611,  2937 => 610,  2932 => 609,  2929 => 608,  2927 => 607,  2924 => 606,  2915 => 604,  2906 => 602,  2898 => 601,  2890 => 600,  2882 => 599,  2879 => 598,  2870 => 597,  2862 => 596,  2854 => 595,  2846 => 594,  2841 => 593,  2836 => 592,  2833 => 591,  2831 => 590,  2828 => 589,  2819 => 587,  2810 => 585,  2802 => 584,  2794 => 583,  2785 => 582,  2776 => 580,  2768 => 579,  2760 => 578,  2752 => 577,  2747 => 576,  2742 => 575,  2739 => 574,  2737 => 573,  2734 => 572,  2725 => 570,  2716 => 568,  2708 => 567,  2700 => 566,  2692 => 565,  2689 => 564,  2680 => 563,  2672 => 562,  2664 => 561,  2656 => 560,  2651 => 559,  2646 => 558,  2643 => 557,  2641 => 556,  2638 => 555,  2629 => 553,  2620 => 551,  2612 => 550,  2604 => 549,  2596 => 548,  2593 => 547,  2584 => 546,  2576 => 545,  2568 => 544,  2560 => 543,  2555 => 542,  2550 => 541,  2547 => 540,  2545 => 539,  2542 => 538,  2536 => 537,  2531 => 535,  2523 => 534,  2515 => 533,  2506 => 532,  2501 => 530,  2493 => 529,  2485 => 528,  2477 => 527,  2472 => 526,  2467 => 525,  2464 => 524,  2462 => 523,  2459 => 521,  2456 => 520,  2453 => 519,  2447 => 517,  2431 => 515,  2416 => 514,  2410 => 512,  2392 => 511,  2389 => 510,  2377 => 509,  2372 => 507,  2361 => 506,  2355 => 504,  2352 => 503,  2349 => 502,  2343 => 500,  2327 => 498,  2312 => 497,  2306 => 495,  2288 => 494,  2285 => 493,  2273 => 492,  2268 => 490,  2257 => 489,  2251 => 487,  2249 => 486,  2244 => 485,  2241 => 484,  2239 => 483,  2236 => 482,  2233 => 481,  2227 => 479,  2213 => 477,  2203 => 476,  2194 => 475,  2189 => 474,  2186 => 473,  2180 => 471,  2166 => 469,  2157 => 468,  2152 => 467,  2149 => 466,  2143 => 464,  2125 => 463,  2122 => 462,  2107 => 460,  2104 => 459,  2102 => 458,  2097 => 456,  2089 => 455,  2080 => 454,  2077 => 453,  2072 => 451,  2063 => 450,  2060 => 449,  2054 => 447,  2051 => 446,  2048 => 445,  2042 => 443,  2028 => 441,  2018 => 440,  2009 => 439,  2004 => 438,  2001 => 437,  1995 => 435,  1981 => 433,  1972 => 432,  1967 => 431,  1964 => 430,  1958 => 428,  1940 => 427,  1937 => 426,  1922 => 424,  1919 => 423,  1917 => 422,  1912 => 420,  1904 => 419,  1895 => 418,  1892 => 417,  1887 => 415,  1878 => 414,  1875 => 413,  1869 => 411,  1866 => 410,  1863 => 409,  1860 => 408,  1858 => 407,  1855 => 406,  1852 => 405,  1847 => 403,  1837 => 402,  1827 => 401,  1818 => 400,  1813 => 398,  1803 => 397,  1793 => 396,  1784 => 395,  1781 => 394,  1778 => 393,  1773 => 391,  1763 => 390,  1754 => 389,  1749 => 387,  1739 => 386,  1730 => 385,  1727 => 384,  1724 => 383,  1719 => 381,  1710 => 380,  1705 => 378,  1696 => 377,  1693 => 376,  1687 => 374,  1684 => 373,  1682 => 372,  1679 => 371,  1674 => 369,  1664 => 368,  1654 => 367,  1645 => 366,  1640 => 364,  1630 => 363,  1620 => 362,  1611 => 361,  1608 => 360,  1605 => 359,  1600 => 357,  1590 => 356,  1581 => 355,  1576 => 353,  1566 => 352,  1557 => 351,  1554 => 350,  1551 => 349,  1546 => 347,  1537 => 346,  1532 => 344,  1523 => 343,  1520 => 342,  1514 => 340,  1511 => 339,  1509 => 338,  1506 => 337,  1501 => 335,  1491 => 334,  1481 => 333,  1472 => 332,  1467 => 330,  1457 => 329,  1447 => 328,  1438 => 327,  1435 => 326,  1432 => 325,  1427 => 323,  1417 => 322,  1408 => 321,  1403 => 319,  1393 => 318,  1384 => 317,  1381 => 316,  1378 => 315,  1373 => 313,  1364 => 312,  1359 => 310,  1350 => 309,  1347 => 308,  1341 => 306,  1338 => 305,  1332 => 303,  1329 => 302,  1326 => 301,  1321 => 299,  1313 => 298,  1304 => 297,  1301 => 296,  1296 => 294,  1287 => 293,  1284 => 292,  1278 => 290,  1275 => 289,  1272 => 288,  1267 => 286,  1259 => 285,  1250 => 284,  1247 => 283,  1242 => 281,  1233 => 280,  1230 => 279,  1224 => 277,  1221 => 276,  1218 => 275,  1215 => 274,  1213 => 273,  1210 => 272,  1207 => 271,  1202 => 269,  1192 => 268,  1182 => 267,  1173 => 266,  1168 => 264,  1158 => 263,  1148 => 262,  1139 => 261,  1136 => 260,  1133 => 259,  1130 => 258,  1125 => 256,  1115 => 255,  1106 => 254,  1101 => 252,  1091 => 251,  1082 => 250,  1079 => 249,  1076 => 248,  1073 => 247,  1068 => 245,  1059 => 244,  1054 => 242,  1045 => 241,  1042 => 240,  1039 => 239,  1036 => 238,  1030 => 236,  1025 => 234,  1020 => 233,  1017 => 232,  1014 => 231,  1009 => 229,  1001 => 228,  992 => 227,  987 => 225,  979 => 224,  970 => 223,  967 => 222,  964 => 221,  961 => 220,  956 => 218,  947 => 217,  942 => 215,  933 => 214,  930 => 213,  927 => 212,  924 => 211,  918 => 209,  913 => 207,  908 => 206,  905 => 205,  902 => 204,  900 => 203,  897 => 202,  893 => 200,  889 => 199,  881 => 198,  869 => 197,  857 => 196,  847 => 195,  840 => 194,  836 => 192,  828 => 191,  816 => 190,  804 => 189,  794 => 188,  787 => 187,  784 => 186,  781 => 185,  778 => 183,  774 => 182,  766 => 181,  754 => 180,  744 => 179,  737 => 178,  733 => 176,  725 => 175,  713 => 174,  703 => 173,  696 => 172,  693 => 171,  690 => 170,  687 => 168,  683 => 167,  675 => 166,  665 => 165,  658 => 164,  654 => 162,  646 => 161,  636 => 160,  629 => 159,  626 => 158,  623 => 157,  621 => 156,  615 => 155,  609 => 153,  599 => 150,  594 => 149,  586 => 146,  576 => 145,  565 => 144,  560 => 142,  550 => 141,  540 => 140,  530 => 137,  525 => 135,  509 => 132,  499 => 131,  491 => 129,  489 => 128,  483 => 126,  478 => 124,  473 => 123,  470 => 122,  468 => 121,  463 => 119,  460 => 118,  454 => 116,  449 => 114,  441 => 112,  438 => 110,  432 => 108,  421 => 104,  408 => 99,  405 => 98,  400 => 96,  397 => 95,  395 => 94,  379 => 90,  376 => 89,  373 => 88,  371 => 87,  368 => 86,  360 => 83,  336 => 79,  326 => 78,  317 => 77,  314 => 76,  306 => 73,  297 => 72,  292 => 70,  283 => 69,  271 => 65,  268 => 64,  265 => 63,  263 => 62,  245 => 60,  224 => 57,  221 => 56,  219 => 55,  200 => 50,  197 => 49,  185 => 46,  175 => 44,  172 => 43,  166 => 41,  163 => 40,  152 => 36,  132 => 32,  121 => 28,  108 => 25,  95 => 22,  89 => 20,  75 => 15,  32 => 6,  20 => 3,  143 => 32,  116 => 26,  112 => 24,  109 => 23,  81 => 17,  73 => 13,  299 => 79,  280 => 68,  258 => 61,  251 => 58,  233 => 57,  227 => 58,  223 => 52,  215 => 48,  196 => 46,  192 => 44,  171 => 42,  167 => 40,  165 => 39,  161 => 39,  159 => 36,  155 => 37,  151 => 33,  144 => 30,  118 => 27,  115 => 24,  77 => 14,  59 => 12,  56 => 11,  25 => 5,  23 => 4,  138 => 29,  123 => 29,  94 => 14,  74 => 12,  46 => 7,  19 => 2,  218 => 49,  203 => 51,  182 => 97,  142 => 34,  102 => 25,  99 => 24,  97 => 23,  92 => 22,  90 => 21,  85 => 19,  83 => 18,  80 => 15,  35 => 7,  33 => 5,  21 => 3,  126 => 30,  110 => 33,  104 => 32,  91 => 22,  86 => 19,  82 => 26,  78 => 16,  76 => 14,  62 => 16,  58 => 12,  50 => 9,  43 => 9,  39 => 4,  30 => 5,  26 => 4,  22 => 3,  17 => 1,  639 => 163,  634 => 160,  631 => 159,  628 => 158,  613 => 155,  610 => 154,  604 => 151,  593 => 150,  591 => 148,  583 => 148,  580 => 147,  575 => 146,  573 => 145,  564 => 142,  551 => 141,  543 => 139,  538 => 138,  535 => 139,  532 => 138,  529 => 135,  514 => 134,  511 => 131,  505 => 129,  494 => 130,  492 => 126,  484 => 125,  481 => 124,  476 => 123,  474 => 122,  465 => 120,  452 => 118,  444 => 113,  439 => 115,  436 => 114,  434 => 113,  429 => 107,  424 => 105,  419 => 108,  413 => 101,  407 => 98,  393 => 12,  385 => 92,  380 => 169,  378 => 168,  372 => 164,  367 => 109,  365 => 85,  359 => 105,  356 => 104,  353 => 102,  350 => 82,  343 => 98,  340 => 96,  333 => 92,  325 => 90,  321 => 89,  316 => 88,  313 => 86,  311 => 75,  300 => 84,  293 => 69,  290 => 68,  287 => 175,  285 => 67,  277 => 63,  274 => 66,  272 => 61,  267 => 59,  262 => 56,  254 => 59,  247 => 51,  244 => 50,  237 => 48,  234 => 47,  231 => 46,  217 => 40,  209 => 53,  207 => 37,  188 => 36,  176 => 35,  169 => 33,  160 => 27,  157 => 26,  114 => 24,  71 => 11,  69 => 21,  65 => 13,  61 => 13,  55 => 11,  52 => 10,  49 => 12,  42 => 5,  36 => 8,  27 => 2,  24 => 1,  426 => 138,  423 => 137,  416 => 102,  411 => 129,  409 => 128,  406 => 127,  401 => 66,  392 => 120,  388 => 118,  382 => 114,  370 => 110,  363 => 111,  351 => 109,  345 => 108,  341 => 81,  329 => 91,  322 => 103,  309 => 101,  305 => 100,  301 => 98,  289 => 96,  282 => 95,  270 => 60,  264 => 57,  259 => 55,  249 => 82,  242 => 77,  236 => 76,  229 => 55,  225 => 42,  222 => 113,  216 => 65,  208 => 64,  201 => 62,  195 => 48,  189 => 43,  181 => 57,  174 => 55,  168 => 54,  162 => 28,  154 => 50,  147 => 48,  141 => 29,  135 => 28,  129 => 31,  122 => 27,  117 => 18,  111 => 32,  105 => 31,  98 => 23,  93 => 21,  87 => 20,  79 => 18,  72 => 16,  66 => 15,  60 => 12,  57 => 15,  54 => 11,  47 => 8,  44 => 8,  40 => 9,  38 => 8,  34 => 6,  29 => 4,);
    }
}

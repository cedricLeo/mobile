<?php

/* MyAppGlobalBundle:Default:suggestionBasDePage-fr.html.twig */
class __TwigTemplate_a37281f0949355867dffb880199086f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'suggestionBasDePage' => array($this, 'block_suggestionBasDePage'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('suggestionBasDePage', $context, $blocks);
        // line 183
        echo "
";
    }

    // line 1
    public function block_suggestionBasDePage($context, array $blocks = array())
    {
        echo " 
\t";
        // line 2
        echo " ";
        // line 3
        echo "\t <div itemscope itemtype=\"http://data-vocabulary.org/Organization\" > 
\t\t";
        // line 4
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
            // line 5
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "suggestion1"));
            foreach ($context['_seq'] as $context["_key"] => $context["s1"]) {
                // line 6
                echo "\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "s1"), "repertoirefr")))), "html", null, true);
                echo "\" itemprop=\"url\" title=\"Hôtels, motels et auberge ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s1"), "nomfr"), "html", null, true);
                echo " \">
\t\t\t\t<img src=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/regions"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s1"), "id"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s1"), "imagesuggestion"), "html", null, true);
                echo "\"  alt=\"Hôtels, motels et auberge ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s1"), "nomfr"), "html", null, true);
                echo "\" class=\"img_categoie_portail\" />
\t\t\t</a>
\t\t\t<h3 id=\"title_suggestion_bottom1\" itemprop=\"name\"> ";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s1"), "nomfr"), "html", null, true);
                echo "</h3>
\t\t\t    <ul id=\"suggestion_bottom1\">
\t            ";
                // line 11
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listClientBottom1"));
                foreach ($context['_seq'] as $context["_key"] => $context["etablissement"]) {
                    // line 12
                    echo "\t\t           <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "etablissement"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"Hébergement ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "etablissement"), "nomfr"), "html", null, true);
                    echo " région ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "etablissement"), "regionid"), "nomfr"), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "etablissement"), "nomfr"), "html", null, true);
                    echo "</a></li>
\t\t           ";
                    // line 13
                    if ((!twig_test_empty($this->getAttribute($this->getContext($context, "etablissement"), "prixapartir")))) {
                        echo "<li>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("a.partir"), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getContext($context, "etablissement"), "prixapartir"), array("%\$%" => "")), "html", null, true);
                        echo "\$</li>";
                    }
                    // line 14
                    echo "\t            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etablissement'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 15
                echo "\t\t\t    </ul>
\t\t\t    <h2 class=\"numberHotelListBottom\">
\t\t\t    \t<a href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "s1"), "repertoirefr")))), "html", null, true);
                echo "\" title=\"Voir tous les hôtels, motels et auberges région - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s1"), "nomfr"), "html", null, true);
                echo "\">";
                if ((twig_length_filter($this->env, $this->getContext($context, "listClientBottom1")) < $this->getContext($context, "nbHebergement1"))) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "nbHebergement1"), "html", null, true);
                    echo " ";
                } else {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getContext($context, "listClientBottom1")), "html", null, true);
                    echo " ";
                }
                echo " hôtel";
                if ((twig_length_filter($this->env, $this->getContext($context, "listClientBottom1")) > 1)) {
                    echo "s";
                } else {
                }
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s1"), "nomfr"), "html", null, true);
                echo "</a>
\t\t\t    </h2>
\t\t    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s1'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 20
            echo "\t\t";
        } else {
            echo " ";
            // line 21
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "suggestion1"));
            foreach ($context['_seq'] as $context["_key"] => $context["s1"]) {
                // line 22
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "s1"), "repertoireen")))), "html", null, true);
                echo "\" itemprop=\"url\" title=\"Hotels, motels and hostels ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s1"), "nomen"), "html", null, true);
                echo "\">
                                <img src=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/regions/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s1"), "id"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s1"), "imagesuggestion"), "html", null, true);
                echo "\"  alt=\"Hotels, motels and hostels ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s1"), "nomen"), "html", null, true);
                echo "\" class=\"img_categoie_portail\" />
                        </a>
\t\t\t<h3 id=\"title_suggestion_bottom1\" itemprop=\"name\">";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s1"), "nomen"), "html", null, true);
                echo "</h3>
\t\t\t    <ul id=\"suggestion_bottom1\">
\t         \t";
                // line 27
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listClientBottom1"));
                foreach ($context['_seq'] as $context["_key"] => $context["etablissement"]) {
                    // line 28
                    echo "\t\t           <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "etablissement"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"Accomodation ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "etablissement"), "nomen"), "html", null, true);
                    echo " region ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "etablissement"), "regionid"), "nomen"), "html", null, true);
                    echo "\"  target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "etablissement"), "nomen"), "html", null, true);
                    echo "</a></li>
\t\t           ";
                    // line 29
                    if ((!twig_test_empty($this->getAttribute($this->getContext($context, "etablissement"), "prixapartir")))) {
                        echo "<li>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("a.partir"), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getContext($context, "etablissement"), "prixapartir"), array("%\$%" => "")), "html", null, true);
                        echo "\$</li>";
                    }
                    // line 30
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etablissement'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                echo "\t
\t\t\t    </ul>
\t\t\t    <h2 class=\"numberHotelListBottom\">
\t\t\t    \t<a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "s1"), "repertoireen")))), "html", null, true);
                echo "\" title=\"See all hotels, motels and inns region - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s1"), "nomen"), "html", null, true);
                echo "\">";
                if ((twig_length_filter($this->env, $this->getContext($context, "listClientBottom1")) < $this->getContext($context, "nbHebergement1"))) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "nbHebergement1"), "html", null, true);
                    echo " ";
                } else {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getContext($context, "listClientBottom1")), "html", null, true);
                    echo " ";
                }
                echo " hotel";
                if ((twig_length_filter($this->env, $this->getContext($context, "listClientBottom1")) > 1)) {
                    echo "s";
                } else {
                }
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s1"), "nomen"), "html", null, true);
                echo "</a>
\t\t\t    </h2>
\t\t   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s1'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 36
            echo "\t   ";
        }
        // line 37
        echo "\t</div>
\t
\t";
        // line 39
        echo " ";
        // line 40
        echo "\t<div itemscope itemtype=\"http://data-vocabulary.org/Organization\" >
\t\t";
        // line 41
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
            // line 42
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "suggestion2"));
            foreach ($context['_seq'] as $context["_key"] => $context["s2"]) {
                // line 43
                echo "\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "s2"), "repertoirefr")))), "html", null, true);
                echo "\" itemprop=\"url\" title=\"Hôtels, motels et auberge ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s2"), "nomfr"), "html", null, true);
                echo "\">
\t\t\t\t<img src=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/regions/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s2"), "id"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s2"), "imagesuggestion"), "html", null, true);
                echo "\" alt=\"Hôtels, motels et auberge ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s2"), "nomfr"), "html", null, true);
                echo "\"  class=\"img_categoie_portail\" />
\t\t\t</a>
\t\t\t<h3 id=\"title_suggestion_bottom2\" itemprop=\"name\"> ";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s2"), "nomfr"), "html", null, true);
                echo "</h3>
\t\t\t    <ul id=\"suggestion_bottom2\">
\t            ";
                // line 48
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listClientBottom2"));
                foreach ($context['_seq'] as $context["_key"] => $context["etablissement"]) {
                    // line 49
                    echo "\t\t           <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "etablissement"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"Hébergement ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "etablissement"), "nomfr"), "html", null, true);
                    echo " région ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "etablissement"), "regionid"), "nomfr"), "html", null, true);
                    echo "\"  target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "etablissement"), "nomfr"), "html", null, true);
                    echo "</a></li>
\t\t           ";
                    // line 50
                    if ((!twig_test_empty($this->getAttribute($this->getContext($context, "etablissement"), "prixapartir")))) {
                        echo "<li>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("a.partir"), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getContext($context, "etablissement"), "prixapartir"), array("%\$%" => "")), "html", null, true);
                        echo "\$</li>";
                    }
                    // line 51
                    echo "\t            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etablissement'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                echo "\t
\t\t       </ul>
\t\t       <h2 class=\"numberHotelListBottom\">
\t\t    \t<a href=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "s2"), "repertoirefr")))), "html", null, true);
                echo "\" title=\"Voir tous les hôtels, motels et auberges région- ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s2"), "nomfr"), "html", null, true);
                echo "\">";
                if ((twig_length_filter($this->env, $this->getContext($context, "listClientBottom2")) < $this->getContext($context, "nbHebergement2"))) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "nbHebergement2"), "html", null, true);
                    echo " ";
                } else {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getContext($context, "listClientBottom2")), "html", null, true);
                    echo " ";
                }
                echo " hôtel";
                if ((twig_length_filter($this->env, $this->getContext($context, "listClientBottom2")) > 1)) {
                    echo "s";
                } else {
                }
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s2"), "nomfr"), "html", null, true);
                echo "</a>
\t\t       </h2>
\t\t   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s2'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 57
            echo "\t   ";
        } else {
            echo " ";
            // line 58
            echo "\t      ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "suggestion2"));
            foreach ($context['_seq'] as $context["_key"] => $context["s2"]) {
                // line 59
                echo "\t\t    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "s2"), "repertoireen")))), "html", null, true);
                echo "\" itemprop=\"url\" title=\"Hotels, motels and hostels ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s2"), "nomen"), "html", null, true);
                echo "\">
\t\t\t    <img src=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/regions/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s2"), "id"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s2"), "imagesuggestion"), "html", null, true);
                echo "\"  alt=\"Hotels, motels and hostels ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s2"), "nomen"), "html", null, true);
                echo "\" class=\"img_categoie_portail\" />
\t\t    </a>
\t\t\t<h3 id=\"title_suggestion_bottom2\" itemprop=\"name\">";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s2"), "nomen"), "html", null, true);
                echo "</h3>
\t\t\t    <ul id=\"suggestion_bottom2\">
\t            ";
                // line 64
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listClientBottom2"));
                foreach ($context['_seq'] as $context["_key"] => $context["etablissement"]) {
                    // line 65
                    echo "\t\t           <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "etablissement"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"Acommodation ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "etablissement"), "nomen"), "html", null, true);
                    echo " region ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "etablissement"), "regionid"), "nomen"), "html", null, true);
                    echo "\"  target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "etablissement"), "nomen"), "html", null, true);
                    echo "</a></li>
\t\t           ";
                    // line 66
                    if ((!twig_test_empty($this->getAttribute($this->getContext($context, "etablissement"), "prixapartir")))) {
                        echo "<li>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("a.partir"), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getContext($context, "etablissement"), "prixapartir"), array("\$" => "")), "html", null, true);
                        echo "\$</li>";
                    }
                    // line 67
                    echo "\t            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etablissement'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 68
                echo "\t\t       </ul>
\t\t       <h2 class=\"numberHotelListBottom\">
\t\t    \t<a href=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "s2"), "repertoireen")))), "html", null, true);
                echo "\" title=\"See all hotels, motels and inns region - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s2"), "nomen"), "html", null, true);
                echo "\"> ";
                if ((twig_length_filter($this->env, $this->getContext($context, "listClientBottom2")) < $this->getContext($context, "nbHebergement2"))) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "nbHebergement2"), "html", null, true);
                    echo " ";
                } else {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getContext($context, "listClientBottom2")), "html", null, true);
                    echo " ";
                }
                echo " hotel";
                if ((twig_length_filter($this->env, $this->getContext($context, "listClientBottom2")) > 1)) {
                    echo "s";
                } else {
                }
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s2"), "nomen"), "html", null, true);
                echo "</a>
\t\t       </h2>
\t\t   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s2'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 73
            echo "\t   ";
        }
        // line 74
        echo "\t</div>
\t
\t";
        // line 76
        echo " ";
        // line 77
        echo "\t<div itemscope itemtype=\"http://data-vocabulary.org/Organization\" > 
\t\t";
        // line 78
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
            // line 79
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "suggestion3"));
            foreach ($context['_seq'] as $context["_key"] => $context["s3"]) {
                // line 80
                echo "\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "s3"), "repertoirefr")))), "html", null, true);
                echo "\" itemprop=\"url\" title=\"Hôtels, motels et auberge ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s3"), "nomfr"), "html", null, true);
                echo "\">
\t\t\t\t<img src=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/regions/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s3"), "id"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s3"), "imagesuggestion"), "html", null, true);
                echo "\" alt=\"Hôtels, motels et auberge ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s3"), "nomfr"), "html", null, true);
                echo "\"  class=\"img_categoie_portail\" />
\t\t\t</a>
\t\t\t<h3 id=\"title_suggestion_bottom3\" itemprop=\"name\"> ";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s3"), "nomfr"), "html", null, true);
                echo "</h3>
\t\t\t    <ul id=\"suggestion_bottom3\">
\t            ";
                // line 85
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listClientBottom3"));
                foreach ($context['_seq'] as $context["_key"] => $context["etablissement"]) {
                    // line 86
                    echo "\t\t           <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "etablissement"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"Hébergement ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "etablissement"), "nomfr"), "html", null, true);
                    echo " région ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "etablissement"), "regionid"), "nomfr"), "html", null, true);
                    echo "\"  target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "etablissement"), "nomfr"), "html", null, true);
                    echo "</a></li>
\t\t           ";
                    // line 87
                    if ((!twig_test_empty($this->getAttribute($this->getContext($context, "etablissement"), "prixapartir")))) {
                        echo "<li>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("a.partir"), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getContext($context, "etablissement"), "prixapartir"), array("\$" => "")), "html", null, true);
                        echo "\$</li>";
                    }
                    // line 88
                    echo "\t            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etablissement'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                echo "\t
\t\t       </ul>
\t\t       <h2 class=\"numberHotelListBottom\">
\t\t     \t<a href=\"";
                // line 91
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "s3"), "repertoirefr")))), "html", null, true);
                echo "\" title=\"Voir tous les hôtels, motels et auberges région - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s3"), "nomfr"), "html", null, true);
                echo "\">";
                if ((twig_length_filter($this->env, $this->getContext($context, "listClientBottom3")) < $this->getContext($context, "nbHebergement3"))) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "nbHebergement3"), "html", null, true);
                    echo " ";
                } else {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getContext($context, "listClientBottom3")), "html", null, true);
                    echo " ";
                }
                echo " hôtel";
                if ((twig_length_filter($this->env, $this->getContext($context, "listClientBottom3")) > 1)) {
                    echo "s";
                } else {
                }
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s3"), "nomfr"), "html", null, true);
                echo "</a>
\t\t       </h2>
\t\t  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s3'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 94
            echo "\t  ";
        } else {
            echo " ";
            // line 95
            echo "\t \t  ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "suggestion3"));
            foreach ($context['_seq'] as $context["_key"] => $context["s3"]) {
                // line 96
                echo "\t\t    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "s3"), "repertoireen")))), "html", null, true);
                echo "\" itemprop=\"url\" title=\"Hotels, motels and hostels ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s3"), "nomen"), "html", null, true);
                echo "\">
\t\t\t   \t<img src=\"";
                // line 97
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/regions/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s3"), "id"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s3"), "imagesuggestion"), "html", null, true);
                echo "\"  alt=\"Hotels, motels and hostels ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s3"), "nomen"), "html", null, true);
                echo "\" class=\"img_categoie_portail\" />
\t\t   \t</a>
\t\t\t<h3 id=\"title_suggestion_bottom3\" itemprop=\"name\">";
                // line 99
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s3"), "nomen"), "html", null, true);
                echo "</h3>
\t\t\t    <ul id=\"suggestion_bottom3\">
\t            ";
                // line 101
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listClientBottom3"));
                foreach ($context['_seq'] as $context["_key"] => $context["etablissement"]) {
                    // line 102
                    echo "\t\t           <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "etablissement"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"Acommodation ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "etablissement"), "nomen"), "html", null, true);
                    echo " region ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "etablissement"), "regionid"), "nomen"), "html", null, true);
                    echo "\"  target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "etablissement"), "nomen"), "html", null, true);
                    echo "</a></li>
\t\t           ";
                    // line 103
                    if ((!twig_test_empty($this->getAttribute($this->getContext($context, "etablissement"), "prixapartir")))) {
                        echo "<li>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("a.partir"), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getContext($context, "etablissement"), "prixapartir"), array("\$" => "")), "html", null, true);
                        echo "\$</li>";
                    }
                    // line 104
                    echo "\t            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etablissement'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 105
                echo "\t\t       </ul>
\t\t       <h2 class=\"numberHotelListBottom\">
\t\t    \t<a href=\"";
                // line 107
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "s3"), "repertoireen")))), "html", null, true);
                echo "\" title=\"See all hotels, motels and inns region - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s3"), "nomen"), "html", null, true);
                echo "\">";
                if ((twig_length_filter($this->env, $this->getContext($context, "listClientBottom3")) < $this->getContext($context, "nbHebergement3"))) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "nbHebergement3"), "html", null, true);
                    echo " ";
                } else {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getContext($context, "listClientBottom3")), "html", null, true);
                    echo " ";
                }
                echo " hotel";
                if ((twig_length_filter($this->env, $this->getContext($context, "listClientBottom3")) > 1)) {
                    echo "s";
                } else {
                }
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s3"), "nomen"), "html", null, true);
                echo "</a>
\t\t       </h2>
\t\t  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s3'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 110
            echo "\t ";
        }
        // line 111
        echo "\t</div>
\t
\t";
        // line 113
        echo " ";
        // line 114
        echo "\t<div itemscope itemtype=\"http://data-vocabulary.org/Organization\" > 
\t\t";
        // line 115
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
            // line 116
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "suggestion4"));
            foreach ($context['_seq'] as $context["_key"] => $context["s4"]) {
                // line 117
                echo "\t\t\t <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "s4"), "repertoirefr")))), "html", null, true);
                echo "\" itemprop=\"url\" title=\"Hôtels, motels et auberge ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s4"), "nomfr"), "html", null, true);
                echo "\">
\t\t\t\t<img src=\"";
                // line 118
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/regions/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s4"), "id"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s4"), "imagesuggestion"), "html", null, true);
                echo "\" alt=\"Hôtels, motels et auberge ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s4"), "nomfr"), "html", null, true);
                echo "\"  class=\"img_categoie_portail\" />
\t\t\t </a>  
\t\t\t <h3 id=\"title_suggestion_bottom4\" itemprop=\"name\"> ";
                // line 120
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s4"), "nomfr"), "html", null, true);
                echo "</h3>
\t\t\t    <ul id=\"suggestion_bottom4\">
\t         \t";
                // line 122
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listClientBottom4"));
                foreach ($context['_seq'] as $context["_key"] => $context["etablissement"]) {
                    // line 123
                    echo "\t\t           <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "etablissement"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"Hébergement ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "etablissement"), "nomfr"), "html", null, true);
                    echo " région ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "etablissement"), "regionid"), "nomfr"), "html", null, true);
                    echo "\"  target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "etablissement"), "nomfr"), "html", null, true);
                    echo "</a></li>
\t\t           ";
                    // line 124
                    if ((!twig_test_empty($this->getAttribute($this->getContext($context, "etablissement"), "prixapartir")))) {
                        echo "<li>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("a.partir"), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getContext($context, "etablissement"), "prixapartir"), array("\$" => "")), "html", null, true);
                        echo "\$</li>";
                    }
                    // line 125
                    echo "\t            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etablissement'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                echo "\t
\t\t       </ul>
\t\t      <h2 class=\"numberHotelListBottom\">
\t\t     \t<a href=\"";
                // line 128
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "s4"), "repertoirefr")))), "html", null, true);
                echo "\" title=\"Voir tous les hôtels, motels et auberges région - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s4"), "nomfr"), "html", null, true);
                echo "\">";
                if ((twig_length_filter($this->env, $this->getContext($context, "listClientBottom4")) < $this->getContext($context, "nbHebergement4"))) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "nbHebergement4"), "html", null, true);
                    echo " ";
                } else {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getContext($context, "listClientBottom4")), "html", null, true);
                    echo " ";
                }
                echo " hôtel";
                if ((twig_length_filter($this->env, $this->getContext($context, "listClientBottom4")) > 1)) {
                    echo "s";
                } else {
                }
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s4"), "nomfr"), "html", null, true);
                echo "</a>
\t\t      </h2>
\t\t    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s4'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 131
            echo "\t   ";
        } else {
            echo " ";
            // line 132
            echo "\t   \t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "suggestion4"));
            foreach ($context['_seq'] as $context["_key"] => $context["s4"]) {
                // line 133
                echo "\t\t     <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "s4"), "repertoireen")))), "html", null, true);
                echo "\" itemprop=\"url\" title=\"Hotels, motels and hostels ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s4"), "nomen"), "html", null, true);
                echo "\">
\t\t    \t<img src=\"";
                // line 134
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/regions/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s4"), "id"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s4"), "imagesuggestion"), "html", null, true);
                echo "\"  alt=\"Hotels, motels and hostels ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s4"), "nomen"), "html", null, true);
                echo "\" class=\"img_categoie_portail\" />
\t\t     </a>
\t\t\t <h3 id=\"title_suggestion_bottom4\" itemprop=\"name\">";
                // line 136
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s4"), "nomen"), "html", null, true);
                echo "</h3>
\t\t\t    <ul id=\"suggestion_bottom4\">
\t         \t";
                // line 138
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listClientBottom4"));
                foreach ($context['_seq'] as $context["_key"] => $context["etablissement"]) {
                    // line 139
                    echo "\t\t           <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "etablissement"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"Acommodation ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "etablissement"), "nomen"), "html", null, true);
                    echo " region ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "etablissement"), "regionid"), "nomen"), "html", null, true);
                    echo "\"  target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "etablissement"), "nomen"), "html", null, true);
                    echo "</a></li>
\t\t           ";
                    // line 140
                    if ((!twig_test_empty($this->getAttribute($this->getContext($context, "etablissement"), "prixapartir")))) {
                        echo "<li>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("a.partir"), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getContext($context, "etablissement"), "prixapartir"), array("\$" => "")), "html", null, true);
                        echo "\$</li>";
                    }
                    // line 141
                    echo "\t            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etablissement'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 142
                echo "\t\t\t     </ul>
\t\t\t    <h2 class=\"numberHotelListBottom\">
\t\t\t    \t<a href=\"";
                // line 144
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "s4"), "repertoireen")))), "html", null, true);
                echo "\" title=\"See all hotels, motels and inns region - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s4"), "nomen"), "html", null, true);
                echo "\">";
                if ((twig_length_filter($this->env, $this->getContext($context, "listClientBottom4")) < $this->getContext($context, "nbHebergement4"))) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "nbHebergement4"), "html", null, true);
                    echo " ";
                } else {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getContext($context, "listClientBottom4")), "html", null, true);
                    echo " ";
                }
                echo " hotel";
                if ((twig_length_filter($this->env, $this->getContext($context, "listClientBottom4")) > 1)) {
                    echo "s";
                } else {
                }
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s4"), "nomen"), "html", null, true);
                echo "</a>
\t\t\t    </h2>
\t\t   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s4'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 147
            echo "\t  ";
        }
        // line 148
        echo "\t</div>
\t<script>
\tvar obj1 = document.getElementById('title_suggestion_bottom1').offsetHeight;
\tif(obj1 >= 20)
\t{
\t\t\$(function(){
\t\t\t\$('ul#suggestion_bottom1').addClass('hackSuggestion');
\t\t});
\t}
\t\t
\tvar obj2 = document.getElementById('title_suggestion_bottom2').offsetHeight;
\tif(obj2 >= 20)
\t{
\t\t\$(function(){
\t\t\t\$('ul#suggestion_bottom2').addClass('hackSuggestion');
\t\t});
\t}
\t
\tvar obj3 = document.getElementById('title_suggestion_bottom3').offsetHeight;
\tif(obj3 >= 20)
\t{
\t\t\$(function(){
\t\t\t\$('ul#suggestion_bottom3').addClass('hackSuggestion');
\t\t});
\t}
\t
\tvar obj4 = document.getElementById('title_suggestion_bottom4').offsetHeight;
\tif(obj4 >= 20)
\t{
\t\t\$(function(){
\t\t\t\$('ul#suggestion_bottom4').addClass('hackSuggestion');
\t\t});
\t}
\t</script>
";
    }

    public function getTemplateName()
    {
        return "MyAppGlobalBundle:Default:suggestionBasDePage-fr.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  803 => 148,  800 => 147,  772 => 144,  768 => 142,  762 => 141,  739 => 138,  734 => 136,  724 => 134,  717 => 133,  708 => 131,  680 => 128,  670 => 125,  662 => 124,  651 => 123,  647 => 122,  632 => 118,  625 => 117,  620 => 116,  618 => 115,  606 => 110,  578 => 107,  568 => 104,  549 => 102,  523 => 96,  518 => 95,  486 => 91,  457 => 86,  448 => 83,  431 => 80,  415 => 74,  412 => 73,  384 => 70,  355 => 65,  346 => 62,  324 => 58,  320 => 57,  232 => 42,  230 => 41,  190 => 33,  130 => 21,  88 => 14,  1000 => 291,  995 => 290,  993 => 289,  990 => 288,  974 => 284,  952 => 283,  950 => 282,  935 => 276,  931 => 275,  926 => 274,  921 => 272,  912 => 266,  906 => 264,  903 => 263,  898 => 262,  896 => 261,  886 => 255,  877 => 253,  873 => 252,  870 => 251,  867 => 250,  865 => 249,  862 => 248,  854 => 244,  852 => 243,  849 => 242,  842 => 237,  839 => 236,  831 => 231,  827 => 230,  823 => 229,  820 => 228,  818 => 227,  815 => 226,  807 => 222,  805 => 221,  802 => 220,  792 => 213,  789 => 212,  776 => 206,  773 => 205,  752 => 201,  749 => 200,  746 => 199,  743 => 139,  741 => 197,  738 => 196,  730 => 190,  727 => 189,  722 => 187,  715 => 184,  712 => 132,  709 => 182,  701 => 178,  698 => 177,  677 => 171,  674 => 170,  672 => 169,  669 => 168,  661 => 164,  656 => 162,  653 => 161,  645 => 157,  642 => 120,  640 => 155,  637 => 154,  624 => 148,  611 => 142,  608 => 141,  600 => 137,  597 => 136,  595 => 135,  592 => 134,  584 => 130,  581 => 129,  579 => 128,  577 => 127,  574 => 105,  567 => 121,  559 => 120,  554 => 119,  548 => 117,  545 => 101,  519 => 101,  516 => 100,  502 => 92,  498 => 91,  490 => 89,  485 => 88,  479 => 86,  471 => 83,  455 => 79,  453 => 85,  450 => 77,  394 => 57,  386 => 54,  374 => 67,  366 => 66,  361 => 48,  357 => 47,  352 => 46,  349 => 45,  347 => 44,  344 => 43,  335 => 39,  323 => 37,  319 => 35,  304 => 33,  295 => 31,  256 => 16,  253 => 15,  250 => 14,  248 => 13,  228 => 5,  226 => 4,  214 => 281,  211 => 280,  206 => 271,  198 => 259,  193 => 247,  191 => 242,  183 => 236,  180 => 30,  178 => 226,  173 => 220,  170 => 219,  149 => 193,  139 => 181,  137 => 175,  134 => 174,  127 => 161,  124 => 160,  119 => 153,  107 => 134,  84 => 82,  64 => 26,  18 => 1,  67 => 27,  63 => 14,  45 => 9,  41 => 8,  37 => 5,  28 => 2,  3946 => 799,  3943 => 798,  3934 => 796,  3931 => 795,  3917 => 793,  3911 => 792,  3906 => 791,  3891 => 789,  3886 => 788,  3883 => 787,  3878 => 786,  3875 => 785,  3873 => 784,  3870 => 783,  3867 => 782,  3862 => 780,  3852 => 779,  3842 => 778,  3833 => 777,  3828 => 775,  3818 => 774,  3808 => 773,  3799 => 772,  3796 => 771,  3793 => 770,  3788 => 768,  3778 => 767,  3769 => 766,  3764 => 764,  3754 => 763,  3745 => 762,  3743 => 761,  3738 => 760,  3733 => 758,  3724 => 757,  3719 => 755,  3710 => 754,  3707 => 753,  3704 => 752,  3699 => 750,  3691 => 749,  3683 => 748,  3675 => 747,  3672 => 746,  3667 => 745,  3659 => 744,  3651 => 743,  3643 => 742,  3638 => 741,  3633 => 740,  3628 => 738,  3625 => 737,  3620 => 736,  3615 => 735,  3610 => 734,  3605 => 732,  3595 => 731,  3584 => 730,  3579 => 728,  3569 => 727,  3558 => 726,  3555 => 725,  3552 => 724,  3546 => 723,  3541 => 721,  3531 => 720,  3528 => 719,  3523 => 718,  3513 => 717,  3508 => 716,  3503 => 715,  3498 => 714,  3491 => 712,  3486 => 711,  3483 => 710,  3478 => 709,  3473 => 708,  3468 => 707,  3463 => 706,  3460 => 705,  3457 => 703,  3455 => 702,  3452 => 701,  3443 => 699,  3434 => 697,  3426 => 696,  3418 => 695,  3410 => 694,  3407 => 693,  3398 => 692,  3390 => 691,  3382 => 690,  3374 => 689,  3369 => 688,  3364 => 687,  3361 => 686,  3359 => 685,  3356 => 684,  3347 => 682,  3338 => 680,  3330 => 679,  3322 => 678,  3314 => 677,  3311 => 676,  3302 => 675,  3294 => 674,  3286 => 673,  3278 => 672,  3273 => 671,  3268 => 670,  3265 => 669,  3263 => 668,  3260 => 667,  3249 => 665,  3246 => 664,  3237 => 662,  3228 => 661,  3219 => 659,  3211 => 658,  3206 => 657,  3203 => 656,  3194 => 654,  3186 => 653,  3178 => 652,  3169 => 651,  3160 => 649,  3152 => 648,  3144 => 647,  3136 => 646,  3131 => 645,  3127 => 644,  3122 => 643,  3119 => 642,  3117 => 641,  3114 => 640,  3105 => 638,  3096 => 636,  3088 => 635,  3080 => 634,  3071 => 633,  3062 => 631,  3054 => 630,  3046 => 629,  3038 => 628,  3033 => 627,  3028 => 626,  3025 => 625,  3023 => 624,  3020 => 623,  3011 => 621,  3002 => 619,  2994 => 618,  2986 => 617,  2978 => 616,  2975 => 615,  2966 => 614,  2958 => 613,  2950 => 612,  2942 => 611,  2937 => 610,  2932 => 609,  2929 => 608,  2927 => 607,  2924 => 606,  2915 => 604,  2906 => 602,  2898 => 601,  2890 => 600,  2882 => 599,  2879 => 598,  2870 => 597,  2862 => 596,  2854 => 595,  2846 => 594,  2841 => 593,  2836 => 592,  2833 => 591,  2831 => 590,  2828 => 589,  2819 => 587,  2810 => 585,  2802 => 584,  2794 => 583,  2785 => 582,  2776 => 580,  2768 => 579,  2760 => 578,  2752 => 577,  2747 => 576,  2742 => 575,  2739 => 574,  2737 => 573,  2734 => 572,  2725 => 570,  2716 => 568,  2708 => 567,  2700 => 566,  2692 => 565,  2689 => 564,  2680 => 563,  2672 => 562,  2664 => 561,  2656 => 560,  2651 => 559,  2646 => 558,  2643 => 557,  2641 => 556,  2638 => 555,  2629 => 553,  2620 => 551,  2612 => 550,  2604 => 549,  2596 => 548,  2593 => 547,  2584 => 546,  2576 => 545,  2568 => 544,  2560 => 543,  2555 => 542,  2550 => 541,  2547 => 540,  2545 => 539,  2542 => 538,  2536 => 537,  2531 => 535,  2523 => 534,  2515 => 533,  2506 => 532,  2501 => 530,  2493 => 529,  2485 => 528,  2477 => 527,  2472 => 526,  2467 => 525,  2464 => 524,  2462 => 523,  2459 => 521,  2456 => 520,  2453 => 519,  2447 => 517,  2431 => 515,  2416 => 514,  2410 => 512,  2392 => 511,  2389 => 510,  2377 => 509,  2372 => 507,  2361 => 506,  2355 => 504,  2352 => 503,  2349 => 502,  2343 => 500,  2327 => 498,  2312 => 497,  2306 => 495,  2288 => 494,  2285 => 493,  2273 => 492,  2268 => 490,  2257 => 489,  2251 => 487,  2249 => 486,  2244 => 485,  2241 => 484,  2239 => 483,  2236 => 482,  2233 => 481,  2227 => 479,  2213 => 477,  2203 => 476,  2194 => 475,  2189 => 474,  2186 => 473,  2180 => 471,  2166 => 469,  2157 => 468,  2152 => 467,  2149 => 466,  2143 => 464,  2125 => 463,  2122 => 462,  2107 => 460,  2104 => 459,  2102 => 458,  2097 => 456,  2089 => 455,  2080 => 454,  2077 => 453,  2072 => 451,  2063 => 450,  2060 => 449,  2054 => 447,  2051 => 446,  2048 => 445,  2042 => 443,  2028 => 441,  2018 => 440,  2009 => 439,  2004 => 438,  2001 => 437,  1995 => 435,  1981 => 433,  1972 => 432,  1967 => 431,  1964 => 430,  1958 => 428,  1940 => 427,  1937 => 426,  1922 => 424,  1919 => 423,  1917 => 422,  1912 => 420,  1904 => 419,  1895 => 418,  1892 => 417,  1887 => 415,  1878 => 414,  1875 => 413,  1869 => 411,  1866 => 410,  1863 => 409,  1860 => 408,  1858 => 407,  1855 => 406,  1852 => 405,  1847 => 403,  1837 => 402,  1827 => 401,  1818 => 400,  1813 => 398,  1803 => 397,  1793 => 396,  1784 => 395,  1781 => 394,  1778 => 393,  1773 => 391,  1763 => 390,  1754 => 389,  1749 => 387,  1739 => 386,  1730 => 385,  1727 => 384,  1724 => 383,  1719 => 381,  1710 => 380,  1705 => 378,  1696 => 377,  1693 => 376,  1687 => 374,  1684 => 373,  1682 => 372,  1679 => 371,  1674 => 369,  1664 => 368,  1654 => 367,  1645 => 366,  1640 => 364,  1630 => 363,  1620 => 362,  1611 => 361,  1608 => 360,  1605 => 359,  1600 => 357,  1590 => 356,  1581 => 355,  1576 => 353,  1566 => 352,  1557 => 351,  1554 => 350,  1551 => 349,  1546 => 347,  1537 => 346,  1532 => 344,  1523 => 343,  1520 => 342,  1514 => 340,  1511 => 339,  1509 => 338,  1506 => 337,  1501 => 335,  1491 => 334,  1481 => 333,  1472 => 332,  1467 => 330,  1457 => 329,  1447 => 328,  1438 => 327,  1435 => 326,  1432 => 325,  1427 => 323,  1417 => 322,  1408 => 321,  1403 => 319,  1393 => 318,  1384 => 317,  1381 => 316,  1378 => 315,  1373 => 313,  1364 => 312,  1359 => 310,  1350 => 309,  1347 => 308,  1341 => 306,  1338 => 305,  1332 => 303,  1329 => 302,  1326 => 301,  1321 => 299,  1313 => 298,  1304 => 297,  1301 => 296,  1296 => 294,  1287 => 293,  1284 => 292,  1278 => 290,  1275 => 289,  1272 => 288,  1267 => 286,  1259 => 285,  1250 => 284,  1247 => 283,  1242 => 281,  1233 => 280,  1230 => 279,  1224 => 277,  1221 => 276,  1218 => 275,  1215 => 274,  1213 => 273,  1210 => 272,  1207 => 271,  1202 => 269,  1192 => 268,  1182 => 267,  1173 => 266,  1168 => 264,  1158 => 263,  1148 => 262,  1139 => 261,  1136 => 260,  1133 => 259,  1130 => 258,  1125 => 256,  1115 => 255,  1106 => 254,  1101 => 252,  1091 => 251,  1082 => 250,  1079 => 249,  1076 => 248,  1073 => 247,  1068 => 245,  1059 => 244,  1054 => 242,  1045 => 241,  1042 => 240,  1039 => 239,  1036 => 238,  1030 => 236,  1025 => 234,  1020 => 233,  1017 => 232,  1014 => 231,  1009 => 229,  1001 => 228,  992 => 227,  987 => 225,  979 => 224,  970 => 223,  967 => 222,  964 => 221,  961 => 220,  956 => 218,  947 => 281,  942 => 215,  933 => 214,  930 => 213,  927 => 212,  924 => 273,  918 => 209,  913 => 207,  908 => 206,  905 => 205,  902 => 204,  900 => 203,  897 => 202,  893 => 260,  889 => 199,  881 => 198,  869 => 197,  857 => 196,  847 => 195,  840 => 194,  836 => 192,  828 => 191,  816 => 190,  804 => 189,  794 => 214,  787 => 187,  784 => 186,  781 => 208,  778 => 207,  774 => 182,  766 => 181,  754 => 140,  744 => 179,  737 => 178,  733 => 176,  725 => 188,  713 => 174,  703 => 173,  696 => 176,  693 => 175,  690 => 170,  687 => 168,  683 => 167,  675 => 166,  665 => 165,  658 => 163,  654 => 162,  646 => 161,  636 => 160,  629 => 150,  626 => 149,  623 => 157,  621 => 147,  615 => 114,  609 => 111,  599 => 150,  594 => 149,  586 => 146,  576 => 145,  565 => 144,  560 => 103,  550 => 141,  540 => 99,  530 => 97,  525 => 103,  509 => 132,  499 => 131,  491 => 129,  489 => 128,  483 => 126,  478 => 124,  473 => 123,  470 => 122,  468 => 87,  463 => 119,  460 => 118,  454 => 116,  449 => 114,  441 => 112,  438 => 81,  432 => 72,  421 => 77,  408 => 99,  405 => 60,  400 => 59,  397 => 58,  395 => 94,  379 => 90,  376 => 89,  373 => 88,  371 => 87,  368 => 86,  360 => 83,  336 => 60,  326 => 78,  317 => 77,  314 => 76,  306 => 73,  297 => 72,  292 => 54,  283 => 69,  271 => 65,  268 => 64,  265 => 63,  263 => 49,  245 => 12,  224 => 57,  221 => 37,  219 => 288,  200 => 50,  197 => 49,  185 => 239,  175 => 225,  172 => 29,  166 => 41,  163 => 40,  152 => 25,  132 => 168,  121 => 28,  108 => 25,  95 => 22,  89 => 97,  75 => 15,  32 => 3,  20 => 183,  143 => 32,  116 => 26,  112 => 141,  109 => 140,  81 => 17,  73 => 13,  299 => 79,  280 => 68,  258 => 61,  251 => 58,  233 => 6,  227 => 40,  223 => 3,  215 => 48,  196 => 248,  192 => 44,  171 => 42,  167 => 217,  165 => 212,  161 => 28,  159 => 36,  155 => 196,  151 => 33,  144 => 186,  118 => 27,  115 => 24,  77 => 71,  59 => 20,  56 => 11,  25 => 1,  23 => 4,  138 => 29,  123 => 29,  94 => 15,  74 => 70,  46 => 7,  19 => 2,  218 => 36,  203 => 269,  182 => 97,  142 => 23,  102 => 126,  99 => 125,  97 => 114,  92 => 98,  90 => 21,  85 => 19,  83 => 18,  80 => 13,  35 => 4,  33 => 6,  21 => 3,  126 => 20,  110 => 33,  104 => 133,  91 => 22,  86 => 19,  82 => 77,  78 => 16,  76 => 14,  62 => 21,  58 => 12,  50 => 11,  43 => 9,  39 => 4,  30 => 2,  26 => 4,  22 => 3,  17 => 1,  639 => 163,  634 => 160,  631 => 159,  628 => 158,  613 => 113,  610 => 154,  604 => 151,  593 => 150,  591 => 148,  583 => 148,  580 => 147,  575 => 146,  573 => 145,  564 => 142,  551 => 141,  543 => 115,  538 => 138,  535 => 139,  532 => 108,  529 => 135,  514 => 94,  511 => 98,  505 => 129,  494 => 90,  492 => 126,  484 => 125,  481 => 124,  476 => 88,  474 => 84,  465 => 120,  452 => 118,  444 => 113,  439 => 115,  436 => 114,  434 => 73,  429 => 71,  424 => 78,  419 => 76,  413 => 63,  407 => 61,  393 => 12,  385 => 92,  380 => 68,  378 => 53,  372 => 164,  367 => 109,  365 => 85,  359 => 105,  356 => 104,  353 => 102,  350 => 82,  343 => 98,  340 => 96,  333 => 92,  325 => 90,  321 => 89,  316 => 88,  313 => 86,  311 => 75,  300 => 32,  293 => 69,  290 => 68,  287 => 29,  285 => 28,  277 => 63,  274 => 50,  272 => 23,  267 => 21,  262 => 56,  254 => 46,  247 => 51,  244 => 44,  237 => 43,  234 => 47,  231 => 46,  217 => 40,  209 => 272,  207 => 37,  188 => 241,  176 => 35,  169 => 33,  160 => 205,  157 => 27,  114 => 146,  71 => 11,  69 => 12,  65 => 11,  61 => 13,  55 => 12,  52 => 3,  49 => 7,  42 => 6,  36 => 8,  27 => 2,  24 => 1,  426 => 79,  423 => 137,  416 => 64,  411 => 129,  409 => 128,  406 => 127,  401 => 66,  392 => 120,  388 => 55,  382 => 114,  370 => 110,  363 => 111,  351 => 64,  345 => 108,  341 => 81,  329 => 59,  322 => 103,  309 => 101,  305 => 100,  301 => 98,  289 => 96,  282 => 51,  270 => 22,  264 => 57,  259 => 48,  249 => 82,  242 => 77,  236 => 76,  229 => 55,  225 => 39,  222 => 113,  216 => 287,  208 => 64,  201 => 260,  195 => 48,  189 => 43,  181 => 57,  174 => 55,  168 => 54,  162 => 211,  154 => 50,  147 => 187,  141 => 29,  135 => 22,  129 => 167,  122 => 154,  117 => 147,  111 => 32,  105 => 31,  98 => 17,  93 => 21,  87 => 83,  79 => 76,  72 => 43,  66 => 15,  60 => 9,  57 => 12,  54 => 11,  47 => 8,  44 => 8,  40 => 9,  38 => 8,  34 => 6,  29 => 4,);
    }
}

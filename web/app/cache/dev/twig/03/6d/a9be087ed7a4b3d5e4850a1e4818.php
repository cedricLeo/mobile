<?php

/* ::base1.html.twig */
class __TwigTemplate_036da9be087ed7a4b3d5e4850a1e4818 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
\t <head>
\t\t <meta name=\"viewport\" content=\"initial-scale=1.0, user-scalable=no\">
         <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />  
         <meta name=\"robots\" content=\"noindex,nofollow\"/>
       \t ";
        // line 7
        if (array_key_exists("nocache", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getContext($context, "nocache"), "html", null, true);
            echo " ";
        }
        // line 8
        echo "    \t <title>Global Réservation - Administration</title>
    \t ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "    \t ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
        echo "\t 
       \t 
    </head>
\t<body>
\t<div id=\"connexion\">
\t";
        // line 38
        echo "\t</div>
\t\t<div id=\"global\">\t\t\t
\t\t\t<div id=\"Container\">
\t\t\t\t<div id=\"entete\">
\t\t\t\t    <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappadmin/images/logo_global-reservation.jpg"), "html", null, true);
        echo "\" width=\"250\" height=\"106\" alt=\"Logo de Global Réservation\" />
\t\t\t\t    ";
        // line 43
        if ((!array_key_exists("display", $context))) {
            // line 44
            echo "\t\t\t\t    \t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("logout"), "html", null, true);
            echo "\" title=\"Me déconnecter du système\" class=\"deconnexion\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("session.unset"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t";
            // line 45
            if ((($this->getContext($context, "role") == "ROLE_SUPER_ADMIN") && array_key_exists("adminClient", $context))) {
                // line 46
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listOption"));
                foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                    // line 47
                    echo "                                                                    ";
                    if (array_key_exists("redirect", $context)) {
                        // line 48
                        echo "                                                                        ";
                        if (($this->getContext($context, "redirect") == "menu_hebergement")) {
                            // line 49
                            echo "                                                                            <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_updatehebergement", array("id" => $this->getContext($context, "id"))), "html", null, true);
                            echo "\">Revenir dans les hébergements</a>
                                                                        ";
                        } else {
                            // line 51
                            echo "                                                                            <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_updateattrait", array("id" => $this->getContext($context, "id"))), "html", null, true);
                            echo "\">Revenir dans les attraits</a>
                                                                        ";
                        }
                        // line 53
                        echo "                                                                    ";
                    } else {
                        // line 54
                        echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_clients"), "html", null, true);
                        echo "\">Revenir à la gestion des clients</a>
                                                                    ";
                    }
                    // line 56
                    echo "\t\t\t\t\t\t\t\t\t<p><strong><mark>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("connexion.compte"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nom"), "html", null, true);
                    echo " </mark></strong></p>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 58
                echo "\t\t\t\t\t\t\t";
            }
            // line 59
            echo "\t\t\t\t\t\t<p><strong> ";
            if (($this->getContext($context, "role") == "ROLE_SUPER_ADMIN")) {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Bonjour"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getContext($context, "name_admin"), "html", null, true);
                echo " ";
            } else {
                echo " ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listOption"));
                foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                    echo " <mark>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nom"), "html", null, true);
                    echo "</mark> ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                echo " ";
            }
            echo " </strong></p>\t\t\t\t\t
\t\t\t\t\t";
        }
        // line 61
        echo "\t\t\t    </div>
\t\t\t    <div class=\"menu_top\">
\t\t\t    ";
        // line 63
        if ((!array_key_exists("display", $context))) {
            // line 64
            echo "\t\t\t\t
\t\t\t\t";
            // line 65
            if ((($this->getContext($context, "role") == "ROLE_SUPER_ADMIN") && (!array_key_exists("adminClient", $context)))) {
                // line 66
                echo "\t\t\t\t\t";
                $this->displayBlock('menu', $context, $blocks);
                // line 179
                echo "\t\t\t\t";
            }
            echo " 
\t\t\t";
            // line 181
            echo "\t\t\t
\t\t\t";
            // line 182
            echo "\t";
            // line 183
            echo "\t\t\t\t";
            if (array_key_exists("adminClient", $context)) {
                // line 184
                echo "\t\t\t\t\t<div class=\"menuprincipal\">
\t\t\t\t\t\t<ul id=\"menu\">
\t\t\t\t\t\t";
                // line 186
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    // line 187
                    echo "\t\t\t\t\t\t\t\t";
                    if ((array_key_exists("hebergementExiste", $context) && (!twig_test_empty($this->getContext($context, "hebergementExiste"))))) {
                        // line 188
                        echo "\t\t\t\t\t\t\t\t\t";
                        // line 189
                        echo "\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "hebergementExiste"));
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
                            // line 190
                            if (((($this->getContext($context, "role") == "ROLE_ADMIN") && ($this->getAttribute($this->getContext($context, "p"), "actif") == true)) || (($this->getContext($context, "role") == "ROLE_ADMIN") && ($this->getAttribute($this->getContext($context, "p"), "aprouver") == true)))) {
                                // line 191
                                echo "                                                                                ";
                                if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                                    // line 192
                                    echo "                                                                                    <li id=\"hebergementmenuclient\" style=\"margin:0;\"> <a href=\"javascript:void(0);\" class=\"nodePricipal ";
                                    if (array_key_exists("pointerHeb", $context)) {
                                        echo " nodePrincipalCustomer ";
                                    }
                                    echo "\" style=\"padding:0 15px; cursor:default;\"> ";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("information.concernant.etablissement"), "html", null, true);
                                    echo " ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                                    echo "</a>                                                                                     
                                                                                            <ul class=\"sousmenu\">                                                                    
                                                                                                <li><a href=\"";
                                    // line 194
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppTextHebergement", array("id" => $this->getAttribute($this->getContext($context, "p"), "id"), "name" => $this->getAttribute($this->getContext($context, "p"), "repertoirefr"), "redirect" => $this->getContext($context, "redirect"))), "html", null, true);
                                    echo "\">";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                                    echo "</a></li>
                                                                                            ";
                                    // line 196
                                    echo "                                                                                               ";
                                    $context['_parent'] = (array) $context;
                                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "hebergementExiste"));
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
                                        // line 197
                                        if (($this->getAttribute($this->getAttribute($this->getContext($context, "p"), "acompteid"), "id") == 2)) {
                                            echo " 
                                                                                                        ";
                                            // line 198
                                            if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                                                // line 199
                                                echo "                                                                                                         <li><a href=\"";
                                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppChambre", array("id" => $this->getAttribute($this->getContext($context, "p"), "id"), "name" => $this->getAttribute($this->getContext($context, "p"), "repertoirefr"), "redirect" => $this->getContext($context, "redirect"))), "html", null, true);
                                                echo "\">";
                                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("type.de.chambre.pour"), "html", null, true);
                                                echo "</a></li>
                                                                                                        ";
                                            }
                                            // line 201
                                            echo "                                                                                                    ";
                                        }
                                        // line 202
                                        echo "                                                                                               ";
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
                                    // line 203
                                    echo "                                                                                            ";
                                    // line 204
                                    echo "                                                                                                ";
                                    if (($this->getAttribute($this->getContext($context, "p"), "corporatif") == 1)) {
                                        // line 205
                                        echo "                                                                                                        <li class=\"nodeChild ";
                                        if (array_key_exists("mp", $context)) {
                                            echo twig_escape_filter($this->env, $this->getContext($context, "pointeurcorpo"), "html", null, true);
                                        }
                                        echo "\"><a href=\"";
                                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppCorporatif", array("id" => $this->getAttribute($this->getContext($context, "p"), "id"), "name" => $this->getAttribute($this->getContext($context, "p"), "repertoirefr"), "redirect" => $this->getContext($context, "redirect"))), "html", null, true);
                                        echo "\">";
                                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("corporatif"), "html", null, true);
                                        echo "</a></li>
                                                                                                ";
                                    }
                                    // line 207
                                    echo "                                                                                            </ul>                                                                                    
                                                                                    </li>
                                                                                ";
                                } elseif (($this->getAttribute($this->getContext($context, "loop"), "index") == 2)) {
                                    // line 210
                                    echo "                                                                                    <li id=\"hebergementmenuclient\" style=\"margin:0;\"> <a href=\"javascript:void(0);\" class=\"nodePricipal ";
                                    if (array_key_exists("pointerHeb", $context)) {
                                        echo " nodePrincipalCustomer ";
                                    }
                                    echo "\" style=\"padding:0 15px; cursor:default;\"> ";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("information.concernant.etablissement"), "html", null, true);
                                    echo " ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                                    echo "</a>                                                                                     
                                                                                            <ul class=\"sousmenu\">                                                                    
                                                                                                <li><a href=\"";
                                    // line 212
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppTextHebergement", array("id" => $this->getAttribute($this->getContext($context, "p"), "id"), "name" => $this->getAttribute($this->getContext($context, "p"), "repertoirefr"), "redirect" => $this->getContext($context, "redirect"))), "html", null, true);
                                    echo "\">";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                                    echo "</a></li>
                                                                                            ";
                                    // line 214
                                    echo "                                                                                               ";
                                    $context['_parent'] = (array) $context;
                                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "hebergementExiste"));
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
                                        // line 215
                                        if (($this->getAttribute($this->getAttribute($this->getContext($context, "p"), "acompteid"), "id") == 2)) {
                                            // line 216
                                            echo "                                                                                                        ";
                                            if (($this->getAttribute($this->getContext($context, "loop"), "index") == 2)) {
                                                // line 217
                                                echo "                                                                                                         <li><a href=\"";
                                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppChambre", array("id" => $this->getAttribute($this->getContext($context, "p"), "id"), "name" => $this->getAttribute($this->getContext($context, "p"), "repertoirefr"), "redirect" => $this->getContext($context, "redirect"))), "html", null, true);
                                                echo "\">";
                                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("type.de.chambre.pour"), "html", null, true);
                                                echo "</a></li>
                                                                                                        ";
                                            }
                                            // line 219
                                            echo "                                                                                                    ";
                                        }
                                        // line 220
                                        echo "                                                                                               ";
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
                                    // line 221
                                    echo "                                                                                            ";
                                    // line 222
                                    echo "                                                                                                ";
                                    if (($this->getAttribute($this->getContext($context, "p"), "corporatif") == 1)) {
                                        // line 223
                                        echo "                                                                                                        <li class=\"nodeChild ";
                                        if (array_key_exists("mp", $context)) {
                                            echo twig_escape_filter($this->env, $this->getContext($context, "pointeurcorpo"), "html", null, true);
                                        }
                                        echo "\"><a href=\"";
                                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppCorporatif", array("id" => $this->getAttribute($this->getContext($context, "p"), "id"), "name" => $this->getAttribute($this->getContext($context, "p"), "repertoirefr"), "redirect" => $this->getContext($context, "redirect"))), "html", null, true);
                                        echo "\">";
                                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("corporatif"), "html", null, true);
                                        echo "</a></li>
                                                                                                ";
                                    }
                                    // line 225
                                    echo "                                                                                            </ul>                                                                                    
                                                                                    </li>
                                                                                ";
                                }
                                // line 228
                                echo "                                                                            ";
                            } elseif (($this->getContext($context, "role") == "ROLE_SUPER_ADMIN")) {
                                // line 229
                                echo "                                                                                ";
                                if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                                    // line 230
                                    echo "                                                                                    <li id=\"hebergementmenuclient\" style=\"margin:0;\"> <a href=\"javascript:void(0);\" class=\"nodePricipal ";
                                    if (array_key_exists("pointerHeb", $context)) {
                                        echo " nodePrincipalCustomer ";
                                    }
                                    echo "\" style=\"padding:0 15px; cursor:default;\"> ";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("information.concernant.etablissement"), "html", null, true);
                                    echo " ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                                    echo "</a>                                                                                     
                                                                                            <ul class=\"sousmenu\">                                                                    
                                                                                                <li><a href=\"";
                                    // line 232
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppTextHebergement", array("id" => $this->getAttribute($this->getContext($context, "p"), "id"), "name" => $this->getAttribute($this->getContext($context, "p"), "repertoirefr"), "redirect" => $this->getContext($context, "redirect"))), "html", null, true);
                                    echo "\">";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                                    echo "</a></li>
                                                                                            ";
                                    // line 234
                                    echo "                                                                                               ";
                                    $context['_parent'] = (array) $context;
                                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "hebergementExiste"));
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
                                        // line 235
                                        echo "                                                                                                   ";
                                        if (($this->getAttribute($this->getAttribute($this->getContext($context, "p"), "acompteid"), "id") == 2)) {
                                            echo " 
                                                                                                        ";
                                            // line 236
                                            if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                                                // line 237
                                                echo "                                                                                                        <li><a href=\"";
                                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppChambre", array("id" => $this->getAttribute($this->getContext($context, "p"), "id"), "name" => $this->getAttribute($this->getContext($context, "p"), "repertoirefr"), "redirect" => $this->getContext($context, "redirect"))), "html", null, true);
                                                echo "\">";
                                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("type.de.chambre.pour"), "html", null, true);
                                                echo "</a></li>
                                                                                                        ";
                                            }
                                            // line 239
                                            echo "                                                                                                    ";
                                        }
                                        // line 240
                                        echo "                                                                                               ";
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
                                    // line 241
                                    echo "                                                                                            ";
                                    // line 242
                                    echo "                                                                                                ";
                                    if (($this->getAttribute($this->getContext($context, "p"), "corporatif") == 1)) {
                                        // line 243
                                        echo "                                                                                                        <li class=\"nodeChild ";
                                        if (array_key_exists("mp", $context)) {
                                            echo twig_escape_filter($this->env, $this->getContext($context, "pointeurcorpo"), "html", null, true);
                                        }
                                        echo "\"><a href=\"";
                                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppCorporatif", array("id" => $this->getAttribute($this->getContext($context, "p"), "id"), "name" => $this->getAttribute($this->getContext($context, "p"), "repertoirefr"), "redirect" => $this->getContext($context, "redirect"))), "html", null, true);
                                        echo "\">";
                                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("corporatif"), "html", null, true);
                                        echo "</a></li>
                                                                                                ";
                                    }
                                    // line 245
                                    echo "                                                                                            </ul>                                                                                    
                                                                                    </li>
                                                                                ";
                                } elseif (($this->getAttribute($this->getContext($context, "loop"), "index") == 2)) {
                                    // line 248
                                    echo "                                                                                     <li id=\"hebergementmenuclient\" style=\"margin:0;\"> <a href=\"javascript:void(0);\" class=\"nodePricipal ";
                                    if (array_key_exists("pointerHeb", $context)) {
                                        echo " nodePrincipalCustomer ";
                                    }
                                    echo "\" style=\"padding:0 15px; cursor:default;\"> ";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("information.concernant.etablissement"), "html", null, true);
                                    echo " ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                                    echo "</a>                                                                                     
                                                                                        <ul class=\"sousmenu\">                                                                    
                                                                                            <li><a href=\"";
                                    // line 250
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppTextHebergement", array("id" => $this->getAttribute($this->getContext($context, "p"), "id"), "name" => $this->getAttribute($this->getContext($context, "p"), "repertoirefr"), "redirect" => $this->getContext($context, "redirect"))), "html", null, true);
                                    echo "\">";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 252
                                    echo "                                                                                           ";
                                    $context['_parent'] = (array) $context;
                                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "hebergementExiste"));
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
                                        // line 253
                                        echo "                                                                                               ";
                                        if (($this->getAttribute($this->getAttribute($this->getContext($context, "p"), "acompteid"), "id") == 2)) {
                                            echo " 
                                                                                                    ";
                                            // line 254
                                            if (($this->getAttribute($this->getContext($context, "loop"), "index") == 2)) {
                                                // line 255
                                                echo "                                                                                                    <li><a href=\"";
                                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppChambre", array("id" => $this->getAttribute($this->getContext($context, "p"), "id"), "name" => $this->getAttribute($this->getContext($context, "p"), "repertoirefr"), "redirect" => $this->getContext($context, "redirect"))), "html", null, true);
                                                echo "\">";
                                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("type.de.chambre.pour"), "html", null, true);
                                                echo "</a></li>
                                                                                                    ";
                                            }
                                            // line 257
                                            echo "                                                                                               ";
                                        }
                                        // line 258
                                        echo "                                                                                           ";
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
                                    // line 259
                                    echo "                                                                                        ";
                                    // line 260
                                    echo "                                                                                            ";
                                    if (($this->getAttribute($this->getContext($context, "p"), "corporatif") == 1)) {
                                        // line 261
                                        echo "                                                                                                    <li class=\"nodeChild ";
                                        if (array_key_exists("mp", $context)) {
                                            echo twig_escape_filter($this->env, $this->getContext($context, "pointeurcorpo"), "html", null, true);
                                        }
                                        echo "\"><a href=\"";
                                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppCorporatif", array("id" => $this->getAttribute($this->getContext($context, "p"), "id"), "name" => $this->getAttribute($this->getContext($context, "p"), "repertoirefr"), "redirect" => $this->getContext($context, "redirect"))), "html", null, true);
                                        echo "\">";
                                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("corporatif"), "html", null, true);
                                        echo "</a></li>
                                                                                            ";
                                    }
                                    // line 263
                                    echo "\t\t\t\t\t\t\t\t\t\t\t</ul>                                                                                    
                                                                                     </li>
                                                                                ";
                                }
                                // line 266
                                echo "                                                                            ";
                            }
                            // line 267
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
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 268
                        echo "\t\t\t\t\t\t\t\t";
                    }
                    // line 269
                    echo "\t\t\t\t\t\t\t";
                    // line 271
                    echo "\t\t\t\t\t\t\t";
                    // line 279
                    echo "                                                                ";
                    // line 280
                    echo "                                                                ";
                    if ((array_key_exists("hebergementExiste", $context) && (!twig_test_empty($this->getContext($context, "hebergementExiste"))))) {
                        // line 281
                        echo "                                                                    ";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "hebergementExiste"));
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
                            // line 282
                            echo "                                                                        ";
                            if (($this->getAttribute($this->getAttribute($this->getContext($context, "p"), "acompteid"), "id") == 2)) {
                                echo "   
                                                                            ";
                                // line 283
                                if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                                    // line 284
                                    echo "                                                                            <li style=\"margin:0;\"> <a href=\"javascript:void(0);\" class=\"nodePricipal deletecursor ";
                                    if (array_key_exists("pointerforfait", $context)) {
                                        echo " nodePrincipalCustomer ";
                                    }
                                    echo "\" style=\"padding:0 15px;\"> ";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forfait"), "html", null, true);
                                    echo "</a> 
                                                                                ";
                                }
                                // line 286
                                echo "                                                                                <ul class=sousmenu\">
                                                                                    ";
                                // line 287
                                $context['_parent'] = (array) $context;
                                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "hebergementExiste"));
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
                                    // line 288
                                    echo "                                                                                        ";
                                    if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                                        // line 289
                                        echo "                                                                                            <li style=\"margin:0;\"> <a href=\"";
                                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppForfait", array("id" => $this->getAttribute($this->getContext($context, "w"), "id"), "name" => $this->getAttribute($this->getContext($context, "w"), "repertoirefr"), "redirect" => $this->getContext($context, "redirect"))), "html", null, true);
                                        echo "\" > ";
                                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forfait"), "html", null, true);
                                        echo "</a> </li>
                                                                                        ";
                                    }
                                    // line 291
                                    echo "                                                                                    ";
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
                                // line 292
                                echo "                                                                                </ul>
                                                                            </li>
                                                                        ";
                            }
                            // line 295
                            echo "                                                                   ";
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
                        // line 296
                        echo "                                                                ";
                    }
                    // line 297
                    echo "                                                                ";
                    // line 298
                    echo "\t\t\t\t\t\t";
                } else {
                    echo " ";
                    // line 299
                    echo "\t\t\t\t\t\t\t\t";
                    if ((array_key_exists("hebergementExiste", $context) && (!twig_test_empty($this->getContext($context, "hebergementExiste"))))) {
                        // line 300
                        echo "\t\t\t\t\t\t\t\t\t";
                        // line 301
                        echo "\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "hebergementExiste"));
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
                            // line 302
                            echo "                                                                            ";
                            if ((($this->getContext($context, "role") == "ROLE_ADMIN") && ($this->getAttribute($this->getContext($context, "p"), "actif") == true))) {
                                // line 303
                                echo "                                                                                ";
                                if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                                    // line 304
                                    echo "                                                                                    <li id=\"hebergementmenuclient\" style=\"margin:0;\"> <a href=\"javascript:void(0);\" class=\"nodePricipal ";
                                    if (array_key_exists("pointerHeb", $context)) {
                                        echo " nodePrincipalCustomer ";
                                    }
                                    echo "\" style=\"padding:0 15px; cursor:default;\"> ";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("information.concernant.etablissement"), "html", null, true);
                                    echo " ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                                    echo "</a> 
                                                                                            <ul class=\"sousmenu\">
                                                                                                    <li><a href=\"";
                                    // line 306
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppTextHebergement", array("id" => $this->getAttribute($this->getContext($context, "p"), "id"), "name" => $this->getAttribute($this->getContext($context, "p"), "repertoireen"))), "html", null, true);
                                    echo "\">";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                                    echo "</a></li>
                                                                                            ";
                                    // line 308
                                    echo "                                                                                                    ";
                                    $context['_parent'] = (array) $context;
                                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "hebergementExiste"));
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
                                        // line 309
                                        if (($this->getAttribute($this->getAttribute($this->getContext($context, "p"), "acompteid"), "id") == 2)) {
                                            echo "   
                                                                                                            ";
                                            // line 310
                                            if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                                                // line 311
                                                echo "                                                                                                            <li><a href=\"";
                                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppChambre", array("id" => $this->getAttribute($this->getContext($context, "p"), "id"), "name" => $this->getAttribute($this->getContext($context, "p"), "repertoireen"), "redirect" => $this->getContext($context, "redirect"))), "html", null, true);
                                                echo "\">";
                                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("type.de.chambre.pour"), "html", null, true);
                                                echo "</a></li>                                                                                                  
                                                                                                            ";
                                            }
                                            // line 313
                                            echo "                                                                                                        ";
                                        }
                                        // line 314
                                        echo "                                                                                                    ";
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
                                    // line 315
                                    echo "                                                                                            ";
                                    // line 316
                                    echo "                                                                                                    ";
                                    if (($this->getAttribute($this->getContext($context, "p"), "corporatif") == 1)) {
                                        // line 317
                                        echo "                                                                                                            <li class=\"nodeChild ";
                                        if (array_key_exists("mp", $context)) {
                                            echo twig_escape_filter($this->env, $this->getContext($context, "pointeurcorpo"), "html", null, true);
                                        }
                                        echo "\"><a href=\"";
                                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppCorporatif", array("id" => $this->getAttribute($this->getContext($context, "p"), "id"), "name" => $this->getAttribute($this->getContext($context, "p"), "repertoireen"), "redirect" => $this->getContext($context, "redirect"))), "html", null, true);
                                        echo "\">";
                                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("corporatif"), "html", null, true);
                                        echo "</a></li>
                                                                                                    ";
                                    }
                                    // line 319
                                    echo "                                                                                            </ul>
                                                                                    </li>
                                                                                ";
                                } elseif (($this->getAttribute($this->getContext($context, "loop"), "index") == 2)) {
                                    // line 322
                                    echo "                                                                                    <li id=\"hebergementmenuclient\" style=\"margin:0;\"> <a href=\"javascript:void(0);\" class=\"nodePricipal ";
                                    if (array_key_exists("pointerHeb", $context)) {
                                        echo " nodePrincipalCustomer ";
                                    }
                                    echo "\" style=\"padding:0 15px; cursor:default;\"> ";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("information.concernant.etablissement"), "html", null, true);
                                    echo " ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                                    echo "</a> 
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sousmenu\">
                                                                                                <li><a href=\"";
                                    // line 324
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppTextHebergement", array("id" => $this->getAttribute($this->getContext($context, "p"), "id"), "name" => $this->getAttribute($this->getContext($context, "p"), "repertoireen"))), "html", null, true);
                                    echo "\">";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 326
                                    echo "                                                                                                ";
                                    $context['_parent'] = (array) $context;
                                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "hebergementExiste"));
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
                                        // line 327
                                        if (($this->getAttribute($this->getAttribute($this->getContext($context, "p"), "acompteid"), "id") == 2)) {
                                            echo " 
                                                                                                        ";
                                            // line 328
                                            if (($this->getAttribute($this->getContext($context, "loop"), "index") == 2)) {
                                                // line 329
                                                echo "                                                                                                        <li><a href=\"";
                                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppChambre", array("id" => $this->getAttribute($this->getContext($context, "p"), "id"), "name" => $this->getAttribute($this->getContext($context, "p"), "repertoireen"), "redirect" => $this->getContext($context, "redirect"))), "html", null, true);
                                                echo "\">";
                                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("type.de.chambre.pour"), "html", null, true);
                                                echo "</a></li>                                                                 
                                                                                                        ";
                                            }
                                            // line 331
                                            echo "                                                                                                    ";
                                        }
                                        // line 332
                                        echo "                                                                                                ";
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
                                    // line 333
                                    echo "                                                                                        ";
                                    // line 334
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                    if (($this->getAttribute($this->getContext($context, "p"), "corporatif") == 1)) {
                                        // line 335
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nodeChild ";
                                        if (array_key_exists("mp", $context)) {
                                            echo twig_escape_filter($this->env, $this->getContext($context, "pointeurcorpo"), "html", null, true);
                                        }
                                        echo "\"><a href=\"";
                                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppCorporatif", array("id" => $this->getAttribute($this->getContext($context, "p"), "id"), "name" => $this->getAttribute($this->getContext($context, "p"), "repertoireen"), "redirect" => $this->getContext($context, "redirect"))), "html", null, true);
                                        echo "\">";
                                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("corporatif"), "html", null, true);
                                        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 337
                                    echo "\t\t\t\t\t\t\t\t\t\t\t</ul>
                                                                                    </li>
                                                                                ";
                                }
                                // line 340
                                echo "                                                                            ";
                            } elseif (($this->getContext($context, "role") == "ROLE_SUPER_ADMIN")) {
                                // line 341
                                echo "                                                                                ";
                                if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                                    // line 342
                                    echo "                                                                                    <li id=\"hebergementmenuclient\" style=\"margin:0;\"> <a href=\"javascript:void(0);\" class=\"nodePricipal ";
                                    if (array_key_exists("pointerHeb", $context)) {
                                        echo " nodePrincipalCustomer ";
                                    }
                                    echo "\" style=\"padding:0 15px; cursor:default;\"> ";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("information.concernant.etablissement"), "html", null, true);
                                    echo " ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                                    echo "</a> 
                                                                                            <ul class=\"sousmenu\">
                                                                                                    <li><a href=\"";
                                    // line 344
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppTextHebergement", array("id" => $this->getAttribute($this->getContext($context, "p"), "id"), "name" => $this->getAttribute($this->getContext($context, "p"), "repertoireen"))), "html", null, true);
                                    echo "\">";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                                    echo "</a></li>
                                                                                            ";
                                    // line 346
                                    echo "                                                                                                    ";
                                    $context['_parent'] = (array) $context;
                                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "hebergementExiste"));
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
                                        // line 347
                                        echo "                                                                                                        ";
                                        if (($this->getAttribute($this->getAttribute($this->getContext($context, "p"), "acompteid"), "id") == 2)) {
                                            echo " 
                                                                                                            ";
                                            // line 348
                                            if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                                                // line 349
                                                echo "                                                                                                            <li><a href=\"";
                                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppChambre", array("id" => $this->getAttribute($this->getContext($context, "p"), "id"), "name" => $this->getAttribute($this->getContext($context, "p"), "repertoireen"), "redirect" => $this->getContext($context, "redirect"))), "html", null, true);
                                                echo "\">";
                                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("type.de.chambre.pour"), "html", null, true);
                                                echo "</a></li>                                                                                                
                                                                                                            ";
                                            }
                                            // line 351
                                            echo "                                                                                                        ";
                                        }
                                        // line 352
                                        echo "                                                                                                    ";
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
                                    // line 353
                                    echo "                                                                                            ";
                                    // line 354
                                    echo "                                                                                                    ";
                                    if (($this->getAttribute($this->getContext($context, "p"), "corporatif") == 1)) {
                                        // line 355
                                        echo "                                                                                                            <li class=\"nodeChild ";
                                        if (array_key_exists("mp", $context)) {
                                            echo twig_escape_filter($this->env, $this->getContext($context, "pointeurcorpo"), "html", null, true);
                                        }
                                        echo "\"><a href=\"";
                                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppCorporatif", array("id" => $this->getAttribute($this->getContext($context, "p"), "id"), "name" => $this->getAttribute($this->getContext($context, "p"), "repertoireen"), "redirect" => $this->getContext($context, "redirect"))), "html", null, true);
                                        echo "\">";
                                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("corporatif"), "html", null, true);
                                        echo "</a></li>
                                                                                                    ";
                                    }
                                    // line 357
                                    echo "                                                                                            </ul>
                                                                                    </li>
                                                                                ";
                                } elseif (($this->getAttribute($this->getContext($context, "loop"), "index") == 2)) {
                                    // line 360
                                    echo "                                                                                    <li id=\"hebergementmenuclient\" style=\"margin:0;\"> <a href=\"javascript:void(0);\" class=\"nodePricipal ";
                                    if (array_key_exists("pointerHeb", $context)) {
                                        echo " nodePrincipalCustomer ";
                                    }
                                    echo "\" style=\"padding:0 15px; cursor:default;\"> ";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("information.concernant.etablissement"), "html", null, true);
                                    echo " ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomen"), "html", null, true);
                                    echo "</a> 
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sousmenu\">
                                                                                                <li><a href=\"";
                                    // line 362
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppTextHebergement", array("id" => $this->getAttribute($this->getContext($context, "p"), "id"), "name" => $this->getAttribute($this->getContext($context, "p"), "repertoireen"))), "html", null, true);
                                    echo "\">";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 364
                                    echo "                                                                                                ";
                                    $context['_parent'] = (array) $context;
                                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "hebergementExiste"));
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
                                        // line 365
                                        echo "                                                                                                    ";
                                        if (($this->getAttribute($this->getAttribute($this->getContext($context, "p"), "acompteid"), "id") == 2)) {
                                            echo "  
                                                                                                        ";
                                            // line 366
                                            if (($this->getAttribute($this->getContext($context, "loop"), "index") == 2)) {
                                                // line 367
                                                echo "                                                                                                        <li><a href=\"";
                                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppChambre", array("id" => $this->getAttribute($this->getContext($context, "p"), "id"), "name" => $this->getAttribute($this->getContext($context, "p"), "repertoireen"), "redirect" => $this->getContext($context, "redirect"))), "html", null, true);
                                                echo "\">";
                                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("type.de.chambre.pour"), "html", null, true);
                                                echo "</a></li>                                                                                              
                                                                                                        ";
                                            }
                                            // line 369
                                            echo "                                                                                                    ";
                                        }
                                        // line 370
                                        echo "                                                                                                ";
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
                                    // line 371
                                    echo "                                                                                        ";
                                    // line 372
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                    if (($this->getAttribute($this->getContext($context, "p"), "corporatif") == 1)) {
                                        // line 373
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nodeChild ";
                                        if (array_key_exists("mp", $context)) {
                                            echo twig_escape_filter($this->env, $this->getContext($context, "pointeurcorpo"), "html", null, true);
                                        }
                                        echo "\"><a href=\"";
                                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppCorporatif", array("id" => $this->getAttribute($this->getContext($context, "p"), "id"), "name" => $this->getAttribute($this->getContext($context, "p"), "repertoireen"), "redirect" => $this->getContext($context, "redirect"))), "html", null, true);
                                        echo "\">";
                                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("corporatif"), "html", null, true);
                                        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 375
                                    echo "\t\t\t\t\t\t\t\t\t\t\t</ul>
                                                                                    </li>
                                                                                ";
                                }
                                // line 378
                                echo "                                                                            ";
                            }
                            // line 379
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
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 380
                        echo "\t\t\t\t\t\t\t\t";
                    }
                    // line 381
                    echo "\t\t\t\t\t\t\t";
                    // line 383
                    echo "                                                        ";
                    // line 391
                    echo "                                                                ";
                    // line 392
                    echo "                                                                ";
                    if ((array_key_exists("hebergementExiste", $context) && (!twig_test_empty($this->getContext($context, "hebergementExiste"))))) {
                        // line 393
                        echo "                                                                    ";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "hebergementExiste"));
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
                            // line 394
                            echo "                                                                        ";
                            if (($this->getAttribute($this->getAttribute($this->getContext($context, "p"), "acompteid"), "id") == 2)) {
                                echo "  
                                                                            ";
                                // line 395
                                if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                                    // line 396
                                    echo "                                                                            <li style=\"margin:0;\"> <a href=\"javascript:void(0);\" class=\"nodePricipal deletecursor ";
                                    if (array_key_exists("pointerforfait", $context)) {
                                        echo " nodePrincipalCustomer ";
                                    }
                                    echo "\" style=\"padding:0 15px;\"> ";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forfait"), "html", null, true);
                                    echo " </a> 
                                                                            ";
                                }
                                // line 398
                                echo "                                                                                <ul>
                                                                                    ";
                                // line 399
                                $context['_parent'] = (array) $context;
                                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "hebergementExiste"));
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
                                    // line 400
                                    echo "                                                                                        ";
                                    if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                                        // line 401
                                        echo "                                                                                          <li style=\"margin:0;\"> <a href=\"";
                                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyAppForfait", array("id" => $this->getAttribute($this->getContext($context, "w"), "id"), "name" => $this->getAttribute($this->getContext($context, "w"), "repertoireen"), "redirect" => $this->getContext($context, "redirect"))), "html", null, true);
                                        echo "\"> ";
                                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forfait"), "html", null, true);
                                        echo "</a> </li>
                                                                                        ";
                                    }
                                    // line 403
                                    echo "                                                                                    ";
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
                                // line 404
                                echo "                                                                                </ul>
                                                                            </li>
                                                                        ";
                            }
                            // line 407
                            echo "                                                                    ";
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
                        // line 408
                        echo "                                                                ";
                    }
                    echo "\t\t\t\t\t\t\t
                                                                ";
                    // line 410
                    echo "\t\t\t\t\t\t";
                }
                // line 411
                echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<script>
\t\t\t\t\t\t\$(\"ul.sousmenu\").css({\"margin-left\":\"50px\"});
\t\t\t\t\t\t</script>
\t\t\t\t\t</div>\t
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t";
                // line 418
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listOption"));
                foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                    // line 419
                    echo "\t\t\t\t\t\t\t\t<ul class=\"sousmenu compt_customer\">
\t\t\t\t\t\t\t\t\t";
                    // line 420
                    if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                        // line 421
                        echo "\t\t\t\t\t\t\t\t\t<li><a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_compteCustomer", array("id" => $this->getAttribute($this->getContext($context, "p"), "id"), "redirect" => $this->getContext($context, "redirect"))), "html", null, true);
                        echo "\" class=\"nodeChild ";
                        if (array_key_exists("infouser", $context)) {
                            echo twig_escape_filter($this->env, $this->getContext($context, "pointeur"), "html", null, true);
                        }
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("return.home"), "html", null, true);
                        echo "</a></li>
                                                                        <li><a class=\"guideClient\" href=\"";
                        // line 422
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/documentation_client/guide-gestion-fiche-client-FR.pdf"), "html", null, true);
                        echo "\" target=\"_blank\">Guide gestion fiche client</a></li>
                                                                        <li><a href=\"";
                        // line 423
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_langue_admin_client", array("langue" => "en", "id" => $this->getAttribute($this->getContext($context, "p"), "id"))), "html", null, true);
                        echo "\" class=\"nodeChild ";
                        if (array_key_exists("infouser", $context)) {
                            echo twig_escape_filter($this->env, $this->getContext($context, "pointeur"), "html", null, true);
                        }
                        echo "\" style=\"float:right; margin:15px 25px 0 0;\"><img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappadmin/images/EN.png"), "html", null, true);
                        echo "\" title=\"Translate\" class=\"transaction\"></a></li>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 425
                        echo "\t\t\t\t\t\t\t\t\t<li><a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_compteCustomer", array("id" => $this->getAttribute($this->getContext($context, "p"), "id"), "redirect" => $this->getContext($context, "redirect"))), "html", null, true);
                        echo "\" class=\"nodeChild ";
                        if (array_key_exists("infouser", $context)) {
                            echo twig_escape_filter($this->env, $this->getContext($context, "pointeur"), "html", null, true);
                        }
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("return.home"), "html", null, true);
                        echo "</a></li>
                                                                        <li><a class=\"guideClient\" href=\"";
                        // line 426
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/documentation_client/guide-gestion-fiche-client-EN.pdf"), "html", null, true);
                        echo "\" target=\"_blank\">Customer record management guide</a></li>
                                                                        <li><a href=\"";
                        // line 427
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_langue_admin_client", array("langue" => "fr", "id" => $this->getAttribute($this->getContext($context, "p"), "id"))), "html", null, true);
                        echo "\" class=\"nodeChild ";
                        if (array_key_exists("infouser", $context)) {
                            echo twig_escape_filter($this->env, $this->getContext($context, "pointeur"), "html", null, true);
                        }
                        echo "\" style=\"float:right; margin:15px 25px 0 0;\"><img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappadmin/images/FR.png"), "html", null, true);
                        echo "\" title=\"Traduire\" class=\"transaction\"></a></li>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 429
                    echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 431
                echo "\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t";
            }
            // line 434
            echo "\t\t\t    </div>
\t\t\t    ";
        }
        // line 436
        echo "\t\t\t    <div id=\"coldroit\">
\t\t\t\t";
        // line 437
        $this->displayBlock('content', $context, $blocks);
        // line 440
        echo "\t\t\t\t</div>
\t\t\t\t<br class=\"clearfloat\" />
\t\t\t\t<div id=\"pieddepage\">
\t\t\t\t    <p>&copy; ";
        // line 443
        echo twig_escape_filter($this->env, $this->getContext($context, "annee"), "html", null, true);
        echo " Global Réservation inc.</p>\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
    </body>
</html>";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "    \t \t<link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/favicon.ico"), "html", null, true);
        echo "\" />
    \t \t<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappadmin/css/gestion.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    \t \t<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappadmin/css/jquery-ui.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    \t \t<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/js/jquery-te-1.4.0.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
    \t ";
    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        echo " 
    \t \t<script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/js/jquery.js"), "html", null, true);
        echo "\" ></script>
    \t \t<script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappadmin/js/custom.js"), "html", null, true);
        echo "\" ></script>\t
    \t \t<script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappadmin/js/jquery-ui-1.9.1.custom.js"), "html", null, true);
        echo "\"></script>
    \t \t<script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/js/jquery-te-1.4.0.min.js"), "html", null, true);
        echo "\"></script>
    \t \t<script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappadmin/js/ckeditor.js"), "html", null, true);
        echo "\"></script>
    \t \t<script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappadmin/js/jquery.Jcrop.js"), "html", null, true);
        echo "\"></script>
    \t \t<script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappadmin/js/jquery-upload.js"), "html", null, true);
        echo "\"></script>
    \t \t<script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappadmin/js/jquery.validate.js"), "html", null, true);
        echo "\"></script>
    \t \t<script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script>
    \t <!--[if IE]>
    \t <script>
  \t\t\t/*! HTML5 Shiv pre3.5 | @afarkas @jdalton @jon_neal @rem | MIT/GPL2 Licensed 
    \t\tUncompressed source: https://github.com/aFarkas/html5shiv */
\t\t\t(function(a,b){function h(a,b){var c=a.createElement(\"p\"),d=a.getElementsByTagName(\"head\")[0]||a.documentElement;return c.innerHTML=\"x<style>\"+b+\"</style>\",d.insertBefore(c.lastChild,d.firstChild)}function i(){var a=l.elements;return typeof a==\"string\"?a.split(\" \"):a}function j(a){var b={},c=a.createElement,f=a.createDocumentFragment,g=f();a.createElement=function(a){l.shivMethods||c(a);var f;return b[a]?f=b[a].cloneNode():e.test(a)?f=(b[a]=c(a)).cloneNode():f=c(a),f.canHaveChildren&&!d.test(a)?g.appendChild(f):f},a.createDocumentFragment=Function(\"h,f\",\"return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&(\"+i().join().replace(/\\w+/g,function(a){return b[a]=c(a),g.createElement(a),'c(\"'+a+'\")'})+\");return n}\")(l,g)}function k(a){var b;return a.documentShived?a:(l.shivCSS&&!f&&(b=!!h(a,\"article,aside,details,figcaption,figure,footer,header,hgroup,nav,section{display:block}audio{display:none}canvas,video{display:inline-block;*display:inline;*zoom:1}[hidden]{display:none}audio[controls]{display:inline-block;*display:inline;*zoom:1}mark{background:#FF0;color:#000}\")),g||(b=!j(a)),b&&(a.documentShived=b),a)}function p(a){var b,c=a.getElementsByTagName(\"*\"),d=c.length,e=RegExp(\"^(?:\"+i().join(\"|\")+\")\$\",\"i\"),f=[];while(d--)b=c[d],e.test(b.nodeName)&&f.push(b.applyElement(q(b)));return f}function q(a){var b,c=a.attributes,d=c.length,e=a.ownerDocument.createElement(n+\":\"+a.nodeName);while(d--)b=c[d],b.specified&&e.setAttribute(b.nodeName,b.nodeValue);return e.style.cssText=a.style.cssText,e}function r(a){var b,c=a.split(\"{\"),d=c.length,e=RegExp(\"(^|[\\\\s,>+~])(\"+i().join(\"|\")+\")(?=[[\\\\s,>+~#.:]|\$)\",\"gi\"),f=\"\$1\"+n+\"\\\\:\$2\";while(d--)b=c[d]=c[d].split(\"}\"),b[b.length-1]=b[b.length-1].replace(e,f),c[d]=b.join(\"}\");return c.join(\"{\")}function s(a){var b=a.length;while(b--)a[b].removeNode()}function t(a){var b,c,d=a.namespaces,e=a.parentWindow;return!o||a.printShived?a:(typeof d[n]==\"undefined\"&&d.add(n),e.attachEvent(\"onbeforeprint\",function(){var d,e,f,g=a.styleSheets,i=[],j=g.length,k=Array(j);while(j--)k[j]=g[j];while(f=k.pop())if(!f.disabled&&m.test(f.media)){for(d=f.imports,j=0,e=d.length;j<e;j++)k.push(d[j]);try{i.push(f.cssText)}catch(l){}}i=r(i.reverse().join(\"\")),c=p(a),b=h(a,i)}),e.attachEvent(\"onafterprint\",function(){s(c),b.removeNode(!0)}),a.printShived=!0,a)}var c=a.html5||{},d=/^<|^(?:button|form|map|select|textarea|object|iframe)\$/i,e=/^<|^(?:a|b|button|code|div|fieldset|form|h1|h2|h3|h4|h5|h6|i|iframe|img|input|label|li|link|ol|option|p|param|q|script|select|span|strong|style|table|tbody|td|textarea|tfoot|th|thead|tr|ul)\$/i,f,g;(function(){var c=b.createElement(\"a\");c.innerHTML=\"<xyz></xyz>\",f=\"hidden\"in c,f&&typeof injectElementWithStyles==\"function\"&&injectElementWithStyles(\"#modernizr{}\",function(b){b.hidden=!0,f=(a.getComputedStyle?getComputedStyle(b,null):b.currentStyle).display==\"none\"}),g=c.childNodes.length==1||function(){try{b.createElement(\"a\")}catch(a){return!0}var c=b.createDocumentFragment();return typeof c.cloneNode==\"undefined\"||typeof c.createDocumentFragment==\"undefined\"||typeof c.createElement==\"undefined\"}()})();var l={elements:c.elements||\"abbr article aside audio bdi canvas data datalist details figcaption figure footer header hgroup mark meter nav output progress section summary time video\",shivCSS:c.shivCSS!==!1,shivMethods:c.shivMethods!==!1,type:\"default\",shivDocument:k};a.html5=l,k(b);var m=/^\$|\\b(?:all|print)\\b/,n=\"html5shiv\",o=!g&&function(){var c=b.documentElement;return typeof b.namespaces!=\"undefined\"&&typeof b.parentWindow!=\"undefined\"&&typeof c.applyElement!=\"undefined\"&&typeof c.removeNode!=\"undefined\"&&typeof a.attachEvent!=\"undefined\"}();l.type+=\" print\",l.shivPrint=t,t(b)})(this,document)
\t\t </script>
\t\t   <![endif]-->\t
    \t ";
    }

    // line 66
    public function block_menu($context, array $blocks = array())
    {
        // line 67
        echo "\t\t\t\t    \t<div class=\"menuprincipal\">
\t\t\t\t\t\t\t<ul id=\"menu\">
\t\t\t\t\t\t\t";
        // line 69
        if (array_key_exists("menu_general_actif", $context)) {
            // line 70
            echo "\t\t\t\t\t\t\t\t<li class=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "menu"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t";
        } else {
            // line 72
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t";
        }
        // line 74
        echo "\t\t\t\t\t\t\t\t\t<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_general"), "html", null, true);
        echo "\" class=\"nodePricipal\">+ Général</a>
\t\t\t\t\t\t\t\t\t<ul class=\"sousmenu\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_pays"), "html", null, true);
        echo "\" class=\"nodeChild ";
        if (array_key_exists("mp", $context)) {
            echo twig_escape_filter($this->env, $this->getContext($context, "pointeur"), "html", null, true);
        }
        echo "\">Pays</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_provinces"), "html", null, true);
        echo "\" class=\"nodeChild ";
        if (array_key_exists("mpe", $context)) {
            echo twig_escape_filter($this->env, $this->getContext($context, "pointeur"), "html", null, true);
        }
        echo "\">Provinces / états</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_regions"), "html", null, true);
        echo "\" class=\"nodeChild ";
        if (array_key_exists("mpr", $context)) {
            echo twig_escape_filter($this->env, $this->getContext($context, "pointeur"), "html", null, true);
        }
        echo "\">Régions touristiques</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_zones"), "html", null, true);
        echo "\" class=\"nodeChild ";
        if (array_key_exists("mz", $context)) {
            echo twig_escape_filter($this->env, $this->getContext($context, "pointeur"), "html", null, true);
        }
        echo "\">Zones</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_villes"), "html", null, true);
        echo "\" class=\"nodeChild ";
        if (array_key_exists("mv", $context)) {
            echo twig_escape_filter($this->env, $this->getContext($context, "pointeur"), "html", null, true);
        }
        echo "\">Villes</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_modes_paiements"), "html", null, true);
        echo "\" class=\"nodeChild ";
        if (array_key_exists("mpa", $context)) {
            echo twig_escape_filter($this->env, $this->getContext($context, "pointeur"), "html", null, true);
        }
        echo "\">Modes de paiements</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_devises"), "html", null, true);
        echo "\" class=\"nodeChild ";
        if (array_key_exists("md", $context)) {
            echo twig_escape_filter($this->env, $this->getContext($context, "pointeur"), "html", null, true);
        }
        echo "\">Devises</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_acompte"), "html", null, true);
        echo "\" class=\"nodeChild ";
        if (array_key_exists("ma", $context)) {
            echo twig_escape_filter($this->env, $this->getContext($context, "pointeur"), "html", null, true);
        }
        echo "\">Acomptes</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_forfaits"), "html", null, true);
        echo "\" class=\"nodeChild ";
        if (array_key_exists("mf", $context)) {
            echo twig_escape_filter($this->env, $this->getContext($context, "pointeur"), "html", null, true);
        }
        echo "\">Forfaits</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_cotations"), "html", null, true);
        echo "\" class=\"nodeChild ";
        if (array_key_exists("mco", $context)) {
            echo twig_escape_filter($this->env, $this->getContext($context, "pointeur"), "html", null, true);
        }
        echo "\">Cotations</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_classifications"), "html", null, true);
        echo "\" class=\"nodeChild ";
        if (array_key_exists("mcla", $context)) {
            echo twig_escape_filter($this->env, $this->getContext($context, "pointeur"), "html", null, true);
        }
        echo "\">Classifications</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_clients"), "html", null, true);
        echo "\" class=\"nodeChild ";
        if (array_key_exists("mcl", $context)) {
            echo twig_escape_filter($this->env, $this->getContext($context, "pointeur"), "html", null, true);
        }
        echo "\">Clients</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_gestionTexteAccueil"), "html", null, true);
        echo "\" class=\"nodeChild ";
        if (array_key_exists("mtx", $context)) {
            echo twig_escape_filter($this->env, $this->getContext($context, "pointeur"), "html", null, true);
        }
        echo "\">Gestion des textes d'accueil</a></li>
                                                                           
                                                                        </ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        // line 92
        if (array_key_exists("menu_hebergement_actif", $context)) {
            // line 93
            echo "\t\t\t\t\t\t\t\t<li class=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "menu"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t";
        } else {
            // line 95
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t";
        }
        // line 97
        echo "\t\t\t\t\t\t\t\t\t<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_hebergements"), "html", null, true);
        echo "\" class=\"nodePricipal\">+ Hébergements</a>
\t\t\t\t\t\t\t\t\t<ul class=\"sousmenu\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_hebergement"), "html", null, true);
        echo "\" class=\"nodeChild ";
        if (array_key_exists("heb", $context)) {
            echo twig_escape_filter($this->env, $this->getContext($context, "pointeur"), "html", null, true);
        }
        echo "\">Hébergements</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_categoriehebergement"), "html", null, true);
        echo "\" class=\"nodeChild ";
        if (array_key_exists("catheb", $context)) {
            echo twig_escape_filter($this->env, $this->getContext($context, "pointeur"), "html", null, true);
        }
        echo "\">Catégories</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_activiteshebergement"), "html", null, true);
        echo "\" class=\"nodeChild ";
        if (array_key_exists("actheb", $context)) {
            echo twig_escape_filter($this->env, $this->getContext($context, "pointeur"), "html", null, true);
        }
        echo "\">Activités</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_serviceshebergement"), "html", null, true);
        echo "\" class=\"nodeChild ";
        if (array_key_exists("serheb", $context)) {
            echo twig_escape_filter($this->env, $this->getContext($context, "pointeur"), "html", null, true);
        }
        echo "\">Services</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_styleshebergement"), "html", null, true);
        echo "\" class=\"nodeChild ";
        if (array_key_exists("styheb", $context)) {
            echo twig_escape_filter($this->env, $this->getContext($context, "pointeur"), "html", null, true);
        }
        echo "\">Styles</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_typechambreshebergement"), "html", null, true);
        echo "\" class=\"nodeChild ";
        if (array_key_exists("chamheb", $context)) {
            echo twig_escape_filter($this->env, $this->getContext($context, "pointeur"), "html", null, true);
        }
        echo "\">Types de chambres</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"soussoumenu\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_chambreshebergement"), "html", null, true);
        echo "\" class=\"nodeChild ";
        if ((array_key_exists("chamheb", $context) && array_key_exists("chamhebUnder", $context))) {
            echo twig_escape_filter($this->env, $this->getContext($context, "pointeur"), "html", null, true);
        }
        echo "\">Chambres</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_litshebergement"), "html", null, true);
        echo "\" class=\"nodeChild ";
        if ((array_key_exists("chamheb", $context) && array_key_exists("chamLitUnder", $context))) {
            echo twig_escape_filter($this->env, $this->getContext($context, "pointeur"), "html", null, true);
        }
        echo "\">Lits</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_occupationshebergement"), "html", null, true);
        echo "\" class=\"nodeChild ";
        if (array_key_exists("occuheb", $context)) {
            echo twig_escape_filter($this->env, $this->getContext($context, "pointeur"), "html", null, true);
        }
        echo "\">Types d'occupations</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_equipementshebergement"), "html", null, true);
        echo "\" class=\"nodeChild ";
        if (array_key_exists("equiheb", $context)) {
            echo twig_escape_filter($this->env, $this->getContext($context, "pointeur"), "html", null, true);
        }
        echo "\">Équipements</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_affiliationshebergement"), "html", null, true);
        echo "\" class=\"nodeChild ";
        if (array_key_exists("affiheb", $context)) {
            echo twig_escape_filter($this->env, $this->getContext($context, "pointeur"), "html", null, true);
        }
        echo "\">Affiliations</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_servicecorporatifhebergement"), "html", null, true);
        echo "\" class=\"nodeChild ";
        if (array_key_exists("corpheb", $context)) {
            echo twig_escape_filter($this->env, $this->getContext($context, "pointeur"), "html", null, true);
        }
        echo "\">Services corporatifs</a></li>
\t\t\t\t\t\t\t\t\t\t";
        // line 115
        echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_evenementscoporatifshebergement"), "html", null, true);
        echo "\" class=\"nodeChild ";
        if (array_key_exists("evenheb", $context)) {
            echo twig_escape_filter($this->env, $this->getContext($context, "pointeur"), "html", null, true);
        }
        echo "\">Événements corporatifs</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        // line 118
        if (array_key_exists("menu_attrait_actif", $context)) {
            // line 119
            echo "\t\t\t\t\t\t\t\t<li class=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "menu"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t";
        } else {
            // line 121
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t";
        }
        // line 123
        echo "\t\t\t\t\t\t\t\t\t<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_attraits"), "html", null, true);
        echo "\" class=\"nodePricipal\">+ Attraits</a>
\t\t\t\t\t\t\t\t\t<ul class=\"sousmenu\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_attrait"), "html", null, true);
        echo "\" class=\"nodeChild ";
        if (array_key_exists("addatt", $context)) {
            echo twig_escape_filter($this->env, $this->getContext($context, "pointeur"), "html", null, true);
        }
        echo "\">Attraits</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_attraitcategories"), "html", null, true);
        echo "\" class=\"nodeChild ";
        if (array_key_exists("cat", $context)) {
            echo twig_escape_filter($this->env, $this->getContext($context, "pointeur"), "html", null, true);
        }
        echo "\">Catégories attraits</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_attraitsouscategorie"), "html", null, true);
        echo "\" class=\"nodeChild ";
        if (array_key_exists("soucat", $context)) {
            echo twig_escape_filter($this->env, $this->getContext($context, "pointeur"), "html", null, true);
        }
        echo "\">Sous catégories</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_attraittypesoins"), "html", null, true);
        echo "\" class=\"nodeChild ";
        if (array_key_exists("typesoinat", $context)) {
            echo twig_escape_filter($this->env, $this->getContext($context, "pointeur"), "html", null, true);
        }
        echo "\">Types soins santé</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_attraitsoins"), "html", null, true);
        echo "\" class=\"nodeChild ";
        if (array_key_exists("soinat", $context)) {
            echo twig_escape_filter($this->env, $this->getContext($context, "pointeur"), "html", null, true);
        }
        echo "\">Soins santé</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_attraitactivites"), "html", null, true);
        echo "\" class=\"nodeChild ";
        if (array_key_exists("actat", $context)) {
            echo twig_escape_filter($this->env, $this->getContext($context, "pointeur"), "html", null, true);
        }
        echo "\">Activités</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_attraitservices", array("page" => 1)), "html", null, true);
        echo "\" class=\"nodeChild ";
        if (array_key_exists("serat", $context)) {
            echo twig_escape_filter($this->env, $this->getContext($context, "pointeur"), "html", null, true);
        }
        echo "\">Services</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_attraitcusines"), "html", null, true);
        echo "\" class=\"nodeChild ";
        if (array_key_exists("cuisiat", $context)) {
            echo twig_escape_filter($this->env, $this->getContext($context, "pointeur"), "html", null, true);
        }
        echo "\">Cuisines</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        // line 135
        if (array_key_exists("menu_quebec_actif", $context)) {
            // line 136
            echo "\t\t\t\t\t\t\t\t<li class=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "menu"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t";
        } else {
            // line 138
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t";
        }
        // line 140
        echo "\t\t\t\t\t\t\t\t\t<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_quebec_saison"), "html", null, true);
        echo "\" class=\"nodePricipal\">+ Québec en saison</a>
\t\t\t\t\t\t\t\t\t<ul class=\"sousmenu\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_typessaison"), "html", null, true);
        echo "\" class=\"nodeChild\">Types de saison</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_typespagessaisons"), "html", null, true);
        echo "\" class=\"nodeChild\">Types de pages de saisons</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_pagesstatiques"), "html", null, true);
        echo "\" class=\"nodeChild\">Pages statiques</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_saisons"), "html", null, true);
        echo "\" class=\"nodeChild\">Saisons</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_previewfrench"), "html", null, true);
        echo "\" class=\"nodeChild\">Aperçu en français</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_previewenglish"), "html", null, true);
        echo "\" class=\"nodeChild\">Aperçu en anglais</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        // line 150
        if (array_key_exists("menu_statistique_actif", $context)) {
            // line 151
            echo "\t\t\t\t\t\t\t\t<li class=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "menu"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t";
        } else {
            // line 153
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t";
        }
        // line 155
        echo "\t\t\t\t\t\t\t\t\t<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_statistiques"), "html", null, true);
        echo "\" class=\"nodePricipal\">+ Statistiques</a>
\t\t\t\t\t\t\t\t\t<ul class=\"sousmenu\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_statistiquesclients"), "html", null, true);
        echo "\" class=\"nodeChild ";
        if (array_key_exists("statcust", $context)) {
            echo twig_escape_filter($this->env, $this->getContext($context, "pointeur"), "html", null, true);
        }
        echo "\">Statistiques Clients</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_statistiquesmois"), "html", null, true);
        echo "\" class=\"nodeChild ";
        if (array_key_exists("statmois", $context)) {
            echo twig_escape_filter($this->env, $this->getContext($context, "pointeur"), "html", null, true);
        }
        echo "\">Statistiques pour le mois</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_statistiquesannee"), "html", null, true);
        echo "\" class=\"nodeChild ";
        if (array_key_exists("statann", $context)) {
            echo twig_escape_filter($this->env, $this->getContext($context, "pointeur"), "html", null, true);
        }
        echo "\">Statistiques pour l'année</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_archivesstatistiques"), "html", null, true);
        echo "\" class=\"nodeChild ";
        if (array_key_exists("statarch", $context)) {
            echo twig_escape_filter($this->env, $this->getContext($context, "pointeur"), "html", null, true);
        }
        echo "\">Statistiques archives</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        // line 163
        if (array_key_exists("menu_info_actif", $context)) {
            // line 164
            echo "\t\t\t\t\t\t\t\t<li class=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "menu"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t";
        } else {
            // line 166
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t";
        }
        // line 168
        echo "\t\t\t\t\t\t\t\t\t<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_informations"), "html", null, true);
        echo "\" class=\"nodePricipal\">+ Informations diverses</a>
\t\t\t\t\t\t\t\t\t<ul class=\"sousmenu\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_utilisateursSysteme"), "html", null, true);
        echo "\" class=\"nodeChild ";
        if (array_key_exists("infouser", $context)) {
            echo twig_escape_filter($this->env, $this->getContext($context, "pointeur"), "html", null, true);
        }
        echo "\">Liste des utilisateurs du système</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_Dashboard_clientSysteme"), "html", null, true);
        echo "\" class=\"nodeChild ";
        if (array_key_exists("infoclient", $context)) {
            echo twig_escape_filter($this->env, $this->getContext($context, "pointeur"), "html", null, true);
        }
        echo "\">Liste des clients du système</a></li>
\t\t\t\t\t\t\t\t\t\t";
        // line 173
        echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"todo.global-reservation.com\" target=\"_blank\" class=\"nodePricipal\">+ Todo list</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t    ";
    }

    // line 437
    public function block_content($context, array $blocks = array())
    {
        // line 438
        echo "
\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "::base1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1902 => 438,  1899 => 437,  1890 => 173,  1882 => 171,  1874 => 170,  1868 => 168,  1864 => 166,  1858 => 164,  1856 => 163,  1846 => 160,  1838 => 159,  1830 => 158,  1822 => 157,  1816 => 155,  1812 => 153,  1806 => 151,  1804 => 150,  1798 => 147,  1794 => 146,  1790 => 145,  1786 => 144,  1782 => 143,  1778 => 142,  1772 => 140,  1768 => 138,  1762 => 136,  1760 => 135,  1750 => 132,  1742 => 131,  1734 => 130,  1726 => 129,  1718 => 128,  1710 => 127,  1702 => 126,  1694 => 125,  1688 => 123,  1684 => 121,  1678 => 119,  1676 => 118,  1665 => 115,  1657 => 113,  1649 => 112,  1641 => 111,  1633 => 110,  1623 => 107,  1615 => 106,  1606 => 104,  1598 => 103,  1590 => 102,  1582 => 101,  1574 => 100,  1566 => 99,  1560 => 97,  1556 => 95,  1550 => 93,  1548 => 92,  1537 => 88,  1529 => 87,  1521 => 86,  1513 => 85,  1505 => 84,  1497 => 83,  1489 => 82,  1481 => 81,  1473 => 80,  1465 => 79,  1457 => 78,  1449 => 77,  1441 => 76,  1435 => 74,  1431 => 72,  1425 => 70,  1423 => 69,  1419 => 67,  1416 => 66,  1402 => 23,  1398 => 22,  1394 => 21,  1390 => 20,  1386 => 19,  1382 => 18,  1378 => 17,  1374 => 16,  1369 => 15,  1363 => 13,  1359 => 12,  1355 => 11,  1350 => 10,  1347 => 9,  1337 => 443,  1332 => 440,  1330 => 437,  1327 => 436,  1323 => 434,  1318 => 431,  1311 => 429,  1300 => 427,  1296 => 426,  1285 => 425,  1274 => 423,  1270 => 422,  1259 => 421,  1257 => 420,  1254 => 419,  1250 => 418,  1241 => 411,  1238 => 410,  1233 => 408,  1219 => 407,  1214 => 404,  1200 => 403,  1192 => 401,  1189 => 400,  1172 => 399,  1169 => 398,  1159 => 396,  1157 => 395,  1152 => 394,  1134 => 393,  1131 => 392,  1129 => 391,  1127 => 383,  1125 => 381,  1122 => 380,  1108 => 379,  1105 => 378,  1100 => 375,  1088 => 373,  1085 => 372,  1083 => 371,  1069 => 370,  1066 => 369,  1058 => 367,  1056 => 366,  1051 => 365,  1033 => 364,  1027 => 362,  1015 => 360,  1010 => 357,  998 => 355,  995 => 354,  993 => 353,  979 => 352,  976 => 351,  968 => 349,  966 => 348,  961 => 347,  943 => 346,  937 => 344,  925 => 342,  922 => 341,  919 => 340,  914 => 337,  902 => 335,  899 => 334,  897 => 333,  883 => 332,  880 => 331,  872 => 329,  870 => 328,  866 => 327,  846 => 326,  840 => 324,  828 => 322,  823 => 319,  811 => 317,  808 => 316,  806 => 315,  792 => 314,  789 => 313,  781 => 311,  779 => 310,  775 => 309,  755 => 308,  749 => 306,  737 => 304,  734 => 303,  731 => 302,  713 => 301,  711 => 300,  708 => 299,  704 => 298,  702 => 297,  699 => 296,  685 => 295,  680 => 292,  666 => 291,  658 => 289,  655 => 288,  638 => 287,  635 => 286,  625 => 284,  623 => 283,  618 => 282,  600 => 281,  597 => 280,  595 => 279,  593 => 271,  591 => 269,  588 => 268,  574 => 267,  571 => 266,  566 => 263,  554 => 261,  551 => 260,  549 => 259,  535 => 258,  532 => 257,  524 => 255,  522 => 254,  517 => 253,  499 => 252,  493 => 250,  481 => 248,  476 => 245,  464 => 243,  461 => 242,  459 => 241,  445 => 240,  442 => 239,  434 => 237,  432 => 236,  427 => 235,  409 => 234,  403 => 232,  391 => 230,  388 => 229,  385 => 228,  380 => 225,  368 => 223,  365 => 222,  363 => 221,  349 => 220,  346 => 219,  338 => 217,  335 => 216,  333 => 215,  313 => 214,  307 => 212,  295 => 210,  290 => 207,  278 => 205,  275 => 204,  273 => 203,  259 => 202,  256 => 201,  248 => 199,  246 => 198,  242 => 197,  222 => 196,  216 => 194,  204 => 192,  201 => 191,  199 => 190,  179 => 189,  177 => 188,  174 => 187,  172 => 186,  168 => 184,  165 => 183,  163 => 182,  160 => 181,  155 => 179,  152 => 66,  150 => 65,  147 => 64,  145 => 63,  141 => 61,  117 => 59,  114 => 58,  103 => 56,  97 => 54,  94 => 53,  88 => 51,  82 => 49,  79 => 48,  76 => 47,  71 => 46,  69 => 45,  62 => 44,  60 => 43,  56 => 42,  50 => 38,  43 => 32,  40 => 15,  38 => 9,  35 => 8,  21 => 1,  29 => 7,  26 => 2,);
    }
}

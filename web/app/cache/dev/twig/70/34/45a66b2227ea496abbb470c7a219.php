<?php

/* ::base2.html.twig */
class __TwigTemplate_703445a66b2227ea496abbb470c7a219 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'picture' => array($this, 'block_picture'),
            'texte_accueil' => array($this, 'block_texte_accueil'),
            'body' => array($this, 'block_body'),
            'gauche' => array($this, 'block_gauche'),
            'critere' => array($this, 'block_critere'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale"), "html", null, true);
        echo "\">
\t <head>
         <meta name=\"viewport\" content=\"initial-scale=1.0, user-scalable=no\">
         <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />  
         <meta name=\"robots\" content=\"index, follow\" />
         <meta content=\"ca\" name=\"COUNTRY\">
         <meta http-equiv=\"content-language\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale"), "html", null, true);
        echo "\" />
         ";
        // line 9
        $this->env->loadTemplate("::metas.html.twig")->display($context);
        // line 10
        echo "    \t <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/favicon.ico"), "html", null, true);
        echo "\" />
    \t ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "         ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </head>
    ";
        // line 14
        if (array_key_exists("menuDirectionRoutiere", $context)) {
            // line 15
            echo "    <body class=\"yui-skin-sam\" onload=\"initialize()\">
    ";
        } else {
            // line 17
            echo "    <body class=\"yui-skin-sam\">
    ";
        }
        // line 19
        echo "\t<div id=\"global\">
\t<div id=\"reservationexterne\">
\t\t";
        // line 21
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
            // line 22
            echo "\t\t\t<a href=\"http://www.quebecensaisons.com/\" rel=\"nofollow\" target=\"_blank\" title=\"Québec en Saisons  ";
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/quebecEnSaison.jpg"), "html", null, true);
            echo "\" alt=\"Québec en saison ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "saison"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                echo " ";
                if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "s"), "html", null, true);
                    echo " ";
                }
                echo " ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            echo " \" class=\"imgquebecensaison\" /></a>
\t\t";
        } else {
            // line 24
            echo "\t\t\t<a href=\"http://www.quebecensaisons.com/index-en.php\" rel=\"nofollow\" target=\"_blank\" title=\"Quebec Seasons ";
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/quebecEnSaison_en.jpg"), "html", null, true);
            echo "\" alt=\"Quebec season ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "saison"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                echo " ";
                if (($this->getAttribute($this->getContext($context, "loop"), "index") == 2)) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "s"), "html", null, true);
                    echo " ";
                }
                echo " ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            echo "\" class=\"imgquebecensaison\" /></a>
\t\t";
        }
        // line 26
        echo "\t\t<div class=\"partage\">
\t\t";
        // line 27
        $this->env->loadTemplate("::reservation_en_ligne.html.twig")->display($context);
        // line 28
        echo "\t\t</div>
\t</div>
\t\t<div id=\"container\">
\t\t\t<div id=\"slidercontent\">\t\t
\t\t\t\t<div id=\"entete\">
\t\t\t\t\t<a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_accueil"), "html", null, true);
        echo "\" ><img id=\"logoblanc\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/logo_blanc.jpg"), "html", null, true);
        echo "\" class=\"logoblanc\" alt=\"Logo Global Réservation\"/></a>
\t\t\t\t\t<div>
                                        <a ";
        // line 35
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
            echo " href=\"http://reservation.global-reservation.com/jreservit/welcomeXml.do?langcode=FR\" ";
        } else {
            echo " href=\"http://reservation.global-reservation.com/jreservit/welcomeXml.do?langcode=EN\" ";
        }
        echo " title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("version.mobile"), "html", null, true);
        echo "\" rel=\"nofollow\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("version.mobile"), "html", null, true);
        echo "</a> |
\t\t\t\t\t";
        // line 36
        echo " <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login"), "html", null, true);
        echo "\" rel=\"nofollow\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("connexion"), "html", null, true);
        echo "</a> | <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_contact"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("contactez.nous"), "html", null, true);
        echo "</a> | <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_faq"), "html", null, true);
        echo "\">FAQ</a> | <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_quisommesnous"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("qui.sommes.nous"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("qui.sommes.nous"), "html", null, true);
        echo "</a> | 
\t\t\t\t\t";
        // line 37
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
            // line 38
            echo "                                            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_transaction_langue_global", array("langue" => "en")), "html", null, true);
            echo "\"> <img class=\"drapeau_traduction\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/flag_en.png"), "html", null, true);
            echo "\" title=\"English version\" alt=\"version anglaise\" /></a> 
\t\t\t\t\t";
        } else {
            // line 40
            echo "                                            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_transaction_langue_global", array("langue" => "fr")), "html", null, true);
            echo "\"> <img class=\"drapeau_traduction\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/flag_fr.png"), "html", null, true);
            echo "\" title=\"Version française\" alt=\"version française\" /></a>
\t\t\t\t\t";
        }
        // line 42
        echo "                                                
\t\t\t\t\t</div>
\t\t\t\t\t    ";
        // line 45
        echo "\t\t\t\t\t\t";
        // line 46
        echo "\t\t\t\t\t\t";
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
            // line 47
            echo "                                                        <p class=\"legendeAccueil\">Site de réservations d'hôtels, de chalets et autres établissements d'hébergement</p>
\t\t\t\t\t   \t\t<img src=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/telephone.png"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("reservez.par.telephone"), "html", null, true);
            echo "\" width=\"578\" height=\"21\" class=\"imgreservation\"/>   
                                                ";
        } else {
            // line 50
            echo "                                                        <p class=\"legendeAccueilen\">Reservations web site for hotels, cottages and others accommodations</p>
\t\t\t\t\t   \t\t<img src=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/telephoneversionen.png"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("reservez.par.telephone"), "html", null, true);
            echo "\" width=\"578\" height=\"21\" class=\"imgreservation\"/>
                                                ";
        }
        // line 52
        echo " 
                                               
                                </div>
                                ";
        // line 55
        echo "\t
\t\t\t\t";
        // line 56
        $this->env->loadTemplate("::menu.html.twig")->display($context);
        // line 57
        echo "\t\t\t</div>
\t\t\t   ";
        // line 59
        echo "\t\t\t   <div id=\"logogr\"> 
\t\t\t\t\t";
        // line 60
        $this->env->loadTemplate("::filAriane.html.twig")->display($context);
        // line 61
        echo "\t\t\t\t\t";
        // line 62
        echo "\t\t\t\t\t<div id=\"zone_03\" class=\"pub\"></div>\t\t
\t\t\t\t\t<a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_accueil"), "html", null, true);
        echo "\"><img id=\"logoportail\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/logoglobal.jpg"), "html", null, true);
        echo "\" alt=\"Réservation d'hébergement au Canada\" /></a>
\t\t\t\t</div>
\t\t\t<div id=\"bodycontent\">
\t    \t";
        // line 66
        $this->displayBlock('picture', $context, $blocks);
        // line 67
        echo "\t   \t\t ";
        if ((!array_key_exists("hidden", $context))) {
            // line 68
            echo "\t   \t\t \t";
            if ((!array_key_exists("pageStatic", $context))) {
                // line 69
                echo "\t\t\t\t     <div  id=\"sectionrecherche\" ";
                if (array_key_exists("multipleResultat", $context)) {
                    echo " class=\"multipleResultat\" ";
                }
                echo ">
\t\t\t\t\t\t";
                // line 84
                echo "                                                        <a style=\"margin-top:-40px;\" class=\"btreservation hackbtn\" href=\"http://reservation.global-reservation.com/reservit/reserhotel.php?partid=6&action=adv-avail&langcode=";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    echo "fr";
                } else {
                    echo "en";
                }
                echo "\" target=\"_blank\" rel=\"nofollow\" title=\"Réservation en ligne\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("reservation.ligne"), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t";
                // line 85
                if ((!array_key_exists("resultatGoogle", $context))) {
                    // line 86
                    echo "                                                        <div id=\"recherche\">
\t\t\t\t\t\t\t\t";
                    // line 88
                    echo "\t\t\t\t\t\t\t\t<form action=\"\" method=\"post\" ";
                    echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "formEngine"));
                    echo " class=\"update_state_form\">\t\t\t\t
\t\t\t\t\t\t\t\t    ";
                    // line 89
                    echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "formEngine"), "nom"), " ");
                    echo "
\t\t\t\t\t\t\t\t    ";
                    // line 90
                    echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "formEngine"), "nom"), array("attr" => array("class" => "txt_add_state")));
                    echo "\t\t\t\t\t\t\t\t      
\t\t\t\t\t\t\t\t    ";
                    // line 91
                    echo $this->env->getExtension('form')->renderRest($this->getContext($context, "formEngine"));
                    echo "\t
\t\t\t\t\t\t\t\t    <input type=\"submit\" class=\"btn_form_recherche\" value=\"";
                    // line 92
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("rechercher"), "html", null, true);
                    echo "\"/> 
                                                                </form>                                                             
\t\t\t\t\t\t\t</div>  
                                                        ";
                }
                // line 96
                echo "                                                <br  class=\"clearfloat\"/>\t\t\t\t
                                                ";
                // line 98
                echo "                                                ";
                $this->displayBlock('texte_accueil', $context, $blocks);
                echo "\t\t\t\t\t
\t\t\t\t\t </div>
\t\t\t \t";
            }
            // line 101
            echo "\t\t\t ";
        }
        // line 102
        echo "\t\t\t <br class=\"clearfloat\"/>
                            ";
        // line 104
        echo "                            <div id=\"droit\">                           
                                ";
        // line 105
        $this->displayBlock('body', $context, $blocks);
        echo "     
                            </div>\t\t
                            <div id=\"gauche\">                               
                                 ";
        // line 108
        $this->displayBlock('gauche', $context, $blocks);
        // line 109
        echo "                            </div>
                            ";
        // line 110
        $this->displayBlock('critere', $context, $blocks);
        // line 164
        echo "\t\t\t</div>\t\t
\t\t</div><!-- fermeture du div container -->
\t\t
\t\t</div><!-- fermeture du div global -->
\t\t";
        // line 168
        $this->env->loadTemplate("::footer.html.twig")->display($context);
        // line 169
        echo "    </body>
</html>";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        echo " ";
        $this->env->loadTemplate("::files_style.html.twig")->display($context);
        echo " ";
    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        echo " ";
        $this->env->loadTemplate("::files_js.html.twig")->display($context);
        echo " ";
    }

    // line 66
    public function block_picture($context, array $blocks = array())
    {
        echo " ";
    }

    // line 98
    public function block_texte_accueil($context, array $blocks = array())
    {
        echo " ";
    }

    // line 105
    public function block_body($context, array $blocks = array())
    {
        echo " ";
    }

    // line 108
    public function block_gauche($context, array $blocks = array())
    {
    }

    // line 110
    public function block_critere($context, array $blocks = array())
    {
        echo "\t
                            ";
        // line 111
        if (array_key_exists("menuPresentation", $context)) {
            echo "\t\t\t\t\t\t
                                    <div class=\"critere\">
                                    ";
            // line 113
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                // line 114
                echo "\t\t\t\t            ";
                if ((twig_length_filter($this->env, $this->getContext($context, "critere")) > 0)) {
                    // line 115
                    echo "                                                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "devise"));
                    foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                        // line 116
                        echo "                                                      <h2>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("critere.semblable"), "html", null, true);
                        echo " <br /> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                        echo "  </h2>
                                                              <ul>
                                                                <li><a href=\"javascript:void(0)\" rel=\"nofollow\">";
                        // line 118
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "w"), "stylehebergementid"));
                        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "g"), "nomfr"), "html", null, true);
                            echo " + ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        echo "</a> </li> 
                                                                <li><a href=\"javascript:void(0)\" rel=\"nofollow\">";
                        // line 119
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "villeid"), "nomfr"), "html", null, true);
                        echo "</a> </li>
                                                              </ul>
                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 122
                    echo "                                                    ";
                    // line 123
                    echo "\t\t\t\t\t            ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "critere"));
                    foreach ($context['_seq'] as $context["_key"] => $context["y"]) {
                        // line 124
                        echo "\t\t\t\t\t                   <div> 
\t\t\t\t\t                        <a href=\"";
                        // line 125
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "y"), "repertoirefr")))), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "y"), "nomfr"), "html", null, true);
                        echo "\">
\t\t\t\t\t                        \t";
                        // line 126
                        if ((!twig_test_empty($this->getAttribute($this->getContext($context, "y"), "photocategoriepayante")))) {
                            // line 127
                            echo "\t\t\t\t\t                        \t\t<img src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/hebergement/photo_categorie_payante/photo_categorie_payante"), "html", null, true);
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "y"), "id"), "html", null, true);
                            echo "/";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "y"), "photocategoriepayante"), "html", null, true);
                            echo "\" class=\"img_categoie_portail\" alt=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "y"), "nomfr"), "html", null, true);
                            echo "\" />
\t\t\t\t\t                        \t";
                        } else {
                            // line 129
                            echo "\t\t\t\t\t                        \t\t<img src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/manicouagan2.jpg"), "html", null, true);
                            echo "\" class=\"img_liste_forfait\" alt=\"Image de remplacement \" />
\t\t\t\t\t                        \t";
                        }
                        // line 131
                        echo "\t\t\t\t\t                        </a>
\t\t\t\t\t                        <h3><a href=\"";
                        // line 132
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "y"), "repertoirefr")))), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "y"), "nomfr"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "y"), "nomfr"), "html", null, true);
                        echo "</a></h3>
\t\t\t\t\t                   </div>
\t\t\t\t\t            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['y'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 135
                    echo "                                            ";
                }
                // line 136
                echo "                                    ";
            } else {
                // line 137
                echo "                                            ";
                if ((twig_length_filter($this->env, $this->getContext($context, "critere")) > 0)) {
                    // line 138
                    echo "\t\t\t\t\t\t\t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "devise"));
                    foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                        // line 139
                        echo "\t\t\t\t\t\t\t\t  <h2>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("critere.semblable"), "html", null, true);
                        echo " <br /> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                        echo " </h2>
\t\t\t\t\t\t\t\t\t  <ul>
                                                                            <li><a href=\"javascript:void(0)\" rel=\"nofollow\">";
                        // line 141
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "w"), "stylehebergementid"));
                        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "g"), "nomen"), "html", null, true);
                            echo " + ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        echo "</a> </li> 
                                                                            <li><a href=\"javascript:void(0)\" rel=\"nofollow\">";
                        // line 142
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "w"), "villeid"), "nomen"), "html", null, true);
                        echo "</a> </li>
\t\t\t\t\t\t\t\t\t  </ul>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 145
                    echo "\t\t\t\t\t\t\t\t";
                    // line 146
                    echo "\t\t\t\t\t            ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "critere"));
                    foreach ($context['_seq'] as $context["_key"] => $context["y"]) {
                        // line 147
                        echo "\t\t\t\t\t                   <div> 
\t\t\t\t\t                        <a href=\"";
                        // line 148
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "y"), "repertoireen")))), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "y"), "nomen"), "html", null, true);
                        echo "\">
\t\t\t\t\t                        \t";
                        // line 149
                        if ((!twig_test_empty($this->getAttribute($this->getContext($context, "y"), "photocategoriepayante")))) {
                            // line 150
                            echo "\t\t\t\t\t                        \t\t<img src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/hebergement/photo_categorie_payante/photo_categorie_payante"), "html", null, true);
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "y"), "id"), "html", null, true);
                            echo "/";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "y"), "photocategoriepayante"), "html", null, true);
                            echo "\" class=\"img_categoie_portail\" alt=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "y"), "nomen"), "html", null, true);
                            echo "\"/>
\t\t\t\t\t                        \t";
                        } else {
                            // line 152
                            echo "\t\t\t\t\t                        \t\t<img src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/manicouagan2.jpg"), "html", null, true);
                            echo "\" class=\"img_liste_forfait\" alt=\"Replacement image \" />
\t\t\t\t\t                        \t";
                        }
                        // line 154
                        echo "\t\t\t\t\t                        </a>
\t\t\t\t\t                        <h3><a href=\"";
                        // line 155
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "y"), "repertoireen")))), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "y"), "nomfr"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "y"), "nomen"), "html", null, true);
                        echo "</a></h3>
\t\t\t\t\t                   </div>
\t\t\t\t\t            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['y'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 158
                    echo "                                             ";
                }
                // line 159
                echo "                                     ";
            }
            // line 160
            echo "                                    <br class=\"clearfloat\" />
                                </div>
                            ";
        }
        // line 163
        echo "\t\t\t";
    }

    public function getTemplateName()
    {
        return "::base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  639 => 163,  634 => 160,  631 => 159,  628 => 158,  613 => 155,  610 => 154,  604 => 152,  593 => 150,  591 => 149,  583 => 148,  580 => 147,  575 => 146,  573 => 145,  564 => 142,  551 => 141,  543 => 139,  538 => 138,  535 => 137,  532 => 136,  529 => 135,  514 => 132,  511 => 131,  505 => 129,  494 => 127,  492 => 126,  484 => 125,  481 => 124,  476 => 123,  474 => 122,  465 => 119,  452 => 118,  444 => 116,  439 => 115,  436 => 114,  434 => 113,  429 => 111,  424 => 110,  419 => 108,  413 => 105,  407 => 98,  393 => 12,  385 => 11,  380 => 169,  378 => 168,  372 => 164,  367 => 109,  365 => 108,  359 => 105,  356 => 104,  353 => 102,  350 => 101,  343 => 98,  340 => 96,  333 => 92,  325 => 90,  321 => 89,  316 => 88,  313 => 86,  311 => 85,  300 => 84,  293 => 69,  290 => 68,  287 => 67,  285 => 66,  277 => 63,  274 => 62,  272 => 61,  267 => 59,  262 => 56,  254 => 52,  247 => 51,  244 => 50,  237 => 48,  234 => 47,  231 => 46,  217 => 40,  209 => 38,  207 => 37,  188 => 36,  176 => 35,  169 => 33,  160 => 27,  157 => 26,  114 => 24,  71 => 22,  69 => 21,  65 => 19,  61 => 17,  55 => 14,  52 => 13,  49 => 12,  42 => 10,  36 => 8,  27 => 2,  24 => 1,  426 => 138,  423 => 137,  416 => 131,  411 => 129,  409 => 128,  406 => 127,  401 => 66,  392 => 120,  388 => 118,  382 => 114,  370 => 110,  363 => 111,  351 => 109,  345 => 108,  341 => 106,  329 => 91,  322 => 103,  309 => 101,  305 => 100,  301 => 98,  289 => 96,  282 => 95,  270 => 60,  264 => 57,  259 => 55,  249 => 82,  242 => 77,  236 => 76,  229 => 45,  225 => 42,  222 => 72,  216 => 65,  208 => 64,  201 => 62,  195 => 61,  189 => 58,  181 => 57,  174 => 55,  168 => 54,  162 => 28,  154 => 50,  147 => 48,  141 => 47,  135 => 44,  129 => 43,  122 => 41,  117 => 40,  111 => 32,  105 => 31,  98 => 29,  93 => 28,  87 => 19,  79 => 18,  72 => 16,  66 => 15,  60 => 12,  57 => 15,  54 => 10,  47 => 11,  44 => 7,  40 => 9,  38 => 4,  34 => 3,  29 => 2,);
    }
}

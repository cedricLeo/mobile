<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_3a36631d7a1d136f2de033af37d69b62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'picture' => array($this, 'block_picture'),
            'body' => array($this, 'block_body'),
            'gauche' => array($this, 'block_gauche'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
\t <head>
\t \t <meta name=\"viewport\" content=\"initial-scale=1.0, user-scalable=no\">
         <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />  
         ";
        // line 6
        $this->env->loadTemplate("::metas.html.twig")->display($context);
        // line 7
        echo "    \t <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/favicon.ico"), "html", null, true);
        echo "\" />
    \t ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "    \t ";
        // line 13
        echo "\t\t <title>Page 404</title>
    </head>
    ";
        // line 15
        if (array_key_exists("menuDirectionRoutiere", $context)) {
            // line 16
            echo "    <body class=\"yui-skin-sam\" onload=\"initialize()\">
    ";
        } else {
            // line 18
            echo "    <body class=\"yui-skin-sam\">
    ";
        }
        // line 20
        echo "\t<div id=\"global\">
\t\t<div id=\"container\">
\t\t\t<div id=\"entete\">
\t\t\t\t<div>
\t\t\t\t<a ";
        // line 24
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
            echo " href=\"http://reservation.global-reservation.com/jreservit/welcomeXml.do?langcode=FR\" ";
        } else {
            echo " href=\"http://reservation.global-reservation.com/jreservit/welcomeXml.do?langcode=EN\" ";
        }
        echo " title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("version.mobile"), "html", null, true);
        echo "\" >";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("version.mobile"), "html", null, true);
        echo "</a> |
\t\t\t\t";
        // line 25
        echo " <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login"), "html", null, true);
        echo "\">";
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
\t\t\t\t";
        // line 26
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
            // line 27
            echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_transaction_langue_global", array("langue" => "en")), "html", null, true);
            echo "\"> <img class=\"drapeau_traduction\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/flag_en.png"), "html", null, true);
            echo "\" title=\"English version\" alt=\"version anglaise\" /></a> 
\t\t\t\t";
        } else {
            // line 29
            echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_transaction_langue_global", array("langue" => "fr")), "html", null, true);
            echo "\"> <img class=\"drapeau_traduction\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/flag_fr.png"), "html", null, true);
            echo "\" title=\"Version française\" alt=\"version française\" /></a>
\t\t\t\t";
        }
        // line 31
        echo "\t\t\t\t</div>
\t\t   </div>
\t\t   ";
        // line 33
        echo "\t
\t\t\t";
        // line 34
        $this->env->loadTemplate("::menu.html.twig")->display($context);
        // line 35
        echo "\t\t   ";
        // line 36
        echo "\t\t   <div id=\"logogr\"> 
\t\t\t\t<a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_accueil"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/LogoGlobalReservation.jpg"), "html", null, true);
        echo "\" alt=\"Réservation hébergement au Canada\" width=\"181\" height=\"81\" border=\"0\" /></a>
\t\t\t</div>
    \t";
        // line 39
        $this->displayBlock('picture', $context, $blocks);
        // line 40
        echo "\t\t  <br class=\"clearfloat\"/>
\t\t\t<div id=\"droit\" style=\"margin-bottom:100px; line-height:30px;\">
\t\t\t\t";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 62
        echo "     
\t\t\t</div>\t\t
\t\t\t<div id=\"gauche\">
\t\t\t\t";
        // line 65
        $this->displayBlock('gauche', $context, $blocks);
        // line 66
        echo "\t\t\t</div>
\t\t</div><!-- fermeture du div container -->
\t\t
\t  </div><!-- fermeture du div global -->
\t\t<div id=\"pieddepage\">    
\t\t\t";
        // line 72
        echo "\t\t\t<div id=\"footer\">
\t\t\t\t<div>
\t\t\t\t\t";
        // line 75
        echo "\t\t\t\t\t<br class=\"clearfloat\" />\t\t\t
\t\t\t\t\t<p>";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("descriptif.global"), "html", null, true);
        echo "</p> 
\t\t\t\t\t<p><a href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_conditionUtilisation"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("condition.utilisation"), "html", null, true);
        echo "</a></p>
\t\t\t\t\t<p><a href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_contact"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("contactez.nous"), "html", null, true);
        echo "</a></p>
\t\t\t\t\t<p><a href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_sitemap"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("plan.site"), "html", null, true);
        echo "</a></p>
\t\t\t\t\t<p><a href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_faq"), "html", null, true);
        echo "\">FAQ</a></p>
\t\t\t\t\t<br class=\"clearfloat\" />\t\t\t\t
\t\t\t\t\t";
        // line 83
        echo "\t\t\t\t\t<br class=\"clearfloat\" />
\t\t\t\t\t<p>&copy; Copyright ";
        // line 84
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Global Réservation inc.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"padding-left:8px; width:320px\"><img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/telfooter.gif"), "html", null, true);
        echo "\" alt=\"Réservez un hôtel au 1 877 778-8977\" width=\"286\" height=\"32\" style=\"margin:54px 0 12px 0;\" />
\t\t\t\t\t<a class=\"btfacebook\" href=\"http://www.facebook.com/pages/Global-Reservation/215568708901\" title=\"Facebook de Global Réservation\"><img border=\"0\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/vide.gif"), "html", null, true);
        echo "\" width=\"38\" height=\"37\" alt=\"Facebook de Global Réservation\" /></a>
\t\t\t\t\t<h3 style=\"padding:8px 0 0 0;\">
\t\t\t\t\t<a href=\"http://www.facebook.com/pages/Global-Reservation/215568708901\" target=\"_blank\" title=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("suivez.facebook"), "html", null, true);
        echo "\" style=\"text-decoration:none;\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("suivez.facebook"), "html", null, true);
        echo "</a>
\t\t\t\t\t</h3>
\t\t\t\t\t<br class=\"clearfloat\" />
\t\t\t\t\t<a class=\"btrss\" href=\"#\" title=\"Suivez nous sur votre lecteur RSS\"><img border=\"0\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/vide.gif"), "html", null, true);
        echo "\" width=\"38\" height=\"37\" alt=\"RSS de Québec en saisons\" /></a>
\t\t\t\t\t<h3 style=\"padding:21px 0 0 0;\">";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("rss"), "html", null, true);
        echo "</h3>
\t\t\t\t\t<br class=\"clearfloat\" />
\t\t\t\t\t<p style=\"margin-left:52px\"><a href=\"http://www.quebecensaisons.com/tourisme/index.php/feed/\" title=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("info.blog"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("blog.quebec.saison"), "html", null, true);
        echo "</a><br />
\t\t\t\t\t<a href=\"http://www.quebecensaisons.com/include/rss-festivals.php\" title=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("les.festivaux"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("festival.evenement.rss"), "html", null, true);
        echo "</a><br />
\t\t\t\t\t<a href=\"http://www.global-reservation.com/rss/rss-derniere-minute.xml\" title=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tarif.minutes"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tarif.derniere.minute"), "html", null, true);
        echo "</a><br />
\t\t\t\t\t<a href=\"http://www.quebecensaisons.com/include/rss-nouveaumembre-activites.php\" title=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("news.activitees"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("nouvelles.activites"), "html", null, true);
        echo "</a><br />
\t\t\t\t\t<a href=\"http://www.quebecensaisons.com/include/rss-nouveaumembre-hebergements.php\" title=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("news.hebergements"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("nouveaux.hebergements"), "html", null, true);
        echo "</a></p>\t\t\t
\t\t\t\t</div>
\t\t\t\t\t<div style=\"width:289px; margin-left:24px;\"><img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/quebecensaisons.png"), "html", null, true);
        echo "\" width=\"289\" height=\"113\" alt=\"Inscrivez-vous à Québec en Saisons\" />
\t\t\t\t\t<br class=\"clearfloat\" />\t
\t\t\t\t\t";
        // line 103
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
            echo "\t\t\t
\t\t\t\t\t<p>Consultez régulièrement le bulletin d'information touristique Web Québec en Saisons pour vous donner des idées d'activités à faire, de festivals et événements en vigueur à visiter, de forfaits en vigueur au Québec, de tarifs de dernière minute en vigueur dans différents établissements d'hébergement au Québec et encore plus !!!  Il y a TOUJOURS un CONCOURS en vigueur pour vous inscrire, un magnifique forfait à gagner.  Ne rien manquer sur le tourisme au Québec!</p>
\t\t\t\t\t";
        } else {
            // line 106
            echo "\t\t\t\t\t<p>Visit Quebec’s Seasons tourism newsletter regularly in order to get ideas of activities to do, current festivals and events, packages available in Quebec, last minute deals in different accommodations throughout Quebec and much more!!! There is ALWAYS a CONTEST offered with a very exciting prize. The perfect source in order to get all the information on Quebec tourism.</p>
\t\t\t\t\t";
        }
        // line 108
        echo "\t\t\t\t\t<br class=\"clearfloat\" />
\t\t\t\t\t<p>";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("adresse.courriel"), "html", null, true);
        echo "</p><br />
\t\t\t\t\t<br />\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t";
        // line 114
        if (((!twig_test_empty($this->getContext($context, "courrielExiste"))) && twig_test_empty($this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "formNewLetter"), "courriel"))))) {
            // line 115
            echo "\t\t\t\t\t<script>
\t\t\t\t\t\t//Efface le champ pour l'adresse courriel
\t\t\t\t\t\t \$(function(){
\t\t\t\t\t\t\t \$(\"#newletter_courriel\").val(\"\");
\t\t\t\t\t\t\t \$( \"#dialog-message\" ).dialog({
\t\t\t\t\t\t\t      modal: true,
\t\t\t\t\t\t\t      buttons: {
\t\t\t\t\t\t\t        Ok: function() {
\t\t\t\t\t\t\t          \$( this ).dialog( \"close\" );
\t\t\t\t\t\t\t        }
\t\t\t\t\t\t\t      }
\t\t\t\t\t\t\t    });
\t\t\t\t\t\t });
\t\t\t\t\t</script>
\t\t\t\t\t<div id=\"dialog-message\" title=\"Confirmation\">";
            // line 129
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                echo " Enregistrement confirmé pour la lettre d'information  ";
            } else {
                echo " Registration confirmed for the newsletter ";
            }
            echo "</div>
\t\t\t\t";
        }
        // line 131
        echo "\t\t</div>
    </body>
</html>

";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        echo " 
    \t \t";
        // line 9
        $this->env->loadTemplate("::files_style.html.twig")->display($context);
        echo " 
    \t \t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/css/error.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    \t ";
    }

    // line 39
    public function block_picture($context, array $blocks = array())
    {
        echo " ";
    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        echo " 
\t\t\t        <h1>Oops! une erreur est survenue</h1>
\t\t\t        \t";
        // line 44
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
            // line 45
            echo "\t\t\t\t\t\t<p>Désolé, la page demandée est introuvable sur notre site. </p>
\t\t\t\t\t 
\t\t\t\t\t\t<p>Essayez l’une des options suivantes : </p>
\t\t\t\t\t\t 
\t\t\t\t\t\t<p>Vérifier que l’adresse Internet que vous avez entrée est correcte. </p>
\t\t\t\t\t\t<p>Essayer d’accéder à la page désirée par la <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_accueil"), "html", null, true);
            echo "\" title=\"Retour à l'accueil\">page d'accueil</a>. </p> 
\t\t\t\t\t\t 
\t\t\t\t\t\t";
        } else {
            // line 53
            echo "\t\t\t\t\t\t<h1>Oops! An error occurred</h1>
\t\t\t\t\t\t<p>Sorry, the page you requested was not found on our site.</p>
\t\t\t\t\t 
\t\t\t\t\t\t<p>Try one of the following options : </p>
\t\t\t\t\t\t 
\t\t\t\t\t\t<p>Check the Internet address you entered is correct.</p>
\t\t\t\t\t\t<p>Try to access the desired page from the <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_accueilen"), "html", null, true);
            echo "\" title=\"Back to home\">home page</a>. </p>
\t\t\t\t\t\t 
\t\t\t\t\t\t";
        }
        // line 62
        echo "\t\t\t\t";
    }

    // line 65
    public function block_gauche($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  371 => 65,  367 => 62,  361 => 59,  353 => 53,  347 => 50,  340 => 45,  338 => 44,  332 => 42,  326 => 39,  320 => 10,  316 => 9,  311 => 8,  303 => 131,  294 => 129,  278 => 115,  276 => 114,  268 => 109,  265 => 108,  261 => 106,  255 => 103,  250 => 101,  243 => 99,  237 => 98,  231 => 97,  225 => 96,  219 => 95,  214 => 93,  210 => 92,  202 => 89,  197 => 87,  193 => 86,  188 => 84,  185 => 83,  180 => 80,  174 => 79,  168 => 78,  162 => 77,  158 => 76,  155 => 75,  151 => 72,  144 => 66,  142 => 65,  137 => 62,  135 => 42,  131 => 40,  129 => 39,  122 => 37,  119 => 36,  117 => 35,  115 => 34,  112 => 33,  108 => 31,  100 => 29,  92 => 27,  90 => 26,  71 => 25,  59 => 24,  53 => 20,  49 => 18,  45 => 16,  43 => 15,  39 => 13,  37 => 12,  35 => 8,  30 => 7,  28 => 6,  21 => 1,);
    }
}

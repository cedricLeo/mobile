<?php

/* ::footer.html.twig */
class __TwigTemplate_b2cdafa6e4cb2395969a97100d3b5a55 extends Twig_Template
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
        echo "<div id=\"pieddepage\">    
\t\t";
        // line 2
        if (array_key_exists("accueil", $context)) {
            echo " 
    \t \t\t<script type=\"text/javascript\" src=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/js/combo.js"), "html", null, true);
            echo "\" ></script>
    \t \t\t<script type=\"text/javascript\" src=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/js/fc.js"), "html", null, true);
            echo "\" ></script>
\t\t";
            // line 6
            echo "\t\t<div id=\"footer\">
\t\t\t<div>
\t\t\t\t";
            // line 9
            echo "\t\t\t\t<br class=\"clearfloat\" />\t\t\t
\t\t\t\t<p>";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("descriptif.global"), "html", null, true);
            echo "</p> 
\t\t\t\t<p><a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_conditionUtilisation"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("condition.utilisation"), "html", null, true);
            echo "</a></p>
\t\t\t\t<p><a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_contact"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("contactez.nous"), "html", null, true);
            echo "</a></p>
\t\t\t\t<p><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_sitemap"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("plan.site"), "html", null, true);
            echo "</a></p>
\t\t\t\t<p><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_faq"), "html", null, true);
            echo "\">FAQ</a></p>
\t\t\t\t<br class=\"clearfloat\" />\t\t\t\t
\t\t\t\t";
            // line 17
            echo "\t\t\t\t<br class=\"clearfloat\" />
\t\t\t\t<p>&copy; Copyright ";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
            echo " Global Réservation inc.</p>
\t\t\t\t</div>
\t\t\t\t<div style=\"padding-left:8px; width:320px\"><img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/telfooter.gif"), "html", null, true);
            echo "\" alt=\"Réservez un hôtel au 1 877 778-8977\" width=\"286\" height=\"32\" style=\"margin:54px 0 12px 0;\" />
\t\t\t\t";
            // line 21
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                // line 22
                echo "                                <a class=\"btfacebook\" href=\"http://www.facebook.com/pages/Global-Reservation/215568708901\" title=\"Facebook de Global Réservation\"><img border=\"0\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/vide.gif"), "html", null, true);
                echo "\" width=\"38\" height=\"37\" alt=\"Facebook de Global Réservation\" /></a>
\t\t\t\t<h3 style=\"padding:8px 0 0 0;\">
\t\t\t\t<a href=\"http://www.facebook.com/pages/Global-Reservation/215568708901\" target=\"_blank\" title=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("suivez.facebook"), "html", null, true);
                echo "\" style=\"text-decoration:none;\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("suivez.facebook"), "html", null, true);
                echo "</a>
\t\t\t\t</h3>
\t\t\t\t<br class=\"clearfloat\" />   
\t\t\t\t<a class=\"btrss\" href=\"http://www.quebecensaisons.com/tourisme/index.php/feed/\" title=\"Suivez nous sur votre lecteur RSS\"><img border=\"0\" src=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/vide.gif"), "html", null, true);
                echo "\" width=\"38\" height=\"37\" alt=\"RSS de Québec en Saisons\" /></a>
\t\t\t\t";
            } else {
                // line 29
                echo "                                <a class=\"btfacebook\" href=\"https://www.facebook.com/globalreservation\" title=\"Facebook de Global Réservation\"><img border=\"0\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/vide.gif"), "html", null, true);
                echo "\" width=\"38\" height=\"37\" alt=\"Facebook de Global Réservation\" /></a>
\t\t\t\t<h3 style=\"padding:8px 0 0 0;\">
\t\t\t\t<a href=\"https://www.facebook.com/globalreservation\" target=\"_blank\" title=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("suivez.facebook"), "html", null, true);
                echo "\" style=\"text-decoration:none;\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("suivez.facebook"), "html", null, true);
                echo "</a>
\t\t\t\t</h3>
\t\t\t\t<br class=\"clearfloat\" />  
                                <a class=\"btrss\" href=\"http://www.quebecensaisons.com/tourism/index.php/feed/\" title=\"Follow us on your RSS reader\"><img border=\"0\" src=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/vide.gif"), "html", null, true);
                echo "\" width=\"38\" height=\"37\" alt=\"RSS Quebec's Seasons\" /></a>
                                ";
            }
            // line 35
            echo "                                
                                <h3 style=\"padding:21px 0 0 0;\">";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("rss"), "html", null, true);
            echo "</h3>
\t\t\t\t<br class=\"clearfloat\" />      
                                ";
            // line 38
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                // line 39
                echo "                                <p style=\"margin-left:52px\"><a href=\"http://www.quebecensaisons.com/tourisme/\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("info.blog"), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("blog.quebec.saison"), "html", null, true);
                echo "</a><br />
                                <a href=\"http://www.quebec-guidetouristique.travel/festivals-evenements/evenements.php\" title=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("les.festivaux"), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("festival.evenement.rss"), "html", null, true);
                echo "</a><br />
\t\t\t\t<a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_promotion"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tarif.minutes"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tarif.derniere.minute"), "html", null, true);
                echo "</a><br />\t\t\t
                                ";
            } else {
                // line 42
                echo "  
                                <p style=\"margin-left:52px\"><a href=\"http://www.quebecensaisons.com/tourism/\" title=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("info.blog"), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("blog.quebec.saison"), "html", null, true);
                echo "</a><br />   
                                <a href=\"http://www.quebec-guidetouristique.travel/festivals-events/events.php\" title=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("les.festivaux"), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("festival.evenement.rss"), "html", null, true);
                echo "</a><br />
\t\t\t\t<a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_promotionen"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tarif.minutes"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tarif.derniere.minute"), "html", null, true);
                echo "</a><br />\t\t\t\t
                                ";
            }
            // line 47
            echo "                                </div>
\t\t\t\t<div style=\"width:289px; margin-left:24px;\"><img src=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/quebecensaisons.png"), "html", null, true);
            echo "\" width=\"289\" height=\"113\" alt=\"Inscrivez-vous à Québec en Saisons\" />
\t\t\t\t<br class=\"clearfloat\" />\t
\t\t\t\t";
            // line 50
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                echo "\t\t\t
\t\t\t\t<p>Consultez régulièrement le bulletin d'information touristique Web Québec en Saisons pour vous donner des idées d'activités à faire, de festivals et événements en vigueur à visiter, de forfaits en vigueur au Québec, de tarifs de dernière minute en vigueur dans différents établissements d'hébergement au Québec et encore plus !!!  Il y a TOUJOURS un CONCOURS en vigueur pour vous inscrire, un magnifique forfait à gagner.  Ne rien manquer sur le tourisme au Québec!</p>
\t\t\t\t";
            } else {
                // line 53
                echo "\t\t\t\t<p>Visit Quebec’s Seasons tourism newsletter regularly in order to get ideas of activities to do, current festivals and events, packages available in Quebec, last minute deals in different accommodations throughout Quebec and much more!!! There is ALWAYS a CONTEST offered with a very exciting prize. The perfect source in order to get all the information on Quebec tourism.</p>
\t\t\t\t";
            }
            // line 55
            echo "\t\t\t\t<br class=\"clearfloat\" />
\t\t\t\t<p>";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("adresse.courriel"), "html", null, true);
            echo "</p><br />
\t\t\t\t<br />\t\t
\t\t\t\t\t";
            // line 58
            echo "\t\t
\t\t\t\t\t<form action=\"\" method=\"post\" ";
            // line 59
            echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "formNewLetter"));
            echo " class=\"update_state_form\">\t
\t\t\t\t\t    ";
            // line 60
            echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "formNewLetter"), "courriel"), "", array("attr" => array("class" => " lbl_hidden")));
            echo "
\t\t\t\t\t    ";
            // line 61
            echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "formNewLetter"), "courriel"), array("attr" => array("class" => "txt_add_state")));
            echo "
\t\t\t\t\t\t";
            // line 62
            if ($this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "formNewLetter"), "courriel"))) {
                // line 63
                echo "\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t//Affiche l'adresse incorrecte
\t\t\t\t\t\t\t\t \$(function(){
\t\t\t\t\t\t\t\t\t// \$(\"#newletter_courriel\").val(\"\");
\t\t\t\t\t\t\t\t\t \$( \"#dialog-error\" ).dialog({
\t\t\t\t\t\t\t\t\t      modal: true,
\t\t\t\t\t\t\t\t\t      buttons: {
\t\t\t\t\t\t\t\t\t        Ok: function() {
\t\t\t\t\t\t\t\t\t          \$( this ).dialog( \"close\" );
\t\t\t\t\t\t\t\t\t        }
\t\t\t\t\t\t\t\t\t      }
\t\t\t\t\t\t\t\t\t    });
\t\t\t\t\t\t\t\t });
\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t";
            }
            // line 78
            echo "\t\t\t\t\t    <div id=\"dialog-error\" title=\"Erreur\">";
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                echo " ";
                echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "formNewLetter"), "courriel"));
                echo "  ";
            } else {
                echo " ";
                echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "formNewLetter"), "courriel"));
                echo " ";
            }
            echo "</div>
\t\t\t\t\t    ";
            // line 79
            echo $this->env->getExtension('form')->renderRest($this->getContext($context, "formNewLetter"));
            echo "\t
\t\t\t\t\t    <input type=\"submit\" value=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("minscrire"), "html", null, true);
            echo "\" id=\"idnewletter\" />
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t";
            // line 85
            if (((!twig_test_empty($this->getContext($context, "courrielExiste"))) && twig_test_empty($this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "formNewLetter"), "courriel"))))) {
                // line 86
                echo "\t\t\t\t<script>
\t\t\t\t\t//Efface le champ pour l'adresse courriel
\t\t\t\t\t \$(function(){
\t\t\t\t\t\t \$(\"#newletter_courriel\").val(\"\");
\t\t\t\t\t\t \$( \"#dialog-message\" ).dialog({
\t\t\t\t\t\t      modal: true,
\t\t\t\t\t\t      buttons: {
\t\t\t\t\t\t        Ok: function() {
\t\t\t\t\t\t          \$( this ).dialog( \"close\" );
\t\t\t\t\t\t        }
\t\t\t\t\t\t      }
\t\t\t\t\t\t    });
\t\t\t\t\t });
\t\t\t\t</script>
\t\t\t\t<div id=\"dialog-message\" title=\"Confirmation\">";
                // line 100
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                    echo " Enregistrement confirmé pour la lettre d'information  ";
                } else {
                    echo " Registration confirmed for the newsletter ";
                }
                echo "</div>
\t\t\t";
            }
            // line 102
            echo "\t\t";
        } else {
            // line 103
            echo "\t\t\t<div class=\"menuBottom\">
\t\t\t\t<div>
\t\t\t\t\t<nav>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
            // line 107
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                // line 108
                echo "\t\t\t\t\t\t\t\t<li class=\"colonnesfooter entete_footer\">Hôtels</li><br />
\t\t\t\t\t\t\t\t<li class=\"colonnesfooter\"><a href=\"";
                // line 109
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtyperegionfr", array("name" => "hotels-motels-auberges", "region" => "montreal")), "html", null, true);
                echo "\" title=\"hôtels, motels et auberges région de Montréal\"> Hôtels Montréal</a></li><br />
\t\t\t\t\t\t\t\t<li class=\"colonnesfooter\"><a href=\"";
                // line 110
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtyperegionfr", array("name" => "hotels-motels-auberges", "region" => "quebec")), "html", null, true);
                echo "\" title=\"hôtels, motels et auberges région de Québec\"> Hôtels Québec</a></li><br />  
\t\t\t\t\t\t\t\t<li class=\"colonnesfooter\"><a href=\"";
                // line 111
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypevillefr", array("name" => "hotels-motels-auberges", "ville" => "quebec-vieux-quebec")), "html", null, true);
                echo "\" title=\"hôtels, motels et auberges du Vieux-Québec\"> Hôtels Vieux-Québec</a></li><br /> 
\t\t\t\t\t\t\t\t<li class=\"colonnesfooter\"><a href=\"";
                // line 112
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtyperegionfr", array("name" => "hotels-motels-auberges", "region" => "outaouais")), "html", null, true);
                echo "\" title=\"hôtels, motels et auberges région de l'Outaouais\"> Hôtels Outaouais</a></li><br /> 
\t\t\t\t\t\t\t\t<li class=\"colonnesfooter\"><a href=\"";
                // line 113
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtyperegionfr", array("name" => "hotels-motels-auberges", "region" => "laurentides")), "html", null, true);
                echo "\" title=\"hôtels, motels et auberges région des Laurentides\"> Hôtels Laurentides</a></li><br />
\t\t\t\t\t\t\t\t<li class=\"colonnesfooter\"><a href=\"";
                // line 114
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtyperegionfr", array("name" => "hotels-motels-auberges", "region" => "charlevoix")), "html", null, true);
                echo "\" title=\"hôtels, motels et auberges région de Charlevoix\"> Hôtels Charlevoix</a></li><br /> 
\t\t\t\t\t\t\t\t<li class=\"colonnesfooter\"><a href=\"";
                // line 115
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypevillefr", array("name" => "hotels-motels-auberges", "ville" => "toronto")), "html", null, true);
                echo "\" title=\"hôtels motels, et auberges de Toronto\"> Hôtels Toronto</a></li><br /> 
\t\t\t\t\t\t\t\t<li class=\"colonnesfooter\"><a href=\"";
                // line 116
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypevillefr", array("name" => "hotels-motels-auberges", "ville" => "niagara-falls")), "html", null, true);
                echo "\" title=\"hôtels, motels et auberges Niagara Falls\"> Hôtels Niagara Falls</a></li><br /> 
\t\t\t\t\t\t\t\t<li class=\"colonnesfooter\"><a href=\"";
                // line 117
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtyperegionfr", array("name" => "hotels-motels-auberges", "region" => "saint-john")), "html", null, true);
                echo "\" title=\"hôtels, motels et auberges région de Saint-John\"> Hôtels Saint-John</a></li><br /> 
\t\t\t\t\t\t\t\t<li class=\"colonnesfooter\"><a href=\"";
                // line 118
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtyperegionfr", array("name" => "hotels-motels-auberges", "region" => "fredericton")), "html", null, true);
                echo "\" title=\"hôtels, motels et auberges région de Fredericton\"> Hôtels Fredericton</a></li><br />  
\t\t\t\t\t\t\t";
            } else {
                // line 120
                echo "\t\t\t\t\t\t\t\t<li class=\"colonnesfooter entete_footer\">Hotels</li>
\t\t\t\t\t\t\t\t<li class=\"colonnesfooter\"><a href=\"";
                // line 121
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtyperegionen", array("name" => "hotels-motels-inns", "region" => "montreal-en")), "html", null, true);
                echo "\" title=\"Hotels, motels and inns Montreal\"> Hotels Montréal</a></li> 
\t\t\t\t\t\t\t\t<li class=\"colonnesfooter\"><a href=\"";
                // line 122
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtyperegionen", array("name" => "hotels-motels-inns", "region" => "quebec-en")), "html", null, true);
                echo "\" title=\"Hotels, motels and inns Québec\"> Hotels Québec city</a></li><br />  
\t\t\t\t\t\t\t\t<li class=\"colonnesfooter\"><a href=\"";
                // line 123
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypevilleen", array("name" => "hotels-motels-inns", "ville" => "quebec-vieux-quebec-en")), "html", null, true);
                echo "\" title=\"Hotels, motels and inns Vieux-Québec\"> Hotels Vieux-Québec</a></li><br /> 
\t\t\t\t\t\t\t\t<li class=\"colonnesfooter\"><a href=\"";
                // line 124
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtyperegionen", array("name" => "hotels-motels-inns", "region" => "outaouais-en")), "html", null, true);
                echo "\" title=\"Hotels, motels and inns outaouais\"> Hotels Outaouais</a></li><br /> 
\t\t\t\t\t\t\t\t<li class=\"colonnesfooter\"><a href=\"";
                // line 125
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtyperegionen", array("name" => "hotels-motels-inns", "region" => "laurentides-en")), "html", null, true);
                echo "\" title=\"Hotels, motels and inns Laurentides\"> Hotels Laurentides</a></li><br />
\t\t\t\t\t\t\t\t<li class=\"colonnesfooter\"><a href=\"";
                // line 126
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtyperegionen", array("name" => "hotels-motels-inns", "region" => "charlevoix-en")), "html", null, true);
                echo "\" title=\"Hotels, motels and inns Charlevoix\"> Hotels Charlevoix</a></li><br /> 
\t\t\t\t\t\t\t\t<li class=\"colonnesfooter\"><a href=\"";
                // line 127
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypevilleen", array("name" => "hotels-motels-inns", "ville" => "toronto-en")), "html", null, true);
                echo "\" title=\"Hotels, motels and inns Toronto\"> Hotels Toronto</a></li><br /> 
\t\t\t\t\t\t\t\t<li class=\"colonnesfooter\"><a href=\"";
                // line 128
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypevilleen", array("name" => "hotels-motels-inns", "ville" => "niagara-falls-en")), "html", null, true);
                echo "\" title=\"Hotels, motels and inns Niagara Falls\"> Hotels Niagara Falls</a></li><br /> 
\t\t\t\t\t\t\t\t<li class=\"colonnesfooter\"><a href=\"";
                // line 129
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtyperegionen", array("name" => "hotels-motels-inns", "region" => "saint-john-en")), "html", null, true);
                echo "\" title=\"Hotels, motels and inns Saint-John\"> Hotels Saint-John</a></li><br /> 
\t\t\t\t\t\t\t\t<li class=\"colonnesfooter\"><a href=\"";
                // line 130
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtyperegionen", array("name" => "hotels-motels-inns", "region" => "fredericton-en")), "html", null, true);
                echo "\" title=\"Hotels, motels and inns Fredericton\"> Hotels Fredericton</a></li><br />  
\t\t\t\t\t\t\t";
            }
            // line 132
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t\t<nav>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
            // line 136
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                // line 137
                echo "\t\t\t\t\t\t\t\t<li class=\"colonnesfooter entete_footer\">Chalets et condos</li><br />
\t\t\t\t\t\t\t\t<li class=\"colonnesfooter\"><a href=\"";
                // line 138
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtyperegionfr", array("name" => "condos-chalets-maisons-refuges-pourvoiries", "region" => "quebec")), "html", null, true);
                echo "\" title=\"Condos région de Québec\"> Condos Québec</a></li><br />
\t\t\t\t\t\t\t\t<li class=\"colonnesfooter\"><a href=\"";
                // line 139
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtyperegionfr", array("name" => "condos-chalets-maisons-refuges-pourvoiries", "region" => "laurentides")), "html", null, true);
                echo "\" title=\"Chalets région des laurentides\"> Chalets Laurentides</a></li><br />  
\t\t\t\t\t\t\t\t<li class=\"colonnesfooter\"><a href=\"";
                // line 140
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypevillefr", array("name" => "condos-chalets-maisons-refuges-pourvoiries", "ville" => "mont-tremblant")), "html", null, true);
                echo "\" title=\"Chalets à Mont Tremblant\"> Chalets Mont-Tremblant</a></li><br /> 
\t\t\t\t\t\t\t\t<li class=\"colonnesfooter\"><a href=\"";
                // line 141
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypevillefr", array("name" => "condos-chalets-maisons-refuges-pourvoiries", "ville" => "mont-tremblant")), "html", null, true);
                echo "\" title=\"Condos à Mont Tremblant\"> Condos Mont-Tremblant</a></li><br /> 
                                                                <li class=\"colonnesfooter\"><a href=\"";
                // line 142
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypevillefr", array("name" => "condos-chalets-maisons-refuges-pourvoiries", "ville" => "bromont")), "html", null, true);
                echo "\" title=\"Chalets à Bromont\"> Chalets Bromont</a></li><br />
\t\t\t\t\t\t\t\t<li class=\"colonnesfooter\"><a href=\"";
                // line 143
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypevillefr", array("name" => "condos-chalets-maisons-refuges-pourvoiries", "ville" => "magog")), "html", null, true);
                echo "\" title=\"Condos à Magog\"> Condos Magog</a></li><br /> 
\t\t\t\t\t\t\t";
            } else {
                // line 145
                echo "\t\t\t\t\t\t\t\t<li class=\"colonnesfooter entete_footer\">Condos and cottages</li>
\t\t\t\t\t\t\t\t<li class=\"colonnesfooter\"><a href=\"";
                // line 146
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtyperegionen", array("name" => "condos-cottages-houses-refuges-outfitters", "region" => "quebec-en")), "html", null, true);
                echo "\" title=\"Condos Québec\"> Condos Québec</a></li><br />
\t\t\t\t\t\t\t\t<li class=\"colonnesfooter\"><a href=\"";
                // line 147
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtyperegionen", array("name" => "condos-cottages-houses-refuges-outfitters", "region" => "laurentides-en")), "html", null, true);
                echo "\" title=\"Cottages Laurentides\"> Cottages Laurentides</a></li><br />  
\t\t\t\t\t\t\t\t<li class=\"colonnesfooter\"><a href=\"";
                // line 148
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypevilleen", array("name" => "condos-cottages-houses-refuges-outfitters", "ville" => "mont-tremblant-en")), "html", null, true);
                echo "\" title=\"Cottages Magog\"> Cottages Mont-Tremblant</a></li><br /> 
\t\t\t\t\t\t\t\t<li class=\"colonnesfooter\"><a href=\"";
                // line 149
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypevilleen", array("name" => "condos-cottages-houses-refuges-outfitters", "ville" => "mont-tremblant-en")), "html", null, true);
                echo "\" title=\"Condos Mont-Tremblant\"> Condos Mont-Tremblant</a></li><br /> 
                                                                <li class=\"colonnesfooter\"><a href=\"";
                // line 150
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypevilleen", array("name" => "condos-cottages-houses-refuges-outfitters", "ville" => "bromont-en")), "html", null, true);
                echo "\" title=\"Cottages Bromont\"> Cottages Bromont</a></li><br />
\t\t\t\t\t\t\t\t<li class=\"colonnesfooter\"><a href=\"";
                // line 151
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypevilleen", array("name" => "condos-cottages-houses-refuges-outfitters", "ville" => "magog-en")), "html", null, true);
                echo "\" title=\"Condos Magog\"> Condos Magog</a></li><br />
\t\t\t\t\t\t\t";
            }
            // line 153
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t\t<nav>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
            // line 157
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                // line 158
                echo "\t\t\t\t\t\t\t\t<li class=\"colonnesfooter entete_footer\">Gîtes B&B</li><br />
\t\t\t\t\t\t\t\t<li class=\"colonnesfooter\"><a href=\"";
                // line 159
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtyperegionfr", array("name" => "gites-bed-and-breakfasts", "region" => "quebec")), "html", null, true);
                echo "\" title=\"Gîtes région de Québec\"> Gîtes Québec</a></li><br />
\t\t\t\t\t\t\t\t<li class=\"colonnesfooter\"><a href=\"";
                // line 160
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtyperegionen", array("name" => "gites-bed-and-breakfasts", "region" => "quebec-vieux-quebec")), "html", null, true);
                echo "\" title=\"Gîtes du vieux Québec\"> Gîtes Vieux-Québec</a></li><br />  
\t\t\t\t\t\t\t\t<li class=\"colonnesfooter\"><a href=\"";
                // line 161
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtyperegionfr", array("name" => "gites-bed-and-breakfasts", "region" => "laurentides")), "html", null, true);
                echo "\" title=\"Gîtes région des Laurentides\"> Gîtes Laurentides</a></li><br /> 
\t\t\t\t\t\t\t\t<li class=\"colonnesfooter\"><a href=\"";
                // line 162
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtyperegionfr", array("name" => "gites-bed-and-breakfasts", "region" => "charlevoix")), "html", null, true);
                echo "\" title=\"Gîtes région de Charlevoix\"> Gîtes Charlevoix</a></li><br /> 
\t\t\t\t\t\t\t";
            } else {
                // line 164
                echo "\t\t\t\t\t\t\t\t<li class=\"colonnesfooter entete_footer\">B&B</li>
\t\t\t\t\t\t\t\t<li class=\"colonnesfooter\"><a href=\"";
                // line 165
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtyperegionen", array("name" => "bed-and-breakfasts-en", "region" => "quebec-en")), "html", null, true);
                echo "\" title=\"B&B Québec\"> B&B Québec</a></li><br />
\t\t\t\t\t\t\t\t<li class=\"colonnesfooter\"><a href=\"";
                // line 166
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtyperegionen", array("name" => "bed-and-breakfasts-en", "region" => "quebec-vieux-quebec-en")), "html", null, true);
                echo "\" title=\"B&B Vieux-Québec\"> B&B Vieux-Québec</a></li><br /> 
\t\t\t\t\t\t\t\t<li class=\"colonnesfooter\"><a href=\"";
                // line 167
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtyperegionen", array("name" => "bed-and-breakfasts-en", "region" => "laurentides-en")), "html", null, true);
                echo "\" title=\"B&B Laurentides\"> B&B Laurentides</a></li><br />
\t\t\t\t\t\t\t\t<li class=\"colonnesfooter\"><a href=\"";
                // line 168
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtyperegionen", array("name" => "bed-and-breakfasts-en", "region" => "charlevoix-en")), "html", null, true);
                echo "\" title=\"B&B Charlevoix\"> B&B Charlevoix</a></li><br />
\t\t\t\t\t\t\t";
            }
            // line 170
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<nav>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
            // line 176
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                // line 177
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "regionQcFooter"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["mqc"]) {
                    // line 178
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                        // line 179
                        echo "\t\t\t\t\t\t\t\t\t<li class=\"colonnesfooter entete_footer\">Québec</li><br />
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 181
                    echo "\t\t\t\t\t\t\t\t<li class=\"colonnesfooter\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "mqc"), "regionid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"Hébergements région ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "mqc"), "regionid"), "nomfr"), "html", null, true);
                    echo "\"> Hébergements  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "mqc"), "regionid"), "nomfr"), "html", null, true);
                    echo "</a></li><br /> 
\t\t\t\t\t\t\t\t";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mqc'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 183
                echo "\t\t\t\t\t\t\t";
            } else {
                // line 184
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "regionQcFooter"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["mqc"]) {
                    // line 185
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                        // line 186
                        echo "\t\t\t\t\t\t\t\t\t<li class=\"colonnesfooter entete_footer\">Quebec</li><br />
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 188
                    echo "\t\t\t\t\t\t\t\t<li class=\"colonnesfooter\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "mqc"), "regionid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"Hébergements region ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "mqc"), "regionid"), "nomen"), "html", null, true);
                    echo "\"> Accommodation  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "mqc"), "regionid"), "nomen"), "html", null, true);
                    echo "</a></li> 
\t\t\t\t\t\t\t\t";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mqc'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 190
                echo "\t\t\t\t\t\t\t";
            }
            // line 191
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<nav>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
            // line 197
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                echo "\t\t\t
\t\t\t\t\t\t\t\t";
                // line 198
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "regionOnFooter"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["mqc"]) {
                    // line 199
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                        // line 200
                        echo "\t\t\t\t\t\t\t\t\t<li class=\"colonnesfooter entete_footer\">Ontario</li><br />
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 202
                    echo "\t\t\t\t\t\t\t\t<li class=\"colonnesfooter\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "mqc"), "regionid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"Hébergements région ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "mqc"), "regionid"), "nomfr"), "html", null, true);
                    echo "\" > Hébergements  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "mqc"), "regionid"), "nomfr"), "html", null, true);
                    echo "</a></li> 
\t\t\t\t\t\t\t\t";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mqc'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 204
                echo "\t\t\t\t\t\t\t";
            } else {
                // line 205
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "regionOnFooter"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["mqc"]) {
                    // line 206
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                        // line 207
                        echo "\t\t\t\t\t\t\t\t\t<li class=\"colonnesfooter entete_footer\">Ontario</li><br />
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 209
                    echo "\t\t\t\t\t\t\t\t<li class=\"colonnesfooter\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "mqc"), "regionid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"Accommodation region ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "mqc"), "regionid"), "nomen"), "html", null, true);
                    echo "\"> Accommodation  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "mqc"), "regionid"), "nomen"), "html", null, true);
                    echo "</a></li> 
\t\t\t\t\t\t\t\t";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mqc'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 211
                echo "\t\t\t\t\t\t\t";
            }
            // line 212
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t\t<nav>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
            // line 216
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                // line 217
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "regionNbFooter"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["mqc"]) {
                    // line 218
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                        // line 219
                        echo "\t\t\t\t\t\t\t\t\t<li class=\"colonnesfooter entete_footer\">Nouveau brunswick</li><br />
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 221
                    echo "\t\t\t\t\t\t\t\t<li class=\"colonnesfooter\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "mqc"), "regionid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"Hébergements région ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "mqc"), "regionid"), "nomfr"), "html", null, true);
                    echo "\"> Hébergements  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "mqc"), "regionid"), "nomfr"), "html", null, true);
                    echo "</a></li> 
\t\t\t\t\t\t\t\t";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mqc'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 223
                echo "\t\t\t\t\t\t\t";
            } else {
                // line 224
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "regionNbFooter"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["mqc"]) {
                    // line 225
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                        // line 226
                        echo "\t\t\t\t\t\t\t\t\t<li class=\"colonnesfooter entete_footer\">New Brunswick</li><br />
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 228
                    echo "\t\t\t\t\t\t\t\t<li class=\"colonnesfooter\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "mqc"), "regionid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"Accommodation region ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "mqc"), "regionid"), "nomen"), "html", null, true);
                    echo "\"> Accommodation  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "mqc"), "regionid"), "nomen"), "html", null, true);
                    echo "</a></li> 
\t\t\t\t\t\t\t\t";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mqc'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 230
                echo "\t\t\t\t\t\t\t";
            }
            // line 231
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<nav>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"colonnesfooter entete_colonne_droite_footer\"><a href=\"";
            // line 237
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_conditionUtilisation"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("condition.utilisation"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("condition.utilisation"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t<li class=\"colonnesfooter\"><a href=\"";
            // line 238
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_quisommesnous"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("qui.sommes.nous"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("qui.sommes.nous"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t<li class=\"colonnesfooter\"><a href=\"";
            // line 239
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_contact"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("contactez.nous"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("contactez.nous"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t<li class=\"colonnesfooter\"><a href=\"";
            // line 240
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_sitemap"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("plan.site"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("plan.site"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t<li class=\"colonnesfooter\"><a href=\"";
            // line 241
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_faq"), "html", null, true);
            echo "\" title=";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("titlefaq"), "html", null, true);
            echo ">FAQ</a></li>
\t\t\t\t\t\t\t<li class=\"colonnesfooter\">
\t\t\t\t\t\t\t";
            // line 243
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                // line 244
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_transaction_langue_global", array("langue" => "en")), "html", null, true);
                echo "\" title=\"translation\"> English</a> 
\t\t\t\t\t\t\t";
            } else {
                // line 246
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_transaction_langue_global", array("langue" => "fr")), "html", null, true);
                echo "\" title=\"traduction\"> Français</a>
\t\t\t\t\t\t\t";
            }
            // line 248
            echo "\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t\t<p class=\"copyrightGlobal\">&copy; Copyright ";
            // line 252
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
            echo " Global Réservation inc.</p>
\t\t\t</div>
\t\t";
        }
        // line 255
        echo "                     <!-- Google Analytics -->
                     <script type=\"text/javascript\">
                        var _gaq = _gaq || [];
                        _gaq.push(['_setAccount', 'UA-1340116-1']);
                        _gaq.push(['_setDomainName', 'global-reservation.com']);
                        _gaq.push(['_trackPageview']);

                        (function() {
                          var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                         // ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                          ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
                          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
                        })();
                     </script>
                     <!-- End Google Analytics -->
\t\t</div>";
    }

    public function getTemplateName()
    {
        return "::footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  887 => 252,  875 => 246,  860 => 241,  844 => 239,  817 => 230,  796 => 228,  771 => 224,  747 => 221,  740 => 218,  720 => 216,  714 => 212,  711 => 211,  686 => 207,  641 => 202,  617 => 198,  605 => 191,  602 => 190,  556 => 184,  553 => 183,  528 => 179,  507 => 177,  497 => 170,  488 => 167,  480 => 165,  477 => 164,  472 => 162,  464 => 160,  440 => 150,  428 => 147,  404 => 140,  396 => 138,  391 => 136,  364 => 126,  348 => 122,  332 => 117,  328 => 116,  312 => 112,  286 => 102,  261 => 86,  177 => 48,  150 => 42,  113 => 34,  433 => 67,  402 => 61,  381 => 58,  303 => 48,  298 => 46,  246 => 37,  145 => 22,  53 => 8,  308 => 111,  296 => 53,  238 => 42,  202 => 37,  156 => 27,  153 => 43,  128 => 39,  803 => 148,  800 => 147,  772 => 144,  768 => 223,  762 => 141,  739 => 138,  734 => 136,  724 => 134,  717 => 133,  708 => 131,  680 => 128,  670 => 125,  662 => 204,  651 => 123,  647 => 122,  632 => 118,  625 => 117,  620 => 116,  618 => 115,  606 => 110,  578 => 107,  568 => 104,  549 => 102,  523 => 96,  518 => 95,  486 => 91,  457 => 158,  448 => 83,  431 => 80,  415 => 64,  412 => 142,  384 => 70,  355 => 65,  346 => 62,  324 => 115,  320 => 114,  232 => 42,  230 => 41,  190 => 33,  130 => 21,  88 => 14,  1000 => 291,  995 => 290,  993 => 289,  990 => 288,  974 => 284,  952 => 283,  950 => 282,  935 => 276,  931 => 275,  926 => 274,  921 => 272,  912 => 266,  906 => 264,  903 => 263,  898 => 262,  896 => 261,  886 => 255,  877 => 253,  873 => 252,  870 => 251,  867 => 243,  865 => 249,  862 => 248,  854 => 244,  852 => 240,  849 => 242,  842 => 237,  839 => 236,  831 => 231,  827 => 230,  823 => 229,  820 => 231,  818 => 227,  815 => 226,  807 => 222,  805 => 221,  802 => 220,  792 => 226,  789 => 225,  776 => 206,  773 => 205,  752 => 201,  749 => 200,  746 => 199,  743 => 219,  741 => 197,  738 => 196,  730 => 190,  727 => 189,  722 => 217,  715 => 184,  712 => 132,  709 => 182,  701 => 178,  698 => 177,  677 => 171,  674 => 170,  672 => 169,  669 => 168,  661 => 164,  656 => 162,  653 => 161,  645 => 157,  642 => 120,  640 => 155,  637 => 200,  624 => 148,  611 => 142,  608 => 141,  600 => 137,  597 => 136,  595 => 135,  592 => 134,  584 => 130,  581 => 188,  579 => 128,  577 => 186,  574 => 185,  567 => 121,  559 => 120,  554 => 119,  548 => 117,  545 => 101,  519 => 101,  516 => 100,  502 => 92,  498 => 91,  490 => 89,  485 => 88,  479 => 86,  471 => 83,  455 => 157,  453 => 85,  450 => 77,  394 => 57,  386 => 54,  374 => 67,  366 => 66,  361 => 48,  357 => 47,  352 => 123,  349 => 45,  347 => 44,  344 => 121,  335 => 39,  323 => 50,  319 => 35,  304 => 110,  295 => 107,  256 => 16,  253 => 15,  250 => 39,  248 => 13,  228 => 5,  226 => 40,  214 => 281,  211 => 61,  206 => 271,  198 => 36,  193 => 247,  191 => 30,  183 => 236,  180 => 30,  178 => 226,  173 => 220,  170 => 219,  149 => 193,  139 => 181,  137 => 175,  134 => 174,  127 => 161,  124 => 160,  119 => 153,  107 => 134,  84 => 82,  64 => 26,  18 => 1,  67 => 27,  63 => 14,  45 => 9,  41 => 8,  37 => 5,  28 => 4,  3946 => 799,  3943 => 798,  3934 => 796,  3931 => 795,  3917 => 793,  3911 => 792,  3906 => 791,  3891 => 789,  3886 => 788,  3883 => 787,  3878 => 786,  3875 => 785,  3873 => 784,  3870 => 783,  3867 => 782,  3862 => 780,  3852 => 779,  3842 => 778,  3833 => 777,  3828 => 775,  3818 => 774,  3808 => 773,  3799 => 772,  3796 => 771,  3793 => 770,  3788 => 768,  3778 => 767,  3769 => 766,  3764 => 764,  3754 => 763,  3745 => 762,  3743 => 761,  3738 => 760,  3733 => 758,  3724 => 757,  3719 => 755,  3710 => 754,  3707 => 753,  3704 => 752,  3699 => 750,  3691 => 749,  3683 => 748,  3675 => 747,  3672 => 746,  3667 => 745,  3659 => 744,  3651 => 743,  3643 => 742,  3638 => 741,  3633 => 740,  3628 => 738,  3625 => 737,  3620 => 736,  3615 => 735,  3610 => 734,  3605 => 732,  3595 => 731,  3584 => 730,  3579 => 728,  3569 => 727,  3558 => 726,  3555 => 725,  3552 => 724,  3546 => 723,  3541 => 721,  3531 => 720,  3528 => 719,  3523 => 718,  3513 => 717,  3508 => 716,  3503 => 715,  3498 => 714,  3491 => 712,  3486 => 711,  3483 => 710,  3478 => 709,  3473 => 708,  3468 => 707,  3463 => 706,  3460 => 705,  3457 => 703,  3455 => 702,  3452 => 701,  3443 => 699,  3434 => 697,  3426 => 696,  3418 => 695,  3410 => 694,  3407 => 693,  3398 => 692,  3390 => 691,  3382 => 690,  3374 => 689,  3369 => 688,  3364 => 687,  3361 => 686,  3359 => 685,  3356 => 684,  3347 => 682,  3338 => 680,  3330 => 679,  3322 => 678,  3314 => 677,  3311 => 676,  3302 => 675,  3294 => 674,  3286 => 673,  3278 => 672,  3273 => 671,  3268 => 670,  3265 => 669,  3263 => 668,  3260 => 667,  3249 => 665,  3246 => 664,  3237 => 662,  3228 => 661,  3219 => 659,  3211 => 658,  3206 => 657,  3203 => 656,  3194 => 654,  3186 => 653,  3178 => 652,  3169 => 651,  3160 => 649,  3152 => 648,  3144 => 647,  3136 => 646,  3131 => 645,  3127 => 644,  3122 => 643,  3119 => 642,  3117 => 641,  3114 => 640,  3105 => 638,  3096 => 636,  3088 => 635,  3080 => 634,  3071 => 633,  3062 => 631,  3054 => 630,  3046 => 629,  3038 => 628,  3033 => 627,  3028 => 626,  3025 => 625,  3023 => 624,  3020 => 623,  3011 => 621,  3002 => 619,  2994 => 618,  2986 => 617,  2978 => 616,  2975 => 615,  2966 => 614,  2958 => 613,  2950 => 612,  2942 => 611,  2937 => 610,  2932 => 609,  2929 => 608,  2927 => 607,  2924 => 606,  2915 => 604,  2906 => 602,  2898 => 601,  2890 => 600,  2882 => 599,  2879 => 598,  2870 => 597,  2862 => 596,  2854 => 595,  2846 => 594,  2841 => 593,  2836 => 592,  2833 => 591,  2831 => 590,  2828 => 589,  2819 => 587,  2810 => 585,  2802 => 584,  2794 => 583,  2785 => 582,  2776 => 580,  2768 => 579,  2760 => 578,  2752 => 577,  2747 => 576,  2742 => 575,  2739 => 574,  2737 => 573,  2734 => 572,  2725 => 570,  2716 => 568,  2708 => 567,  2700 => 566,  2692 => 565,  2689 => 564,  2680 => 563,  2672 => 562,  2664 => 561,  2656 => 560,  2651 => 559,  2646 => 558,  2643 => 557,  2641 => 556,  2638 => 555,  2629 => 553,  2620 => 551,  2612 => 550,  2604 => 549,  2596 => 548,  2593 => 547,  2584 => 546,  2576 => 545,  2568 => 544,  2560 => 543,  2555 => 542,  2550 => 541,  2547 => 540,  2545 => 539,  2542 => 538,  2536 => 537,  2531 => 535,  2523 => 534,  2515 => 533,  2506 => 532,  2501 => 530,  2493 => 529,  2485 => 528,  2477 => 527,  2472 => 526,  2467 => 525,  2464 => 524,  2462 => 523,  2459 => 521,  2456 => 520,  2453 => 519,  2447 => 517,  2431 => 515,  2416 => 514,  2410 => 512,  2392 => 511,  2389 => 510,  2377 => 509,  2372 => 507,  2361 => 506,  2355 => 504,  2352 => 503,  2349 => 502,  2343 => 500,  2327 => 498,  2312 => 497,  2306 => 495,  2288 => 494,  2285 => 493,  2273 => 492,  2268 => 490,  2257 => 489,  2251 => 487,  2249 => 486,  2244 => 485,  2241 => 484,  2239 => 483,  2236 => 482,  2233 => 481,  2227 => 479,  2213 => 477,  2203 => 476,  2194 => 475,  2189 => 474,  2186 => 473,  2180 => 471,  2166 => 469,  2157 => 468,  2152 => 467,  2149 => 466,  2143 => 464,  2125 => 463,  2122 => 462,  2107 => 460,  2104 => 459,  2102 => 458,  2097 => 456,  2089 => 455,  2080 => 454,  2077 => 453,  2072 => 451,  2063 => 450,  2060 => 449,  2054 => 447,  2051 => 446,  2048 => 445,  2042 => 443,  2028 => 441,  2018 => 440,  2009 => 439,  2004 => 438,  2001 => 437,  1995 => 435,  1981 => 433,  1972 => 432,  1967 => 431,  1964 => 430,  1958 => 428,  1940 => 427,  1937 => 426,  1922 => 424,  1919 => 423,  1917 => 422,  1912 => 420,  1904 => 419,  1895 => 418,  1892 => 417,  1887 => 415,  1878 => 414,  1875 => 413,  1869 => 411,  1866 => 410,  1863 => 409,  1860 => 408,  1858 => 407,  1855 => 406,  1852 => 405,  1847 => 403,  1837 => 402,  1827 => 401,  1818 => 400,  1813 => 398,  1803 => 397,  1793 => 396,  1784 => 395,  1781 => 394,  1778 => 393,  1773 => 391,  1763 => 390,  1754 => 389,  1749 => 387,  1739 => 386,  1730 => 385,  1727 => 384,  1724 => 383,  1719 => 381,  1710 => 380,  1705 => 378,  1696 => 377,  1693 => 376,  1687 => 374,  1684 => 373,  1682 => 372,  1679 => 371,  1674 => 369,  1664 => 368,  1654 => 367,  1645 => 366,  1640 => 364,  1630 => 363,  1620 => 362,  1611 => 361,  1608 => 360,  1605 => 359,  1600 => 357,  1590 => 356,  1581 => 355,  1576 => 353,  1566 => 352,  1557 => 351,  1554 => 350,  1551 => 349,  1546 => 347,  1537 => 346,  1532 => 344,  1523 => 343,  1520 => 342,  1514 => 340,  1511 => 339,  1509 => 338,  1506 => 337,  1501 => 335,  1491 => 334,  1481 => 333,  1472 => 332,  1467 => 330,  1457 => 329,  1447 => 328,  1438 => 327,  1435 => 326,  1432 => 325,  1427 => 323,  1417 => 322,  1408 => 321,  1403 => 319,  1393 => 318,  1384 => 317,  1381 => 316,  1378 => 315,  1373 => 313,  1364 => 312,  1359 => 310,  1350 => 309,  1347 => 308,  1341 => 306,  1338 => 305,  1332 => 303,  1329 => 302,  1326 => 301,  1321 => 299,  1313 => 298,  1304 => 297,  1301 => 296,  1296 => 294,  1287 => 293,  1284 => 292,  1278 => 290,  1275 => 289,  1272 => 288,  1267 => 286,  1259 => 285,  1250 => 284,  1247 => 283,  1242 => 281,  1233 => 280,  1230 => 279,  1224 => 277,  1221 => 276,  1218 => 275,  1215 => 274,  1213 => 273,  1210 => 272,  1207 => 271,  1202 => 269,  1192 => 268,  1182 => 267,  1173 => 266,  1168 => 264,  1158 => 263,  1148 => 262,  1139 => 261,  1136 => 260,  1133 => 259,  1130 => 258,  1125 => 256,  1115 => 255,  1106 => 254,  1101 => 252,  1091 => 251,  1082 => 250,  1079 => 249,  1076 => 248,  1073 => 247,  1068 => 245,  1059 => 244,  1054 => 242,  1045 => 241,  1042 => 240,  1039 => 239,  1036 => 238,  1030 => 236,  1025 => 234,  1020 => 233,  1017 => 232,  1014 => 231,  1009 => 229,  1001 => 228,  992 => 227,  987 => 225,  979 => 224,  970 => 223,  967 => 222,  964 => 221,  961 => 220,  956 => 218,  947 => 281,  942 => 215,  933 => 214,  930 => 213,  927 => 212,  924 => 273,  918 => 209,  913 => 207,  908 => 206,  905 => 205,  902 => 204,  900 => 203,  897 => 202,  893 => 255,  889 => 199,  881 => 248,  869 => 244,  857 => 196,  847 => 195,  840 => 194,  836 => 238,  828 => 237,  816 => 190,  804 => 189,  794 => 214,  787 => 187,  784 => 186,  781 => 208,  778 => 207,  774 => 182,  766 => 181,  754 => 140,  744 => 179,  737 => 178,  733 => 176,  725 => 188,  713 => 174,  703 => 173,  696 => 176,  693 => 175,  690 => 209,  687 => 168,  683 => 206,  675 => 166,  665 => 205,  658 => 163,  654 => 162,  646 => 161,  636 => 160,  629 => 150,  626 => 149,  623 => 157,  621 => 147,  615 => 114,  609 => 111,  599 => 150,  594 => 149,  586 => 146,  576 => 145,  565 => 144,  560 => 103,  550 => 141,  540 => 99,  530 => 97,  525 => 178,  509 => 132,  499 => 131,  491 => 129,  489 => 128,  483 => 126,  478 => 124,  473 => 123,  470 => 122,  468 => 161,  463 => 119,  460 => 159,  454 => 116,  449 => 153,  441 => 112,  438 => 81,  432 => 148,  421 => 145,  408 => 141,  405 => 62,  400 => 139,  397 => 58,  395 => 94,  379 => 90,  376 => 129,  373 => 88,  371 => 87,  368 => 127,  360 => 125,  336 => 118,  326 => 51,  317 => 77,  314 => 76,  306 => 49,  297 => 108,  292 => 54,  283 => 69,  271 => 65,  268 => 49,  265 => 63,  263 => 49,  245 => 46,  224 => 35,  221 => 37,  219 => 288,  200 => 58,  197 => 49,  185 => 239,  175 => 33,  172 => 32,  166 => 41,  163 => 25,  152 => 25,  132 => 19,  121 => 36,  108 => 25,  95 => 22,  89 => 14,  75 => 15,  32 => 6,  20 => 2,  143 => 32,  116 => 26,  112 => 141,  109 => 140,  81 => 17,  73 => 13,  299 => 79,  280 => 43,  258 => 61,  251 => 80,  233 => 6,  227 => 40,  223 => 39,  215 => 62,  196 => 248,  192 => 55,  171 => 28,  167 => 217,  165 => 45,  161 => 28,  159 => 44,  155 => 196,  151 => 33,  144 => 186,  118 => 35,  115 => 18,  77 => 71,  59 => 20,  56 => 9,  25 => 1,  23 => 4,  138 => 29,  123 => 29,  94 => 27,  74 => 20,  46 => 7,  19 => 2,  218 => 34,  203 => 59,  182 => 50,  142 => 23,  102 => 19,  99 => 29,  97 => 114,  92 => 98,  90 => 21,  85 => 19,  83 => 13,  80 => 22,  35 => 7,  33 => 6,  21 => 3,  126 => 38,  110 => 33,  104 => 133,  91 => 22,  86 => 24,  82 => 77,  78 => 21,  76 => 14,  62 => 11,  58 => 10,  50 => 11,  43 => 11,  39 => 10,  30 => 5,  26 => 4,  22 => 3,  17 => 1,  639 => 163,  634 => 199,  631 => 159,  628 => 158,  613 => 197,  610 => 154,  604 => 151,  593 => 150,  591 => 148,  583 => 148,  580 => 147,  575 => 146,  573 => 145,  564 => 142,  551 => 141,  543 => 115,  538 => 138,  535 => 139,  532 => 181,  529 => 135,  514 => 94,  511 => 98,  505 => 176,  494 => 90,  492 => 168,  484 => 166,  481 => 124,  476 => 88,  474 => 84,  465 => 120,  452 => 118,  444 => 151,  439 => 115,  436 => 149,  434 => 73,  429 => 71,  424 => 146,  419 => 76,  413 => 63,  407 => 61,  393 => 137,  385 => 132,  380 => 130,  378 => 53,  372 => 128,  367 => 109,  365 => 85,  359 => 56,  356 => 124,  353 => 55,  350 => 54,  343 => 98,  340 => 96,  333 => 92,  325 => 90,  321 => 89,  316 => 113,  313 => 86,  311 => 75,  300 => 109,  293 => 52,  290 => 68,  287 => 29,  285 => 28,  277 => 100,  274 => 50,  272 => 50,  267 => 40,  262 => 56,  254 => 46,  247 => 79,  244 => 44,  237 => 43,  234 => 78,  231 => 46,  217 => 63,  209 => 272,  207 => 60,  188 => 53,  176 => 35,  169 => 33,  160 => 205,  157 => 27,  114 => 146,  71 => 11,  69 => 18,  65 => 11,  61 => 14,  55 => 13,  52 => 3,  49 => 12,  42 => 6,  36 => 9,  27 => 4,  24 => 3,  426 => 79,  423 => 137,  416 => 143,  411 => 129,  409 => 128,  406 => 127,  401 => 66,  392 => 120,  388 => 55,  382 => 114,  370 => 110,  363 => 111,  351 => 64,  345 => 108,  341 => 120,  329 => 59,  322 => 103,  309 => 101,  305 => 100,  301 => 98,  289 => 103,  282 => 51,  270 => 41,  264 => 57,  259 => 85,  249 => 82,  242 => 45,  236 => 76,  229 => 55,  225 => 39,  222 => 113,  216 => 287,  208 => 64,  201 => 32,  195 => 56,  189 => 43,  181 => 34,  174 => 47,  168 => 27,  162 => 211,  154 => 50,  147 => 187,  141 => 41,  135 => 40,  129 => 167,  122 => 154,  117 => 147,  111 => 16,  105 => 31,  98 => 16,  93 => 21,  87 => 83,  79 => 76,  72 => 43,  66 => 17,  60 => 9,  57 => 12,  54 => 11,  47 => 8,  44 => 8,  40 => 9,  38 => 8,  34 => 6,  29 => 4,);
    }
}

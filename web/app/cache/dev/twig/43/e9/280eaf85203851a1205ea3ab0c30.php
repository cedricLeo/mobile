<?php

/* ::meta_lang_fr.html.twig */
class __TwigTemplate_43e9280eaf85203851a1205ea3ab0c30 extends Twig_Template
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
        // line 2
        echo "    ";
        // line 3
        echo "    ";
        if (array_key_exists("hidden", $context)) {
            // line 4
            echo "        ";
            if (array_key_exists("client", $context)) {
                // line 5
                echo "             ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "client"));
                foreach ($context['_seq'] as $context["_key"] => $context["meta"]) {
                    // line 6
                    echo "                ";
                    if (array_key_exists("menuPresentation", $context)) {
                        // line 7
                        echo "                   <title>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("presentation"), "html", null, true);
                        echo "                                      
                       ";
                        // line 8
                        if ((!twig_test_empty($this->getAttribute($this->getContext($context, "meta"), "metatitrefr")))) {
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meta"), "metatitrefr"), "html", null, true);
                            echo " ";
                        } else {
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meta"), "nomfr"), "html", null, true);
                            echo " ";
                        }
                        echo " | Global Réservation</title>
                       <meta name=\"keywords\" content=\"";
                        // line 9
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meta"), "metakeywordsfr"), "html", null, true);
                        echo "\" />
                       <meta name=\"description\" content=\"";
                        // line 10
                        if ((!twig_test_empty($this->getAttribute($this->getContext($context, "meta"), "metadescriptionfr")))) {
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meta"), "metadescriptionfr"), "html", null, true);
                            echo " ";
                        } else {
                            echo " Venez séjourner à ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meta"), "nomfr"), "html", null, true);
                            echo " située dans la ville de ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "meta"), "villeid"), "nomfr"), "html", null, true);
                            echo " dans la région touristique de ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "meta"), "regionid"), "nomfr"), "html", null, true);
                            echo ". Faites une réservation pour profiter de ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meta"), "nomfr"), "html", null, true);
                            echo " et amusez-vous pendant votre séjour.";
                        }
                        echo "\" />                                               
                ";
                    } elseif (array_key_exists("menuChambre", $context)) {
                        // line 12
                        echo "                   <title>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("chambre.tarif"), "html", null, true);
                        echo "  
                       ";
                        // line 13
                        if ((!twig_test_empty($this->getAttribute($this->getContext($context, "meta"), "metatitrefr")))) {
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meta"), "metatitrefr"), "html", null, true);
                            echo " ";
                        } else {
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meta"), "nomfr"), "html", null, true);
                            echo " ";
                        }
                        echo " | Global Réservation</title>
                       <meta name=\"keywords\" content=\"";
                        // line 14
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meta"), "metakeywordsfr"), "html", null, true);
                        echo "\" />
                       <meta name=\"description\" content=\"Réservez la chambre de votre choix au ";
                        // line 15
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meta"), "nomfr"), "html", null, true);
                        echo " dans la ville de ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "meta"), "villeid"), "nomfr"), "html", null, true);
                        echo " dans la région touristique de ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "meta"), "regionid"), "nomfr"), "html", null, true);
                        echo ". Vous aurez un séjour douillet dans l'une des ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meta"), "nombrechambre"), "html", null, true);
                        echo " chambres choisies de ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meta"), "nomfr"), "html", null, true);
                        echo ".\" />                        
                ";
                    } elseif (array_key_exists("menuForfait", $context)) {
                        // line 16
                        echo "\t
                   <title>";
                        // line 17
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forfait.promotion"), "html", null, true);
                        echo "  
                       ";
                        // line 18
                        if ((!twig_test_empty($this->getAttribute($this->getContext($context, "meta"), "metatitrefr")))) {
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meta"), "metatitrefr"), "html", null, true);
                            echo " ";
                        } else {
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meta"), "nomfr"), "html", null, true);
                            echo " ";
                        }
                        echo " | Global Réservation</title>
                       <meta name=\"keywords\" content=\"";
                        // line 19
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meta"), "metakeywordsfr"), "html", null, true);
                        echo "\" />
                       <meta name=\"description\" content=\"Trouvez le forfait qui vous convient pour profiter d'un séjour agréable au ";
                        // line 20
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meta"), "nomfr"), "html", null, true);
                        echo " dans la ville de ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "meta"), "villeid"), "nomfr"), "html", null, true);
                        echo " dans la région touristique de ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "meta"), "regionid"), "nomfr"), "html", null, true);
                        echo ". Réservez un forfait et profitez d'un bon repas, d'une activité, d'un moment de relaxation ou autres selon votre choix.\" />  
                ";
                    } elseif (array_key_exists("menuService", $context)) {
                        // line 22
                        echo "                   <title>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activite.service"), "html", null, true);
                        echo "  
                       ";
                        // line 23
                        if ((!twig_test_empty($this->getAttribute($this->getContext($context, "meta"), "metatitrefr")))) {
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meta"), "metatitrefr"), "html", null, true);
                            echo " ";
                        } else {
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meta"), "nomfr"), "html", null, true);
                            echo " ";
                        }
                        echo " | Global Réservation</title>
                       <meta name=\"keywords\" content=\"";
                        // line 24
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meta"), "metakeywordsfr"), "html", null, true);
                        echo "\" />
                       <meta name=\"description\" content=\"Suite à votre réservation au ";
                        // line 25
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meta"), "nomfr"), "html", null, true);
                        echo " dans la ville de ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "meta"), "villeid"), "nomfr"), "html", null, true);
                        echo " dans la région touristique de ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "meta"), "regionid"), "nomfr"), "html", null, true);
                        echo ", vous pourrez retrouver des activités à proximité à faire et les services offerts au ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meta"), "nomfr"), "html", null, true);
                        echo ".\" />  
                ";
                    } elseif (array_key_exists("menuCorporatif", $context)) {
                        // line 27
                        echo "                   <title>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("corporatif.speciaux"), "html", null, true);
                        echo "  
                       ";
                        // line 28
                        if ((!twig_test_empty($this->getAttribute($this->getContext($context, "meta"), "metatitrefr")))) {
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meta"), "metatitrefr"), "html", null, true);
                            echo " ";
                        } else {
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meta"), "nomfr"), "html", null, true);
                            echo " ";
                        }
                        echo " | Global Réservation</title>
                       <meta name=\"keywords\" content=\"";
                        // line 29
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meta"), "metakeywordsfr"), "html", null, true);
                        echo "\" />
                       <meta name=\"description\" content=\"Faites une réservation pour un événement spécial, familial, corporatif, mariage ou autre au ";
                        // line 30
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meta"), "nomfr"), "html", null, true);
                        echo " dans la ville de ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "meta"), "villeid"), "nomfr"), "html", null, true);
                        echo " dans la région touristique de ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "meta"), "regionid"), "nomfr"), "html", null, true);
                        echo ". Trouvez tout ce que ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meta"), "nomfr"), "html", null, true);
                        echo " vous propose comme salle, services et autres.\" />   
                ";
                    } elseif (array_key_exists("menuGalerie", $context)) {
                        // line 32
                        echo "                   <title>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("galerie.photo"), "html", null, true);
                        echo "  
                       ";
                        // line 33
                        if ((!twig_test_empty($this->getAttribute($this->getContext($context, "meta"), "metatitrefr")))) {
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meta"), "metatitrefr"), "html", null, true);
                            echo " ";
                        } else {
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meta"), "nomfr"), "html", null, true);
                            echo " ";
                        }
                        echo " | Global Réservation</title>
                       <meta name=\"keywords\" content=\"";
                        // line 34
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meta"), "metakeywordsfr"), "html", null, true);
                        echo "\" />
                       <meta name=\"description\" content=\"Visualisez les photos du ";
                        // line 35
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meta"), "nomfr"), "html", null, true);
                        echo " dans la ville de ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "meta"), "villeid"), "nomfr"), "html", null, true);
                        echo " dans la région touristique de ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "meta"), "regionid"), "nomfr"), "html", null, true);
                        echo " avant d'effectuer votre réservation.  Vous pourrez y voir le décor, les chambres, les jardins et autres.\" />  
                ";
                    } elseif (array_key_exists("menuCentreSante", $context)) {
                        // line 37
                        echo "                   <title>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("centre.sante.spa"), "html", null, true);
                        echo "  
                       ";
                        // line 38
                        if ((!twig_test_empty($this->getAttribute($this->getContext($context, "meta"), "metatitrefr")))) {
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meta"), "metatitrefr"), "html", null, true);
                            echo " ";
                        } else {
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meta"), "nomfr"), "html", null, true);
                            echo " ";
                        }
                        echo " | Global Réservation</title>
                       <meta name=\"keywords\" content=\"";
                        // line 39
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meta"), "metakeywordsfr"), "html", null, true);
                        echo "\" />
                       <meta name=\"description\" content=\"En réservant au ";
                        // line 40
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meta"), "nomfr"), "html", null, true);
                        echo " dans la ville de ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "meta"), "villeid"), "nomfr"), "html", null, true);
                        echo " dans la région touristique de ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "meta"), "regionid"), "nomfr"), "html", null, true);
                        echo ", vous pourrez aller visiter leur centre de santé et spas pour vous détendre pendant votre séjour.\" />                         
                ";
                    } elseif (array_key_exists("menuRestaurant", $context)) {
                        // line 42
                        echo "                   <title>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("restaurant"), "html", null, true);
                        echo "  
                       ";
                        // line 43
                        if ((!twig_test_empty($this->getAttribute($this->getContext($context, "meta"), "metatitrefr")))) {
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meta"), "metatitrefr"), "html", null, true);
                            echo " ";
                        } else {
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meta"), "nomfr"), "html", null, true);
                            echo " ";
                        }
                        echo " | Global Réservation</title>
                       <meta name=\"keywords\" content=\"";
                        // line 44
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meta"), "metakeywordsfr"), "html", null, true);
                        echo "\" />
                       <meta name=\"description\" content=\"En réservant au ";
                        // line 45
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meta"), "nomfr"), "html", null, true);
                        echo " dans la ville de ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "meta"), "villeid"), "nomfr"), "html", null, true);
                        echo " dans la région touristique de ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "meta"), "regionid"), "nomfr"), "html", null, true);
                        echo ", vous pourrez aller déguster un bon repas au restaurant de l'établissement.\" />  
                ";
                    } elseif (array_key_exists("menuReservation", $context)) {
                        // line 47
                        echo "                   <title>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("information.reservation"), "html", null, true);
                        echo "  
                       ";
                        // line 48
                        if ((!twig_test_empty($this->getAttribute($this->getContext($context, "meta"), "metatitrefr")))) {
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meta"), "metatitrefr"), "html", null, true);
                            echo " ";
                        } else {
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meta"), "nomfr"), "html", null, true);
                            echo " ";
                        }
                        echo " | Global Réservation</title>
                       <meta name=\"keywords\" content=\"";
                        // line 49
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meta"), "metakeywordsfr"), "html", null, true);
                        echo "\" />
                       <meta name=\"description\" content=\"Réservez, faites une réservation ou demandez de l'information pour ";
                        // line 50
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meta"), "nomfr"), "html", null, true);
                        echo " dans la ville de ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "meta"), "villeid"), "nomfr"), "html", null, true);
                        echo " dans la région touristique de ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "meta"), "regionid"), "nomfr"), "html", null, true);
                        echo ".\" />  
                ";
                    } else {
                        // line 52
                        echo "                   <title>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("direction.routiere"), "html", null, true);
                        echo "  
                       ";
                        // line 53
                        if ((!twig_test_empty($this->getAttribute($this->getContext($context, "meta"), "metatitrefr")))) {
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meta"), "metatitrefr"), "html", null, true);
                            echo " ";
                        } else {
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meta"), "nomfr"), "html", null, true);
                            echo " ";
                        }
                        echo " | Global Réservation</title>
                       <meta name=\"keywords\" content=\"";
                        // line 54
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meta"), "metakeywordsfr"), "html", null, true);
                        echo "\" />
                       <meta name=\"description\" content=\"Suite à votre réservation au ";
                        // line 55
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meta"), "nomfr"), "html", null, true);
                        echo " dans la ville de ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "meta"), "villeid"), "nomfr"), "html", null, true);
                        echo " dans la région touristique de ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "meta"), "regionid"), "nomfr"), "html", null, true);
                        echo ", vous aurez besoin des directions routières pour vous rendre au ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meta"), "nomfr"), "html", null, true);
                        echo ".\" />             
                ";
                    }
                    // line 57
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meta'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 58
                echo "        ";
            }
            // line 59
            echo "    ";
        }
        echo "   

";
        // line 63
        echo "    \t
    ";
        // line 64
        if (array_key_exists("metaaccueilfr", $context)) {
            // line 65
            echo "        <title>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "metaaccueilfr"), "titre_accueil_fr"), "html", null, true);
            echo " | Global Réservation </title>
        <meta content=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "metaaccueilfr"), "texte_accueil_meta_fr"), "html", null, true);
            echo "\" name=\"description\" />                
    ";
        } elseif (array_key_exists("metaaccueilprov", $context)) {
            // line 68
            echo "        <title> ";
            if (array_key_exists("titleProvince", $context)) {
                echo " Province ";
            } else {
                echo " Région ";
            }
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "metaaccueilprov"), "nomfr"), "html", null, true);
            echo " | Global Réservation </title>
        <meta content=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "metaaccueilprov"), "pagemetadescriptionfr"), "html", null, true);
            echo "\" name=\"description\" />               
    ";
        } elseif (array_key_exists("metahebergementfr", $context)) {
            // line 71
            echo "        <title>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "metahebergementfr"), "titre_hebergement_fr"), "html", null, true);
            echo " | Global Réservation </title>
        <meta content=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "metahebergementfr"), "texte_accueil_hebergement_meta_fr"), "html", null, true);
            echo "\" name=\"description\" />              
    ";
        } elseif (array_key_exists("metahebergementcat", $context)) {
            // line 73
            echo "         
                 <title>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "metahebergementcat"), "page_titre_fr"), "html", null, true);
            echo " | Global Réservation </title>
                 <meta content=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "metahebergementcat"), "page_metadescription_fr"), "html", null, true);
            echo "\" name=\"description\" />             
    ";
        } elseif ((array_key_exists("metahebergementenfant", $context) && (!twig_test_empty($this->getContext($context, "metahebergementenfant"))))) {
            // line 76
            echo "            
                 <title>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "metahebergementenfant"), "pagetitrefr"), "html", null, true);
            echo " | Global Réservation </title>
                 <meta content=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "metahebergementenfant"), "pagemetadescriptionfr"), "html", null, true);
            echo "\" name=\"description\" />             
    ";
        } elseif (array_key_exists("metahebergementregion", $context)) {
            // line 79
            echo "            
                 <title>";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergements"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "metahebergementregion"), "titrefr"), "html", null, true);
            echo " | Global Réservation </title>
                 <meta content=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "metahebergementregion"), "pagemetadescriptionfr"), "html", null, true);
            echo "\" name=\"description\" />             
    ";
        } elseif (array_key_exists("metahebergementville", $context)) {
            // line 82
            echo "            
                 <title>";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
            echo " ville ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "villeid"), "nomfr"), "html", null, true);
            echo " | Global Réservation </title>
                 ";
            // line 84
            if (twig_test_empty($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "villeid"), "pagemetadescriptionfr"))) {
                // line 85
                echo "                    <meta content=\"Réservez en ligne ou par téléphone gratuitement une chambre dans un hébergement de 1, 2, 3, 4 et même 5 étoiles dans la ville ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "villeid"), "nomfr"), "html", null, true);
                echo ", un vaste choix s'offre à vous quelque soit votre budget\" name=\"description\" /> 
                 ";
            } else {
                // line 87
                echo "                    <meta content=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "villeid"), "pagemetadescriptionfr"), "html", null, true);
                echo "\" name=\"description\" /> 
                 ";
            }
            // line 88
            echo "            
    ";
        } elseif (array_key_exists("metaforfaitenfant", $context)) {
            // line 89
            echo "            
                 <title>";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "metaforfaitenfant"), "meta_titre_fr"), "html", null, true);
            echo " | Global Réservation </title>
                 <meta content=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "metaforfaitenfant"), "page_metadescription_fr"), "html", null, true);
            echo "\" name=\"description\" />             
    ";
        } elseif (array_key_exists("metahebergementtypeville", $context)) {
            // line 92
            echo "            
                 <title>";
            // line 93
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "clientAleatoire"), "categoriehebergementid"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                echo " ville ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "villeid"), "nomfr"), "html", null, true);
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            echo " | Global Réservation </title>
                 <meta content=\"";
            // line 94
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "clientAleatoire"), "categoriehebergementid"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                echo "Réservez en ligne ou par téléphone gratuitement un hébergement de type ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nomfr"), "html", null, true);
                echo " dans la ville ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "villeid"), "nomfr"), "html", null, true);
                echo " des hébergements pour tous les goûts de 1, 2, 3, 4 et 5 étoiles et pour tous les budgets ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            echo "\" name=\"description\" />               
    ";
        } elseif (array_key_exists("metaforfaitfr", $context)) {
            // line 96
            echo "        <title> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "metaforfaitfr"), "titre_forfait_fr"), "html", null, true);
            echo " | Global Réservation </title>
        <meta content=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "metaforfaitfr"), "texte_accueil_forfait_meta_fr"), "html", null, true);
            echo "\" name=\"description\" />         
    ";
        } elseif (array_key_exists("metaforfait", $context)) {
            // line 99
            echo "        <title>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forfait"), "html", null, true);
            echo " ";
            if (array_key_exists("titleProvince", $context)) {
                echo " province ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "provinceid"), "nomfr"), "html", null, true);
                echo " ";
            } elseif (array_key_exists("titleRegion", $context)) {
                echo " région ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "regionid"), "nomfr"), "html", null, true);
                echo "  ";
            } else {
                echo " ville ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "villeid"), "nomfr"), "html", null, true);
                echo " ";
            }
            echo " | Global Réservation </title>
        <meta content=\"";
            // line 100
            if (array_key_exists("titleProvince", $context)) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "provinceid"), "pagemetadescriptionfr"), "html", null, true);
                echo " ";
            } elseif (array_key_exists("titleRegion", $context)) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "regionid"), "pagemetadescriptionfr"), "html", null, true);
                echo "  ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "villeid"), "pagemetadescriptionfr"), "html", null, true);
                echo " ";
            }
            echo "\" name=\"description\" />      
    ";
        } elseif ((array_key_exists("metaforfaitcategorieregionfr", $context) && (!twig_test_empty($this->getContext($context, "metaforfaitcategorieregionfr"))))) {
            // line 102
            echo "        <title>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forfait"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "metaforfaitcategorieregionfr"), "pagetitrefr"), "html", null, true);
            echo "  | Global Réservation </title>
        <meta content=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "metaforfaitcategorieregionfr"), "pagemetadescriptionfr"), "html", null, true);
            echo "\" name=\"description\" />       
    ";
        } elseif (array_key_exists("metaforfaitcategorieville", $context)) {
            // line 105
            echo "        <title>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forfait"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "forfaitclientid"), "nomfr"), "html", null, true);
            echo " ville ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "villeid"), "nomfr"), "html", null, true);
            echo " | Global Réservation </title>
        <meta content=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "villeid"), "pagemetadescriptionfr"), "html", null, true);
            echo "\" name=\"description\" />       
    ";
        } elseif (array_key_exists("metacorpofr", $context)) {
            // line 107
            echo "  
        <title>";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "metacorpofr"), "titre_corporatif_fr"), "html", null, true);
            echo " | Global Réservation </title>
        <meta content=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "metacorpofr"), "texte_accueil_corporatif_meta_fr"), "html", null, true);
            echo "\" name=\"description\" />                          
    ";
        } elseif (array_key_exists("pageStatic", $context)) {
            // line 110
            echo "  
        <title>";
            // line 111
            echo twig_escape_filter($this->env, $this->getContext($context, "titlefr"), "html", null, true);
            echo " | Global Réservation </title>
        <meta content=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->getContext($context, "metafr"), "html", null, true);
            echo "\" name=\"description\" />                    
    ";
        } elseif ((array_key_exists("metacorpogeneriquefr", $context) && twig_test_empty($this->getContext($context, "specific")))) {
            // line 114
            echo "        <title>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "metacorpogeneriquefr"), "titre_corporatif_fr"), "html", null, true);
            echo " | Global Réservation </title>
        <meta content=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "metacorpogeneriquefr"), "texte_accueil_corporatif_meta_fr"), "html", null, true);
            echo "\" name=\"description\" />  
    ";
        } elseif ((array_key_exists("metacorpogeneriquefr", $context) && (!twig_test_empty($this->getContext($context, "specific"))))) {
            // line 117
            echo "        <title>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "metacorpogeneriquefr"), "pagetitrefr"), "html", null, true);
            echo " | Global Réservation </title>
        <meta content=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "metacorpogeneriquefr"), "pagemetadescriptionfr"), "html", null, true);
            echo "\" name=\"description\" />          
    ";
        } elseif (array_key_exists("metacorpoprovince", $context)) {
            // line 119
            echo "                              
        <title>";
            // line 120
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("corporatif.evenement"), "html", null, true);
            echo " province ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "provinceid"), "nomfr"), "html", null, true);
            echo " | Global Réservation </title>
        <meta content=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "provinceid"), "pagemetadescriptionfr"), "html", null, true);
            echo "\" name=\"description\" />       
    ";
        } elseif (array_key_exists("metacorporegion", $context)) {
            // line 122
            echo "                                
        <title>";
            // line 123
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("corporatif.evenement"), "html", null, true);
            echo " région ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "regionid"), "nomfr"), "html", null, true);
            echo " | Global Réservation </title>
        <meta content=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "regionid"), "pagemetadescriptionfr"), "html", null, true);
            echo "\" name=\"description\" />       
    ";
        } elseif (array_key_exists("metacorpoville", $context)) {
            // line 125
            echo "                                
        <title>";
            // line 126
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("corporatif.evenement"), "html", null, true);
            echo " ville ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "villeid"), "nomfr"), "html", null, true);
            echo " | Global Réservation </title>
        <meta content=\"";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "sallecorporativehebergement"), "villeid"), "pagemetadescriptionfr"), "html", null, true);
            echo "\" name=\"description\" />       
    ";
        } elseif (array_key_exists("metapromofr", $context)) {
            // line 129
            echo "        ";
            if (array_key_exists("destinationregion", $context)) {
                // line 130
                echo "        <title>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "metapromofr"), "titre_promotion_fr"), "html", null, true);
                echo " région ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "regionid"), "nomfr"), "html", null, true);
                echo " | Global Réservation </title>
        ";
            } elseif (array_key_exists("destinationprovince", $context)) {
                // line 132
                echo "        <title>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "metapromofr"), "titre_promotion_fr"), "html", null, true);
                echo " province ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "hebergementid"), "provinceid"), "nomfr"), "html", null, true);
                echo " | Global Réservation </title>
        ";
            } else {
                // line 134
                echo "        <title>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "metapromofr"), "titre_promotion_fr"), "html", null, true);
                echo " | Global Réservation </title>
        ";
            }
            // line 136
            echo "        <meta content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "metapromofr"), "texte_accueil_promotion_meta_fr"), "html", null, true);
            echo "\" name=\"description\" />         
    ";
        } elseif (array_key_exists("metasantefr", $context)) {
            // line 138
            echo "        <title>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "metasantefr"), "titre_sante_fr"), "html", null, true);
            echo " | Global Réservation </title>
        <meta content=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "metasantefr"), "texte_accueil_sante_meta_fr"), "html", null, true);
            echo "\" name=\"description\" />      
    ";
        } elseif (array_key_exists("metaattraitfr", $context)) {
            // line 141
            echo "        <title>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "metaattraitfr"), "titre_attrait_fr"), "html", null, true);
            echo " | Global Réservation </title>
        <meta content=\"";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "metaattraitfr"), "texte_accueil_attrait_meta_fr"), "html", null, true);
            echo "\" name=\"description\" />      
    ";
        } elseif (array_key_exists("metarestofr", $context)) {
            // line 144
            echo "        <title>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "metarestofr"), "titre_restaurant_fr"), "html", null, true);
            echo " | Global Réservation </title>
        <meta content=\"";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "metarestofr"), "texte_accueil_restaurant_meta_fr"), "html", null, true);
            echo "\" name=\"description\" />    
    ";
        } elseif (array_key_exists("sansItem", $context)) {
            // line 147
            echo "        <title>";
            echo twig_escape_filter($this->env, $this->getContext($context, "titrefrsansitem"), "html", null, true);
            echo " | Global Réservation </title>
        <meta content=\"";
            // line 148
            if (array_key_exists("metadescriptionfr", $context)) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getContext($context, "metadescriptionfr"), "html", null, true);
                echo " ";
            }
            echo "\" name=\"description\" />       
    ";
        }
    }

    public function getTemplateName()
    {
        return "::meta_lang_fr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  746 => 148,  741 => 147,  736 => 145,  731 => 144,  726 => 142,  721 => 141,  716 => 139,  711 => 138,  705 => 136,  699 => 134,  691 => 132,  683 => 130,  680 => 129,  675 => 127,  669 => 126,  666 => 125,  661 => 124,  655 => 123,  652 => 122,  647 => 121,  641 => 120,  638 => 119,  633 => 118,  628 => 117,  623 => 115,  618 => 114,  613 => 112,  609 => 111,  606 => 110,  601 => 109,  597 => 108,  594 => 107,  589 => 106,  580 => 105,  575 => 103,  568 => 102,  551 => 100,  532 => 99,  527 => 97,  522 => 96,  506 => 94,  491 => 93,  488 => 92,  483 => 91,  479 => 90,  476 => 89,  472 => 88,  466 => 87,  460 => 85,  458 => 84,  452 => 83,  449 => 82,  444 => 81,  438 => 80,  435 => 79,  430 => 78,  426 => 77,  423 => 76,  418 => 75,  414 => 74,  411 => 73,  406 => 72,  401 => 71,  396 => 69,  385 => 68,  380 => 66,  375 => 65,  373 => 64,  370 => 63,  364 => 59,  361 => 58,  355 => 57,  344 => 55,  340 => 54,  328 => 53,  323 => 52,  314 => 50,  310 => 49,  298 => 48,  293 => 47,  284 => 45,  280 => 44,  268 => 43,  263 => 42,  254 => 40,  250 => 39,  238 => 38,  233 => 37,  224 => 35,  220 => 34,  208 => 33,  203 => 32,  192 => 30,  188 => 29,  176 => 28,  171 => 27,  160 => 25,  156 => 24,  144 => 23,  139 => 22,  130 => 20,  126 => 19,  114 => 18,  110 => 17,  107 => 16,  94 => 15,  90 => 14,  78 => 13,  73 => 12,  54 => 10,  50 => 9,  38 => 8,  33 => 7,  30 => 6,  25 => 5,  22 => 4,  19 => 3,  17 => 2,);
    }
}

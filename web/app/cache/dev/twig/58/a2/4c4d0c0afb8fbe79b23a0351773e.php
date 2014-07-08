<?php

/* ::reservation_en_ligne.html.twig */
class __TwigTemplate_58a24c4d0c0afb8fbe79b23a0351773e extends Twig_Template
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
        echo " 
\t<form name=\"grpaidbooking_form\" id=\"grpaidbooking_form\" method=\"post\" action=\"http://reservation.global-reservation.com/reservit/reserhotel.php?action=list-avail\" rel=\"nofollow\" target=\"_blank\">\t\t\t\t
\t\t<div class=\"titlereservation\">";
        // line 3
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
            echo " <p>Réservation en ligne</p> ";
        } else {
            echo " <p>Online reservation</p> ";
        }
        echo "</div>
\t\t<label>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("pays"), "html", null, true);
        echo "</label>
\t\t";
        // line 5
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
            // line 6
            echo "\t\t<select name=\"reservationpays\" class=\"reservationpays\">
\t\t\t";
            // line 7
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "reservationPays"));
            foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
                echo "\t\t\t
\t\t\t\t<option value=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "id"), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nom_fr"), "html", null, true);
                echo "</option>\t\t\t\t
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 10
            echo "\t\t</select>
\t\t";
        } else {
            // line 12
            echo "\t\t<select name=\"reservationpays\" class=\"reservationpays\">
\t\t\t";
            // line 13
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "reservationPays"));
            foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
                // line 14
                echo "\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "id"), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nom_en"), "html", null, true);
                echo "</option>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 16
            echo "\t\t</select>
\t\t";
        }
        // line 18
        echo "\t\t<label>Province</label>
\t\t\t";
        // line 19
        $this->env->loadTemplate("MyAppGlobalBundle:Corpo_&_events:reservationprovince.html.twig")->display($context);
        // line 20
        echo "\t\t<label>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("region"), "html", null, true);
        echo "</label>
\t\t\t";
        // line 21
        $this->env->loadTemplate("MyAppGlobalBundle:Corpo_&_events:reservationregion.xml.twig")->display(array_merge($context, array("reservationRegionAjax" => $this->getContext($context, "reservationRegionAjax"))));
        // line 22
        echo "\t\t<label class=\"labelTemp\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ville"), "html", null, true);
        echo "</label>
\t\t\t";
        // line 23
        $this->env->loadTemplate("MyAppGlobalBundle:Corpo_&_events:reservationville.xml.twig")->display(array_merge($context, array("reservationVilleAjax" => $this->getContext($context, "reservationVilleAjax"))));
        // line 24
        echo "\t\t";
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
            // line 25
            echo "\t\t\t<label>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("date.arrivee"), "html", null, true);
            echo "</label>
\t\t\t<select id=\"jourReservation\" name=\"jourReservation\">
\t\t\t\t<script>
\t\t\t\t\tfor(i = 1; i <= 31; i++){
\t\t\t\t\t\tdocument.write(\"<option value='\" + i + \"' >\" + i + \"</option>\");
\t\t\t\t\t}
\t\t\t\t</script>
\t\t\t</select>
\t\t\t<select id=\"moisReservation\" name=\"moisReservation\">
\t\t\t\t<script> 
\t\t\t\t\tfor(i = 1; i <= 12; i++){
\t\t\t\t\t\tif(i == 1){document.write(\"<option value='\" + i + \"' > janvier </option>\"); }
\t\t\t\t\t\telse if(i == 2){document.write(\"<option value='\" + i + \"' > février </option>\"); }
\t\t\t\t\t\telse if(i == 3){document.write(\"<option value='\" + i + \"' > mars </option>\"); }
\t\t\t\t\t\telse if(i == 4){document.write(\"<option value='\" + i + \"' > avril </option>\"); }
\t\t\t\t\t\telse if(i == 5){document.write(\"<option value='\" + i + \"' > mai </option>\"); }
\t\t\t\t\t\telse if(i == 6){document.write(\"<option value='\" + i + \"' > juin </option>\"); }
\t\t\t\t\t\telse if(i == 7){document.write(\"<option value='\" + i + \"' > juillet </option>\"); }
\t\t\t\t\t\telse if(i == 8){document.write(\"<option value='\" + i + \"' > août </option>\"); }
\t\t\t\t\t\telse if(i == 9){document.write(\"<option value='\" + i + \"' > septembre </option>\"); }
\t\t\t\t\t\telse if(i == 10){document.write(\"<option value='\" + i + \"' > octobre </option>\"); }
\t\t\t\t\t\telse if(i == 11){document.write(\"<option value='\" + i + \"' > novembre </option>\"); }
\t\t\t\t\t\telse if(i == 12){document.write(\"<option value='\" + i + \"' > décembre </option>\"); }\t\t 
\t\t\t\t\t}
\t\t\t\t</script>
\t\t\t</select>
\t\t\t<select id=\"anneeReservation\" name=\"anneeReservation\">
\t\t\t\t<script>
\t\t\t\tvar today = new Date();
\t\t\t\ty = today.getFullYear();
\t\t\t\t\tfor(y = today.getFullYear(); y <= (today.getFullYear() + 15); y++){
\t\t\t\t\t\tdocument.write(\"<option value='\" + y + \"' >\" + y + \"</option>\");
\t\t\t\t\t}
\t\t\t\t</script>
\t\t\t</select>
\t\t";
        } else {
            // line 61
            echo "\t\t\t<label>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("date.arrivee"), "html", null, true);
            echo "</label>
\t\t\t<select id=\"moisReservation\" name=\"moisReservation\">
\t\t\t\t<script> 
\t\t\t\t\tfor(i = 1; i <= 12; i++){
\t\t\t\t\t\tif(i == 1){document.write(\"<option value='\" + i + \"' > january </option>\"); }
\t\t\t\t\t\telse if(i == 2){document.write(\"<option value='\" + i + \"' > february </option>\"); }
\t\t\t\t\t\telse if(i == 3){document.write(\"<option value='\" + i + \"' > march </option>\"); }
\t\t\t\t\t\telse if(i == 4){document.write(\"<option value='\" + i + \"' > april </option>\"); }
\t\t\t\t\t\telse if(i == 5){document.write(\"<option value='\" + i + \"' > may </option>\"); }
\t\t\t\t\t\telse if(i == 6){document.write(\"<option value='\" + i + \"' > june </option>\"); }
\t\t\t\t\t\telse if(i == 7){document.write(\"<option value='\" + i + \"' > jully </option>\"); }
\t\t\t\t\t\telse if(i == 8){document.write(\"<option value='\" + i + \"' > august </option>\"); }
\t\t\t\t\t\telse if(i == 9){document.write(\"<option value='\" + i + \"' > september </option>\"); }
\t\t\t\t\t\telse if(i == 10){document.write(\"<option value='\" + i + \"' > october </option>\"); }
\t\t\t\t\t\telse if(i == 11){document.write(\"<option value='\" + i + \"' > november </option>\"); }
\t\t\t\t\t\telse if(i == 12){document.write(\"<option value='\" + i + \"' > december </option>\"); }\t\t 
\t\t\t\t\t}
\t\t\t\t</script>
\t\t\t</select>
\t\t\t<select id=\"jourReservation\" name=\"jourReservation\">
\t\t\t\t<script>
\t\t\t\t\tfor(i = 1; i <= 31; i++){
\t\t\t\t\t\tdocument.write(\"<option value='\" + i + \"' >\" + i + \"</option>\");
\t\t\t\t\t}
\t\t\t\t</script>
\t\t\t</select>
\t\t\t<select id=\"anneeReservation\" name=\"anneeReservation\">
\t\t\t\t<script>
\t\t\t\tvar today = new Date();
\t\t\t\tvar y = today.getFullYear();
\t\t\t\t\tfor(y = today.getFullYear(); y <= (today.getFullYear() + 15); y++){
\t\t\t\t\t\tdocument.write(\"<option value='\" + y + \"' >\" + y + \"</option>\");
\t\t\t\t\t}
\t\t\t\t</script>
\t\t\t</select>
\t\t";
        }
        // line 97
        echo "\t\t<label class=\"nombrenuit\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("nombre.de.nuits"), "html", null, true);
        echo "</label>
\t\t<select id=\"nombrenuit\" name=\"numbernight\">
\t\t\t<script>
\t\t\t\tfor(var i = 1; i <= 20; i++){
\t\t\t\t\tdocument.write(\"<option value='\" + i + \"' >\" + i + \"</option>\");
\t\t\t\t}
\t\t\t</script>
\t\t</select>
                <div>
                <a class=\"linkVMobile\" rel=\"nofollow\"  href=\"http://reservation.global-reservation.com/jreservit/welcomeXml.do?langcode=";
        // line 106
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale")), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("version.mobile"), "html", null, true);
        echo "\" >";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("version.mobile"), "html", null, true);
        echo "</a> 
                <a href=\"http://reservation.global-reservation.com/reservit/reserhotel.php?partid=6&action=adv-avail&langcode=";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale"), "html", null, true);
        echo "\" target=\"_blank\" id=\"submitReservit\" rel=\"nofollow\" >";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("reserver"), "html", null, true);
        echo "</a> <br />
                <a href=\"http://reservation.global-reservation.com/reservit/reserhotel.php?partid=6&action=adv-avail&langcode=";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale"), "html", null, true);
        echo "\" target=\"_blank\" id=\"submitReservitGeneral\" rel=\"nofollow\" >";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("rechercher.par.critere"), "html", null, true);
        echo "</a>              
                </div>
\t</form>
\t<div class=\"reservationglobal\">
\t\t<img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/pictoTelephone.gif"), "html", null, true);
        echo "\" width=\"37\" height=\"29\" />
\t\t<p>";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sans.frais"), "html", null, true);
        echo " : <a href=\"callTo:18777788977\" class=\"callTel\" title=\"N 1 877 778 8977\" > 1 877 778-8977</a></p>
                <p>Local : <a href=\"callTo:14182662165\" class=\"callTel\" title=\"N° 1-418-266-2165\" > 1-418-266-2165</a></p>
\t\t<p class=\"hacktelInternational\">International : <a href=\"callTo:0014182662165\" class=\"callTel\" title=\"N 001-418-266-2165\" > 001-418-266-2165</a></p>
\t</div>
\t<script>      
                if(\$(\"#formtopregion option\").length > 1)
                {
                    \$(\"#formtopprovince option:first\").attr(\"selected\", \"selected\");
                }
\t\tdocument.getElementById(\"jourReservation\").selectedIndex = (today.getDate() - 1);
\t\tdocument.getElementById(\"moisReservation\").selectedIndex = today.getMonth();
\t\t\$(function(){
\t\t\t  if(\$(\"#moisReservation option:selected\").val() < 10){
                                \$(\"#dtbegin\").attr('value', \$(\"#anneeReservation option:selected\").val()+'0'+\$(\"#moisReservation option:selected\").val()+\$(\"#jourReservation option:selected\").val());
\t\t\t  }
\t\t\t  else{
\t\t\t\t\$(\"#dtbegin\").attr('value', \$(\"#anneeReservation option:selected\").val()+\$(\"#moisReservation option:selected\").val()+\$(\"#jourReservation option:selected\").val());
\t\t\t  }                                                     
\t\t});
                
                var zoneIdMain = \"\";
                
                function ajusteDate(zone){                                                
                        var tab = new Array();
                        tab[0] = zone;
                        tab[1] = \$(\"#nombrenuit option:selected\").val(); 
                        tab[2] = \$(\"#jourReservation\").val();
                        tab[3] = \$(\"#moisReservation\").val();
                        tab[4] = \$(\"#anneeReservation\").val();   
                        return tab;
                }               
                //Province
                \$(\"#formtopprovince\").on(\"change\", function(){
                    zoneIdMain = \$(\"#formtopprovince\").val();
                    updatelink(ajusteDate(\$(\"#formtopprovince\").val()));
                });
                //Région
                \$(\"#formtopregion\").on(\"change\", function(){
                    zoneIdMain = \$(\"#formtopregion\").val();
                    updatelink(ajusteDate(zoneIdMain));
                });
                //Ville
                \$(\"#formtopville\").on(\"change\", function(){
                    zoneIdMain = \$(\"#formtopville\").val();                     
                    updatelink(ajusteDate(zoneIdMain));
                });
                              
                \$(\"#jourReservation\").on(\"change\", function(){                      
                    updatelink(ajusteDate(zoneIdMain));                
                });
                \$(\"#moisReservation\").on(\"change\", function(){                      
                    updatelink(ajusteDate(zoneIdMain));                
                });
                \$(\"#anneeReservation\").on(\"change\", function(){                      
                    updatelink(ajusteDate(zoneIdMain));                
                });
                \$(\"#nombrenuit\").on(\"change\", function(){                      
                    updatelink(ajusteDate(zoneIdMain));                
                });
                
                var updatelink = function(tabresult)
                {   
                    var lang = \"";
        // line 175
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale")), "html", null, true);
        echo "\";   
                    var zoneid2 = tabresult[0];
                    var nbnuit2 = tabresult[1];
                    var jour = tabresult[2];
                    var mois = tabresult[3];
                    var annee = tabresult[4];
                    \$(\"#submitReservit\").attr(\"href\",\"http://reservation.global-reservation.com/reservit/reserhotel.php?action=list-avail&lang=\"+lang+\"&zoneid=\"+zoneid2+\"&nbnights=\"+nbnuit2+\"&fday=\"+jour+\"&fmonth=\"+mois+\"&fyear=\"+annee);                    
                }
                \t
\t</script>
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t";
    }

    public function getTemplateName()
    {
        return "::reservation_en_ligne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 112,  203 => 107,  182 => 97,  142 => 61,  102 => 25,  99 => 24,  97 => 23,  92 => 22,  90 => 21,  85 => 20,  83 => 19,  80 => 18,  35 => 6,  33 => 5,  21 => 3,  126 => 42,  110 => 33,  104 => 32,  91 => 28,  86 => 27,  82 => 26,  78 => 24,  76 => 16,  62 => 16,  58 => 12,  50 => 13,  43 => 9,  39 => 8,  30 => 5,  26 => 4,  22 => 3,  17 => 1,  639 => 163,  634 => 160,  631 => 159,  628 => 158,  613 => 155,  610 => 154,  604 => 152,  593 => 150,  591 => 149,  583 => 148,  580 => 147,  575 => 146,  573 => 145,  564 => 142,  551 => 141,  543 => 139,  538 => 138,  535 => 137,  532 => 136,  529 => 135,  514 => 132,  511 => 131,  505 => 129,  494 => 127,  492 => 126,  484 => 125,  481 => 124,  476 => 123,  474 => 122,  465 => 119,  452 => 118,  444 => 116,  439 => 115,  436 => 114,  434 => 113,  429 => 111,  424 => 110,  419 => 108,  413 => 105,  407 => 98,  393 => 12,  385 => 11,  380 => 169,  378 => 168,  372 => 164,  367 => 109,  365 => 108,  359 => 105,  356 => 104,  353 => 102,  350 => 101,  343 => 98,  340 => 96,  333 => 92,  325 => 90,  321 => 89,  316 => 88,  313 => 86,  311 => 85,  300 => 84,  293 => 69,  290 => 68,  287 => 175,  285 => 66,  277 => 63,  274 => 62,  272 => 61,  267 => 59,  262 => 56,  254 => 52,  247 => 51,  244 => 50,  237 => 48,  234 => 47,  231 => 46,  217 => 40,  209 => 108,  207 => 37,  188 => 36,  176 => 35,  169 => 33,  160 => 27,  157 => 26,  114 => 24,  71 => 22,  69 => 21,  65 => 14,  61 => 13,  55 => 14,  52 => 13,  49 => 12,  42 => 10,  36 => 8,  27 => 2,  24 => 1,  426 => 138,  423 => 137,  416 => 131,  411 => 129,  409 => 128,  406 => 127,  401 => 66,  392 => 120,  388 => 118,  382 => 114,  370 => 110,  363 => 111,  351 => 109,  345 => 108,  341 => 106,  329 => 91,  322 => 103,  309 => 101,  305 => 100,  301 => 98,  289 => 96,  282 => 95,  270 => 60,  264 => 57,  259 => 55,  249 => 82,  242 => 77,  236 => 76,  229 => 45,  225 => 42,  222 => 113,  216 => 65,  208 => 64,  201 => 62,  195 => 106,  189 => 58,  181 => 57,  174 => 55,  168 => 54,  162 => 28,  154 => 50,  147 => 48,  141 => 47,  135 => 44,  129 => 43,  122 => 41,  117 => 38,  111 => 32,  105 => 31,  98 => 31,  93 => 29,  87 => 19,  79 => 18,  72 => 16,  66 => 15,  60 => 12,  57 => 15,  54 => 10,  47 => 11,  44 => 8,  40 => 9,  38 => 7,  34 => 6,  29 => 4,);
    }
}

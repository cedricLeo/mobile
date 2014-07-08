<?php

/* MyAppGlobalBundle:Hebergement:hebergement.html.twig */
class __TwigTemplate_e3e0740457eb6f43b07fe9116c9f1021 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base2.html.twig");

        $this->blocks = array(
            'picture' => array($this, 'block_picture'),
            'texte_accueil' => array($this, 'block_texte_accueil'),
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

    // line 3
    public function block_picture($context, array $blocks = array())
    {
        // line 4
        echo "\t\t<p class=\"legendeHome\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
        echo "</p>
\t\t";
        // line 6
        echo "\t\t<div id=\"photoprincipale\">
\t\t\t<div class=\"nomSousCategorie\">
\t\t\t  <h1>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
        echo " </h1>
                        ";
        // line 9
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
            // line 10
            echo "                        <h3><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "clientAleatoire"), "repertoirefr")))), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
            echo " région ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "nomfr"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "clientAleatoire"), "nomfr"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "clientAleatoire"), "nomfr"), "html", null, true);
            echo " - région ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "nomfr"), "html", null, true);
            echo "</a></h3>
\t\t\t</div>
\t\t\t\t";
            // line 12
            if (($this->getAttribute($this->getContext($context, "clientAleatoire"), "photopayante") != "")) {
                // line 13
                echo "\t\t  \t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/hebergement/photo_payante/photo_payante"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "clientAleatoire"), "id"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "clientAleatoire"), "photopayante"), "html", null, true);
                echo "\" class=\"big_picture\" alt=\"Hébergement - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "clientAleatoire"), "nomfr"), "html", null, true);
                echo "\" />
\t\t\t\t";
            } else {
                // line 15
                echo "                                ";
                // line 16
                echo "\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/PhotoHebNouveauSite.jpg"), "html", null, true);
                echo "\" alt=\"Image de remplacement pour ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "clientAleatoire"), "nomfr"), "html", null, true);
                echo " \">
\t\t\t\t";
            }
            // line 18
            echo "\t\t\t";
        } else {
            // line 19
            echo "\t\t\t<h3><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "clientAleatoire"), "repertoireen")))), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "nomen"), "html", null, true);
            echo " region - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "clientAleatoire"), "nomen"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "clientAleatoire"), "nomen"), "html", null, true);
            echo " - region ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "clientAleatoire"), "regionid"), "nomen"), "html", null, true);
            echo "</a></h3>
\t\t\t</div>
\t\t\t\t";
            // line 21
            if (($this->getAttribute($this->getContext($context, "clientAleatoire"), "photopayante") != "")) {
                // line 22
                echo "\t\t \t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/hebergement/photo_payante/photo_payante"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "clientAleatoire"), "id"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "clientAleatoire"), "photopayante"), "html", null, true);
                echo "\" class=\"big_picture\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "clientAleatoire"), "nomen"), "html", null, true);
                echo " - accommodation \" />
\t\t\t\t";
            } else {
                // line 24
                echo "\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/PhotoHebNouveauSite.jpg"), "html", null, true);
                echo "\" alt=\"Replacement image for ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "clientAleatoire"), "nomen"), "html", null, true);
                echo " \">
\t\t\t\t";
            }
            // line 26
            echo "\t\t\t";
        }
        // line 27
        echo "\t\t</div>
\t\t";
    }

    // line 31
    public function block_texte_accueil($context, array $blocks = array())
    {
        // line 32
        echo "                    ";
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
            echo "                        
                            <p>";
            // line 33
            echo nl2br(twig_escape_filter($this->env, strip_tags($this->getContext($context, "texte_accueilfr")), "html", null, true));
            echo "</p>
                    ";
        } else {
            // line 34
            echo "\t
                            <p>";
            // line 35
            echo nl2br(twig_escape_filter($this->env, strip_tags($this->getContext($context, "texte_accueilen")), "html", null, true));
            echo "</p>
                    ";
        }
        // line 37
        echo "\t\t";
    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        echo " 
\t\t<div class=\"region\">
       \t\t<h2>";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("choisir.endroit.profiter.hebergement"), "html", null, true);
        echo "</h2>
       \t\t";
        // line 42
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
            echo "         
                              <ul>\t\t
                                        ";
            // line 44
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "regionqc"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["nomprovinceqc"]) {
                // line 45
                echo "                                        ";
                if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                    // line 46
                    echo "\t\t\t        \t<li class=\"province\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovincefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceqc"), "provinceid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                    echo " - province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceqc"), "provinceid"), "nomfr"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceqc"), "provinceid"), "nomfr"), "html", null, true);
                    echo "</a></li>
\t\t\t        \t";
                }
                // line 48
                echo "\t\t\t\t        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceqc"), "regionid"), "repertoirefr")))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceqc"), "regionid"), "nomfr"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceqc"), "regionid"), "nomfr"), "html", null, true);
                echo "</a></li>
\t\t\t\t        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nomprovinceqc'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 50
            echo "\t\t\t      </ul>
\t\t\t      <ul>\t
\t\t\t      \t\t";
            // line 52
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "regionon"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["nomprovinceon"]) {
                // line 53
                echo "\t\t\t      \t\t";
                if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                    // line 54
                    echo "\t\t\t\t        <li class=\"province\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovincefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceon"), "provinceid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                    echo " - province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceon"), "provinceid"), "nomfr"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceon"), "provinceid"), "nomfr"), "html", null, true);
                    echo "</a></li>
\t\t\t\t        ";
                }
                // line 56
                echo "\t\t\t\t        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceon"), "regionid"), "repertoirefr")))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceon"), "regionid"), "nomfr"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceon"), "regionid"), "nomfr"), "html", null, true);
                echo "</a></li>
\t\t\t\t        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nomprovinceon'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 58
            echo "\t\t\t      </ul>
\t\t\t      <ul>
\t\t\t      \t\t";
            // line 60
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "regionnb"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["nomprovincenb"]) {
                // line 61
                echo "\t\t\t      \t\t";
                if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                    // line 62
                    echo "\t\t\t\t        <li class=\"province\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovincefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "provinceid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                    echo " - province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "provinceid"), "nomfr"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "provinceid"), "nomfr"), "html", null, true);
                    echo "</a></li>
\t\t\t\t        ";
                }
                // line 64
                echo "\t\t\t\t        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "regionid"), "repertoirefr")))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "regionid"), "nomfr"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "regionid"), "nomfr"), "html", null, true);
                echo "</a></li>
\t\t\t\t        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nomprovincenb'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 66
            echo "\t\t\t      </ul>
                              <ul>\t\t
                                        ";
            // line 68
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "regional"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["nomprovinceal"]) {
                // line 69
                echo "                                        ";
                if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                    // line 70
                    echo "\t\t\t        \t<li class=\"province\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovincefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceal"), "provinceid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                    echo " - province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceal"), "provinceid"), "nomfr"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceal"), "provinceid"), "nomfr"), "html", null, true);
                    echo "</a></li>
\t\t\t        \t";
                }
                // line 72
                echo "\t\t\t\t        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceal"), "regionid"), "repertoirefr")))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceal"), "regionid"), "nomfr"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceal"), "regionid"), "nomfr"), "html", null, true);
                echo "</a></li>
\t\t\t\t        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nomprovinceal'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 74
            echo "\t\t\t      </ul>
                               <ul>\t\t
                                        ";
            // line 76
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "regioncb"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["nomprovinceal"]) {
                // line 77
                echo "                                        ";
                if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                    // line 78
                    echo "\t\t\t        \t<li class=\"province\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovincefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceal"), "provinceid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                    echo " - province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceal"), "provinceid"), "nomfr"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceal"), "provinceid"), "nomfr"), "html", null, true);
                    echo "</a></li>
\t\t\t        \t";
                }
                // line 80
                echo "\t\t\t\t        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceal"), "regionid"), "repertoirefr")))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceal"), "regionid"), "nomfr"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceal"), "regionid"), "nomfr"), "html", null, true);
                echo "</a></li>
\t\t\t\t        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nomprovinceal'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 82
            echo "\t\t\t      </ul>
                               <ul>\t\t
                                        ";
            // line 84
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "regionsa"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["nomprovinceal"]) {
                // line 85
                echo "                                        ";
                if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                    // line 86
                    echo "\t\t\t        \t<li class=\"province\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovincefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceal"), "provinceid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                    echo " - province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceal"), "provinceid"), "nomfr"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceal"), "provinceid"), "nomfr"), "html", null, true);
                    echo "</a></li>
\t\t\t        \t";
                }
                // line 88
                echo "\t\t\t\t        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceal"), "regionid"), "repertoirefr")))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceal"), "regionid"), "nomfr"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceal"), "regionid"), "nomfr"), "html", null, true);
                echo "</a></li>
\t\t\t\t        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nomprovinceal'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 90
            echo "\t\t\t      </ul>
                              <ul>\t\t
                                        ";
            // line 92
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "regionip"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["nomprovinceal"]) {
                // line 93
                echo "                                        ";
                if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                    // line 94
                    echo "\t\t\t        \t<li class=\"province\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovincefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceal"), "provinceid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                    echo " - province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceal"), "provinceid"), "nomfr"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceal"), "provinceid"), "nomfr"), "html", null, true);
                    echo "</a></li>
\t\t\t        \t";
                }
                // line 96
                echo "\t\t\t\t        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceal"), "regionid"), "repertoirefr")))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceal"), "regionid"), "nomfr"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceal"), "regionid"), "nomfr"), "html", null, true);
                echo "</a></li>
\t\t\t\t        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nomprovinceal'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 98
            echo "\t\t\t      </ul>
                               <ul>\t\t
                                        ";
            // line 100
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "regiontn"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["nomprovinceal"]) {
                // line 101
                echo "                                        ";
                if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                    // line 102
                    echo "\t\t\t        \t<li class=\"province\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovincefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceal"), "provinceid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                    echo " - province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceal"), "provinceid"), "nomfr"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceal"), "provinceid"), "nomfr"), "html", null, true);
                    echo "</a></li>
\t\t\t        \t";
                }
                // line 104
                echo "\t\t\t\t        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceal"), "regionid"), "repertoirefr")))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceal"), "regionid"), "nomfr"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceal"), "regionid"), "nomfr"), "html", null, true);
                echo "</a></li>
\t\t\t\t        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nomprovinceal'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 106
            echo "\t\t\t      </ul>
                               <ul>\t\t
                                        ";
            // line 108
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "regiontno"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["nomprovinceal"]) {
                // line 109
                echo "                                        ";
                if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                    // line 110
                    echo "\t\t\t        \t<li class=\"province\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovincefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceal"), "provinceid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                    echo " - province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceal"), "provinceid"), "nomfr"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceal"), "provinceid"), "nomfr"), "html", null, true);
                    echo "</a></li>
\t\t\t        \t";
                }
                // line 112
                echo "\t\t\t\t        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceal"), "regionid"), "repertoirefr")))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceal"), "regionid"), "nomfr"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceal"), "regionid"), "nomfr"), "html", null, true);
                echo "</a></li>
\t\t\t\t        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nomprovinceal'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 114
            echo "\t\t\t      </ul>
                               <ul>\t\t
                                        ";
            // line 116
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "regiontma"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["nomprovinceal"]) {
                // line 117
                echo "                                        ";
                if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                    // line 118
                    echo "\t\t\t        \t<li class=\"province\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovincefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceal"), "provinceid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                    echo " - province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceal"), "provinceid"), "nomfr"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceal"), "provinceid"), "nomfr"), "html", null, true);
                    echo "</a></li>
\t\t\t        \t";
                }
                // line 120
                echo "\t\t\t\t        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceal"), "regionid"), "repertoirefr")))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceal"), "regionid"), "nomfr"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceal"), "regionid"), "nomfr"), "html", null, true);
                echo "</a></li>
\t\t\t\t        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nomprovinceal'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 122
            echo "\t\t\t      </ul>
                              <ul>\t\t
                                        ";
            // line 124
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "regiontyc"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["nomprovinceal"]) {
                // line 125
                echo "                                        ";
                if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                    // line 126
                    echo "\t\t\t        \t<li class=\"province\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovincefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceal"), "provinceid"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                    echo " - province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceal"), "provinceid"), "nomfr"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceal"), "provinceid"), "nomfr"), "html", null, true);
                    echo "</a></li>
\t\t\t        \t";
                }
                // line 128
                echo "\t\t\t\t        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecfr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceal"), "regionid"), "repertoirefr")))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceal"), "regionid"), "nomfr"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceal"), "regionid"), "nomfr"), "html", null, true);
                echo "</a></li>
\t\t\t\t        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nomprovinceal'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 130
            echo "\t\t\t      </ul>
\t\t\t      <br class=\"clearfloat\" />
                              ";
            // line 133
            echo "                                   <div id=\"zone_01\" class=\"pubGoogleBottom pubGoogleAttrait\" >
                                         <script type='text/javascript'>
                                                 googletag.cmd.push(function() { googletag.display('zone_01'); });
                                         </script>
                                   </div>
\t\t\t";
        } else {
            // line 139
            echo "                              <ul>\t\t
                                        ";
            // line 140
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "regionqc"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["nomprovinceqc"]) {
                // line 141
                echo "                                        ";
                if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                    // line 142
                    echo "\t\t\t        \t<li class=\"province\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovinceen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceqc"), "provinceid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                    echo " - province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceqc"), "provinceid"), "nomen"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceqc"), "provinceid"), "nomen"), "html", null, true);
                    echo "</a></li>
\t\t\t        \t";
                }
                // line 144
                echo "\t\t\t\t        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceqc"), "regionid"), "repertoireen")))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceqc"), "regionid"), "nomen"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceqc"), "regionid"), "nomen"), "html", null, true);
                echo "</a></li>
\t\t\t\t        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nomprovinceqc'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 146
            echo "\t\t\t      </ul>
\t\t\t      <ul>\t
\t\t\t      \t\t";
            // line 148
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "regionon"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["nomprovinceon"]) {
                // line 149
                echo "\t\t\t      \t\t";
                if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                    // line 150
                    echo "\t\t\t\t        <li class=\"province\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovinceen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceon"), "provinceid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                    echo " - province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceon"), "provinceid"), "nomen"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceon"), "provinceid"), "nomen"), "html", null, true);
                    echo "</a></li>
\t\t\t\t        ";
                }
                // line 152
                echo "\t\t\t\t        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceon"), "regionid"), "repertoireen")))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceon"), "regionid"), "nomen"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovinceon"), "regionid"), "nomen"), "html", null, true);
                echo "</a></li>
\t\t\t\t        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nomprovinceon'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 154
            echo "\t\t\t      </ul>
\t\t\t      <ul>
\t\t\t      \t\t";
            // line 156
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "regionnb"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["nomprovincenb"]) {
                // line 157
                echo "\t\t\t      \t\t";
                if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                    // line 158
                    echo "\t\t\t\t        <li class=\"province\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovinceen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "provinceid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                    echo " - province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "provinceid"), "nomen"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "provinceid"), "nomen"), "html", null, true);
                    echo "</a></li>
\t\t\t\t        ";
                }
                // line 160
                echo "\t\t\t\t        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "regionid"), "repertoireen")))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "regionid"), "nomen"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "regionid"), "nomen"), "html", null, true);
                echo "</a></li>
\t\t\t\t        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nomprovincenb'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 162
            echo "\t\t\t      </ul>
                              <ul>
\t\t\t      \t\t";
            // line 164
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "regional"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["nomprovincenb"]) {
                // line 165
                echo "\t\t\t      \t\t";
                if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                    // line 166
                    echo "\t\t\t\t        <li class=\"province\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovinceen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "provinceid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                    echo " - province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "provinceid"), "nomen"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "provinceid"), "nomen"), "html", null, true);
                    echo "</a></li>
\t\t\t\t        ";
                }
                // line 168
                echo "\t\t\t\t        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "regionid"), "repertoireen")))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "regionid"), "nomen"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "regionid"), "nomen"), "html", null, true);
                echo "</a></li>
\t\t\t\t        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nomprovincenb'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 170
            echo "\t\t\t      </ul>
                              <ul>
\t\t\t      \t\t";
            // line 172
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "regioncb"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["nomprovincenb"]) {
                // line 173
                echo "\t\t\t      \t\t";
                if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                    // line 174
                    echo "\t\t\t\t        <li class=\"province\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovinceen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "provinceid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                    echo " - province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "provinceid"), "nomen"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "provinceid"), "nomen"), "html", null, true);
                    echo "</a></li>
\t\t\t\t        ";
                }
                // line 176
                echo "\t\t\t\t        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "regionid"), "repertoireen")))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "regionid"), "nomen"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "regionid"), "nomen"), "html", null, true);
                echo "</a></li>
\t\t\t\t        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nomprovincenb'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 178
            echo "\t\t\t      </ul>
                              <ul>
\t\t\t      \t\t";
            // line 180
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "regionsa"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["nomprovincenb"]) {
                // line 181
                echo "\t\t\t      \t\t";
                if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                    // line 182
                    echo "\t\t\t\t        <li class=\"province\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovinceen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "provinceid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                    echo " - province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "provinceid"), "nomen"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "provinceid"), "nomen"), "html", null, true);
                    echo "</a></li>
\t\t\t\t        ";
                }
                // line 184
                echo "\t\t\t\t        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "regionid"), "repertoireen")))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "regionid"), "nomen"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "regionid"), "nomen"), "html", null, true);
                echo "</a></li>
\t\t\t\t        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nomprovincenb'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 186
            echo "\t\t\t      </ul>
                              <ul>
\t\t\t      \t\t";
            // line 188
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "regionip"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["nomprovincenb"]) {
                // line 189
                echo "\t\t\t      \t\t";
                if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                    // line 190
                    echo "\t\t\t\t        <li class=\"province\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovinceen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "provinceid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                    echo " - province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "provinceid"), "nomen"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "provinceid"), "nomen"), "html", null, true);
                    echo "</a></li>
\t\t\t\t        ";
                }
                // line 192
                echo "\t\t\t\t        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "regionid"), "repertoireen")))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "regionid"), "nomen"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "regionid"), "nomen"), "html", null, true);
                echo "</a></li>
\t\t\t\t        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nomprovincenb'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 194
            echo "\t\t\t      </ul>
                              <ul>
\t\t\t      \t\t";
            // line 196
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "regiontn"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["nomprovincenb"]) {
                // line 197
                echo "\t\t\t      \t\t";
                if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                    // line 198
                    echo "\t\t\t\t        <li class=\"province\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovinceen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "provinceid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                    echo " - province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "provinceid"), "nomen"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "provinceid"), "nomen"), "html", null, true);
                    echo "</a></li>
\t\t\t\t        ";
                }
                // line 200
                echo "\t\t\t\t        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "regionid"), "repertoireen")))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "regionid"), "nomen"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "regionid"), "nomen"), "html", null, true);
                echo "</a></li>
\t\t\t\t        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nomprovincenb'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 202
            echo "\t\t\t      </ul>
                              <ul>
\t\t\t      \t\t";
            // line 204
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "regiontno"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["nomprovincenb"]) {
                // line 205
                echo "\t\t\t      \t\t";
                if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                    // line 206
                    echo "\t\t\t\t        <li class=\"province\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovinceen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "provinceid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                    echo " - province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "provinceid"), "nomen"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "provinceid"), "nomen"), "html", null, true);
                    echo "</a></li>
\t\t\t\t        ";
                }
                // line 208
                echo "\t\t\t\t        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "regionid"), "repertoireen")))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "regionid"), "nomen"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "regionid"), "nomen"), "html", null, true);
                echo "</a></li>
\t\t\t\t        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nomprovincenb'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 210
            echo "\t\t\t      </ul>
                              <ul>
\t\t\t      \t\t";
            // line 212
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "regiontma"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["nomprovincenb"]) {
                // line 213
                echo "\t\t\t      \t\t";
                if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                    // line 214
                    echo "\t\t\t\t        <li class=\"province\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovinceen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "provinceid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                    echo " - province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "provinceid"), "nomen"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "provinceid"), "nomen"), "html", null, true);
                    echo "</a></li>
\t\t\t\t        ";
                }
                // line 216
                echo "\t\t\t\t        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "regionid"), "repertoireen")))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "regionid"), "nomen"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "regionid"), "nomen"), "html", null, true);
                echo "</a></li>
\t\t\t\t        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nomprovincenb'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 218
            echo "\t\t\t      </ul>
                               <ul>
\t\t\t      \t\t";
            // line 220
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "regiontyc"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["nomprovincenb"]) {
                // line 221
                echo "\t\t\t      \t\t";
                if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                    // line 222
                    echo "\t\t\t\t        <li class=\"province\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementprovinceen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "provinceid"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                    echo " - province ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "provinceid"), "nomen"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "provinceid"), "nomen"), "html", null, true);
                    echo "</a></li>
\t\t\t\t        ";
                }
                // line 224
                echo "\t\t\t\t        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementregionsquebecen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "regionid"), "repertoireen")))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hebergement"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "regionid"), "nomen"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nomprovincenb"), "regionid"), "nomen"), "html", null, true);
                echo "</a></li>
\t\t\t\t        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nomprovincenb'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 226
            echo "\t\t\t      </ul>
\t\t\t       <br class=\"clearfloat\" />
                               ";
            // line 229
            echo "                                    <div id=\"zone_01\" class=\"pubGoogleBottom pubGoogleAttrait\" >
                                          <script type='text/javascript'>
                                                  googletag.cmd.push(function() { googletag.display('zone_01'); });
                                          </script>
                                    </div>
\t\t\t";
        }
        // line 235
        echo "\t\t  </div>
\t\t   
\t\t  ";
        // line 238
        echo "\t\t   <div class=\"categorie colonnes2 hackcss\">
\t\t \t <h2 class=\"childHackcss\">";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("category.hebergement"), "html", null, true);
        echo "</h2>                           
                    ";
        // line 240
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
            // line 241
            echo "                          ";
            // line 242
            echo "\t\t\t  ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "numbCat"));
            foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                echo "                                                                                      
\t            \t\t";
                // line 243
                if ((($this->getAttribute($this->getContext($context, "w"), "id") == 7) && $this->getAttribute((isset($context["hotel"]) ? $context["hotel"] : null), "repertoirefr", array(), "any", true, true))) {
                    // line 244
                    echo "\t            \t\t<div><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "hotel"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                    echo "- ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "hotel"), "nomfr"), "html", null, true);
                    echo "\" target=\"_blank\">
\t            \t \t\t ";
                    // line 245
                    if (($this->getAttribute($this->getContext($context, "hotel"), "photocategoriepayante") != "")) {
                        // line 246
                        echo "\t            \t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/hebergement/photo_categorie_payante/photo_categorie_payante"), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "hotel"), "id"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "hotel"), "photocategoriepayante"), "html", null, true);
                        echo "\" class=\"img_categoie_portail\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "hotel"), "nomfr"), "html", null, true);
                        echo "\" />
\t            \t\t\t\t";
                    } else {
                        // line 248
                        echo "\t            \t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/categorie_hebergement"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "id"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "image"), "html", null, true);
                        echo "\" class=\"img_categoie_portail\" alt=\"Image de remplacement pour ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "hotel"), "nomfr"), "html", null, true);
                        echo "\" />
\t            \t\t\t\t";
                    }
                    // line 250
                    echo "\t            \t\t\t </a> 
\t\t\t\t            <h2><a href=\"";
                    // line 251
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("category.hebergement"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr")), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                    echo "</a></h2>
\t\t\t\t            <p> ";
                    // line 252
                    echo twig_escape_filter($this->env, strip_tags(twig_convert_encoding($this->getAttribute($this->getContext($context, "w"), "resumefr"), "UTF-8", "UTF-8")), "html", null, true);
                    echo " </p>
\t\t\t\t            <h3 class=\"under_picture\"><a href=\"";
                    // line 253
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "hotel"), "repertoirefr")))), "html", null, true);
                    echo "\" target=\"_blank\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "hotel"), "nomfr"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getContext($context, "hotel"), "nomfr"), 30, "..."), "html", null, true);
                    echo "</a></h3>   
\t\t\t\t            <h4>[<a href=\"";
                    // line 254
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("see.more"), "html", null, true);
                    echo " </a>]</h4>
\t\t\t\t        </div>
\t\t\t\t        ";
                }
                // line 257
                echo "\t\t\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 258
            echo "                         ";
            // line 259
            echo "\t\t\t        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "numbCat"));
            foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                // line 260
                echo "\t            \t\t";
                if ((($this->getAttribute($this->getContext($context, "w"), "id") == 3) && $this->getAttribute((isset($context["gite"]) ? $context["gite"] : null), "repertoirefr", array(), "any", true, true))) {
                    // line 261
                    echo "\t            \t\t<div><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "gite"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                    echo "- ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "gite"), "nomfr"), "html", null, true);
                    echo " \" target=\"_blank\">
\t            \t \t\t ";
                    // line 262
                    if (($this->getAttribute($this->getContext($context, "gite"), "photocategoriepayante") != "")) {
                        // line 263
                        echo "\t            \t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/hebergement/photo_categorie_payante/photo_categorie_payante"), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "gite"), "id"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "gite"), "photocategoriepayante"), "html", null, true);
                        echo "\" class=\"img_categoie_portail\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "gite"), "nomfr"), "html", null, true);
                        echo "\" />
\t            \t\t\t\t";
                    } else {
                        // line 265
                        echo "\t            \t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/categorie_hebergement"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "id"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "image"), "html", null, true);
                        echo "\" class=\"img_categoie_portail\" alt=\"Image de remplacement pour ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "gite"), "nomfr"), "html", null, true);
                        echo "\" />
\t            \t\t\t\t";
                    }
                    // line 267
                    echo "\t            \t\t\t </a> 
\t\t\t\t            <h2><a href=\"";
                    // line 268
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("category.hebergement"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                    echo "</a></h2>
\t\t\t\t            <p> ";
                    // line 269
                    echo twig_escape_filter($this->env, strip_tags(twig_convert_encoding($this->getAttribute($this->getContext($context, "w"), "resumefr"), "UTF-8", "UTF-8")), "html", null, true);
                    echo "</p>
\t\t\t\t            <h3 class=\"under_picture\"><a href=\"";
                    // line 270
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "gite"), "repertoirefr")))), "html", null, true);
                    echo "\" target=\"_blank\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "gite"), "nomfr"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getContext($context, "gite"), "nomfr"), 30, "..."), "html", null, true);
                    echo "</a></h3>   
\t\t\t\t            <h4>[<a href=\"";
                    // line 271
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("see.more"), "html", null, true);
                    echo " </a>]</h4>
\t\t\t\t        </div>
\t\t\t\t       ";
                }
                // line 274
                echo "\t\t\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 275
            echo "                         ";
            // line 276
            echo "\t\t\t        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "numbCat"));
            foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                // line 277
                echo "\t            \t\t";
                if ((($this->getAttribute($this->getContext($context, "w"), "id") == 5) && $this->getAttribute((isset($context["residence"]) ? $context["residence"] : null), "repertoirefr", array(), "any", true, true))) {
                    // line 278
                    echo "\t            \t\t<div><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "residence"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                    echo "- ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "residence"), "nomfr"), "html", null, true);
                    echo " \" target=\"_blank\">
\t            \t \t\t ";
                    // line 279
                    if (($this->getAttribute($this->getContext($context, "residence"), "photocategoriepayante") != "")) {
                        // line 280
                        echo "\t            \t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/hebergement/photo_categorie_payante/photo_categorie_payante"), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "residence"), "id"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "residence"), "photocategoriepayante"), "html", null, true);
                        echo "\" class=\"img_categoie_portail\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "residence"), "nomfr"), "html", null, true);
                        echo "\" />
\t            \t\t\t\t";
                    } else {
                        // line 282
                        echo "\t            \t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/categorie_hebergement"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "id"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "image"), "html", null, true);
                        echo "\" class=\"img_categoie_portail\" alt=\"Image de remplacement pour ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "residence"), "nomfr"), "html", null, true);
                        echo "\" />
\t            \t\t\t\t";
                    }
                    // line 284
                    echo "\t            \t\t\t </a> 
\t\t\t\t            <h2><a href=\"";
                    // line 285
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("category.hebergement"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                    echo " </a></h2>
\t\t\t\t            <p>";
                    // line 286
                    echo twig_escape_filter($this->env, strip_tags(twig_convert_encoding($this->getAttribute($this->getContext($context, "w"), "resumefr"), "UTF-8", "UTF-8")), "html", null, true);
                    echo " </p>
\t\t\t\t            <h3 class=\"under_picture\"><a href=\"";
                    // line 287
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "residence"), "repertoirefr")))), "html", null, true);
                    echo "\" target=\"_blank\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "residence"), "nomfr"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getContext($context, "residence"), "nomfr"), 30, "..."), "html", null, true);
                    echo "</a></h3>   
\t\t\t\t            <h4>[<a href=\"";
                    // line 288
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("see.more"), "html", null, true);
                    echo " </a>]</h4>
\t\t\t\t        </div>
\t\t\t\t        ";
                }
                // line 291
                echo "\t\t\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 292
            echo "                         ";
            // line 293
            echo "\t\t\t ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "numbCat"));
            foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                // line 294
                echo "\t            \t\t";
                if ((($this->getAttribute($this->getContext($context, "w"), "id") == 4) && $this->getAttribute((isset($context["centreVacance"]) ? $context["centreVacance"] : null), "repertoirefr", array(), "any", true, true))) {
                    // line 295
                    echo "\t            \t\t<div><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "centreVacance"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                    echo "- ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "centreVacance"), "nomfr"), "html", null, true);
                    echo "\" target=\"_blank\">
\t            \t \t\t ";
                    // line 296
                    if (($this->getAttribute($this->getContext($context, "centreVacance"), "photocategoriepayante") != "")) {
                        // line 297
                        echo "\t            \t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/hebergement/photo_categorie_payante/photo_categorie_payante"), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "centreVacance"), "id"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "centreVacance"), "photocategoriepayante"), "html", null, true);
                        echo "\" class=\"img_categoie_portail\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "centreVacance"), "nomfr"), "html", null, true);
                        echo "\" />
\t            \t\t\t\t";
                    } else {
                        // line 299
                        echo "\t            \t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/categorie_hebergement"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "id"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "image"), "html", null, true);
                        echo "\" class=\"img_categoie_portail\" alt=\"Image de remplacement pour ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "centreVacance"), "nomfr"), "html", null, true);
                        echo "\" />
\t            \t\t\t\t";
                    }
                    // line 301
                    echo "\t            \t\t\t </a> 
\t\t\t\t            <h2><a href=\"";
                    // line 302
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("category.hebergement"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                    echo "</a></h2>
\t\t\t\t            <p>";
                    // line 303
                    echo twig_escape_filter($this->env, strip_tags(twig_convert_encoding($this->getAttribute($this->getContext($context, "w"), "resumefr"), "UTF-8", "UTF-8")), "html", null, true);
                    echo "</p>
\t\t\t\t            <h3 class=\"under_picture\"><a href=\"";
                    // line 304
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "centreVacance"), "repertoirefr")))), "html", null, true);
                    echo "\" target=\"_blank\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "centreVacance"), "nomfr"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getContext($context, "centreVacance"), "nomfr"), 30, "..."), "html", null, true);
                    echo "</a></h3>   
\t\t\t\t            <h4>[<a href=\"";
                    // line 305
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoirefr")))), "html", null, true);
                    echo "\"  title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("see.more"), "html", null, true);
                    echo " </a>]</h4>
\t\t\t\t        </div>
                                ";
                }
                // line 308
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 309
            echo "            \t\t";
            // line 310
            echo "            \t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "numbCat"));
            foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                // line 311
                echo "\t            \t\t";
                if ((($this->getAttribute($this->getContext($context, "w"), "id") == 2) && $this->getAttribute((isset($context["auberge"]) ? $context["auberge"] : null), "repertoirefr", array(), "any", true, true))) {
                    // line 312
                    echo "\t            \t\t<div><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "auberge"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                    echo "- ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "auberge"), "nomfr"), "html", null, true);
                    echo "\" target=\"_blank\">
\t            \t \t\t ";
                    // line 313
                    if (($this->getAttribute($this->getContext($context, "auberge"), "photocategoriepayante") != "")) {
                        // line 314
                        echo "\t            \t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/hebergement/photo_categorie_payante/photo_categorie_payante"), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "auberge"), "id"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "auberge"), "photocategoriepayante"), "html", null, true);
                        echo "\" class=\"img_categoie_portail\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "auberge"), "nomfr"), "html", null, true);
                        echo "\" />
\t            \t\t\t\t";
                    } else {
                        // line 316
                        echo "\t            \t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/categorie_hebergement"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "id"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "image"), "html", null, true);
                        echo "\" class=\"img_categoie_portail\" alt=\"Image de remplacement pour ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "auberge"), "nomfr"), "html", null, true);
                        echo "\" />
\t            \t\t\t\t";
                    }
                    // line 318
                    echo "\t            \t\t\t </a> 
\t\t\t\t            <h2><a href=\"";
                    // line 319
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("category.hebergement"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr")), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                    echo " </a> </h2>
\t\t\t\t            <p> ";
                    // line 320
                    echo twig_escape_filter($this->env, strip_tags(twig_convert_encoding($this->getAttribute($this->getContext($context, "w"), "resumefr"), "UTF-8", "UTF-8")), "html", null, true);
                    echo " </p>
\t\t\t\t            <h3 class=\"under_picture\"><a href=\"";
                    // line 321
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "auberge"), "repertoirefr")))), "html", null, true);
                    echo "\" target=\"_blank\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "auberge"), "nomfr"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getContext($context, "auberge"), "nomfr"), 30, "..."), "html", null, true);
                    echo "</a></h3>   
\t\t\t\t            <h4>[<a href=\"";
                    // line 322
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoirefr")))), "html", null, true);
                    echo "\"  title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("see.more"), "html", null, true);
                    echo " </a>]</h4>
\t\t\t\t        </div>
\t\t\t\t        ";
                }
                // line 325
                echo "\t\t\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            echo "\t
                         ";
            // line 327
            echo "                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "numbCat"));
            foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                // line 328
                echo "                                    ";
                if ((($this->getAttribute($this->getContext($context, "w"), "id") == 10) && $this->getAttribute((isset($context["insolite"]) ? $context["insolite"] : null), "repertoirefr", array(), "any", true, true))) {
                    // line 329
                    echo "                                    <div><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "insolite"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                    echo "- ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "insolite"), "nomfr"), "html", null, true);
                    echo "\" target=\"_blank\">
\t            \t \t\t ";
                    // line 330
                    if (($this->getAttribute($this->getContext($context, "insolite"), "photocategoriepayante") != "")) {
                        // line 331
                        echo "\t            \t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/hebergement/photo_categorie_payante/photo_categorie_payante"), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "insolite"), "id"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "insolite"), "photocategoriepayante"), "html", null, true);
                        echo "\" class=\"img_categoie_portail\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "insolite"), "nomfr"), "html", null, true);
                        echo "\" />
\t            \t\t\t\t";
                    } else {
                        // line 333
                        echo "\t            \t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/categorie_hebergement"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "id"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "image"), "html", null, true);
                        echo "\" class=\"img_categoie_portail\" alt=\"Image de remplacement pour ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "insolite"), "nomfr"), "html", null, true);
                        echo "\" />
\t            \t\t\t\t";
                    }
                    // line 335
                    echo "\t            \t\t\t </a> 
\t\t\t\t            <h2><a href=\"";
                    // line 336
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("category.hebergement"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr")), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                    echo " </a> </h2>
\t\t\t\t            <p> ";
                    // line 337
                    echo twig_escape_filter($this->env, strip_tags(twig_convert_encoding($this->getAttribute($this->getContext($context, "w"), "resumefr"), "UTF-8", "UTF-8")), "html", null, true);
                    echo " </p>
\t\t\t\t            <h3 class=\"under_picture\"><a href=\"";
                    // line 338
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "insolite"), "repertoirefr")))), "html", null, true);
                    echo "\" target=\"_blank\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "insolite"), "nomfr"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getContext($context, "insolite"), "nomfr"), 30, "..."), "html", null, true);
                    echo "</a></h3>   
\t\t\t\t            <h4>[<a href=\"";
                    // line 339
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoirefr")))), "html", null, true);
                    echo "\"  title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("see.more"), "html", null, true);
                    echo " </a>]</h4>
\t\t\t\t        </div>
\t\t\t\t      ";
                }
                // line 342
                echo "\t\t\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 343
            echo "                         ";
            // line 344
            echo "\t\t\t        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "numbCat"));
            foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                // line 345
                echo "\t            \t\t";
                if ((($this->getAttribute($this->getContext($context, "w"), "id") == 6) && $this->getAttribute((isset($context["etablissement"]) ? $context["etablissement"] : null), "repertoirefr", array(), "any", true, true))) {
                    // line 346
                    echo "\t            \t\t<div><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "etablissement"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                    echo "- ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "etablissement"), "nomfr"), "html", null, true);
                    echo "\" target=\"_blank\">
\t            \t \t\t ";
                    // line 347
                    if (($this->getAttribute($this->getContext($context, "etablissement"), "photocategoriepayante") != "")) {
                        // line 348
                        echo "\t            \t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/hebergement/photo_categorie_payante/photo_categorie_payante"), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "etablissement"), "id"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "etablissement"), "photocategoriepayante"), "html", null, true);
                        echo "\" class=\"img_categoie_portail\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "etablissement"), "nomfr"), "html", null, true);
                        echo "\" />
\t            \t\t\t\t";
                    } else {
                        // line 350
                        echo "\t            \t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/categorie_hebergement"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "id"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "image"), "html", null, true);
                        echo "\" class=\"img_categoie_portail\" alt=\"Image de remplacement pour ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "etablissement"), "nomfr"), "html", null, true);
                        echo "\" />
\t            \t\t\t\t";
                    }
                    // line 352
                    echo "\t            \t\t\t </a> 
\t\t\t\t            <h2><a href=\"";
                    // line 353
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("category.hebergement"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                    echo " </a></h2>
\t\t\t\t            <p>";
                    // line 354
                    echo twig_escape_filter($this->env, strip_tags(twig_convert_encoding($this->getAttribute($this->getContext($context, "w"), "resumefr"), "UTF-8", "UTF-8")), "html", null, true);
                    echo " </p>
\t\t\t\t            <h3 class=\"under_picture\"><a href=\"";
                    // line 355
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "etablissement"), "repertoirefr")))), "html", null, true);
                    echo "\" target=\"_blank\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "etablissement"), "nomfr"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getContext($context, "etablissement"), "nomfr"), 30, "..."), "html", null, true);
                    echo "</a></h3>   
\t\t\t\t            <h4>[<a href=\"";
                    // line 356
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("see.more"), "html", null, true);
                    echo " </a>]</h4>
\t\t\t\t        </div>
\t\t\t\t    \t";
                }
                // line 359
                echo "\t\t\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 360
            echo "\t\t\t  ";
            // line 361
            echo "\t\t\t        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "numbCat"));
            foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                // line 362
                echo "\t            \t\t";
                if ((($this->getAttribute($this->getContext($context, "w"), "id") == 8) && $this->getAttribute((isset($context["camping"]) ? $context["camping"] : null), "repertoirefr", array(), "any", true, true))) {
                    // line 363
                    echo "\t            \t\t<div><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "camping"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                    echo "- ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "camping"), "nomfr"), "html", null, true);
                    echo " \" target=\"_blank\">
\t            \t \t\t ";
                    // line 364
                    if (($this->getAttribute($this->getContext($context, "camping"), "photocategoriepayante") != "")) {
                        // line 365
                        echo "\t            \t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/hebergement/photo_categorie_payante/photo_categorie_payante"), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "camping"), "id"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "camping"), "photocategoriepayante"), "html", null, true);
                        echo "\" class=\"img_categoie_portail\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "camping"), "nomfr"), "html", null, true);
                        echo "\" />
\t            \t\t\t\t";
                    } else {
                        // line 367
                        echo "\t            \t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/categorie_hebergement"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "id"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "image"), "html", null, true);
                        echo "\" class=\"img_categoie_portail\" alt=\"Image de remplacement pour ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "camping"), "nomfr"), "html", null, true);
                        echo "\" />
\t            \t\t\t\t";
                    }
                    // line 369
                    echo "\t            \t\t\t </a> 
\t\t\t\t            <h2><a href=\"";
                    // line 370
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("category.hebergement"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr")), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                    echo " </a></h2>
\t\t\t\t            <p>";
                    // line 371
                    echo twig_escape_filter($this->env, strip_tags(twig_convert_encoding($this->getAttribute($this->getContext($context, "w"), "resumefr"), "UTF-8", "UTF-8")), "html", null, true);
                    echo "</p>
\t\t\t\t            <h3 class=\"under_picture\"><a href=\"";
                    // line 372
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "camping"), "repertoirefr")))), "html", null, true);
                    echo "\" target=\"_blank\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "camping"), "nomfr"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getContext($context, "camping"), "nomfr"), 30, "..."), "html", null, true);
                    echo "</a></h3>   
\t\t\t\t            <h4>[<a href=\"";
                    // line 373
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("see.more"), "html", null, true);
                    echo " </a>]</h4>
\t\t\t\t        </div>
\t\t\t\t        ";
                }
                // line 376
                echo "\t\t\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 377
            echo "\t\t\t  ";
            // line 378
            echo "\t\t\t        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "numbCat"));
            foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                // line 379
                echo "\t            \t\t";
                if ((($this->getAttribute($this->getContext($context, "w"), "id") == 9) && $this->getAttribute((isset($context["village"]) ? $context["village"] : null), "repertoirefr", array(), "any", true, true))) {
                    // line 380
                    echo "\t            \t\t<div><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "village"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                    echo "- ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "village"), "nomfr"), "html", null, true);
                    echo "\" target=\"_blank\">
\t            \t \t\t ";
                    // line 381
                    if (($this->getAttribute($this->getContext($context, "village"), "photocategoriepayante") != "")) {
                        // line 382
                        echo "\t            \t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/hebergement/photo_categorie_payante/photo_categorie_payante"), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "village"), "id"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "village"), "photocategoriepayante"), "html", null, true);
                        echo "\" class=\"img_categoie_portail\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "village"), "nomfr"), "html", null, true);
                        echo "\" />
\t            \t\t\t\t";
                    } else {
                        // line 384
                        echo "\t            \t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/categorie_hebergement"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "id"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "image"), "html", null, true);
                        echo "\" class=\"img_categoie_portail\" alt=\"Image de remplacement pour ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "village"), "nomfr"), "html", null, true);
                        echo "\" />
\t            \t\t\t\t";
                    }
                    // line 386
                    echo "\t            \t\t\t </a> 
\t\t\t\t            <h2><a href=\"";
                    // line 387
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("category.hebergement"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                    echo " </a></h2>
\t\t\t\t            <p>";
                    // line 388
                    echo twig_escape_filter($this->env, strip_tags(twig_convert_encoding($this->getAttribute($this->getContext($context, "w"), "resumefr"), "UTF-8", "UTF-8")), "html", null, true);
                    echo "</p>
\t\t\t\t            <h3 class=\"under_picture\"><a href=\"";
                    // line 389
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "village"), "repertoirefr")))), "html", null, true);
                    echo "\" target=\"_blank\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "village"), "nomfr"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getContext($context, "village"), "nomfr"), 30, "..."), "html", null, true);
                    echo "</a></h3>   
\t\t\t\t            <h4>[<a href=\"";
                    // line 390
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoirefr")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("see.more"), "html", null, true);
                    echo " </a>]</h4>
\t\t\t\t        </div>
\t\t\t\t";
                }
                // line 393
                echo "\t\t\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 394
            echo "\t\t\t";
        } else {
            echo " ";
            // line 395
            echo "                        ";
            // line 396
            echo "\t\t\t    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "numbCat"));
            foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                // line 397
                echo "\t            \t\t";
                if ((($this->getAttribute($this->getContext($context, "w"), "id") == 7) && $this->getAttribute((isset($context["hotel"]) ? $context["hotel"] : null), "repertoireen", array(), "any", true, true))) {
                    // line 398
                    echo "\t            \t\t<div><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "hotel"), "repertoireen")))), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                    echo "- ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "hotel"), "nomen"), "html", null, true);
                    echo "\" target=\"_blank\">
\t            \t \t\t ";
                    // line 399
                    if (($this->getAttribute($this->getContext($context, "hotel"), "photocategoriepayante") != "")) {
                        // line 400
                        echo "\t            \t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/hebergement/photo_categorie_payante/photo_categorie_payante"), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "hotel"), "id"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "hotel"), "photocategoriepayante"), "html", null, true);
                        echo "\" class=\"img_categoie_portail\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "hotel"), "nomen"), "html", null, true);
                        echo "\" />
\t            \t\t\t\t";
                    } else {
                        // line 402
                        echo "\t            \t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/categorie_hebergement"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "id"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "image"), "html", null, true);
                        echo "\" class=\"img_categoie_portail\" alt=\"Image replacement ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "hotel"), "nomen"), "html", null, true);
                        echo "\" />
\t            \t\t\t\t";
                    }
                    // line 404
                    echo "\t            \t\t\t </a> 
\t\t\t\t            <h2><a href=\"";
                    // line 405
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypeen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("category.hebergement"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                    echo "</a></h2>
\t\t\t\t            <p>";
                    // line 406
                    echo twig_escape_filter($this->env, strip_tags(twig_convert_encoding($this->getAttribute($this->getContext($context, "w"), "resumeen"), "UTF-8", "UTF-8")), "html", null, true);
                    echo " </p>
\t\t\t\t            <h3 class=\"under_picture\"><a href=\"";
                    // line 407
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "hotel"), "repertoireen")))), "html", null, true);
                    echo "\" target=\"_blank\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "hotel"), "nomen"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getContext($context, "hotel"), "nomen"), 30, "..."), "html", null, true);
                    echo "</a></h3>   
\t\t\t\t            <h4>[<a href=\"";
                    // line 408
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypeen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("see.more"), "html", null, true);
                    echo " </a>]</h4>
\t\t\t\t        </div>
\t\t\t\t";
                }
                // line 411
                echo "\t\t\t    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 412
            echo "                         ";
            // line 413
            echo "\t\t\t        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "numbCat"));
            foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                // line 414
                echo "\t            \t\t";
                if ((($this->getAttribute($this->getContext($context, "w"), "id") == 3) && $this->getAttribute((isset($context["gite"]) ? $context["gite"] : null), "repertoireen", array(), "any", true, true))) {
                    // line 415
                    echo "\t            \t\t<div><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "gite"), "repertoireen")))), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                    echo "- ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "gite"), "nomen"), "html", null, true);
                    echo "\" target=\"_blank\">
\t            \t \t\t ";
                    // line 416
                    if (($this->getAttribute($this->getContext($context, "gite"), "photocategoriepayante") != "")) {
                        // line 417
                        echo "\t            \t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/hebergement/photo_categorie_payante/photo_categorie_payante"), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "gite"), "id"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "gite"), "photocategoriepayante"), "html", null, true);
                        echo "\" class=\"img_categoie_portail\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "gite"), "nomen"), "html", null, true);
                        echo "\" />
\t            \t\t\t\t";
                    } else {
                        // line 419
                        echo "\t            \t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/categorie_hebergement"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "id"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "image"), "html", null, true);
                        echo "\" class=\"img_categoie_portail\" alt=\"Image replacement ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "gite"), "nomen"), "html", null, true);
                        echo "\" />
\t            \t\t\t\t";
                    }
                    // line 421
                    echo "\t            \t\t\t </a> 
\t\t\t\t            <h2><a href=\"";
                    // line 422
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypeen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("category.hebergement"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                    echo "</a></h2>
\t\t\t\t            <p>";
                    // line 423
                    echo twig_escape_filter($this->env, strip_tags(twig_convert_encoding($this->getAttribute($this->getContext($context, "w"), "resumeen"), "UTF-8", "UTF-8")), "html", null, true);
                    echo " </p>
\t\t\t\t            <h3 class=\"under_picture\"><a href=\"";
                    // line 424
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "gite"), "repertoireen")))), "html", null, true);
                    echo "\" target=\"_blank\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "gite"), "nomen"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getContext($context, "gite"), "nomen"), 30, "..."), "html", null, true);
                    echo "</a></h3>   
\t\t\t\t            <h4>[<a href=\"";
                    // line 425
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypeen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("see.more"), "html", null, true);
                    echo " </a>]</h4>
\t\t\t\t        </div>
\t\t\t\t        ";
                }
                // line 428
                echo "\t\t\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 429
            echo "                        ";
            // line 430
            echo "\t\t\t        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "numbCat"));
            foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                // line 431
                echo "\t            \t\t";
                if ((($this->getAttribute($this->getContext($context, "w"), "id") == 5) && $this->getAttribute((isset($context["residence"]) ? $context["residence"] : null), "repertoireen", array(), "any", true, true))) {
                    // line 432
                    echo "\t            \t\t<div><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "residence"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                    echo "- ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "residence"), "nomen"), "html", null, true);
                    echo "\" target=\"_blank\">
\t            \t \t\t ";
                    // line 433
                    if (($this->getAttribute($this->getContext($context, "residence"), "photocategoriepayante") != "")) {
                        // line 434
                        echo "\t            \t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/hebergement/photo_categorie_payante/photo_categorie_payante"), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "residence"), "id"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "residence"), "photocategoriepayante"), "html", null, true);
                        echo "\" class=\"img_categoie_portail\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "residence"), "nomen"), "html", null, true);
                        echo "\" />
\t            \t\t\t\t";
                    } else {
                        // line 436
                        echo "\t            \t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/categorie_hebergement"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "id"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "image"), "html", null, true);
                        echo "\" class=\"img_categoie_portail\" alt=\"Image replacement ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "residence"), "nomen"), "html", null, true);
                        echo "\" />
\t            \t\t\t\t";
                    }
                    // line 438
                    echo "\t            \t\t\t </a> 
\t\t\t\t            <h2><a href=\"";
                    // line 439
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypeen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("category.hebergement"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                    echo " </a></h2>
\t\t\t\t            <p>";
                    // line 440
                    echo twig_escape_filter($this->env, strip_tags(twig_convert_encoding($this->getAttribute($this->getContext($context, "w"), "resumeen"), "UTF-8", "UTF-8")), "html", null, true);
                    echo "</p>
\t\t\t\t            <h3 class=\"under_picture\"><a href=\"";
                    // line 441
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "residence"), "repertoireen")))), "html", null, true);
                    echo "\" target=\"_blank\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "residence"), "nomen"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getContext($context, "residence"), "nomen"), 30, "..."), "html", null, true);
                    echo "</a></h3>   
\t\t\t\t            <h4>[<a href=\"";
                    // line 442
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypeen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("see.more"), "html", null, true);
                    echo " </a>]</h4>
\t\t\t\t        </div>
\t\t\t\t        ";
                }
                // line 445
                echo "\t\t\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 446
            echo "                         ";
            // line 447
            echo "\t\t\t        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "numbCat"));
            foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                // line 448
                echo "\t            \t\t";
                if ((($this->getAttribute($this->getContext($context, "w"), "id") == 4) && $this->getAttribute((isset($context["centreVacance"]) ? $context["centreVacance"] : null), "repertoireen", array(), "any", true, true))) {
                    // line 449
                    echo "\t            \t\t<div><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "centreVacance"), "repertoireen")))), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                    echo "- ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "centreVacance"), "nomen"), "html", null, true);
                    echo "\" target=\"_blank\">
\t            \t \t\t ";
                    // line 450
                    if (($this->getAttribute($this->getContext($context, "centreVacance"), "photocategoriepayante") != "")) {
                        // line 451
                        echo "\t            \t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/hebergement/photo_categorie_payante/photo_categorie_payante"), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "centreVacance"), "id"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "centreVacance"), "photocategoriepayante"), "html", null, true);
                        echo "\" class=\"img_categoie_portail\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "centreVacance"), "nomen"), "html", null, true);
                        echo "\" />
\t            \t\t\t\t";
                    } else {
                        // line 453
                        echo "\t            \t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/categorie_hebergement"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "id"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "image"), "html", null, true);
                        echo "\" class=\"img_categoie_portail\" alt=\"Image replacement ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "centreVacance"), "nomen"), "html", null, true);
                        echo "\" />
\t            \t\t\t\t";
                    }
                    // line 455
                    echo "\t            \t\t\t </a> 
\t\t\t\t            <h2><a href=\"";
                    // line 456
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypeen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("category.hebergement"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                    echo "</a></h2>
\t\t\t\t            <p> ";
                    // line 457
                    echo twig_escape_filter($this->env, strip_tags(twig_convert_encoding($this->getAttribute($this->getContext($context, "w"), "resumeen"), "UTF-8", "UTF-8")), "html", null, true);
                    echo "</p>
\t\t\t\t            <h3 class=\"under_picture\"><a href=\"";
                    // line 458
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "centreVacance"), "repertoireen")))), "html", null, true);
                    echo "\" target=\"_blank\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "centreVacance"), "nomen"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getContext($context, "centreVacance"), "nomen"), 30, "..."), "html", null, true);
                    echo "</a></h3>   
\t\t\t\t            <h4>[<a href=\"";
                    // line 459
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypeen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("see.more"), "html", null, true);
                    echo " </a>]</h4>
\t\t\t\t        </div>
\t\t\t\t        ";
                }
                // line 462
                echo "\t\t\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 463
            echo "\t\t\t";
            // line 464
            echo "\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "numbCat"));
            foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                // line 465
                echo "\t            \t\t";
                if ((($this->getAttribute($this->getContext($context, "w"), "id") == 2) && $this->getAttribute((isset($context["auberge"]) ? $context["auberge"] : null), "repertoireen", array(), "any", true, true))) {
                    // line 466
                    echo "\t            \t\t<div><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "auberge"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                    echo "- ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "auberge"), "nomen"), "html", null, true);
                    echo "\" target=\"_blank\">
\t            \t \t\t ";
                    // line 467
                    if (($this->getAttribute($this->getContext($context, "auberge"), "photocategoriepayante") != "")) {
                        // line 468
                        echo "\t            \t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/hebergement/photo_categorie_payante/photo_categorie_payante"), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "auberge"), "id"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "auberge"), "photocategoriepayante"), "html", null, true);
                        echo "\" class=\"img_categoie_portail\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "auberge"), "nomen"), "html", null, true);
                        echo "\" />
\t            \t\t\t\t";
                    } else {
                        // line 470
                        echo "\t            \t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/categorie_hebergement"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "id"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "image"), "html", null, true);
                        echo "\" class=\"img_categoie_portail\" alt=\"Image replacement ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "auberge"), "nomen"), "html", null, true);
                        echo "\" />
\t            \t\t\t\t";
                    }
                    // line 472
                    echo "\t            \t\t\t </a> 
\t\t\t\t            <h2><a href=\"";
                    // line 473
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypeen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("category.hebergement"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen")), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                    echo " </a></h2>
\t\t\t\t            <p> ";
                    // line 474
                    echo twig_escape_filter($this->env, strip_tags(twig_convert_encoding($this->getAttribute($this->getContext($context, "w"), "resumeen"), "UTF-8", "UTF-8")), "html", null, true);
                    echo "</p>
\t\t\t\t            <h3 class=\"under_picture\"><a href=\"";
                    // line 475
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "auberge"), "repertoireen")))), "html", null, true);
                    echo "\" target=\"_blank\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "auberge"), "nomen"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getContext($context, "auberge"), "nomen"), 30, "..."), "html", null, true);
                    echo "</a></h3>   
\t\t\t\t            <h4>[<a href=\"";
                    // line 476
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypeen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("see.more"), "html", null, true);
                    echo " </a>]</h4>
\t\t\t\t        </div>
\t\t\t\t       ";
                }
                // line 479
                echo "\t\t\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 480
            echo "                         ";
            // line 481
            echo "\t\t\t        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "numbCat"));
            foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                // line 482
                echo "\t            \t\t";
                if ((($this->getAttribute($this->getContext($context, "w"), "id") == 10) && $this->getAttribute((isset($context["insolite"]) ? $context["insolite"] : null), "repertoireen", array(), "any", true, true))) {
                    // line 483
                    echo "\t            \t\t<div><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "insolite"), "repertoireen")))), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                    echo "- ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "insolite"), "nomen"), "html", null, true);
                    echo "\" target=\"_blank\">
\t            \t \t\t ";
                    // line 484
                    if (($this->getAttribute($this->getContext($context, "insolite"), "photocategoriepayante") != "")) {
                        // line 485
                        echo "\t            \t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/hebergement/photo_categorie_payante/photo_categorie_payante"), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "insolite"), "id"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "insolite"), "photocategoriepayante"), "html", null, true);
                        echo "\" class=\"img_categoie_portail\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "insolite"), "nomen"), "html", null, true);
                        echo "\" />
\t            \t\t\t\t";
                    } else {
                        // line 487
                        echo "\t            \t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/categorie_hebergement"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "id"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "image"), "html", null, true);
                        echo "\" class=\"img_categoie_portail\" alt=\"Image de remplacement pour ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "insolite"), "nomen"), "html", null, true);
                        echo "\" />
\t            \t\t\t\t";
                    }
                    // line 489
                    echo "\t            \t\t\t </a> 
\t\t\t\t            <h2><a href=\"";
                    // line 490
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("category.hebergement"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomfr"), "html", null, true);
                    echo " </a></h2>
\t\t\t\t            <p>";
                    // line 491
                    echo twig_escape_filter($this->env, strip_tags(twig_convert_encoding($this->getAttribute($this->getContext($context, "w"), "resumeen"), "UTF-8", "UTF-8")), "html", null, true);
                    echo " </p>
\t\t\t\t            <h3 class=\"under_picture\"><a href=\"";
                    // line 492
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "insolite"), "repertoireen")))), "html", null, true);
                    echo "\" target=\"_blank\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "insolite"), "nomen"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getContext($context, "insolite"), "nomen"), 30, "..."), "html", null, true);
                    echo "</a></h3>   
\t\t\t\t            <h4>[<a href=\"";
                    // line 493
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypefr", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("see.more"), "html", null, true);
                    echo " </a>]</h4>
\t\t\t\t        </div>
\t\t\t\t    \t";
                }
                // line 496
                echo "\t\t\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 497
            echo "\t\t\t ";
            // line 498
            echo "\t\t\t        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "numbCat"));
            foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                // line 499
                echo "\t            \t\t";
                if ((($this->getAttribute($this->getContext($context, "w"), "id") == 6) && $this->getAttribute((isset($context["etablissement"]) ? $context["etablissement"] : null), "repertoireen", array(), "any", true, true))) {
                    // line 500
                    echo "\t            \t\t<div><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "etablissement"), "repertoireen")))), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                    echo "- ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "etablissement"), "nomen"), "html", null, true);
                    echo "\" target=\"_blank\">
\t            \t \t\t ";
                    // line 501
                    if (($this->getAttribute($this->getContext($context, "etablissement"), "photocategoriepayante") != "")) {
                        // line 502
                        echo "\t            \t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/hebergement/photo_categorie_payante/photo_categorie_payante"), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "etablissement"), "id"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "etablissement"), "photocategoriepayante"), "html", null, true);
                        echo "\" class=\"img_categoie_portail\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "etablissement"), "nomen"), "html", null, true);
                        echo "\" />
\t            \t\t\t\t";
                    } else {
                        // line 504
                        echo "\t            \t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/categorie_hebergement"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "id"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "image"), "html", null, true);
                        echo "\" class=\"img_categoie_portail\" alt=\"Image replacement ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "etablissement"), "nomen"), "html", null, true);
                        echo "\" />
\t            \t\t\t\t";
                    }
                    // line 506
                    echo "\t            \t\t\t </a> 
\t\t\t\t            <h2><a href=\"";
                    // line 507
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypeen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("category.hebergement"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen")), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                    echo " </a></h2>
\t\t\t\t            <p> ";
                    // line 508
                    echo twig_escape_filter($this->env, strip_tags(twig_convert_encoding($this->getAttribute($this->getContext($context, "w"), "resumeen"), "UTF-8", "UTF-8")), "html", null, true);
                    echo " </p>
\t\t\t\t            <h3 class=\"under_picture\"><a href=\"";
                    // line 509
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "etablissement"), "repertoireen")))), "html", null, true);
                    echo "\" target=\"_blank\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "etablissement"), "nomen"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getContext($context, "etablissement"), "nomen"), 30, "..."), "html", null, true);
                    echo "</a></h3>   
\t\t\t\t            <h4>[<a href=\"";
                    // line 510
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypeen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("see.more"), "html", null, true);
                    echo " </a>]</h4>
\t\t\t\t        </div>
\t\t\t\t        ";
                }
                // line 513
                echo "\t\t\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 514
            echo "\t\t\t ";
            // line 515
            echo "\t\t\t         ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "numbCat"));
            foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                // line 516
                echo "\t            \t\t";
                if ((($this->getAttribute($this->getContext($context, "w"), "id") == 8) && $this->getAttribute((isset($context["camping"]) ? $context["camping"] : null), "repertoireen", array(), "any", true, true))) {
                    // line 517
                    echo "\t            \t\t<div><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "camping"), "repertoireen")))), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                    echo "- ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "camping"), "nomen"), "html", null, true);
                    echo "\" target=\"_blank\">
\t            \t \t\t ";
                    // line 518
                    if (($this->getAttribute($this->getContext($context, "camping"), "photocategoriepayante") != "")) {
                        // line 519
                        echo "\t            \t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/hebergement/photo_categorie_payante/photo_categorie_payante"), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "camping"), "id"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "camping"), "photocategoriepayante"), "html", null, true);
                        echo "\" class=\"img_categoie_portail\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "camping"), "nomen"), "html", null, true);
                        echo "\" />
\t            \t\t\t\t";
                    } else {
                        // line 521
                        echo "\t            \t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/categorie_hebergement"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "id"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "image"), "html", null, true);
                        echo "\" class=\"img_categoie_portail\" alt=\"Image replacement ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "camping"), "nomen"), "html", null, true);
                        echo "\" />
\t            \t\t\t\t";
                    }
                    // line 523
                    echo "\t            \t\t\t </a> 
\t\t\t\t            <h2><a href=\"";
                    // line 524
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypeen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("category.hebergement"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                    echo " </a></h2>
\t\t\t\t            <p> ";
                    // line 525
                    echo twig_escape_filter($this->env, strip_tags(twig_convert_encoding($this->getAttribute($this->getContext($context, "w"), "resumeen"), "UTF-8", "UTF-8")), "html", null, true);
                    echo "</p>
\t\t\t\t            <h3 class=\"under_picture\"><a href=\"";
                    // line 526
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "camping"), "repertoireen")))), "html", null, true);
                    echo "\" target=\"_blank\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "camping"), "nomen"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getContext($context, "camping"), "nomen"), 30, "..."), "html", null, true);
                    echo "</a></h3>   
\t\t\t\t            <h4>[<a href=\"";
                    // line 527
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypeen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("see.more"), "html", null, true);
                    echo " </a>]</h4>
\t\t\t\t        </div>
\t\t\t\t        ";
                }
                // line 530
                echo "\t\t\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 531
            echo "\t\t\t         ";
            // line 532
            echo "\t\t\t         ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "numbCat"));
            foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                // line 533
                echo "\t            \t\t";
                if ((($this->getAttribute($this->getContext($context, "w"), "id") == 9) && $this->getAttribute((isset($context["village"]) ? $context["village"] : null), "repertoireen", array(), "any", true, true))) {
                    // line 534
                    echo "\t            \t\t<div><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "village"), "repertoireen")))), "html", null, true);
                    echo "\" title=\" ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                    echo "- ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "village"), "nomen"), "html", null, true);
                    echo "\" target=\"_blank\">
\t            \t \t\t ";
                    // line 535
                    if (($this->getAttribute($this->getContext($context, "village"), "photocategoriepayante") != "")) {
                        // line 536
                        echo "\t            \t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/hebergement/photo_categorie_payante/photo_categorie_payante"), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "village"), "id"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "village"), "photocategoriepayante"), "html", null, true);
                        echo "\" class=\"img_categoie_portail\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "village"), "nomen"), "html", null, true);
                        echo "\" />
\t            \t\t\t\t";
                    } else {
                        // line 538
                        echo "\t            \t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/categorie_hebergement"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "id"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "image"), "html", null, true);
                        echo "\" class=\"img_categoie_portail\" alt=\"Image replacement ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "village"), "nomen"), "html", null, true);
                        echo "\" />
\t            \t\t\t\t";
                    }
                    // line 540
                    echo "\t            \t\t\t </a> 
\t\t\t\t            <h2><a href=\"";
                    // line 541
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypeen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("category.hebergement"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                    echo " </a></h2>
\t\t\t\t            <p> ";
                    // line 542
                    echo twig_escape_filter($this->env, strip_tags(twig_convert_encoding($this->getAttribute($this->getContext($context, "w"), "resumeen"), "UTF-8", "UTF-8")), "html", null, true);
                    echo " </p>
\t\t\t\t            <h3 class=\"under_picture\"><a href=\"";
                    // line 543
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementinfoclient", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "village"), "repertoireen")))), "html", null, true);
                    echo "\" target=\"_blank\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "village"), "nomen"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getContext($context, "village"), "nomen"), 30, "..."), "html", null, true);
                    echo "</a></h3>   
\t\t\t\t            <h4>[<a href=\"";
                    // line 544
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_hebergementtypeen", array("name" => twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "repertoireen")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "w"), "nomen"), "html", null, true);
                    echo "\" > ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("see.more"), "html", null, true);
                    echo " </a>]</h4>
\t\t\t\t        </div>
\t\t\t\t        ";
                }
                // line 547
                echo "\t\t\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 548
            echo "\t\t\t\t";
        }
        // line 549
        echo "\t\t    <br class=\"clearfloat\" />
\t\t </div>  
\t\t";
    }

    // line 553
    public function block_gauche($context, array $blocks = array())
    {
        // line 554
        echo "\t\t\t";
        // line 555
        echo "         \t";
        $this->env->loadTemplate("::searchCard.html.twig")->display($context);
        // line 556
        echo "\t\t\t";
        // line 557
        echo "\t\t    ";
        $this->env->loadTemplate("MyAppGlobalBundle:Hebergement:suggestionColonneGauche.html.twig")->display($context);
        // line 558
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "MyAppGlobalBundle:Hebergement:hebergement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3097 => 558,  3094 => 557,  3092 => 556,  3089 => 555,  3087 => 554,  3084 => 553,  3078 => 549,  3075 => 548,  3069 => 547,  3059 => 544,  3049 => 543,  3045 => 542,  3035 => 541,  3032 => 540,  3020 => 538,  3009 => 536,  3007 => 535,  2998 => 534,  2995 => 533,  2990 => 532,  2988 => 531,  2982 => 530,  2972 => 527,  2962 => 526,  2958 => 525,  2948 => 524,  2945 => 523,  2933 => 521,  2922 => 519,  2920 => 518,  2911 => 517,  2908 => 516,  2903 => 515,  2901 => 514,  2895 => 513,  2885 => 510,  2875 => 509,  2871 => 508,  2861 => 507,  2858 => 506,  2846 => 504,  2835 => 502,  2833 => 501,  2824 => 500,  2821 => 499,  2816 => 498,  2814 => 497,  2808 => 496,  2798 => 493,  2788 => 492,  2784 => 491,  2774 => 490,  2771 => 489,  2759 => 487,  2748 => 485,  2746 => 484,  2737 => 483,  2734 => 482,  2729 => 481,  2727 => 480,  2721 => 479,  2711 => 476,  2701 => 475,  2697 => 474,  2687 => 473,  2684 => 472,  2672 => 470,  2661 => 468,  2659 => 467,  2650 => 466,  2647 => 465,  2642 => 464,  2640 => 463,  2634 => 462,  2624 => 459,  2614 => 458,  2610 => 457,  2600 => 456,  2597 => 455,  2585 => 453,  2574 => 451,  2572 => 450,  2563 => 449,  2560 => 448,  2555 => 447,  2553 => 446,  2547 => 445,  2537 => 442,  2527 => 441,  2523 => 440,  2513 => 439,  2510 => 438,  2498 => 436,  2487 => 434,  2485 => 433,  2476 => 432,  2473 => 431,  2468 => 430,  2466 => 429,  2460 => 428,  2450 => 425,  2440 => 424,  2436 => 423,  2426 => 422,  2423 => 421,  2411 => 419,  2400 => 417,  2398 => 416,  2389 => 415,  2386 => 414,  2381 => 413,  2379 => 412,  2373 => 411,  2363 => 408,  2353 => 407,  2349 => 406,  2339 => 405,  2336 => 404,  2324 => 402,  2313 => 400,  2311 => 399,  2302 => 398,  2299 => 397,  2294 => 396,  2292 => 395,  2288 => 394,  2282 => 393,  2272 => 390,  2262 => 389,  2258 => 388,  2248 => 387,  2245 => 386,  2233 => 384,  2222 => 382,  2220 => 381,  2211 => 380,  2208 => 379,  2203 => 378,  2201 => 377,  2195 => 376,  2185 => 373,  2175 => 372,  2171 => 371,  2161 => 370,  2158 => 369,  2146 => 367,  2135 => 365,  2133 => 364,  2124 => 363,  2121 => 362,  2116 => 361,  2114 => 360,  2108 => 359,  2098 => 356,  2088 => 355,  2084 => 354,  2074 => 353,  2071 => 352,  2059 => 350,  2048 => 348,  2046 => 347,  2037 => 346,  2034 => 345,  2029 => 344,  2027 => 343,  2021 => 342,  2011 => 339,  2001 => 338,  1997 => 337,  1987 => 336,  1984 => 335,  1972 => 333,  1961 => 331,  1959 => 330,  1950 => 329,  1947 => 328,  1942 => 327,  1934 => 325,  1924 => 322,  1914 => 321,  1910 => 320,  1900 => 319,  1897 => 318,  1885 => 316,  1874 => 314,  1872 => 313,  1863 => 312,  1860 => 311,  1855 => 310,  1853 => 309,  1847 => 308,  1837 => 305,  1827 => 304,  1823 => 303,  1813 => 302,  1810 => 301,  1798 => 299,  1787 => 297,  1785 => 296,  1776 => 295,  1773 => 294,  1768 => 293,  1766 => 292,  1760 => 291,  1750 => 288,  1740 => 287,  1736 => 286,  1726 => 285,  1723 => 284,  1711 => 282,  1700 => 280,  1698 => 279,  1689 => 278,  1686 => 277,  1681 => 276,  1679 => 275,  1673 => 274,  1663 => 271,  1653 => 270,  1649 => 269,  1639 => 268,  1636 => 267,  1624 => 265,  1613 => 263,  1611 => 262,  1602 => 261,  1599 => 260,  1594 => 259,  1592 => 258,  1586 => 257,  1576 => 254,  1566 => 253,  1562 => 252,  1552 => 251,  1549 => 250,  1537 => 248,  1526 => 246,  1524 => 245,  1515 => 244,  1513 => 243,  1506 => 242,  1504 => 241,  1502 => 240,  1498 => 239,  1495 => 238,  1491 => 235,  1483 => 229,  1479 => 226,  1456 => 224,  1444 => 222,  1441 => 221,  1424 => 220,  1420 => 218,  1397 => 216,  1385 => 214,  1382 => 213,  1365 => 212,  1361 => 210,  1338 => 208,  1326 => 206,  1323 => 205,  1306 => 204,  1302 => 202,  1279 => 200,  1267 => 198,  1264 => 197,  1247 => 196,  1243 => 194,  1220 => 192,  1208 => 190,  1205 => 189,  1188 => 188,  1184 => 186,  1161 => 184,  1149 => 182,  1146 => 181,  1129 => 180,  1125 => 178,  1102 => 176,  1090 => 174,  1087 => 173,  1070 => 172,  1066 => 170,  1043 => 168,  1031 => 166,  1028 => 165,  1011 => 164,  1007 => 162,  984 => 160,  972 => 158,  969 => 157,  952 => 156,  948 => 154,  925 => 152,  913 => 150,  910 => 149,  893 => 148,  889 => 146,  866 => 144,  854 => 142,  851 => 141,  834 => 140,  831 => 139,  823 => 133,  819 => 130,  796 => 128,  784 => 126,  781 => 125,  764 => 124,  760 => 122,  737 => 120,  725 => 118,  722 => 117,  705 => 116,  701 => 114,  678 => 112,  666 => 110,  663 => 109,  646 => 108,  642 => 106,  619 => 104,  607 => 102,  604 => 101,  587 => 100,  583 => 98,  560 => 96,  548 => 94,  545 => 93,  528 => 92,  524 => 90,  501 => 88,  489 => 86,  486 => 85,  469 => 84,  465 => 82,  442 => 80,  430 => 78,  427 => 77,  410 => 76,  406 => 74,  383 => 72,  371 => 70,  368 => 69,  351 => 68,  347 => 66,  324 => 64,  312 => 62,  309 => 61,  292 => 60,  288 => 58,  265 => 56,  253 => 54,  250 => 53,  233 => 52,  229 => 50,  206 => 48,  194 => 46,  191 => 45,  174 => 44,  169 => 42,  165 => 41,  159 => 39,  155 => 37,  150 => 35,  147 => 34,  142 => 33,  137 => 32,  134 => 31,  129 => 27,  126 => 26,  118 => 24,  107 => 22,  105 => 21,  89 => 19,  86 => 18,  78 => 16,  76 => 15,  65 => 13,  63 => 12,  47 => 10,  45 => 9,  41 => 8,  37 => 6,  32 => 4,  29 => 3,);
    }
}

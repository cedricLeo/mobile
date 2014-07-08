<?php

/* MyAppAdminBundle:Security:login.html.twig */
class __TwigTemplate_5d8520aff6533bb94bf8838843acfbed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
\t <head>
\t\t <meta name=\"viewport\" content=\"initial-scale=1.0, user-scalable=no\">
\t\t <meta name=\"author\" lang=\"fr\" content=\"Cédric Léonard\"> 
         <meta name=\"author\" lang=\"en\" content=\"Cédric Léonard\">  
         <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />  
    \t <title>Global Réservation - Administration</title>
    \t ";
        // line 9
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "\t 
    \t ";
        // line 22
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "    </head>
\t<body>
\t<div id=\"connexion\">
\t";
        // line 31
        echo "\t</div>
\t\t<div id=\"global\">\t\t\t
\t\t\t\t<div id=\"entete\">
\t\t\t\t    <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappadmin/images/logo_global-reservation.jpg"), "html", null, true);
        echo "\" width=\"250\" height=\"106\" alt=\"Logo de Global Réservation\" />
\t\t\t\t    ";
        // line 35
        if ((!array_key_exists("display", $context))) {
            // line 36
            echo "\t\t\t\t    \t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("logout"), "html", null, true);
            echo "\" title=\"Me déconnecter du système\" class=\"deconnexion\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("session.unset"), "html", null, true);
            echo "</a>
\t\t\t\t\t";
        }
        // line 37
        echo "\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t<h1 id=\"auth\">Accés à la gestion de Global Réservation</h1>
\t\t\t\t\t<div class=\"ouvert\">\t
\t\t\t\t\t\t\t";
        // line 42
        if ($this->getContext($context, "error")) {
            // line 43
            echo "\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($this->getContext($context, "error"), "message") == "The presented password cannot be empty.")) {
                // line 44
                echo "\t\t\t\t\t\t    \t<div id=\"msgerrorauth\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("motdepasse.absent"), "html", null, true);
                echo "</div>
\t\t\t\t\t\t    \t";
            } elseif (($this->getAttribute($this->getContext($context, "error"), "message") == "Bad credentials")) {
                // line 46
                echo "\t\t\t\t\t\t    \t<div id=\"msgerrorauth\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("authentification.incorrecte"), "html", null, true);
                echo "</div>
\t\t\t\t\t\t    \t";
            }
            // line 48
            echo "\t\t\t\t\t\t\t";
        }
        // line 49
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<form action=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_check"), "html", null, true);
        echo "\" method=\"post\" class=\"formLogin\">
\t\t\t\t\t\t\t    <label for=\"username\">Login :</label>
\t\t\t\t\t\t\t    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t    <label for=\"password\">Mot de passe :</label>
\t\t\t\t\t\t\t    <input type=\"password\" id=\"password\" name=\"_password\" />
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t    ";
        // line 62
        echo "\t\t\t\t\t\t\t\t<canvas id=\"tuto\"></canvas>
\t\t\t\t\t\t\t\t<button type=\"submit\">Connexion</button>
\t\t\t\t\t\t\t</form>\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t\t<script>
\t\t\t\t\t\t\tvar canvas = document.getElementById('tuto');
\t\t\t\t\t\t\tvar ctx = canvas.getContext('2d');
\t\t\t\t
\t\t\t\t\t\t\tvar numberOfLines = 5;
\t\t\t\t\t\t\tvar i = 0;
\t\t\t\t\t\t\tvar cycle = function() {
\t\t\t\t\t\t\t  ctx.clearRect(0, 0, canvas.width, canvas.height);
\t\t\t\t\t\t\t  for(var j=0; j<numberOfLines; ++j) {
\t\t\t\t\t\t\t\tctx.lineWidth = 1+2*(numberOfLines-j);
\t\t\t\t\t\t\t\tctx.strokeStyle = 'rgba(100,200,'+Math.floor(Math.abs(Math.cos(i/80)*256))+','+(j/5+0.1)+')';
\t\t\t\t\t\t\t\tvar offset = (i+j*10*Math.abs(Math.cos(i/100)))/20;
\t\t\t\t\t\t\t\tvar y = (Math.sin(offset)+1)*canvas.height/2;
\t\t\t\t\t\t\t\tvar cpy1 = (Math.cos(offset)+0.5)*canvas.height;
\t\t\t\t\t\t\t\tvar cpy2 = canvas.height - cpy1;
\t\t\t\t\t\t\t\tctx.beginPath();
\t\t\t\t\t\t\t\tctx.moveTo(0, y);
\t\t\t\t\t\t\t\tctx.bezierCurveTo(canvas.width/3, cpy1, 2*canvas.width/3, cpy2, canvas.width, y);
\t\t\t\t\t\t\t\tctx.stroke();
\t\t\t\t\t\t\t  }
\t\t\t\t\t\t\t  i++;
\t\t\t\t\t\t\t};
\t\t\t\t\t\t\tsetInterval(cycle, 30);
\t\t\t\t\t\t</script>
\t\t\t\t<br class=\"clearfloat\" />
\t\t\t\t<div id=\"pieddepage\">
\t\t\t\t    <p>&copy; ";
        // line 93
        echo twig_escape_filter($this->env, $this->getContext($context, "annee"), "html", null, true);
        echo " Global Réservation inc.</p>\t
\t\t\t\t</div>
\t\t</div>
\t</body>
</html>
";
    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        echo " 
    \t \t<script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/js/jquery-1.6.1.js"), "html", null, true);
        echo "\" ></script>
    \t \t<script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappadmin/js/custom.js"), "html", null, true);
        echo "\" ></script>
    \t \t<script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappadmin/js/ckeditor.js"), "html", null, true);
        echo "\"></script>\t
    \t \t<script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappadmin/js/jquery-ui-1.9.1.custom.js"), "html", null, true);
        echo "\"></script>\t
    \t <!--[if IE]>
    \t <script>
  \t\t\t/*! HTML5 Shiv pre3.5 | @afarkas @jdalton @jon_neal @rem | MIT/GPL2 Licensed 
    \t\tUncompressed source: https://github.com/aFarkas/html5shiv */
\t\t\t(function(a,b){function h(a,b){var c=a.createElement(\"p\"),d=a.getElementsByTagName(\"head\")[0]||a.documentElement;return c.innerHTML=\"x<style>\"+b+\"</style>\",d.insertBefore(c.lastChild,d.firstChild)}function i(){var a=l.elements;return typeof a==\"string\"?a.split(\" \"):a}function j(a){var b={},c=a.createElement,f=a.createDocumentFragment,g=f();a.createElement=function(a){l.shivMethods||c(a);var f;return b[a]?f=b[a].cloneNode():e.test(a)?f=(b[a]=c(a)).cloneNode():f=c(a),f.canHaveChildren&&!d.test(a)?g.appendChild(f):f},a.createDocumentFragment=Function(\"h,f\",\"return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&(\"+i().join().replace(/\\w+/g,function(a){return b[a]=c(a),g.createElement(a),'c(\"'+a+'\")'})+\");return n}\")(l,g)}function k(a){var b;return a.documentShived?a:(l.shivCSS&&!f&&(b=!!h(a,\"article,aside,details,figcaption,figure,footer,header,hgroup,nav,section{display:block}audio{display:none}canvas,video{display:inline-block;*display:inline;*zoom:1}[hidden]{display:none}audio[controls]{display:inline-block;*display:inline;*zoom:1}mark{background:#FF0;color:#000}\")),g||(b=!j(a)),b&&(a.documentShived=b),a)}function p(a){var b,c=a.getElementsByTagName(\"*\"),d=c.length,e=RegExp(\"^(?:\"+i().join(\"|\")+\")\$\",\"i\"),f=[];while(d--)b=c[d],e.test(b.nodeName)&&f.push(b.applyElement(q(b)));return f}function q(a){var b,c=a.attributes,d=c.length,e=a.ownerDocument.createElement(n+\":\"+a.nodeName);while(d--)b=c[d],b.specified&&e.setAttribute(b.nodeName,b.nodeValue);return e.style.cssText=a.style.cssText,e}function r(a){var b,c=a.split(\"{\"),d=c.length,e=RegExp(\"(^|[\\\\s,>+~])(\"+i().join(\"|\")+\")(?=[[\\\\s,>+~#.:]|\$)\",\"gi\"),f=\"\$1\"+n+\"\\\\:\$2\";while(d--)b=c[d]=c[d].split(\"}\"),b[b.length-1]=b[b.length-1].replace(e,f),c[d]=b.join(\"}\");return c.join(\"{\")}function s(a){var b=a.length;while(b--)a[b].removeNode()}function t(a){var b,c,d=a.namespaces,e=a.parentWindow;return!o||a.printShived?a:(typeof d[n]==\"undefined\"&&d.add(n),e.attachEvent(\"onbeforeprint\",function(){var d,e,f,g=a.styleSheets,i=[],j=g.length,k=Array(j);while(j--)k[j]=g[j];while(f=k.pop())if(!f.disabled&&m.test(f.media)){for(d=f.imports,j=0,e=d.length;j<e;j++)k.push(d[j]);try{i.push(f.cssText)}catch(l){}}i=r(i.reverse().join(\"\")),c=p(a),b=h(a,i)}),e.attachEvent(\"onafterprint\",function(){s(c),b.removeNode(!0)}),a.printShived=!0,a)}var c=a.html5||{},d=/^<|^(?:button|form|map|select|textarea|object|iframe)\$/i,e=/^<|^(?:a|b|button|code|div|fieldset|form|h1|h2|h3|h4|h5|h6|i|iframe|img|input|label|li|link|ol|option|p|param|q|script|select|span|strong|style|table|tbody|td|textarea|tfoot|th|thead|tr|ul)\$/i,f,g;(function(){var c=b.createElement(\"a\");c.innerHTML=\"<xyz></xyz>\",f=\"hidden\"in c,f&&typeof injectElementWithStyles==\"function\"&&injectElementWithStyles(\"#modernizr{}\",function(b){b.hidden=!0,f=(a.getComputedStyle?getComputedStyle(b,null):b.currentStyle).display==\"none\"}),g=c.childNodes.length==1||function(){try{b.createElement(\"a\")}catch(a){return!0}var c=b.createDocumentFragment();return typeof c.cloneNode==\"undefined\"||typeof c.createDocumentFragment==\"undefined\"||typeof c.createElement==\"undefined\"}()})();var l={elements:c.elements||\"abbr article aside audio bdi canvas data datalist details figcaption figure footer header hgroup mark meter nav output progress section summary time video\",shivCSS:c.shivCSS!==!1,shivMethods:c.shivMethods!==!1,type:\"default\",shivDocument:k};a.html5=l,k(b);var m=/^\$|\\b(?:all|print)\\b/,n=\"html5shiv\",o=!g&&function(){var c=b.documentElement;return typeof b.namespaces!=\"undefined\"&&typeof b.parentWindow!=\"undefined\"&&typeof c.applyElement!=\"undefined\"&&typeof c.removeNode!=\"undefined\"&&typeof a.attachEvent!=\"undefined\"}();l.type+=\" print\",l.shivPrint=t,t(b)})(this,document)
\t\t </script>
\t\t   <![endif]-->\t
    \t ";
    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 23
        echo "    \t \t<link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappglobal/images/favicon.ico"), "html", null, true);
        echo "\" />
    \t \t<link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappadmin/css/gestion.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    \t \t<link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappadmin/css/jquery-ui.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    \t ";
    }

    public function getTemplateName()
    {
        return "MyAppAdminBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 25,  184 => 24,  179 => 23,  176 => 22,  163 => 13,  159 => 12,  155 => 11,  151 => 10,  146 => 9,  136 => 93,  103 => 62,  95 => 52,  90 => 50,  87 => 49,  84 => 48,  78 => 46,  72 => 44,  69 => 43,  67 => 42,  60 => 37,  52 => 36,  50 => 35,  46 => 34,  41 => 31,  36 => 27,  34 => 22,  31 => 21,  29 => 9,  19 => 1,);
    }
}

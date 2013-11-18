<?php

/* PortalBundle::base.html.twig */
class __TwigTemplate_a68f57c160189f08103636524cd01125727daa561c395eccf257747fbfb64dc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header_styles' => array($this, 'block_header_styles'),
            'header_js' => array($this, 'block_header_js'),
            'body' => array($this, 'block_body'),
            'footer_js' => array($this, 'block_footer_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE  html>
<html lang=\"en\" class=\"no-js\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portal/images/favicon.ico"), "html", null, true);
        echo "\" rel=\"shortcut icon\" type=\"image/x-icon\"/>
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!-- Styles   -->
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/base/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jqueryslidemenu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portal/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    ";
        // line 11
        $this->displayBlock('header_styles', $context, $blocks);
        // line 12
        echo "
    <!-- JavaScript Files    -->
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.custom.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/modernizr-latest.js"), "html", null, true);
        echo "\"></script>

    <script>
        var arrowimages = { down: ['downarrowclass', '";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portal/images/down.gif"), "html", null, true);
        echo "', 23], right: ['rightarrowclass', '";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portal/images/right.gif"), "html", null, true);
        echo "'] };
    </script>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jqueryslidemenu.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 22
        $this->displayBlock('header_js', $context, $blocks);
        // line 23
        echo "</head>
<!--[if lt IE 9 ]>
<body id=\"index\" class=\"home ieLegacy\"> <![endif]-->
<!--[if (gt IE 8)|!(IE)]><!-->
<body id=\"index\" class=\"home\">
<!--<![endif]-->
<header id=\"banner\" class=\"body\">
    ";
        // line 30
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($_app_, "user")) {
            // line 31
            echo "        <section style=\"float:right; text-align: right; font-size: 12px;\">
            ";
            // line 32
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "user"), "username"), "html", null, true);
            echo " MCN: 1234576 <a href=\"";
            echo $this->env->getExtension('routing')->getPath("portal_logout");
            echo "\">logout</a> <br/>
            Temple Street<br/>
            ";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/M/Y"), "html", null, true);
            echo "
        </section>
    ";
        }
        // line 37
        echo "
    <section>
        <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portal/images/hse-logo.png"), "html", null, true);
        echo "\" alt=\"HSE logo\" style=\"float: left;\"/>
        <hgroup>
            <h1>Feidhmeannacht na Seirbhíse Sláinte</h1>
            <h1>Health Service Executive</h1>
            <h1>Irish Pediatric Diabetes Portal</h1>
        </hgroup>
    </section>
</header>
";
        // line 47
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($_app_, "user")) {
            // line 48
            echo "    Menu goes here
";
        }
        // line 53
        echo "
";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "</body>
<script type=\"text/javascript\">
    //Specify full URL to down and right arrow images (23 is padding-right to add to top level LIs with drop downs):
    //var arrowimages={down:['downarrowclass', '../../images/down.gif', 23], right:['rightarrowclass', '../../images/right.gif']}
    \$(\".mainMenu\").each(function(){
        var currentId = \$(this).attr('id');
        jqueryslidemenu.buildmenu(currentId, arrowimages);
    });
</script>
";
        // line 65
        $this->displayBlock('footer_js', $context, $blocks);
        // line 66
        echo "</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Diabetes Portal";
    }

    // line 11
    public function block_header_styles($context, array $blocks = array())
    {
    }

    // line 22
    public function block_header_js($context, array $blocks = array())
    {
    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
    }

    // line 65
    public function block_footer_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "PortalBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 65,  173 => 54,  168 => 22,  163 => 11,  157 => 6,  153 => 66,  151 => 65,  140 => 56,  138 => 54,  135 => 53,  131 => 48,  128 => 47,  117 => 39,  113 => 37,  107 => 34,  99 => 32,  96 => 31,  93 => 30,  84 => 23,  82 => 22,  78 => 21,  71 => 19,  65 => 16,  61 => 15,  57 => 14,  53 => 12,  51 => 11,  47 => 10,  43 => 9,  34 => 6,  30 => 5,  24 => 1,  42 => 7,  39 => 8,  32 => 3,  29 => 2,);
    }
}

<?php

/* PortalBundle:Security:login.html.twig */
class __TwigTemplate_1219592a4aef8ffd4ab0afedf6db3747bacd5b81e0d1745cc7928548346a7954 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PortalBundle::base.html.twig");

        $this->blocks = array(
            'header_styles' => array($this, 'block_header_styles'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PortalBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_header_styles($context, array $blocks = array())
    {
        // line 3
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portal/css/login-box.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    <article id=\"login-wrapper\">
        <div id=\"login-box\">
            <form id=\"loginForm\" action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("portal_login_check");
        echo "\" method=\"post\">
                <H2>Login</H2>
                Access to this site is restricted to only authorised users.
                Contact help support in case of having problems login into the site.
                <div class=\"login-box-name\" style=\"margin-top:20px;\">User Id:</div>
                <div class=\"login-box-field\">
                    <input name=\"_username\" class=\"form-login\" title=\"Username\" value=\"";
        // line 15
        if (isset($context["last_username"])) { $_last_username_ = $context["last_username"]; } else { $_last_username_ = null; }
        echo twig_escape_filter($this->env, $_last_username_, "html", null, true);
        echo "\" size=\"30\" maxlength=\"2048\"/>
                </div>
                <div class=\"login-box-name\" style=\"margin-top: 10px;\">Password:</div>
                <div class=\"login-box-field\">
                    <input name=\"_password\" type=\"password\" class=\"form-login\" title=\"Password\" value=\"\" size=\"30\"
                           maxlength=\"2048\"/>
                </div>
                <span class=\"login-box-options\">
                    <!--<input type=\"checkbox\" name=\"1\" value=\"1\"> Remember Me -->
                    <a href=\"#\">Forgot password?</a>
                </span>
                <br/>
                <br/>
                <a class=\"noHoverEffect\" href=\"#\" onclick=\"document.getElementById('loginForm').submit();\">
                    <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portal/images/login-btn.png"), "html", null, true);
        echo "\"/>
                </a>
            </form>
            ";
        // line 32
        if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
        if ($_error_) {
            // line 33
            echo "                <div>";
            if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_error_, "message"), "html", null, true);
            echo "</div>
            ";
        }
        // line 35
        echo "        </div>
    </article>
";
    }

    public function getTemplateName()
    {
        return "PortalBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 35,  82 => 33,  79 => 32,  73 => 29,  55 => 15,  46 => 9,  42 => 7,  39 => 6,  32 => 3,  29 => 2,);
    }
}

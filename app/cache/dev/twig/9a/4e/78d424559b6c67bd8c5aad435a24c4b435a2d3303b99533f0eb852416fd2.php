<?php

/* PortalBundle:Home:home.html.twig */
class __TwigTemplate_9a4e78d424559b6c67bd8c5aad435a24c4b435a2d3303b99533f0eb852416fd2 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portal/css/patientSearch.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<article class=\"body\">
    <h2>Home Page</h2>
    <section style=\"width: 50%; margin-right: auto; margin-left: auto; margin-top: 20%;\">
        <hgroup>
            <h3>Page in progress</h3>
        </hgroup>
        <fieldset>
            <p>
                This page could contain a dashboard/summary panel for the user.
            </p>
            <p>
                The page should also include a comprehensive section in regards disclaimers, rules,
                policies and so on.
            </p>
        </fieldset>
    </section>
</article>
";
    }

    public function getTemplateName()
    {
        return "PortalBundle:Home:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 7,  39 => 6,  32 => 3,  29 => 2,);
    }
}

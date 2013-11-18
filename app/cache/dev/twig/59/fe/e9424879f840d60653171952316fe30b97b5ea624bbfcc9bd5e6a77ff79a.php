<?php

/* PortalBundle:Common:menu.html.twig */
class __TwigTemplate_59fee9424879f840d60653171952316fe30b97b5ea624bbfcc9bd5e6a77ff79a extends Twig_Template
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
        echo "<div id=\"pageMenu\" class=\"mainMenu jqueryslidemenu\">
    <ul>
        <li><a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("portal_homepage");
        echo "\">Home</a></li>
        <li><a href=\"#\">Patient</a>
            <ul>
                <li><a href=\"../patientSearch/patientSearch.php\">Search</a></li>
                <li><a href=\"../newPatient/newPatient.php\">New Patient</a></li>
            </ul>
        </li>
        <li><a href=\"#\">Admin</a></li>
        <li><a href=\"#\">Help</a></li>
    </ul>
    <br style=\"clear: left\" />
</div>";
    }

    public function getTemplateName()
    {
        return "PortalBundle:Common:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}

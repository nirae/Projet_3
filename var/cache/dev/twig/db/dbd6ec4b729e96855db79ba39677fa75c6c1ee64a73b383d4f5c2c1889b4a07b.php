<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_eb24303d45805a0e0837c3d15d4bd7f9d00fc0fbe4d4b5a059a5569defbced82 extends Twig_Template
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
        $__internal_1212b65c8ec68dbd99dc7573dbffec4a1127356c2769f72a09a80e4063da29c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1212b65c8ec68dbd99dc7573dbffec4a1127356c2769f72a09a80e4063da29c4->enter($__internal_1212b65c8ec68dbd99dc7573dbffec4a1127356c2769f72a09a80e4063da29c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_1212b65c8ec68dbd99dc7573dbffec4a1127356c2769f72a09a80e4063da29c4->leave($__internal_1212b65c8ec68dbd99dc7573dbffec4a1127356c2769f72a09a80e4063da29c4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
";
    }
}

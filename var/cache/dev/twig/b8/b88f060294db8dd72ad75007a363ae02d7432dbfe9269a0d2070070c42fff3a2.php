<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_bf804485a4652727eb2a90562ba442c5da9fff30387010be58e1020391de62a4 extends Twig_Template
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
        $__internal_b17a8106ba8e4c725f070ab1cf63c891b2bc102a8a71e0f40421aec622d23749 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b17a8106ba8e4c725f070ab1cf63c891b2bc102a8a71e0f40421aec622d23749->enter($__internal_b17a8106ba8e4c725f070ab1cf63c891b2bc102a8a71e0f40421aec622d23749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b17a8106ba8e4c725f070ab1cf63c891b2bc102a8a71e0f40421aec622d23749->leave($__internal_b17a8106ba8e4c725f070ab1cf63c891b2bc102a8a71e0f40421aec622d23749_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
";
    }
}

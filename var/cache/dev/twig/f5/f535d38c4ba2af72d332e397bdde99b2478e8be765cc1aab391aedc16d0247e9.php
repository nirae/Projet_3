<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_12f209ffcbf12de42322fcb4d14db514a078ce3151b156742a9e0703771607d2 extends Twig_Template
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
        $__internal_5c42e5b2d7db03ef25870345704ffb669feb7008457fcf95466e2e0ca15b49ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c42e5b2d7db03ef25870345704ffb669feb7008457fcf95466e2e0ca15b49ae->enter($__internal_5c42e5b2d7db03ef25870345704ffb669feb7008457fcf95466e2e0ca15b49ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_5c42e5b2d7db03ef25870345704ffb669feb7008457fcf95466e2e0ca15b49ae->leave($__internal_5c42e5b2d7db03ef25870345704ffb669feb7008457fcf95466e2e0ca15b49ae_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/error.xml.twig' %}
";
    }
}

<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_2154ccee288db859a984485346eedae90362e336f28685b780cfb50953725ba3 extends Twig_Template
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
        $__internal_1bc6e59aa2de285d485e421fc4c70e242fc9a89f57617d9f08646ce261fcf17e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bc6e59aa2de285d485e421fc4c70e242fc9a89f57617d9f08646ce261fcf17e->enter($__internal_1bc6e59aa2de285d485e421fc4c70e242fc9a89f57617d9f08646ce261fcf17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1bc6e59aa2de285d485e421fc4c70e242fc9a89f57617d9f08646ce261fcf17e->leave($__internal_1bc6e59aa2de285d485e421fc4c70e242fc9a89f57617d9f08646ce261fcf17e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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

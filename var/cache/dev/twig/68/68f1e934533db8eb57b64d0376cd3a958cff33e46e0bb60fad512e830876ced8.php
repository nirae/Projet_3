<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_70b980b3205d764381698ac87b452a1e6ff111d75629f1cf68e87a4262f3d28a extends Twig_Template
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
        $__internal_b282aad85e9dd3e3dae82e75250a376708da5633157d869ce79923c02e69a592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b282aad85e9dd3e3dae82e75250a376708da5633157d869ce79923c02e69a592->enter($__internal_b282aad85e9dd3e3dae82e75250a376708da5633157d869ce79923c02e69a592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_b282aad85e9dd3e3dae82e75250a376708da5633157d869ce79923c02e69a592->leave($__internal_b282aad85e9dd3e3dae82e75250a376708da5633157d869ce79923c02e69a592_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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

<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_dee04662cbd2a58cd5d62750de0715d8ce842cac4b974f0034a202e3987ec9d5 extends Twig_Template
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
        $__internal_e513af07f5974b8745629a581721244e39ad0875f3524019bbb755c736e84f28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e513af07f5974b8745629a581721244e39ad0875f3524019bbb755c736e84f28->enter($__internal_e513af07f5974b8745629a581721244e39ad0875f3524019bbb755c736e84f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_e513af07f5974b8745629a581721244e39ad0875f3524019bbb755c736e84f28->leave($__internal_e513af07f5974b8745629a581721244e39ad0875f3524019bbb755c736e84f28_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return "{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
";
    }
}

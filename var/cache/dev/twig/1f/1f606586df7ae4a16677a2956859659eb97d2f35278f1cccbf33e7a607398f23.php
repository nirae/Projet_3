<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2b1f1eff28d63ecfd9cf8df6d104d34d9c9ae55e760b0de8ad2833be0ccf63dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c68a0701e9e5790ea614ae1712e56cbf5114ec1576ac8ec1b48496e5db2631d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c68a0701e9e5790ea614ae1712e56cbf5114ec1576ac8ec1b48496e5db2631d3->enter($__internal_c68a0701e9e5790ea614ae1712e56cbf5114ec1576ac8ec1b48496e5db2631d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c68a0701e9e5790ea614ae1712e56cbf5114ec1576ac8ec1b48496e5db2631d3->leave($__internal_c68a0701e9e5790ea614ae1712e56cbf5114ec1576ac8ec1b48496e5db2631d3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9d9ace47ab962b680b5f419a85519a18c697eeddfd3c89691a040920127edc56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d9ace47ab962b680b5f419a85519a18c697eeddfd3c89691a040920127edc56->enter($__internal_9d9ace47ab962b680b5f419a85519a18c697eeddfd3c89691a040920127edc56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9d9ace47ab962b680b5f419a85519a18c697eeddfd3c89691a040920127edc56->leave($__internal_9d9ace47ab962b680b5f419a85519a18c697eeddfd3c89691a040920127edc56_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bad000d750b1ca1de46bd8382bd3f9ce6ea99974d33c2773ee53d28eedbf79a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bad000d750b1ca1de46bd8382bd3f9ce6ea99974d33c2773ee53d28eedbf79a4->enter($__internal_bad000d750b1ca1de46bd8382bd3f9ce6ea99974d33c2773ee53d28eedbf79a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bad000d750b1ca1de46bd8382bd3f9ce6ea99974d33c2773ee53d28eedbf79a4->leave($__internal_bad000d750b1ca1de46bd8382bd3f9ce6ea99974d33c2773ee53d28eedbf79a4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a66487743143c1c4727caa5a2b22efaf229ba9684ec2f034e5dfe072d27e4534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a66487743143c1c4727caa5a2b22efaf229ba9684ec2f034e5dfe072d27e4534->enter($__internal_a66487743143c1c4727caa5a2b22efaf229ba9684ec2f034e5dfe072d27e4534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a66487743143c1c4727caa5a2b22efaf229ba9684ec2f034e5dfe072d27e4534->leave($__internal_a66487743143c1c4727caa5a2b22efaf229ba9684ec2f034e5dfe072d27e4534_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}

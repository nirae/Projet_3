<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_c0575522022cbd2d12fa092c4a4874c8a9187fc5134fdaf739faa5d8be59cf6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca9eae8fde5a386650ff1bcea98ea2bf5b55eef72bb4a12a8f2cb8e5afe9b952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca9eae8fde5a386650ff1bcea98ea2bf5b55eef72bb4a12a8f2cb8e5afe9b952->enter($__internal_ca9eae8fde5a386650ff1bcea98ea2bf5b55eef72bb4a12a8f2cb8e5afe9b952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca9eae8fde5a386650ff1bcea98ea2bf5b55eef72bb4a12a8f2cb8e5afe9b952->leave($__internal_ca9eae8fde5a386650ff1bcea98ea2bf5b55eef72bb4a12a8f2cb8e5afe9b952_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_507b96de173053e02305e766fcdd39831794f4fe153411f7bef838dfba9327e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_507b96de173053e02305e766fcdd39831794f4fe153411f7bef838dfba9327e1->enter($__internal_507b96de173053e02305e766fcdd39831794f4fe153411f7bef838dfba9327e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_507b96de173053e02305e766fcdd39831794f4fe153411f7bef838dfba9327e1->leave($__internal_507b96de173053e02305e766fcdd39831794f4fe153411f7bef838dfba9327e1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_65a53ad01281271a2408a52ae9522bfe1ac6f3b3d62674fad539179a13ad227e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65a53ad01281271a2408a52ae9522bfe1ac6f3b3d62674fad539179a13ad227e->enter($__internal_65a53ad01281271a2408a52ae9522bfe1ac6f3b3d62674fad539179a13ad227e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_65a53ad01281271a2408a52ae9522bfe1ac6f3b3d62674fad539179a13ad227e->leave($__internal_65a53ad01281271a2408a52ae9522bfe1ac6f3b3d62674fad539179a13ad227e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fd069090c22bac5c6ba3128518462ec18e40b03847cbcf13e558332ed18ce409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd069090c22bac5c6ba3128518462ec18e40b03847cbcf13e558332ed18ce409->enter($__internal_fd069090c22bac5c6ba3128518462ec18e40b03847cbcf13e558332ed18ce409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_fd069090c22bac5c6ba3128518462ec18e40b03847cbcf13e558332ed18ce409->leave($__internal_fd069090c22bac5c6ba3128518462ec18e40b03847cbcf13e558332ed18ce409_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
";
    }
}

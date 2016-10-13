<?php

/* ::base.html.twig */
class __TwigTemplate_8205ed026d2837e7854b93dbcaf95d1c97e9d799b0739b6f8db5dbb1c4f704ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_105519afb1261882974ea455886f600b6ec88242243f77c133d79dc3c3b621fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_105519afb1261882974ea455886f600b6ec88242243f77c133d79dc3c3b621fc->enter($__internal_105519afb1261882974ea455886f600b6ec88242243f77c133d79dc3c3b621fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_105519afb1261882974ea455886f600b6ec88242243f77c133d79dc3c3b621fc->leave($__internal_105519afb1261882974ea455886f600b6ec88242243f77c133d79dc3c3b621fc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_30e89247cdef8c7add9bc4d7f2eb61b943f8992c5b0974ff3a1eba1c5be97b0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30e89247cdef8c7add9bc4d7f2eb61b943f8992c5b0974ff3a1eba1c5be97b0f->enter($__internal_30e89247cdef8c7add9bc4d7f2eb61b943f8992c5b0974ff3a1eba1c5be97b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_30e89247cdef8c7add9bc4d7f2eb61b943f8992c5b0974ff3a1eba1c5be97b0f->leave($__internal_30e89247cdef8c7add9bc4d7f2eb61b943f8992c5b0974ff3a1eba1c5be97b0f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_162bda86fde3a4104e1bc2e20f6e340cae1619de46d8380028c5f86322f26d7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_162bda86fde3a4104e1bc2e20f6e340cae1619de46d8380028c5f86322f26d7b->enter($__internal_162bda86fde3a4104e1bc2e20f6e340cae1619de46d8380028c5f86322f26d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_162bda86fde3a4104e1bc2e20f6e340cae1619de46d8380028c5f86322f26d7b->leave($__internal_162bda86fde3a4104e1bc2e20f6e340cae1619de46d8380028c5f86322f26d7b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3feb35b4b0430e55a42ffd2a4f469c9de036be9f1bf0fa24a22db1d894767bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3feb35b4b0430e55a42ffd2a4f469c9de036be9f1bf0fa24a22db1d894767bc->enter($__internal_b3feb35b4b0430e55a42ffd2a4f469c9de036be9f1bf0fa24a22db1d894767bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b3feb35b4b0430e55a42ffd2a4f469c9de036be9f1bf0fa24a22db1d894767bc->leave($__internal_b3feb35b4b0430e55a42ffd2a4f469c9de036be9f1bf0fa24a22db1d894767bc_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_87d3671fd1d44439018d0ce5fed4ebd099da3e789d0d86426c34ae5b1eb57ada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87d3671fd1d44439018d0ce5fed4ebd099da3e789d0d86426c34ae5b1eb57ada->enter($__internal_87d3671fd1d44439018d0ce5fed4ebd099da3e789d0d86426c34ae5b1eb57ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_87d3671fd1d44439018d0ce5fed4ebd099da3e789d0d86426c34ae5b1eb57ada->leave($__internal_87d3671fd1d44439018d0ce5fed4ebd099da3e789d0d86426c34ae5b1eb57ada_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
";
    }
}

<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_165132a3960ac4d1b39c0d4ba90de3536fe75eac8bbbeea68c2e1f63d70a6360 extends Twig_Template
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
        $__internal_4f1d6bba6e89ca9c22f1b2fabac0a4c59e18ce5ecc5c9d9c4fef5ea3676ec755 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f1d6bba6e89ca9c22f1b2fabac0a4c59e18ce5ecc5c9d9c4fef5ea3676ec755->enter($__internal_4f1d6bba6e89ca9c22f1b2fabac0a4c59e18ce5ecc5c9d9c4fef5ea3676ec755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_4f1d6bba6e89ca9c22f1b2fabac0a4c59e18ce5ecc5c9d9c4fef5ea3676ec755->leave($__internal_4f1d6bba6e89ca9c22f1b2fabac0a4c59e18ce5ecc5c9d9c4fef5ea3676ec755_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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

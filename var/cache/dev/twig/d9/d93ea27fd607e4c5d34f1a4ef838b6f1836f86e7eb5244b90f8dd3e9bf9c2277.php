<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_4618b82b5ea61e4bf16f9e80353c1c6999ca538c98c96d2b987def778e0138c3 extends Twig_Template
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
        $__internal_fa59760b0bcbf67261826c56fe396383863a180a8ee35b359615bdf9a6fa3eb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa59760b0bcbf67261826c56fe396383863a180a8ee35b359615bdf9a6fa3eb7->enter($__internal_fa59760b0bcbf67261826c56fe396383863a180a8ee35b359615bdf9a6fa3eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_fa59760b0bcbf67261826c56fe396383863a180a8ee35b359615bdf9a6fa3eb7->leave($__internal_fa59760b0bcbf67261826c56fe396383863a180a8ee35b359615bdf9a6fa3eb7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
    }
}

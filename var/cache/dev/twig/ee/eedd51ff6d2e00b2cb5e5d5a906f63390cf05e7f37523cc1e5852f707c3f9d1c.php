<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_389958fb25a9e28a02a53c90b7674377245c6f5284da6b34bd032014adc56bf1 extends Twig_Template
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
        $__internal_b8f43df99e46493d1942dc59c6b0510a934a1d0eaf158ef9f79dcf63ca92725b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8f43df99e46493d1942dc59c6b0510a934a1d0eaf158ef9f79dcf63ca92725b->enter($__internal_b8f43df99e46493d1942dc59c6b0510a934a1d0eaf158ef9f79dcf63ca92725b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_b8f43df99e46493d1942dc59c6b0510a934a1d0eaf158ef9f79dcf63ca92725b->leave($__internal_b8f43df99e46493d1942dc59c6b0510a934a1d0eaf158ef9f79dcf63ca92725b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
    }
}

<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_2be375000b7c18374472a977c8d5fe001166220b8beef366afe8a7d77f854ec7 extends Twig_Template
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
        $__internal_acca0246b35f29e3b6d9d03283512b053a7a385896bcfa859b39fef6b9e59f73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acca0246b35f29e3b6d9d03283512b053a7a385896bcfa859b39fef6b9e59f73->enter($__internal_acca0246b35f29e3b6d9d03283512b053a7a385896bcfa859b39fef6b9e59f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_acca0246b35f29e3b6d9d03283512b053a7a385896bcfa859b39fef6b9e59f73->leave($__internal_acca0246b35f29e3b6d9d03283512b053a7a385896bcfa859b39fef6b9e59f73_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
    }
}

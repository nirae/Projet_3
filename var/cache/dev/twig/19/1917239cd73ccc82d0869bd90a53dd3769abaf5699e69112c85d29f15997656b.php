<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_03fd1a4ae39906bcb77a5f8ba8fccf9bf5ba0ca11fbf42645ddafebcbf5ed63d extends Twig_Template
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
        $__internal_65227b1d4e902635431f275ba882686785ae0884ed17e80eeb3263e9f790feac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65227b1d4e902635431f275ba882686785ae0884ed17e80eeb3263e9f790feac->enter($__internal_65227b1d4e902635431f275ba882686785ae0884ed17e80eeb3263e9f790feac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_65227b1d4e902635431f275ba882686785ae0884ed17e80eeb3263e9f790feac->leave($__internal_65227b1d4e902635431f275ba882686785ae0884ed17e80eeb3263e9f790feac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
    }
}

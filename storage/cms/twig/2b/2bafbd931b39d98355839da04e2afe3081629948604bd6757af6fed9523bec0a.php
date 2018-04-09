<?php

/* /var/www/estate.tmp/themes/estate/partials/loader.htm */
class __TwigTemplate_adca9adf922741a543ef684fc4abe94ffbc57939eb39c081a3fb806fcbf3a714 extends Twig_Template
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
        // line 1
        echo "<div class=\"page-loader__logo\">
    <img src=\"";
        // line 2
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/ps.jpg");
        echo "\" alt=\"PrimaEstate Logo\">
</div>
<!-- .page-loader__logo

<div class=\"sk-folding-cube\">
    <div class=\"sk-cube1 sk-cube\"></div>
    <div class=\"sk-cube2 sk-cube\"></div>
    <div class=\"sk-cube4 sk-cube\"></div>
    <div class=\"sk-cube3 sk-cube\"></div>
</div>
    <!-- .sk-folding-cube -->";
    }

    public function getTemplateName()
    {
        return "/var/www/estate.tmp/themes/estate/partials/loader.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"page-loader__logo\">
    <img src=\"{{ 'assets/images/ps.jpg'|theme }}\" alt=\"PrimaEstate Logo\">
</div>
<!-- .page-loader__logo

<div class=\"sk-folding-cube\">
    <div class=\"sk-cube1 sk-cube\"></div>
    <div class=\"sk-cube2 sk-cube\"></div>
    <div class=\"sk-cube4 sk-cube\"></div>
    <div class=\"sk-cube3 sk-cube\"></div>
</div>
    <!-- .sk-folding-cube -->", "/var/www/estate.tmp/themes/estate/partials/loader.htm", "");
    }
}

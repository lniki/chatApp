<?php

/* default/index.html.twig */
class __TwigTemplate_5e4b6eca46cba4f7b941d7b7426d03adc657e5447b5767ad8172ca6f48a82e93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_013c9bbda9bd8705c90493181d289e8e83e2fbcfc1404f9df5482d5a8669d08b = $this->env->getExtension("native_profiler");
        $__internal_013c9bbda9bd8705c90493181d289e8e83e2fbcfc1404f9df5482d5a8669d08b->enter($__internal_013c9bbda9bd8705c90493181d289e8e83e2fbcfc1404f9df5482d5a8669d08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_013c9bbda9bd8705c90493181d289e8e83e2fbcfc1404f9df5482d5a8669d08b->leave($__internal_013c9bbda9bd8705c90493181d289e8e83e2fbcfc1404f9df5482d5a8669d08b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f5a8ab8024a8e3fa9e44b1e46b4ab264922a3f13134d5598ed2174ccc88a859 = $this->env->getExtension("native_profiler");
        $__internal_5f5a8ab8024a8e3fa9e44b1e46b4ab264922a3f13134d5598ed2174ccc88a859->enter($__internal_5f5a8ab8024a8e3fa9e44b1e46b4ab264922a3f13134d5598ed2174ccc88a859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Homepage.
    <p>Activate your account before ";
        // line 5
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "next Monday", "M j, Y"), "html", null, true);
        echo "</p>
";
        
        $__internal_5f5a8ab8024a8e3fa9e44b1e46b4ab264922a3f13134d5598ed2174ccc88a859->leave($__internal_5f5a8ab8024a8e3fa9e44b1e46b4ab264922a3f13134d5598ed2174ccc88a859_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}

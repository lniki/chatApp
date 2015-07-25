<?php

/* default/hello.html.twig */
class __TwigTemplate_826b38822c35af6f7ce744b6dd2e255956d89055e21122a8567898f2708d8658 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/hello.html.twig", 1);
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
        $__internal_95a547f50f7d513da4782ad42cff5ed16960f61a33e2a2005cb070b4629c104f = $this->env->getExtension("native_profiler");
        $__internal_95a547f50f7d513da4782ad42cff5ed16960f61a33e2a2005cb070b4629c104f->enter($__internal_95a547f50f7d513da4782ad42cff5ed16960f61a33e2a2005cb070b4629c104f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/hello.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95a547f50f7d513da4782ad42cff5ed16960f61a33e2a2005cb070b4629c104f->leave($__internal_95a547f50f7d513da4782ad42cff5ed16960f61a33e2a2005cb070b4629c104f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b41cfba58ff79864fb711ee57298ca16c778aed3e9556af2c9398ed432586d6 = $this->env->getExtension("native_profiler");
        $__internal_7b41cfba58ff79864fb711ee57298ca16c778aed3e9556af2c9398ed432586d6->enter($__internal_7b41cfba58ff79864fb711ee57298ca16c778aed3e9556af2c9398ed432586d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Hi ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "! Welcome to Symfony!</h1>
";
        
        $__internal_7b41cfba58ff79864fb711ee57298ca16c778aed3e9556af2c9398ed432586d6->leave($__internal_7b41cfba58ff79864fb711ee57298ca16c778aed3e9556af2c9398ed432586d6_prof);

    }

    public function getTemplateName()
    {
        return "default/hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}

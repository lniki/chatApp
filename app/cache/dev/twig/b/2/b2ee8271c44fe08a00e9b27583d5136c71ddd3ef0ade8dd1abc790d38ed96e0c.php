<?php

/* base.html.twig */
class __TwigTemplate_b2ee8271c44fe08a00e9b27583d5136c71ddd3ef0ade8dd1abc790d38ed96e0c extends Twig_Template
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
        $__internal_1fea165ef9e663fc4dafe6302d4a8dff2eb93042ea8c523c641dd2ddc78cc714 = $this->env->getExtension("native_profiler");
        $__internal_1fea165ef9e663fc4dafe6302d4a8dff2eb93042ea8c523c641dd2ddc78cc714->enter($__internal_1fea165ef9e663fc4dafe6302d4a8dff2eb93042ea8c523c641dd2ddc78cc714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
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
        
        $__internal_1fea165ef9e663fc4dafe6302d4a8dff2eb93042ea8c523c641dd2ddc78cc714->leave($__internal_1fea165ef9e663fc4dafe6302d4a8dff2eb93042ea8c523c641dd2ddc78cc714_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a1b9bc638d0d8ba9dcbf1fb5a0d7e2b22f527a886cbb88bb4e752432ac14d5ba = $this->env->getExtension("native_profiler");
        $__internal_a1b9bc638d0d8ba9dcbf1fb5a0d7e2b22f527a886cbb88bb4e752432ac14d5ba->enter($__internal_a1b9bc638d0d8ba9dcbf1fb5a0d7e2b22f527a886cbb88bb4e752432ac14d5ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a1b9bc638d0d8ba9dcbf1fb5a0d7e2b22f527a886cbb88bb4e752432ac14d5ba->leave($__internal_a1b9bc638d0d8ba9dcbf1fb5a0d7e2b22f527a886cbb88bb4e752432ac14d5ba_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9f88f308090714c2d4bc713f72ddcd476cf1641c239b6d11bc0c92989d4d1359 = $this->env->getExtension("native_profiler");
        $__internal_9f88f308090714c2d4bc713f72ddcd476cf1641c239b6d11bc0c92989d4d1359->enter($__internal_9f88f308090714c2d4bc713f72ddcd476cf1641c239b6d11bc0c92989d4d1359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9f88f308090714c2d4bc713f72ddcd476cf1641c239b6d11bc0c92989d4d1359->leave($__internal_9f88f308090714c2d4bc713f72ddcd476cf1641c239b6d11bc0c92989d4d1359_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_294630288721ec0fb5405d4db73bc0f461396087da603a8604098608f0b78c06 = $this->env->getExtension("native_profiler");
        $__internal_294630288721ec0fb5405d4db73bc0f461396087da603a8604098608f0b78c06->enter($__internal_294630288721ec0fb5405d4db73bc0f461396087da603a8604098608f0b78c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_294630288721ec0fb5405d4db73bc0f461396087da603a8604098608f0b78c06->leave($__internal_294630288721ec0fb5405d4db73bc0f461396087da603a8604098608f0b78c06_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_55c3d204976bcb162f7b2587fc3b70e023e292512eb0dbc0ef89de398b2e4227 = $this->env->getExtension("native_profiler");
        $__internal_55c3d204976bcb162f7b2587fc3b70e023e292512eb0dbc0ef89de398b2e4227->enter($__internal_55c3d204976bcb162f7b2587fc3b70e023e292512eb0dbc0ef89de398b2e4227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_55c3d204976bcb162f7b2587fc3b70e023e292512eb0dbc0ef89de398b2e4227->leave($__internal_55c3d204976bcb162f7b2587fc3b70e023e292512eb0dbc0ef89de398b2e4227_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}

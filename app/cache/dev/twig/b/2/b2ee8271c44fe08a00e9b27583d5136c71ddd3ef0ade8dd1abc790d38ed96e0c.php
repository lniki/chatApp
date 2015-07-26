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
        $__internal_ed1bc502b89dd4c022d4e0a83fd533c92a482a265417e661f4728cc986bce83c = $this->env->getExtension("native_profiler");
        $__internal_ed1bc502b89dd4c022d4e0a83fd533c92a482a265417e661f4728cc986bce83c->enter($__internal_ed1bc502b89dd4c022d4e0a83fd533c92a482a265417e661f4728cc986bce83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js\"></script>
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "    </body>
</html>
";
        
        $__internal_ed1bc502b89dd4c022d4e0a83fd533c92a482a265417e661f4728cc986bce83c->leave($__internal_ed1bc502b89dd4c022d4e0a83fd533c92a482a265417e661f4728cc986bce83c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_67f8203b70f6c882484ab95fdb31a85a33a2fbf8c15ce8157f4c5f38c562cd71 = $this->env->getExtension("native_profiler");
        $__internal_67f8203b70f6c882484ab95fdb31a85a33a2fbf8c15ce8157f4c5f38c562cd71->enter($__internal_67f8203b70f6c882484ab95fdb31a85a33a2fbf8c15ce8157f4c5f38c562cd71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_67f8203b70f6c882484ab95fdb31a85a33a2fbf8c15ce8157f4c5f38c562cd71->leave($__internal_67f8203b70f6c882484ab95fdb31a85a33a2fbf8c15ce8157f4c5f38c562cd71_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a8106fe2f0d4955d9a1a546ce92e93d09b5c7b57d501c92815243ad43e5a3a07 = $this->env->getExtension("native_profiler");
        $__internal_a8106fe2f0d4955d9a1a546ce92e93d09b5c7b57d501c92815243ad43e5a3a07->enter($__internal_a8106fe2f0d4955d9a1a546ce92e93d09b5c7b57d501c92815243ad43e5a3a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a8106fe2f0d4955d9a1a546ce92e93d09b5c7b57d501c92815243ad43e5a3a07->leave($__internal_a8106fe2f0d4955d9a1a546ce92e93d09b5c7b57d501c92815243ad43e5a3a07_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8892d98992093ff6f67ee46bc7e0d5655ecf558273b3ba425719838088ea32e = $this->env->getExtension("native_profiler");
        $__internal_a8892d98992093ff6f67ee46bc7e0d5655ecf558273b3ba425719838088ea32e->enter($__internal_a8892d98992093ff6f67ee46bc7e0d5655ecf558273b3ba425719838088ea32e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a8892d98992093ff6f67ee46bc7e0d5655ecf558273b3ba425719838088ea32e->leave($__internal_a8892d98992093ff6f67ee46bc7e0d5655ecf558273b3ba425719838088ea32e_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f32eb7df461e10a63e6f3e70e47eb5a5532bc3fe4a2bee4f4ba1d881ed3fd089 = $this->env->getExtension("native_profiler");
        $__internal_f32eb7df461e10a63e6f3e70e47eb5a5532bc3fe4a2bee4f4ba1d881ed3fd089->enter($__internal_f32eb7df461e10a63e6f3e70e47eb5a5532bc3fe4a2bee4f4ba1d881ed3fd089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f32eb7df461e10a63e6f3e70e47eb5a5532bc3fe4a2bee4f4ba1d881ed3fd089->leave($__internal_f32eb7df461e10a63e6f3e70e47eb5a5532bc3fe4a2bee4f4ba1d881ed3fd089_prof);

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
        return array (  95 => 13,  84 => 12,  73 => 6,  61 => 5,  52 => 14,  49 => 13,  47 => 12,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}

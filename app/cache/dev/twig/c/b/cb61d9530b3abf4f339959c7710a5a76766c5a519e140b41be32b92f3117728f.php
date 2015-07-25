<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_cb61d9530b3abf4f339959c7710a5a76766c5a519e140b41be32b92f3117728f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b106f543156868c3cdb2e509feaa17a14230525c266436f8af028a41f339ae4 = $this->env->getExtension("native_profiler");
        $__internal_0b106f543156868c3cdb2e509feaa17a14230525c266436f8af028a41f339ae4->enter($__internal_0b106f543156868c3cdb2e509feaa17a14230525c266436f8af028a41f339ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b106f543156868c3cdb2e509feaa17a14230525c266436f8af028a41f339ae4->leave($__internal_0b106f543156868c3cdb2e509feaa17a14230525c266436f8af028a41f339ae4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_021402aee3aa6074a5184473fbbd99906ec976353a4fb56c74e54623bf7d6fcd = $this->env->getExtension("native_profiler");
        $__internal_021402aee3aa6074a5184473fbbd99906ec976353a4fb56c74e54623bf7d6fcd->enter($__internal_021402aee3aa6074a5184473fbbd99906ec976353a4fb56c74e54623bf7d6fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_021402aee3aa6074a5184473fbbd99906ec976353a4fb56c74e54623bf7d6fcd->leave($__internal_021402aee3aa6074a5184473fbbd99906ec976353a4fb56c74e54623bf7d6fcd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f205dd73a5fb70ecc3681e9ee9cb6eab6673ddd4d7866915cb38f8e4045091d2 = $this->env->getExtension("native_profiler");
        $__internal_f205dd73a5fb70ecc3681e9ee9cb6eab6673ddd4d7866915cb38f8e4045091d2->enter($__internal_f205dd73a5fb70ecc3681e9ee9cb6eab6673ddd4d7866915cb38f8e4045091d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f205dd73a5fb70ecc3681e9ee9cb6eab6673ddd4d7866915cb38f8e4045091d2->leave($__internal_f205dd73a5fb70ecc3681e9ee9cb6eab6673ddd4d7866915cb38f8e4045091d2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_390a0dc23c4c6abd7ad28a894f0f2881cc1ba9591d9b4669e90f2bc6166e2a09 = $this->env->getExtension("native_profiler");
        $__internal_390a0dc23c4c6abd7ad28a894f0f2881cc1ba9591d9b4669e90f2bc6166e2a09->enter($__internal_390a0dc23c4c6abd7ad28a894f0f2881cc1ba9591d9b4669e90f2bc6166e2a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_390a0dc23c4c6abd7ad28a894f0f2881cc1ba9591d9b4669e90f2bc6166e2a09->leave($__internal_390a0dc23c4c6abd7ad28a894f0f2881cc1ba9591d9b4669e90f2bc6166e2a09_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}

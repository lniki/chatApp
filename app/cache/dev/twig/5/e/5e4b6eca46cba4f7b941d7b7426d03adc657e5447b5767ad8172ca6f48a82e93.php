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
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_995891158cc603cb08a319b1c85e30d6fb1b2b8d93d9de636f0abfdfd26f2048 = $this->env->getExtension("native_profiler");
        $__internal_995891158cc603cb08a319b1c85e30d6fb1b2b8d93d9de636f0abfdfd26f2048->enter($__internal_995891158cc603cb08a319b1c85e30d6fb1b2b8d93d9de636f0abfdfd26f2048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_995891158cc603cb08a319b1c85e30d6fb1b2b8d93d9de636f0abfdfd26f2048->leave($__internal_995891158cc603cb08a319b1c85e30d6fb1b2b8d93d9de636f0abfdfd26f2048_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_add82f2e2473d759c27a1ae9387449deca9c18a3139f0c5439090eed7c716588 = $this->env->getExtension("native_profiler");
        $__internal_add82f2e2473d759c27a1ae9387449deca9c18a3139f0c5439090eed7c716588->enter($__internal_add82f2e2473d759c27a1ae9387449deca9c18a3139f0c5439090eed7c716588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id = 'messages'></div>
    <input type='text' id = 'newMessage'>
    <br />
    <input type=\"button\" onclick='sendMessage()' value='Send message'>
";
        
        $__internal_add82f2e2473d759c27a1ae9387449deca9c18a3139f0c5439090eed7c716588->leave($__internal_add82f2e2473d759c27a1ae9387449deca9c18a3139f0c5439090eed7c716588_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1ee1cfd1fb879e881cc0609ab1aa89b468b1d3ba0101b6788a01ad0d2ea211c3 = $this->env->getExtension("native_profiler");
        $__internal_1ee1cfd1fb879e881cc0609ab1aa89b468b1d3ba0101b6788a01ad0d2ea211c3->enter($__internal_1ee1cfd1fb879e881cc0609ab1aa89b468b1d3ba0101b6788a01ad0d2ea211c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        echo "    <script type=\"text/javascript\">
    \$( document ).ready(function() {
        lastMessageTime = moment().format('YYYY-MM-DD HH:mm:ss');
        pollMessages();
    });
    
    function sendMessage() {
        var newMessage = \$('#newMessage').val();
        \$.ajax({
            async: true,
            url: \"";
        // line 20
        echo $this->env->getExtension('routing')->getUrl("sendMessage");
        echo "\",
            type: \"POST\",
            data: { message : newMessage },
            success: function (msg) {
                console.log(msg);
               // poll();
            }
        });
    }
    
    function pollMessages() {
        \$.ajax({
            async: true,
            url: \"";
        // line 33
        echo $this->env->getExtension('routing')->getUrl("pollMessages");
        echo "\",
            type: \"POST\",
            data: { lastMessageTime : lastMessageTime },
            success: function (msg) {
                console.log(msg);
                msg = JSON.parse(msg);
                if(msg[0] != 'No new messages.') {
                    lastMessageTime = moment(msg[msg.length - 1]['date']['date']).format('YYYY-MM-DD HH:mm:ss');
                    msg.forEach(function(obj) {
                        \$('#messages').append(obj.text + '<br />');
                    });
                } else {
                    lastMessageTime = moment().format('YYYY-MM-DD HH:mm:ss');
                }
                pollMessages();
            }
        });
    }
    </script>
";
        
        $__internal_1ee1cfd1fb879e881cc0609ab1aa89b468b1d3ba0101b6788a01ad0d2ea211c3->leave($__internal_1ee1cfd1fb879e881cc0609ab1aa89b468b1d3ba0101b6788a01ad0d2ea211c3_prof);

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
        return array (  86 => 33,  70 => 20,  58 => 10,  52 => 9,  41 => 4,  35 => 3,  11 => 1,);
    }
}

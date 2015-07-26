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
        $__internal_48cb0bb0a17e7d933b62cddfd6447790540d013b1b5bf1349fd2e624af7eac32 = $this->env->getExtension("native_profiler");
        $__internal_48cb0bb0a17e7d933b62cddfd6447790540d013b1b5bf1349fd2e624af7eac32->enter($__internal_48cb0bb0a17e7d933b62cddfd6447790540d013b1b5bf1349fd2e624af7eac32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48cb0bb0a17e7d933b62cddfd6447790540d013b1b5bf1349fd2e624af7eac32->leave($__internal_48cb0bb0a17e7d933b62cddfd6447790540d013b1b5bf1349fd2e624af7eac32_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_06897f898dc9822abcea7758731588e4432d1f20ebabece558a0c4eef8d2f929 = $this->env->getExtension("native_profiler");
        $__internal_06897f898dc9822abcea7758731588e4432d1f20ebabece558a0c4eef8d2f929->enter($__internal_06897f898dc9822abcea7758731588e4432d1f20ebabece558a0c4eef8d2f929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id = 'messages'></div>
    <input type='text' id = 'newMessage'>
    <br />
    <input type=\"button\" onclick='sendMessage()' value='Send message'>
";
        
        $__internal_06897f898dc9822abcea7758731588e4432d1f20ebabece558a0c4eef8d2f929->leave($__internal_06897f898dc9822abcea7758731588e4432d1f20ebabece558a0c4eef8d2f929_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_956e3fe9894f7d69176450149d5be1785c641c664eda41f34697dffbc636d686 = $this->env->getExtension("native_profiler");
        $__internal_956e3fe9894f7d69176450149d5be1785c641c664eda41f34697dffbc636d686->enter($__internal_956e3fe9894f7d69176450149d5be1785c641c664eda41f34697dffbc636d686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
            url: 'http://localhost/chatapp/web/app_dev.php/app/services/sendMessage',
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
            url: 'http://localhost/chatapp/web/app_dev.php/app/services/pollMessages',
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
        
        $__internal_956e3fe9894f7d69176450149d5be1785c641c664eda41f34697dffbc636d686->leave($__internal_956e3fe9894f7d69176450149d5be1785c641c664eda41f34697dffbc636d686_prof);

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
        return array (  58 => 10,  52 => 9,  41 => 4,  35 => 3,  11 => 1,);
    }
}

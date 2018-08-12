<?php

/* @gfksx_ThanksForPosts/event/viewtopic_body_postrow_post_notices_after.html */
class __TwigTemplate_a339e82d42400dca1761910d73c7f0003701d06331f9011cc90e9e1c5b76b51e extends Twig_Template
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
        echo "<div id='list_thanks";
        echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_ID", array());
        echo "'>
";
        // line 2
        if (((($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "THANKS", array()) && $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "THANKS_POSTLIST_VIEW", array())) &&  !$this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_POST_ANONYMOUS", array())) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            // line 3
            echo "\t<div class=\"notice\">
\t\t<dl>
\t\t\t";
            // line 5
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_MOD_THANKS", array())) {
                // line 6
                echo "\t\t\t<ul class=\"post-buttons\" style=\"float: left; position: static;\">
\t\t\t\t<li>
\t\t\t\t\t<a id='clear_list_thanks";
                // line 8
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_ID", array());
                echo "' href=\"";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_CLEAR_LIST_THANKS_POST", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CLEAR_LIST_THANKS");
                echo "\"  class=\"button button-icon-only\" style=\"float:left\">
\t\t\t\t\t\t<i class=\"icon fa-times fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 9
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CLEAR_LIST_THANKS");
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t";
            }
            // line 14
            echo "
\t\t\t<dt>";
            // line 15
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "THANK_TEXT", array());
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_AUTHOR_FULL", array());
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "THANK_TEXT_2", array());
            echo "</dt>
\t\t\t<dd>";
            // line 16
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "THANKS", array());
            echo "</dd>
\t\t</dl>
\t</div>
";
        }
        // line 20
        echo "</div>
<div id='div_post_reput";
        // line 21
        echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_ID", array());
        echo "'>
";
        // line 22
        if (((($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_THANKS_POST_REPUT_VIEW", array()) && $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_REPUT", array())) &&  !$this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_POST_ANONYMOUS", array())) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            // line 23
            echo "\t<div class=\"notice\">
\t\t<dl>
\t\t\t<dt class=\"small\"><strong>";
            // line 25
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPUT");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</strong>&nbsp;";
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_REPUT", array());
            echo "</dt>
\t\t\t<dd>
\t\t\t";
            // line 27
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_THANKS_REPUT_GRAPHIC", array())) {
                // line 28
                echo "\t\t\t<div style=\"width: ";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "THANKS_REPUT_GRAPHIC_WIDTH", array());
                echo "; height: ";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "THANKS_REPUT_HEIGHT", array());
                echo ";\" class=\"thanks_reput_image_back\"><div style=\"height: ";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "THANKS_REPUT_HEIGHT", array());
                echo "; width: ";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_REPUT", array());
                echo ";\" class=\"thanks_reput_image\"></div></div>&nbsp;
\t\t\t";
            }
            // line 30
            echo "\t\t\t</dd>
\t\t</dl>
\t</div>
";
        }
        // line 34
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@gfksx_ThanksForPosts/event/viewtopic_body_postrow_post_notices_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 34,  103 => 30,  91 => 28,  89 => 27,  81 => 25,  77 => 23,  75 => 22,  71 => 21,  68 => 20,  61 => 16,  55 => 15,  52 => 14,  44 => 9,  36 => 8,  32 => 6,  30 => 5,  26 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gfksx_ThanksForPosts/event/viewtopic_body_postrow_post_notices_after.html", "");
    }
}

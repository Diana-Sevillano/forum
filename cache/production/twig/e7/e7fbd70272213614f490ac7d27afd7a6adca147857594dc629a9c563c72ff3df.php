<?php

/* @gfksx_ThanksForPosts/topicrow_rating_body.html */
class __TwigTemplate_88e654ad5f3ca5151c64b5cbdb4dc0346c83d7e27553687642de3599f65bbdc5 extends Twig_Template
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
        if (((($this->getAttribute((isset($context["rating"]) ? $context["rating"] : null), "S_THANKS_TOPIC_REPUT_VIEW", array()) && $this->getAttribute((isset($context["rating"]) ? $context["rating"] : null), "TOPIC_REPUT", array())) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) &&  !$this->getAttribute((isset($context["rating"]) ? $context["rating"] : null), "S_THANKS_TOPIC_REPUT_VIEW_COLUMN", array()))) {
            // line 2
            echo "\t<span style=\"display: block;\">
\t";
            // line 3
            if ($this->getAttribute((isset($context["rating"]) ? $context["rating"] : null), "S_THANKS_REPUT_GRAPHIC", array())) {
                // line 4
                echo "\t<span style=\"display: block; float: left; width: ";
                echo $this->getAttribute((isset($context["rating"]) ? $context["rating"] : null), "THANKS_REPUT_GRAPHIC_WIDTH", array());
                echo "; height: ";
                echo $this->getAttribute((isset($context["rating"]) ? $context["rating"] : null), "THANKS_REPUT_HEIGHT", array());
                echo "; background: url(";
                echo $this->getAttribute((isset($context["rating"]) ? $context["rating"] : null), "THANKS_REPUT_IMAGE_BACK", array());
                echo "); background-repeat: repeat-x;\"><span style=\"display: block; height: ";
                echo $this->getAttribute((isset($context["rating"]) ? $context["rating"] : null), "THANKS_REPUT_HEIGHT", array());
                echo "; width: ";
                echo $this->getAttribute((isset($context["rating"]) ? $context["rating"] : null), "TOPIC_REPUT", array());
                echo "; background: url(";
                echo $this->getAttribute((isset($context["rating"]) ? $context["rating"] : null), "THANKS_REPUT_IMAGE", array());
                echo "); background-repeat: repeat-x;\"></span></span>&nbsp;
\t";
            }
            // line 6
            echo "\t";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPUT");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "&nbsp;";
            echo $this->getAttribute((isset($context["rating"]) ? $context["rating"] : null), "TOPIC_REPUT", array());
            echo "
\t</span>
";
        }
    }

    public function getTemplateName()
    {
        return "@gfksx_ThanksForPosts/topicrow_rating_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gfksx_ThanksForPosts/topicrow_rating_body.html", "");
    }
}

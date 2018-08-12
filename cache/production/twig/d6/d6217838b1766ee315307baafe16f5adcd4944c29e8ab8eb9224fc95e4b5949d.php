<?php

/* @gfksx_ThanksForPosts/event/viewtopic_body_postrow_custom_fields_after.html */
class __TwigTemplate_feb22b19994c97ec8e1df57deb7cb08be88cb24ae5cd324e9f2b96a53e06ef6e extends Twig_Template
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
        if (( !$this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_POST_ANONYMOUS", array()) && $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "THANKS_COUNTERS_VIEW", array()))) {
            // line 2
            echo "    <dd class=\"profile-posts\" data-user-give-id=\"";
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POSTER_ID", array());
            echo "\">";
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POSTER_GIVE_COUNT", array())) {
                echo "<strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GIVEN");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong> <a href=\"";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POSTER_GIVE_COUNT_LINK", array());
                echo "\">";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POSTER_GIVE_COUNT", array());
                echo "</a>";
            }
            echo "</dd>
    <dd class=\"profile-posts\" data-user-receive-id=\"";
            // line 3
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POSTER_ID", array());
            echo "\">";
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POSTER_RECEIVE_COUNT", array())) {
                echo "<strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RECEIVED");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong> <a href=\"";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POSTER_RECEIVE_COUNT_LINK", array());
                echo "\">";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POSTER_RECEIVE_COUNT", array());
                echo "</a>";
            }
            echo "</dd>
";
        }
    }

    public function getTemplateName()
    {
        return "@gfksx_ThanksForPosts/event/viewtopic_body_postrow_custom_fields_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gfksx_ThanksForPosts/event/viewtopic_body_postrow_custom_fields_after.html", "");
    }
}

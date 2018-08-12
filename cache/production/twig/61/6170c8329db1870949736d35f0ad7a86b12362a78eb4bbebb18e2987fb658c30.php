<?php

/* @gfksx_ThanksForPosts/event/topiclist_row_append.html */
class __TwigTemplate_5b44df2d68264b12ca34f13178b15e38f902407b2621365cee44d585c9c64ac4 extends Twig_Template
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
        if ((isset($context["topicrow"]) ? $context["topicrow"] : null)) {
            // line 2
            echo "    ";
            $context["rating"] = (isset($context["topicrow"]) ? $context["topicrow"] : null);
        } elseif (        // line 3
(isset($context["recent_topics"]) ? $context["recent_topics"] : null)) {
            // line 4
            echo "    ";
            $context["rating"] = (isset($context["recent_topics"]) ? $context["recent_topics"] : null);
        }
        // line 6
        $this->loadTemplate("topicrow_rating_body.html", "@gfksx_ThanksForPosts/event/topiclist_row_append.html", 6)->display($context);
    }

    public function getTemplateName()
    {
        return "@gfksx_ThanksForPosts/event/topiclist_row_append.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gfksx_ThanksForPosts/event/topiclist_row_append.html", "");
    }
}

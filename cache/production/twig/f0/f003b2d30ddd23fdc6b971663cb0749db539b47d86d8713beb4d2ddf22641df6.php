<?php

/* @bb3mobi_lastpostavatar/event/forumlist_body_last_post_title_prepend.html */
class __TwigTemplate_62fec4517dd05305988f1a412e0d122ea264c1687a2a3aa3b1bc71304e709475 extends Twig_Template
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
        if ($this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "AVATAR_IMG", array())) {
            // line 2
            echo "<span class=\"lastpostavatar\">";
            echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "AVATAR_IMG", array());
            echo "</span>";
        }
    }

    public function getTemplateName()
    {
        return "@bb3mobi_lastpostavatar/event/forumlist_body_last_post_title_prepend.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bb3mobi_lastpostavatar/event/forumlist_body_last_post_title_prepend.html", "");
    }
}

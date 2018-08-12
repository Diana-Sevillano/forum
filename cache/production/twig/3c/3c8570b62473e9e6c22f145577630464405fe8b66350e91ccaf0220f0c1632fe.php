<?php

/* @gfksx_ThanksForPosts/event/navbar_header_quick_links_after.html */
class __TwigTemplate_453f162dd1c16ce719f34b23d9dc04725231f6d8d0a2ae3bade7b59cba3c898d extends Twig_Template
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
        if ((isset($context["S_DISPLAY_TOPLIST"]) ? $context["S_DISPLAY_TOPLIST"] : null)) {
            echo "<li class=\"small-icon icon-thanks_toplist\"><a href=\"";
            echo (isset($context["U_REPUT_TOPLIST"]) ? $context["U_REPUT_TOPLIST"] : null);
            echo "\"  role=\"menuitem\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPLIST");
            echo "</a></li>";
        }
        // line 2
        if ((isset($context["S_DISPLAY_THANKSLIST"]) ? $context["S_DISPLAY_THANKSLIST"] : null)) {
            echo "<li class=\"small-icon icon-thanks\"><a href=\"";
            echo (isset($context["U_THANKS_LIST"]) ? $context["U_THANKS_LIST"] : null);
            echo "\"  role=\"menuitem\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GRATITUDES");
            echo "</a></li>";
        }
    }

    public function getTemplateName()
    {
        return "@gfksx_ThanksForPosts/event/navbar_header_quick_links_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gfksx_ThanksForPosts/event/navbar_header_quick_links_after.html", "");
    }
}

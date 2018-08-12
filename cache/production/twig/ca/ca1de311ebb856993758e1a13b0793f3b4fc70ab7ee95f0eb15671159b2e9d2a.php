<?php

/* @lotusjeff_dynamic/event/overall_header_head_append.html */
class __TwigTemplate_2bd7409171d0231a4a6199ab31feb609592d0d06976ec0ea5acce5a48b0fa0a2 extends Twig_Template
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
        if ((isset($context["S_LOTUSJEFF_DYNAMIC_FACEBOOK"]) ? $context["S_LOTUSJEFF_DYNAMIC_FACEBOOK"] : null)) {
            // line 2
            echo "<meta property=\"og:locale\" content=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOTUSJEFF_DYANMIC_OPENGRAPH_LOCALE");
            echo "\" />
<meta property=\"og:type\" content=\"article\" />
<meta property=\"og:title\" content=\"";
            // line 4
            echo (isset($context["PAGE_TITLE"]) ? $context["PAGE_TITLE"] : null);
            echo "\" />
<meta property=\"og:url\" content=\"";
            // line 5
            echo (isset($context["U_CANONICAL"]) ? $context["U_CANONICAL"] : null);
            echo (isset($context["LOTUSJEFF_DYNAMIC_URL"]) ? $context["LOTUSJEFF_DYNAMIC_URL"] : null);
            echo "\" />
<meta property=\"og:site_name\" content=\"";
            // line 6
            echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
            echo "\" />
<meta property=\"og:description\" content=\"";
            // line 7
            echo (isset($context["LOTUSJEFF_DYNAMIC_DESCRIPTION"]) ? $context["LOTUSJEFF_DYNAMIC_DESCRIPTION"] : null);
            echo "\" />
<meta property=\"og:image\" content=\"";
            // line 8
            echo (isset($context["LOTUSJEFF_DYNAMIC_IMAGE"]) ? $context["LOTUSJEFF_DYNAMIC_IMAGE"] : null);
            echo "\" />
";
        }
        // line 10
        if ((isset($context["S_LOTUSJEFF_DYNAMIC_TWITTER"]) ? $context["S_LOTUSJEFF_DYNAMIC_TWITTER"] : null)) {
            // line 11
            echo "<meta name=\"twitter:card\" content=\"summary\" />
<meta name=\"twitter:site\" content=\"";
            // line 12
            echo (isset($context["LOTUSJEFF_DYNAMIC_TWITTER_SITE"]) ? $context["LOTUSJEFF_DYNAMIC_TWITTER_SITE"] : null);
            echo "\" />
<meta name=\"twitter:domain\" content=\"";
            // line 13
            echo (isset($context["BOARD_URL"]) ? $context["BOARD_URL"] : null);
            echo "\" />
<meta name=\"twitter:url\" content=\"";
            // line 14
            echo (isset($context["U_CANONICAL"]) ? $context["U_CANONICAL"] : null);
            echo (isset($context["LOTUSJEFF_DYNAMIC_URL"]) ? $context["LOTUSJEFF_DYNAMIC_URL"] : null);
            echo "\" />
<meta name=\"twitter:title\" content=\"";
            // line 15
            echo (isset($context["PAGE_TITLE"]) ? $context["PAGE_TITLE"] : null);
            echo "\" />
<meta name=\"twitter:description\" content=\"";
            // line 16
            echo (isset($context["LOTUSJEFF_DYNAMIC_DESCRIPTION"]) ? $context["LOTUSJEFF_DYNAMIC_DESCRIPTION"] : null);
            echo "\" />
<meta name=\"twitter:image\" content=\"";
            // line 17
            echo (isset($context["LOTUSJEFF_DYNAMIC_IMAGE"]) ? $context["LOTUSJEFF_DYNAMIC_IMAGE"] : null);
            echo "\" />
";
        }
    }

    public function getTemplateName()
    {
        return "@lotusjeff_dynamic/event/overall_header_head_append.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 17,  71 => 16,  67 => 15,  62 => 14,  58 => 13,  54 => 12,  51 => 11,  49 => 10,  44 => 8,  40 => 7,  36 => 6,  31 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@lotusjeff_dynamic/event/overall_header_head_append.html", "");
    }
}

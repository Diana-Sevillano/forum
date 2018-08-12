<?php

/* @phpbb_googleanalytics/event/overall_header_stylesheets_after.html */
class __TwigTemplate_636ddade32df5ae8cc961e14849504e0048d8992c608aa56bcce9821ff0175b1 extends Twig_Template
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
        if ((isset($context["GOOGLEANALYTICS_ID"]) ? $context["GOOGLEANALYTICS_ID"] : null)) {
            // line 2
            echo "<script>
\t(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
\t(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
\tm=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
\t})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

\tga('create', '";
            // line 8
            echo (isset($context["GOOGLEANALYTICS_ID"]) ? $context["GOOGLEANALYTICS_ID"] : null);
            echo "', 'auto');
\t";
            // line 9
            // line 10
            echo "\tga('send', 'pageview');
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "@phpbb_googleanalytics/event/overall_header_stylesheets_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 10,  33 => 9,  29 => 8,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@phpbb_googleanalytics/event/overall_header_stylesheets_after.html", "");
    }
}

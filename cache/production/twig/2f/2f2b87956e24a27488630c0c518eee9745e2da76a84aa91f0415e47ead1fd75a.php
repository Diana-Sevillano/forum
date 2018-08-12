<?php

/* @planetstyles_flightdeck/event/acp_overall_footer_after.html */
class __TwigTemplate_a84e32d6ffed8795fddc35674ee772b38638229bf7a99cb8483e01c1ae4d93ef extends Twig_Template
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
        $asset_file = "jscolor.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
            $asset->add_assets_version('142');
        }
        $this->getEnvironment()->get_assets_bag()->add_script($asset);        // line 2
        echo "
<script>
\$( document ).ready(function() {
    \$(\"input#colour_picker\").addClass(\"jscolor {width:243, height:150}\");
});
</script>";
    }

    public function getTemplateName()
    {
        return "@planetstyles_flightdeck/event/acp_overall_footer_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@planetstyles_flightdeck/event/acp_overall_footer_after.html", "");
    }
}

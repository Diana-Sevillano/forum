<?php

/* @phpbb_boardannouncements/event/acp_overall_footer_after.html */
class __TwigTemplate_2134d8579944640ee3be75253f93fc65b03d6d51ec12c9b5b3c81dd887cd71a0 extends Twig_Template
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
        if ((isset($context["S_BOARD_ANNOUNCEMENTS"]) ? $context["S_BOARD_ANNOUNCEMENTS"] : null)) {
            // line 2
            echo "
";
            // line 3
            if ( !$this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "INCLUDED_COLPICKJS", array())) {
                // line 4
                echo "\t";
                $asset_file = "@phpbb_boardannouncements/colpick.js";
                $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
                if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                    $asset_path = $asset->get_path();                    $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                    if (!file_exists($local_file)) {
                        $local_file = $this->getEnvironment()->findTemplate($asset_path);
                        $asset->set_path($local_file, true);
                    }
                    $asset->add_assets_version('142');
                }
                $this->getEnvironment()->get_assets_bag()->add_script($asset);                // line 5
                echo "\t";
                $value = true;
                $context['definition']->set('INCLUDED_COLPICKJS', $value);
            }
            // line 7
            echo "
<script>
jQuery(function(\$) {
\tvar bgcolor = '";
            // line 10
            echo (isset($context["BOARD_ANNOUNCEMENTS_BGCOLOR"]) ? $context["BOARD_ANNOUNCEMENTS_BGCOLOR"] : null);
            echo "';
\t\$('#board_announcements_bgcolor').colpick({
\t\tlayout: 'hex',
\t\tsubmit: 0,
\t\tonBeforeShow: function() {
\t\t\tif (bgcolor !== '') {
\t\t\t\t\$(this).colpickSetColor(bgcolor);
\t\t\t\tbgcolor = '';
\t\t\t}
\t\t},
\t\tonChange: function(hsb, hex, rgb, el, bySetColor) {
\t\t\t\$(el).css({
\t\t\t\t'border-right-color': '#' + hex,
\t\t\t\t'border-right-width': '20px',
\t\t\t\t'border-right-type': 'solid'
\t\t\t});
\t\t\tif (!bySetColor) {
\t\t\t\t\$(el).val(hex);
\t\t\t}
\t\t}
\t}).keyup(function() {
\t\t\$(this).colpickSetColor(this.value || 'ffffff');
\t});
});
</script>

";
        }
    }

    public function getTemplateName()
    {
        return "@phpbb_boardannouncements/event/acp_overall_footer_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  43 => 7,  38 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@phpbb_boardannouncements/event/acp_overall_footer_after.html", "");
    }
}

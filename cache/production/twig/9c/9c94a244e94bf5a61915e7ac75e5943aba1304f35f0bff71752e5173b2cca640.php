<?php

/* overall_footer.html */
class __TwigTemplate_0ebcf8c6562e24240d5d3582811f6b441638d8b8f5e447054265b4d6bfa9b848 extends Twig_Template
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
        echo "\t\t\t\t\t";
        if ((isset($context["STYLE_SETTINGS_CONFIG_SIDEBARS"]) ? $context["STYLE_SETTINGS_CONFIG_SIDEBARS"] : null)) {
            // line 2
            echo "                            \t\t</div>
                                </div>
                            </div>

\t\t\t\t\t\t\t";
            // line 6
            if ((((isset($context["STYLE_SETTINGS_CONFIG_SIDEBAR_PLACEMENT"]) ? $context["STYLE_SETTINGS_CONFIG_SIDEBAR_PLACEMENT"] : null) == "Left Only") || ((isset($context["STYLE_SETTINGS_CONFIG_SIDEBAR_PLACEMENT"]) ? $context["STYLE_SETTINGS_CONFIG_SIDEBAR_PLACEMENT"] : null) == "Both"))) {
                echo "                            
                            <div id=\"leftcolumn\">
                            \t<div class=\"innertube\">";
                // line 8
                $location = "sidebar_left.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("sidebar_left.html", "overall_footer.html", 8)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                echo "</div>
                            </div>
                            ";
            }
            // line 11
            echo "                            
                            ";
            // line 12
            if ((((isset($context["STYLE_SETTINGS_CONFIG_SIDEBAR_PLACEMENT"]) ? $context["STYLE_SETTINGS_CONFIG_SIDEBAR_PLACEMENT"] : null) == "Right Only") || ((isset($context["STYLE_SETTINGS_CONFIG_SIDEBAR_PLACEMENT"]) ? $context["STYLE_SETTINGS_CONFIG_SIDEBAR_PLACEMENT"] : null) == "Both"))) {
                // line 13
                echo "                            <div id=\"rightcolumn\">
                                <div class=\"innertube\">";
                // line 14
                $location = "sidebar_right.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("sidebar_right.html", "overall_footer.html", 14)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                echo "</div>
                            </div>
                            ";
            }
            // line 17
            echo "\t\t\t\t\t\t</div><!-- /#maincontainer -->                                                 
                    ";
        }
        // line 19
        echo "

                    ";
        // line 21
        // line 22
        echo "                </div>
            
            ";
        // line 24
        // line 25
        echo "            
            \t</div><!-- /#inner-wrap -->
            
                ";
        // line 28
        if (((isset($context["STYLE_SETTINGS_HTML_3"]) ? $context["STYLE_SETTINGS_HTML_3"] : null) &&  !(isset($context["STYLE_SETTINGS_CONFIG_HIDE_SOCIAL_BAR"]) ? $context["STYLE_SETTINGS_CONFIG_HIDE_SOCIAL_BAR"] : null))) {
            // line 29
            echo "                \t<div class=\"social_links_footer\">";
            echo (isset($context["STYLE_SETTINGS_HTML_3"]) ? $context["STYLE_SETTINGS_HTML_3"] : null);
            echo "</div>
                ";
        }
        // line 30
        echo "             
          
            
            <div id=\"page-footer\" class=\"page-footer\" role=\"contentinfo\">
                ";
        // line 34
        $location = "navbar_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("navbar_footer.html", "overall_footer.html", 34)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 35
        echo "
                <div id=\"darkenwrapper\" class=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 36
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TITLE");
        echo "\" data-ajax-error-text=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT");
        echo "\" data-ajax-error-text-abort=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT_ABORT");
        echo "\" data-ajax-error-text-timeout=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT_TIMEOUT");
        echo "\" data-ajax-error-text-parsererror=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT_PARSERERROR");
        echo "\">
                    <div id=\"darken\" class=\"darken\">&nbsp;</div>
                </div>
            
                <div id=\"phpbb_alert\" class=\"phpbb_alert\" data-l-err=\"";
        // line 40
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ERROR");
        echo "\" data-l-timeout-processing-req=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TIMEOUT_PROCESSING_REQ");
        echo "\">
                    <a href=\"#\" class=\"alert_close\">
                        <i class=\"icon fa-times-circle fa-fw\" aria-hidden=\"true\"></i>
                    </a>
                    <h3 class=\"alert_title\">&nbsp;</h3><p class=\"alert_text\"></p>
                </div>
                <div id=\"phpbb_confirm\" class=\"phpbb_alert\">
                    <a href=\"#\" class=\"alert_close\">
                        <i class=\"icon fa-times-circle fa-fw\" aria-hidden=\"true\"></i>
                    </a>
                    <div class=\"alert_text\"></div>
                </div>
            </div>
            
            
            
            <div class=\"copyright_bar\">                
                Powered by <a href=\"http://www.phpBB.com/\">phpBB</a>&trade; <span class=\"planetstyles_credit";
        // line 57
        if ((isset($context["STYLE_SETTINGS_CONFIG_CREDIT_LINE"]) ? $context["STYLE_SETTINGS_CONFIG_CREDIT_LINE"] : null)) {
            echo " planetstyles_credit_hidden";
        }
        echo "\">&bull; Design by <a href=\"http://www.planetstyles.net\">PlanetStyles</a></span>
                ";
        // line 58
        // line 59
        echo "                ";
        if ((isset($context["TRANSLATION_INFO"]) ? $context["TRANSLATION_INFO"] : null)) {
            echo "<br />";
            echo (isset($context["TRANSLATION_INFO"]) ? $context["TRANSLATION_INFO"] : null);
        }
        // line 60
        echo "                ";
        // line 61
        echo "                ";
        if ((isset($context["DEBUG_OUTPUT"]) ? $context["DEBUG_OUTPUT"] : null)) {
            echo "<br />";
            echo (isset($context["DEBUG_OUTPUT"]) ? $context["DEBUG_OUTPUT"] : null);
        }
        echo " 
                ";
        // line 62
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbbmodders_banhammer', '__main__'));
        $this->env->loadTemplate('@phpbbmodders_banhammer/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('vse_abbc3', '__main__'));
        $this->env->loadTemplate('@vse_abbc3/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        echo "                  
            </div> 
                                        
            </div> <!-- /#wrap -->
            
            <div style=\"display: none;\">
                <a id=\"bottom\" class=\"anchor\" accesskey=\"z\"></a>
                ";
        // line 69
        if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
            echo (isset($context["RUN_CRON_TASK"]) ? $context["RUN_CRON_TASK"] : null);
        }
        // line 70
        echo "            </div>
            
            <script type=\"text/javascript\" src=\"";
        // line 72
        echo (isset($context["T_JQUERY_LINK"]) ? $context["T_JQUERY_LINK"] : null);
        echo "\"></script>
            
            ";
        // line 74
        if ((isset($context["S_ALLOW_CDN"]) ? $context["S_ALLOW_CDN"] : null)) {
            // line 75
            echo "                <script type=\"text/javascript\">window.jQuery || document.write('\\x3Cscript src=\"";
            echo (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null);
            echo "/javascript/jquery.min.js?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\">\\x3C/script>');</script>
            ";
        }
        // line 77
        echo "            
            <script type=\"text/javascript\" src=\"";
        // line 78
        echo (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null);
        echo "/javascript/core.js?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\"></script>

\t\t\t";
        // line 80
        if ((isset($context["STYLE_SETTINGS_CONFIG_PARALLAX_HEADER"]) ? $context["STYLE_SETTINGS_CONFIG_PARALLAX_HEADER"] : null)) {
            // line 81
            echo "            \t";
            $asset_file = "parallax.js";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
                $asset->add_assets_version('142');
            }
            $this->getEnvironment()->get_assets_bag()->add_script($asset);            // line 82
            echo "            ";
        }
        // line 83
        echo "            ";
        $asset_file = "tooltipster.bundle.min.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
            $asset->add_assets_version('142');
        }
        $this->getEnvironment()->get_assets_bag()->add_script($asset);        // line 84
        echo "            ";
        if ((isset($context["STYLE_SETTINGS_CONFIG_COLLAPSIBLE_PANELS"]) ? $context["STYLE_SETTINGS_CONFIG_COLLAPSIBLE_PANELS"] : null)) {
            // line 85
            echo "                ";
            $asset_file = "jquery.collapse.js";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
                $asset->add_assets_version('142');
            }
            $this->getEnvironment()->get_assets_bag()->add_script($asset);            // line 86
            echo "                ";
            $asset_file = "jquery.collapse_storage.js";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
                $asset->add_assets_version('142');
            }
            $this->getEnvironment()->get_assets_bag()->add_script($asset);            echo "               
            ";
        }
        // line 88
        echo "            ";
        $asset_file = "forum_fn.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
            $asset->add_assets_version('142');
        }
        $this->getEnvironment()->get_assets_bag()->add_script($asset);        // line 89
        echo "            ";
        $asset_file = "ajax.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
            $asset->add_assets_version('142');
        }
        $this->getEnvironment()->get_assets_bag()->add_script($asset);        // line 90
        echo "            
            ";
        // line 91
        if ((isset($context["S_ALLOW_CDN"]) ? $context["S_ALLOW_CDN"] : null)) {
            // line 92
            echo "                <script type=\"text/javascript\">
                    (function(\$){
                        var \$fa_cdn = \$('head').find('link[rel=\"stylesheet\"]').first(),
                            \$span = \$('<span class=\"fa\" style=\"display:none\"></span>').appendTo('body');
                        if (\$span.css('fontFamily') !== 'FontAwesome' ) {
                            \$fa_cdn.after('<link href=\"";
            // line 97
            echo (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null);
            echo "/css/font-awesome.min.css\" rel=\"stylesheet\">');
                            \$fa_cdn.remove();
                        }
                        \$span.remove();
                    })(jQuery);
                </script>
            ";
        }
        // line 103
        echo "         
            
            ";
        // line 105
        if ((isset($context["S_COOKIE_NOTICE"]) ? $context["S_COOKIE_NOTICE"] : null)) {
            // line 106
            echo "                <script src=\"";
            echo (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null);
            echo "/cookieconsent/cookieconsent.min.js?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\"></script>
                <script>
                    window.addEventListener(\"load\", function(){
                        window.cookieconsent.initialise({
                            \"palette\": {
                                \"popup\": {
                                    \"background\": \"#0F538A\"
                                },
                                \"button\": {
                                    \"background\": \"#E5E5E5\"
                                }
                            },
                            \"theme\": \"classic\",
                            \"content\": {
                                \"message\": \"";
            // line 120
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("COOKIE_CONSENT_MSG"), "js");
            echo "\",
                                \"dismiss\": \"";
            // line 121
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("COOKIE_CONSENT_OK"), "js");
            echo "\",
                                \"link\": \"";
            // line 122
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("COOKIE_CONSENT_INFO"), "js");
            echo "\",
\t\t\t\t\t\t\t\t\"href\": \"";
            // line 123
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("COOKIE_CONSENT_HREF"), "js");
            echo "\"
                            }
                        })});
                </script>
            ";
        }
        // line 127
        echo "           
                       
            ";
        // line 129
        if ((isset($context["S_PLUPLOAD"]) ? $context["S_PLUPLOAD"] : null)) {
            $location = "plupload.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("plupload.html", "overall_footer.html", 129)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 130
        echo "            ";
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SCRIPTS", array());
        echo "
            
            ";
        // line 132
        if ((isset($context["STYLE_SETTINGS_CONFIG_HEADER_PARTICLES"]) ? $context["STYLE_SETTINGS_CONFIG_HEADER_PARTICLES"] : null)) {
            // line 133
            echo "                <script type=\"text/javascript\">
\t\t\t\t\t/* Identify the height of headerbar */
\t\t\t\t\tvar headerbar_height = \$('.headerbar').height();
\t\t\t\t\t/* Match particle container height to headerbar. Creates window for canvas */
\t\t\t\t\t\$('.particles_container').css({'height': headerbar_height});
\t\t\t\t\t
\t\t\t\t\t/* Dynamically apply width to site desc container, maximising clickable area behind it. We only need this to happen when particles are enabled. */
\t\t\t\t\tvar logo_width = \$('.site-description').width();
\t\t\t\t\tvar logo_width_fix = (logo_width+2); /* Caters for retina devices where the width is defined as a decimal. Obvs we can't set a decimal pixel width */
\t\t\t\t\t\$('.site-description').css({'width': logo_width_fix});
\t\t\t\t</script>            
\t\t\t\t<script src=\"";
            // line 144
            echo (isset($context["T_TEMPLATE_PATH"]) ? $context["T_TEMPLATE_PATH"] : null);
            echo "/particles.js\"></script>
                <script src=\"";
            // line 145
            echo (isset($context["T_TEMPLATE_PATH"]) ? $context["T_TEMPLATE_PATH"] : null);
            echo "/particles.app.js\"></script>
                
                <script type=\"text/javascript\">
\t\t\t\t\t/* Reposition the canvas so it aligns with headerbar */
\t\t\t\t\t\$('canvas.particles-js-canvas-el').css({'margin-top': -headerbar_height});
\t\t\t\t</script>                        
            ";
        }
        // line 152
        echo "            
\t\t\t<script type=\"text/javascript\">
            \$(function(\$) {
                var num_cols = 3,
                container = \$('.sub-forumlist'),
                listItem = 'li',
                listClass = 'sub-list';
                container.each(function() {
                    var items_per_col = new Array(),
                    items = \$(this).find(listItem),
                    min_items_per_col = Math.floor(items.length / num_cols),
                    difference = items.length - (min_items_per_col * num_cols);
                    for (var i = 0; i < num_cols; i++) {
                        if (i < difference) {
                            items_per_col[i] = min_items_per_col + 1;
                        } else {
                            items_per_col[i] = min_items_per_col;
                        }
                    }
                    for (var i = 0; i < num_cols; i++) {
                        \$(this).append(\$('<ul ></ul>').addClass(listClass));
                        for (var j = 0; j < items_per_col[i]; j++) {
                            var pointer = 0;
                            for (var k = 0; k < i; k++) {
                                pointer += items_per_col[k];
                            }
                            \$(this).find('.' + listClass).last().append(items[j + pointer]);
                        }
                    }
                });
            });
            </script>
            
\t\t\t";
        // line 185
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbbmodders_banhammer', '__main__'));
        $this->env->loadTemplate('@phpbbmodders_banhammer/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('vse_abbc3', '__main__'));
        $this->env->loadTemplate('@vse_abbc3/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        echo "            
            
            ";
        // line 187
        // line 188
        echo "            
\t\t\t";
        // line 189
        if ((isset($context["STYLE_SETTINGS_CONFIG_SCROLL_TO_TOP"]) ? $context["STYLE_SETTINGS_CONFIG_SCROLL_TO_TOP"] : null)) {
            echo "<a href=\"#\" class=\"scrollToTop\"><span class=\"fa fa-arrow-up\"></span></a>";
        }
        echo "            

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "overall_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  486 => 189,  483 => 188,  482 => 187,  470 => 185,  435 => 152,  425 => 145,  421 => 144,  408 => 133,  406 => 132,  400 => 130,  386 => 129,  382 => 127,  374 => 123,  370 => 122,  366 => 121,  362 => 120,  342 => 106,  340 => 105,  336 => 103,  326 => 97,  319 => 92,  317 => 91,  314 => 90,  302 => 89,  290 => 88,  275 => 86,  263 => 85,  260 => 84,  248 => 83,  245 => 82,  233 => 81,  231 => 80,  224 => 78,  221 => 77,  213 => 75,  211 => 74,  206 => 72,  202 => 70,  198 => 69,  181 => 62,  173 => 61,  171 => 60,  165 => 59,  164 => 58,  158 => 57,  136 => 40,  121 => 36,  118 => 35,  106 => 34,  100 => 30,  94 => 29,  92 => 28,  87 => 25,  86 => 24,  82 => 22,  81 => 21,  77 => 19,  73 => 17,  57 => 14,  54 => 13,  52 => 12,  49 => 11,  33 => 8,  28 => 6,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "overall_footer.html", "");
    }
}

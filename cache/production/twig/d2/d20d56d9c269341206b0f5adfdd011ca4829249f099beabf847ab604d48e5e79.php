<?php

/* overall_header.html */
class __TwigTemplate_ad4ff5dd00aa67d29efc2ca6eb8cc35aae1a1e60b712c4ee8a9cbf453ef33811 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo (isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null);
        echo "\" lang=\"";
        echo (isset($context["S_USER_LANG"]) ? $context["S_USER_LANG"] : null);
        echo "\">
<head>
<meta charset=\"utf-8\" />

<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
";
        // line 8
        echo (isset($context["META"]) ? $context["META"] : null);
        echo "
<title>";
        // line 9
        if ((isset($context["UNREAD_NOTIFICATIONS_COUNT"]) ? $context["UNREAD_NOTIFICATIONS_COUNT"] : null)) {
            echo "(";
            echo (isset($context["UNREAD_NOTIFICATIONS_COUNT"]) ? $context["UNREAD_NOTIFICATIONS_COUNT"] : null);
            echo ") ";
        }
        if (( !(isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null) &&  !(isset($context["S_VIEWFORUM"]) ? $context["S_VIEWFORUM"] : null))) {
            echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
            echo " - ";
        }
        if ((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null)) {
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCP");
            echo " - ";
        } elseif ((isset($context["S_IN_UCP"]) ? $context["S_IN_UCP"] : null)) {
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UCP");
            echo " - ";
        }
        echo (isset($context["PAGE_TITLE"]) ? $context["PAGE_TITLE"] : null);
        if (((isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null) || (isset($context["S_VIEWFORUM"]) ? $context["S_VIEWFORUM"] : null))) {
            echo " - ";
            echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        }
        echo "</title>

";
        // line 11
        if ((isset($context["S_ENABLE_FEEDS"]) ? $context["S_ENABLE_FEEDS"] : null)) {
            // line 12
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_OVERALL"]) ? $context["S_ENABLE_FEEDS_OVERALL"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_index");
                echo "\">";
            }
            // line 13
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_NEWS"]) ? $context["S_ENABLE_FEEDS_NEWS"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED_NEWS");
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_news");
                echo "\">";
            }
            // line 14
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_FORUMS"]) ? $context["S_ENABLE_FEEDS_FORUMS"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ALL_FORUMS");
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_forums");
                echo "\">";
            }
            // line 15
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_TOPICS"]) ? $context["S_ENABLE_FEEDS_TOPICS"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED_TOPICS_NEW");
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_topics");
                echo "\">";
            }
            // line 16
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_TOPICS_ACTIVE"]) ? $context["S_ENABLE_FEEDS_TOPICS_ACTIVE"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED_TOPICS_ACTIVE");
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_topics_active");
                echo "\">";
            }
            // line 17
            echo "\t";
            if (((isset($context["S_ENABLE_FEEDS_FORUM"]) ? $context["S_ENABLE_FEEDS_FORUM"] : null) && (isset($context["S_FORUM_ID"]) ? $context["S_FORUM_ID"] : null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
                echo " - ";
                echo (isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null);
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_forum", array("forum_id" => (isset($context["S_FORUM_ID"]) ? $context["S_FORUM_ID"] : null)));
                echo "\">";
            }
            // line 18
            echo "\t";
            if (((isset($context["S_ENABLE_FEEDS_TOPIC"]) ? $context["S_ENABLE_FEEDS_TOPIC"] : null) && (isset($context["S_TOPIC_ID"]) ? $context["S_TOPIC_ID"] : null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC");
                echo " - ";
                echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_topic", array("topic_id" => (isset($context["S_TOPIC_ID"]) ? $context["S_TOPIC_ID"] : null)));
                echo "\">";
            }
            // line 19
            echo "\t";
        }
        // line 21
        echo "
";
        // line 22
        if ((isset($context["U_CANONICAL"]) ? $context["U_CANONICAL"] : null)) {
            // line 23
            echo "\t<link rel=\"canonical\" href=\"";
            echo (isset($context["U_CANONICAL"]) ? $context["U_CANONICAL"] : null);
            echo "\">
";
        }
        // line 25
        echo "
";
        // line 26
        if ((isset($context["FORUM_FAVICON"]) ? $context["FORUM_FAVICON"] : null)) {
            // line 27
            echo "\t<link rel=\"icon\" href=\"";
            echo (isset($context["FORUM_FAVICON"]) ? $context["FORUM_FAVICON"] : null);
            echo "\" />
";
        }
        // line 29
        echo "
<!--
\tphpBB style name: Milk v2
\tBased on style:   Merlin Framework (http://www.planetstyles.net)
-->

";
        // line 35
        if ((isset($context["S_ALLOW_CDN"]) ? $context["S_ALLOW_CDN"] : null)) {
            // line 36
            echo "<script>
\tWebFontConfig = {
\t\tgoogle: {
\t\t\tfamilies: ['Open+Sans:600:cyrillic-ext,latin,greek-ext,greek,vietnamese,latin-ext,cyrillic']
\t\t}
\t};

\t(function(d) {
\t\tvar wf = d.createElement('script'), s = d.scripts[0];
\t\twf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';
\t\twf.async = true;
\t\ts.parentNode.insertBefore(wf, s);
\t})(document);
</script>
";
        }
        // line 51
        echo "

";
        // line 53
        if (((isset($context["STYLE_SETTINGS_CONFIG_FONT_FAMILY"]) ? $context["STYLE_SETTINGS_CONFIG_FONT_FAMILY"] : null) == "Roboto Slab")) {
            // line 54
            echo "\t<link href=\"https://fonts.googleapis.com/css?family=Roboto+Slab:300,400\" rel=\"stylesheet\">
    <style type=\"text/css\">body {font-family: \"Roboto Slab\", Arial, Helvetica, sans-serif; font-size: 14px;}</style>
";
        } elseif ((        // line 56
(isset($context["STYLE_SETTINGS_CONFIG_FONT_FAMILY"]) ? $context["STYLE_SETTINGS_CONFIG_FONT_FAMILY"] : null) == "Bubbler One")) {
            // line 57
            echo "\t<link href=\"https://fonts.googleapis.com/css?family=Bubbler+One\" rel=\"stylesheet\">
    <style type=\"text/css\">body {font-family: \"Bubbler One\", Arial, Helvetica, sans-serif; font-size: 18px;}</style> 
";
        } elseif ((        // line 59
(isset($context["STYLE_SETTINGS_CONFIG_FONT_FAMILY"]) ? $context["STYLE_SETTINGS_CONFIG_FONT_FAMILY"] : null) == "Dosis")) {
            // line 60
            echo "\t<link href=\"https://fonts.googleapis.com/css?family=Dosis:300,400,500\" rel=\"stylesheet\">
    <style type=\"text/css\">body {font-family: \"Dosis\", Arial, Helvetica, sans-serif; font-size: 16px;}</style>
";
        } elseif ((        // line 62
(isset($context["STYLE_SETTINGS_CONFIG_FONT_FAMILY"]) ? $context["STYLE_SETTINGS_CONFIG_FONT_FAMILY"] : null) == "Exo 2")) {
            // line 63
            echo "\t<link href=\"https://fonts.googleapis.com/css?family=Exo+2:300,400,500\" rel=\"stylesheet\">
\t<style type=\"text/css\">body {font-family: \"Exo 2\", Arial, Helvetica, sans-serif; font-size: 15px;}</style>             
";
        } elseif ((        // line 65
(isset($context["STYLE_SETTINGS_CONFIG_FONT_FAMILY"]) ? $context["STYLE_SETTINGS_CONFIG_FONT_FAMILY"] : null) == "Raleway")) {
            // line 66
            echo "\t<link href=\"https://fonts.googleapis.com/css?family=Raleway:300,400,500\" rel=\"stylesheet\">
    <style type=\"text/css\">body {font-family: \"Raleway\", Arial, Helvetica, sans-serif; font-size: 14px;}</style>
";
        } elseif ((        // line 68
(isset($context["STYLE_SETTINGS_CONFIG_FONT_FAMILY"]) ? $context["STYLE_SETTINGS_CONFIG_FONT_FAMILY"] : null) == "Rubik")) {
            // line 69
            echo "\t<link href=\"https://fonts.googleapis.com/css?family=Rubik:300,400,500\" rel=\"stylesheet\">
    <style type=\"text/css\">body {font-family: \"Rubik\", Arial, Helvetica, sans-serif; font-size: 14px;}</style>   
";
        } elseif ((        // line 71
(isset($context["STYLE_SETTINGS_CONFIG_FONT_FAMILY"]) ? $context["STYLE_SETTINGS_CONFIG_FONT_FAMILY"] : null) == "Quicksand")) {
            // line 72
            echo "\t<link href=\"https://fonts.googleapis.com/css?family=Quicksand:300,400,500\" rel=\"stylesheet\">
    <style type=\"text/css\">body {font-family: \"Quicksand\", Arial, Helvetica, sans-serif; font-size: 14px;}</style>    
";
        } else {
            // line 74
            echo "    
\t<link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500\" rel=\"stylesheet\">
    <style type=\"text/css\">body {font-family: \"Roboto\", Arial, Helvetica, sans-serif; font-size: 14px;}</style>
";
        }
        // line 78
        echo "

<link href=\"";
        // line 80
        echo (isset($context["T_FONT_AWESOME_LINK"]) ? $context["T_FONT_AWESOME_LINK"] : null);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 81
        echo (isset($context["T_STYLESHEET_LINK"]) ? $context["T_STYLESHEET_LINK"] : null);
        echo "\" rel=\"stylesheet\">
";
        // line 82
        if (((isset($context["STYLE_SETTINGS_CONFIG_BASE_COLOUR"]) ? $context["STYLE_SETTINGS_CONFIG_BASE_COLOUR"] : null) == "Dark")) {
            // line 83
            echo "\t<link href=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/colours_dark.css\" rel=\"stylesheet\">
";
        }
        // line 85
        echo "<link href=\"";
        echo (isset($context["T_STYLESHEET_LANG_LINK"]) ? $context["T_STYLESHEET_LANG_LINK"] : null);
        echo "\" rel=\"stylesheet\">

";
        // line 87
        if (((isset($context["STYLE_SETTINGS_CONFIG_COLOUR_PRESET"]) ? $context["STYLE_SETTINGS_CONFIG_COLOUR_PRESET"] : null) != "No Custom Colour")) {
            // line 88
            echo "    ";
            if (((isset($context["STYLE_SETTINGS_CONFIG_COLOUR_PRESET"]) ? $context["STYLE_SETTINGS_CONFIG_COLOUR_PRESET"] : null) == "Custom (Use colour picker below)")) {
                // line 89
                echo "        <style type=\"text/css\">
\t\t\t/* Color */
a:hover, .navbar_footer a, .copyright_bar a, .social_links_footer a:hover span, .icon.fa-file.icon-red, a:hover .icon.fa-file.icon-red, .navigation .active-subsection a, .navigation .active-subsection a:hover, .navigation a:hover, .tabs .tab > a:hover, .tabs .activetab > a, .tabs .activetab > a:hover, a.postlink, a.postlink:visited, .navbar_in_header .badge, .button:focus .icon, .button:hover .icon, .dark_base .social_links_footer a span, .dark_base h2, .dark_base h2 a, .dark_base a:link, .dark_base a:visited, .button-secondary:focus, .button-secondary:hover, .notification_unread {color: #";
                // line 91
                echo (isset($context["STYLE_SETTINGS_CONFIG_COLOUR_PICKER"]) ? $context["STYLE_SETTINGS_CONFIG_COLOUR_PICKER"] : null);
                echo ";}
\t\t\t/* Background Solid  */
\t\t\t.pagination li a:hover, .pagination li.active span, .pagination li a:focus, .jumpbox-cat-link, .dropdown-contents > li > a:hover, a.button1:hover, input.button1:hover, a.button2:hover, input.button2:hover, input.button3:hover, a.no_avatar:hover, .jumpbox-cat-link:hover, input.button1:focus, input.button2:focus, input.button3:focus, .specialbutton, input.specialbutton, .panel .specialbutton, a.specialbutton, .scrollToTop, a.specialbutton, .dark_base .social_links_footer a:hover span, .topic_type, .grid_unread {background: #";
                // line 93
                echo (isset($context["STYLE_SETTINGS_CONFIG_COLOUR_PICKER"]) ? $context["STYLE_SETTINGS_CONFIG_COLOUR_PICKER"] : null);
                echo ";}
\t\t\t/* Borders Dark */
\t\t\t.pagination li a:hover, .pagination li.active span, .pagination li a:focus, blockquote, .codebox code, .jumpbox-cat-link, a.postlink, input.button1:focus, input.button2:focus, input.button3:focus, input.specialbutton, .inputbox:hover, .inputbox:focus, .specialbutton, a.specialbutton, .button:hover, .button:focus, .dark_base .social_links_footer a span, a.specialbutton, .dark_base .social_links_footer a:hover span {border-color: #";
                // line 95
                echo (isset($context["STYLE_SETTINGS_CONFIG_COLOUR_PICKER"]) ? $context["STYLE_SETTINGS_CONFIG_COLOUR_PICKER"] : null);
                echo ";}
\t\t\t/* Background Gradient  */
\t\t\t.headerbar, body.content_block_header_block li.header, body.content_block_header_stripe li.header:before, .scrollToTop, .no_avatar, .social_links_footer, .badge, thead tr, .sidebar_block_stripe:before, .fancy_panel:before {background: #";
                // line 97
                echo (isset($context["STYLE_SETTINGS_CONFIG_COLOUR_PICKER"]) ? $context["STYLE_SETTINGS_CONFIG_COLOUR_PICKER"] : null);
                echo ";}
\t\t\t/* The same as above, just with some opacity */
\t\t\t.headerbar_overlay_active, .grid_colour_overlay:hover {background-color: rgba(0,0,0,0.3);}\t\t\t
\t\t\t/* Colour Hover Light */
\t\t\t.navbar_footer a:hover, .copyright_bar a:hover, a.postlink:hover, .dark_base h2 a:hover  {opacity: 0.7;}\t\t\t
\t\t\t/* Background Hover Light */
\t\t\ta.scrollToTop:hover, input.specialbutton:hover, a.specialbutton:hover {opacity: 0.7;}
\t\t\t/* Border light */
\t\t\t.specialbutton:hover {opacity: 0.7;}
\t\t</style>
\t";
            } else {
                // line 108
                echo "    \t<link href=\"";
                echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
                echo "/colour-presets/";
                echo (isset($context["STYLE_SETTINGS_CONFIG_COLOUR_PRESET"]) ? $context["STYLE_SETTINGS_CONFIG_COLOUR_PRESET"] : null);
                echo ".css?assets_version=";
                echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
                echo "\" rel=\"stylesheet\" class=\"preset_stylesheet\">
    ";
            }
        } else {
            // line 111
            echo "\t<link href=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/colour-presets/default.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 113
        echo " 


";
        // line 116
        if (((isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null) == "rtl")) {
            // line 117
            echo "\t<link href=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/bidi.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 119
        echo "
";
        // line 120
        if ((isset($context["S_PLUPLOAD"]) ? $context["S_PLUPLOAD"] : null)) {
            // line 121
            echo "\t<link href=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/plupload.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 123
        echo "
";
        // line 124
        if ((isset($context["S_COOKIE_NOTICE"]) ? $context["S_COOKIE_NOTICE"] : null)) {
            // line 125
            echo "\t<link href=\"";
            echo (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null);
            echo "/cookieconsent/cookieconsent.min.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 127
        echo "
<!--[if lte IE 9]>
\t<link href=\"";
        // line 129
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/tweaks.css?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\">
<![endif]-->

";
        // line 132
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('bb3mobi_lastpostavatar', '__main__'));
        $this->env->loadTemplate('@bb3mobi_lastpostavatar/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('gfksx_ThanksForPosts', '__main__'));
        $this->env->loadTemplate('@gfksx_ThanksForPosts/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('lotusjeff_dynamic', '__main__'));
        $this->env->loadTemplate('@lotusjeff_dynamic/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_boardannouncements', '__main__'));
        $this->env->loadTemplate('@phpbb_boardannouncements/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbbmodders_banhammer', '__main__'));
        $this->env->loadTemplate('@phpbbmodders_banhammer/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('vse_abbc3', '__main__'));
        $this->env->loadTemplate('@vse_abbc3/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 133
        echo "
";
        // line 134
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "STYLESHEETS", array());
        echo "
<link href=\"";
        // line 135
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/extensions.css?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\">

";
        // line 137
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_googleanalytics', '__main__'));
        $this->env->loadTemplate('@phpbb_googleanalytics/event/overall_header_stylesheets_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 138
        echo "
</head>
<body id=\"phpbb\" class=\"nojs notouch section-";
        // line 140
        echo (isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null);
        echo " ";
        echo (isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null);
        echo " ";
        echo (isset($context["BODY_CLASS"]) ? $context["BODY_CLASS"] : null);
        if (((isset($context["STYLE_SETTINGS_CONFIG_SIDEBARS"]) ? $context["STYLE_SETTINGS_CONFIG_SIDEBARS"] : null) && ((isset($context["STYLE_SETTINGS_CONFIG_SIDEBAR_PLACEMENT"]) ? $context["STYLE_SETTINGS_CONFIG_SIDEBAR_PLACEMENT"] : null) == "Right Only"))) {
            echo " sidebar-right-only";
        } elseif (((isset($context["STYLE_SETTINGS_CONFIG_SIDEBARS"]) ? $context["STYLE_SETTINGS_CONFIG_SIDEBARS"] : null) && ((isset($context["STYLE_SETTINGS_CONFIG_SIDEBAR_PLACEMENT"]) ? $context["STYLE_SETTINGS_CONFIG_SIDEBAR_PLACEMENT"] : null) == "Left Only"))) {
            echo " sidebar-left-only";
        } elseif ((isset($context["STYLE_SETTINGS_CONFIG_SIDEBARS"]) ? $context["STYLE_SETTINGS_CONFIG_SIDEBARS"] : null)) {
            echo " sidebar-both";
        }
        if ((isset($context["STYLE_SETTINGS_CONFIG_LAYOUT_TYPE"]) ? $context["STYLE_SETTINGS_CONFIG_LAYOUT_TYPE"] : null)) {
            echo " body-layout-";
            echo (isset($context["STYLE_SETTINGS_CONFIG_LAYOUT_TYPE"]) ? $context["STYLE_SETTINGS_CONFIG_LAYOUT_TYPE"] : null);
        }
        echo " content_block_header_";
        if (((isset($context["STYLE_SETTINGS_CONFIG_CONTENT_BLOCK_HEADER"]) ? $context["STYLE_SETTINGS_CONFIG_CONTENT_BLOCK_HEADER"] : null) == "Stripe")) {
            echo "stripe";
        } else {
            echo "block";
        }
        if ((isset($context["STYLE_SETTINGS_CONFIG_HIGH_CONTRAST_LINKS"]) ? $context["STYLE_SETTINGS_CONFIG_HIGH_CONTRAST_LINKS"] : null)) {
            echo " high_contrast_links";
        }
        if (((isset($context["STYLE_SETTINGS_CONFIG_BASE_COLOUR"]) ? $context["STYLE_SETTINGS_CONFIG_BASE_COLOUR"] : null) == "Dark")) {
            echo " dark_base";
        }
        if (((isset($context["STYLE_SETTINGS_CONFIG_NAVBAR_POSITION"]) ? $context["STYLE_SETTINGS_CONFIG_NAVBAR_POSITION"] : null) == "Inside Header")) {
            echo " navbar_i_header";
        } else {
            echo " navbar_o_header";
        }
        if ((isset($context["STYLE_SETTINGS_CONFIG_ROUNDED_AVATARS"]) ? $context["STYLE_SETTINGS_CONFIG_ROUNDED_AVATARS"] : null)) {
            echo " force_rounded_avatars";
        }
        echo "\">

";
        // line 142
        // line 143
        echo "    <div id=\"wrap\" class=\"wrap\">
        <a id=\"top\" class=\"top-anchor\" accesskey=\"t\"></a>
        
        <div id=\"page-header\">
        
            
                ";
        // line 149
        $location = "navbar_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("navbar_header.html", "overall_header.html", 149)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 150
        echo "                   
            \t";
        // line 151
        // line 152
        echo "
            <div class=\"headerbar";
        // line 153
        if (((isset($context["STYLE_SETTINGS_CONFIG_NAVBAR_POSITION"]) ? $context["STYLE_SETTINGS_CONFIG_NAVBAR_POSITION"] : null) == "Inside Header")) {
            echo " has_navbar";
        }
        echo "\" role=\"banner\"
            \t";
        // line 154
        if ((isset($context["FORUM_HEADER"]) ? $context["FORUM_HEADER"] : null)) {
            echo "style=\"background:";
            if ((isset($context["STYLE_SETTINGS_CONFIG_PARALLAX_HEADER"]) ? $context["STYLE_SETTINGS_CONFIG_PARALLAX_HEADER"] : null)) {
                echo " transparent ";
            } else {
                echo "url('";
                echo (isset($context["FORUM_HEADER"]) ? $context["FORUM_HEADER"] : null);
                echo "')";
            }
            if ((isset($context["STYLE_SETTINGS_CONFIG_HEADER_REPEAT"]) ? $context["STYLE_SETTINGS_CONFIG_HEADER_REPEAT"] : null)) {
                echo " ";
                echo (isset($context["STYLE_SETTINGS_CONFIG_HEADER_REPEAT"]) ? $context["STYLE_SETTINGS_CONFIG_HEADER_REPEAT"] : null);
            } else {
                echo " no-repeat";
            }
            if ((isset($context["STYLE_SETTINGS_CONFIG_HEADER_POSITION"]) ? $context["STYLE_SETTINGS_CONFIG_HEADER_POSITION"] : null)) {
                echo " ";
                echo (isset($context["STYLE_SETTINGS_CONFIG_HEADER_POSITION"]) ? $context["STYLE_SETTINGS_CONFIG_HEADER_POSITION"] : null);
            } else {
                echo " center top";
            }
            echo ";";
            if ((isset($context["STYLE_SETTINGS_CONFIG_HEADER_SIZE"]) ? $context["STYLE_SETTINGS_CONFIG_HEADER_SIZE"] : null)) {
                echo " background-size: cover;";
            }
            echo "\"";
        }
        if ((isset($context["STYLE_SETTINGS_CONFIG_PARALLAX_HEADER"]) ? $context["STYLE_SETTINGS_CONFIG_PARALLAX_HEADER"] : null)) {
            echo " data-parallax=\"scroll\" data-image-src=\"";
            echo (isset($context["FORUM_HEADER"]) ? $context["FORUM_HEADER"] : null);
            echo "\"";
        }
        echo ">
                
\t\t\t<div class=\"headerbar_overlay_container";
        // line 156
        if (((isset($context["STYLE_SETTINGS_CONFIG_HEADER_EFFECT"]) ? $context["STYLE_SETTINGS_CONFIG_HEADER_EFFECT"] : null) == "Colour Overlay")) {
            echo " headerbar_overlay_active";
        } elseif (((isset($context["STYLE_SETTINGS_CONFIG_HEADER_EFFECT"]) ? $context["STYLE_SETTINGS_CONFIG_HEADER_EFFECT"] : null) == "Darken")) {
            echo " headerbar_overlay_darken";
        }
        echo "\">        
            \t<div class=\"particles_container\"";
        // line 157
        if ((isset($context["STYLE_SETTINGS_CONFIG_HEADER_PARTICLES"]) ? $context["STYLE_SETTINGS_CONFIG_HEADER_PARTICLES"] : null)) {
            echo " id=\"particles-js\"";
        }
        echo ">
\t\t\t\t\t<!-- Headerbar Elements Start -->
                    
                

                        <div id=\"site-description\" class=\"site-description";
        // line 162
        if (((isset($context["STYLE_SETTINGS_CONFIG_LOGO_POSITION"]) ? $context["STYLE_SETTINGS_CONFIG_LOGO_POSITION"] : null) == "Left")) {
            echo " logo_left";
        } elseif (((isset($context["STYLE_SETTINGS_CONFIG_LOGO_POSITION"]) ? $context["STYLE_SETTINGS_CONFIG_LOGO_POSITION"] : null) == "Right")) {
            echo " logo_right";
        }
        echo "\">
                            ";
        // line 163
        if (((isset($context["STYLE_SETTINGS_CONFIG_HEADER_FORMAT"]) ? $context["STYLE_SETTINGS_CONFIG_HEADER_FORMAT"] : null) == "Logo Only")) {
            // line 164
            echo "                                ";
            if ((isset($context["FORUM_LOGO"]) ? $context["FORUM_LOGO"] : null)) {
                // line 165
                echo "                                \t<a href=\"";
                if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
                    echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
                } else {
                    echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
                }
                echo "\" title=\"";
                if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SITE_HOME");
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INDEX");
                }
                echo "\">";
                echo (isset($context["FORUM_LOGO"]) ? $context["FORUM_LOGO"] : null);
                echo "</a>
                                ";
            } else {
                // line 167
                echo "                                \t<a id=\"logo\" class=\"logo\" href=\"";
                if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
                    echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
                } else {
                    echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
                }
                echo "\" title=\"";
                if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SITE_HOME");
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INDEX");
                }
                echo "\"><span 

class=\"site_logo\"></span></a>
\t\t\t\t\t\t\t\t";
            }
            // line 171
            echo "                            ";
        } elseif (((isset($context["STYLE_SETTINGS_CONFIG_HEADER_FORMAT"]) ? $context["STYLE_SETTINGS_CONFIG_HEADER_FORMAT"] : null) == "Sitename and Description Only")) {
            // line 172
            echo "                                <h1>";
            echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
            echo "</h1>
                                <p>";
            // line 173
            echo (isset($context["SITE_DESCRIPTION"]) ? $context["SITE_DESCRIPTION"] : null);
            echo "</p>
                            ";
        } else {
            // line 175
            echo "                                ";
            if ((isset($context["FORUM_LOGO"]) ? $context["FORUM_LOGO"] : null)) {
                // line 176
                echo "                                \t<a href=\"";
                if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
                    echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
                } else {
                    echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
                }
                echo "\" title=\"";
                if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SITE_HOME");
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INDEX");
                }
                echo "\">";
                echo (isset($context["FORUM_LOGO"]) ? $context["FORUM_LOGO"] : null);
                echo "</a>
                                ";
            } else {
                // line 178
                echo "                                \t<a id=\"logo\" class=\"logo\" href=\"";
                if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
                    echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
                } else {
                    echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
                }
                echo "\" title=\"";
                if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SITE_HOME");
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INDEX");
                }
                echo "\"><span 

class=\"site_logo\"></span></a>
\t\t\t\t\t\t\t\t";
            }
            // line 182
            echo "                                <h1>";
            echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
            echo "</h1>
                                <p>";
            // line 183
            echo (isset($context["SITE_DESCRIPTION"]) ? $context["SITE_DESCRIPTION"] : null);
            echo "</p>
                            ";
        }
        // line 184
        echo "                            
                        </div>


                    
                    <!-- Headerbar Elements End -->             
                </div>              
            </div>
                    
            </div><!-- /.headerbar -->  
            ";
        // line 194
        // line 195
        echo "      
        </div><!-- /#page-header -->
        
        <div id=\"inner-wrap\">
        
        ";
        // line 200
        // line 201
        echo "        
       
            <ul id=\"nav-breadcrumbs\" class=\"nav-breadcrumbs linklist navlinks\" role=\"menubar\">
                ";
        // line 204
        $value = " itemtype=\"http://data-vocabulary.org/Breadcrumb\" itemscope=\"\"";
        $context['definition']->set('MICRODATA', $value);
        // line 205
        echo "                ";
        // line 206
        echo "                <li class=\"breadcrumbs\">
                    ";
        // line 207
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            // line 208
            echo "                        <span class=\"crumb\" ";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
            echo "><a href=\"";
            echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            echo "\" itemprop=\"url\" data-navbar-reference=\"home\"><i class=\"icon fa-home fa-fw\" aria-hidden=\"true\"></i><span itemprop=\"title\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SITE_HOME");
            echo "</span></a></span>
                    ";
        }
        // line 210
        echo "                    ";
        // line 211
        echo "                        <span class=\"crumb\" ";
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
        echo "><a href=\"";
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\" itemprop=\"url\" accesskey=\"h\" data-navbar-reference=\"index\">";
        if ( !(isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            echo "<i class=\"icon fa-home fa-fw\"></i>";
        }
        echo "<span itemprop=\"title\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INDEX");
        echo "</span></a></span>
        
                    ";
        // line 213
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "navlinks", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
            // line 214
            echo "                        ";
            // line 215
            echo "                        <span class=\"crumb\" ";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
            if ($this->getAttribute($context["navlinks"], "MICRODATA", array())) {
                echo " ";
                echo $this->getAttribute($context["navlinks"], "MICRODATA", array());
            }
            echo "><a href=\"";
            echo $this->getAttribute($context["navlinks"], "U_VIEW_FORUM", array());
            echo "\" itemprop=\"url\"><span itemprop=\"title\">";
            echo $this->getAttribute($context["navlinks"], "FORUM_NAME", array());
            echo "</span></a></span>
                        ";
            // line 216
            // line 217
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 218
        echo "                    ";
        // line 219
        echo "                </li>
                ";
        // line 220
        // line 221
        echo "        
                ";
        // line 222
        if (((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null) &&  !(isset($context["S_IN_SEARCH"]) ? $context["S_IN_SEARCH"] : null))) {
            // line 223
            echo "                    <li class=\"rightside responsive-search\">
                        <a href=\"";
            // line 224
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV_EXPLAIN");
            echo "\" role=\"menuitem\">
                            <i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 225
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "</span>
                        </a>
                    </li>
                ";
        }
        // line 229
        echo "            </ul>
                
    
        ";
        // line 232
        // line 233
        echo "    
        <a id=\"start_here\" class=\"anchor\"></a>
        <div id=\"page-body\" class=\"page-body\" role=\"main\">
            ";
        // line 236
        if ((((isset($context["S_BOARD_DISABLED"]) ? $context["S_BOARD_DISABLED"] : null) && (isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) && ((isset($context["U_MCP"]) ? $context["U_MCP"] : null) || (isset($context["U_ACP"]) ? $context["U_ACP"] : null)))) {
            // line 237
            echo "            <div id=\"information\" class=\"rules\">
                <div class=\"inner\">
                    <strong>";
            // line 239
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INFORMATION");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</strong> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BOARD_DISABLED");
            echo "
                </div>
            </div>
            ";
        }
        // line 243
        echo "    
            ";
        // line 244
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_boardannouncements', '__main__'));
        $this->env->loadTemplate('@phpbb_boardannouncements/event/overall_header_content_before.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        echo "          
            
            ";
        // line 246
        if ((isset($context["STYLE_SETTINGS_CONFIG_SIDEBARS"]) ? $context["STYLE_SETTINGS_CONFIG_SIDEBARS"] : null)) {
            // line 247
            echo "         \t\t<div id=\"maincontainer\">
                    <div id=\"contentwrapper\">
                        <div id=\"contentcolumn\">
                            <div class=\"innertube\">                
            ";
        }
        // line 252
        echo "                
";
    }

    public function getTemplateName()
    {
        return "overall_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  835 => 252,  828 => 247,  826 => 246,  818 => 244,  815 => 243,  805 => 239,  801 => 237,  799 => 236,  794 => 233,  793 => 232,  788 => 229,  781 => 225,  775 => 224,  772 => 223,  770 => 222,  767 => 221,  766 => 220,  763 => 219,  761 => 218,  755 => 217,  754 => 216,  741 => 215,  739 => 214,  735 => 213,  721 => 211,  719 => 210,  709 => 208,  707 => 207,  704 => 206,  702 => 205,  699 => 204,  694 => 201,  693 => 200,  686 => 195,  685 => 194,  673 => 184,  668 => 183,  663 => 182,  645 => 178,  627 => 176,  624 => 175,  619 => 173,  614 => 172,  611 => 171,  593 => 167,  575 => 165,  572 => 164,  570 => 163,  562 => 162,  552 => 157,  544 => 156,  508 => 154,  502 => 153,  499 => 152,  498 => 151,  495 => 150,  483 => 149,  475 => 143,  474 => 142,  434 => 140,  430 => 138,  425 => 137,  418 => 135,  414 => 134,  411 => 133,  386 => 132,  378 => 129,  374 => 127,  366 => 125,  364 => 124,  361 => 123,  353 => 121,  351 => 120,  348 => 119,  340 => 117,  338 => 116,  333 => 113,  325 => 111,  314 => 108,  300 => 97,  295 => 95,  290 => 93,  285 => 91,  281 => 89,  278 => 88,  276 => 87,  270 => 85,  264 => 83,  262 => 82,  258 => 81,  254 => 80,  250 => 78,  244 => 74,  239 => 72,  237 => 71,  233 => 69,  231 => 68,  227 => 66,  225 => 65,  221 => 63,  219 => 62,  215 => 60,  213 => 59,  209 => 57,  207 => 56,  203 => 54,  201 => 53,  197 => 51,  180 => 36,  178 => 35,  170 => 29,  164 => 27,  162 => 26,  159 => 25,  153 => 23,  151 => 22,  148 => 21,  145 => 19,  132 => 18,  119 => 17,  108 => 16,  97 => 15,  86 => 14,  75 => 13,  64 => 12,  62 => 11,  37 => 9,  33 => 8,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "overall_header.html", "");
    }
}

<?php

/* index_body.html */
class __TwigTemplate_ab798eab746e77fe37efe6babd2fe3f0cc21d36d042e5e6d67524c5f700fc5fd extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "index_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        // line 4
        echo "
";
        // line 5
        // line 6
        echo "
";
        // line 7
        if ((isset($context["STYLE_SETTINGS_CONFIG_COLLAPSIBLE_PANELS"]) ? $context["STYLE_SETTINGS_CONFIG_COLLAPSIBLE_PANELS"] : null)) {
            echo "<div id=\"forumlist_collapse\">";
        }
        // line 8
        echo "
";
        // line 9
        if (((isset($context["STYLE_SETTINGS_CONFIG_FORUMLIST_DISPLAY"]) ? $context["STYLE_SETTINGS_CONFIG_FORUMLIST_DISPLAY"] : null) == "Grid")) {
            // line 10
            echo " \t";
            $location = "forumlist_grid.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("forumlist_grid.html", "index_body.html", 10)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        } else {
            // line 12
            echo "\t";
            $location = "forumlist_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("forumlist_body.html", "index_body.html", 12)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 14
        echo "
<div class=\"post_forumlist_links\">
\t";
        // line 16
        if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
            // line 17
            echo "    \t<span class=\"current_time\">";
            echo (isset($context["CURRENT_TIME"]) ? $context["CURRENT_TIME"] : null);
            echo "</span>
    ";
        }
        // line 19
        echo "    ";
        if ((isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null)) {
            // line 20
            echo "        <br /><a href=\"";
            echo (isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null);
            echo "\" class=\"mark-read\" accesskey=\"m\" data-ajax=\"mark_forums_read\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_FORUMS_READ");
            echo "</a>
    ";
        }
        // line 22
        echo "</div>

";
        // line 24
        // line 25
        echo "
<div class=\"forumbg alt_block\">
    <div class=\"inner\">
    <ul class=\"topiclist\">
        <li class=\"header\">
            <dl class=\"row-item\">
                <dt><div class=\"list-inner\"><i class=\"fa fa-line-chart\"></i> &nbsp;";
        // line 31
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INFORMATION");
        echo "</div></dt>
            </dl>
        </li>
    </ul>
    ";
        // line 35
        if ((isset($context["STYLE_SETTINGS_CONFIG_COLLAPSIBLE_PANELS"]) ? $context["STYLE_SETTINGS_CONFIG_COLLAPSIBLE_PANELS"] : null)) {
            // line 36
            echo "        <div class=\"collapse-trigger open\">
            <span class=\"icon fa-minus tooltip-left\" title=\"Collapse\"></span>
            <span class=\"icon fa-plus tooltip-left\" title=\"Expand\"></span>
        </div>
    ";
        }
        // line 40
        echo "            
    <ul class=\"topiclist forums\">
    \t
        
            ";
        // line 44
        if (( !(isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            // line 45
            echo "                <li class=\"row";
            if ((((isset($context["STYLE_SETTINGS_CONFIG_PROFILE_WIDGET"]) ? $context["STYLE_SETTINGS_CONFIG_PROFILE_WIDGET"] : null) && (isset($context["STYLE_SETTINGS_CONFIG_SIDEBARS"]) ? $context["STYLE_SETTINGS_CONFIG_SIDEBARS"] : null)) && (((isset($context["STYLE_SETTINGS_CONFIG_SIDEBAR_PLACEMENT"]) ? $context["STYLE_SETTINGS_CONFIG_SIDEBAR_PLACEMENT"] : null) == "Right Only") || ((isset($context["STYLE_SETTINGS_CONFIG_SIDEBAR_PLACEMENT"]) ? $context["STYLE_SETTINGS_CONFIG_SIDEBAR_PLACEMENT"] : null) == "Both")))) {
                echo " responsive-hide stat_login_hide";
            }
            echo "\">
                    <form method=\"post\" action=\"";
            // line 46
            echo (isset($context["S_LOGIN_ACTION"]) ? $context["S_LOGIN_ACTION"] : null);
            echo "\" class=\"headerspace\">
                    <h3><a href=\"";
            // line 47
            echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
            echo "</a>";
            if ((isset($context["S_REGISTER_ENABLED"]) ? $context["S_REGISTER_ENABLED"] : null)) {
                echo "&nbsp; &bull; &nbsp;<a href=\"";
                echo (isset($context["U_REGISTER"]) ? $context["U_REGISTER"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REGISTER");
                echo "</a>";
            }
            echo "</h3>
                        <fieldset class=\"quick-login\">
                            <label for=\"username\"><span>";
            // line 49
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</span> <input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
            echo "\" /></label>
                            <label for=\"password\"><span>";
            // line 50
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PASSWORD");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</span> <input type=\"password\" tabindex=\"2\" name=\"password\" id=\"password\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PASSWORD");
            echo "\" autocomplete=\"off\" /></label>
                            ";
            // line 51
            if ((isset($context["U_SEND_PASSWORD"]) ? $context["U_SEND_PASSWORD"] : null)) {
                // line 52
                echo "                                <a href=\"";
                echo (isset($context["U_SEND_PASSWORD"]) ? $context["U_SEND_PASSWORD"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORGOT_PASS");
                echo "</a>
                            ";
            }
            // line 54
            echo "                            ";
            if ((isset($context["S_AUTOLOGIN_ENABLED"]) ? $context["S_AUTOLOGIN_ENABLED"] : null)) {
                // line 55
                echo "                                <span class=\"responsive-hide\">|</span> <label for=\"autologin\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOG_ME_IN");
                echo " <input type=\"checkbox\" tabindex=\"4\" name=\"autologin\" id=\"autologin\" /></label>
                            ";
            }
            // line 57
            echo "                            <input type=\"submit\" tabindex=\"5\" name=\"login\" value=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN");
            echo "\" class=\"button2\" />
                            ";
            // line 58
            echo (isset($context["S_LOGIN_REDIRECT"]) ? $context["S_LOGIN_REDIRECT"] : null);
            echo "
                        </fieldset>
                    </form>
                </li>
            ";
        }
        // line 63
        echo "            
            
            ";
        // line 65
        // line 66
        echo "            
            ";
        // line 67
        if ((isset($context["S_DISPLAY_ONLINE_LIST"]) ? $context["S_DISPLAY_ONLINE_LIST"] : null)) {
            // line 68
            echo "            <li class=\"row\">
                <div class=\"stat-block online-list\">
                    ";
            // line 70
            if ((isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null)) {
                echo "<h3><a href=\"";
                echo (isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WHO_IS_ONLINE");
                echo "</a></h3>";
            } else {
                echo "<h3>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WHO_IS_ONLINE");
                echo "</h3>";
            }
            // line 71
            echo "                    <p>
                        ";
            // line 72
            // line 73
            echo "                        ";
            echo (isset($context["TOTAL_USERS_ONLINE"]) ? $context["TOTAL_USERS_ONLINE"] : null);
            echo " (";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ONLINE_EXPLAIN");
            echo ")<br />";
            echo (isset($context["RECORD_USERS"]) ? $context["RECORD_USERS"] : null);
            echo "<br /> 
                        ";
            // line 74
            if ((isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null)) {
                // line 75
                echo "                        \t<br />";
                echo (isset($context["LOGGED_IN_USER_LIST"]) ? $context["LOGGED_IN_USER_LIST"] : null);
                echo "
                        ";
            }
            // line 77
            echo "                        ";
            if ((isset($context["LEGEND"]) ? $context["LEGEND"] : null)) {
                echo "<br /><strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LEGEND");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo " ";
                echo (isset($context["LEGEND"]) ? $context["LEGEND"] : null);
                echo "</strong>";
            }
            // line 78
            echo "                        ";
            // line 79
            echo "                    </p>
                </div>
            </li>
            ";
        }
        // line 83
        echo "            ";
        if ((isset($context["NEWEST_USER"]) ? $context["NEWEST_USER"] : null)) {
            // line 84
            echo "            \t<li class=\"row\">
                    <div class=\"stat-block statistics\">
                        <h3>";
            // line 86
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STATISTICS");
            echo "</h3>
                        <p>
                            ";
            // line 88
            // line 89
            echo "                            ";
            echo (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null);
            echo " &bull; ";
            echo (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null);
            echo " &bull; ";
            echo (isset($context["TOTAL_USERS"]) ? $context["TOTAL_USERS"] : null);
            echo " &bull; ";
            echo (isset($context["NEWEST_USER"]) ? $context["NEWEST_USER"] : null);
            echo "
                            ";
            // line 90
            // line 91
            echo "                        </p>
                    </div>
                </li>
            ";
        }
        // line 95
        echo "            ";
        echo "  
            ";
        // line 96
        if (((isset($context["S_DISPLAY_BIRTHDAY_LIST"]) ? $context["S_DISPLAY_BIRTHDAY_LIST"] : null) && (isset($context["BIRTHDAY_LIST"]) ? $context["BIRTHDAY_LIST"] : null))) {
            // line 97
            echo "            <li class=\"row\">
                <div class=\"stat-block birthday-list\">
                    <h3>";
            // line 99
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BIRTHDAYS");
            echo "</h3>
                    <p>
                        ";
            // line 101
            // line 102
            echo "                        ";
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "birthdays", array()))) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONGRATULATIONS");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo " <strong>";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "birthdays", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["birthdays"]) {
                    echo $this->getAttribute($context["birthdays"], "USERNAME", array());
                    if (($this->getAttribute($context["birthdays"], "AGE", array()) !== "")) {
                        echo " (";
                        echo $this->getAttribute($context["birthdays"], "AGE", array());
                        echo ")";
                    }
                    if ( !$this->getAttribute($context["birthdays"], "S_LAST_ROW", array())) {
                        echo ", ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['birthdays'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</strong>";
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_BIRTHDAYS");
            }
            // line 103
            echo "                        ";
            // line 104
            echo "                    </p>
                </div>
            </li>
            ";
        }
        // line 108
        echo "            
            ";
        // line 109
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('gfksx_ThanksForPosts', '__main__'));
        $this->env->loadTemplate('@gfksx_ThanksForPosts/event/index_body_stat_blocks_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 110
        echo "        </li>
    </ul>
    </div>
</div>

";
        // line 115
        if ((isset($context["STYLE_SETTINGS_CONFIG_COLLAPSIBLE_PANELS"]) ? $context["STYLE_SETTINGS_CONFIG_COLLAPSIBLE_PANELS"] : null)) {
            echo "</div>";
        }
        // line 116
        echo "        

";
        // line 118
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "index_body.html", 118)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "index_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  380 => 118,  376 => 116,  372 => 115,  365 => 110,  360 => 109,  357 => 108,  351 => 104,  349 => 103,  323 => 102,  322 => 101,  317 => 99,  313 => 97,  311 => 96,  307 => 95,  301 => 91,  300 => 90,  289 => 89,  288 => 88,  283 => 86,  279 => 84,  276 => 83,  270 => 79,  268 => 78,  258 => 77,  252 => 75,  250 => 74,  241 => 73,  240 => 72,  237 => 71,  225 => 70,  221 => 68,  219 => 67,  216 => 66,  215 => 65,  211 => 63,  203 => 58,  198 => 57,  192 => 55,  189 => 54,  181 => 52,  179 => 51,  172 => 50,  165 => 49,  150 => 47,  146 => 46,  139 => 45,  137 => 44,  131 => 40,  124 => 36,  122 => 35,  115 => 31,  107 => 25,  106 => 24,  102 => 22,  94 => 20,  91 => 19,  85 => 17,  83 => 16,  79 => 14,  65 => 12,  51 => 10,  49 => 9,  46 => 8,  42 => 7,  39 => 6,  38 => 5,  35 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index_body.html", "");
    }
}

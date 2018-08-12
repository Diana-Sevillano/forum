<?php

/* forumlist_body.html */
class __TwigTemplate_368da6eb3f9d01f2a01bb888fcea86a7332ae5fb7106e85b48d6c05a9169fcf4 extends Twig_Template
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
        echo "<div";
        if (((isset($context["STYLE_SETTINGS_CONFIG_FORUMLIST_DISPLAY"]) ? $context["STYLE_SETTINGS_CONFIG_FORUMLIST_DISPLAY"] : null) == "Grid")) {
            echo " class=\"forumlist_grid\"";
        } elseif (((isset($context["STYLE_SETTINGS_CONFIG_FORUMLIST_DISPLAY"]) ? $context["STYLE_SETTINGS_CONFIG_FORUMLIST_DISPLAY"] : null) == "List (Simplified)")) {
            echo " class=\"forumlist_simple\"";
        }
        echo ">

";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "forumrow", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["forumrow"]) {
            // line 4
            echo "
\t";
            // line 5
            if ((($this->getAttribute($context["forumrow"], "S_IS_CAT", array()) &&  !$this->getAttribute($context["forumrow"], "S_FIRST_ROW", array())) || $this->getAttribute($context["forumrow"], "S_NO_CAT", array()))) {
                // line 6
                echo "\t\t\t</ul>

\t\t\t</div>
\t\t</div>
\t";
            }
            // line 11
            echo "
\t";
            // line 12
            // line 13
            echo "\t";
            if ((($this->getAttribute($context["forumrow"], "S_IS_CAT", array()) || $this->getAttribute($context["forumrow"], "S_FIRST_ROW", array())) || $this->getAttribute($context["forumrow"], "S_NO_CAT", array()))) {
                // line 14
                echo "\t\t<div class=\"forabg\">
\t\t\t<div class=\"inner\">
\t\t\t<ul class=\"topiclist\">
\t\t\t\t<li class=\"header\">
\t\t\t\t\t";
                // line 18
                // line 19
                echo "\t\t\t\t\t<dl class=\"row-item\">
\t\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 20
                if ($this->getAttribute($context["forumrow"], "S_IS_CAT", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", array());
                    echo "\">";
                    echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                    echo "</a>";
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
                }
                echo "</div></dt>
                        ";
                // line 21
                if (((isset($context["STYLE_SETTINGS_CONFIG_FORUMLIST_DISPLAY"]) ? $context["STYLE_SETTINGS_CONFIG_FORUMLIST_DISPLAY"] : null) != "Grid")) {
                    // line 22
                    echo "                        \t";
                    if (((isset($context["STYLE_SETTINGS_CONFIG_FORUMLIST_DISPLAY"]) ? $context["STYLE_SETTINGS_CONFIG_FORUMLIST_DISPLAY"] : null) == "List (Simplified)")) {
                        // line 23
                        echo "                            \t<dd class=\"simpleposts\"><span class=\"icon fa-comments\"></span></dd>
                            ";
                    } else {
                        // line 25
                        echo "                                <dd class=\"topics\"><span class=\"icon fa-book\"></span></dd>
                                <dd class=\"posts\"><span class=\"icon fa-comments\"></dd>
                            ";
                    }
                    // line 28
                    echo "                            <dd class=\"lastpost\"><span><span class=\"icon fa-clock-o\"></span></span></dd>
                        ";
                }
                // line 30
                echo "\t\t\t\t\t</dl>
\t\t\t\t\t";
                // line 31
                // line 32
                echo "\t\t\t\t</li>
\t\t\t</ul>
            ";
                // line 34
                if ((((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "index") && (isset($context["STYLE_SETTINGS_CONFIG_COLLAPSIBLE_PANELS"]) ? $context["STYLE_SETTINGS_CONFIG_COLLAPSIBLE_PANELS"] : null))) {
                    // line 35
                    echo "            \t<div class=\"collapse-trigger open\">
                \t<span class=\"icon fa-minus tooltip-left\" title=\"Collapse\"></span>
                    <span class=\"icon fa-plus tooltip-left\" title=\"Expand\"></span>
                </div>
            ";
                }
                // line 39
                echo "            
\t\t\t<ul class=\"topiclist forums\">
\t";
            }
            // line 42
            echo "\t";
            // line 43
            echo "
\t";
            // line 44
            if ( !$this->getAttribute($context["forumrow"], "S_IS_CAT", array())) {
                // line 45
                echo "\t\t";
                // line 46
                echo "\t\t<li class=\"row";
                if ($this->getAttribute($context["forumrow"], "AVATAR_IMG", array())) {
                    echo " has_last_post_avatar";
                }
                echo "\">
\t\t\t";
                // line 47
                // line 48
                echo "            ";
                if (($this->getAttribute($context["forumrow"], "FORUM_IMAGE", array()) && ((isset($context["STYLE_SETTINGS_CONFIG_FORUMLIST_DISPLAY"]) ? $context["STYLE_SETTINGS_CONFIG_FORUMLIST_DISPLAY"] : null) == "Grid"))) {
                    // line 49
                    echo "                <a href=\"";
                    echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", array());
                    echo "\" class=\"forumlist_grid_forum_image\" style=\"background-image: url('";
                    echo $this->getAttribute($context["forumrow"], "FORUM_IMAGE_SRC", array());
                    echo "');\"></a>
            ";
                }
                // line 50
                echo "             
\t\t\t<dl class=\"row-item ";
                // line 51
                echo $this->getAttribute($context["forumrow"], "FORUM_IMG_STYLE", array());
                echo "\">           
\t\t\t\t<dt title=\"";
                // line 52
                echo $this->getAttribute($context["forumrow"], "FORUM_FOLDER_IMG_ALT", array());
                echo "\">
\t\t\t\t\t";
                // line 53
                if ($this->getAttribute($context["forumrow"], "S_UNREAD_FORUM", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", array());
                    echo "\" class=\"row-item-link\"></a>";
                }
                // line 54
                echo "\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t";
                // line 55
                if (((isset($context["S_ENABLE_FEEDS"]) ? $context["S_ENABLE_FEEDS"] : null) && $this->getAttribute($context["forumrow"], "S_FEED_ENABLED", array()))) {
                    // line 56
                    echo "\t\t\t\t\t\t\t<!--
\t\t\t\t\t\t\t\t<a class=\"feed-icon-forum\" title=\"";
                    // line 57
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                    echo " - ";
                    echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                    echo "\" href=\"";
                    echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                    echo "?f=";
                    echo $this->getAttribute($context["forumrow"], "FORUM_ID", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-rss-square fa-fw icon-orange\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                    // line 58
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                    echo " - ";
                    echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                    echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t-->
\t\t\t\t\t\t";
                }
                // line 62
                echo "                        ";
                // line 63
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute($context["forumrow"], "FORUM_IMAGE", array()) && ((isset($context["STYLE_SETTINGS_CONFIG_FORUMLIST_DISPLAY"]) ? $context["STYLE_SETTINGS_CONFIG_FORUMLIST_DISPLAY"] : null) != "Grid"))) {
                    echo "<span class=\"forum-image\">";
                    echo $this->getAttribute($context["forumrow"], "FORUM_IMAGE", array());
                    echo "</span>";
                }
                // line 64
                echo "                        ";
                // line 65
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", array());
                echo "\" class=\"forumtitle\">";
                echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                echo "</a>
\t\t\t\t\t\t";
                // line 66
                if ($this->getAttribute($context["forumrow"], "FORUM_DESC", array())) {
                    echo "<br /><span class=\"forum_description\">";
                    echo $this->getAttribute($context["forumrow"], "FORUM_DESC", array());
                    echo "</span>";
                }
                // line 67
                echo "\t\t\t\t\t\t";
                if (((isset($context["STYLE_SETTINGS_CONFIG_FORUMLIST_DISPLAY"]) ? $context["STYLE_SETTINGS_CONFIG_FORUMLIST_DISPLAY"] : null) == "Grid")) {
                    // line 68
                    echo "                            <div class=\"forumlist_grid_block_stats\">
                            \t";
                    // line 69
                    if ($this->getAttribute($context["forumrow"], "CLICKS", array())) {
                        // line 70
                        echo "                                    ";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REDIRECTS");
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                        echo " <strong>";
                        echo $this->getAttribute($context["forumrow"], "CLICKS", array());
                        echo "</strong>
                                    ";
                    } else {
                        // line 72
                        echo "                            \t";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS");
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                        echo " <strong>";
                        echo $this->getAttribute($context["forumrow"], "TOPICS", array());
                        echo "</strong> &nbsp; ";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                        echo " <strong>";
                        echo $this->getAttribute($context["forumrow"], "POSTS", array());
                        echo "</strong>";
                    }
                    // line 73
                    echo "                            </div>                    
\t\t\t\t\t\t";
                } else {
                    // line 75
                    echo " \t\t\t\t\t\t\t\t";
                    if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                        // line 76
                        echo "                            <div class=\"responsive-show responsive_forumlist_row_stats\" style=\"display: none;\">
                                ";
                        // line 77
                        if ($this->getAttribute($context["forumrow"], "CLICKS", array())) {
                            // line 78
                            echo "                                    ";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REDIRECTS");
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                            echo " <strong>";
                            echo $this->getAttribute($context["forumrow"], "CLICKS", array());
                            echo "</strong>
                                ";
                        } elseif (( !$this->getAttribute(                        // line 79
$context["forumrow"], "S_IS_LINK", array()) && $this->getAttribute($context["forumrow"], "TOPICS", array()))) {
                            // line 80
                            echo "                                    ";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS");
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                            echo " <strong>";
                            echo $this->getAttribute($context["forumrow"], "TOPICS", array());
                            echo "</strong> &nbsp;&nbsp;&nbsp; ";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                            echo " <strong>";
                            echo $this->getAttribute($context["forumrow"], "POSTS", array());
                            echo "</strong>
                                ";
                        }
                        // line 82
                        echo "                            </div>
                            ";
                    }
                    // line 83
                    echo "                        
                            ";
                    // line 84
                    if ($this->getAttribute($context["forumrow"], "MODERATORS", array())) {
                        // line 85
                        echo "                                <br /><strong>";
                        echo $this->getAttribute($context["forumrow"], "L_MODERATOR_STR", array());
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                        echo "</strong> ";
                        echo $this->getAttribute($context["forumrow"], "MODERATORS", array());
                        echo "
                            ";
                    }
                    // line 87
                    echo "                            ";
                    if ((twig_length_filter($this->env, $this->getAttribute($context["forumrow"], "subforum", array())) && $this->getAttribute($context["forumrow"], "S_LIST_SUBFORUMS", array()))) {
                        // line 88
                        echo "                                ";
                        // line 89
                        echo "                                <div style=\"clear: both;\"></div>
                                <br /><strong>";
                        // line 90
                        echo $this->getAttribute($context["forumrow"], "L_SUBFORUM_STR", array());
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                        echo "</strong>
                                
                                \t<div class=\"sub-forumlist\">
                                \t\t";
                        // line 93
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["forumrow"], "subforum", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["subforum"]) {
                            // line 94
                            echo "                                    \t<li>
                                        <a href=\"";
                            // line 95
                            echo $this->getAttribute($context["subforum"], "U_SUBFORUM", array());
                            echo "\" class=\"subforum";
                            if ($this->getAttribute($context["subforum"], "S_UNREAD", array())) {
                                echo " unread";
                            } else {
                                echo " read";
                            }
                            echo "\" title=\"";
                            if ($this->getAttribute($context["subforum"], "S_UNREAD", array())) {
                                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNREAD_POSTS");
                            } else {
                                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_UNREAD_POSTS");
                            }
                            echo "\">
                                        <i class=\"icon notification_unread ";
                            // line 96
                            if ($this->getAttribute($context["subforum"], "IS_LINK", array())) {
                                echo "fa-external-link";
                            } elseif ($this->getAttribute($context["subforum"], "S_UNREAD", array())) {
                                echo "fa-circle";
                            } else {
                                echo "fa-circle-o";
                            }
                            echo " fa-fw icon-md\" aria-hidden=\"true\"></i> ";
                            echo $this->getAttribute($context["subforum"], "SUBFORUM_NAME", array());
                            echo "
                                    </a>
                                    </li>
                                \t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subforum'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 100
                        echo "                                \t</div>
                                ";
                        // line 101
                        // line 102
                        echo "                            ";
                    }
                    // line 103
                    echo "                        ";
                }
                echo "<!-- /if not: Grid -->
\t\t\t\t\t</div>
\t\t\t\t</dt>
                ";
                // line 106
                if (((isset($context["STYLE_SETTINGS_CONFIG_FORUMLIST_DISPLAY"]) ? $context["STYLE_SETTINGS_CONFIG_FORUMLIST_DISPLAY"] : null) != "Grid")) {
                    // line 107
                    echo "                    ";
                    if ($this->getAttribute($context["forumrow"], "CLICKS", array())) {
                        // line 108
                        echo "                        <dd class=\"redirect\"><span>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REDIRECTS");
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                        echo " ";
                        echo $this->getAttribute($context["forumrow"], "CLICKS", array());
                        echo "</span></dd>
                    ";
                    } elseif ( !$this->getAttribute(                    // line 109
$context["forumrow"], "S_IS_LINK", array())) {
                        // line 110
                        echo "                    \t";
                        if (((isset($context["STYLE_SETTINGS_CONFIG_FORUMLIST_DISPLAY"]) ? $context["STYLE_SETTINGS_CONFIG_FORUMLIST_DISPLAY"] : null) == "List (Simplified)")) {
                            // line 111
                            echo "                        \t<dd class=\"simpleposts\"><span>";
                            echo $this->getAttribute($context["forumrow"], "POSTS", array());
                            echo "</span>";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
                            echo "</dd>
                        ";
                        } else {
                            // line 113
                            echo "                            <dd class=\"topics\">";
                            echo $this->getAttribute($context["forumrow"], "TOPICS", array());
                            echo " <dfn>";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS");
                            echo "</dfn></dd>
                            <dd class=\"posts\">";
                            // line 114
                            echo $this->getAttribute($context["forumrow"], "POSTS", array());
                            echo " <dfn>";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
                            echo "</dfn></dd>
                        ";
                        }
                        // line 116
                        echo "                        <dd class=\"lastpost\">
                            <span>
                                ";
                        // line 118
                        if ($this->getAttribute($context["forumrow"], "U_UNAPPROVED_TOPICS", array())) {
                            // line 119
                            echo "                                    <a href=\"";
                            echo $this->getAttribute($context["forumrow"], "U_UNAPPROVED_TOPICS", array());
                            echo "\" title=\"";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS_UNAPPROVED");
                            echo "\">
                                        <i class=\"icon fa-question fa-fw icon-blue\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                            // line 120
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS_UNAPPROVED");
                            echo "</span>
                                    </a>
                                ";
                        } elseif ($this->getAttribute(                        // line 122
$context["forumrow"], "U_UNAPPROVED_POSTS", array())) {
                            // line 123
                            echo "                                    <a href=\"";
                            echo $this->getAttribute($context["forumrow"], "U_UNAPPROVED_POSTS", array());
                            echo "\" title=\"";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS_UNAPPROVED_FORUM");
                            echo "\">
                                        <i class=\"icon fa-question fa-fw icon-blue\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                            // line 124
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS_UNAPPROVED_FORUM");
                            echo "</span>
                                    </a>
                                ";
                        }
                        // line 127
                        echo "                                ";
                        if ($this->getAttribute($context["forumrow"], "LAST_POST_TIME", array())) {
                            // line 128
                            echo "                                    <dfn>";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                            echo "</dfn>
                                    ";
                            // line 129
                            if ($this->getAttribute($context["forumrow"], "S_DISPLAY_SUBJECT", array())) {
                                // line 130
                                echo "                                        ";
                                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                                $this->env->setNamespaceLookUpOrder(array('bb3mobi_lastpostavatar', '__main__'));
                                $this->env->loadTemplate('@bb3mobi_lastpostavatar/event/forumlist_body_last_post_title_prepend.html')->display($context);
                                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                                // line 131
                                echo "                                        <a href=\"";
                                echo $this->getAttribute($context["forumrow"], "U_LAST_POST", array());
                                echo "\" title=\"";
                                echo $this->getAttribute($context["forumrow"], "LAST_POST_SUBJECT", array());
                                echo "\" class=\"lastsubject\">";
                                echo $this->getAttribute($context["forumrow"], "LAST_POST_SUBJECT_TRUNCATED", array());
                                echo "</a> <br />
                                    ";
                            }
                            // line 133
                            echo "                                        ";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                            echo " ";
                            echo $this->getAttribute($context["forumrow"], "LAST_POSTER_FULL", array());
                            echo "
                                    ";
                            // line 134
                            if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                                // line 135
                                echo "                                        <a href=\"";
                                echo $this->getAttribute($context["forumrow"], "U_LAST_POST", array());
                                echo "\" title=\"";
                                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_LATEST_POST");
                                echo "\">
                                            <i class=\"icon fa-external-link-square fa-fw icon-lightgray icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                                // line 136
                                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_LATEST_POST");
                                echo "</span>
                                        </a>
                                    ";
                            }
                            // line 139
                            echo "                                    <br />";
                            echo $this->getAttribute($context["forumrow"], "LAST_POST_TIME", array());
                            echo "
                                ";
                        } else {
                            // line 141
                            echo "                                    ";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_POSTS");
                            echo "<br />&nbsp;
                                ";
                        }
                        // line 143
                        echo "                            </span>
                        </dd>
                    ";
                    } else {
                        // line 146
                        echo "                        <dd>&nbsp;</dd>
                    ";
                    }
                    // line 148
                    echo "                ";
                }
                echo "<!-- /if not: Grid -->
\t\t\t</dl>
\t\t\t";
                // line 150
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array('gfksx_ThanksForPosts', '__main__'));
                $this->env->loadTemplate('@gfksx_ThanksForPosts/event/forumlist_body_forum_row_append.html')->display($context);
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                // line 151
                echo "\t\t</li>
\t\t";
                // line 152
                // line 153
                echo "\t";
            }
            // line 154
            echo "
\t";
            // line 155
            if ($this->getAttribute($context["forumrow"], "S_LAST_ROW", array())) {
                // line 156
                echo "\t\t\t</ul>

\t\t\t</div>
\t\t</div>
\t";
                // line 160
                // line 161
                echo "\t";
            }
            // line 162
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 164
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<strong>";
            // line 166
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_FORUMS");
            echo "</strong>
\t\t</div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forumrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "forumlist_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  560 => 170,  550 => 166,  546 => 164,  540 => 162,  537 => 161,  536 => 160,  530 => 156,  528 => 155,  525 => 154,  522 => 153,  521 => 152,  518 => 151,  513 => 150,  507 => 148,  503 => 146,  498 => 143,  492 => 141,  486 => 139,  480 => 136,  473 => 135,  471 => 134,  464 => 133,  454 => 131,  448 => 130,  446 => 129,  441 => 128,  438 => 127,  432 => 124,  425 => 123,  423 => 122,  418 => 120,  411 => 119,  409 => 118,  405 => 116,  398 => 114,  391 => 113,  383 => 111,  380 => 110,  378 => 109,  370 => 108,  367 => 107,  365 => 106,  358 => 103,  355 => 102,  354 => 101,  351 => 100,  333 => 96,  317 => 95,  314 => 94,  310 => 93,  303 => 90,  300 => 89,  298 => 88,  295 => 87,  286 => 85,  284 => 84,  281 => 83,  277 => 82,  263 => 80,  261 => 79,  253 => 78,  251 => 77,  248 => 76,  245 => 75,  241 => 73,  228 => 72,  219 => 70,  217 => 69,  214 => 68,  211 => 67,  205 => 66,  198 => 65,  196 => 64,  189 => 63,  187 => 62,  178 => 58,  168 => 57,  165 => 56,  163 => 55,  160 => 54,  154 => 53,  150 => 52,  146 => 51,  143 => 50,  135 => 49,  132 => 48,  131 => 47,  124 => 46,  122 => 45,  120 => 44,  117 => 43,  115 => 42,  110 => 39,  103 => 35,  101 => 34,  97 => 32,  96 => 31,  93 => 30,  89 => 28,  84 => 25,  80 => 23,  77 => 22,  75 => 21,  63 => 20,  60 => 19,  59 => 18,  53 => 14,  50 => 13,  49 => 12,  46 => 11,  39 => 6,  37 => 5,  34 => 4,  29 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "forumlist_body.html", "");
    }
}

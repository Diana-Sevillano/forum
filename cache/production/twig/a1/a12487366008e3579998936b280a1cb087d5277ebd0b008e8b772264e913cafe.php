<?php

/* acp_style_settings_body.html */
class __TwigTemplate_af4ceaf11b6a4079703d6df7a3832ac4556575ebbd5edcb5c1b340dce927b22f extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "acp_style_settings_body.html", 1)->display($context);
        // line 2
        echo "<div class=\"flightdeck\">
<div class=\"flightdeck-wrapper\">
<img src=\"";
        // line 4
        echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
        echo "/ext/planetstyles/flightdeck/adm/style/acp-logo.png\" width=\"500\" />
<br /><br /><p>Milk Theme Control Panel. Please refer to the documentation for help.</p>
</div>
<div class=\"errorbox purgewarning\">
<p><strong>Important:</strong> Purge Cache in: \"ACP &rarr; General &raquo; Purge Cache &rarr; Run Now\" to remove this message and enable flightdeck.</p>
</div>
<form id=\"acp_board\" method=\"post\" action=\"";
        // line 10
        echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
        echo "\" enctype=\"multipart/form-data\">

\t<fieldset>
\t\t<legend>";
        // line 13
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STYLE_SETTINGS_LOGO");
        echo "</legend>
\t\t<p>";
        // line 14
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STYLE_SETTINGS_LOGO_EXPLAIN");
        echo "</p>
\t\t<dl>
\t\t\t<dt><label for=\"style_settings_logo_upload\">";
        // line 16
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STYLE_SETTINGS_LOGO_UPLOAD");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STYLE_SETTINGS_LOGO_UPLOAD_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><input type=\"file\" name=\"style_settings_logo_upload\" id=\"style_settings_logo_upload\"></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"style_settings_logo_path\">";
        // line 20
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STYLE_SETTINGS_LOGO_PATH");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STYLE_SETTINGS_LOGO_PATH_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><input type=\"text\" id=\"style_settings_logo_path\" name=\"style_settings_logo_path\" value=\"";
        // line 21
        echo (isset($context["STYLE_SETTINGS_LOGO_PATH"]) ? $context["STYLE_SETTINGS_LOGO_PATH"] : null);
        echo "\" size=\"40\" maxlength=\"255\" /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"style_settings_logo_width\">";
        // line 24
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STYLE_SETTINGS_LOGO_WIDTH");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STYLE_SETTINGS_LOGO_WIDTH_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><input type=\"number\" id=\"style_settings_logo_width\" name=\"style_settings_logo_width\" value=\"";
        // line 25
        echo (isset($context["STYLE_SETTINGS_LOGO_WIDTH"]) ? $context["STYLE_SETTINGS_LOGO_WIDTH"] : null);
        echo "\" size=\"3\" maxlength=\"3\" min=\"0\" /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PIXEL");
        echo "</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"style_settings_logo_height\">";
        // line 28
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STYLE_SETTINGS_LOGO_HEIGHT");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STYLE_SETTINGS_LOGO_HEIGHT_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><input type=\"number\" id=\"style_settings_logo_height\" name=\"style_settings_logo_height\" value=\"";
        // line 29
        echo (isset($context["STYLE_SETTINGS_LOGO_HEIGHT"]) ? $context["STYLE_SETTINGS_LOGO_HEIGHT"] : null);
        echo "\" size=\"3\" maxlength=\"3\" min=\"0\" max=\"999\" /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PIXEL");
        echo "</dd>
\t\t</dl>
        <hr />
\t\t<dl>
\t\t\t<dt><label for=\"style_settings_header_upload\">";
        // line 33
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STYLE_SETTINGS_FAVICON_UPLOAD");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STYLE_SETTINGS_FAVICON_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><input type=\"file\" name=\"style_settings_favicon_upload\" id=\"style_settings_favicon_upload\"></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"style_settings_favicon_path\">";
        // line 37
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STYLE_SETTINGS_FAVICON_PATH");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STYLE_SETTINGS_FAVICON_PATH_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><input type=\"text\" id=\"style_settings_favicon_path\" name=\"style_settings_favicon_path\" value=\"";
        // line 38
        echo (isset($context["STYLE_SETTINGS_FAVICON_PATH"]) ? $context["STYLE_SETTINGS_FAVICON_PATH"] : null);
        echo "\" size=\"40\" maxlength=\"255\" /></dd>
\t\t</dl>
        <hr />        
\t\t<dl>
\t\t\t<dt><label for=\"style_settings_header_upload\">";
        // line 42
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STYLE_SETTINGS_HEADER_UPLOAD");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STYLE_SETTINGS_HEADER_UPLOAD_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><input type=\"file\" name=\"style_settings_header_upload\" id=\"style_settings_header_upload\"></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"style_settings_header_path\">";
        // line 46
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STYLE_SETTINGS_HEADER_PATH");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STYLE_SETTINGS_HEADER_PATH_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><input type=\"text\" id=\"style_settings_header_path\" name=\"style_settings_header_path\" value=\"";
        // line 47
        echo (isset($context["STYLE_SETTINGS_HEADER_PATH"]) ? $context["STYLE_SETTINGS_HEADER_PATH"] : null);
        echo "\" size=\"40\" maxlength=\"255\" /></dd>
\t\t</dl>                
\t</fieldset>

\t<fieldset>
\t\t<legend>";
        // line 52
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STYLE_SETTINGS_CONFIG");
        echo "</legend>
\t\t";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "style_settings_config", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["style_settings_config"]) {
            // line 54
            echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"";
            // line 55
            echo $this->getAttribute($context["style_settings_config"], "CONFIG_NAME", array());
            echo "\">";
            echo $this->getAttribute($context["style_settings_config"], "LABEL", array());
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->getAttribute($context["style_settings_config"], "LABEL_HELP", array());
            echo "</span>
                <!-- <br /><span>";
            // line 56
            echo $this->getAttribute($context["style_settings_config"], "LABEL_EXPLAIN", array());
            echo "</span></dt> -->
\t\t\t\t<dd>
\t\t\t\t\t";
            // line 58
            if ($this->getAttribute($context["style_settings_config"], "S_BOOL", array())) {
                // line 59
                echo "\t\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"";
                echo $this->getAttribute($context["style_settings_config"], "CONFIG_NAME", array());
                echo "\" name=\"";
                echo $this->getAttribute($context["style_settings_config"], "CONFIG_NAME", array());
                echo "\" value=\"1\"";
                if ($this->getAttribute($context["style_settings_config"], "VALUE", array())) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
                echo "</label>
\t\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"";
                // line 60
                echo $this->getAttribute($context["style_settings_config"], "CONFIG_NAME", array());
                echo "\" value=\"0\"";
                if ( !$this->getAttribute($context["style_settings_config"], "VALUE", array())) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
                echo "</label>
\t\t\t\t\t";
            } elseif ($this->getAttribute(            // line 61
$context["style_settings_config"], "S_LIST", array())) {
                // line 62
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["style_settings_config"], "OPTIONS", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["OPTION"]) {
                    // line 63
                    echo "\t\t\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" ";
                    if ($this->getAttribute($context["loop"], "first", array())) {
                        echo "id=\"";
                        echo $this->getAttribute($context["style_settings_config"], "CONFIG_NAME", array());
                        echo "\" ";
                    }
                    echo "name=\"";
                    echo $this->getAttribute($context["style_settings_config"], "CONFIG_NAME", array());
                    echo "\" value=\"";
                    echo $context["OPTION"];
                    echo "\"";
                    if (($this->getAttribute($context["style_settings_config"], "VALUE", array()) === $context["OPTION"])) {
                        echo " checked=\"checked\"";
                    }
                    echo " /> ";
                    echo $context["OPTION"];
                    echo "</label>
\t\t\t\t\t\t";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OPTION'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "\t\t\t\t\t";
            } elseif ($this->getAttribute($context["style_settings_config"], "S_STRING", array())) {
                // line 66
                echo "\t\t\t\t\t\t<input type=\"text\" id=\"";
                echo $this->getAttribute($context["style_settings_config"], "CONFIG_NAME", array());
                echo "\" name=\"";
                echo $this->getAttribute($context["style_settings_config"], "CONFIG_NAME", array());
                echo "\" value=\"";
                echo $this->getAttribute($context["style_settings_config"], "VALUE", array());
                echo "\" size=\"40\" maxlength=\"255\" />
\t\t\t\t\t";
            }
            // line 68
            echo "\t\t\t\t</dd>
\t\t\t</dl>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style_settings_config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "\t</fieldset>

\t<fieldset>
    <p>Refer to documentation for corresponding output locations.</p>
\t\t<legend>";
        // line 75
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STYLE_SETTINGS_HTML_CODE");
        echo "</legend>
\t\t";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "style_settings_html", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["style_settings_html"]) {
            // line 77
            echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"";
            // line 78
            echo $this->getAttribute($context["style_settings_html"], "NAME", array());
            echo "\">";
            echo $this->getAttribute($context["style_settings_html"], "LABEL", array());
            echo "</label><br /><span>Refer to documentation for output location. <!-- ";
            echo $this->getAttribute($context["style_settings_html"], "LABEL_EXPLAIN", array());
            echo " --></span></dt>
\t\t\t\t<dd><textarea id=\"";
            // line 79
            echo $this->getAttribute($context["style_settings_html"], "NAME", array());
            echo "\" name=\"";
            echo $this->getAttribute($context["style_settings_html"], "NAME", array());
            echo "\" rows=\"10\" cols=\"500\" >";
            echo $this->getAttribute($context["style_settings_html"], "VALUE", array());
            echo "</textarea></dd>
\t\t\t</dl>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style_settings_html'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "\t</fieldset>

\t<fieldset>
\t\t<p class=\"submit-buttons\">
\t\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 86
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
        echo "\" />&nbsp;
\t\t</p>
\t\t";
        // line 88
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t</fieldset>
</form>
</div>
";
        // line 92
        $this->loadTemplate("overall_footer.html", "acp_style_settings_body.html", 92)->display($context);
    }

    public function getTemplateName()
    {
        return "acp_style_settings_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 92,  323 => 88,  318 => 86,  312 => 82,  299 => 79,  291 => 78,  288 => 77,  284 => 76,  280 => 75,  274 => 71,  266 => 68,  256 => 66,  253 => 65,  222 => 63,  204 => 62,  202 => 61,  192 => 60,  179 => 59,  177 => 58,  172 => 56,  163 => 55,  160 => 54,  156 => 53,  152 => 52,  144 => 47,  137 => 46,  127 => 42,  120 => 38,  113 => 37,  103 => 33,  94 => 29,  87 => 28,  79 => 25,  72 => 24,  66 => 21,  59 => 20,  49 => 16,  44 => 14,  40 => 13,  34 => 10,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "acp_style_settings_body.html", "");
    }
}

<?php

/* WebProfilerBundle:Profiler:layout.html.twig */
class __TwigTemplate_acab466ffb6d4857384e4c7cde9aef78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
        echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Profiler:toolbar", array("token" => $_token_, "position" => "normal"), array());
        // line 6
        echo "
    <div id=\"content\">
        ";
        // line 8
        $this->env->loadTemplate("WebProfilerBundle:Profiler:header.html.twig")->display(array());
        // line 9
        echo "
        <div id=\"main\">

            <div class=\"clear_fix\">
                <div id=\"collector_wrapper\">
                    ";
        // line 14
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if ($_profile_) {
            // line 15
            echo "                        <div id=\"resume\">
                            <a id=\"resume-view-all\" href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler_search", array("limit" => 10)), "html", null, true);
            echo "\">View all</a>
                            <strong>Profile for:</strong>
                            ";
            // line 18
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($_profile_, "method")), "html", null, true);
            echo "
                            ";
            // line 19
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            if (twig_in_filter(twig_upper_filter($this->env, $this->getAttribute($_profile_, "method")), array(0 => "GET", 1 => "HEAD"))) {
                // line 20
                echo "                                <a href=\"";
                if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "url"), "html", null, true);
                echo "\">";
                if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "url"), "html", null, true);
                echo "</a>
                            ";
            } else {
                // line 22
                echo "                                ";
                if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "url"), "html", null, true);
                echo "
                            ";
            }
            // line 24
            echo "                            <span class=\"date\">
                                <em>by ";
            // line 25
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "ip"), "html", null, true);
            echo "</em> at <em>";
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_profile_, "time"), "r"), "html", null, true);
            echo "</em>
                            </span>
                        </div>
                    ";
        }
        // line 29
        echo "
                    <div id=\"collector_content\">
                        ";
        // line 31
        $this->env->loadTemplate("WebProfilerBundle:Profiler:base_js.html.twig")->display($context);
        // line 32
        echo "                        ";
        $this->displayBlock('panel', $context, $blocks);
        // line 33
        echo "                    </div>
                </div>
                <div id=\"navigation\">
                    ";
        // line 36
        if (array_key_exists("templates", $context)) {
            // line 37
            echo "                        <ul id=\"menu_profiler\">
                            ";
            // line 38
            if (isset($context["templates"])) { $_templates_ = $context["templates"]; } else { $_templates_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_templates_);
            foreach ($context['_seq'] as $context["name"] => $context["template"]) {
                // line 39
                echo "                                ";
                ob_start();
                if (isset($context["template"])) { $_template_ = $context["template"]; } else { $_template_ = null; }
                if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_template_, "renderBlock", array(0 => "menu", 1 => array("collector" => $this->getAttribute($_profile_, "getcollector", array(0 => $_name_), "method"))), "method"), "html", null, true);
                $context["menu"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 40
                echo "                                ";
                if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
                if (($_menu_ != "")) {
                    // line 41
                    echo "                                    <li class=\"";
                    if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                    echo twig_escape_filter($this->env, $_name_, "html", null, true);
                    if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                    if (isset($context["panel"])) { $_panel_ = $context["panel"]; } else { $_panel_ = null; }
                    if (($_name_ == $_panel_)) {
                        echo " selected";
                    }
                    echo "\">
                                        <a href=\"";
                    // line 42
                    if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
                    if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $_token_, "panel" => $_name_)), "html", null, true);
                    echo "\">";
                    if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
                    echo $_menu_;
                    echo "</a>
                                    </li>
                                ";
                }
                // line 45
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 46
            echo "                        </ul>
                    ";
        }
        // line 48
        echo "                    ";
        echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Profiler:searchBar", array(), array());
        // line 49
        echo "                    ";
        if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
        $this->env->loadTemplate("WebProfilerBundle:Profiler:admin.html.twig")->display(array("token" => $_token_));
        // line 50
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    // line 32
    public function block_panel($context, array $blocks = array())
    {
        echo "";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 32,  174 => 50,  170 => 49,  167 => 48,  163 => 46,  157 => 45,  146 => 42,  135 => 41,  123 => 39,  118 => 38,  115 => 37,  113 => 36,  108 => 33,  105 => 32,  99 => 29,  88 => 25,  85 => 24,  78 => 22,  65 => 19,  55 => 16,  52 => 15,  49 => 14,  42 => 9,  40 => 8,  36 => 6,  33 => 5,  30 => 4,  27 => 3,  201 => 70,  195 => 66,  187 => 62,  181 => 58,  178 => 57,  172 => 56,  168 => 54,  165 => 53,  156 => 48,  151 => 45,  148 => 44,  145 => 43,  142 => 42,  134 => 37,  131 => 40,  128 => 35,  122 => 32,  119 => 31,  111 => 30,  106 => 29,  103 => 31,  100 => 27,  97 => 26,  93 => 24,  89 => 22,  79 => 19,  68 => 20,  64 => 13,  60 => 18,  57 => 11,  54 => 10,  50 => 9,  47 => 8,  43 => 7,  39 => 6,  35 => 5,  31 => 4,  28 => 3,);
    }
}

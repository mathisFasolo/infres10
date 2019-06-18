<?php

/* WebProfilerBundle:Collector:logger.html.twig */
class __TwigTemplate_c431da166e51d03579f50523dd3c63ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ($this->getAttribute($_collector_, "counterrors")) {
            // line 5
            echo "        ";
            ob_start();
            // line 6
            echo "            <img width=\"15\" height=\"28\" alt=\"Logs\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAcCAYAAABoMT8aAAAA4klEQVQ4y2P4//8/AyWYYXgYwOPp6Xnc3t7+P7EYpB6k7+zZs2ADNEjRjIwDAgKWgAywIUfz8+fPVzg7O/8AGeCATQEQnAfi/SAah/wcV1dXvAYUgORANA75ehcXl+/4DHAABRIe+ZrhbgAhTHsDiEgHBA0glA6GfSDiw5mZma+A+sphBlhVVFQ88vHx+Xfu3Ll7QP5haOjjwtuAuGHv3r3NIMNABqh8+/atsaur666vr+9XUlwSHx//AGQANxCbAnEWyGQicRMQ9wBxIQM0qjiBWAFqkB00/glhayBWHwb1AgB38EJsUtxtWwAAAABJRU5ErkJggg==\"/>
            <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">";
            // line 7
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "counterrors"), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 9
            echo "        ";
            ob_start();
            // line 10
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Exception</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">";
            // line 12
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "counterrors"), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 15
            echo "        ";
            if (isset($context["profiler_url"])) { $_profiler_url_ = $context["profiler_url"]; } else { $_profiler_url_ = null; }
            $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => $_profiler_url_)));
            // line 16
            echo "    ";
        }
    }

    // line 19
    public function block_menu($context, array $blocks = array())
    {
        // line 20
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/logger.png"), "html", null, true);
        echo "\" alt=\"Logger\" /></span>
    <strong>Logs</strong>
    ";
        // line 23
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ($this->getAttribute($_collector_, "counterrors")) {
            // line 24
            echo "        <span class=\"count\">
            <span>";
            // line 25
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "counterrors"), "html", null, true);
            echo "</span>
        </span>
    ";
        }
        // line 28
        echo "</span>
";
    }

    // line 31
    public function block_panel($context, array $blocks = array())
    {
        // line 32
        echo "    <h2>Logs</h2>

    ";
        // line 34
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        $context["priority"] = $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "query"), "get", array(0 => "priority", 1 => 0), "method");
        // line 35
        echo "
    <table>
        <tr>
            <th>Filter</th>
            <td>
                <form id=\"priority-form\" action=\"\" method=\"get\" style=\"display: inline\">
                    <input type=\"hidden\" name=\"panel\" value=\"logger\" />
                    <label for=\"priority\">Priority</label>
                    <select id=\"priority\" name=\"priority\" onchange=\"document.getElementById('priority-form').submit(); \">
                        ";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(100 => "DEBUG", 200 => "INFO", 250 => "NOTICE", 300 => "WARNING", 400 => "ERROR", 500 => "CRITICAL", 550 => "ALERT", 600 => "EMERGENCY"));
        foreach ($context['_seq'] as $context["value"] => $context["text"]) {
            // line 45
            echo "                        <option value=\"";
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, $_value_, "html", null, true);
            echo "\"";
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            if (isset($context["priority"])) { $_priority_ = $context["priority"]; } else { $_priority_ = null; }
            echo ((($_value_ == $_priority_)) ? (" selected") : (""));
            echo ">";
            if (isset($context["text"])) { $_text_ = $context["text"]; } else { $_text_ = null; }
            echo twig_escape_filter($this->env, $_text_, "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 47
        echo "                    </select>
                    <noscript>
                        <input type=\"submit\" value=\"refresh\" />
                    </noscript>
                </form>
            </td>
        </tr>
    </table>

    ";
        // line 56
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ($this->getAttribute($_collector_, "logs")) {
            // line 57
            echo "        <ul class=\"alt\">
            ";
            // line 58
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_collector_, "logs"));
            $context['_iterated'] = false;
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                if (isset($context["priority"])) { $_priority_ = $context["priority"]; } else { $_priority_ = null; }
                if (($this->getAttribute($_log_, "priority") >= $_priority_)) {
                    // line 59
                    echo "                <li class=\"";
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($_loop_, "index")), "html", null, true);
                    if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                    if (($this->getAttribute($_log_, "priority") >= 400)) {
                        echo " error";
                    } elseif (($this->getAttribute($_log_, "priority") >= 300)) {
                        echo " warning";
                    }
                    echo "\">
                    ";
                    // line 60
                    if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_log_, "priorityName"), "html", null, true);
                    echo " - ";
                    if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_log_, "message"), "html", null, true);
                    echo "
                    ";
                    // line 61
                    if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                    if (($this->getAttribute($_log_, "context", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($_log_, "context"))))) {
                        // line 62
                        echo "                        <br />
                        <small>
                            <strong>Context</strong>: ";
                        // line 64
                        if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('yaml')->encode($this->getAttribute($_log_, "context")), "html", null, true);
                        echo "
                        </small>
                    ";
                    }
                    // line 67
                    echo "                </li>
            ";
                    $context['_iterated'] = true;
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            if (!$context['_iterated']) {
                // line 69
                echo "                <li><em>No logs available for this priority.</em></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 71
            echo "        </ul>
    ";
        } else {
            // line 73
            echo "        <p>
            <em>No logs available.</em>
        </p>
    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:logger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 69,  196 => 62,  193 => 61,  173 => 59,  158 => 58,  152 => 56,  838 => 466,  835 => 465,  822 => 463,  817 => 462,  813 => 460,  800 => 459,  773 => 454,  770 => 453,  748 => 451,  730 => 450,  725 => 448,  720 => 447,  715 => 446,  710 => 445,  705 => 444,  700 => 443,  697 => 442,  694 => 441,  676 => 440,  665 => 439,  649 => 434,  642 => 432,  637 => 431,  634 => 430,  620 => 429,  588 => 399,  567 => 396,  549 => 395,  546 => 394,  543 => 393,  535 => 391,  529 => 389,  272 => 136,  191 => 84,  185 => 60,  228 => 73,  206 => 87,  203 => 68,  188 => 67,  184 => 66,  180 => 64,  176 => 63,  159 => 58,  133 => 52,  127 => 51,  114 => 42,  76 => 21,  101 => 33,  75 => 23,  18 => 1,  96 => 41,  276 => 248,  262 => 236,  259 => 235,  239 => 219,  236 => 218,  66 => 23,  53 => 22,  125 => 40,  120 => 44,  70 => 19,  144 => 40,  141 => 47,  110 => 49,  94 => 28,  51 => 14,  21 => 3,  331 => 100,  325 => 96,  322 => 95,  318 => 94,  315 => 93,  310 => 90,  304 => 86,  301 => 85,  297 => 84,  294 => 83,  289 => 80,  275 => 79,  271 => 77,  256 => 234,  246 => 73,  243 => 72,  237 => 70,  232 => 69,  224 => 71,  214 => 62,  200 => 64,  197 => 60,  190 => 58,  169 => 56,  154 => 50,  136 => 53,  132 => 47,  129 => 46,  121 => 42,  80 => 24,  59 => 22,  74 => 24,  139 => 45,  124 => 45,  109 => 35,  84 => 24,  81 => 23,  73 => 20,  69 => 24,  62 => 11,  41 => 7,  34 => 16,  95 => 30,  90 => 39,  87 => 25,  83 => 23,  26 => 3,  45 => 13,  22 => 4,  48 => 7,  25 => 3,  248 => 96,  238 => 90,  234 => 88,  227 => 93,  223 => 83,  218 => 63,  216 => 79,  213 => 90,  210 => 70,  207 => 67,  198 => 86,  192 => 67,  177 => 61,  171 => 79,  164 => 55,  160 => 51,  155 => 57,  153 => 72,  149 => 47,  143 => 46,  137 => 45,  126 => 43,  116 => 28,  107 => 39,  82 => 26,  67 => 28,  112 => 37,  102 => 32,  63 => 18,  56 => 23,  38 => 6,  32 => 8,  23 => 3,  17 => 1,  92 => 35,  86 => 39,  77 => 27,  29 => 4,  24 => 11,  19 => 1,  61 => 15,  58 => 15,  46 => 14,  44 => 19,  37 => 17,  20 => 2,  182 => 82,  174 => 80,  170 => 49,  167 => 48,  163 => 75,  157 => 45,  146 => 47,  135 => 41,  123 => 24,  118 => 41,  115 => 37,  113 => 50,  108 => 20,  105 => 35,  99 => 31,  88 => 41,  85 => 29,  78 => 25,  65 => 16,  55 => 10,  52 => 16,  49 => 37,  42 => 11,  40 => 8,  36 => 7,  33 => 6,  30 => 5,  27 => 3,  201 => 72,  195 => 85,  187 => 62,  181 => 63,  178 => 57,  172 => 57,  168 => 78,  165 => 62,  156 => 73,  151 => 45,  148 => 71,  145 => 61,  142 => 69,  134 => 31,  131 => 30,  128 => 59,  122 => 30,  119 => 29,  111 => 41,  106 => 34,  103 => 47,  100 => 27,  97 => 36,  93 => 40,  89 => 31,  79 => 33,  68 => 25,  64 => 23,  60 => 25,  57 => 16,  54 => 12,  50 => 10,  47 => 9,  43 => 8,  39 => 10,  35 => 5,  31 => 4,  28 => 3,);
    }
}

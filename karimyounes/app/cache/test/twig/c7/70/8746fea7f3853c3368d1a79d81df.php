<?php

/* WebProfilerBundle:Router:panel.html.twig */
class __TwigTemplate_c7708746fea7f3853c3368d1a79d81df extends Twig_Template
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
        echo "<h2>Routing for \"";
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_request_, "pathinfo"), "html", null, true);
        echo "\"</h2>

<ul>
    <li>
        <strong>Route:&nbsp;</strong>
        ";
        // line 6
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        if ($this->getAttribute($_request_, "route")) {
            // line 7
            echo "            ";
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_request_, "route"), "html", null, true);
            echo "
        ";
        } else {
            // line 9
            echo "            <em>No matching route</em>
        ";
        }
        // line 11
        echo "    </li>
    <li>
        <strong>Route parameters:&nbsp;</strong>
        ";
        // line 14
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_request_, "routeParams"))) {
            // line 15
            echo "            ";
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            $this->env->loadTemplate("WebProfilerBundle:Profiler:table.html.twig")->display(array("data" => $this->getAttribute($_request_, "routeParams"), "class" => "inline"));
            // line 16
            echo "        ";
        } else {
            // line 17
            echo "            <em>No parameters</em>
        ";
        }
        // line 19
        echo "    </li>
    ";
        // line 20
        if (isset($context["router"])) { $_router_ = $context["router"]; } else { $_router_ = null; }
        if ($this->getAttribute($_router_, "redirect")) {
            // line 21
            echo "    <li>
        <strong>Redirecting to:&nbsp;</strong> \"";
            // line 22
            if (isset($context["router"])) { $_router_ = $context["router"]; } else { $_router_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_router_, "targetUrl"), "html", null, true);
            echo "\" ";
            if (isset($context["router"])) { $_router_ = $context["router"]; } else { $_router_ = null; }
            if ($this->getAttribute($_router_, "targetRoute")) {
                echo "(route: \"";
                if (isset($context["router"])) { $_router_ = $context["router"]; } else { $_router_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_router_, "targetRoute"), "html", null, true);
                echo "\")";
            }
            // line 23
            echo "    <li>
    ";
        }
        // line 25
        echo "    <li>
        <strong>Route matching logs</strong>
        <table class=\"routing inline\">
            <tr>
                <th>Route name</th>
                <th>Pattern</th>
                <th>Log</th>
            </tr>
            ";
        // line 33
        if (isset($context["traces"])) { $_traces_ = $context["traces"]; } else { $_traces_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_traces_);
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 34
            echo "                <tr class=\"";
            if (isset($context["trace"])) { $_trace_ = $context["trace"]; } else { $_trace_ = null; }
            echo (((1 == $this->getAttribute($_trace_, "level"))) ? ("almost") : ((((2 == $this->getAttribute($_trace_, "level"))) ? ("matches") : (""))));
            echo "\">
                    <td>";
            // line 35
            if (isset($context["trace"])) { $_trace_ = $context["trace"]; } else { $_trace_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_trace_, "name"), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            if (isset($context["trace"])) { $_trace_ = $context["trace"]; } else { $_trace_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_trace_, "pattern"), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            if (isset($context["trace"])) { $_trace_ = $context["trace"]; } else { $_trace_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_trace_, "log"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 40
        echo "        </table>
        <em><small>Note: The above matching is based on the configuration for the current router which might differ from
        the configuration used while routing this request.</small></em>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Router:panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 21,  53 => 16,  125 => 40,  120 => 44,  70 => 22,  144 => 40,  141 => 39,  110 => 36,  94 => 33,  51 => 11,  21 => 1,  331 => 100,  325 => 96,  322 => 95,  318 => 94,  315 => 93,  310 => 90,  304 => 86,  301 => 85,  297 => 84,  294 => 83,  289 => 80,  275 => 79,  271 => 77,  256 => 75,  246 => 73,  243 => 72,  237 => 70,  232 => 69,  224 => 66,  214 => 62,  200 => 61,  197 => 60,  190 => 58,  169 => 56,  154 => 50,  136 => 49,  132 => 47,  129 => 46,  121 => 42,  80 => 23,  59 => 22,  74 => 24,  139 => 45,  124 => 33,  109 => 34,  84 => 25,  81 => 24,  73 => 20,  69 => 22,  62 => 10,  41 => 11,  34 => 5,  95 => 18,  90 => 28,  87 => 16,  83 => 23,  26 => 3,  45 => 12,  22 => 4,  48 => 7,  25 => 2,  248 => 96,  238 => 90,  234 => 88,  227 => 84,  223 => 83,  218 => 63,  216 => 79,  213 => 78,  210 => 77,  207 => 76,  198 => 71,  192 => 67,  177 => 61,  171 => 59,  164 => 55,  160 => 51,  155 => 51,  153 => 50,  149 => 47,  143 => 46,  137 => 45,  126 => 43,  116 => 28,  107 => 31,  82 => 37,  67 => 21,  112 => 37,  102 => 34,  63 => 20,  56 => 17,  38 => 6,  32 => 11,  23 => 29,  17 => 1,  92 => 43,  86 => 39,  77 => 27,  29 => 3,  24 => 11,  19 => 1,  61 => 19,  58 => 17,  46 => 14,  44 => 12,  37 => 9,  20 => 2,  182 => 32,  174 => 60,  170 => 49,  167 => 48,  163 => 52,  157 => 45,  146 => 47,  135 => 41,  123 => 24,  118 => 41,  115 => 37,  113 => 35,  108 => 20,  105 => 35,  99 => 34,  88 => 41,  85 => 29,  78 => 23,  65 => 19,  55 => 10,  52 => 14,  49 => 15,  42 => 11,  40 => 7,  36 => 5,  33 => 5,  30 => 7,  27 => 6,  201 => 72,  195 => 66,  187 => 62,  181 => 63,  178 => 57,  172 => 57,  168 => 54,  165 => 53,  156 => 51,  151 => 45,  148 => 44,  145 => 61,  142 => 42,  134 => 31,  131 => 30,  128 => 35,  122 => 30,  119 => 29,  111 => 21,  106 => 33,  103 => 47,  100 => 27,  97 => 45,  93 => 24,  89 => 31,  79 => 26,  68 => 14,  64 => 23,  60 => 19,  57 => 13,  54 => 12,  50 => 10,  47 => 9,  43 => 8,  39 => 10,  35 => 7,  31 => 4,  28 => 3,);
    }
}

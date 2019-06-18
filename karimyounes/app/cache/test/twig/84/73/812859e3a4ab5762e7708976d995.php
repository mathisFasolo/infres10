<?php

/* WebProfilerBundle:Profiler:results.html.twig */
class __TwigTemplate_8473812859e3a4ab5762e7708976d995 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
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
    public function block_panel($context, array $blocks = array())
    {
        // line 4
        echo "    <h2>Search Results</h2>

    ";
        // line 6
        if (isset($context["tokens"])) { $_tokens_ = $context["tokens"]; } else { $_tokens_ = null; }
        if ($_tokens_) {
            // line 7
            echo "        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Token</th>
                    <th scope=\"col\">IP</th>
                    <th scope=\"col\">Method</th>
                    <th scope=\"col\">URL</th>
                    <th scope=\"col\">Time</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 18
            if (isset($context["tokens"])) { $_tokens_ = $context["tokens"]; } else { $_tokens_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_tokens_);
            foreach ($context['_seq'] as $context["_key"] => $context["elements"]) {
                // line 19
                echo "                    <tr>
                        <td><a href=\"";
                // line 20
                if (isset($context["elements"])) { $_elements_ = $context["elements"]; } else { $_elements_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($_elements_, "token"))), "html", null, true);
                echo "\">";
                if (isset($context["elements"])) { $_elements_ = $context["elements"]; } else { $_elements_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_elements_, "token"), "html", null, true);
                echo "</a></td>
                        <td>";
                // line 21
                if (isset($context["elements"])) { $_elements_ = $context["elements"]; } else { $_elements_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_elements_, "ip"), "html", null, true);
                echo "</td>
                        <td>";
                // line 22
                if (isset($context["elements"])) { $_elements_ = $context["elements"]; } else { $_elements_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_elements_, "method"), "html", null, true);
                echo "</td>
                        <td>";
                // line 23
                if (isset($context["elements"])) { $_elements_ = $context["elements"]; } else { $_elements_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_elements_, "url"), "html", null, true);
                echo "</td>
                        <td>";
                // line 24
                if (isset($context["elements"])) { $_elements_ = $context["elements"]; } else { $_elements_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_elements_, "time"), "r"), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elements'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 27
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 30
            echo "        <p>
            <em>The query returned no result.</em>
        </p>
    ";
        }
        // line 34
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 34,  75 => 23,  18 => 1,  96 => 28,  276 => 248,  262 => 236,  259 => 235,  239 => 219,  236 => 218,  66 => 21,  53 => 16,  125 => 40,  120 => 44,  70 => 22,  144 => 40,  141 => 39,  110 => 36,  94 => 33,  51 => 11,  21 => 3,  331 => 100,  325 => 96,  322 => 95,  318 => 94,  315 => 93,  310 => 90,  304 => 86,  301 => 85,  297 => 84,  294 => 83,  289 => 80,  275 => 79,  271 => 77,  256 => 234,  246 => 73,  243 => 72,  237 => 70,  232 => 69,  224 => 66,  214 => 62,  200 => 61,  197 => 60,  190 => 58,  169 => 56,  154 => 50,  136 => 49,  132 => 47,  129 => 46,  121 => 42,  80 => 24,  59 => 22,  74 => 24,  139 => 45,  124 => 33,  109 => 34,  84 => 25,  81 => 24,  73 => 20,  69 => 22,  62 => 10,  41 => 11,  34 => 9,  95 => 30,  90 => 27,  87 => 16,  83 => 23,  26 => 3,  45 => 13,  22 => 4,  48 => 7,  25 => 3,  248 => 96,  238 => 90,  234 => 88,  227 => 84,  223 => 83,  218 => 63,  216 => 79,  213 => 78,  210 => 77,  207 => 76,  198 => 71,  192 => 67,  177 => 61,  171 => 59,  164 => 55,  160 => 51,  155 => 51,  153 => 50,  149 => 47,  143 => 46,  137 => 45,  126 => 43,  116 => 28,  107 => 31,  82 => 26,  67 => 21,  112 => 37,  102 => 34,  63 => 18,  56 => 17,  38 => 10,  32 => 8,  23 => 3,  17 => 1,  92 => 43,  86 => 39,  77 => 27,  29 => 4,  24 => 11,  19 => 1,  61 => 19,  58 => 15,  46 => 14,  44 => 13,  37 => 9,  20 => 2,  182 => 32,  174 => 60,  170 => 49,  167 => 48,  163 => 52,  157 => 45,  146 => 47,  135 => 41,  123 => 24,  118 => 41,  115 => 37,  113 => 35,  108 => 20,  105 => 35,  99 => 34,  88 => 41,  85 => 29,  78 => 25,  65 => 21,  55 => 10,  52 => 16,  49 => 18,  42 => 11,  40 => 8,  36 => 7,  33 => 6,  30 => 6,  27 => 3,  201 => 72,  195 => 66,  187 => 62,  181 => 63,  178 => 57,  172 => 57,  168 => 54,  165 => 53,  156 => 51,  151 => 45,  148 => 44,  145 => 61,  142 => 42,  134 => 31,  131 => 30,  128 => 35,  122 => 30,  119 => 29,  111 => 21,  106 => 33,  103 => 47,  100 => 27,  97 => 45,  93 => 24,  89 => 31,  79 => 26,  68 => 25,  64 => 23,  60 => 19,  57 => 20,  54 => 19,  50 => 10,  47 => 12,  43 => 8,  39 => 10,  35 => 9,  31 => 6,  28 => 7,);
    }
}

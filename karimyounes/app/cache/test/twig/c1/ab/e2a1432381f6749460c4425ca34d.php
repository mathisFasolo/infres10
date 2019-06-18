<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_c1abe2a1432381f6749460c4425ca34d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Redirection Intercepted";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"sf-exceptionreset\">
        <div class=\"block_exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        if (isset($context["location"])) { $_location_ = $context["location"]; } else { $_location_ = null; }
        echo twig_escape_filter($this->env, $_location_, "html", null, true);
        echo "\">";
        if (isset($context["location"])) { $_location_ = $context["location"]; } else { $_location_ = null; }
        echo twig_escape_filter($this->env, $_location_, "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  18 => 1,  96 => 28,  276 => 248,  262 => 236,  259 => 235,  239 => 219,  236 => 218,  66 => 21,  53 => 16,  125 => 40,  120 => 44,  70 => 21,  144 => 40,  141 => 39,  110 => 36,  94 => 33,  51 => 11,  21 => 3,  331 => 100,  325 => 96,  322 => 95,  318 => 94,  315 => 93,  310 => 90,  304 => 86,  301 => 85,  297 => 84,  294 => 83,  289 => 80,  275 => 79,  271 => 77,  256 => 234,  246 => 73,  243 => 72,  237 => 70,  232 => 69,  224 => 66,  214 => 62,  200 => 61,  197 => 60,  190 => 58,  169 => 56,  154 => 50,  136 => 49,  132 => 47,  129 => 46,  121 => 42,  80 => 23,  59 => 22,  74 => 24,  139 => 45,  124 => 33,  109 => 34,  84 => 25,  81 => 24,  73 => 20,  69 => 22,  62 => 10,  41 => 11,  34 => 5,  95 => 18,  90 => 28,  87 => 16,  83 => 23,  26 => 3,  45 => 13,  22 => 4,  48 => 7,  25 => 3,  248 => 96,  238 => 90,  234 => 88,  227 => 84,  223 => 83,  218 => 63,  216 => 79,  213 => 78,  210 => 77,  207 => 76,  198 => 71,  192 => 67,  177 => 61,  171 => 59,  164 => 55,  160 => 51,  155 => 51,  153 => 50,  149 => 47,  143 => 46,  137 => 45,  126 => 43,  116 => 28,  107 => 31,  82 => 26,  67 => 21,  112 => 37,  102 => 34,  63 => 18,  56 => 17,  38 => 6,  32 => 8,  23 => 3,  17 => 1,  92 => 43,  86 => 39,  77 => 27,  29 => 3,  24 => 11,  19 => 1,  61 => 19,  58 => 15,  46 => 14,  44 => 13,  37 => 9,  20 => 2,  182 => 32,  174 => 60,  170 => 49,  167 => 48,  163 => 52,  157 => 45,  146 => 47,  135 => 41,  123 => 24,  118 => 41,  115 => 37,  113 => 35,  108 => 20,  105 => 35,  99 => 34,  88 => 41,  85 => 29,  78 => 25,  65 => 19,  55 => 10,  52 => 14,  49 => 15,  42 => 11,  40 => 8,  36 => 6,  33 => 5,  30 => 6,  27 => 3,  201 => 72,  195 => 66,  187 => 62,  181 => 63,  178 => 57,  172 => 57,  168 => 54,  165 => 53,  156 => 51,  151 => 45,  148 => 44,  145 => 61,  142 => 42,  134 => 31,  131 => 30,  128 => 35,  122 => 30,  119 => 29,  111 => 21,  106 => 33,  103 => 47,  100 => 27,  97 => 45,  93 => 24,  89 => 31,  79 => 26,  68 => 25,  64 => 23,  60 => 19,  57 => 18,  54 => 17,  50 => 10,  47 => 15,  43 => 8,  39 => 10,  35 => 8,  31 => 6,  28 => 3,);
    }
}

<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_d832fa55b114106adfebea4b8e213735 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" />
    ";
        // line 5
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_menu($context, array $blocks = array())
    {
        // line 9
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/exception.png"), "html", null, true);
        echo "\" alt=\"Exception\" /></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 13
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ($this->getAttribute($_collector_, "hasexception")) {
            // line 14
            echo "            <span>1</span>
        ";
        }
        // line 16
        echo "    </span>
</span>
";
    }

    // line 20
    public function block_panel($context, array $blocks = array())
    {
        // line 21
        echo "    <h2>Exception</h2>

    ";
        // line 23
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ((!$this->getAttribute($_collector_, "hasexception"))) {
            // line 24
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 28
            echo "        ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Exception:show", array("exception" => $this->getAttribute($_collector_, "exception"), "format" => "html"), array());
            // line 29
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  390 => 163,  379 => 160,  374 => 159,  371 => 158,  365 => 157,  362 => 156,  354 => 150,  351 => 149,  344 => 145,  336 => 141,  328 => 137,  320 => 133,  312 => 129,  296 => 121,  280 => 109,  264 => 101,  235 => 83,  229 => 81,  220 => 77,  215 => 74,  208 => 72,  183 => 64,  175 => 60,  147 => 49,  130 => 44,  117 => 40,  217 => 69,  196 => 62,  193 => 61,  173 => 59,  158 => 58,  152 => 56,  838 => 466,  835 => 465,  822 => 463,  817 => 462,  813 => 460,  800 => 459,  773 => 454,  770 => 453,  748 => 451,  730 => 450,  725 => 448,  720 => 447,  715 => 446,  710 => 445,  705 => 444,  700 => 443,  697 => 442,  694 => 441,  676 => 440,  665 => 439,  649 => 434,  642 => 432,  637 => 431,  634 => 430,  620 => 429,  588 => 399,  567 => 396,  549 => 395,  546 => 394,  543 => 393,  535 => 391,  529 => 389,  272 => 105,  191 => 84,  185 => 60,  228 => 73,  206 => 87,  203 => 68,  188 => 67,  184 => 66,  180 => 64,  176 => 63,  159 => 58,  133 => 45,  127 => 51,  114 => 39,  76 => 23,  101 => 33,  75 => 23,  18 => 1,  96 => 41,  276 => 248,  262 => 236,  259 => 235,  239 => 219,  236 => 218,  66 => 23,  53 => 13,  125 => 40,  120 => 41,  70 => 21,  144 => 40,  141 => 47,  110 => 49,  94 => 31,  51 => 14,  21 => 3,  331 => 100,  325 => 96,  322 => 95,  318 => 94,  315 => 93,  310 => 90,  304 => 125,  301 => 85,  297 => 84,  294 => 83,  289 => 80,  275 => 79,  271 => 77,  256 => 97,  246 => 89,  243 => 88,  237 => 70,  232 => 82,  224 => 71,  214 => 62,  200 => 64,  197 => 60,  190 => 58,  169 => 56,  154 => 50,  136 => 46,  132 => 47,  129 => 46,  121 => 42,  80 => 24,  59 => 22,  74 => 23,  139 => 45,  124 => 45,  109 => 35,  84 => 27,  81 => 23,  73 => 22,  69 => 24,  62 => 11,  41 => 7,  34 => 16,  95 => 30,  90 => 29,  87 => 29,  83 => 28,  26 => 3,  45 => 9,  22 => 4,  48 => 10,  25 => 3,  248 => 96,  238 => 90,  234 => 88,  227 => 93,  223 => 78,  218 => 63,  216 => 79,  213 => 90,  210 => 70,  207 => 67,  198 => 70,  192 => 67,  177 => 61,  171 => 79,  164 => 55,  160 => 53,  155 => 57,  153 => 72,  149 => 47,  143 => 46,  137 => 45,  126 => 43,  116 => 28,  107 => 36,  82 => 26,  67 => 20,  112 => 37,  102 => 35,  63 => 18,  56 => 23,  38 => 6,  32 => 5,  23 => 3,  17 => 1,  92 => 35,  86 => 39,  77 => 24,  29 => 4,  24 => 11,  19 => 1,  61 => 16,  58 => 15,  46 => 11,  44 => 19,  37 => 17,  20 => 2,  182 => 82,  174 => 80,  170 => 49,  167 => 56,  163 => 54,  157 => 52,  146 => 47,  135 => 41,  123 => 43,  118 => 41,  115 => 37,  113 => 50,  108 => 20,  105 => 35,  99 => 31,  88 => 41,  85 => 29,  78 => 25,  65 => 16,  55 => 10,  52 => 16,  49 => 37,  42 => 8,  40 => 8,  36 => 5,  33 => 5,  30 => 5,  27 => 3,  201 => 72,  195 => 69,  187 => 62,  181 => 63,  178 => 57,  172 => 57,  168 => 78,  165 => 62,  156 => 73,  151 => 45,  148 => 71,  145 => 61,  142 => 69,  134 => 31,  131 => 30,  128 => 59,  122 => 30,  119 => 29,  111 => 41,  106 => 34,  103 => 47,  100 => 27,  97 => 36,  93 => 40,  89 => 31,  79 => 33,  68 => 25,  64 => 23,  60 => 16,  57 => 14,  54 => 13,  50 => 12,  47 => 11,  43 => 10,  39 => 8,  35 => 5,  31 => 4,  28 => 3,);
    }
}

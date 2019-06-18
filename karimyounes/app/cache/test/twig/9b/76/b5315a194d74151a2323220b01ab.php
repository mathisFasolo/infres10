<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_9b76b5315a194d74151a2323220b01ab extends Twig_Template
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
    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        // line 7
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/routing.png"), "html", null, true);
        echo "\" alt=\"Routing\" /></span>
    <strong>Routing</strong>
</span>
";
    }

    // line 13
    public function block_panel($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
        echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Router:panel", array("token" => $_token_), array());
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 69,  196 => 62,  193 => 61,  173 => 59,  158 => 58,  152 => 56,  838 => 466,  835 => 465,  822 => 463,  817 => 462,  813 => 460,  800 => 459,  773 => 454,  770 => 453,  748 => 451,  730 => 450,  725 => 448,  720 => 447,  715 => 446,  710 => 445,  705 => 444,  700 => 443,  697 => 442,  694 => 441,  676 => 440,  665 => 439,  649 => 434,  642 => 432,  637 => 431,  634 => 430,  620 => 429,  588 => 399,  567 => 396,  549 => 395,  546 => 394,  543 => 393,  535 => 391,  529 => 389,  272 => 136,  191 => 84,  185 => 60,  228 => 73,  206 => 87,  203 => 68,  188 => 67,  184 => 66,  180 => 64,  176 => 63,  159 => 58,  133 => 52,  127 => 51,  114 => 42,  76 => 21,  101 => 33,  75 => 23,  18 => 1,  96 => 41,  276 => 248,  262 => 236,  259 => 235,  239 => 219,  236 => 218,  66 => 23,  53 => 22,  125 => 40,  120 => 44,  70 => 19,  144 => 40,  141 => 47,  110 => 49,  94 => 28,  51 => 14,  21 => 3,  331 => 100,  325 => 96,  322 => 95,  318 => 94,  315 => 93,  310 => 90,  304 => 86,  301 => 85,  297 => 84,  294 => 83,  289 => 80,  275 => 79,  271 => 77,  256 => 234,  246 => 73,  243 => 72,  237 => 70,  232 => 69,  224 => 71,  214 => 62,  200 => 64,  197 => 60,  190 => 58,  169 => 56,  154 => 50,  136 => 53,  132 => 47,  129 => 46,  121 => 42,  80 => 24,  59 => 22,  74 => 24,  139 => 45,  124 => 45,  109 => 35,  84 => 24,  81 => 23,  73 => 20,  69 => 24,  62 => 11,  41 => 7,  34 => 16,  95 => 30,  90 => 39,  87 => 25,  83 => 23,  26 => 3,  45 => 13,  22 => 4,  48 => 7,  25 => 3,  248 => 96,  238 => 90,  234 => 88,  227 => 93,  223 => 83,  218 => 63,  216 => 79,  213 => 90,  210 => 70,  207 => 67,  198 => 86,  192 => 67,  177 => 61,  171 => 79,  164 => 55,  160 => 51,  155 => 57,  153 => 72,  149 => 47,  143 => 46,  137 => 45,  126 => 43,  116 => 28,  107 => 39,  82 => 26,  67 => 28,  112 => 37,  102 => 32,  63 => 18,  56 => 23,  38 => 6,  32 => 8,  23 => 3,  17 => 1,  92 => 35,  86 => 39,  77 => 27,  29 => 4,  24 => 11,  19 => 1,  61 => 15,  58 => 15,  46 => 14,  44 => 19,  37 => 17,  20 => 2,  182 => 82,  174 => 80,  170 => 49,  167 => 48,  163 => 75,  157 => 45,  146 => 47,  135 => 41,  123 => 24,  118 => 41,  115 => 37,  113 => 50,  108 => 20,  105 => 35,  99 => 31,  88 => 41,  85 => 29,  78 => 25,  65 => 16,  55 => 10,  52 => 16,  49 => 37,  42 => 11,  40 => 8,  36 => 7,  33 => 6,  30 => 5,  27 => 3,  201 => 72,  195 => 85,  187 => 62,  181 => 63,  178 => 57,  172 => 57,  168 => 78,  165 => 62,  156 => 73,  151 => 45,  148 => 71,  145 => 61,  142 => 69,  134 => 31,  131 => 30,  128 => 59,  122 => 30,  119 => 29,  111 => 41,  106 => 34,  103 => 47,  100 => 27,  97 => 36,  93 => 40,  89 => 31,  79 => 33,  68 => 25,  64 => 23,  60 => 25,  57 => 16,  54 => 12,  50 => 14,  47 => 13,  43 => 8,  39 => 8,  35 => 5,  31 => 4,  28 => 3,);
    }
}

<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_43e234ad24c348fe56b5886f9140cb40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configure.css"), "html", null, true);
        echo "\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/x-icon\" sizes=\"16x16\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sensiodistribution/webconfigurator/images/favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div id=\"symfony-wrapper\">
            <div id=\"symfony-header\">
                <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sensiodistribution/webconfigurator/images/logo-small.gif"), "html", null, true);
        echo "\" alt=\"Symfony logo\" />
            </div>
            <div id=\"symfony-content\">
                ";
        // line 15
        $this->displayBlock('content', $context, $blocks);
        // line 16
        echo "            </div>
            <div class=\"version\">Symfony Standard Edition v.";
        // line 17
        if (isset($context["version"])) { $_version_ = $context["version"]; } else { $_version_ = null; }
        echo twig_escape_filter($this->env, $_version_, "html", null, true);
        echo "</div>
        </div>
    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Web Configurator Bundle";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 24,  433 => 160,  430 => 159,  424 => 158,  421 => 157,  412 => 156,  407 => 155,  403 => 153,  400 => 152,  397 => 151,  394 => 150,  391 => 149,  381 => 147,  378 => 146,  375 => 145,  369 => 141,  366 => 140,  359 => 138,  348 => 131,  345 => 130,  341 => 129,  338 => 128,  333 => 125,  327 => 121,  324 => 120,  317 => 118,  309 => 114,  292 => 105,  285 => 103,  281 => 101,  278 => 100,  273 => 97,  270 => 96,  265 => 93,  252 => 87,  249 => 86,  244 => 83,  231 => 77,  202 => 63,  189 => 57,  186 => 56,  179 => 53,  72 => 17,  390 => 163,  379 => 160,  374 => 159,  371 => 158,  365 => 157,  362 => 139,  354 => 135,  351 => 149,  344 => 145,  336 => 141,  328 => 137,  320 => 119,  312 => 115,  296 => 107,  280 => 109,  264 => 101,  235 => 78,  229 => 81,  220 => 77,  215 => 74,  208 => 72,  183 => 64,  175 => 60,  147 => 49,  130 => 44,  117 => 40,  217 => 69,  196 => 59,  193 => 58,  173 => 59,  158 => 58,  152 => 56,  838 => 466,  835 => 465,  822 => 463,  817 => 462,  813 => 460,  800 => 459,  773 => 454,  770 => 453,  748 => 451,  730 => 450,  725 => 448,  720 => 447,  715 => 446,  710 => 445,  705 => 444,  700 => 443,  697 => 442,  694 => 441,  676 => 440,  665 => 439,  649 => 434,  642 => 432,  637 => 431,  634 => 430,  620 => 429,  588 => 399,  567 => 396,  549 => 395,  546 => 394,  543 => 393,  535 => 391,  529 => 389,  272 => 105,  191 => 84,  185 => 60,  228 => 76,  206 => 87,  203 => 68,  188 => 67,  184 => 66,  180 => 64,  176 => 63,  159 => 43,  133 => 45,  127 => 51,  114 => 25,  76 => 23,  101 => 33,  75 => 15,  18 => 1,  96 => 41,  276 => 248,  262 => 236,  259 => 89,  239 => 219,  236 => 218,  66 => 23,  53 => 13,  125 => 40,  120 => 41,  70 => 21,  144 => 40,  141 => 47,  110 => 49,  94 => 31,  51 => 12,  21 => 3,  331 => 100,  325 => 96,  322 => 95,  318 => 94,  315 => 93,  310 => 90,  304 => 111,  301 => 110,  297 => 84,  294 => 83,  289 => 80,  275 => 79,  271 => 77,  256 => 88,  246 => 89,  243 => 88,  237 => 70,  232 => 82,  224 => 71,  214 => 68,  200 => 64,  197 => 60,  190 => 58,  169 => 56,  154 => 50,  136 => 46,  132 => 47,  129 => 31,  121 => 42,  80 => 24,  59 => 22,  74 => 23,  139 => 45,  124 => 45,  109 => 35,  84 => 21,  81 => 23,  73 => 22,  69 => 24,  62 => 6,  41 => 12,  34 => 5,  95 => 30,  90 => 29,  87 => 29,  83 => 17,  26 => 3,  45 => 8,  22 => 4,  48 => 8,  25 => 5,  248 => 96,  238 => 79,  234 => 88,  227 => 93,  223 => 73,  218 => 63,  216 => 79,  213 => 90,  210 => 67,  207 => 66,  198 => 70,  192 => 67,  177 => 61,  171 => 48,  164 => 55,  160 => 53,  155 => 57,  153 => 72,  149 => 47,  143 => 46,  137 => 35,  126 => 43,  116 => 28,  107 => 36,  82 => 26,  67 => 16,  112 => 37,  102 => 21,  63 => 18,  56 => 13,  38 => 6,  32 => 5,  23 => 3,  17 => 1,  92 => 35,  86 => 18,  77 => 24,  29 => 6,  24 => 11,  19 => 1,  61 => 16,  58 => 9,  46 => 11,  44 => 19,  37 => 17,  20 => 2,  182 => 54,  174 => 80,  170 => 49,  167 => 56,  163 => 54,  157 => 52,  146 => 47,  135 => 41,  123 => 43,  118 => 27,  115 => 37,  113 => 50,  108 => 23,  105 => 35,  99 => 31,  88 => 41,  85 => 29,  78 => 25,  65 => 12,  55 => 10,  52 => 17,  49 => 16,  42 => 7,  40 => 7,  36 => 6,  33 => 7,  30 => 5,  27 => 3,  201 => 72,  195 => 69,  187 => 62,  181 => 63,  178 => 57,  172 => 57,  168 => 47,  165 => 46,  156 => 42,  151 => 45,  148 => 71,  145 => 39,  142 => 69,  134 => 31,  131 => 30,  128 => 59,  122 => 30,  119 => 29,  111 => 24,  106 => 34,  103 => 47,  100 => 27,  97 => 20,  93 => 40,  89 => 19,  79 => 20,  68 => 15,  64 => 23,  60 => 16,  57 => 14,  54 => 13,  50 => 12,  47 => 15,  43 => 10,  39 => 8,  35 => 5,  31 => 4,  28 => 3,);
    }
}

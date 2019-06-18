<?php

/* AcmeDemoBundle:Demo:index.html.twig */
class __TwigTemplate_a5a696ce68d0d07a5f0540088dca69f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Demos";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <h1>Available demos</h1>
    <ul id=\"demo-list\">
        <li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_hello", array("name" => "World")), "html", null, true);
        echo "\">Hello World</a></li>
        <li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_secured_hello", array("name" => "World")), "html", null, true);
        echo "\">Access the secured area</a> <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_login"), "html", null, true);
        echo "\">Go to the login page</a></li>
        ";
        // line 13
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 40,  141 => 39,  110 => 5,  94 => 44,  51 => 11,  21 => 1,  331 => 100,  325 => 96,  322 => 95,  318 => 94,  315 => 93,  310 => 90,  304 => 86,  301 => 85,  297 => 84,  294 => 83,  289 => 80,  275 => 79,  271 => 77,  256 => 75,  246 => 73,  243 => 72,  237 => 70,  232 => 69,  224 => 66,  214 => 62,  200 => 61,  197 => 60,  190 => 58,  169 => 56,  154 => 50,  136 => 49,  132 => 47,  129 => 46,  121 => 42,  80 => 28,  59 => 22,  74 => 19,  139 => 45,  124 => 33,  109 => 34,  84 => 25,  81 => 24,  73 => 20,  69 => 19,  62 => 10,  41 => 7,  34 => 5,  95 => 18,  90 => 28,  87 => 16,  83 => 23,  26 => 3,  45 => 12,  22 => 4,  48 => 7,  25 => 2,  248 => 96,  238 => 90,  234 => 88,  227 => 84,  223 => 83,  218 => 63,  216 => 79,  213 => 78,  210 => 77,  207 => 76,  198 => 71,  192 => 67,  177 => 61,  171 => 59,  164 => 55,  160 => 51,  155 => 51,  153 => 50,  149 => 47,  143 => 46,  137 => 45,  126 => 43,  116 => 28,  107 => 31,  82 => 37,  67 => 24,  112 => 37,  102 => 34,  63 => 23,  56 => 12,  38 => 6,  32 => 11,  23 => 3,  17 => 1,  92 => 43,  86 => 39,  77 => 27,  29 => 4,  24 => 6,  19 => 1,  61 => 13,  58 => 8,  46 => 7,  44 => 12,  37 => 7,  20 => 2,  182 => 32,  174 => 60,  170 => 49,  167 => 48,  163 => 52,  157 => 45,  146 => 47,  135 => 41,  123 => 24,  118 => 41,  115 => 37,  113 => 35,  108 => 20,  105 => 32,  99 => 33,  88 => 41,  85 => 28,  78 => 23,  65 => 19,  55 => 10,  52 => 9,  49 => 13,  42 => 11,  40 => 7,  36 => 6,  33 => 7,  30 => 4,  27 => 5,  201 => 72,  195 => 66,  187 => 62,  181 => 63,  178 => 57,  172 => 57,  168 => 54,  165 => 53,  156 => 51,  151 => 45,  148 => 44,  145 => 43,  142 => 42,  134 => 31,  131 => 30,  128 => 35,  122 => 30,  119 => 29,  111 => 21,  106 => 33,  103 => 47,  100 => 27,  97 => 45,  93 => 24,  89 => 16,  79 => 12,  68 => 14,  64 => 23,  60 => 22,  57 => 13,  54 => 12,  50 => 10,  47 => 10,  43 => 8,  39 => 9,  35 => 7,  31 => 6,  28 => 3,);
    }
}

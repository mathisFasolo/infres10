<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_acb4c7baf189341821732c949172cd46 extends Twig_Template
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
        if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
        echo twig_jsonencode_filter($this->getAttribute($_exception_, "toarray"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  95 => 18,  90 => 17,  87 => 16,  83 => 14,  26 => 4,  45 => 7,  22 => 4,  48 => 7,  25 => 2,  248 => 96,  238 => 90,  234 => 88,  227 => 84,  223 => 83,  218 => 80,  216 => 79,  213 => 78,  210 => 77,  207 => 76,  198 => 71,  192 => 67,  177 => 61,  171 => 59,  164 => 55,  160 => 54,  155 => 51,  153 => 50,  149 => 48,  143 => 46,  137 => 45,  126 => 43,  116 => 22,  107 => 31,  82 => 27,  67 => 9,  112 => 34,  102 => 19,  63 => 23,  56 => 12,  38 => 7,  32 => 11,  23 => 3,  17 => 1,  92 => 39,  86 => 6,  77 => 26,  29 => 6,  24 => 6,  19 => 1,  61 => 13,  58 => 8,  46 => 14,  44 => 7,  37 => 7,  20 => 2,  182 => 32,  174 => 60,  170 => 49,  167 => 48,  163 => 46,  157 => 45,  146 => 47,  135 => 41,  123 => 24,  118 => 38,  115 => 37,  113 => 36,  108 => 20,  105 => 32,  99 => 29,  88 => 25,  85 => 28,  78 => 15,  65 => 19,  55 => 9,  52 => 6,  49 => 14,  42 => 9,  40 => 12,  36 => 5,  33 => 7,  30 => 4,  27 => 3,  201 => 72,  195 => 66,  187 => 62,  181 => 63,  178 => 57,  172 => 56,  168 => 54,  165 => 53,  156 => 48,  151 => 45,  148 => 44,  145 => 43,  142 => 42,  134 => 37,  131 => 44,  128 => 35,  122 => 32,  119 => 31,  111 => 21,  106 => 29,  103 => 19,  100 => 27,  97 => 26,  93 => 24,  89 => 16,  79 => 12,  68 => 14,  64 => 13,  60 => 22,  57 => 8,  54 => 10,  50 => 6,  47 => 5,  43 => 6,  39 => 8,  35 => 4,  31 => 5,  28 => 4,);
    }
}

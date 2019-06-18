<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_56295e17aea0448d2c22e16ecb04f920 extends Twig_Template
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
        echo "/*
";
        // line 2
        if (isset($context["status_code"])) { $_status_code_ = $context["status_code"]; } else { $_status_code_ = null; }
        echo twig_escape_filter($this->env, $_status_code_, "html", null, true);
        echo " ";
        if (isset($context["status_text"])) { $_status_text_ = $context["status_text"]; } else { $_status_text_ = null; }
        echo twig_escape_filter($this->env, $_status_text_, "html", null, true);
        echo "

*/
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 20,  102 => 19,  63 => 14,  56 => 12,  38 => 7,  32 => 5,  23 => 5,  17 => 1,  92 => 39,  86 => 6,  77 => 39,  29 => 6,  24 => 4,  19 => 1,  61 => 13,  58 => 8,  46 => 14,  44 => 9,  37 => 8,  20 => 2,  182 => 32,  174 => 50,  170 => 49,  167 => 48,  163 => 46,  157 => 45,  146 => 42,  135 => 41,  123 => 39,  118 => 38,  115 => 37,  113 => 36,  108 => 33,  105 => 32,  99 => 29,  88 => 25,  85 => 24,  78 => 15,  65 => 19,  55 => 16,  52 => 6,  49 => 14,  42 => 9,  40 => 12,  36 => 6,  33 => 7,  30 => 4,  27 => 6,  201 => 70,  195 => 66,  187 => 62,  181 => 58,  178 => 57,  172 => 56,  168 => 54,  165 => 53,  156 => 48,  151 => 45,  148 => 44,  145 => 43,  142 => 42,  134 => 37,  131 => 40,  128 => 35,  122 => 32,  119 => 31,  111 => 30,  106 => 29,  103 => 31,  100 => 27,  97 => 26,  93 => 24,  89 => 16,  79 => 40,  68 => 14,  64 => 13,  60 => 18,  57 => 22,  54 => 10,  50 => 11,  47 => 10,  43 => 7,  39 => 6,  35 => 8,  31 => 9,  28 => 3,);
    }
}

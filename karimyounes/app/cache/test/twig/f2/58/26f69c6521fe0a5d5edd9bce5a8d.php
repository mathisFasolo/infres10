<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_f25826f69c6521fe0a5d5edd9bce5a8d extends Twig_Template
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
        if (isset($context["status_code"])) { $_status_code_ = $context["status_code"]; } else { $_status_code_ = null; }
        if (isset($context["status_text"])) { $_status_text_ = $context["status_text"]; } else { $_status_text_ = null; }
        echo twig_jsonencode_filter(array("error" => array("code" => $_status_code_, "message" => $_status_text_)));
        echo "
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  17 => 1,  92 => 39,  86 => 6,  77 => 39,  29 => 6,  24 => 4,  19 => 1,  61 => 9,  58 => 8,  46 => 14,  44 => 14,  37 => 8,  20 => 1,  182 => 32,  174 => 50,  170 => 49,  167 => 48,  163 => 46,  157 => 45,  146 => 42,  135 => 41,  123 => 39,  118 => 38,  115 => 37,  113 => 36,  108 => 33,  105 => 32,  99 => 29,  88 => 25,  85 => 24,  78 => 22,  65 => 19,  55 => 16,  52 => 6,  49 => 14,  42 => 9,  40 => 12,  36 => 6,  33 => 7,  30 => 4,  27 => 6,  201 => 70,  195 => 66,  187 => 62,  181 => 58,  178 => 57,  172 => 56,  168 => 54,  165 => 53,  156 => 48,  151 => 45,  148 => 44,  145 => 43,  142 => 42,  134 => 37,  131 => 40,  128 => 35,  122 => 32,  119 => 31,  111 => 30,  106 => 29,  103 => 31,  100 => 27,  97 => 26,  93 => 24,  89 => 22,  79 => 40,  68 => 14,  64 => 13,  60 => 18,  57 => 22,  54 => 10,  50 => 9,  47 => 8,  43 => 7,  39 => 6,  35 => 8,  31 => 7,  28 => 3,);
    }
}

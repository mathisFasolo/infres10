<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_533cfa097c5f1808d96d7da6f996056d extends Twig_Template
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
        echo "        <traces>
";
        // line 2
        if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_exception_, "trace"));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            if (isset($context["trace"])) { $_trace_ = $context["trace"]; } else { $_trace_ = null; }
            $this->env->loadTemplate("TwigBundle:Exception:trace.txt.twig")->display(array("trace" => $_trace_));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 8
        echo "        </traces>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 6,  22 => 4,  48 => 7,  25 => 3,  248 => 96,  238 => 90,  234 => 88,  227 => 84,  223 => 83,  218 => 80,  216 => 79,  213 => 78,  210 => 77,  207 => 76,  198 => 71,  192 => 67,  177 => 61,  171 => 59,  164 => 55,  160 => 54,  155 => 51,  153 => 50,  149 => 48,  143 => 46,  137 => 45,  126 => 43,  116 => 36,  107 => 31,  82 => 27,  67 => 24,  112 => 34,  102 => 19,  63 => 23,  56 => 12,  38 => 7,  32 => 11,  23 => 3,  17 => 1,  92 => 39,  86 => 6,  77 => 26,  29 => 6,  24 => 6,  19 => 1,  61 => 13,  58 => 8,  46 => 14,  44 => 7,  37 => 8,  20 => 2,  182 => 32,  174 => 60,  170 => 49,  167 => 48,  163 => 46,  157 => 45,  146 => 47,  135 => 41,  123 => 39,  118 => 38,  115 => 37,  113 => 36,  108 => 33,  105 => 32,  99 => 29,  88 => 25,  85 => 28,  78 => 15,  65 => 19,  55 => 9,  52 => 6,  49 => 14,  42 => 9,  40 => 12,  36 => 5,  33 => 7,  30 => 4,  27 => 3,  201 => 72,  195 => 66,  187 => 62,  181 => 63,  178 => 57,  172 => 56,  168 => 54,  165 => 53,  156 => 48,  151 => 45,  148 => 44,  145 => 43,  142 => 42,  134 => 37,  131 => 44,  128 => 35,  122 => 32,  119 => 31,  111 => 30,  106 => 29,  103 => 31,  100 => 27,  97 => 26,  93 => 24,  89 => 16,  79 => 40,  68 => 14,  64 => 13,  60 => 22,  57 => 22,  54 => 10,  50 => 11,  47 => 8,  43 => 7,  39 => 8,  35 => 4,  31 => 5,  28 => 4,);
    }
}

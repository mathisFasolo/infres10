<?php

/* DoctrineBundle:Collector:explain.html.twig */
class __TwigTemplate_e4267f782e135104467e20c4c8332623 extends Twig_Template
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
        echo "<small><strong>Explanation</strong>:</small>

<table style=\"margin: 5px 0;\">
    <thead>
        <tr>
            ";
        // line 6
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute($_data_, 0, array(), "array")));
        foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
            // line 7
            echo "                <th>";
            if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
            echo twig_escape_filter($this->env, $_label_, "html", null, true);
            echo "</th>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 9
        echo "        </tr>
    </thead>
    <tbody>
        ";
        // line 12
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_data_);
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 13
            echo "        <tr>
            ";
            // line 14
            if (isset($context["row"])) { $_row_ = $context["row"]; } else { $_row_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_row_);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 15
                echo "                <td>";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $_item_, "html", null, true);
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 17
            echo "        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 19
        echo "    </tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "DoctrineBundle:Collector:explain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 19,  139 => 45,  124 => 42,  109 => 36,  84 => 25,  81 => 24,  73 => 20,  69 => 19,  62 => 16,  41 => 7,  34 => 6,  95 => 18,  90 => 28,  87 => 16,  83 => 14,  26 => 4,  45 => 7,  22 => 4,  48 => 7,  25 => 2,  248 => 96,  238 => 90,  234 => 88,  227 => 84,  223 => 83,  218 => 80,  216 => 79,  213 => 78,  210 => 77,  207 => 76,  198 => 71,  192 => 67,  177 => 61,  171 => 59,  164 => 55,  160 => 53,  155 => 51,  153 => 50,  149 => 47,  143 => 46,  137 => 45,  126 => 43,  116 => 22,  107 => 31,  82 => 27,  67 => 17,  112 => 37,  102 => 34,  63 => 23,  56 => 12,  38 => 6,  32 => 11,  23 => 3,  17 => 1,  92 => 39,  86 => 6,  77 => 26,  29 => 7,  24 => 6,  19 => 1,  61 => 13,  58 => 8,  46 => 14,  44 => 12,  37 => 7,  20 => 2,  182 => 32,  174 => 60,  170 => 49,  167 => 48,  163 => 46,  157 => 45,  146 => 47,  135 => 41,  123 => 24,  118 => 41,  115 => 37,  113 => 36,  108 => 20,  105 => 32,  99 => 33,  88 => 25,  85 => 28,  78 => 23,  65 => 19,  55 => 9,  52 => 14,  49 => 13,  42 => 9,  40 => 12,  36 => 5,  33 => 7,  30 => 4,  27 => 3,  201 => 72,  195 => 66,  187 => 62,  181 => 63,  178 => 57,  172 => 58,  168 => 54,  165 => 53,  156 => 51,  151 => 45,  148 => 44,  145 => 43,  142 => 42,  134 => 44,  131 => 44,  128 => 35,  122 => 32,  119 => 31,  111 => 21,  106 => 29,  103 => 19,  100 => 27,  97 => 26,  93 => 24,  89 => 16,  79 => 12,  68 => 14,  64 => 13,  60 => 22,  57 => 15,  54 => 12,  50 => 10,  47 => 9,  43 => 6,  39 => 9,  35 => 5,  31 => 4,  28 => 3,);
    }
}

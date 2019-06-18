<?php

/* SensioDistributionBundle:Configurator:check.html.twig */
class __TwigTemplate_8cd514b22aa996a8d37dccc0e1ddb03a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (isset($context["majors"])) { $_majors_ = $context["majors"]; } else { $_majors_ = null; }
        if (twig_length_filter($this->env, $_majors_)) {
            // line 5
            echo "        <h1>Major Problems that need to be fixed now</h1>
        <p>
            We have detected <strong>";
            // line 7
            if (isset($context["majors"])) { $_majors_ = $context["majors"]; } else { $_majors_ = null; }
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $_majors_), "html", null, true);
            echo "</strong> major problems.
            You <em>must</em> fix them before continuing:
        </p>
        <ol>
            ";
            // line 11
            if (isset($context["majors"])) { $_majors_ = $context["majors"]; } else { $_majors_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_majors_);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "                <li>";
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                echo twig_escape_filter($this->env, $_message_, "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 14
            echo "        </ol>
    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if (isset($context["minors"])) { $_minors_ = $context["minors"]; } else { $_minors_ = null; }
        if (twig_length_filter($this->env, $_minors_)) {
            // line 18
            echo "        <h1>Some Recommandations</h1>

        <p>
            ";
            // line 21
            if (isset($context["majors"])) { $_majors_ = $context["majors"]; } else { $_majors_ = null; }
            if (twig_length_filter($this->env, $_majors_)) {
                // line 22
                echo "            Additionally, we
            ";
            } else {
                // line 24
                echo "            We
            ";
            }
            // line 26
            echo "            have detected some minor problems that we <em>recommend</em> you to fix to have a better Symfony
            experience:

            <ol>
                ";
            // line 30
            if (isset($context["minors"])) { $_minors_ = $context["minors"]; } else { $_minors_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_minors_);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 31
                echo "                    <li>";
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                echo twig_escape_filter($this->env, $_message_, "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 33
            echo "            </ol>
        </p>

    ";
        }
        // line 37
        echo "
    ";
        // line 38
        if (isset($context["majors"])) { $_majors_ = $context["majors"]; } else { $_majors_ = null; }
        if ((!twig_length_filter($this->env, $_majors_))) {
            // line 39
            echo "        <ul class=\"symfony_list\">
            <li><a href=\"";
            // line 40
            if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
            echo twig_escape_filter($this->env, $_url_, "html", null, true);
            echo "\">Configure your Symfony Application online</a></li>
        </ul>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  91 => 24,  433 => 160,  430 => 159,  424 => 158,  421 => 157,  412 => 156,  407 => 155,  403 => 153,  400 => 152,  397 => 151,  394 => 150,  391 => 149,  381 => 147,  378 => 146,  375 => 145,  369 => 141,  366 => 140,  359 => 138,  348 => 131,  345 => 130,  341 => 129,  338 => 128,  333 => 125,  327 => 121,  324 => 120,  317 => 118,  309 => 114,  292 => 105,  285 => 103,  281 => 101,  278 => 100,  273 => 97,  270 => 96,  265 => 93,  252 => 87,  249 => 86,  244 => 83,  231 => 77,  202 => 63,  189 => 57,  186 => 56,  179 => 53,  72 => 17,  390 => 163,  379 => 160,  374 => 159,  371 => 158,  365 => 157,  362 => 139,  354 => 135,  351 => 149,  344 => 145,  336 => 141,  328 => 137,  320 => 119,  312 => 115,  296 => 107,  280 => 109,  264 => 101,  235 => 78,  229 => 81,  220 => 77,  215 => 74,  208 => 72,  183 => 64,  175 => 60,  147 => 49,  130 => 44,  117 => 40,  217 => 69,  196 => 59,  193 => 58,  173 => 59,  158 => 58,  152 => 56,  838 => 466,  835 => 465,  822 => 463,  817 => 462,  813 => 460,  800 => 459,  773 => 454,  770 => 453,  748 => 451,  730 => 450,  725 => 448,  720 => 447,  715 => 446,  710 => 445,  705 => 444,  700 => 443,  697 => 442,  694 => 441,  676 => 440,  665 => 439,  649 => 434,  642 => 432,  637 => 431,  634 => 430,  620 => 429,  588 => 399,  567 => 396,  549 => 395,  546 => 394,  543 => 393,  535 => 391,  529 => 389,  272 => 105,  191 => 84,  185 => 60,  228 => 76,  206 => 87,  203 => 68,  188 => 67,  184 => 66,  180 => 64,  176 => 63,  159 => 43,  133 => 45,  127 => 51,  114 => 25,  76 => 21,  101 => 33,  75 => 21,  18 => 1,  96 => 41,  276 => 248,  262 => 236,  259 => 89,  239 => 219,  236 => 218,  66 => 23,  53 => 13,  125 => 40,  120 => 41,  70 => 18,  144 => 40,  141 => 47,  110 => 49,  94 => 31,  51 => 12,  21 => 3,  331 => 100,  325 => 96,  322 => 95,  318 => 94,  315 => 93,  310 => 90,  304 => 111,  301 => 110,  297 => 84,  294 => 83,  289 => 80,  275 => 79,  271 => 77,  256 => 88,  246 => 89,  243 => 88,  237 => 70,  232 => 82,  224 => 71,  214 => 68,  200 => 64,  197 => 60,  190 => 58,  169 => 56,  154 => 50,  136 => 46,  132 => 47,  129 => 31,  121 => 42,  80 => 24,  59 => 22,  74 => 23,  139 => 45,  124 => 45,  109 => 35,  84 => 25,  81 => 23,  73 => 22,  69 => 24,  62 => 15,  41 => 12,  34 => 5,  95 => 30,  90 => 29,  87 => 29,  83 => 17,  26 => 3,  45 => 11,  22 => 4,  48 => 8,  25 => 5,  248 => 96,  238 => 79,  234 => 88,  227 => 93,  223 => 73,  218 => 63,  216 => 79,  213 => 90,  210 => 67,  207 => 66,  198 => 70,  192 => 67,  177 => 61,  171 => 48,  164 => 55,  160 => 53,  155 => 57,  153 => 72,  149 => 47,  143 => 46,  137 => 35,  126 => 43,  116 => 38,  107 => 33,  82 => 24,  67 => 17,  112 => 37,  102 => 21,  63 => 18,  56 => 13,  38 => 6,  32 => 5,  23 => 3,  17 => 1,  92 => 30,  86 => 26,  77 => 24,  29 => 4,  24 => 11,  19 => 1,  61 => 16,  58 => 9,  46 => 9,  44 => 19,  37 => 7,  20 => 2,  182 => 54,  174 => 80,  170 => 49,  167 => 56,  163 => 54,  157 => 52,  146 => 47,  135 => 41,  123 => 43,  118 => 27,  115 => 37,  113 => 37,  108 => 23,  105 => 35,  99 => 31,  88 => 25,  85 => 24,  78 => 22,  65 => 12,  55 => 10,  52 => 17,  49 => 16,  42 => 7,  40 => 7,  36 => 5,  33 => 5,  30 => 5,  27 => 3,  201 => 72,  195 => 69,  187 => 62,  181 => 63,  178 => 57,  172 => 57,  168 => 47,  165 => 46,  156 => 42,  151 => 45,  148 => 71,  145 => 39,  142 => 69,  134 => 31,  131 => 30,  128 => 59,  122 => 40,  119 => 39,  111 => 24,  106 => 34,  103 => 47,  100 => 27,  97 => 31,  93 => 40,  89 => 19,  79 => 20,  68 => 17,  64 => 16,  60 => 14,  57 => 14,  54 => 13,  50 => 12,  47 => 15,  43 => 10,  39 => 6,  35 => 5,  31 => 4,  28 => 3,);
    }
}

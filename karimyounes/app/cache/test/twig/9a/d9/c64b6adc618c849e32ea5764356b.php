<?php

/* WebProfilerBundle:Profiler:base.html.twig */
class __TwigTemplate_9ad9c64b6adc618c849e32ea5764356b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/x-icon\" sizes=\"16x16\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/favicon.ico"), "html", null, true);
        echo "\" />
        ";
        // line 8
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "        ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_style.html.twig")->display(array_merge($context, array("position" => "top", "floatable" => false)));
        // line 12
        echo "    </head>
    <body>
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Profiler";
    }

    // line 8
    public function block_head($context, array $blocks = array())
    {
        // line 9
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/css/profiler.css"), "html", null, true);
        echo "\" />
        ";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        echo "";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 9,  58 => 8,  46 => 15,  44 => 14,  37 => 11,  20 => 1,  182 => 32,  174 => 50,  170 => 49,  167 => 48,  163 => 46,  157 => 45,  146 => 42,  135 => 41,  123 => 39,  118 => 38,  115 => 37,  113 => 36,  108 => 33,  105 => 32,  99 => 29,  88 => 25,  85 => 24,  78 => 22,  65 => 19,  55 => 16,  52 => 6,  49 => 14,  42 => 9,  40 => 12,  36 => 6,  33 => 5,  30 => 4,  27 => 6,  201 => 70,  195 => 66,  187 => 62,  181 => 58,  178 => 57,  172 => 56,  168 => 54,  165 => 53,  156 => 48,  151 => 45,  148 => 44,  145 => 43,  142 => 42,  134 => 37,  131 => 40,  128 => 35,  122 => 32,  119 => 31,  111 => 30,  106 => 29,  103 => 31,  100 => 27,  97 => 26,  93 => 24,  89 => 22,  79 => 19,  68 => 14,  64 => 13,  60 => 18,  57 => 11,  54 => 10,  50 => 9,  47 => 8,  43 => 7,  39 => 6,  35 => 8,  31 => 7,  28 => 3,);
    }
}

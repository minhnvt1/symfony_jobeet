<?php

/* AcmeDemoBundle:Demo:hello.html.twig */
class __TwigTemplate_bcb1e092ebff930269d1008714d7c9b38787cdf8e6dc5377fbe7d4d6ee52e93f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 28,  110 => 22,  84 => 29,  76 => 17,  104 => 20,  77 => 13,  53 => 10,  197 => 14,  194 => 13,  184 => 10,  153 => 77,  114 => 58,  23 => 1,  126 => 62,  113 => 34,  90 => 32,  81 => 14,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 55,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 70,  179 => 6,  159 => 61,  143 => 69,  135 => 65,  119 => 60,  102 => 17,  71 => 15,  67 => 10,  63 => 15,  59 => 6,  28 => 3,  201 => 69,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 79,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 19,  105 => 18,  91 => 50,  62 => 12,  49 => 14,  87 => 17,  93 => 28,  88 => 31,  78 => 26,  46 => 7,  44 => 11,  25 => 5,  21 => 2,  94 => 34,  89 => 20,  85 => 25,  75 => 16,  68 => 14,  56 => 11,  27 => 4,  31 => 3,  38 => 6,  26 => 9,  24 => 2,  19 => 1,  79 => 18,  72 => 11,  69 => 11,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 71,  139 => 67,  131 => 52,  123 => 61,  120 => 20,  115 => 43,  111 => 57,  108 => 19,  101 => 27,  98 => 52,  96 => 31,  83 => 20,  74 => 14,  66 => 13,  55 => 15,  52 => 10,  50 => 9,  43 => 7,  41 => 5,  35 => 5,  32 => 3,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 11,  182 => 66,  176 => 5,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 59,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 51,  92 => 21,  86 => 48,  82 => 28,  80 => 19,  73 => 16,  64 => 13,  60 => 6,  57 => 12,  54 => 22,  51 => 14,  48 => 9,  45 => 7,  42 => 10,  39 => 9,  36 => 4,  33 => 3,  30 => 2,);
    }
}

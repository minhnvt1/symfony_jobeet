<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_79f70819e5e87b7c5fbfbd0995f4202596c1b118074d5d989aff9d1565c5f379 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Redirection Intercepted";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 36,  65 => 22,  97 => 41,  58 => 17,  127 => 60,  110 => 22,  84 => 29,  76 => 28,  104 => 37,  77 => 25,  53 => 17,  197 => 14,  194 => 13,  184 => 10,  153 => 77,  114 => 58,  23 => 1,  126 => 62,  113 => 40,  90 => 32,  81 => 14,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 55,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 70,  179 => 6,  159 => 61,  143 => 69,  135 => 62,  119 => 60,  102 => 17,  71 => 15,  67 => 10,  63 => 19,  59 => 13,  28 => 6,  201 => 69,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 79,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 19,  105 => 18,  91 => 34,  62 => 21,  49 => 13,  87 => 33,  93 => 28,  88 => 31,  78 => 26,  46 => 13,  44 => 11,  25 => 35,  21 => 2,  94 => 34,  89 => 20,  85 => 32,  75 => 16,  68 => 14,  56 => 16,  27 => 4,  31 => 3,  38 => 6,  26 => 9,  24 => 2,  19 => 1,  79 => 18,  72 => 11,  69 => 11,  47 => 15,  40 => 11,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 71,  139 => 63,  131 => 61,  123 => 59,  120 => 20,  115 => 43,  111 => 57,  108 => 19,  101 => 43,  98 => 52,  96 => 35,  83 => 20,  74 => 27,  66 => 13,  55 => 15,  52 => 14,  50 => 16,  43 => 11,  41 => 10,  35 => 5,  32 => 3,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 11,  182 => 66,  176 => 5,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 59,  112 => 42,  109 => 34,  106 => 45,  103 => 32,  99 => 31,  95 => 51,  92 => 21,  86 => 48,  82 => 28,  80 => 30,  73 => 23,  64 => 13,  60 => 20,  57 => 19,  54 => 22,  51 => 14,  48 => 9,  45 => 14,  42 => 8,  39 => 10,  36 => 9,  33 => 4,  30 => 7,);
    }
}

<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_248e6ef46900cec0ec6079f459f1fb16af0e76a044806f16bbb1bf0f15885c9f extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo "

*/
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 20,  66 => 15,  55 => 13,  35 => 7,  98 => 40,  93 => 9,  88 => 6,  78 => 40,  46 => 11,  44 => 10,  32 => 9,  43 => 8,  40 => 8,  25 => 5,  21 => 2,  101 => 24,  94 => 22,  89 => 20,  85 => 19,  79 => 18,  75 => 17,  72 => 16,  68 => 14,  56 => 9,  50 => 8,  41 => 9,  27 => 4,  31 => 5,  29 => 4,  22 => 2,  38 => 13,  26 => 3,  24 => 3,  19 => 1,  209 => 82,  203 => 78,  199 => 76,  193 => 73,  189 => 71,  187 => 70,  182 => 68,  176 => 64,  173 => 63,  168 => 62,  164 => 60,  162 => 59,  154 => 54,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 42,  130 => 41,  125 => 38,  122 => 37,  116 => 36,  112 => 35,  109 => 34,  106 => 33,  103 => 32,  99 => 30,  95 => 28,  92 => 21,  86 => 24,  82 => 22,  80 => 19,  73 => 19,  64 => 12,  60 => 13,  57 => 14,  54 => 11,  51 => 12,  48 => 9,  45 => 8,  42 => 6,  39 => 6,  36 => 7,  33 => 6,  30 => 3,);
    }
}

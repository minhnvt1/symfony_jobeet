<?php

/* TwigBundle:Exception:trace.txt.twig */
class __TwigTemplate_81195d85c35ca0c31878f5f6568a8bd4cef61fe3d212de0df0bbb7dbabd11105 extends Twig_Template
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
        if ($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function")) {
            // line 2
            echo "    at ";
            echo (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "class") . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "type")) . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function"));
            echo "(";
            echo $this->env->getExtension('code')->formatArgsAsText($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "args"));
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array(), "any", true, true) && $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            echo $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "file");
            echo " line ";
            echo $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line");
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 14,  38 => 13,  26 => 5,  87 => 20,  55 => 13,  25 => 3,  21 => 2,  94 => 22,  92 => 21,  89 => 20,  85 => 19,  79 => 18,  75 => 17,  72 => 16,  68 => 14,  56 => 9,  41 => 9,  24 => 4,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  171 => 73,  168 => 72,  163 => 70,  158 => 67,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  112 => 42,  101 => 24,  69 => 25,  66 => 15,  62 => 23,  51 => 15,  49 => 19,  39 => 6,  19 => 1,  98 => 40,  93 => 9,  80 => 19,  78 => 40,  44 => 10,  36 => 7,  27 => 4,  22 => 2,  57 => 16,  33 => 6,  30 => 3,  176 => 62,  173 => 74,  169 => 14,  166 => 71,  159 => 11,  156 => 66,  151 => 63,  148 => 5,  130 => 71,  125 => 69,  117 => 44,  115 => 43,  111 => 59,  105 => 40,  102 => 55,  100 => 54,  97 => 53,  91 => 31,  88 => 6,  86 => 28,  64 => 12,  54 => 21,  50 => 8,  40 => 8,  35 => 7,  31 => 5,  23 => 1,  46 => 7,  43 => 8,  37 => 13,  32 => 12,  29 => 4,);
    }
}

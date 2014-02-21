<?php

/* EnsJobeetBundle:Job:show.html.twig */
class __TwigTemplate_17c27b35782a85e512415329f874276de4fc14b6db0ce62a5d9072f9fd7f8b6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EnsJobeetBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EnsJobeetBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "company"), "html", null, true);
        echo " is looking for a ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "position"), "html", null, true);
        echo "
";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/css/job.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "token"), "method")) {
            // line 12
            echo "        ";
            $this->env->loadTemplate("EnsJobeetBundle:Job:admin.html.twig")->display(array_merge($context, array("job" => (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")))));
            // line 13
            echo "    ";
        }
        // line 14
        echo "    <div id=\"job\">
        <h1>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "company"), "html", null, true);
        echo "</h1>
        <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "location"), "html", null, true);
        echo "</h2>
        <h3>
            ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "position"), "html", null, true);
        echo "
            <small> - ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type"), "html", null, true);
        echo "</small>
        </h3>

        ";
        // line 22
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "logo")) {
            // line 23
            echo "            <div class=\"logo\">
                <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "url"), "html", null, true);
            echo "\">
                    <img src=\"/uploads/jobs/";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "logo"), "html", null, true);
            echo "\"
                         alt=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "company"), "html", null, true);
            echo " logo\" />
                </a>
            </div>
        ";
        }
        // line 30
        echo "
        <div class=\"description\">
            ";
        // line 32
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description"), "html", null, true));
        echo "
        </div>

        <h4>How to apply?</h4>

        <p class=\"how_to_apply\">";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "howtoapply"), "html", null, true);
        echo "</p>

        <div class=\"meta\">
            <small>posted on ";
        // line 40
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "createdat"), "m/d/Y"), "html", null, true);
        echo "</small>
        </div>

        <div style=\"padding: 20px 0\">
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_edit", array("token" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "token"))), "html", null, true);
        echo "\">
                Edit
            </a>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Job:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 44,  128 => 40,  122 => 37,  114 => 32,  110 => 30,  103 => 26,  99 => 25,  95 => 24,  92 => 23,  90 => 22,  84 => 19,  80 => 18,  75 => 16,  71 => 15,  68 => 14,  65 => 13,  62 => 12,  59 => 11,  56 => 10,  50 => 8,  45 => 7,  42 => 6,  33 => 3,  30 => 2,);
    }
}

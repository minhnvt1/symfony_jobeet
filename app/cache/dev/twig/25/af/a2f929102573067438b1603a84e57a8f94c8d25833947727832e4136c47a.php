<?php

/* EnsJobeetBundle:Job:admin.html.twig */
class __TwigTemplate_25afa2f929102573067438b1603a84e57a8f94c8d25833947727832e4136c47a extends Twig_Template
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
        echo "<div id=\"job_actions\">
    <h3>Admin</h3>
    <ul>
        ";
        // line 4
        if ((!$this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "isActivated"))) {
            // line 5
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_edit", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "token"))), "html", null, true);
            echo "\">Edit</a></li>
            <li>
                <form action=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_publish", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "token"))), "html", null, true);
            echo "\" method=\"post\">
                    ";
            // line 8
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["publish_form"]) ? $context["publish_form"] : $this->getContext($context, "publish_form")), 'widget');
            echo "
                    <button type=\"submit\">Publish</button>
                </form>
            </li>
        ";
        }
        // line 13
        echo "        <li>
            <form action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_delete", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "token"))), "html", null, true);
        echo "\" method=\"post\">
                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
                <button type=\"submit\" onclick=\"if(!confirm('Are you sure?')) { return false; }\">Delete</button>
            </form>
        </li>
        ";
        // line 19
        if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "isActivated")) {
            // line 20
            echo "            <li ";
            if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "expiresSoon")) {
                echo " class=\"expires_soon\" ";
            }
            echo ">
                ";
            // line 21
            if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "isExpired")) {
                // line 22
                echo "                    Expired
                ";
            } else {
                // line 24
                echo "                    Expires in <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "getDaysBeforeExpires"), "html", null, true);
                echo "</strong> days
                ";
            }
            // line 26
            echo "
                ";
            // line 27
            if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "expiresSoon")) {
                // line 28
                echo "                    - <a href=\"\">Extend</a> for another 30 days
                ";
            }
            // line 30
            echo "            </li>
        ";
        } else {
            // line 32
            echo "            <li>
                [Bookmark this <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ens_job_preview", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "token"), "company" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "companyslug"), "location" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "locationslug"), "position" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "positionslug"))), "html", null, true);
            echo "\">URL</a> to manage this job in the future.]
            </li>
        ";
        }
        // line 36
        echo "    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Job:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 36,  95 => 33,  92 => 32,  88 => 30,  84 => 28,  82 => 27,  79 => 26,  73 => 24,  69 => 22,  67 => 21,  60 => 20,  58 => 19,  51 => 15,  47 => 14,  44 => 13,  36 => 8,  32 => 7,  26 => 5,  24 => 4,  19 => 1,);
    }
}

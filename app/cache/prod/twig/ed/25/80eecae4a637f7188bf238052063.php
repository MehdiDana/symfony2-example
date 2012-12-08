<?php

/* Carloan4uStoreBundle:Dealership:new.html.twig */
class __TwigTemplate_ed2580eecae4a637f7188bf238052063 extends Twig_Template
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
        echo "<h1>Dealership creation</h1>

<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dealership_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype((isset($context["form"]) ? $context["form"] : null));
        echo ">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderWidget((isset($context["form"]) ? $context["form"] : null));
        echo "
    <p>
        <button type=\"submit\">Create</button>
    </p>
</form>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dealership"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "Carloan4uStoreBundle:Dealership:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  27 => 4,  21 => 3,  17 => 1,);
    }
}

<?php

/* Carloan4uStoreBundle:Dealership:show.html.twig */
class __TwigTemplate_f27ad5800cf2ef27c4b23717419e3eb3 extends Twig_Template
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
        echo "<h1>Dealership</h1>

<table class=\"record_properties\">
    <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "name"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Address</th>
            <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "address"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Opening_hours</th>
            <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "openinghours"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Number_of_car</th>
            <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "numberofcar"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Image</th>
            <th><img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "image"), "html", null, true);
        echo "\" width=\"200px\" /></th>
        </tr>
        <tr>
            <th>Approved</th>
            <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "approved"), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>
Average: ";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["average"]) ? $context["average"] : null), "html", null, true);
        echo "
<br>
";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entity_reviews"]) ? $context["entity_reviews"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity_review"]) {
            // line 38
            echo "reviews: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity_review"]) ? $context["entity_review"] : null), "name"), "html", null, true);
            echo " gives ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity_review"]) ? $context["entity_review"] : null), "rate"), "html", null, true);
            echo "
    <br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity_review'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 41
        echo "
<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dealership"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dealership_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dealership_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 55
        echo $this->env->getExtension('form')->renderWidget((isset($context["delete_form"]) ? $context["delete_form"] : null));
        echo "
            <button type=\"submit\">Delete</button>
        </form>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "Carloan4uStoreBundle:Dealership:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 55,  116 => 54,  108 => 49,  100 => 44,  95 => 41,  83 => 38,  79 => 37,  74 => 35,  67 => 31,  60 => 27,  53 => 23,  46 => 19,  39 => 15,  32 => 11,  25 => 7,  17 => 1,);
    }
}

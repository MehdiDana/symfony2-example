<?php

/* Carloan4uStoreBundle:Dealership:index.html.twig */
class __TwigTemplate_c818ae4a48ce07af019d225338c2cbca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Dealership";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<h1>Dealership list</h1>

<table class=\"records_list\">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Address</th>
            <th>Opening_hours</th>
            <th>Number_of_car</th>
            <th>Image</th>
            <th>Approved</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 24
            echo "        <tr>
            <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dealership_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "</a></td>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "name"), "html", null, true);
            echo "</td>
            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "address"), "html", null, true);
            echo "</td>
            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "openinghours"), "html", null, true);
            echo "</td>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "numberofcar"), "html", null, true);
            echo "</td>
            <td><img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "image"), "html", null, true);
            echo "\" width=\"200px\" /></td>
            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "approved"), "html", null, true);
            echo "</td>
            <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dealership_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dealership_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 44
        echo "    </tbody>
</table>

<ul>
    <li>
        <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dealership_new"), "html", null, true);
        echo "\">
            Create a new entry
        </a>
    </li>
</ul>

<h1>Review list</h1>

<table class=\"records_list\">
    <thead>
    <tr>
        <th>Id</th>
        <th>Dealership</th>
        <th>Rate</th>
        <th>Name</th>
        <th>Email</th>
        <th>Review_title</th>
        <th>Review_description</th>
        <th>Approved</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 72
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities_review"]) ? $context["entities_review"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entitiy_review"]) {
            // line 73
            echo "        <tr>
            <td><a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("review_show", array("id" => $this->getAttribute((isset($context["entitiy_review"]) ? $context["entitiy_review"] : null), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entitiy_review"]) ? $context["entitiy_review"] : null), "id"), "html", null, true);
            echo "</a></td>
            <th>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entitiy_review"]) ? $context["entitiy_review"] : null), "dealership"), "name"), "html", null, true);
            echo "</th>
            <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entitiy_review"]) ? $context["entitiy_review"] : null), "rate"), "html", null, true);
            echo "</td>
            <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entitiy_review"]) ? $context["entitiy_review"] : null), "name"), "html", null, true);
            echo "</td>
            <td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entitiy_review"]) ? $context["entitiy_review"] : null), "email"), "html", null, true);
            echo "</td>
            <td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entitiy_review"]) ? $context["entitiy_review"] : null), "reviewtitle"), "html", null, true);
            echo "</td>
            <td>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entitiy_review"]) ? $context["entitiy_review"] : null), "reviewdescription"), "html", null, true);
            echo "</td>
            <td>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entitiy_review"]) ? $context["entitiy_review"] : null), "approved"), "html", null, true);
            echo "</td>
            <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("review_show", array("id" => $this->getAttribute((isset($context["entitiy_review"]) ? $context["entitiy_review"] : null), "id"))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("review_edit", array("id" => $this->getAttribute((isset($context["entitiy_review"]) ? $context["entitiy_review"] : null), "id"))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entitiy_review'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 94
        echo "    </tbody>
</table>

<ul>
    <li>
        <a href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("review_new"), "html", null, true);
        echo "\">
            Create a new entry
        </a>
    </li>
</ul>

";
    }

    public function getTemplateName()
    {
        return "Carloan4uStoreBundle:Dealership:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 99,  208 => 94,  196 => 88,  190 => 85,  183 => 81,  179 => 80,  175 => 79,  171 => 78,  167 => 77,  163 => 76,  159 => 75,  153 => 74,  150 => 73,  146 => 72,  120 => 49,  113 => 44,  101 => 38,  95 => 35,  88 => 31,  84 => 30,  80 => 29,  76 => 28,  72 => 27,  68 => 26,  62 => 25,  59 => 24,  55 => 23,  36 => 6,  33 => 5,  27 => 3,);
    }
}

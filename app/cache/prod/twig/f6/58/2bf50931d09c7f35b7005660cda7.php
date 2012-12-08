<?php

/* ::base.html.twig */
class __TwigTemplate_f6582bf50931d09c7f35b7005660cda7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 11,  57 => 6,  51 => 5,  45 => 12,  42 => 11,  40 => 10,  31 => 6,  21 => 1,  215 => 99,  208 => 94,  196 => 88,  190 => 85,  183 => 81,  179 => 80,  175 => 79,  171 => 78,  167 => 77,  163 => 76,  159 => 75,  153 => 74,  150 => 73,  146 => 72,  120 => 49,  113 => 44,  101 => 38,  95 => 35,  88 => 31,  84 => 30,  80 => 29,  76 => 28,  72 => 27,  68 => 26,  62 => 10,  59 => 24,  55 => 23,  36 => 6,  33 => 7,  27 => 5,);
    }
}

<?php

/* articles.twig */
class __TwigTemplate_fd79b7869d88310f489957b4edd368c1cbed0129f9b22cb9908f15a8b15646c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "articles.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<ul class=\"breadcrumb hidden-xs ul_breadcrumb\">
  <li><a href=\"/\">Home</a></li>
  <li class=\"active\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), "html", null, true);
        echo "</li>
</ul>

";
        // line 10
        $this->loadTemplate("partials/list_articles.twig", "articles.twig", 10)->display($context);
        // line 11
        echo "
";
        // line 12
        $this->loadTemplate("partials/paginator.twig", "articles.twig", 12)->display($context);
        // line 13
        echo "
";
    }

    public function getTemplateName()
    {
        return "articles.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 13,  47 => 12,  44 => 11,  42 => 10,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.twig' %}

{% block content %}

<ul class=\"breadcrumb hidden-xs ul_breadcrumb\">
  <li><a href=\"/\">Home</a></li>
  <li class=\"active\">{{ page.title }}</li>
</ul>

{% include 'partials/list_articles.twig' %}

{% include 'partials/paginator.twig' %}

{% endblock %}", "articles.twig", "C:\\www\\figshare_orda\\app\\src\\View\\articles.twig");
    }
}

<?php

/* categories_articles.twig */
class __TwigTemplate_d65781682c8c42985c0781e0344bf1b6eebc7bc3c6914639524bd90d27ce318f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "categories_articles.twig", 1);
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
  <li><a href=\"/categories/\">Categories</a></li>
  <li class=\"active\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), "html", null, true);
        echo "</li>
  <li class=\"active\">Articles</li>
</ul>

";
        // line 12
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "back", array())) {
            // line 13
            echo "    <p><a class=\"btn btn-primary btn-sm\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "back", array()), "html", null, true);
            echo "\" role=\"button\">Back to the list of Categories</a></p>
";
        }
        // line 15
        echo "
<div class=\"row\">
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collections", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["collection"]) {
            // line 18
            echo "        <div class=\"col-xs-12 list-group-item\">
            <div style=\"margin-bottom: 5px; margin-right: 5px\">                    
                <h2><a href='/conferences/articles/";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "id", array()));
            echo "'> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "title", array()));
            echo "</a></h2>
                <h6><b>Published on:</b> ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "published_date", array()));
            echo "</h6>
                <h6><b>Authors: </b> ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "authors", array()), "html", null, true);
            echo " </h6>
                <h6><b>Categories: </b> ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "categories", array()), "html", null, true);
            echo " </h6>
                <h6><b>Tags: </b> ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "tags", array()), "html", null, true);
            echo " </h6>
                <article>
                ";
            // line 27
            echo "                    ";
            echo $this->getAttribute($context["collection"], "description", array());
            echo "
                ";
            // line 28
            echo "   
                </article> 
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collection'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "</div>

";
        // line 35
        $this->loadTemplate("partials/list_articles.twig", "categories_articles.twig", 35)->display($context);
        // line 36
        echo "
";
        // line 37
        $this->loadTemplate("partials/paginator.twig", "categories_articles.twig", 37)->display($context);
        // line 38
        echo "
";
    }

    public function getTemplateName()
    {
        return "categories_articles.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 38,  111 => 37,  108 => 36,  106 => 35,  102 => 33,  92 => 28,  87 => 27,  82 => 24,  78 => 23,  74 => 22,  70 => 21,  64 => 20,  60 => 18,  56 => 17,  52 => 15,  46 => 13,  44 => 12,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
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
  <li><a href=\"/categories/\">Categories</a></li>
  <li class=\"active\">{{ page.title }}</li>
  <li class=\"active\">Articles</li>
</ul>

{% if page.back %}
    <p><a class=\"btn btn-primary btn-sm\" href=\"{{ page.back }}\" role=\"button\">Back to the list of Categories</a></p>
{% endif %}

<div class=\"row\">
    {% for collection in page.collections %}
        <div class=\"col-xs-12 list-group-item\">
            <div style=\"margin-bottom: 5px; margin-right: 5px\">                    
                <h2><a href='/conferences/articles/{{ collection.id|e }}'> {{ collection.title|e }}</a></h2>
                <h6><b>Published on:</b> {{ collection.published_date|e }}</h6>
                <h6><b>Authors: </b> {{ collection.authors }} </h6>
                <h6><b>Categories: </b> {{ collection.categories }} </h6>
                <h6><b>Tags: </b> {{ collection.tags }} </h6>
                <article>
                {% autoescape %}
                    {{ collection.description|raw }}
                {% endautoescape %}   
                </article> 
            </div>
        </div>
    {% endfor %}
</div>

{% include 'partials/list_articles.twig' %}

{% include 'partials/paginator.twig' %}

{% endblock %}", "categories_articles.twig", "C:\\www\\figshare_orda\\app\\src\\View\\categories_articles.twig");
    }
}

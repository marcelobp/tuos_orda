<?php

/* institutes.twig */
class __TwigTemplate_6c8cc57e3c6d5fff7552beec7973958e106ccebaeef01151fd8aec47e357e064 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("layout.twig", "institutes.twig", 3);
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
        // line 1
        $context["strategy"] = "html";
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<ul class=\"breadcrumb hidden-xs ul_breadcrumb\">
    <li><a href=\"/\">Home</a></li>
    ";
        // line 9
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "institutes_by_id", array())) {
            // line 10
            echo "        <li><a href=\"/institutes/\">Institutes</a></li>
    ";
        }
        // line 12
        echo "    <li class=\"active\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), "html", null, true);
        echo "</li>
</ul>

<div class=\"row\">
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collections", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["collection"]) {
            // line 17
            echo "        <div class=\"col-xs-12 list-group-item\" style=\"margin-bottom: 5px;\">
            <div style=\"margin-bottom: 5px; margin-right: 5px\">                    
                <h2><a href='/institutes/articles/";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "id", array()));
            echo "'> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "title", array()));
            echo "</a></h2>
                <h6><b>Published on:</b> ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "published_date", array()));
            echo "</h6>
                <h6><b>Authors: </b> ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "authors", array()), "html", null, true);
            echo " </h6>
                <h6><b>Categories: </b> ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "categories", array()), "html", null, true);
            echo " </h6>
                <h6><b>Tags: </b> ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "tags", array()), "html", null, true);
            echo " </h6>
                
                <p><a class=\"btn btn-warning btn-sm\" href=\"/institutes/articles/";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "id", array()));
            echo "\" role=\"button\">Browse all ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "articles_count", array()));
            echo " items from this institute</a></p>
                
                <article>
                ";
            // line 29
            echo "                    ";
            echo $this->getAttribute($context["collection"], "description", array());
            echo "
                ";
            // line 30
            echo "   
                </article> 
            </div>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "         <em>no institutes found</em>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collection'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "</div>
";
        // line 38
        $this->loadTemplate("partials/paginator.twig", "institutes.twig", 38)->display($context);
        // line 39
        echo "
";
    }

    public function getTemplateName()
    {
        return "institutes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 39,  117 => 38,  114 => 37,  107 => 35,  98 => 30,  93 => 29,  85 => 25,  80 => 23,  76 => 22,  72 => 21,  68 => 20,  62 => 19,  58 => 17,  53 => 16,  45 => 12,  41 => 10,  39 => 9,  34 => 6,  31 => 5,  27 => 3,  25 => 1,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set strategy = 'html' %}

{% extends 'layout.twig' %}

{% block content %}

<ul class=\"breadcrumb hidden-xs ul_breadcrumb\">
    <li><a href=\"/\">Home</a></li>
    {% if page.institutes_by_id %}
        <li><a href=\"/institutes/\">Institutes</a></li>
    {% endif %}
    <li class=\"active\">{{ page.title }}</li>
</ul>

<div class=\"row\">
    {% for collection in page.collections %}
        <div class=\"col-xs-12 list-group-item\" style=\"margin-bottom: 5px;\">
            <div style=\"margin-bottom: 5px; margin-right: 5px\">                    
                <h2><a href='/institutes/articles/{{ collection.id|e }}'> {{ collection.title|e }}</a></h2>
                <h6><b>Published on:</b> {{ collection.published_date|e }}</h6>
                <h6><b>Authors: </b> {{ collection.authors }} </h6>
                <h6><b>Categories: </b> {{ collection.categories }} </h6>
                <h6><b>Tags: </b> {{ collection.tags }} </h6>
                
                <p><a class=\"btn btn-warning btn-sm\" href=\"/institutes/articles/{{ collection.id|e }}\" role=\"button\">Browse all {{ collection.articles_count|e }} items from this institute</a></p>
                
                <article>
                {% autoescape %}
                    {{ collection.description|raw }}
                {% endautoescape %}   
                </article> 
            </div>
        </div>
    {% else %}
         <em>no institutes found</em>
    {% endfor %}
</div>
{% include 'partials/paginator.twig' %}

{% endblock %}", "institutes.twig", "C:\\www\\figshare_orda\\app\\src\\View\\institutes.twig");
    }
}

<?php

/* conference_articles.twig */
class __TwigTemplate_244e1d9fb6fbda26c13938bd0fb3e59bf709229e995b397de53916fc11288d38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "conference_articles.twig", 1);
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
  <li><a href=\"/conferences/\">Conferences</a></li>
  <li class=\"active\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), "html", null, true);
        echo "</li>
  <li class=\"active\">Articles</li>
</ul>

<div class=\"row\">
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collections", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["collection"]) {
            // line 14
            echo "        <div class=\"col-xs-12 list-group-item\">
            <div style=\"margin-bottom: 5px; margin-right: 5px\">                    
                <h2><a href='/conferences/articles/";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "id", array()));
            echo "'> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "title", array()));
            echo "</a></h2>
                <h6><b>Published on:</b> ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "published_date", array()));
            echo "</h6>
                <h6><b>Authors: </b> ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "authors", array()), "html", null, true);
            echo " </h6>
                <h6><b>DOI: </b> ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "doi", array()), "html", null, true);
            echo " <a href=\"#\" data-toggle=\"modal\" data-target=\"#citationModal\" id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "doi", array()), "html", null, true);
            echo " style=\" color:inherit; text-decoration: none;\"><span class=\"glyphicon glyphicon-copy fa-lg\" title=\"Generate Citations\" alt=\"Generate Citations\"></span></a> </h6>
                <h6><b>Categories: </b> ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "categories", array()), "html", null, true);
            echo " </h6>
                <h6><b>Tags: </b> ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "tags", array()), "html", null, true);
            echo " </h6>
                <article>
                ";
            // line 24
            echo "                    ";
            echo $this->getAttribute($context["collection"], "description", array());
            echo "
                ";
            // line 25
            echo "   
                </article> 
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collection'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</div>

";
        // line 32
        $this->loadTemplate("partials/list_articles.twig", "conference_articles.twig", 32)->display($context);
        // line 33
        echo "
";
        // line 34
        $this->loadTemplate("partials/paginator.twig", "conference_articles.twig", 34)->display($context);
        // line 35
        echo "
";
        // line 36
        $this->loadTemplate("partials/citation.twig", "conference_articles.twig", 36)->display($context);
        // line 37
        echo "
";
    }

    public function getTemplateName()
    {
        return "conference_articles.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 37,  111 => 36,  108 => 35,  106 => 34,  103 => 33,  101 => 32,  97 => 30,  87 => 25,  82 => 24,  77 => 21,  73 => 20,  67 => 19,  63 => 18,  59 => 17,  53 => 16,  49 => 14,  45 => 13,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
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
  <li><a href=\"/conferences/\">Conferences</a></li>
  <li class=\"active\">{{ page.title }}</li>
  <li class=\"active\">Articles</li>
</ul>

<div class=\"row\">
    {% for collection in page.collections %}
        <div class=\"col-xs-12 list-group-item\">
            <div style=\"margin-bottom: 5px; margin-right: 5px\">                    
                <h2><a href='/conferences/articles/{{ collection.id|e }}'> {{ collection.title|e }}</a></h2>
                <h6><b>Published on:</b> {{ collection.published_date|e }}</h6>
                <h6><b>Authors: </b> {{ collection.authors }} </h6>
                <h6><b>DOI: </b> {{ collection.doi }} <a href=\"#\" data-toggle=\"modal\" data-target=\"#citationModal\" id={{ collection.doi }} style=\" color:inherit; text-decoration: none;\"><span class=\"glyphicon glyphicon-copy fa-lg\" title=\"Generate Citations\" alt=\"Generate Citations\"></span></a> </h6>
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

{% include 'partials/citation.twig' %}

{% endblock %}", "conference_articles.twig", "C:\\www\\figshare_orda\\app\\src\\View\\conference_articles.twig");
    }
}

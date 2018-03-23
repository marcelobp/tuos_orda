<?php

/* conferences.twig */
class __TwigTemplate_faf34d19b5ddd8107a350a0cab63f36a888e6e68daf53c479c9d2ad694f03c8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("layout.twig", "conferences.twig", 3);
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
    <li class=\"active\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), "html", null, true);
        echo "</li>
</ul>

<div class=\"row\">
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collections", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["collection"]) {
            // line 14
            echo "        <div class=\"col-xs-12 list-group-item\" style=\"margin-bottom: 10px;\">
            <div>                    
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
                
                <p><a class=\"btn btn-warning btn-sm\" href=\"/conferences/articles/";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "id", array()));
            echo "\" role=\"button\">Browse all ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "articles_count", array()));
            echo " items from this conference</a></p>
                
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
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "         <em>no conferences found</em>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collection'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "</div>
";
        // line 38
        $this->loadTemplate("partials/paginator.twig", "conferences.twig", 38)->display($context);
        // line 39
        echo "
";
        // line 40
        $this->loadTemplate("partials/citation.twig", "conferences.twig", 40)->display($context);
        // line 41
        echo "
";
    }

    public function getTemplateName()
    {
        return "conferences.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 41,  123 => 40,  120 => 39,  118 => 38,  115 => 37,  108 => 35,  97 => 28,  92 => 27,  84 => 23,  79 => 21,  75 => 20,  69 => 19,  65 => 18,  61 => 17,  55 => 16,  51 => 14,  46 => 13,  39 => 9,  34 => 6,  31 => 5,  27 => 3,  25 => 1,  11 => 3,);
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
    <li class=\"active\">{{ page.title }}</li>
</ul>

<div class=\"row\">
    {% for collection in page.collections %}
        <div class=\"col-xs-12 list-group-item\" style=\"margin-bottom: 10px;\">
            <div>                    
                <h2><a href='/conferences/articles/{{ collection.id|e }}'> {{ collection.title|e }}</a></h2>
                <h6><b>Published on:</b> {{ collection.published_date|e }}</h6>
                <h6><b>Authors: </b> {{ collection.authors }} </h6>
                <h6><b>DOI: </b> {{ collection.doi }} <a href=\"#\" data-toggle=\"modal\" data-target=\"#citationModal\" id={{ collection.doi }} style=\" color:inherit; text-decoration: none;\"><span class=\"glyphicon glyphicon-copy fa-lg\" title=\"Generate Citations\" alt=\"Generate Citations\"></span></a> </h6>  
                <h6><b>Categories: </b> {{ collection.categories }} </h6>
                <h6><b>Tags: </b> {{ collection.tags }} </h6>
                
                <p><a class=\"btn btn-warning btn-sm\" href=\"/conferences/articles/{{ collection.id|e }}\" role=\"button\">Browse all {{ collection.articles_count|e }} items from this conference</a></p>
                
                <article>
                {% autoescape %}
                    {{ collection.description|raw }}
                {% endautoescape %}   
                </article> 
            </div>
            
        </div>
        
    {% else %}
         <em>no conferences found</em>
    {% endfor %}
</div>
{% include 'partials/paginator.twig' %}

{% include 'partials/citation.twig' %}

{% endblock %}", "conferences.twig", "C:\\www\\figshare_orda\\app\\src\\View\\conferences.twig");
    }
}

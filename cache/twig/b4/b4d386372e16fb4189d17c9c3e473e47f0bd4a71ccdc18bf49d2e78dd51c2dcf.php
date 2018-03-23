<?php

/* institutes_articles.twig */
class __TwigTemplate_12aa1f37e3f2b60d227b7095c72da9e47a46cec5c087666ae94920d20fe47cd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "institutes_articles.twig", 1);
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
  <li><a href=\"/institutes/\">Institutes</a></li>
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
                <h2><a href='/institutes/articles/";
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
                <h6><b>Categories: </b> ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "categories", array()), "html", null, true);
            echo " </h6>
                <h6><b>Tags: </b> ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "tags", array()), "html", null, true);
            echo " </h6>
                <article>
                ";
            // line 23
            echo "                    ";
            echo $this->getAttribute($context["collection"], "description", array());
            echo "
                ";
            // line 24
            echo "   
                </article> 
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collection'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "</div>

";
        // line 31
        $this->loadTemplate("partials/list_articles.twig", "institutes_articles.twig", 31)->display($context);
        // line 32
        echo "
";
        // line 33
        $this->loadTemplate("partials/paginator.twig", "institutes_articles.twig", 33)->display($context);
        // line 34
        echo "
";
    }

    public function getTemplateName()
    {
        return "institutes_articles.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 34,  100 => 33,  97 => 32,  95 => 31,  91 => 29,  81 => 24,  76 => 23,  71 => 20,  67 => 19,  63 => 18,  59 => 17,  53 => 16,  49 => 14,  45 => 13,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
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
  <li><a href=\"/institutes/\">Institutes</a></li>
  <li class=\"active\">{{ page.title }}</li>
  <li class=\"active\">Articles</li>
</ul>

<div class=\"row\">
    {% for collection in page.collections %}
        <div class=\"col-xs-12 list-group-item\">
            <div style=\"margin-bottom: 5px; margin-right: 5px\">                    
                <h2><a href='/institutes/articles/{{ collection.id|e }}'> {{ collection.title|e }}</a></h2>
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

{% endblock %}", "institutes_articles.twig", "C:\\www\\figshare_orda\\app\\src\\View\\institutes_articles.twig");
    }
}

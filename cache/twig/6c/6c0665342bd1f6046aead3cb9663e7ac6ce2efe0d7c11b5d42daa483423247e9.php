<?php

/* categories.twig */
class __TwigTemplate_a61a75c8d19ef689f8438092a3fdaa5f66db6bc7b8f23f115a5036e7262ba3ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "categories.twig", 1);
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
        echo "<script type=\"text/javascript\">
\$(document).ready(function(){
    // Defining the local dataset
    var categories = [";
        // line 7
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "categories_title", array());
        echo "];
    
    // Constructing the suggestion engine
    var categories = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.whitespace,
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        local: categories
    });
    
    // Initializing the typeahead
    \$('.typeahead').typeahead({
        hint: true,
        highlight: true, /* Enable substring highlighting */
        minLength: 3 /* Specify minimum characters required for showing result */
    },
    {
        name: 'categories',
        source: categories
    });
});  
</script>

<ul class=\"breadcrumb hidden-xs ul_breadcrumb\">
  <li><a href=\"/\">Home</a></li>
  <li class=\"active\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), "html", null, true);
        echo "</li>
</ul>

<div class=\"row\">
    <div class=\"col-sm-12\">
        <h2 style=\"margin-left:5px; float: left;\">List of Categories</h2>
        <!-- 
        <div class=\"pull-right\" style=\"margin-top:5px\">
            <input type=\"text\" class=\"typeahead tt-query\" autocomplete=\"off\" spellcheck=\"false\" placeholder=\"Type to Quick Filter...\">
            <button type=\"submit\" class=\"btn btn-default btn-sm pull-right\" ><span class=\"glyphicon glyphicon-search btn-sm\"></span></button>
        </div>
         -->
    </div>
    <div class=\"col-sm-12\">
        <div id=\"treeview\" class=\"\"></div>
    </div>
</div>

";
        // line 49
        $this->loadTemplate("partials/paginator.twig", "categories.twig", 49)->display($context);
        // line 50
        echo "
<script type=\"text/javascript\">
    \$(function() {
        var defaultData =  ";
        // line 53
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "categories", array());
        echo " ;

        \$('#treeview').treeview({
          color: \"#428bca\",
          enableLinks: true,
          data: defaultData
        });
    });
</script>
    
";
    }

    public function getTemplateName()
    {
        return "categories.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 53,  86 => 50,  84 => 49,  63 => 31,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
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
<script type=\"text/javascript\">
\$(document).ready(function(){
    // Defining the local dataset
    var categories = [{{page.categories_title|raw}}];
    
    // Constructing the suggestion engine
    var categories = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.whitespace,
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        local: categories
    });
    
    // Initializing the typeahead
    \$('.typeahead').typeahead({
        hint: true,
        highlight: true, /* Enable substring highlighting */
        minLength: 3 /* Specify minimum characters required for showing result */
    },
    {
        name: 'categories',
        source: categories
    });
});  
</script>

<ul class=\"breadcrumb hidden-xs ul_breadcrumb\">
  <li><a href=\"/\">Home</a></li>
  <li class=\"active\">{{ page.title }}</li>
</ul>

<div class=\"row\">
    <div class=\"col-sm-12\">
        <h2 style=\"margin-left:5px; float: left;\">List of Categories</h2>
        <!-- 
        <div class=\"pull-right\" style=\"margin-top:5px\">
            <input type=\"text\" class=\"typeahead tt-query\" autocomplete=\"off\" spellcheck=\"false\" placeholder=\"Type to Quick Filter...\">
            <button type=\"submit\" class=\"btn btn-default btn-sm pull-right\" ><span class=\"glyphicon glyphicon-search btn-sm\"></span></button>
        </div>
         -->
    </div>
    <div class=\"col-sm-12\">
        <div id=\"treeview\" class=\"\"></div>
    </div>
</div>

{% include 'partials/paginator.twig' %}

<script type=\"text/javascript\">
    \$(function() {
        var defaultData =  {{ page.categories|raw }} ;

        \$('#treeview').treeview({
          color: \"#428bca\",
          enableLinks: true,
          data: defaultData
        });
    });
</script>
    
{% endblock %}", "categories.twig", "C:\\www\\figshare_orda\\app\\src\\View\\categories.twig");
    }
}

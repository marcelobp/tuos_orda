<?php

/* groups.twig */
class __TwigTemplate_483f70d19afe81e8dd2ac8261cd4c6690deec251039b7e560adac433613c8a1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "groups.twig", 1);
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
      <li><a href=\"/\">Faculties</a></li>
      <li class=\"active\">Faculty of ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "current_page", array()), "html", null, true);
        echo "</li>
    </ul>
    
    <div class=\"well panel-yellow\" >
        <h1 style='font-weight: 500; margin-top: 10px; font-family: \"Open sans\", Arial, sans-serif'><p><span class=\"glyphicon glyphicon-education\"></span> &nbsp;Faculty of ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "current_page", array()), "html", null, true);
        echo "</p></h1>
        <div class=\"row\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "groups", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 15
            echo "            <div class=\"col-md-6 col-sm-12 col-xs-12\" style=\"margin-top: 5px; font-size: 13px; height: 20px\">
                <a href=\"/groups/list/";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "parent_id", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
            echo "/1/desc/published_date\" class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "class", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "name", array()));
            echo "</a> 
                <span class=\"count_articles_";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
            echo "\"> <img src='/img/loader_yellow.gif' alt='loading...' /> </span> 
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    
        </div>
    </div>
    
    ";
        // line 23
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "articles", array())) {
            // line 24
            echo "        
        <div style=\"margin-right: 15px; margin-left: 15px\">
    
            ";
            // line 27
            $this->loadTemplate("partials/list_articles.twig", "groups.twig", 27)->display($context);
            // line 28
            echo "            
        </div>
        
        ";
            // line 31
            $this->loadTemplate("partials/paginator.twig", "groups.twig", 31)->display($context);
            // line 32
            echo "        
    ";
        } else {
            // line 34
            echo "        
        <br />
        <div class=\"text-center\"><h2><p><span class=\"glyphicon glyphicon-hand-up\"></span> Choose a Department</p></h2></div>
    
    ";
        }
        // line 39
        echo "
    <script type=\"text/javascript\">
    \$(document).ready(function () {
        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "groups", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 43
            echo "            \$(\".count_articles_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
            echo "\").load(\"/groups/count_articles\", {'id': '";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
            echo "'});
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "    });
    </script>

";
    }

    public function getTemplateName()
    {
        return "groups.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 45,  117 => 43,  113 => 42,  108 => 39,  101 => 34,  97 => 32,  95 => 31,  90 => 28,  88 => 27,  83 => 24,  81 => 23,  75 => 19,  66 => 17,  56 => 16,  53 => 15,  49 => 14,  44 => 12,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
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
      <li><a href=\"/\">Faculties</a></li>
      <li class=\"active\">Faculty of {{ page.current_page }}</li>
    </ul>
    
    <div class=\"well panel-yellow\" >
        <h1 style='font-weight: 500; margin-top: 10px; font-family: \"Open sans\", Arial, sans-serif'><p><span class=\"glyphicon glyphicon-education\"></span> &nbsp;Faculty of {{ page.current_page }}</p></h1>
        <div class=\"row\">
        {% for group in page.groups %}
            <div class=\"col-md-6 col-sm-12 col-xs-12\" style=\"margin-top: 5px; font-size: 13px; height: 20px\">
                <a href=\"/groups/list/{{ group.parent_id }}/{{ group.id}}/1/desc/published_date\" class=\"{{ group.class }}\">{{ group.name|e }}</a> 
                <span class=\"count_articles_{{ group.id}}\"> <img src='/img/loader_yellow.gif' alt='loading...' /> </span> 
            </div>
        {% endfor %}    
        </div>
    </div>
    
    {% if page.articles %}
        
        <div style=\"margin-right: 15px; margin-left: 15px\">
    
            {% include 'partials/list_articles.twig' %}
            
        </div>
        
        {% include 'partials/paginator.twig' %}
        
    {% else %}
        
        <br />
        <div class=\"text-center\"><h2><p><span class=\"glyphicon glyphicon-hand-up\"></span> Choose a Department</p></h2></div>
    
    {% endif %}

    <script type=\"text/javascript\">
    \$(document).ready(function () {
        {% for group in page.groups %}
            \$(\".count_articles_{{ group.id}}\").load(\"/groups/count_articles\", {'id': '{{ group.id}}'});
        {% endfor %}
    });
    </script>

{% endblock %}

", "groups.twig", "C:\\www\\figshare_orda\\app\\src\\View\\groups.twig");
    }
}

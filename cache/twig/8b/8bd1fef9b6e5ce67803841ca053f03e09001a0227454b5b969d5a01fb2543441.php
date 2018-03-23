<?php

/* visualisations.twig */
class __TwigTemplate_c22b117c7dbd1dd627f95a723df5cbe99568902a985a9ab4ca01d6d485585f15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "visualisations.twig", 1);
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

<div class=\"row\">
    <div class=\"col-sm-6\">
        <h2 style=\"margin-left:5px; float: left;\">Visualisation Showcase</h2>
    </div>
    
    <div class=\"col-sm-12\">
        <h3>
            <p>This area shows some examples of visual representations of our research that you can view and explore directly in your web browser. Some are fully interactive and allow you to investigate different facets of the available data.</p>
            <p>We plan to develop guidance and training which can enable researchers build visualisations from their own research data, using free and open source tools.</p>
            <p>
            <!-- 
            If you have a visualisation that you would like to display here, or can tell us more about the tools you use (or would like to use) to present data visually, please <a href=\"https://goo.gl/forms/3AYg51UkHi3Q1Y2X2\" target=\"_blank\">complete this survey</a>, 
            which should take no more than 5 minutes. You can also contact us at <a href=\"mailto:rdm@sheffield.ac.uk\">rdm@sheffield.ac.uk</a> with questions, though please note this work is still in a pilot phase.
             -->
            If you have a visualisation that you would like to display here, or can tell us more about the tools you use (or would like to use) to present data visually, please contact us at <a href=\"mailto:rdm@sheffield.ac.uk\">rdm@sheffield.ac.uk</a>, though please note this work is still in a pilot phase.
            </p>
        </h3>
    </div>
</div>

<div class=\"row\">

    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "visualisations", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["visualisation"]) {
            // line 33
            echo "
        <div class=\"col-xs-12 col-sm-6 col-md-4\" style=\"height:400px;\">
            <div class=\"\" >
                <a ";
            // line 36
            if (($this->getAttribute($context["visualisation"], "visualisation_embeded", array()) == "link")) {
                echo " href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visualisation"], "visualisation_url", array()), "html", null, true);
                echo "\" target=\"_blank\" ";
            } else {
                echo " href=\"/visualisations/view/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visualisation"], "article_id", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visualisation"], "position", array()), "html", null, true);
                echo "\" ";
            }
            echo "><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["visualisation"], "thumb", array()), "html", null, true);
            echo "\" class=\"media-object\" alt=\"\" style=\"height:250px; width:250px;\"></a>        
            </div>
            <div><h4>";
            // line 38
            if ($this->getAttribute($context["visualisation"], "title", array())) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visualisation"], "title", array()), "html", null, true);
                echo " ";
            } else {
                echo " Title not defined ";
            }
            echo "</h4>Author: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["visualisation"], "creators", array()), "html", null, true);
            echo "</div>
        </div>
                
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visualisation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "    
          
</div>

";
        // line 45
        $this->loadTemplate("partials/paginator.twig", "visualisations.twig", 45)->display($context);
        // line 46
        echo "    
";
    }

    public function getTemplateName()
    {
        return "visualisations.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 46,  114 => 45,  108 => 41,  90 => 38,  73 => 36,  68 => 33,  64 => 32,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
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

<div class=\"row\">
    <div class=\"col-sm-6\">
        <h2 style=\"margin-left:5px; float: left;\">Visualisation Showcase</h2>
    </div>
    
    <div class=\"col-sm-12\">
        <h3>
            <p>This area shows some examples of visual representations of our research that you can view and explore directly in your web browser. Some are fully interactive and allow you to investigate different facets of the available data.</p>
            <p>We plan to develop guidance and training which can enable researchers build visualisations from their own research data, using free and open source tools.</p>
            <p>
            <!-- 
            If you have a visualisation that you would like to display here, or can tell us more about the tools you use (or would like to use) to present data visually, please <a href=\"https://goo.gl/forms/3AYg51UkHi3Q1Y2X2\" target=\"_blank\">complete this survey</a>, 
            which should take no more than 5 minutes. You can also contact us at <a href=\"mailto:rdm@sheffield.ac.uk\">rdm@sheffield.ac.uk</a> with questions, though please note this work is still in a pilot phase.
             -->
            If you have a visualisation that you would like to display here, or can tell us more about the tools you use (or would like to use) to present data visually, please contact us at <a href=\"mailto:rdm@sheffield.ac.uk\">rdm@sheffield.ac.uk</a>, though please note this work is still in a pilot phase.
            </p>
        </h3>
    </div>
</div>

<div class=\"row\">

    {% for visualisation in page.visualisations %}

        <div class=\"col-xs-12 col-sm-6 col-md-4\" style=\"height:400px;\">
            <div class=\"\" >
                <a {% if visualisation.visualisation_embeded == 'link' %} href=\"{{ visualisation.visualisation_url }}\" target=\"_blank\" {% else %} href=\"/visualisations/view/{{ visualisation.article_id }}/{{ visualisation.position }}\" {% endif %}><img src=\"{{ visualisation.thumb }}\" class=\"media-object\" alt=\"\" style=\"height:250px; width:250px;\"></a>        
            </div>
            <div><h4>{% if visualisation.title %} {{ visualisation.title }} {% else %} Title not defined {% endif %}</h4>Author: {{ visualisation.creators }}</div>
        </div>
                
    {% endfor %}    
          
</div>

{% include 'partials/paginator.twig' %}
    
{% endblock %}", "visualisations.twig", "C:\\www\\figshare_orda\\app\\src\\View\\visualisations.twig");
    }
}

<?php

/* visualisations_view.twig */
class __TwigTemplate_b9204df45ee654f9d5ed0b1104b09f2fbfea057dc2c5aeddec5e85a89df65e57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "visualisations_view.twig", 1);
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
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "visualisations", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["visualisation"]) {
            // line 6
            echo "    <ul class=\"breadcrumb hidden-xs ul_breadcrumb\">
      <li><a href=\"/\">Home</a></li>
      <li><a href=\"/visualisations/\">Visualisation Showcase</a></li>
      <li class=\"active\">";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["visualisation"], "title", array()), "html", null, true);
            echo "</li>
    </ul>
    
    <div class=\"row\">
        <h2><b>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["visualisation"], "title", array()), "html", null, true);
            echo "</h2>
        
        ";
            // line 15
            if ($this->getAttribute($context["visualisation"], "creators", array())) {
                // line 16
                echo "            <h5><span class=\"glyphicon glyphicon-user\"></span> Creator(s): ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visualisation"], "creators", array()), "html", null, true);
                echo "</h5>
        ";
            }
            // line 18
            echo "        
        ";
            // line 19
            if ($this->getAttribute($context["visualisation"], "article_doi", array())) {
                // line 20
                echo "            <h5><span class=\"glyphicon glyphicon-hand-up\"></span> <a href=\"http://dx.doi.org/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visualisation"], "article_doi", array()), "html", null, true);
                echo "\" target=\"blank\">Get the underlying data</a></h5>
        ";
            }
            // line 22
            echo "        
        ";
            // line 23
            if ($this->getAttribute($context["visualisation"], "source_code", array())) {
                // line 24
                echo "            <h5><span class=\"glyphicon glyphicon-floppy-disk\"></span> Source code: <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visualisation"], "source_code", array()), "html", null, true);
                echo "\" target=\"blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visualisation"], "source_code", array()), "html", null, true);
                echo "</a></h5>
        ";
            }
            // line 25
            echo "        
        <br>
        <h3><p>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["visualisation"], "description", array()));
            echo "</p></h3>

        <iframe id=\"if1\" frameBorder=\"0\" style=\"visibility:visible\" height=\"580px\" src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["visualisation"], "visualisation_url", array()), "html", null, true);
            echo "\" width=\"100%\"></iframe>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visualisation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "

";
    }

    public function getTemplateName()
    {
        return "visualisations_view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 32,  96 => 29,  91 => 27,  87 => 25,  79 => 24,  77 => 23,  74 => 22,  68 => 20,  66 => 19,  63 => 18,  57 => 16,  55 => 15,  50 => 13,  43 => 9,  38 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
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

{% for visualisation in page.visualisations %}
    <ul class=\"breadcrumb hidden-xs ul_breadcrumb\">
      <li><a href=\"/\">Home</a></li>
      <li><a href=\"/visualisations/\">Visualisation Showcase</a></li>
      <li class=\"active\">{{ visualisation.title }}</li>
    </ul>
    
    <div class=\"row\">
        <h2><b>{{ visualisation.title }}</h2>
        
        {% if visualisation.creators %}
            <h5><span class=\"glyphicon glyphicon-user\"></span> Creator(s): {{ visualisation.creators }}</h5>
        {% endif %}
        
        {% if visualisation.article_doi %}
            <h5><span class=\"glyphicon glyphicon-hand-up\"></span> <a href=\"http://dx.doi.org/{{ visualisation.article_doi }}\" target=\"blank\">Get the underlying data</a></h5>
        {% endif %}
        
        {% if visualisation.source_code %}
            <h5><span class=\"glyphicon glyphicon-floppy-disk\"></span> Source code: <a href=\"{{ visualisation.source_code }}\" target=\"blank\">{{ visualisation.source_code }}</a></h5>
        {% endif %}        
        <br>
        <h3><p>{{ visualisation.description |e }}</p></h3>

        <iframe id=\"if1\" frameBorder=\"0\" style=\"visibility:visible\" height=\"580px\" src=\"{{ visualisation.visualisation_url }}\" width=\"100%\"></iframe>
    </div>
{% endfor %}


{% endblock %}", "visualisations_view.twig", "C:\\www\\figshare_orda\\app\\src\\View\\visualisations_view.twig");
    }
}

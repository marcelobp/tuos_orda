<?php

/* partials/paginator.twig */
class __TwigTemplate_e2fba3268660429dfd991f2bd0479feb100c7b9358935d4703608d6fd22e53b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"text-center\">
";
        // line 2
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "needed", array())) {
            // line 3
            echo "    <ul class=\"pagination\">
        ";
            // line 4
            if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "page", array()) > 1)) {
                // line 5
                echo "            ";
                // line 6
                echo "            <!--  
            <li>
                <a href=\"#\" aria-label=\"Previous\">
                    <span aria-hidden=\"true\">&laquo;</span>
                </a>
            </li>
            -->
        ";
            }
            // line 14
            echo "        
        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "lastpage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 16
                echo "            <li class=\"";
                if (($context["i"] == $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "page", array()))) {
                    echo " active ";
                }
                echo " ";
                if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "ajax_search", array())) {
                    echo " ajax_search ";
                }
                echo "\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "route", array()), twig_array_merge($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "route_params", array()), array("page" => $context["i"], "count_articles" => $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "count", array())))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "        
        ";
            // line 19
            if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "page", array()) < $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "count", array()))) {
                // line 20
                echo "            ";
                // line 21
                echo "            <!--  
            <li>
                <a href=\"#\" aria-label=\"Next\">
                    <span aria-hidden=\"true\">&raquo;</span>
                </a>
            </li>
            -->
        ";
            }
            // line 28
            echo "        
    </ul>
";
        }
        // line 31
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "partials/paginator.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 31,  84 => 28,  74 => 21,  72 => 20,  70 => 19,  67 => 18,  48 => 16,  44 => 15,  41 => 14,  31 => 6,  29 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"text-center\">
{% if pagination.needed %}
    <ul class=\"pagination\">
        {% if pagination.page > 1 %}
            {# <a href=\"{{ path_for(pagination.route, pagination.route_params|merge({'page': 1})) }}\"><<</a> #}
            <!--  
            <li>
                <a href=\"#\" aria-label=\"Previous\">
                    <span aria-hidden=\"true\">&laquo;</span>
                </a>
            </li>
            -->
        {% endif %}
        
        {% for i in 1..pagination.lastpage %}
            <li class=\"{% if i == pagination.page %} active {% endif %} {% if pagination.ajax_search %} ajax_search {% endif %}\"><a href=\"{{ path_for(pagination.route, pagination.route_params|merge({'page': i, 'count_articles': pagination.count})) }}\">{{ i }}</a></li>
        {% endfor %}
        
        {% if pagination.page < pagination.count %}
            {# <a href=\"{{ path_for(pagination.route, pagination.route_params|merge({'page': pagination.pages_count})) }}\">>></a> #}
            <!--  
            <li>
                <a href=\"#\" aria-label=\"Next\">
                    <span aria-hidden=\"true\">&raquo;</span>
                </a>
            </li>
            -->
        {% endif %}        
    </ul>
{% endif %}
</div>", "partials/paginator.twig", "C:\\www\\figshare_orda\\app\\src\\View\\partials\\paginator.twig");
    }
}

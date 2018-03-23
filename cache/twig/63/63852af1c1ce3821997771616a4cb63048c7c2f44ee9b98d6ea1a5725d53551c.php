<?php

/* partials/list_articles.twig */
class __TwigTemplate_e0b665f71a7b6255beb5a1bd7617e28cd8904b25aba3b317e22c31f507495795 extends Twig_Template
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
        echo "<div class=\"row\">
    ";
        // line 2
        if ($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "search_by_show", array())) {
            // line 3
            echo "        <div class=\"row text-left\" style=\"padding-left: 10px; padding-right: 12px;\">
            <div class=\"col-xs-12 hero-feature\" style=\"padding-left: 5px;\">
                ";
            // line 5
            $this->loadTemplate("partials/search_bar.twig", "partials/list_articles.twig", 5)->display($context);
            // line 6
            echo "            </div>    
        </div>    
    ";
        }
        // line 9
        echo "
    ";
        // line 10
        if ((null === $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "no_order", array()))) {
            // line 11
            echo "        ";
            $this->loadTemplate("partials/order_articles.twig", "partials/list_articles.twig", 11)->display($context);
            // line 12
            echo "    ";
        }
        // line 13
        echo "        
    ";
        // line 14
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "articles", array())) {
            // line 15
            echo "    
        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "articles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 17
                echo "            <div class=\"col-xs-12 list-group-item\" style=\"margin-top: 5px\">
                <div>
                    <div style=\"margin-right: 17px;\" class=\"pull-left\">
                    <a href=\"/articles/view/";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
                echo "\" target=\"_blank\" >
                        ";
                // line 21
                if ($this->getAttribute($context["article"], "thumb", array())) {
                    // line 22
                    echo "                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "thumb", array()), "html", null, true);
                    echo "\" class=\"media-object\" alt=\"\" width=\"100px\" height=\"100px\" title=\"Id: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
                    echo "\">
                        ";
                }
                // line 24
                echo "                        
                        ";
                // line 25
                if ($this->getAttribute($context["article"], "thumb_placeholder", array())) {
                    // line 26
                    echo "                            <i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "thumb_placeholder", array()), "html", null, true);
                    echo "\" aria-hidden=\"true\" style=\"font-size: 80px;\" title=\"Id: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
                    echo "\"></i>
                        ";
                }
                // line 28
                echo "                    </a>
                    </div>
                    
                    <div style=\"padding-left: 5px\">
                        <a href=\"http://dx.doi.org/";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "doi", array()), "html", null, true);
                echo "\" class=\"content show-tooltip\" target=\"_blank\" data-html=\"true\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "description", array()), "html", null, true);
                echo "\"><h3 class=\"\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()));
                echo "</h3></a>
                        <h6>
                        ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "type", array()), "html", null, true);
                echo " by
                        ";
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["article"], "authors", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
                    // line 36
                    echo "                            ";
                    if ($this->getAttribute($context["loop"], "first", array())) {
                        // line 37
                        echo "                                ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "full_name", array()), "html", null, true);
                        if (($this->getAttribute($context["loop"], "length", array()) > 1)) {
                            echo " et al";
                        }
                        // line 38
                        echo "                            ";
                    }
                    // line 39
                    echo "                        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "                        on 
                        ";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "published_date", array()), "html", null, true);
                echo "
                        </h6>
                        
                        <div>
                            <span class=\"glyphicon glyphicon-eye-open fa-lg\" title=\"Views\" alt=\"Views ";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()));
                echo "\"></span> <font style=\"font-size: 12px;\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "statistics", array()), "views", array()), "html", null, true);
                echo " </font> &nbsp;
                            <span class=\"glyphicon glyphicon glyphicon-download-alt fa-lg\" title=\"Downloads\" alt=\"Download ";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()));
                echo "\"></span> <font style=\"font-size: 12px;\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "statistics", array()), "downloads", array()), "html", null, true);
                echo "</font> &nbsp;
                            
                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#citationModal\" id=";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "doi", array()), "html", null, true);
                echo " style=\" color:inherit; text-decoration: none;\"><span class=\"glyphicon glyphicon-copy fa-lg\" title=\"Generate Citations\" alt=\"Generate Citations\"></span></a> &nbsp; 
                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#chartModal\" class=\"chart\" id=";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
                echo " style=\" color:inherit; text-decoration: none;\"><span class=\"glyphicon glyphicon-stats fa-lg\" title=\"Stats\" alt=\"Stats\"></span></a>

                            ";
                // line 51
                if ($this->getAttribute($context["article"], "visualisation", array())) {
                    // line 52
                    echo "                            <div class=\"btn-group\" style=\"margin-left: 5px;\">
                                <button type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" style=\"background: none; border: none;\">
                                    <span class=\"glyphicon glyphicon-sunglasses fa-2x\"></span> <span class=\"caret\"></span>
                                </button>
                                <ul class=\"dropdown-menu\">
                                    ";
                    // line 57
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["article"], "visualisation", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["visualisation"]) {
                        // line 58
                        echo "                                        <li><a ";
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
                        echo ">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["visualisation"], "title", array()), "html", null, true);
                        echo " </a></li>                                    
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visualisation'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 60
                    echo "                                </ul>
                            </div>
                            ";
                }
                // line 62
                echo "                                
                        </div>
                    </div>
                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "    
    ";
        } else {
            // line 70
            echo "        <br />
        <br />
        <br />
        <div class=\"well\"><p class=\"h4 text-center\" style=\"\">Sorry, no results were found.</p></div>
    ";
        }
        // line 75
        echo "</div>

";
        // line 77
        $this->loadTemplate("partials/citation.twig", "partials/list_articles.twig", 77)->display($context);
        // line 78
        echo " 
<div class=\"modal fade\" id=\"chartModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"chartModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\">Stats of Views and Downloads</h4>            
            </div>
            <div id=\"chart_div\" style=\"width: 500px;\"></div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "partials/list_articles.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 78,  249 => 77,  245 => 75,  238 => 70,  234 => 68,  223 => 62,  218 => 60,  197 => 58,  193 => 57,  186 => 52,  184 => 51,  179 => 49,  175 => 48,  168 => 46,  162 => 45,  155 => 41,  152 => 40,  138 => 39,  135 => 38,  129 => 37,  126 => 36,  109 => 35,  105 => 34,  96 => 32,  90 => 28,  82 => 26,  80 => 25,  77 => 24,  69 => 22,  67 => 21,  63 => 20,  58 => 17,  54 => 16,  51 => 15,  49 => 14,  46 => 13,  43 => 12,  40 => 11,  38 => 10,  35 => 9,  30 => 6,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
    {% if session.search_by_show %}
        <div class=\"row text-left\" style=\"padding-left: 10px; padding-right: 12px;\">
            <div class=\"col-xs-12 hero-feature\" style=\"padding-left: 5px;\">
                {% include 'partials/search_bar.twig' %}
            </div>    
        </div>    
    {% endif %}

    {% if page.no_order is null %}
        {% include 'partials/order_articles.twig' %}
    {% endif %}
        
    {% if page.articles %}
    
        {% for article in page.articles %}
            <div class=\"col-xs-12 list-group-item\" style=\"margin-top: 5px\">
                <div>
                    <div style=\"margin-right: 17px;\" class=\"pull-left\">
                    <a href=\"/articles/view/{{ article.id }}\" target=\"_blank\" >
                        {% if article.thumb  %}
                            <img src=\"{{ article.thumb }}\" class=\"media-object\" alt=\"\" width=\"100px\" height=\"100px\" title=\"Id: {{ article.id }}\">
                        {% endif %}
                        
                        {% if article.thumb_placeholder %}
                            <i class=\"{{ article.thumb_placeholder }}\" aria-hidden=\"true\" style=\"font-size: 80px;\" title=\"Id: {{ article.id }}\"></i>
                        {% endif %}
                    </a>
                    </div>
                    
                    <div style=\"padding-left: 5px\">
                        <a href=\"http://dx.doi.org/{{ article.doi }}\" class=\"content show-tooltip\" target=\"_blank\" data-html=\"true\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"{{ article.description }}\"><h3 class=\"\">{{ article.title|e }}</h3></a>
                        <h6>
                        {{ article.type }} by
                        {% for author in article.authors  %}
                            {% if loop.first %}
                                {{  author.full_name }}{% if loop.length > 1 %} et al{% endif %}
                            {% endif %}
                        {% endfor %}
                        on 
                        {{ article.published_date }}
                        </h6>
                        
                        <div>
                            <span class=\"glyphicon glyphicon-eye-open fa-lg\" title=\"Views\" alt=\"Views {{ article.title|e }}\"></span> <font style=\"font-size: 12px;\"> {{  article.statistics.views }} </font> &nbsp;
                            <span class=\"glyphicon glyphicon glyphicon-download-alt fa-lg\" title=\"Downloads\" alt=\"Download {{ article.title|e }}\"></span> <font style=\"font-size: 12px;\">{{  article.statistics.downloads }}</font> &nbsp;
                            
                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#citationModal\" id={{ article.doi }} style=\" color:inherit; text-decoration: none;\"><span class=\"glyphicon glyphicon-copy fa-lg\" title=\"Generate Citations\" alt=\"Generate Citations\"></span></a> &nbsp; 
                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#chartModal\" class=\"chart\" id={{ article.id }} style=\" color:inherit; text-decoration: none;\"><span class=\"glyphicon glyphicon-stats fa-lg\" title=\"Stats\" alt=\"Stats\"></span></a>

                            {% if article.visualisation  %}
                            <div class=\"btn-group\" style=\"margin-left: 5px;\">
                                <button type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" style=\"background: none; border: none;\">
                                    <span class=\"glyphicon glyphicon-sunglasses fa-2x\"></span> <span class=\"caret\"></span>
                                </button>
                                <ul class=\"dropdown-menu\">
                                    {% for visualisation in article.visualisation  %}
                                        <li><a {% if visualisation.visualisation_embeded == 'link' %} href=\"{{ visualisation.visualisation_url }}\" target=\"_blank\" {% else %} href=\"/visualisations/view/{{ visualisation.article_id }}/{{ visualisation.position }}\" {% endif %}>{{ visualisation.title }} </a></li>                                    
                                    {% endfor %}
                                </ul>
                            </div>
                            {% endif %}                                
                        </div>
                    </div>
                </div>
            </div>
        {% endfor %}
    
    {% else %}
        <br />
        <br />
        <br />
        <div class=\"well\"><p class=\"h4 text-center\" style=\"\">Sorry, no results were found.</p></div>
    {% endif %}
</div>

{% include 'partials/citation.twig' %}
 
<div class=\"modal fade\" id=\"chartModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"chartModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\">Stats of Views and Downloads</h4>            
            </div>
            <div id=\"chart_div\" style=\"width: 500px;\"></div>
        </div>
    </div>
</div>", "partials/list_articles.twig", "C:\\www\\figshare_orda\\app\\src\\View\\partials\\list_articles.twig");
    }
}

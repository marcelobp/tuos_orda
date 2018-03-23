<?php

/* partials/list_articles_load_more.twig */
class __TwigTemplate_d1408d9a837ed715aafd612b3c0cf85aa2e43473aee53850d74d7c4f8e050bfa extends Twig_Template
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
        echo "    ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "articles", array())) {
            // line 2
            echo "    
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "articles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 4
                echo "            <div class=\"col-xs-12 list-group-item\" style=\"margin-top: 5px\">
                <div>
                    <div style=\"margin-right: 17px;\" class=\"pull-left\">
                    <a href=\"/articles/view/";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
                echo "\" target=\"_blank\" >
                        ";
                // line 8
                if ($this->getAttribute($context["article"], "thumb", array())) {
                    // line 9
                    echo "                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "thumb", array()), "html", null, true);
                    echo "\" class=\"media-object\" alt=\"\" width=\"100px\" height=\"100px\" title=\"Id: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
                    echo "\">
                        ";
                } else {
                    // line 11
                    echo "                            <i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "thumb_placeholder", array()), "html", null, true);
                    echo "\" aria-hidden=\"true\" style=\"font-size: 80px;\" title=\"Id: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
                    echo "\"></i>
                        ";
                }
                // line 13
                echo "                    </a>
                    </div>
                    
                    <div style=\"padding-left: 5px\">
                        <a href=\"http://dx.doi.org/";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "doi", array()), "html", null, true);
                echo "\" class=\"content show-tooltip\" target=\"_blank\" data-html=\"true\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "description", array()), "html", null, true);
                echo "\"><h3 class=\"\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()));
                echo "</h3></a>
                        <h6>
                        ";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "type", array()), "html", null, true);
                echo " by
                        ";
                // line 20
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
                    // line 21
                    echo "                            ";
                    if ($this->getAttribute($context["loop"], "first", array())) {
                        // line 22
                        echo "                                ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "full_name", array()), "html", null, true);
                        if (($this->getAttribute($context["loop"], "length", array()) > 1)) {
                            echo " et al";
                        }
                        // line 23
                        echo "                            ";
                    }
                    // line 24
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
                // line 25
                echo "                        on 
                        ";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "published_date", array()), "html", null, true);
                echo "
                        </h6>
                        
                        <div>
                            <span class=\"glyphicon glyphicon-eye-open fa-lg\" title=\"Views\" alt=\"Views ";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()));
                echo "\"></span> <font style=\"font-size: 12px;\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "statistics", array()), "views", array()), "html", null, true);
                echo " </font> &nbsp;
                            <span class=\"glyphicon glyphicon glyphicon-download-alt fa-lg\" title=\"Downloads\" alt=\"Download ";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()));
                echo "\"></span> <font style=\"font-size: 12px;\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "statistics", array()), "downloads", array()), "html", null, true);
                echo "</font> &nbsp;
                            
                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#citationModal\" id=";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "doi", array()), "html", null, true);
                echo " style=\" color:inherit; text-decoration: none;\"><span class=\"glyphicon glyphicon-copy fa-lg\" title=\"Generate Citations\" alt=\"Generate Citations\"></span></a> &nbsp; 
                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#chartModal\" class=\"chart\" id=";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
                echo " style=\" color:inherit; text-decoration: none;\"><span class=\"glyphicon glyphicon-stats fa-lg\" title=\"Stats\" alt=\"Stats\"></span></a>

                            ";
                // line 36
                if ($this->getAttribute($context["article"], "visualisations", array())) {
                    // line 37
                    echo "                            <div class=\"btn-group\" style=\"margin-left: 5px;\">
                                <button type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" style=\"background: none; border: none;\">
                                    <span class=\"glyphicon glyphicon-sunglasses fa-2x\"></span> <span class=\"caret\"></span>
                                </button>
                                <ul class=\"dropdown-menu\">
                                    ";
                    // line 42
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["article"], "visualisations", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["visualisation"]) {
                        // line 43
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
                    // line 45
                    echo "                                </ul>
                            </div>
                            ";
                }
                // line 47
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
            // line 53
            echo "        
    ";
        } else {
            // line 55
            echo "        <div class=\"col-xs-12 list-group-item\" style=\"margin-top: 5px\" id=\"no_result\"><p class=\"h4 text-center\">Sorry, no results were found.</p></div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "partials/list_articles_load_more.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 55,  200 => 53,  189 => 47,  184 => 45,  163 => 43,  159 => 42,  152 => 37,  150 => 36,  145 => 34,  141 => 33,  134 => 31,  128 => 30,  121 => 26,  118 => 25,  104 => 24,  101 => 23,  95 => 22,  92 => 21,  75 => 20,  71 => 19,  62 => 17,  56 => 13,  48 => 11,  40 => 9,  38 => 8,  34 => 7,  29 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("    {% if page.articles %}
    
        {% for article in page.articles %}
            <div class=\"col-xs-12 list-group-item\" style=\"margin-top: 5px\">
                <div>
                    <div style=\"margin-right: 17px;\" class=\"pull-left\">
                    <a href=\"/articles/view/{{ article.id }}\" target=\"_blank\" >
                        {% if article.thumb  %}
                            <img src=\"{{ article.thumb }}\" class=\"media-object\" alt=\"\" width=\"100px\" height=\"100px\" title=\"Id: {{ article.id }}\">
                        {% else %}
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

                            {% if article.visualisations  %}
                            <div class=\"btn-group\" style=\"margin-left: 5px;\">
                                <button type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" style=\"background: none; border: none;\">
                                    <span class=\"glyphicon glyphicon-sunglasses fa-2x\"></span> <span class=\"caret\"></span>
                                </button>
                                <ul class=\"dropdown-menu\">
                                    {% for visualisation in article.visualisations  %}
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
        <div class=\"col-xs-12 list-group-item\" style=\"margin-top: 5px\" id=\"no_result\"><p class=\"h4 text-center\">Sorry, no results were found.</p></div>
    {% endif %}
", "partials/list_articles_load_more.twig", "C:\\www\\figshare_orda\\app\\src\\View\\partials\\list_articles_load_more.twig");
    }
}

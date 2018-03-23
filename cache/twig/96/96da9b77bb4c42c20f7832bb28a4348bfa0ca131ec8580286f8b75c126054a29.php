<?php

/* index.twig */
class __TwigTemplate_6fa570535920050963303020916a2ea89ccc0a1a9ea3be566f045d1851e762f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "index.twig", 1);
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
    <div  class=\"row text-left\" style=\"padding-left: 10px; padding-bottom: 10px;\">
        <h1>The hub for managing and sharing research data at <b>The University of Sheffield </b></h1>
    </div>
    
    <div class=\"row text-left\" style=\"padding-left: 0px;\">
        <div class=\"col-xs-12 hero-feature\" style=\"padding-left: 5px;\">
        ";
        // line 11
        $this->loadTemplate("partials/search_bar.twig", "index.twig", 11)->display($context);
        echo " 
        </div>    
    </div>
    
    <div class=\"row text-left hidden-xs hidden-sm\">
        <div class=\"col-md-12 hero-feature\">
            
            <div style=\"width: 1%; display:inline-block;\"></div>
            
            <div style=\"width: 19%; display:inline-block;\">
                <div class=\"thumbnail div-faculties\">
                    <a href=\"/groups/list/2754\">
                    <img src=\"img/arts.png\" alt=\"\">
                    <div class=\"text-center\">
                        <h6><b>Arts and<br>Humanities</b></h6>
                    </div>
                    </a>
                </div>
            </div>
        
            <div style=\"width: 19%; display:inline-block;\">
                <div class=\"thumbnail div-faculties\">
                    <a href=\"/groups/list/2622\">
                    <img src=\"img/engineering.png\" alt=\"\">
                    <div class=\"text-center\">
                        <h6><b>Engineering<br>&nbsp</b></h6>
                    </div>
                    </a>
                </div>
            </div>
        
            <div style=\"width: 19%; display:inline-block;\">
                <div class=\"thumbnail div-faculties\">
                    <a href=\"/groups/list/2670\">
                    <img src=\"img/medicine.png\" alt=\"\">
                    <div class=\"text-center\">
                        <h6><b>Medicine Dentistry & Health</b></h6>
                    </div>
                    </a>
                </div>
            </div>
            
            <div style=\"width: 19%; display:inline-block;\">
                <div class=\"thumbnail div-faculties\">
                    <a href=\"/groups/list/2712\">
                    <img src=\"img/social_science.png\" alt=\"\">
                    <div class=\"text-center\">
                        <h6><b>Social Sciences<br>&nbsp</b></h6>
                    </div>
                    </a>
                </div>
            </div>
                        
            <div style=\"width: 19%; display:inline-block;\">
                <div class=\"thumbnail div-faculties\">
                    <a href=\"/groups/list/2646\">
                    <img src=\"img/science.png\" alt=\"\">
                    <div class=\"text-center\">
                        <h6><b>Science<br>&nbsp</b></h6>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"row text-center hidden-lg hidden-md\">
        <div class=\"col-sm-6 col-xs-6 hero-feature\">
            <div class=\"thumbnail div-faculties\">
                <a href=\"/groups/list/2754\">
                <img src=\"img/arts.png\" alt=\"\">
                <div class=\"caption\">
                    <h5><b>Arts and<br />Humanities</b></h5>
                </div>
                </a>
            </div>
        </div>
    
        <div class=\"col-sm-6 col-xs-6 hero-feature\">
            <div class=\"thumbnail div-faculties\">
                <a href=\"/groups/list/2622\">
                <img src=\"img/engineering.png\" alt=\"\">
                <div class=\"caption\">
                    <h5><b>Engineering<br>&nbsp</b></h5>
                </div>
                </a>
            </div>
        </div>
    
        <div class=\"col-sm-6 col-xs-6 hero-feature\">
            <div class=\"thumbnail div-faculties\">
                <a href=\"/groups/list/2670\">
                <img src=\"img/medicine.png\" alt=\"\">
                <div class=\"caption\">
                    <h5><b>Medicine Dentistry<br />& Health</b></h5>
                </div>
                </a>
            </div>
        </div>
    
        <div class=\"col-sm-6 col-xs-6 hero-feature\">
            <div class=\"thumbnail div-faculties\">
                <a href=\"/groups/list/2646\">
                <img src=\"img/science.png\" alt=\"\">
                <div class=\"caption\">
                    <h5><b>Science<br>&nbsp</b></h5>
                </div>
                </a>
            </div>
        </div>
        
        <div class=\"col-sm-6 col-xs-6 hero-feature\">
            <div class=\"thumbnail div-faculties\">
                <a href=\"/groups/list/2712\">
                <img src=\"img/social_science.png\" alt=\"\">
                <div class=\"caption\">
                    <h5><b>Social Sciences</b></h5>
                </div>
                </a>
            </div>
        </div>
        
        <div class=\"col-sm-6 col-xs-6\"></div>            
    </div>    
    
    <div class=\"row\">
        
        <div class=\"divslider col-xs-12 col-sm-5 col-md-5 col-lg-5\">
            <div id=\"sliderprincipal\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"4000\">
            
                <div class=\"carousel-inner\" role=\"listbox\">
                ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "articles_highlights", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 143
            echo "                    <div class=\"item ";
            if (($this->getAttribute($context["loop"], "index0", array()) == 0)) {
                echo " active ";
            }
            echo "\">
                        <a href=\"http://dx.doi.org/";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "doi", array()), "html", null, true);
            echo "\" target=\"blank\">
                            ";
            // line 145
            if ($this->getAttribute($context["article"], "thumb", array())) {
                // line 146
                echo "                                <img src=\"";
                if ($this->getAttribute($context["article"], "thumb", array())) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "thumb", array()), "html", null, true);
                    echo " ";
                } else {
                    echo " img/no_image.png ";
                }
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "thumb", array()), "html", null, true);
                echo "\">
                            ";
            }
            // line 148
            echo "                            
                            ";
            // line 149
            if ($this->getAttribute($context["article"], "thumb_placeholder", array())) {
                // line 150
                echo "                                <i class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "thumb_placeholder", array()), "html", null, true);
                echo "\" aria-hidden=\"true\" style=\"font-size: 240px; text-align: center;\"></i>
                            ";
            }
            // line 151
            echo "                            
                        </a>
                        <div class=\"carousel-caption\">
                            <h5><a href=\"http://dx.doi.org/";
            // line 154
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "doi", array()), "html", null, true);
            echo "\" target=\"blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</a></h5>
                        </div>                    
                    </div>
                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "                </div>
                
                <a class=\"left carousel-control\" href=\"#sliderprincipal\" role=\"button\" data-slide=\"prev\">
                    <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>
                <a class=\"right carousel-control\" href=\"#sliderprincipal\" role=\"button\" data-slide=\"next\">
                    <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>            
            </div>
        </div>
        
        <div class=\"col-xs-12 col-sm-7 col-md-7 col-lg-7\">
            <!--<h2>The hub for managing and sharing research data at the University of Sheffield</h2>--> 
            <p>ORDA (Online Research Data) allows you to find, publish and share datasets, software code, reports, creative works, presentations, posters and much more.</p>
            <p>Journal and conference papers are available through <a href=\"http://eprints.whiterose.ac.uk/\" target=\"_blank\">White Rose Research Online</a>. University of Sheffield researchers can deposit these outputs through <a href=\"http://www.sheffield.ac.uk/ris/systems/mypublications\" target=\"_blank\">myPublications</a>.</p>
            <p><a class=\"btn btn-warning btn-sm\" href=\"http://sheffield.ac.uk/library/rdm\" target=\"blank\" role=\"button\">More about Research Data Management</a></p>
        </div>
    </div>
    
";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 158,  234 => 154,  229 => 151,  223 => 150,  221 => 149,  218 => 148,  204 => 146,  202 => 145,  198 => 144,  191 => 143,  174 => 142,  40 => 11,  31 => 4,  28 => 3,  11 => 1,);
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
    
    <div  class=\"row text-left\" style=\"padding-left: 10px; padding-bottom: 10px;\">
        <h1>The hub for managing and sharing research data at <b>The University of Sheffield </b></h1>
    </div>
    
    <div class=\"row text-left\" style=\"padding-left: 0px;\">
        <div class=\"col-xs-12 hero-feature\" style=\"padding-left: 5px;\">
        {% include 'partials/search_bar.twig' %} 
        </div>    
    </div>
    
    <div class=\"row text-left hidden-xs hidden-sm\">
        <div class=\"col-md-12 hero-feature\">
            
            <div style=\"width: 1%; display:inline-block;\"></div>
            
            <div style=\"width: 19%; display:inline-block;\">
                <div class=\"thumbnail div-faculties\">
                    <a href=\"/groups/list/2754\">
                    <img src=\"img/arts.png\" alt=\"\">
                    <div class=\"text-center\">
                        <h6><b>Arts and<br>Humanities</b></h6>
                    </div>
                    </a>
                </div>
            </div>
        
            <div style=\"width: 19%; display:inline-block;\">
                <div class=\"thumbnail div-faculties\">
                    <a href=\"/groups/list/2622\">
                    <img src=\"img/engineering.png\" alt=\"\">
                    <div class=\"text-center\">
                        <h6><b>Engineering<br>&nbsp</b></h6>
                    </div>
                    </a>
                </div>
            </div>
        
            <div style=\"width: 19%; display:inline-block;\">
                <div class=\"thumbnail div-faculties\">
                    <a href=\"/groups/list/2670\">
                    <img src=\"img/medicine.png\" alt=\"\">
                    <div class=\"text-center\">
                        <h6><b>Medicine Dentistry & Health</b></h6>
                    </div>
                    </a>
                </div>
            </div>
            
            <div style=\"width: 19%; display:inline-block;\">
                <div class=\"thumbnail div-faculties\">
                    <a href=\"/groups/list/2712\">
                    <img src=\"img/social_science.png\" alt=\"\">
                    <div class=\"text-center\">
                        <h6><b>Social Sciences<br>&nbsp</b></h6>
                    </div>
                    </a>
                </div>
            </div>
                        
            <div style=\"width: 19%; display:inline-block;\">
                <div class=\"thumbnail div-faculties\">
                    <a href=\"/groups/list/2646\">
                    <img src=\"img/science.png\" alt=\"\">
                    <div class=\"text-center\">
                        <h6><b>Science<br>&nbsp</b></h6>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"row text-center hidden-lg hidden-md\">
        <div class=\"col-sm-6 col-xs-6 hero-feature\">
            <div class=\"thumbnail div-faculties\">
                <a href=\"/groups/list/2754\">
                <img src=\"img/arts.png\" alt=\"\">
                <div class=\"caption\">
                    <h5><b>Arts and<br />Humanities</b></h5>
                </div>
                </a>
            </div>
        </div>
    
        <div class=\"col-sm-6 col-xs-6 hero-feature\">
            <div class=\"thumbnail div-faculties\">
                <a href=\"/groups/list/2622\">
                <img src=\"img/engineering.png\" alt=\"\">
                <div class=\"caption\">
                    <h5><b>Engineering<br>&nbsp</b></h5>
                </div>
                </a>
            </div>
        </div>
    
        <div class=\"col-sm-6 col-xs-6 hero-feature\">
            <div class=\"thumbnail div-faculties\">
                <a href=\"/groups/list/2670\">
                <img src=\"img/medicine.png\" alt=\"\">
                <div class=\"caption\">
                    <h5><b>Medicine Dentistry<br />& Health</b></h5>
                </div>
                </a>
            </div>
        </div>
    
        <div class=\"col-sm-6 col-xs-6 hero-feature\">
            <div class=\"thumbnail div-faculties\">
                <a href=\"/groups/list/2646\">
                <img src=\"img/science.png\" alt=\"\">
                <div class=\"caption\">
                    <h5><b>Science<br>&nbsp</b></h5>
                </div>
                </a>
            </div>
        </div>
        
        <div class=\"col-sm-6 col-xs-6 hero-feature\">
            <div class=\"thumbnail div-faculties\">
                <a href=\"/groups/list/2712\">
                <img src=\"img/social_science.png\" alt=\"\">
                <div class=\"caption\">
                    <h5><b>Social Sciences</b></h5>
                </div>
                </a>
            </div>
        </div>
        
        <div class=\"col-sm-6 col-xs-6\"></div>            
    </div>    
    
    <div class=\"row\">
        
        <div class=\"divslider col-xs-12 col-sm-5 col-md-5 col-lg-5\">
            <div id=\"sliderprincipal\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"4000\">
            
                <div class=\"carousel-inner\" role=\"listbox\">
                {% for article in page.articles_highlights %}
                    <div class=\"item {% if loop.index0 == 0 %} active {% endif %}\">
                        <a href=\"http://dx.doi.org/{{ article.doi }}\" target=\"blank\">
                            {% if article.thumb  %}
                                <img src=\"{% if article.thumb %} {{ article.thumb }} {% else %} img/no_image.png {% endif %}\" alt=\"{{ article.thumb }}\">
                            {% endif %}
                            
                            {% if article.thumb_placeholder %}
                                <i class=\"{{ article.thumb_placeholder }}\" aria-hidden=\"true\" style=\"font-size: 240px; text-align: center;\"></i>
                            {% endif %}                            
                        </a>
                        <div class=\"carousel-caption\">
                            <h5><a href=\"http://dx.doi.org/{{ article.doi }}\" target=\"blank\">{{ article.title }}</a></h5>
                        </div>                    
                    </div>
                {% endfor %}
                </div>
                
                <a class=\"left carousel-control\" href=\"#sliderprincipal\" role=\"button\" data-slide=\"prev\">
                    <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>
                <a class=\"right carousel-control\" href=\"#sliderprincipal\" role=\"button\" data-slide=\"next\">
                    <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>            
            </div>
        </div>
        
        <div class=\"col-xs-12 col-sm-7 col-md-7 col-lg-7\">
            <!--<h2>The hub for managing and sharing research data at the University of Sheffield</h2>--> 
            <p>ORDA (Online Research Data) allows you to find, publish and share datasets, software code, reports, creative works, presentations, posters and much more.</p>
            <p>Journal and conference papers are available through <a href=\"http://eprints.whiterose.ac.uk/\" target=\"_blank\">White Rose Research Online</a>. University of Sheffield researchers can deposit these outputs through <a href=\"http://www.sheffield.ac.uk/ris/systems/mypublications\" target=\"_blank\">myPublications</a>.</p>
            <p><a class=\"btn btn-warning btn-sm\" href=\"http://sheffield.ac.uk/library/rdm\" target=\"blank\" role=\"button\">More about Research Data Management</a></p>
        </div>
    </div>
    
{% endblock %}", "index.twig", "C:\\www\\figshare_orda\\app\\src\\View\\index.twig");
    }
}

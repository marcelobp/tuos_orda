<?php

/* partials/order_articles.twig */
class __TwigTemplate_c36b328ce2bcb7a3ad47e3e5a709612f6e15fc1c9e078df27ffa296d1c1541e3 extends Twig_Template
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
        echo "<h1 style=\"margin-left: 5px; float: left;\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "subtitle", array()), "html", null, true);
        echo "</h1>

<div class=\"btn-group pull-right\" style=\"margin-top: 15px\">
    ";
        // line 4
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "filter", array())) {
            // line 5
            echo "        <div class=\"btn-group\">
            <button data-toggle=\"dropdown\" class=\"btn btn-default dropdown-toggle\"> <b>Filter: </b> ";
            // line 6
            if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "filter_type", array()) == "all")) {
                echo " All types ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "filter_type", array()), "html", null, true);
                echo " ";
            }
            echo " <span aria-hidden=\"true\" class=\"glyphicon glyphicon-filter\"></span> </button>
            <ul role=\"menu\" class=\"dropdown-menu pull-right\">
                <li class=\"";
            // line 8
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "ajax_order", array())) {
                echo "filter_type_ajax";
            } else {
                echo "filter_type";
            }
            echo "\" value=\"all\" id=\"all\">
                    <a href=\"#\"><span aria-hidden=\"true\" class=\"glyphicon glyphicon-ok btn-xs ";
            // line 9
            if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "filter_type", array()) == "all")) {
                echo " active ";
            } else {
                echo " invisible ";
            }
            echo "\"></span>All types</a>
                </li>
                <li class=\"dropdown-header\"></li>
                <li class=\"divider\"></li>
                <li class=\"";
            // line 13
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "ajax_order", array())) {
                echo "filter_type_ajax";
            } else {
                echo "filter_type";
            }
            echo "\" value=\"Figure\" id=\"Figure\">
                    <a href=\"#\"><span aria-hidden=\"true\" class=\"glyphicon glyphicon-ok btn-xs ";
            // line 14
            if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "filter_type", array()) == "Figure")) {
                echo " active ";
            } else {
                echo " invisible ";
            }
            echo "\"></span>Figure</a>
                </li>
                <li class=\"";
            // line 16
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "ajax_order", array())) {
                echo "filter_type_ajax";
            } else {
                echo "filter_type";
            }
            echo "\" value=\"Media\" id=\"Media\">
                    <a href=\"#\"><span aria-hidden=\"true\" class=\"glyphicon glyphicon-ok btn-xs ";
            // line 17
            if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "filter_type", array()) == "Media")) {
                echo " active ";
            } else {
                echo " invisible ";
            }
            echo "\"></span>Media</a>
                </li>
                <li class=\"";
            // line 19
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "ajax_order", array())) {
                echo "filter_type_ajax";
            } else {
                echo "filter_type";
            }
            echo "\" value=\"Dataset\" id=\"Dataset\">
                    <a href=\"#\"><span aria-hidden=\"true\" class=\"glyphicon glyphicon-ok btn-xs ";
            // line 20
            if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "filter_type", array()) == "Dataset")) {
                echo " active ";
            } else {
                echo " invisible ";
            }
            echo "\"></span>Dataset</a>
                </li>
                <li class=\"";
            // line 22
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "ajax_order", array())) {
                echo "filter_type_ajax";
            } else {
                echo "filter_type";
            }
            echo "\" value=\"Fileset\" id=\"Fileset\">
                    <a href=\"#\"><span aria-hidden=\"true\" class=\"glyphicon glyphicon-ok btn-xs ";
            // line 23
            if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "filter_type", array()) == "Fileset")) {
                echo " active ";
            } else {
                echo " invisible ";
            }
            echo "\"></span>Fileset</a>
                </li>
                <li class=\"";
            // line 25
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "ajax_order", array())) {
                echo "filter_type_ajax";
            } else {
                echo "filter_type";
            }
            echo "\" value=\"Poster\" id=\"Poster\">
                    <a href=\"#\"><span aria-hidden=\"true\" class=\"glyphicon glyphicon-ok btn-xs ";
            // line 26
            if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "filter_type", array()) == "Poster")) {
                echo " active ";
            } else {
                echo " invisible ";
            }
            echo "\"></span>Poster</a>
                </li>
                <li class=\"";
            // line 28
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "ajax_order", array())) {
                echo "filter_type_ajax";
            } else {
                echo "filter_type";
            }
            echo "\" value=\"Paper\" id=\"Paper\">
                    <a href=\"#\"><span aria-hidden=\"true\" class=\"glyphicon glyphicon-ok btn-xs ";
            // line 29
            if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "filter_type", array()) == "Paper")) {
                echo " active ";
            } else {
                echo " invisible ";
            }
            echo "\"></span>Paper</a>
                </li>
                <li class=\"";
            // line 31
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "ajax_order", array())) {
                echo "filter_type_ajax";
            } else {
                echo "filter_type";
            }
            echo "\" value=\"Presentation\" id=\"Presentation\">
                    <a href=\"#\"><span aria-hidden=\"true\" class=\"glyphicon glyphicon-ok btn-xs ";
            // line 32
            if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "filter_type", array()) == "Presentation")) {
                echo " active ";
            } else {
                echo " invisible ";
            }
            echo "\"></span>Presentation</a>
                </li>
                <li class=\"";
            // line 34
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "ajax_order", array())) {
                echo "filter_type_ajax";
            } else {
                echo "filter_type";
            }
            echo "\" value=\"Thesis\" id=\"Thesis\">
                    <a href=\"#\"><span aria-hidden=\"true\" class=\"glyphicon glyphicon-ok btn-xs ";
            // line 35
            if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "filter_type", array()) == "Thesis")) {
                echo " active ";
            } else {
                echo " invisible ";
            }
            echo "\"></span>Thesis</a>
                </li>
                <li class=\"";
            // line 37
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "ajax_order", array())) {
                echo "filter_type_ajax";
            } else {
                echo "filter_type";
            }
            echo "\" value=\"Code\" id=\"Code\">
                    <a href=\"#\"><span aria-hidden=\"true\" class=\"glyphicon glyphicon-ok btn-xs ";
            // line 38
            if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "filter_type", array()) == "Code")) {
                echo " active ";
            } else {
                echo " invisible ";
            }
            echo "\"></span>Code</a>
                </li>
                <li class=\"";
            // line 40
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "ajax_order", array())) {
                echo "filter_type_ajax";
            } else {
                echo "filter_type";
            }
            echo "\" value=\"Metadata record\" id=\"Metadata record\">
                    <a href=\"#\"><span aria-hidden=\"true\" class=\"glyphicon glyphicon-ok btn-xs ";
            // line 41
            if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "filter_type", array()) == "Metadata record")) {
                echo " active ";
            } else {
                echo " invisible ";
            }
            echo "\"></span>Metadata record</a>
                </li>
            </ul>
        </div>
    ";
        }
        // line 46
        echo "    <div class=\"btn-group\">
        <button data-toggle=\"dropdown\" class=\"btn btn-default dropdown-toggle\" style=\"margin-left: 5px !important;\"><b>Sort:</b> ";
        // line 47
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "order_by", array()) == "published_date")) {
            echo " Date published ";
        } else {
            echo " Date modified ";
        }
        echo "<span aria-hidden=\"true\" ";
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "order_direction", array()) == "asc")) {
            echo " class=\"glyphicon glyphicon glyphicon-arrow-up\" ";
        } else {
            echo " class=\"glyphicon glyphicon glyphicon-arrow-down\" ";
        }
        echo "></span></button> 
        <ul role=\"menu\" class=\"dropdown-menu pull-right\">
            <li class=\"dropdown-header\"></li>
            <li class=\"";
        // line 50
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "ajax_order", array())) {
            echo "order_by_ajax";
        } else {
            echo "order_by";
        }
        echo "\" value=\"published_date\" id=\"published_date\">
                <a href=\"#\"><span aria-hidden=\"true\" class=\"glyphicon glyphicon-ok btn-xs ";
        // line 51
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "order_by", array()) == "published_date")) {
            echo " active ";
        } else {
            echo " invisible ";
        }
        echo "\"></span>Date published</a>
            </li>
            <li class=\"";
        // line 53
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "ajax_order", array())) {
            echo "order_by_ajax";
        } else {
            echo "order_by";
        }
        echo "\" value=\"modified_date\" id=\"modified_date\">
                <a href=\"#\"><span aria-hidden=\"true\" class=\"glyphicon glyphicon-ok btn-xs ";
        // line 54
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "order_by", array()) == "modified_date")) {
            echo " active ";
        } else {
            echo " invisible ";
        }
        echo "\"></span>Date modified</a>
            </li>                        
            <li class=\"divider\"></li>
            <li class=\"dropdown-header\"></li>
            <li class=\"";
        // line 58
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "ajax_order", array())) {
            echo "order_ajax";
        } else {
            echo "order";
        }
        echo "\" value=\"asc\" id=\"asc\">
                <a href=\"#\"><span aria-hidden=\"true\" class=\"glyphicon glyphicon-ok btn-xs ";
        // line 59
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "order_direction", array()) == "asc")) {
            echo " active ";
        } else {
            echo " invisible ";
        }
        echo "\"></span>Ascending</a>
            </li>
            <li class=\"";
        // line 61
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "ajax_order", array())) {
            echo "order_ajax";
        } else {
            echo "order";
        }
        echo "\" value=\"desc\" id=\"desc\">
                <a href=\"#\"><span aria-hidden=\"true\" class=\"glyphicon glyphicon-ok btn-xs ";
        // line 62
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "order_direction", array()) == "desc")) {
            echo " active ";
        } else {
            echo " invisible ";
        }
        echo "\"></span>Descending</a>
            </li>                        
        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "partials/order_articles.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 62,  306 => 61,  297 => 59,  289 => 58,  278 => 54,  270 => 53,  261 => 51,  253 => 50,  237 => 47,  234 => 46,  222 => 41,  214 => 40,  205 => 38,  197 => 37,  188 => 35,  180 => 34,  171 => 32,  163 => 31,  154 => 29,  146 => 28,  137 => 26,  129 => 25,  120 => 23,  112 => 22,  103 => 20,  95 => 19,  86 => 17,  78 => 16,  69 => 14,  61 => 13,  50 => 9,  42 => 8,  31 => 6,  28 => 5,  26 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1 style=\"margin-left: 5px; float: left;\">{{ page.subtitle }}</h1>

<div class=\"btn-group pull-right\" style=\"margin-top: 15px\">
    {% if page.filter %}
        <div class=\"btn-group\">
            <button data-toggle=\"dropdown\" class=\"btn btn-default dropdown-toggle\"> <b>Filter: </b> {% if page.filter_type == 'all' %} All types {% else %} {{page.filter_type}} {% endif %} <span aria-hidden=\"true\" class=\"glyphicon glyphicon-filter\"></span> </button>
            <ul role=\"menu\" class=\"dropdown-menu pull-right\">
                <li class=\"{% if page.ajax_order %}filter_type_ajax{% else %}filter_type{% endif %}\" value=\"all\" id=\"all\">
                    <a href=\"#\"><span aria-hidden=\"true\" class=\"glyphicon glyphicon-ok btn-xs {% if page.filter_type == 'all' %} active {% else %} invisible {% endif %}\"></span>All types</a>
                </li>
                <li class=\"dropdown-header\"></li>
                <li class=\"divider\"></li>
                <li class=\"{% if page.ajax_order %}filter_type_ajax{% else %}filter_type{% endif %}\" value=\"Figure\" id=\"Figure\">
                    <a href=\"#\"><span aria-hidden=\"true\" class=\"glyphicon glyphicon-ok btn-xs {% if page.filter_type == 'Figure' %} active {% else %} invisible {% endif %}\"></span>Figure</a>
                </li>
                <li class=\"{% if page.ajax_order %}filter_type_ajax{% else %}filter_type{% endif %}\" value=\"Media\" id=\"Media\">
                    <a href=\"#\"><span aria-hidden=\"true\" class=\"glyphicon glyphicon-ok btn-xs {% if page.filter_type == 'Media' %} active {% else %} invisible {% endif %}\"></span>Media</a>
                </li>
                <li class=\"{% if page.ajax_order %}filter_type_ajax{% else %}filter_type{% endif %}\" value=\"Dataset\" id=\"Dataset\">
                    <a href=\"#\"><span aria-hidden=\"true\" class=\"glyphicon glyphicon-ok btn-xs {% if page.filter_type == 'Dataset' %} active {% else %} invisible {% endif %}\"></span>Dataset</a>
                </li>
                <li class=\"{% if page.ajax_order %}filter_type_ajax{% else %}filter_type{% endif %}\" value=\"Fileset\" id=\"Fileset\">
                    <a href=\"#\"><span aria-hidden=\"true\" class=\"glyphicon glyphicon-ok btn-xs {% if page.filter_type == 'Fileset' %} active {% else %} invisible {% endif %}\"></span>Fileset</a>
                </li>
                <li class=\"{% if page.ajax_order %}filter_type_ajax{% else %}filter_type{% endif %}\" value=\"Poster\" id=\"Poster\">
                    <a href=\"#\"><span aria-hidden=\"true\" class=\"glyphicon glyphicon-ok btn-xs {% if page.filter_type == 'Poster' %} active {% else %} invisible {% endif %}\"></span>Poster</a>
                </li>
                <li class=\"{% if page.ajax_order %}filter_type_ajax{% else %}filter_type{% endif %}\" value=\"Paper\" id=\"Paper\">
                    <a href=\"#\"><span aria-hidden=\"true\" class=\"glyphicon glyphicon-ok btn-xs {% if page.filter_type == 'Paper' %} active {% else %} invisible {% endif %}\"></span>Paper</a>
                </li>
                <li class=\"{% if page.ajax_order %}filter_type_ajax{% else %}filter_type{% endif %}\" value=\"Presentation\" id=\"Presentation\">
                    <a href=\"#\"><span aria-hidden=\"true\" class=\"glyphicon glyphicon-ok btn-xs {% if page.filter_type == 'Presentation' %} active {% else %} invisible {% endif %}\"></span>Presentation</a>
                </li>
                <li class=\"{% if page.ajax_order %}filter_type_ajax{% else %}filter_type{% endif %}\" value=\"Thesis\" id=\"Thesis\">
                    <a href=\"#\"><span aria-hidden=\"true\" class=\"glyphicon glyphicon-ok btn-xs {% if page.filter_type == 'Thesis' %} active {% else %} invisible {% endif %}\"></span>Thesis</a>
                </li>
                <li class=\"{% if page.ajax_order %}filter_type_ajax{% else %}filter_type{% endif %}\" value=\"Code\" id=\"Code\">
                    <a href=\"#\"><span aria-hidden=\"true\" class=\"glyphicon glyphicon-ok btn-xs {% if page.filter_type == 'Code' %} active {% else %} invisible {% endif %}\"></span>Code</a>
                </li>
                <li class=\"{% if page.ajax_order %}filter_type_ajax{% else %}filter_type{% endif %}\" value=\"Metadata record\" id=\"Metadata record\">
                    <a href=\"#\"><span aria-hidden=\"true\" class=\"glyphicon glyphicon-ok btn-xs {% if page.filter_type == 'Metadata record' %} active {% else %} invisible {% endif %}\"></span>Metadata record</a>
                </li>
            </ul>
        </div>
    {% endif %}
    <div class=\"btn-group\">
        <button data-toggle=\"dropdown\" class=\"btn btn-default dropdown-toggle\" style=\"margin-left: 5px !important;\"><b>Sort:</b> {% if page.order_by == 'published_date' %} Date published {% else %} Date modified {% endif %}<span aria-hidden=\"true\" {% if page.order_direction == 'asc' %} class=\"glyphicon glyphicon glyphicon-arrow-up\" {% else %} class=\"glyphicon glyphicon glyphicon-arrow-down\" {% endif %}></span></button> 
        <ul role=\"menu\" class=\"dropdown-menu pull-right\">
            <li class=\"dropdown-header\"></li>
            <li class=\"{% if page.ajax_order %}order_by_ajax{% else %}order_by{% endif %}\" value=\"published_date\" id=\"published_date\">
                <a href=\"#\"><span aria-hidden=\"true\" class=\"glyphicon glyphicon-ok btn-xs {% if page.order_by == 'published_date' %} active {% else %} invisible {% endif %}\"></span>Date published</a>
            </li>
            <li class=\"{% if page.ajax_order %}order_by_ajax{% else %}order_by{% endif %}\" value=\"modified_date\" id=\"modified_date\">
                <a href=\"#\"><span aria-hidden=\"true\" class=\"glyphicon glyphicon-ok btn-xs {% if page.order_by == 'modified_date' %} active {% else %} invisible {% endif %}\"></span>Date modified</a>
            </li>                        
            <li class=\"divider\"></li>
            <li class=\"dropdown-header\"></li>
            <li class=\"{% if page.ajax_order %}order_ajax{% else %}order{% endif %}\" value=\"asc\" id=\"asc\">
                <a href=\"#\"><span aria-hidden=\"true\" class=\"glyphicon glyphicon-ok btn-xs {% if page.order_direction == 'asc' %} active {% else %} invisible {% endif %}\"></span>Ascending</a>
            </li>
            <li class=\"{% if page.ajax_order %}order_ajax{% else %}order{% endif %}\" value=\"desc\" id=\"desc\">
                <a href=\"#\"><span aria-hidden=\"true\" class=\"glyphicon glyphicon-ok btn-xs {% if page.order_direction == 'desc' %} active {% else %} invisible {% endif %}\"></span>Descending</a>
            </li>                        
        </ul>
    </div>
</div>", "partials/order_articles.twig", "C:\\www\\figshare_orda\\app\\src\\View\\partials\\order_articles.twig");
    }
}

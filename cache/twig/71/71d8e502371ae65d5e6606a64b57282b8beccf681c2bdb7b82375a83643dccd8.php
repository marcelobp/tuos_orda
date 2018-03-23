<?php

/* partials/search_bar.twig */
class __TwigTemplate_018762b65284c43625336940147b3dff518b0114d12d575a5d45d0a278a11ce9 extends Twig_Template
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
        echo "<div class=\"panel panel-border panel-yellow\" style=\"margin-bottom: 20px;\">
    <div class=\"row\">
        <div class=\"col-xs-12\" style=\"margin-top:0px; text-align:center\">
            <!--<h2>Discover research from <b>The University of Sheffield</b></h2>-->
            <h3><b>Discover our research</b></h3>
        </div>   
        <div class=\"col-sm-11 col-xs-10\">
            <form class=\"form-horizontal\" role=\"search\" name=\"searchForm\" id=\"searchForm\" method=\"post\" action=\"/articles/search\">
                <div class=\"col-sm-2 hidden-xs\" style=\"margin-top:0px; text-align:right\"><h4>Search:</h4></div>
                <div class=\"input-group\" style=\"padding-bottom:15px\">
                    <div class=\"input-group-btn\">
                        <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                            <span id=\"search_combo\">";
        // line 13
        if ($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "search_by_show", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "search_by_show", array()), "html", null, true);
        } else {
            echo "All fields";
        }
        echo "</span> <span class=\"caret\"></span>
                        </button>
                        <ul class=\"dropdown-menu\" id=\"search_by_menu\" role=\"menu\">
                            <li><a href=\"#\" id=\"\">All fields</a></li>
                            <li class=\"divider\"></li>
                            <li ";
        // line 18
        if (($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "search_by", array()) == "author")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"#\" id=\"author\">Author</a></li>
                            <li ";
        // line 19
        if (($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "search_by", array()) == "title")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"#\" id=\"title\">Title</a></li>
                            <li ";
        // line 20
        if (($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "search_by", array()) == "description")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"#\" id=\"description\">Description</a></li>                            
                            <li ";
        // line 21
        if (($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "search_by", array()) == "tag")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"#\" id=\"tag\">Tag</a></li>
                            <li ";
        // line 22
        if (($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "search_by", array()) == "category")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"#\" id=\"category\">Category</a></li>                            
                            <li ";
        // line 23
        if (($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "search_by", array()) == "extension")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"#\" id=\"extension\">File extension</a></li>
                            <li ";
        // line 24
        if (($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "search_by", array()) == "orcid")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"#\" id=\"\">ORCID</a></li>
                            <li ";
        // line 25
        if (($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "search_by", array()) == "doi")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"#\" id=\"doi\">DOI</a></li>
                        </ul>
                    </div>                            
                    <input type=\"text\" class=\"form-control\" name=\"search_term\" id=\"search_term\" placeholder=\"Search term...\" value=\"";
        // line 28
        if ((isset($context["home"]) ? $context["home"] : null)) {
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "search_term", array()), "html", null, true);
        }
        echo "\">
                    <div class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\" id=\"btn-search\"><i class=\"glyphicon glyphicon-search\"></i></button>
                    </div>
                    <input type=\"hidden\" name=\"search_by\" id=\"search_by\" value=\"\">
                </div>
            </form>                    
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "partials/search_bar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 28,  87 => 25,  81 => 24,  75 => 23,  69 => 22,  63 => 21,  57 => 20,  51 => 19,  45 => 18,  33 => 13,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"panel panel-border panel-yellow\" style=\"margin-bottom: 20px;\">
    <div class=\"row\">
        <div class=\"col-xs-12\" style=\"margin-top:0px; text-align:center\">
            <!--<h2>Discover research from <b>The University of Sheffield</b></h2>-->
            <h3><b>Discover our research</b></h3>
        </div>   
        <div class=\"col-sm-11 col-xs-10\">
            <form class=\"form-horizontal\" role=\"search\" name=\"searchForm\" id=\"searchForm\" method=\"post\" action=\"/articles/search\">
                <div class=\"col-sm-2 hidden-xs\" style=\"margin-top:0px; text-align:right\"><h4>Search:</h4></div>
                <div class=\"input-group\" style=\"padding-bottom:15px\">
                    <div class=\"input-group-btn\">
                        <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                            <span id=\"search_combo\">{% if session.search_by_show %}{{ session.search_by_show }}{% else %}All fields{% endif %}</span> <span class=\"caret\"></span>
                        </button>
                        <ul class=\"dropdown-menu\" id=\"search_by_menu\" role=\"menu\">
                            <li><a href=\"#\" id=\"\">All fields</a></li>
                            <li class=\"divider\"></li>
                            <li {% if session.search_by == 'author' %}class=\"active\"{% endif %}><a href=\"#\" id=\"author\">Author</a></li>
                            <li {% if session.search_by == 'title' %}class=\"active\"{% endif %}><a href=\"#\" id=\"title\">Title</a></li>
                            <li {% if session.search_by == 'description' %}class=\"active\"{% endif %}><a href=\"#\" id=\"description\">Description</a></li>                            
                            <li {% if session.search_by == 'tag' %}class=\"active\"{% endif %}><a href=\"#\" id=\"tag\">Tag</a></li>
                            <li {% if session.search_by == 'category' %}class=\"active\"{% endif %}><a href=\"#\" id=\"category\">Category</a></li>                            
                            <li {% if session.search_by == 'extension' %}class=\"active\"{% endif %}><a href=\"#\" id=\"extension\">File extension</a></li>
                            <li {% if session.search_by == 'orcid' %}class=\"active\"{% endif %}><a href=\"#\" id=\"\">ORCID</a></li>
                            <li {% if session.search_by == 'doi' %}class=\"active\"{% endif %}><a href=\"#\" id=\"doi\">DOI</a></li>
                        </ul>
                    </div>                            
                    <input type=\"text\" class=\"form-control\" name=\"search_term\" id=\"search_term\" placeholder=\"Search term...\" value=\"{% if home %}{% else %}{{ session.search_term }}{% endif %}\">
                    <div class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\" id=\"btn-search\"><i class=\"glyphicon glyphicon-search\"></i></button>
                    </div>
                    <input type=\"hidden\" name=\"search_by\" id=\"search_by\" value=\"\">
                </div>
            </form>                    
        </div>
    </div>
</div>", "partials/search_bar.twig", "C:\\www\\figshare_orda\\app\\src\\View\\partials\\search_bar.twig");
    }
}

<?php

/* layout.twig */
class __TwigTemplate_ecf714e981ffe5540382d1d354f8d168e267b5fe6b490e468b8f281f8182677a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"ORDA (Online Research Data) - The hub for managing and sharing research data at the University of Sheffield\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>The University of Sheffield -  (Online Research Data) ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "development", array()), "html", null, true);
        echo "</title>

    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">
    
    <!-- CSS Style (https://src.shef.ac.uk/pages/cs1jec/jekyll-pattern-library/) -->
    <link rel=\"stylesheet\" href=\"/css/style.css\" type='text/css'>
    
    <!-- Customized CSS Style -->
    <link rel=\"stylesheet\" href=\"/css/style_customized.css\" type='text/css'>
    <link rel=\"stylesheet\" href=\"/css/bootstrap-treeview.css\" type='text/css'>
    
    <!-- Lato Font by Google -->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Lato\">
    
    <!-- Favicon -->
    <link rel=\"icon\" href=\"/img/favicon.ico\" />
    
    <!-- Fonts Awesome -->
    <script src=\"https://use.fontawesome.com/4272323b82.js\"></script>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type=\"application/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <script type=\"application/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.4.0/clipboard.min.js\"></script>
    <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
    
    <!--  all Java Script needed -->    
    <script type=\"text/javascript\" src=\"/js/bootstrap.min.js\"></script>
    <script type=\"text/javascript\" src=\"/js/validator.js\"></script>
    <script type=\"text/javascript\" src=\"/js/script.js\"></script>
    <script type=\"text/javascript\" src=\"/js/bootstrap-treeview.js\"></script>
    <script type=\"text/javascript\" src=\"/js/typeahead.bundle.js\"></script>
    
    <!-- Google Analytics -->
    ";
        // line 44
        if ((isset($context["qa_system"]) ? $context["qa_system"] : null)) {
            // line 45
            echo "        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics_debug.js','ga');

          window.ga_debug = {trace: true};
          ga('create', 'UA-91097129-1', 'auto');
          
          //if (location.hostname == 'www.orda') {
              //ga('set', 'sendHitTask', null);
          //}

          ga('send', 'pageview');

          var trackOutboundLink = function(url) {
            ga('send', 'event', 'outbound', 'click', url, {
        \t   'transport': 'beacon',
        \t   'hitCallback': function(){document.location = url;}
        \t });
          }          
        </script>
    ";
        } else {
            // line 68
            echo "        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        
          ga('create', 'UA-91097129-1', 'auto');
          ga('send', 'pageview');

          var trackOutboundLink = function(url) {
              ga('send', 'event', 'outbound', 'click', url, {
                 'transport': 'beacon',
                 'hitCallback': function(){document.location = url;}
               });
            }          
        </script>
    ";
        }
        // line 84
        echo "    
    <!-- ./Google Analytics -->
</head>

<body class=\"theme-blue\">
    <!-- header -->
    <header>
        <div class=\"headcontainer\">
            <div class=\"logo\"><a href=\"/\"><img src=\"https://sheffield.ac.uk/branding/webapps/0.7.0/assets/logo.svg\" alt=\"The University of Sheffield.\" class=\"respImg\"></a></div>
            <div class=\"page-title alignleft\">
                <span class=\"unilibtit hide-on-mobile\">The University Library.<br /></span>
                <em>ORDA (Online research data)</em>
            </div>
        </div>
    </header>
    <!-- /.header --> 
              
    <!-- main container -->
    <div class=\"container\" style=\"margin-top: 10px; margin-bottom: 150px\">

        <nav role=\"navigation\" class=\"navbar navbar-default\">
            <div class=\"col-xs-5\">
                <!-- Display on mobile only -->
                <nav class=\"mobile-only\">
                    <div class=\"menu-icon\" onclick=\"toggle('mobile-nav');\" style=\"color: #828282\">Browse ORDA</span></div>
                    <ul id=\"mobile-nav\" class=\"mobile-nav\" onclick=\"toggle('mobile-nav');\">
                        <div class=\"list-group\">
                            <a href=\"/articles/list/desc\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-list-alt\"></span> &nbsp; All items</a>                        
                            <a href=\"#\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-education\"></span> &nbsp; Faculties</a>
                            <div class=\"\" style=\"margin-left: 5pt; margin-top: 1pt; margin-bottom: 0pt;\">
                                <a href=\"/groups/list/2754\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-chevron-right small\" aria-hidden=\"true\"></span> Arts and Humanities</a>
                                <a href=\"/groups/list/2622\" class=\"list-group-item \"><span class=\"glyphicon glyphicon-chevron-right small\" aria-hidden=\"true\"></span> Engineering</a>
                                <a href=\"/groups/list/2670\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-chevron-right small\" aria-hidden=\"true\"></span> Medicine Dentistry & Health</a>
                                <a href=\"/groups/list/2646\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-chevron-right small\" aria-hidden=\"true\"></span> Science</a>
                                <a href=\"/groups/list/2712\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-chevron-right small\" aria-hidden=\"true\"></span> Social Sciences</a>
                            </div>
                            <a href=\"/categories/\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-list-alt\"></span> &nbsp; Categories</a>
                            <a href=\"/conferences/\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-list-alt\"></span> &nbsp; Conferences</a>
                            <a href=\"/institutes/\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-list-alt\"></span> &nbsp; Institutes</a>
                            <a href=\"/visualisations/\" class=\"list-group-item ";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "active_menu_vis", array()), "html", null, true);
        echo "\" title=\"\"><span class=\"glyphicon glyphicon-list-alt\"></span> &nbsp; Visualisation Showcase</a>
                        </div>                    
                    </ul>
                    ";
        // line 126
        if ((isset($context["qa_system"]) ? $context["qa_system"] : null)) {
            echo "  
                        <span style=\"margin-left: 5pt;\"><font color=\"#ff0000\" size=\"5pt\"><b>";
            // line 127
            echo twig_escape_filter($this->env, (isset($context["qa_system"]) ? $context["qa_system"] : null), "html", null, true);
            echo "</b></font></span>
                    ";
        }
        // line 128
        echo "                    
                </nav>   
                <!-- /.Display on mobile only -->
            </div>
            <div class=\"col-xs-7\">
                <div class=\"navbar-header\">
                    <button type=\"button\" data-target=\"#navbarCollapse\" data-toggle=\"collapse\" class=\"navbar-toggle\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>
                <div id=\"navbarCollapse\" class=\"collapse navbar-collapse\" >
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li class=\"active\"><a href=\"/\" class=\"active\">Home</a></li>
                        <li class=\"navbar_links\"><a href=\"http://sheffield.ac.uk/library/rdm/orda\" target=\"_blank\" class=\"active\">About</a></li>
                        ";
        // line 145
        if ((isset($context["qa_system"]) ? $context["qa_system"] : null)) {
            // line 146
            echo "                            <li><a href=\"https://sheffield.figsh.com\" target=\"_blank\">Upload</a></li>
                        ";
        } else {
            // line 148
            echo "                            <li><a href=\"https://login.figshare.com/Shibboleth.sso/Login?entityID=https://idp.shef.ac.uk/shibboleth\" target=\"_blank\">Upload</a></li>
                        ";
        }
        // line 150
        echo "                        <li><a href=\"http://sheffield.ac.uk/library/rdm/orda1\" target=\"_blank\">Help</a></li>
                        <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#feedbackModal\">Feedback</a></li>
                        ";
        // line 152
        if ((isset($context["qa_system"]) ? $context["qa_system"] : null)) {
            echo "  
                            <span style=\"margin-left: 15pt; margin-top: 15pt\"><font color=\"#ff0000\" size=\"5pt\"><b>";
            // line 153
            echo twig_escape_filter($this->env, (isset($context["qa_system"]) ? $context["qa_system"] : null), "html", null, true);
            echo "</b></font></span>
                        ";
        }
        // line 155
        echo "                    </ul>
                    
                                    
                </div>
            </div>
        </nav>

        ";
        // line 162
        if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "left_menu_disable", array())) {
            // line 163
            echo "            <div class=\"col-sm-3 col-xs-12 hidden-xs\" style=\"padding-left: 0px; padding-right: 10px;\">
                <div class=\"panel panel-primary panel-border\" id=\"accordion\">
                    <div class=\"panel-heading\">Browse ORDA</div>
                    <div class=\"list-group\">
                        <a href=\"/articles/list/desc/published_date/all\" class=\"list-group-item ";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "active_menu_title", array()), "html", null, true);
            echo "\" title=\"\"><img src=\"/img/Title.png\">&nbsp; All items</a>                
                        <a data-toggle=\"collapse\" class=\"list-group-item\" data-parent=\"#accordion\" href=\"#collapseOne\"><img src=\"/img/Faculties.png\">&nbsp; Faculties</a>
                        <div id=\"collapseOne\" class=\"panel-collapse collapse list-group ";
            // line 169
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collapse_in", array()), "html", null, true);
            echo "\" style=\"margin-left: 5pt; margin-top: 1pt\">
                            <a href=\"/groups/list/2754\" class=\"list-group-item ";
            // line 170
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "active_2754", array()), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-chevron-right small\" aria-hidden=\"true\"></span> Arts and Humanities</a>
                            <a href=\"/groups/list/2622\" class=\"list-group-item ";
            // line 171
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "active_2622", array()), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-chevron-right small\" aria-hidden=\"true\"></span> Engineering</a>
                            <a href=\"/groups/list/2670\" class=\"list-group-item ";
            // line 172
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "active_2670", array()), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-chevron-right small\" aria-hidden=\"true\"></span> Medicine Dentistry & Health</a>
                            <a href=\"/groups/list/2646\" class=\"list-group-item ";
            // line 173
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "active_2646", array()), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-chevron-right small\" aria-hidden=\"true\"></span> Science</a>
                            <a href=\"/groups/list/2712\" class=\"list-group-item ";
            // line 174
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "active_2712", array()), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-chevron-right small\" aria-hidden=\"true\"></span> Social Sciences</a>
                        </div>
                        <!-- <a href=\"#\" class=\"list-group-item ";
            // line 176
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "active_menu_author", array()), "html", null, true);
            echo "\" title=\"\"><span class=\"glyphicon glyphicon-user\"></span> &nbsp; Authors</a> -->
                        <a href=\"/categories/\" class=\"list-group-item ";
            // line 177
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "active_menu_cat", array()), "html", null, true);
            echo "\" title=\"\"><img src=\"/img/Category.png\" width=\"28px\">&nbsp; Categories</a>
                        <a href=\"/conferences/\" class=\"list-group-item ";
            // line 178
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "active_menu_conf", array()), "html", null, true);
            echo "\" title=\"\"><img src=\"/img/Conference.png\">&nbsp; Conferences</a>
                        <a href=\"/institutes/\" class=\"list-group-item ";
            // line 179
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "active_menu_inst", array()), "html", null, true);
            echo "\" title=\"\"><img src=\"/img/Institutes.png\">&nbsp; Institutes</a>
                        <a href=\"/visualisations/\" class=\"list-group-item ";
            // line 180
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "active_menu_vis", array()), "html", null, true);
            echo "\" title=\"\"><img src=\"/img/Visualisation.png\" width=\"28px\">&nbsp; Visualisation Showcase</a>
                    </div>
                </div>
                    
                <div class=\"panel panel-primary panel-border\">
                    <div class=\"panel-heading\">Recently Added</div>
                    <span class=\"recently_added\"><center><img src='/img/loader.gif' alt='loading...' style='padding-bottom: 1em; padding-top: 1em;' /></center></span>
                </div>
                
                <script type=\"text/javascript\">
                    \$(document).ready(function () {
                        \$(\".recently_added\").load(\"/articles/recently_added\");
                    });
                </script>    
            
            </div>            
        ";
        }
        // line 197
        echo "    
        ";
        // line 198
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "left_menu_disable", array())) {
            echo " <div class=\"col-sm-12 col-xs-12\"> ";
        } else {
            echo " <div class=\"col-sm-9 col-xs-12\"> ";
        }
        // line 199
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 200
        echo "        </div>

        
        
    </div>
    <!-- /.main container -->
    
    ";
        // line 207
        $this->loadTemplate("partials/feedback.twig", "layout.twig", 207)->display($context);
        // line 208
        echo "    
    ";
        // line 209
        $this->loadTemplate("partials/footer.twig", "layout.twig", 209)->display($context);
        // line 210
        echo "            
    <!-- Read More/Less script -->    
    <script type=\"text/javascript\" src=\"/js/readmore.js\"></script>
    <script>
        \$('article').readmore({speed: 500});
    </script>
    
</body>
</html>";
    }

    // line 199
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 199,  323 => 210,  321 => 209,  318 => 208,  316 => 207,  307 => 200,  304 => 199,  298 => 198,  295 => 197,  275 => 180,  271 => 179,  267 => 178,  263 => 177,  259 => 176,  254 => 174,  250 => 173,  246 => 172,  242 => 171,  238 => 170,  234 => 169,  229 => 167,  223 => 163,  221 => 162,  212 => 155,  207 => 153,  203 => 152,  199 => 150,  195 => 148,  191 => 146,  189 => 145,  170 => 128,  165 => 127,  161 => 126,  155 => 123,  114 => 84,  95 => 68,  70 => 45,  68 => 44,  30 => 9,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"ORDA (Online Research Data) - The hub for managing and sharing research data at the University of Sheffield\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>The University of Sheffield -  (Online Research Data) {{ page.development }}</title>

    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">
    
    <!-- CSS Style (https://src.shef.ac.uk/pages/cs1jec/jekyll-pattern-library/) -->
    <link rel=\"stylesheet\" href=\"/css/style.css\" type='text/css'>
    
    <!-- Customized CSS Style -->
    <link rel=\"stylesheet\" href=\"/css/style_customized.css\" type='text/css'>
    <link rel=\"stylesheet\" href=\"/css/bootstrap-treeview.css\" type='text/css'>
    
    <!-- Lato Font by Google -->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Lato\">
    
    <!-- Favicon -->
    <link rel=\"icon\" href=\"/img/favicon.ico\" />
    
    <!-- Fonts Awesome -->
    <script src=\"https://use.fontawesome.com/4272323b82.js\"></script>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type=\"application/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <script type=\"application/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.4.0/clipboard.min.js\"></script>
    <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
    
    <!--  all Java Script needed -->    
    <script type=\"text/javascript\" src=\"/js/bootstrap.min.js\"></script>
    <script type=\"text/javascript\" src=\"/js/validator.js\"></script>
    <script type=\"text/javascript\" src=\"/js/script.js\"></script>
    <script type=\"text/javascript\" src=\"/js/bootstrap-treeview.js\"></script>
    <script type=\"text/javascript\" src=\"/js/typeahead.bundle.js\"></script>
    
    <!-- Google Analytics -->
    {% if qa_system %}
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics_debug.js','ga');

          window.ga_debug = {trace: true};
          ga('create', 'UA-91097129-1', 'auto');
          
          //if (location.hostname == 'www.orda') {
              //ga('set', 'sendHitTask', null);
          //}

          ga('send', 'pageview');

          var trackOutboundLink = function(url) {
            ga('send', 'event', 'outbound', 'click', url, {
        \t   'transport': 'beacon',
        \t   'hitCallback': function(){document.location = url;}
        \t });
          }          
        </script>
    {% else %}
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        
          ga('create', 'UA-91097129-1', 'auto');
          ga('send', 'pageview');

          var trackOutboundLink = function(url) {
              ga('send', 'event', 'outbound', 'click', url, {
                 'transport': 'beacon',
                 'hitCallback': function(){document.location = url;}
               });
            }          
        </script>
    {% endif %}    
    <!-- ./Google Analytics -->
</head>

<body class=\"theme-blue\">
    <!-- header -->
    <header>
        <div class=\"headcontainer\">
            <div class=\"logo\"><a href=\"/\"><img src=\"https://sheffield.ac.uk/branding/webapps/0.7.0/assets/logo.svg\" alt=\"The University of Sheffield.\" class=\"respImg\"></a></div>
            <div class=\"page-title alignleft\">
                <span class=\"unilibtit hide-on-mobile\">The University Library.<br /></span>
                <em>ORDA (Online research data)</em>
            </div>
        </div>
    </header>
    <!-- /.header --> 
              
    <!-- main container -->
    <div class=\"container\" style=\"margin-top: 10px; margin-bottom: 150px\">

        <nav role=\"navigation\" class=\"navbar navbar-default\">
            <div class=\"col-xs-5\">
                <!-- Display on mobile only -->
                <nav class=\"mobile-only\">
                    <div class=\"menu-icon\" onclick=\"toggle('mobile-nav');\" style=\"color: #828282\">Browse ORDA</span></div>
                    <ul id=\"mobile-nav\" class=\"mobile-nav\" onclick=\"toggle('mobile-nav');\">
                        <div class=\"list-group\">
                            <a href=\"/articles/list/desc\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-list-alt\"></span> &nbsp; All items</a>                        
                            <a href=\"#\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-education\"></span> &nbsp; Faculties</a>
                            <div class=\"\" style=\"margin-left: 5pt; margin-top: 1pt; margin-bottom: 0pt;\">
                                <a href=\"/groups/list/2754\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-chevron-right small\" aria-hidden=\"true\"></span> Arts and Humanities</a>
                                <a href=\"/groups/list/2622\" class=\"list-group-item \"><span class=\"glyphicon glyphicon-chevron-right small\" aria-hidden=\"true\"></span> Engineering</a>
                                <a href=\"/groups/list/2670\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-chevron-right small\" aria-hidden=\"true\"></span> Medicine Dentistry & Health</a>
                                <a href=\"/groups/list/2646\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-chevron-right small\" aria-hidden=\"true\"></span> Science</a>
                                <a href=\"/groups/list/2712\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-chevron-right small\" aria-hidden=\"true\"></span> Social Sciences</a>
                            </div>
                            <a href=\"/categories/\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-list-alt\"></span> &nbsp; Categories</a>
                            <a href=\"/conferences/\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-list-alt\"></span> &nbsp; Conferences</a>
                            <a href=\"/institutes/\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-list-alt\"></span> &nbsp; Institutes</a>
                            <a href=\"/visualisations/\" class=\"list-group-item {{ page.active_menu_vis }}\" title=\"\"><span class=\"glyphicon glyphicon-list-alt\"></span> &nbsp; Visualisation Showcase</a>
                        </div>                    
                    </ul>
                    {% if qa_system %}  
                        <span style=\"margin-left: 5pt;\"><font color=\"#ff0000\" size=\"5pt\"><b>{{ qa_system }}</b></font></span>
                    {% endif %}                    
                </nav>   
                <!-- /.Display on mobile only -->
            </div>
            <div class=\"col-xs-7\">
                <div class=\"navbar-header\">
                    <button type=\"button\" data-target=\"#navbarCollapse\" data-toggle=\"collapse\" class=\"navbar-toggle\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>
                <div id=\"navbarCollapse\" class=\"collapse navbar-collapse\" >
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li class=\"active\"><a href=\"/\" class=\"active\">Home</a></li>
                        <li class=\"navbar_links\"><a href=\"http://sheffield.ac.uk/library/rdm/orda\" target=\"_blank\" class=\"active\">About</a></li>
                        {% if qa_system %}
                            <li><a href=\"https://sheffield.figsh.com\" target=\"_blank\">Upload</a></li>
                        {% else %}
                            <li><a href=\"https://login.figshare.com/Shibboleth.sso/Login?entityID=https://idp.shef.ac.uk/shibboleth\" target=\"_blank\">Upload</a></li>
                        {% endif %}
                        <li><a href=\"http://sheffield.ac.uk/library/rdm/orda1\" target=\"_blank\">Help</a></li>
                        <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#feedbackModal\">Feedback</a></li>
                        {% if qa_system %}  
                            <span style=\"margin-left: 15pt; margin-top: 15pt\"><font color=\"#ff0000\" size=\"5pt\"><b>{{ qa_system }}</b></font></span>
                        {% endif %}
                    </ul>
                    
                                    
                </div>
            </div>
        </nav>

        {% if not page.left_menu_disable %}
            <div class=\"col-sm-3 col-xs-12 hidden-xs\" style=\"padding-left: 0px; padding-right: 10px;\">
                <div class=\"panel panel-primary panel-border\" id=\"accordion\">
                    <div class=\"panel-heading\">Browse ORDA</div>
                    <div class=\"list-group\">
                        <a href=\"/articles/list/desc/published_date/all\" class=\"list-group-item {{ page.active_menu_title }}\" title=\"\"><img src=\"/img/Title.png\">&nbsp; All items</a>                
                        <a data-toggle=\"collapse\" class=\"list-group-item\" data-parent=\"#accordion\" href=\"#collapseOne\"><img src=\"/img/Faculties.png\">&nbsp; Faculties</a>
                        <div id=\"collapseOne\" class=\"panel-collapse collapse list-group {{ page.collapse_in }}\" style=\"margin-left: 5pt; margin-top: 1pt\">
                            <a href=\"/groups/list/2754\" class=\"list-group-item {{ page.active_2754 }}\"><span class=\"glyphicon glyphicon-chevron-right small\" aria-hidden=\"true\"></span> Arts and Humanities</a>
                            <a href=\"/groups/list/2622\" class=\"list-group-item {{ page.active_2622 }}\"><span class=\"glyphicon glyphicon-chevron-right small\" aria-hidden=\"true\"></span> Engineering</a>
                            <a href=\"/groups/list/2670\" class=\"list-group-item {{ page.active_2670 }}\"><span class=\"glyphicon glyphicon-chevron-right small\" aria-hidden=\"true\"></span> Medicine Dentistry & Health</a>
                            <a href=\"/groups/list/2646\" class=\"list-group-item {{ page.active_2646 }}\"><span class=\"glyphicon glyphicon-chevron-right small\" aria-hidden=\"true\"></span> Science</a>
                            <a href=\"/groups/list/2712\" class=\"list-group-item {{ page.active_2712 }}\"><span class=\"glyphicon glyphicon-chevron-right small\" aria-hidden=\"true\"></span> Social Sciences</a>
                        </div>
                        <!-- <a href=\"#\" class=\"list-group-item {{ page.active_menu_author }}\" title=\"\"><span class=\"glyphicon glyphicon-user\"></span> &nbsp; Authors</a> -->
                        <a href=\"/categories/\" class=\"list-group-item {{ page.active_menu_cat }}\" title=\"\"><img src=\"/img/Category.png\" width=\"28px\">&nbsp; Categories</a>
                        <a href=\"/conferences/\" class=\"list-group-item {{ page.active_menu_conf }}\" title=\"\"><img src=\"/img/Conference.png\">&nbsp; Conferences</a>
                        <a href=\"/institutes/\" class=\"list-group-item {{ page.active_menu_inst }}\" title=\"\"><img src=\"/img/Institutes.png\">&nbsp; Institutes</a>
                        <a href=\"/visualisations/\" class=\"list-group-item {{ page.active_menu_vis }}\" title=\"\"><img src=\"/img/Visualisation.png\" width=\"28px\">&nbsp; Visualisation Showcase</a>
                    </div>
                </div>
                    
                <div class=\"panel panel-primary panel-border\">
                    <div class=\"panel-heading\">Recently Added</div>
                    <span class=\"recently_added\"><center><img src='/img/loader.gif' alt='loading...' style='padding-bottom: 1em; padding-top: 1em;' /></center></span>
                </div>
                
                <script type=\"text/javascript\">
                    \$(document).ready(function () {
                        \$(\".recently_added\").load(\"/articles/recently_added\");
                    });
                </script>    
            
            </div>            
        {% endif %}
    
        {% if page.left_menu_disable %} <div class=\"col-sm-12 col-xs-12\"> {% else %} <div class=\"col-sm-9 col-xs-12\"> {% endif %}
            {% block content %} {% endblock %}
        </div>

        
        
    </div>
    <!-- /.main container -->
    
    {% include 'partials/feedback.twig' %}
    
    {% include 'partials/footer.twig' %}
            
    <!-- Read More/Less script -->    
    <script type=\"text/javascript\" src=\"/js/readmore.js\"></script>
    <script>
        \$('article').readmore({speed: 500});
    </script>
    
</body>
</html>", "layout.twig", "C:\\www\\figshare_orda\\app\\src\\View\\layout.twig");
    }
}

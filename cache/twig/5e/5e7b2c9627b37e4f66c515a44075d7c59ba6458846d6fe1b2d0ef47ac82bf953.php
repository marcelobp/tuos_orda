<?php

/* partials/citation.twig */
class __TwigTemplate_ae5ed3c12412277868a8d713ab65e87dd5c1b77f3e855c562979dbfa2882b75d extends Twig_Template
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
        echo "<!-- Citation Modal Window-->
<div class=\"modal fade\" id=\"citationModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"citationModalLabel\" aria-hidden=\"true\">

    <div id=\"confirm\"></div>
    
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
                <h4 class=\"modal-title\" id=\"citationModalLabel\">Citation Formatter</h4>
            </div>
            
            <form class=\"contact\" id=\"citationForm\" role=\"form\">
            <div class=\"modal-body\">
                <div class=\"well well-sm\">
                    <div class=\"row\">
                        <div class=\"col-xs-11\">
                            <div class=\"form-group\">
                                <label for=\"doi\">DOI</label>
                                <input type=\"text\" readonly class=\"form-control\" name=\"doi\" id=\"doi\" />
                                
                                <label for=\"format\">Select Formatting Style</label>
                                <select class=\"form-control\" name=\"format\" id=\"format\" />
                                    <option value=\"-\"></option>
                                    <option value=\"american-institute-of-physics\">AIP</option>
                                    <option value=\"apa\">APA</option>
                                    <option value=\"cell\">Cell</option>
                                    <option value=\"sage-harvard\">Harvard</option>
                                    <option value=\"modern-humanities-research-association-author-date\">MHRA Author-Date</option>
                                    <option value=\"modern-humanities-research-association\">MHRA</option>
                                    <option value=\"oscola\">OSCOLA</option>
                                    <option value=\"royal-society-of-chemistry\">RSC</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"row\" id=\"citationMessage\" style=\"display: none;\">                                
                        <div class=\"col-xs-11\">
                            <label for=\"formatedCitation\">Citation</label>
                            <textarea rows=\"5\" cols=\"9\" id=\"formatedCitation\" readonly style=\"resize: none;\"></textarea>
                            <button type=\"button\" class=\"btn btn-success pull-right\" id=\"copy-button\" data-clipboard-target=\"#formatedCitation\"><span class=\"glyphicon glyphicon-copy fa-lg\"></span>&nbsp; Copy to Clipboard</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn\" data-dismiss=\"modal\">Close</button>
                <!-- <button type=\"submit\" class=\"btn btn-primary\" id=\"btnGenerateCitation\">Format</button> -->
            </div>
            
            </form>
        </div>
    </div>
</div>
<!-- /.Citation Modal Window-->";
    }

    public function getTemplateName()
    {
        return "partials/citation.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Citation Modal Window-->
<div class=\"modal fade\" id=\"citationModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"citationModalLabel\" aria-hidden=\"true\">

    <div id=\"confirm\"></div>
    
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
                <h4 class=\"modal-title\" id=\"citationModalLabel\">Citation Formatter</h4>
            </div>
            
            <form class=\"contact\" id=\"citationForm\" role=\"form\">
            <div class=\"modal-body\">
                <div class=\"well well-sm\">
                    <div class=\"row\">
                        <div class=\"col-xs-11\">
                            <div class=\"form-group\">
                                <label for=\"doi\">DOI</label>
                                <input type=\"text\" readonly class=\"form-control\" name=\"doi\" id=\"doi\" />
                                
                                <label for=\"format\">Select Formatting Style</label>
                                <select class=\"form-control\" name=\"format\" id=\"format\" />
                                    <option value=\"-\"></option>
                                    <option value=\"american-institute-of-physics\">AIP</option>
                                    <option value=\"apa\">APA</option>
                                    <option value=\"cell\">Cell</option>
                                    <option value=\"sage-harvard\">Harvard</option>
                                    <option value=\"modern-humanities-research-association-author-date\">MHRA Author-Date</option>
                                    <option value=\"modern-humanities-research-association\">MHRA</option>
                                    <option value=\"oscola\">OSCOLA</option>
                                    <option value=\"royal-society-of-chemistry\">RSC</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"row\" id=\"citationMessage\" style=\"display: none;\">                                
                        <div class=\"col-xs-11\">
                            <label for=\"formatedCitation\">Citation</label>
                            <textarea rows=\"5\" cols=\"9\" id=\"formatedCitation\" readonly style=\"resize: none;\"></textarea>
                            <button type=\"button\" class=\"btn btn-success pull-right\" id=\"copy-button\" data-clipboard-target=\"#formatedCitation\"><span class=\"glyphicon glyphicon-copy fa-lg\"></span>&nbsp; Copy to Clipboard</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn\" data-dismiss=\"modal\">Close</button>
                <!-- <button type=\"submit\" class=\"btn btn-primary\" id=\"btnGenerateCitation\">Format</button> -->
            </div>
            
            </form>
        </div>
    </div>
</div>
<!-- /.Citation Modal Window-->", "partials/citation.twig", "C:\\www\\figshare_orda\\app\\src\\View\\partials\\citation.twig");
    }
}

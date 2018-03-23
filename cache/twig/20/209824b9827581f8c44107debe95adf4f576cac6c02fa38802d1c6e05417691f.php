<?php

/* partials/feedback.twig */
class __TwigTemplate_21d962fef7b51399374e1bf01c000526f929e631ebd1c9686546d43730ac49c9 extends Twig_Template
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
        echo "<!-- Feedback Modal Window-->
<div class=\"modal fade\" id=\"feedbackModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">

    <div id=\"confirm\"></div>
    
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">Provide feedback</h4>
            </div>
            
            <form class=\"contact\" id=\"feedbackForm\" role=\"form\">
            <div class=\"modal-body\">
            
                <div class=\"messages\"></div>
                
                <div class=\"well well-sm\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"form-group\">
                                <label for=\"name\">Full Name</label>
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-user\"></span></span>
                                    <input type=\"text\" class=\"form-control\" name=\"name\" id=\"name\" placeholder=\"Enter name\" required=\"required\" data-error=\"Full Name is required.\" />
                                </div>
                                <div class=\"help-block with-errors\"></div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"email\">Email Address</label>
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-envelope\"></span></span>
                                    <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"Enter email\" required=\"required\" data-error=\"Email is required.\" />
                                </div>
                                <div class=\"help-block with-errors\"></div>
                            </div>
                        </div>
                        <div class=\"col-xs-12\">
                            <div class=\"form-group\">
                                <label for=\"name\">Message</label>
                                <textarea name=\"message\" id=\"message\" class=\"form-control\" rows=\"8\" required=\"required\" data-error=\"Message is required.\" placeholder=\"Message\" maxlength=\"1000\"></textarea>
                                <span id=\"text_counter\" class=\"small pull-right\"></span>
                                <div class=\"help-block with-errors\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn \" data-dismiss=\"modal\">Close</button>
                <button type=\"submit\" class=\"btn btn-primary pull-right\" id=\"btnContactUs\">Send Message</button>
            </div>
            
            </form>
        </div>
    </div>
</div>
<!-- /.Feedback Modal Window-->";
    }

    public function getTemplateName()
    {
        return "partials/feedback.twig";
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
        return new Twig_Source("<!-- Feedback Modal Window-->
<div class=\"modal fade\" id=\"feedbackModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">

    <div id=\"confirm\"></div>
    
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">Provide feedback</h4>
            </div>
            
            <form class=\"contact\" id=\"feedbackForm\" role=\"form\">
            <div class=\"modal-body\">
            
                <div class=\"messages\"></div>
                
                <div class=\"well well-sm\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"form-group\">
                                <label for=\"name\">Full Name</label>
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-user\"></span></span>
                                    <input type=\"text\" class=\"form-control\" name=\"name\" id=\"name\" placeholder=\"Enter name\" required=\"required\" data-error=\"Full Name is required.\" />
                                </div>
                                <div class=\"help-block with-errors\"></div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"email\">Email Address</label>
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-envelope\"></span></span>
                                    <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"Enter email\" required=\"required\" data-error=\"Email is required.\" />
                                </div>
                                <div class=\"help-block with-errors\"></div>
                            </div>
                        </div>
                        <div class=\"col-xs-12\">
                            <div class=\"form-group\">
                                <label for=\"name\">Message</label>
                                <textarea name=\"message\" id=\"message\" class=\"form-control\" rows=\"8\" required=\"required\" data-error=\"Message is required.\" placeholder=\"Message\" maxlength=\"1000\"></textarea>
                                <span id=\"text_counter\" class=\"small pull-right\"></span>
                                <div class=\"help-block with-errors\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn \" data-dismiss=\"modal\">Close</button>
                <button type=\"submit\" class=\"btn btn-primary pull-right\" id=\"btnContactUs\">Send Message</button>
            </div>
            
            </form>
        </div>
    </div>
</div>
<!-- /.Feedback Modal Window-->", "partials/feedback.twig", "C:\\www\\figshare_orda\\app\\src\\View\\partials\\feedback.twig");
    }
}

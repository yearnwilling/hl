<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7b0edbacdaa551aa6278173d8a1a0e0cbc08d9da6e44e31c77f46c0ba1bfc6fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_044a759b8b31611a210115b025bb505e03396536e8c3cd3b98ac8f376aea9aad = $this->env->getExtension("native_profiler");
        $__internal_044a759b8b31611a210115b025bb505e03396536e8c3cd3b98ac8f376aea9aad->enter($__internal_044a759b8b31611a210115b025bb505e03396536e8c3cd3b98ac8f376aea9aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_044a759b8b31611a210115b025bb505e03396536e8c3cd3b98ac8f376aea9aad->leave($__internal_044a759b8b31611a210115b025bb505e03396536e8c3cd3b98ac8f376aea9aad_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cc0a3f442426cab274b74260ac62e95734bb9b90a4b5867b45023e8d45f20acc = $this->env->getExtension("native_profiler");
        $__internal_cc0a3f442426cab274b74260ac62e95734bb9b90a4b5867b45023e8d45f20acc->enter($__internal_cc0a3f442426cab274b74260ac62e95734bb9b90a4b5867b45023e8d45f20acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_cc0a3f442426cab274b74260ac62e95734bb9b90a4b5867b45023e8d45f20acc->leave($__internal_cc0a3f442426cab274b74260ac62e95734bb9b90a4b5867b45023e8d45f20acc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c523cd80f620b0df905fc0baa1ee214ce8871aa6a98a53d96ab240f16c7126d = $this->env->getExtension("native_profiler");
        $__internal_6c523cd80f620b0df905fc0baa1ee214ce8871aa6a98a53d96ab240f16c7126d->enter($__internal_6c523cd80f620b0df905fc0baa1ee214ce8871aa6a98a53d96ab240f16c7126d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6c523cd80f620b0df905fc0baa1ee214ce8871aa6a98a53d96ab240f16c7126d->leave($__internal_6c523cd80f620b0df905fc0baa1ee214ce8871aa6a98a53d96ab240f16c7126d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a96d2d0ba1da5cd41dd3bb49cd25e245bbc43ae6112a752881ed039017c186f = $this->env->getExtension("native_profiler");
        $__internal_4a96d2d0ba1da5cd41dd3bb49cd25e245bbc43ae6112a752881ed039017c186f->enter($__internal_4a96d2d0ba1da5cd41dd3bb49cd25e245bbc43ae6112a752881ed039017c186f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4a96d2d0ba1da5cd41dd3bb49cd25e245bbc43ae6112a752881ed039017c186f->leave($__internal_4a96d2d0ba1da5cd41dd3bb49cd25e245bbc43ae6112a752881ed039017c186f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */

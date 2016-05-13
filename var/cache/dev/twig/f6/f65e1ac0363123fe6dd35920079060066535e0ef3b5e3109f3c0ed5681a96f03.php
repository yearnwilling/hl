<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ddda869226507f5719ee0b6da1dc5a7003b6d3cf3628ddb7a46754dda942a626 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bdf3949763cb0b8398a76cb51084e39eaff5ddc5c1f411964473459453284ac6 = $this->env->getExtension("native_profiler");
        $__internal_bdf3949763cb0b8398a76cb51084e39eaff5ddc5c1f411964473459453284ac6->enter($__internal_bdf3949763cb0b8398a76cb51084e39eaff5ddc5c1f411964473459453284ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdf3949763cb0b8398a76cb51084e39eaff5ddc5c1f411964473459453284ac6->leave($__internal_bdf3949763cb0b8398a76cb51084e39eaff5ddc5c1f411964473459453284ac6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_657d4f1c84acb3ab7feb15cd70ab62b7988b561d20ae52a4101a7bba00c200bc = $this->env->getExtension("native_profiler");
        $__internal_657d4f1c84acb3ab7feb15cd70ab62b7988b561d20ae52a4101a7bba00c200bc->enter($__internal_657d4f1c84acb3ab7feb15cd70ab62b7988b561d20ae52a4101a7bba00c200bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_657d4f1c84acb3ab7feb15cd70ab62b7988b561d20ae52a4101a7bba00c200bc->leave($__internal_657d4f1c84acb3ab7feb15cd70ab62b7988b561d20ae52a4101a7bba00c200bc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_46fedccb56c6d2603c91734a8635f8ccba3db5fed663f1895956cc912ed87f64 = $this->env->getExtension("native_profiler");
        $__internal_46fedccb56c6d2603c91734a8635f8ccba3db5fed663f1895956cc912ed87f64->enter($__internal_46fedccb56c6d2603c91734a8635f8ccba3db5fed663f1895956cc912ed87f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_46fedccb56c6d2603c91734a8635f8ccba3db5fed663f1895956cc912ed87f64->leave($__internal_46fedccb56c6d2603c91734a8635f8ccba3db5fed663f1895956cc912ed87f64_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_71d64c41d87e7269a6d8d50e7c216be99faa02d24f9c444d5ca96000842dfaa7 = $this->env->getExtension("native_profiler");
        $__internal_71d64c41d87e7269a6d8d50e7c216be99faa02d24f9c444d5ca96000842dfaa7->enter($__internal_71d64c41d87e7269a6d8d50e7c216be99faa02d24f9c444d5ca96000842dfaa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_71d64c41d87e7269a6d8d50e7c216be99faa02d24f9c444d5ca96000842dfaa7->leave($__internal_71d64c41d87e7269a6d8d50e7c216be99faa02d24f9c444d5ca96000842dfaa7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */

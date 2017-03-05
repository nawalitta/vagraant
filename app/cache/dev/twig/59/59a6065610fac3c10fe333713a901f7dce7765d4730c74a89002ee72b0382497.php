<?php

/* CoreBundle:Affectation:affecter_enfant_activite_option.html.twig */
class __TwigTemplate_e204a31dbbf8fc9b8fd2e3b36a4c52204227da638f989fdb2471ccc2ad49994f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CoreBundle:Affectation:affecter_enfant_activite_option.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc97c6aab04f1795d937e8b8b9ac5eced9abf1f2fcb46a1310339f71bd140856 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc97c6aab04f1795d937e8b8b9ac5eced9abf1f2fcb46a1310339f71bd140856->enter($__internal_dc97c6aab04f1795d937e8b8b9ac5eced9abf1f2fcb46a1310339f71bd140856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle:Affectation:affecter_enfant_activite_option.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc97c6aab04f1795d937e8b8b9ac5eced9abf1f2fcb46a1310339f71bd140856->leave($__internal_dc97c6aab04f1795d937e8b8b9ac5eced9abf1f2fcb46a1310339f71bd140856_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e05bba99372e30a0396de74bbd10ef49b7b0e7caf565e327063dc4e70ce8748 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e05bba99372e30a0396de74bbd10ef49b7b0e7caf565e327063dc4e70ce8748->enter($__internal_2e05bba99372e30a0396de74bbd10ef49b7b0e7caf565e327063dc4e70ce8748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreBundle:Affectation:affecterEnfantActiviteOption";
        
        $__internal_2e05bba99372e30a0396de74bbd10ef49b7b0e7caf565e327063dc4e70ce8748->leave($__internal_2e05bba99372e30a0396de74bbd10ef49b7b0e7caf565e327063dc4e70ce8748_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c80d5c3064914783b79f1743a292ea870250eff72349c8ae89906787d2c1e021 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c80d5c3064914783b79f1743a292ea870250eff72349c8ae89906787d2c1e021->enter($__internal_c80d5c3064914783b79f1743a292ea870250eff72349c8ae89906787d2c1e021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <form method=\"post\">
        ";
        // line 7
        $this->loadTemplate("CoreBundle:Affectation:affecter_enfant_activite_preview.html.twig", "CoreBundle:Affectation:affecter_enfant_activite_option.html.twig", 7)->display($context);
        // line 8
        echo "    </form>
";
        
        $__internal_c80d5c3064914783b79f1743a292ea870250eff72349c8ae89906787d2c1e021->leave($__internal_c80d5c3064914783b79f1743a292ea870250eff72349c8ae89906787d2c1e021_prof);

    }

    public function getTemplateName()
    {
        return "CoreBundle:Affectation:affecter_enfant_activite_option.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}CoreBundle:Affectation:affecterEnfantActiviteOption{% endblock %}

{% block body %}
    <form method=\"post\">
        {% include 'CoreBundle:Affectation:affecter_enfant_activite_preview.html.twig' %}
    </form>
{% endblock %}
", "CoreBundle:Affectation:affecter_enfant_activite_option.html.twig", "C:\\xampp\\htdocs\\gpac-20170211T083052Z\\gpac\\src\\CoreBundle/Resources/views/Affectation/affecter_enfant_activite_option.html.twig");
    }
}

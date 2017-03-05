<?php

/* CoreBundle:Affectation:affecter_enfant_activite_obligatoire.html.twig */
class __TwigTemplate_12a60f168899266e9e239f7235ba234214304b6ea32f1ef2edf5ada54cefa9f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CoreBundle:Affectation:affecter_enfant_activite_obligatoire.html.twig", 1);
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
        $__internal_d48d49f9fcdded1c7073ca20b2d546d4c56f4822cc228855fd5e74fea0054918 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d48d49f9fcdded1c7073ca20b2d546d4c56f4822cc228855fd5e74fea0054918->enter($__internal_d48d49f9fcdded1c7073ca20b2d546d4c56f4822cc228855fd5e74fea0054918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle:Affectation:affecter_enfant_activite_obligatoire.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d48d49f9fcdded1c7073ca20b2d546d4c56f4822cc228855fd5e74fea0054918->leave($__internal_d48d49f9fcdded1c7073ca20b2d546d4c56f4822cc228855fd5e74fea0054918_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3cb6f2720cf2d0f7ed6b48536737838f38fc4d73db791a1ef36d03783178cf90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cb6f2720cf2d0f7ed6b48536737838f38fc4d73db791a1ef36d03783178cf90->enter($__internal_3cb6f2720cf2d0f7ed6b48536737838f38fc4d73db791a1ef36d03783178cf90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreBundle:Affectation:affecterEnfantActiviteObligatoire";
        
        $__internal_3cb6f2720cf2d0f7ed6b48536737838f38fc4d73db791a1ef36d03783178cf90->leave($__internal_3cb6f2720cf2d0f7ed6b48536737838f38fc4d73db791a1ef36d03783178cf90_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5fc8de43d4006239f1d50947d99ed3febc790c76816b61730ebb3af2fe9c87ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fc8de43d4006239f1d50947d99ed3febc790c76816b61730ebb3af2fe9c87ce->enter($__internal_5fc8de43d4006239f1d50947d99ed3febc790c76816b61730ebb3af2fe9c87ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        if ((isset($context["erreur"]) ? $context["erreur"] : $this->getContext($context, "erreur"))) {
            // line 7
            echo "        <div class=\"alert alert-danger\" role=\"alert\">
            <label>
                ";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["erreurMessage"]) ? $context["erreurMessage"] : $this->getContext($context, "erreurMessage")), "html", null, true);
            echo "
            </label>
        </div>
    ";
        }
        // line 13
        echo "    <form method=\"post\">
        ";
        // line 14
        $this->loadTemplate("CoreBundle:Affectation:affecter_enfant_activite_preview.html.twig", "CoreBundle:Affectation:affecter_enfant_activite_obligatoire.html.twig", 14)->display($context);
        // line 15
        echo "    </form>
";
        
        $__internal_5fc8de43d4006239f1d50947d99ed3febc790c76816b61730ebb3af2fe9c87ce->leave($__internal_5fc8de43d4006239f1d50947d99ed3febc790c76816b61730ebb3af2fe9c87ce_prof);

    }

    public function getTemplateName()
    {
        return "CoreBundle:Affectation:affecter_enfant_activite_obligatoire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 15,  70 => 14,  67 => 13,  60 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}CoreBundle:Affectation:affecterEnfantActiviteObligatoire{% endblock %}

{% block body %}
    {% if erreur %}
        <div class=\"alert alert-danger\" role=\"alert\">
            <label>
                {{ erreurMessage }}
            </label>
        </div>
    {% endif %}
    <form method=\"post\">
        {% include 'CoreBundle:Affectation:affecter_enfant_activite_preview.html.twig' %}
    </form>
{% endblock %}
", "CoreBundle:Affectation:affecter_enfant_activite_obligatoire.html.twig", "C:\\xampp\\htdocs\\gpac-20170211T083052Z\\gpac\\src\\CoreBundle/Resources/views/Affectation/affecter_enfant_activite_obligatoire.html.twig");
    }
}

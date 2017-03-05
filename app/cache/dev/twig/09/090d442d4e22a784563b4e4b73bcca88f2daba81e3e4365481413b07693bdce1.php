<?php

/* RessourceBundle:Enfant:index.html.twig */
class __TwigTemplate_0039fd7e27c6c16de9e3a6f42a580217f8303a056363cca50a1289b7d752ef50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "RessourceBundle:Enfant:index.html.twig", 1);
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
        $__internal_556b33d9daaa9e7a1570b0539018fbc853f329c26644942e766f0910bfc00d02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_556b33d9daaa9e7a1570b0539018fbc853f329c26644942e766f0910bfc00d02->enter($__internal_556b33d9daaa9e7a1570b0539018fbc853f329c26644942e766f0910bfc00d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RessourceBundle:Enfant:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_556b33d9daaa9e7a1570b0539018fbc853f329c26644942e766f0910bfc00d02->leave($__internal_556b33d9daaa9e7a1570b0539018fbc853f329c26644942e766f0910bfc00d02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_65326f5245dcc756c06d3ab3cfad1201662b08ac27285ea52c0f87d0907acb8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65326f5245dcc756c06d3ab3cfad1201662b08ac27285ea52c0f87d0907acb8c->enter($__internal_65326f5245dcc756c06d3ab3cfad1201662b08ac27285ea52c0f87d0907acb8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste enfants";
        
        $__internal_65326f5245dcc756c06d3ab3cfad1201662b08ac27285ea52c0f87d0907acb8c->leave($__internal_65326f5245dcc756c06d3ab3cfad1201662b08ac27285ea52c0f87d0907acb8c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7497d218f4fcf01888cf8042a833837145e99b6688da529d640ae29a312efea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7497d218f4fcf01888cf8042a833837145e99b6688da529d640ae29a312efea6->enter($__internal_7497d218f4fcf01888cf8042a833837145e99b6688da529d640ae29a312efea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<nav class = \"navbar navbar-default\" >
    <div>
        <ul class = \"nav navbar-nav\">
            <li><a href = \"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("RessourceBundle_Enfant_edit");
        echo "\"><input type=\"button\" class=\"btn btn-primary\" name=\"btnAjout\" value=\"Ajouter un enfant\"/></a></li>
        </ul>
     </div>
</nav>
";
        // line 13
        if (((isset($context["erreur"]) ? $context["erreur"] : $this->getContext($context, "erreur")) != "")) {
            // line 14
            echo "    <div class=\"alert alert-danger\" role=\"alert\">
        <label>
            ";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["erreur"]) ? $context["erreur"] : $this->getContext($context, "erreur")), "html", null, true);
            echo "
        </label>
    </div>
";
        }
        // line 20
        echo "<form>
    <div class=\"table-responsive\">
        <table class=\"table\">
             <caption>Liste des Enfants</caption>
            <tr>
                <th> # </th>
                <th> Prénom </th>
                <th> Nom </th>
                <th> Identifiant </th>
                <th> Groupe </th>
                <th> Régime </th>
                <th> Est Archivé </th>
                <th> Date Arrivé</th>
                <th>Selection</th>
            </tr>
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["enfants"]) ? $context["enfants"] : $this->getContext($context, "enfants")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["enfant"]) {
            // line 36
            echo "            <tr>
            ";
            // line 37
            $this->loadTemplate("RessourceBundle:Enfant:preview.html.twig", "RessourceBundle:Enfant:index.html.twig", 37)->display($context);
            // line 38
            echo "                <td>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"checkbox\" name=\"idEnfants[]\" value=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["enfant"], "id", array()), "html", null, true);
            echo "\" class=\"form-check-input\">
                        </label>
                    </div>
                </td>
            </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enfant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        <tr>
            <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            <td><button type=\"submit\" class=\"btn btn-primary\">Supprimer</button></td>
        </tr>
        </table>
</form>

";
        
        $__internal_7497d218f4fcf01888cf8042a833837145e99b6688da529d640ae29a312efea6->leave($__internal_7497d218f4fcf01888cf8042a833837145e99b6688da529d640ae29a312efea6_prof);

    }

    public function getTemplateName()
    {
        return "RessourceBundle:Enfant:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 47,  122 => 41,  117 => 38,  115 => 37,  112 => 36,  95 => 35,  78 => 20,  71 => 16,  67 => 14,  65 => 13,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}Liste enfants{% endblock %}

{% block body %}
<nav class = \"navbar navbar-default\" >
    <div>
        <ul class = \"nav navbar-nav\">
            <li><a href = \"{{path('RessourceBundle_Enfant_edit')}}\"><input type=\"button\" class=\"btn btn-primary\" name=\"btnAjout\" value=\"Ajouter un enfant\"/></a></li>
        </ul>
     </div>
</nav>
{% if erreur!=\"\" %}
    <div class=\"alert alert-danger\" role=\"alert\">
        <label>
            {{ erreur }}
        </label>
    </div>
{% endif %}
<form>
    <div class=\"table-responsive\">
        <table class=\"table\">
             <caption>Liste des Enfants</caption>
            <tr>
                <th> # </th>
                <th> Prénom </th>
                <th> Nom </th>
                <th> Identifiant </th>
                <th> Groupe </th>
                <th> Régime </th>
                <th> Est Archivé </th>
                <th> Date Arrivé</th>
                <th>Selection</th>
            </tr>
        {% for enfant in enfants %}
            <tr>
            {% include 'RessourceBundle:Enfant:preview.html.twig' %}
                <td>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"checkbox\" name=\"idEnfants[]\" value=\"{{enfant.id}}\" class=\"form-check-input\">
                        </label>
                    </div>
                </td>
            </tr>
        {% endfor %}
        <tr>
            <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            <td><button type=\"submit\" class=\"btn btn-primary\">Supprimer</button></td>
        </tr>
        </table>
</form>

{% endblock %}
", "RessourceBundle:Enfant:index.html.twig", "C:\\xampp\\htdocs\\gpac-20170211T083052Z\\gpac\\src\\RessourceBundle/Resources/views/Enfant/index.html.twig");
    }
}

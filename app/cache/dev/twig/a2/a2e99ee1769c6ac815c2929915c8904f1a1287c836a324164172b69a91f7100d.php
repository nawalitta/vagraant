<?php

/* ActiviteBundle:ActiviteFixee:preview.html.twig */
class __TwigTemplate_7ff04436ecceae900e0757301c05bd1c8a15ccd505634b151728e6d8f1d304c4 extends Twig_Template
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
        $__internal_5b3e3b7238c3515ff391ce61fe25d286ac48f2f400c5fdd6eb9c30501cdc0e0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b3e3b7238c3515ff391ce61fe25d286ac48f2f400c5fdd6eb9c30501cdc0e0e->enter($__internal_5b3e3b7238c3515ff391ce61fe25d286ac48f2f400c5fdd6eb9c30501cdc0e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ActiviteBundle:ActiviteFixee:preview.html.twig"));

        // line 1
        echo "<td> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activiteFixees"]) ? $context["activiteFixees"] : $this->getContext($context, "activiteFixees")), "id", array()), "html", null, true);
        echo " </td>
<td> ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["activiteFixees"]) ? $context["activiteFixees"] : $this->getContext($context, "activiteFixees")), "activite", array()), "getDesignation", array(), "method"), "html", null, true);
        echo "</td>
<td> ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["activiteFixees"]) ? $context["activiteFixees"] : $this->getContext($context, "activiteFixees")), "activite", array()), "getTypeActivite", array(), "method"), "getDesignation", array(), "method"), "html", null, true);
        echo " </td>
<td> ";
        // line 4
        echo twig_escape_filter($this->env, ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["activiteFixees"]) ? $context["activiteFixees"] : $this->getContext($context, "activiteFixees")), "heureDebut", array()), "H:i") . "-") . twig_date_format_filter($this->env, $this->getAttribute((isset($context["activiteFixees"]) ? $context["activiteFixees"] : $this->getContext($context, "activiteFixees")), "heureFin", array()), "H:i")), "html", null, true);
        echo " </td>
<td> ";
        // line 5
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["activiteFixees"]) ? $context["activiteFixees"] : $this->getContext($context, "activiteFixees")), "jour", array()), "getDesignation", array(), "method") . "/") . $this->getAttribute($this->getAttribute((isset($context["activiteFixees"]) ? $context["activiteFixees"] : $this->getContext($context, "activiteFixees")), "jour", array()), "getParite", array(), "method")), "html", null, true);
        echo " </td>";
        
        $__internal_5b3e3b7238c3515ff391ce61fe25d286ac48f2f400c5fdd6eb9c30501cdc0e0e->leave($__internal_5b3e3b7238c3515ff391ce61fe25d286ac48f2f400c5fdd6eb9c30501cdc0e0e_prof);

    }

    public function getTemplateName()
    {
        return "ActiviteBundle:ActiviteFixee:preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 5,  35 => 4,  31 => 3,  27 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<td> {{ activiteFixees.id }} </td>
<td> {{ activiteFixees.activite.getDesignation() }}</td>
<td> {{ activiteFixees.activite.getTypeActivite().getDesignation() }} </td>
<td> {{ activiteFixees.heureDebut|date('H:i') ~ \"-\"~ activiteFixees.heureFin|date('H:i') }} </td>
<td> {{ activiteFixees.jour.getDesignation() ~'/'~ activiteFixees.jour.getParite() }} </td>", "ActiviteBundle:ActiviteFixee:preview.html.twig", "C:\\xampp\\htdocs\\gpac-20170211T083052Z\\gpac\\src\\ActiviteBundle/Resources/views/ActiviteFixee/preview.html.twig");
    }
}

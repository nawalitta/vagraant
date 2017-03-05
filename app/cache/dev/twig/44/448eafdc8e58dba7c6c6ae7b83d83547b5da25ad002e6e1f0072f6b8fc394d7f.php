<?php

/* RessourceBundle:FenetreHoraire:preview.html.twig */
class __TwigTemplate_eeaa3ecf12d3e473edbfff8741ad03d9ee67136b8c172e10df2975f3f107ba9d extends Twig_Template
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
        $__internal_bae668014eef2ce9fb342dd9700917cc3035826a0d29725cc2e4262752f0817d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bae668014eef2ce9fb342dd9700917cc3035826a0d29725cc2e4262752f0817d->enter($__internal_bae668014eef2ce9fb342dd9700917cc3035826a0d29725cc2e4262752f0817d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RessourceBundle:FenetreHoraire:preview.html.twig"));

        // line 1
        echo "<td> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fh"]) ? $context["fh"] : $this->getContext($context, "fh")), "id", array()), "html", null, true);
        echo " </td>
<td> ";
        // line 2
        echo twig_escape_filter($this->env, ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["fh"]) ? $context["fh"] : $this->getContext($context, "fh")), "lundiDebut", array()), "H:i") . " - ") . twig_date_format_filter($this->env, $this->getAttribute((isset($context["fh"]) ? $context["fh"] : $this->getContext($context, "fh")), "lundiFin", array()), "H:i")), "html", null, true);
        echo " </td>
<td> ";
        // line 3
        echo twig_escape_filter($this->env, ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["fh"]) ? $context["fh"] : $this->getContext($context, "fh")), "mardiDebut", array()), "H:i") . " - ") . twig_date_format_filter($this->env, $this->getAttribute((isset($context["fh"]) ? $context["fh"] : $this->getContext($context, "fh")), "mardiFin", array()), "H:i")), "html", null, true);
        echo " </td>
<td> ";
        // line 4
        echo twig_escape_filter($this->env, ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["fh"]) ? $context["fh"] : $this->getContext($context, "fh")), "mercrediDebut", array()), "H:i") . " - ") . twig_date_format_filter($this->env, $this->getAttribute((isset($context["fh"]) ? $context["fh"] : $this->getContext($context, "fh")), "mercrediFin", array()), "H:i")), "html", null, true);
        echo " </td>
<td> ";
        // line 5
        echo twig_escape_filter($this->env, ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["fh"]) ? $context["fh"] : $this->getContext($context, "fh")), "jeudiDebut", array()), "H:i") . " - ") . twig_date_format_filter($this->env, $this->getAttribute((isset($context["fh"]) ? $context["fh"] : $this->getContext($context, "fh")), "jeudiFin", array()), "H:i")), "html", null, true);
        echo " </td>
<td> ";
        // line 6
        echo twig_escape_filter($this->env, ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["fh"]) ? $context["fh"] : $this->getContext($context, "fh")), "vendrediDebut", array()), "H:i") . " - ") . twig_date_format_filter($this->env, $this->getAttribute((isset($context["fh"]) ? $context["fh"] : $this->getContext($context, "fh")), "vendrediFin", array()), "H:i")), "html", null, true);
        echo " </td>
";
        
        $__internal_bae668014eef2ce9fb342dd9700917cc3035826a0d29725cc2e4262752f0817d->leave($__internal_bae668014eef2ce9fb342dd9700917cc3035826a0d29725cc2e4262752f0817d_prof);

    }

    public function getTemplateName()
    {
        return "RessourceBundle:FenetreHoraire:preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 6,  39 => 5,  35 => 4,  31 => 3,  27 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<td> {{ fh.id }} </td>
<td> {{ fh.lundiDebut|date(\"H:i\") ~\" - \" ~ fh.lundiFin|date(\"H:i\") }} </td>
<td> {{ fh.mardiDebut|date(\"H:i\") ~\" - \" ~ fh.mardiFin|date(\"H:i\") }} </td>
<td> {{ fh.mercrediDebut|date(\"H:i\") ~\" - \" ~ fh.mercrediFin|date(\"H:i\") }} </td>
<td> {{ fh.jeudiDebut|date(\"H:i\") ~\" - \" ~ fh.jeudiFin|date(\"H:i\") }} </td>
<td> {{ fh.vendrediDebut|date(\"H:i\") ~\" - \" ~ fh.vendrediFin|date(\"H:i\") }} </td>
", "RessourceBundle:FenetreHoraire:preview.html.twig", "C:\\xampp\\htdocs\\gpac-20170211T083052Z\\gpac\\src\\RessourceBundle/Resources/views/FenetreHoraire/preview.html.twig");
    }
}

<?php

/* ActiviteBundle:Activite:preview.html.twig */
class __TwigTemplate_a53e6e65862046cb4859d9b1b9494049fe498f8d7c97de7395eb3202b61697ee extends Twig_Template
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
        $__internal_6b5f58dae1f658679aab85fa09b85fe1b70530036f29fb8df076e8f29873a8f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b5f58dae1f658679aab85fa09b85fe1b70530036f29fb8df076e8f29873a8f6->enter($__internal_6b5f58dae1f658679aab85fa09b85fe1b70530036f29fb8df076e8f29873a8f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ActiviteBundle:Activite:preview.html.twig"));

        // line 1
        echo "<td><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ActiviteBundle_Activite_show", array("id" => $this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "id", array()))), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "id", array()), "html", null, true);
        echo "</a></td>
<td><a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ActiviteBundle_Activite_show", array("id" => $this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "id", array()))), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "designation", array()), "html", null, true);
        echo "</a></td>
<td> ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "typeActivite", array()), "getDesignation", array(), "method"), "html", null, true);
        echo "</td>
<td> ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "DureeMin", array()), "html", null, true);
        echo "  </td>
<td>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "DureeMax", array()), "html", null, true);
        echo "</td>
<td>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "nbEnfantsMin", array()), "html", null, true);
        echo "</td>
<td>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "nbEnfantsMax", array()), "html", null, true);
        echo "</td>
<td>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "dureeTransport", array()), "html", null, true);
        echo "</td>

";
        
        $__internal_6b5f58dae1f658679aab85fa09b85fe1b70530036f29fb8df076e8f29873a8f6->leave($__internal_6b5f58dae1f658679aab85fa09b85fe1b70530036f29fb8df076e8f29873a8f6_prof);

    }

    public function getTemplateName()
    {
        return "ActiviteBundle:Activite:preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  51 => 7,  47 => 6,  43 => 5,  39 => 4,  35 => 3,  29 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<td><a href=\"{{ path('ActiviteBundle_Activite_show',{ 'id': activite.id }) }}\"> {{ activite.id }}</a></td>
<td><a href=\"{{ path('ActiviteBundle_Activite_show',{ 'id': activite.id }) }}\"> {{ activite.designation }}</a></td>
<td> {{ activite.typeActivite.getDesignation() }}</td>
<td> {{ activite.DureeMin }}  </td>
<td>{{ activite.DureeMax }}</td>
<td>{{ activite.nbEnfantsMin }}</td>
<td>{{ activite.nbEnfantsMax }}</td>
<td>{{ activite.dureeTransport }}</td>

", "ActiviteBundle:Activite:preview.html.twig", "C:\\xampp\\htdocs\\gpac-20170211T083052Z\\gpac\\src\\ActiviteBundle/Resources/views/Activite/preview.html.twig");
    }
}

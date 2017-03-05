<?php

/* RessourceBundle:Groupe:preview.html.twig */
class __TwigTemplate_1f949a33543796e35bc26e4742bc5524626a3508cf0113feee806e62e86ab200 extends Twig_Template
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
        $__internal_a05f89ae19f7b6704560a15614607ccbd3c8b28c2598ca872e1a5d8e642e8cb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a05f89ae19f7b6704560a15614607ccbd3c8b28c2598ca872e1a5d8e642e8cb4->enter($__internal_a05f89ae19f7b6704560a15614607ccbd3c8b28c2598ca872e1a5d8e642e8cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RessourceBundle:Groupe:preview.html.twig"));

        // line 1
        echo "<td><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("RessourceBundle_Groupe_show", array("id" => $this->getAttribute((isset($context["groupe"]) ? $context["groupe"] : $this->getContext($context, "groupe")), "id", array()))), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["groupe"]) ? $context["groupe"] : $this->getContext($context, "groupe")), "id", array()), "html", null, true);
        echo "</a></td>
<td><a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("RessourceBundle_Groupe_show", array("id" => $this->getAttribute((isset($context["groupe"]) ? $context["groupe"] : $this->getContext($context, "groupe")), "id", array()))), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["groupe"]) ? $context["groupe"] : $this->getContext($context, "groupe")), "designation", array()), "html", null, true);
        echo "</a></td>


";
        
        $__internal_a05f89ae19f7b6704560a15614607ccbd3c8b28c2598ca872e1a5d8e642e8cb4->leave($__internal_a05f89ae19f7b6704560a15614607ccbd3c8b28c2598ca872e1a5d8e642e8cb4_prof);

    }

    public function getTemplateName()
    {
        return "RessourceBundle:Groupe:preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<td><a href=\"{{path('RessourceBundle_Groupe_show',{ 'id': groupe.id })}}\"> {{groupe.id}}</a></td>
<td><a href=\"{{path('RessourceBundle_Groupe_show',{ 'id': groupe.id })}}\"> {{groupe.designation}}</a></td>


", "RessourceBundle:Groupe:preview.html.twig", "C:\\xampp\\htdocs\\gpac-20170211T083052Z\\gpac\\src\\RessourceBundle/Resources/views/Groupe/preview.html.twig");
    }
}

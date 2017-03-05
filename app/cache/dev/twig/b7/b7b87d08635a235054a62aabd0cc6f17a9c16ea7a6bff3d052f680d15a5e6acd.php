<?php

/* ActiviteBundle:TypeActivite:preview.html.twig */
class __TwigTemplate_1746f3f783220bd08f2e3af24a9c7629ca502a627df188bb18715709a4ed8810 extends Twig_Template
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
        $__internal_43dffb239d4ad5090c2631d640d59cb52825bdd1fb3b0255f7bb33f8919a31ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43dffb239d4ad5090c2631d640d59cb52825bdd1fb3b0255f7bb33f8919a31ef->enter($__internal_43dffb239d4ad5090c2631d640d59cb52825bdd1fb3b0255f7bb33f8919a31ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ActiviteBundle:TypeActivite:preview.html.twig"));

        // line 1
        echo "<td><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ActiviteBundle_TypeActivite_show", array("id" => $this->getAttribute((isset($context["typeActivite"]) ? $context["typeActivite"] : $this->getContext($context, "typeActivite")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeActivite"]) ? $context["typeActivite"] : $this->getContext($context, "typeActivite")), "id", array()), "html", null, true);
        echo "</td>
<td><a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ActiviteBundle_TypeActivite_show", array("id" => $this->getAttribute((isset($context["typeActivite"]) ? $context["typeActivite"] : $this->getContext($context, "typeActivite")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeActivite"]) ? $context["typeActivite"] : $this->getContext($context, "typeActivite")), "designation", array()), "html", null, true);
        echo "</td>";
        
        $__internal_43dffb239d4ad5090c2631d640d59cb52825bdd1fb3b0255f7bb33f8919a31ef->leave($__internal_43dffb239d4ad5090c2631d640d59cb52825bdd1fb3b0255f7bb33f8919a31ef_prof);

    }

    public function getTemplateName()
    {
        return "ActiviteBundle:TypeActivite:preview.html.twig";
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
        return new Twig_Source("<td><a href=\"{{ path('ActiviteBundle_TypeActivite_show',{ 'id': typeActivite.id }) }}\">{{ typeActivite.id }}</td>
<td><a href=\"{{ path('ActiviteBundle_TypeActivite_show',{ 'id': typeActivite.id }) }}\">{{ typeActivite.designation }}</td>", "ActiviteBundle:TypeActivite:preview.html.twig", "C:\\xampp\\htdocs\\gpac-20170211T083052Z\\gpac\\src\\ActiviteBundle/Resources/views/TypeActivite/preview.html.twig");
    }
}

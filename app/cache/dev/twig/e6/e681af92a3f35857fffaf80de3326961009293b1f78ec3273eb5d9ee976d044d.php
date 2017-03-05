<?php

/* RessourceBundle:TypeRessource:preview.html.twig */
class __TwigTemplate_4df2fbbd7e220b26d525a1651591e1602449c58cfe33ca49d692803f5766f72c extends Twig_Template
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
        $__internal_202e44a4d7f99738447530e93e4e3b9b821547df4d173a0f08850a8df0e35303 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_202e44a4d7f99738447530e93e4e3b9b821547df4d173a0f08850a8df0e35303->enter($__internal_202e44a4d7f99738447530e93e4e3b9b821547df4d173a0f08850a8df0e35303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RessourceBundle:TypeRessource:preview.html.twig"));

        // line 1
        echo "<td><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("RessourceBundle_TypeRessource_show", array("id" => $this->getAttribute((isset($context["typeRessource"]) ? $context["typeRessource"] : $this->getContext($context, "typeRessource")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeRessource"]) ? $context["typeRessource"] : $this->getContext($context, "typeRessource")), "id", array()), "html", null, true);
        echo "</td>
<td><a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("RessourceBundle_TypeRessource_show", array("id" => $this->getAttribute((isset($context["typeRessource"]) ? $context["typeRessource"] : $this->getContext($context, "typeRessource")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeRessource"]) ? $context["typeRessource"] : $this->getContext($context, "typeRessource")), "designation", array()), "html", null, true);
        echo "</td>

";
        
        $__internal_202e44a4d7f99738447530e93e4e3b9b821547df4d173a0f08850a8df0e35303->leave($__internal_202e44a4d7f99738447530e93e4e3b9b821547df4d173a0f08850a8df0e35303_prof);

    }

    public function getTemplateName()
    {
        return "RessourceBundle:TypeRessource:preview.html.twig";
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
        return new Twig_Source("<td><a href=\"{{ path('RessourceBundle_TypeRessource_show',{ 'id': typeRessource.id }) }}\">{{ typeRessource.id }}</td>
<td><a href=\"{{ path('RessourceBundle_TypeRessource_show',{ 'id': typeRessource.id }) }}\">{{ typeRessource.designation }}</td>

", "RessourceBundle:TypeRessource:preview.html.twig", "C:\\xampp\\htdocs\\gpac-20170211T083052Z\\gpac\\src\\RessourceBundle/Resources/views/TypeRessource/preview.html.twig");
    }
}

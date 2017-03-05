<?php

/* RessourceBundle:Enfant:preview.html.twig */
class __TwigTemplate_abf6ad8cbdc1c3006ae173e907b7e446d855b4c6b439b17fe50ea25303f625ac extends Twig_Template
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
        $__internal_5d7d982c0edb1ef10b8d76f56e3f2d1841e1c41a57fab4fdc4fd64eceb0edbe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d7d982c0edb1ef10b8d76f56e3f2d1841e1c41a57fab4fdc4fd64eceb0edbe5->enter($__internal_5d7d982c0edb1ef10b8d76f56e3f2d1841e1c41a57fab4fdc4fd64eceb0edbe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RessourceBundle:Enfant:preview.html.twig"));

        // line 1
        echo "<td><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("RessourceBundle_Enfant_show", array("id" => $this->getAttribute((isset($context["enfant"]) ? $context["enfant"] : $this->getContext($context, "enfant")), "id", array()))), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enfant"]) ? $context["enfant"] : $this->getContext($context, "enfant")), "id", array()), "html", null, true);
        echo "</a></td>
<td><a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("RessourceBundle_Enfant_show", array("id" => $this->getAttribute((isset($context["enfant"]) ? $context["enfant"] : $this->getContext($context, "enfant")), "id", array()))), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enfant"]) ? $context["enfant"] : $this->getContext($context, "enfant")), "prenom", array()), "html", null, true);
        echo "</a></td>
<td><a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("RessourceBundle_Enfant_show", array("id" => $this->getAttribute((isset($context["enfant"]) ? $context["enfant"] : $this->getContext($context, "enfant")), "id", array()))), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enfant"]) ? $context["enfant"] : $this->getContext($context, "enfant")), "nom", array()), "html", null, true);
        echo "</a></td>
<td><a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("RessourceBundle_Enfant_show", array("id" => $this->getAttribute((isset($context["enfant"]) ? $context["enfant"] : $this->getContext($context, "enfant")), "id", array()))), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enfant"]) ? $context["enfant"] : $this->getContext($context, "enfant")), "identifiant", array()), "html", null, true);
        echo "</a></td>
<td> ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["enfant"]) ? $context["enfant"] : $this->getContext($context, "enfant")), "getGroupe", array(), "method"), "getDesignation", array(), "method"), "html", null, true);
        echo " </td>
<td>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enfant"]) ? $context["enfant"] : $this->getContext($context, "enfant")), "regime", array()), "html", null, true);
        echo "</td>
<td>
    ";
        // line 8
        if (($this->getAttribute((isset($context["enfant"]) ? $context["enfant"] : $this->getContext($context, "enfant")), "estArchive", array()) == "0")) {
            // line 9
            echo "        Non
    ";
        }
        // line 11
        echo "    ";
        if (($this->getAttribute((isset($context["enfant"]) ? $context["enfant"] : $this->getContext($context, "enfant")), "estArchive", array()) == "1")) {
            // line 12
            echo "        Oui
    ";
        }
        // line 14
        echo "</td>
<td>";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["enfant"]) ? $context["enfant"] : $this->getContext($context, "enfant")), "dateArrive", array()), "m/d/Y"), "html", null, true);
        echo "</td>
";
        
        $__internal_5d7d982c0edb1ef10b8d76f56e3f2d1841e1c41a57fab4fdc4fd64eceb0edbe5->leave($__internal_5d7d982c0edb1ef10b8d76f56e3f2d1841e1c41a57fab4fdc4fd64eceb0edbe5_prof);

    }

    public function getTemplateName()
    {
        return "RessourceBundle:Enfant:preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 15,  69 => 14,  65 => 12,  62 => 11,  58 => 9,  56 => 8,  51 => 6,  47 => 5,  41 => 4,  35 => 3,  29 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<td><a href=\"{{ path('RessourceBundle_Enfant_show',{ 'id': enfant.id }) }}\"> {{ enfant.id }}</a></td>
<td><a href=\"{{ path('RessourceBundle_Enfant_show',{ 'id': enfant.id }) }}\"> {{ enfant.prenom }}</a></td>
<td><a href=\"{{ path('RessourceBundle_Enfant_show',{ 'id': enfant.id }) }}\"> {{ enfant.nom }}</a></td>
<td><a href=\"{{ path('RessourceBundle_Enfant_show',{ 'id': enfant.id }) }}\"> {{ enfant.identifiant }}</a></td>
<td> {{ enfant.getGroupe().getDesignation() }} </td>
<td>{{ enfant.regime }}</td>
<td>
    {% if enfant.estArchive == \"0\" %}
        Non
    {% endif %}
    {% if enfant.estArchive == \"1\" %}
        Oui
    {% endif %}
</td>
<td>{{ enfant.dateArrive|date(\"m/d/Y\") }}</td>
", "RessourceBundle:Enfant:preview.html.twig", "C:\\xampp\\htdocs\\gpac-20170211T083052Z\\gpac\\src\\RessourceBundle/Resources/views/Enfant/preview.html.twig");
    }
}

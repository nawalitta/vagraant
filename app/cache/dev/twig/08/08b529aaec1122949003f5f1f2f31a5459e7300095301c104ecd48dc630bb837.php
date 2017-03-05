<?php

/* ActiviteBundle:Activite:index.html.twig */
class __TwigTemplate_30de158d4b68c1c755f7e3b97b035be3ac8a122e7f0356c7a30ebff12bf4d687 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ActiviteBundle:Activite:index.html.twig", 1);
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
        $__internal_67e3676ff66ad267a5a0be9bb555cfe47995ddb0e35f38f5d2ddab6be6872891 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67e3676ff66ad267a5a0be9bb555cfe47995ddb0e35f38f5d2ddab6be6872891->enter($__internal_67e3676ff66ad267a5a0be9bb555cfe47995ddb0e35f38f5d2ddab6be6872891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ActiviteBundle:Activite:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67e3676ff66ad267a5a0be9bb555cfe47995ddb0e35f38f5d2ddab6be6872891->leave($__internal_67e3676ff66ad267a5a0be9bb555cfe47995ddb0e35f38f5d2ddab6be6872891_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e2d5ed0fe5623276dfae61cd94f38f07a6603aeb00454c5399078e366408e97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e2d5ed0fe5623276dfae61cd94f38f07a6603aeb00454c5399078e366408e97->enter($__internal_8e2d5ed0fe5623276dfae61cd94f38f07a6603aeb00454c5399078e366408e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste activités";
        
        $__internal_8e2d5ed0fe5623276dfae61cd94f38f07a6603aeb00454c5399078e366408e97->leave($__internal_8e2d5ed0fe5623276dfae61cd94f38f07a6603aeb00454c5399078e366408e97_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_31bfbcf474621fc22268dce3c137d5f9f924c241fd046cb7ee2210bed46e4593 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31bfbcf474621fc22268dce3c137d5f9f924c241fd046cb7ee2210bed46e4593->enter($__internal_31bfbcf474621fc22268dce3c137d5f9f924c241fd046cb7ee2210bed46e4593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <nav class=\"navbar navbar-default\">
        <div>
            <ul class=\"nav navbar-nav\">
                <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ActiviteBundle_Activite_edit");
        echo "\"><input type=\"button\" class=\"btn btn-primary\"
                                                                                name=\"btnAjout\"
                                                                                value=\"Ajouter une activite\"/></a></li>
            </ul>
        </div>
    </nav>
    ";
        // line 15
        if (((isset($context["erreur"]) ? $context["erreur"] : $this->getContext($context, "erreur")) != "")) {
            // line 16
            echo "        <div class=\"alert alert-danger\" role=\"alert\">
            <label>
                ";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["erreur"]) ? $context["erreur"] : $this->getContext($context, "erreur")), "html", null, true);
            echo "
            </label>
        </div>
    ";
        }
        // line 22
        echo "    <form>
        <div class=\"table-responsive\">
            <table class=\"table\">
                <caption>Liste des activités</caption>
                <tr>
                    <th> Activite id</th>
                    <th> Designation</th>
                    <th> Type Activite</th>
                    <th> Duree Minimum</th>
                    <th> Duree Maximum</th>
                    <th> Nombre minimum d'enfants</th>
                    <th> Nombre maximum d'enfants</th>
                    <th> Durée transport</th>
                    <th> Selection</th>
                </tr>
                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activites"]) ? $context["activites"] : $this->getContext($context, "activites")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
            // line 38
            echo "                    <tr>
                        ";
            // line 39
            $this->loadTemplate("ActiviteBundle:Activite:preview.html.twig", "ActiviteBundle:Activite:index.html.twig", 39)->display($context);
            // line 40
            echo "                        <td>
                            <div class=\"form-check\">
                                <label class=\"form-check-label\">
                                    <input type=\"checkbox\" name=\"idActivites[]\" value=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["activite"], "id", array()), "html", null, true);
            echo "\"
                                           class=\"form-check-input\">
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <button type=\"submit\" class=\"btn btn-primary\">Supprimer</button>
                    </td>
                </tr>
            </table>
        </div>
    </form>
";
        
        $__internal_31bfbcf474621fc22268dce3c137d5f9f924c241fd046cb7ee2210bed46e4593->leave($__internal_31bfbcf474621fc22268dce3c137d5f9f924c241fd046cb7ee2210bed46e4593_prof);

    }

    public function getTemplateName()
    {
        return "ActiviteBundle:Activite:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 50,  124 => 43,  119 => 40,  117 => 39,  114 => 38,  97 => 37,  80 => 22,  73 => 18,  69 => 16,  67 => 15,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}Liste activités{% endblock %}

{% block body %}
    <nav class=\"navbar navbar-default\">
        <div>
            <ul class=\"nav navbar-nav\">
                <li><a href=\"{{ path('ActiviteBundle_Activite_edit') }}\"><input type=\"button\" class=\"btn btn-primary\"
                                                                                name=\"btnAjout\"
                                                                                value=\"Ajouter une activite\"/></a></li>
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
                <caption>Liste des activités</caption>
                <tr>
                    <th> Activite id</th>
                    <th> Designation</th>
                    <th> Type Activite</th>
                    <th> Duree Minimum</th>
                    <th> Duree Maximum</th>
                    <th> Nombre minimum d'enfants</th>
                    <th> Nombre maximum d'enfants</th>
                    <th> Durée transport</th>
                    <th> Selection</th>
                </tr>
                {% for activite in activites %}
                    <tr>
                        {% include 'ActiviteBundle:Activite:preview.html.twig' %}
                        <td>
                            <div class=\"form-check\">
                                <label class=\"form-check-label\">
                                    <input type=\"checkbox\" name=\"idActivites[]\" value=\"{{ activite.id }}\"
                                           class=\"form-check-input\">
                                </label>
                            </div>
                        </td>
                    </tr>
                {% endfor %}
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <button type=\"submit\" class=\"btn btn-primary\">Supprimer</button>
                    </td>
                </tr>
            </table>
        </div>
    </form>
{% endblock %}
", "ActiviteBundle:Activite:index.html.twig", "C:\\xampp\\htdocs\\gpac-20170211T083052Z\\gpac\\src\\ActiviteBundle/Resources/views/Activite/index.html.twig");
    }
}

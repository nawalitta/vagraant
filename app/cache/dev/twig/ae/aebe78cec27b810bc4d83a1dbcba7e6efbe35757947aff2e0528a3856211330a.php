<?php

/* ActiviteBundle:ActiviteFixee:index.html.twig */
class __TwigTemplate_0b3e358d45fe6e183be507efa2b9d468c2bf6912371f775e83129acd2b7e4ca4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ActiviteBundle:ActiviteFixee:index.html.twig", 1);
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
        $__internal_d6c1b5d9ea6fc3bf225065845b56f13b40bc2eae846eb26950ebfb98eccf3924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6c1b5d9ea6fc3bf225065845b56f13b40bc2eae846eb26950ebfb98eccf3924->enter($__internal_d6c1b5d9ea6fc3bf225065845b56f13b40bc2eae846eb26950ebfb98eccf3924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ActiviteBundle:ActiviteFixee:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6c1b5d9ea6fc3bf225065845b56f13b40bc2eae846eb26950ebfb98eccf3924->leave($__internal_d6c1b5d9ea6fc3bf225065845b56f13b40bc2eae846eb26950ebfb98eccf3924_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ba073367711631adf4782f40cc4ab1fb38a9110f67b2dd0410d16d3a48e209c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ba073367711631adf4782f40cc4ab1fb38a9110f67b2dd0410d16d3a48e209c->enter($__internal_8ba073367711631adf4782f40cc4ab1fb38a9110f67b2dd0410d16d3a48e209c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste activités fixées / enfant";
        
        $__internal_8ba073367711631adf4782f40cc4ab1fb38a9110f67b2dd0410d16d3a48e209c->leave($__internal_8ba073367711631adf4782f40cc4ab1fb38a9110f67b2dd0410d16d3a48e209c_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_59e906c130ee8f3fa22791ec0d5f24f5b52b95166942865aa0e01557f9019ff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59e906c130ee8f3fa22791ec0d5f24f5b52b95166942865aa0e01557f9019ff2->enter($__internal_59e906c130ee8f3fa22791ec0d5f24f5b52b95166942865aa0e01557f9019ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    ";
        if (((isset($context["erreur"]) ? $context["erreur"] : $this->getContext($context, "erreur")) != "")) {
            // line 8
            echo "        <div class=\"alert alert-danger\" role=\"alert\">
            <label>
                ";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["erreur"]) ? $context["erreur"] : $this->getContext($context, "erreur")), "html", null, true);
            echo "
            </label>
        </div>
    ";
        }
        // line 14
        echo "    <div class=\"form-group row\">
        <div class=\"col-md-1\">
            <label for=\"sel1\">Liste des enfants :</label>
        </div>
        <div class=\"col-md-2\">
            <select class=\"form-control\" id=\"sel1\" name=\"enfantId\"
                    onchange=\"selectActiviteFixeByEnfant(document.getElementsByName('enfantId')[0].value)\">
                <option value=\"aucun\">Veuillez sélectionner un enfant</option>
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["enfants"]) ? $context["enfants"] : $this->getContext($context, "enfants")));
        foreach ($context['_seq'] as $context["_key"] => $context["enfant"]) {
            // line 23
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["enfant"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["enfant"], "prenom", array()) . " ") . $this->getAttribute($context["enfant"], "nom", array())), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enfant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "            </select>
        </div>
    </div>
    <form method=\"post\">
        <div class=\"table-responsive\">
            <table id=\"tableActiviteFixees\" class=\"table\">
                <caption>Liste des activités fixées</caption>
                <tr>
                    <th> #</th>
                    <th> Designation</th>
                    <th> Type Activite</th>
                    <th> Heure</th>
                    <th> Jour/parité</th>
                    <th> Selection</th>
                </tr>
                ";
        // line 40
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
            // line 41
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["enfant"], "activitesFixees", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["activiteFixees"]) {
                // line 42
                echo "                        <tr id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["enfant"], "id", array()), "html", null, true);
                echo "\" hidden>
                            ";
                // line 43
                $this->loadTemplate("ActiviteBundle:ActiviteFixee:preview.html.twig", "ActiviteBundle:ActiviteFixee:index.html.twig", 43)->display($context);
                // line 44
                echo "                            <td id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["enfant"], "id", array()), "html", null, true);
                echo "\">
                                <div class=\"form-check\">
                                    <label class=\"form-check-label\">
                                        <input type=\"checkbox\" name=\"idActivitesFixee[]\" value=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["activiteFixees"], "id", array()), "html", null, true);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activiteFixees'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "                ";
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
        // line 55
        echo "                <tr>
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
        
        $__internal_59e906c130ee8f3fa22791ec0d5f24f5b52b95166942865aa0e01557f9019ff2->leave($__internal_59e906c130ee8f3fa22791ec0d5f24f5b52b95166942865aa0e01557f9019ff2_prof);

    }

    public function getTemplateName()
    {
        return "ActiviteBundle:ActiviteFixee:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 55,  179 => 54,  158 => 47,  151 => 44,  149 => 43,  144 => 42,  126 => 41,  109 => 40,  92 => 25,  81 => 23,  77 => 22,  67 => 14,  60 => 10,  56 => 8,  53 => 7,  47 => 6,  35 => 3,  11 => 1,);
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

{% block title %}Liste activités fixées / enfant{% endblock %}


{% block body %}
    {% if erreur != \"\" %}
        <div class=\"alert alert-danger\" role=\"alert\">
            <label>
                {{ erreur }}
            </label>
        </div>
    {% endif %}
    <div class=\"form-group row\">
        <div class=\"col-md-1\">
            <label for=\"sel1\">Liste des enfants :</label>
        </div>
        <div class=\"col-md-2\">
            <select class=\"form-control\" id=\"sel1\" name=\"enfantId\"
                    onchange=\"selectActiviteFixeByEnfant(document.getElementsByName('enfantId')[0].value)\">
                <option value=\"aucun\">Veuillez sélectionner un enfant</option>
                {% for enfant in enfants %}
                    <option value=\"{{ enfant.id }}\">{{ enfant.prenom ~\" \"~ enfant.nom }}</option>
                {% endfor %}
            </select>
        </div>
    </div>
    <form method=\"post\">
        <div class=\"table-responsive\">
            <table id=\"tableActiviteFixees\" class=\"table\">
                <caption>Liste des activités fixées</caption>
                <tr>
                    <th> #</th>
                    <th> Designation</th>
                    <th> Type Activite</th>
                    <th> Heure</th>
                    <th> Jour/parité</th>
                    <th> Selection</th>
                </tr>
                {% for enfant in enfants %}
                    {% for activiteFixees in enfant.activitesFixees %}
                        <tr id=\"{{ enfant.id }}\" hidden>
                            {% include 'ActiviteBundle:ActiviteFixee:preview.html.twig' %}
                            <td id=\"{{ enfant.id }}\">
                                <div class=\"form-check\">
                                    <label class=\"form-check-label\">
                                        <input type=\"checkbox\" name=\"idActivitesFixee[]\" value=\"{{ activiteFixees.id }}\"
                                               class=\"form-check-input\">
                                    </label>
                                </div>
                            </td>
                        </tr>
                    {% endfor %}
                {% endfor %}
                <tr>
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
", "ActiviteBundle:ActiviteFixee:index.html.twig", "C:\\xampp\\htdocs\\gpac-20170211T083052Z\\gpac\\src\\ActiviteBundle/Resources/views/ActiviteFixee/index.html.twig");
    }
}

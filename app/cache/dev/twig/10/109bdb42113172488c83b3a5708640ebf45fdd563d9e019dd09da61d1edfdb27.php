<?php

/* CoreBundle:Affectation:affecter_enfant_activite_preview.html.twig */
class __TwigTemplate_bf94c553d4bdc04fb1f8102f9ef18952ff5111b7bb4302de67d250e66822e80f extends Twig_Template
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
        $__internal_c7bdf1b69c8d21d9a7b2ecb4b8d7ef608e1feb616bdc71a71a57cdb89e0f6c72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7bdf1b69c8d21d9a7b2ecb4b8d7ef608e1feb616bdc71a71a57cdb89e0f6c72->enter($__internal_c7bdf1b69c8d21d9a7b2ecb4b8d7ef608e1feb616bdc71a71a57cdb89e0f6c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle:Affectation:affecter_enfant_activite_preview.html.twig"));

        // line 1
        if ((isset($context["obligatoire"]) ? $context["obligatoire"] : $this->getContext($context, "obligatoire"))) {
            // line 2
            echo "    <h3> Affecter des activités obligatoire à un enfant </h3>
";
        } else {
            // line 4
            echo "    <h3> Affecter des activités optionnel à un enfant </h3>
";
        }
        // line 6
        echo "<div class=\"row\">
    <div class=\"col-md-2\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"form-group\">
                    <label for=\"group\">Groupe:</label>
                    <select class=\"form-control\" id=\"groupe\" name=\"groupe\"
                            onchange=\"selectGroup(document.getElementsByName('groupe')[0].value)\">
                        <option>aucun</option>
                        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 16
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "designation", array()), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                    </select>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"form-group\">
                    <label for=\"group\">Enfant:</label>
                    <select class=\"form-control\" id=\"enfant\" name=\"enfant\">
                        <option>aucun</option>
                        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["enfants"]) ? $context["enfants"] : $this->getContext($context, "enfants")));
        foreach ($context['_seq'] as $context["_key"] => $context["enfant"]) {
            // line 29
            echo "                            <option id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["enfant"], "groupe", array()), "id", array()), "html", null, true);
            echo "\"
                                    value=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["enfant"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["enfant"], "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["enfant"], "nom", array()), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enfant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-md-10\">
        <div class=\"row\">
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
                        ";
        // line 51
        if ((isset($context["obligatoire"]) ? $context["obligatoire"] : $this->getContext($context, "obligatoire"))) {
            // line 52
            echo "                            <th> Ecart</th>
                            <th> Quotas</th>
                        ";
        }
        // line 55
        echo "                        <th> Selection</th>
                    </tr>
                    ";
        // line 57
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
            // line 58
            echo "                        <tr>
                            ";
            // line 59
            $this->loadTemplate("ActiviteBundle:Activite:preview.html.twig", "CoreBundle:Affectation:affecter_enfant_activite_preview.html.twig", 59)->display($context);
            // line 60
            echo "                            ";
            if ((isset($context["obligatoire"]) ? $context["obligatoire"] : $this->getContext($context, "obligatoire"))) {
                // line 61
                echo "                                <td>
                                    <input input type=\"number\" name=\"ecarts[";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["activite"], "id", array()), "html", null, true);
                echo "]\">
                                </td>
                                <td>
                                    <input input type=\"number\" name=\"quotas[";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["activite"], "id", array()), "html", null, true);
                echo "]\">
                                </td>
                            ";
            }
            // line 68
            echo "                            <td>
                                <div class=\"form-check\">
                                    <label class=\"form-check-label\">
                                        <input type=\"checkbox\" name=\"idActivites[]\" value=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["activite"], "id", array()), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                    <tr>
                        <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                        ";
        // line 79
        if ((isset($context["obligatoire"]) ? $context["obligatoire"] : $this->getContext($context, "obligatoire"))) {
            // line 80
            echo "                            <td></td><td></td>
                        ";
        }
        // line 82
        echo "                        <td><button type=\"submit\" class=\"btn btn-primary\">Affecter</button></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>


";
        
        $__internal_c7bdf1b69c8d21d9a7b2ecb4b8d7ef608e1feb616bdc71a71a57cdb89e0f6c72->leave($__internal_c7bdf1b69c8d21d9a7b2ecb4b8d7ef608e1feb616bdc71a71a57cdb89e0f6c72_prof);

    }

    public function getTemplateName()
    {
        return "CoreBundle:Affectation:affecter_enfant_activite_preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 82,  194 => 80,  192 => 79,  188 => 77,  168 => 71,  163 => 68,  157 => 65,  151 => 62,  148 => 61,  145 => 60,  143 => 59,  140 => 58,  123 => 57,  119 => 55,  114 => 52,  112 => 51,  91 => 32,  79 => 30,  74 => 29,  70 => 28,  58 => 18,  47 => 16,  43 => 15,  32 => 6,  28 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if obligatoire %}
    <h3> Affecter des activités obligatoire à un enfant </h3>
{% else %}
    <h3> Affecter des activités optionnel à un enfant </h3>
{% endif %}
<div class=\"row\">
    <div class=\"col-md-2\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"form-group\">
                    <label for=\"group\">Groupe:</label>
                    <select class=\"form-control\" id=\"groupe\" name=\"groupe\"
                            onchange=\"selectGroup(document.getElementsByName('groupe')[0].value)\">
                        <option>aucun</option>
                        {% for group in groups %}
                            <option value=\"{{ group.id }}\">{{ group.designation }}</option>
                        {% endfor %}
                    </select>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"form-group\">
                    <label for=\"group\">Enfant:</label>
                    <select class=\"form-control\" id=\"enfant\" name=\"enfant\">
                        <option>aucun</option>
                        {% for enfant in enfants %}
                            <option id=\"{{ enfant.groupe.id }}\"
                                    value=\"{{ enfant.id }}\">{{ enfant.prenom }} {{ enfant.nom }}</option>
                        {% endfor %}
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-md-10\">
        <div class=\"row\">
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
                        {% if obligatoire %}
                            <th> Ecart</th>
                            <th> Quotas</th>
                        {% endif %}
                        <th> Selection</th>
                    </tr>
                    {% for activite in activites %}
                        <tr>
                            {% include 'ActiviteBundle:Activite:preview.html.twig' %}
                            {% if obligatoire %}
                                <td>
                                    <input input type=\"number\" name=\"ecarts[{{ activite.id }}]\">
                                </td>
                                <td>
                                    <input input type=\"number\" name=\"quotas[{{ activite.id }}]\">
                                </td>
                            {% endif %}
                            <td>
                                <div class=\"form-check\">
                                    <label class=\"form-check-label\">
                                        <input type=\"checkbox\" name=\"idActivites[]\" value=\"{{ activite.id }}\" class=\"form-check-input\">
                                    </label>
                                </div>
                            </td>
                        </tr>
                    {% endfor %}
                    <tr>
                        <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                        {% if obligatoire %}
                            <td></td><td></td>
                        {% endif %}
                        <td><button type=\"submit\" class=\"btn btn-primary\">Affecter</button></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>


", "CoreBundle:Affectation:affecter_enfant_activite_preview.html.twig", "C:\\xampp\\htdocs\\gpac-20170211T083052Z\\gpac\\src\\CoreBundle/Resources/views/Affectation/affecter_enfant_activite_preview.html.twig");
    }
}

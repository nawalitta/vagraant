<?php

/* RessourceBundle:FenetreHoraire:index.html.twig */
class __TwigTemplate_81694d9304d38db680d12424db51665efaebadc3b9dbdb4e81034b2dd9f96c6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "RessourceBundle:FenetreHoraire:index.html.twig", 1);
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
        $__internal_f04e95d469f510c729185699dd33221d095bef6ebaf402fe559ebb628454782c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f04e95d469f510c729185699dd33221d095bef6ebaf402fe559ebb628454782c->enter($__internal_f04e95d469f510c729185699dd33221d095bef6ebaf402fe559ebb628454782c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RessourceBundle:FenetreHoraire:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f04e95d469f510c729185699dd33221d095bef6ebaf402fe559ebb628454782c->leave($__internal_f04e95d469f510c729185699dd33221d095bef6ebaf402fe559ebb628454782c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2066f8444587acb18ff2f7b9dec99846d22844ca13aa7a3c480a1ac1de785bcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2066f8444587acb18ff2f7b9dec99846d22844ca13aa7a3c480a1ac1de785bcd->enter($__internal_2066f8444587acb18ff2f7b9dec99846d22844ca13aa7a3c480a1ac1de785bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des fenêtres horaires";
        
        $__internal_2066f8444587acb18ff2f7b9dec99846d22844ca13aa7a3c480a1ac1de785bcd->leave($__internal_2066f8444587acb18ff2f7b9dec99846d22844ca13aa7a3c480a1ac1de785bcd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_77900ba1321cbdaf545e2fc76ff4cf9d3486c1f220ba8582488247b046b0ecfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77900ba1321cbdaf545e2fc76ff4cf9d3486c1f220ba8582488247b046b0ecfd->enter($__internal_77900ba1321cbdaf545e2fc76ff4cf9d3486c1f220ba8582488247b046b0ecfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <nav class=\"navbar navbar-default\">
        <div>
            <ul class=\"nav navbar-nav\">
                <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("RessourceBundle_FenetreHoraire_edit");
        echo "\"><input type=\"button\"
                                                                                       class=\"btn btn-primary\"
                                                                                       name=\"btnAjout\"
                                                                                       value=\"Ajouter une fenetre horaire\"/></a>
                </li>
            </ul>
        </div>
    </nav>
    ";
        // line 17
        if (((isset($context["erreur"]) ? $context["erreur"] : $this->getContext($context, "erreur")) != "")) {
            // line 18
            echo "        <div class=\"alert alert-danger\" role=\"alert\">
            <label>
                ";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["erreur"]) ? $context["erreur"] : $this->getContext($context, "erreur")), "html", null, true);
            echo "
            </label>
        </div>
    ";
        }
        // line 24
        echo "    <form method=\"post\">
        <div class=\"table-responsive\">
            <table class=\"table\">
                <caption>Fenetres horaire</caption>
                <tr>
                    <th> #</th>
                    <th> Lundi</th>
                    <th> Mardi</th>
                    <th> Mercredi</th>
                    <th> Jeudi</th>
                    <th> Vendredi</th>
                    <th> Selection</th>
                </tr>
                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fenetresHoraire"]) ? $context["fenetresHoraire"] : $this->getContext($context, "fenetresHoraire")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["fh"]) {
            // line 38
            echo "                    <tr>
                        ";
            // line 39
            $this->loadTemplate("RessourceBundle:FenetreHoraire:preview.html.twig", "RessourceBundle:FenetreHoraire:index.html.twig", 39)->display($context);
            // line 40
            echo "                        <td>
                            <div class=\"form-check\">
                                <label class=\"form-check-label\">
                                    <input type=\"checkbox\" name=\"idfhs[]\" value=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["fh"], "id", array()), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fh'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                <tr>
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
        
        $__internal_77900ba1321cbdaf545e2fc76ff4cf9d3486c1f220ba8582488247b046b0ecfd->leave($__internal_77900ba1321cbdaf545e2fc76ff4cf9d3486c1f220ba8582488247b046b0ecfd_prof);

    }

    public function getTemplateName()
    {
        return "RessourceBundle:FenetreHoraire:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 49,  124 => 43,  119 => 40,  117 => 39,  114 => 38,  97 => 37,  82 => 24,  75 => 20,  71 => 18,  69 => 17,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}Liste des fenêtres horaires{% endblock %}

{% block body %}
    <nav class=\"navbar navbar-default\">
        <div>
            <ul class=\"nav navbar-nav\">
                <li><a href=\"{{ path('RessourceBundle_FenetreHoraire_edit') }}\"><input type=\"button\"
                                                                                       class=\"btn btn-primary\"
                                                                                       name=\"btnAjout\"
                                                                                       value=\"Ajouter une fenetre horaire\"/></a>
                </li>
            </ul>
        </div>
    </nav>
    {% if erreur != \"\" %}
        <div class=\"alert alert-danger\" role=\"alert\">
            <label>
                {{ erreur }}
            </label>
        </div>
    {% endif %}
    <form method=\"post\">
        <div class=\"table-responsive\">
            <table class=\"table\">
                <caption>Fenetres horaire</caption>
                <tr>
                    <th> #</th>
                    <th> Lundi</th>
                    <th> Mardi</th>
                    <th> Mercredi</th>
                    <th> Jeudi</th>
                    <th> Vendredi</th>
                    <th> Selection</th>
                </tr>
                {% for fh in fenetresHoraire %}
                    <tr>
                        {% include 'RessourceBundle:FenetreHoraire:preview.html.twig' %}
                        <td>
                            <div class=\"form-check\">
                                <label class=\"form-check-label\">
                                    <input type=\"checkbox\" name=\"idfhs[]\" value=\"{{ fh.id }}\" class=\"form-check-input\">
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
                    <td>
                        <button type=\"submit\" class=\"btn btn-primary\">Supprimer</button>
                    </td>
                </tr>
            </table>
        </div>
    </form>


{% endblock %}
", "RessourceBundle:FenetreHoraire:index.html.twig", "C:\\xampp\\htdocs\\gpac-20170211T083052Z\\gpac\\src\\RessourceBundle/Resources/views/FenetreHoraire/index.html.twig");
    }
}

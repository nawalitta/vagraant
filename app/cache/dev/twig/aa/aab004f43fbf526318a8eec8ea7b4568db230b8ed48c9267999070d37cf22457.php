<?php

/* RessourceBundle:Ressource:index.html.twig */
class __TwigTemplate_6ccedacb29105c15f4e40aa0b38591a9cec06713b020c48356fc071f2a73675a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "RessourceBundle:Ressource:index.html.twig", 1);
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
        $__internal_1a64ffd3e4daac9537228a316f3a6899255d93ef472711d1c9333e398db44736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a64ffd3e4daac9537228a316f3a6899255d93ef472711d1c9333e398db44736->enter($__internal_1a64ffd3e4daac9537228a316f3a6899255d93ef472711d1c9333e398db44736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RessourceBundle:Ressource:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a64ffd3e4daac9537228a316f3a6899255d93ef472711d1c9333e398db44736->leave($__internal_1a64ffd3e4daac9537228a316f3a6899255d93ef472711d1c9333e398db44736_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4f2209fa08cf8811d0d0a7715028bdedc4b9a4e96cf4dd16cb20a18f853becf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4f2209fa08cf8811d0d0a7715028bdedc4b9a4e96cf4dd16cb20a18f853becf->enter($__internal_c4f2209fa08cf8811d0d0a7715028bdedc4b9a4e96cf4dd16cb20a18f853becf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste ressources";
        
        $__internal_c4f2209fa08cf8811d0d0a7715028bdedc4b9a4e96cf4dd16cb20a18f853becf->leave($__internal_c4f2209fa08cf8811d0d0a7715028bdedc4b9a4e96cf4dd16cb20a18f853becf_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f478d0c82003476815d519a4c8449b0bce3775bafc211978912f707ce0a677aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f478d0c82003476815d519a4c8449b0bce3775bafc211978912f707ce0a677aa->enter($__internal_f478d0c82003476815d519a4c8449b0bce3775bafc211978912f707ce0a677aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <nav class=\"navbar navbar-default\">
        <div>
            <ul class=\"nav navbar-nav\">
                <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("RessourceBundle_Ressource_edit");
        echo "\"><input type=\"button\" class=\"btn btn-primary\"
                                                                                  name=\"btnAjout\"
                                                                                  value=\"Ajouter une ressource\"/></a>
                </li>
            </ul>
        </div>
    </nav>
    ";
        // line 16
        if (((isset($context["erreur"]) ? $context["erreur"] : $this->getContext($context, "erreur")) != "")) {
            // line 17
            echo "        <div class=\"alert alert-danger\" role=\"alert\">
            <label>
                ";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["erreur"]) ? $context["erreur"] : $this->getContext($context, "erreur")), "html", null, true);
            echo "
            </label>
        </div>
    ";
        }
        // line 23
        echo "    <form method=\"post\">
        <div class=\"table-responsive\">
            <table class=\"table\">
                <caption>Liste des Ressources</caption>
                <tr>
                    <th> #</th>
                    <th> Nom</th>
                    <th> Selection</th>
                </tr>
                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ressources"]) ? $context["ressources"] : $this->getContext($context, "ressources")));
        foreach ($context['_seq'] as $context["_key"] => $context["ressource"]) {
            // line 33
            echo "                    <tr>
                        <td>
                            <a href=";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("RessourceBundle_Ressource_show", array("id" => $this->getAttribute($context["ressource"], "id", array()))), "html", null, true);
            echo "> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ressource"], "id", array()), "html", null, true);
            echo "</a>
                        </td>
                        <td>
                            <a href=";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("RessourceBundle_Ressource_show", array("id" => $this->getAttribute($context["ressource"], "id", array()))), "html", null, true);
            echo "> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ressource"], "designation", array()), "html", null, true);
            echo "</a>
                        </td>
                        <td>
                            <div class=\"form-check\">
                                <label class=\"form-check-label\">
                                    <input type=\"checkbox\" name=\"idRessources[]\" value=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["ressource"], "id", array()), "html", null, true);
            echo "\"
                                           class=\"form-check-input\">
                                </label>
                            </div>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ressource'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                <tr>
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
        
        $__internal_f478d0c82003476815d519a4c8449b0bce3775bafc211978912f707ce0a677aa->leave($__internal_f478d0c82003476815d519a4c8449b0bce3775bafc211978912f707ce0a677aa_prof);

    }

    public function getTemplateName()
    {
        return "RessourceBundle:Ressource:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 50,  118 => 43,  108 => 38,  100 => 35,  96 => 33,  92 => 32,  81 => 23,  74 => 19,  70 => 17,  68 => 16,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}Liste ressources{% endblock %}

{% block body %}
    <nav class=\"navbar navbar-default\">
        <div>
            <ul class=\"nav navbar-nav\">
                <li><a href=\"{{ path('RessourceBundle_Ressource_edit') }}\"><input type=\"button\" class=\"btn btn-primary\"
                                                                                  name=\"btnAjout\"
                                                                                  value=\"Ajouter une ressource\"/></a>
                </li>
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
    <form method=\"post\">
        <div class=\"table-responsive\">
            <table class=\"table\">
                <caption>Liste des Ressources</caption>
                <tr>
                    <th> #</th>
                    <th> Nom</th>
                    <th> Selection</th>
                </tr>
                {% for ressource in ressources %}
                    <tr>
                        <td>
                            <a href={{ path('RessourceBundle_Ressource_show',{ 'id': ressource.id }) }}> {{ ressource.id }}</a>
                        </td>
                        <td>
                            <a href={{ path('RessourceBundle_Ressource_show',{ 'id': ressource.id }) }}> {{ ressource.designation }}</a>
                        </td>
                        <td>
                            <div class=\"form-check\">
                                <label class=\"form-check-label\">
                                    <input type=\"checkbox\" name=\"idRessources[]\" value=\"{{ ressource.id }}\"
                                           class=\"form-check-input\">
                                </label>
                            </div>
                        </td>
                    </tr>
                {% endfor %}
                <tr>
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
", "RessourceBundle:Ressource:index.html.twig", "C:\\xampp\\htdocs\\gpac-20170211T083052Z\\gpac\\src\\RessourceBundle/Resources/views/Ressource/index.html.twig");
    }
}

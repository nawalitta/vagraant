<?php

/* RessourceBundle:TypeRessource:index.html.twig */
class __TwigTemplate_0e4f4bbafde821cbaa1d67d7dedcabbeeed571cc600f318d9b87aab337f6ff86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "RessourceBundle:TypeRessource:index.html.twig", 1);
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
        $__internal_8da1d5acccf4269d3d6382bbba643e673b12153fcb6fc673402aa8b9627a4b77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8da1d5acccf4269d3d6382bbba643e673b12153fcb6fc673402aa8b9627a4b77->enter($__internal_8da1d5acccf4269d3d6382bbba643e673b12153fcb6fc673402aa8b9627a4b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RessourceBundle:TypeRessource:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8da1d5acccf4269d3d6382bbba643e673b12153fcb6fc673402aa8b9627a4b77->leave($__internal_8da1d5acccf4269d3d6382bbba643e673b12153fcb6fc673402aa8b9627a4b77_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_83129a83c9ed9164c7aabf5b7b374b72e2ef42b47fbfb819c213aa13e4965f31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83129a83c9ed9164c7aabf5b7b374b72e2ef42b47fbfb819c213aa13e4965f31->enter($__internal_83129a83c9ed9164c7aabf5b7b374b72e2ef42b47fbfb819c213aa13e4965f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste type de ressources";
        
        $__internal_83129a83c9ed9164c7aabf5b7b374b72e2ef42b47fbfb819c213aa13e4965f31->leave($__internal_83129a83c9ed9164c7aabf5b7b374b72e2ef42b47fbfb819c213aa13e4965f31_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8cd1e43def00087f86e4713c7d7b3a37349bd7ca8d4fbc8ff0f7a4fd7f347abf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cd1e43def00087f86e4713c7d7b3a37349bd7ca8d4fbc8ff0f7a4fd7f347abf->enter($__internal_8cd1e43def00087f86e4713c7d7b3a37349bd7ca8d4fbc8ff0f7a4fd7f347abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <nav class=\"navbar navbar-default\">
        <div>
            <ul class=\"nav navbar-nav\">
                <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("RessourceBundle_TypeRessource_edit");
        echo "\"><input type=\"button\"
                                                                                    class=\"btn btn-primary\"
                                                                                    name=\"btnAjout\"
                                                                                    value=\"Ajouter un type de ressource\"/></a>
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
            echo twig_escape_filter($this->env, (isset($context["erreurMsg"]) ? $context["erreurMsg"] : $this->getContext($context, "erreurMsg")), "html", null, true);
            echo "
            </label>
        </div>
    ";
        }
        // line 24
        echo "    <form method=\"post\">
        <div class=\"table-responsive\">
            <table class=\"table\">
                <caption>Liste des types d'activités</caption>
                <tr>
                    <th> Type ressource id</th>
                    <th> Nom type ressource</th>
                    <th> Selection</th>
                </tr>
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["typeRessources"]) ? $context["typeRessources"] : $this->getContext($context, "typeRessources")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["typeRessource"]) {
            // line 34
            echo "                    <tr>
                        ";
            // line 35
            $this->loadTemplate("RessourceBundle:TypeRessource:preview.html.twig", "RessourceBundle:TypeRessource:index.html.twig", 35)->display($context);
            // line 36
            echo "                        <td>
                            <div class=\"form-check\">
                                <label class=\"form-check-label\">
                                    <input type=\"checkbox\" name=\"idTypeRessources[]\" value=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["typeRessource"], "id", array()), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typeRessource'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
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
        
        $__internal_8cd1e43def00087f86e4713c7d7b3a37349bd7ca8d4fbc8ff0f7a4fd7f347abf->leave($__internal_8cd1e43def00087f86e4713c7d7b3a37349bd7ca8d4fbc8ff0f7a4fd7f347abf_prof);

    }

    public function getTemplateName()
    {
        return "RessourceBundle:TypeRessource:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 46,  120 => 39,  115 => 36,  113 => 35,  110 => 34,  93 => 33,  82 => 24,  75 => 20,  71 => 18,  69 => 17,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}Liste type de ressources{% endblock %}

{% block body %}
    <nav class=\"navbar navbar-default\">
        <div>
            <ul class=\"nav navbar-nav\">
                <li><a href=\"{{ path('RessourceBundle_TypeRessource_edit') }}\"><input type=\"button\"
                                                                                    class=\"btn btn-primary\"
                                                                                    name=\"btnAjout\"
                                                                                    value=\"Ajouter un type de ressource\"/></a>
                </li>
            </ul>
        </div>
    </nav>
    {% if erreur!=\"\" %}
        <div class=\"alert alert-danger\" role=\"alert\">
            <label>
                {{ erreurMsg }}
            </label>
        </div>
    {% endif %}
    <form method=\"post\">
        <div class=\"table-responsive\">
            <table class=\"table\">
                <caption>Liste des types d'activités</caption>
                <tr>
                    <th> Type ressource id</th>
                    <th> Nom type ressource</th>
                    <th> Selection</th>
                </tr>
                {% for typeRessource in typeRessources %}
                    <tr>
                        {% include 'RessourceBundle:TypeRessource:preview.html.twig' %}
                        <td>
                            <div class=\"form-check\">
                                <label class=\"form-check-label\">
                                    <input type=\"checkbox\" name=\"idTypeRessources[]\" value=\"{{ typeRessource.id }}\"
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
", "RessourceBundle:TypeRessource:index.html.twig", "C:\\xampp\\htdocs\\gpac-20170211T083052Z\\gpac\\src\\RessourceBundle/Resources/views/TypeRessource/index.html.twig");
    }
}

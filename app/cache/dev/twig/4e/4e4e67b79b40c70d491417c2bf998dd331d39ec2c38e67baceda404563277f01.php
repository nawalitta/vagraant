<?php

/* ActiviteBundle:TypeActivite:index.html.twig */
class __TwigTemplate_e974ad3a037c170834f96beb5b87306393c9f05f2579f88e08f214247d1409b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ActiviteBundle:TypeActivite:index.html.twig", 1);
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
        $__internal_70ebc9c2d71f2392e589728b3bf07517c5c46e3695dbf9c16b480656a2284f9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70ebc9c2d71f2392e589728b3bf07517c5c46e3695dbf9c16b480656a2284f9d->enter($__internal_70ebc9c2d71f2392e589728b3bf07517c5c46e3695dbf9c16b480656a2284f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ActiviteBundle:TypeActivite:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70ebc9c2d71f2392e589728b3bf07517c5c46e3695dbf9c16b480656a2284f9d->leave($__internal_70ebc9c2d71f2392e589728b3bf07517c5c46e3695dbf9c16b480656a2284f9d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_49f6bc2041d8a331289095535cddd01b806cff12fb04f5d7b4daa95185423ffc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49f6bc2041d8a331289095535cddd01b806cff12fb04f5d7b4daa95185423ffc->enter($__internal_49f6bc2041d8a331289095535cddd01b806cff12fb04f5d7b4daa95185423ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste type activités";
        
        $__internal_49f6bc2041d8a331289095535cddd01b806cff12fb04f5d7b4daa95185423ffc->leave($__internal_49f6bc2041d8a331289095535cddd01b806cff12fb04f5d7b4daa95185423ffc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9bf8e589a2609eebd246b74946adb8c952908364bfd61eb0d1a72f0a13433428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bf8e589a2609eebd246b74946adb8c952908364bfd61eb0d1a72f0a13433428->enter($__internal_9bf8e589a2609eebd246b74946adb8c952908364bfd61eb0d1a72f0a13433428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <nav class=\"navbar navbar-default\">
        <div>
            <ul class=\"nav navbar-nav\">
                <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ActiviteBundle_TypeActivite_edit");
        echo "\"><input type=\"button\"
                                                                                    class=\"btn btn-primary\"
                                                                                    name=\"btnAjout\"
                                                                                    value=\"Ajouter un type d'activite\"/></a>
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
                <caption>Liste des types d'activités</caption>
                <tr>
                    <th> Type activité id</th>
                    <th> Nom type activité</th>
                    <th> Selection</th>
                </tr>
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["typeActivites"]) ? $context["typeActivites"] : $this->getContext($context, "typeActivites")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["typeActivite"]) {
            // line 34
            echo "                    <tr>
                        ";
            // line 35
            $this->loadTemplate("ActiviteBundle:TypeActivite:preview.html.twig", "ActiviteBundle:TypeActivite:index.html.twig", 35)->display($context);
            // line 36
            echo "                        <td>
                            <div class=\"form-check\">
                                <label class=\"form-check-label\">
                                    <input type=\"checkbox\" name=\"idTypeActivites[]\" value=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["typeActivite"], "id", array()), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typeActivite'], $context['_parent'], $context['loop']);
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
        
        $__internal_9bf8e589a2609eebd246b74946adb8c952908364bfd61eb0d1a72f0a13433428->leave($__internal_9bf8e589a2609eebd246b74946adb8c952908364bfd61eb0d1a72f0a13433428_prof);

    }

    public function getTemplateName()
    {
        return "ActiviteBundle:TypeActivite:index.html.twig";
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

{% block title %}Liste type activités{% endblock %}

{% block body %}
    <nav class=\"navbar navbar-default\">
        <div>
            <ul class=\"nav navbar-nav\">
                <li><a href=\"{{ path('ActiviteBundle_TypeActivite_edit') }}\"><input type=\"button\"
                                                                                    class=\"btn btn-primary\"
                                                                                    name=\"btnAjout\"
                                                                                    value=\"Ajouter un type d'activite\"/></a>
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
                <caption>Liste des types d'activités</caption>
                <tr>
                    <th> Type activité id</th>
                    <th> Nom type activité</th>
                    <th> Selection</th>
                </tr>
                {% for typeActivite in typeActivites %}
                    <tr>
                        {% include 'ActiviteBundle:TypeActivite:preview.html.twig' %}
                        <td>
                            <div class=\"form-check\">
                                <label class=\"form-check-label\">
                                    <input type=\"checkbox\" name=\"idTypeActivites[]\" value=\"{{ typeActivite.id }}\"
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
", "ActiviteBundle:TypeActivite:index.html.twig", "C:\\xampp\\htdocs\\gpac-20170211T083052Z\\gpac\\src\\ActiviteBundle/Resources/views/TypeActivite/index.html.twig");
    }
}

<?php

/* RessourceBundle:Groupe:index.html.twig */
class __TwigTemplate_c0b15cf84d5bf77f871bc20706cbb57fb25122911b16f9408d2c2cf4295e0dcf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "RessourceBundle:Groupe:index.html.twig", 1);
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
        $__internal_9803947367f8ede8d8e40c914825bb57cca3feb809314a1d877cc76ac2c3f06d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9803947367f8ede8d8e40c914825bb57cca3feb809314a1d877cc76ac2c3f06d->enter($__internal_9803947367f8ede8d8e40c914825bb57cca3feb809314a1d877cc76ac2c3f06d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RessourceBundle:Groupe:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9803947367f8ede8d8e40c914825bb57cca3feb809314a1d877cc76ac2c3f06d->leave($__internal_9803947367f8ede8d8e40c914825bb57cca3feb809314a1d877cc76ac2c3f06d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd7aac7d0844b498541db2233c73035d8ba5ea196a6cf0f41806ecaf1baaae3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd7aac7d0844b498541db2233c73035d8ba5ea196a6cf0f41806ecaf1baaae3d->enter($__internal_cd7aac7d0844b498541db2233c73035d8ba5ea196a6cf0f41806ecaf1baaae3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste groupes";
        
        $__internal_cd7aac7d0844b498541db2233c73035d8ba5ea196a6cf0f41806ecaf1baaae3d->leave($__internal_cd7aac7d0844b498541db2233c73035d8ba5ea196a6cf0f41806ecaf1baaae3d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d92e424001457a60d17b0e60526155a9bb9d58448db110d4968941a72d140b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d92e424001457a60d17b0e60526155a9bb9d58448db110d4968941a72d140b3->enter($__internal_6d92e424001457a60d17b0e60526155a9bb9d58448db110d4968941a72d140b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <nav class=\"navbar navbar-default\">
        <div>
            <ul class=\"nav navbar-nav\">
                <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("RessourceBundle_Groupe_edit");
        echo "\"><input type=\"button\" class=\"btn btn-primary\"
                                                                               name=\"btnAjout\"
                                                                               value=\"Ajouter un groupe\"/></a></li>
            </ul>
        </div>
    </nav>
    <form>
        <div class=\"table-responsive\">
            <table class=\"table\">
                <caption>Liste des groupes</caption>
                <tr>
                    <th>#</th>
                    <th>Nom du groupe</th>
                    <th></th>
                </tr>
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groupes"]) ? $context["groupes"] : $this->getContext($context, "groupes")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["groupe"]) {
            // line 25
            echo "                    <tr>
                        ";
            // line 26
            $this->loadTemplate("RessourceBundle:Groupe:preview.html.twig", "RessourceBundle:Groupe:index.html.twig", 26)->display($context);
            // line 27
            echo "                        <td>
                            <div class=\"form-check\">
                                <label class=\"form-check-label\">
                                    <input type=\"checkbox\" name=\"idGroupes[]\" value=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["groupe"], "id", array()), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groupe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
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
        
        $__internal_6d92e424001457a60d17b0e60526155a9bb9d58448db110d4968941a72d140b3->leave($__internal_6d92e424001457a60d17b0e60526155a9bb9d58448db110d4968941a72d140b3_prof);

    }

    public function getTemplateName()
    {
        return "RessourceBundle:Groupe:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 37,  103 => 30,  98 => 27,  96 => 26,  93 => 25,  76 => 24,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}Liste groupes{% endblock %}

{% block body %}
    <nav class=\"navbar navbar-default\">
        <div>
            <ul class=\"nav navbar-nav\">
                <li><a href=\"{{ path('RessourceBundle_Groupe_edit') }}\"><input type=\"button\" class=\"btn btn-primary\"
                                                                               name=\"btnAjout\"
                                                                               value=\"Ajouter un groupe\"/></a></li>
            </ul>
        </div>
    </nav>
    <form>
        <div class=\"table-responsive\">
            <table class=\"table\">
                <caption>Liste des groupes</caption>
                <tr>
                    <th>#</th>
                    <th>Nom du groupe</th>
                    <th></th>
                </tr>
                {% for groupe in groupes %}
                    <tr>
                        {% include 'RessourceBundle:Groupe:preview.html.twig' %}
                        <td>
                            <div class=\"form-check\">
                                <label class=\"form-check-label\">
                                    <input type=\"checkbox\" name=\"idGroupes[]\" value=\"{{ groupe.id }}\"
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
", "RessourceBundle:Groupe:index.html.twig", "C:\\xampp\\htdocs\\gpac-20170211T083052Z\\gpac\\src\\RessourceBundle/Resources/views/Groupe/index.html.twig");
    }
}

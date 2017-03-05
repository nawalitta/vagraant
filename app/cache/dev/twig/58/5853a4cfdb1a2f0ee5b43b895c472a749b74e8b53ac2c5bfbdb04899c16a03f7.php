<?php

/* CoreBundle:Default:index.html.twig */
class __TwigTemplate_014fad9df24a401ef656d0be41267176f4a1264e244fd8bb0dfca4b59972ead0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CoreBundle:Default:index.html.twig", 1);
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
        $__internal_89ed9599ab86842c42cd5be2aeeb364c51c81e1d433a460450ad3bea2a922989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89ed9599ab86842c42cd5be2aeeb364c51c81e1d433a460450ad3bea2a922989->enter($__internal_89ed9599ab86842c42cd5be2aeeb364c51c81e1d433a460450ad3bea2a922989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89ed9599ab86842c42cd5be2aeeb364c51c81e1d433a460450ad3bea2a922989->leave($__internal_89ed9599ab86842c42cd5be2aeeb364c51c81e1d433a460450ad3bea2a922989_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_44fc251576ad55930f188bb77b0f04caeed8172e9e94ffbb159a78cc1af7fb33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44fc251576ad55930f188bb77b0f04caeed8172e9e94ffbb159a78cc1af7fb33->enter($__internal_44fc251576ad55930f188bb77b0f04caeed8172e9e94ffbb159a78cc1af7fb33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "gpac";
        
        $__internal_44fc251576ad55930f188bb77b0f04caeed8172e9e94ffbb159a78cc1af7fb33->leave($__internal_44fc251576ad55930f188bb77b0f04caeed8172e9e94ffbb159a78cc1af7fb33_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_88ae1ca098c2149ce24f75ba88e3169963b885875f9e6989ce2a90ab1cc0e391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88ae1ca098c2149ce24f75ba88e3169963b885875f9e6989ce2a90ab1cc0e391->enter($__internal_88ae1ca098c2149ce24f75ba88e3169963b885875f9e6989ce2a90ab1cc0e391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"row\" style=\"padding-top: 30px\">
        <div class=\"col-lg-3\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Enfants</h3>
                </div>
                <div class=\"panel-body\">
                    <ul>
                        <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("RessourceBundle_Enfant_index");
        echo "\">Liste des enfants</a></li>
                        <li><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("RessourceBundle_Groupe_index");
        echo "\">Liste des groupes</a></li>
                        <li><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("RessourceBundle_FenetreHoraire_index");
        echo "\">Fenêtre horaire</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3\">
            <div class=\"panel panel-warning\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Activités</h3>
                </div>
                <div class=\"panel-body\">
                    <ul>
                        <li><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ActiviteBundle_Activite_index");
        echo "\">Liste des activités</a></li>
                        <li><a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ActiviteBundle_TypeActivite_index");
        echo "\">Liste des types d'activités</a>
                        <li><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ActiviteBundle_ActiviteFixee_index");
        echo "\"> Liste activités fixées par
                                enfant</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Ressources</h3>
                </div>
                <div class=\"panel-body\">
                    <ul>
                        <li><a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("RessourceBundle_Ressource_index");
        echo "\">Liste des ressources</a></li>
                        <li><a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("RessourceBundle_TypeRessource_index");
        echo "\">Liste des types ressources</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3\">
            <div class=\"panel panel-success\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Affectations</h3>
                </div>
                <div class=\"panel-body\">
                    <ul>
                        <li><a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("CoreBundle_affecter_enfant_activite_obligatoire");
        echo "\">Enfant / Activite
                                Obligatoire</a></li>
                        <li><a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("CoreBundle_affecter_enfant_activite_optionnelle");
        echo "\">Enfant / Activite
                                Optionnelle</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\" style=\"padding-top: 200px\">
        <div class=\"col-lg-12\">
            <div id=\"logo\">
                <center><img alt=\"logo\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/Images/logo.png"), "html", null, true);
        echo "\"/></center>
            </div>
        </div>
    </div>
";
        
        $__internal_88ae1ca098c2149ce24f75ba88e3169963b885875f9e6989ce2a90ab1cc0e391->leave($__internal_88ae1ca098c2149ce24f75ba88e3169963b885875f9e6989ce2a90ab1cc0e391_prof);

    }

    public function getTemplateName()
    {
        return "CoreBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 70,  135 => 60,  130 => 58,  114 => 45,  110 => 44,  94 => 31,  90 => 30,  86 => 29,  71 => 17,  67 => 16,  63 => 15,  53 => 7,  47 => 6,  35 => 3,  11 => 1,);
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

{% block title %}gpac{% endblock %}


{% block body %}
    <div class=\"row\" style=\"padding-top: 30px\">
        <div class=\"col-lg-3\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Enfants</h3>
                </div>
                <div class=\"panel-body\">
                    <ul>
                        <li><a href=\"{{ path('RessourceBundle_Enfant_index') }}\">Liste des enfants</a></li>
                        <li><a href=\"{{ path('RessourceBundle_Groupe_index') }}\">Liste des groupes</a></li>
                        <li><a href=\"{{ path('RessourceBundle_FenetreHoraire_index') }}\">Fenêtre horaire</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3\">
            <div class=\"panel panel-warning\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Activités</h3>
                </div>
                <div class=\"panel-body\">
                    <ul>
                        <li><a href=\"{{ path('ActiviteBundle_Activite_index') }}\">Liste des activités</a></li>
                        <li><a href=\"{{ path('ActiviteBundle_TypeActivite_index') }}\">Liste des types d'activités</a>
                        <li><a href=\"{{ path('ActiviteBundle_ActiviteFixee_index') }}\"> Liste activités fixées par
                                enfant</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Ressources</h3>
                </div>
                <div class=\"panel-body\">
                    <ul>
                        <li><a href=\"{{ path('RessourceBundle_Ressource_index') }}\">Liste des ressources</a></li>
                        <li><a href=\"{{ path('RessourceBundle_TypeRessource_index') }}\">Liste des types ressources</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3\">
            <div class=\"panel panel-success\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Affectations</h3>
                </div>
                <div class=\"panel-body\">
                    <ul>
                        <li><a href=\"{{ path('CoreBundle_affecter_enfant_activite_obligatoire') }}\">Enfant / Activite
                                Obligatoire</a></li>
                        <li><a href=\"{{ path('CoreBundle_affecter_enfant_activite_optionnelle') }}\">Enfant / Activite
                                Optionnelle</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\" style=\"padding-top: 200px\">
        <div class=\"col-lg-12\">
            <div id=\"logo\">
                <center><img alt=\"logo\" src=\"{{ asset('/Images/logo.png') }}\"/></center>
            </div>
        </div>
    </div>
{% endblock %}


", "CoreBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\gpac-20170211T083052Z\\gpac\\src\\CoreBundle/Resources/views/Default/index.html.twig");
    }
}

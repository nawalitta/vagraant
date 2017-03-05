<?php

/* menu.html.twig */
class __TwigTemplate_eb82a4cc5f58d69205a48d729b283d4b8e664d28a4ed60941292a8eb1f17e1e2 extends Twig_Template
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
        $__internal_950f96cf6dc80daa57fb9c1dfd10d3a90707f6d2699e26ee8795858f3afd9661 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_950f96cf6dc80daa57fb9c1dfd10d3a90707f6d2699e26ee8795858f3afd9661->enter($__internal_950f96cf6dc80daa57fb9c1dfd10d3a90707f6d2699e26ee8795858f3afd9661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-default\">
    <div class=\"container-fluid\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("CoreBundle_core_homepage");
        echo "\">GETIEM</a>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar-left\">
                <li>
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Enfants<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("RessourceBundle_Enfant_index");
        echo "\">Liste des enfants</a></li>
                        <li><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("RessourceBundle_Groupe_index");
        echo "\">Liste des groupes</a></li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Activité<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ActiviteBundle_Activite_index");
        echo "\">Listes des activités</a></li>
                        <li><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ActiviteBundle_TypeActivite_index");
        echo "\">Listes des types d'activités</a></li>
                        <li><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ActiviteBundle_ActiviteFixee_index");
        echo "\"> Liste activités fixées par enfant</a></li>

                    </ul>
                </li>
                <li>
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Ressources<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("RessourceBundle_Ressource_index");
        echo "\">Liste des ressources</a></li>
                        <li><a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("RessourceBundle_TypeRessource_index");
        echo "\">Liste des types ressources</a></li>
                    </ul>
                </li>
                <li><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("RessourceBundle_FenetreHoraire_index");
        echo "\">Fenêtres Horaires</a></li>
                <li><a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Calendar");
        echo "\"> Planning</a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Affectation<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("CoreBundle_affecter_enfant_activite_obligatoire");
        echo "\">Enfant / Activité Obligatoire</a></li>
                        <li><a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("CoreBundle_affecter_enfant_activite_optionnelle");
        echo "\">Enfant / Activité Optionnelle</a></li>
                    </ul>
                </li>
                <li><a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stats_homepage");
        echo "\">Statistiques</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

";
        
        $__internal_950f96cf6dc80daa57fb9c1dfd10d3a90707f6d2699e26ee8795858f3afd9661->leave($__internal_950f96cf6dc80daa57fb9c1dfd10d3a90707f6d2699e26ee8795858f3afd9661_prof);

    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 47,  100 => 44,  96 => 43,  89 => 39,  85 => 38,  79 => 35,  75 => 34,  65 => 27,  61 => 26,  57 => 25,  48 => 19,  44 => 18,  34 => 11,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-default\">
    <div class=\"container-fluid\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"{{path('CoreBundle_core_homepage')}}\">GETIEM</a>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar-left\">
                <li>
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Enfants<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"{{path('RessourceBundle_Enfant_index')}}\">Liste des enfants</a></li>
                        <li><a href=\"{{path('RessourceBundle_Groupe_index')}}\">Liste des groupes</a></li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Activité<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"{{path('ActiviteBundle_Activite_index')}}\">Listes des activités</a></li>
                        <li><a href=\"{{ path('ActiviteBundle_TypeActivite_index') }}\">Listes des types d'activités</a></li>
                        <li><a href=\"{{path('ActiviteBundle_ActiviteFixee_index')}}\"> Liste activités fixées par enfant</a></li>

                    </ul>
                </li>
                <li>
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Ressources<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"{{ path('RessourceBundle_Ressource_index') }}\">Liste des ressources</a></li>
                        <li><a href=\"{{ path('RessourceBundle_TypeRessource_index') }}\">Liste des types ressources</a></li>
                    </ul>
                </li>
                <li><a href=\"{{path('RessourceBundle_FenetreHoraire_index')}}\">Fenêtres Horaires</a></li>
                <li><a href=\"{{path('Calendar')}}\"> Planning</a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Affectation<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"{{path('CoreBundle_affecter_enfant_activite_obligatoire')}}\">Enfant / Activité Obligatoire</a></li>
                        <li><a href=\"{{path('CoreBundle_affecter_enfant_activite_optionnelle')}}\">Enfant / Activité Optionnelle</a></li>
                    </ul>
                </li>
                <li><a href=\"{{path('stats_homepage')}}\">Statistiques</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

", "menu.html.twig", "C:\\xampp\\htdocs\\gpac-20170211T083052Z\\gpac\\app\\Resources\\views\\menu.html.twig");
    }
}

<?php

/* CoreBundle:Default:index.html.twig */
class __TwigTemplate_402403277e36c1ac4a9c2a0cdb74c1d2733748e85328010354271208727730e1 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "gpac";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
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
        return array (  133 => 70,  120 => 60,  115 => 58,  99 => 45,  95 => 44,  79 => 31,  75 => 30,  71 => 29,  56 => 17,  52 => 16,  48 => 15,  38 => 7,  35 => 6,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "CoreBundle:Default:index.html.twig", "C:\\wamp\\www\\gpac\\src\\CoreBundle/Resources/views/Default/index.html.twig");
    }
}

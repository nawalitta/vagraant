<?php

/* ADesignsCalendarBundle:Calendar:calendar.html.twig */
class __TwigTemplate_87a584af895986d804b1f4b84a165358d76c49ecae0e9066092a6e1efec0b0cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ADesignsCalendarBundle:Calendar:calendar.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3170f807b2b90613cd3a986add81dee482640185ca61769a9eb864d176ac5a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3170f807b2b90613cd3a986add81dee482640185ca61769a9eb864d176ac5a0->enter($__internal_c3170f807b2b90613cd3a986add81dee482640185ca61769a9eb864d176ac5a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ADesignsCalendarBundle:Calendar:calendar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3170f807b2b90613cd3a986add81dee482640185ca61769a9eb864d176ac5a0->leave($__internal_c3170f807b2b90613cd3a986add81dee482640185ca61769a9eb864d176ac5a0_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ec9c087641b4b7328d45f92def4407600bd237afd033b4b16f75b1323a3b1e5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec9c087641b4b7328d45f92def4407600bd237afd033b4b16f75b1323a3b1e5d->enter($__internal_ec9c087641b4b7328d45f92def4407600bd237afd033b4b16f75b1323a3b1e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/adesignscalendar/css/fullcalendar/fullcalendar.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/adesignscalendar/css/fullcalendar/scheduler.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/adesignscalendar/css/fullcalendar/jquery-ui.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/adesignscalendar/css/fullcalendar/jquery-ui.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/adesignscalendar/css/fullcalendar/calendar.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_ec9c087641b4b7328d45f92def4407600bd237afd033b4b16f75b1323a3b1e5d->leave($__internal_ec9c087641b4b7328d45f92def4407600bd237afd033b4b16f75b1323a3b1e5d_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e129a4af0b005d1290d0c64701a74fd21921c2107449f26f1c1d4df67ad5fa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e129a4af0b005d1290d0c64701a74fd21921c2107449f26f1c1d4df67ad5fa1->enter($__internal_1e129a4af0b005d1290d0c64701a74fd21921c2107449f26f1c1d4df67ad5fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <div class=\"row\">
        <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Calendar_event_save");
        echo "\">
            <button style=\"margin-left: 25px\" type=\"button\" class=\"btn btn-success\">Sauvegarder</button>
        </a>
        <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Calendar_event_restore");
        echo "\">
            <button style=\"margin-left: 25px\" type=\"submit\" class=\"btn btn-primary\">Restaurer</button>
        </a>

        <div style=\"margin-left: 20px\" id=\"selector\" class=\"btn-group\">
            <button type=\"radio\" checked onclick=\"setParite(0)\" class=\"btn btn-primary active\">Semaine 1</button>
            <button type=\"radio\" onclick=\"setParite(1)\" class=\"btn btn-primary\">Semaine 2</button>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-5\">
            <div style=\"margin-left:25px; margin-top: 20px; width: 250px\" id='external-events'>
                <div id=\"trash\">
                    <h4>Suppression</h4>
                    <p>
                        <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/Images/trashcan.png"), "html", null, true);
        echo " \" alt=\"\">
                    </p>
                </div>
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Infos sur la plannification</h3>
                </div>
                <div class=\"panel-body\" style=\"height: 120px; overflow: auto\">
                    <div id=\"constraints\">
                        <ul id=\"ul_constraints\">
                            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["constraints"]) ? $context["constraints"] : $this->getContext($context, "constraints")));
        foreach ($context['_seq'] as $context["_key"] => $context["constraint"]) {
            // line 46
            echo "                                <li style=\"color: red\"> ";
            echo twig_escape_filter($this->env, $context["constraint"], "html", null, true);
            echo "</li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['constraint'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id=\"calendar-holder\"></div>
";
        
        $__internal_1e129a4af0b005d1290d0c64701a74fd21921c2107449f26f1c1d4df67ad5fa1->leave($__internal_1e129a4af0b005d1290d0c64701a74fd21921c2107449f26f1c1d4df67ad5fa1_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_19beb0770350dbc5ec7257b597a491547e01d7079f7677042b6c4ae845d9b2e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19beb0770350dbc5ec7257b597a491547e01d7079f7677042b6c4ae845d9b2e1->enter($__internal_19beb0770350dbc5ec7257b597a491547e01d7079f7677042b6c4ae845d9b2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 58
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/adesignscalendar/js/jquery/jquery-ui.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/adesignscalendar/js/jquery/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/adesignscalendar/js/fullcalendar/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/adesignscalendar/js/fullcalendar/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/adesignscalendar/js/fullcalendar/scheduler.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>


    <script type=\"text/javascript\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/adesignscalendar/js/calendar-settings.js"), "html", null, true);
        echo "\"></script>
    <script>
        var routeEnfant = \"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Calendar_enfant", array("id" => 1));
        echo "\";
        var parite = 0;
        function setParite(semaine) {
            if (semaine != parite) {
                parite = semaine;
                \$('#calendar-holder').fullCalendar('refetchResources');
            }

        }
    </script>
";
        
        $__internal_19beb0770350dbc5ec7257b597a491547e01d7079f7677042b6c4ae845d9b2e1->leave($__internal_19beb0770350dbc5ec7257b597a491547e01d7079f7677042b6c4ae845d9b2e1_prof);

    }

    public function getTemplateName()
    {
        return "ADesignsCalendarBundle:Calendar:calendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 72,  188 => 70,  182 => 67,  177 => 65,  172 => 63,  167 => 61,  163 => 60,  159 => 59,  154 => 58,  148 => 57,  134 => 48,  125 => 46,  121 => 45,  105 => 32,  87 => 17,  81 => 14,  78 => 13,  72 => 12,  63 => 9,  59 => 8,  55 => 7,  51 => 6,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/adesignscalendar/css/fullcalendar/fullcalendar.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/adesignscalendar/css/fullcalendar/scheduler.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/adesignscalendar/css/fullcalendar/jquery-ui.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/adesignscalendar/css/fullcalendar/jquery-ui.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/adesignscalendar/css/fullcalendar/calendar.css') }}\"/>
{% endblock %}

{% block body %}
    <div class=\"row\">
        <a href=\"{{ path('Calendar_event_save') }}\">
            <button style=\"margin-left: 25px\" type=\"button\" class=\"btn btn-success\">Sauvegarder</button>
        </a>
        <a href=\"{{ path('Calendar_event_restore') }}\">
            <button style=\"margin-left: 25px\" type=\"submit\" class=\"btn btn-primary\">Restaurer</button>
        </a>

        <div style=\"margin-left: 20px\" id=\"selector\" class=\"btn-group\">
            <button type=\"radio\" checked onclick=\"setParite(0)\" class=\"btn btn-primary active\">Semaine 1</button>
            <button type=\"radio\" onclick=\"setParite(1)\" class=\"btn btn-primary\">Semaine 2</button>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-5\">
            <div style=\"margin-left:25px; margin-top: 20px; width: 250px\" id='external-events'>
                <div id=\"trash\">
                    <h4>Suppression</h4>
                    <p>
                        <img src=\"{{ asset('/Images/trashcan.png') }} \" alt=\"\">
                    </p>
                </div>
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Infos sur la plannification</h3>
                </div>
                <div class=\"panel-body\" style=\"height: 120px; overflow: auto\">
                    <div id=\"constraints\">
                        <ul id=\"ul_constraints\">
                            {% for constraint in constraints %}
                                <li style=\"color: red\"> {{ constraint }}</li>
                            {% endfor %}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id=\"calendar-holder\"></div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script type=\"text/javascript\" src=\"{{ asset('bundles/adesignscalendar/js/jquery/jquery-ui.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/adesignscalendar/js/jquery/jquery-ui.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/adesignscalendar/js/fullcalendar/moment.min.js') }}\"></script>
    <script type=\"text/javascript\"
            src=\"{{ asset('bundles/adesignscalendar/js/fullcalendar/fullcalendar.min.js') }}\"></script>
    <script type=\"text/javascript\"
            src=\"{{ asset('bundles/adesignscalendar/js/fullcalendar/scheduler.min.js') }}\"></script>

    <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>


    <script type=\"text/javascript\" src=\"{{ asset('bundles/adesignscalendar/js/calendar-settings.js') }}\"></script>
    <script>
        var routeEnfant = \"{{ path('Calendar_enfant',{ 'id':1}) }}\";
        var parite = 0;
        function setParite(semaine) {
            if (semaine != parite) {
                parite = semaine;
                \$('#calendar-holder').fullCalendar('refetchResources');
            }

        }
    </script>
{% endblock %}", "ADesignsCalendarBundle:Calendar:calendar.html.twig", "C:\\xampp\\htdocs\\gpac-20170211T083052Z\\gpac\\src\\CalendarBundle/Resources/views/Calendar/calendar.html.twig");
    }
}

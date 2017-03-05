<?php

/* ADesignsCalendarBundle:Calendar:calendar-enfant.html.twig */
class __TwigTemplate_e141426b737acadab9e2f0ba001ca8e866fd8a604f5e144a302f118de836ef9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ADesignsCalendarBundle:Calendar:calendar-enfant.html.twig", 1);
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
        $__internal_e1324022fc7c86a9cf4908216a01de35ae940304912d404343b454f412105d13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1324022fc7c86a9cf4908216a01de35ae940304912d404343b454f412105d13->enter($__internal_e1324022fc7c86a9cf4908216a01de35ae940304912d404343b454f412105d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ADesignsCalendarBundle:Calendar:calendar-enfant.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1324022fc7c86a9cf4908216a01de35ae940304912d404343b454f412105d13->leave($__internal_e1324022fc7c86a9cf4908216a01de35ae940304912d404343b454f412105d13_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_673cc3d03f9189553cedb393f6507254f8cf7cf71b70c6bedd25137581a59760 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_673cc3d03f9189553cedb393f6507254f8cf7cf71b70c6bedd25137581a59760->enter($__internal_673cc3d03f9189553cedb393f6507254f8cf7cf71b70c6bedd25137581a59760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_673cc3d03f9189553cedb393f6507254f8cf7cf71b70c6bedd25137581a59760->leave($__internal_673cc3d03f9189553cedb393f6507254f8cf7cf71b70c6bedd25137581a59760_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_e47c12d3907d6e12f8246dc9df39ffe36e02da5b6c3631cc1403d954a231ea21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e47c12d3907d6e12f8246dc9df39ffe36e02da5b6c3631cc1403d954a231ea21->enter($__internal_e47c12d3907d6e12f8246dc9df39ffe36e02da5b6c3631cc1403d954a231ea21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <div class=\"row\">
        <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Calendar_event_save", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "id"), "method"))), "html", null, true);
        echo "\">
            <button style=\"margin-left: 25px\" type=\"submit\" class=\"btn btn-success\">Sauvegarder</button>
        </a>
        <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Calendar_event_save", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "id"), "method"))), "html", null, true);
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
            <div style=\"margin-left:25px; margin-top: 20px; min-height: 155px\" id='external-events'>
                <div>
                    <h4>Activités obligatoire</h4>
                </div>
                <div style=\"height : 110px; overflow-y: auto\">
                    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activitesObligatoire"]) ? $context["activitesObligatoire"] : $this->getContext($context, "activitesObligatoire")));
        foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
            // line 35
            echo "                        <div class='fc-event'
                             activiteId=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["activite"], "activite", array()), "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["activite"], "activite", array()), "designation", array()), "html", null, true);
            echo "</div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                </div>
            </div>
            <div style=\"margin-left:25px; margin-top: 20px; min-height: 155px\" id='external-events'>
                <div>
                    <h4>Activités optionnelles</h4>
                </div>
                <div style=\"height : 110px; overflow-y: auto\">
                    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activitesOptionnel"]) ? $context["activitesOptionnel"] : $this->getContext($context, "activitesOptionnel")));
        foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
            // line 46
            echo "                        <div class='fc-event' activiteId=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["activite"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["activite"], "designation", array()), "html", null, true);
            echo "</div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                </div>
            </div>

            <div style=\"margin-left:25px; margin-top: 20px; width: 250px\" id='external-events'>
                <div id=\"trash\">
                    <h4>Suppression</h4>
                    <p>
                        <img src=\"";
        // line 55
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
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["constraints"]) ? $context["constraints"] : $this->getContext($context, "constraints")));
        foreach ($context['_seq'] as $context["_key"] => $context["constraint"]) {
            // line 69
            echo "                                <li style=\"color: red\"> ";
            echo twig_escape_filter($this->env, $context["constraint"], "html", null, true);
            echo "</li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['constraint'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style=\"margin-top: 20px\" class=\"row\">


    </div>
    </div>

    <div id=\"calendar-holder\"></div>
";
        
        $__internal_e47c12d3907d6e12f8246dc9df39ffe36e02da5b6c3631cc1403d954a231ea21->leave($__internal_e47c12d3907d6e12f8246dc9df39ffe36e02da5b6c3631cc1403d954a231ea21_prof);

    }

    // line 86
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2041a118cf622f36f9daed3895890cbb6d75ebf80db0f0bafaf123b81d87f82d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2041a118cf622f36f9daed3895890cbb6d75ebf80db0f0bafaf123b81d87f82d->enter($__internal_2041a118cf622f36f9daed3895890cbb6d75ebf80db0f0bafaf123b81d87f82d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 87
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/adesignscalendar/js/jquery/jquery-ui.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/adesignscalendar/js/jquery/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/adesignscalendar/js/fullcalendar/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/adesignscalendar/js/fullcalendar/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/adesignscalendar/js/fullcalendar/scheduler.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/adesignscalendar/js/calendar-setting-enfant.js"), "html", null, true);
        echo "\"></script>

    <script>
        var id = \"";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "id"), "method"), "html", null, true);
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
        
        $__internal_2041a118cf622f36f9daed3895890cbb6d75ebf80db0f0bafaf123b81d87f82d->leave($__internal_2041a118cf622f36f9daed3895890cbb6d75ebf80db0f0bafaf123b81d87f82d_prof);

    }

    public function getTemplateName()
    {
        return "ADesignsCalendarBundle:Calendar:calendar-enfant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 101,  245 => 98,  240 => 96,  235 => 94,  230 => 92,  225 => 90,  221 => 89,  217 => 88,  212 => 87,  206 => 86,  186 => 71,  177 => 69,  173 => 68,  157 => 55,  148 => 48,  137 => 46,  133 => 45,  124 => 38,  114 => 36,  111 => 35,  107 => 34,  87 => 17,  81 => 14,  78 => 13,  72 => 12,  63 => 9,  59 => 8,  55 => 7,  51 => 6,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
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
        <a href=\"{{ path('Calendar_event_save',{ 'id': app.request.attributes.get('id') }) }}\">
            <button style=\"margin-left: 25px\" type=\"submit\" class=\"btn btn-success\">Sauvegarder</button>
        </a>
        <a href=\"{{ path('Calendar_event_save',{ 'id': app.request.attributes.get('id') }) }}\">
            <button style=\"margin-left: 25px\" type=\"submit\" class=\"btn btn-primary\">Restaurer</button>
        </a>
        <div style=\"margin-left: 20px\" id=\"selector\" class=\"btn-group\">
            <button type=\"radio\" checked onclick=\"setParite(0)\" class=\"btn btn-primary active\">Semaine 1</button>
            <button type=\"radio\" onclick=\"setParite(1)\" class=\"btn btn-primary\">Semaine 2</button>

        </div>

    </div>
    <div class=\"row\">
        <div class=\"col-md-5\">
            <div style=\"margin-left:25px; margin-top: 20px; min-height: 155px\" id='external-events'>
                <div>
                    <h4>Activités obligatoire</h4>
                </div>
                <div style=\"height : 110px; overflow-y: auto\">
                    {% for activite in activitesObligatoire %}
                        <div class='fc-event'
                             activiteId=\"{{ activite.activite.id }}\">{{ activite.activite.designation }}</div>
                    {% endfor %}
                </div>
            </div>
            <div style=\"margin-left:25px; margin-top: 20px; min-height: 155px\" id='external-events'>
                <div>
                    <h4>Activités optionnelles</h4>
                </div>
                <div style=\"height : 110px; overflow-y: auto\">
                    {% for activite in activitesOptionnel %}
                        <div class='fc-event' activiteId=\"{{ activite.id }}\">{{ activite.designation }}</div>
                    {% endfor %}
                </div>
            </div>

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
    <div style=\"margin-top: 20px\" class=\"row\">


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

    <script type=\"text/javascript\" src=\"{{ asset('bundles/adesignscalendar/js/calendar-setting-enfant.js') }}\"></script>

    <script>
        var id = \"{{ app.request.attributes.get('id') }}\";
        var parite = 0;
        function setParite(semaine) {
            if (semaine != parite) {
                parite = semaine;
                \$('#calendar-holder').fullCalendar('refetchResources');
            }

        }
    </script>
{% endblock %}", "ADesignsCalendarBundle:Calendar:calendar-enfant.html.twig", "C:\\wamp\\www\\gpac\\src\\CalendarBundle/Resources/views/Calendar/calendar-enfant.html.twig");
    }
}

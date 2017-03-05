<?php

/* ::base.html.twig */
class __TwigTemplate_fd6fa3f446b37d2b74729845f322b5afe0b1956608443642f160fb8342755406 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d03e8f654d244133f00e34b1e86d7e3e436e9f6170523b08ef2bce5b7f1d3b1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d03e8f654d244133f00e34b1e86d7e3e436e9f6170523b08ef2bce5b7f1d3b1b->enter($__internal_d03e8f654d244133f00e34b1e86d7e3e436e9f6170523b08ef2bce5b7f1d3b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <header>
                ";
        // line 17
        $this->displayBlock('header', $context, $blocks);
        // line 18
        echo "                ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "            </header>
            ";
        // line 26
        $this->loadTemplate("menu.html.twig", "::base.html.twig", 26)->display($context);
        // line 27
        echo "            <body>
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "                        </div>
                    </div>
                </div>
            </body>
            ";
        // line 39
        echo "        </div>
    </div>
</html>
";
        
        $__internal_d03e8f654d244133f00e34b1e86d7e3e436e9f6170523b08ef2bce5b7f1d3b1b->leave($__internal_d03e8f654d244133f00e34b1e86d7e3e436e9f6170523b08ef2bce5b7f1d3b1b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2336c8666a73ae32fe14c4c01a7d1195e28ce19a87eeb63d91b28b7448be87d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2336c8666a73ae32fe14c4c01a7d1195e28ce19a87eeb63d91b28b7448be87d7->enter($__internal_2336c8666a73ae32fe14c4c01a7d1195e28ce19a87eeb63d91b28b7448be87d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Gestion des emplois du temps";
        
        $__internal_2336c8666a73ae32fe14c4c01a7d1195e28ce19a87eeb63d91b28b7448be87d7->leave($__internal_2336c8666a73ae32fe14c4c01a7d1195e28ce19a87eeb63d91b28b7448be87d7_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9de5f581c5b9fb23e93e6b6da74057492cb959d2673138286ae52e8baf901d6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9de5f581c5b9fb23e93e6b6da74057492cb959d2673138286ae52e8baf901d6c->enter($__internal_9de5f581c5b9fb23e93e6b6da74057492cb959d2673138286ae52e8baf901d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\"/>
            <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/getiem.css"), "html", null, true);
        echo "\"/>
        ";
        
        $__internal_9de5f581c5b9fb23e93e6b6da74057492cb959d2673138286ae52e8baf901d6c->leave($__internal_9de5f581c5b9fb23e93e6b6da74057492cb959d2673138286ae52e8baf901d6c_prof);

    }

    // line 17
    public function block_header($context, array $blocks = array())
    {
        $__internal_b37c555c1181d3fdbe53e9daf165d1d7643b81bc84d49cddd73f385799642679 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b37c555c1181d3fdbe53e9daf165d1d7643b81bc84d49cddd73f385799642679->enter($__internal_b37c555c1181d3fdbe53e9daf165d1d7643b81bc84d49cddd73f385799642679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        
        $__internal_b37c555c1181d3fdbe53e9daf165d1d7643b81bc84d49cddd73f385799642679->leave($__internal_b37c555c1181d3fdbe53e9daf165d1d7643b81bc84d49cddd73f385799642679_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9a22997954c94d1a67a204d779766103b265951cdb002ecbba2c76582f575c55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a22997954c94d1a67a204d779766103b265951cdb002ecbba2c76582f575c55->enter($__internal_9a22997954c94d1a67a204d779766103b265951cdb002ecbba2c76582f575c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "                    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/adesignscalendar/js/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ajouterEntityByModal.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/filters.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
                ";
        
        $__internal_9a22997954c94d1a67a204d779766103b265951cdb002ecbba2c76582f575c55->leave($__internal_9a22997954c94d1a67a204d779766103b265951cdb002ecbba2c76582f575c55_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_27bddd58ba5d43d79c1f8a8f4fc4beb116dc46f7e6bfb92b39d946f27ac61b9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27bddd58ba5d43d79c1f8a8f4fc4beb116dc46f7e6bfb92b39d946f27ac61b9f->enter($__internal_27bddd58ba5d43d79c1f8a8f4fc4beb116dc46f7e6bfb92b39d946f27ac61b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 32
        echo "                                <p> A REDEFINIR SUR CHAQUE PAGE</p>
                            ";
        
        $__internal_27bddd58ba5d43d79c1f8a8f4fc4beb116dc46f7e6bfb92b39d946f27ac61b9f->leave($__internal_27bddd58ba5d43d79c1f8a8f4fc4beb116dc46f7e6bfb92b39d946f27ac61b9f_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 32,  160 => 31,  151 => 23,  147 => 22,  143 => 21,  139 => 20,  134 => 19,  128 => 18,  116 => 17,  107 => 10,  102 => 9,  96 => 8,  84 => 7,  74 => 39,  68 => 34,  66 => 31,  60 => 27,  58 => 26,  55 => 25,  52 => 18,  50 => 17,  41 => 12,  39 => 8,  35 => 7,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>{% block title %}Gestion des emplois du temps{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"{{ asset('css/bootstrap.css') }}\"/>
            <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"{{ asset('css/getiem.css') }}\"/>
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <header>
                {% block header %} {% endblock %}
                {% block javascripts %}
                    <script type=\"text/javascript\" src=\"{{ asset('bundles/adesignscalendar/js/jquery/jquery.min.js') }}\"></script>
                    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
                    <script src=\"{{ asset('js/ajouterEntityByModal.js') }}\"></script>
                    <script src=\"{{ asset('js/filters.js') }}\"></script>
                    <script src=\"{{ asset('js/jquery.js') }}\"></script>
                {% endblock %}
            </header>
            {% include 'menu.html.twig' %}
            <body>
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            {% block body %}
                                <p> A REDEFINIR SUR CHAQUE PAGE</p>
                            {% endblock %}
                        </div>
                    </div>
                </div>
            </body>
            {#{% include 'footer.html.twig' %}#}
        </div>
    </div>
</html>
", "::base.html.twig", "C:\\xampp\\htdocs\\gpac-20170211T083052Z\\gpac\\app/Resources\\views/base.html.twig");
    }
}

<?php

/* ::base.html.twig */
class __TwigTemplate_04239e698981c96034b46bcaa013241ad277bcadec3307d229f3e04d187c3985 extends Twig_Template
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
        $__internal_8d83f0a951a61ec8d506eaaa87f876bddaca7f34c6d0587eaf9d6890f46bb2c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d83f0a951a61ec8d506eaaa87f876bddaca7f34c6d0587eaf9d6890f46bb2c3->enter($__internal_8d83f0a951a61ec8d506eaaa87f876bddaca7f34c6d0587eaf9d6890f46bb2c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_8d83f0a951a61ec8d506eaaa87f876bddaca7f34c6d0587eaf9d6890f46bb2c3->leave($__internal_8d83f0a951a61ec8d506eaaa87f876bddaca7f34c6d0587eaf9d6890f46bb2c3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_20dbbc2406009a75513c565322290b7e999ea5e9a202a7545ac0edba3728a5d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20dbbc2406009a75513c565322290b7e999ea5e9a202a7545ac0edba3728a5d7->enter($__internal_20dbbc2406009a75513c565322290b7e999ea5e9a202a7545ac0edba3728a5d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Gestion des emplois du temps";
        
        $__internal_20dbbc2406009a75513c565322290b7e999ea5e9a202a7545ac0edba3728a5d7->leave($__internal_20dbbc2406009a75513c565322290b7e999ea5e9a202a7545ac0edba3728a5d7_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_01d2c62e8d14758439761da58ff44c4b98b7baf4ef1bca8bc7816c580dcd8bff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01d2c62e8d14758439761da58ff44c4b98b7baf4ef1bca8bc7816c580dcd8bff->enter($__internal_01d2c62e8d14758439761da58ff44c4b98b7baf4ef1bca8bc7816c580dcd8bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\"/>
            <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/getiem.css"), "html", null, true);
        echo "\"/>
        ";
        
        $__internal_01d2c62e8d14758439761da58ff44c4b98b7baf4ef1bca8bc7816c580dcd8bff->leave($__internal_01d2c62e8d14758439761da58ff44c4b98b7baf4ef1bca8bc7816c580dcd8bff_prof);

    }

    // line 17
    public function block_header($context, array $blocks = array())
    {
        $__internal_e56f4d17395c337a99acc7b5bbd13aacb9911673294cddb3dcb62de0dfe55da1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e56f4d17395c337a99acc7b5bbd13aacb9911673294cddb3dcb62de0dfe55da1->enter($__internal_e56f4d17395c337a99acc7b5bbd13aacb9911673294cddb3dcb62de0dfe55da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        
        $__internal_e56f4d17395c337a99acc7b5bbd13aacb9911673294cddb3dcb62de0dfe55da1->leave($__internal_e56f4d17395c337a99acc7b5bbd13aacb9911673294cddb3dcb62de0dfe55da1_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a525a60d045b8ee939876e0420706ad4fb3f9e75f9d5f20de7551f19899fdd35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a525a60d045b8ee939876e0420706ad4fb3f9e75f9d5f20de7551f19899fdd35->enter($__internal_a525a60d045b8ee939876e0420706ad4fb3f9e75f9d5f20de7551f19899fdd35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_a525a60d045b8ee939876e0420706ad4fb3f9e75f9d5f20de7551f19899fdd35->leave($__internal_a525a60d045b8ee939876e0420706ad4fb3f9e75f9d5f20de7551f19899fdd35_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_ebed81c3198efed235de5dc462f439bd0be2a31cde2070814307f3aec70f8d1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebed81c3198efed235de5dc462f439bd0be2a31cde2070814307f3aec70f8d1c->enter($__internal_ebed81c3198efed235de5dc462f439bd0be2a31cde2070814307f3aec70f8d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 32
        echo "                                <p> A REDEFINIR SUR CHAQUE PAGE</p>
                            ";
        
        $__internal_ebed81c3198efed235de5dc462f439bd0be2a31cde2070814307f3aec70f8d1c->leave($__internal_ebed81c3198efed235de5dc462f439bd0be2a31cde2070814307f3aec70f8d1c_prof);

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
", "::base.html.twig", "C:\\wamp\\www\\gpac\\app/Resources\\views/base.html.twig");
    }
}

<?php

/* @Stats/Default/index.html.twig */
class __TwigTemplate_848f7707dded8a24739508b2b3c1e6a5f7f8ec6d9547b5a0d2041ab2c247b449 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Stats/Default/index.html.twig", 1);
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
        $__internal_182e5717b0768379fe519fbf51ddefb9b8c98bc80fe09dd1927d4306f07cf177 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_182e5717b0768379fe519fbf51ddefb9b8c98bc80fe09dd1927d4306f07cf177->enter($__internal_182e5717b0768379fe519fbf51ddefb9b8c98bc80fe09dd1927d4306f07cf177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Stats/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_182e5717b0768379fe519fbf51ddefb9b8c98bc80fe09dd1927d4306f07cf177->leave($__internal_182e5717b0768379fe519fbf51ddefb9b8c98bc80fe09dd1927d4306f07cf177_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7076cd6a55753d6e994b29d1e8e52e1544b127740f003da183a359f55072d05b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7076cd6a55753d6e994b29d1e8e52e1544b127740f003da183a359f55072d05b->enter($__internal_7076cd6a55753d6e994b29d1e8e52e1544b127740f003da183a359f55072d05b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Statistique";
        
        $__internal_7076cd6a55753d6e994b29d1e8e52e1544b127740f003da183a359f55072d05b->leave($__internal_7076cd6a55753d6e994b29d1e8e52e1544b127740f003da183a359f55072d05b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb3f86c434c4f244666952d93fa00aaad4bc8e7f5dacec6b53e4c99c1a6c0f7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb3f86c434c4f244666952d93fa00aaad4bc8e7f5dacec6b53e4c99c1a6c0f7b->enter($__internal_cb3f86c434c4f244666952d93fa00aaad4bc8e7f5dacec6b53e4c99c1a6c0f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h2>Quelques statistiques </h2>
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>

    <script src=\"//code.highcharts.com/4.1.8/highcharts.js\"></script>
    <script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>
    <div id=\"global\">
        <div id=\"piechart\" class=\"col-lg-6 col-md-3\">
            <script type=\"text/javascript\">
                ";
        // line 14
        echo $this->env->getExtension('Ob\HighchartsBundle\Twig\HighchartsExtension')->chart((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")));
        echo "
            </script>
        </div>
        <div id=\"column2\" class=\"col-lg-6 col-md-5\" >
            <script type=\"text/javascript\">
                ";
        // line 19
        echo $this->env->getExtension('Ob\HighchartsBundle\Twig\HighchartsExtension')->chart((isset($context["eenfantPerActivite"]) ? $context["eenfantPerActivite"] : $this->getContext($context, "eenfantPerActivite")));
        echo "
            </script>
        </div>
        <div id=\"column\" class=\"col-lg-6 col-md-5\" >
            <script type=\"text/javascript\">
                ";
        // line 24
        echo $this->env->getExtension('Ob\HighchartsBundle\Twig\HighchartsExtension')->chart((isset($context["enfant"]) ? $context["enfant"] : $this->getContext($context, "enfant")));
        echo "
            </script>
        </div>
    </div>
";
        
        $__internal_cb3f86c434c4f244666952d93fa00aaad4bc8e7f5dacec6b53e4c99c1a6c0f7b->leave($__internal_cb3f86c434c4f244666952d93fa00aaad4bc8e7f5dacec6b53e4c99c1a6c0f7b_prof);

    }

    public function getTemplateName()
    {
        return "@Stats/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 24,  71 => 19,  63 => 14,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}Statistique{% endblock %}

{% block body %}
    <h2>Quelques statistiques </h2>
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>

    <script src=\"//code.highcharts.com/4.1.8/highcharts.js\"></script>
    <script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>
    <div id=\"global\">
        <div id=\"piechart\" class=\"col-lg-6 col-md-3\">
            <script type=\"text/javascript\">
                {{ chart(activite) }}
            </script>
        </div>
        <div id=\"column2\" class=\"col-lg-6 col-md-5\" >
            <script type=\"text/javascript\">
                {{ chart(eenfantPerActivite) }}
            </script>
        </div>
        <div id=\"column\" class=\"col-lg-6 col-md-5\" >
            <script type=\"text/javascript\">
                {{ chart(enfant) }}
            </script>
        </div>
    </div>
{% endblock %}
", "@Stats/Default/index.html.twig", "C:\\xampp\\htdocs\\gpac-20170211T083052Z\\gpac\\src\\StatsBundle\\Resources\\views\\Default\\index.html.twig");
    }
}

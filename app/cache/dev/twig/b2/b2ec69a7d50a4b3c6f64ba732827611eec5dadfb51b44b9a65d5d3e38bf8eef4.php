<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8ac195a4b9bd1c43a161f03f3a699737270294d2b2169c1d24fdb6398865a6d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_66c5c075a0418a8615c8afcd633959f39d35fc2e95a832d740cc0d5e41b26d13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66c5c075a0418a8615c8afcd633959f39d35fc2e95a832d740cc0d5e41b26d13->enter($__internal_66c5c075a0418a8615c8afcd633959f39d35fc2e95a832d740cc0d5e41b26d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66c5c075a0418a8615c8afcd633959f39d35fc2e95a832d740cc0d5e41b26d13->leave($__internal_66c5c075a0418a8615c8afcd633959f39d35fc2e95a832d740cc0d5e41b26d13_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_aa713b62a30eba31316816f2a719d706fd0343db4fe0a009a02760e6c2d53028 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa713b62a30eba31316816f2a719d706fd0343db4fe0a009a02760e6c2d53028->enter($__internal_aa713b62a30eba31316816f2a719d706fd0343db4fe0a009a02760e6c2d53028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_aa713b62a30eba31316816f2a719d706fd0343db4fe0a009a02760e6c2d53028->leave($__internal_aa713b62a30eba31316816f2a719d706fd0343db4fe0a009a02760e6c2d53028_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8b720af3df423fe55cf6c0234294bc695ef08121fa6f699a6e1ae5b85689cc8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b720af3df423fe55cf6c0234294bc695ef08121fa6f699a6e1ae5b85689cc8c->enter($__internal_8b720af3df423fe55cf6c0234294bc695ef08121fa6f699a6e1ae5b85689cc8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8b720af3df423fe55cf6c0234294bc695ef08121fa6f699a6e1ae5b85689cc8c->leave($__internal_8b720af3df423fe55cf6c0234294bc695ef08121fa6f699a6e1ae5b85689cc8c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d57dd2e566ae4682f05bfd320e6587537350bd0ed7b0ff25950e4501e1da1718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d57dd2e566ae4682f05bfd320e6587537350bd0ed7b0ff25950e4501e1da1718->enter($__internal_d57dd2e566ae4682f05bfd320e6587537350bd0ed7b0ff25950e4501e1da1718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d57dd2e566ae4682f05bfd320e6587537350bd0ed7b0ff25950e4501e1da1718->leave($__internal_d57dd2e566ae4682f05bfd320e6587537350bd0ed7b0ff25950e4501e1da1718_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\gpac-20170211T083052Z\\gpac\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}

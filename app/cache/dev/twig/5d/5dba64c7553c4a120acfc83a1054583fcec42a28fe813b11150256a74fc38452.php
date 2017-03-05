<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1a3811c059957916903f4f514494cd84fed5969df7e8641e3854dffdb4382402 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa23414df9c872297e66a30b9c7245c6a26ce698655f01adc3d1f37fa2c735c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa23414df9c872297e66a30b9c7245c6a26ce698655f01adc3d1f37fa2c735c4->enter($__internal_fa23414df9c872297e66a30b9c7245c6a26ce698655f01adc3d1f37fa2c735c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa23414df9c872297e66a30b9c7245c6a26ce698655f01adc3d1f37fa2c735c4->leave($__internal_fa23414df9c872297e66a30b9c7245c6a26ce698655f01adc3d1f37fa2c735c4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4bc317705e13bed9cf7c047cdb7042c2f906dff176eeee594d1c9bd95bc88d50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bc317705e13bed9cf7c047cdb7042c2f906dff176eeee594d1c9bd95bc88d50->enter($__internal_4bc317705e13bed9cf7c047cdb7042c2f906dff176eeee594d1c9bd95bc88d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4bc317705e13bed9cf7c047cdb7042c2f906dff176eeee594d1c9bd95bc88d50->leave($__internal_4bc317705e13bed9cf7c047cdb7042c2f906dff176eeee594d1c9bd95bc88d50_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d01f5a166fd93bc599718551f3c390f3757ae96f409f6cff4b569ebeed794367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d01f5a166fd93bc599718551f3c390f3757ae96f409f6cff4b569ebeed794367->enter($__internal_d01f5a166fd93bc599718551f3c390f3757ae96f409f6cff4b569ebeed794367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d01f5a166fd93bc599718551f3c390f3757ae96f409f6cff4b569ebeed794367->leave($__internal_d01f5a166fd93bc599718551f3c390f3757ae96f409f6cff4b569ebeed794367_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_98ffb51a6aaabcbe8cd33e56f96629168f782d1f596cc91eb7855ca2698f6284 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98ffb51a6aaabcbe8cd33e56f96629168f782d1f596cc91eb7855ca2698f6284->enter($__internal_98ffb51a6aaabcbe8cd33e56f96629168f782d1f596cc91eb7855ca2698f6284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_98ffb51a6aaabcbe8cd33e56f96629168f782d1f596cc91eb7855ca2698f6284->leave($__internal_98ffb51a6aaabcbe8cd33e56f96629168f782d1f596cc91eb7855ca2698f6284_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\gpac-20170211T083052Z\\gpac\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}

<?php

/* ::base.html.twig */
class __TwigTemplate_f4acc0c8fa6e33bd0ba731e09d3f50c1a28367ef5da3af2ceacf85e13b418d72 extends Twig_Template
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
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Gestion des emplois du temps";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "            <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\"/>
            <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/getiem.css"), "html", null, true);
        echo "\"/>
        ";
    }

    // line 17
    public function block_header($context, array $blocks = array())
    {
        echo " ";
    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
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
    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        // line 32
        echo "                                <p> A REDEFINIR SUR CHAQUE PAGE</p>
                            ";
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
        return array (  133 => 32,  130 => 31,  124 => 23,  120 => 22,  116 => 21,  112 => 20,  107 => 19,  104 => 18,  98 => 17,  92 => 10,  87 => 9,  84 => 8,  78 => 7,  71 => 39,  65 => 34,  63 => 31,  57 => 27,  55 => 26,  52 => 25,  49 => 18,  47 => 17,  38 => 12,  36 => 8,  32 => 7,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::base.html.twig", "C:\\wamp\\www\\gpac\\app/Resources\\views/base.html.twig");
    }
}

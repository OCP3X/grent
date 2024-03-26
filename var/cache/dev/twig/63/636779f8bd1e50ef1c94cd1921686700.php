<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* lavagna/index.html.twig */
class __TwigTemplate_40ed38e937cb5482bafca75703696b5b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lavagna/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lavagna/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "lavagna/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "Lavagna index
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        echo "<script src=\"/js/lavagna/lavagna.js\" defer></script>    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "
<span><h1>Lavagna</h1></span>
<input type=\"button\" id=\"add_anomalia\" class=\"btn btn-primary\"
\tonclick=\"location.href='";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lavagna_new");
        echo "'\"
\tvalue=\"Aggiungi Anomalia\" />
\t<table class=\"table\" id=\"table_lavagna\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th></th>
\t\t\t\t<th>Anomalia</th>
\t\t\t\t<th></th>
\t\t\t\t<th>Targa</th>
\t\t\t\t<th>Descrizione</th>
\t\t\t\t<th>Data</th>
\t\t\t\t<th>Utente</th>
\t\t\t\t
\t\t\t\t<th></th>
\t\t\t</tr>
\t\t</thead>
\t\t<tr>
\t\t\t<td></td>
\t\t\t<td><input type=\"text\" class=\"ff_search\" id=\"anomaliaFinder\" name=\"anomaliaFinder\"></td>
\t\t\t<td></td>
\t\t\t<td><input type=\"text\" class=\"ff_search\" id=\"targaFinder\" name=\"targaFinder\"></td>
\t\t\t<td><input type=\"text\" class=\"ff_search\" id=\"descrizionFinder\"
\t\t\t\tname=\"descrizionFinder\"></td>
\t\t\t
\t\t\t<td></td>
\t\t\t<td></td>
\t\t\t<td></td>
\t\t</tr>
\t\t<tbody>
\t\t</tbody>

\t</table> 
\t
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "lavagna/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 17,  112 => 14,  102 => 13,  91 => 9,  81 => 8,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
Lavagna index
{% endblock %}


{% block javascripts %}
<script src=\"/js/lavagna/lavagna.js\" defer></script>    
{% endblock %}


{% block body %}

<span><h1>Lavagna</h1></span>
<input type=\"button\" id=\"add_anomalia\" class=\"btn btn-primary\"
\tonclick=\"location.href='{{ path('app_lavagna_new') }}'\"
\tvalue=\"Aggiungi Anomalia\" />
\t<table class=\"table\" id=\"table_lavagna\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th></th>
\t\t\t\t<th>Anomalia</th>
\t\t\t\t<th></th>
\t\t\t\t<th>Targa</th>
\t\t\t\t<th>Descrizione</th>
\t\t\t\t<th>Data</th>
\t\t\t\t<th>Utente</th>
\t\t\t\t
\t\t\t\t<th></th>
\t\t\t</tr>
\t\t</thead>
\t\t<tr>
\t\t\t<td></td>
\t\t\t<td><input type=\"text\" class=\"ff_search\" id=\"anomaliaFinder\" name=\"anomaliaFinder\"></td>
\t\t\t<td></td>
\t\t\t<td><input type=\"text\" class=\"ff_search\" id=\"targaFinder\" name=\"targaFinder\"></td>
\t\t\t<td><input type=\"text\" class=\"ff_search\" id=\"descrizionFinder\"
\t\t\t\tname=\"descrizionFinder\"></td>
\t\t\t
\t\t\t<td></td>
\t\t\t<td></td>
\t\t\t<td></td>
\t\t</tr>
\t\t<tbody>
\t\t</tbody>

\t</table> 
\t
\t{% endblock %}


\t{#
\t
\t\t<script src=\"/js/index/onLoad.js\"></script>
\t\t<script src=\"/js/index/findAnomalia.js\"></script>
\t\t<script src=\"/js/index/confirmDelete.js\"></script>
\t
\t\t#}
", "lavagna/index.html.twig", "C:\\wamp64\\www\\grent\\templates\\lavagna\\index.html.twig");
    }
}

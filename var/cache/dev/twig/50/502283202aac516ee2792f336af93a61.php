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

/* veicoli/show.html.twig */
class __TwigTemplate_8de66910dbf0688c43186b3c82f84253 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "veicoli/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "veicoli/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "veicoli/show.html.twig", 1);
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

        echo "Veicoli";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Veicoli</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>IdVeicolo</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["veicoli"]) || array_key_exists("veicoli", $context) ? $context["veicoli"] : (function () { throw new RuntimeError('Variable "veicoli" does not exist.', 12, $this->source); })()), "idVeicolo", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>NumParco</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["veicoli"]) || array_key_exists("veicoli", $context) ? $context["veicoli"] : (function () { throw new RuntimeError('Variable "veicoli" does not exist.', 16, $this->source); })()), "numParco", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descrizion</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["veicoli"]) || array_key_exists("veicoli", $context) ? $context["veicoli"] : (function () { throw new RuntimeError('Variable "veicoli" does not exist.', 20, $this->source); })()), "descrizion", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Targa</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["veicoli"]) || array_key_exists("veicoli", $context) ? $context["veicoli"] : (function () { throw new RuntimeError('Variable "veicoli" does not exist.', 24, $this->source); })()), "targa", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>IdTipoVeicolo</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["veicoli"]) || array_key_exists("veicoli", $context) ? $context["veicoli"] : (function () { throw new RuntimeError('Variable "veicoli" does not exist.', 28, $this->source); })()), "idTipoVeicolo", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>IdGruppoVeicolo</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["veicoli"]) || array_key_exists("veicoli", $context) ? $context["veicoli"] : (function () { throw new RuntimeError('Variable "veicoli" does not exist.', 32, $this->source); })()), "idGruppoVeicolo", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Immatricolazione</th>
                <td>";
        // line 36
        ((twig_get_attribute($this->env, $this->source, (isset($context["veicoli"]) || array_key_exists("veicoli", $context) ? $context["veicoli"] : (function () { throw new RuntimeError('Variable "veicoli" does not exist.', 36, $this->source); })()), "immatricolazione", [], "any", false, false, false, 36)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["veicoli"]) || array_key_exists("veicoli", $context) ? $context["veicoli"] : (function () { throw new RuntimeError('Variable "veicoli" does not exist.', 36, $this->source); })()), "immatricolazione", [], "any", false, false, false, 36), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Numposti</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["veicoli"]) || array_key_exists("veicoli", $context) ? $context["veicoli"] : (function () { throw new RuntimeError('Variable "veicoli" does not exist.', 40, $this->source); })()), "numposti", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dc</th>
                <td>";
        // line 44
        ((twig_get_attribute($this->env, $this->source, (isset($context["veicoli"]) || array_key_exists("veicoli", $context) ? $context["veicoli"] : (function () { throw new RuntimeError('Variable "veicoli" does not exist.', 44, $this->source); })()), "dc", [], "any", false, false, false, 44)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["veicoli"]) || array_key_exists("veicoli", $context) ? $context["veicoli"] : (function () { throw new RuntimeError('Variable "veicoli" does not exist.', 44, $this->source); })()), "dc", [], "any", false, false, false, 44), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Dm</th>
                <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["veicoli"]) || array_key_exists("veicoli", $context) ? $context["veicoli"] : (function () { throw new RuntimeError('Variable "veicoli" does not exist.', 48, $this->source); })()), "dm", [], "any", false, false, false, 48), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descrizione2</th>
                <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["veicoli"]) || array_key_exists("veicoli", $context) ? $context["veicoli"] : (function () { throw new RuntimeError('Variable "veicoli" does not exist.', 52, $this->source); })()), "descrizione2", [], "any", false, false, false, 52), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ordine</th>
                <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["veicoli"]) || array_key_exists("veicoli", $context) ? $context["veicoli"] : (function () { throw new RuntimeError('Variable "veicoli" does not exist.', 56, $this->source); })()), "ordine", [], "any", false, false, false, 56), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Proprieta</th>
                <td>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["veicoli"]) || array_key_exists("veicoli", $context) ? $context["veicoli"] : (function () { throw new RuntimeError('Variable "veicoli" does not exist.', 60, $this->source); })()), "proprieta", [], "any", false, false, false, 60), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fittizio</th>
                <td>";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["veicoli"]) || array_key_exists("veicoli", $context) ? $context["veicoli"] : (function () { throw new RuntimeError('Variable "veicoli" does not exist.', 64, $this->source); })()), "fittizio", [], "any", false, false, false, 64), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Termiche</th>
                <td>";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["veicoli"]) || array_key_exists("veicoli", $context) ? $context["veicoli"] : (function () { throw new RuntimeError('Variable "veicoli" does not exist.', 68, $this->source); })()), "termiche", [], "any", false, false, false, 68), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_veicoli_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_veicoli_edit", ["idVeicolo" => twig_get_attribute($this->env, $this->source, (isset($context["veicoli"]) || array_key_exists("veicoli", $context) ? $context["veicoli"] : (function () { throw new RuntimeError('Variable "veicoli" does not exist.', 75, $this->source); })()), "idVeicolo", [], "any", false, false, false, 75)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 77
        echo twig_include($this->env, $context, "veicoli/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "veicoli/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 77,  207 => 75,  202 => 73,  194 => 68,  187 => 64,  180 => 60,  173 => 56,  166 => 52,  159 => 48,  152 => 44,  145 => 40,  138 => 36,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Veicoli{% endblock %}

{% block body %}
    <h1>Veicoli</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>IdVeicolo</th>
                <td>{{ veicoli.idVeicolo }}</td>
            </tr>
            <tr>
                <th>NumParco</th>
                <td>{{ veicoli.numParco }}</td>
            </tr>
            <tr>
                <th>Descrizion</th>
                <td>{{ veicoli.descrizion }}</td>
            </tr>
            <tr>
                <th>Targa</th>
                <td>{{ veicoli.targa }}</td>
            </tr>
            <tr>
                <th>IdTipoVeicolo</th>
                <td>{{ veicoli.idTipoVeicolo }}</td>
            </tr>
            <tr>
                <th>IdGruppoVeicolo</th>
                <td>{{ veicoli.idGruppoVeicolo }}</td>
            </tr>
            <tr>
                <th>Immatricolazione</th>
                <td>{{ veicoli.immatricolazione ? veicoli.immatricolazione|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Numposti</th>
                <td>{{ veicoli.numposti }}</td>
            </tr>
            <tr>
                <th>Dc</th>
                <td>{{ veicoli.dc ? veicoli.dc|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Dm</th>
                <td>{{ veicoli.dm }}</td>
            </tr>
            <tr>
                <th>Descrizione2</th>
                <td>{{ veicoli.descrizione2 }}</td>
            </tr>
            <tr>
                <th>Ordine</th>
                <td>{{ veicoli.ordine }}</td>
            </tr>
            <tr>
                <th>Proprieta</th>
                <td>{{ veicoli.proprieta }}</td>
            </tr>
            <tr>
                <th>Fittizio</th>
                <td>{{ veicoli.fittizio }}</td>
            </tr>
            <tr>
                <th>Termiche</th>
                <td>{{ veicoli.termiche }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_veicoli_index') }}\">back to list</a>

    <a href=\"{{ path('app_veicoli_edit', {'idVeicolo': veicoli.idVeicolo}) }}\">edit</a>

    {{ include('veicoli/_delete_form.html.twig') }}
{% endblock %}
", "veicoli/show.html.twig", "C:\\wamp64\\www\\grent\\templates\\veicoli\\show.html.twig");
    }
}

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

/* teste/show.html.twig */
class __TwigTemplate_ef2387ef3602a40b11a8d726eb2956f4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "teste/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "teste/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "teste/show.html.twig", 1);
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

        echo "Teste";
        
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
        echo "    <h1>Teste</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teste"]) || array_key_exists("teste", $context) ? $context["teste"] : (function () { throw new RuntimeError('Variable "teste" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tipodoc</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teste"]) || array_key_exists("teste", $context) ? $context["teste"] : (function () { throw new RuntimeError('Variable "teste" does not exist.', 16, $this->source); })()), "tipodoc", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Numero_doc</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teste"]) || array_key_exists("teste", $context) ? $context["teste"] : (function () { throw new RuntimeError('Variable "teste" does not exist.', 20, $this->source); })()), "numeroDoc", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Data_doc</th>
                <td>";
        // line 24
        ((twig_get_attribute($this->env, $this->source, (isset($context["teste"]) || array_key_exists("teste", $context) ? $context["teste"] : (function () { throw new RuntimeError('Variable "teste" does not exist.', 24, $this->source); })()), "dataDoc", [], "any", false, false, false, 24)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teste"]) || array_key_exists("teste", $context) ? $context["teste"] : (function () { throw new RuntimeError('Variable "teste" does not exist.', 24, $this->source); })()), "dataDoc", [], "any", false, false, false, 24), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Id_veicolo</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teste"]) || array_key_exists("teste", $context) ? $context["teste"] : (function () { throw new RuntimeError('Variable "teste" does not exist.', 28, $this->source); })()), "idVeicolo", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id_meccanico</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teste"]) || array_key_exists("teste", $context) ? $context["teste"] : (function () { throw new RuntimeError('Variable "teste" does not exist.', 32, $this->source); })()), "idMeccanico", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tipo_intervento</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teste"]) || array_key_exists("teste", $context) ? $context["teste"] : (function () { throw new RuntimeError('Variable "teste" does not exist.', 36, $this->source); })()), "tipoIntervento", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Data_creazione</th>
                <td>";
        // line 40
        ((twig_get_attribute($this->env, $this->source, (isset($context["teste"]) || array_key_exists("teste", $context) ? $context["teste"] : (function () { throw new RuntimeError('Variable "teste" does not exist.', 40, $this->source); })()), "dataCreazione", [], "any", false, false, false, 40)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teste"]) || array_key_exists("teste", $context) ? $context["teste"] : (function () { throw new RuntimeError('Variable "teste" does not exist.', 40, $this->source); })()), "dataCreazione", [], "any", false, false, false, 40), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Data_modifica</th>
                <td>";
        // line 44
        ((twig_get_attribute($this->env, $this->source, (isset($context["teste"]) || array_key_exists("teste", $context) ? $context["teste"] : (function () { throw new RuntimeError('Variable "teste" does not exist.', 44, $this->source); })()), "dataModifica", [], "any", false, false, false, 44)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teste"]) || array_key_exists("teste", $context) ? $context["teste"] : (function () { throw new RuntimeError('Variable "teste" does not exist.', 44, $this->source); })()), "dataModifica", [], "any", false, false, false, 44), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Utente_creazione</th>
                <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teste"]) || array_key_exists("teste", $context) ? $context["teste"] : (function () { throw new RuntimeError('Variable "teste" does not exist.', 48, $this->source); })()), "utenteCreazione", [], "any", false, false, false, 48), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Utente_modifica</th>
                <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teste"]) || array_key_exists("teste", $context) ? $context["teste"] : (function () { throw new RuntimeError('Variable "teste" does not exist.', 52, $this->source); })()), "utenteModifica", [], "any", false, false, false, 52), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_teste_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_teste_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["teste"]) || array_key_exists("teste", $context) ? $context["teste"] : (function () { throw new RuntimeError('Variable "teste" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 61
        echo twig_include($this->env, $context, "teste/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "teste/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 61,  179 => 59,  174 => 57,  166 => 52,  159 => 48,  152 => 44,  145 => 40,  138 => 36,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Teste{% endblock %}

{% block body %}
    <h1>Teste</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ teste.id }}</td>
            </tr>
            <tr>
                <th>Tipodoc</th>
                <td>{{ teste.tipodoc }}</td>
            </tr>
            <tr>
                <th>Numero_doc</th>
                <td>{{ teste.numeroDoc }}</td>
            </tr>
            <tr>
                <th>Data_doc</th>
                <td>{{ teste.dataDoc ? teste.dataDoc|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Id_veicolo</th>
                <td>{{ teste.idVeicolo }}</td>
            </tr>
            <tr>
                <th>Id_meccanico</th>
                <td>{{ teste.idMeccanico }}</td>
            </tr>
            <tr>
                <th>Tipo_intervento</th>
                <td>{{ teste.tipoIntervento }}</td>
            </tr>
            <tr>
                <th>Data_creazione</th>
                <td>{{ teste.dataCreazione ? teste.dataCreazione|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Data_modifica</th>
                <td>{{ teste.dataModifica ? teste.dataModifica|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Utente_creazione</th>
                <td>{{ teste.utenteCreazione }}</td>
            </tr>
            <tr>
                <th>Utente_modifica</th>
                <td>{{ teste.utenteModifica }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_teste_index') }}\">back to list</a>

    <a href=\"{{ path('app_teste_edit', {'id': teste.id}) }}\">edit</a>

    {{ include('teste/_delete_form.html.twig') }}
{% endblock %}
", "teste/show.html.twig", "C:\\wamp64\\www\\grent\\templates\\teste\\show.html.twig");
    }
}

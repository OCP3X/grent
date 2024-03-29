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

/* righe/old/show.html.twig */
class __TwigTemplate_4926b856e050b8f9a6281caee4a6ff2e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "righe/old/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "righe/old/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "righe/old/show.html.twig", 1);
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

        echo "Righe";
        
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
        echo "    <h1>Righe</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["righe"]) || array_key_exists("righe", $context) ? $context["righe"] : (function () { throw new RuntimeError('Variable "righe" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id_testa_fk</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["righe"]) || array_key_exists("righe", $context) ? $context["righe"] : (function () { throw new RuntimeError('Variable "righe" does not exist.', 16, $this->source); })()), "idTestaFk", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id_l_fk</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["righe"]) || array_key_exists("righe", $context) ? $context["righe"] : (function () { throw new RuntimeError('Variable "righe" does not exist.', 20, $this->source); })()), "idLFk", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descrizione_anomalia</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["righe"]) || array_key_exists("righe", $context) ? $context["righe"] : (function () { throw new RuntimeError('Variable "righe" does not exist.', 24, $this->source); })()), "descrizioneAnomalia", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descrizione_intervento</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["righe"]) || array_key_exists("righe", $context) ? $context["righe"] : (function () { throw new RuntimeError('Variable "righe" does not exist.', 28, $this->source); })()), "descrizioneIntervento", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id_meccanico</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["righe"]) || array_key_exists("righe", $context) ? $context["righe"] : (function () { throw new RuntimeError('Variable "righe" does not exist.', 32, $this->source); })()), "idMeccanico", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id_riga_prelievo</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["righe"]) || array_key_exists("righe", $context) ? $context["righe"] : (function () { throw new RuntimeError('Variable "righe" does not exist.', 36, $this->source); })()), "idRigaPrelievo", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Data_creazione</th>
                <td>";
        // line 40
        ((twig_get_attribute($this->env, $this->source, (isset($context["righe"]) || array_key_exists("righe", $context) ? $context["righe"] : (function () { throw new RuntimeError('Variable "righe" does not exist.', 40, $this->source); })()), "dataCreazione", [], "any", false, false, false, 40)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["righe"]) || array_key_exists("righe", $context) ? $context["righe"] : (function () { throw new RuntimeError('Variable "righe" does not exist.', 40, $this->source); })()), "dataCreazione", [], "any", false, false, false, 40), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Data_modifica</th>
                <td>";
        // line 44
        ((twig_get_attribute($this->env, $this->source, (isset($context["righe"]) || array_key_exists("righe", $context) ? $context["righe"] : (function () { throw new RuntimeError('Variable "righe" does not exist.', 44, $this->source); })()), "dataModifica", [], "any", false, false, false, 44)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["righe"]) || array_key_exists("righe", $context) ? $context["righe"] : (function () { throw new RuntimeError('Variable "righe" does not exist.', 44, $this->source); })()), "dataModifica", [], "any", false, false, false, 44), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Utente_creazione</th>
                <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["righe"]) || array_key_exists("righe", $context) ? $context["righe"] : (function () { throw new RuntimeError('Variable "righe" does not exist.', 48, $this->source); })()), "utenteCreazione", [], "any", false, false, false, 48), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Utente_modifica</th>
                <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["righe"]) || array_key_exists("righe", $context) ? $context["righe"] : (function () { throw new RuntimeError('Variable "righe" does not exist.', 52, $this->source); })()), "utenteModifica", [], "any", false, false, false, 52), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_righe_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_righe_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["righe"]) || array_key_exists("righe", $context) ? $context["righe"] : (function () { throw new RuntimeError('Variable "righe" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 61
        echo twig_include($this->env, $context, "righe/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "righe/old/show.html.twig";
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

{% block title %}Righe{% endblock %}

{% block body %}
    <h1>Righe</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ righe.id }}</td>
            </tr>
            <tr>
                <th>Id_testa_fk</th>
                <td>{{ righe.idTestaFk }}</td>
            </tr>
            <tr>
                <th>Id_l_fk</th>
                <td>{{ righe.idLFk }}</td>
            </tr>
            <tr>
                <th>Descrizione_anomalia</th>
                <td>{{ righe.descrizioneAnomalia }}</td>
            </tr>
            <tr>
                <th>Descrizione_intervento</th>
                <td>{{ righe.descrizioneIntervento }}</td>
            </tr>
            <tr>
                <th>Id_meccanico</th>
                <td>{{ righe.idMeccanico }}</td>
            </tr>
            <tr>
                <th>Id_riga_prelievo</th>
                <td>{{ righe.idRigaPrelievo }}</td>
            </tr>
            <tr>
                <th>Data_creazione</th>
                <td>{{ righe.dataCreazione ? righe.dataCreazione|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Data_modifica</th>
                <td>{{ righe.dataModifica ? righe.dataModifica|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Utente_creazione</th>
                <td>{{ righe.utenteCreazione }}</td>
            </tr>
            <tr>
                <th>Utente_modifica</th>
                <td>{{ righe.utenteModifica }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_righe_index') }}\">back to list</a>

    <a href=\"{{ path('app_righe_edit', {'id': righe.id}) }}\">edit</a>

    {{ include('righe/_delete_form.html.twig') }}
{% endblock %}
", "righe/old/show.html.twig", "C:\\wamp64\\www\\grent\\templates\\righe\\old\\show.html.twig");
    }
}

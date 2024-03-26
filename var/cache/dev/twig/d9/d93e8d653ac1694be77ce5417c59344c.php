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

/* teste/pdf_stampa_doc_oli_prog.html.twig */
class __TwigTemplate_00e0fc1da3f2e9afef5341ec9e6cd61d extends Template
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
        return "base.pdf.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "teste/pdf_stampa_doc_oli_prog.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "teste/pdf_stampa_doc_oli_prog.html.twig"));

        $this->parent = $this->loadTemplate("base.pdf.twig", "teste/pdf_stampa_doc_oli_prog.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Stampa Documento";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<table id=\"main_blocchi\" style=\"
width:100%;
border-collapse: collapse;
border-style: solid;
border-width: 3px;
font-family: 'Verdana';
border-color: rgb(219,221,204);
\">
    <tr style=\"\">
        <td>
            <table id=\"intestazione\" style=\"width:70%;margin:0 auto;\">
                <tr>
                    <td style=\"width:80%;font-size:50px;color:#008617\"><strong><i>GENOVARENT</i></strong></td>
                    <td style=\"width:20%;font-size:18px\"><strong>Num. ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["testa"]) || array_key_exists("testa", $context) ? $context["testa"] : (function () { throw new RuntimeError('Variable "testa" does not exist.', 19, $this->source); })()), "getNumeroDoc", [], "method", false, false, false, 19), "html", null, true);
        echo "</strong></td>
                </tr>
                <tr>
                    <td><span style=\"font-size:25px\">Ordine lavorazioni officina interna</span></td>
                    <td></td>
                </tr>
            </table>
        </td>
    </tr>

    <tr style=\"\">
        <td>
            <table id=\"testa\" style=\"width:90%;margin:0 auto;border-collapse: collapse;
border-style: solid;
border-width: 1px;
margin-bottom:20px;
border-color: rgb(219,221,204);
\">
                <tr style=\"background-color:rgb(219,221,204);padding:5px ; height: 45px;text-align: center;\">
                    <td>Data apertura ordine lavoro</td>
                    <td>Proprietario</td>
                    <td>Targa</td>
                    <td>KM</td>
                    
                </tr>
                <tr style=\"padding:5px ; height: 45px;text-align: center;\">
                    <td>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["testa"]) || array_key_exists("testa", $context) ? $context["testa"] : (function () { throw new RuntimeError('Variable "testa" does not exist.', 45, $this->source); })()), "getDataDocFormat", ["d/m/Y"], "method", false, false, false, 45), "html", null, true);
        echo "</td>
                    <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["veicolo"]) || array_key_exists("veicolo", $context) ? $context["veicolo"] : (function () { throw new RuntimeError('Variable "veicolo" does not exist.', 46, $this->source); })()), "getProprieta", [], "any", false, false, false, 46), "html", null, true);
        echo "</td>
                    <td>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["veicolo"]) || array_key_exists("veicolo", $context) ? $context["veicolo"] : (function () { throw new RuntimeError('Variable "veicolo" does not exist.', 47, $this->source); })()), "getTarga", [], "method", false, false, false, 47), "html", null, true);
        echo "</td>
                    <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["testa"]) || array_key_exists("testa", $context) ? $context["testa"] : (function () { throw new RuntimeError('Variable "testa" does not exist.', 48, $this->source); })()), "getKmAttuali", [], "method", false, false, false, 48), "html", null, true);
        echo "</td>
                    
                </tr>
            </table>
        </td>
    </tr>

    <tr>
        <td>
            <table id=\"Righe\" style=\"margin:0 auto;width:99%;text-align:left;border-collapse: collapse;
            border-style: solid;
            border-width: 1px;
            margin-bottom:20px;
            border-color: rgb(219,221,204);
            \">
                <thead>
                   <tr style=\"background-color:rgb(219,221,204);padding:5px ; height: 45px;text-align: center;\">
                         <th>Intervento</th>
                        <th>Richiesto</th>
                        <th>Eseguito</th>
                        <th>Operatore</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["righe"]) || array_key_exists("righe", $context) ? $context["righe"] : (function () { throw new RuntimeError('Variable "righe" does not exist.', 72, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 73
            echo "                    <tr style=\"border-style: solid;border-width:0 0 1px 0;border-color: rgb(219,221,204);\">
                        <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "descrizione_anomalia", [], "any", false, false, false, 74), "html", null, true);
            echo "</td>
                        <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "descrizione_intervento", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
                        <td></td>
                        <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "id_meccanico", [], "any", false, false, false, 77), "html", null, true);
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                    

                </tbody>
            </table>
        </td>
    </tr>


</table>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "teste/pdf_stampa_doc_oli_prog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 80,  188 => 77,  183 => 75,  179 => 74,  176 => 73,  172 => 72,  145 => 48,  141 => 47,  137 => 46,  133 => 45,  104 => 19,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.pdf.twig' %}
{% block title %}Stampa Documento{% endblock %}

{% block body %}

<table id=\"main_blocchi\" style=\"
width:100%;
border-collapse: collapse;
border-style: solid;
border-width: 3px;
font-family: 'Verdana';
border-color: rgb(219,221,204);
\">
    <tr style=\"\">
        <td>
            <table id=\"intestazione\" style=\"width:70%;margin:0 auto;\">
                <tr>
                    <td style=\"width:80%;font-size:50px;color:#008617\"><strong><i>GENOVARENT</i></strong></td>
                    <td style=\"width:20%;font-size:18px\"><strong>Num. {{testa.getNumeroDoc()}}</strong></td>
                </tr>
                <tr>
                    <td><span style=\"font-size:25px\">Ordine lavorazioni officina interna</span></td>
                    <td></td>
                </tr>
            </table>
        </td>
    </tr>

    <tr style=\"\">
        <td>
            <table id=\"testa\" style=\"width:90%;margin:0 auto;border-collapse: collapse;
border-style: solid;
border-width: 1px;
margin-bottom:20px;
border-color: rgb(219,221,204);
\">
                <tr style=\"background-color:rgb(219,221,204);padding:5px ; height: 45px;text-align: center;\">
                    <td>Data apertura ordine lavoro</td>
                    <td>Proprietario</td>
                    <td>Targa</td>
                    <td>KM</td>
                    
                </tr>
                <tr style=\"padding:5px ; height: 45px;text-align: center;\">
                    <td>{{testa.getDataDocFormat(\"d/m/Y\")}}</td>
                    <td>{{veicolo.getProprieta}}</td>
                    <td>{{veicolo.getTarga()}}</td>
                    <td>{{testa.getKmAttuali()}}</td>
                    
                </tr>
            </table>
        </td>
    </tr>

    <tr>
        <td>
            <table id=\"Righe\" style=\"margin:0 auto;width:99%;text-align:left;border-collapse: collapse;
            border-style: solid;
            border-width: 1px;
            margin-bottom:20px;
            border-color: rgb(219,221,204);
            \">
                <thead>
                   <tr style=\"background-color:rgb(219,221,204);padding:5px ; height: 45px;text-align: center;\">
                         <th>Intervento</th>
                        <th>Richiesto</th>
                        <th>Eseguito</th>
                        <th>Operatore</th>
                    </tr>
                </thead>
                <tbody>
                    {% for r in righe %}
                    <tr style=\"border-style: solid;border-width:0 0 1px 0;border-color: rgb(219,221,204);\">
                        <td>{{r.descrizione_anomalia}}</td>
                        <td>{{r.descrizione_intervento}}</td>
                        <td></td>
                        <td>{{r.id_meccanico}}</td>
                    </tr>
                    {% endfor %}
                    

                </tbody>
            </table>
        </td>
    </tr>


</table>

{% endblock %}", "teste/pdf_stampa_doc_oli_prog.html.twig", "C:\\wamp64\\www\\grent\\templates\\teste\\pdf_stampa_doc_oli_prog.html.twig");
    }
}

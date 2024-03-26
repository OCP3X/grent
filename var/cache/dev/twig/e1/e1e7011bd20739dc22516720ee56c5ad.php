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

/* teste/table.anomalie.for.veicoli.list.index.html.twig */
class __TwigTemplate_23aa13bcdc0adcaa1aaa555009daea5e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "teste/table.anomalie.for.veicoli.list.index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "teste/table.anomalie.for.veicoli.list.index.html.twig"));

        // line 1
        echo "
<table class=\"table_anomalie_for_veicoli\" id=\"table_anomalie_veicoli\">

\t<thead>
\t\t<tr>
\t\t\t<th></th>
\t\t\t<th>Anomalie</th>
\t\t\t<th></th>
\t\t\t<th></th>
\t\t</tr>
\t</thead>
\t
\t<tbody>
\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["anomalie"]) || array_key_exists("anomalie", $context) ? $context["anomalie"] : (function () { throw new RuntimeError('Variable "anomalie" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 15
            echo "\t\t<tr>
\t\t\t<td><input type=\"button\" id=\"modify_testa\"
\t\t\t\tonclick=\"location.href='";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lavagna_edit", ["idL" => twig_get_attribute($this->env, $this->source, $context["entity"], "idL", [], "any", false, false, false, 17)]), "html", null, true);
            echo "'\"
\t\t\t\tvalue=\"modifica\" /></td>
\t\t\t<td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "anomalia", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
\t\t\t<td><input type=\"button\" id=\"show_testa\"
\t\t\t\tonclick=\"location.href='";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lavagna_duplicate", ["idL" => twig_get_attribute($this->env, $this->source, $context["entity"], "idL", [], "any", false, false, false, 21)]), "html", null, true);
            echo "'\"
\t\t\t\tvalue=\"duplica\" /></td>
\t\t\t<td><input type=\"button\" class=\"button red\" id=\"delete_testa\"
\t\t\t\tonclick=\"confirmDelete(";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "idL", [], "any", false, false, false, 24), "html", null, true);
            echo ")\" value=\"cancella\" /></td>
\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t</tbody>
</table>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "teste/table.anomalie.for.veicoli.list.index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 27,  82 => 24,  76 => 21,  71 => 19,  66 => 17,  62 => 15,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<table class=\"table_anomalie_for_veicoli\" id=\"table_anomalie_veicoli\">

\t<thead>
\t\t<tr>
\t\t\t<th></th>
\t\t\t<th>Anomalie</th>
\t\t\t<th></th>
\t\t\t<th></th>
\t\t</tr>
\t</thead>
\t
\t<tbody>
\t\t{% for entity in anomalie %}
\t\t<tr>
\t\t\t<td><input type=\"button\" id=\"modify_testa\"
\t\t\t\tonclick=\"location.href='{{ path('app_lavagna_edit', {'idL': entity.idL}) }}'\"
\t\t\t\tvalue=\"modifica\" /></td>
\t\t\t<td>{{ entity.anomalia }}</td>
\t\t\t<td><input type=\"button\" id=\"show_testa\"
\t\t\t\tonclick=\"location.href='{{ path('app_lavagna_duplicate', {'idL': entity.idL}) }}'\"
\t\t\t\tvalue=\"duplica\" /></td>
\t\t\t<td><input type=\"button\" class=\"button red\" id=\"delete_testa\"
\t\t\t\tonclick=\"confirmDelete({{entity.idL }})\" value=\"cancella\" /></td>
\t\t</tr>
\t\t{% endfor %}
\t</tbody>
</table>
", "teste/table.anomalie.for.veicoli.list.index.html.twig", "C:\\wamp64\\www\\grent\\templates\\teste\\table.anomalie.for.veicoli.list.index.html.twig");
    }
}

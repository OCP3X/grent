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

/* teste/table.list.index.html.twig */
class __TwigTemplate_84121633d36f6bc30d63eb0e8b579f79 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "teste/table.list.index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "teste/table.list.index.html.twig"));

        // line 1
        echo "<tbody>
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["anomalie"]) || array_key_exists("anomalie", $context) ? $context["anomalie"] : (function () { throw new RuntimeError('Variable "anomalie" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 3
            echo "\t<tr>
\t\t<td><input type=\"button\" id=\"modify_testa\"
\t\t\tonclick=\"location.href='";
            // line 5
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lavagna_edit", ["idL" => twig_get_attribute($this->env, $this->source, $context["entity"], "id_l", [], "array", false, false, false, 5)]), "html", null, true);
            echo "'\"
\t\t\tvalue=\"modifica\" /></td>
\t\t<td>";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "numero_doc", [], "array", false, false, false, 7), "html", null, true);
            echo "</td>\t
\t    <td>";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "tipo_doc", [], "array", false, false, false, 8), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "id_veicolo", [], "array", false, false, false, 9), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "descrizion", [], "array", false, false, false, 10), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "tipo_intervento", [], "array", false, false, false, 11), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "id_meccanico", [], "array", false, false, false, 12), "html", null, true);
            echo "</td>
\t\t<td><input type=\"button\" id=\"show_testa\"
\t\t\tonclick=\"location.href='";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lavagna_duplicate", ["idL" => twig_get_attribute($this->env, $this->source, $context["entity"], "id_l", [], "array", false, false, false, 14)]), "html", null, true);
            echo "'\"
\t\t\tvalue=\"duplica\" /></td>
\t\t<td><input type=\"button\" class=\"button red\" id=\"delete_testa\"
\t\t\tonclick=\"confirmDelete(";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "id_l", [], "array", false, false, false, 17), "html", null, true);
            echo ")\" value=\"cancella\" /></td>
\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</tbody>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "teste/table.list.index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 20,  90 => 17,  84 => 14,  79 => 12,  75 => 11,  71 => 10,  67 => 9,  63 => 8,  59 => 7,  54 => 5,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<tbody>
\t{% for entity in anomalie %}
\t<tr>
\t\t<td><input type=\"button\" id=\"modify_testa\"
\t\t\tonclick=\"location.href='{{ path('app_lavagna_edit', {'idL': entity['id_l']}) }}'\"
\t\t\tvalue=\"modifica\" /></td>
\t\t<td>{{ entity['numero_doc'] }}</td>\t
\t    <td>{{ entity['tipo_doc'] }}</td>
\t\t<td>{{ entity['id_veicolo'] }}</td>
\t\t<td>{{ entity['descrizion'] }}</td>
\t\t<td>{{ entity['tipo_intervento'] }}</td>
\t\t<td>{{ entity['id_meccanico'] }}</td>
\t\t<td><input type=\"button\" id=\"show_testa\"
\t\t\tonclick=\"location.href='{{ path('app_lavagna_duplicate', {'idL': entity['id_l']}) }}'\"
\t\t\tvalue=\"duplica\" /></td>
\t\t<td><input type=\"button\" class=\"button red\" id=\"delete_testa\"
\t\t\tonclick=\"confirmDelete({{entity['id_l']}})\" value=\"cancella\" /></td>
\t</tr>
\t{% endfor %}
</tbody>", "teste/table.list.index.html.twig", "C:\\wamp64\\www\\grent\\templates\\teste\\table.list.index.html.twig");
    }
}

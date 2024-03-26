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

/* lavagna/table.list.index.html.twig */
class __TwigTemplate_2357653434df0346ec56c93fea19bef8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lavagna/table.list.index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lavagna/table.list.index.html.twig"));

        // line 1
        echo "<tbody>
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["anomalie"]) || array_key_exists("anomalie", $context) ? $context["anomalie"] : (function () { throw new RuntimeError('Variable "anomalie" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 3
            echo "\t<tr>
\t\t<td>
\t\t\t<a href='";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "href_dett", [], "any", false, false, false, 5), "html", null, true);
            echo "'><i class=\"fa-solid fa-pencil\"></i></a>
\t\t</td>
\t\t<td>";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "anomalia", [], "array", false, false, false, 7), "html", null, true);
            echo "</td>
\t\t<td>
\t\t\t<a href='";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "href_duplica", [], "any", false, false, false, 9), "html", null, true);
            echo "'><i class=\"fa-solid fa-copy\"></i></a>
\t\t</td>
\t\t<td>";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "targa", [], "array", false, false, false, 11), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "descrizion", [], "array", false, false, false, 12), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 13
            ((twig_get_attribute($this->env, $this->source, $context["entity"], "data_lavagna", [], "array", false, false, false, 13)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "data_lavagna", [], "array", false, false, false, 13), "d/m/y"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t<td>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "username", [], "array", false, false, false, 14), "html", null, true);
            echo "</td>
\t\t
\t\t<td>
\t\t\t<i class=\"fa-solid fa-trash\" onclick=\"confirmDelete(";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "id_l", [], "array", false, false, false, 17), "html", null, true);
            echo ")\"></i>
\t\t</td>
\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</tbody>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "lavagna/table.list.index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 21,  87 => 17,  81 => 14,  77 => 13,  73 => 12,  69 => 11,  64 => 9,  59 => 7,  54 => 5,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<tbody>
\t{% for entity in anomalie %}
\t<tr>
\t\t<td>
\t\t\t<a href='{{entity.href_dett}}'><i class=\"fa-solid fa-pencil\"></i></a>
\t\t</td>
\t\t<td>{{ entity['anomalia'] }}</td>
\t\t<td>
\t\t\t<a href='{{entity.href_duplica}}'><i class=\"fa-solid fa-copy\"></i></a>
\t\t</td>
\t\t<td>{{ entity['targa'] }}</td>
\t\t<td>{{ entity['descrizion'] }}</td>
\t\t<td>{{ entity['data_lavagna']  ?  entity['data_lavagna']|date('d/m/y') : ''}}</td>
\t\t<td>{{ entity['username'] }}</td>
\t\t
\t\t<td>
\t\t\t<i class=\"fa-solid fa-trash\" onclick=\"confirmDelete({{entity['id_l']}})\"></i>
\t\t</td>
\t</tr>
\t{% endfor %}
</tbody>", "lavagna/table.list.index.html.twig", "C:\\wamp64\\www\\grent\\templates\\lavagna\\table.list.index.html.twig");
    }
}

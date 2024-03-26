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

/* veicoli/table.list.veicoli.html.twig */
class __TwigTemplate_67c24cb6098925a6a1994d6a86e074ad extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "veicoli/table.list.veicoli.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "veicoli/table.list.veicoli.html.twig"));

        // line 1
        echo "
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["veicoli"]) || array_key_exists("veicoli", $context) ? $context["veicoli"] : (function () { throw new RuntimeError('Variable "veicoli" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["veicolo"]) {
            // line 3
            echo "\t\t\t<tr>
\t\t\t\t<td><i class=\"fa-solid fa-check veicoli_ext_select_veicolo\" data_id_veicolo=\"";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["veicolo"], "id_veicolo", [], "any", false, false, false, 4), "html", null, true);
            echo "\"
                    data_descrizione=\"";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["veicolo"], "descrizion", [], "any", false, false, false, 5), "html", null, true);
            echo "\" data_targa=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["veicolo"], "targa", [], "any", false, false, false, 5), "html", null, true);
            echo "\">
                </i></td>
\t\t\t\t<td>";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["veicolo"], "descrizion", [], "any", false, false, false, 7), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["veicolo"], "targa", [], "any", false, false, false, 8), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["veicolo"], "id_tipo_veicolo", [], "any", false, false, false, 9), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["veicolo"], "db", [], "any", false, false, false, 10), "html", null, true);
            echo "</td>
\t\t\t\t<td></td>
\t\t\t</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['veicolo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "veicoli/table.list.veicoli.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 10,  72 => 9,  68 => 8,  64 => 7,  57 => 5,  53 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% for veicolo in veicoli %}
\t\t\t<tr>
\t\t\t\t<td><i class=\"fa-solid fa-check veicoli_ext_select_veicolo\" data_id_veicolo=\"{{ veicolo.id_veicolo }}\"
                    data_descrizione=\"{{ veicolo.descrizion }}\" data_targa=\"{{ veicolo.targa }}\">
                </i></td>
\t\t\t\t<td>{{ veicolo.descrizion }}</td>
\t\t\t\t<td>{{ veicolo.targa }}</td>
\t\t\t\t<td>{{ veicolo.id_tipo_veicolo }}</td>
\t\t\t\t<td>{{ veicolo.db }}</td>
\t\t\t\t<td></td>
\t\t\t</tr>
{% endfor %}
", "veicoli/table.list.veicoli.html.twig", "C:\\wamp64\\www\\grent\\templates\\veicoli\\table.list.veicoli.html.twig");
    }
}

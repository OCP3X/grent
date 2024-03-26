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

/* righe/lista_righe.html.twig */
class __TwigTemplate_92b6189006b7aa98f3b6aec3b13d69ef extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "righe/lista_righe.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "righe/lista_righe.html.twig"));

        // line 1
        echo "

";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["aLab"]) || array_key_exists("aLab", $context) ? $context["aLab"] : (function () { throw new RuntimeError('Variable "aLab" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 4
            echo "\t\t\t<tr>
\t\t\t\t<td><a href='";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "href_dettaglio", [], "any", false, false, false, 5), "html", null, true);
            echo "'><i class=\"fa-solid fa-pencil btnDettaglioRiga ok_puntatore\" data_id_riga=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "id_riga", [], "any", false, false, false, 5), "html", null, true);
            echo "\"></i></a></td>
\t\t\t\t
\t\t\t\t
\t\t\t\t<td>
\t\t\t\t";
            // line 9
            if ((twig_get_attribute($this->env, $this->source, $context["r"], "tipo_intervento", [], "any", false, false, false, 9) == "Programmata")) {
                // line 10
                echo "\t\t\t\t\t<i>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "intervento", [], "any", false, false, false, 10), "html", null, true);
                echo "</i>
\t\t\t\t";
            }
            // line 12
            echo "\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "descrizione_anomalia", [], "any", false, false, false, 12), "html", null, true);
            echo "
\t\t\t\t</td>
\t\t\t\t<td>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "descrizione_intervento", [], "any", false, false, false, 14), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "ore", [], "any", false, false, false, 15), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "id_meccanico", [], "any", false, false, false, 16), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "da_lavagna", [], "any", false, false, false, 17), "html", null, true);
            echo "</td>
\t\t\t\t<td><i class=\"fa-solid fa-trash btnDeleteRiga ok_puntatore\" data_id_riga=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "id_riga", [], "any", false, false, false, 18), "html", null, true);
            echo "\"></i></td>
\t\t\t</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "righe/lista_righe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 18,  89 => 17,  85 => 16,  81 => 15,  77 => 14,  71 => 12,  65 => 10,  63 => 9,  54 => 5,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

{% for r in aLab %}
\t\t\t<tr>
\t\t\t\t<td><a href='{{r.href_dettaglio}}'><i class=\"fa-solid fa-pencil btnDettaglioRiga ok_puntatore\" data_id_riga=\"{{r.id_riga}}\"></i></a></td>
\t\t\t\t
\t\t\t\t
\t\t\t\t<td>
\t\t\t\t{% if r.tipo_intervento=='Programmata' %}
\t\t\t\t\t<i>{{ r.intervento }}</i>
\t\t\t\t{% endif %}
\t\t\t\t\t{{ r.descrizione_anomalia }}
\t\t\t\t</td>
\t\t\t\t<td>{{ r.descrizione_intervento }}</td>
\t\t\t\t<td>{{ r.ore }}</td>
\t\t\t\t<td>{{ r.id_meccanico }}</td>
\t\t\t\t<td>{{ r.da_lavagna }}</td>
\t\t\t\t<td><i class=\"fa-solid fa-trash btnDeleteRiga ok_puntatore\" data_id_riga=\"{{r.id_riga}}\"></i></td>
\t\t\t</tr>
{% endfor %}
", "righe/lista_righe.html.twig", "C:\\wamp64\\www\\grent\\templates\\righe\\lista_righe.html.twig");
    }
}

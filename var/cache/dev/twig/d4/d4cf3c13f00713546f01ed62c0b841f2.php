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

/* righe/old/upd.righe.html.twig */
class __TwigTemplate_98093fbfa4054412ec28512e0b1d371c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "righe/old/upd.righe.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "righe/old/upd.righe.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["righe"]) || array_key_exists("righe", $context) ? $context["righe"] : (function () { throw new RuntimeError('Variable "righe" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["riga"]) {
            // line 2
            echo "\t\t\t<tr>
\t\t\t\t<td><input type=\"button\" id=\"update_riga\"
\t\t\t\t\tonclick=\"location.href='";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_righe_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["riga"], "id", [], "any", false, false, false, 4)]), "html", null, true);
            echo "'\"
\t\t\t\t\tvalue=\"modifica\" /></td>
\t\t\t\t<td>";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["riga"], "descrizioneAnomalia", [], "any", false, false, false, 6), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["riga"], "descrizioneIntervento", [], "any", false, false, false, 7), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["riga"], "idMeccanico", [], "any", false, false, false, 8), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["riga"], "stato", [], "any", false, false, false, 9), "html", null, true);
            echo "</td>
\t\t\t\t<td><input type=\"button\" id=\"delete_riga\"
\t\t\t\t\tonclick=\"location.href='";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_righe_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["riga"], "id", [], "any", false, false, false, 11)]), "html", null, true);
            echo "'\"
\t\t\t\t\tclass = \"button red\" value=\"cancella\" /></td>
\t\t\t\t<td></td>
\t\t\t</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['riga'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "righe/old/upd.righe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 16,  73 => 11,  68 => 9,  64 => 8,  60 => 7,  56 => 6,  51 => 4,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for riga in righe %}
\t\t\t<tr>
\t\t\t\t<td><input type=\"button\" id=\"update_riga\"
\t\t\t\t\tonclick=\"location.href='{{ path('app_righe_edit', {'id': riga.id}) }}'\"
\t\t\t\t\tvalue=\"modifica\" /></td>
\t\t\t\t<td>{{ riga.descrizioneAnomalia}}</td>
\t\t\t\t<td>{{ riga.descrizioneIntervento}}</td>
\t\t\t\t<td>{{ riga.idMeccanico}}</td>
\t\t\t\t<td>{{ riga.stato}}</td>
\t\t\t\t<td><input type=\"button\" id=\"delete_riga\"
\t\t\t\t\tonclick=\"location.href='{{ path('app_righe_delete', {'id': riga.id}) }}'\"
\t\t\t\t\tclass = \"button red\" value=\"cancella\" /></td>
\t\t\t\t<td></td>
\t\t\t</tr>
{% endfor %}


", "righe/old/upd.righe.html.twig", "C:\\wamp64\\www\\grent\\templates\\righe\\old\\upd.righe.html.twig");
    }
}

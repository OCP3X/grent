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

/* righe/old/table.list.righe.html.twig */
class __TwigTemplate_6dca4e95cef9864aa56ce9bfd4b105b2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "righe/old/table.list.righe.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "righe/old/table.list.righe.html.twig"));

        // line 1
        echo "
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["righe"]) || array_key_exists("righe", $context) ? $context["righe"] : (function () { throw new RuntimeError('Variable "righe" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["riga"]) {
            echo "           
\t\t\t<tr>
\t\t\t\t<td><input type=\"button\" id=\"update_riga\"
\t\t\t\t\tonclick=\"location.href='";
            // line 5
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_righe_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["riga"], "id", [], "any", false, false, false, 5)]), "html", null, true);
            echo "'\"
\t\t\t\t\tvalue=\"modifica\"></td>
\t\t\t\t<td>";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["riga"], "descrizioneAnomalia", [], "any", false, false, false, 7), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["riga"], "descrizioneIntervento", [], "any", false, false, false, 8), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["riga"], "idMeccanico", [], "any", false, false, false, 9), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["riga"], "stato", [], "any", false, false, false, 10), "html", null, true);
            echo "</td>
\t\t\t\t<td><input type=\"button\" id=\"delete_riga\"
\t\t\t\t\tonclick=\"confirmDelete(";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["riga"], "id", [], "any", false, false, false, 12), "html", null, true);
            echo ")\" value=\"cancella\" 
\t\t\t\t\tclass = \"button red\" value=\"cancella\"></td>
\t\t\t\t
\t\t\t</tr>
<script>
function confirmDelete(e) {
\tlet text = \"Sei sicuro di voler cancellare l'anomalia? '\" + e + \"'\";
\tif (confirm(text) == true) {
\t\tvar request = new XMLHttpRequest();
\t\t// Instantiating the request object
\t\trequest.open(\"GET\", \"/righe/delete/\" + e);
\t\trequest.send();
\t}
\tlocation.reload();
}
</script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['riga'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "



";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "righe/old/table.list.righe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 29,  76 => 12,  71 => 10,  67 => 9,  63 => 8,  59 => 7,  54 => 5,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% for riga in righe %}           
\t\t\t<tr>
\t\t\t\t<td><input type=\"button\" id=\"update_riga\"
\t\t\t\t\tonclick=\"location.href='{{ path('app_righe_edit', {'id': riga.id}) }}'\"
\t\t\t\t\tvalue=\"modifica\"></td>
\t\t\t\t<td>{{ riga.descrizioneAnomalia}}</td>
\t\t\t\t<td>{{ riga.descrizioneIntervento}}</td>
\t\t\t\t<td>{{ riga.idMeccanico}}</td>
\t\t\t\t<td>{{ riga.stato}}</td>
\t\t\t\t<td><input type=\"button\" id=\"delete_riga\"
\t\t\t\t\tonclick=\"confirmDelete({{ riga.id }})\" value=\"cancella\" 
\t\t\t\t\tclass = \"button red\" value=\"cancella\"></td>
\t\t\t\t
\t\t\t</tr>
<script>
function confirmDelete(e) {
\tlet text = \"Sei sicuro di voler cancellare l'anomalia? '\" + e + \"'\";
\tif (confirm(text) == true) {
\t\tvar request = new XMLHttpRequest();
\t\t// Instantiating the request object
\t\trequest.open(\"GET\", \"/righe/delete/\" + e);
\t\trequest.send();
\t}
\tlocation.reload();
}
</script>
{% endfor %}




", "righe/old/table.list.righe.html.twig", "C:\\wamp64\\www\\grent\\templates\\righe\\old\\table.list.righe.html.twig");
    }
}

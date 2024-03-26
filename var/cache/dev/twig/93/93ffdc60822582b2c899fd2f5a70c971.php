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

/* lavagna/table.list.anomalie.html.twig */
class __TwigTemplate_89261f42d412f34ba1cc00800b80d56a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lavagna/table.list.anomalie.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lavagna/table.list.anomalie.html.twig"));

        // line 1
        echo "
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["anomalie"]) || array_key_exists("anomalie", $context) ? $context["anomalie"] : (function () { throw new RuntimeError('Variable "anomalie" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["anomalia"]) {
            // line 3
            echo "\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t<i class=\"fa-solid fa-bolt-lightning ok_puntatore btnSelAnomalia\"
\t\t\t\t\tdata_id_l=\"";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["anomalia"], "id_l", [], "any", false, false, false, 6), "html", null, true);
            echo "\"></i>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</td>
\t\t\t\t<td>";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["anomalia"], "anomalia", [], "any", false, false, false, 11), "html", null, true);
            echo "</td>
\t\t\t\t<td></td>



\t\t\t
\t\t\t</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['anomalia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "lavagna/table.list.anomalie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  55 => 6,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% for anomalia in anomalie %}
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t<i class=\"fa-solid fa-bolt-lightning ok_puntatore btnSelAnomalia\"
\t\t\t\t\tdata_id_l=\"{{anomalia.id_l}}\"></i>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</td>
\t\t\t\t<td>{{ anomalia.anomalia }}</td>
\t\t\t\t<td></td>



\t\t\t
\t\t\t</tr>
{% endfor %}", "lavagna/table.list.anomalie.html.twig", "C:\\wamp64\\www\\grent\\templates\\lavagna\\table.list.anomalie.html.twig");
    }
}

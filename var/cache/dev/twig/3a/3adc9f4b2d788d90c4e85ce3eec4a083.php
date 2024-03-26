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

/* veicoli/index.html.twig */
class __TwigTemplate_ef131f1ad5e388922f25702c2b2f1eeb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "veicoli/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "veicoli/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "veicoli/index.html.twig", 1);
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

        echo "Veicoli index";
        
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
        echo "    <h1>Veicoli index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>IdVeicolo</th>
                <th>NumParco</th>
                <th>Descrizion</th>
                <th>Targa</th>
                <th>IdTipoVeicolo</th>
                <th>IdGruppoVeicolo</th>
                <th>Immatricolazione</th>
                <th>Numposti</th>
                <th>Dc</th>
                <th>Dm</th>
                <th>Descrizione2</th>
                <th>Ordine</th>
                <th>Proprieta</th>
                <th>Fittizio</th>
                <th>Termiche</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["veicolis"]) || array_key_exists("veicolis", $context) ? $context["veicolis"] : (function () { throw new RuntimeError('Variable "veicolis" does not exist.', 30, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["veicoli"]) {
            // line 31
            echo "            <tr>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["veicoli"], "idVeicolo", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["veicoli"], "numParco", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["veicoli"], "descrizion", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["veicoli"], "targa", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["veicoli"], "idTipoVeicolo", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["veicoli"], "idGruppoVeicolo", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            ((twig_get_attribute($this->env, $this->source, $context["veicoli"], "immatricolazione", [], "any", false, false, false, 38)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["veicoli"], "immatricolazione", [], "any", false, false, false, 38), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["veicoli"], "numposti", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            ((twig_get_attribute($this->env, $this->source, $context["veicoli"], "dc", [], "any", false, false, false, 40)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["veicoli"], "dc", [], "any", false, false, false, 40), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["veicoli"], "dm", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["veicoli"], "descrizione2", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["veicoli"], "ordine", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["veicoli"], "proprieta", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["veicoli"], "fittizio", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["veicoli"], "termiche", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_veicoli_show", ["idVeicolo" => twig_get_attribute($this->env, $this->source, $context["veicoli"], "idVeicolo", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_veicoli_edit", ["idVeicolo" => twig_get_attribute($this->env, $this->source, $context["veicoli"], "idVeicolo", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 53
            echo "            <tr>
                <td colspan=\"16\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['veicoli'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_veicoli_new");
        echo "\">Create new</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "veicoli/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 60,  205 => 57,  196 => 53,  187 => 49,  183 => 48,  178 => 46,  174 => 45,  170 => 44,  166 => 43,  162 => 42,  158 => 41,  154 => 40,  150 => 39,  146 => 38,  142 => 37,  138 => 36,  134 => 35,  130 => 34,  126 => 33,  122 => 32,  119 => 31,  114 => 30,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Veicoli index{% endblock %}

{% block body %}
    <h1>Veicoli index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>IdVeicolo</th>
                <th>NumParco</th>
                <th>Descrizion</th>
                <th>Targa</th>
                <th>IdTipoVeicolo</th>
                <th>IdGruppoVeicolo</th>
                <th>Immatricolazione</th>
                <th>Numposti</th>
                <th>Dc</th>
                <th>Dm</th>
                <th>Descrizione2</th>
                <th>Ordine</th>
                <th>Proprieta</th>
                <th>Fittizio</th>
                <th>Termiche</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for veicoli in veicolis %}
            <tr>
                <td>{{ veicoli.idVeicolo }}</td>
                <td>{{ veicoli.numParco }}</td>
                <td>{{ veicoli.descrizion }}</td>
                <td>{{ veicoli.targa }}</td>
                <td>{{ veicoli.idTipoVeicolo }}</td>
                <td>{{ veicoli.idGruppoVeicolo }}</td>
                <td>{{ veicoli.immatricolazione ? veicoli.immatricolazione|date('Y-m-d H:i:s') : '' }}</td>
                <td>{{ veicoli.numposti }}</td>
                <td>{{ veicoli.dc ? veicoli.dc|date('Y-m-d H:i:s') : '' }}</td>
                <td>{{ veicoli.dm }}</td>
                <td>{{ veicoli.descrizione2 }}</td>
                <td>{{ veicoli.ordine }}</td>
                <td>{{ veicoli.proprieta }}</td>
                <td>{{ veicoli.fittizio }}</td>
                <td>{{ veicoli.termiche }}</td>
                <td>
                    <a href=\"{{ path('app_veicoli_show', {'idVeicolo': veicoli.idVeicolo}) }}\">show</a>
                    <a href=\"{{ path('app_veicoli_edit', {'idVeicolo': veicoli.idVeicolo}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"16\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_veicoli_new') }}\">Create new</a>
{% endblock %}
", "veicoli/index.html.twig", "C:\\wamp64\\www\\grent\\templates\\veicoli\\index.html.twig");
    }
}

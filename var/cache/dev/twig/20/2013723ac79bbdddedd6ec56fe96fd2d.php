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

/* teste/index.html.twig */
class __TwigTemplate_b4e9ee70adb2ebd76ba66897c605c058 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'javascripts' => [$this, 'block_javascripts'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "teste/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "teste/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "teste/index.html.twig", 1);
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

        // line 4
        echo "Lista Documenti
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 8
        echo "<script src=\"/js/documenti/documenti.js\" defer></script>
<script src=\"/js/teste/teste_lista.js\" defer></script>    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "<style>
.ok_puntatore{
    cursor: pointer;
 }

 


</style>
 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 25
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 26
        echo "

<span><h1>Documenti</h1></span>
 
 ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'form_start', ["attr" => ["id" => "form_filtro"]]);
        echo "

 <div class=\"row\">
            <div class=\"col-3\">
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "terminato", [], "any", false, false, false, 34), 'row');
        echo "
            </div>
</div>
  ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), 'form_end');
        echo "


<a href='";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["href_new"]) || array_key_exists("href_new", $context) ? $context["href_new"] : (function () { throw new RuntimeError('Variable "href_new" does not exist.', 40, $this->source); })()), "html", null, true);
        echo "'><input type=\"button\" class=\"btn btn-primary\" id=\"add_anomalia\"  value=\"Nuovo Documento\" /></a>
    
    <table class=\"table\">
        <thead>
            <tr>
                <th></th>
                <th>Tipo</th>
                <th>Stampa</th>
                <th>Documento</th>
                <th>Numero</th>
                <th>Data</th>
                <th>Veicolo</th>
                <th>Targa</th>
                <th>Tipo_intervento</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["aLab"]) || array_key_exists("aLab", $context) ? $context["aLab"] : (function () { throw new RuntimeError('Variable "aLab" does not exist.', 58, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 59
            echo "            <tr class='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "terminato_class", [], "any", false, false, false, 59), "html", null, true);
            echo "'>
                <td><a href='";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "href_dettaglio", [], "any", false, false, false, 60), "html", null, true);
            echo "'><i class=\"fa-solid fa-pencil\"></i></a></td>
                <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "tipodoc", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                <td><a href='";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "href_stampa_doc", [], "any", false, false, false, 62), "html", null, true);
            echo "'><i class=\"fa-solid fa-print\"></i></a></td>
                <td style=\"text-align: center; width: 40px;\"><a href=\"javascript: void(0)\" onclick=\"documenti('";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "targa", [], "any", false, false, false, 63), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "veicolo_descr", [], "any", false, false, false, 63), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "id_veicolo", [], "any", false, false, false, 63), "html", null, true);
            echo "')\"><i class=\"fa-solid fa-list\"></i></a></td>
                  ";
            // line 65
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "numero_doc", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                <td>";
            // line 66
            ((twig_get_attribute($this->env, $this->source, $context["r"], "data_doc", [], "any", false, false, false, 66)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "data_doc", [], "any", false, false, false, 66), "d/m/y"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "veicolo_descr", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>
                <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "targa", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
                <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "tipo_intervento", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
                <td>
                    <i class=\"fa-solid fa-trash btnDeleteTesta ok_puntatore\"  data_id_testa=\"";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "id_testa", [], "any", false, false, false, 71), "html", null, true);
            echo "\"></i>
                    
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "        </tbody>
    </table>
 

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "teste/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 76,  240 => 71,  235 => 69,  231 => 68,  227 => 67,  223 => 66,  218 => 65,  210 => 63,  206 => 62,  202 => 61,  198 => 60,  193 => 59,  189 => 58,  168 => 40,  162 => 37,  156 => 34,  149 => 30,  143 => 26,  133 => 25,  114 => 14,  104 => 13,  92 => 8,  82 => 7,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
Lista Documenti
{% endblock %}

{% block javascripts %}
<script src=\"/js/documenti/documenti.js\" defer></script>
<script src=\"/js/teste/teste_lista.js\" defer></script>    
{% endblock %}


{% block stylesheets %}
<style>
.ok_puntatore{
    cursor: pointer;
 }

 


</style>
 {% endblock %}

{% block body %}


<span><h1>Documenti</h1></span>
 
 {{ form_start(form, {'attr': {'id': 'form_filtro'}})}}

 <div class=\"row\">
            <div class=\"col-3\">
            {{ form_row(form.terminato) }}
            </div>
</div>
  {{ form_end(form)}}


<a href='{{ href_new }}'><input type=\"button\" class=\"btn btn-primary\" id=\"add_anomalia\"  value=\"Nuovo Documento\" /></a>
    
    <table class=\"table\">
        <thead>
            <tr>
                <th></th>
                <th>Tipo</th>
                <th>Stampa</th>
                <th>Documento</th>
                <th>Numero</th>
                <th>Data</th>
                <th>Veicolo</th>
                <th>Targa</th>
                <th>Tipo_intervento</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        {% for r in aLab %}
            <tr class='{{ r.terminato_class }}'>
                <td><a href='{{r.href_dettaglio}}'><i class=\"fa-solid fa-pencil\"></i></a></td>
                <td>{{ r.tipodoc }}</td>
                <td><a href='{{r.href_stampa_doc}}'><i class=\"fa-solid fa-print\"></i></a></td>
                <td style=\"text-align: center; width: 40px;\"><a href=\"javascript: void(0)\" onclick=\"documenti('{{ r.targa }}','{{ r.veicolo_descr }}','{{ r.id_veicolo }}')\"><i class=\"fa-solid fa-list\"></i></a></td>
                  {#  {{ dump(r.href_stampa_doc) }}  #}
                <td>{{ r.numero_doc }}</td>
                <td>{{ r.data_doc ? r.data_doc|date('d/m/y') : '' }}</td>
                <td>{{ r.veicolo_descr }}</td>
                <td>{{ r.targa }}</td>
                <td>{{ r.tipo_intervento }}</td>
                <td>
                    <i class=\"fa-solid fa-trash btnDeleteTesta ok_puntatore\"  data_id_testa=\"{{r.id_testa}}\"></i>
                    
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
 

{% endblock %}



", "teste/index.html.twig", "C:\\wamp64\\www\\grent\\templates\\teste\\index.html.twig");
    }
}

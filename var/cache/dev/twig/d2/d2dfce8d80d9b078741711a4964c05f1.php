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

/* righe/dettaglio_riga.html.twig */
class __TwigTemplate_5e2e2133de05e2286e6c392c26b148ff extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "righe/dettaglio_riga.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "righe/dettaglio_riga.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "righe/dettaglio_riga.html.twig", 1);
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

        echo "Dettaglio Documento";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
<section id=\"div_dettaglio_testa\">
        ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["RigaForm"]) || array_key_exists("RigaForm", $context) ? $context["RigaForm"] : (function () { throw new RuntimeError('Variable "RigaForm" does not exist.', 9, $this->source); })()), 'form_start', ["attr" => ["id" => "form_dettaglio"]]);
        echo "

    ";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, (isset($context["teste"]) || array_key_exists("teste", $context) ? $context["teste"] : (function () { throw new RuntimeError('Variable "teste" does not exist.', 11, $this->source); })()), "getTipoIntervento", [], "method", false, false, false, 11) == "Programmata")) {
            // line 12
            echo "
    <div class=\"row\">
        <div class=\"col\">
          ";
            // line 15
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["RigaForm"]) || array_key_exists("RigaForm", $context) ? $context["RigaForm"] : (function () { throw new RuntimeError('Variable "RigaForm" does not exist.', 15, $this->source); })()), "id_off_intervento", [], "any", false, false, false, 15), 'row');
            echo "
        </div>
        
    </div>

    ";
        } else {
            // line 21
            echo "    
 ";
            // line 22
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["RigaForm"]) || array_key_exists("RigaForm", $context) ? $context["RigaForm"] : (function () { throw new RuntimeError('Variable "RigaForm" does not exist.', 22, $this->source); })()), "id_off_intervento", [], "any", false, false, false, 22), 'widget', ["attr" => ["hidden" => true]]);
            echo "
 
   
    
    ";
        }
        // line 27
        echo "
    <div class=\"row\">
        <div class=\"col\">
            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["RigaForm"]) || array_key_exists("RigaForm", $context) ? $context["RigaForm"] : (function () { throw new RuntimeError('Variable "RigaForm" does not exist.', 30, $this->source); })()), "descrizione_anomalia", [], "any", false, false, false, 30), 'row');
        echo "
        </div>
    </div>
    

    <div class=\"row\">
        <div class=\"col\">
            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["RigaForm"]) || array_key_exists("RigaForm", $context) ? $context["RigaForm"] : (function () { throw new RuntimeError('Variable "RigaForm" does not exist.', 37, $this->source); })()), "descrizione_intervento", [], "any", false, false, false, 37), 'row');
        echo "
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-3\">
            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["RigaForm"]) || array_key_exists("RigaForm", $context) ? $context["RigaForm"] : (function () { throw new RuntimeError('Variable "RigaForm" does not exist.', 43, $this->source); })()), "ore", [], "any", false, false, false, 43), 'row');
        echo "
        </div>
        <div class=\"col-3\">
            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["RigaForm"]) || array_key_exists("RigaForm", $context) ? $context["RigaForm"] : (function () { throw new RuntimeError('Variable "RigaForm" does not exist.', 46, $this->source); })()), "id_meccanico", [], "any", false, false, false, 46), 'row');
        echo "
        </div>
    </div>

        
    
    <button type=\"submit\" class=\"btn btn-primary btnSalva\">Salva</button>
    <a href='";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["href_cancel"]) || array_key_exists("href_cancel", $context) ? $context["href_cancel"] : (function () { throw new RuntimeError('Variable "href_cancel" does not exist.', 53, $this->source); })()), "html", null, true);
        echo "'><button type=\"button\" class=\"btn btn-secondary btnAnnulla\" >Annulla</button></a>
        ";
        // line 54
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["RigaForm"]) || array_key_exists("RigaForm", $context) ? $context["RigaForm"] : (function () { throw new RuntimeError('Variable "RigaForm" does not exist.', 54, $this->source); })()), 'form_end');
        echo "
    </section>





";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "righe/dettaglio_riga.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 54,  164 => 53,  154 => 46,  148 => 43,  139 => 37,  129 => 30,  124 => 27,  116 => 22,  113 => 21,  104 => 15,  99 => 12,  97 => 11,  92 => 9,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dettaglio Documento{% endblock %}


{% block body %}

<section id=\"div_dettaglio_testa\">
        {{ form_start(RigaForm, {'attr': {'id': 'form_dettaglio'}})}}

    {% if teste.getTipoIntervento()=='Programmata' %}

    <div class=\"row\">
        <div class=\"col\">
          {{ form_row(RigaForm.id_off_intervento) }}
        </div>
        
    </div>

    {%else%}
    
 {{ form_widget(RigaForm.id_off_intervento, {'attr': {'hidden': true} }) }}
 
   
    
    {%endif%}

    <div class=\"row\">
        <div class=\"col\">
            {{ form_row(RigaForm.descrizione_anomalia) }}
        </div>
    </div>
    

    <div class=\"row\">
        <div class=\"col\">
            {{ form_row(RigaForm.descrizione_intervento) }}
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-3\">
            {{ form_row(RigaForm.ore) }}
        </div>
        <div class=\"col-3\">
            {{ form_row(RigaForm.id_meccanico) }}
        </div>
    </div>

        
    
    <button type=\"submit\" class=\"btn btn-primary btnSalva\">Salva</button>
    <a href='{{href_cancel}}'><button type=\"button\" class=\"btn btn-secondary btnAnnulla\" >Annulla</button></a>
        {{ form_end(RigaForm)}}
    </section>





{% endblock %}



", "righe/dettaglio_riga.html.twig", "C:\\wamp64\\www\\grent\\templates\\righe\\dettaglio_riga.html.twig");
    }
}

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

/* lavagna/new.html.twig */
class __TwigTemplate_9bbed12bd1c023d9f37c1302784329cb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lavagna/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lavagna/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "lavagna/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker.min.css\" integrity=\"sha512-34s5cpvaNG3BknEWSuOncX28vz97bRI59UnVtEEpFX536A7BtZSJHsDyFoCl8S7Dt2TPzcrCEoHBGeM4SUBDBw==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />


<style>
.div_ricerca_veicoli { display: none; }
 .btnRicercaVeicolo {
\tfont-size:27px;
\tpadding: 30px 0;
\tcursor: pointer;
 }

 .btnRicercaVeicolo:hover {
\tcolor: #008102;
 }

 .div_btn_ricerca_veicolo{
\ttext-align: center;
 }

</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 32
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 33
        echo "<script src=\"/js/lavagna/new.js\" defer></script>    
<script src=\"/js/veicoli/find_veicoli.js\" defer></script>    

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js\" integrity=\"sha512-LsnSViqQyaXpD4mBBdRYeP6sRwJiJveh2ZIbW41EBrNmKxgr/LFZIiWT6yr+nycvhvauz8c2nYMhrP80YhG7Cw==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/locales/bootstrap-datepicker.it.min.js\" integrity=\"sha512-0MThRHKyDbl5nH553hVBJMo2Ma7c2c5jU2bENv92XM2SVQEcQ7vepANdKiU7DLiYH9RsqESRdDpCRVkIRGtKGQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 42
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 43
        echo "
<span><h1>
\t";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["title_form"]) || array_key_exists("title_form", $context) ? $context["title_form"] : (function () { throw new RuntimeError('Variable "title_form" does not exist.', 45, $this->source); })()), "html", null, true);
        echo "
</h1></span>
";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), 'form_start');
        echo "

<div class=\"my-custom-class-for-errors\">
\t";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), 'errors');
        echo "
</div>

<div class=\"div_dettaglio\">

\t<div class=\"row\">
\t\t<div class=\"col\">
            ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "data_lavagna", [], "any", false, false, false, 57), 'row');
        echo "
\t\t\t  
        </div>\t
      <div class=\"col\">
         <label  class=\"form-label required\">Veicolo</label>
\t\t\t<input type=\"text\"
\t\t\t\tid=\"text_descrizion\" name=\"text_descrizion\" value=\"\" readonly class=\"form-control\">
\t\t</div>
\t\t<div class=\"col\">
\t\t\t<label  class=\"form-label required\">Targa</label>
\t\t\t   <input type=\"text\"
\t\t\t\t   id=\"text_targa\" name=\"text_targa\" value=\"\" readonly class=\"form-control\">
\t\t   </div>

\t\t<div class=\"col-1 div_btn_ricerca_veicolo\">
\t\t\t<i class=\"fa-solid fa-car-side btnRicercaVeicolo\" id=\"find_veicoli\"></i>
\t\t</div>
\t\t<div class=\"col-2\">
\t\t\t";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "idVeicolo", [], "any", false, false, false, 75), 'row', ["id" => "id_veicolo", "attr" => ["class" => "veicoli_display"]]);
        echo "
\t\t</div>

\t</div>
\t     <div class=\"row\">
            <div class=\"col\">
\t\t\t     ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "anomalia", [], "any", false, false, false, 81), 'row', ["label" => "Anomalia: ", "id" => "edit_anomalia"]);
        echo "
\t\t\t    </div>
\t\t</div>
\t\t ";
        // line 85
        echo " \t\t<div class=\"row\">
            <div class=\"col\">
\t\t\t     Inserimento<br>
\t\t\t\t Utente: ";
        // line 88
        (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["lavagna"]) || array_key_exists("lavagna", $context) ? $context["lavagna"] : (function () { throw new RuntimeError('Variable "lavagna" does not exist.', 88, $this->source); })()), "uc", [], "any", false, false, false, 88))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lavagna"]) || array_key_exists("lavagna", $context) ? $context["lavagna"] : (function () { throw new RuntimeError('Variable "lavagna" does not exist.', 88, $this->source); })()), "webUserCreazione", [], "any", false, false, false, 88), "username", [], "any", false, false, false, 88), "html", null, true))) : (print ("Senza Utente")));
        echo "<br>
\t\t\t\t 

\t\t\t\t Data: ";
        // line 91
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lavagna"]) || array_key_exists("lavagna", $context) ? $context["lavagna"] : (function () { throw new RuntimeError('Variable "lavagna" does not exist.', 91, $this->source); })()), "dc", [], "any", false, false, false, 91), "d/m/Y H:i:s"), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t<div class=\"col\">
\t\t\t     Modifica<br>
\t\t\t\t Utente: ";
        // line 95
        (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["lavagna"]) || array_key_exists("lavagna", $context) ? $context["lavagna"] : (function () { throw new RuntimeError('Variable "lavagna" does not exist.', 95, $this->source); })()), "uc", [], "any", false, false, false, 95))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lavagna"]) || array_key_exists("lavagna", $context) ? $context["lavagna"] : (function () { throw new RuntimeError('Variable "lavagna" does not exist.', 95, $this->source); })()), "webUserModifica", [], "any", false, false, false, 95), "username", [], "any", false, false, false, 95), "html", null, true))) : (print ("Senza Utente")));
        echo "<br>
\t\t\t\t Data: ";
        // line 96
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lavagna"]) || array_key_exists("lavagna", $context) ? $context["lavagna"] : (function () { throw new RuntimeError('Variable "lavagna" does not exist.', 96, $this->source); })()), "dm", [], "any", false, false, false, 96), "d/m/Y H:i:s"), "html", null, true);
        echo "
\t\t\t</div>
\t\t</div>

\t
\t\t<div class=\"row\">
            <div class=\"col\">
\t\t\t    <input type=\"submit\" class=\"btn btn-primary\" value=\"OK\">
\t\t\t    <a href=\"";
        // line 104
        echo twig_escape_filter($this->env, (isset($context["href_lavagna_index"]) || array_key_exists("href_lavagna_index", $context) ? $context["href_lavagna_index"] : (function () { throw new RuntimeError('Variable "href_lavagna_index" does not exist.', 104, $this->source); })()), "html", null, true);
        echo "\"> <input type=\"button\" class=\"btn btn-secondary\" id=\"btnAnnulla\" value=\"Annulla\"></a>
\t\t    </div>
\t\t</div>

";
        // line 109
        echo "

\t";
        // line 111
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), 'form_end');
        echo "
\t
\t\t
</div>
";
        // line 116
        echo "

";
        // line 118
        $this->loadTemplate("veicoli/div_ricerca_veicoli.html.twig", "lavagna/new.html.twig", 118)->display($context);
        // line 119
        echo "
";
        // line 146
        echo "
";
        // line 148
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "lavagna/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 148,  258 => 146,  255 => 119,  253 => 118,  249 => 116,  242 => 111,  238 => 109,  231 => 104,  220 => 96,  216 => 95,  209 => 91,  203 => 88,  198 => 85,  192 => 81,  183 => 75,  162 => 57,  152 => 50,  146 => 47,  141 => 45,  137 => 43,  127 => 42,  111 => 33,  101 => 32,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}

<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker.min.css\" integrity=\"sha512-34s5cpvaNG3BknEWSuOncX28vz97bRI59UnVtEEpFX536A7BtZSJHsDyFoCl8S7Dt2TPzcrCEoHBGeM4SUBDBw==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />


<style>
.div_ricerca_veicoli { display: none; }
 .btnRicercaVeicolo {
\tfont-size:27px;
\tpadding: 30px 0;
\tcursor: pointer;
 }

 .btnRicercaVeicolo:hover {
\tcolor: #008102;
 }

 .div_btn_ricerca_veicolo{
\ttext-align: center;
 }

</style>
{% endblock %}






{% block javascripts %}
<script src=\"/js/lavagna/new.js\" defer></script>    
<script src=\"/js/veicoli/find_veicoli.js\" defer></script>    

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js\" integrity=\"sha512-LsnSViqQyaXpD4mBBdRYeP6sRwJiJveh2ZIbW41EBrNmKxgr/LFZIiWT6yr+nycvhvauz8c2nYMhrP80YhG7Cw==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/locales/bootstrap-datepicker.it.min.js\" integrity=\"sha512-0MThRHKyDbl5nH553hVBJMo2Ma7c2c5jU2bENv92XM2SVQEcQ7vepANdKiU7DLiYH9RsqESRdDpCRVkIRGtKGQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>

{% endblock %}


{% block body %}

<span><h1>
\t{{title_form}}
</h1></span>
{{ form_start(form) }}

<div class=\"my-custom-class-for-errors\">
\t{{ form_errors(form) }}
</div>

<div class=\"div_dettaglio\">

\t<div class=\"row\">
\t\t<div class=\"col\">
            {{ form_row(form.data_lavagna) }}
\t\t\t  
        </div>\t
      <div class=\"col\">
         <label  class=\"form-label required\">Veicolo</label>
\t\t\t<input type=\"text\"
\t\t\t\tid=\"text_descrizion\" name=\"text_descrizion\" value=\"\" readonly class=\"form-control\">
\t\t</div>
\t\t<div class=\"col\">
\t\t\t<label  class=\"form-label required\">Targa</label>
\t\t\t   <input type=\"text\"
\t\t\t\t   id=\"text_targa\" name=\"text_targa\" value=\"\" readonly class=\"form-control\">
\t\t   </div>

\t\t<div class=\"col-1 div_btn_ricerca_veicolo\">
\t\t\t<i class=\"fa-solid fa-car-side btnRicercaVeicolo\" id=\"find_veicoli\"></i>
\t\t</div>
\t\t<div class=\"col-2\">
\t\t\t{{ form_row(form.idVeicolo, {'id': 'id_veicolo', 'attr': {'class': 'veicoli_display'}  }) }}
\t\t</div>

\t</div>
\t     <div class=\"row\">
            <div class=\"col\">
\t\t\t     {{ form_row(form.anomalia, { 'label': 'Anomalia: ', 'id': 'edit_anomalia' })}}
\t\t\t    </div>
\t\t</div>
\t\t {# {{ dump(lavagna) }}  #}
 \t\t<div class=\"row\">
            <div class=\"col\">
\t\t\t     Inserimento<br>
\t\t\t\t Utente: {{ lavagna.uc is not null ? lavagna.webUserCreazione.username : 'Senza Utente' }}<br>
\t\t\t\t 

\t\t\t\t Data: {{lavagna.dc|date('d/m/Y H:i:s')}}
\t\t\t</div>
\t\t\t<div class=\"col\">
\t\t\t     Modifica<br>
\t\t\t\t Utente: {{ lavagna.uc is not null ? lavagna.webUserModifica.username : 'Senza Utente' }}<br>
\t\t\t\t Data: {{lavagna.dm|date('d/m/Y H:i:s')}}
\t\t\t</div>
\t\t</div>

\t
\t\t<div class=\"row\">
            <div class=\"col\">
\t\t\t    <input type=\"submit\" class=\"btn btn-primary\" value=\"OK\">
\t\t\t    <a href=\"{{href_lavagna_index}}\"> <input type=\"button\" class=\"btn btn-secondary\" id=\"btnAnnulla\" value=\"Annulla\"></a>
\t\t    </div>
\t\t</div>

{# {{ dump(href_lavagna_index) }} #}


\t{{ form_end(form) }}
\t
\t\t
</div>
{# chiusura div dettaglio#}


{% include 'veicoli/div_ricerca_veicoli.html.twig' %}

{#
<div class=\"xxxdiv_ricerca\">
   <div class=\"row\">
\t\t
      <div class=\"col\">
<table class=\"table table-hover\" id=\"table_veicoli\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th></th>
\t\t\t\t<th>Descrizione</th>
\t\t\t\t<th>Targa</th>
\t\t\t\t<th></th>
\t\t\t</tr>
\t\t</thead>
\t\t<tr>
\t\t\t<td></td>
\t\t\t<td><input type=\"text\" id=\"xxxdescrizione_finder\" name=\"descrizione_finder\"></td>
\t\t\t<td><input type=\"text\" id=\"xxxtarga_finder\" name=\"targa_finder\"></td>
\t\t\t<td></td>
\t\t</tr>
\t\t<tbody id =\"to_update\">
\t\t</tbody>
</div>
</div>
</div>
#}

{# chiusura div ricerca#}

{% endblock %}", "lavagna/new.html.twig", "C:\\wamp64\\www\\grent\\templates\\lavagna\\new.html.twig");
    }
}

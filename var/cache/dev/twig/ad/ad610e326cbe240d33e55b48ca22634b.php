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

/* teste/new.html.twig */
class __TwigTemplate_8fff8df1e730e390992499ccac322d90 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'css_pagina' => [$this, 'block_css_pagina'],
            'jQueryReady' => [$this, 'block_jQueryReady'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "teste/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "teste/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "teste/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_css_pagina($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css_pagina"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css_pagina"));

        // line 4
        echo ".div_ricerca { display: none; } span { width: 300px; height: 80px;
display: inline-block; vertical-align: left; line-height: normal;
margin-left: 10px; }


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_jQueryReady($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jQueryReady"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jQueryReady"));

        // line 12
        echo "
\$('#list_anomalie').ready(function() {
  // Handler for .load() called.
     
     \$.get(\"/righe/get/anomalia/\" + \$('#id_teste').val(), function(data) { 
     
\t  \$('#list_anomalie').html(data);
  });
});




//Funzioni per gestire il salvataggio in background
\$( '#edit_veicolo' ).focusout(function() { 
     \$.get(\"/teste/update/record/\" + \$('#id_teste').val() + \"/\" + \$('#edit_veicolo').val() + \"/\" + \$('#edit_meccanico').val() + \"/\" + \$('#edit_tipo_doc').val(), function(data) { // Iterate the groups first.   
  });
});

\$( '#show_index' ).click(function() { 
//alert(\$('#edit_tipo_doc').val());
     \$.get(\"/teste/update/record/\" + \$('#id_teste').val() + \"/\" + \$('#edit_veicolo').val() + \"/\" + \$('#edit_meccanico').val()+ \"/\" + \$('#edit_tipo_doc').val(), function(data) { // Iterate the groups first.   
  });
});

//GESTIONE ANOMALIE
\$( '#gestione_anomalie').click(function() {
     
     \$('.div_gestione_anomalie').toggle();
});

\$('#div_gestione_anomalie').ready(function() {
  // Handler for .load() called.
  \$('.div_gestione_anomalie').hide();
});







//Funzione per mostrare/nasconder div
function functionShowHidden() {
 if (\$('.div_ricerca').is(\":visible\")) {
         \$('.div_ricerca').hide();
         \$('.div_dettaglio').show();
         \$('.div_dettaglio_anomalie').show();
         \$('.div_button_anomalie').show();
         \$('.div_table_anomalie').show();
    }
    else if (\$('.div_ricerca').is(\":hidden\")) {
      \$('#to_update').html = \"\";
      \$('.div_ricerca').show();
      \$('.div_dettaglio').hide();
      \$('.div_dettaglio_anomalie').hide();
      \$('.div_button_anomalie').hide();
      \$('.div_table_anomalie').hide();
    }
}

\$('#find_veicoli').click(function() {
    functionShowHidden();
\t\$.get(\"/veicoli/get/table\", function(data) { // Iterate the groups first.
\t\$('.div_ricerca').html(data);
\t}); 
\t\$.get(\"/veicoli/find/all/*/*\", function(data) { // Iterate the groups first.
\t\$('#to_update').html(data);
\t});
\tvar val = \$('#find_veicoli').val(); 
\tif (val == \"chiudi\") {
\t\t\$('#find_veicoli').val(\"ricerca veicoli\");
\t} else {
\t  \$('#find_veicoli').val(\"chiudi\");
\t}
});


\$('#edit_veicolo').focusout(function() {
\t\$.getJSON(\"/veicoli/find/\" +
\t\t\$('#edit_veicolo').val(), function(data) { // Iterate the groups first.
\t\t\t\$('#text_descrizion').val(''); \$(data).each(function(index, item) {
\t\t\t\t//each iteration 
\t\t\t\tvar descrizione = item.descrizione;

\t\t\t\t\$('#text_descrizion').val(descrizione);
\t\t });
\t});
});



function selectVeicoloItem(id) {
\t\$.getJSON(\"/veicoli/find/\" + id, function(data) { // Iterate the groups
\t\tfirst.\$('#text_descrizion').val(''); \$(data).each(function(index, item) { // each iteration var descrizione = item.descrizione;

\t\t\t\$('#text_descrizion').val(descrizione);
\t\t});
\t});
};

\$('#find_anomalia').click(function() {
   if (\$('#edit_veicolo').val() != \"\") {
   
   \$.get(\"/lavagna/get/table\", function(data) { // Iterate the groups first.
\t\$('.div_ricerca').html(data);
\tfunctionShowHidden();
\t}); 
   
\$.get(\"/lavagna/find/anomalie/veicoli/\" + \$('#edit_veicolo').val(),
\tfunction(data) { // Iterate the groups first.
\t\t\t\$('#to_update').html(data);
\t}); 
\tvar val = \$('#find_veicoli').val(); if (val == \"chiudi\") {
\t\$('#find_veicoli').val(\"ricerca veicoli\");
\t} else {
\t  \$('#find_veicoli').val(\"chiudi\");
\t}
  }
});

\$('#add_anomalia').click(function() {
   if (\$('#exist_anomalia').val() != \"\") {
        if (\$('#id_lavagna').val() != -1) {
        
          \$.get(\"/righe/add/anomalia/lavagna/\" + \$('#id_lavagna').val() + \"/\" + \$('#id_teste').val(), function(data) { // Iterate the groups first.
\t      \$('#list_anomalie').html(data);
";
        // line 140
        echo "\t    }); 
     }
   } 
});

\$('#add_new_anomalia').click(function() {
    
   if (\$('#new_anomalia').val() != \"\") {
        \$.get(\"/righe/add/anomalia/\" + \$('#new_anomalia').val() + \"/\" + \$('#id_des_intervento').val() + \"/\" +  \$('#id_meccanico_righe').val()+ \"/\" +  \$('#id_teste').val(), function(data) { // Iterate the groups first.
\t    \$('#list_anomalie').html(data);
";
        // line 151
        echo "\t    }); 
\t}
});

\$('#confirm_save').click(function() {
   //alert(\"/teste/confirm/\" + \$('#id_teste').val() + \"/\" + \$('#edit_veicolo').val() + \"/\" + \$('#edit_meccanico').val() + \"/\" + \$('#edit_tipo_doc').val());
    //alert(\"/righe/confirm/\" + \$('#id_teste').val());
   \$.get(\"/righe/confirm/\" + \$('#id_teste').val(), function(data) {});  
   \$.get(\"/teste/confirm/\" + \$('#id_teste').val() + \"/\" + \$('#edit_veicolo').val() + \"/\" + \$('#edit_meccanico').val() + \"/\" + \$('#edit_tipo_doc').val(), function(data) {});    
  
});

\$('#cancel_all').click(function() {
    //alert(\$('#id_teste').val());
    \$.get(\"/righe/delete/\" + \$('#id_teste').val() + \"/\" +  \$('#id_teste_real').val(), function(data) {}); 
    \$.get(\"/teste/delete/\" + \$('#id_teste').val(), function(data) {}); 
});



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 175
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 176
        echo "
<span><h1>
\t\t";
        // line 178
        echo twig_escape_filter($this->env, (isset($context["title_form"]) || array_key_exists("title_form", $context) ? $context["title_form"] : (function () { throw new RuntimeError('Variable "title_form" does not exist.', 178, $this->source); })()), "html", null, true);
        echo "
\t</h1></span>
";
        // line 180
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), 'form_start');
        echo "
<span><input type=\"button\" id=\"confirm_save\"
\tonclick=\"location.href='";
        // line 182
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_teste_index");
        echo "'\" value=\"Conferma tutto\" /></span>
<span><input type=\"button\" id=\"cancel_all\" value=\"Annulla Modifica\"  onclick=\"location.href='";
        // line 183
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_teste_index");
        echo "'\" value=\"Index\" /></span>

<hr></hr>
<span><input type=\"button\" id=\"find_veicoli\"
\tvalue=\"ricerca veicoli\" /></span>
\t
<input type=\"hidden\" id=\"id_teste\" value=";
        // line 189
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teste"]) || array_key_exists("teste", $context) ? $context["teste"] : (function () { throw new RuntimeError('Variable "teste" does not exist.', 189, $this->source); })()), "id", [], "any", false, false, false, 189), "html", null, true);
        echo " />
<input type=\"hidden\" id=\"id_teste_real\" value=";
        // line 190
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teste"]) || array_key_exists("teste", $context) ? $context["teste"] : (function () { throw new RuntimeError('Variable "teste" does not exist.', 190, $this->source); })()), "idTReal", [], "any", false, false, false, 190), "html", null, true);
        echo "/>
<input type=\"hidden\" id=\"id_lavagna\" value=\"\"/>
\t
<div class=\"div_dettaglio\">
\t<div class=\"row\">
\t\t<div class=\"col\">
\t\t\t<span>";
        // line 196
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 196, $this->source); })()), "id_veicolo", [], "any", false, false, false, 196), 'row', ["id" => "edit_veicolo"]);
        echo "</span> <span>descrizione
\t\t\t\tVeicolo: <input type=\"text\" id=\"text_descrizion\"
\t\t\t\tname=\"text_descrizion\" value=\"";
        // line 198
        echo twig_escape_filter($this->env, (isset($context["veicoli"]) || array_key_exists("veicoli", $context) ? $context["veicoli"] : (function () { throw new RuntimeError('Variable "veicoli" does not exist.', 198, $this->source); })()), "html", null, true);
        echo "\" readonly>
\t\t\t</span>
\t\t\t<div>
\t\t\t\t<span>";
        // line 201
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 201, $this->source); })()), "tipo_doc", [], "any", false, false, false, 201), 'row', ["label" => "tipo documento: ", "id" => "edit_tipo_doc"]);
        echo "</span>
\t\t\t</div>
\t\t\t<span>";
        // line 203
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 203, $this->source); })()), "id_meccanico", [], "any", false, false, false, 203), 'row', ["id" => "edit_meccanico"]);
        echo "</span>
\t\t</div>
\t</div>
\t";
        // line 206
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 206, $this->source); })()), 'form_end');
        echo "
</div>
";
        // line 209
        echo "

<hr></hr>
<span class =\"div_button_anomalie\"><input type=\"button\" id=\"gestione_anomalie\"
\t  value=\"Gestione Anomalie\" /></span>
<div class=\"div_gestione_anomalie\">
    <span>meccanico:<input
\t\ttype=\"number\" id=\"id_meccanico_righe\" value=\"\" /></span>
    <span>descrizione intervento:<input
\t\ttype=\"text\" id=\"id_des_intervento\" value=\"\" /></span>
\t<br><span><input type=\"button\" id=\"find_anomalia\" type=\"button\"
\t\tvalue=\"cerca anomalia esistente da lavagna\" /></span> <span>anomalia
\t\tda lavagna:<input type=\"text\" id=\"exist_anomalia\" value=\"\" readonly />
\t</span> <span><input type=\"button\" id=\"add_anomalia\" type=\"button\"
\t\tvalue=\"aggiungi\" /></span>
\t
\t<br><div>
\t <span>inserisci nuova anomalia:<input
\t\ttype=\"text\" id=\"new_anomalia\" value=\"\" /></span>
\t<span><input type=\"button\" id=\"add_new_anomalia\" type=\"button\"
\t\tvalue=\"crea nuova anomalia\" /></span>
\t</div>\t\t
\t 
</div>

<div class=\"div_table_anomalie\"><table class=\"table_anomalie_for_veicoli\" id=\"table_anomalie_veicoli\">
\t\t
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th></th>
\t\t\t\t<th>Anomalie</th>
\t\t\t\t<th>Descrizione Intervento</th>
\t\t\t\t<th>Id Meccanico</th>
\t\t\t\t<th>Stato</th>\t
\t\t\t\t<th></th>\t\t
\t\t\t</tr>
\t\t</thead>
\t\t";
        // line 247
        echo "\t\t<tbody id=\"list_anomalie\">
\t\t</tbody>
\t</table>

</div>
";
        // line 253
        echo "
<div class=\"div_ricerca\"></div>
";
        // line 256
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "teste/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  393 => 256,  389 => 253,  382 => 247,  343 => 209,  338 => 206,  332 => 203,  327 => 201,  321 => 198,  316 => 196,  307 => 190,  303 => 189,  294 => 183,  290 => 182,  285 => 180,  280 => 178,  276 => 176,  266 => 175,  236 => 151,  224 => 140,  95 => 12,  85 => 11,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block css_pagina %}
.div_ricerca { display: none; } span { width: 300px; height: 80px;
display: inline-block; vertical-align: left; line-height: normal;
margin-left: 10px; }


{% endblock %}

{% block jQueryReady %}

\$('#list_anomalie').ready(function() {
  // Handler for .load() called.
     
     \$.get(\"/righe/get/anomalia/\" + \$('#id_teste').val(), function(data) { 
     
\t  \$('#list_anomalie').html(data);
  });
});




//Funzioni per gestire il salvataggio in background
\$( '#edit_veicolo' ).focusout(function() { 
     \$.get(\"/teste/update/record/\" + \$('#id_teste').val() + \"/\" + \$('#edit_veicolo').val() + \"/\" + \$('#edit_meccanico').val() + \"/\" + \$('#edit_tipo_doc').val(), function(data) { // Iterate the groups first.   
  });
});

\$( '#show_index' ).click(function() { 
//alert(\$('#edit_tipo_doc').val());
     \$.get(\"/teste/update/record/\" + \$('#id_teste').val() + \"/\" + \$('#edit_veicolo').val() + \"/\" + \$('#edit_meccanico').val()+ \"/\" + \$('#edit_tipo_doc').val(), function(data) { // Iterate the groups first.   
  });
});

//GESTIONE ANOMALIE
\$( '#gestione_anomalie').click(function() {
     
     \$('.div_gestione_anomalie').toggle();
});

\$('#div_gestione_anomalie').ready(function() {
  // Handler for .load() called.
  \$('.div_gestione_anomalie').hide();
});







//Funzione per mostrare/nasconder div
function functionShowHidden() {
 if (\$('.div_ricerca').is(\":visible\")) {
         \$('.div_ricerca').hide();
         \$('.div_dettaglio').show();
         \$('.div_dettaglio_anomalie').show();
         \$('.div_button_anomalie').show();
         \$('.div_table_anomalie').show();
    }
    else if (\$('.div_ricerca').is(\":hidden\")) {
      \$('#to_update').html = \"\";
      \$('.div_ricerca').show();
      \$('.div_dettaglio').hide();
      \$('.div_dettaglio_anomalie').hide();
      \$('.div_button_anomalie').hide();
      \$('.div_table_anomalie').hide();
    }
}

\$('#find_veicoli').click(function() {
    functionShowHidden();
\t\$.get(\"/veicoli/get/table\", function(data) { // Iterate the groups first.
\t\$('.div_ricerca').html(data);
\t}); 
\t\$.get(\"/veicoli/find/all/*/*\", function(data) { // Iterate the groups first.
\t\$('#to_update').html(data);
\t});
\tvar val = \$('#find_veicoli').val(); 
\tif (val == \"chiudi\") {
\t\t\$('#find_veicoli').val(\"ricerca veicoli\");
\t} else {
\t  \$('#find_veicoli').val(\"chiudi\");
\t}
});


\$('#edit_veicolo').focusout(function() {
\t\$.getJSON(\"/veicoli/find/\" +
\t\t\$('#edit_veicolo').val(), function(data) { // Iterate the groups first.
\t\t\t\$('#text_descrizion').val(''); \$(data).each(function(index, item) {
\t\t\t\t//each iteration 
\t\t\t\tvar descrizione = item.descrizione;

\t\t\t\t\$('#text_descrizion').val(descrizione);
\t\t });
\t});
});



function selectVeicoloItem(id) {
\t\$.getJSON(\"/veicoli/find/\" + id, function(data) { // Iterate the groups
\t\tfirst.\$('#text_descrizion').val(''); \$(data).each(function(index, item) { // each iteration var descrizione = item.descrizione;

\t\t\t\$('#text_descrizion').val(descrizione);
\t\t});
\t});
};

\$('#find_anomalia').click(function() {
   if (\$('#edit_veicolo').val() != \"\") {
   
   \$.get(\"/lavagna/get/table\", function(data) { // Iterate the groups first.
\t\$('.div_ricerca').html(data);
\tfunctionShowHidden();
\t}); 
   
\$.get(\"/lavagna/find/anomalie/veicoli/\" + \$('#edit_veicolo').val(),
\tfunction(data) { // Iterate the groups first.
\t\t\t\$('#to_update').html(data);
\t}); 
\tvar val = \$('#find_veicoli').val(); if (val == \"chiudi\") {
\t\$('#find_veicoli').val(\"ricerca veicoli\");
\t} else {
\t  \$('#find_veicoli').val(\"chiudi\");
\t}
  }
});

\$('#add_anomalia').click(function() {
   if (\$('#exist_anomalia').val() != \"\") {
        if (\$('#id_lavagna').val() != -1) {
        
          \$.get(\"/righe/add/anomalia/lavagna/\" + \$('#id_lavagna').val() + \"/\" + \$('#id_teste').val(), function(data) { // Iterate the groups first.
\t      \$('#list_anomalie').html(data);
{# \t      functionShowHidden();#}
\t    }); 
     }
   } 
});

\$('#add_new_anomalia').click(function() {
    
   if (\$('#new_anomalia').val() != \"\") {
        \$.get(\"/righe/add/anomalia/\" + \$('#new_anomalia').val() + \"/\" + \$('#id_des_intervento').val() + \"/\" +  \$('#id_meccanico_righe').val()+ \"/\" +  \$('#id_teste').val(), function(data) { // Iterate the groups first.
\t    \$('#list_anomalie').html(data);
{# \t      functionShowHidden();#}
\t    }); 
\t}
});

\$('#confirm_save').click(function() {
   //alert(\"/teste/confirm/\" + \$('#id_teste').val() + \"/\" + \$('#edit_veicolo').val() + \"/\" + \$('#edit_meccanico').val() + \"/\" + \$('#edit_tipo_doc').val());
    //alert(\"/righe/confirm/\" + \$('#id_teste').val());
   \$.get(\"/righe/confirm/\" + \$('#id_teste').val(), function(data) {});  
   \$.get(\"/teste/confirm/\" + \$('#id_teste').val() + \"/\" + \$('#edit_veicolo').val() + \"/\" + \$('#edit_meccanico').val() + \"/\" + \$('#edit_tipo_doc').val(), function(data) {});    
  
});

\$('#cancel_all').click(function() {
    //alert(\$('#id_teste').val());
    \$.get(\"/righe/delete/\" + \$('#id_teste').val() + \"/\" +  \$('#id_teste_real').val(), function(data) {}); 
    \$.get(\"/teste/delete/\" + \$('#id_teste').val(), function(data) {}); 
});



{% endblock %}



{% block body %}

<span><h1>
\t\t{{title_form}}
\t</h1></span>
{{ form_start(form) }}
<span><input type=\"button\" id=\"confirm_save\"
\tonclick=\"location.href='{{ path('app_teste_index') }}'\" value=\"Conferma tutto\" /></span>
<span><input type=\"button\" id=\"cancel_all\" value=\"Annulla Modifica\"  onclick=\"location.href='{{ path('app_teste_index') }}'\" value=\"Index\" /></span>

<hr></hr>
<span><input type=\"button\" id=\"find_veicoli\"
\tvalue=\"ricerca veicoli\" /></span>
\t
<input type=\"hidden\" id=\"id_teste\" value={{teste.id}} />
<input type=\"hidden\" id=\"id_teste_real\" value={{teste.idTReal}}/>
<input type=\"hidden\" id=\"id_lavagna\" value=\"\"/>
\t
<div class=\"div_dettaglio\">
\t<div class=\"row\">
\t\t<div class=\"col\">
\t\t\t<span>{{ form_row(form.id_veicolo, {'id': 'edit_veicolo'})}}</span> <span>descrizione
\t\t\t\tVeicolo: <input type=\"text\" id=\"text_descrizion\"
\t\t\t\tname=\"text_descrizion\" value=\"{{veicoli}}\" readonly>
\t\t\t</span>
\t\t\t<div>
\t\t\t\t<span>{{ form_row(form.tipo_doc, { 'label': 'tipo documento: ', 'id': 'edit_tipo_doc' })}}</span>
\t\t\t</div>
\t\t\t<span>{{ form_row(form.id_meccanico, {'id': 'edit_meccanico'}) }}</span>
\t\t</div>
\t</div>
\t{{ form_end(form) }}
</div>
{# chiusura div dettaglio#}


<hr></hr>
<span class =\"div_button_anomalie\"><input type=\"button\" id=\"gestione_anomalie\"
\t  value=\"Gestione Anomalie\" /></span>
<div class=\"div_gestione_anomalie\">
    <span>meccanico:<input
\t\ttype=\"number\" id=\"id_meccanico_righe\" value=\"\" /></span>
    <span>descrizione intervento:<input
\t\ttype=\"text\" id=\"id_des_intervento\" value=\"\" /></span>
\t<br><span><input type=\"button\" id=\"find_anomalia\" type=\"button\"
\t\tvalue=\"cerca anomalia esistente da lavagna\" /></span> <span>anomalia
\t\tda lavagna:<input type=\"text\" id=\"exist_anomalia\" value=\"\" readonly />
\t</span> <span><input type=\"button\" id=\"add_anomalia\" type=\"button\"
\t\tvalue=\"aggiungi\" /></span>
\t
\t<br><div>
\t <span>inserisci nuova anomalia:<input
\t\ttype=\"text\" id=\"new_anomalia\" value=\"\" /></span>
\t<span><input type=\"button\" id=\"add_new_anomalia\" type=\"button\"
\t\tvalue=\"crea nuova anomalia\" /></span>
\t</div>\t\t
\t 
</div>

<div class=\"div_table_anomalie\"><table class=\"table_anomalie_for_veicoli\" id=\"table_anomalie_veicoli\">
\t\t
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th></th>
\t\t\t\t<th>Anomalie</th>
\t\t\t\t<th>Descrizione Intervento</th>
\t\t\t\t<th>Id Meccanico</th>
\t\t\t\t<th>Stato</th>\t
\t\t\t\t<th></th>\t\t
\t\t\t</tr>
\t\t</thead>
\t\t{# tabella fornita da classe righe#}
\t\t<tbody id=\"list_anomalie\">
\t\t</tbody>
\t</table>

</div>
{# chiusura div div_dettaglio_anomalia#}

<div class=\"div_ricerca\"></div>
{# chiusura div ricerca#}


{% endblock %}", "teste/new.html.twig", "C:\\wamp64\\www\\grent\\templates\\teste\\new.html.twig");
    }
}

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

/* righe/old/new.html.twig */
class __TwigTemplate_6b213048e34d442d2147a7f492b2a37d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "righe/old/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "righe/old/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "righe/old/new.html.twig", 1);
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
        echo ".div_ricerca { display: none; }
 span {
\t         width: 300px;
\t         height: 80px;
\t         display: inline-block;
\t         vertical-align: left;
\t         line-height: normal;
\t         margin-left: 10px;
          }
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_jQueryReady($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jQueryReady"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jQueryReady"));

        // line 16
        echo "\$('#find_veicoli').click(function(){ 

    \$('.div_dettaglio').toggle();
    \$('.div_ricerca').toggle(); 
    \$.get(\"/veicoli/find/all/*/*\" , function (data) {
    // Iterate the groups first.
         \$('#to_update').html(data);
   });
   var val = \$('#find_veicoli').val();
   if (val == \"chiudi\") {
        \$('#find_veicoli').val(\"ricerca veicoli\");
     } else {
       \$('#find_veicoli').val(\"chiudi\");
     }
});


\$('#edit_veicolo').focusout(function() {

    \$.getJSON(\"/veicoli/find/\" + \$('#edit_veicolo').val(), function (data) {
    // Iterate the groups first.
    \$('#text_descrizion').val('');
     \$(data).each(function (index, item) {
         // each iteration
         var descrizione = item.descrizione;
               
         \$('#text_descrizion').val( descrizione );
     });
   });
});

\$('#targa_finder').keyup(function() {
  var destinazione = \"\";
  var d = \$('#descrizione_finder');
  if (d.val() == '') {
       destinazione = \"*\" ;
  } else {
    destinazione = d.val();
  }
    \$.get(\"/veicoli/find/all/\" + destinazione + \"/\" + \$('#targa_finder').val(), function (data) {
       // Iterate the groups first.
       \$('#to_update').html(data);
   });
});

\$('#descrizione_finder').keyup(function() {
  var targa = \"\";
  var t = \$('#targa_finder');
  
  if (t.val() == '') {
     targa = \"*\";
  } else {
     targa = t.val();
  }
  
  \$.get(\"/veicoli/find/all/\" + \$('#descrizione_finder').val() + \"/\" + targa, function (data) {
       // Iterate the groups first.
       \$('#to_update').html(data);
   });
});

function  selectVeicoloItem(id) {
     \$.getJSON(\"/veicoli/find/\" + id, function (data) {
    // Iterate the groups first.
    \$('#text_descrizion').val('');
     \$(data).each(function (index, item) {
         // each iteration
         var descrizione = item.descrizione;
               
         \$('#text_descrizion').val( descrizione );
     });
   });
};

\$('#update_riga').click(function() {
    
\t\$.get(\"/righe/\" + \$('#id_riga').val() + \"/\"modify\", function(data) { // Iterate the groups first.
\t   \$.get(\"/righe/\" + data + \"/edit\", function(data) {
\t  });
\t}); 
});
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 99
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 100
        echo "<div class=\"div_global_form\">
<span><h1>
\t";
        // line 102
        echo twig_escape_filter($this->env, (isset($context["title_form"]) || array_key_exists("title_form", $context) ? $context["title_form"] : (function () { throw new RuntimeError('Variable "title_form" does not exist.', 102, $this->source); })()), "html", null, true);
        echo "
</h1></span>
";
        // line 104
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), 'form_start');
        echo "
<div class=\"my-custom-class-for-errors\">
\t";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), 'errors');
        echo "
</div>
<span><input type=\"button\" id=\"find_teste\" value=\"ricerca teste\" /></span>
<div class=\"div_dettaglio\">
\t<div class=\"row\">
\t\t<div class=\"col\">
\t\t\t<span>";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "idTestaFk", [], "any", false, false, false, 112), 'row', ["label" => "testa: ", "id" => "edit_testa"]);
        echo "</span>

\t\t\t\t<div>
\t\t\t     <span>";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "descrizioneAnomalia", [], "any", false, false, false, 115), 'row', ["label" => "descrizione anomalia: ", "id" => "edit_anomalia"]);
        echo "</span>
\t\t\t    </div>
\t\t</div>
\t</div>

\t";
        // line 120
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), 'form_end');
        echo "
\t<span><input type=\"button\" id=\"show_anomalia\"
\t\tonclick=\"location.href='";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_teste_index");
        echo "'\"
\t\tvalue=\"Index\" /></span>
\t\t
</div>
";
        // line 127
        echo "
<div class=\"div_ricerca\">
<table class=\"table_teste\" id=\"table_teste\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th></th>
\t\t\t\t<th>teste id</th>
\t\t\t\t<th>numero documento</th>
\t\t\t\t<th>decrizione veicolo</th>
\t\t\t\t<th></th>
\t\t\t</tr>
\t\t</thead>
\t\t<tr>
\t\t\t<td></td>
\t\t\t<td><input type=\"text\" id=\"descrizione_finder\" name=\"descrizione_finder\"></td>
\t\t\t<td><input type=\"text\" id=\"targa_finder\" name=\"targa_finder\"></td>
\t\t\t<td></td>
\t\t</tr>
\t\t<tbody id =\"to_update\">
\t\t</tbody>
 </table>
</div>

";
        // line 151
        echo "
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "righe/old/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 151,  249 => 127,  242 => 122,  237 => 120,  229 => 115,  223 => 112,  214 => 106,  209 => 104,  204 => 102,  200 => 100,  190 => 99,  99 => 16,  89 => 15,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block css_pagina %}
.div_ricerca { display: none; }
 span {
\t         width: 300px;
\t         height: 80px;
\t         display: inline-block;
\t         vertical-align: left;
\t         line-height: normal;
\t         margin-left: 10px;
          }
{% endblock %}

{% block jQueryReady %}
\$('#find_veicoli').click(function(){ 

    \$('.div_dettaglio').toggle();
    \$('.div_ricerca').toggle(); 
    \$.get(\"/veicoli/find/all/*/*\" , function (data) {
    // Iterate the groups first.
         \$('#to_update').html(data);
   });
   var val = \$('#find_veicoli').val();
   if (val == \"chiudi\") {
        \$('#find_veicoli').val(\"ricerca veicoli\");
     } else {
       \$('#find_veicoli').val(\"chiudi\");
     }
});


\$('#edit_veicolo').focusout(function() {

    \$.getJSON(\"/veicoli/find/\" + \$('#edit_veicolo').val(), function (data) {
    // Iterate the groups first.
    \$('#text_descrizion').val('');
     \$(data).each(function (index, item) {
         // each iteration
         var descrizione = item.descrizione;
               
         \$('#text_descrizion').val( descrizione );
     });
   });
});

\$('#targa_finder').keyup(function() {
  var destinazione = \"\";
  var d = \$('#descrizione_finder');
  if (d.val() == '') {
       destinazione = \"*\" ;
  } else {
    destinazione = d.val();
  }
    \$.get(\"/veicoli/find/all/\" + destinazione + \"/\" + \$('#targa_finder').val(), function (data) {
       // Iterate the groups first.
       \$('#to_update').html(data);
   });
});

\$('#descrizione_finder').keyup(function() {
  var targa = \"\";
  var t = \$('#targa_finder');
  
  if (t.val() == '') {
     targa = \"*\";
  } else {
     targa = t.val();
  }
  
  \$.get(\"/veicoli/find/all/\" + \$('#descrizione_finder').val() + \"/\" + targa, function (data) {
       // Iterate the groups first.
       \$('#to_update').html(data);
   });
});

function  selectVeicoloItem(id) {
     \$.getJSON(\"/veicoli/find/\" + id, function (data) {
    // Iterate the groups first.
    \$('#text_descrizion').val('');
     \$(data).each(function (index, item) {
         // each iteration
         var descrizione = item.descrizione;
               
         \$('#text_descrizion').val( descrizione );
     });
   });
};

\$('#update_riga').click(function() {
    
\t\$.get(\"/righe/\" + \$('#id_riga').val() + \"/\"modify\", function(data) { // Iterate the groups first.
\t   \$.get(\"/righe/\" + data + \"/edit\", function(data) {
\t  });
\t}); 
});
{% endblock %}

{% block body %}
<div class=\"div_global_form\">
<span><h1>
\t{{title_form}}
</h1></span>
{{ form_start(form) }}
<div class=\"my-custom-class-for-errors\">
\t{{ form_errors(form) }}
</div>
<span><input type=\"button\" id=\"find_teste\" value=\"ricerca teste\" /></span>
<div class=\"div_dettaglio\">
\t<div class=\"row\">
\t\t<div class=\"col\">
\t\t\t<span>{{ form_row(form.idTestaFk, {'label': 'testa: ', 'id': 'edit_testa'})}}</span>

\t\t\t\t<div>
\t\t\t     <span>{{ form_row(form.descrizioneAnomalia, { 'label': 'descrizione anomalia: ', 'id': 'edit_anomalia' })}}</span>
\t\t\t    </div>
\t\t</div>
\t</div>

\t{{ form_end(form) }}
\t<span><input type=\"button\" id=\"show_anomalia\"
\t\tonclick=\"location.href='{{ path('app_teste_index') }}'\"
\t\tvalue=\"Index\" /></span>
\t\t
</div>
{# chiusura div dettaglio#}

<div class=\"div_ricerca\">
<table class=\"table_teste\" id=\"table_teste\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th></th>
\t\t\t\t<th>teste id</th>
\t\t\t\t<th>numero documento</th>
\t\t\t\t<th>decrizione veicolo</th>
\t\t\t\t<th></th>
\t\t\t</tr>
\t\t</thead>
\t\t<tr>
\t\t\t<td></td>
\t\t\t<td><input type=\"text\" id=\"descrizione_finder\" name=\"descrizione_finder\"></td>
\t\t\t<td><input type=\"text\" id=\"targa_finder\" name=\"targa_finder\"></td>
\t\t\t<td></td>
\t\t</tr>
\t\t<tbody id =\"to_update\">
\t\t</tbody>
 </table>
</div>

{# chiusura div ricerca#}

</div>
{% endblock %}", "righe/old/new.html.twig", "C:\\wamp64\\www\\grent\\templates\\righe\\old\\new.html.twig");
    }
}

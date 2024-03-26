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

/* righe/old/div.managed.righe.html.twig */
class __TwigTemplate_85bee750f1aa5172c551d3fd1cb7277e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "righe/old/div.managed.righe.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "righe/old/div.managed.righe.html.twig"));

        // line 1
        echo "

<span><input type=\"button\" id=\"find_anomalia\" type=\"button\"
\tvalue=\"cerca anomalia esistente da lavagna\" /></span>
<span>Aggiugi nuova anomalia:<input type=\"text\" id=\"new_anomalia\"
\tvalue=\"\" /></span>
<span><input type=\"button\" id=\"add_anomalia\" type=\"button\"
\tvalue=\"aggiungi\" /></span>
<table class=\"table_anomalie_for_veicoli\" id=\"table_anomalie_veicoli\">
\t<span><input type=\"text\" id=\"id_lavagna\" value=\"\"
\t\tstyle=\"display: none\" /></span>
\t<thead>
\t\t<tr>
\t\t\t<th></th>
\t\t\t<th>Anomalie</th>
\t\t\t<th></th>
\t\t</tr>
\t</thead>
\t<tbody id=\"list_anomalie\">
\t</tbody>
</table>


function  selectRigaItem(id) {
    \$('#find_veicoli').val(\"ricerca veicoli\");
     \$.getJSON(\"/veicoli/find/\" + id, function (data) {
    // Iterate the groups first.
    \$('#text_descrizion').val('');
     \$(data).each(function (index, item) {
         // each iteration
         var descrizione = item.descrizione;
         \$('#edit_veicolo').val( id );      
         \$('#text_descrizion').val( descrizione );
     });
   });
   
   \$('.div_ricerca').toggle(); 
   \$('.div_dettaglio').show();
   \$('.div_dettaglio_anomalie').show();
};
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "righe/old/div.managed.righe.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<span><input type=\"button\" id=\"find_anomalia\" type=\"button\"
\tvalue=\"cerca anomalia esistente da lavagna\" /></span>
<span>Aggiugi nuova anomalia:<input type=\"text\" id=\"new_anomalia\"
\tvalue=\"\" /></span>
<span><input type=\"button\" id=\"add_anomalia\" type=\"button\"
\tvalue=\"aggiungi\" /></span>
<table class=\"table_anomalie_for_veicoli\" id=\"table_anomalie_veicoli\">
\t<span><input type=\"text\" id=\"id_lavagna\" value=\"\"
\t\tstyle=\"display: none\" /></span>
\t<thead>
\t\t<tr>
\t\t\t<th></th>
\t\t\t<th>Anomalie</th>
\t\t\t<th></th>
\t\t</tr>
\t</thead>
\t<tbody id=\"list_anomalie\">
\t</tbody>
</table>


function  selectRigaItem(id) {
    \$('#find_veicoli').val(\"ricerca veicoli\");
     \$.getJSON(\"/veicoli/find/\" + id, function (data) {
    // Iterate the groups first.
    \$('#text_descrizion').val('');
     \$(data).each(function (index, item) {
         // each iteration
         var descrizione = item.descrizione;
         \$('#edit_veicolo').val( id );      
         \$('#text_descrizion').val( descrizione );
     });
   });
   
   \$('.div_ricerca').toggle(); 
   \$('.div_dettaglio').show();
   \$('.div_dettaglio_anomalie').show();
};
</script>
", "righe/old/div.managed.righe.html.twig", "C:\\wamp64\\www\\grent\\templates\\righe\\old\\div.managed.righe.html.twig");
    }
}

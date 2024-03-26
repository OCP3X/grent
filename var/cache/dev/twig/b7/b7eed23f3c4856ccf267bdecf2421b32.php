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

/* veicoli/div.for.table.html.twig */
class __TwigTemplate_3be610b08baed327e55106c893d9a68f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "veicoli/div.for.table.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "veicoli/div.for.table.html.twig"));

        // line 1
        echo "<table class=\"table_for_veicoli\" id=\"table_for_veicoli\">
\t<thead>
\t\t<tr>
\t\t\t<th></th>
\t\t\t<th>Descrizione</th>
\t\t\t<th>Targa</th>
\t\t\t<th></th>
\t\t</tr>
\t</thead>
\t<tr>
\t\t<td></td>
\t\t<td><input type=\"text\" id=\"descrizione_finder\"
\t\t\tname=\"descrizione_finder\"></td>
\t\t<td><input type=\"text\" id=\"targa_finder\" name=\"targa_finder\"></td>
\t\t<td></td>
\t</tr>
\t<tbody id=\"to_update\">

\t</tbody>
</table>

<script>
\$('#targa_finder').keyup(function() {
\tvar destinazione = \"\"; 
\tvar d = \$('#descrizione_finder'); 
\tif (d.val() == '') { destinazione = \"*\"; }
\telse { destinazione = d.val(); } 
\t\$.get(\"/veicoli/find/all/\" +
\t\tdestinazione + \"/\" + \$('#targa_finder').val(), function(data) { //Iterate the groups first. 
\t\t\t\$('#to_update').html(data);
\t\t});
});


\$('#descrizione_finder').keyup(function() {
\tvar targa = \"\"; 
\tvar t = \$('#targa_finder'); 
\tif (t.val() == '') { targa = \"*\"; } 
\telse {
\t  targa = t.val();
\t} 
\t\$.get(\"/veicoli/find/all/\" + \$('#descrizione_finder').val() +
\t\t\t\"/\" + targa, function(data) { // Iterate the groups first.
\t\t\t\t\$('#to_update').html(data);
  });
});





</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "veicoli/div.for.table.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table class=\"table_for_veicoli\" id=\"table_for_veicoli\">
\t<thead>
\t\t<tr>
\t\t\t<th></th>
\t\t\t<th>Descrizione</th>
\t\t\t<th>Targa</th>
\t\t\t<th></th>
\t\t</tr>
\t</thead>
\t<tr>
\t\t<td></td>
\t\t<td><input type=\"text\" id=\"descrizione_finder\"
\t\t\tname=\"descrizione_finder\"></td>
\t\t<td><input type=\"text\" id=\"targa_finder\" name=\"targa_finder\"></td>
\t\t<td></td>
\t</tr>
\t<tbody id=\"to_update\">

\t</tbody>
</table>

<script>
\$('#targa_finder').keyup(function() {
\tvar destinazione = \"\"; 
\tvar d = \$('#descrizione_finder'); 
\tif (d.val() == '') { destinazione = \"*\"; }
\telse { destinazione = d.val(); } 
\t\$.get(\"/veicoli/find/all/\" +
\t\tdestinazione + \"/\" + \$('#targa_finder').val(), function(data) { //Iterate the groups first. 
\t\t\t\$('#to_update').html(data);
\t\t});
});


\$('#descrizione_finder').keyup(function() {
\tvar targa = \"\"; 
\tvar t = \$('#targa_finder'); 
\tif (t.val() == '') { targa = \"*\"; } 
\telse {
\t  targa = t.val();
\t} 
\t\$.get(\"/veicoli/find/all/\" + \$('#descrizione_finder').val() +
\t\t\t\"/\" + targa, function(data) { // Iterate the groups first.
\t\t\t\t\$('#to_update').html(data);
  });
});





</script>
", "veicoli/div.for.table.html.twig", "C:\\wamp64\\www\\grent\\templates\\veicoli\\div.for.table.html.twig");
    }
}

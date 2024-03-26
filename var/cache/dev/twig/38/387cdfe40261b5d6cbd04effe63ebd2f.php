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

/* veicoli/div_ricerca_veicoli.html.twig */
class __TwigTemplate_ec0f50d74b925b4362c6d1a64c21dd85 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "veicoli/div_ricerca_veicoli.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "veicoli/div_ricerca_veicoli.html.twig"));

        // line 1
        echo "
<div class=\"div_ricerca_veicoli\">
\t<div class=\"row\">
\t\t<div class=\"col\">
\t<input type=\"button\" id=\"chiudi_veicoli\" value=\"Chiudi lista veicoli\" class=\"btn btn-secondary\"/>
\t<p>Selezionare alcune lettere del campo \"Descrizione\" o nel campo \"Targa\" per fare apparire i veicoli</p>
\t\t</div>
\t</div>

\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<table class=\"table table-hover\" id=\"table_veicoli\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t<th>Descrizione</th>
\t\t\t\t\t\t\t\t\t<th>Targa</th>
\t\t\t\t\t\t\t\t\t<th>Tipo</th>
\t\t\t\t\t\t\t\t\t<th>Proprietà</th>
\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td><input type=\"text\" class=\"veicoli_txt_ricerca\" id=\"veicoli_descrizione_finder\" name=\"descrizione_finder\"></td>
\t\t\t\t\t\t\t\t<td><input type=\"text\" class=\"veicoli_txt_ricerca\" id=\"veicoli_targa_finder\" name=\"targa_finder\"></td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tbody id =\"veicoli_to_update\">
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t</div>
\t</div>
 </div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "veicoli/div_ricerca_veicoli.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"div_ricerca_veicoli\">
\t<div class=\"row\">
\t\t<div class=\"col\">
\t<input type=\"button\" id=\"chiudi_veicoli\" value=\"Chiudi lista veicoli\" class=\"btn btn-secondary\"/>
\t<p>Selezionare alcune lettere del campo \"Descrizione\" o nel campo \"Targa\" per fare apparire i veicoli</p>
\t\t</div>
\t</div>

\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<table class=\"table table-hover\" id=\"table_veicoli\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t<th>Descrizione</th>
\t\t\t\t\t\t\t\t\t<th>Targa</th>
\t\t\t\t\t\t\t\t\t<th>Tipo</th>
\t\t\t\t\t\t\t\t\t<th>Proprietà</th>
\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td><input type=\"text\" class=\"veicoli_txt_ricerca\" id=\"veicoli_descrizione_finder\" name=\"descrizione_finder\"></td>
\t\t\t\t\t\t\t\t<td><input type=\"text\" class=\"veicoli_txt_ricerca\" id=\"veicoli_targa_finder\" name=\"targa_finder\"></td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tbody id =\"veicoli_to_update\">
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t</div>
\t</div>
 </div>", "veicoli/div_ricerca_veicoli.html.twig", "C:\\wamp64\\www\\grent\\templates\\veicoli\\div_ricerca_veicoli.html.twig");
    }
}

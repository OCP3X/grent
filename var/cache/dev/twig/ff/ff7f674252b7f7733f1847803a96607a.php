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

/* lavagna/Copy of new.html.twig */
class __TwigTemplate_a7a29e8b9984094d992189c1497319bf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lavagna/Copy of new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lavagna/Copy of new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "lavagna/Copy of new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Lavagna Inserisci nuova anomalia</h1>
";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), 'form_start');
        echo "
<div class=\"my-custom-class-for-errors\">
\t";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'errors');
        echo "
</div>
<div class=\"row\">
\t<div class=\"col\">
\t\t";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "idVeicolo", [], "any", false, false, false, 11), 'row', ["id" => "edit_veicolo"]);
        echo "
\t\t";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "anomalia", [], "any", false, false, false, 12), 'row', ["label" => "anomalia: ", "id" => "edit_anomalia"]);
        echo "
\t\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "descrizion", [], "any", false, false, false, 13), 'row', ["id" => "edit_descrizion"]);
        echo "
\t\t<datalist id=\"descrizion_veicolo\">
\t\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["veicoli"]) || array_key_exists("veicoli", $context) ? $context["veicoli"] : (function () { throw new RuntimeError('Variable "veicoli" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["listOne"]) {
            // line 16
            echo "\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listOne"], "idVeicolo", [], "any", false, false, false, 16), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listOne"], "descrizion", [], "any", false, false, false, 16), "html", null, true);
            echo "</option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listOne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t\t</datalist>
\t\t<script>
            var x = document.getElementById(\"edit_descrizion\");
            x.addEventListener('keyup', myTypeFunction, true);
            function myTypeFunction() {
                // Instantiating the request object
                
                var request = new XMLHttpRequest();
                // Instantiating the request object
                request.open(\"GET\", \"veicoli/\" + document.getElementById(\"edit_descrizion\").value);
               // Defining event listener for readystatechange event
               request.onreadystatechange = function() {
               // Check if the request is compete and was successful
               if (this.readyState === 4 && this.status === 200) {
                  // Inserting the response from server into an HTML element
                  var response = JSON.parse(this.responseText);
                  var options = '';
                  for (var key in response) {   
                     if (response.hasOwnProperty(key)) {
                      var val = response[key];
                      // insert new row
                      options += '<option value=' + val.idveicolo + '>'+ val.descrizione + '</option>';
                     }
                  }
                 document.getElementById('descrizion_veicolo').innerHTML = options; 
                }
              };
             // Sending the request to the server
             request.send();
           }
        </script>
\t</div>

\t";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "save", [], "any", false, false, false, 51), 'widget', ["label" => "Aggiungi"]);
        echo "
</div>
";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), 'form_end');
        echo "
<td><input type=\"button\" id=\"show_anomalia\"
\tonclick=\"location.href='";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lavagna_index");
        echo "'\" value=\"Index\" />
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "lavagna/Copy of new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 55,  151 => 53,  146 => 51,  111 => 18,  100 => 16,  96 => 15,  91 => 13,  87 => 12,  83 => 11,  76 => 7,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<h1>Lavagna Inserisci nuova anomalia</h1>
{{ form_start(form) }}
<div class=\"my-custom-class-for-errors\">
\t{{ form_errors(form) }}
</div>
<div class=\"row\">
\t<div class=\"col\">
\t\t{{ form_row(form.idVeicolo, {'id': 'edit_veicolo' })}}
\t\t{{ form_row(form.anomalia, { 'label': 'anomalia: ', 'id': 'edit_anomalia' })}}
\t\t{{ form_row(form.descrizion, { 'id': 'edit_descrizion'})}}
\t\t<datalist id=\"descrizion_veicolo\">
\t\t\t{% for listOne in veicoli %}
\t\t\t<option value=\"{{ listOne.idVeicolo }}\">{{ listOne.descrizion }}</option>
\t\t\t{% endfor %}
\t\t</datalist>
\t\t<script>
            var x = document.getElementById(\"edit_descrizion\");
            x.addEventListener('keyup', myTypeFunction, true);
            function myTypeFunction() {
                // Instantiating the request object
                
                var request = new XMLHttpRequest();
                // Instantiating the request object
                request.open(\"GET\", \"veicoli/\" + document.getElementById(\"edit_descrizion\").value);
               // Defining event listener for readystatechange event
               request.onreadystatechange = function() {
               // Check if the request is compete and was successful
               if (this.readyState === 4 && this.status === 200) {
                  // Inserting the response from server into an HTML element
                  var response = JSON.parse(this.responseText);
                  var options = '';
                  for (var key in response) {   
                     if (response.hasOwnProperty(key)) {
                      var val = response[key];
                      // insert new row
                      options += '<option value=' + val.idveicolo + '>'+ val.descrizione + '</option>';
                     }
                  }
                 document.getElementById('descrizion_veicolo').innerHTML = options; 
                }
              };
             // Sending the request to the server
             request.send();
           }
        </script>
\t</div>

\t{{ form_widget(form.save, { 'label': 'Aggiungi' })}}
</div>
{{ form_end(form) }}
<td><input type=\"button\" id=\"show_anomalia\"
\tonclick=\"location.href='{{ path('app_lavagna_index') }}'\" value=\"Index\" />
\t{% endblock %}", "lavagna/Copy of new.html.twig", "C:\\wamp64\\www\\grent\\templates\\lavagna\\Copy of new.html.twig");
    }
}

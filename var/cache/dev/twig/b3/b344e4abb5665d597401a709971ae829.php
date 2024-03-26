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

/* teste/testa_dettaglio.html.twig */
class __TwigTemplate_fd3705bd472ca22ed15cd352c2edc0ce extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "teste/testa_dettaglio.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "teste/testa_dettaglio.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "teste/testa_dettaglio.html.twig", 1);
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
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "<script src=\"/js/teste/teste_dettaglio.js\" defer></script>    
<script src=\"/js/veicoli/find_veicoli.js\" defer></script>    
<script>
    var ok_modifica =";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["ok_modifica"]) || array_key_exists("ok_modifica", $context) ? $context["ok_modifica"] : (function () { throw new RuntimeError('Variable "ok_modifica" does not exist.', 10, $this->source); })()), "html", null, true);
        echo ";
    var php_id_testa =";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["id_testa"]) || array_key_exists("id_testa", $context) ? $context["id_testa"] : (function () { throw new RuntimeError('Variable "id_testa" does not exist.', 11, $this->source); })()), "html", null, true);
        echo ";
    var terminato =";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["testa"]) || array_key_exists("testa", $context) ? $context["testa"] : (function () { throw new RuntimeError('Variable "testa" does not exist.', 12, $this->source); })()), "getTerminato", [], "method", false, false, false, 12), "html", null, true);
        echo ";
</script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js\" defer></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 25
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 26
        echo "
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css\" rel=\"stylesheet\"/>

<style>
#div_dettaglio_testa.no_modifica {
    background-color: #eeeeee;
    padding: 10px;
}

#div_dettaglio_testa.no_modifica label{
    color: #008102;
    
}
#div_dettaglio_testa.modifica {
    background-color: #008102;
    
    padding: 10px;
}

#div_dettaglio_testa.modifica label{
    color: #ffffff;
    
}

.div_ricerca_veicoli{
    display:none;
}
.div_ricerca_anomalia{
    display:none;
}

.div_btn_ricerca_veicolo{
\ttext-align: center;
 }

 .btnRicercaVeicolo {
\tfont-size:27px;
\tpadding: 30px 0;
\tcursor: pointer;
 }

 .btnRicercaVeicolo:hover {
\tcolor: #ffffff;
 }

 .ok_puntatore{
    cursor: pointer;
 }

</style>        
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 79
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 80
        echo "    <h1>Dettaglio Documento*</h1>

<div class=\"div_dettaglio\">

    <section id=\"div_dettaglio_testa\">
        ";
        // line 85
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["testaform"]) || array_key_exists("testaform", $context) ? $context["testaform"] : (function () { throw new RuntimeError('Variable "testaform" does not exist.', 85, $this->source); })()), 'form_start', ["attr" => ["id" => "form_dettaglio"]]);
        echo "

        
    <div class=\"row\">
        <div class=\"col\">
            ";
        // line 90
        if (((isset($context["ok_modifica"]) || array_key_exists("ok_modifica", $context) ? $context["ok_modifica"] : (function () { throw new RuntimeError('Variable "ok_modifica" does not exist.', 90, $this->source); })()) > 0)) {
            // line 91
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["testaform"]) || array_key_exists("testaform", $context) ? $context["testaform"] : (function () { throw new RuntimeError('Variable "testaform" does not exist.', 91, $this->source); })()), "tipodoc", [], "any", false, false, false, 91), 'row');
            echo "
            ";
        } else {
            // line 93
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["testaform"]) || array_key_exists("testaform", $context) ? $context["testaform"] : (function () { throw new RuntimeError('Variable "testaform" does not exist.', 93, $this->source); })()), "tipodoc", [], "any", false, false, false, 93), 'label');
            echo "
            <input type=\"textbox\" name=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["testaform"]) || array_key_exists("testaform", $context) ? $context["testaform"] : (function () { throw new RuntimeError('Variable "testaform" does not exist.', 94, $this->source); })()), "tipodoc", [], "any", false, false, false, 94)), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, (isset($context["testaform"]) || array_key_exists("testaform", $context) ? $context["testaform"] : (function () { throw new RuntimeError('Variable "testaform" does not exist.', 94, $this->source); })()), "tipodoc", [], "any", false, false, false, 94)), "html", null, true);
            echo "\"  class=\"form-control\">
            ";
        }
        // line 96
        echo "            
        </div>
        <div class=\"col\">
                
            ";
        // line 100
        if (((isset($context["ok_modifica"]) || array_key_exists("ok_modifica", $context) ? $context["ok_modifica"] : (function () { throw new RuntimeError('Variable "ok_modifica" does not exist.', 100, $this->source); })()) > 0)) {
            // line 101
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["testaform"]) || array_key_exists("testaform", $context) ? $context["testaform"] : (function () { throw new RuntimeError('Variable "testaform" does not exist.', 101, $this->source); })()), "tipo_intervento", [], "any", false, false, false, 101), 'row');
            echo "
            ";
        } else {
            // line 103
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["testaform"]) || array_key_exists("testaform", $context) ? $context["testaform"] : (function () { throw new RuntimeError('Variable "testaform" does not exist.', 103, $this->source); })()), "tipo_intervento", [], "any", false, false, false, 103), 'label');
            echo "
            <input type=\"textbox\" name=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["testaform"]) || array_key_exists("testaform", $context) ? $context["testaform"] : (function () { throw new RuntimeError('Variable "testaform" does not exist.', 104, $this->source); })()), "tipo_intervento", [], "any", false, false, false, 104)), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, (isset($context["testaform"]) || array_key_exists("testaform", $context) ? $context["testaform"] : (function () { throw new RuntimeError('Variable "testaform" does not exist.', 104, $this->source); })()), "tipo_intervento", [], "any", false, false, false, 104)), "html", null, true);
            echo "\"  class=\"form-control\">
            ";
        }
        // line 106
        echo "
        </div>
        <div class=\"col\">
            ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["testaform"]) || array_key_exists("testaform", $context) ? $context["testaform"] : (function () { throw new RuntimeError('Variable "testaform" does not exist.', 109, $this->source); })()), "numero_doc", [], "any", false, false, false, 109), 'row');
        echo "
        </div>
        <div class=\"col\">
            ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["testaform"]) || array_key_exists("testaform", $context) ? $context["testaform"] : (function () { throw new RuntimeError('Variable "testaform" does not exist.', 112, $this->source); })()), "data_doc", [], "any", false, false, false, 112), 'row');
        echo "
        </div>



        
    </div>


        
    <div class=\"row\">
        
        <div class=\"col\">
            ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["testaform"]) || array_key_exists("testaform", $context) ? $context["testaform"] : (function () { throw new RuntimeError('Variable "testaform" does not exist.', 125, $this->source); })()), "km_attuali", [], "any", false, false, false, 125), 'row');
        echo "
        </div>
        <div class=\"col\">
            <label  class=\"form-label required\">Veicolo</label>
               <input type=\"text\"
                   id=\"text_descrizion\" name=\"text_descrizion\" value=\"\" readonly class=\"form-control\">
           </div>
           <div class=\"col\">
               <label  class=\"form-label required\">Targa</label>
                  <input type=\"text\"
                      id=\"text_targa\" name=\"text_targa\" value=\"\" readonly class=\"form-control\">
              </div>
   
           <div class=\"col-1 div_btn_ricerca_veicolo\">
               <i class=\"fa-solid fa-car-side btnRicercaVeicolo\" id=\"find_veicoli\"></i>
           </div>

        <div class=\"col\">
            ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["testaform"]) || array_key_exists("testaform", $context) ? $context["testaform"] : (function () { throw new RuntimeError('Variable "testaform" does not exist.', 143, $this->source); })()), "id_veicolo", [], "any", false, false, false, 143), 'row', ["id" => "id_veicolo", "attr" => ["class" => "veicoli_display"]]);
        echo "
        </div>
         ";
        // line 146
        echo "    </div>
       <div class=\"row\">
            <div class=\"col\">
\t\t\t     Inserimento<br>
\t\t\t\t Utente:";
        // line 150
        echo "<br>
\t\t\t\t Data:";
        // line 151
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["testa"]) || array_key_exists("testa", $context) ? $context["testa"] : (function () { throw new RuntimeError('Variable "testa" does not exist.', 151, $this->source); })()), "getDataCreazione", [], "any", false, false, false, 151), "d/m/Y H:i:s"), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t<div class=\"col\">
\t\t\t     Modifica<br>
\t\t\t\t Utente:";
        // line 155
        echo "<br>
\t\t\t\t Data:";
        // line 156
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["testa"]) || array_key_exists("testa", $context) ? $context["testa"] : (function () { throw new RuntimeError('Variable "testa" does not exist.', 156, $this->source); })()), "getDataModifica", [], "any", false, false, false, 156), "d/m/Y H:i:s"), "html", null, true);
        echo "
\t\t\t</div>
\t\t</div>

    <input type=\"hidden\" name=\"ok_modifica\" id=\"ok_modifica\" value=0>
    <button type=\"submit\" class=\"btn btn-primary btnSalva\">Salva</button>
    <a href='";
        // line 162
        echo twig_escape_filter($this->env, (isset($context["href_Annulla"]) || array_key_exists("href_Annulla", $context) ? $context["href_Annulla"] : (function () { throw new RuntimeError('Variable "href_Annulla" does not exist.', 162, $this->source); })()), "html", null, true);
        echo "'><button type=\"button\" class=\"btn btn-secondary btnAnnulla\" >Annulla</button></a>
    <button type=\"button\" class=\"btn btn-primary btnModifica\" >Modifica</button>
    <a href='";
        // line 164
        echo twig_escape_filter($this->env, (isset($context["href_Back2Lista"]) || array_key_exists("href_Back2Lista", $context) ? $context["href_Back2Lista"] : (function () { throw new RuntimeError('Variable "href_Back2Lista" does not exist.', 164, $this->source); })()), "html", null, true);
        echo "'><button type=\"button\" class=\"btn btn-secondary btnBack2Lista\" >Torna alla lista</button></a>
    <a href='";
        // line 165
        echo twig_escape_filter($this->env, (isset($context["href_stampa_doc"]) || array_key_exists("href_stampa_doc", $context) ? $context["href_stampa_doc"] : (function () { throw new RuntimeError('Variable "href_stampa_doc" does not exist.', 165, $this->source); })()), "html", null, true);
        echo "'><button type=\"button\" class=\"btn btn-success btnStampaDoc\" >Stampa Documento</button></a>
    ";
        // line 166
        if ((twig_get_attribute($this->env, $this->source, (isset($context["testa"]) || array_key_exists("testa", $context) ? $context["testa"] : (function () { throw new RuntimeError('Variable "testa" does not exist.', 166, $this->source); })()), "getTerminato", [], "method", false, false, false, 166) > 0)) {
            // line 167
            echo "        <a href='";
            echo twig_escape_filter($this->env, (isset($context["href_apri_doc"]) || array_key_exists("href_apri_doc", $context) ? $context["href_apri_doc"] : (function () { throw new RuntimeError('Variable "href_apri_doc" does not exist.', 167, $this->source); })()), "html", null, true);
            echo "'><button type=\"button\" class=\"btn btn-primary btnTerminaDoc\" >Apri Documento</button></a>
    ";
        } else {
            // line 169
            echo "        <a href='";
            echo twig_escape_filter($this->env, (isset($context["href_chiudi_doc"]) || array_key_exists("href_chiudi_doc", $context) ? $context["href_chiudi_doc"] : (function () { throw new RuntimeError('Variable "href_chiudi_doc" does not exist.', 169, $this->source); })()), "html", null, true);
            echo "'><button type=\"button\" class=\"btn btn-primary btnTerminaDoc\" >Chiudi Documento</button></a>
    ";
        }
        // line 171
        echo "    
        ";
        // line 172
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["testaform"]) || array_key_exists("testaform", $context) ? $context["testaform"] : (function () { throw new RuntimeError('Variable "testaform" does not exist.', 172, $this->source); })()), 'form_end');
        echo "
    </section>

<section id=\"div_lista_righe\">
        <div class=\"row\">
            <div class=\"col\">
                <hr>
                Lista righe
                <hr>
            </div>
        
        </div>

        
        
        <button type=\"button\" class=\"btn btn-primary btnAnomaliaLavagna\" >Anomalia da Lavagna</button>
        <a href='";
        // line 188
        echo twig_escape_filter($this->env, (isset($context["href_nuova_anomalia"]) || array_key_exists("href_nuova_anomalia", $context) ? $context["href_nuova_anomalia"] : (function () { throw new RuntimeError('Variable "href_nuova_anomalia" does not exist.', 188, $this->source); })()), "html", null, true);
        echo "'><button type=\"button\" class=\"btn btn-primary btnNuovaAnomalia\" >Nuova Anomalia</button></a>

        <div class=\"row\">
            <div class=\"col\">


    <table class=\"table\">
    <thead>
        <tr>
            <th></th>
            <th>Anomalia</th>
            <th>Intervento</th>
            <th>Ore</th>
            <th>Operatore</th>
            <th>Lavagna</th>

            <th></th>
    </tr>
    </thead>
    <tbody id=\"tbody_righe\">
        
    </tbody>


    </table>

                
            </div>
        
        </div>

    </section>


<section id=\"div_dettaglio_riga\">

</section>



</div> ";
        // line 229
        echo "

";
        // line 231
        $this->loadTemplate("veicoli/div_ricerca_veicoli.html.twig", "teste/testa_dettaglio.html.twig", 231)->display($context);
        // line 232
        echo "



<div class=\"div_ricerca_anomalia\">
    <div class=\"row\">
        <div class=\"col\">
            <button type=\"button\" class=\"btn btn-primary btnChiudiAnomali\" >Chiudi</button>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col\">



            <table class=\"table\" id=\"table_lavagna\">
                <thead>
                    <tr>
                        <th>Inserisci</th>
                        <th>Anomalia</th>
                        <th></th>
                        
                    </tr>
                </thead>
                <tbody id=\"list_anomalie_to_update\">
                </tbody>
        
            </table> 
            
        </div>
    </div>



    
</div>




    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "teste/testa_dettaglio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  437 => 232,  435 => 231,  431 => 229,  388 => 188,  369 => 172,  366 => 171,  360 => 169,  354 => 167,  352 => 166,  348 => 165,  344 => 164,  339 => 162,  330 => 156,  327 => 155,  320 => 151,  317 => 150,  311 => 146,  306 => 143,  285 => 125,  269 => 112,  263 => 109,  258 => 106,  251 => 104,  246 => 103,  240 => 101,  238 => 100,  232 => 96,  225 => 94,  220 => 93,  214 => 91,  212 => 90,  204 => 85,  197 => 80,  187 => 79,  127 => 26,  117 => 25,  103 => 12,  99 => 11,  95 => 10,  90 => 7,  80 => 6,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dettaglio Documento{% endblock %}


{% block javascripts %}
<script src=\"/js/teste/teste_dettaglio.js\" defer></script>    
<script src=\"/js/veicoli/find_veicoli.js\" defer></script>    
<script>
    var ok_modifica ={{ok_modifica}};
    var php_id_testa ={{id_testa}};
    var terminato ={{testa.getTerminato()}};
</script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js\" defer></script>
{% endblock %}


{#
    
    https://stackoverflow.com/questions/58544940/how-to-display-a-datepicker-on-symfony
    #}



{% block stylesheets %}

<link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css\" rel=\"stylesheet\"/>

<style>
#div_dettaglio_testa.no_modifica {
    background-color: #eeeeee;
    padding: 10px;
}

#div_dettaglio_testa.no_modifica label{
    color: #008102;
    
}
#div_dettaglio_testa.modifica {
    background-color: #008102;
    
    padding: 10px;
}

#div_dettaglio_testa.modifica label{
    color: #ffffff;
    
}

.div_ricerca_veicoli{
    display:none;
}
.div_ricerca_anomalia{
    display:none;
}

.div_btn_ricerca_veicolo{
\ttext-align: center;
 }

 .btnRicercaVeicolo {
\tfont-size:27px;
\tpadding: 30px 0;
\tcursor: pointer;
 }

 .btnRicercaVeicolo:hover {
\tcolor: #ffffff;
 }

 .ok_puntatore{
    cursor: pointer;
 }

</style>        
{% endblock %}


{% block body %}
    <h1>Dettaglio Documento*</h1>

<div class=\"div_dettaglio\">

    <section id=\"div_dettaglio_testa\">
        {{ form_start(testaform, {'attr': {'id': 'form_dettaglio'}})}}

        
    <div class=\"row\">
        <div class=\"col\">
            {% if ok_modifica>0 %}
            {{ form_row(testaform.tipodoc) }}
            {% else %}
            {{ form_label(testaform.tipodoc) }}
            <input type=\"textbox\" name=\"{{ field_name(testaform.tipodoc) }}\" value=\"{{ field_value(testaform.tipodoc) }}\"  class=\"form-control\">
            {% endif %}
            
        </div>
        <div class=\"col\">
                
            {% if ok_modifica>0 %}
            {{ form_row(testaform.tipo_intervento) }}
            {% else %}
            {{ form_label(testaform.tipo_intervento) }}
            <input type=\"textbox\" name=\"{{ field_name(testaform.tipo_intervento) }}\" value=\"{{ field_value(testaform.tipo_intervento) }}\"  class=\"form-control\">
            {% endif %}

        </div>
        <div class=\"col\">
            {{ form_row(testaform.numero_doc) }}
        </div>
        <div class=\"col\">
            {{ form_row(testaform.data_doc) }}
        </div>



        
    </div>


        
    <div class=\"row\">
        
        <div class=\"col\">
            {{ form_row(testaform.km_attuali) }}
        </div>
        <div class=\"col\">
            <label  class=\"form-label required\">Veicolo</label>
               <input type=\"text\"
                   id=\"text_descrizion\" name=\"text_descrizion\" value=\"\" readonly class=\"form-control\">
           </div>
           <div class=\"col\">
               <label  class=\"form-label required\">Targa</label>
                  <input type=\"text\"
                      id=\"text_targa\" name=\"text_targa\" value=\"\" readonly class=\"form-control\">
              </div>
   
           <div class=\"col-1 div_btn_ricerca_veicolo\">
               <i class=\"fa-solid fa-car-side btnRicercaVeicolo\" id=\"find_veicoli\"></i>
           </div>

        <div class=\"col\">
            {{ form_row(testaform.id_veicolo, {'id': 'id_veicolo', 'attr': {'class': 'veicoli_display'}  }) }}
        </div>
         {# {{ dump(testa) }}  #}
    </div>
       <div class=\"row\">
            <div class=\"col\">
\t\t\t     Inserimento<br>
\t\t\t\t Utente:{# {{testa.uc is not null ? testa.webUserCreazione.username: 'Senza Utente'}} #}<br>
\t\t\t\t Data:{{testa.getDataCreazione|date('d/m/Y H:i:s')}}
\t\t\t</div>
\t\t\t<div class=\"col\">
\t\t\t     Modifica<br>
\t\t\t\t Utente:{# {{testa.um is not null ?  testa.webUserModifica.username: 'Senza Utente'}} #}<br>
\t\t\t\t Data:{{testa.getDataModifica|date('d/m/Y H:i:s')}}
\t\t\t</div>
\t\t</div>

    <input type=\"hidden\" name=\"ok_modifica\" id=\"ok_modifica\" value=0>
    <button type=\"submit\" class=\"btn btn-primary btnSalva\">Salva</button>
    <a href='{{href_Annulla}}'><button type=\"button\" class=\"btn btn-secondary btnAnnulla\" >Annulla</button></a>
    <button type=\"button\" class=\"btn btn-primary btnModifica\" >Modifica</button>
    <a href='{{href_Back2Lista}}'><button type=\"button\" class=\"btn btn-secondary btnBack2Lista\" >Torna alla lista</button></a>
    <a href='{{href_stampa_doc}}'><button type=\"button\" class=\"btn btn-success btnStampaDoc\" >Stampa Documento</button></a>
    {% if testa.getTerminato()>0 %}
        <a href='{{href_apri_doc}}'><button type=\"button\" class=\"btn btn-primary btnTerminaDoc\" >Apri Documento</button></a>
    {% else %}
        <a href='{{href_chiudi_doc}}'><button type=\"button\" class=\"btn btn-primary btnTerminaDoc\" >Chiudi Documento</button></a>
    {% endif %}
    
        {{ form_end(testaform)}}
    </section>

<section id=\"div_lista_righe\">
        <div class=\"row\">
            <div class=\"col\">
                <hr>
                Lista righe
                <hr>
            </div>
        
        </div>

        
        
        <button type=\"button\" class=\"btn btn-primary btnAnomaliaLavagna\" >Anomalia da Lavagna</button>
        <a href='{{href_nuova_anomalia}}'><button type=\"button\" class=\"btn btn-primary btnNuovaAnomalia\" >Nuova Anomalia</button></a>

        <div class=\"row\">
            <div class=\"col\">


    <table class=\"table\">
    <thead>
        <tr>
            <th></th>
            <th>Anomalia</th>
            <th>Intervento</th>
            <th>Ore</th>
            <th>Operatore</th>
            <th>Lavagna</th>

            <th></th>
    </tr>
    </thead>
    <tbody id=\"tbody_righe\">
        
    </tbody>


    </table>

                
            </div>
        
        </div>

    </section>


<section id=\"div_dettaglio_riga\">

</section>



</div> {#  FINE SEZIONE DETTAGLIO #}


{% include 'veicoli/div_ricerca_veicoli.html.twig' %}




<div class=\"div_ricerca_anomalia\">
    <div class=\"row\">
        <div class=\"col\">
            <button type=\"button\" class=\"btn btn-primary btnChiudiAnomali\" >Chiudi</button>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col\">



            <table class=\"table\" id=\"table_lavagna\">
                <thead>
                    <tr>
                        <th>Inserisci</th>
                        <th>Anomalia</th>
                        <th></th>
                        
                    </tr>
                </thead>
                <tbody id=\"list_anomalie_to_update\">
                </tbody>
        
            </table> 
            
        </div>
    </div>



    
</div>




    {% endblock %}



", "teste/testa_dettaglio.html.twig", "C:\\wamp64\\www\\grent\\templates\\teste\\testa_dettaglio.html.twig");
    }
}

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

/* righe/old/add.righe.html.twig */
class __TwigTemplate_c19494dc820b5d8846098bd3f4e0b690 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "righe/old/add.righe.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "righe/old/add.righe.html.twig"));

        // line 1
        echo "<div class=\"div_gestione_anomalie\">
    <span>meccanico:<input
\t\ttype=\"text\" id=\"id_meccanico_righe\" value=\"\" /></span>

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


";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "righe/old/add.righe.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"div_gestione_anomalie\">
    <span>meccanico:<input
\t\ttype=\"text\" id=\"id_meccanico_righe\" value=\"\" /></span>

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


", "righe/old/add.righe.html.twig", "C:\\wamp64\\www\\grent\\templates\\righe\\old\\add.righe.html.twig");
    }
}

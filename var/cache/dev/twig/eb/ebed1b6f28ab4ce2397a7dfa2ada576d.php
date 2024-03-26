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

/* base.html.twig */
class __TwigTemplate_b28ecff061d7ad0598a41b23a519d31e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'css_pagina' => [$this, 'block_css_pagina'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">

        ";
        // line 8
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "       
        ";
        // line 13
        echo "        <style>
        ";
        // line 14
        $this->displayBlock('css_pagina', $context, $blocks);
        // line 16
        echo "        
        </style>
        ";
        // line 18
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "     

    </head>
    <body> 

        <div class=\"wrapper\">
            <!-- Sidebar  -->
            <nav id=\"sidebar\">
                <div class=\"sidebar-header\">
                     ";
        // line 28
        echo "     
                 </div>
                
    
                <ul class=\"list-unstyled components\">                 
    
    
                    <li>
                        <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lavagna_index");
        echo "\">Lavagna</a>
                        
                    </li>
    
                    <li>
                        <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_teste_index");
        echo "\">Documenti</a>
                    </li>

                    <li>
                        <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_VeicoliInfo_index");
        echo "\">Veicoli</a>
                    </li>

                    <li>
                        <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_revisione_index");
        echo "\">Revisione <span class=\"badge badge-pill badge-danger\" style=\"background-color: #dc3545; color: #FFFFFF;\"> <i id=\"noti\"></i></span></a> 
                    </li>

                    <li>
                        <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("upgrade_db");
        echo "\">Agg DB</a>
                    </li>
                   
    
    
    
                </ul>


                <div class=\"row\">
                    <div class=\"col\">

                    <ul>
                        ";
        // line 66
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 67
            echo "
                        <li>
                         ";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "username", [], "any", false, false, false, 69), "html", null, true);
            echo "
                         </li>
                        <li>
                         ";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "user", [], "any", false, false, false, 72), "email", [], "any", false, false, false, 72), "html", null, true);
            echo "
                         </li>
                         <li>
                         <a href=\"";
            // line 75
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout_app");
            echo "\">Logout</a>
                         </li>


                           
                        ";
        } else {
            // line 81
            echo "                        
                     

                            <li>
                          <a href=\"/login\">Login</a>
                    </li>
                        ";
        }
        // line 88
        echo "                       </ul>
                    </div>
                </div>
    
            </nav>
    
            <!-- Page Content  -->
            <div id=\"content\">
    
                <nav class=\"navbar navbar-expand-lg navbar-light \">
                    <div class=\"container-fluid\">
    
                        <button type=\"button\" id=\"sidebarCollapse\" class=\"btn btn-info\">
                            <i class=\"fas fa-align-left\"></i><span id='sidebarCollapseCaption'> Nascondi il Menu</span>
                        </button>
    
    
                    </div>
                </nav>
    
                ";
        // line 108
        $this->displayBlock('body', $context, $blocks);
        // line 119
        echo "
    
            </div>
        </div>

       
        
        ";
        // line 126
        $this->displayBlock('javascripts', $context, $blocks);
        // line 129
        echo "



    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_css_pagina($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css_pagina"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css_pagina"));

        // line 15
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 108
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 109
        echo "            
    
    
                    <h2>Default Main Page</h2>
                    <p>Layout di default</p>
    
                    <div class=\"line\"></div>
    
    
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 126
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 127
        echo "            
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 127,  321 => 126,  302 => 109,  292 => 108,  282 => 15,  272 => 14,  261 => 10,  251 => 9,  232 => 5,  216 => 129,  214 => 126,  205 => 119,  203 => 108,  181 => 88,  172 => 81,  163 => 75,  157 => 72,  151 => 69,  147 => 67,  145 => 66,  129 => 53,  122 => 49,  115 => 45,  108 => 41,  100 => 36,  90 => 28,  78 => 18,  74 => 16,  72 => 14,  69 => 13,  66 => 11,  64 => 9,  60 => 8,  54 => 5,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">

        {{ encore_entry_link_tags('app') }}
        {% block stylesheets %}
        
        {% endblock %}       
        {#  <script src=\"/js/lavagna/notifica.js\" defer></script>  #}
        <style>
        {% block css_pagina %}
        {% endblock %}
        
        </style>
        {{ encore_entry_script_tags('app') }}     

    </head>
    <body> 

        <div class=\"wrapper\">
            <!-- Sidebar  -->
            <nav id=\"sidebar\">
                <div class=\"sidebar-header\">
                     {# <a href=\"{{ path('officina_index') }}\"> HOME</a> #}
     
                 </div>
                
    
                <ul class=\"list-unstyled components\">                 
    
    
                    <li>
                        <a href=\"{{ path('app_lavagna_index') }}\">Lavagna</a>
                        
                    </li>
    
                    <li>
                        <a href=\"{{ path('app_teste_index') }}\">Documenti</a>
                    </li>

                    <li>
                        <a href=\"{{ path('app_VeicoliInfo_index') }}\">Veicoli</a>
                    </li>

                    <li>
                        <a href=\"{{ path('app_revisione_index') }}\">Revisione <span class=\"badge badge-pill badge-danger\" style=\"background-color: #dc3545; color: #FFFFFF;\"> <i id=\"noti\"></i></span></a> 
                    </li>

                    <li>
                        <a href=\"{{ path('upgrade_db') }}\">Agg DB</a>
                    </li>
                   
    
    
    
                </ul>


                <div class=\"row\">
                    <div class=\"col\">

                    <ul>
                        {% if is_granted('IS_AUTHENTICATED_FULLY') %}

                        <li>
                         {{ app.user.username }}
                         </li>
                        <li>
                         {{ app.user.email }}
                         </li>
                         <li>
                         <a href=\"{{ path('logout_app') }}\">Logout</a>
                         </li>


                           
                        {% else %}
                        
                     

                            <li>
                          <a href=\"/login\">Login</a>
                    </li>
                        {% endif %}
                       </ul>
                    </div>
                </div>
    
            </nav>
    
            <!-- Page Content  -->
            <div id=\"content\">
    
                <nav class=\"navbar navbar-expand-lg navbar-light \">
                    <div class=\"container-fluid\">
    
                        <button type=\"button\" id=\"sidebarCollapse\" class=\"btn btn-info\">
                            <i class=\"fas fa-align-left\"></i><span id='sidebarCollapseCaption'> Nascondi il Menu</span>
                        </button>
    
    
                    </div>
                </nav>
    
                {% block body %}
            
    
    
                    <h2>Default Main Page</h2>
                    <p>Layout di default</p>
    
                    <div class=\"line\"></div>
    
    
                    {% endblock %}

    
            </div>
        </div>

       
        
        {% block javascripts %}
            
        {% endblock %}




    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\grent\\templates\\base.html.twig");
    }
}

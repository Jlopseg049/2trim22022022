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

/* security/login.html.twig */
class __TwigTemplate_772d33b487ac0be14fb0e94f5611c7ae extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Log in!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " 
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\">

        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/form.css"), "html", null, true);
        echo "\" type=\"text/css\">
<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
<link href=\"https://fonts.googleapis.com/css2?family=Overpass:wght@100&display=swap\" rel=\"stylesheet\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "<div class=\"form-bg\">
    <div class=\"container-fluid\">
            <nav class=\"navbar navbar-wrapper  navbar-expand-lg navbar-light \">
            </nav>
            </div>
        </div>
        <div class=\"row d-flex justify-content-center\">
            <div class=\"col-md-offset-5 col-md-5 col-sm-offset-3 col-sm-6\">
            <h1>Bienvenido a StromZu</h1>
            <p>Su plataforma de retransmisiones de confianza.</p>
             ";
        // line 23
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 23, $this->source); })())) {
            // line 24
            echo "                            <div class=\" align-bottom alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 24, $this->source); })()), "messageKey", [], "any", false, false, false, 24), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 24, $this->source); })()), "messageData", [], "any", false, false, false, 24), "security"), "html", null, true);
            echo "</div>
                        ";
        }
        // line 26
        echo "
                        ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27)) {
            // line 28
            echo "                            <div class=\" align-bottom mb-3\">
                                You are logged in as ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "email", [], "any", false, false, false, 29), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                            </div>
                        ";
        }
        // line 32
        echo "            </div
            <div class=\"col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6\">
                <div class=\"form-container\">
                    <form method=\"post\" class=\"form-horizontal\">


                        <h1 class=\"h3 title mb-3 font-weight-normal \">Inicio de sesión</h1>
                        <div class=\"form-group\">
                            <span class=\"input-icon\"><i class=\"fa fa-user\"></i></span>
                            <input type=\"email\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"Email\"  name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
                        </div>
                        <div class=\"form-group\">
                            <span class=\"input-icon\"><i class=\"fa fa-lock\"></i></span>
                            <input type=\"password\" name=\"password\" placeholder=\"Password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
                        </div>

                        <input type=\"hidden\" name=\"_csrf_token\"
                            value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                        >

                        ";
        // line 56
        echo "                        <span class=\"forgot-pass\"><a href=\"#\">Recuperar contraseña</a></span>

                        <button class=\"btn btn-lg btn-primary\" type=\"submit\">
                            Sign in
                        </button>
                    </form>
                      
                  

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 56,  158 => 49,  147 => 41,  136 => 32,  128 => 29,  125 => 28,  123 => 27,  120 => 26,  114 => 24,  112 => 23,  100 => 13,  93 => 12,  81 => 7,  76 => 5,  67 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Log in!{% endblock %}
{% block stylesheets %} 
    <link rel=\"stylesheet\" href=\"{{asset('styles/bootstrap.min.css')}}\" type=\"text/css\">

        <link rel=\"stylesheet\" href=\"{{asset('styles/form.css')}}\" type=\"text/css\">
<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
<link href=\"https://fonts.googleapis.com/css2?family=Overpass:wght@100&display=swap\" rel=\"stylesheet\">
{% endblock %}
{% block body %}
<div class=\"form-bg\">
    <div class=\"container-fluid\">
            <nav class=\"navbar navbar-wrapper  navbar-expand-lg navbar-light \">
            </nav>
            </div>
        </div>
        <div class=\"row d-flex justify-content-center\">
            <div class=\"col-md-offset-5 col-md-5 col-sm-offset-3 col-sm-6\">
            <h1>Bienvenido a StromZu</h1>
            <p>Su plataforma de retransmisiones de confianza.</p>
             {% if error %}
                            <div class=\" align-bottom alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                        {% endif %}

                        {% if app.user %}
                            <div class=\" align-bottom mb-3\">
                                You are logged in as {{ app.user.email  }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
                            </div>
                        {% endif %}
            </div
            <div class=\"col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6\">
                <div class=\"form-container\">
                    <form method=\"post\" class=\"form-horizontal\">


                        <h1 class=\"h3 title mb-3 font-weight-normal \">Inicio de sesión</h1>
                        <div class=\"form-group\">
                            <span class=\"input-icon\"><i class=\"fa fa-user\"></i></span>
                            <input type=\"email\" value=\"{{ last_username }}\" placeholder=\"Email\"  name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
                        </div>
                        <div class=\"form-group\">
                            <span class=\"input-icon\"><i class=\"fa fa-lock\"></i></span>
                            <input type=\"password\" name=\"password\" placeholder=\"Password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
                        </div>

                        <input type=\"hidden\" name=\"_csrf_token\"
                            value=\"{{ csrf_token('authenticate') }}\"
                        >

                        {#
                            Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
                            See https://symfony.com/doc/current/security/remember_me.html
                        #}
                        <span class=\"forgot-pass\"><a href=\"#\">Recuperar contraseña</a></span>

                        <button class=\"btn btn-lg btn-primary\" type=\"submit\">
                            Sign in
                        </button>
                    </form>
                      
                  

{% endblock %}
", "security/login.html.twig", "C:\\Users\\Kazu\\Desktop\\StromZu\\templates\\security\\login.html.twig");
    }
}

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

/* stream/index.html.twig */
class __TwigTemplate_d1305264a3adf2090fae822a08fe0682 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stream/index.html.twig"));

        // line 1
        echo " <!DOCTYPE html>
<html lang=\"es\">
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>Document</title>
                <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/reserva.js"), "html", null, true);
        echo "\"></script>

        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/captura.js"), "html", null, true);
        echo "\"></script>
        <link rel=\"stylesheet\" href =\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/jquery.datetimepicker.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/jquery-ui.min.css"), "html", null, true);
        echo "\">
    </head>
    <body>
    
    <sytle>
  
    </sytle>
        <header>
            <h1>Bienvenido a ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["canal"]) || array_key_exists("canal", $context) ? $context["canal"] : (function () { throw new RuntimeError('Variable "canal" does not exist.', 23, $this->source); })()), "nombre", [], "any", false, false, false, 23), "html", null, true);
        echo "</h1>
        </header>
        <!-- Stream video via webcam -->
        <div class=\"video-wrap\">
            <video id=\"video\" playsinline autoplay></video>

            <video id=\"videoconretraso\" playsinline autoplay></video>
        </div>
        <section>
        ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["canal"]) || array_key_exists("canal", $context) ? $context["canal"] : (function () { throw new RuntimeError('Variable "canal" does not exist.', 32, $this->source); })()), "descripcion", [], "any", false, false, false, 32), "html", null, true);
        echo "
        </section>
        <!-- Trigger canvas web API -->
        <div class=\"controller\">
            <button id=\"snap\">Capture</button>
        <button type=\"button\" class=\"btn btn-info btn-lg\" data-toggle=\"modal\" data-target=\"#myModal\">Open Modal</button>

        </div>
    ";
        // line 40
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 41
            echo "
<div id=\"dialog\" title=";
            // line 42
            echo twig_escape_filter($this->env, ("Reserva en " . twig_get_attribute($this->env, $this->source, (isset($context["canal"]) || array_key_exists("canal", $context) ? $context["canal"] : (function () { throw new RuntimeError('Variable "canal" does not exist.', 42, $this->source); })()), "nombre", [], "any", false, false, false, 42)), "html", null, true);
            echo ">
       ";
            // line 43
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["reservaForm"]) || array_key_exists("reservaForm", $context) ? $context["reservaForm"] : (function () { throw new RuntimeError('Variable "reservaForm" does not exist.', 43, $this->source); })()), 'form_start', ["attr" => ["class" => "form-control"]]);
            echo "
                <div class=\"row g-3 align-items-center\">
                        ";
            // line 45
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reservaForm"]) || array_key_exists("reservaForm", $context) ? $context["reservaForm"] : (function () { throw new RuntimeError('Variable "reservaForm" does not exist.', 45, $this->source); })()), "cliente", [], "any", false, false, false, 45), 'widget', ["attr" => ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45)]]);
            echo "
                        ";
            // line 46
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reservaForm"]) || array_key_exists("reservaForm", $context) ? $context["reservaForm"] : (function () { throw new RuntimeError('Variable "reservaForm" does not exist.', 46, $this->source); })()), "canal", [], "any", false, false, false, 46), 'widget', ["attr" => ["value" => twig_get_attribute($this->env, $this->source, (isset($context["canal"]) || array_key_exists("canal", $context) ? $context["canal"] : (function () { throw new RuntimeError('Variable "canal" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46)]]);
            echo "
                        ";
            // line 47
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reservaForm"]) || array_key_exists("reservaForm", $context) ? $context["reservaForm"] : (function () { throw new RuntimeError('Variable "reservaForm" does not exist.', 47, $this->source); })()), "precio", [], "any", false, false, false, 47), 'widget');
            echo "

                    <div class=\"col-md-6 col-sm-12\">
                        ";
            // line 50
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reservaForm"]) || array_key_exists("reservaForm", $context) ? $context["reservaForm"] : (function () { throw new RuntimeError('Variable "reservaForm" does not exist.', 50, $this->source); })()), "fechaInicio", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control text email"]]);
            echo "
                    </div>
                    <div class=\"col-md-6 col-sm-12\">
                        ";
            // line 53
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reservaForm"]) || array_key_exists("reservaForm", $context) ? $context["reservaForm"] : (function () { throw new RuntimeError('Variable "reservaForm" does not exist.', 53, $this->source); })()), "fechaFin", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control text"]]);
            echo "
                    </div>
                </div>

                <div class=\"row mt-4\">
                        <div class=\"col-md-6 col-sm-12\">
                            <p>Precio por hora: <span id=\"precioHora\">";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["canal"]) || array_key_exists("canal", $context) ? $context["canal"] : (function () { throw new RuntimeError('Variable "canal" does not exist.', 59, $this->source); })()), "precio", [], "any", false, false, false, 59), "html", null, true);
            echo "</span>.00€</p>
                        </div>
                        <div class=\"col-md-6 col-sm-12\" id=\"precioTotal\">
                        </div>
                </div>                        

                <div class=\"row \"></div>                        
                <input type=\"submit\" value=\"Confirmar reserva\"/>
        ";
            // line 67
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["reservaForm"]) || array_key_exists("reservaForm", $context) ? $context["reservaForm"] : (function () { throw new RuntimeError('Variable "reservaForm" does not exist.', 67, $this->source); })()), 'form_end');
            echo "
            <!-- Allow form submission with keyboard without duplicating the dialog button -->
</div>
 
<button id=\"opener\">Open Dialog</button>


";
        }
        // line 75
        echo "

                ";
        // line 78
        echo "                ";
        // line 80
        echo "                     
";
        // line 97
        echo "
        <!-- Webcam video snapshot -->
        ";
        // line 100
        echo "   




        <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.datetimepicker.full.js"), "html", null, true);
        echo "\">

        </script>
        <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/datePicker.js"), "html", null, true);
        echo "\">
        </script>
    </body>
</html> 
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "stream/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 108,  193 => 105,  186 => 100,  182 => 97,  179 => 80,  177 => 78,  173 => 75,  162 => 67,  151 => 59,  142 => 53,  136 => 50,  130 => 47,  126 => 46,  122 => 45,  117 => 43,  113 => 42,  110 => 41,  108 => 40,  97 => 32,  85 => 23,  74 => 15,  70 => 14,  66 => 13,  62 => 12,  57 => 10,  53 => 9,  49 => 8,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <!DOCTYPE html>
<html lang=\"es\">
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>Document</title>
                <script src=\"{{asset('js/jquery-3.3.1.min.js')}}\"></script>
            <script src=\"{{asset('js/jquery-ui.min.js')}}\"></script>
        <script src=\"{{asset('js/reserva.js')}}\"></script>

        <link href=\"{{asset('vendor/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
        <script src=\"{{asset('js/captura.js')}}\"></script>
        <link rel=\"stylesheet\" href =\"{{asset('styles/jquery.datetimepicker.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('styles/jquery-ui.min.css')}}\">
    </head>
    <body>
    
    <sytle>
  
    </sytle>
        <header>
            <h1>Bienvenido a {{canal.nombre}}</h1>
        </header>
        <!-- Stream video via webcam -->
        <div class=\"video-wrap\">
            <video id=\"video\" playsinline autoplay></video>

            <video id=\"videoconretraso\" playsinline autoplay></video>
        </div>
        <section>
        {{canal.descripcion}}
        </section>
        <!-- Trigger canvas web API -->
        <div class=\"controller\">
            <button id=\"snap\">Capture</button>
        <button type=\"button\" class=\"btn btn-info btn-lg\" data-toggle=\"modal\" data-target=\"#myModal\">Open Modal</button>

        </div>
    {% if is_granted('ROLE_USER') %}

<div id=\"dialog\" title={{\"Reserva en \" ~ canal.nombre}}>
       {{ form_start(reservaForm,{'attr':{'class':'form-control'}}) }}
                <div class=\"row g-3 align-items-center\">
                        {{ form_widget(reservaForm.cliente,{'attr':{'value': app.user.id }}) }}
                        {{ form_widget(reservaForm.canal,{'attr':{'value':canal.id }}) }}
                        {{ form_widget(reservaForm.precio) }}

                    <div class=\"col-md-6 col-sm-12\">
                        {{ form_widget(reservaForm.fechaInicio,{'attr':{'class':'form-control text email'}}) }}
                    </div>
                    <div class=\"col-md-6 col-sm-12\">
                        {{ form_widget(reservaForm.fechaFin,{'attr':{'class':'form-control text'}}) }}
                    </div>
                </div>

                <div class=\"row mt-4\">
                        <div class=\"col-md-6 col-sm-12\">
                            <p>Precio por hora: <span id=\"precioHora\">{{ canal.precio}}</span>.00€</p>
                        </div>
                        <div class=\"col-md-6 col-sm-12\" id=\"precioTotal\">
                        </div>
                </div>                        

                <div class=\"row \"></div>                        
                <input type=\"submit\" value=\"Confirmar reserva\"/>
        {{ form_end(reservaForm) }}
            <!-- Allow form submission with keyboard without duplicating the dialog button -->
</div>
 
<button id=\"opener\">Open Dialog</button>


{% endif %}


                {# Más adelante será un radio button que haga un intercambio de formularios. #}
                {# Además en un futuro, se traerá el formulario de otra plantilla y será incorporada
                    a partir de AJAX #}
                     
{# <div id=\"dialog-form\" title=\"Create new user\">
  <p class=\"validateTips\">All form fields are required.</p>
 
        <form>
            <fieldset>
            <input placeholder=\"Fecha Reserva Inicio\" id=\"dateInicio\" type=\"text\"/>
            <input placeholder=\"Fecha Reserva Fin\" id=\"dateFin\" type=\"text\"/>
                            
                            <input type=\"submit\" value=\"Confirmar reserva\"/>
        
            <!-- Allow form submission with keyboard without duplicating the dialog button -->
            <input type=\"submit\" tabindex=\"-1\" style=\"position:absolute; top:-1000px\">
            </fieldset>
        </form>
</div>
                     #}

        <!-- Webcam video snapshot -->
        {# <canvas id=\"canvas\" width=\"640\" height=\"480\"></canvas> #}
   




        <script src=\"{{asset('js/jquery.datetimepicker.full.js')}}\">

        </script>
        <script src=\"{{asset('js/datePicker.js')}}\">
        </script>
    </body>
</html> 
", "stream/index.html.twig", "C:\\Users\\Kazu\\Desktop\\StromZu\\templates\\stream\\index.html.twig");
    }
}

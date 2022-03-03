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
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
<link href=\"https://fonts.googleapis.com/css2?family=Overpass:wght@100&display=swap\" rel=\"stylesheet\">
        <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/captura.js"), "html", null, true);
        echo "\"></script>
        <link rel=\"stylesheet\" href =\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/jquery.datetimepicker.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/jquery-ui.min.css"), "html", null, true);
        echo "\">
          <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/logo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    </head>
    <body>
  <nav class=\"navbar navbar-dark bg-dark\">
                  <a class=\"d-flex text-decoration-none text-dark\" href=\"/\">
                    <img class=\"logo\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/StromZu-W.png"), "html", null, true);
        echo "\" alt=\"StromZu-Logo\"/>
                    <h1 class=\"text-decoration-none text-light\">StromZu</h1>
                </a>
</nav>
        <header>
            <h1>Bienvenido a ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["canal"]) || array_key_exists("canal", $context) ? $context["canal"] : (function () { throw new RuntimeError('Variable "canal" does not exist.', 29, $this->source); })()), "nombre", [], "any", false, false, false, 29), "html", null, true);
        echo "</h1>
        </header>
        <!-- Stream video via webcam -->
        <div class=\"video-wrap\">
            <video id=\"video\" playsinline autoplay></video>

            <video id=\"videoconretraso\" playsinline autoplay></video>
        </div>
        <section>
        ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["canal"]) || array_key_exists("canal", $context) ? $context["canal"] : (function () { throw new RuntimeError('Variable "canal" does not exist.', 38, $this->source); })()), "descripcion", [], "any", false, false, false, 38), "html", null, true);
        echo "
        </section>
        <!-- Trigger canvas web API -->
        <div class=\"controller\">
            <button id=\"snap\">Capture</button>

        </div>
    ";
        // line 45
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 46
            echo "
<div id=\"dialog\" title=";
            // line 47
            echo twig_escape_filter($this->env, ("Reserva en " . twig_get_attribute($this->env, $this->source, (isset($context["canal"]) || array_key_exists("canal", $context) ? $context["canal"] : (function () { throw new RuntimeError('Variable "canal" does not exist.', 47, $this->source); })()), "nombre", [], "any", false, false, false, 47)), "html", null, true);
            echo ">
       ";
            // line 48
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["reservaForm"]) || array_key_exists("reservaForm", $context) ? $context["reservaForm"] : (function () { throw new RuntimeError('Variable "reservaForm" does not exist.', 48, $this->source); })()), 'form_start', ["attr" => ["class" => "form-control"]]);
            echo "
                <div class=\"row g-3 align-items-center\">
                        ";
            // line 50
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reservaForm"]) || array_key_exists("reservaForm", $context) ? $context["reservaForm"] : (function () { throw new RuntimeError('Variable "reservaForm" does not exist.', 50, $this->source); })()), "cliente", [], "any", false, false, false, 50), 'widget', ["attr" => ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "id", [], "any", false, false, false, 50)]]);
            echo "
                        ";
            // line 51
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reservaForm"]) || array_key_exists("reservaForm", $context) ? $context["reservaForm"] : (function () { throw new RuntimeError('Variable "reservaForm" does not exist.', 51, $this->source); })()), "canal", [], "any", false, false, false, 51), 'widget', ["attr" => ["value" => twig_get_attribute($this->env, $this->source, (isset($context["canal"]) || array_key_exists("canal", $context) ? $context["canal"] : (function () { throw new RuntimeError('Variable "canal" does not exist.', 51, $this->source); })()), "id", [], "any", false, false, false, 51)]]);
            echo "
                        ";
            // line 52
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reservaForm"]) || array_key_exists("reservaForm", $context) ? $context["reservaForm"] : (function () { throw new RuntimeError('Variable "reservaForm" does not exist.', 52, $this->source); })()), "precio", [], "any", false, false, false, 52), 'widget');
            echo "

                    <div class=\"col-md-6 col-sm-12\">
                        ";
            // line 55
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reservaForm"]) || array_key_exists("reservaForm", $context) ? $context["reservaForm"] : (function () { throw new RuntimeError('Variable "reservaForm" does not exist.', 55, $this->source); })()), "fechaInicio", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control text email", "autocomplete" => "off"]]);
            echo "
                    </div>
                    <div class=\"col-md-6 col-sm-12\">
                        ";
            // line 58
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reservaForm"]) || array_key_exists("reservaForm", $context) ? $context["reservaForm"] : (function () { throw new RuntimeError('Variable "reservaForm" does not exist.', 58, $this->source); })()), "fechaFin", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control text", "autocomplete" => "off"]]);
            echo "
                    </div>
                </div>

                <div class=\"row mt-4\">
                        <div class=\"col-md-6 col-sm-12\">
                            <p>Precio por hora: <span id=\"precioHora\">";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["canal"]) || array_key_exists("canal", $context) ? $context["canal"] : (function () { throw new RuntimeError('Variable "canal" does not exist.', 64, $this->source); })()), "precio", [], "any", false, false, false, 64), "html", null, true);
            echo "</span>.00€</p>
                        </div>
                        <div class=\"col-md-6 col-sm-12\" id=\"precioTotal\">
                        </div>
                </div>                        

                <div class=\"row \"></div>                        
                <input type=\"submit\" value=\"Confirmar reserva\"/>
        ";
            // line 72
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["reservaForm"]) || array_key_exists("reservaForm", $context) ? $context["reservaForm"] : (function () { throw new RuntimeError('Variable "reservaForm" does not exist.', 72, $this->source); })()), 'form_end');
            echo "
            <!-- Allow form submission with keyboard without duplicating the dialog button -->
</div>
 
<button id=\"opener\" class=\"btn btn-success btn-lg\">Open Dialog</button>


";
        }
        // line 80
        echo "

                ";
        // line 83
        echo "                ";
        // line 85
        echo "                     
";
        // line 102
        echo "
        <!-- Webcam video snapshot -->
        ";
        // line 105
        echo "   




        <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.datetimepicker.full.js"), "html", null, true);
        echo "\">

        </script>
        <script src=\"";
        // line 113
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
        return array (  210 => 113,  204 => 110,  197 => 105,  193 => 102,  190 => 85,  188 => 83,  184 => 80,  173 => 72,  162 => 64,  153 => 58,  147 => 55,  141 => 52,  137 => 51,  133 => 50,  128 => 48,  124 => 47,  121 => 46,  119 => 45,  109 => 38,  97 => 29,  89 => 24,  80 => 18,  76 => 17,  72 => 16,  68 => 15,  61 => 11,  57 => 10,  53 => 9,  49 => 8,  40 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{asset('styles/bootstrap.min.css')}}\" type=\"text/css\">
<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
<link href=\"https://fonts.googleapis.com/css2?family=Overpass:wght@100&display=swap\" rel=\"stylesheet\">
        <script src=\"{{asset('js/captura.js')}}\"></script>
        <link rel=\"stylesheet\" href =\"{{asset('styles/jquery.datetimepicker.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('styles/jquery-ui.min.css')}}\">
          <link href=\"{{asset('styles/logo.css')}}\" rel=\"stylesheet\">

    </head>
    <body>
  <nav class=\"navbar navbar-dark bg-dark\">
                  <a class=\"d-flex text-decoration-none text-dark\" href=\"/\">
                    <img class=\"logo\" src=\"{{asset('/img/StromZu-W.png')}}\" alt=\"StromZu-Logo\"/>
                    <h1 class=\"text-decoration-none text-light\">StromZu</h1>
                </a>
</nav>
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

        </div>
    {% if is_granted('ROLE_USER') %}

<div id=\"dialog\" title={{\"Reserva en \" ~ canal.nombre}}>
       {{ form_start(reservaForm,{'attr':{'class':'form-control'}}) }}
                <div class=\"row g-3 align-items-center\">
                        {{ form_widget(reservaForm.cliente,{'attr':{'value': app.user.id }}) }}
                        {{ form_widget(reservaForm.canal,{'attr':{'value':canal.id }}) }}
                        {{ form_widget(reservaForm.precio) }}

                    <div class=\"col-md-6 col-sm-12\">
                        {{ form_widget(reservaForm.fechaInicio,{'attr':{'class':'form-control text email', \"autocomplete\": \"off\"}}) }}
                    </div>
                    <div class=\"col-md-6 col-sm-12\">
                        {{ form_widget(reservaForm.fechaFin,{'attr':{'class':'form-control text' , \"autocomplete\": \"off\"}}) }}
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
 
<button id=\"opener\" class=\"btn btn-success btn-lg\">Open Dialog</button>


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

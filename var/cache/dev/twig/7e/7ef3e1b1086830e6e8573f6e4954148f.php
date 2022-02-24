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
<div id=\"dialog\" title=\"Basic dialog\">
  <p>This is an animated dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the &apos;x&apos; icon.</p>
</div>
 
<button id=\"opener\">Open Dialog</button>





                ";
        // line 51
        echo "                ";
        // line 53
        echo "                     
";
        // line 70
        echo "
        <!-- Webcam video snapshot -->
        ";
        // line 73
        echo "   




        <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.datetimepicker.full.js"), "html", null, true);
        echo "\">

        </script>
        <script src=\"";
        // line 81
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
        return array (  140 => 81,  134 => 78,  127 => 73,  123 => 70,  120 => 53,  118 => 51,  97 => 32,  85 => 23,  74 => 15,  70 => 14,  66 => 13,  62 => 12,  57 => 10,  53 => 9,  49 => 8,  40 => 1,);
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
<div id=\"dialog\" title=\"Basic dialog\">
  <p>This is an animated dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the &apos;x&apos; icon.</p>
</div>
 
<button id=\"opener\">Open Dialog</button>





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

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

        // line 41
        echo "                ";
        // line 43
        echo "                    ";
        // line 55
        echo " 
<html>
<head>
        <link rel=\"stylesheet\" href =\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/jquery.datetimepicker.min.css"), "html", null, true);
        echo "\">

</head>
<body>
<input placeholder=\"Fecha Reserva Inicio\" id=\"dateInicio\" type=\"text\"/>
<input placeholder=\"Fecha Reserva Fin\" id=\"dateFin\" type=\"text\"/>
<input id=\"datetimepicker\" type=\"text\" >

        <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>


<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>

<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.datetimepicker.full.js"), "html", null, true);
        echo "\">

</script>
<script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/datePicker.js"), "html", null, true);
        echo "\">
</script>
</body>
</html";
        
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
        return array (  74 => 74,  68 => 71,  60 => 66,  49 => 58,  44 => 55,  42 => 43,  40 => 41,);
    }

    public function getSourceContext()
    {
        return new Source("{# <!DOCTYPE html>
<html lang=\"es\">
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>Document</title>
        <script src=\"{{asset('js/jquery-3.3.1.min.js')}}\"></script>
  <link href=\"{{asset('vendor/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
        <script src=\"{{asset('js/captura.js')}}\"></script>

        <script src=\"{{asset('js/jquery-ui.min.js')}}\"></script>
        <link rel=\"stylesheet\" href=\"{{asset('styles/jquery-ui.min.css')}}\">
        <link rel=\"stylesheet\" hred=\"{{asset('styles/dateTimePicker.css')}}\">
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

                {# Más adelante será un radio button que haga un intercambio de formularios. #}
                {# Además en un futuro, se traerá el formulario de otra plantilla y será incorporada
                    a partir de AJAX #}
                    {# <h4>Reserva</h4>
                    <input placeholder=\"From Date & Time\" id=\"fdate\" type=\"text\"/>
                    <input placeholder=\"To Date & Time\" id=\"tdate\" type=\"text\"/>
                    
                    <input type=\"submit\" value=\"Confirmar reserva\"/>

        <!-- Webcam video snapshot -->
        <canvas id=\"canvas\" width=\"640\" height=\"480\"></canvas>
        <script src=\"{{asset('js/reserva.js')}}\"></script>
        <script src=\"{{asset('js/dateTimePicker.js')}}\"></script>

    </body>
</html> #} 
<html>
<head>
        <link rel=\"stylesheet\" href =\"{{asset('styles/jquery.datetimepicker.min.css')}}\">

</head>
<body>
<input placeholder=\"Fecha Reserva Inicio\" id=\"dateInicio\" type=\"text\"/>
<input placeholder=\"Fecha Reserva Fin\" id=\"dateFin\" type=\"text\"/>
<input id=\"datetimepicker\" type=\"text\" >

        <script src=\"{{asset('js/jquery-3.3.1.min.js')}}\"></script>


<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>

<script src=\"{{asset('js/jquery.datetimepicker.full.js')}}\">

</script>
<script src=\"{{asset('js/datePicker.js')}}\">
</script>
</body>
</html", "stream/index.html.twig", "C:\\Users\\Kazu\\Desktop\\StromZu\\templates\\stream\\index.html.twig");
    }
}

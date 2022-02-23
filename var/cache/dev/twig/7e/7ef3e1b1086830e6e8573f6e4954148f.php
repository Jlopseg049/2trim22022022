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
        echo "<!DOCTYPE html>
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
<script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>

        <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/captura.js"), "html", null, true);
        echo "\"></script>
    
        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
        <link rel=\"stylesheet\" href=\"";
        // line 14
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
        <div id=\"dialog\"></div>
        <!-- Modal -->
        <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">

            <!-- Modal content-->
            <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                <h4 class=\"modal-title\">Modal Header</h4>
            </div>
            <div class=\"modal-body\">
                <p>Some text in the modal.</p>
            </div>
            <div class=\"modal-footer\">
                <button  class=\"btn btn-default\" id=\"btnalert\" >ALERT</button>
                <button  class=\"btn btn-default\" id=\"btndialog\" >DIALOG</button>
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
            </div>
            </div>

        </div>
        </div>

        <div id=\"dialog\" hidden></div>
        <!-- Webcam video snapshot -->
        ";
        // line 67
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/reserva.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>";
        
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
        return array (  125 => 67,  88 => 32,  76 => 23,  64 => 14,  60 => 13,  55 => 11,  49 => 8,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>Document</title>
        <script src=\"{{asset('js/jquery-3.3.1.min.js')}}\"></script>
<script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>

        <script src=\"{{asset('js/captura.js')}}\"></script>
    
        <script src=\"{{asset('js/jquery-ui.min.js')}}\"></script>
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
        <div id=\"dialog\"></div>
        <!-- Modal -->
        <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">

            <!-- Modal content-->
            <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                <h4 class=\"modal-title\">Modal Header</h4>
            </div>
            <div class=\"modal-body\">
                <p>Some text in the modal.</p>
            </div>
            <div class=\"modal-footer\">
                <button  class=\"btn btn-default\" id=\"btnalert\" >ALERT</button>
                <button  class=\"btn btn-default\" id=\"btndialog\" >DIALOG</button>
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
            </div>
            </div>

        </div>
        </div>

        <div id=\"dialog\" hidden></div>
        <!-- Webcam video snapshot -->
        {# <canvas id=\"canvas\" width=\"640\" height=\"480\"></canvas> #}
        <script src=\"{{asset('js/reserva.js')}}\"></script>
    </body>
</html>", "stream/index.html.twig", "C:\\Users\\alumno\\Desktop\\StromZu\\templates\\stream\\index.html.twig");
    }
}

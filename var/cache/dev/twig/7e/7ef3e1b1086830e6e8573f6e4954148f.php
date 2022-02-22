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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/captura.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
        <!-- Stream video via webcam -->
        <div class=\"video-wrap\">
            <video id=\"video\" playsinline autoplay></video>

            <video id=\"videoconretraso\" playsinline autoplay></video>
        </div>

        <!-- Trigger canvas web API -->
        <div class=\"controller\">
            <button id=\"snap\">Capture</button>
        </div>

        <!-- Webcam video snapshot -->
        <canvas id=\"canvas\" width=\"640\" height=\"480\"></canvas>
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
        return array (  49 => 8,  40 => 1,);
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
        <script src=\"{{asset('js/captura.js')}}\"></script>
    </head>
    <body>
        <!-- Stream video via webcam -->
        <div class=\"video-wrap\">
            <video id=\"video\" playsinline autoplay></video>

            <video id=\"videoconretraso\" playsinline autoplay></video>
        </div>

        <!-- Trigger canvas web API -->
        <div class=\"controller\">
            <button id=\"snap\">Capture</button>
        </div>

        <!-- Webcam video snapshot -->
        <canvas id=\"canvas\" width=\"640\" height=\"480\"></canvas>
    </body>
</html>", "stream/index.html.twig", "C:\\Users\\Kazu\\Desktop\\StromZu\\templates\\stream\\index.html.twig");
    }
}

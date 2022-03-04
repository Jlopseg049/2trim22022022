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
        <title>StromZu</title>
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
            <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/aos/aos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->
  <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/spinner.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/logo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    </head>
    <body>
  <nav class=\"navbar navbar-dark bg-dark\">
                  <a class=\"d-flex text-decoration-none text-dark\" href=\"/\">
                    <img class=\"logo\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/StromZu-W.png"), "html", null, true);
        echo "\" alt=\"StromZu-Logo\"/>
                    <h1 class=\"text-decoration-none text-light\">StromZu</h1>
                </a>
</nav>
    <div class=\"container\">

        <header>
            <h1>Bienvenido a ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["canal"]) || array_key_exists("canal", $context) ? $context["canal"] : (function () { throw new RuntimeError('Variable "canal" does not exist.', 40, $this->source); })()), "nombre", [], "any", false, false, false, 40), "html", null, true);
        echo "</h1>
        </header>
        <!-- Stream video via webcam -->
                        <div class=\"row\"> 

        <div class=\"col-lg-7 col-md-12 col-sm-12\">
            <div class=\"video-wrap\">
                <video id=\"video\" playsinline autoplay></video>

                <video id=\"videoconretraso\" playsinline autoplay></video>

            </div>

        </div>
        <div class=\"col-lg-5 col-md-12 d-sm-none d-md-inline chat bg-success\">
        Aqui en un futuro irá un chat
        </div>
                </div>
                    ";
        // line 58
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 59
            echo "
                            <button id=\"opener\" class=\"mt-3 btn btn-success btn-lg\">Open Dialog</button>
                    ";
        }
        // line 62
        echo "            <section>

            ";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["canal"]) || array_key_exists("canal", $context) ? $context["canal"] : (function () { throw new RuntimeError('Variable "canal" does not exist.', 64, $this->source); })()), "descripcion", [], "any", false, false, false, 64), "html", null, true);
        echo "
            </section>
        <!-- Trigger canvas web API -->

    ";
        // line 68
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 69
            echo "
<div id=\"dialog\" class=\"bg-dark\" title=";
            // line 70
            echo twig_escape_filter($this->env, ("Reserva en " . twig_get_attribute($this->env, $this->source, (isset($context["canal"]) || array_key_exists("canal", $context) ? $context["canal"] : (function () { throw new RuntimeError('Variable "canal" does not exist.', 70, $this->source); })()), "nombre", [], "any", false, false, false, 70)), "html", null, true);
            echo ">
       ";
            // line 71
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["reservaForm"]) || array_key_exists("reservaForm", $context) ? $context["reservaForm"] : (function () { throw new RuntimeError('Variable "reservaForm" does not exist.', 71, $this->source); })()), 'form_start', ["attr" => ["class" => "form-control"]]);
            echo "
                <div class=\"row g-3 align-items-center\">
                        ";
            // line 73
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reservaForm"]) || array_key_exists("reservaForm", $context) ? $context["reservaForm"] : (function () { throw new RuntimeError('Variable "reservaForm" does not exist.', 73, $this->source); })()), "cliente", [], "any", false, false, false, 73), 'widget', ["attr" => ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "user", [], "any", false, false, false, 73), "id", [], "any", false, false, false, 73)]]);
            echo "
                        ";
            // line 74
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reservaForm"]) || array_key_exists("reservaForm", $context) ? $context["reservaForm"] : (function () { throw new RuntimeError('Variable "reservaForm" does not exist.', 74, $this->source); })()), "canal", [], "any", false, false, false, 74), 'widget', ["attr" => ["value" => twig_get_attribute($this->env, $this->source, (isset($context["canal"]) || array_key_exists("canal", $context) ? $context["canal"] : (function () { throw new RuntimeError('Variable "canal" does not exist.', 74, $this->source); })()), "id", [], "any", false, false, false, 74)]]);
            echo "
                        ";
            // line 75
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reservaForm"]) || array_key_exists("reservaForm", $context) ? $context["reservaForm"] : (function () { throw new RuntimeError('Variable "reservaForm" does not exist.', 75, $this->source); })()), "precio", [], "any", false, false, false, 75), 'widget');
            echo "

                    <div class=\"col-md-6 col-sm-12\">
                        ";
            // line 78
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reservaForm"]) || array_key_exists("reservaForm", $context) ? $context["reservaForm"] : (function () { throw new RuntimeError('Variable "reservaForm" does not exist.', 78, $this->source); })()), "fechaInicio", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "form-control text email", "autocomplete" => "off"]]);
            echo "
                    </div>
                    <div class=\"col-md-6 col-sm-12\">
                        ";
            // line 81
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reservaForm"]) || array_key_exists("reservaForm", $context) ? $context["reservaForm"] : (function () { throw new RuntimeError('Variable "reservaForm" does not exist.', 81, $this->source); })()), "fechaFin", [], "any", false, false, false, 81), 'widget', ["attr" => ["class" => "form-control text", "autocomplete" => "off"]]);
            echo "
                    </div>
                </div>

                <div class=\"row mt-4\">
                        <div class=\"col-md-6 col-sm-12\">
                            <p>Precio por hora: <span id=\"precioHora\">";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["canal"]) || array_key_exists("canal", $context) ? $context["canal"] : (function () { throw new RuntimeError('Variable "canal" does not exist.', 87, $this->source); })()), "precio", [], "any", false, false, false, 87), "html", null, true);
            echo "</span>.00€</p>
                        </div>
                        <div class=\"col-md-6 col-sm-12\" id=\"precioTotal\">
                        </div>
                </div>                        

                <div class=\"row \"></div>                        
                <input type=\"submit\" value=\"Confirmar reserva\"/>
        ";
            // line 95
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["reservaForm"]) || array_key_exists("reservaForm", $context) ? $context["reservaForm"] : (function () { throw new RuntimeError('Variable "reservaForm" does not exist.', 95, $this->source); })()), 'form_end');
            echo "
            <!-- Allow form submission with keyboard without duplicating the dialog button -->
</div>
 


";
        }
        // line 102
        echo "<footer>
         <div class=\"row justify-content-center mb-0 pt-5 pb-0 row-2 px-3\">
            <div class=\"col-12\">
                <div class=\"row row-2\">
                    <div class=\"col-sm-3 text-md-center\">
                        <h5><span class=\"icon\"> </span><b> StromZu</b></h5>
                    </div>
                    <div class=\"col-sm-3 my-sm-0 mt-5\">
                        <ul class=\"list-unstyled\">
                            <li class=\"mt-0\">plataforma</li>
                            <li>Centro de ayuda</li>
                            <li>Seguridad</li>
                        </ul>
                    </div>
                    <div class=\"col-sm-3 my-sm-0 mt-5\">
                        <ul class=\"list-unstyled\">
                            <li class=\"mt-0\">Clientes</li>
                            <li>Servicios de clientes</li>
                        </ul>
                    </div>
                    <div class=\"col-sm-3 my-sm-0 mt-5\">
                        <ul class=\"list-unstyled\">
                            <li class=\"mt-0\">Compañia</li>
                            <li><a href=\"mapaNav\">Mapa de navegación</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row justify-content-center mt-0 pt-0 row-1 mb-0 px-sm-3 px-2\">
            <div class=\"col-12\">
                <div class=\"row my-4 row-1 no-gutters\">
                    <div class=\"col-sm-3 col-auto text-center\"><small>&#9400; Stromzu</small></div>
                    <div class=\"col-md-3 col-auto \"></div>
                    <div class=\"col-md-3 col-auto\"></div>
                    <div class=\"col my-auto text-md-left text-right \"> <small> jlopseg049@g.educaand.es <span><img src=\"https://i.imgur.com/TtB6MDc.png\" class=\"img-fluid \" width=\"25\"></span> <span><img src=\"https://i.imgur.com/N90KDYM.png\" class=\"img-fluid \" width=\"25\"></span></small> </div>
                </div>
            </div>
        </div>
    </footer>


                ";
        // line 145
        echo "                ";
        // line 147
        echo "                     

</div>

        <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.datetimepicker.full.js"), "html", null, true);
        echo "\">

        </script>
        <script src=\"";
        // line 154
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
        return array (  290 => 154,  284 => 151,  278 => 147,  276 => 145,  232 => 102,  222 => 95,  211 => 87,  202 => 81,  196 => 78,  190 => 75,  186 => 74,  182 => 73,  177 => 71,  173 => 70,  170 => 69,  168 => 68,  161 => 64,  157 => 62,  152 => 59,  150 => 58,  129 => 40,  119 => 33,  110 => 27,  106 => 26,  102 => 25,  96 => 22,  92 => 21,  88 => 20,  84 => 19,  80 => 18,  76 => 17,  72 => 16,  68 => 15,  61 => 11,  57 => 10,  53 => 9,  49 => 8,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <!DOCTYPE html>
<html lang=\"es\">
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>StromZu</title>
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
            <link href=\"{{asset('vendor/aos/aos.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('vendor/glightbox/css/glightbox.min.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('vendor/swiper/swiper-bundle.min.css')}}\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->
  <link href=\"{{asset('styles/style.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('styles/spinner.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('styles/logo.css')}}\" rel=\"stylesheet\">

    </head>
    <body>
  <nav class=\"navbar navbar-dark bg-dark\">
                  <a class=\"d-flex text-decoration-none text-dark\" href=\"/\">
                    <img class=\"logo\" src=\"{{asset('/img/StromZu-W.png')}}\" alt=\"StromZu-Logo\"/>
                    <h1 class=\"text-decoration-none text-light\">StromZu</h1>
                </a>
</nav>
    <div class=\"container\">

        <header>
            <h1>Bienvenido a {{canal.nombre}}</h1>
        </header>
        <!-- Stream video via webcam -->
                        <div class=\"row\"> 

        <div class=\"col-lg-7 col-md-12 col-sm-12\">
            <div class=\"video-wrap\">
                <video id=\"video\" playsinline autoplay></video>

                <video id=\"videoconretraso\" playsinline autoplay></video>

            </div>

        </div>
        <div class=\"col-lg-5 col-md-12 d-sm-none d-md-inline chat bg-success\">
        Aqui en un futuro irá un chat
        </div>
                </div>
                    {% if is_granted('ROLE_USER') %}

                            <button id=\"opener\" class=\"mt-3 btn btn-success btn-lg\">Open Dialog</button>
                    {% endif %}
            <section>

            {{canal.descripcion}}
            </section>
        <!-- Trigger canvas web API -->

    {% if is_granted('ROLE_USER') %}

<div id=\"dialog\" class=\"bg-dark\" title={{\"Reserva en \" ~ canal.nombre}}>
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
 


{% endif %}
<footer>
         <div class=\"row justify-content-center mb-0 pt-5 pb-0 row-2 px-3\">
            <div class=\"col-12\">
                <div class=\"row row-2\">
                    <div class=\"col-sm-3 text-md-center\">
                        <h5><span class=\"icon\"> </span><b> StromZu</b></h5>
                    </div>
                    <div class=\"col-sm-3 my-sm-0 mt-5\">
                        <ul class=\"list-unstyled\">
                            <li class=\"mt-0\">plataforma</li>
                            <li>Centro de ayuda</li>
                            <li>Seguridad</li>
                        </ul>
                    </div>
                    <div class=\"col-sm-3 my-sm-0 mt-5\">
                        <ul class=\"list-unstyled\">
                            <li class=\"mt-0\">Clientes</li>
                            <li>Servicios de clientes</li>
                        </ul>
                    </div>
                    <div class=\"col-sm-3 my-sm-0 mt-5\">
                        <ul class=\"list-unstyled\">
                            <li class=\"mt-0\">Compañia</li>
                            <li><a href=\"mapaNav\">Mapa de navegación</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row justify-content-center mt-0 pt-0 row-1 mb-0 px-sm-3 px-2\">
            <div class=\"col-12\">
                <div class=\"row my-4 row-1 no-gutters\">
                    <div class=\"col-sm-3 col-auto text-center\"><small>&#9400; Stromzu</small></div>
                    <div class=\"col-md-3 col-auto \"></div>
                    <div class=\"col-md-3 col-auto\"></div>
                    <div class=\"col my-auto text-md-left text-right \"> <small> jlopseg049@g.educaand.es <span><img src=\"https://i.imgur.com/TtB6MDc.png\" class=\"img-fluid \" width=\"25\"></span> <span><img src=\"https://i.imgur.com/N90KDYM.png\" class=\"img-fluid \" width=\"25\"></span></small> </div>
                </div>
            </div>
        </div>
    </footer>


                {# Más adelante será un radio button que haga un intercambio de formularios. #}
                {# Además en un futuro, se traerá el formulario de otra plantilla y será incorporada
                    a partir de AJAX #}
                     

</div>

        <script src=\"{{asset('js/jquery.datetimepicker.full.js')}}\">

        </script>
        <script src=\"{{asset('js/datePicker.js')}}\">
        </script>

    </body>
</html> 
", "stream/index.html.twig", "C:\\Users\\Kazu\\Desktop\\StromZu\\templates\\stream\\index.html.twig");
    }
}

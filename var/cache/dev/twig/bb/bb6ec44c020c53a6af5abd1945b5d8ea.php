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

/* reserva/esquema.html.twig */
class __TwigTemplate_414814cb2b8faa86de318ee06133cb4b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reserva/esquema.html.twig"));

        // line 1
        echo "<body>
      <!-- ======= Header ======= -->
  <header id=\"header\" class=\"d-flex align-items-center\">
    <div class=\"container d-flex align-items-center justify-content-between\">

      <div class=\"logo\">
        <!-- <a href=\"index.html\"><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\"></a> -->
      </div>

      <nav id=\"navbar\" class=\"navbar\">
        <ul>
          <li>
            <div class=\"input-group ml-2\">
              <div class=\"input-group-append\">
                <button id=\"botoncito\" class=\"btn btn-outline-success h-100\" type=\"submit\">Ver Canales</button>
              </div>
            </div>
          </li>

          <li><a class=\"nav-link scrollto active\" href=\"#hero\">Home</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#about\">Quienes somos</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#services\">Servicios</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#team\">Team</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#pricing\">Pricing</a></li>

          ";
        // line 26
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 27
            echo "          <li class=\"dropdown\">
            <a ";
            // line 28
            echo " >
              ";
            // line 29
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "foto", [], "any", false, false, false, 29) == "")) {
                // line 30
                echo "                <img id=\"profileImg\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/profiler/noprofile.jpg"), "html", null, true);
                echo "\" 
                  class=\"img \" alt=";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31), "foto", [], "any", false, false, false, 31), "html", null, true);
                echo ">
              ";
            } else {
                // line 33
                echo "                <img id=\"profileImg\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/profiler/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "foto", [], "any", false, false, false, 33))), "html", null, true);
                echo "\" 
                  class=\"img \" alt=";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34), "foto", [], "any", false, false, false, 34), "html", null, true);
                echo ">
              ";
            }
            // line 36
            echo "
            </a>
            <ul>
            
              <li><a href=\"#\">Mi canal</a></li>
              <li><a href=";
            // line 41
            echo twig_escape_filter($this->env, ("/user/edit/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41)), "html", null, true);
            echo " >Editar cuenta</a></li>
              <li><a class=\"nav-link\" href=\"logout\">Cerrar Sesión</a></li>
            </ul>
          </li> 
              ";
        } else {
            // line 46
            echo "              <li><a class=\"nav-link\" href=\"login\">Iniciar Sesión</a></li>
              <li><a class=\"nav-link\" href=\"register\">Registrarse</a></li>

          ";
        }
        // line 50
        echo "        </ul>
        <i class=\"bi bi-list mobile-nav-toggle\"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
<div class=\"altoMain\">
    <main>
        
    </main>
</div>
<!-- ======= Footer ======= -->
  <div class=\"row justify-content-center mb-0 pt-5 pb-0 row-2 px-3\">
    <div class=\"col-12\">
        <div class=\"row row-2\">
            <div class=\"col-sm-3 text-md-center\">
                <h5><span> <i class=\"fa fa-firefox text-light\" aria-hidden=\"true\"></i></span><b> Stride</b></h5>
            </div>
            <div class=\"col-sm-3 my-sm-0 mt-5\">
                <ul class=\"list-unstyled\">
                    <li class=\"mt-0\">Platform</li>
                    <li>Help Center</li>
                    <li>Security</li>
                </ul>
            </div>
            <div class=\"col-sm-3 my-sm-0 mt-5\">
                <ul class=\"list-unstyled\">
                    <li class=\"mt-0\">Customers</li>
                    <li>Use Cases</li>
                    <li>Customers Services</li>
                </ul>
            </div>
            <div class=\"col-sm-3 my-sm-0 mt-5\">
                <ul class=\"list-unstyled\">
                    <li class=\"mt-0\">Company</li>
                    <li><a href=\"mapaNav\">Mapa de navegación</a></li>
                    <li>Careers- <span class=\"Careers\">We're-hiring</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class=\"row justify-content-center mt-0 pt-0 row-1 mb-0 px-sm-3 px-2\">
    <div class=\"col-12\">
        <div class=\"row my-4 row-1 no-gutters\">
            <div class=\"col-sm-3 col-auto text-center\"><small>&#9400; Stride Softwere</small></div>
            <div class=\"col-md-3 col-auto \"></div>
            <div class=\"col-md-3 col-auto\"></div>
            <div class=\"col my-auto text-md-left text-right \"> <small> hello@getstride.com <span><img src=\"https://i.imgur.com/TtB6MDc.png\" class=\"img-fluid \" width=\"25\"></span> <span><img src=\"https://i.imgur.com/N90KDYM.png\" class=\"img-fluid \" width=\"25\"></span></small> </div>
        </div>
    </div>
</div>
</footer>

<a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

<!-- Vendor JS Files -->
<script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/aos/aos.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/isotope-layout/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>
</body>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "reserva/esquema.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 112,  196 => 111,  192 => 110,  188 => 109,  184 => 108,  180 => 107,  121 => 50,  115 => 46,  107 => 41,  100 => 36,  95 => 34,  90 => 33,  85 => 31,  80 => 30,  78 => 29,  75 => 28,  72 => 27,  70 => 26,  48 => 7,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<body>
      <!-- ======= Header ======= -->
  <header id=\"header\" class=\"d-flex align-items-center\">
    <div class=\"container d-flex align-items-center justify-content-between\">

      <div class=\"logo\">
        <!-- <a href=\"index.html\"><img src=\"{{asset('img/logo.png')}}\" alt=\"\" class=\"img-fluid\"></a> -->
      </div>

      <nav id=\"navbar\" class=\"navbar\">
        <ul>
          <li>
            <div class=\"input-group ml-2\">
              <div class=\"input-group-append\">
                <button id=\"botoncito\" class=\"btn btn-outline-success h-100\" type=\"submit\">Ver Canales</button>
              </div>
            </div>
          </li>

          <li><a class=\"nav-link scrollto active\" href=\"#hero\">Home</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#about\">Quienes somos</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#services\">Servicios</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#team\">Team</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#pricing\">Pricing</a></li>

          {% if is_granted('ROLE_USER') %}
          <li class=\"dropdown\">
            <a {#href=\"editaUsuario\"#} >
              {% if app.user.foto == \"\" %}
                <img id=\"profileImg\" src=\"{{asset('img/profiler/noprofile.jpg')}}\" 
                  class=\"img \" alt={{app.user.foto}}>
              {% else %}
                <img id=\"profileImg\" src=\"{{asset('img/profiler/' ~ app.user.foto)}}\" 
                  class=\"img \" alt={{app.user.foto}}>
              {% endif %}

            </a>
            <ul>
            
              <li><a href=\"#\">Mi canal</a></li>
              <li><a href={{\"/user/edit/\" ~ app.user.id}} >Editar cuenta</a></li>
              <li><a class=\"nav-link\" href=\"logout\">Cerrar Sesión</a></li>
            </ul>
          </li> 
              {% else %}
              <li><a class=\"nav-link\" href=\"login\">Iniciar Sesión</a></li>
              <li><a class=\"nav-link\" href=\"register\">Registrarse</a></li>

          {% endif %}
        </ul>
        <i class=\"bi bi-list mobile-nav-toggle\"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
<div class=\"altoMain\">
    <main>
        
    </main>
</div>
<!-- ======= Footer ======= -->
  <div class=\"row justify-content-center mb-0 pt-5 pb-0 row-2 px-3\">
    <div class=\"col-12\">
        <div class=\"row row-2\">
            <div class=\"col-sm-3 text-md-center\">
                <h5><span> <i class=\"fa fa-firefox text-light\" aria-hidden=\"true\"></i></span><b> Stride</b></h5>
            </div>
            <div class=\"col-sm-3 my-sm-0 mt-5\">
                <ul class=\"list-unstyled\">
                    <li class=\"mt-0\">Platform</li>
                    <li>Help Center</li>
                    <li>Security</li>
                </ul>
            </div>
            <div class=\"col-sm-3 my-sm-0 mt-5\">
                <ul class=\"list-unstyled\">
                    <li class=\"mt-0\">Customers</li>
                    <li>Use Cases</li>
                    <li>Customers Services</li>
                </ul>
            </div>
            <div class=\"col-sm-3 my-sm-0 mt-5\">
                <ul class=\"list-unstyled\">
                    <li class=\"mt-0\">Company</li>
                    <li><a href=\"mapaNav\">Mapa de navegación</a></li>
                    <li>Careers- <span class=\"Careers\">We're-hiring</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class=\"row justify-content-center mt-0 pt-0 row-1 mb-0 px-sm-3 px-2\">
    <div class=\"col-12\">
        <div class=\"row my-4 row-1 no-gutters\">
            <div class=\"col-sm-3 col-auto text-center\"><small>&#9400; Stride Softwere</small></div>
            <div class=\"col-md-3 col-auto \"></div>
            <div class=\"col-md-3 col-auto\"></div>
            <div class=\"col my-auto text-md-left text-right \"> <small> hello@getstride.com <span><img src=\"https://i.imgur.com/TtB6MDc.png\" class=\"img-fluid \" width=\"25\"></span> <span><img src=\"https://i.imgur.com/N90KDYM.png\" class=\"img-fluid \" width=\"25\"></span></small> </div>
        </div>
    </div>
</div>
</footer>

<a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

<!-- Vendor JS Files -->
<script src=\"{{asset('vendor/aos/aos.js')}}\"></script>
<script src=\"{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
<script src=\"{{asset('vendor/glightbox/js/glightbox.min.js')}}\"></script>
<script src=\"{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}\"></script>
<script src=\"{{asset('vendor/php-email-form/validate.js')}}\"></script>
<script src=\"{{asset('vendor/swiper/swiper-bundle.min.js')}}\"></script>
</body>", "reserva/esquema.html.twig", "C:\\Users\\Kazu\\Desktop\\StromZu\\templates\\reserva\\esquema.html.twig");
    }
}

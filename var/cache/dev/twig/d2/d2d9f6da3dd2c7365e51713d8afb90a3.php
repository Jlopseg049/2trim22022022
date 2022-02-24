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

/* index/index.html.twig */
class __TwigTemplate_98ca25d087fd6a7adc17fcb5c7cc6a77 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>StromZu</title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Favicons -->
  <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/StromZu-B.png"), "html", null, true);
        echo "\" rel=\"icon\">
  <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/apple-touch-icon.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">
<script src=\"https://kit.fontawesome.com/a8b39d6af2.js\" crossorigin=\"anonymous\"></script>
  <!-- Google Fonts -->
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/aos/aos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->
  <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/spinner.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->

</head>
<body>

  <!-- ======= Hero Section ======= -->
  <section id=\"hero\">
    <div class=\"hero-container\">
      <!-- <a href=\"index.html\" class=\"hero-logo\" data-aos=\"zoom-in\"><img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/hero-logo.png"), "html", null, true);
        echo "\" alt=\"\"></a> -->
      <h1 data-aos=\"zoom-in\">Welcome To StromZu</h1>
      <a data-aos=\"fade-up\" data-aos-delay=\"200\" href=\"#about\" class=\"btn-get-started scrollto\">¡COMIENZA YA!</a>
    </div>
  </section><!-- End Hero -->

  <!-- ======= Header ======= -->
  <header id=\"header\" class=\"d-flex align-items-center\">
    <div class=\"container d-flex align-items-center justify-content-between\">

      <div class=\"logo\">
        <!-- <a href=\"index.html\"><img src=\"";
        // line 49
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

          <li><a class=\"nav-link scrollto active\" href=\"#hero\">Inicio</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#about\">Quienes somos</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#services\">Servicios</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#team\">Equipo</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#pricing\">Ofertas</a></li>

          ";
        // line 68
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 69
            echo "          <li class=\"dropdown\">
            <a ";
            // line 70
            echo " >
              ";
            // line 71
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "user", [], "any", false, false, false, 71), "foto", [], "any", false, false, false, 71) == "")) {
                // line 72
                echo "                <img id=\"profileImg\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/profiler/noprofile.jpg"), "html", null, true);
                echo "\" 
                  class=\"img \" alt=";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "user", [], "any", false, false, false, 73), "foto", [], "any", false, false, false, 73), "html", null, true);
                echo ">
              ";
            } else {
                // line 75
                echo "                <img id=\"profileImg\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/profiler/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75), "foto", [], "any", false, false, false, 75))), "html", null, true);
                echo "\" 
                  class=\"img \" alt=";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "foto", [], "any", false, false, false, 76), "html", null, true);
                echo ">
              ";
            }
            // line 78
            echo "
            </a>
            <ul>
            
              <li><a href=\"#\">Mi canal</a></li>
              <li><a href=";
            // line 83
            echo twig_escape_filter($this->env, ("/user/edit/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "user", [], "any", false, false, false, 83), "id", [], "any", false, false, false, 83)), "html", null, true);
            echo " >Editar cuenta</a></li>
              <li><a class=\"nav-link\" href=\"logout\">Cerrar Sesión</a></li>
            </ul>
          </li> 
              ";
        } else {
            // line 88
            echo "              <li><a class=\"nav-link\" href=\"login\">Iniciar Sesión</a></li>
              <li><a class=\"nav-link\" href=\"register\">Registrarse</a></li>

          ";
        }
        // line 92
        echo "        </ul>
        <i class=\"bi bi-list mobile-nav-toggle\"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
<div class=\"altoMain\">
  <main id=\"main\">

    <!-- ======= About Us Section ======= -->
    <section id=\"about\" class=\"about\">
      <div class=\"container\">

        <div class=\"section-title\" data-aos=\"fade-up\">
          <h2>Quienes somos</h2>
          <p>Magnam dolores commodi suscipit eius consequatur</p>
        </div>

        <div class=\"row\">
          <div class=\"col-lg-6\" data-aos=\"fade-right\">
            <div class=\"image\">
              <img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/about.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
            </div>
          </div>
          <div class=\"col-lg-6\" data-aos=\"fade-left\">
            <div class=\"content pt-4 pt-lg-0 pl-0 pl-lg-3 \">
              <h3>Voluptatem dignissimos provident quasi corporis</h3>
              <p class=\"fst-italic\">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class=\"bx bx-check-double\"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class=\"bx bx-check-double\"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class=\"bx bx-check-double\"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
              </ul>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum
              </p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id=\"services\" class=\"services\">
      <div class=\"container\">

        <div class=\"section-title\" data-aos=\"fade-up\">
          <h2>Que podrá hacer en StromZu</h2>
          <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fuga eum quidem</p>
        </div>

        <div class=\"row\">
          <div class=\"col-lg-6 order-2 order-lg-1\">
            <div class=\"icon-box mt-5 mt-lg-0\" data-aos=\"fade-up\">
              <i class=\"fa-solid fa-icons\"></i>
              <h4>Est labore ad</h4>
              <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
            </div>
            <div class=\"icon-box mt-5\" data-aos=\"fade-up\" data-aos-delay=\"100\">
              <i class=\"fa-solid fa-camera\"></i>
              <h4>Harum esse qui</h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
            </div>
            <div class=\"icon-box mt-5\" data-aos=\"fade-up\" data-aos-delay=\"200\">
              <i class=\"fa-solid fa-camera-cctv\"></i>
              <h4>Aut occaecati</h4>
              <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
            </div>
            <div class=\"icon-box mt-5\" data-aos=\"fade-up\" data-aos-delay=\"300\">
              <i class=\"fa-solid fa-camcorder\"></i>
              <h4>Beatae veritatis</h4>
              <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
            </div>
          </div>
          <div class=\"image col-lg-6 order-1 order-lg-2\" style='background-image: url(\"";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/services.jpg"), "html", null, true);
        echo "\");' data-aos=\"fade-left\" data-aos-delay=\"100\"></div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Featured Section ======= -->
    <section id=\"featured\" class=\"featured\">
      <div class=\"container\">

        <div class=\"row\">
          <div class=\"col-lg-6\" data-aos=\"fade-right\">
            <div class=\"tab-content\">
              <div class=\"tab-pane active show\" id=\"tab-1\">
                <figure>
                  <img src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/featured-1.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
                </figure>
              </div>
              <div class=\"tab-pane\" id=\"tab-2\">
                <figure>
                  <img src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/featured-2.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
                </figure>
              </div>
              <div class=\"tab-pane\" id=\"tab-3\">
                <figure>
                  <img src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/featured-3.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
                </figure>
              </div>
              <div class=\"tab-pane\" id=\"tab-4\">
                <figure>
                  <img src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/featured-4.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
                </figure>
              </div>
            </div>
          </div>
          <div class=\"col-lg-6 mt-4 mt-lg-0\" data-aos=\"fade-left\">
            <ul class=\"nav nav-tabs flex-column\">
              <li class=\"nav-item\">
                <a class=\"nav-link active show\" data-bs-toggle=\"tab\" href=\"#tab-1\">
                  <h4>Modi sit est</h4>
                  <p>Quis excepturi porro totam sint earum quo nulla perspiciatis eius.</p>
                </a>
              </li>
              <li class=\"nav-item mt-2\">
                <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#tab-2\">
                  <h4>Unde praesentium sed</h4>
                  <p>Voluptas vel esse repudiandae quo excepturi.</p>
                </a>
              </li>
              <li class=\"nav-item mt-2\">
                <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#tab-3\">
                  <h4>Pariatur explicabo vel</h4>
                  <p>Velit veniam ipsa sit nihil blanditiis mollitia natus.</p>
                </a>
              </li>
              <li class=\"nav-item mt-2\">
                <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#tab-4\">
                  <h4>Nostrum qui quasi</h4>
                  <p>Ratione hic sapiente nostrum doloremque illum nulla praesentium id</p>
                </a>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End Featured Section -->

    <!-- ======= Why Us Section ======= -->
    <section id=\"why-us\" class=\"why-us\">
      <div class=\"container-fluid\">

        <div class=\"row\">

          <div class=\"col-lg-7 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-stretch\">

            <div class=\"content\" data-aos=\"fade-up\">
              <h3>Eum ipsam laborum deleniti <strong>velit pariatur architecto aut nihil</strong></h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>
            </div>

            <div class=\"accordion-list\">
              <ul>
                <li data-aos=\"fade-up\" data-aos-delay=\"100\">
                  <a data-bs-toggle=\"collapse\" class=\"collapse\" data-bs-target=\"#accordion-list-1\"><span>01</span> Non consectetur a erat nam at lectus urna duis? <i class=\"bx bx-chevron-down icon-show\"></i><i class=\"bx bx-chevron-up icon-close\"></i></a>
                  <div id=\"accordion-list-1\" class=\"collapse show\" data-bs-parent=\".accordion-list\">
                    <p>
<audio id=\"inicioMusic\" controls autoplay>
    <source src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("audio/InicioMusic.mp3"), "html", null, true);
        echo "\" type=\"audio/mpeg\">     
</audio>                    </p>
                  </div>
                </li>

                <li data-aos=\"fade-up\" data-aos-delay=\"200\">
                  <a data-bs-toggle=\"collapse\" data-bs-target=\"#accordion-list-2\" class=\"collapsed\"><span>02</span> Feugiat scelerisque varius morbi enim nunc? <i class=\"bx bx-chevron-down icon-show\"></i><i class=\"bx bx-chevron-up icon-close\"></i></a>
                  <div id=\"accordion-list-2\" class=\"collapse\" data-bs-parent=\".accordion-list\">
                    <p>
                      Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </p>
                  </div>
                </li>

                <li data-aos=\"fade-up\" data-aos-delay=\"300\">
                  <a data-bs-toggle=\"collapse\" data-bs-target=\"#accordion-list-3\" class=\"collapsed\"><span>03</span> Dolor sit amet consectetur adipiscing elit? <i class=\"bx bx-chevron-down icon-show\"></i><i class=\"bx bx-chevron-up icon-close\"></i></a>
                  <div id=\"accordion-list-3\" class=\"collapse\" data-bs-parent=\".accordion-list\">
                    <p>
                      Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class=\"col-lg-5 order-1 order-lg-2 align-items-stretch video-box\" style='background-image: url(\"";
        // line 290
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/why-us.jpg"), "html", null, true);
        echo "\");' data-aos=\"zoom-in\">
            <a href=\"https://www.youtube.com/watch?v=LIqQNG_q2us\" class=\"venobox play-btn mb-4\" data-vbtype=\"video\" data-autoplay=\"true\"></a>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id=\"testimonials\" class=\"testimonials\">
      <div class=\"container\" data-aos=\"zoom-in\">
        <div class=\"quote-icon\">
          <i class=\"bx bxs-quote-right\"></i>
        </div>

        <div class=\"testimonials-slider swiper-container\" data-aos=\"fade-up\" data-aos-delay=\"100\">
          <div class=\"swiper-wrapper\">

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <p>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                </p>
                <img src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/testimonials/testimonials-1.jpg"), "html", null, true);
        echo "\" class=\"testimonial-img\" alt=\"\">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <p>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                </p>
                <img src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/testimonials/testimonials-2.jpg"), "html", null, true);
        echo "\" class=\"testimonial-img\" alt=\"\">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <p>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                </p>
                <img src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/testimonials/testimonials-3.jpg"), "html", null, true);
        echo "\" class=\"testimonial-img\" alt=\"\">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <p>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                </p>
                <img src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/testimonials/testimonials-4.jpg"), "html", null, true);
        echo "\" class=\"testimonial-img\" alt=\"\">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <p>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                </p>
                <img src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/testimonials/testimonials-5.jpg"), "html", null, true);
        echo "\" class=\"testimonial-img\" alt=\"\">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class=\"swiper-pagination\"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->


 

    <!-- ======= Pricing Section ======= -->
    <section id=\"pricing\" class=\"pricing section-bg\">
      <div class=\"container\">

        <div class=\"section-title\" data-aos=\"fade-up\">
          <h2>Pricing</h2>
          <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fuga eum quidem</p>
        </div>

        <div class=\"row d-flex justify-content-center\">

          <div class=\"col-lg-4 col-md-6 col-sm-12\">
            <div class=\"box\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
              <h3>Reserva</h3>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class=\"na\">Pharetra massa</li>
                <li class=\"na\">Massa ultricies mi</li>
              </ul>
              <div class=\"btn-wrap\">
                <a href=\"#\" class=\"btn-buy\">Buy Now</a>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 col-sm-12 mt-4 mt-md-0\">
            <div class=\"box recommended\" data-aos=\"zoom-in\">
              <span class=\"recommended-badge\">Recommended</span>
              <h3>Rutina</h3>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class=\"na\">Massa ultricies mi</li>
              </ul>
              <div class=\"btn-wrap\">
                <a href=\"#\" class=\"btn-buy\">Buy Now</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id=\"faq\" class=\"faq\">
      <div class=\"container\">

        <div class=\"section-title\" data-aos=\"fade-up\">
          <h2>Frequently Asked Questions</h2>
        </div>

        <ul class=\"faq-list\">

          <li data-aos=\"fade-up\">
            <a data-bs-toggle=\"collapse\" class=\"collapsed\" data-bs-target=\"#faq1\">Non consectetur a erat nam at lectus urna duis? <i class=\"bx bx-chevron-down icon-show\"></i><i class=\"bx bx-x icon-close\"></i></a>
            <div id=\"faq1\" class=\"collapse\" data-bs-parent=\".faq-list\">
              <p>
                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
              </p>
            </div>
          </li>

          <li data-aos=\"fade-up\" data-aos-delay=\"100\">
            <a data-bs-toggle=\"collapse\" data-bs-target=\"#faq2\" class=\"collapsed\">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class=\"bx bx-chevron-down icon-show\"></i><i class=\"bx bx-x icon-close\"></i></a>
            <div id=\"faq2\" class=\"collapse\" data-bs-parent=\".faq-list\">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li data-aos=\"fade-up\" data-aos-delay=\"200\">
            <a data-bs-toggle=\"collapse\" data-bs-target=\"#faq3\" class=\"collapsed\">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class=\"bx bx-chevron-down icon-show\"></i><i class=\"bx bx-x icon-close\"></i></a>
            <div id=\"faq3\" class=\"collapse\" data-bs-parent=\".faq-list\">
              <p>
                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
              </p>
            </div>
          </li>

          <li data-aos=\"fade-up\" data-aos-delay=\"300\">
            <a data-bs-toggle=\"collapse\" data-bs-target=\"#faq4\" class=\"collapsed\">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class=\"bx bx-chevron-down icon-show\"></i><i class=\"bx bx-x icon-close\"></i></a>
            <div id=\"faq4\" class=\"collapse\" data-bs-parent=\".faq-list\">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li data-aos=\"fade-up\" data-aos-delay=\"400\">
            <a data-bs-toggle=\"collapse\" data-bs-target=\"#faq5\" class=\"collapsed\">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class=\"bx bx-chevron-down icon-show\"></i><i class=\"bx bx-x icon-close\"></i></a>
            <div id=\"faq5\" class=\"collapse\" data-bs-parent=\".faq-list\">
              <p>
                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
              </p>
            </div>
          </li>

          <li data-aos=\"fade-up\" data-aos-delay=\"500\">
            <a data-bs-toggle=\"collapse\" data-bs-target=\"#faq6\" class=\"collapsed\">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class=\"bx bx-chevron-down icon-show\"></i><i class=\"bx bx-x icon-close\"></i></a>
            <div id=\"faq6\" class=\"collapse\" data-bs-parent=\".faq-list\">
              <p>
                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id=\"contact\" class=\"contact section-bg\">
      <div class=\"container\">

        <div class=\"section-title\">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fuga eum quidem</p>
        </div>

        <div class=\"row\">

          <div class=\"col-lg-4\">
            <div class=\"info d-flex flex-column justify-content-center\" data-aos=\"fade-right\">
              <div class=\"address\">
                <i class=\"bi bi-geo-alt\"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street,<br>New York, NY 535022</p>
              </div>

              <div class=\"email\">
                <i class=\"bi bi-envelope\"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class=\"phone\">
                <i class=\"bi bi-phone\"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>

          <div class=\"col-lg-8 mt-5 mt-lg-0\">

            <form action=\"forms/contact.php\" method=\"post\" role=\"form\" class=\"php-email-form\" data-aos=\"fade-left\">
              <div class=\"row\">
                <div class=\"col-md-6 form-group\">
                  <input type=\"text\" name=\"name\" class=\"form-control\" id=\"name\" placeholder=\"Your Name\" required>
                </div>
                <div class=\"col-md-6 form-group mt-3 mt-md-0\">
                  <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"Your Email\" required>
                </div>
              </div>
              <div class=\"form-group mt-3\">
                <input type=\"text\" class=\"form-control\" name=\"subject\" id=\"subject\" placeholder=\"Subject\" required>
              </div>
              <div class=\"form-group mt-3\">
                <textarea class=\"form-control\" name=\"message\" rows=\"5\" placeholder=\"Message\" required></textarea>
              </div>
              <div class=\"my-3\">
                <div class=\"loading\">Loading</div>
                <div class=\"error-message\"></div>
                <div class=\"sent-message\">Your message has been sent. Thank you!</div>
              </div>
              <div class=\"text-center\"><button type=\"submit\">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
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
                            <li class=\"mt-0\">Clientes</li>
                            <li>Servicios de clientes</li>
                        </ul>
                    </div>
                    <div class=\"col-sm-3 my-sm-0 mt-5\">
                        <ul class=\"list-unstyled\">
                            <li class=\"mt-0\">Compañia</li>
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
        // line 605
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/aos/aos.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 606
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 607
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 608
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/isotope-layout/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 609
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 610
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>

  <!-- Template Main JS File -->
<script src=\"";
        // line 613
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 614
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 615
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/search.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 616
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/canales.js"), "html", null, true);
        echo "\"></script>


</body>

</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "index/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  788 => 616,  784 => 615,  780 => 614,  776 => 613,  770 => 610,  766 => 609,  762 => 608,  758 => 607,  754 => 606,  750 => 605,  500 => 358,  486 => 347,  472 => 336,  458 => 325,  444 => 314,  417 => 290,  386 => 262,  323 => 202,  315 => 197,  307 => 192,  299 => 187,  281 => 172,  219 => 113,  196 => 92,  190 => 88,  182 => 83,  175 => 78,  170 => 76,  165 => 75,  160 => 73,  155 => 72,  153 => 71,  150 => 70,  147 => 69,  145 => 68,  123 => 49,  109 => 38,  96 => 28,  92 => 27,  86 => 24,  82 => 23,  78 => 22,  74 => 21,  70 => 20,  66 => 19,  57 => 13,  53 => 12,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>StromZu</title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Favicons -->
  <link href=\"{{asset('img/StromZu-B.png')}}\" rel=\"icon\">
  <link href=\"{{asset('img/apple-touch-icon.png')}}\" rel=\"apple-touch-icon\">
<script src=\"https://kit.fontawesome.com/a8b39d6af2.js\" crossorigin=\"anonymous\"></script>
  <!-- Google Fonts -->
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  <link href=\"{{asset('vendor/aos/aos.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('vendor/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('vendor/boxicons/css/boxicons.min.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('vendor/glightbox/css/glightbox.min.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('vendor/swiper/swiper-bundle.min.css')}}\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->
  <link href=\"{{asset('styles/style.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('styles/spinner.css')}}\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->

</head>
<body>

  <!-- ======= Hero Section ======= -->
  <section id=\"hero\">
    <div class=\"hero-container\">
      <!-- <a href=\"index.html\" class=\"hero-logo\" data-aos=\"zoom-in\"><img src=\"{{asset('img/hero-logo.png')}}\" alt=\"\"></a> -->
      <h1 data-aos=\"zoom-in\">Welcome To StromZu</h1>
      <a data-aos=\"fade-up\" data-aos-delay=\"200\" href=\"#about\" class=\"btn-get-started scrollto\">¡COMIENZA YA!</a>
    </div>
  </section><!-- End Hero -->

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

          <li><a class=\"nav-link scrollto active\" href=\"#hero\">Inicio</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#about\">Quienes somos</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#services\">Servicios</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#team\">Equipo</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#pricing\">Ofertas</a></li>

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
  <main id=\"main\">

    <!-- ======= About Us Section ======= -->
    <section id=\"about\" class=\"about\">
      <div class=\"container\">

        <div class=\"section-title\" data-aos=\"fade-up\">
          <h2>Quienes somos</h2>
          <p>Magnam dolores commodi suscipit eius consequatur</p>
        </div>

        <div class=\"row\">
          <div class=\"col-lg-6\" data-aos=\"fade-right\">
            <div class=\"image\">
              <img src=\"{{asset('img/about.jpg')}}\" class=\"img-fluid\" alt=\"\">
            </div>
          </div>
          <div class=\"col-lg-6\" data-aos=\"fade-left\">
            <div class=\"content pt-4 pt-lg-0 pl-0 pl-lg-3 \">
              <h3>Voluptatem dignissimos provident quasi corporis</h3>
              <p class=\"fst-italic\">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class=\"bx bx-check-double\"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class=\"bx bx-check-double\"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class=\"bx bx-check-double\"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
              </ul>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum
              </p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id=\"services\" class=\"services\">
      <div class=\"container\">

        <div class=\"section-title\" data-aos=\"fade-up\">
          <h2>Que podrá hacer en StromZu</h2>
          <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fuga eum quidem</p>
        </div>

        <div class=\"row\">
          <div class=\"col-lg-6 order-2 order-lg-1\">
            <div class=\"icon-box mt-5 mt-lg-0\" data-aos=\"fade-up\">
              <i class=\"fa-solid fa-icons\"></i>
              <h4>Est labore ad</h4>
              <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
            </div>
            <div class=\"icon-box mt-5\" data-aos=\"fade-up\" data-aos-delay=\"100\">
              <i class=\"fa-solid fa-camera\"></i>
              <h4>Harum esse qui</h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
            </div>
            <div class=\"icon-box mt-5\" data-aos=\"fade-up\" data-aos-delay=\"200\">
              <i class=\"fa-solid fa-camera-cctv\"></i>
              <h4>Aut occaecati</h4>
              <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
            </div>
            <div class=\"icon-box mt-5\" data-aos=\"fade-up\" data-aos-delay=\"300\">
              <i class=\"fa-solid fa-camcorder\"></i>
              <h4>Beatae veritatis</h4>
              <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
            </div>
          </div>
          <div class=\"image col-lg-6 order-1 order-lg-2\" style='background-image: url(\"{{asset('img/services.jpg')}}\");' data-aos=\"fade-left\" data-aos-delay=\"100\"></div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Featured Section ======= -->
    <section id=\"featured\" class=\"featured\">
      <div class=\"container\">

        <div class=\"row\">
          <div class=\"col-lg-6\" data-aos=\"fade-right\">
            <div class=\"tab-content\">
              <div class=\"tab-pane active show\" id=\"tab-1\">
                <figure>
                  <img src=\"{{asset('img/featured-1.png')}}\" alt=\"\" class=\"img-fluid\">
                </figure>
              </div>
              <div class=\"tab-pane\" id=\"tab-2\">
                <figure>
                  <img src=\"{{asset('img/featured-2.png')}}\" alt=\"\" class=\"img-fluid\">
                </figure>
              </div>
              <div class=\"tab-pane\" id=\"tab-3\">
                <figure>
                  <img src=\"{{asset('img/featured-3.png')}}\" alt=\"\" class=\"img-fluid\">
                </figure>
              </div>
              <div class=\"tab-pane\" id=\"tab-4\">
                <figure>
                  <img src=\"{{asset('img/featured-4.png')}}\" alt=\"\" class=\"img-fluid\">
                </figure>
              </div>
            </div>
          </div>
          <div class=\"col-lg-6 mt-4 mt-lg-0\" data-aos=\"fade-left\">
            <ul class=\"nav nav-tabs flex-column\">
              <li class=\"nav-item\">
                <a class=\"nav-link active show\" data-bs-toggle=\"tab\" href=\"#tab-1\">
                  <h4>Modi sit est</h4>
                  <p>Quis excepturi porro totam sint earum quo nulla perspiciatis eius.</p>
                </a>
              </li>
              <li class=\"nav-item mt-2\">
                <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#tab-2\">
                  <h4>Unde praesentium sed</h4>
                  <p>Voluptas vel esse repudiandae quo excepturi.</p>
                </a>
              </li>
              <li class=\"nav-item mt-2\">
                <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#tab-3\">
                  <h4>Pariatur explicabo vel</h4>
                  <p>Velit veniam ipsa sit nihil blanditiis mollitia natus.</p>
                </a>
              </li>
              <li class=\"nav-item mt-2\">
                <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#tab-4\">
                  <h4>Nostrum qui quasi</h4>
                  <p>Ratione hic sapiente nostrum doloremque illum nulla praesentium id</p>
                </a>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End Featured Section -->

    <!-- ======= Why Us Section ======= -->
    <section id=\"why-us\" class=\"why-us\">
      <div class=\"container-fluid\">

        <div class=\"row\">

          <div class=\"col-lg-7 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-stretch\">

            <div class=\"content\" data-aos=\"fade-up\">
              <h3>Eum ipsam laborum deleniti <strong>velit pariatur architecto aut nihil</strong></h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>
            </div>

            <div class=\"accordion-list\">
              <ul>
                <li data-aos=\"fade-up\" data-aos-delay=\"100\">
                  <a data-bs-toggle=\"collapse\" class=\"collapse\" data-bs-target=\"#accordion-list-1\"><span>01</span> Non consectetur a erat nam at lectus urna duis? <i class=\"bx bx-chevron-down icon-show\"></i><i class=\"bx bx-chevron-up icon-close\"></i></a>
                  <div id=\"accordion-list-1\" class=\"collapse show\" data-bs-parent=\".accordion-list\">
                    <p>
<audio id=\"inicioMusic\" controls autoplay>
    <source src=\"{{asset('audio/InicioMusic.mp3')}}\" type=\"audio/mpeg\">     
</audio>                    </p>
                  </div>
                </li>

                <li data-aos=\"fade-up\" data-aos-delay=\"200\">
                  <a data-bs-toggle=\"collapse\" data-bs-target=\"#accordion-list-2\" class=\"collapsed\"><span>02</span> Feugiat scelerisque varius morbi enim nunc? <i class=\"bx bx-chevron-down icon-show\"></i><i class=\"bx bx-chevron-up icon-close\"></i></a>
                  <div id=\"accordion-list-2\" class=\"collapse\" data-bs-parent=\".accordion-list\">
                    <p>
                      Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </p>
                  </div>
                </li>

                <li data-aos=\"fade-up\" data-aos-delay=\"300\">
                  <a data-bs-toggle=\"collapse\" data-bs-target=\"#accordion-list-3\" class=\"collapsed\"><span>03</span> Dolor sit amet consectetur adipiscing elit? <i class=\"bx bx-chevron-down icon-show\"></i><i class=\"bx bx-chevron-up icon-close\"></i></a>
                  <div id=\"accordion-list-3\" class=\"collapse\" data-bs-parent=\".accordion-list\">
                    <p>
                      Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class=\"col-lg-5 order-1 order-lg-2 align-items-stretch video-box\" style='background-image: url(\"{{asset('img/why-us.jpg')}}\");' data-aos=\"zoom-in\">
            <a href=\"https://www.youtube.com/watch?v=LIqQNG_q2us\" class=\"venobox play-btn mb-4\" data-vbtype=\"video\" data-autoplay=\"true\"></a>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id=\"testimonials\" class=\"testimonials\">
      <div class=\"container\" data-aos=\"zoom-in\">
        <div class=\"quote-icon\">
          <i class=\"bx bxs-quote-right\"></i>
        </div>

        <div class=\"testimonials-slider swiper-container\" data-aos=\"fade-up\" data-aos-delay=\"100\">
          <div class=\"swiper-wrapper\">

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <p>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                </p>
                <img src=\"{{asset('img/testimonials/testimonials-1.jpg')}}\" class=\"testimonial-img\" alt=\"\">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <p>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                </p>
                <img src=\"{{asset('img/testimonials/testimonials-2.jpg')}}\" class=\"testimonial-img\" alt=\"\">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <p>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                </p>
                <img src=\"{{asset('img/testimonials/testimonials-3.jpg')}}\" class=\"testimonial-img\" alt=\"\">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <p>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                </p>
                <img src=\"{{asset('img/testimonials/testimonials-4.jpg')}}\" class=\"testimonial-img\" alt=\"\">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <p>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                </p>
                <img src=\"{{asset('img/testimonials/testimonials-5.jpg')}}\" class=\"testimonial-img\" alt=\"\">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class=\"swiper-pagination\"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->


 

    <!-- ======= Pricing Section ======= -->
    <section id=\"pricing\" class=\"pricing section-bg\">
      <div class=\"container\">

        <div class=\"section-title\" data-aos=\"fade-up\">
          <h2>Pricing</h2>
          <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fuga eum quidem</p>
        </div>

        <div class=\"row d-flex justify-content-center\">

          <div class=\"col-lg-4 col-md-6 col-sm-12\">
            <div class=\"box\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
              <h3>Reserva</h3>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class=\"na\">Pharetra massa</li>
                <li class=\"na\">Massa ultricies mi</li>
              </ul>
              <div class=\"btn-wrap\">
                <a href=\"#\" class=\"btn-buy\">Buy Now</a>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 col-sm-12 mt-4 mt-md-0\">
            <div class=\"box recommended\" data-aos=\"zoom-in\">
              <span class=\"recommended-badge\">Recommended</span>
              <h3>Rutina</h3>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class=\"na\">Massa ultricies mi</li>
              </ul>
              <div class=\"btn-wrap\">
                <a href=\"#\" class=\"btn-buy\">Buy Now</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id=\"faq\" class=\"faq\">
      <div class=\"container\">

        <div class=\"section-title\" data-aos=\"fade-up\">
          <h2>Frequently Asked Questions</h2>
        </div>

        <ul class=\"faq-list\">

          <li data-aos=\"fade-up\">
            <a data-bs-toggle=\"collapse\" class=\"collapsed\" data-bs-target=\"#faq1\">Non consectetur a erat nam at lectus urna duis? <i class=\"bx bx-chevron-down icon-show\"></i><i class=\"bx bx-x icon-close\"></i></a>
            <div id=\"faq1\" class=\"collapse\" data-bs-parent=\".faq-list\">
              <p>
                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
              </p>
            </div>
          </li>

          <li data-aos=\"fade-up\" data-aos-delay=\"100\">
            <a data-bs-toggle=\"collapse\" data-bs-target=\"#faq2\" class=\"collapsed\">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class=\"bx bx-chevron-down icon-show\"></i><i class=\"bx bx-x icon-close\"></i></a>
            <div id=\"faq2\" class=\"collapse\" data-bs-parent=\".faq-list\">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li data-aos=\"fade-up\" data-aos-delay=\"200\">
            <a data-bs-toggle=\"collapse\" data-bs-target=\"#faq3\" class=\"collapsed\">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class=\"bx bx-chevron-down icon-show\"></i><i class=\"bx bx-x icon-close\"></i></a>
            <div id=\"faq3\" class=\"collapse\" data-bs-parent=\".faq-list\">
              <p>
                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
              </p>
            </div>
          </li>

          <li data-aos=\"fade-up\" data-aos-delay=\"300\">
            <a data-bs-toggle=\"collapse\" data-bs-target=\"#faq4\" class=\"collapsed\">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class=\"bx bx-chevron-down icon-show\"></i><i class=\"bx bx-x icon-close\"></i></a>
            <div id=\"faq4\" class=\"collapse\" data-bs-parent=\".faq-list\">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li data-aos=\"fade-up\" data-aos-delay=\"400\">
            <a data-bs-toggle=\"collapse\" data-bs-target=\"#faq5\" class=\"collapsed\">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class=\"bx bx-chevron-down icon-show\"></i><i class=\"bx bx-x icon-close\"></i></a>
            <div id=\"faq5\" class=\"collapse\" data-bs-parent=\".faq-list\">
              <p>
                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
              </p>
            </div>
          </li>

          <li data-aos=\"fade-up\" data-aos-delay=\"500\">
            <a data-bs-toggle=\"collapse\" data-bs-target=\"#faq6\" class=\"collapsed\">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class=\"bx bx-chevron-down icon-show\"></i><i class=\"bx bx-x icon-close\"></i></a>
            <div id=\"faq6\" class=\"collapse\" data-bs-parent=\".faq-list\">
              <p>
                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id=\"contact\" class=\"contact section-bg\">
      <div class=\"container\">

        <div class=\"section-title\">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fuga eum quidem</p>
        </div>

        <div class=\"row\">

          <div class=\"col-lg-4\">
            <div class=\"info d-flex flex-column justify-content-center\" data-aos=\"fade-right\">
              <div class=\"address\">
                <i class=\"bi bi-geo-alt\"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street,<br>New York, NY 535022</p>
              </div>

              <div class=\"email\">
                <i class=\"bi bi-envelope\"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class=\"phone\">
                <i class=\"bi bi-phone\"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>

          <div class=\"col-lg-8 mt-5 mt-lg-0\">

            <form action=\"forms/contact.php\" method=\"post\" role=\"form\" class=\"php-email-form\" data-aos=\"fade-left\">
              <div class=\"row\">
                <div class=\"col-md-6 form-group\">
                  <input type=\"text\" name=\"name\" class=\"form-control\" id=\"name\" placeholder=\"Your Name\" required>
                </div>
                <div class=\"col-md-6 form-group mt-3 mt-md-0\">
                  <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"Your Email\" required>
                </div>
              </div>
              <div class=\"form-group mt-3\">
                <input type=\"text\" class=\"form-control\" name=\"subject\" id=\"subject\" placeholder=\"Subject\" required>
              </div>
              <div class=\"form-group mt-3\">
                <textarea class=\"form-control\" name=\"message\" rows=\"5\" placeholder=\"Message\" required></textarea>
              </div>
              <div class=\"my-3\">
                <div class=\"loading\">Loading</div>
                <div class=\"error-message\"></div>
                <div class=\"sent-message\">Your message has been sent. Thank you!</div>
              </div>
              <div class=\"text-center\"><button type=\"submit\">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
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
                            <li class=\"mt-0\">Clientes</li>
                            <li>Servicios de clientes</li>
                        </ul>
                    </div>
                    <div class=\"col-sm-3 my-sm-0 mt-5\">
                        <ul class=\"list-unstyled\">
                            <li class=\"mt-0\">Compañia</li>
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

  <!-- Template Main JS File -->
<script src=\"{{asset('js/jquery-3.3.1.min.js')}}\"></script>
    <script src=\"{{asset('js/main.js')}}\"></script>
    <script src=\"{{asset('js/search.js')}}\"></script>
    <script src=\"{{asset('js/canales.js')}}\"></script>


</body>

</html>
", "index/index.html.twig", "C:\\Users\\Kazu\\Desktop\\StromZu\\templates\\index\\index.html.twig");
    }
}

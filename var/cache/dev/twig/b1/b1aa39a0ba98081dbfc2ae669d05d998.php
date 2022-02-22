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

/* index/footerIndex.html.twig */
class __TwigTemplate_7a515cfbef4992d4e621b404eb637a5e extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/footerIndex.html.twig"));

        // line 1
        echo "  <!-- ======= Footer ======= -->
  <footer id=\"footer\">

    <div class=\"footer-top\">

      <div class=\"container\">

        <div class=\"row justify-content-center\">
          <div class=\"col-lg-6\">
            <a href=\"#header\" class=\"scrollto footer-logo\"><img src=\"assets/img/hero-logo.png\" alt=\"\"></a>
            <h3>Knight</h3>
            <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
          </div>
        </div>

        <div class=\"row footer-newsletter justify-content-center\">
          <div class=\"col-lg-6\">
            <form action=\"\" method=\"post\">
              <input type=\"email\" name=\"email\" placeholder=\"Enter your Email\"><input type=\"submit\" value=\"Subscribe\">
            </form>
          </div>
        </div>

        <div class=\"social-links\">
          <a href=\"#\" class=\"twitter\"><i class=\"bx bxl-twitter\"></i></a>
          <a href=\"#\" class=\"facebook\"><i class=\"bx bxl-facebook\"></i></a>
          <a href=\"#\" class=\"instagram\"><i class=\"bx bxl-instagram\"></i></a>
          <a href=\"#\" class=\"google-plus\"><i class=\"bx bxl-skype\"></i></a>
          <a href=\"#\" class=\"linkedin\"><i class=\"bx bxl-linkedin\"></i></a>
        </div>

      </div>
    </div>

    <div class=\"container footer-bottom clearfix\">
      <div class=\"copyright\">
        &copy; Copyright <strong><span>Knight</span></strong>. All Rights Reserved
      </div>
      <div class=\"credits\">
        Designed by <a href=\"https://bootstrapmade.com/\" target=\"_blank\">BootstrapMade</a>
      </div>
      <div class=\"credits\">
        Distributed by <a href=\"https://themewagon.com/\" target=\"_blank\">Themewagon</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "index/footerIndex.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("  <!-- ======= Footer ======= -->
  <footer id=\"footer\">

    <div class=\"footer-top\">

      <div class=\"container\">

        <div class=\"row justify-content-center\">
          <div class=\"col-lg-6\">
            <a href=\"#header\" class=\"scrollto footer-logo\"><img src=\"assets/img/hero-logo.png\" alt=\"\"></a>
            <h3>Knight</h3>
            <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
          </div>
        </div>

        <div class=\"row footer-newsletter justify-content-center\">
          <div class=\"col-lg-6\">
            <form action=\"\" method=\"post\">
              <input type=\"email\" name=\"email\" placeholder=\"Enter your Email\"><input type=\"submit\" value=\"Subscribe\">
            </form>
          </div>
        </div>

        <div class=\"social-links\">
          <a href=\"#\" class=\"twitter\"><i class=\"bx bxl-twitter\"></i></a>
          <a href=\"#\" class=\"facebook\"><i class=\"bx bxl-facebook\"></i></a>
          <a href=\"#\" class=\"instagram\"><i class=\"bx bxl-instagram\"></i></a>
          <a href=\"#\" class=\"google-plus\"><i class=\"bx bxl-skype\"></i></a>
          <a href=\"#\" class=\"linkedin\"><i class=\"bx bxl-linkedin\"></i></a>
        </div>

      </div>
    </div>

    <div class=\"container footer-bottom clearfix\">
      <div class=\"copyright\">
        &copy; Copyright <strong><span>Knight</span></strong>. All Rights Reserved
      </div>
      <div class=\"credits\">
        Designed by <a href=\"https://bootstrapmade.com/\" target=\"_blank\">BootstrapMade</a>
      </div>
      <div class=\"credits\">
        Distributed by <a href=\"https://themewagon.com/\" target=\"_blank\">Themewagon</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>
", "index/footerIndex.html.twig", "C:\\Users\\Kazu\\Desktop\\StromZu\\templates\\index\\footerIndex.html.twig");
    }
}

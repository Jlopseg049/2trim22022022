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

/* canales/canalesCabecera.html.twig */
class __TwigTemplate_a56c826c92eaa1c526948bf72bb7cf21 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "canales/canalesCabecera.html.twig"));

        // line 1
        echo "
<section id=\"portfolio\" class=\"portfolio\">
    <div class=\"container\">

        <div class=\"section-title aos-init aos-animate\" data-aos=\"fade-up\">
          <h2>Canales</h2>
          <p>Encuentra a tus creadores de contenidos favoritos, aquí en StromZu.com</p>
        </div>

        <div class=\"row aos-init aos-animate\" data-aos=\"fade-up\" data-aos-delay=\"100\">
          <div class=\"col-lg-12 d-flex justify-content-center\">
            <ul id=\"portfolio-flters\">
            <li>
              <button id=\"vueltaInicio\" class=\"btn btn-outline-success h-100\" type=\"submit\">Volver a inicio</button>
            </li>
              <li data-filter=\"*\" class=\"filter-active\">
                <input id=\"buscador\" class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
              </li>
            </ul>
          </div>
        </div>



        <div id=\"bloqueCanales\" class=\"row portfolio-container\" data-aos=\"fade-up\" data-aos-delay=\"200\">
    
        </div>
    </div>
</section>  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "canales/canalesCabecera.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<section id=\"portfolio\" class=\"portfolio\">
    <div class=\"container\">

        <div class=\"section-title aos-init aos-animate\" data-aos=\"fade-up\">
          <h2>Canales</h2>
          <p>Encuentra a tus creadores de contenidos favoritos, aquí en StromZu.com</p>
        </div>

        <div class=\"row aos-init aos-animate\" data-aos=\"fade-up\" data-aos-delay=\"100\">
          <div class=\"col-lg-12 d-flex justify-content-center\">
            <ul id=\"portfolio-flters\">
            <li>
              <button id=\"vueltaInicio\" class=\"btn btn-outline-success h-100\" type=\"submit\">Volver a inicio</button>
            </li>
              <li data-filter=\"*\" class=\"filter-active\">
                <input id=\"buscador\" class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
              </li>
            </ul>
          </div>
        </div>



        <div id=\"bloqueCanales\" class=\"row portfolio-container\" data-aos=\"fade-up\" data-aos-delay=\"200\">
    
        </div>
    </div>
</section>  ", "canales/canalesCabecera.html.twig", "C:\\Users\\alumno\\Desktop\\StromZu\\templates\\canales\\canalesCabecera.html.twig");
    }
}

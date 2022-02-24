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

/* canales/canales.html.twig */
class __TwigTemplate_7d967c5e4218f80505a26bc8e983056f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "canales/canales.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["canales"]) || array_key_exists("canales", $context) ? $context["canales"] : (function () { throw new RuntimeError('Variable "canales" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["canal"]) {
            // line 2
            echo "          <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
            <div class=\"portfolio-wrap\">
          ";
            // line 4
            if ((twig_get_attribute($this->env, $this->source, $context["canal"], "foto", [], "any", false, false, false, 4) == "")) {
                // line 5
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/profiler/noprofile.jpg"), "html", null, true);
                echo "\" class=\"img h-100 w-100 \" alt=\"noprofile\">
              ";
            } else {
                // line 7
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/profiler/" . twig_get_attribute($this->env, $this->source, $context["canal"], "foto", [], "any", false, false, false, 7))), "html", null, true);
                echo "\" class=\"img h-100 w-100\" alt=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["canal"], "foto", [], "any", false, false, false, 7), "html", null, true);
                echo ">

          ";
            }
            // line 10
            echo "              <div class=\"portfolio-info\">
                <h4>";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["canal"], "nombre", [], "any", false, false, false, 11), "html", null, true);
            echo "</h4>
                <p>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["canal"], "username", [], "any", false, false, false, 12), "html", null, true);
            echo "</p>
                <div class=\"portfolio-links\">
                  <a href=";
            // line 14
            echo twig_escape_filter($this->env, ("/stream/" . twig_get_attribute($this->env, $this->source, $context["canal"], "author_id", [], "any", false, false, false, 14)), "html", null, true);
            echo " data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Web 3\"><i class=\"fa fa-eye\"></i></a>
                </div>
              </div>
            </div>
          </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['canal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "canales/canales.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 14,  72 => 12,  68 => 11,  65 => 10,  56 => 7,  50 => 5,  48 => 4,  44 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for canal in canales %}
          <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
            <div class=\"portfolio-wrap\">
          {% if canal.foto == \"\" %}
                <img src=\"{{asset('img/profiler/noprofile.jpg')}}\" class=\"img h-100 w-100 \" alt=\"noprofile\">
              {% else %}
                <img src=\"{{asset('img/profiler/' ~ canal.foto)}}\" class=\"img h-100 w-100\" alt={{canal.foto}}>

          {% endif %}
              <div class=\"portfolio-info\">
                <h4>{{canal.nombre}}</h4>
                <p>{{canal.username}}</p>
                <div class=\"portfolio-links\">
                  <a href={{\"/stream/\" ~ canal.author_id}} data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Web 3\"><i class=\"fa fa-eye\"></i></a>
                </div>
              </div>
            </div>
          </div>
    {% endfor %}", "canales/canales.html.twig", "C:\\Users\\Kazu\\Desktop\\StromZu\\templates\\canales\\canales.html.twig");
    }
}

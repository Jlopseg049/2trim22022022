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

/* index/headerIndex.html.twig */
class __TwigTemplate_825945d01773310c1ad0aa3c2e80f652 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/headerIndex.html.twig"));

        // line 1
        echo "    <header class=\"header\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-2\">
                    <div class=\"header__logo\">
                        <a href=\"./index.html\"><img src=\" ";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                    </div>
                </div>
                <div class=\"col-lg-10\">
                    <div class=\"header__nav__option\">
                        <nav class=\"header__nav__menu mobile-menu\">
                            <ul>
                                <li class=\"active\"><a href=\"./index.html\">Home</a></li>
                                <li><a href=\"./about.html\">About</a></li>
                                <li><a href=\"./portfolio.html\">Portfolio</a></li>
                                <li><a href=\"./services.html\">Services</a></li>
                                <li><a href=\"#\">Pages</a>
                                    <ul class=\"dropdown\">
                                        <li><a href=\"./about.html\">About</a></li>
                                        <li><a href=\"./portfolio.html\">Portfolio</a></li>
                                        <li><a href=\"./blog.html\">Blog</a></li>
                                        <li><a href=\"./blog-details.html\">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"./contact.html\">Contact</a></li>
                                ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26)) {
            // line 27
            echo "                                    <li><a href=\"#\">Hola ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "userName", [], "any", false, false, false, 27), "html", null, true);
            echo "</a></li>
                                    ";
        } else {
            // line 29
            echo "                                    
                                ";
        }
        // line 31
        echo "                            </ul>
                        </nav>
                        <div class=\"header__nav__social\">
                            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-youtube-play\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id=\"mobile-menu-wrap\"></div>
        </div>
    </header>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "index/headerIndex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 31,  78 => 29,  72 => 27,  70 => 26,  47 => 6,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <header class=\"header\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-2\">
                    <div class=\"header__logo\">
                        <a href=\"./index.html\"><img src=\" {{ asset('img/logo.png') }}\" alt=\"\"></a>
                    </div>
                </div>
                <div class=\"col-lg-10\">
                    <div class=\"header__nav__option\">
                        <nav class=\"header__nav__menu mobile-menu\">
                            <ul>
                                <li class=\"active\"><a href=\"./index.html\">Home</a></li>
                                <li><a href=\"./about.html\">About</a></li>
                                <li><a href=\"./portfolio.html\">Portfolio</a></li>
                                <li><a href=\"./services.html\">Services</a></li>
                                <li><a href=\"#\">Pages</a>
                                    <ul class=\"dropdown\">
                                        <li><a href=\"./about.html\">About</a></li>
                                        <li><a href=\"./portfolio.html\">Portfolio</a></li>
                                        <li><a href=\"./blog.html\">Blog</a></li>
                                        <li><a href=\"./blog-details.html\">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"./contact.html\">Contact</a></li>
                                {% if app.user %}
                                    <li><a href=\"#\">Hola {{app.user.userName}}</a></li>
                                    {% else %}
                                    
                                {% endif %}
                            </ul>
                        </nav>
                        <div class=\"header__nav__social\">
                            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-youtube-play\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id=\"mobile-menu-wrap\"></div>
        </div>
    </header>

", "index/headerIndex.html.twig", "C:\\Users\\Kazu\\Desktop\\StromZu\\templates\\index\\headerIndex.html.twig");
    }
}

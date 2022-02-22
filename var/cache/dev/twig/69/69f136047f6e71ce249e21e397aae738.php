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

/* canales/canalAdd.html.twig */
class __TwigTemplate_18baf995fbc7f556784c55036139dda8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'head' => [$this, 'block_head'],
            'javascripts' => [$this, 'block_javascripts'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "canales/canalAdd.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "canales/canalAdd.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo " StromZu
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 7
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 11
        echo "    <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "
<!-- Custom Theme files -->
<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/register.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href=\"//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i\" rel=\"stylesheet\">
<!-- //web font -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 23
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "flashes", [0 => "verify_email_error"], "method", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 25
            echo "        <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flashError"], "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashError'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    <div class=\"container\">
    
\t<!-- main -->
\t<div class=\"main-w3layouts wrapper \">
\t\t<h1>Edición de usuario</h1>
\t\t<div class=\"main-agileinfo\">
\t\t\t<div class=\"agileits-top\">
                    ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addCanalForm"]) || array_key_exists("addCanalForm", $context) ? $context["addCanalForm"] : (function () { throw new RuntimeError('Variable "addCanalForm" does not exist.', 34, $this->source); })()), 'form_start', ["attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addCanalForm"]) || array_key_exists("addCanalForm", $context) ? $context["addCanalForm"] : (function () { throw new RuntimeError('Variable "addCanalForm" does not exist.', 35, $this->source); })()), "nombre", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control text"]]);
        echo "
                            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addCanalForm"]) || array_key_exists("addCanalForm", $context) ? $context["addCanalForm"] : (function () { throw new RuntimeError('Variable "addCanalForm" does not exist.', 36, $this->source); })()), "descripcion", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control img"]]);
        echo "
                            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addCanalForm"]) || array_key_exists("addCanalForm", $context) ? $context["addCanalForm"] : (function () { throw new RuntimeError('Variable "addCanalForm" does not exist.', 37, $this->source); })()), "precio", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control text"]]);
        echo "           
\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t</div>
\t\t\t\t\t<input type=\"submit\" value=\"Añadir canal\">
                    ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addCanalForm"]) || array_key_exists("addCanalForm", $context) ? $context["addCanalForm"] : (function () { throw new RuntimeError('Variable "addCanalForm" does not exist.', 41, $this->source); })()), 'form_end');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<ul class=\"colorlib-bubbles\">
\t\t\t<li></li>
\t\t\t<li></li>
\t\t\t<li></li>
\t\t\t<li></li>
\t\t\t<li></li>
\t\t\t<li></li>
\t\t\t<li></li>
\t\t\t<li></li>
\t\t\t<li></li>
\t\t\t<li></li>
\t\t</ul>
\t</div>
\t<!-- //main -->
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "canales/canalAdd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 41,  169 => 37,  165 => 36,  161 => 35,  157 => 34,  148 => 27,  139 => 25,  134 => 24,  127 => 23,  114 => 17,  110 => 15,  103 => 14,  94 => 11,  87 => 10,  78 => 7,  71 => 6,  63 => 4,  56 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("            {% extends 'base.html.twig' %}

{% block title %}
 StromZu
{% endblock %}
{% block head %}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
{% endblock %}
{% block javascripts %}
    <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

{% endblock %}
{% block stylesheets %}

<!-- Custom Theme files -->
<link href=\"{{asset('styles/register.css')}}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href=\"//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i\" rel=\"stylesheet\">
<!-- //web font -->
{% endblock %}
{% block body %}
    {% for flashError in app.flashes('verify_email_error') %}
        <div class=\"alert alert-danger\" role=\"alert\">{{ flashError }}</div>
    {% endfor %}
    <div class=\"container\">
    
\t<!-- main -->
\t<div class=\"main-w3layouts wrapper \">
\t\t<h1>Edición de usuario</h1>
\t\t<div class=\"main-agileinfo\">
\t\t\t<div class=\"agileits-top\">
                    {{ form_start(addCanalForm,{'attr':{'class':'form-control'}}) }}
                            {{ form_widget(addCanalForm.nombre,{'attr':{'class':'form-control text'}}) }}
                            {{ form_widget(addCanalForm.descripcion,{'attr':{'class':'form-control img'}}) }}
                            {{ form_widget(addCanalForm.precio,{'attr':{'class':'form-control text'}})}}           
\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t</div>
\t\t\t\t\t<input type=\"submit\" value=\"Añadir canal\">
                    {{ form_end(addCanalForm) }}
\t\t\t</div>
\t\t</div>
\t\t<ul class=\"colorlib-bubbles\">
\t\t\t<li></li>
\t\t\t<li></li>
\t\t\t<li></li>
\t\t\t<li></li>
\t\t\t<li></li>
\t\t\t<li></li>
\t\t\t<li></li>
\t\t\t<li></li>
\t\t\t<li></li>
\t\t\t<li></li>
\t\t</ul>
\t</div>
\t<!-- //main -->
</body>
</html>
{% endblock %}
", "canales/canalAdd.html.twig", "C:\\Users\\Kazu\\Desktop\\StromZu\\templates\\canales\\canalAdd.html.twig");
    }
}

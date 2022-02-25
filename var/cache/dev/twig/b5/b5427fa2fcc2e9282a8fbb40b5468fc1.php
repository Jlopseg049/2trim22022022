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

/* usuarios/edit.html.twig */
class __TwigTemplate_099fdd060d6ee593940a3b21d5bf64a8 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "usuarios/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "usuarios/edit.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo " StromZu
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 8
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "    <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "
<!-- Custom Theme files -->
<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/register.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href=\"//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i\" rel=\"stylesheet\">
<!-- //web font -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 24
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "flashes", [0 => "verify_email_error"], "method", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 26
            echo "        <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flashError"], "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashError'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    <div class=\"container\">
    
\t<!-- main -->
\t<div class=\"main-w3layouts wrapper \">
\t\t<h1>Edición de usuario</h1>
\t\t<div class=\"main-agileinfo\">
\t\t\t<div class=\"agileits-top\">
                    ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["editUserForm"]) || array_key_exists("editUserForm", $context) ? $context["editUserForm"] : (function () { throw new RuntimeError('Variable "editUserForm" does not exist.', 35, $this->source); })()), 'form_start', ["attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["editUserForm"]) || array_key_exists("editUserForm", $context) ? $context["editUserForm"] : (function () { throw new RuntimeError('Variable "editUserForm" does not exist.', 36, $this->source); })()), "username", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control text"]]);
        echo "
                            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["editUserForm"]) || array_key_exists("editUserForm", $context) ? $context["editUserForm"] : (function () { throw new RuntimeError('Variable "editUserForm" does not exist.', 37, $this->source); })()), "foto", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control img"]]);
        echo "
                            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["editUserForm"]) || array_key_exists("editUserForm", $context) ? $context["editUserForm"] : (function () { throw new RuntimeError('Variable "editUserForm" does not exist.', 38, $this->source); })()), "name", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control text"]]);
        echo "
                            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["editUserForm"]) || array_key_exists("editUserForm", $context) ? $context["editUserForm"] : (function () { throw new RuntimeError('Variable "editUserForm" does not exist.', 39, $this->source); })()), "ap1", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control text"]]);
        echo "
                            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["editUserForm"]) || array_key_exists("editUserForm", $context) ? $context["editUserForm"] : (function () { throw new RuntimeError('Variable "editUserForm" does not exist.', 40, $this->source); })()), "ap2", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control text"]]);
        echo "
\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t</div>
\t\t\t\t\t<input type=\"submit\" value=\"Confirmar cambios\">
                    ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["editUserForm"]) || array_key_exists("editUserForm", $context) ? $context["editUserForm"] : (function () { throw new RuntimeError('Variable "editUserForm" does not exist.', 44, $this->source); })()), 'form_end');
        echo "
\t\t\t\t<p><a href=\"/\">Volver a Inicio</a></p>
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
        return "usuarios/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 44,  177 => 40,  173 => 39,  169 => 38,  165 => 37,  161 => 36,  157 => 35,  148 => 28,  139 => 26,  134 => 25,  127 => 24,  114 => 18,  110 => 16,  103 => 15,  94 => 12,  87 => 11,  78 => 8,  71 => 7,  63 => 5,  56 => 4,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
            {% extends 'base.html.twig' %}

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
                    {{ form_start(editUserForm,{'attr':{'class':'form-control'}}) }}
                            {{ form_widget(editUserForm.username,{'attr':{'class':'form-control text'}}) }}
                            {{ form_widget(editUserForm.foto,{'attr':{'class':'form-control img'}}) }}
                            {{ form_widget(editUserForm.name,{'attr':{'class':'form-control text'}})}}
                            {{ form_widget(editUserForm.ap1,{'attr':{'class':'form-control text'}}) }}
                            {{ form_widget(editUserForm.ap2,{'attr':{'class':'form-control text'}}) }}
\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t</div>
\t\t\t\t\t<input type=\"submit\" value=\"Confirmar cambios\">
                    {{ form_end(editUserForm) }}
\t\t\t\t<p><a href=\"/\">Volver a Inicio</a></p>
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



", "usuarios/edit.html.twig", "C:\\Users\\Kazu\\Desktop\\StromZu\\templates\\usuarios\\edit.html.twig");
    }
}

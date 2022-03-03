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

/* registration/register.html.twig */
class __TwigTemplate_9ea14b97b10a93a1958b35d6797ace5a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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
    <!-- main -->
\t<div class=\"main-w3layouts wrapper mt-0\">
\t\t<h1>Registro</h1>
\t\t<div class=\"main-agileinfo\">
\t\t\t<div class=\"agileits-top\">
                    ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 33, $this->source); })()), 'form_start', ["attr" => ["class" => "form-control", "id" => "registration_form"]]);
        echo "
                            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control text email"]]);
        echo "
                            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), "username", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control text"]]);
        echo "
                            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 36, $this->source); })()), "foto", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control img"]]);
        echo "
                            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "name", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control text"]]);
        echo "
                            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 38, $this->source); })()), "ap1", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control text"]]);
        echo "
                            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 39, $this->source); })()), "ap2", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control text"]]);
        echo "
                            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 40, $this->source); })()), "password", [], "any", false, false, false, 40), "first", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control text w3lpass"]]);
        echo "
                            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 41, $this->source); })()), "password", [], "any", false, false, false, 41), "second", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control text w3lpass"]]);
        echo "
                    <div class=\"wthree-text\">             
                        <label class=\"anim\">
                            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 44, $this->source); })()), "agreeTerms", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-check checkbox"]]);
        echo "
\t\t\t\t\t\t\t<span>Estoy de acuerdo con los términos y condiciones<br></span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t</div>
\t\t\t\t\t<input type=\"submit\" id=\"registerSubmit\" value=\"Registrate\">
                    ";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 50, $this->source); })()), 'form_end');
        echo "
\t\t\t\t<p>¿Ya tienes cuenta? <a href=\"login\"> ¡Inicia sesión ya!</a></p>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t<p><a href=\"/\">Vuelta a inicio</a></p>

</div>
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
\t<script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js\" integrity=\"sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
\t<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/validator.js"), "html", null, true);
        echo "\"></script>
\t<!-- //main -->
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 72,  226 => 70,  203 => 50,  194 => 44,  188 => 41,  184 => 40,  180 => 39,  176 => 38,  172 => 37,  168 => 36,  164 => 35,  160 => 34,  156 => 33,  148 => 27,  139 => 25,  134 => 24,  127 => 23,  114 => 17,  110 => 15,  103 => 14,  94 => 11,  87 => 10,  78 => 7,  71 => 6,  63 => 4,  56 => 3,  39 => 1,);
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
    <!-- main -->
\t<div class=\"main-w3layouts wrapper mt-0\">
\t\t<h1>Registro</h1>
\t\t<div class=\"main-agileinfo\">
\t\t\t<div class=\"agileits-top\">
                    {{ form_start(registrationForm,{'attr':{'class':'form-control','id':'registration_form'}}) }}
                            {{ form_widget(registrationForm.email,{'attr':{'class':'form-control text email'}}) }}
                            {{ form_widget(registrationForm.username,{'attr':{'class':'form-control text'}}) }}
                            {{ form_widget(registrationForm.foto,{'attr':{'class':'form-control img'}}) }}
                            {{ form_widget(registrationForm.name,{'attr':{'class':'form-control text'}}) }}
                            {{ form_widget(registrationForm.ap1,{'attr':{'class':'form-control text'}}) }}
                            {{ form_widget(registrationForm.ap2,{'attr':{'class':'form-control text'}}) }}
                            {{ form_widget(registrationForm.password.first, {'attr':{'class':'form-control text w3lpass'}}) }}
                            {{ form_widget(registrationForm.password.second, {'attr':{'class':'form-control text w3lpass'}}) }}
                    <div class=\"wthree-text\">             
                        <label class=\"anim\">
                            {{ form_widget(registrationForm.agreeTerms,{'attr':{'class':'form-check checkbox'}}) }}
\t\t\t\t\t\t\t<span>Estoy de acuerdo con los términos y condiciones<br></span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t</div>
\t\t\t\t\t<input type=\"submit\" id=\"registerSubmit\" value=\"Registrate\">
                    {{ form_end(registrationForm) }}
\t\t\t\t<p>¿Ya tienes cuenta? <a href=\"login\"> ¡Inicia sesión ya!</a></p>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t<p><a href=\"/\">Vuelta a inicio</a></p>

</div>
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
\t<script src=\"{{asset('js/jquery-3.3.1.min.js')}}\"></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js\" integrity=\"sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
\t<script src=\"{{asset('js/validator.js')}}\"></script>
\t<!-- //main -->
</body>
</html>
{% endblock %}


", "registration/register.html.twig", "C:\\Users\\Kazu\\Desktop\\StromZu\\templates\\registration\\register.html.twig");
    }
}

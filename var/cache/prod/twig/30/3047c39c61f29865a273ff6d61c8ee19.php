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
class __TwigTemplate_8835cc13019faa5c21a96950918aa021 extends Template
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
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link href='";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/favicon.png"), "html", null, true);
        echo "' rel='shortcut icon' type='image/x-icon'/> 
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/register.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <title>S'inscrire</title>
</head>
<body>

";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_start');
        echo "
<div class=\"container\">
    <h1 class=\"h3 mb-3 font-weight-normal\">S'INSCRIRE</h1>
    <div class=\"row\">
        <label class=\"required\">Email</label>
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "email", [], "any", false, false, false, 18), 'widget');
        echo "
    </div>
    <div class=\"row\">
        <label class=\"required\">Nom / Prénom</label>
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "username", [], "any", false, false, false, 22), 'widget');
        echo "
    </div>
    <div class=\"row\">
        <label class=\"required\">Mot de passe</label>
        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 26), 'widget');
        echo "
    </div>
    <div class=\"row\">
        <label>Photo de profil</label>
        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "profilPicture", [], "any", false, false, false, 30), 'widget');
        echo "
    </div>
    <div class=\"checkbox\" class=\"label-checkbox\">
        <label>
            <input type=\"checkbox\" required=\"required\" class=\"checkbox-input\" />En cochant vous acceptez les <a href=\"/conditions-utilisation\" target=\"_blank\">Conditions Générales d'Utilisation de SAVED</a>
        </label>
    </div> 
    <div class=\"row-last\">
        <button type=\"submit\" class=\"btn-submit\">S'inscrire</button>
    </div>
</div>
<div class=\"container aside\">
    <div class=\"img-container-aside\">
        <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/saved_svg_blanc.svg"), "html", null, true);
        echo "\" alt=\"logo\" class=\"logo-login\">
        <span></span>
        <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/logo_blanc.svg"), "html", null, true);
        echo "\" alt=\"logo\" class=\"logo-login\">
    </div>
</div>

    ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_end');
        echo "
    ";
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
        return array (  114 => 49,  107 => 45,  102 => 43,  86 => 30,  79 => 26,  72 => 22,  65 => 18,  57 => 13,  49 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "registration/register.html.twig", "/home/cdosegxi/saved/saved/templates/registration/register.html.twig");
    }
}

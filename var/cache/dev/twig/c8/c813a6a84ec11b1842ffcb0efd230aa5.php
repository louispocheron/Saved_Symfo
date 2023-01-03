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

/* security/login.html.twig */
class __TwigTemplate_d5d7bc5fd65b02815009e4160dd60a60 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <title>login</title>
</head>
<body>
    <div class=\"main-login\">
        <div class=\"form-container\">
            <form method=\"post\" class=\"form-login\">
              <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/LOGO_COLORFUL.svg"), "html", null, true);
        echo "\" alt=\"logo\" class=\"logo-saved\">
                <h1 class=\"h3 mb-3 font-weight-normal\">SE CONNECTER</h1>
                <div class=\"input-container\">
                    ";
        // line 18
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 18, $this->source); })())) {
            // line 19
            echo "                        <div class=\"form-error\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 19, $this->source); })()), "messageKey", [], "any", false, false, false, 19), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 19, $this->source); })()), "messageData", [], "any", false, false, false, 19), "security"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 21
        echo "                    <label for=\"inputUsername\" class=\"label-input-password\">Email</label>
                    <input type=\"text\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "\" name=\"username\" id=\"inputUsername\" class=\"form-control inputlogin\" autocomplete=\"username\" required autofocus placeholder=\"Adresse email\">
                </div>
                <div class=\"input-container\">
                    <label for=\"inputPassword\" class=\"label-input-password\">Mot de passe</label>
                    
                    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control inputlogin\" autocomplete=\"current-password\" required placeholder=\"Mot de passe\">
                    <input type=\"hidden\" name=\"_csrf_token\"
                        value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                    >
                </div>
                <div class=\"checkbox\" class=\"label-checkbox\">
                    <label>
                        <input type=\"checkbox\" name=\"_remember_me\" class=\"checkbox-input\"> Se souvenir de moi
                    </label>
                </div> 
            
                <div class=\"btn-submit\">
                    <button class=\"btn-signin\" type=\"submit\">
                        Se connecter
                    </button>
                    <a class=\"register-btn\" href='/register'>
                        S'inscrire
                    </a>
                </div>
                <div class=\"forgot-password\">
                    <a href=\"/reset-password\" class=\"href-login\">mot de passe oublié ?</a>
                </div>
            </form>
        </div>
        <div class=\"form-container aside\">
            <h1>Bienvenue sur Saved !</h1>
            <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/logo_blanc.svg"), "html", null, true);
        echo "\" alt=\"logo\" class=\"logo-login\">
            <p>Votre plateforme qui simplifie vos démarches bénévoles !</p>
        </div>
    </div>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 53,  92 => 29,  82 => 22,  79 => 21,  73 => 19,  71 => 18,  65 => 15,  55 => 8,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link href='{{ asset(\"assets/favicon.png\")}}' rel='shortcut icon' type='image/x-icon'/> 
    <link href=\"{{ asset('css/login.css') }}\" rel=\"stylesheet\">
    <title>login</title>
</head>
<body>
    <div class=\"main-login\">
        <div class=\"form-container\">
            <form method=\"post\" class=\"form-login\">
              <img src=\"{{ asset('assets/LOGO_COLORFUL.svg') }}\" alt=\"logo\" class=\"logo-saved\">
                <h1 class=\"h3 mb-3 font-weight-normal\">SE CONNECTER</h1>
                <div class=\"input-container\">
                    {% if error %}
                        <div class=\"form-error\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                    {% endif %}
                    <label for=\"inputUsername\" class=\"label-input-password\">Email</label>
                    <input type=\"text\" value=\"{{ last_username }}\" name=\"username\" id=\"inputUsername\" class=\"form-control inputlogin\" autocomplete=\"username\" required autofocus placeholder=\"Adresse email\">
                </div>
                <div class=\"input-container\">
                    <label for=\"inputPassword\" class=\"label-input-password\">Mot de passe</label>
                    
                    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control inputlogin\" autocomplete=\"current-password\" required placeholder=\"Mot de passe\">
                    <input type=\"hidden\" name=\"_csrf_token\"
                        value=\"{{ csrf_token('authenticate') }}\"
                    >
                </div>
                <div class=\"checkbox\" class=\"label-checkbox\">
                    <label>
                        <input type=\"checkbox\" name=\"_remember_me\" class=\"checkbox-input\"> Se souvenir de moi
                    </label>
                </div> 
            
                <div class=\"btn-submit\">
                    <button class=\"btn-signin\" type=\"submit\">
                        Se connecter
                    </button>
                    <a class=\"register-btn\" href='/register'>
                        S'inscrire
                    </a>
                </div>
                <div class=\"forgot-password\">
                    <a href=\"/reset-password\" class=\"href-login\">mot de passe oublié ?</a>
                </div>
            </form>
        </div>
        <div class=\"form-container aside\">
            <h1>Bienvenue sur Saved !</h1>
            <img src=\"{{ asset('assets/logo_blanc.svg') }}\" alt=\"logo\" class=\"logo-login\">
            <p>Votre plateforme qui simplifie vos démarches bénévoles !</p>
        </div>
    </div>
</body>
</html>", "security/login.html.twig", "/mnt/c/Users/CDOS 21/Desktop/Saved_Symfo/templates/security/login.html.twig");
    }
}

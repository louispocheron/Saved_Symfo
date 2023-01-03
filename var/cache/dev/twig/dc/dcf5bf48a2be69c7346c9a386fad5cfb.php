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

/* base.html.twig */
class __TwigTemplate_5c94acc27a845b3424451876b350d3b0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link href='";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/favicon.png"), "html", null, true);
        echo "' rel='shortcut icon' type='image/x-icon'/> 
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css\" integrity=\"sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css\">
        <link rel=\"stylesheet\" href=\"https://unpkg.com/aos@next/dist/aos.css\" />


        ";
        // line 13
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "

        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/app.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

        ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "

    </head>
    <body>
        ";
        // line 24
        echo "        <div class=\"sidebar\">
            <a class=\"navbar-20 letter\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/logo_saved_letter.png"), "html", null, true);
        echo "\" alt=\"logo\" class=\"logo-main-site\"></a>
            <a class=\"navbar-20 full\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/logo_saved_full.png"), "html", null, true);
        echo "\" alt=\"logo\" class=\"secondary-logo\"></a>
            <ul class=\"navbar-ul\">
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"nav-links\">
                            <i class=\"fas fa-home nav-svg\"></i>
                            <span>Accueil</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("saisie");
        echo "\" class=\"nav-links\">
                            <i class=\"fas fa-pencil nav-svg\"></i>
                            <span>Saisie</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recapitulatif");
        echo "\" class=\"nav-links\">
                            <i class=\"fas fa-list nav-svg\"></i>
                            <span>Recapitulatif</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact_us");
        echo "\" class=\"nav-links\">
                            <i class=\"fa-solid fa-paper-plane nav-svg\"></i>
                            <span>Nous contacter</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("association");
        echo "\" class=\"nav-links\">
                            <i class=\"fa-solid fa-book nav-svg\"></i>
                            <span>Liste des associations</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register_association");
        echo "\" class=\"nav-links\">
                            <i class=\"fa-solid fa-circle-plus nav-svg\"></i>
                            <span>Enregistrer une association</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_faq");
        echo "\" class=\"nav-links\">
                            <i class=\"fa-solid fa-circle-question nav-svg\"></i>
                            <span>Infos pratiques</span>
                        </a>
                    </li>
                <li class=\"nav-item\">
                    <div>
                        <a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mon_compte");
        echo "\" class=\"nav-links\">
                            <i class=\"fas fa-user nav-svg\"></i>
                            <span>Mon compte</span>
                        </a>
                    </div>
                    <div>
                        <a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" class=\"nav-links down\">
                            <i class=\"fas fa-sign-out-alt nav-svg\"></i>
                            <span>Déconnexion</span>
                        </a>
                    </div>
                    </li>
            </ul>
        </div>
        ";
        // line 87
        echo "        <div class=\"header-desktop\">
        ";
        // line 89
        echo "
            <div class=\"main-assoc\">
                ";
        // line 91
        if ((twig_get_attribute($this->env, $this->source, (isset($context["Assoc"]) || array_key_exists("Assoc", $context) ? $context["Assoc"] : (function () { throw new RuntimeError('Variable "Assoc" does not exist.', 91, $this->source); })()), "lastAssoc", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 91, $this->source); })()), "user", [], "any", false, false, false, 91)], "method", false, false, false, 91) != false)) {
            // line 92
            echo "                    <h1 class=\"h1-assoc\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Assoc"]) || array_key_exists("Assoc", $context) ? $context["Assoc"] : (function () { throw new RuntimeError('Variable "Assoc" does not exist.', 92, $this->source); })()), "lastAssoc", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "user", [], "any", false, false, false, 92)], "method", false, false, false, 92), "name", [], "any", false, false, false, 92), "html", null, true);
            echo "</h1>
                    ";
            // line 93
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Assoc"]) || array_key_exists("Assoc", $context) ? $context["Assoc"] : (function () { throw new RuntimeError('Variable "Assoc" does not exist.', 93, $this->source); })()), "lastAssoc", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 93, $this->source); })()), "user", [], "any", false, false, false, 93)], "method", false, false, false, 93), "logo", [], "any", false, false, false, 93) != null)) {
                // line 94
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/build/logo_directory/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Assoc"]) || array_key_exists("Assoc", $context) ? $context["Assoc"] : (function () { throw new RuntimeError('Variable "Assoc" does not exist.', 94, $this->source); })()), "lastAssoc", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "user", [], "any", false, false, false, 94)], "method", false, false, false, 94), "logo", [], "any", false, false, false, 94))), "html", null, true);
                echo "\" alt=\"\" class=\"logo-main-assoc\" />
                    ";
            } else {
                // line 96
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/default.PNG"), "html", null, true);
                echo "\" class=\"logo-main-assoc\" />
                    ";
            }
            // line 98
            echo "                ";
        } else {
            // line 99
            echo "                    <h1 class=\"h1-assoc\">Vous n'avez pas encore d'association</h1>
                ";
        }
        // line 101
        echo "            </div>
                <div class=\"user-info\">
                    <div class=\"container-img-header\">
                        ";
        // line 104
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "user", [], "any", false, false, false, 104), "profilPicture", [], "any", false, false, false, 104) != null)) {
            // line 105
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/build/profil_picture/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 105, $this->source); })()), "user", [], "any", false, false, false, 105), "profilPicture", [], "any", false, false, false, 105))), "html", null, true);
            echo "\" alt=\"\" class=\"user-avatar\" />
                        ";
        } else {
            // line 107
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/profil_picture/default_profil.png"), "html", null, true);
            echo "\" alt=\"\" class=\"user-avatar default\" />
                        ";
        }
        // line 109
        echo "                    </div>
                    <div class=\"user-name\">
                        <h2 class=\"user-username\"> ";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 111, $this->source); })()), "user", [], "any", false, false, false, 111), "username", [], "any", false, false, false, 111), "html", null, true);
        echo " </h2> 
                        <h3 class=\"user-email\"> ";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 112, $this->source); })()), "user", [], "any", false, false, false, 112), "email", [], "any", false, false, false, 112), "html", null, true);
        echo "</h3>
                        ";
        // line 113
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 114
            echo "                            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin");
            echo "\" class=\"user-email admin\">Super administration</a>
                        ";
        }
        // line 116
        echo "                        ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["Assoc"]) || array_key_exists("Assoc", $context) ? $context["Assoc"] : (function () { throw new RuntimeError('Variable "Assoc" does not exist.', 116, $this->source); })()), "isAdminGlobal", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 116, $this->source); })()), "user", [], "any", false, false, false, 116)], "method", false, false, false, 116) == true)) {
            // line 117
            echo "                            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_choose");
            echo "\" class=\"user-email admin\">Administration</a>
                        ";
        }
        // line 119
        echo "                    </div>
                </div>
        </div>
        ";
        // line 123
        echo "        <div class=\"header\">
            <a href=\"";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/logo_saved_letter.png"), "html", null, true);
        echo "\" alt=\"logo\" class=\"logo-main-site\"></a>
            <div class=\"lines\">
                <div class=\"line1 noAnimation\"></div>
                <div class=\"line2 noAnimation\"></div>
                <div class=\"line3 noAnimation\"></div>
            </div>
            <div class=\"menu\">
                <ul class=\"ul-items\">
                   <li class=\"ham-items\">
                        <a href=\"";
        // line 133
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"ham-links\">
                            <i class=\"fas fa-home ham-svg\"></i>
                            <span>Accueil</span>
                        </a>
                    </li>
                    <li class=\"ham-items\">
                        <a href=\"";
        // line 139
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("saisie");
        echo "\" class=\"ham-links\">
                            <i class=\"fas fa-pencil ham-svg\"></i>
                            <span>Saisie</span>
                        </a>
                    </li>
                    <li class=\"ham-items\">
                        <a href=\"";
        // line 145
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recapitulatif");
        echo "\" class=\"ham-links\">
                            <i class=\"fas fa-list ham-svg\"></i>
                            <span>Recapitulatif</span>
                        </a>
                    </li>
                    <li class=\"ham-items\">
                        <a href=\"";
        // line 151
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_faq");
        echo "\" class=\"ham-links\">
                            <i class=\"fa-solid fa-circle-question nav-svg\"></i>
                            <span>Infos pratiques</span>
                        </a>
                    </li>
                    <li class=\"ham-items\">
                        <a href=\"";
        // line 157
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("association");
        echo "\" class=\"ham-links\">
                            <i class=\"fa-solid fa-book ham-svg\"></i>
                            <span>Liste des associations</span>
                        </a>
                    </li>
                    <li class=\"ham-items\">
                        <a href=\"";
        // line 163
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register_association");
        echo "\" class=\"ham-links\">
                            <i class=\"fa-solid fa-circle-plus ham-svg\"></i>
                            <span>Enregistrer une association</span>
                        </a>
                    </li>
                    <li class=\"ham-items\">
                        <a href=\"";
        // line 169
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mon_compte");
        echo "\" class=\"ham-links\">
                            <i class=\"fas fa-user ham-svg\"></i>
                            <span>Mon compte</span>
                        </a>
                    </li>
                    <li class=\"ham-items\">
                        <a href=\"";
        // line 175
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" class=\"ham-links\">
                            <i class=\"fas fa-sign-out-alt ham-svg\"></i>
                            <span>Déconnexion</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    
        ";
        // line 185
        echo "        <main>
            ";
        // line 186
        $this->displayBlock('body', $context, $blocks);
        // line 188
        echo "        </main>

    </body>

    ";
        // line 192
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
    ";
        // line 193
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("main");
        echo "
    ";
        // line 194
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("sideBar");
        echo "


    ";
        // line 197
        $this->displayBlock('javascripts', $context, $blocks);
        // line 200
        echo "
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Saved";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 18
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 186
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 187
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 197
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 198
        echo "        <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/toastify-js\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  474 => 198,  464 => 197,  454 => 187,  444 => 186,  434 => 18,  424 => 17,  405 => 6,  393 => 200,  391 => 197,  385 => 194,  381 => 193,  377 => 192,  371 => 188,  369 => 186,  366 => 185,  354 => 175,  345 => 169,  336 => 163,  327 => 157,  318 => 151,  309 => 145,  300 => 139,  291 => 133,  277 => 124,  274 => 123,  269 => 119,  263 => 117,  260 => 116,  254 => 114,  252 => 113,  248 => 112,  244 => 111,  240 => 109,  234 => 107,  228 => 105,  226 => 104,  221 => 101,  217 => 99,  214 => 98,  208 => 96,  202 => 94,  200 => 93,  195 => 92,  193 => 91,  189 => 89,  186 => 87,  175 => 78,  166 => 72,  156 => 65,  147 => 59,  138 => 53,  129 => 47,  120 => 41,  111 => 35,  102 => 29,  94 => 26,  88 => 25,  85 => 24,  79 => 19,  77 => 17,  72 => 15,  67 => 13,  58 => 7,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>{% block title %}Saved{% endblock %}</title>
        <link href='{{ asset(\"assets/favicon.png\")}}' rel='shortcut icon' type='image/x-icon'/> 
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css\" integrity=\"sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css\">
        <link rel=\"stylesheet\" href=\"https://unpkg.com/aos@next/dist/aos.css\" />


        {{ encore_entry_link_tags('app') }}

        <link href=\"{{ asset('css/app.css') }}\" rel=\"stylesheet\" />

        {% block stylesheets %}
        {% endblock %}


    </head>
    <body>
        {# SIDE BAR POUR LE DESKTOP SEULEMENT #}
        <div class=\"sidebar\">
            <a class=\"navbar-20 letter\" href=\"{{ path('home') }}\"><img src=\"{{ asset('assets/logo_saved_letter.png') }}\" alt=\"logo\" class=\"logo-main-site\"></a>
            <a class=\"navbar-20 full\" href=\"{{ path('home') }}\"><img src=\"{{ asset('assets/logo_saved_full.png') }}\" alt=\"logo\" class=\"secondary-logo\"></a>
            <ul class=\"navbar-ul\">
                    <li class=\"nav-item\">
                        <a href=\"{{ path('home') }}\" class=\"nav-links\">
                            <i class=\"fas fa-home nav-svg\"></i>
                            <span>Accueil</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('saisie') }}\" class=\"nav-links\">
                            <i class=\"fas fa-pencil nav-svg\"></i>
                            <span>Saisie</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('recapitulatif') }}\" class=\"nav-links\">
                            <i class=\"fas fa-list nav-svg\"></i>
                            <span>Recapitulatif</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_contact_us') }}\" class=\"nav-links\">
                            <i class=\"fa-solid fa-paper-plane nav-svg\"></i>
                            <span>Nous contacter</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('association') }}\" class=\"nav-links\">
                            <i class=\"fa-solid fa-book nav-svg\"></i>
                            <span>Liste des associations</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('register_association') }}\" class=\"nav-links\">
                            <i class=\"fa-solid fa-circle-plus nav-svg\"></i>
                            <span>Enregistrer une association</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_faq') }}\" class=\"nav-links\">
                            <i class=\"fa-solid fa-circle-question nav-svg\"></i>
                            <span>Infos pratiques</span>
                        </a>
                    </li>
                <li class=\"nav-item\">
                    <div>
                        <a href=\"{{ path('mon_compte') }}\" class=\"nav-links\">
                            <i class=\"fas fa-user nav-svg\"></i>
                            <span>Mon compte</span>
                        </a>
                    </div>
                    <div>
                        <a href=\"{{ path('app_logout') }}\" class=\"nav-links down\">
                            <i class=\"fas fa-sign-out-alt nav-svg\"></i>
                            <span>Déconnexion</span>
                        </a>
                    </div>
                    </li>
            </ul>
        </div>
        {# HEADER POUR LE DESKTOP #}
        <div class=\"header-desktop\">
        {# {{dump(Assoc.lastAssoc(app.user).logo)}} #}

            <div class=\"main-assoc\">
                {% if Assoc.lastAssoc(app.user) != false %}
                    <h1 class=\"h1-assoc\">{{ Assoc.lastAssoc(app.user).name }}</h1>
                    {% if Assoc.lastAssoc(app.user).logo != null %}
                        <img src=\"{{asset('/build/logo_directory/' ~ Assoc.lastAssoc(app.user).logo) }}\" alt=\"\" class=\"logo-main-assoc\" />
                    {% else %}
                        <img src=\"{{ asset('/assets/default.PNG') }}\" class=\"logo-main-assoc\" />
                    {% endif %}
                {% else %}
                    <h1 class=\"h1-assoc\">Vous n'avez pas encore d'association</h1>
                {% endif %}
            </div>
                <div class=\"user-info\">
                    <div class=\"container-img-header\">
                        {% if app.user.profilPicture != null %}
                            <img src=\"{{ asset('/build/profil_picture/' ~ app.user.profilPicture) }}\" alt=\"\" class=\"user-avatar\" />
                        {% else %}
                            <img src=\"{{ asset('/build/profil_picture/default_profil.png') }}\" alt=\"\" class=\"user-avatar default\" />
                        {% endif %}
                    </div>
                    <div class=\"user-name\">
                        <h2 class=\"user-username\"> {{app.user.username}} </h2> 
                        <h3 class=\"user-email\"> {{app.user.email}}</h3>
                        {% if is_granted('ROLE_SUPER_ADMIN') %}
                            <a href=\"{{ path('super_admin') }}\" class=\"user-email admin\">Super administration</a>
                        {% endif %}
                        {% if Assoc.isAdminGlobal(app.user) == true %}
                            <a href=\"{{ path('admin_choose') }}\" class=\"user-email admin\">Administration</a>
                        {% endif %}
                    </div>
                </div>
        </div>
        {# MENU BURGER POUR LE MOBILE #}
        <div class=\"header\">
            <a href=\"{{ path('home') }}\"><img src=\"{{ asset('assets/logo_saved_letter.png') }}\" alt=\"logo\" class=\"logo-main-site\"></a>
            <div class=\"lines\">
                <div class=\"line1 noAnimation\"></div>
                <div class=\"line2 noAnimation\"></div>
                <div class=\"line3 noAnimation\"></div>
            </div>
            <div class=\"menu\">
                <ul class=\"ul-items\">
                   <li class=\"ham-items\">
                        <a href=\"{{ path('home') }}\" class=\"ham-links\">
                            <i class=\"fas fa-home ham-svg\"></i>
                            <span>Accueil</span>
                        </a>
                    </li>
                    <li class=\"ham-items\">
                        <a href=\"{{ path('saisie') }}\" class=\"ham-links\">
                            <i class=\"fas fa-pencil ham-svg\"></i>
                            <span>Saisie</span>
                        </a>
                    </li>
                    <li class=\"ham-items\">
                        <a href=\"{{ path('recapitulatif') }}\" class=\"ham-links\">
                            <i class=\"fas fa-list ham-svg\"></i>
                            <span>Recapitulatif</span>
                        </a>
                    </li>
                    <li class=\"ham-items\">
                        <a href=\"{{ path('app_faq') }}\" class=\"ham-links\">
                            <i class=\"fa-solid fa-circle-question nav-svg\"></i>
                            <span>Infos pratiques</span>
                        </a>
                    </li>
                    <li class=\"ham-items\">
                        <a href=\"{{ path('association') }}\" class=\"ham-links\">
                            <i class=\"fa-solid fa-book ham-svg\"></i>
                            <span>Liste des associations</span>
                        </a>
                    </li>
                    <li class=\"ham-items\">
                        <a href=\"{{ path('register_association') }}\" class=\"ham-links\">
                            <i class=\"fa-solid fa-circle-plus ham-svg\"></i>
                            <span>Enregistrer une association</span>
                        </a>
                    </li>
                    <li class=\"ham-items\">
                        <a href=\"{{ path('mon_compte') }}\" class=\"ham-links\">
                            <i class=\"fas fa-user ham-svg\"></i>
                            <span>Mon compte</span>
                        </a>
                    </li>
                    <li class=\"ham-items\">
                        <a href=\"{{ path('app_logout') }}\" class=\"ham-links\">
                            <i class=\"fas fa-sign-out-alt ham-svg\"></i>
                            <span>Déconnexion</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    
        {# MAIN CONTENT #}
        <main>
            {% block body %}
            {% endblock %}
        </main>

    </body>

    {{ encore_entry_script_tags('app') }}
    {{ encore_entry_script_tags('main') }}
    {{ encore_entry_script_tags('sideBar') }}


    {% block javascripts %}
        <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/toastify-js\"></script>
    {% endblock %}

</html>
", "base.html.twig", "/mnt/c/Users/CDOS 21/Desktop/Saved_Symfo/templates/base.html.twig");
    }
}

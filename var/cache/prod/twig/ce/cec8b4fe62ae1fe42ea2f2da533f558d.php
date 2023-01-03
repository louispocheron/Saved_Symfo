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
class __TwigTemplate_b9dd1948108c3465b1f9a7040c17df5c extends Template
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
        if ((twig_get_attribute($this->env, $this->source, ($context["Assoc"] ?? null), "lastAssoc", [0 => twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 91)], "method", false, false, false, 91) != false)) {
            // line 92
            echo "                    <h1 class=\"h1-assoc\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Assoc"] ?? null), "lastAssoc", [0 => twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 92)], "method", false, false, false, 92), "name", [], "any", false, false, false, 92), "html", null, true);
            echo "</h1>
                    ";
            // line 93
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Assoc"] ?? null), "lastAssoc", [0 => twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 93)], "method", false, false, false, 93), "logo", [], "any", false, false, false, 93) != null)) {
                // line 94
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/build/logo_directory/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Assoc"] ?? null), "lastAssoc", [0 => twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 94)], "method", false, false, false, 94), "logo", [], "any", false, false, false, 94))), "html", null, true);
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 104), "profilPicture", [], "any", false, false, false, 104) != null)) {
            // line 105
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/build/profil_picture/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 105), "profilPicture", [], "any", false, false, false, 105))), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 111), "username", [], "any", false, false, false, 111), "html", null, true);
        echo " </h2> 
                        <h3 class=\"user-email\"> ";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 112), "email", [], "any", false, false, false, 112), "html", null, true);
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
        if ((twig_get_attribute($this->env, $this->source, ($context["Assoc"] ?? null), "isAdminGlobal", [0 => twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 116)], "method", false, false, false, 116) == true)) {
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
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Saved";
    }

    // line 17
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "        ";
    }

    // line 186
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 187
        echo "            ";
    }

    // line 197
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 198
        echo "        <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/toastify-js\"></script>
    ";
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
        return array (  420 => 198,  416 => 197,  412 => 187,  408 => 186,  404 => 18,  400 => 17,  393 => 6,  387 => 200,  385 => 197,  379 => 194,  375 => 193,  371 => 192,  365 => 188,  363 => 186,  360 => 185,  348 => 175,  339 => 169,  330 => 163,  321 => 157,  312 => 151,  303 => 145,  294 => 139,  285 => 133,  271 => 124,  268 => 123,  263 => 119,  257 => 117,  254 => 116,  248 => 114,  246 => 113,  242 => 112,  238 => 111,  234 => 109,  228 => 107,  222 => 105,  220 => 104,  215 => 101,  211 => 99,  208 => 98,  202 => 96,  196 => 94,  194 => 93,  189 => 92,  187 => 91,  183 => 89,  180 => 87,  169 => 78,  160 => 72,  150 => 65,  141 => 59,  132 => 53,  123 => 47,  114 => 41,  105 => 35,  96 => 29,  88 => 26,  82 => 25,  79 => 24,  73 => 19,  71 => 17,  66 => 15,  61 => 13,  52 => 7,  48 => 6,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/home/cdosegxi/saved/saved/templates/base.html.twig");
    }
}

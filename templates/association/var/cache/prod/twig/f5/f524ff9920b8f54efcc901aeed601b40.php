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

/* mon_compte/index.html.twig */
class __TwigTemplate_6bc6e72cdc06727e1ac7fde80636ed8a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "mon_compte/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "MonCompte";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo " <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/moncompte.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


<div class=\"infoPerso\">
    <h1>Information sur mon compte</h1>
    <div class=\"container-container\">
        <div class=\"infoPerso-container\">
            <p>nom d'utilisateur : </p>
            <p class=\"server-served\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>
            ";
        // line 15
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 15), "profilPicture", [], "any", false, false, false, 15) != null)) {
            // line 16
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/build/profil_picture/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 16), "profilPicture", [], "any", false, false, false, 16))), "html", null, true);
            echo "\" alt=\"\" class=\"user-avatar moncompte-avatar\" />
            ";
        } else {
            // line 18
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/profil_picture/default_profil.png"), "html", null, true);
            echo "\" alt=\"\" class=\"user-avatar default moncompte-avatar\" />
            ";
        }
        // line 20
        echo "        </div>
        <div class=\"infoPerso-container\">
            <p> adresse email : </p>
            <p class=\"server-served\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 23), "html", null, true);
        echo "</p>
        </div>
        <div class=\"infoPerso-container\">
            <p> mot de passe : </p>
            <p class=\"server-served\">********</p>
        </div>
        <div class=\"infoPerso-container\">
            <p> vous avez realisé ";
        // line 30
        if ((($context["actions"] ?? null) == 1)) {
            // line 31
            echo "                ";
            echo twig_escape_filter($this->env, ($context["actions"] ?? null), "html", null, true);
            echo " saisie</p>
            ";
        } else {
            // line 33
            echo "                ";
            echo twig_escape_filter($this->env, ($context["actions"] ?? null), "html", null, true);
            echo " saisies</p>
            ";
        }
        // line 35
        echo "                <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recapitulatif");
        echo "\"><button class=\"btn-saisie\"><i class=\"fa-solid fa-eye\"></i></button></a>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "mon_compte/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 35,  111 => 33,  105 => 31,  103 => 30,  93 => 23,  88 => 20,  82 => 18,  76 => 16,  74 => 15,  70 => 14,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mon_compte/index.html.twig", "/home/cdosegxi/saved/saved/templates/mon_compte/index.html.twig");
    }
}

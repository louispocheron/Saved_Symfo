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

/* home/index.html.twig */
class __TwigTemplate_c4a198af83cfc28fcc967094ee92580a extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo " 

<div class=\"home-container\">
    <h1 class=\"h1-home\"> Bienvenue sur <span>SAVED</span></h1>
    ";
        // line 9
        if (((isset($context["latest"]) || array_key_exists("latest", $context) ? $context["latest"] : (function () { throw new RuntimeError('Variable "latest" does not exist.', 9, $this->source); })()) == [])) {
            // line 10
            echo "        <h1 class=\"h1false\"> vous n'avez pas encore fait de saisie </h1>
        <div class=\"homeCard-container\">
                <div class=\"homeCard\" data-aos=\"fade-right\">
                    <img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/DONSPNG.png"), "html", null, true);
            echo "\" class='svg-home'>
                    <h2>0€</h2>
                    <h3>Dons</h3>
                </div>
                <div class=\"homeCard\" data-aos=\"fade-right\">
                    <img src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/REMBOURSEMENT-02.svg"), "html", null, true);
            echo "\" class='svg-home'>
                    <h2>0€</h2>
                    <h3>Remboursements</h3>
                </div>
                <div class=\"homeCard\" data-aos=\"fade-right\">
                    <i class=\"fa-solid fa-clock svg-homecard\"></i>
                    <h2>00h00</h2>
                    <h3>Heures de bénévolat</h3>
                </div>
                <div class=\"homeCard\" data-aos=\"fade-right\">
                    <img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/VALORISATION-01.svg"), "html", null, true);
            echo "\" class='svg-home bene'>
                    <h2>0€</h2>
                    <h3>Bénévolat</h3>
                </div>
    ";
        } else {
            // line 33
            echo "
    <h3>Total de vos saisies :</h3>
        <div class=\"homeCard-container\">
            ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["latest"]) || array_key_exists("latest", $context) ? $context["latest"] : (function () { throw new RuntimeError('Variable "latest" does not exist.', 36, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["recent"]) {
                // line 37
                echo "                <div class=\"homeCard\" data-aos=\"fade-right\">
                    <img src=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/DONSPNG.png"), "html", null, true);
                echo "\" class='svg-home'>
                    <h2 class=\"dons-card\"></h2>
                    <h3>Dons</h3>
                </div>
                <div class=\"homeCard\" data-aos=\"fade-right\">
                    <img src=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/REMBOURSEMENT-02.svg"), "html", null, true);
                echo "\" class='svg-home'>
                    <h2 class=\"remboursement-card\"></h2>
                    <h3>Remboursement</h3>
                </div>
                <div class=\"homeCard\" data-aos=\"fade-right\">
                    <i class=\"fa-solid fa-clock svg-homecard\"></i>
                    <h2 class=\"heure-card\"></h2>
                    <h3>Heure de bénévolat</h3>
                </div>
                <div class=\"homeCard\" data-aos=\"fade-right\">
                    <img src=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/VALORISATION-01.svg"), "html", null, true);
                echo "\" class='svg-home bene'>
                    <h2 class=\"benevolat-card\"></h2>
                    <h3>Bénévolat</h3>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recent'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "        </div>
    ";
        }
        // line 59
        echo " 
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 63
        echo "    <script src=\"https://unpkg.com/aos@next/dist/aos.js\"></script>
    <script>
        AOS.init();
    </script>
    <script src=\"https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js\"></script>
    ";
        // line 68
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("home");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 68,  200 => 63,  190 => 62,  178 => 59,  174 => 58,  163 => 53,  150 => 43,  142 => 38,  139 => 37,  135 => 36,  130 => 33,  122 => 28,  109 => 18,  101 => 13,  96 => 10,  94 => 9,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block body %} 

<div class=\"home-container\">
    <h1 class=\"h1-home\"> Bienvenue sur <span>SAVED</span></h1>
    {% if latest == [] %}
        <h1 class=\"h1false\"> vous n'avez pas encore fait de saisie </h1>
        <div class=\"homeCard-container\">
                <div class=\"homeCard\" data-aos=\"fade-right\">
                    <img src=\"{{asset('assets/DONSPNG.png') }}\" class='svg-home'>
                    <h2>0€</h2>
                    <h3>Dons</h3>
                </div>
                <div class=\"homeCard\" data-aos=\"fade-right\">
                    <img src=\"{{asset('assets/REMBOURSEMENT-02.svg') }}\" class='svg-home'>
                    <h2>0€</h2>
                    <h3>Remboursements</h3>
                </div>
                <div class=\"homeCard\" data-aos=\"fade-right\">
                    <i class=\"fa-solid fa-clock svg-homecard\"></i>
                    <h2>00h00</h2>
                    <h3>Heures de bénévolat</h3>
                </div>
                <div class=\"homeCard\" data-aos=\"fade-right\">
                    <img src=\"{{asset('assets/VALORISATION-01.svg') }}\" class='svg-home bene'>
                    <h2>0€</h2>
                    <h3>Bénévolat</h3>
                </div>
    {% else %}

    <h3>Total de vos saisies :</h3>
        <div class=\"homeCard-container\">
            {% for recent in latest  %}
                <div class=\"homeCard\" data-aos=\"fade-right\">
                    <img src=\"{{asset('assets/DONSPNG.png') }}\" class='svg-home'>
                    <h2 class=\"dons-card\"></h2>
                    <h3>Dons</h3>
                </div>
                <div class=\"homeCard\" data-aos=\"fade-right\">
                    <img src=\"{{asset('assets/REMBOURSEMENT-02.svg') }}\" class='svg-home'>
                    <h2 class=\"remboursement-card\"></h2>
                    <h3>Remboursement</h3>
                </div>
                <div class=\"homeCard\" data-aos=\"fade-right\">
                    <i class=\"fa-solid fa-clock svg-homecard\"></i>
                    <h2 class=\"heure-card\"></h2>
                    <h3>Heure de bénévolat</h3>
                </div>
                <div class=\"homeCard\" data-aos=\"fade-right\">
                    <img src=\"{{asset('assets/VALORISATION-01.svg') }}\" class='svg-home bene'>
                    <h2 class=\"benevolat-card\"></h2>
                    <h3>Bénévolat</h3>
                </div>
            {% endfor %}
        </div>
    {% endif %} 
    </div>
{% endblock %}
{% block javascripts %}
    <script src=\"https://unpkg.com/aos@next/dist/aos.js\"></script>
    <script>
        AOS.init();
    </script>
    <script src=\"https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js\"></script>
    {{ encore_entry_script_tags('home') }}
{% endblock %}
", "home/index.html.twig", "/mnt/c/Users/pocheron/Desktop/Saved_Symfo/templates/home/index.html.twig");
    }
}

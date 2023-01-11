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

/* saisie/index.html.twig */
class __TwigTemplate_2dd2a9d4f9e95e8bd9a6fe86d377b05a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "saisie/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "saisie/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "saisie/index.html.twig", 1);
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

        echo "Saisie";
        
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

        // line 6
        echo " <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/saisie.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
 <link rel=\"stylesheet\" type=\"text/css\" href=\"https://npmcdn.com/flatpickr/dist/themes/material_blue.css\">

";
        // line 9
        if (((isset($context["isAssoc"]) || array_key_exists("isAssoc", $context) ? $context["isAssoc"] : (function () { throw new RuntimeError('Variable "isAssoc" does not exist.', 9, $this->source); })()) == [])) {
            // line 10
            echo "<div class=\"container-no\">
    <h2 style=\"text-align: center;\">Vous devez d'abord adhérer à une association avant de faire des saisies</h2>
    <h3 style=\"text-align: center;\">Retrouvez la liste des associations</h3>
    <a href='";
            // line 13
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("association");
            echo "' class=\"btn-basic ref\">ici</a>

    <img src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/Human.png"), "html", null, true);
            echo "\" alt=\"human\" class=\"img-responsive\" style=\"margin: 0 auto;\">
</div>
";
        } else {
            // line 18
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18) == true)) {
                // line 19
                echo "        ";
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_start');
                echo "
            <div class=\"form-saisie\">
                <div class=\"evenement1 firstable\">
                    <div class=\"h1-row event\">ÉVÈNEMENT</div>
                    <div class=\"input-container firstC\">
                        <div class=\"date-assoc first\">
                            <div class='rowSaisie'>
                                <legend class=\"label\">Date</legend>
                                ";
                // line 27
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "date", [], "any", false, false, false, 27), 'widget');
                echo "
                            </div>
                            <div class='rowSaisie'>
                                <div class=\"info-supp\">
                                    <label class=\"label\">Association</label>
                                </div>
                                ";
                // line 33
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "association", [], "any", false, false, false, 33), 'widget');
                echo "
                            </div>
                        </div>
                        <div class=\"date-assoc\">
                            <div class='rowSaisie'>
                                <label class=\"label\">Ville de départ</label>
                                ";
                // line 39
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "villeDepart", [], "any", false, false, false, 39), 'widget');
                echo "
                            </div>

                            <div class='rowSaisie'>
                                <label class=\"label\">Ville d'arrivée</label>
                                ";
                // line 44
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "villeArrive", [], "any", false, false, false, 44), 'widget');
                echo "
                            </div>
                            <div class='rowSaisie bottom-input'>
                                <label class=\"label\">Nature du déplacement</label>
                                ";
                // line 48
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "raisons", [], "any", false, false, false, 48), 'widget');
                echo "
                            </div>
                        </div>
                    </div>
                    ";
                // line 53
                echo "                </div>
                <div class=\"evenement1 first\">
                    <div class=\"h1-row second event\">VALORISATION DES HEURES</div>
                    <div class=\"input-container firstC\">
                        <div class=\"date-assoc first\">
                            <div class='rowSaisie hours'>
                                <div class=\"label-container\">
                                    <label class=\"label\">Heure de départ</label>
                                    <a class=\"href-info\" href=\"/info-saisies\" target=\"_blank\"><i class=\"fa-solid fa-circle-question\"></i></a>
                                </div>
                                ";
                // line 63
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "heureDepart", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "heure"]]);
                echo "
                            </div>

                            <div class='rowSaisie hours secondary'>
                                <div class=\"label-container\">
                                    <label class=\"label\">Heure d'arrivée</label>
                                    <a class=\"href-info\" href=\"/info-saisies\" target=\"_blank\"><i class=\"fa-solid fa-circle-question\"></i></a>
                                </div>
                                ";
                // line 71
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "heureArrivee", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "heure"]]);
                echo "
                            </div>
                        </div>
                        <div class=\"date-assoc\">
                            <div class='rowSaisie'>
                                <label class=\"label\">Durée</label>
                                ";
                // line 77
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "duree", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "dureeInput disabled"]]);
                echo "
                            </div>
                            <div class='rowSaisie row'>
                                <div class=\"groupe-container\">
                                    <div class=\"label-container\">
                                        <label class=\"label\">Groupe</label>
                                        <a class=\"href-info\" href=\"/info-saisies\" target=\"_blank\"><i class=\"fa-solid fa-circle-question\"></i></a>
                                    </div>
                                    ";
                // line 85
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "groupe", [], "any", false, false, false, 85), 'widget', ["attr" => ["class" => "heure groupe groupeSelect"]]);
                echo "
                                </div>
                                <div class=\"groupe-container\">
                                    <label class=\"label\">Taux horaire</label>
                                    <input type=\"text\" class=\"pourcentage-input disabled\" disabled />
                                </div>
                            </div>
                            <div class='rowSaisie' id=\"chargeInputId\" data-charges='";
                // line 92
                echo twig_escape_filter($this->env, (isset($context["charges"]) || array_key_exists("charges", $context) ? $context["charges"] : (function () { throw new RuntimeError('Variable "charges" does not exist.', 92, $this->source); })()), "html", null, true);
                echo "'>
                                <label class=\"label\">Charges</label>
                                ";
                // line 94
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "charges", [], "any", false, false, false, 94), 'widget', ["attr" => ["class" => "heure bottom-input disabled"]]);
                echo "
                            </div>
                        </div>
                    </div>
                </div>
            <div class=\"evenement1 bottom-container\">
                <div class=\"h1-row troisieme\">FRAIS DE DÉPLACEMENT</div>
                <div class=\"input-container\">
                    <div class=\"date-assoc\">
                        <div class='rowSaisie' id=\"km\">
                            <div class=\"label-container\">
                                <label class=\"label\">Kilomètrage</label>
                                <a class=\"href-info\" href=\"/info-saisies\" target=\"_blank\"><i class=\"fa-solid fa-circle-question\"></i></a>
                            </div>
                            ";
                // line 108
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "km", [], "any", false, false, false, 108), 'widget', ["attr" => ["class" => "kmInput"]]);
                echo "
                        </div>
                        ";
                // line 114
                echo "                           <div class='rowSaisie'>
                            <label class=\"label\">Barème km</label>
                            ";
                // line 116
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "bareme", [], "any", false, false, false, 116), 'widget', ["attr" => ["class" => "bareme bottom-input"]]);
                echo "
                        </div>
                    </div>
                    <div class=\"date-assoc\">
                        <div class='rowSaisie'>
                            <div class=\"label-container\">
                                <label class=\"label\">Autres frais</label>
                                <a class=\"href-info\" href=\"/info-saisies\" target=\"_blank\"><i class=\"fa-solid fa-circle-question\"></i></a>
                            </div>
                            ";
                // line 125
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "frais", [], "any", false, false, false, 125), 'widget', ["attr" => ["class" => "coutInput"]]);
                echo "
                        </div>

                        
                        <div class='rowSaisie'>
                            <label class=\"label\">Frais kilométriques</label>
                            ";
                // line 131
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "fraisKilometrique", [], "any", false, false, false, 131), 'widget', ["attr" => ["class" => "fraisInput bottom-input disabled"]]);
                echo "
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"evenement1 bottom-container\">
                <div class=\"h1-row\">TOTAUX</div>
                <div class=\"input-container\">
                    <div class=\"date-assoc\">
                        <div class='rowSaisie'>
                            <label>Total note de frais</label>
                            <input  class=\"totalNote disabled\" type=\"text\" name=\"totalNote\" value=\"0\" disabled>
                        </div>

                        <div class='rowSaisie'>
                            <label>Dons</label>
                            ";
                // line 147
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "dons", [], "any", false, false, false, 147), 'widget', ["attr" => ["class" => "donsInput bottom-input disabled"]]);
                echo "
                        </div>
                    </div>
                    <div class=\"date-assoc\">
                        <div class='rowSaisie'>
                            <label>Remboursement</label>
                            ";
                // line 153
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "aPayer", [], "any", false, false, false, 153), 'widget', ["attr" => ["class" => "apayerInput"]]);
                echo "
                        </div>

                        <div class='rowSaisie'>
                            <label>Heures valorisées</label>
                            ";
                // line 158
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), "heuresValorisees", [], "any", false, false, false, 158), 'widget', ["attr" => ["class" => "heureValoriseesInput bottom-input"]]);
                echo "
                        </div>
                    </div>
                </div> 
            </div>
                    <div class='rowSaisie btn-container'>
                            ";
                // line 164
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), "enregistrer", [], "any", false, false, false, 164), 'widget', ["attr" => ["class" => "btn-basic fonted"]]);
                echo "
                    </div>
                </div>
            </div>
        ";
                // line 168
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 168, $this->source); })()), 'form_end');
                echo "


        ";
                // line 172
                echo "        <div class=\"modal-saisie\">
            <h1 class=\"modalP dangerP\">Vous êtes sur le point de modifier le taux de remboursement des frais kilométriques !</h1>
            <i class=\"fa-solid fa-circle-exclamation logo-modal\"></i>
            <p>Si vous souhaitez renoncer au remboursement d’une partie ou de la totalité de vos frais afin de bénéficier de réductions d’impôts, veillez à respecter le taux en vigueur (Ref. barème fiscal de remboursement applicable)</p>
            <button class=\"btn-oui\">
                <p class=\"je-comprends\">Je comprends</p>
            </button>
        </div>

    ";
            } else {
                // line 182
                echo "        <h1>devez etre connectez pour faire une saisie</h1>
    ";
            }
            // line 184
            echo "    ";
        }
        // line 185
        echo "

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 189
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 190
        echo "
        <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/toastify-js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js\"></script>

        ";
        // line 194
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("saisie");
        echo "
        ";
        // line 195
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("sort");
        echo "


    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "saisie/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  383 => 195,  379 => 194,  373 => 190,  363 => 189,  351 => 185,  348 => 184,  344 => 182,  332 => 172,  326 => 168,  319 => 164,  310 => 158,  302 => 153,  293 => 147,  274 => 131,  265 => 125,  253 => 116,  249 => 114,  244 => 108,  227 => 94,  222 => 92,  212 => 85,  201 => 77,  192 => 71,  181 => 63,  169 => 53,  162 => 48,  155 => 44,  147 => 39,  138 => 33,  129 => 27,  117 => 19,  114 => 18,  108 => 15,  103 => 13,  98 => 10,  96 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Saisie{% endblock %}

{% block body %}
 <link href=\"{{ asset('css/saisie.css') }}\" rel=\"stylesheet\">
 <link rel=\"stylesheet\" type=\"text/css\" href=\"https://npmcdn.com/flatpickr/dist/themes/material_blue.css\">

{% if isAssoc == [] %}
<div class=\"container-no\">
    <h2 style=\"text-align: center;\">Vous devez d'abord adhérer à une association avant de faire des saisies</h2>
    <h3 style=\"text-align: center;\">Retrouvez la liste des associations</h3>
    <a href='{{ path('association') }}' class=\"btn-basic ref\">ici</a>

    <img src=\"{{ asset('assets/Human.png') }}\" alt=\"human\" class=\"img-responsive\" style=\"margin: 0 auto;\">
</div>
{% else %}
    {% if app.user == true %}
        {{form_start(form)}}
            <div class=\"form-saisie\">
                <div class=\"evenement1 firstable\">
                    <div class=\"h1-row event\">ÉVÈNEMENT</div>
                    <div class=\"input-container firstC\">
                        <div class=\"date-assoc first\">
                            <div class='rowSaisie'>
                                <legend class=\"label\">Date</legend>
                                {{form_widget(form.date)}}
                            </div>
                            <div class='rowSaisie'>
                                <div class=\"info-supp\">
                                    <label class=\"label\">Association</label>
                                </div>
                                {{form_widget(form.association)}}
                            </div>
                        </div>
                        <div class=\"date-assoc\">
                            <div class='rowSaisie'>
                                <label class=\"label\">Ville de départ</label>
                                {{form_widget(form.villeDepart)}}
                            </div>

                            <div class='rowSaisie'>
                                <label class=\"label\">Ville d'arrivée</label>
                                {{form_widget(form.villeArrive)}}
                            </div>
                            <div class='rowSaisie bottom-input'>
                                <label class=\"label\">Nature du déplacement</label>
                                {{form_widget(form.raisons)}}
                            </div>
                        </div>
                    </div>
                    {# </div> #}
                </div>
                <div class=\"evenement1 first\">
                    <div class=\"h1-row second event\">VALORISATION DES HEURES</div>
                    <div class=\"input-container firstC\">
                        <div class=\"date-assoc first\">
                            <div class='rowSaisie hours'>
                                <div class=\"label-container\">
                                    <label class=\"label\">Heure de départ</label>
                                    <a class=\"href-info\" href=\"/info-saisies\" target=\"_blank\"><i class=\"fa-solid fa-circle-question\"></i></a>
                                </div>
                                {{form_widget(form.heureDepart , {'attr': {'class': 'heure'}}) }}
                            </div>

                            <div class='rowSaisie hours secondary'>
                                <div class=\"label-container\">
                                    <label class=\"label\">Heure d'arrivée</label>
                                    <a class=\"href-info\" href=\"/info-saisies\" target=\"_blank\"><i class=\"fa-solid fa-circle-question\"></i></a>
                                </div>
                                {{form_widget(form.heureArrivee, {'attr': {'class': 'heure'}}) }}
                            </div>
                        </div>
                        <div class=\"date-assoc\">
                            <div class='rowSaisie'>
                                <label class=\"label\">Durée</label>
                                {{form_widget(form.duree, {'attr': {'class': 'dureeInput disabled'}}) }}
                            </div>
                            <div class='rowSaisie row'>
                                <div class=\"groupe-container\">
                                    <div class=\"label-container\">
                                        <label class=\"label\">Groupe</label>
                                        <a class=\"href-info\" href=\"/info-saisies\" target=\"_blank\"><i class=\"fa-solid fa-circle-question\"></i></a>
                                    </div>
                                    {{form_widget(form.groupe, {'attr': {'class': 'heure groupe groupeSelect'}}) }}
                                </div>
                                <div class=\"groupe-container\">
                                    <label class=\"label\">Taux horaire</label>
                                    <input type=\"text\" class=\"pourcentage-input disabled\" disabled />
                                </div>
                            </div>
                            <div class='rowSaisie' id=\"chargeInputId\" data-charges='{{charges}}'>
                                <label class=\"label\">Charges</label>
                                {{form_widget(form.charges, {'attr': {'class': 'heure bottom-input disabled' }}) }}
                            </div>
                        </div>
                    </div>
                </div>
            <div class=\"evenement1 bottom-container\">
                <div class=\"h1-row troisieme\">FRAIS DE DÉPLACEMENT</div>
                <div class=\"input-container\">
                    <div class=\"date-assoc\">
                        <div class='rowSaisie' id=\"km\">
                            <div class=\"label-container\">
                                <label class=\"label\">Kilomètrage</label>
                                <a class=\"href-info\" href=\"/info-saisies\" target=\"_blank\"><i class=\"fa-solid fa-circle-question\"></i></a>
                            </div>
                            {{form_widget(form.km, {'attr': {'class': 'kmInput'}}) }}
                        </div>
                        {# <div class='rowSaisie'>
                            <label>Barème</label>
                            <input class=\"bareme bottom-input\" type=\"text\" name=\"barème\">
                        </div> #}
                           <div class='rowSaisie'>
                            <label class=\"label\">Barème km</label>
                            {{form_widget(form.bareme, {'attr': {'class': 'bareme bottom-input'}}) }}
                        </div>
                    </div>
                    <div class=\"date-assoc\">
                        <div class='rowSaisie'>
                            <div class=\"label-container\">
                                <label class=\"label\">Autres frais</label>
                                <a class=\"href-info\" href=\"/info-saisies\" target=\"_blank\"><i class=\"fa-solid fa-circle-question\"></i></a>
                            </div>
                            {{form_widget(form.frais, {'attr': {'class': 'coutInput'}}) }}
                        </div>

                        
                        <div class='rowSaisie'>
                            <label class=\"label\">Frais kilométriques</label>
                            {{form_widget(form.fraisKilometrique, {'attr': {'class': 'fraisInput bottom-input disabled'}}) }}
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"evenement1 bottom-container\">
                <div class=\"h1-row\">TOTAUX</div>
                <div class=\"input-container\">
                    <div class=\"date-assoc\">
                        <div class='rowSaisie'>
                            <label>Total note de frais</label>
                            <input  class=\"totalNote disabled\" type=\"text\" name=\"totalNote\" value=\"0\" disabled>
                        </div>

                        <div class='rowSaisie'>
                            <label>Dons</label>
                            {{form_widget(form.dons, {'attr': {'class': 'donsInput bottom-input disabled'}}) }}
                        </div>
                    </div>
                    <div class=\"date-assoc\">
                        <div class='rowSaisie'>
                            <label>Remboursement</label>
                            {{form_widget(form.aPayer, {'attr': {'class': 'apayerInput'}}) }}
                        </div>

                        <div class='rowSaisie'>
                            <label>Heures valorisées</label>
                            {{form_widget(form.heuresValorisees, {'attr': {'class': 'heureValoriseesInput bottom-input'}}) }}
                        </div>
                    </div>
                </div> 
            </div>
                    <div class='rowSaisie btn-container'>
                            {{form_widget(form.enregistrer , {'attr': {'class': 'btn-basic fonted'}}) }}
                    </div>
                </div>
            </div>
        {{form_end(form)}}


        {# MODAL #}
        <div class=\"modal-saisie\">
            <h1 class=\"modalP dangerP\">Vous êtes sur le point de modifier le taux de remboursement des frais kilométriques !</h1>
            <i class=\"fa-solid fa-circle-exclamation logo-modal\"></i>
            <p>Si vous souhaitez renoncer au remboursement d’une partie ou de la totalité de vos frais afin de bénéficier de réductions d’impôts, veillez à respecter le taux en vigueur (Ref. barème fiscal de remboursement applicable)</p>
            <button class=\"btn-oui\">
                <p class=\"je-comprends\">Je comprends</p>
            </button>
        </div>

    {% else %}
        <h1>devez etre connectez pour faire une saisie</h1>
    {% endif %}
    {% endif %}


    {% endblock %}

    {% block javascripts %}

        <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/toastify-js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js\"></script>

        {{ encore_entry_script_tags('saisie') }}
        {{ encore_entry_script_tags('sort') }}


    {% endblock %}

", "saisie/index.html.twig", "/mnt/c/Users/pocheron/Desktop/Saved_Symfo/templates/saisie/index.html.twig");
    }
}

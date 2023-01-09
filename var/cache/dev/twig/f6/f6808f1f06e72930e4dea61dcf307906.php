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

/* recapitulatif/index.html.twig */
class __TwigTemplate_0492bf07e5f06bea99d89db35d985056 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recapitulatif/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recapitulatif/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "recapitulatif/index.html.twig", 1);
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

        echo "recapitulatif";
        
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
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/recap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/pdf.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

<div class=\"content-container\">
<h2 class=\"h2-main\">Récapitulatif</h2>
";
        // line 11
        if (((twig_get_attribute($this->env, $this->source, (isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 11, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 11) != 0) && (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11) == true))) {
            // line 12
            echo "
    <div class=\"content-info\">
        <h3> Rechercher dans mes saisies </h3>
       
        <div class=\"totalDiv\">
            <div class=\"select-container\">
                <label>Année :</label>
                <select class=\"selectYear\" id=\"selectYear\"></select>
            </div>
            <div class=\"select-container\">
                <label>Mois :</label>
                <select class=\"selectMonth\" id=\"selectMonth\"></select>
            </div>
            <div class=\"select-container\">
                <label>Association :</label>
                <select class=\"selectAssoc\" id=\"selectMonth\"></select>
            </div> 
            <button type=\"submit\" class=\"btn-submit\" value=\"rechercher\">rechercher</button>
        </div>
        ";
            // line 32
            echo "         <p class=\"totalH1 flex-start\"></p>

        <div class=\"sum-js\">
            <p class=\"alert-message\"></p>
            <p class=\"total-paragraphe\">Total de toutes vos saisies :</p>
            <div class=\"main-container\">
                <div class=\"total-container\">
                    <p class=\"total-heure\"></p>
                    <p class=\"total-payer\"></p>
                </div>
                <div class=\"total-container\">
                    <p class=\"total-don\"></p>
                    <p class=\"total-valorisees\"></p>
                </div>
            </div>
        </div>
    </div>
    <button class=\"btn-pdf\" style=\"display: none\">
        pdf des saisies recherchées
        <i class=\"fa-solid fa-file-pdf\"></i>
    </button>
    <button class=\"btn-pdf-all\">
        pdf de toutes les saisies
        <i class=\"fa-solid fa-file-pdf\"></i>
    </button>

    <table class=\"sortable table\">
        <thead>
            <tr class=\"tr-first\">
                <th data-column=\"association\" data-order=\"desc\" class=\"no-sort column\" >Association</th>
                <th data-column=\"date\" data-order=\"desc\" class=\"column\">Date</th>
                <th>Ville de départ</th>
                <th>Ville d'arrivée</th>    
                <th>Raisons</th>
                <th>Km</th>
                <th>Barème km</th>
                <th>Frais</th>
                <th>Dons</th>
                <th>A payer</th>
                <th>Durée</th>
                <th>Groupe</th>
                <th>Heures valorisées</th>
                <th>Supprimer</th>
            </tr>
        </thead>
            <tbody class=\"ajaxDivContent\">
                ";
            // line 78
            $this->loadTemplate("recapitulatif/action_recap.html.twig", "recapitulatif/index.html.twig", 78)->display($context);
            // line 79
            echo "            </tbody>
    </table>
</div>  

";
        } else {
            // line 84
            echo "    <p>Vous n'avez pas encore réalisé de saisie pour une association</p>
    <img src=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/HumanMan.png"), "html", null, true);
            echo "\" alt=\"human\" class=\"img-responsive\" style=\"margin: 0 auto;\">
";
        }
        // line 87
        echo "
<div class=\"\">
    ";
        // line 89
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 89, $this->source); })()));
        echo "
</div>


<div class=\"modal-adherer\">
    <h1 class=\"modalP\">Voulez-vous vraiment supprimer cette saisie ?</h1>
    <img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/HumanMan.png"), "html", null, true);
        echo "\" class=\"img-modal\"/>
    <div class='btn-container'>
            <button class=\"btn-yes\">
                oui 
            </button>
        <button class=\"btn-no\">
            non
        </button>
    </div>
</div>


<div class=\"wrapper-pdf\" style=\"display: none\">
     <div class=\"header-pdf\">
         <h2 class=\"h2-pdf\">";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 109, $this->source); })()), "user", [], "any", false, false, false, 109), "username", [], "any", false, false, false, 109), "html", null, true);
        echo "</h2>
         <img src=\"../../public/assets/SAVED_JPG.JPG\" alt=\"an image\" class=\"pdf-img\">
    </div>
    <table class=\"sortable table\">
        <thead>
            <tr class=\"tr-first\">
                <th data-column=\"association\" data-order=\"desc\" class=\"no-sort column\" >Association</th>
                <th data-column=\"date\" data-order=\"desc\" class=\"column\">Date</th>
                <th>Ville de départ</th>
                <th>Ville d'arrivée</th>    
                <th>Raisons</th>
                <th>Km</th>
                <th>Barème km</th>
                <th>Frais</th>
                <th>Dons</th>
                <th>A payer</th>
                <th>Durée</th>
                <th>Groupe</th>
                <th>Heures valorisées</th>
            </tr>
        </thead>
        <tbody class=\"ajaxDivContentPdf\">
            ";
        // line 131
        $this->loadTemplate("recapitulatif/pdf_action.html.twig", "recapitulatif/index.html.twig", 131)->display($context);
        // line 132
        echo "        </tbody>
    </table>
    <div class=\"pdf-totaux\">
        <p class=\"pdf-benevolat\"></p>
        <p class=\"pdf-don\"></p>
        <p class=\"pdf-remboursement\"></p>
        <p class=\"pdf-valorisee\"></p>
    </div>
    <div class=\"accept-container\">
        <div class=\"p-container\">
            <p>je soussigné(e), auteur du présent état, certifie l'éxactitude et souhaite pour la somme notifiée</p>
        </div>
        <div class=\"p-container\">
                <input type=\"checkbox\"/>
            <p>Son reglement par chèque ou par virement bancaire (fournir RIB pour le premier remboursement ou en cas de changement de compte)</p>
        </div>
        <div class=\"p-container\">
            <input type=\"checkbox\"/>
            <p>Renoncer au remboursement des frais du présent état au profit de l'association en tant que don</p>
        </div>
        <div class=\"p-container start\">
            <p style=\"text-align: start;\">Faît le : </p>
        </div>
    </div>
    <div class=\"sign-container\"> 
        <div class=\"signature\">
            <p class=\"p-sign\">Signature du salarié ou du bénévole : </p>
        </div>
        <div class=\"signature\">
            <p class=\"p-sign\">Signature du Trésorier ou du président : </p>
        </div>
    </div>
</div>

";
        // line 167
        echo "
";
        // line 169
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["assocUser"]) || array_key_exists("assocUser", $context) ? $context["assocUser"] : (function () { throw new RuntimeError('Variable "assocUser" does not exist.', 169, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["assoc"]) {
            // line 170
            echo "    <div class=\"data-assoc\" data-association=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["assoc"], "name", [], "any", false, false, false, 170), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["assoc"], "id", [], "any", false, false, false, 170), "html", null, true);
            echo "\" style=\"display: none;\"></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['assoc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "
";
        // line 174
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 177
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 178
        echo "    <script src=\"dist/notiflix-aio-3.2.5.min.js\"></script>
    <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/toastify-js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js\" integrity=\"sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>

    ";
        // line 183
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("recap");
        echo "
    ";
        // line 184
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("sort");
        echo "


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "recapitulatif/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 184,  331 => 183,  324 => 178,  314 => 177,  303 => 174,  300 => 172,  289 => 170,  285 => 169,  282 => 167,  246 => 132,  244 => 131,  219 => 109,  202 => 95,  193 => 89,  189 => 87,  184 => 85,  181 => 84,  174 => 79,  172 => 78,  124 => 32,  103 => 12,  101 => 11,  94 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}recapitulatif{% endblock %}

{% block body %}
    <link href=\"{{ asset('css/recap.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/pdf.css') }}\" rel=\"stylesheet\">

<div class=\"content-container\">
<h2 class=\"h2-main\">Récapitulatif</h2>
{% if (actions.getTotalItemCount != 0) and (app.user == true) %}

    <div class=\"content-info\">
        <h3> Rechercher dans mes saisies </h3>
       
        <div class=\"totalDiv\">
            <div class=\"select-container\">
                <label>Année :</label>
                <select class=\"selectYear\" id=\"selectYear\"></select>
            </div>
            <div class=\"select-container\">
                <label>Mois :</label>
                <select class=\"selectMonth\" id=\"selectMonth\"></select>
            </div>
            <div class=\"select-container\">
                <label>Association :</label>
                <select class=\"selectAssoc\" id=\"selectMonth\"></select>
            </div> 
            <button type=\"submit\" class=\"btn-submit\" value=\"rechercher\">rechercher</button>
        </div>
        {# <p class=\"flex-start\"> Vous avez fait {{ actions.getTotalItemCount }} saisies </p> #}
         <p class=\"totalH1 flex-start\"></p>

        <div class=\"sum-js\">
            <p class=\"alert-message\"></p>
            <p class=\"total-paragraphe\">Total de toutes vos saisies :</p>
            <div class=\"main-container\">
                <div class=\"total-container\">
                    <p class=\"total-heure\"></p>
                    <p class=\"total-payer\"></p>
                </div>
                <div class=\"total-container\">
                    <p class=\"total-don\"></p>
                    <p class=\"total-valorisees\"></p>
                </div>
            </div>
        </div>
    </div>
    <button class=\"btn-pdf\" style=\"display: none\">
        pdf des saisies recherchées
        <i class=\"fa-solid fa-file-pdf\"></i>
    </button>
    <button class=\"btn-pdf-all\">
        pdf de toutes les saisies
        <i class=\"fa-solid fa-file-pdf\"></i>
    </button>

    <table class=\"sortable table\">
        <thead>
            <tr class=\"tr-first\">
                <th data-column=\"association\" data-order=\"desc\" class=\"no-sort column\" >Association</th>
                <th data-column=\"date\" data-order=\"desc\" class=\"column\">Date</th>
                <th>Ville de départ</th>
                <th>Ville d'arrivée</th>    
                <th>Raisons</th>
                <th>Km</th>
                <th>Barème km</th>
                <th>Frais</th>
                <th>Dons</th>
                <th>A payer</th>
                <th>Durée</th>
                <th>Groupe</th>
                <th>Heures valorisées</th>
                <th>Supprimer</th>
            </tr>
        </thead>
            <tbody class=\"ajaxDivContent\">
                {% include \"recapitulatif/action_recap.html.twig\" %}
            </tbody>
    </table>
</div>  

{% else %}
    <p>Vous n'avez pas encore réalisé de saisie pour une association</p>
    <img src=\"{{ asset('assets/HumanMan.png') }}\" alt=\"human\" class=\"img-responsive\" style=\"margin: 0 auto;\">
{% endif %}

<div class=\"\">
    {{ knp_pagination_render(actions) }}
</div>


<div class=\"modal-adherer\">
    <h1 class=\"modalP\">Voulez-vous vraiment supprimer cette saisie ?</h1>
    <img src=\"{{ asset('assets/HumanMan.png') }}\" class=\"img-modal\"/>
    <div class='btn-container'>
            <button class=\"btn-yes\">
                oui 
            </button>
        <button class=\"btn-no\">
            non
        </button>
    </div>
</div>


<div class=\"wrapper-pdf\" style=\"display: none\">
     <div class=\"header-pdf\">
         <h2 class=\"h2-pdf\">{{app.user.username}}</h2>
         <img src=\"../../public/assets/SAVED_JPG.JPG\" alt=\"an image\" class=\"pdf-img\">
    </div>
    <table class=\"sortable table\">
        <thead>
            <tr class=\"tr-first\">
                <th data-column=\"association\" data-order=\"desc\" class=\"no-sort column\" >Association</th>
                <th data-column=\"date\" data-order=\"desc\" class=\"column\">Date</th>
                <th>Ville de départ</th>
                <th>Ville d'arrivée</th>    
                <th>Raisons</th>
                <th>Km</th>
                <th>Barème km</th>
                <th>Frais</th>
                <th>Dons</th>
                <th>A payer</th>
                <th>Durée</th>
                <th>Groupe</th>
                <th>Heures valorisées</th>
            </tr>
        </thead>
        <tbody class=\"ajaxDivContentPdf\">
            {% include \"recapitulatif/pdf_action.html.twig\" %}
        </tbody>
    </table>
    <div class=\"pdf-totaux\">
        <p class=\"pdf-benevolat\"></p>
        <p class=\"pdf-don\"></p>
        <p class=\"pdf-remboursement\"></p>
        <p class=\"pdf-valorisee\"></p>
    </div>
    <div class=\"accept-container\">
        <div class=\"p-container\">
            <p>je soussigné(e), auteur du présent état, certifie l'éxactitude et souhaite pour la somme notifiée</p>
        </div>
        <div class=\"p-container\">
                <input type=\"checkbox\"/>
            <p>Son reglement par chèque ou par virement bancaire (fournir RIB pour le premier remboursement ou en cas de changement de compte)</p>
        </div>
        <div class=\"p-container\">
            <input type=\"checkbox\"/>
            <p>Renoncer au remboursement des frais du présent état au profit de l'association en tant que don</p>
        </div>
        <div class=\"p-container start\">
            <p style=\"text-align: start;\">Faît le : </p>
        </div>
    </div>
    <div class=\"sign-container\"> 
        <div class=\"signature\">
            <p class=\"p-sign\">Signature du salarié ou du bénévole : </p>
        </div>
        <div class=\"signature\">
            <p class=\"p-sign\">Signature du Trésorier ou du président : </p>
        </div>
    </div>
</div>

{# SINGLE WRAPPER PDF #}

{# DATA DIV FOR JS #}
{% for assoc in assocUser %}
    <div class=\"data-assoc\" data-association=\"{{assoc.name}}\" data-id=\"{{assoc.id}}\" style=\"display: none;\"></div>
{% endfor %}

{# PDF SINGLE ICI? IDK WHAT TO SAY #}

{% endblock %}

{% block javascripts %}
    <script src=\"dist/notiflix-aio-3.2.5.min.js\"></script>
    <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/toastify-js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js\" integrity=\"sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>

    {{ encore_entry_script_tags('recap') }}
    {{ encore_entry_script_tags('sort') }}


{% endblock %}
", "recapitulatif/index.html.twig", "/mnt/c/Users/CDOS 21/Desktop/Saved_Symfo/templates/recapitulatif/index.html.twig");
    }
}

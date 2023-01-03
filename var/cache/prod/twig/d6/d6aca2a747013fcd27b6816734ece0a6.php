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
class __TwigTemplate_dbd34413a880abe03533f5c4f8ecd891 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "recapitulatif/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "recapitulatif";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        if (((twig_get_attribute($this->env, $this->source, ($context["actions"] ?? null), "getTotalItemCount", [], "any", false, false, false, 11) != 0) && (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 11) == true))) {
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
            <input type=\"submit\" class=\"btn-submit\" value=\"rechercher\">
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
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["actions"] ?? null));
        echo "
</div>


<div class=\"modal-adherer\">
    <h1 class=\"modalP\">Voulez vous vraiment supprimer cette saisie ?</h1>
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 109), "username", [], "any", false, false, false, 109), "html", null, true);
        echo "</h2>
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
        // line 130
        $this->loadTemplate("recapitulatif/pdf_action.html.twig", "recapitulatif/index.html.twig", 130)->display($context);
        // line 131
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
            <p>Son reglement par chèque ou par virement bancaire (fournir RIB pour le premier Remboursement ou en cas de changement de compte)</p>
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
        // line 166
        echo "
";
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["assocUser"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["assoc"]) {
            // line 169
            echo "    <div class=\"data-assoc\" data-association=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["assoc"], "name", [], "any", false, false, false, 169), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["assoc"], "id", [], "any", false, false, false, 169), "html", null, true);
            echo "\" style=\"display: none;\"></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['assoc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        echo "
";
        // line 173
        echo "
";
    }

    // line 176
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 177
        echo "    <script src=\"dist/notiflix-aio-3.2.5.min.js\"></script>
    <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/toastify-js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js\" integrity=\"sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>

    ";
        // line 182
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("recap");
        echo "
    ";
        // line 183
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("sort");
        echo "


";
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
        return array (  292 => 183,  288 => 182,  281 => 177,  277 => 176,  272 => 173,  269 => 171,  258 => 169,  254 => 168,  251 => 166,  215 => 131,  213 => 130,  189 => 109,  172 => 95,  163 => 89,  159 => 87,  154 => 85,  151 => 84,  144 => 79,  142 => 78,  94 => 32,  73 => 12,  71 => 11,  64 => 7,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "recapitulatif/index.html.twig", "/home/cdosegxi/saved/saved/templates/recapitulatif/index.html.twig");
    }
}

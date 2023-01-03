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

/* admin/user.html.twig */
class __TwigTemplate_537aa41ad26920e188e0b9523ca20d8b extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/user.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/admintable.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css\">


<div class=\"content-container\">
    ";
        // line 11
        if ((($context["userAction"] ?? null) == null)) {
            // line 12
            echo "        <h2>Aucune action n'a été effectuée par cet utilisateur</h2>
        <img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/Human.png"), "html", null, true);
            echo "\" alt=\"human\" class=\"img-responsive\" style=\"margin: 0 auto;\" />
        </div>
    ";
        } else {
            // line 16
            echo "<div class=\"content-container\">
    <div class=\"content-info\">
        <h3> Rechercher dans les saisies de ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 18), "html", null, true);
            echo " </h3>
       
        <div class=\"totalDiv\">
            <div class=\"select-container\">
                <label>Années :</label>
                <select class=\"selectYear\" id=\"selectYear\"></select>
            </div>
            <div class=\"select-container\">
                <label>Mois :</label>
                <select class=\"selectMonth\" id=\"selectMonth\"></select>
            </div>
            <input type=\"submit\" class=\"btn-submit\" value=\"rechercher\">
        </div>
        ";
            // line 32
            echo "         <p class=\"totalH1 flex-start\"></p>

        <div class=\"sum-js\">
            <p class=\"alert-message\"></p>
            <p class=\"total-paragraphe\">Total de toutes les saisies :</p>
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
        ";
            // line 50
            echo "         <table class=\"sortable table\">
            <thead>
                <tr class=\"tr-first\">
                    <th data-column=\"association\" data-order=\"desc\" class=\"no-sort column\" >Association</th>
                    <th data-column=\"date\" data-order=\"desc\" class=\"column\">Date</th>
                    <th>Ville de départ</th>
                    <th>Ville d'arrivée</th>    
                    <th>Km</th>
                    <th>Raisons</th>
                    <th>Heure de départ</th>
                    <th>Heure d'arrivée</th>
                    <th>Durée</th>
                    <th>Frais</th>
                    <th>Don</th>
                    <th>A payer</th>
                    <th>Heures valorisées</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
                <tbody class=\"ajaxDivContent\">
                    ";
            // line 70
            $this->loadTemplate("admin/action_user.html.twig", "admin/user.html.twig", 70)->display($context);
            echo " 
                </tbody>
            </div>
        </div>

";
        }
        // line 76
        echo "
<div class=\"modal-adherer\">
    <h1 class=\"modalP\">Voulez vous vraiment supprimer cette saisie ?</h1>
    <img src=\"";
        // line 79
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

";
    }

    // line 91
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 92
        echo "    <script src=\"https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js\"></script>
  ";
        // line 93
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("admin");
        echo "
  ";
        // line 94
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("deleteActionSuperAdmin");
        echo "

";
    }

    public function getTemplateName()
    {
        return "admin/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 94,  176 => 93,  173 => 92,  169 => 91,  153 => 79,  148 => 76,  139 => 70,  117 => 50,  98 => 32,  82 => 18,  78 => 16,  72 => 13,  69 => 12,  67 => 11,  58 => 6,  54 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/user.html.twig", "/home/cdosegxi/saved/saved/templates/admin/user.html.twig");
    }
}

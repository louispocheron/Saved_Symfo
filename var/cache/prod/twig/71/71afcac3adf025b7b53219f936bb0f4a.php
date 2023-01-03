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

/* super_admin/user.html.twig */
class __TwigTemplate_b75a2e0f318b79b62fe4517e4dca66fd extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "super_admin/user.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo " superAdmin/user 
";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo " <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/admintable.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
 <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/superAdminTable.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css\">
<p>Administration de ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 10), "html", null, true);
        echo " </p>
    <table class=\"sortable table\">
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
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["actions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 32
            echo "                        <tr class=\"trtest tr-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "\">
                            <td data-label=\"Association\" class=\"td\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["action"], "association", [], "any", false, false, false, 33), "name", [], "any", false, false, false, 33), "html", null, true);
            echo "</td> 
                            <td data-label=\"Date\">";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "date", [], "any", false, false, false, 34), "d/m/Y"), "html", null, true);
            echo "</td>
                            <td data-label=\"Ville de départ\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "villeDepart", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                            <td data-label=\"Ville d'arrivée\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "villeArrive", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                            <td data-label=\"Km\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "km", [], "any", false, false, false, 37), "html", null, true);
            echo " km</td>
                            <td data-label=\"Raison\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "raisons", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                            <td data-label=\"Heure de départ\">";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "heureDepart", [], "any", false, false, false, 39), "H:i"), "html", null, true);
            echo "</td>
                            <td data-label=\"Heure d'arrivée\">";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "heureArrivee", [], "any", false, false, false, 40), "H:i"), "html", null, true);
            echo "</td>
                            <td data-label=\"Durée\" class=\"duree\" data-duree=\"";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "duree", [], "any", false, false, false, 41), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "duree", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                            <td data-label=\"Frais\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "frais", [], "any", false, false, false, 42), "html", null, true);
            echo "€</td>
                            <td data-label=\"Don\" class=\"donTd\" data-don=\"";
            // line 43
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "dons", [], "any", false, false, false, 43), 2), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "dons", [], "any", false, false, false, 43), 2), "html", null, true);
            echo "€</td>
                            <td data-label=\"A payer\" class=\"payerTd\" data-payer=\"";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "Apayer", [], "any", false, false, false, 44), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "Apayer", [], "any", false, false, false, 44), 2), "html", null, true);
            echo "€</td>
                            <td data-label=\"Heures valorisées\" class=\"lastchild valoriseesTd\" data-valorisees=\"";
            // line 45
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "heuresValorisees", [], "any", false, false, false, 45), 2), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "heuresValorisees", [], "any", false, false, false, 45), 2), "html", null, true);
            echo "</td>
                            <td class=\"last-td-poubelle\" data-id=\"";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "id", [], "any", false, false, false, 46), "html", null, true);
            echo "\"><i class=\"fa-solid fa-trash poubelle\"></i></a></td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                </tbody>
            </div>
        </div>

<div class=\"modal-adherer\">
    <h1 class=\"modalP\">Voulez vous vraiment supprimer cette saisie ?</h1>
    <img src=\"";
        // line 55
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
    </div>
";
    }

    // line 67
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "    <script src=\"https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js\"></script>
  ";
        // line 69
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("deleteActionSuperAdmin");
        echo "

";
    }

    public function getTemplateName()
    {
        return "super_admin/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 69,  201 => 68,  197 => 67,  181 => 55,  173 => 49,  164 => 46,  158 => 45,  152 => 44,  146 => 43,  142 => 42,  136 => 41,  132 => 40,  128 => 39,  124 => 38,  120 => 37,  116 => 36,  112 => 35,  108 => 34,  104 => 33,  99 => 32,  95 => 31,  71 => 10,  66 => 8,  61 => 7,  57 => 6,  52 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "super_admin/user.html.twig", "/home/cdosegxi/saved/saved/templates/super_admin/user.html.twig");
    }
}

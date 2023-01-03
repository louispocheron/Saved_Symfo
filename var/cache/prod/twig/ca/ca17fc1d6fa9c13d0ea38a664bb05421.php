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

/* super_admin/assoc.html.twig */
class __TwigTemplate_b45372341418ca68ccfd3612c827c3a6 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "super_admin/assoc.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo " superadmin association
";
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/supeadmin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <div>
            ";
        // line 15
        echo "        <div>
 <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


<div class=\"assoc-container\">
    <h3 class=\"assoc-name-main\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "name", [], "any", false, false, false, 20), "html", null, true);
        echo "</h3>
    ";
        // line 21
        if ((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "logo", [], "any", false, false, false, 21) != null)) {
            // line 22
            echo "        <img class=\"assoc-logo\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/build/logo_directory/" . twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "logo", [], "any", false, false, false, 22))), "html", null, true);
            echo "\" alt=\"logo de l'association\">
    ";
        } else {
            // line 24
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/default.PNG"), "html", null, true);
            echo "\" class=\"assoc-img-first default-image\"></img>
    ";
        }
        // line 26
        echo "    <h5 style=\"color:#505050\">Cette association est gérée par ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "user", [], "any", false, false, false, 26), "username", [], "any", false, false, false, 26), "html", null, true);
        echo "</h5>
    <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_action_change_admin", ["id" => twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 27)]), "html", null, true);
        echo "\"><button class=\"btn-yes custom-btn\">Changer l'administrateur</button></a>
</div>

<div class=\"main-container\">
    <table class=\"table\">
            <tr>
                <th>Utilisateur</th>
                <th>Email</th>
                <th>Supprimer</th>
            </tr>
    ";
        // line 37
        if (twig_test_empty(($context["users"] ?? null))) {
            // line 38
            echo "        <tr>
            <td>Aucun utilisateur</td>
            <td></td>
            <td></td>
        </tr>
    ";
        } else {
            // line 44
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 45
                echo "                <tr onclick=\"window.location='";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_user", ["id" => twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 45), "userID" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 45)]), "html", null, true);
                echo "'\">
                    <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 46), "html", null, true);
                echo "</td>
                    <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 47), "html", null, true);
                echo "</td>
                    <td><a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_user_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 48), "userID" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 48)]), "html", null, true);
                echo "\"><i class=\"fa-solid fa-trash\"></i></a></td>
                </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo " 
    ";
        }
        // line 52
        echo "    </table>
    <div class=\"full-card-container\">
        <h4>Total de toutes les saisies de ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "name", [], "any", false, false, false, 54), "html", null, true);
        echo "</h4>
        <div class=\"card-container\">
            <div class=\"homeCardAdmin\">
                <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/DONSPNG.png"), "html", null, true);
        echo "\" class='svg-home'>
                <h2 class=\"dons-card\"></h2>
                <h3>Dons</h3>
            </div>
            <div class=\"homeCardAdmin\">
                <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/REMBOURSEMENT-02.svg"), "html", null, true);
        echo "\" class='svg-home'>
                <h2 class=\"remboursement-card\"></h2>
                <h3>Remboursement</h3>
            </div>
            <div class=\"homeCardAdmin\">
                <i class=\"fa-solid fa-clock svg-homecard\"></i>
                <h2 class=\"heure-card\"></h2>
                <h3 class=\"heure-card-bene\">Heure de bénévolat</h3>
            </div>
            <div class=\"homeCardAdmin\">
                <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/VALORISATION-01.svg"), "html", null, true);
        echo "\" class='svg-home bene'>
                <h2 class=\"benevolat-card\"></h2>
                <h3>Bénévolat</h3>
            </div>
        </div>
    </div>
    </div>


";
    }

    // line 83
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 84
        echo "    <script src=\"https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js\"></script>
    ";
        // line 85
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("superAdmin");
        echo "
    ";
        // line 86
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("superAdminFetch");
        echo "

";
    }

    public function getTemplateName()
    {
        return "super_admin/assoc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 86,  207 => 85,  204 => 84,  200 => 83,  186 => 72,  173 => 62,  165 => 57,  159 => 54,  155 => 52,  151 => 50,  142 => 48,  138 => 47,  134 => 46,  129 => 45,  124 => 44,  116 => 38,  114 => 37,  101 => 27,  96 => 26,  90 => 24,  84 => 22,  82 => 21,  78 => 20,  71 => 16,  68 => 15,  61 => 10,  57 => 9,  52 => 6,  48 => 5,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "super_admin/assoc.html.twig", "/home/cdosegxi/saved/saved/templates/super_admin/assoc.html.twig");
    }
}

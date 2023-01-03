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

/* admin/index.html.twig */
class __TwigTemplate_4595936c5ed908f8fa7dfa34c6f91ec1 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Hello AdminController!";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

<div class=\"assoc-container\">
    <h3 class=\"assoc-pres\">administration de l'association :</h3>
    <h3 class=\"assoc-name\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "name", [], "any", false, false, false, 10), "html", null, true);
        echo "</h3>
    ";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "logo", [], "any", false, false, false, 11) != null)) {
            // line 12
            echo "        <img class=\"assoc-logo\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/build/logo_directory/" . twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "logo", [], "any", false, false, false, 12))), "html", null, true);
            echo "\" alt=\"logo de l'association\">
    ";
        } else {
            // line 14
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/default.PNG"), "html", null, true);
            echo "\" class=\"assoc-img-first default-image\"></img>
        ";
        }
        // line 16
        echo "</div>

<div class=\"main-container\">
    <table class=\"table\">
            <tr>
                <th>Utilisateur</th>
                <th>Email</th>
                <th>Supprimer</th>
            </tr>
    ";
        // line 25
        if (twig_test_empty(($context["users"] ?? null))) {
            // line 26
            echo "        <tr>
            <td>Aucun utilisateur</td>
            <td></td>
            <td></td>
        </tr>
    ";
        } else {
            // line 32
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 33
                echo "                <tr onclick=\"window.location='";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user", ["idAssoc" => twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 33), "id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 33)]), "html", null, true);
                echo "'\">
                    <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 34), "html", null, true);
                echo "</td>
                    <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 35), "html", null, true);
                echo "</td>
                    <td><a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_user", ["idAssoc" => twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 36), "id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 36)]), "html", null, true);
                echo "\"><i class=\"fa-solid fa-trash\"></i></a></td>
                </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo " 
    ";
        }
        // line 40
        echo "    
    </table>
    ";
        // line 42
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["users"] ?? null));
        echo "
    <div class=\"full-card-container\">
        <h4>Total de toutes les saisies de vos adhérants</h4>
        <div class=\"card-container\">
            <div class=\"homeCardAdmin\">
                <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/DONSPNG.png"), "html", null, true);
        echo "\" class='svg-home'>
                <h2 class=\"dons-card\"></h2>
                <h3>Dons</h3>
            </div>
            <div class=\"homeCardAdmin\">
                <img src=\"";
        // line 52
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
        // line 62
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

    // line 71
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 72
        echo "    <script src=\"https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js\"></script>
    ";
        // line 73
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("fetchData");
        echo "
    ";
        // line 74
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("sort");
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 74,  190 => 73,  187 => 72,  183 => 71,  170 => 62,  157 => 52,  149 => 47,  141 => 42,  137 => 40,  133 => 38,  124 => 36,  120 => 35,  116 => 34,  111 => 33,  106 => 32,  98 => 26,  96 => 25,  85 => 16,  79 => 14,  73 => 12,  71 => 11,  67 => 10,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/index.html.twig", "/home/cdosegxi/saved/saved/templates/admin/index.html.twig");
    }
}

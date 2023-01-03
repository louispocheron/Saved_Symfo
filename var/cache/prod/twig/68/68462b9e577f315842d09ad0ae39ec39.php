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

/* association/association.html.twig */
class __TwigTemplate_ed8771013ea77293fade290a0e1935bc extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "association/association.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "association";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo " <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/association.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
 <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css\">
    <div class=\"flex-me\">
        <div class=\"arrow-left\">
            <a href=\" ";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("association");
        echo " \"><i class=\"fa-solid fa-arrow-left\"></i></a>
        </div>
    <div class=\"unique-assoc-container\">
        <div class=\"unique-assoc-title\">
            <h1 class=\"assoc-name-fully\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "name", [], "any", false, false, false, 14), "html", null, true);
        echo "</h1>
            ";
        // line 15
        if ((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "logo", [], "any", false, false, false, 15) != null)) {
            // line 16
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/build/logo_directory/" . twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "logo", [], "any", false, false, false, 16))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "name", [], "any", false, false, false, 16), "html", null, true);
            echo "\" class=\"assoc-img\"/>
            ";
        } else {
            // line 18
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/default.PNG"), "html", null, true);
            echo "\" class=\"assoc-img-first\"></img>
            ";
        }
        // line 20
        echo "        </div>
        <span class=\"trait\"></span>
        <div class=\"assoc-description\">
            ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "description", [], "any", false, false, false, 23), "html", null, true);
        echo "
            ";
        // line 25
        echo "                <button type=\"button\" class=\"btn btn-primary btn-adherer\">adherer</button>
            ";
        // line 27
        echo "            ";
        // line 28
        echo "                <button type=\"button\" class=\"btn btn-primary btn-quitter\">quitter</button>
            ";
        // line 30
        echo "        </div>
    </div>
</div>

";
        // line 35
        echo "<div class=\"modal-adherer\">
    <h1>Voulez vous vraiment adherer a cette association ?</h1>
    ";
        // line 37
        if ((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "logo", [], "any", false, false, false, 37) != null)) {
            // line 38
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/build/logo_directory/" . twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "logo", [], "any", false, false, false, 38))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "name", [], "any", false, false, false, 38), "html", null, true);
            echo "\" class=\"assoc-img-modal\"/>
    ";
        } else {
            // line 40
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/default.PNG"), "html", null, true);
            echo "\" class=\"assoc-img-first default-image\"></img>
    ";
        }
        // line 42
        echo "    <div class='btn-container'>
        <a class=\"btnAdherer\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("association_adherer", ["id" => twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 43)]), "html", null, true);
        echo "\">
            <button class=\"btn-yes\">
                adhérer
            </button>
        </a>
        <button class=\"btn-no\">
            non
        </button>
    </div>
</div>

<div class=\"modal-desadherer\">
    <h1>Voulez vous vraiment quitter cette association ?</h1>
    ";
        // line 56
        if ((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "logo", [], "any", false, false, false, 56) != null)) {
            // line 57
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/build/logo_directory/" . twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "logo", [], "any", false, false, false, 57))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "name", [], "any", false, false, false, 57), "html", null, true);
            echo "\" class=\"assoc-img-modal\"/>
    ";
        } else {
            // line 59
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/default.PNG"), "html", null, true);
            echo "\" class=\"assoc-img-modal\"></img>
    ";
        }
        // line 61
        echo "    <div class='btn-container'>
        <a class=\"btnQuitter\" href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("association_quitter", ["id" => twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 62)]), "html", null, true);
        echo "\">
            <button class=\"btn-yes-quit\">
                Quitter 
            </button>
        </a>
        <button class=\"btn-no-quit\">
            non
        </button>
    </div>
</div>
</div>
</div>

";
    }

    // line 77
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "    <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/toastify-js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js\"></script>
    <script src=\"dist/notiflix-aio-3.2.5.min.js\"></script>

    ";
        // line 82
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("association");
        echo "



";
    }

    public function getTemplateName()
    {
        return "association/association.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 82,  197 => 78,  193 => 77,  175 => 62,  172 => 61,  166 => 59,  158 => 57,  156 => 56,  140 => 43,  137 => 42,  131 => 40,  123 => 38,  121 => 37,  117 => 35,  111 => 30,  108 => 28,  106 => 27,  103 => 25,  99 => 23,  94 => 20,  88 => 18,  80 => 16,  78 => 15,  74 => 14,  67 => 10,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "association/association.html.twig", "/home/cdosegxi/saved/saved/templates/association/association.html.twig");
    }
}

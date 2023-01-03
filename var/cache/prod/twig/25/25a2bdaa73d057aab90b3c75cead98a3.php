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

/* association/index.html.twig */
class __TwigTemplate_9ea56fdc2233638e31d7cdb4e97e0375 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "association/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Associations";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/association.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <div class=\"association-container\">
        <div class=\"input-pagination\">
            <input type=\"text\" id=\"search\" class=\"search-bar-input\" placeholder=\"Rechercher une association\">
            <div class=\"pagination-container\">
                ";
        // line 13
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["associations"] ?? null));
        echo "
            </div>
        </div>

        ";
        // line 17
        if ((($context["associations"] ?? null) == null)) {
            // line 18
            echo "            <h4>Aucune association</h4>
        ";
        } else {
            // line 20
            echo "            <div class=\"count mt-4 total-count\">
                <h4> il y a ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["associations"] ?? null), "getTotalItemCount", [], "any", false, false, false, 21), "html", null, true);
            echo " associations différentes</h4>
            </div> 
        ";
        }
        // line 24
        echo "        <div class=\"ajaxAssocContent\">
            ";
        // line 25
        $this->loadTemplate("association/ajax_view.html.twig", "association/index.html.twig", 25)->display($context);
        // line 26
        echo "        </div>
    </div>
    <div class=\"pagination-container mobile-pagination\">
        ";
        // line 29
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["associations"] ?? null));
        echo "
    </div>

";
    }

    // line 34
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "    <script src=\"https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js\"></script>
    ";
        // line 36
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("search");
        echo "
";
    }

    public function getTemplateName()
    {
        return "association/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 36,  115 => 35,  111 => 34,  103 => 29,  98 => 26,  96 => 25,  93 => 24,  87 => 21,  84 => 20,  80 => 18,  78 => 17,  71 => 13,  62 => 7,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "association/index.html.twig", "/home/cdosegxi/saved/saved/templates/association/index.html.twig");
    }
}

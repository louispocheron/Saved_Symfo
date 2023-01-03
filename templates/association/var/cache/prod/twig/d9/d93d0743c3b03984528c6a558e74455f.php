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
class __TwigTemplate_5456971c54e36f9e73541f911f0a7682 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Accueil";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 

<div class=\"home-container\">
    <h1 class=\"h1-home\"> Bienvenue sur <span>SAVED</span></h1>
    ";
        // line 9
        if ((($context["latest"] ?? null) == [])) {
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
            $context['_seq'] = twig_ensure_traversable(($context["latest"] ?? null));
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
    }

    // line 62
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  165 => 68,  158 => 63,  154 => 62,  148 => 59,  144 => 58,  133 => 53,  120 => 43,  112 => 38,  109 => 37,  105 => 36,  100 => 33,  92 => 28,  79 => 18,  71 => 13,  66 => 10,  64 => 9,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "/home/cdosegxi/saved/saved/templates/home/index.html.twig");
    }
}

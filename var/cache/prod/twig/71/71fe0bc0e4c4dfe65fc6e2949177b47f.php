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

/* association/ajax_view.html.twig */
class __TwigTemplate_71e9b7a4bc6dc3cef00b5ded74278610 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "    <ul class=\"associations\">
        ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["associations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["association"]) {
            // line 3
            echo "            <li class=\"assoc-li\">
                <a class=\"getAssocId uniqueAssoc\" href=\" ";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("unique_association", ["id" => twig_get_attribute($this->env, $this->source, $context["association"], "id", [], "any", false, false, false, 4)]), "html", null, true);
            echo " \" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "id", [], "any", false, false, false, 4), "html", null, true);
            echo "\">
                    <h3 class=\"assoc-name\">";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "name", [], "any", false, false, false, 5), "html", null, true);
            echo "</h3>
                    ";
            // line 6
            if ((twig_get_attribute($this->env, $this->source, $context["association"], "logo", [], "any", false, false, false, 6) != null)) {
                // line 7
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/build/logo_directory/" . twig_get_attribute($this->env, $this->source, $context["association"], "logo", [], "any", false, false, false, 7))), "html", null, true);
                echo "\" class=\"assoc-img-first\"></img>
                    ";
            } else {
                // line 9
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/default.PNG"), "html", null, true);
                echo "\" class=\"assoc-img-first\"></img>
                    ";
            }
            // line 11
            echo "                </a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['association'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </ul>

";
    }

    public function getTemplateName()
    {
        return "association/ajax_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 14,  71 => 11,  65 => 9,  59 => 7,  57 => 6,  53 => 5,  47 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "association/ajax_view.html.twig", "/home/cdosegxi/saved/saved/templates/association/ajax_view.html.twig");
    }
}

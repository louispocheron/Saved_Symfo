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

/* super_admin/index.html.twig */
class __TwigTemplate_d1d705b81d18c5686c94878c15db879b extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "super_admin/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Hello SuperAdminController!";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/supeadmin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


    <div class=\"count mt-4\">
        <h4> il y a ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["associations"] ?? null), "getTotalItemCount", [], "any", false, false, false, 10), "html", null, true);
        echo " associations différentes </h4>
    </div>

    <ul class=\"associations\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["associations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["association"]) {
            // line 15
            echo "            <li class=\"assoc-li\">
                <a class=\"getAssocId uniqueAssoc\" href=\" ";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_assoc", ["id" => twig_get_attribute($this->env, $this->source, $context["association"], "id", [], "any", false, false, false, 16)]), "html", null, true);
            echo " \" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "id", [], "any", false, false, false, 16), "html", null, true);
            echo "\">
                    <h3 class=\"assoc-name\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "name", [], "any", false, false, false, 17), "html", null, true);
            echo "</h3>
                    ";
            // line 19
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["association"], "logo", [], "any", false, false, false, 19) != null)) {
                // line 20
                echo "                        <img class=\"assoc-logo\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/build/logo_directory/" . twig_get_attribute($this->env, $this->source, $context["association"], "logo", [], "any", false, false, false, 20))), "html", null, true);
                echo "\" alt=\"logo de l'association\">
                    ";
            } else {
                // line 22
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/default.PNG"), "html", null, true);
                echo "\" class=\"assoc-img-first default-image\"></img>
                    ";
            }
            // line 24
            echo "                    <p class=\"card-description\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "description", [], "any", false, false, false, 24), "html", null, true);
            echo "</p>
                </a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['association'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    </ul>

<div class=\"pagination d-flex justify-content-center\">
    ";
        // line 31
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["associations"] ?? null));
        echo "
</div>




";
    }

    public function getTemplateName()
    {
        return "super_admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 31,  116 => 28,  105 => 24,  99 => 22,  93 => 20,  90 => 19,  86 => 17,  80 => 16,  77 => 15,  73 => 14,  66 => 10,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "super_admin/index.html.twig", "/home/cdosegxi/saved/saved/templates/super_admin/index.html.twig");
    }
}

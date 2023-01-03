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

/* saisie/index.html.twig */
class __TwigTemplate_7078c9381ecd34ba0380702d60b4e1e2 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "saisie/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Saisie";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo " <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/saisie.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
 <link rel=\"stylesheet\" type=\"text/css\" href=\"https://npmcdn.com/flatpickr/dist/themes/material_blue.css\">

";
        // line 9
        if ((($context["isAssoc"] ?? null) == [])) {
            // line 10
            echo "<div class=\"container-no\">
    <h2 style=\"text-align: center;\">Vous devez d'abord adhérer à une association avant de faire des saisies</h2>
    <h3 style=\"text-align: center;\">Retrouvez la liste des associations</h3>
    <a href='";
            // line 13
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("association");
            echo "' class=\"btn-basic ref\">ici</a>

    <img src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/Human.png"), "html", null, true);
            echo "\" alt=\"human\" class=\"img-responsive\" style=\"margin: 0 auto;\">
</div>
";
        } else {
            // line 18
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 18) == true)) {
                // line 19
                echo "        ";
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
                echo "
            <div class=\"form-saisie\">
                <div class=\"evenement1 firstable\">
                    <div class=\"h1-row event\">ÉVÈNEMENT</div>
                    <div class=\"input-container firstC\">
                        <div class=\"date-assoc first\">
                            <div class='rowSaisie'>
                                <legend class=\"label\">Date</legend>
                                ";
                // line 27
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 27), 'widget');
                echo "
                            </div>
                            <div class='rowSaisie'>
                                <div class=\"info-supp\">
                                    <label class=\"label\">Association</label>
                                </div>
                                ";
                // line 33
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "association", [], "any", false, false, false, 33), 'widget');
                echo "
                            </div>
                        </div>
                        <div class=\"date-assoc\">
                            <div class='rowSaisie'>
                                <label class=\"label\">Ville de départ</label>
                                ";
                // line 39
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "villeDepart", [], "any", false, false, false, 39), 'widget');
                echo "
                            </div>

                            <div class='rowSaisie'>
                                <label class=\"label\">Ville d'arrivée</label>
                                ";
                // line 44
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "villeArrive", [], "any", false, false, false, 44), 'widget');
                echo "
                            </div>
                            <div class='rowSaisie bottom-input'>
                                <label class=\"label\">Nature du déplacement</label>
                                ";
                // line 48
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "raisons", [], "any", false, false, false, 48), 'widget');
                echo "
                            </div>
                        </div>
                    </div>
                    ";
                // line 53
                echo "                </div>
                <div class=\"evenement1 first\">
                    <div class=\"h1-row second event\">VALORISATION DES HEURES</div>
                    <div class=\"input-container firstC\">
                        <div class=\"date-assoc first\">
                            <div class='rowSaisie hours'>
                                <label class=\"label\">Heure de départ</label>
                                ";
                // line 60
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "heureDepart", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "heure"]]);
                echo "
                            </div>

                            <div class='rowSaisie hours secondary'>
                                <label class=\"label\">Heure d'arrivée</label>
                                ";
                // line 65
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "heureArrivee", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "heure"]]);
                echo "
                            </div>
                        </div>
                        <div class=\"date-assoc\">
                            <div class='rowSaisie'>
                                <label class=\"label\">Durée</label>
                                ";
                // line 71
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "duree", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "dureeInput disabled"]]);
                echo "
                            </div>
                            <div class='rowSaisie row'>
                                <div class=\"groupe-container\">
                                    <label class=\"label\">Groupe</label>
                                    ";
                // line 76
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "groupe", [], "any", false, false, false, 76), 'widget', ["attr" => ["class" => "heure groupe groupeSelect"]]);
                echo "
                                </div>
                                <div class=\"groupe-container\">
                                    <label class=\"label\">Taux horaire</label>
                                    <input type=\"text\" class=\"pourcentage-input disabled\" disabled />
                                </div>
                            </div>
                            <div class='rowSaisie' id=\"chargeInputId\" data-charges='";
                // line 83
                echo twig_escape_filter($this->env, ($context["charges"] ?? null), "html", null, true);
                echo "'>
                                <label class=\"label\">Charges</label>
                                ";
                // line 85
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "charges", [], "any", false, false, false, 85), 'widget', ["attr" => ["class" => "heure bottom-input disabled"]]);
                echo "
                            </div>
                        </div>
                    </div>
                </div>
            <div class=\"evenement1 bottom-container\">
                <div class=\"h1-row troisieme\">FRAIS DE DÉPLACEMENT</div>
                <div class=\"input-container\">
                    <div class=\"date-assoc\">
                        <div class='rowSaisie' id=\"km\">
                            <label>Kilomètrage</label>
                            ";
                // line 96
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "km", [], "any", false, false, false, 96), 'widget', ["attr" => ["class" => "kmInput"]]);
                echo "
                        </div>
                        ";
                // line 102
                echo "                           <div class='rowSaisie'>
                            <label>Barème km</label>
                            ";
                // line 104
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "bareme", [], "any", false, false, false, 104), 'widget', ["attr" => ["class" => "bareme bottom-input"]]);
                echo "
                        </div>
                    </div>
                    <div class=\"date-assoc\">
                        <div class='rowSaisie'>
                            <label>Autres frais</label>
                            ";
                // line 110
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "frais", [], "any", false, false, false, 110), 'widget', ["attr" => ["class" => "coutInput"]]);
                echo "
                        </div>

                        
                        <div class='rowSaisie'>
                            <label>Frais kilométriques</label>
                            ";
                // line 116
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "fraisKilometrique", [], "any", false, false, false, 116), 'widget', ["attr" => ["class" => "fraisInput bottom-input disabled"]]);
                echo "
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"evenement1 bottom-container\">
                <div class=\"h1-row\">TOTAUX</div>
                <div class=\"input-container\">
                    <div class=\"date-assoc\">
                        <div class='rowSaisie'>
                            <label>Total note de frais</label>
                            <input  class=\"totalNote disabled\" type=\"text\" name=\"totalNote\" value=\"0\" disabled>
                        </div>

                        <div class='rowSaisie'>
                            <label>Dons</label>
                            ";
                // line 132
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "dons", [], "any", false, false, false, 132), 'widget', ["attr" => ["class" => "donsInput bottom-input disabled"]]);
                echo "
                        </div>
                    </div>
                    <div class=\"date-assoc\">
                        <div class='rowSaisie'>
                            <label>Remboursement</label>
                            ";
                // line 138
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "aPayer", [], "any", false, false, false, 138), 'widget', ["attr" => ["class" => "apayerInput"]]);
                echo "
                        </div>

                        <div class='rowSaisie'>
                            <label>Heures valorisées</label>
                            ";
                // line 143
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "heuresValorisees", [], "any", false, false, false, 143), 'widget', ["attr" => ["class" => "heureValoriseesInput bottom-input"]]);
                echo "
                        </div>
                    </div>
                </div> 
            </div>
                    <div class='rowSaisie btn-container'>
                            ";
                // line 149
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "enregistrer", [], "any", false, false, false, 149), 'widget', ["attr" => ["class" => "btn-basic fonted"]]);
                echo "
                    </div>
                </div>
            </div>
        ";
                // line 153
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
                echo "


        ";
                // line 157
                echo "        <div class=\"modal-saisie\">
            <h1 class=\"modalP dangerP\">Vous êtes sur le point de modifier le taux de remboursement des frais kilométriques !</h1>
            <i class=\"fa-solid fa-circle-exclamation logo-modal\"></i>
            <p>Si vous souhaitez renoncer au remboursement d’une partie ou de la totalité de vos frais afin de bénéficier de réductions d’impôts, veillez à respecter le taux en vigueur (Ref. barème fiscal de remboursement applicable)</p>
            <button class=\"btn-oui\">
                <p class=\"je-comprends\">Je comprends</p>
            </button>
        </div>

    ";
            } else {
                // line 167
                echo "        <h1>devez etre connectez pour faire une saisie</h1>
    ";
            }
            // line 169
            echo "    ";
        }
        // line 170
        echo "

    ";
    }

    // line 174
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 175
        echo "
        <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/toastify-js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js\"></script>

        ";
        // line 179
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("saisie");
        echo "
        ";
        // line 180
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("sort");
        echo "


    ";
    }

    public function getTemplateName()
    {
        return "saisie/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 180,  322 => 179,  316 => 175,  312 => 174,  306 => 170,  303 => 169,  299 => 167,  287 => 157,  281 => 153,  274 => 149,  265 => 143,  257 => 138,  248 => 132,  229 => 116,  220 => 110,  211 => 104,  207 => 102,  202 => 96,  188 => 85,  183 => 83,  173 => 76,  165 => 71,  156 => 65,  148 => 60,  139 => 53,  132 => 48,  125 => 44,  117 => 39,  108 => 33,  99 => 27,  87 => 19,  84 => 18,  78 => 15,  73 => 13,  68 => 10,  66 => 9,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "saisie/index.html.twig", "/home/cdosegxi/saved/saved/templates/saisie/index.html.twig");
    }
}

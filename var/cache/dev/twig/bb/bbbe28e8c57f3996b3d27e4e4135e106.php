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

/* faq/index.html.twig */
class __TwigTemplate_37ae38bf1773073d7666472407ec3e1c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "faq/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "faq/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "faq/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "FAQ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo " <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/faq.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <div class=\"container\">
        <h1 style=\"color: #505050\">INFOS PRATIQUES</h1>
        <div class=\"question-container\">
            <h3>Protection des données / RGPD</h3>  
            <p>En soumettant ce formulaire, vous acceptez que les informations personnelles saisies
soient recueillies par le CDOS 21, gestionnaire de la plateforme, à titre illimité temps que
vous n’en faites pas la demande de suppression. Ces données sont récoltées dans un but
de bon fonctionnement du site, fonctionnement nécessitant le recueil de l’ensemble ces
informations, elles sont par conséquent obligatoires à l’inscription. Le responsable délégué à
la protection des données est Mario Jobard, salarié du CDOS, que vous pouvez contacter
pour toute question relative à ce sujet à l’adresse-mail suivante :
<a href=\"https://cdos21.org/\">crib.cotedor@franceolympique.com</a>. Pour de plus amples détails, merci de vous référer
aux mentions légales du site, dans la partie « 6. Gestion des données personnelles</p> 
        </div>
        <div class=\"question-container\">
            <h3>Mentions légales</h3>  
            <p>SAVED, autrement dit, Simplification Administrative Valorisation et Déplacements, est un outil permettant d’effectuer, pour un bénévole, son relevé de déplacements bénévoles et de valoriser son apport bénévole. Concrètement, principalement, il permet pour un bénévole : de réaliser ses relevés de déplacements & d’avoir un suivi de ses frais de bénévoles, de demander le remboursement de ses frais ou y renoncer sous forme de don, d’obtenir des réductions d’impôts en fonction des dons et sous certaines conditions, de valoriser financièrement son bénévolat & rendre compte de son utilité sociale, d’avoir un suivi horaire de son bénévolat & d’acquérir des droits de formation sur son Compte Engagement Citoyen.
            <br> 

          C’est une plateforme étant également utile pour les associations. En effet, elle permet, notamment, pour ces dernières, de rembourser les frais bénévoles ou émettre un reçu fiscal en cas de don avec un justificatif clair, simple et précis, d’avoir un suivi des dons annuels par bénévole afin de les saisir dans la comptabilité, d’inscrire la valorisation financière du bénévolat au sein des comptes 8, de certifier des heures de bénévolats déclarées sur lecomptebenevole en lien avec le Compte Engagement Citoyen.
         <br> 
            En vertu de l’article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique, il est précisé aux utilisateurs de l’application web et mobile SAVED, l'identité des différents intervenants dans le cadre de sa réalisation et de son suivi :
            <br>
            </p> 
            <ul class=\"ul-container\">
                <li>Propriétaire :</li>
                <ul>
                    <li>CDOS de Côte-d’Or – 1 Rue Jean Monnet, 21300 Chenôve</li>
                </ul>
            </ul>
            <ul class=\"ul-container\">
                <li>Contacts du Propriétaire :</li>
                <ul>
                    <li>Téléphone : 03-80-45-84-85</li>
                    <li>Mail : cotedor@franceolympique.com</li>
                </ul>
            </ul>
            <ul class=\"ul-container\">
                <li>Hébergeur :</li>
                <ul>
                    <li>OVH – 2 rue Kellermann, BP 80157, 59100 Roubaix</li>
                    <li>support@ovh.com</li>
                </ul>
            </ul>
            
        </div>
        <div class=\"question-container\">
            <h3>Conditions générales d’utilisation du site et des services proposés</h3>  
            <p>L’utilisation de l’application SAVED implique l’acceptation pleine et entière des conditions générales d’utilisation ci-après décrites. Ces conditions d’utilisation sont susceptibles d’être modifiées ou complétées à tout moment, les utilisateurs de l’application SAVED sont donc invités à les consulter de manière régulière.
            <br>
    Cette application est normalement accessible à tout moment aux utilisateurs. Une interruption pour raison de maintenance technique peut être toutefois décidée par CDOS de Côte-d’Or, qui s’efforcera alors de communiquer préalablement aux utilisateurs les dates et heures de l’intervention.
    <br> 
    L’application SAVED est mise à jour régulièrement par CDOS de Côte-d’Or. De la même manière, les mentions légales peuvent être modifiées à tout moment : elles s’imposent néanmoins à l’utilisateur qui est invité à s’y référer le plus souvent possible afin d’en prendre connaissance.
</p> 
        </div>
        <div class=\"question-container\">
            <h3>Propriété intellectuelle et contrefaçons</h3>  
            <p>Le CDOS de Côte-d’Or est propriétaire des droits de propriété intellectuelle ou détient les droits d’usage sur tous les éléments accessibles de l’application SAVED, notamment textes, images, graphismes, logos, icônes, sons…
            <br>
            Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de la part du CDOS de Côte-d’Or.
            <br>
            Toute exploitation non autorisée de l’application ou de l’un quelconque des éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 du Code de Propriété Intellectuelle.
            </p> 
        </div>
        <div class=\"question-container\">
            <h3>Limitations de responsabilités</h3>  
            <p>
            Le CDOS de Côte-d’Or ne pourra en aucun cas être tenu responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès à l’application SAVED, et résultant soit de l’utilisation d’un matériel ne répondant pas aux spécifications évoquées au point 4, soit de l’apparition d’un bug ou d’une incompatibilité de l’application. 
            <br>
            Le CDOS de Côte-d’Or ne pourra également pas être tenu pour responsable des dommages indirects consécutifs à l’utilisation de l’application SAVED.
            <br>
            Des espaces interactifs (possibilité de poser des questions dans l’espace contact) sont à la disposition des utilisateurs. Le CDOS de Côte d'Or se réserve le droit de supprimer, sans mise en demeure préalable, tout contenu déposé dans cet espace qui contreviendrait à la législation applicable en France, en particulier aux dispositions relatives à la protection des données. Le cas échéant, le CDOS de Côte d'Or se réserve également la possibilité de mettre en cause la responsabilité civile et/ou pénale de l’utilisateur, notamment en cas de message à caractère raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilisé (texte, photographie…).
            </p> 
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "faq/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}FAQ{% endblock %}

{% block body %}
 <link href=\"{{ asset('css/faq.css') }}\" rel=\"stylesheet\">

    <div class=\"container\">
        <h1 style=\"color: #505050\">INFOS PRATIQUES</h1>
        <div class=\"question-container\">
            <h3>Protection des données / RGPD</h3>  
            <p>En soumettant ce formulaire, vous acceptez que les informations personnelles saisies
soient recueillies par le CDOS 21, gestionnaire de la plateforme, à titre illimité temps que
vous n’en faites pas la demande de suppression. Ces données sont récoltées dans un but
de bon fonctionnement du site, fonctionnement nécessitant le recueil de l’ensemble ces
informations, elles sont par conséquent obligatoires à l’inscription. Le responsable délégué à
la protection des données est Mario Jobard, salarié du CDOS, que vous pouvez contacter
pour toute question relative à ce sujet à l’adresse-mail suivante :
<a href=\"https://cdos21.org/\">crib.cotedor@franceolympique.com</a>. Pour de plus amples détails, merci de vous référer
aux mentions légales du site, dans la partie « 6. Gestion des données personnelles</p> 
        </div>
        <div class=\"question-container\">
            <h3>Mentions légales</h3>  
            <p>SAVED, autrement dit, Simplification Administrative Valorisation et Déplacements, est un outil permettant d’effectuer, pour un bénévole, son relevé de déplacements bénévoles et de valoriser son apport bénévole. Concrètement, principalement, il permet pour un bénévole : de réaliser ses relevés de déplacements & d’avoir un suivi de ses frais de bénévoles, de demander le remboursement de ses frais ou y renoncer sous forme de don, d’obtenir des réductions d’impôts en fonction des dons et sous certaines conditions, de valoriser financièrement son bénévolat & rendre compte de son utilité sociale, d’avoir un suivi horaire de son bénévolat & d’acquérir des droits de formation sur son Compte Engagement Citoyen.
            <br> 

          C’est une plateforme étant également utile pour les associations. En effet, elle permet, notamment, pour ces dernières, de rembourser les frais bénévoles ou émettre un reçu fiscal en cas de don avec un justificatif clair, simple et précis, d’avoir un suivi des dons annuels par bénévole afin de les saisir dans la comptabilité, d’inscrire la valorisation financière du bénévolat au sein des comptes 8, de certifier des heures de bénévolats déclarées sur lecomptebenevole en lien avec le Compte Engagement Citoyen.
         <br> 
            En vertu de l’article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique, il est précisé aux utilisateurs de l’application web et mobile SAVED, l'identité des différents intervenants dans le cadre de sa réalisation et de son suivi :
            <br>
            </p> 
            <ul class=\"ul-container\">
                <li>Propriétaire :</li>
                <ul>
                    <li>CDOS de Côte-d’Or – 1 Rue Jean Monnet, 21300 Chenôve</li>
                </ul>
            </ul>
            <ul class=\"ul-container\">
                <li>Contacts du Propriétaire :</li>
                <ul>
                    <li>Téléphone : 03-80-45-84-85</li>
                    <li>Mail : cotedor@franceolympique.com</li>
                </ul>
            </ul>
            <ul class=\"ul-container\">
                <li>Hébergeur :</li>
                <ul>
                    <li>OVH – 2 rue Kellermann, BP 80157, 59100 Roubaix</li>
                    <li>support@ovh.com</li>
                </ul>
            </ul>
            
        </div>
        <div class=\"question-container\">
            <h3>Conditions générales d’utilisation du site et des services proposés</h3>  
            <p>L’utilisation de l’application SAVED implique l’acceptation pleine et entière des conditions générales d’utilisation ci-après décrites. Ces conditions d’utilisation sont susceptibles d’être modifiées ou complétées à tout moment, les utilisateurs de l’application SAVED sont donc invités à les consulter de manière régulière.
            <br>
    Cette application est normalement accessible à tout moment aux utilisateurs. Une interruption pour raison de maintenance technique peut être toutefois décidée par CDOS de Côte-d’Or, qui s’efforcera alors de communiquer préalablement aux utilisateurs les dates et heures de l’intervention.
    <br> 
    L’application SAVED est mise à jour régulièrement par CDOS de Côte-d’Or. De la même manière, les mentions légales peuvent être modifiées à tout moment : elles s’imposent néanmoins à l’utilisateur qui est invité à s’y référer le plus souvent possible afin d’en prendre connaissance.
</p> 
        </div>
        <div class=\"question-container\">
            <h3>Propriété intellectuelle et contrefaçons</h3>  
            <p>Le CDOS de Côte-d’Or est propriétaire des droits de propriété intellectuelle ou détient les droits d’usage sur tous les éléments accessibles de l’application SAVED, notamment textes, images, graphismes, logos, icônes, sons…
            <br>
            Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de la part du CDOS de Côte-d’Or.
            <br>
            Toute exploitation non autorisée de l’application ou de l’un quelconque des éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 du Code de Propriété Intellectuelle.
            </p> 
        </div>
        <div class=\"question-container\">
            <h3>Limitations de responsabilités</h3>  
            <p>
            Le CDOS de Côte-d’Or ne pourra en aucun cas être tenu responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès à l’application SAVED, et résultant soit de l’utilisation d’un matériel ne répondant pas aux spécifications évoquées au point 4, soit de l’apparition d’un bug ou d’une incompatibilité de l’application. 
            <br>
            Le CDOS de Côte-d’Or ne pourra également pas être tenu pour responsable des dommages indirects consécutifs à l’utilisation de l’application SAVED.
            <br>
            Des espaces interactifs (possibilité de poser des questions dans l’espace contact) sont à la disposition des utilisateurs. Le CDOS de Côte d'Or se réserve le droit de supprimer, sans mise en demeure préalable, tout contenu déposé dans cet espace qui contreviendrait à la législation applicable en France, en particulier aux dispositions relatives à la protection des données. Le cas échéant, le CDOS de Côte d'Or se réserve également la possibilité de mettre en cause la responsabilité civile et/ou pénale de l’utilisateur, notamment en cas de message à caractère raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilisé (texte, photographie…).
            </p> 
        </div>
    </div>

{% endblock %}
", "faq/index.html.twig", "/mnt/c/Users/pocheron/Desktop/Saved_Symfo/templates/faq/index.html.twig");
    }
}

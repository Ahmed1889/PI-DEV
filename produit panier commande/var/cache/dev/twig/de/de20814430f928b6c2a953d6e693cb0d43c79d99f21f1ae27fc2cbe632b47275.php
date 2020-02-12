<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Back/Produit/affiche_produit.html.twig */
class __TwigTemplate_9e151ce718cd071ea6e220a62b5f68d4be73d3e98d7f8a374507ee6ae271b32f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'bodyBack' => [$this, 'block_bodyBack'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseBack.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Back/Produit/affiche_produit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Back/Produit/affiche_produit.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "@Back/Produit/affiche_produit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_bodyBack($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyBack"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyBack"));

        // line 3
        echo "    <br>
    <h2><strong>Liste des produits :</strong></h2>
    <br>
    <table class=\"table table-striped\">
        <tr align=\"center\"  >
            <td><b>ID</b></td>
            <td><b>Libelle</b></td>
            <td><b>Description</b></td>
            <td><b>Categorie</b></td>
            <td><b>Prix d'achat</b></td>
            <td><b>Prix de vente</b></td>
            <td><b>Image</b></td>
            <td colspan=\"2\"><b>Action</b></td>

        </tr>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produit"] ?? $this->getContext($context, "produit")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 19
            echo "            <tr align=\" center\" >
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", []), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "libelleP", []), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "description", []), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "categorie", []), "libelleC", []), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "prixAchat", []), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "prixVente", []), "html", null, true);
            echo "</td>
                <td><img class=\"imageproduit\" src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("photos/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "image", []), "html", null, true);
            echo "\"></td>
                <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifier_produit", ["id" => $this->getAttribute($context["p"], "id", [])]), "html", null, true);
            echo "\"><i class=\"fa fa-edit\" style=\"color:#2e6da4 \" ></i></a></td>
                <td><a class=\"confirmModal\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer_produit", ["id" => $this->getAttribute($context["p"], "id", [])]), "html", null, true);
            echo "\" ><i class=\"fa fa-trash\" style=\"color: #ff6c5f\"></i></a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    </table>
    <div id=\"dialog-confirm\" title=\"Confirmation de la suppression\" style=\"display:none;\">
        <p>
            <span class=\"ui-icon ui-icon-alert\" style=\"float:left; margin:0 7px 20px 0;\"></span>
            Etes-vous sûr de vouloir supprimer ce produit ?
        </p>
    </div>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Back/Produit/affiche_produit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 31,  117 => 28,  113 => 27,  108 => 26,  104 => 25,  100 => 24,  96 => 23,  92 => 22,  88 => 21,  84 => 20,  81 => 19,  77 => 18,  60 => 3,  51 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}
{% block bodyBack %}
    <br>
    <h2><strong>Liste des produits :</strong></h2>
    <br>
    <table class=\"table table-striped\">
        <tr align=\"center\"  >
            <td><b>ID</b></td>
            <td><b>Libelle</b></td>
            <td><b>Description</b></td>
            <td><b>Categorie</b></td>
            <td><b>Prix d'achat</b></td>
            <td><b>Prix de vente</b></td>
            <td><b>Image</b></td>
            <td colspan=\"2\"><b>Action</b></td>

        </tr>
        {% for p in produit %}
            <tr align=\" center\" >
                <td>{{p.id}}</td>
                <td>{{p.libelleP}}</td>
                <td>{{p.description}}</td>
                <td>{{p.categorie.libelleC}}</td>
                <td>{{p.prixAchat}}</td>
                <td>{{p.prixVente}}</td>
                <td><img class=\"imageproduit\" src=\"{{ asset( 'photos/') }}{{ p.image }}\"></td>
                <td><a href=\"{{ path('modifier_produit',{'id':p.id}) }}\"><i class=\"fa fa-edit\" style=\"color:#2e6da4 \" ></i></a></td>
                <td><a class=\"confirmModal\" href=\"{{ path('supprimer_produit',{'id':p.id}) }}\" ><i class=\"fa fa-trash\" style=\"color: #ff6c5f\"></i></a></td>
            </tr>
        {% endfor %}
    </table>
    <div id=\"dialog-confirm\" title=\"Confirmation de la suppression\" style=\"display:none;\">
        <p>
            <span class=\"ui-icon ui-icon-alert\" style=\"float:left; margin:0 7px 20px 0;\"></span>
            Etes-vous sûr de vouloir supprimer ce produit ?
        </p>
    </div>




{% endblock %}", "@Back/Produit/affiche_produit.html.twig", "/Applications/MAMP/htdocs/pi3/src/BackBundle/Resources/views/Produit/affiche_produit.html.twig");
    }
}

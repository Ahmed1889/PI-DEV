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
class __TwigTemplate_6ec6af2ecd6f31051f0136b6746bdd0f2dd02b9ff1ef6ea34723c67fa3647998 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'js2' => [$this, 'block_js2'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Back/Produit/affiche_produit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Back/Produit/affiche_produit.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "@Back/Produit/affiche_produit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_js2($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js2"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js2"));

        // line 3
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div>
            <form action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficher_produit");
        echo "\" method=\"get\">
            <label for=\"filter\">Filtrer</label>
            <input name=\"filter\" type=\"text\" id=\"input\">
                <button type=\"submit\" class=\"btn btn-default btn-sm\">Filtrer maintenant</button>
            </form>

    </div>
    <br>
    <h2><strong>Liste des produits :</strong></h2>
    <br>
    <table class=\"table table-striped\" id=\"tableau\">
        <tr align=\"center\"  >
            <td><b>";
        // line 19
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["produit"] ?? $this->getContext($context, "produit")), "Id", "bp.id");
        echo "</b></td>
            <td><b>";
        // line 20
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["produit"] ?? $this->getContext($context, "produit")), "Libelle produit", "bp.libelleP");
        echo "</b></td>
            <td><b>";
        // line 21
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["produit"] ?? $this->getContext($context, "produit")), "Description", "bp.description");
        echo "</b></td>
            <td><b>";
        // line 22
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["produit"] ?? $this->getContext($context, "produit")), "Categorie", "");
        echo "</b></td>
            <td><b>";
        // line 23
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["produit"] ?? $this->getContext($context, "produit")), "Prix achat", "bp.prixAchat");
        echo "</b></td>
            <td><b>";
        // line 24
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["produit"] ?? $this->getContext($context, "produit")), "Prix vente", "bp.prixVente");
        echo "</b></td>
            <td><b>Image</b></td>
            <td><b>";
        // line 26
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["produit"] ?? $this->getContext($context, "produit")), "Nbr vues", "bp.nbrVues");
        echo "</b></td>
            <td colspan=\"2\"><b>Action</b></td>

        </tr>
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produit"] ?? $this->getContext($context, "produit")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 31
            echo "            <tr align=\" center\" >
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", []), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "libelleP", []), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "description", []), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "categorie", []), "libelleC", []), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "prixAchat", []), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "prixVente", []), "html", null, true);
            echo "</td>
                <td><img style=\"height: 35px ; width: 35px\" src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("photos/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "image", []), "html", null, true);
            echo "\"></td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "nbrVues", []), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifier_produit", ["id" => $this->getAttribute($context["p"], "id", [])]), "html", null, true);
            echo "\"><i class=\"fa fa-edit\" style=\"color:#2e6da4 \" ></i></a></td>
                <td><a class=\"confirmModal\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer_produit", ["id" => $this->getAttribute($context["p"], "id", [])]), "html", null, true);
            echo "\" ><i class=\"fa fa-trash\" style=\"color: #ff6c5f\"></i></a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "    </table>
    <div class=\"navigation text-center\">
        ";
        // line 46
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["produit"] ?? $this->getContext($context, "produit")));
        echo "
    </div>
    <a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajout_produit");
        echo "\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> ajouter produit </span></a>
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
        return array (  193 => 48,  188 => 46,  184 => 44,  175 => 41,  171 => 40,  167 => 39,  162 => 38,  158 => 37,  154 => 36,  150 => 35,  146 => 34,  142 => 33,  138 => 32,  135 => 31,  131 => 30,  124 => 26,  119 => 24,  115 => 23,  111 => 22,  107 => 21,  103 => 20,  99 => 19,  84 => 7,  81 => 6,  72 => 5,  61 => 3,  52 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}
{% block js2 %}

{% endblock %}
{% block body %}
    <div>
            <form action=\"{{ path('afficher_produit') }}\" method=\"get\">
            <label for=\"filter\">Filtrer</label>
            <input name=\"filter\" type=\"text\" id=\"input\">
                <button type=\"submit\" class=\"btn btn-default btn-sm\">Filtrer maintenant</button>
            </form>

    </div>
    <br>
    <h2><strong>Liste des produits :</strong></h2>
    <br>
    <table class=\"table table-striped\" id=\"tableau\">
        <tr align=\"center\"  >
            <td><b>{{ knp_pagination_sortable(produit, 'Id','bp.id') }}</b></td>
            <td><b>{{ knp_pagination_sortable(produit, 'Libelle produit','bp.libelleP') }}</b></td>
            <td><b>{{ knp_pagination_sortable(produit, 'Description','bp.description') }}</b></td>
            <td><b>{{ knp_pagination_sortable(produit, 'Categorie','') }}</b></td>
            <td><b>{{ knp_pagination_sortable(produit, 'Prix achat','bp.prixAchat') }}</b></td>
            <td><b>{{ knp_pagination_sortable(produit, 'Prix vente','bp.prixVente') }}</b></td>
            <td><b>Image</b></td>
            <td><b>{{ knp_pagination_sortable(produit, 'Nbr vues','bp.nbrVues') }}</b></td>
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
                <td><img style=\"height: 35px ; width: 35px\" src=\"{{ asset( 'photos/') }}{{ p.image }}\"></td>
                <td>{{p.nbrVues}}</td>
                <td><a href=\"{{ path('modifier_produit',{'id':p.id}) }}\"><i class=\"fa fa-edit\" style=\"color:#2e6da4 \" ></i></a></td>
                <td><a class=\"confirmModal\" href=\"{{ path('supprimer_produit',{'id':p.id}) }}\" ><i class=\"fa fa-trash\" style=\"color: #ff6c5f\"></i></a></td>
            </tr>
        {% endfor %}
    </table>
    <div class=\"navigation text-center\">
        {{ knp_pagination_render(produit) }}
    </div>
    <a href=\"{{ path('ajout_produit') }}\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> ajouter produit </span></a>
    <div id=\"dialog-confirm\" title=\"Confirmation de la suppression\" style=\"display:none;\">
        <p>
            <span class=\"ui-icon ui-icon-alert\" style=\"float:left; margin:0 7px 20px 0;\"></span>
            Etes-vous sûr de vouloir supprimer ce produit ?
        </p>
    </div>


{% endblock %}
", "@Back/Produit/affiche_produit.html.twig", "C:\\xampp\\htdocs\\pi\\src\\BackBundle\\Resources\\views\\produit\\affiche_produit.html.twig");
    }
}

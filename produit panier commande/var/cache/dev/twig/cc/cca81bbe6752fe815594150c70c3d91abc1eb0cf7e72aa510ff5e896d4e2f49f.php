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

/* @Back/Produit/affiche_categorie.html.twig */
class __TwigTemplate_7ea5f031fb39c79db794bb9f9ea14fcbac1cd54ee2d96cdd81365b99503ef8af extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Back/Produit/affiche_categorie.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Back/Produit/affiche_categorie.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "@Back/Produit/affiche_categorie.html.twig", 1);
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
    <h2><strong>Liste des categories :</strong></h2>
    <br>
    <table class=\"table table-striped\">
        <tr align=\"center\"  >
            <td><b>ID</b></td>
            <td><b>Libelle</b></td>
            <td><b>Nbr produits</b></td>
            <td colspan=\"2\"><b>Action</b></td>

        </tr>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 15
            echo "            <tr align=\" center\" >
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", []), "html", null, true);
            echo "</td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "libelleC", []), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["c"], "produit", [])), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifier_categorie", ["id" => $this->getAttribute($context["c"], "id", [])]), "html", null, true);
            echo "\"><i class=\"fa fa-edit\" style=\"color:#2e6da4 \" ></i></a></td>
                <td><a class=\"confirmModal\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer_categorie", ["id" => $this->getAttribute($context["c"], "id", [])]), "html", null, true);
            echo "\" ><i class=\"fa fa-trash\" style=\"color: #ff6c5f\"></i></a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    </table>
    <div id=\"dialog-confirm\" title=\"Confirmation de la suppression\" style=\"display:none;\">
        <p>
            <span class=\"ui-icon ui-icon-alert\" style=\"float:left; margin:0 7px 20px 0;\"></span>
            Etes-vous sûr de vouloir supprimer cette categorie ?
        </p>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Back/Produit/affiche_categorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 23,  96 => 20,  92 => 19,  88 => 18,  84 => 17,  80 => 16,  77 => 15,  73 => 14,  60 => 3,  51 => 2,  29 => 1,);
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
    <h2><strong>Liste des categories :</strong></h2>
    <br>
    <table class=\"table table-striped\">
        <tr align=\"center\"  >
            <td><b>ID</b></td>
            <td><b>Libelle</b></td>
            <td><b>Nbr produits</b></td>
            <td colspan=\"2\"><b>Action</b></td>

        </tr>
        {% for c in categories %}
            <tr align=\" center\" >
                <td>{{c.id}}</td>
                <td>{{c.libelleC}}</td>
                <td>{{ c.produit|length }}</td>
                <td><a href=\"{{ path('modifier_categorie',{'id':c.id}) }}\"><i class=\"fa fa-edit\" style=\"color:#2e6da4 \" ></i></a></td>
                <td><a class=\"confirmModal\" href=\"{{ path('supprimer_categorie',{'id':c.id}) }}\" ><i class=\"fa fa-trash\" style=\"color: #ff6c5f\"></i></a></td>
            </tr>
        {% endfor %}
    </table>
    <div id=\"dialog-confirm\" title=\"Confirmation de la suppression\" style=\"display:none;\">
        <p>
            <span class=\"ui-icon ui-icon-alert\" style=\"float:left; margin:0 7px 20px 0;\"></span>
            Etes-vous sûr de vouloir supprimer cette categorie ?
        </p>
    </div>

{% endblock %}", "@Back/Produit/affiche_categorie.html.twig", "C:\\wamp64\\www\\projet\\PI-DEV\\pi\\src\\BackBundle\\Resources\\views\\produit\\affiche_categorie.html.twig");
    }
}

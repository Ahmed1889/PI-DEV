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

/* @Back/Commande/CommandeDetails.html.twig */
class __TwigTemplate_55bc47b07aa22bafc3aafbbdc6cf2a0c0867a6c2ecf899b8d0b995b8c7d2e427 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'bodyback' => [$this, 'block_bodyback'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Back/Commande/CommandeDetails.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Back/Commande/CommandeDetails.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "@Back/Commande/CommandeDetails.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_bodyback($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyback"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyback"));

        // line 4
        echo "<table class=\"table table-striped\">
    <tr align=\"center\"  >

    <tr>
        <td style=\"color: #005eff ; font-family: bold\">#Identifiant Produit </td>
        <td style=\"color: #005eff ; font-family: bold\">Nom Produit </td>
        <td style=\"color: #005eff ; font-family: bold\">Image </td>
        <td style=\"color: #005eff ; font-family: bold\">Quantite </td>

    </tr>

    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 16
            echo "
    <tr>
        <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", []), "html", null, true);
            echo "</td>
        <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "libelleP", []), "html", null, true);
            echo "</td>
        <td><img class=\"imageproduit2\" src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("photos/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "image", []), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "libelleP", []), "html", null, true);
            echo "\" width=\"90\" height=\"90\">  </td>
        <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "qte", []), "html", null, true);
            echo "</td>


    </tr>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</table>
<div>
        <hr>


    <p style=\"text-align:right;font-size:20px;color:#ff131d\"  class=\"total\">Prix Total :   ";
        // line 32
        echo twig_escape_filter($this->env, ($context["total"] ?? $this->getContext($context, "total")), "html", null, true);
        echo " TND</p>
    <hr>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Back/Commande/CommandeDetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 32,  108 => 27,  96 => 21,  89 => 20,  85 => 19,  81 => 18,  77 => 16,  73 => 15,  60 => 4,  51 => 3,  29 => 1,);
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

{% block bodyback %}
<table class=\"table table-striped\">
    <tr align=\"center\"  >

    <tr>
        <td style=\"color: #005eff ; font-family: bold\">#Identifiant Produit </td>
        <td style=\"color: #005eff ; font-family: bold\">Nom Produit </td>
        <td style=\"color: #005eff ; font-family: bold\">Image </td>
        <td style=\"color: #005eff ; font-family: bold\">Quantite </td>

    </tr>

    {% for p in produits %}

    <tr>
        <td>{{ p.id }}</td>
        <td>{{ p.libelleP }}</td>
        <td><img class=\"imageproduit2\" src=\"{{ asset( 'photos/') }}{{ p.image }}\" alt=\"{{ p.libelleP }}\" width=\"90\" height=\"90\">  </td>
        <td>{{ p.qte }}</td>


    </tr>

    {% endfor %}
</table>
<div>
        <hr>


    <p style=\"text-align:right;font-size:20px;color:#ff131d\"  class=\"total\">Prix Total :   {{ total }} TND</p>
    <hr>
</div>
{%  endblock %}
", "@Back/Commande/CommandeDetails.html.twig", "/Applications/MAMP/htdocs/pi3/src/BackBundle/Resources/views/Commande/CommandeDetails.html.twig");
    }
}

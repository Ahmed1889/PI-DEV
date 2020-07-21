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

/* @Back/Livraison/AfficherTypeVehicules.html.twig */
class __TwigTemplate_40ebdfbb7db1ad1ba9e22515812a2fa19b91209257ff2cb17d0b6cbbae432f42 extends \Twig\Template
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
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Back/Livraison/AfficherTypeVehicules.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Back/Livraison/AfficherTypeVehicules.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "@Back/Livraison/AfficherTypeVehicules.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_bodyBack($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyBack"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyBack"));

        // line 4
        echo "
<h2> Liste des types Vehicules</h2>

    <table class=\"table table-striped table-bordered dataTable\"  role=\"grid\" aria-describedby=\"zero_config_info\" id=\"zero_config\" border=\"1\">
    <tr>
        <th> libelle </th>
        <th> nombre de vehicules</th>
        <th></th>
        <th></th>
    </tr>

    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["typesV"] ?? $this->getContext($context, "typesV")));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 16
            echo "        <tr>
            <th> ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "libelle", []), "html", null, true);
            echo "</th>
            <th> ";
            // line 18
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["t"], "vehicules", [])), "html", null, true);
            echo "</th>

            <th> <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifierTypeVehicule", ["id" => $this->getAttribute(            // line 21
$context["t"], "id", [])]), "html", null, true);
            echo "\">
                    Modifier</a></th>
            <th> <a class=\"confirmModal\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimerTypeVehicule", ["id" => $this->getAttribute(            // line 24
$context["t"], "id", [])]), "html", null, true);
            echo "\" >
                    Supprimer</a></th>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</table>

    <div id=\"dialog-confirm\" title=\"Confirmation de la suppression\" style=\"display:none;\">
        <p>
            <span class=\"ui-icon ui-icon-alert\" style=\"float:left; margin:0 7px 20px 0;\"></span>
            Etes-vous sûr de vouloir supprimer ce type de vehicule ?
        </p>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Back/Livraison/AfficherTypeVehicules.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 28,  96 => 24,  95 => 23,  90 => 21,  89 => 20,  84 => 18,  80 => 17,  77 => 16,  73 => 15,  60 => 4,  51 => 3,  29 => 1,);
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

{% block bodyBack %}

<h2> Liste des types Vehicules</h2>

    <table class=\"table table-striped table-bordered dataTable\"  role=\"grid\" aria-describedby=\"zero_config_info\" id=\"zero_config\" border=\"1\">
    <tr>
        <th> libelle </th>
        <th> nombre de vehicules</th>
        <th></th>
        <th></th>
    </tr>

    {%  for t in typesV %}
        <tr>
            <th> {{ t.libelle }}</th>
            <th> {{ t.vehicules | length }}</th>

            <th> <a href=\"{{ path('modifierTypeVehicule',
                    {'id':t.id}) }}\">
                    Modifier</a></th>
            <th> <a class=\"confirmModal\" href=\"{{ path('supprimerTypeVehicule',
                    {'id':t.id}) }}\" >
                    Supprimer</a></th>
        </tr>
    {% endfor %}
</table>

    <div id=\"dialog-confirm\" title=\"Confirmation de la suppression\" style=\"display:none;\">
        <p>
            <span class=\"ui-icon ui-icon-alert\" style=\"float:left; margin:0 7px 20px 0;\"></span>
            Etes-vous sûr de vouloir supprimer ce type de vehicule ?
        </p>
    </div>
{%  endblock %}

", "@Back/Livraison/AfficherTypeVehicules.html.twig", "C:\\xampp\\htdocs\\pi\\src\\BackBundle\\Resources\\views\\Livraison\\AfficherTypeVehicules.html.twig");
    }
}

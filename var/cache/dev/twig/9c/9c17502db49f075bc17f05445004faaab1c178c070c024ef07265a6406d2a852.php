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

/* historique/index.html.twig */
class __TwigTemplate_5300106cd16c581656319bfbee087170898073e39d12f04674ba1393af5f612a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "historique/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "historique/index.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "historique/index.html.twig", 1);
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
    <h1>Historiques liste</h1>
<div style=\"overflow: scroll;height: 500px \">
    <table  id=\"zero_config\" class=\"table table-striped table-bordered dataTable\" role=\"grid\" aria-describedby=\"zero_config_info\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Fournisseur</th>
                <th>Produit</th>
                <th>Quantite</th>
                <th id=\"dd\">Date</th>
                <th>prix Total</th>


            </tr>
        </thead>
        <tbody id=\"student\">
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["historiques"] ?? $this->getContext($context, "historiques")));
        foreach ($context['_seq'] as $context["_key"] => $context["historique"]) {
            // line 22
            echo "            <tr>
                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("historique_show", ["id" => $this->getAttribute($context["historique"], "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["historique"], "id", []), "html", null, true);
            echo "</a></td>
                <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("historique_indexf", ["id" => $this->getAttribute($this->getAttribute($context["historique"], "idcf", []), "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["historique"], "idcf", []), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["historique"], "idcp", []), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["historique"], "quantite", []), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["historique"], "date", []), "Y-m-d"), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["historique"], "prixtotal", []), "html", null, true);
            echo "</td>


            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['historique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>
</div>
    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("historique_new");
        echo "\">Créer historique</a>
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "historique/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 38,  121 => 33,  110 => 28,  106 => 27,  102 => 26,  98 => 25,  92 => 24,  86 => 23,  83 => 22,  79 => 21,  60 => 4,  51 => 3,  29 => 1,);
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

    <h1>Historiques liste</h1>
<div style=\"overflow: scroll;height: 500px \">
    <table  id=\"zero_config\" class=\"table table-striped table-bordered dataTable\" role=\"grid\" aria-describedby=\"zero_config_info\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Fournisseur</th>
                <th>Produit</th>
                <th>Quantite</th>
                <th id=\"dd\">Date</th>
                <th>prix Total</th>


            </tr>
        </thead>
        <tbody id=\"student\">
        {% for historique in historiques %}
            <tr>
                <td><a href=\"{{ path('historique_show', { 'id': historique.id }) }}\">{{ historique.id }}</a></td>
                <td><a href=\"{{ path('historique_indexf', { 'id': historique.idcf.id }) }}\">{{ historique.idcf }}</td>
                <td>{{ historique.idcp }}</td>
                <td>{{ historique.quantite }}</td>
                <td>{{ historique.date|date('Y-m-d') }}</td>
                <td>{{ historique.prixtotal }}</td>


            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
    <ul>
        <li>
            <a href=\"{{ path('historique_new') }}\">Créer historique</a>
        </li>
    </ul>
{% endblock bodyBack %}", "historique/index.html.twig", "C:\\xampp\\htdocs\\pi\\app\\Resources\\views\\historique\\index.html.twig");
    }
}

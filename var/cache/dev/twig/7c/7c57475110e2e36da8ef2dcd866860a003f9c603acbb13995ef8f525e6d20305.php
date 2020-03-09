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

/* historique/indexf.html.twig */
class __TwigTemplate_9c22fa4152a8433814b8ccdda16ebf11180301b6f2fd56f838d03dd660dacb82 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "historique/indexf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "historique/indexf.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "historique/indexf.html.twig", 1);
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
    <h1> L'historique de ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["fournisseur"] ?? $this->getContext($context, "fournisseur")), "nomf", []), "html", null, true);
        echo "  </h1>

<div style=\"overflow: scroll;height: 500px \">
    <table  id=\"zero_config\" class=\"table table-striped table-bordered dataTable\" role=\"grid\" aria-describedby=\"zero_config_info\">
        <thead>
            <tr>

                <th>Produit</th>
                <th>Quantite</th>
                <th>Date</th>
                <th>prix Total</th>

            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["historiques"] ?? $this->getContext($context, "historiques")));
        foreach ($context['_seq'] as $context["_key"] => $context["historique"]) {
            // line 21
            echo "            <tr>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["historique"], "idcp", []), "html", null, true);
            echo " </td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["historique"], "quantite", []), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["historique"], "date", []), "Y-m-d"), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["historique"], "prixtotal", []), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['historique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, ($context["somme"] ?? $this->getContext($context, "somme")), "html", null, true);
        echo "</td>




            </tr>

        </tbody>
    </table>
</div>
<ul>
    <li>
        <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("historique_index");
        echo "\">Retour liste</a>
    </li>
    </ul>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "historique/indexf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 44,  115 => 32,  109 => 28,  100 => 25,  96 => 24,  92 => 23,  88 => 22,  85 => 21,  81 => 20,  63 => 5,  60 => 4,  51 => 3,  29 => 1,);
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

    <h1> L'historique de {{ fournisseur.nomf }}  </h1>

<div style=\"overflow: scroll;height: 500px \">
    <table  id=\"zero_config\" class=\"table table-striped table-bordered dataTable\" role=\"grid\" aria-describedby=\"zero_config_info\">
        <thead>
            <tr>

                <th>Produit</th>
                <th>Quantite</th>
                <th>Date</th>
                <th>prix Total</th>

            </tr>
        </thead>
        <tbody>
        {% for historique in historiques %}
            <tr>
                <td>{{ historique.idcp }} </td>
                <td>{{ historique.quantite }}</td>
                <td>{{ historique.date|date('Y-m-d') }}</td>
                <td>{{ historique.prixtotal }}</td>
            </tr>
        {% endfor %}
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>{{  somme}}</td>




            </tr>

        </tbody>
    </table>
</div>
<ul>
    <li>
        <a href=\"{{ path('historique_index') }}\">Retour liste</a>
    </li>
    </ul>



{% endblock %}
", "historique/indexf.html.twig", "C:\\xampp\\htdocs\\pi\\app\\Resources\\views\\historique\\indexf.html.twig");
    }
}

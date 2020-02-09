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

/* @Back/Livraison/AfficherPlanningDay.html.twig */
class __TwigTemplate_8efc2376de0cfab17bad61d1bbe9687ea40ff2934fcc12f612d025eb48d2efa0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Back/Livraison/AfficherPlanningDay.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Back/Livraison/AfficherPlanningDay.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "@Back/Livraison/AfficherPlanningDay.html.twig", 1);
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
    <h2> Planning du jour  </h2>
    <iframe name=\"date du jour\" id=\"date-du-jour\" style=\"width:105px;height:75px;\" src=\"https://www.mathieuweb.fr/calendrier/date-jour-rouge-noir.html\" scrolling=\"no\" frameborder=\"0\" allowtransparency=\"true\"></iframe>



    <table border=\"1\">
        <tr>
            <th> id </th>
            <th> statut</th>
            <th> Doit être livrée</th>

        </tr>

        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_sort_filter(($context["plannigs"] ?? $this->getContext($context, "plannigs")), function ($__a__, $__b__) use ($context) { $context["a"] = $__a__; $context["b"] = $__b__; return ($this->getAttribute(($context["a"] ?? $this->getContext($context, "a")), "dateLivraison", []) >= $this->getAttribute(($context["b"] ?? $this->getContext($context, "b")), "dateLivraison", [])); })));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 19
            echo "            <tr>
                <th> ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "id", []), "html", null, true);
            echo "</th>
                ";
            // line 21
            if (($this->getAttribute($context["t"], "statut", []) == false)) {
                // line 22
                echo "                <th style=\"color: red\"> Non livre</th>
                ";
            } else {
                // line 24
                echo "                    <th style=\"color: green\">  livre</th>

";
            }
            // line 27
            echo "                <th> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["t"], "dateLivraison", []), " H:i"), "html", null, true);
            echo "</th>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </table>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Back/Livraison/AfficherPlanningDay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 30,  98 => 27,  93 => 24,  89 => 22,  87 => 21,  83 => 20,  80 => 19,  76 => 18,  60 => 4,  51 => 3,  29 => 1,);
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

    <h2> Planning du jour  </h2>
    <iframe name=\"date du jour\" id=\"date-du-jour\" style=\"width:105px;height:75px;\" src=\"https://www.mathieuweb.fr/calendrier/date-jour-rouge-noir.html\" scrolling=\"no\" frameborder=\"0\" allowtransparency=\"true\"></iframe>



    <table border=\"1\">
        <tr>
            <th> id </th>
            <th> statut</th>
            <th> Doit être livrée</th>

        </tr>

        {%  for t in plannigs | sort((a, b) => a.dateLivraison  >= b.dateLivraison )|reverse %}
            <tr>
                <th> {{ t.id }}</th>
                {% if t.statut==false %}
                <th style=\"color: red\"> Non livre</th>
                {% else %}
                    <th style=\"color: green\">  livre</th>

{% endif %}
                <th> {{ t.dateLivraison |date(' H:i') }}</th>
            </tr>
        {% endfor %}
    </table>


{%  endblock %}", "@Back/Livraison/AfficherPlanningDay.html.twig", "C:\\wamp64\\www\\PI-DEV\\pi\\src\\BackBundle\\Resources\\views\\Livraison\\AfficherPlanningDay.html.twig");
    }
}

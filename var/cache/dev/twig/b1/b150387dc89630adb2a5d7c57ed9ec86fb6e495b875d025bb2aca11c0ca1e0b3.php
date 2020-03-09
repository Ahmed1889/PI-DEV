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

/* BackBundle:Livraison:ReclamationLivraison.html.twig */
class __TwigTemplate_28329b75aecb014a65d9b54aa3f337ecf750c6d6f6b135fc92c5b6a928b92d98 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackBundle:Livraison:ReclamationLivraison.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackBundle:Livraison:ReclamationLivraison.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "BackBundle:Livraison:ReclamationLivraison.html.twig", 1);
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
    <h2> Liste des Livraisons Réclamées</h2>

    <table class=\"table table-striped table-bordered dataTable\"  role=\"grid\" aria-describedby=\"zero_config_info\" id=\"zero_config\" border=\"1\">
        <tr>
            <th> Numero de Commande </th>
            <th> Livreur</th>
            <th> Date Commande</th>
            <th> Action</th>
            <th></th>
        </tr>

        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pl"] ?? $this->getContext($context, "pl")));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 17
            echo "            <tr>
                <th> ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["t"], "Commande", []), "id", []), "html", null, true);
            echo "</th>
";
            // line 19
            if (($this->getAttribute($this->getAttribute($context["t"], "employe", []), "avert", []) > 0)) {
                // line 20
                echo "                <th style=\"color: red\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["t"], "employe", []), "nom", []), "html", null, true);
                echo "</th>
                ";
            } else {
                // line 22
                echo "                    <th> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["t"], "employe", []), "nom", []), "html", null, true);
                echo "</th>
                    ";
            }
            // line 24
            echo "                <th> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["t"], "dateLivraison", []), "Y/m/d"), "html", null, true);
            echo "</th>
                <th> <a class=\"confirmModal\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Avertir", ["id" => $this->getAttribute($this->getAttribute($context["t"], "employe", []), "id", [])]), "html", null, true);
            echo "\" >
                        Avertir</a></th>

            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </table>
    <div id=\"dialog-confirm\" title=\"Sanctionner ce Livreur\" style=\"display:none;\">
        <p>
            <span class=\"ui-icon ui-icon-alert\" style=\"float:left; margin:0 7px 20px 0;\"></span>
            Etes-vous sûr de vouloir sanctionner ce livreur ?
        </p>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:Livraison:ReclamationLivraison.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 30,  104 => 25,  99 => 24,  93 => 22,  87 => 20,  85 => 19,  81 => 18,  78 => 17,  74 => 16,  60 => 4,  51 => 3,  29 => 1,);
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

    <h2> Liste des Livraisons Réclamées</h2>

    <table class=\"table table-striped table-bordered dataTable\"  role=\"grid\" aria-describedby=\"zero_config_info\" id=\"zero_config\" border=\"1\">
        <tr>
            <th> Numero de Commande </th>
            <th> Livreur</th>
            <th> Date Commande</th>
            <th> Action</th>
            <th></th>
        </tr>

        {%  for t in pl %}
            <tr>
                <th> {{ t.Commande.id }}</th>
{% if t.employe.avert>0 %}
                <th style=\"color: red\"> {{ t.employe.nom }}</th>
                {% else %}
                    <th> {{ t.employe.nom }}</th>
                    {% endif %}
                <th> {{ t.dateLivraison| date('Y/m/d') }}</th>
                <th> <a class=\"confirmModal\" href=\"{{ path('Avertir',{'id':t.employe.id}) }}\" >
                        Avertir</a></th>

            </tr>
        {% endfor %}
    </table>
    <div id=\"dialog-confirm\" title=\"Sanctionner ce Livreur\" style=\"display:none;\">
        <p>
            <span class=\"ui-icon ui-icon-alert\" style=\"float:left; margin:0 7px 20px 0;\"></span>
            Etes-vous sûr de vouloir sanctionner ce livreur ?
        </p>

    </div>
{%  endblock %}

", "BackBundle:Livraison:ReclamationLivraison.html.twig", "C:\\xampp\\htdocs\\pi\\src\\BackBundle/Resources/views/Livraison/ReclamationLivraison.html.twig");
    }
}

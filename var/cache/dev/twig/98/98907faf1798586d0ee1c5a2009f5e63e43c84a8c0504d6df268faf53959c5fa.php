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

/* depot/show.html.twig */
class __TwigTemplate_78f53ab777d2e7d8c3852bf0a057c4116964b10d1add30ea95938197fc4b09ba extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "depot/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "depot/show.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "depot/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Depot</h1>

    <div align=\"right\">
        <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("depot_index");
        echo "\" class=\"fas fa-backward\"></a>
    </div>

    <table class=\"table table-striped table-bordered dataTable\" id=\"zero_config\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["depot"] ?? $this->getContext($context, "depot")), "id", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["depot"] ?? $this->getContext($context, "depot")), "nom", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Addresse</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["depot"] ?? $this->getContext($context, "depot")), "addresse", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Capacite</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["depot"] ?? $this->getContext($context, "depot")), "capacite", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Disponibilite</th>
                <td>";
        // line 30
        if ($this->getAttribute(($context["depot"] ?? $this->getContext($context, "depot")), "disponibilite", [])) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
        </tbody>
    </table>
        <div align=\"right\">
            <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("depot_edit", ["id" => $this->getAttribute(($context["depot"] ?? $this->getContext($context, "depot")), "id", [])]), "html", null, true);
        echo "\" class=\"fas fa-wrench\" >Modifier</a>
        </div>
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Supprimer\"  class=\"btn btn-primary\">
            ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "depot/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 39,  120 => 37,  115 => 35,  103 => 30,  96 => 26,  89 => 22,  82 => 18,  75 => 14,  65 => 7,  60 => 4,  51 => 3,  29 => 1,);
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

{% block body %}
    <h1>Depot</h1>

    <div align=\"right\">
        <a href=\"{{ path('depot_index') }}\" class=\"fas fa-backward\"></a>
    </div>

    <table class=\"table table-striped table-bordered dataTable\" id=\"zero_config\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ depot.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ depot.nom }}</td>
            </tr>
            <tr>
                <th>Addresse</th>
                <td>{{ depot.addresse }}</td>
            </tr>
            <tr>
                <th>Capacite</th>
                <td>{{ depot.capacite }}</td>
            </tr>
            <tr>
                <th>Disponibilite</th>
                <td>{% if depot.disponibilite %}Yes{% else %}No{% endif %}</td>
            </tr>
        </tbody>
    </table>
        <div align=\"right\">
            <a href=\"{{ path('depot_edit', { 'id': depot.id }) }}\" class=\"fas fa-wrench\" >Modifier</a>
        </div>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Supprimer\"  class=\"btn btn-primary\">
            {{ form_end(delete_form) }}

{% endblock %}
", "depot/show.html.twig", "C:\\xampp\\htdocs\\pi\\app\\Resources\\views\\depot\\show.html.twig");
    }
}

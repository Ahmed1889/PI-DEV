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

/* conge/index.html.twig */
class __TwigTemplate_928db76ca216a248fabe3d37d16727ca0a3c5522dd839e9e2fd8111276c5f43f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conge/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conge/index.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "conge/index.html.twig", 1);
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
        echo "<div>
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class=\"page-breadcrumb\">
        <div class=\"row\">
            <div class=\"col-12 d-flex no-block align-items-center\">


            </div>
        </div>
    </div>



    <table id=\"zero_config\" class=\"table table-striped table-bordered dataTable\" role=\"grid\" aria-describedby=\"zero_config_info\">
        <thead>
            <tr style=\"background-color: #80bdff\" >
                <th>ID</th>
                <td>Nom</td>
                <th>Date Debut</th>
                <th>Date Fin</th>
                <th>Type</th>
                <th>Etat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["conges"] ?? $this->getContext($context, "conges")));
        foreach ($context['_seq'] as $context["_key"] => $context["conge"]) {
            // line 33
            echo "            <tr>

                <td><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conge_show", ["id" => $this->getAttribute($context["conge"], "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["conge"], "id", []), "html", null, true);
            echo "</a></td>
                <td><img style=\"height: 80px;width: 80px\" src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("photos/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["conge"], "idEmployee", []), "image", []), "html", null, true);
            echo "\"></td>
                <td>";
            // line 37
            if ($this->getAttribute($context["conge"], "dateDebut", [])) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["conge"], "dateDebut", [])), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 38
            if ($this->getAttribute($context["conge"], "dateFin", [])) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["conge"], "dateFin", [])), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["conge"], "type", []), "html", null, true);
            echo "</td>
                ";
            // line 40
            if (($this->getAttribute($context["conge"], "etat", []) == "Refusé")) {
                // line 41
                echo "                    <td><span class=\"badge badge-pill badge-danger\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["conge"], "etat", []), "html", null, true);
                echo "</span></td>
                ";
            }
            // line 43
            echo "                ";
            if (($this->getAttribute($context["conge"], "etat", []) == "Accepté")) {
                // line 44
                echo "                    <td><span class=\"badge badge-pill badge-success\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["conge"], "etat", []), "html", null, true);
                echo "</span></td>
                ";
            }
            // line 46
            echo "                ";
            if (($this->getAttribute($context["conge"], "etat", []) == "En Cours")) {
                // line 47
                echo "                    <td><span class=\"badge badge-pill badge-warning\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["conge"], "etat", []), "html", null, true);
                echo "</span></td>
                ";
            }
            // line 49
            echo "
                <td>
                    <ul>

                            <a class=\"fas fa-eye\" href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conge_show", ["id" => $this->getAttribute($context["conge"], "id", [])]), "html", null, true);
            echo "\"></a>


                            <a class=\"fas fa-wrench\" href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conge_edit", ["id" => $this->getAttribute($context["conge"], "id", [])]), "html", null, true);
            echo "\"></a>

                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "        </tbody>
    </table>

    <ul>

            <a class=\"fas fa-plus-square\" href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conge_new");
        echo "\">  Demander Un Congé</a><br>




    </ul>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "conge/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 67,  175 => 62,  163 => 56,  157 => 53,  151 => 49,  145 => 47,  142 => 46,  136 => 44,  133 => 43,  127 => 41,  125 => 40,  121 => 39,  115 => 38,  109 => 37,  104 => 36,  98 => 35,  94 => 33,  90 => 32,  60 => 4,  51 => 3,  29 => 1,);
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
<div>
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class=\"page-breadcrumb\">
        <div class=\"row\">
            <div class=\"col-12 d-flex no-block align-items-center\">


            </div>
        </div>
    </div>



    <table id=\"zero_config\" class=\"table table-striped table-bordered dataTable\" role=\"grid\" aria-describedby=\"zero_config_info\">
        <thead>
            <tr style=\"background-color: #80bdff\" >
                <th>ID</th>
                <td>Nom</td>
                <th>Date Debut</th>
                <th>Date Fin</th>
                <th>Type</th>
                <th>Etat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for conge in conges %}
            <tr>

                <td><a href=\"{{ path('conge_show', { 'id': conge.id }) }}\">{{ conge.id }}</a></td>
                <td><img style=\"height: 80px;width: 80px\" src=\"{{ asset('photos/') }}{{ conge.idEmployee.image }}\"></td>
                <td>{% if conge.dateDebut %}{{ conge.dateDebut|date }}{% endif %}</td>
                <td>{% if conge.dateFin %}{{ conge.dateFin|date}}{% endif %}</td>
                <td>{{ conge.type }}</td>
                {% if conge.etat == \"Refusé\" %}
                    <td><span class=\"badge badge-pill badge-danger\">{{ conge.etat }}</span></td>
                {% endif %}
                {% if conge.etat == \"Accepté\" %}
                    <td><span class=\"badge badge-pill badge-success\">{{ conge.etat }}</span></td>
                {% endif %}
                {% if conge.etat == \"En Cours\" %}
                    <td><span class=\"badge badge-pill badge-warning\">{{ conge.etat }}</span></td>
                {% endif %}

                <td>
                    <ul>

                            <a class=\"fas fa-eye\" href=\"{{ path('conge_show', { 'id': conge.id }) }}\"></a>


                            <a class=\"fas fa-wrench\" href=\"{{ path('conge_edit', { 'id': conge.id }) }}\"></a>

                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>

            <a class=\"fas fa-plus-square\" href=\"{{ path('conge_new') }}\">  Demander Un Congé</a><br>




    </ul>
    {% endblock %}
", "conge/index.html.twig", "C:\\xampp\\htdocs\\pi\\app\\Resources\\views\\conge\\index.html.twig");
    }
}

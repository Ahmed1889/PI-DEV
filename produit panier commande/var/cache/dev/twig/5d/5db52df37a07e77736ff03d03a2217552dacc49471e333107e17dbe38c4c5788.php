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

/* bonreduction/index.html.twig */
class __TwigTemplate_97a2e03eeab14a0cfd3c1be4b5f75725ab82ea39c9cf8414c405f7a3f10fc1c4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bonreduction/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bonreduction/index.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "bonreduction/index.html.twig", 1);
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
        echo "
    <h1>Bon de reductions</h1>

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Numero</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["bonReductions"] ?? $this->getContext($context, "bonReductions")));
        foreach ($context['_seq'] as $context["_key"] => $context["bonReduction"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bonreduction_show", ["id" => $this->getAttribute($context["bonReduction"], "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["bonReduction"], "id", []), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["bonReduction"], "numero", []), "html", null, true);
            echo "</td>
                <td>


                            <a class=\"btn btn-success\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bonreduction_show", ["id" => $this->getAttribute($context["bonReduction"], "id", [])]), "html", null, true);
            echo "\">Afficher</a>
                            <a class=\"btn btn-info\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bonreduction_edit", ["id" => $this->getAttribute($context["bonReduction"], "id", [])]), "html", null, true);
            echo "\">Modifier</a>
                            <a class=\"btn btn-danger\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bonreduction_delete", ["id" => $this->getAttribute($context["bonReduction"], "id", [])]), "html", null, true);
            echo "\">Supprimer</a>


                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bonReduction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>

            <a class=\"btn btn-success\" href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bonreduction_new");
        echo " \">Créer un Bon de Reduction</a>

    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "bonreduction/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 36,  114 => 31,  102 => 25,  98 => 24,  94 => 23,  87 => 19,  81 => 18,  78 => 17,  74 => 16,  60 => 4,  51 => 3,  29 => 1,);
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

    <h1>Bon de reductions</h1>

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Numero</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for bonReduction in bonReductions %}
            <tr>
                <td><a href=\"{{ path('bonreduction_show', { 'id': bonReduction.id }) }}\">{{ bonReduction.id }}</a></td>
                <td>{{ bonReduction.numero }}</td>
                <td>


                            <a class=\"btn btn-success\" href=\"{{ path('bonreduction_show', { 'id': bonReduction.id }) }}\">Afficher</a>
                            <a class=\"btn btn-info\" href=\"{{ path('bonreduction_edit', { 'id': bonReduction.id }) }}\">Modifier</a>
                            <a class=\"btn btn-danger\" href=\"{{ path('bonreduction_delete', { 'id': bonReduction.id }) }}\">Supprimer</a>


                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>

            <a class=\"btn btn-success\" href=\"{{ path('bonreduction_new') }} \">Créer un Bon de Reduction</a>

    </ul>
{% endblock %}
", "bonreduction/index.html.twig", "/Applications/MAMP/htdocs/pi3/app/Resources/views/bonreduction/index.html.twig");
    }
}

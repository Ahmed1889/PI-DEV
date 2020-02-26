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

/* bonreduction/show.html.twig */
class __TwigTemplate_8aa33db29dd125f55cac014267d239a2a96311e840511382a08db5fb70db0827 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bonreduction/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bonreduction/show.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "bonreduction/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_bodyback($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyback"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyback"));

        // line 3
        echo "    <h1>Bon de reduction</h1>

    <table class=\" table table-striped\">
        <tbody>
            <tr>
                <th>Numero :</th>
                <td>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["bonReduction"] ?? $this->getContext($context, "bonReduction")), "numero", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Taux de Reduction :</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["bonReduction"] ?? $this->getContext($context, "bonReduction")), "taux", []), "html", null, true);
        echo " %</td>
            </tr>
            <tr>
                <th>Validité :</th>
                ";
        // line 17
        if ($this->getAttribute(($context["bonReduction"] ?? $this->getContext($context, "bonReduction")), "isvalid", [])) {
            // line 18
            echo "                <td style=\"color: green\">Encore disponible</td>
                ";
        } else {
            // line 20
            echo "                <td style=\"color: red\">Expiré</td>
                ";
        }
        // line 22
        echo "            </tr>
        </tbody>
    </table>


            <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bonreduction_index");
        echo "\"><input type=\"button\" value=\"Back to the list\" class=\"btn btn-outline-success\" width=\"70\" /></a>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bonreduction_edit", ["id" => $this->getAttribute(($context["bonReduction"] ?? $this->getContext($context, "bonReduction")), "id", [])]), "html", null, true);
        echo "\"><input type=\"button\" value=\"Edit\" class=\"btn btn-info\" width=\"35px\" /></a>


            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
            ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "bonreduction/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 32,  109 => 31,  103 => 28,  99 => 27,  92 => 22,  88 => 20,  84 => 18,  82 => 17,  75 => 13,  68 => 9,  60 => 3,  51 => 2,  29 => 1,);
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
    <h1>Bon de reduction</h1>

    <table class=\" table table-striped\">
        <tbody>
            <tr>
                <th>Numero :</th>
                <td>{{ bonReduction.numero }}</td>
            </tr>
            <tr>
                <th>Taux de Reduction :</th>
                <td>{{ bonReduction.taux }} %</td>
            </tr>
            <tr>
                <th>Validité :</th>
                {% if bonReduction.isvalid  %}
                <td style=\"color: green\">Encore disponible</td>
                {% else %}
                <td style=\"color: red\">Expiré</td>
                {% endif %}
            </tr>
        </tbody>
    </table>


            <a href=\"{{ path('bonreduction_index') }}\"><input type=\"button\" value=\"Back to the list\" class=\"btn btn-outline-success\" width=\"70\" /></a>
            <a href=\"{{ path('bonreduction_edit', { 'id': bonReduction.id }) }}\"><input type=\"button\" value=\"Edit\" class=\"btn btn-info\" width=\"35px\" /></a>


            {{ form_start(delete_form) }}
            {{ form_end(delete_form) }}

{% endblock %}
", "bonreduction/show.html.twig", "/Applications/MAMP/htdocs/pi3/app/Resources/views/bonreduction/show.html.twig");
    }
}

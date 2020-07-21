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

/* depot/edit.html.twig */
class __TwigTemplate_25b0c1bdd73354549630ef9f20d6cffe46adda31127e78f924f1524cf3d3bcab extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "depot/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "depot/edit.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "depot/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>Depot edit</h1>
    <div align=\"right\">
        <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("depot_index");
        echo "\" class=\"fas fa-backward\"></a>

    </div>
    <table class=\"table\">
        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "

        <tr>
            <td>";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "nom", []), 'label');
        echo "</td>
            <td>";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "nom", []), 'widget', ["attr" => ["class" => "form-control", "id" => "vnom"]]);
        echo "
                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "nom", []), 'errors');
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "addresse", []), 'label');
        echo "</td>
            <td>";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "addresse", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "capacite", []), 'label');
        echo "</td>
            <td>";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "capacite", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "capacite", []), 'errors');
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "disponibilite", []), 'label');
        echo "</td>
            <td>";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "disponibilite", []), 'widget', ["attr" => ["class" => "custom-control custom-checkbox mr-sm-2"]]);
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "representant", []), 'label');
        echo "</td>
            <td>";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "representant", []), 'widget', ["attr" => ["class" => "form-control", "id" => "exampleFormControlSelect1"]]);
        echo "</td>
        </tr>
        <tr>
            <td> <input type=\"submit\" value=\"Modifier\" class=\"btn btn-primary\"/></td>
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <td><input type=\"submit\" value=\"Supprimer\" class=\"btn btn-primary\"/></td>
            ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "


        </tr>


    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "depot/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 40,  140 => 38,  136 => 37,  129 => 33,  125 => 32,  119 => 29,  115 => 28,  109 => 25,  105 => 24,  101 => 23,  95 => 20,  91 => 19,  85 => 16,  81 => 15,  77 => 14,  71 => 11,  64 => 7,  60 => 5,  51 => 4,  29 => 1,);
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
    <h1>Depot edit</h1>
    <div align=\"right\">
        <a href=\"{{ path('depot_index') }}\" class=\"fas fa-backward\"></a>

    </div>
    <table class=\"table\">
        {{ form_start(edit_form) }}

        <tr>
            <td>{{ form_label(edit_form.nom) }}</td>
            <td>{{ form_widget(edit_form.nom,{'attr':{'class':'form-control','id':'vnom'}}) }}
                {{ form_errors(edit_form.nom) }}</td>
        </tr>
        <tr>
            <td>{{ form_label(edit_form.addresse) }}</td>
            <td>{{ form_widget(edit_form.addresse,{'attr':{'class':'form-control'}}) }}</td>
        </tr>
        <tr>
            <td>{{ form_label(edit_form.capacite) }}</td>
            <td>{{ form_widget(edit_form.capacite,{'attr':{'class':'form-control'}}) }}
                {{ form_errors(edit_form.capacite) }}</td>
        </tr>
        <tr>
            <td>{{ form_label(edit_form.disponibilite) }}</td>
            <td>{{ form_widget(edit_form.disponibilite,{'attr':{'class':'custom-control custom-checkbox mr-sm-2'}}) }}</td>
        </tr>
        <tr>
            <td>{{ form_label(edit_form.representant) }}</td>
            <td>{{ form_widget(edit_form.representant,{'attr':{'class':'form-control','id':'exampleFormControlSelect1'}}) }}</td>
        </tr>
        <tr>
            <td> <input type=\"submit\" value=\"Modifier\" class=\"btn btn-primary\"/></td>
            {{ form_end(edit_form) }}
            {{ form_start(delete_form) }}
            <td><input type=\"submit\" value=\"Supprimer\" class=\"btn btn-primary\"/></td>
            {{ form_end(delete_form) }}


        </tr>


    </table>
{% endblock %}

{#<button href=\"\" class=\"fas fa-wrench\" data-toggle=\"modal\" data-target=\"#dataModal{{ depot.id }}\" ></button>
<div class=\"modal fade\" id=\"dataModal{{ depot.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Depot edit</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\" >

                {{ form_start(edit_form) }}

                <div class=\"form-group\">
                    {{ form_label(edit_form.nom) }}
                    {{ form_widget(edit_form.nom,{'attr':{'class':'form-control'}}) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(edit_form.addresse) }}
                    {{ form_widget(edit_form.addresse,{'attr':{'class':'form-control'}}) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(edit_form.capacite) }}
                    {{ form_widget(edit_form.capacite,{'attr':{'class':'form-control'}}) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(edit_form.disponibilite) }}
                    {{ form_widget(edit_form.disponibilite,{'attr':{'class':'custom-control custom-checkbox mr-sm-2'}}) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(edit_form.representant) }}
                    {{ form_widget(edit_form.representant,{'attr':{'class':'form-control','id':'exampleFormControlSelect1'}}) }}
                </div>

            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                <input type=\"submit\" value=\"Modifier\" class=\"btn btn-primary\"/>

            </div>
            {{ form_rest(edit_form) }}
            {{ form_end(edit_form) }}
        </div>

    </div>

</div>
    #}

", "depot/edit.html.twig", "C:\\xampp\\htdocs\\pi\\app\\Resources\\views\\depot\\edit.html.twig");
    }
}

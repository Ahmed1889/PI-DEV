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

/* depot/new.html.twig */
class __TwigTemplate_d7e220bbced6b25aef3fbe6d21147da7b2bbf5ba7ac066ea85b0b23b7560ca61 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "depot/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "depot/new.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "depot/new.html.twig", 1);
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
        echo "
    <h1>Depot creation</h1>
    <div align=\"right\">
                <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("depot_index");
        echo "\" class=\"fas fa-backward\"></a>
    </div>

    <table class=\"table\">

    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        <tr>
            <td>
                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", []), 'label');
        echo "
            </td>
            <td>
                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", []), 'widget', ["attr" => ["class" => "form-control", "id" => "vnom"]]);
        echo "
                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", []), 'errors');
        echo "
            </td>
        </tr>
        <tr>
            <td>";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "addresse", []), 'label');
        echo "</td>
            <td>";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "addresse", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "capacite", []), 'label');
        echo "</td>
            <td>";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "capacite", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "capacite", []), 'errors');
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "disponibilite", []), 'label');
        echo "</td>
            <td>";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "disponibilite", []), 'widget', ["attr" => ["class" => "custom-control custom-checkbox mr-sm-2"]]);
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "representant", []), 'label');
        echo "</td>
            <td>";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "representant", []), 'widget', ["attr" => ["class" => "form-control", "id" => "exampleFormControlSelect1"]]);
        echo "</td>
        </tr>
        <tr>
            <td> <input type=\"submit\" value=\"Ajouter\" class=\"btn btn-primary\" /></td>


        </tr>
    ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </table>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "depot/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 44,  134 => 37,  130 => 36,  124 => 33,  120 => 32,  114 => 29,  110 => 28,  106 => 27,  100 => 24,  96 => 23,  89 => 19,  85 => 18,  79 => 15,  73 => 12,  65 => 7,  60 => 4,  51 => 3,  29 => 1,);
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

    <h1>Depot creation</h1>
    <div align=\"right\">
                <a href=\"{{ path('depot_index') }}\" class=\"fas fa-backward\"></a>
    </div>

    <table class=\"table\">

    {{ form_start(form ) }}
        <tr>
            <td>
                {{ form_label(form.nom) }}
            </td>
            <td>
                {{ form_widget(form.nom,{'attr':{'class':'form-control','id':'vnom'}}) }}
                {{ form_errors(form.nom) }}
            </td>
        </tr>
        <tr>
            <td>{{ form_label(form.addresse) }}</td>
            <td>{{ form_widget(form.addresse,{'attr':{'class':'form-control'}}) }}</td>
        </tr>
        <tr>
            <td>{{ form_label(form.capacite) }}</td>
            <td>{{ form_widget(form.capacite,{'attr':{'class':'form-control'}}) }}
                {{ form_errors(form.capacite) }}</td>
        </tr>
        <tr>
            <td>{{ form_label(form.disponibilite) }}</td>
            <td>{{ form_widget(form.disponibilite,{'attr':{'class':'custom-control custom-checkbox mr-sm-2'}}) }}</td>
        </tr>
        <tr>
            <td>{{ form_label(form.representant) }}</td>
            <td>{{ form_widget(form.representant,{'attr':{'class':'form-control','id':'exampleFormControlSelect1'}}) }}</td>
        </tr>
        <tr>
            <td> <input type=\"submit\" value=\"Ajouter\" class=\"btn btn-primary\" /></td>


        </tr>
    {{ form_end(form) }}
    </table>


{% endblock %}
", "depot/new.html.twig", "C:\\xampp\\htdocs\\pi\\app\\Resources\\views\\depot\\new.html.twig");
    }
}

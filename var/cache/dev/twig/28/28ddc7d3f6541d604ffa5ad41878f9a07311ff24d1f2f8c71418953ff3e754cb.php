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

/* fournisseur/new.html.twig */
class __TwigTemplate_6d4a64ca58716547d8bff748ff014889e34ee7213184d4b70b27d7e1b4867e3d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fournisseur/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fournisseur/new.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "fournisseur/new.html.twig", 1);
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
        echo "    <h1>Creation Fournisseur</h1>


<table class=\"table table-striped\">
    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        echo "



<tr><td>Nom</td>
    <td>  ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomf", []), 'widget', ["attr" => ["placeholder" => "Nom Du Fournisseur"]]);
        echo "</td>
</tr>
    <tr><td>Telephone</td>
        <td>  ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telf", []), 'widget');
        echo "</td>
    </tr>
<tr><td>E-mail</td>
    <td>   ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "emailf", []), 'widget');
        echo "</td>
</tr>
    <tr><td>Site Web</td>
        <td>   ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sitewebf", []), 'widget');
        echo "</td>
    </tr>
    <tr><td>Categorie</td>
        <td>   ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "categorief", []), 'widget');
        echo "</td>
    </tr>






</table>



        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fournisseur_index");
        echo "\"><span class=\"fa fa-list\">  Liste</span></a>
        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            <input type=\"submit\" value=\"Créer\" class=\"btn btn-info\" />




    ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "



    </div>
</form>
    </div>
    <div id=\"dialog-confirm\" title=\"Confirmation de la suppression\" style=\"display:none;\">
        <p>
            <span class=\"ui-icon ui-icon-alert\" style=\"float:left; margin:0 7px 20px 0;\"></span>
            Etes-vous sûr de vouloir supprimer ce vehicule ?
        </p>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "fournisseur/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 44,  117 => 38,  113 => 37,  98 => 25,  92 => 22,  86 => 19,  80 => 16,  74 => 13,  66 => 8,  60 => 4,  51 => 3,  29 => 1,);
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
    <h1>Creation Fournisseur</h1>


<table class=\"table table-striped\">
    {{ form_start(form,{\"attr\":{\"class\":\"form-horizontal\"}}) }}



<tr><td>Nom</td>
    <td>  {{ form_widget(form.nomf,{\"attr\":{\"placeholder\":\"Nom Du Fournisseur\"}})  }}</td>
</tr>
    <tr><td>Telephone</td>
        <td>  {{ form_widget(form.telf)  }}</td>
    </tr>
<tr><td>E-mail</td>
    <td>   {{ form_widget(form.emailf) }}</td>
</tr>
    <tr><td>Site Web</td>
        <td>   {{ form_widget(form.sitewebf)  }}</td>
    </tr>
    <tr><td>Categorie</td>
        <td>   {{ form_widget(form.categorief)  }}</td>
    </tr>






</table>



        <a href=\"{{ path('fournisseur_index') }}\"><span class=\"fa fa-list\">  Liste</span></a>
        {{ form_widget(form) }}
            <input type=\"submit\" value=\"Créer\" class=\"btn btn-info\" />




    {{ form_end(form) }}



    </div>
</form>
    </div>
    <div id=\"dialog-confirm\" title=\"Confirmation de la suppression\" style=\"display:none;\">
        <p>
            <span class=\"ui-icon ui-icon-alert\" style=\"float:left; margin:0 7px 20px 0;\"></span>
            Etes-vous sûr de vouloir supprimer ce vehicule ?
        </p>
    </div>

{% endblock %}
", "fournisseur/new.html.twig", "C:\\xampp\\htdocs\\pi\\app\\Resources\\views\\fournisseur\\new.html.twig");
    }
}

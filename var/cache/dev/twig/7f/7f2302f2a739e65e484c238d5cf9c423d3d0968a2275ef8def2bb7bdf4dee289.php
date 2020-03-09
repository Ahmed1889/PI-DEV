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

/* @Back/Livraison/Panne.html.twig */
class __TwigTemplate_1007a566e72539a1c46e7e22829504d17cd5f62d548e3dcf2296ce1040c58032 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Back/Livraison/Panne.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Back/Livraison/Panne.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "@Back/Livraison/Panne.html.twig", 1);
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
        echo "    <h2> Liste des  Vehicules disponibles</h2>

    <table class=\"table table-striped table-bordered dataTable\"  role=\"grid\" aria-describedby=\"zero_config_info\" id=\"zero_config\" border=\"1\">
        <tr>
            <th> Nom </th>
            <th>Matricule</th>
            <th> Type Vehicule </th>
            <th> Disponible </th>
            <th></th>

        </tr>

        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vehicules"] ?? $this->getContext($context, "vehicules")));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 17
            echo "
            <tr>
                <th> ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "nom", []), "html", null, true);
            echo "</th>
                <th> ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "matricule", []), "html", null, true);
            echo "</th>

                <th> ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["t"], "typeVehicule", []), "libelle", []), "html", null, true);
            echo "</th>
                ";
            // line 23
            if (($this->getAttribute($context["t"], "disponibilite", []) == 1)) {
                // line 24
                echo "                    <th>  disponible </th>
                    <th> <a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("TomberPanne", ["id" => $this->getAttribute(                // line 26
$context["t"], "id", [])]), "html", null, true);
                echo "\">
                             Tomber Panne</a></th>
                ";
            } else {
                // line 29
                echo "                    <th> Non  disponible </th>
                    <th> <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Reparer", ["id" => $this->getAttribute(                // line 31
$context["t"], "id", [])]), "html", null, true);
                echo "\">
                            Réparer</a></th>
                ";
            }
            // line 34
            echo "

            </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </table>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Back/Livraison/Panne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 39,  117 => 34,  111 => 31,  110 => 30,  107 => 29,  101 => 26,  100 => 25,  97 => 24,  95 => 23,  91 => 22,  86 => 20,  82 => 19,  78 => 17,  74 => 16,  60 => 4,  51 => 3,  29 => 1,);
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
    <h2> Liste des  Vehicules disponibles</h2>

    <table class=\"table table-striped table-bordered dataTable\"  role=\"grid\" aria-describedby=\"zero_config_info\" id=\"zero_config\" border=\"1\">
        <tr>
            <th> Nom </th>
            <th>Matricule</th>
            <th> Type Vehicule </th>
            <th> Disponible </th>
            <th></th>

        </tr>

        {%  for t in vehicules %}

            <tr>
                <th> {{ t.nom }}</th>
                <th> {{ t.matricule }}</th>

                <th> {{ t.typeVehicule.libelle }}</th>
                {%  if t.disponibilite == 1 %}
                    <th>  disponible </th>
                    <th> <a href=\"{{ path('TomberPanne',
                            {'id':t.id}) }}\">
                             Tomber Panne</a></th>
                {%  else %}
                    <th> Non  disponible </th>
                    <th> <a href=\"{{ path('Reparer',
                            {'id':t.id}) }}\">
                            Réparer</a></th>
                {% endif %}


            </tr>

        {% endfor %}
    </table>




{%  endblock  %}
", "@Back/Livraison/Panne.html.twig", "C:\\xampp\\htdocs\\pi\\src\\BackBundle\\Resources\\views\\Livraison\\Panne.html.twig");
    }
}

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

/* @Back/Livraison/AfficherVehicules.html.twig */
class __TwigTemplate_e54f68f7d8600af40077f038b1267051cb7e6e927fe04afcf21b1090e3462e58 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Back/Livraison/AfficherVehicules.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Back/Livraison/AfficherVehicules.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "@Back/Livraison/AfficherVehicules.html.twig", 1);
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
        echo "    <h2> Liste des  Vehicules</h2>

    <table border=\"1\">
        <tr>
            <th> Nom </th>
            <th> Type Vehicule </th>
            <th> Disponible </th>
            <th></th>
            <th></th>
        </tr>

        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vehicules"] ?? $this->getContext($context, "vehicules")));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 16
            echo "            <tr>
                <th> ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "nom", []), "html", null, true);
            echo "</th>

                <th> ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["t"], "typeVehicule", []), "libelle", []), "html", null, true);
            echo "</th>
                ";
            // line 20
            if (($this->getAttribute($context["t"], "disponibilite", []) == 0)) {
                // line 21
                echo "                <th> Non disponible </th>
                ";
            } else {
                // line 23
                echo "                    <th>  disponible </th>
                    ";
            }
            // line 25
            echo "                <th> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifierVehicule", ["id" => $this->getAttribute(            // line 26
$context["t"], "id", [])]), "html", null, true);
            echo "\">
                        Modifier</a></th>
                <th> <a class=\"confirmModal\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimerVehicule", ["id" => $this->getAttribute(            // line 29
$context["t"], "id", [])]), "html", null, true);
            echo "\"  >
                        Supprimer</a></th>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </table>

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
        return "@Back/Livraison/AfficherVehicules.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  107 => 29,  106 => 28,  101 => 26,  99 => 25,  95 => 23,  91 => 21,  89 => 20,  85 => 19,  80 => 17,  77 => 16,  73 => 15,  60 => 4,  51 => 3,  29 => 1,);
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
    <h2> Liste des  Vehicules</h2>

    <table border=\"1\">
        <tr>
            <th> Nom </th>
            <th> Type Vehicule </th>
            <th> Disponible </th>
            <th></th>
            <th></th>
        </tr>

        {%  for t in vehicules %}
            <tr>
                <th> {{ t.nom }}</th>

                <th> {{ t.typeVehicule.libelle }}</th>
                {%  if t.disponibilite == 0 %}
                <th> Non disponible </th>
                {%  else %}
                    <th>  disponible </th>
                    {% endif %}
                <th> <a href=\"{{ path('modifierVehicule',
                        {'id':t.id}) }}\">
                        Modifier</a></th>
                <th> <a class=\"confirmModal\" href=\"{{ path('supprimerVehicule',
                        {'id':t.id}) }}\"  >
                        Supprimer</a></th>
            </tr>
        {% endfor %}
    </table>

    <div id=\"dialog-confirm\" title=\"Confirmation de la suppression\" style=\"display:none;\">
        <p>
            <span class=\"ui-icon ui-icon-alert\" style=\"float:left; margin:0 7px 20px 0;\"></span>
            Etes-vous sûr de vouloir supprimer ce vehicule ?
        </p>
    </div>

{%  endblock %}", "@Back/Livraison/AfficherVehicules.html.twig", "C:\\wamp64\\www\\PI-DEV\\pi\\src\\BackBundle\\Resources\\views\\Livraison\\AfficherVehicules.html.twig");
    }
}

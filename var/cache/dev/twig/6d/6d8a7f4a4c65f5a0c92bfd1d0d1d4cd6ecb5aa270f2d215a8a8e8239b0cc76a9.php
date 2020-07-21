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

/* @Back/Livraison/AfficheCommandeNonLivre.html.twig */
class __TwigTemplate_86ecf3a27a1adfa7847dbcbfe6788a1e9291a861a9f0d8a6541aae1a670a4562 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Back/Livraison/AfficheCommandeNonLivre.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Back/Livraison/AfficheCommandeNonLivre.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "@Back/Livraison/AfficheCommandeNonLivre.html.twig", 1);
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

    <table class=\"table table-striped table-bordered dataTable\"  role=\"grid\" aria-describedby=\"zero_config_info\" id=\"zero_config\" border=\"1\">
        <tr>
            <th> Commande </th>
            <th> ville </th>
            <th> Date de création </th>
            <th> Statut</th>
            <th>Affectation</th>

        </tr>

        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cmd"] ?? $this->getContext($context, "cmd")));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 17
            echo "            <tr>
                <th> ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "id", []), "html", null, true);
            echo "</th>

                <th> ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "adresse", []), "html", null, true);
            echo "</th>
                <th>  ";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["t"], "date", []), " j/m/yy"), "html", null, true);
            echo "</th>
                <th> ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "etatLivraion", []), "html", null, true);
            echo "</th>
                ";
            // line 23
            if (($this->getAttribute($context["t"], "etatLivraion", []) == "affecté")) {
                // line 24
                echo "                        <th></th>
                    ";
            } else {
                // line 26
                echo "                        <th > <a  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affecterLivraison", ["id" => $this->getAttribute(                // line 27
$context["t"], "id", [])]), "html", null, true);
                echo "\"  >
                                Affecter</a></th>
                ";
            }
            // line 30
            echo "
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </table>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Back/Livraison/AfficheCommandeNonLivre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 33,  112 => 30,  106 => 27,  104 => 26,  100 => 24,  98 => 23,  94 => 22,  90 => 21,  86 => 20,  81 => 18,  78 => 17,  74 => 16,  60 => 4,  51 => 3,  29 => 1,);
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
    <h2> Liste des  Vehicules</h2>

    <table class=\"table table-striped table-bordered dataTable\"  role=\"grid\" aria-describedby=\"zero_config_info\" id=\"zero_config\" border=\"1\">
        <tr>
            <th> Commande </th>
            <th> ville </th>
            <th> Date de création </th>
            <th> Statut</th>
            <th>Affectation</th>

        </tr>

        {%  for t in cmd %}
            <tr>
                <th> {{ t.id }}</th>

                <th> {{ t.adresse }}</th>
                <th>  {{ t.date |date(' j/m/yy') }}</th>
                <th> {{ t.etatLivraion }}</th>
                {% if t.etatLivraion == \"affecté\"   %}
                        <th></th>
                    {%  else %}
                        <th > <a  href=\"{{ path('affecterLivraison',
                                {'id':t.id}) }}\"  >
                                Affecter</a></th>
                {% endif %}

            </tr>
        {% endfor %}
    </table>



{%  endblock %}", "@Back/Livraison/AfficheCommandeNonLivre.html.twig", "C:\\xampp\\htdocs\\pi\\src\\BackBundle\\Resources\\views\\Livraison\\AfficheCommandeNonLivre.html.twig");
    }
}

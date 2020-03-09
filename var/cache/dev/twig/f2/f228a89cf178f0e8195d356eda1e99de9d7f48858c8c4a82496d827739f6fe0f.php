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

/* @Back/Livraison/AfficherCommandeParClient.html.twig */
class __TwigTemplate_c291c31f6ceb4dee9faa6051db7bd83153f0960b29fd7c958755230153fa50e3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Back/Livraison/AfficherCommandeParClient.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Back/Livraison/AfficherCommandeParClient.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Back/Livraison/AfficherCommandeParClient.html.twig", 1);
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
    <section id=\"page-content\" class=\"page-wrapper\" style=\"    height: 800px;\">
        ";
        // line 6
        if ((twig_length_filter($this->env, ($context["cmd"] ?? $this->getContext($context, "cmd"))) > 0)) {
            // line 7
            echo "            <br>
            <h1>Liste des commandes</h1>
            <br>
            <table class=\"table table-striped table-bordered dataTable\"  role=\"grid\" aria-describedby=\"zero_config_info\" id=\"zero_config\" border=\"1\">
                <tr>
                    <th> Numero commande </th>
                    <th>Date commande</th>
                    <th> Prix total </th>

                    <th colspan=\"2\"> Action</th>

                </tr>

                ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cmd"] ?? $this->getContext($context, "cmd")));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 21
                echo "                    <tr>
                        <th>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", []), "html", null, true);
                echo " </th>
                        <th>";
                // line 23
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["c"], "date", []), "Y/m/d"), "html", null, true);
                echo "  </th>
                        <th>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "prixT", []), "html", null, true);
                echo " </th>


                        <th><a class=\"fas fa-images\" href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("suivi", ["idcmd" => $this->getAttribute($context["c"], "id", [])]), "html", null, true);
                echo "\">  </a></th>
                        <th><a href=\"#\" class=\"fas fa-list-ol\" id=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", []), "html", null, true);
                echo "\">  </a></th>
                    </tr>


                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "            </table>
            <br>
            <br>
            <br><br>
            <div id=\"dcache\">
                <h1>Liste des produits sélectionnés</h1>
                <table class=\"table table-striped table-bordered dataTable\"  role=\"grid\" aria-describedby=\"zero_config_info\" id=\"zero_config\" border=\"1\">
                    <tr>
                        <th> code produit</th>
                        <th> nom produit</th>
                        <th> prix produit</th>
                    </tr>
                    <tbody id=\"tabProduit\">

                    </tbody>
                </table>
            </div>
        ";
        } else {
            // line 51
            echo "            <h1 style=\"color: green\">  Vous n'avez rien commandé</h1>
        ";
        }
        // line 53
        echo "    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 57
    public function block_js($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 58
        echo "
    <script >

        \$(document).ready(function() {
            \$(\"#dcache\").hide();
            \$(\"a\").on(\"click\", function (event) {
                \$(\"#tabProduit\").html(\"\");
                var ax= \$(this).attr(\"id\");
                if(ax !=undefined) {

                    \$.ajax({
                        url: 'DetailsProduits',
                        type: 'POST',
                        dataType: 'json',
                        data: {'id': ax},
                        async: true,
                        success: function (data) {
                            \$(\"#dcache\").show();
                            for(var i=0;i<data.length;i++){
                                var a = data[i].id;
                                var b = data[i].libelle;
                                var c = data[i].prix;


                                \$(\"#tabProduit\").append('<tr> <th>'+ a+' </th> <th>'+ b+' </th> <th>'+ c+' </th> </tr> ');

                            }
                        },
                        error: function (xhr, textStatus, errorThrown) {
                            alert('Ajax request failed.');
                        }


                    });
                }
            });





        });


    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Back/Livraison/AfficherCommandeParClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 58,  153 => 57,  142 => 53,  138 => 51,  118 => 33,  107 => 28,  103 => 27,  97 => 24,  93 => 23,  89 => 22,  86 => 21,  82 => 20,  67 => 7,  65 => 6,  61 => 4,  52 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <section id=\"page-content\" class=\"page-wrapper\" style=\"    height: 800px;\">
        {% if cmd|length > 0 %}
            <br>
            <h1>Liste des commandes</h1>
            <br>
            <table class=\"table table-striped table-bordered dataTable\"  role=\"grid\" aria-describedby=\"zero_config_info\" id=\"zero_config\" border=\"1\">
                <tr>
                    <th> Numero commande </th>
                    <th>Date commande</th>
                    <th> Prix total </th>

                    <th colspan=\"2\"> Action</th>

                </tr>

                {%  for c in cmd %}
                    <tr>
                        <th>{{ c.id }} </th>
                        <th>{{ c.date| date('Y/m/d') }}  </th>
                        <th>{{ c.prixT  }} </th>


                        <th><a class=\"fas fa-images\" href=\"{{ path('suivi',{'idcmd':c.id}) }}\">  </a></th>
                        <th><a href=\"#\" class=\"fas fa-list-ol\" id=\"{{ c.id }}\">  </a></th>
                    </tr>


                {% endfor %}
            </table>
            <br>
            <br>
            <br><br>
            <div id=\"dcache\">
                <h1>Liste des produits sélectionnés</h1>
                <table class=\"table table-striped table-bordered dataTable\"  role=\"grid\" aria-describedby=\"zero_config_info\" id=\"zero_config\" border=\"1\">
                    <tr>
                        <th> code produit</th>
                        <th> nom produit</th>
                        <th> prix produit</th>
                    </tr>
                    <tbody id=\"tabProduit\">

                    </tbody>
                </table>
            </div>
        {% else %}
            <h1 style=\"color: green\">  Vous n'avez rien commandé</h1>
        {% endif %}
    </section>
{% endblock %}


{%  block js %}

    <script >

        \$(document).ready(function() {
            \$(\"#dcache\").hide();
            \$(\"a\").on(\"click\", function (event) {
                \$(\"#tabProduit\").html(\"\");
                var ax= \$(this).attr(\"id\");
                if(ax !=undefined) {

                    \$.ajax({
                        url: 'DetailsProduits',
                        type: 'POST',
                        dataType: 'json',
                        data: {'id': ax},
                        async: true,
                        success: function (data) {
                            \$(\"#dcache\").show();
                            for(var i=0;i<data.length;i++){
                                var a = data[i].id;
                                var b = data[i].libelle;
                                var c = data[i].prix;


                                \$(\"#tabProduit\").append('<tr> <th>'+ a+' </th> <th>'+ b+' </th> <th>'+ c+' </th> </tr> ');

                            }
                        },
                        error: function (xhr, textStatus, errorThrown) {
                            alert('Ajax request failed.');
                        }


                    });
                }
            });





        });


    </script>

{% endblock  %}



", "@Back/Livraison/AfficherCommandeParClient.html.twig", "C:\\xampp\\htdocs\\pi\\src\\BackBundle\\Resources\\views\\Livraison\\AfficherCommandeParClient.html.twig");
    }
}

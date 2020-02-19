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

/* @Back/Commande/AfficheCommande.html.twig */
class __TwigTemplate_99572d2c2d756aecd11c4d502e6c5aa2cb03d81f7c69e86fd1228d959b367d65 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'bodyback' => [$this, 'block_bodyback'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Back/Commande/AfficheCommande.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Back/Commande/AfficheCommande.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "@Back/Commande/AfficheCommande.html.twig", 1);
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
        echo "    <div class=\"sidebar-search\">

        <div class=\"input-group custom-search-form\">

            <input type=\"number\" id=\"search\" class=\"form-control\" placeholder=\"Search by Id\" min=\"1\" required>
        </div>
        <!-- /input-group -->
    </div>
    <ul class=\"nav\" id=\"side-menu\">
        <li>
            <ul class=\"nav nav-second-level\" id=\"entitiesNav\">
            </ul>
        </li>
        <div id=\"commandes\"></div>
<table class=\"table table-striped\">
    <tr align=\"center\"  >

    <tr>
        <td>";
        // line 22
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["commande"] ?? $this->getContext($context, "commande")), "Identifiant Commande ", "id");
        echo "</td>
        <td>";
        // line 23
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["commande"] ?? $this->getContext($context, "commande")), "Client ", "idU");
        echo "</td>
        <td>";
        // line 24
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["commande"] ?? $this->getContext($context, "commande")), "Date Commande ", "date");
        echo "</td>
        <td colspan=\"4\"><b>Action</b></td>
    </tr>
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["commande"] ?? $this->getContext($context, "commande")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 28
            echo "    <tr>
        <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", []), "html", null, true);
            echo "</td>
        <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "idU", []), "html", null, true);
            echo "</td>
        <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["c"], "date", [])), "html", null, true);
            echo "</td>
        <td> <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimercommande", ["id" => $this->getAttribute($context["c"], "id", [])]), "html", null, true);
            echo "\" onclick=\"return confirm('Etes vous sur?')\" class=\"btn btn-danger\" >supprimer</a></td>
        <td> <a class=\"btn btn-success\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showdetailscommande", ["id" => $this->getAttribute($context["c"], "id", [])]), "html", null, true);
            echo "\">Afficher Details Commande</a></td>
        <td> <a class=\"btn btn-info\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprimer", ["id" => $this->getAttribute($context["c"], "id", [])]), "html", null, true);
            echo "\">Imprimer facture</a></td>

    </tr>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "</table>
        <div class=\"navigation \" style=\"width:100%\">
            ";
        // line 41
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["commande"] ?? $this->getContext($context, "commande")));
        echo "
        </div>
        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js\"></script>
        <script language = \"javascript\">

            //\$(document).ready(function(){

                \$(\"#search\").on(\"keyup\",function(event){

                    \$r=\$(\"#search\").val();
                    \$.ajax({
                        url:        '/searchmyass',
                        type:       'POST',
                        dataType:   'json',
                        data:{'q':\$r},
                        async:      true,

                        success: function(data) {
                            console.log(\" zaaaaaaaaaaaab\");

                            var e=\$('<tr><th>id</th><th>Client</th><th>Date</th><th>Actions</th></tr>')
                            \$(\"#commandes\").html('');


                            for(let i=0;i<data.length;i++) {
                                commande = data[i];

                                var e =e + \$('<tr><td id=\"id\"></td>' +
                                    '<td>commande[id]</td>' +
                                    '<td>commande[idu]</td>' +
                                    '<td>commande[date]</td>' +
                                ' </tr>'

                            );
                                \$('#commandes').html.append(e);




                            }
                        },
                        error : function(xhr, textStatus, errorThrown) {
                            alert('Commande introuvable ');
                            console.log(textStatus);
                            console.log(xhr);
                            console.log(errorThrown);
                        }
                    });

                })
            });

        </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 96
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 97
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Back/Commande/AfficheCommande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 97,  201 => 96,  137 => 41,  133 => 39,  122 => 34,  118 => 33,  114 => 32,  110 => 31,  106 => 30,  102 => 29,  99 => 28,  95 => 27,  89 => 24,  85 => 23,  81 => 22,  61 => 4,  52 => 3,  30 => 1,);
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
    <div class=\"sidebar-search\">

        <div class=\"input-group custom-search-form\">

            <input type=\"number\" id=\"search\" class=\"form-control\" placeholder=\"Search by Id\" min=\"1\" required>
        </div>
        <!-- /input-group -->
    </div>
    <ul class=\"nav\" id=\"side-menu\">
        <li>
            <ul class=\"nav nav-second-level\" id=\"entitiesNav\">
            </ul>
        </li>
        <div id=\"commandes\"></div>
<table class=\"table table-striped\">
    <tr align=\"center\"  >

    <tr>
        <td>{{ knp_pagination_sortable(commande,'Identifiant Commande ','id') }}</td>
        <td>{{  knp_pagination_sortable(commande,'Client ','idU') }}</td>
        <td>{{ knp_pagination_sortable(commande,'Date Commande ','date') }}</td>
        <td colspan=\"4\"><b>Action</b></td>
    </tr>
    {% for c in commande %}
    <tr>
        <td>{{ c.id }}</td>
        <td>{{ c.idU }}</td>
        <td>{{ c.date|date }}</td>
        <td> <a href=\"{{ path ('supprimercommande',{'id':c.id}) }}\" onclick=\"return confirm('Etes vous sur?')\" class=\"btn btn-danger\" >supprimer</a></td>
        <td> <a class=\"btn btn-success\" href=\"{{ path('showdetailscommande',{'id':c.id}) }}\">Afficher Details Commande</a></td>
        <td> <a class=\"btn btn-info\" href=\"{{ path('imprimer',{'id':c.id}) }}\">Imprimer facture</a></td>

    </tr>

    {% endfor %}
</table>
        <div class=\"navigation \" style=\"width:100%\">
            {{ knp_pagination_render(commande) }}
        </div>
        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js\"></script>
        <script language = \"javascript\">

            //\$(document).ready(function(){

                \$(\"#search\").on(\"keyup\",function(event){

                    \$r=\$(\"#search\").val();
                    \$.ajax({
                        url:        '/searchmyass',
                        type:       'POST',
                        dataType:   'json',
                        data:{'q':\$r},
                        async:      true,

                        success: function(data) {
                            console.log(\" zaaaaaaaaaaaab\");

                            var e=\$('<tr><th>id</th><th>Client</th><th>Date</th><th>Actions</th></tr>')
                            \$(\"#commandes\").html('');


                            for(let i=0;i<data.length;i++) {
                                commande = data[i];

                                var e =e + \$('<tr><td id=\"id\"></td>' +
                                    '<td>commande[id]</td>' +
                                    '<td>commande[idu]</td>' +
                                    '<td>commande[date]</td>' +
                                ' </tr>'

                            );
                                \$('#commandes').html.append(e);




                            }
                        },
                        error : function(xhr, textStatus, errorThrown) {
                            alert('Commande introuvable ');
                            console.log(textStatus);
                            console.log(xhr);
                            console.log(errorThrown);
                        }
                    });

                })
            });

        </script>
{%  endblock %}

{% block javascripts %}

{%  endblock %}", "@Back/Commande/AfficheCommande.html.twig", "/Applications/MAMP/htdocs/pi3/src/BackBundle/Resources/views/Commande/AfficheCommande.html.twig");
    }
}

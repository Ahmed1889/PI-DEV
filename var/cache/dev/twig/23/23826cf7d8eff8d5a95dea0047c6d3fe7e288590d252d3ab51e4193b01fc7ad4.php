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
class __TwigTemplate_0b9849cc31ec5e9cf890d68fd529af428ea1b7c059823653d9373592b19d24a1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'bodyBack' => [$this, 'block_bodyBack'],
            'js2' => [$this, 'block_js2'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Back/Livraison/AfficherVehicules.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Back/Livraison/AfficherVehicules.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "@Back/Livraison/AfficherVehicules.html.twig", 1);
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
            <th> Nom </th>
            <th>Matricule</th>
            <th> Type Vehicule </th>
            <th> Disponible </th>
            <th></th>
            <th></th>
        </tr>

        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vehicules"] ?? $this->getContext($context, "vehicules")));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 17
            echo "            <tr>
                <th> ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "nom", []), "html", null, true);
            echo "</th>
                <th> ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "matricule", []), "html", null, true);
            echo "</th>

                <th> ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["t"], "typeVehicule", []), "libelle", []), "html", null, true);
            echo "</th>
                ";
            // line 22
            if (($this->getAttribute($context["t"], "disponibilite", []) == 0)) {
                // line 23
                echo "                <th> Non disponible </th>
                ";
            } else {
                // line 25
                echo "                    <th>  disponible </th>
                    ";
            }
            // line 27
            echo "
                <th> <a style=\"color: #1d50de\"  class='confirmModal2'  id='";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "id", []), "html", null, true);
            echo "'>
                        Modifier</a></th>
                <th> <a class=\"confirmModal\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimerVehicule", ["id" => $this->getAttribute(            // line 31
$context["t"], "id", [])]), "html", null, true);
            echo "\"  >
                        Supprimer</a></th>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    </table>

    <div id=\"dialog-confirm\" title=\"Confirmation de la suppression\" style=\"display:none;\">
        <p>
            <span class=\"ui-icon ui-icon-alert\" style=\"float:left; margin:0 7px 20px 0;\"></span>
            Etes-vous sûr de vouloir supprimer ce vehicule ?
        </p>
    </div>


    <div id=\"dialog-confirm2\" title=\"Modifier véhicule\" style=\"display:none;\">
        <div id=\"modif\">

            <form name=\"fmodif\" method=\"post\" action=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ModifierVehiculePop");
        echo "\"><br>
                        <input type=\"hidden\"  name=\"idd\" class=\"idd\" />  <br>
                        Nom:  <input type=\"text\" name=\"nomm\" class=\"nomm\" /> <span style=\"color: red\" class=\"error_name\"> *nom ne doit pas être vide  </span> <br>
                Matricule:  <input type=\"text\" name=\"matriculee\" class=\"matriculee\" /> <span style=\"color: red\" class=\"error_matricule\"> *matricule ne doit pas être vide  </span> <br>
                 Type Vehicule <select name=\"selct\" class=\"selct\">  </select> <br>

                        <input type=\"submit\" value=\"Confirmer\" name=\"bt\" /> <br>
                    </form>

        </div>
    </div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_js2($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js2"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js2"));

        // line 65
        echo "
<script >

    \$(document).ready(function() {
        \$(\".error_name\").hide();
        \$(\".error_matricule\").hide();
        \$(\".nomm\").on(\"blur\",function () {
            if(\$(this).val()==\"\"){
                \$(\".error_name\").fadeIn(2000);
            }else {
                \$(\".error_name\").fadeOut(2000);
            }
        });

        \$(\".matriculee\").on(\"blur\",function () {
            if(\$(this).val()==\"\"){
                \$(\".error_matricule\").fadeIn(2000);
            }else {
                \$(\".error_matricule\").fadeOut(2000);
            }
        });

        \$(\"a\").on(\"click\", function (event) {

        var a= \$(this).attr(\"id\");
        if(a !=undefined) {

            \$.ajax({
                url: 'ModifierVehicule2',
                type: 'POST',
                dataType: 'json',
                data: {'id': a},
                async: true,
                success: function (data) {
                    \$(\".error_name\").hide();
                    \$(\".error_matricule\").hide();
                    var a = data[1].id;
                    var b = data[1].named;
                    var c = data[1].matricule;
                    \$(\".idd\").val(a);
                    \$(\".nomm\").val(b);
                    \$(\".matriculee\").val(c);
                    \$(\".selct\").html(\"\");
                    \$(\".selct\").append(' <option selected=\"selected\" value=\"' + data[1].typeVId + '\">' + data[1].typeVL + ' </option>');


                    var typeV = data[1].typeVId;
                    \$.ajax({
                        url: 'ModifierVehicule22',
                        type: 'POST',
                        dataType: 'json',
                        data: {'id': typeV},
                        async: true,
                        success: function (data) {
                            for (var i = 0; i < data.length; i++) {

                                \$(\".selct\").append(' <option value=\"' + data[i].id + '\">' + data[i].libelle + ' </option>');
                            }
                        },
                        error: function (xhr, textStatus, errorThrown) {
                            alert('Ajax request failed.');
                        }


                    });

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
        return "@Back/Livraison/AfficherVehicules.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 65,  164 => 64,  139 => 48,  124 => 35,  114 => 31,  113 => 30,  108 => 28,  105 => 27,  101 => 25,  97 => 23,  95 => 22,  91 => 21,  86 => 19,  82 => 18,  79 => 17,  75 => 16,  61 => 4,  52 => 3,  30 => 1,);
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
            <th> Nom </th>
            <th>Matricule</th>
            <th> Type Vehicule </th>
            <th> Disponible </th>
            <th></th>
            <th></th>
        </tr>

        {%  for t in vehicules %}
            <tr>
                <th> {{ t.nom }}</th>
                <th> {{ t.matricule }}</th>

                <th> {{ t.typeVehicule.libelle }}</th>
                {%  if t.disponibilite == 0 %}
                <th> Non disponible </th>
                {%  else %}
                    <th>  disponible </th>
                    {% endif %}

                <th> <a style=\"color: #1d50de\"  class='confirmModal2'  id='{{ t.id}}'>
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


    <div id=\"dialog-confirm2\" title=\"Modifier véhicule\" style=\"display:none;\">
        <div id=\"modif\">

            <form name=\"fmodif\" method=\"post\" action=\"{{ path('ModifierVehiculePop') }}\"><br>
                        <input type=\"hidden\"  name=\"idd\" class=\"idd\" />  <br>
                        Nom:  <input type=\"text\" name=\"nomm\" class=\"nomm\" /> <span style=\"color: red\" class=\"error_name\"> *nom ne doit pas être vide  </span> <br>
                Matricule:  <input type=\"text\" name=\"matriculee\" class=\"matriculee\" /> <span style=\"color: red\" class=\"error_matricule\"> *matricule ne doit pas être vide  </span> <br>
                 Type Vehicule <select name=\"selct\" class=\"selct\">  </select> <br>

                        <input type=\"submit\" value=\"Confirmer\" name=\"bt\" /> <br>
                    </form>

        </div>
    </div>



{%  endblock  %}

{%  block js2 %}

<script >

    \$(document).ready(function() {
        \$(\".error_name\").hide();
        \$(\".error_matricule\").hide();
        \$(\".nomm\").on(\"blur\",function () {
            if(\$(this).val()==\"\"){
                \$(\".error_name\").fadeIn(2000);
            }else {
                \$(\".error_name\").fadeOut(2000);
            }
        });

        \$(\".matriculee\").on(\"blur\",function () {
            if(\$(this).val()==\"\"){
                \$(\".error_matricule\").fadeIn(2000);
            }else {
                \$(\".error_matricule\").fadeOut(2000);
            }
        });

        \$(\"a\").on(\"click\", function (event) {

        var a= \$(this).attr(\"id\");
        if(a !=undefined) {

            \$.ajax({
                url: 'ModifierVehicule2',
                type: 'POST',
                dataType: 'json',
                data: {'id': a},
                async: true,
                success: function (data) {
                    \$(\".error_name\").hide();
                    \$(\".error_matricule\").hide();
                    var a = data[1].id;
                    var b = data[1].named;
                    var c = data[1].matricule;
                    \$(\".idd\").val(a);
                    \$(\".nomm\").val(b);
                    \$(\".matriculee\").val(c);
                    \$(\".selct\").html(\"\");
                    \$(\".selct\").append(' <option selected=\"selected\" value=\"' + data[1].typeVId + '\">' + data[1].typeVL + ' </option>');


                    var typeV = data[1].typeVId;
                    \$.ajax({
                        url: 'ModifierVehicule22',
                        type: 'POST',
                        dataType: 'json',
                        data: {'id': typeV},
                        async: true,
                        success: function (data) {
                            for (var i = 0; i < data.length; i++) {

                                \$(\".selct\").append(' <option value=\"' + data[i].id + '\">' + data[i].libelle + ' </option>');
                            }
                        },
                        error: function (xhr, textStatus, errorThrown) {
                            alert('Ajax request failed.');
                        }


                    });

                },
                error: function (xhr, textStatus, errorThrown) {
                    alert('Ajax request failed.');
                }


            });
        }
        });





    });


</script>

{% endblock  %}", "@Back/Livraison/AfficherVehicules.html.twig", "C:\\xampp\\htdocs\\pi\\src\\BackBundle\\Resources\\views\\Livraison\\AfficherVehicules.html.twig");
    }
}

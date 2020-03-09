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

/* historique/stat.html.twig */
class __TwigTemplate_68b780066761ab3445d9db9699c3551d59e4c10d058c48b33c51c1fca78271fd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "historique/stat.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "historique/stat.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "historique/stat.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_bodyBack($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyBack"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyBack"));

        // line 3
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Title</title>
    <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>

</head>
<body>
<div class=\"row\">
    <div class=\"col-md-3\">
        <div class=\"card m-t-0\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"box bg-success text-center\">
                        <h1 class=\"font-light text-white\"><i class=\"mdi mdi-chart-areaspline\"></i></h1>
                        <h6 class=\"text-white\">Commande En cours</h6>
                    </div>
                </div>
                <div class=\"col-md-6 border-left text-center p-t-10\">
                    <h1 class=\"mb-0 font-weight-bold\">";
        // line 23
        echo twig_escape_filter($this->env, ($context["e"] ?? $this->getContext($context, "e")), "html", null, true);
        echo "</h1>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"card m-t-0\">
            <div class=\"row\">
                <div  class=\"col-md-6\">
                    <div class=\"box bg-danger text-center\">
                        <h1 class=\"font-light text-white\"><i class=\"mdi mdi-chart-areaspline\"></i></h1>
                        <h6 class=\"text-white\">Commande Livré</h6>
                    </div>
                </div>
                <div class=\"col-md-6 border-left text-center p-t-10\">
                    <h1 class=\"mb-0 font-weight-bold\">";
        // line 38
        echo twig_escape_filter($this->env, ($context["l"] ?? $this->getContext($context, "l")), "html", null, true);
        echo "</h1>
                </div>
            </div>
        </div>
    </div>

    <div class=\"col-md-3\">
        <div class=\"card m-t-0\">
            <div class=\"row\">
                <div  class=\"col-md-6\">
                    <div class=\"box bg-warning text-center\">
                        <h1 class=\"font-light text-white\"><i class=\"mdi mdi-chart-areaspline\"></i></h1>
                        <h6 class=\"text-white\">Prix d'achat Total</h6>
                    </div>
                </div>
                <div class=\"col-md-6 border-left text-center p-t-10\">
                    <h1 class=\"mb-0 font-weight-bold\">";
        // line 54
        echo twig_escape_filter($this->env, ($context["total"] ?? $this->getContext($context, "total")), "html", null, true);
        echo " DT</h1>
                </div>
            </div>
        </div>
    </div>


</div>
<div class=\"form-group row\">
    <label class=\"col-md-3 m-t-15\">Selectionner Critere</label>
    <div class=\"col-md-9\">
        <select id=\"char\" class=\"select2 form-control custom-select\" style=\"width: 100%; height:36px;\">

            <optgroup label=\"Critere de Statistique\">
            <option value=\"Categorie\">Categorie</option>
            <option value=\"Nombre de Commande\">Nombre de Commande</option>
            </optgroup>


        </select>
    </div>


</div>

<table>
    <tr>




        <td valign=\"top\">
            <div  height=\"800\" class=\"card\">
                <div class=\"card-body\">
                    <h4 class=\"card-title m-b-0\">Activité Recente</h4>
                </div>
                <ul class=\"list-style-none\">
                    ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["ac"]);
        foreach ($context['_seq'] as $context["_key"] => $context["ac"]) {
            // line 92
            echo "                    <li class=\"card-body border-top\">
                        <a href=\"#\" class=\"m-b-0 p-0\">
                            <div class=\"d-flex no-block\">
                                <i class=\"fa fa-user w-30px m-t-5\"></i>
                                <div>";
            // line 96
            if (($this->getAttribute($context["ac"], "etat", []) == "Livré")) {
                // line 97
                echo "                                    <span class=\"font-bold\"> une Livraison de ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ac"], "idcf", []), "nomf", []), "html", null, true);
                echo " est Reçu  </span>
                                    <span>
                                        il ya ";
                // line 99
                $context["difference"] = $this->getAttribute(twig_date_converter($this->env, $this->getAttribute($context["ac"], "date", [])), "diff", [0 => twig_date_converter($this->env, ($context["dat"] ?? $this->getContext($context, "dat")))], "method");
                // line 100
                echo "                                        ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["difference"] ?? $this->getContext($context, "difference")), "%d"), "html", null, true);
                echo " jours
                                    </span>
                                  ";
            } else {
                // line 103
                echo "                                      <span class=\"font-bold\"> la Commande Numero ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ac"], "id", []), "html", null, true);
                echo " de  produit ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ac"], "idcp", []), "libelleP", []), "html", null, true);
                echo " est Envoyé a  ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ac"], "idcf", []), "nomf", []), "html", null, true);
                echo "  </span>
                                      <span>
                                           il ya ";
                // line 105
                $context["difference"] = $this->getAttribute(twig_date_converter($this->env, $this->getAttribute($context["ac"], "date", [])), "diff", [0 => twig_date_converter($this->env, ($context["dat"] ?? $this->getContext($context, "dat")))], "method");
                // line 106
                echo "                                          ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["difference"] ?? $this->getContext($context, "difference")), "%d"), "html", null, true);
                echo " jours

                                      </span>
                                    ";
            }
            // line 110
            echo "                                </div>
                            </div>
                        </a>
                    </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ac'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "                </ul>
            </div>




        </td>

        <td></td>
        <td>
<table>  <tr>
        <td>
            <div  id=\"aa\"  >
            </div>
        </td>
        <td valign=\"top\">
            <div id=\"bb\">

            </div>

        </td>
            </div>
       </tr>
</table>

        </td>
    </tr>
</table>


</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 148
    public function block_js2($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js2"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js2"));

        // line 149
        echo "    <script language = \"javascript\">
      \$(document).ready(function(){
            \$(\"#char\").change(function() {
              \$r=  \$(this).find(\"option:selected\").text();
                \$.ajax({
                    url: 'historique/statrecherche',
                    type: 'GET',
                    dataType: 'json',
                    data: {'critere': \$r},
                    async: true,
                    success: function(data) {

                        google.charts.load('current', {packages: ['corechart']});
                        google.charts.setOnLoadCallback(drawChart);
                        google.charts.setOnLoadCallback(drawCharth());

                        function drawCharth() {

                            var datastat = new google.visualization.arrayToDataTable([
                                [' ','Premioum', 'Gold','Silver'],
                                [' ',data[0].Premium,data[0].Gold,data[0].Silver],


                            ]);



                            var options = {
                                'title': 'Fournisseur Par Categorie',
                                'width': 800,
                                'height': 700,


                                animation:{
                                    duration: 1000,
                                    startup: true,
                                }
                            };

                            var ch = new google.visualization.ColumnChart(document.getElementById('aa'));

                            ch.draw(datastat, options);
                            \$('#bb').hide();



                        }
                        function drawChart() {


                             datastat = new google.visualization.arrayToDataTable(data);

                            var options = {
                                'title': 'Fournisseur et Commande',
                                'width': 800,
                                'height': 700,
                                colors: ['#2ecc71'],
                                animation:{
                                    duration: 1000,
                                    startup: true,
                                }
                            };

                            var ch = new google.visualization.ColumnChart(document.getElementById('aa'));

                            ch.draw(datastat, options);






                        }






                    },
                    error : function(xhr, textStatus, errorThrown) {
                        alert('Ajax request failed.');
                    }
                });

            })
        });





</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "historique/stat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 149,  259 => 148,  217 => 115,  207 => 110,  199 => 106,  197 => 105,  187 => 103,  180 => 100,  178 => 99,  172 => 97,  170 => 96,  164 => 92,  160 => 91,  120 => 54,  101 => 38,  83 => 23,  61 => 3,  52 => 2,  30 => 1,);
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
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Title</title>
    <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>

</head>
<body>
<div class=\"row\">
    <div class=\"col-md-3\">
        <div class=\"card m-t-0\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"box bg-success text-center\">
                        <h1 class=\"font-light text-white\"><i class=\"mdi mdi-chart-areaspline\"></i></h1>
                        <h6 class=\"text-white\">Commande En cours</h6>
                    </div>
                </div>
                <div class=\"col-md-6 border-left text-center p-t-10\">
                    <h1 class=\"mb-0 font-weight-bold\">{{ e }}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"card m-t-0\">
            <div class=\"row\">
                <div  class=\"col-md-6\">
                    <div class=\"box bg-danger text-center\">
                        <h1 class=\"font-light text-white\"><i class=\"mdi mdi-chart-areaspline\"></i></h1>
                        <h6 class=\"text-white\">Commande Livré</h6>
                    </div>
                </div>
                <div class=\"col-md-6 border-left text-center p-t-10\">
                    <h1 class=\"mb-0 font-weight-bold\">{{ l }}</h1>
                </div>
            </div>
        </div>
    </div>

    <div class=\"col-md-3\">
        <div class=\"card m-t-0\">
            <div class=\"row\">
                <div  class=\"col-md-6\">
                    <div class=\"box bg-warning text-center\">
                        <h1 class=\"font-light text-white\"><i class=\"mdi mdi-chart-areaspline\"></i></h1>
                        <h6 class=\"text-white\">Prix d'achat Total</h6>
                    </div>
                </div>
                <div class=\"col-md-6 border-left text-center p-t-10\">
                    <h1 class=\"mb-0 font-weight-bold\">{{ total }} DT</h1>
                </div>
            </div>
        </div>
    </div>


</div>
<div class=\"form-group row\">
    <label class=\"col-md-3 m-t-15\">Selectionner Critere</label>
    <div class=\"col-md-9\">
        <select id=\"char\" class=\"select2 form-control custom-select\" style=\"width: 100%; height:36px;\">

            <optgroup label=\"Critere de Statistique\">
            <option value=\"Categorie\">Categorie</option>
            <option value=\"Nombre de Commande\">Nombre de Commande</option>
            </optgroup>


        </select>
    </div>


</div>

<table>
    <tr>




        <td valign=\"top\">
            <div  height=\"800\" class=\"card\">
                <div class=\"card-body\">
                    <h4 class=\"card-title m-b-0\">Activité Recente</h4>
                </div>
                <ul class=\"list-style-none\">
                    {% for ac in ac %}
                    <li class=\"card-body border-top\">
                        <a href=\"#\" class=\"m-b-0 p-0\">
                            <div class=\"d-flex no-block\">
                                <i class=\"fa fa-user w-30px m-t-5\"></i>
                                <div>{% if ac.etat==\"Livré\" %}
                                    <span class=\"font-bold\"> une Livraison de {{ ac.idcf.nomf }} est Reçu  </span>
                                    <span>
                                        il ya {% set difference = date(ac.date).diff(date(dat)) %}
                                        {{ difference|date(\"%d\") }} jours
                                    </span>
                                  {% else %}
                                      <span class=\"font-bold\"> la Commande Numero {{ac.id  }} de  produit {{ ac.idcp.libelleP }} est Envoyé a  {{ ac.idcf.nomf }}  </span>
                                      <span>
                                           il ya {% set difference = date(ac.date).diff(date(dat)) %}
                                          {{ difference|date(\"%d\") }} jours

                                      </span>
                                    {% endif %}
                                </div>
                            </div>
                        </a>
                    </li>
                    {% endfor %}
                </ul>
            </div>




        </td>

        <td></td>
        <td>
<table>  <tr>
        <td>
            <div  id=\"aa\"  >
            </div>
        </td>
        <td valign=\"top\">
            <div id=\"bb\">

            </div>

        </td>
            </div>
       </tr>
</table>

        </td>
    </tr>
</table>


</body>
</html>
{% endblock %}
{% block js2 %}
    <script language = \"javascript\">
      \$(document).ready(function(){
            \$(\"#char\").change(function() {
              \$r=  \$(this).find(\"option:selected\").text();
                \$.ajax({
                    url: 'historique/statrecherche',
                    type: 'GET',
                    dataType: 'json',
                    data: {'critere': \$r},
                    async: true,
                    success: function(data) {

                        google.charts.load('current', {packages: ['corechart']});
                        google.charts.setOnLoadCallback(drawChart);
                        google.charts.setOnLoadCallback(drawCharth());

                        function drawCharth() {

                            var datastat = new google.visualization.arrayToDataTable([
                                [' ','Premioum', 'Gold','Silver'],
                                [' ',data[0].Premium,data[0].Gold,data[0].Silver],


                            ]);



                            var options = {
                                'title': 'Fournisseur Par Categorie',
                                'width': 800,
                                'height': 700,


                                animation:{
                                    duration: 1000,
                                    startup: true,
                                }
                            };

                            var ch = new google.visualization.ColumnChart(document.getElementById('aa'));

                            ch.draw(datastat, options);
                            \$('#bb').hide();



                        }
                        function drawChart() {


                             datastat = new google.visualization.arrayToDataTable(data);

                            var options = {
                                'title': 'Fournisseur et Commande',
                                'width': 800,
                                'height': 700,
                                colors: ['#2ecc71'],
                                animation:{
                                    duration: 1000,
                                    startup: true,
                                }
                            };

                            var ch = new google.visualization.ColumnChart(document.getElementById('aa'));

                            ch.draw(datastat, options);






                        }






                    },
                    error : function(xhr, textStatus, errorThrown) {
                        alert('Ajax request failed.');
                    }
                });

            })
        });





</script>
{%  endblock js2 %}
", "historique/stat.html.twig", "C:\\xampp\\htdocs\\pi\\app\\Resources\\views\\historique\\stat.html.twig");
    }
}

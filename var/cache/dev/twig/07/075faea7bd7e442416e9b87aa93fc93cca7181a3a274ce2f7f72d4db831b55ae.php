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

/* fournisseur/index.html.twig */
class __TwigTemplate_f961d7d5ba5c6204440bb43e187808e4754f0d30a4430459f48bb19199f77855 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fournisseur/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fournisseur/index.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "fournisseur/index.html.twig", 1);
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
        echo "
    <h1>List des Fournisseurs</h1>
    <table>
        <tr>
            <td>Rechercher: <input id=\"recherche\" type=\"text\" ></td>
            <td><div id=\"p\"></div></td>
        </tr>
    </table>






    <div id=\"dii\" style=\"overflow: scroll;height: 500px \">
        <table  class=\"table table-striped\">
        <thead>
            <tr>
                <th >Id</th>
                <th >Fournisseur</th>
                <th>Tel </th>
                <th>Email</th>
                <th>Site web</th>
                <th>Categorie</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id=\"student\">
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fournisseurs"] ?? $this->getContext($context, "fournisseurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["fournisseur"]) {
            // line 33
            echo "            <tr>
                <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fournisseur_show", ["id" => $this->getAttribute($context["fournisseur"], "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "id", []), "html", null, true);
            echo "</a></td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "nomf", []), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "telf", []), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "emailf", []), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "sitewebf", []), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "sitewebf", []), "html", null, true);
            echo "</a></td>
                ";
            // line 39
            if (($this->getAttribute($context["fournisseur"], "categorief", []) == "Premium")) {
                // line 40
                echo "                    <td><span class=\"badge badge-pill badge-primary\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "categorief", []), "html", null, true);
                echo "</span></td>
                ";
            }
            // line 42
            echo "                ";
            if (($this->getAttribute($context["fournisseur"], "categorief", []) == "Gold")) {
                // line 43
                echo "                    <td><span class=\"badge badge-pill badge-warning\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "categorief", []), "html", null, true);
                echo "</span></td>
                ";
            }
            // line 45
            echo "                ";
            if (($this->getAttribute($context["fournisseur"], "categorief", []) == "Silver")) {
                // line 46
                echo "                    <td><span class=\"badge badge-pill badge-light\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "categorief", []), "html", null, true);
                echo "</span></td>
                ";
            }
            // line 48
            echo "                <td>


                            <a class=\"fas fa-eye\" href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fournisseur_show", ["id" => $this->getAttribute($context["fournisseur"], "id", [])]), "html", null, true);
            echo "\"></a><br>

                            <a class=\"fas fa-wrench\" href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fournisseur_edit", ["id" => $this->getAttribute($context["fournisseur"], "id", [])]), "html", null, true);
            echo "\"></a>


                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fournisseur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        </tbody>
    </table>
    </div>

    <ul>
        <li>
            <a href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fournisseur_new");
        echo "\">Créer Fournisseur</a>
        </li>
    </ul>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 70
    public function block_js2($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js2"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js2"));

        // line 71
        echo "
    <script language = \"javascript\">

        \$(document).ready(function(){

            \$(\"#recherche\").on(\"keyup\",function(event){

 \$r=\$(\"#recherche\").val();
                \$.ajax({
                    url:        '";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("filter2");
        echo "',
                    type:       'POST',
                    dataType:   'json',
                    data:{'nomf':\$r},
                    async:      true,

                    success: function(data) {

                        var e=\$('<tr><th>id</th><th>Nom</th><th>Tel</th><th>Email</th><th>Site Web</th><th>Categorie</th></tr>')
                        \$(\"#student\").html('');


                        var t;
                        for(i=0;i<data.length;i++) {
                            student = data[i];
                            if (student['categorief']== \"Premium\" )
                            t=\"badge badge-pill badge-primary\";
                            else if((student['categorief']== \"Gold\" ))
                                t=\"badge badge-pill badge-warning\";
                            else
                                t=\"badge badge-pill badge-light\";

                            var e = \$('<tr><td id=\"id\"></td>' +
                                '<td id=\"nom\"></td>' +
                                '<td id=\"tel\"></td>' +
                                '<td id=\"email\"></td>' +
                                '<td id=\"siteweb\"><a href=\"'+student['sitewebf']+'\">   '+student['sitewebf']+'   </a> </td>' +
                                '<td id=\"categorie\"><span class=\"'+t+'\"> '+student['categorief']+'</span></td>'+
                                '<td><a id=\"edit\" class=\"fas fa-wrench\" href=\"'+student[\"idf\"]+'/edit\"></a>'+
                                '<a id=\"show\" class=\"fas fa-eye\" href=\"'+student[\"idf\"]+'/show\"></a>'+
                                ' </td>'

                            );







                            \$('#id', e).html(student['idf']);
                            \$('#nom', e).html(student['nomf']);
                            \$('#tel', e).html(student['telf']);
                            \$('#email', e).html(student['emailf']);




                            \$('#student').append(e);
                            \$(\"#p\").html(\"<span id='p'>Vous avez Trouvé  \"+student['count']+\" Resultats</span>\");
                            \$(\"#p\").show();
                            \$(\"#p\").fadeOut(4000);



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
        return "fournisseur/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 80,  202 => 71,  193 => 70,  178 => 65,  170 => 59,  158 => 53,  153 => 51,  148 => 48,  142 => 46,  139 => 45,  133 => 43,  130 => 42,  124 => 40,  122 => 39,  116 => 38,  112 => 37,  108 => 36,  104 => 35,  98 => 34,  95 => 33,  91 => 32,  61 => 4,  52 => 3,  30 => 1,);
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

    <h1>List des Fournisseurs</h1>
    <table>
        <tr>
            <td>Rechercher: <input id=\"recherche\" type=\"text\" ></td>
            <td><div id=\"p\"></div></td>
        </tr>
    </table>






    <div id=\"dii\" style=\"overflow: scroll;height: 500px \">
        <table  class=\"table table-striped\">
        <thead>
            <tr>
                <th >Id</th>
                <th >Fournisseur</th>
                <th>Tel </th>
                <th>Email</th>
                <th>Site web</th>
                <th>Categorie</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id=\"student\">
        {% for fournisseur in fournisseurs %}
            <tr>
                <td><a href=\"{{ path('fournisseur_show', { 'id': fournisseur.id }) }}\">{{ fournisseur.id }}</a></td>
                <td>{{ fournisseur.nomf }}</td>
                <td>{{ fournisseur.telf }}</td>
                <td>{{ fournisseur.emailf }}</td>
                <td><a href=\"{{ fournisseur.sitewebf }}\"> {{ fournisseur.sitewebf }}</a></td>
                {% if fournisseur.categorief == \"Premium\" %}
                    <td><span class=\"badge badge-pill badge-primary\">{{ fournisseur.categorief }}</span></td>
                {% endif %}
                {% if fournisseur.categorief == \"Gold\" %}
                    <td><span class=\"badge badge-pill badge-warning\">{{ fournisseur.categorief }}</span></td>
                {% endif %}
                {% if fournisseur.categorief == \"Silver\" %}
                    <td><span class=\"badge badge-pill badge-light\">{{ fournisseur.categorief }}</span></td>
                {% endif %}
                <td>


                            <a class=\"fas fa-eye\" href=\"{{ path('fournisseur_show', { 'id': fournisseur.id }) }}\"></a><br>

                            <a class=\"fas fa-wrench\" href=\"{{ path('fournisseur_edit', { 'id': fournisseur.id }) }}\"></a>


                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    </div>

    <ul>
        <li>
            <a href=\"{{ path('fournisseur_new') }}\">Créer Fournisseur</a>
        </li>
    </ul>

{% endblock %}
{% block js2 %}

    <script language = \"javascript\">

        \$(document).ready(function(){

            \$(\"#recherche\").on(\"keyup\",function(event){

 \$r=\$(\"#recherche\").val();
                \$.ajax({
                    url:        '{{ path('filter2') }}',
                    type:       'POST',
                    dataType:   'json',
                    data:{'nomf':\$r},
                    async:      true,

                    success: function(data) {

                        var e=\$('<tr><th>id</th><th>Nom</th><th>Tel</th><th>Email</th><th>Site Web</th><th>Categorie</th></tr>')
                        \$(\"#student\").html('');


                        var t;
                        for(i=0;i<data.length;i++) {
                            student = data[i];
                            if (student['categorief']== \"Premium\" )
                            t=\"badge badge-pill badge-primary\";
                            else if((student['categorief']== \"Gold\" ))
                                t=\"badge badge-pill badge-warning\";
                            else
                                t=\"badge badge-pill badge-light\";

                            var e = \$('<tr><td id=\"id\"></td>' +
                                '<td id=\"nom\"></td>' +
                                '<td id=\"tel\"></td>' +
                                '<td id=\"email\"></td>' +
                                '<td id=\"siteweb\"><a href=\"'+student['sitewebf']+'\">   '+student['sitewebf']+'   </a> </td>' +
                                '<td id=\"categorie\"><span class=\"'+t+'\"> '+student['categorief']+'</span></td>'+
                                '<td><a id=\"edit\" class=\"fas fa-wrench\" href=\"'+student[\"idf\"]+'/edit\"></a>'+
                                '<a id=\"show\" class=\"fas fa-eye\" href=\"'+student[\"idf\"]+'/show\"></a>'+
                                ' </td>'

                            );







                            \$('#id', e).html(student['idf']);
                            \$('#nom', e).html(student['nomf']);
                            \$('#tel', e).html(student['telf']);
                            \$('#email', e).html(student['emailf']);




                            \$('#student').append(e);
                            \$(\"#p\").html(\"<span id='p'>Vous avez Trouvé  \"+student['count']+\" Resultats</span>\");
                            \$(\"#p\").show();
                            \$(\"#p\").fadeOut(4000);



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
", "fournisseur/index.html.twig", "C:\\xampp\\htdocs\\pi\\app\\Resources\\views\\fournisseur\\index.html.twig");
    }
}

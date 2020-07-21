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

/* representant/index.html.twig */
class __TwigTemplate_84c90d69f04fd335d51e3906be58b13539814a8d066e35b3a295d408de09140d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "representant/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "representant/index.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "representant/index.html.twig", 1);
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
        echo "    ";
        // line 5
        echo "    <h1>Representants list</h1>
    <input type=\"text\" id=\"recherche\">

    <table class=\"table table-striped table-bordered dataTable\"  id=\"zero_config\">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Telephone</th>
                <th>Addresse</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["representants"] ?? $this->getContext($context, "representants")));
        foreach ($context['_seq'] as $context["_key"] => $context["representant"]) {
            // line 21
            echo "            <tr>

                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["representant"], "nom", []), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["representant"], "prenom", []), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["representant"], "email", []), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["representant"], "telephone", []), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["representant"], "addresse", []), "html", null, true);
            echo "</td>
                <td>
                    <ul>

                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("representant_show", ["id" => $this->getAttribute($context["representant"], "id", [])]), "html", null, true);
            echo "\" class=\"fas fa-eye\"></a>

                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("representant_edit", ["id" => $this->getAttribute($context["representant"], "id", [])]), "html", null, true);
            echo "\" class=\"fas fa-wrench\"></a>

                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['representant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>
    ";
        // line 49
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
    <script language = \"javascript\">

        \$(document).ready(function(){

            \$(\"#recherche\").on(\"keyup\",function(event){

                \$r=\$(\"#recherche\").val();
                \$.ajax({
                    url:        \"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("filter");
        echo "\",
                    type:       'POST',
                    dataType:   'json',
                    data:{'nom':\$r},
                    async:      true,

                    success: function(data) {
                        console.log(data);

                        var table = \$('#zero_config');
                        table.html('');
                        var table_head = \$('<tr>');

                        table_head.append(\$('<th>').text('Nom'))
                        table_head.append(\$('<th>').text('Prenom'))
                        table_head.append(\$('<th>').text('Email'))
                        table_head.append(\$('<th>').text('Addresse'))
                        table_head.append(\$('<th>').text('Action'))
                        table.append(table_head);

                        /*
                        var e=\$('<tr>' +
                            '<th>Nom</th>' +
                            '<th>Prenom</th>' +
                            '<th>Email</th>' +
                            '<th>Addresse</th>' +
                            '<th>Addresse</th>' +
                            '</tr>');
                           */

                        for(var x in data){
                            var tr = \$('<tr>');

                            tr.append(\$('<td>').text(data[x].nom));
                            tr.append(\$('<td>').text(data[x].prenom));
                            tr.append(\$('<td>').text(data[x].email));
                            tr.append(\$('<td>').text(data[x].addresse));
                            tr.append(\$('<td><a id=\"show\" class=\"fas fa-eye\" href=\"'+data[x].id+'/show\"></a><a id=\"edit\" class=\"fas fa-wrench\" href=\"'+data[x].id +'/edit\"></a>'));
                            table.append(tr);
                        };


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
        return "representant/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 58,  131 => 49,  127 => 39,  115 => 33,  110 => 31,  103 => 27,  99 => 26,  95 => 25,  91 => 24,  87 => 23,  83 => 21,  79 => 20,  62 => 5,  60 => 4,  51 => 3,  29 => 1,);
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
    {#//zero_config#}
    <h1>Representants list</h1>
    <input type=\"text\" id=\"recherche\">

    <table class=\"table table-striped table-bordered dataTable\"  id=\"zero_config\">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Telephone</th>
                <th>Addresse</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for representant in representants %}
            <tr>

                <td>{{ representant.nom }}</td>
                <td>{{ representant.prenom }}</td>
                <td>{{ representant.email }}</td>
                <td>{{ representant.telephone }}</td>
                <td>{{ representant.addresse }}</td>
                <td>
                    <ul>

                            <a href=\"{{ path('representant_show', { 'id': representant.id })}}\" class=\"fas fa-eye\"></a>

                            <a href=\"{{ path('representant_edit', { 'id': representant.id }) }}\" class=\"fas fa-wrench\"></a>

                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    {#

    <ul>
        <li>
            <a href=\"{{ path('representant_new') }}\">Create a new representant</a>
        </li>
    </ul>
    #}
    <script src=\"{{ asset('jquery-3.4.1.min.js') }}\"></script>
    <script language = \"javascript\">

        \$(document).ready(function(){

            \$(\"#recherche\").on(\"keyup\",function(event){

                \$r=\$(\"#recherche\").val();
                \$.ajax({
                    url:        \"{{ path('filter')}}\",
                    type:       'POST',
                    dataType:   'json',
                    data:{'nom':\$r},
                    async:      true,

                    success: function(data) {
                        console.log(data);

                        var table = \$('#zero_config');
                        table.html('');
                        var table_head = \$('<tr>');

                        table_head.append(\$('<th>').text('Nom'))
                        table_head.append(\$('<th>').text('Prenom'))
                        table_head.append(\$('<th>').text('Email'))
                        table_head.append(\$('<th>').text('Addresse'))
                        table_head.append(\$('<th>').text('Action'))
                        table.append(table_head);

                        /*
                        var e=\$('<tr>' +
                            '<th>Nom</th>' +
                            '<th>Prenom</th>' +
                            '<th>Email</th>' +
                            '<th>Addresse</th>' +
                            '<th>Addresse</th>' +
                            '</tr>');
                           */

                        for(var x in data){
                            var tr = \$('<tr>');

                            tr.append(\$('<td>').text(data[x].nom));
                            tr.append(\$('<td>').text(data[x].prenom));
                            tr.append(\$('<td>').text(data[x].email));
                            tr.append(\$('<td>').text(data[x].addresse));
                            tr.append(\$('<td><a id=\"show\" class=\"fas fa-eye\" href=\"'+data[x].id+'/show\"></a><a id=\"edit\" class=\"fas fa-wrench\" href=\"'+data[x].id +'/edit\"></a>'));
                            table.append(tr);
                        };


                    },
                    error : function(xhr, textStatus, errorThrown) {
                        alert('Ajax request failed.');
                    }
                });

            })
        });

    </script>
{% endblock %}
", "representant/index.html.twig", "C:\\xampp\\htdocs\\pi\\app\\Resources\\views\\representant\\index.html.twig");
    }
}

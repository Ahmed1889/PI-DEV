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

/* depot/index.html.twig */
class __TwigTemplate_718979011606a3d435e6914f6f0e76b4b7fe3459c9519fc36138a4f81ba31ce0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'notif' => [$this, 'block_notif'],
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "depot/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "depot/index.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "depot/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_notif($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "notif"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "notif"));

        // line 6
        echo "
    ";
        // line 7
        echo $this->env->getExtension('Mgilet\NotificationBundle\Twig\NotificationExtension')->countNotifications($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []));
        echo "
    ";
        // line 8
        echo $this->env->getExtension('Mgilet\NotificationBundle\Twig\NotificationExtension')->render($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <ul class=\"navbar-nav float-right\">
    <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle waves-effect waves-dark\" href=\"\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <span class=\"fas fa-bell\" style=\"color: green\">";
        // line 13
        echo $this->env->getExtension('Mgilet\NotificationBundle\Twig\NotificationExtension')->countNotifications($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []));
        echo "</span></i>
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\" style=\"float: right\">

            ";
        // line 17
        echo $this->env->getExtension('Mgilet\NotificationBundle\Twig\NotificationExtension')->render($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []));
        echo "<br>

        </div>
    </li>
    </ul>
    <h1>Depots list</h1>
    <span id='p' style=\"color: #1c7430\"></span>

    <div align=\"right\">
        <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("depot_index");
        echo "\" class=\" fas fa-redo\"></a>
    </div>
    <table class=\"table table-striped table-bordered dataTable\" id=\"zero_config\">
        <thead>
            <tr>

                <th id=\"n\">Nom</th>
                <th >Addresse</th>
                <th id=\"c\">Capacite</th>
                <th id=\"d\">Disponibilite</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["depots"] ?? $this->getContext($context, "depots")));
        foreach ($context['_seq'] as $context["_key"] => $context["depot"]) {
            // line 41
            echo "            <tr>

                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["depot"], "nom", []), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["depot"], "addresse", []), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["depot"], "capacite", []), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            if ($this->getAttribute($context["depot"], "disponibilite", [])) {
                echo "<span class=\"text-success\">Disponible</span>";
            } else {
                echo "<span class=\"text-danger\">Inemployable</span>";
            }
            echo "</td>

                <td>
                          <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("depot_show", ["id" => $this->getAttribute($context["depot"], "id", [])]), "html", null, true);
            echo "\" class=\"fas fa-eye\"></a>

                    ";
            // line 53
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("depot_edit", ["id" => $this->getAttribute($context["depot"], "id", [])]), "html", null, true);
            echo "\" class=\"fas fa-wrench\" ></a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['depot'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "



        </tbody>
    </table>
    <p id=\"p\"></p>
";
        // line 68
        echo "







   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 83
    public function block_js2($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js2"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js2"));

        // line 84
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
    <script language = \"javascript\">

        \$(document).ready(function(){



            \$(\"#n\").on(\"click\",function(event){

                // \$r=\$(\"#recherche\").val();
                \$.ajax({
                    url:        \"";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("filterN");
        echo "\",
                    type:       'POST',
                    dataType:   'json',
                    async:      true,

                    success: function(data) {
                        console.log(data);

                        var table = \$('#zero_config');
                        table.html('');
                        var table_head = \$('<tr>');

                        table_head.append(\$('<th id=\"n\"> ').text('Nom'))
                        table_head.append(\$('<th>').text('Addresse'))
                        table_head.append(\$('<th id=\"c\">').text('Capacite'))
                        table_head.append(\$('<th>').text('Disponibilite'))
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
                            tr.append(\$('<td>').text(data[x].addresse));
                            tr.append(\$('<td>').text(data[x].capacite));
                            tr.append(\$('<td>').text(data[x].disponibilite));
                            tr.append(\$('<td><a id=\"show\" class=\"fas fa-eye\" href=\"'+data[x].id+'/show\"></a><a id=\"edit\" class=\"fas fa-wrench\" href=\"'+data[x].id +'/edit\"></a>'));
                            table.append(tr);

                        };

                        \$(\"#c\").on(\"click\",function(event){

                            // \$r=\$(\"#recherche\").val();
                            \$.ajax({
                                url:        \"";
        // line 140
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("filterC");
        echo "\",
                                type:       'POST',
                                dataType:   'json',
                                async:      true,

                                success: function(data) {
                                    console.log(data);

                                    var table = \$('#zero_config');
                                    table.html('');
                                    var table_head = \$('<tr>');

                                    table_head.append(\$('<th id=\"n\">').text('Nom'))
                                    table_head.append(\$('<th>').text('Addresse'))
                                    table_head.append(\$('<th id=\"c\">').text('Capacite'))
                                    table_head.append(\$('<th>').text('Disponibilite'))
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
                                        tr.append(\$('<td>').text(data[x].addresse));
                                        tr.append(\$('<td>').text(data[x].capacite));
                                        tr.append(\$('<td>').text(data[x].disponibilite));
                                        tr.append(\$('<td><a id=\"show\" class=\"fas fa-eye\" href=\"'+data[x].id+'/show\"></a><a id=\"edit\" class=\"fas fa-wrench\" href=\"'+data[x].id +'/edit\"></a>'));
                                        table.append(tr);
                                    };


                                },
                                error : function(xhr, textStatus, errorThrown) {
                                    alert('Ajax request failed.');
                                }
                            });

                        });

                    },
                    error : function(xhr, textStatus, errorThrown) {
                        alert('Ajax request failed.');
                    }
                });

            });
            \$(\"#c\").on(\"click\",function(event){

                // \$r=\$(\"#recherche\").val();
                \$.ajax({
                    url:        \"";
        // line 200
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("filterC");
        echo "\",
                    type:       'POST',
                    dataType:   'json',
                    async:      true,

                    success: function(data) {
                        console.log(data);

                        var table = \$('#zero_config');
                        table.html('');
                        var table_head = \$('<tr>');

                        table_head.append(\$('<th id=\"n\"> ').text('Nom'))
                        table_head.append(\$('<th>').text('Addresse'))
                        table_head.append(\$('<th id=\"c\">').text('Capacite'))
                        table_head.append(\$('<th>').text('Disponibilite'))
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
                            tr.append(\$('<td>').text(data[x].addresse));
                            tr.append(\$('<td>').text(data[x].capacite));
                            tr.append(\$('<td>').text(data[x].disponibilite));
                            tr.append(\$('<td><a id=\"show\" class=\"fas fa-eye\" href=\"'+data[x].id+'/show\"></a><a id=\"edit\" class=\"fas fa-wrench\" href=\"'+data[x].id +'/edit\"></a>'));
                            table.append(tr);

                        };

                        \$(\"#n\").on(\"click\",function(event){

                            // \$r=\$(\"#recherche\").val();
                            \$.ajax({
                                url:        \"";
        // line 245
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("filterN");
        echo "\",
                                type:       'POST',
                                dataType:   'json',
                                async:      true,

                                success: function(data) {
                                    console.log(data);

                                    var table = \$('#zero_config');
                                    table.html('');
                                    var table_head = \$('<tr>');

                                    table_head.append(\$('<th id=\"n\">').text('Nom'))
                                    table_head.append(\$('<th>').text('Addresse'))
                                    table_head.append(\$('<th id=\"c\">').text('Capacite'))
                                    table_head.append(\$('<th>').text('Disponibilite'))
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
                                        tr.append(\$('<td>').text(data[x].addresse));
                                        tr.append(\$('<td>').text(data[x].capacite));
                                        tr.append(\$('<td>').text(data[x].disponibilite));
                                        tr.append(\$('<td><a id=\"show\" class=\"fas fa-eye\" href=\"'+data[x].id+'/show\"></a><a id=\"edit\" class=\"fas fa-wrench\" href=\"'+data[x].id +'/edit\"></a>'));
                                        table.append(tr);
                                    };


                                },
                                error : function(xhr, textStatus, errorThrown) {
                                    alert('Ajax request failed.');
                                }
                            });

                        });

                    },
                    error : function(xhr, textStatus, errorThrown) {
                        alert('Ajax request failed.');
                    }
                });

            });
            \$.ajax({
                url:        \"";
        // line 302
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("count");
        echo "\",
                type:       'POST',
                dataType:   'json',
                async:      true,

                success: function(data) {
                    console.log(data);
                    // alert(data.count)
                    var count = \$('#p');

                    count.html(\"<span id='p'>Vous avez \"+data.count+\" depot(s) disponible</span>\");
                    \$(\"#p\").show();
                    \$(\"#p\").fadeOut(20000);

                    \$(\"#c\").on(\"click\",function(event){

                        // \$r=\$(\"#recherche\").val();
                        \$.ajax({
                            url:        \"";
        // line 320
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("filterC");
        echo "\",
                            type:       'POST',
                            dataType:   'json',
                            async:      true,

                            success: function(data) {
                                console.log(data);

                                var table = \$('#zero_config');
                                table.html('');
                                var table_head = \$('<tr>');

                                table_head.append(\$('<th id=\"n\">').text('Nom'))
                                table_head.append(\$('<th>').text('Addresse'))
                                table_head.append(\$('<th id=\"c\">').text('Capacite'))
                                table_head.append(\$('<th>').text('Disponibilite'))
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
                                    tr.append(\$('<td>').text(data[x].addresse));
                                    tr.append(\$('<td>').text(data[x].capacite));
                                    tr.append(\$('<td>').text(data[x].disponibilite));
                                    tr.append(\$('<td><a id=\"show\" class=\"fas fa-eye\" href=\"'+data[x].id+'/show\"></a><a id=\"edit\" class=\"fas fa-wrench\" href=\"'+data[x].id +'/edit\"></a>'));
                                    table.append(tr);
                                };


                            },
                            error : function(xhr, textStatus, errorThrown) {
                                alert('Ajax request failed.');
                            }
                        });

                    });

                },
                error : function(xhr, textStatus, errorThrown) {
                    alert('Ajax request failed.');
                }
            });

        });
        \$('#i').load('/index.html.twig');

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "depot/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  467 => 320,  446 => 302,  386 => 245,  338 => 200,  275 => 140,  227 => 95,  212 => 84,  203 => 83,  185 => 68,  176 => 57,  165 => 53,  160 => 49,  150 => 46,  146 => 45,  142 => 44,  138 => 43,  134 => 41,  130 => 40,  113 => 26,  101 => 17,  94 => 13,  90 => 11,  81 => 10,  69 => 8,  65 => 7,  62 => 6,  53 => 5,  31 => 1,);
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



{% block notif %}

    {{ mgilet_notification_count(app.user) }}
    {{ mgilet_notification_render(app.user) }}
{% endblock %}
{% block body %}
    <ul class=\"navbar-nav float-right\">
    <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle waves-effect waves-dark\" href=\"\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <span class=\"fas fa-bell\" style=\"color: green\">{{ mgilet_notification_count(app.user) }}</span></i>
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\" style=\"float: right\">

            {{ mgilet_notification_render(app.user) }}<br>

        </div>
    </li>
    </ul>
    <h1>Depots list</h1>
    <span id='p' style=\"color: #1c7430\"></span>

    <div align=\"right\">
        <a href=\"{{ path('depot_index') }}\" class=\" fas fa-redo\"></a>
    </div>
    <table class=\"table table-striped table-bordered dataTable\" id=\"zero_config\">
        <thead>
            <tr>

                <th id=\"n\">Nom</th>
                <th >Addresse</th>
                <th id=\"c\">Capacite</th>
                <th id=\"d\">Disponibilite</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for depot in depots %}
            <tr>

                <td>{{ depot.nom }}</td>
                <td>{{ depot.addresse }}</td>
                <td>{{ depot.capacite }}</td>
                <td>{% if depot.disponibilite %}<span class=\"text-success\">Disponible</span>{% else %}<span class=\"text-danger\">Inemployable</span>{% endif %}</td>

                <td>
                          <a href=\"{{ path('depot_show', { 'id': depot.id }) }}\" class=\"fas fa-eye\"></a>

                    {#{{ render(controller('BackBundle:Depot:edit',{'id':depot.id})) }}
                    <button href=\"\" class=\"fas fa-wrench\" data-toggle=\"modal\" data-target=\"#dataModal{{ depot.id }}\" id=\"i\"></button>#}
                        <a href=\"{{ path('depot_edit', { 'id': depot.id }) }}\" class=\"fas fa-wrench\" ></a>
                </td>
            </tr>
        {% endfor %}




        </tbody>
    </table>
    <p id=\"p\"></p>
{#


#}








   {# <ul>
        <li>
            <a href=\"{{ path('depot_new') }}\">Create a new depot</a>
        </li>
    </ul>
    #}
{% endblock %}
{% block js2 %}
    <script src=\"{{ asset('jquery-3.4.1.min.js') }}\"></script>
    <script language = \"javascript\">

        \$(document).ready(function(){



            \$(\"#n\").on(\"click\",function(event){

                // \$r=\$(\"#recherche\").val();
                \$.ajax({
                    url:        \"{{ path('filterN')}}\",
                    type:       'POST',
                    dataType:   'json',
                    async:      true,

                    success: function(data) {
                        console.log(data);

                        var table = \$('#zero_config');
                        table.html('');
                        var table_head = \$('<tr>');

                        table_head.append(\$('<th id=\"n\"> ').text('Nom'))
                        table_head.append(\$('<th>').text('Addresse'))
                        table_head.append(\$('<th id=\"c\">').text('Capacite'))
                        table_head.append(\$('<th>').text('Disponibilite'))
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
                            tr.append(\$('<td>').text(data[x].addresse));
                            tr.append(\$('<td>').text(data[x].capacite));
                            tr.append(\$('<td>').text(data[x].disponibilite));
                            tr.append(\$('<td><a id=\"show\" class=\"fas fa-eye\" href=\"'+data[x].id+'/show\"></a><a id=\"edit\" class=\"fas fa-wrench\" href=\"'+data[x].id +'/edit\"></a>'));
                            table.append(tr);

                        };

                        \$(\"#c\").on(\"click\",function(event){

                            // \$r=\$(\"#recherche\").val();
                            \$.ajax({
                                url:        \"{{ path('filterC')}}\",
                                type:       'POST',
                                dataType:   'json',
                                async:      true,

                                success: function(data) {
                                    console.log(data);

                                    var table = \$('#zero_config');
                                    table.html('');
                                    var table_head = \$('<tr>');

                                    table_head.append(\$('<th id=\"n\">').text('Nom'))
                                    table_head.append(\$('<th>').text('Addresse'))
                                    table_head.append(\$('<th id=\"c\">').text('Capacite'))
                                    table_head.append(\$('<th>').text('Disponibilite'))
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
                                        tr.append(\$('<td>').text(data[x].addresse));
                                        tr.append(\$('<td>').text(data[x].capacite));
                                        tr.append(\$('<td>').text(data[x].disponibilite));
                                        tr.append(\$('<td><a id=\"show\" class=\"fas fa-eye\" href=\"'+data[x].id+'/show\"></a><a id=\"edit\" class=\"fas fa-wrench\" href=\"'+data[x].id +'/edit\"></a>'));
                                        table.append(tr);
                                    };


                                },
                                error : function(xhr, textStatus, errorThrown) {
                                    alert('Ajax request failed.');
                                }
                            });

                        });

                    },
                    error : function(xhr, textStatus, errorThrown) {
                        alert('Ajax request failed.');
                    }
                });

            });
            \$(\"#c\").on(\"click\",function(event){

                // \$r=\$(\"#recherche\").val();
                \$.ajax({
                    url:        \"{{ path('filterC')}}\",
                    type:       'POST',
                    dataType:   'json',
                    async:      true,

                    success: function(data) {
                        console.log(data);

                        var table = \$('#zero_config');
                        table.html('');
                        var table_head = \$('<tr>');

                        table_head.append(\$('<th id=\"n\"> ').text('Nom'))
                        table_head.append(\$('<th>').text('Addresse'))
                        table_head.append(\$('<th id=\"c\">').text('Capacite'))
                        table_head.append(\$('<th>').text('Disponibilite'))
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
                            tr.append(\$('<td>').text(data[x].addresse));
                            tr.append(\$('<td>').text(data[x].capacite));
                            tr.append(\$('<td>').text(data[x].disponibilite));
                            tr.append(\$('<td><a id=\"show\" class=\"fas fa-eye\" href=\"'+data[x].id+'/show\"></a><a id=\"edit\" class=\"fas fa-wrench\" href=\"'+data[x].id +'/edit\"></a>'));
                            table.append(tr);

                        };

                        \$(\"#n\").on(\"click\",function(event){

                            // \$r=\$(\"#recherche\").val();
                            \$.ajax({
                                url:        \"{{ path('filterN')}}\",
                                type:       'POST',
                                dataType:   'json',
                                async:      true,

                                success: function(data) {
                                    console.log(data);

                                    var table = \$('#zero_config');
                                    table.html('');
                                    var table_head = \$('<tr>');

                                    table_head.append(\$('<th id=\"n\">').text('Nom'))
                                    table_head.append(\$('<th>').text('Addresse'))
                                    table_head.append(\$('<th id=\"c\">').text('Capacite'))
                                    table_head.append(\$('<th>').text('Disponibilite'))
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
                                        tr.append(\$('<td>').text(data[x].addresse));
                                        tr.append(\$('<td>').text(data[x].capacite));
                                        tr.append(\$('<td>').text(data[x].disponibilite));
                                        tr.append(\$('<td><a id=\"show\" class=\"fas fa-eye\" href=\"'+data[x].id+'/show\"></a><a id=\"edit\" class=\"fas fa-wrench\" href=\"'+data[x].id +'/edit\"></a>'));
                                        table.append(tr);
                                    };


                                },
                                error : function(xhr, textStatus, errorThrown) {
                                    alert('Ajax request failed.');
                                }
                            });

                        });

                    },
                    error : function(xhr, textStatus, errorThrown) {
                        alert('Ajax request failed.');
                    }
                });

            });
            \$.ajax({
                url:        \"{{ path('count')}}\",
                type:       'POST',
                dataType:   'json',
                async:      true,

                success: function(data) {
                    console.log(data);
                    // alert(data.count)
                    var count = \$('#p');

                    count.html(\"<span id='p'>Vous avez \"+data.count+\" depot(s) disponible</span>\");
                    \$(\"#p\").show();
                    \$(\"#p\").fadeOut(20000);

                    \$(\"#c\").on(\"click\",function(event){

                        // \$r=\$(\"#recherche\").val();
                        \$.ajax({
                            url:        \"{{ path('filterC')}}\",
                            type:       'POST',
                            dataType:   'json',
                            async:      true,

                            success: function(data) {
                                console.log(data);

                                var table = \$('#zero_config');
                                table.html('');
                                var table_head = \$('<tr>');

                                table_head.append(\$('<th id=\"n\">').text('Nom'))
                                table_head.append(\$('<th>').text('Addresse'))
                                table_head.append(\$('<th id=\"c\">').text('Capacite'))
                                table_head.append(\$('<th>').text('Disponibilite'))
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
                                    tr.append(\$('<td>').text(data[x].addresse));
                                    tr.append(\$('<td>').text(data[x].capacite));
                                    tr.append(\$('<td>').text(data[x].disponibilite));
                                    tr.append(\$('<td><a id=\"show\" class=\"fas fa-eye\" href=\"'+data[x].id+'/show\"></a><a id=\"edit\" class=\"fas fa-wrench\" href=\"'+data[x].id +'/edit\"></a>'));
                                    table.append(tr);
                                };


                            },
                            error : function(xhr, textStatus, errorThrown) {
                                alert('Ajax request failed.');
                            }
                        });

                    });

                },
                error : function(xhr, textStatus, errorThrown) {
                    alert('Ajax request failed.');
                }
            });

        });
        \$('#i').load('/index.html.twig');

    </script>
{% endblock %}", "depot/index.html.twig", "C:\\xampp\\htdocs\\pi\\app\\Resources\\views\\depot\\index.html.twig");
    }
}

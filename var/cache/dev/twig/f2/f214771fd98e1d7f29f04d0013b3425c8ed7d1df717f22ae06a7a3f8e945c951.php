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

/* @Back/Livraison/AffecterLivraison.html.twig */
class __TwigTemplate_6b8a2ebdc546de33d05ec30a9097894e27c3d0a6b78997e4485ecb742c18f5ab extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Back/Livraison/AffecterLivraison.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Back/Livraison/AffecterLivraison.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "@Back/Livraison/AffecterLivraison.html.twig", 1);
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
        echo "    <h1> Affecter Livraison</h1>
    <form name=\"f\" method=\"post\" action=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AffecterCommande");
        echo "\">
        <input type=\"hidden\" name=\"dat\" id=\"dat\" /> <br>
        <table >

            <tr> <th>Id commande </th> <th> <input class=\"form-control\" type=\"text\" name=\"cmd\"  readonly=\"readonly\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cmd"] ?? $this->getContext($context, "cmd")), "id", []), "html", null, true);
        echo "\" /> </th> <th > </th> </tr>
            <tr> <th> Affecter date livraison </th> <th> <input id = \"loadLivreur\" class=\"dateL form-control\" type=\"datetime-local\"  name=\"dat\" /> </th></tr>
            <tr> <th>Id livreur </th> <th><input id = \"idL\" class=\"form-control\"  readonly=\"readonly\" type=\"text\"  name=\"idl\" /> </th></tr>
            <tr> <th>Id Vehicule </th> <th><input class=\"form-control\" id = \"idV\" readonly=\"readonly\"  type=\"text\"  name=\"idv\" /></th></tr>


            <tr><th> <input class=\"btn btn-success\" type=\"submit\" value=\"Valider\" /></th> <th></th></tr>
        </table>
    </form>
    <br> <br><br>

    <table  border=\"1\" class=\"table table-striped table-bordered dataTable\"  role=\"grid\" aria-describedby=\"zero_config_info\" id=\"zero_config\" border=\"1\">
        <tbody id = \"livreur\"></tbody>
    </table>

    <br>
    <br>

    <table  border=\"1\" class=\"table table-striped table-bordered dataTable\"  role=\"grid\" aria-describedby=\"zero_config_info\" id=\"zero_config\" border=\"1\">
        <tbody id = \"vehicule\"></tbody>
    </table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_js2($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js2"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js2"));

        // line 33
        echo "    <script language = \"javascript\">

        \$(document).ready(function(){
            \$()


            \$(\"#loadLivreur\").on(\"change\", function(event){

                var dateL=moment(\$(\".dateL\").val()).format(\"YYYY-MM-DD HH:mm:ss\");
               if( moment().diff(dateL, 'days')>0) {
                   alert('Date inferieure à la date d aujourd\"hui');
                   \$(\".dateL\").val(\"\");
               }else {
                   //dateL=moment(dateL).set({second:0});
                   document.getElementById(\"dat\").value = dateL;
                   \$.ajax({
                       url: 'afficherLivreurDispo',
                       type: 'POST',
                       dataType: 'json',
                       data: {'dateL': dateL},
                       async: true,

                       success: function (data) {
                           //préparation table livreur
                           var e = \$('<tr> <th> id Livreur</th> <th> nom</th>  <th>adresse </th> <th> Choix </th></tr>');
                           \$(\"#livreur\").html('');
                           \$('#livreur').append(e);
                           for (var i = 0; i < data.length; i++) {
                               liv = data[i];
                               var e = \$('<tr> <th id=\"idd\"> </th> <th id=\"named\"> </th> <th id=\"adresse\"> </th>  <th> <input type=\"radio\" name=\"l\" class=\"' + liv[\"id\"] + '\" onclick=\"affecterLivreur(this)\"   />    </th>   </tr>');
                               \$(\"#idd\", e).html(liv['id']);
                               \$(\"#named\", e).html(liv['named']);
                               \$(\"#adresse\", e).html(liv['adresse']);

                               \$('#livreur').append(e);
                           }


                       },
                       error: function (xhr, textStatus, errorThrown) {
                           alert('Ajax request failed.');
                       }
                   });

                   \$.ajax({
                       url: 'afficherVehiculeDispo',
                       type: 'POST',
                       dataType: 'json',
                       data: {'dateL': dateL},
                       async: true,

                       success: function (data) {
                           //préparation table vehicule
                           var e = \$('<tr> <th> id vehicule</th> <th> nom</th> <th> Choix </th>   </tr>');
                           \$(\"#vehicule\").html('');
                           \$('#vehicule').append(e);
                           for (var i = 0; i < data.length; i++) {
                               veh = data[i];
                               var e = \$('<tr> <th id=\"iddd\"> </th> <th id=\"namedd\"> </th>  <th> <input type=\"radio\" name=\"r\" class=\"' + veh[\"id\"] + '\" onclick=\"affecterVehicule(this)\" >   </th>  </tr>');
                               \$(\"#iddd\", e).html(veh['id']);
                               \$(\"#namedd\", e).html(veh['named']);


                               \$('#vehicule').append(e);
                           }


                       },
                       error: function (xhr, textStatus, errorThrown) {
                           alert('Ajax request failed.');
                       }
                   });
               }
            });


        });

        function affecterLivreur(obj) {
         var setValue=   document.getElementById('idL') ;
          setValue.value=  obj.className;
        }

        function affecterVehicule(obj) {
            var setValue=   document.getElementById('idV') ;
            setValue.value=  obj.className;
        }


    </script>






";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Back/Livraison/AffecterLivraison.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 33,  104 => 32,  71 => 9,  64 => 5,  61 => 4,  52 => 3,  30 => 1,);
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
    <h1> Affecter Livraison</h1>
    <form name=\"f\" method=\"post\" action=\"{{ path('AffecterCommande') }}\">
        <input type=\"hidden\" name=\"dat\" id=\"dat\" /> <br>
        <table >

            <tr> <th>Id commande </th> <th> <input class=\"form-control\" type=\"text\" name=\"cmd\"  readonly=\"readonly\" value=\"{{ cmd.id  }}\" /> </th> <th > </th> </tr>
            <tr> <th> Affecter date livraison </th> <th> <input id = \"loadLivreur\" class=\"dateL form-control\" type=\"datetime-local\"  name=\"dat\" /> </th></tr>
            <tr> <th>Id livreur </th> <th><input id = \"idL\" class=\"form-control\"  readonly=\"readonly\" type=\"text\"  name=\"idl\" /> </th></tr>
            <tr> <th>Id Vehicule </th> <th><input class=\"form-control\" id = \"idV\" readonly=\"readonly\"  type=\"text\"  name=\"idv\" /></th></tr>


            <tr><th> <input class=\"btn btn-success\" type=\"submit\" value=\"Valider\" /></th> <th></th></tr>
        </table>
    </form>
    <br> <br><br>

    <table  border=\"1\" class=\"table table-striped table-bordered dataTable\"  role=\"grid\" aria-describedby=\"zero_config_info\" id=\"zero_config\" border=\"1\">
        <tbody id = \"livreur\"></tbody>
    </table>

    <br>
    <br>

    <table  border=\"1\" class=\"table table-striped table-bordered dataTable\"  role=\"grid\" aria-describedby=\"zero_config_info\" id=\"zero_config\" border=\"1\">
        <tbody id = \"vehicule\"></tbody>
    </table>

{%  endblock %}
{% block js2 %}
    <script language = \"javascript\">

        \$(document).ready(function(){
            \$()


            \$(\"#loadLivreur\").on(\"change\", function(event){

                var dateL=moment(\$(\".dateL\").val()).format(\"YYYY-MM-DD HH:mm:ss\");
               if( moment().diff(dateL, 'days')>0) {
                   alert('Date inferieure à la date d aujourd\"hui');
                   \$(\".dateL\").val(\"\");
               }else {
                   //dateL=moment(dateL).set({second:0});
                   document.getElementById(\"dat\").value = dateL;
                   \$.ajax({
                       url: 'afficherLivreurDispo',
                       type: 'POST',
                       dataType: 'json',
                       data: {'dateL': dateL},
                       async: true,

                       success: function (data) {
                           //préparation table livreur
                           var e = \$('<tr> <th> id Livreur</th> <th> nom</th>  <th>adresse </th> <th> Choix </th></tr>');
                           \$(\"#livreur\").html('');
                           \$('#livreur').append(e);
                           for (var i = 0; i < data.length; i++) {
                               liv = data[i];
                               var e = \$('<tr> <th id=\"idd\"> </th> <th id=\"named\"> </th> <th id=\"adresse\"> </th>  <th> <input type=\"radio\" name=\"l\" class=\"' + liv[\"id\"] + '\" onclick=\"affecterLivreur(this)\"   />    </th>   </tr>');
                               \$(\"#idd\", e).html(liv['id']);
                               \$(\"#named\", e).html(liv['named']);
                               \$(\"#adresse\", e).html(liv['adresse']);

                               \$('#livreur').append(e);
                           }


                       },
                       error: function (xhr, textStatus, errorThrown) {
                           alert('Ajax request failed.');
                       }
                   });

                   \$.ajax({
                       url: 'afficherVehiculeDispo',
                       type: 'POST',
                       dataType: 'json',
                       data: {'dateL': dateL},
                       async: true,

                       success: function (data) {
                           //préparation table vehicule
                           var e = \$('<tr> <th> id vehicule</th> <th> nom</th> <th> Choix </th>   </tr>');
                           \$(\"#vehicule\").html('');
                           \$('#vehicule').append(e);
                           for (var i = 0; i < data.length; i++) {
                               veh = data[i];
                               var e = \$('<tr> <th id=\"iddd\"> </th> <th id=\"namedd\"> </th>  <th> <input type=\"radio\" name=\"r\" class=\"' + veh[\"id\"] + '\" onclick=\"affecterVehicule(this)\" >   </th>  </tr>');
                               \$(\"#iddd\", e).html(veh['id']);
                               \$(\"#namedd\", e).html(veh['named']);


                               \$('#vehicule').append(e);
                           }


                       },
                       error: function (xhr, textStatus, errorThrown) {
                           alert('Ajax request failed.');
                       }
                   });
               }
            });


        });

        function affecterLivreur(obj) {
         var setValue=   document.getElementById('idL') ;
          setValue.value=  obj.className;
        }

        function affecterVehicule(obj) {
            var setValue=   document.getElementById('idV') ;
            setValue.value=  obj.className;
        }


    </script>






{%  endblock %}", "@Back/Livraison/AffecterLivraison.html.twig", "C:\\xampp\\htdocs\\pi\\src\\BackBundle\\Resources\\views\\Livraison\\AffecterLivraison.html.twig");
    }
}

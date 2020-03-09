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

/* @Back/Livraison/AfficherPlanningDay.html.twig */
class __TwigTemplate_558850e6c6832a9003dd5e015d0c79bc68be3b346070f0d0b66b1f944bade033 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Back/Livraison/AfficherPlanningDay.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Back/Livraison/AfficherPlanningDay.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "@Back/Livraison/AfficherPlanningDay.html.twig", 1);
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
    <h2> Planning du jour  </h2>


    <table class=\"table table-striped table-bordered dataTable\"  role=\"grid\" aria-describedby=\"zero_config_info\" id=\"zero_config\" border=\"1\">
        <tr>
            <th> id </th>
            <th> statut</th>
            <th> Doit être livrée</th>
            <th> Adresse complete/ détails</th>
            <th> Livrée</th>

        </tr>

        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["plannigs"] ?? $this->getContext($context, "plannigs"))));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 19
            echo "            <tr>
                <th> ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "id", []), "html", null, true);
            echo "</th>
                ";
            // line 21
            if (($this->getAttribute($context["t"], "statut", []) == false)) {
                // line 22
                echo "                <th style=\"color: red\"> Non livre</th>
                ";
            } else {
                // line 24
                echo "                    <th style=\"color: green\">  livre</th>

";
            }
            // line 27
            echo "                <th> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["t"], "dateLivraison", []), " H:i"), "html", null, true);
            echo " </th>
                <th> ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["t"], "commande", []), "adresse", []), "html", null, true);
            echo " / <a href=\"#\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["t"], "commande", []), "latlng", []), "html", null, true);
            echo "\" class=\"confirmModal3\"> détails</a> </th>
                ";
            // line 29
            if (($this->getAttribute($context["t"], "statut", []) == false)) {
                // line 30
                echo "                <th> <a  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("LivrerCommande", ["id" => $this->getAttribute(                // line 31
$context["t"], "id", [])]), "html", null, true);
                echo "\"  >
                        Livrée</a></th>
                    ";
            } else {
                // line 34
                echo "                    <th></th>
                ";
            }
            // line 36
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "    </table>


    <meta name=\"viewport\" content=\"initial-scale=1,maximum-scale=1,user-scalable=no\" />

    <!-- Load Leaflet from CDN -->
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.6.0/dist/leaflet.css\"
          integrity=\"sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==\"
          crossorigin=\"\"/>
    <script src=\"https://unpkg.com/leaflet@1.6.0/dist/leaflet.js\"
            integrity=\"sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==\"
            crossorigin=\"\"></script>


    <!-- Load Esri Leaflet from CDN -->
    <script src=\"https://unpkg.com/esri-leaflet@2.3.3/dist/esri-leaflet.js\"
            integrity=\"sha512-cMQ5e58BDuu1pr9BQ/eGRn6HaR6Olh0ofcHFWe5XesdCITVuSBiBZZbhCijBe5ya238f/zMMRYIMIIg1jxv4sQ==\"
            crossorigin=\"\"></script>


    <!-- Load Esri Leaflet Geocoder from CDN -->
    <link rel=\"stylesheet\" href=\"https://unpkg.com/esri-leaflet-geocoder@2.3.2/dist/esri-leaflet-geocoder.css\"
          integrity=\"sha512-IM3Hs+feyi40yZhDH6kV8vQMg4Fh20s9OzInIIAc4nx7aMYMfo+IenRUekoYsHZqGkREUgx0VvlEsgm7nCDW9g==\"
          crossorigin=\"\">
    <script src=\"https://unpkg.com/esri-leaflet-geocoder@2.3.2/dist/esri-leaflet-geocoder.js\"
            integrity=\"sha512-8twnXcrOGP3WfMvjB0jS5pNigFuIWj4ALwWEgxhZ+mxvjF5/FBPVd5uAxqT8dd2kUmTVK9+yQJ4CmTmSg/sXAQ==\"
            crossorigin=\"\"></script>



    <style>

        #map { position: absolute; top:0; bottom:0; right:0; left:0; }
    </style>



    <div id=\"dialog-confirm3\" title=\"Adresse\">
        <!--<div style=\"position: absolute; left: 50px; top: 40px;\"> -->

        <div class=\"container-fluid\">
            <div id=\"map\"></div>
            <input type=\"hidden\" id=\"latlng\" />
        </div>

        <!--</div> -->
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 90
    public function block_js2($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js2"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js2"));

        // line 91
        echo "


<script>
    \$(document).ready(function () {
        //map
        var theHREF3;

        \$( \"#dialog-confirm3\" ).dialog({
            resizable: true,
            height:500,
            width:800,
            autoOpen: false,
            show: {
                effect: \"blind\",
                duration: 1000
            },
            hide: {
                effect: \"explode\",
                duration: 1000
            },
            modal: true,

        });

        \$(\".confirmModal3\").click(function(e) {
            e.preventDefault();
            theHREF3 = \$(this).attr(\"href\");
            \$(\"#dialog-confirm3\").dialog(\"open\");
            var container = L.DomUtil.get('map'); if(container != null){ container._leaflet_id = null; }
            var map =new L.map('map');
               map .setView([36.853350000000034,10.207450000000051], 15);
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href=\"https://osm.org/copyright\">OpenStreetMap</a> contributors'
            }).addTo(map);

            //L.Control.geocoder().addTo(map);
            var results = L.layerGroup().addTo(map);
            var recuperer= this.id;
            var divis=recuperer.split(';');

            var location = new L.LatLng(divis[0],divis[1]);
            results.addLayer(L.marker(location));



        });

    })
</script>



<script>

</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Back/Livraison/AfficherPlanningDay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 91,  189 => 90,  131 => 38,  124 => 36,  120 => 34,  114 => 31,  112 => 30,  110 => 29,  104 => 28,  99 => 27,  94 => 24,  90 => 22,  88 => 21,  84 => 20,  81 => 19,  77 => 18,  61 => 4,  52 => 3,  30 => 1,);
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

    <h2> Planning du jour  </h2>


    <table class=\"table table-striped table-bordered dataTable\"  role=\"grid\" aria-describedby=\"zero_config_info\" id=\"zero_config\" border=\"1\">
        <tr>
            <th> id </th>
            <th> statut</th>
            <th> Doit être livrée</th>
            <th> Adresse complete/ détails</th>
            <th> Livrée</th>

        </tr>

        {%  for t in plannigs |reverse %}
            <tr>
                <th> {{ t.id }}</th>
                {% if t.statut==false %}
                <th style=\"color: red\"> Non livre</th>
                {% else %}
                    <th style=\"color: green\">  livre</th>

{% endif %}
                <th> {{ t.dateLivraison |date(' H:i') }} </th>
                <th> {{ t.commande.adresse  }} / <a href=\"#\" id=\"{{ t.commande.latlng }}\" class=\"confirmModal3\"> détails</a> </th>
                {% if t.statut==false %}
                <th> <a  href=\"{{ path('LivrerCommande',
                        {'id':t.id}) }}\"  >
                        Livrée</a></th>
                    {% else %}
                    <th></th>
                {% endif %}
            </tr>
        {% endfor %}
    </table>


    <meta name=\"viewport\" content=\"initial-scale=1,maximum-scale=1,user-scalable=no\" />

    <!-- Load Leaflet from CDN -->
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.6.0/dist/leaflet.css\"
          integrity=\"sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==\"
          crossorigin=\"\"/>
    <script src=\"https://unpkg.com/leaflet@1.6.0/dist/leaflet.js\"
            integrity=\"sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==\"
            crossorigin=\"\"></script>


    <!-- Load Esri Leaflet from CDN -->
    <script src=\"https://unpkg.com/esri-leaflet@2.3.3/dist/esri-leaflet.js\"
            integrity=\"sha512-cMQ5e58BDuu1pr9BQ/eGRn6HaR6Olh0ofcHFWe5XesdCITVuSBiBZZbhCijBe5ya238f/zMMRYIMIIg1jxv4sQ==\"
            crossorigin=\"\"></script>


    <!-- Load Esri Leaflet Geocoder from CDN -->
    <link rel=\"stylesheet\" href=\"https://unpkg.com/esri-leaflet-geocoder@2.3.2/dist/esri-leaflet-geocoder.css\"
          integrity=\"sha512-IM3Hs+feyi40yZhDH6kV8vQMg4Fh20s9OzInIIAc4nx7aMYMfo+IenRUekoYsHZqGkREUgx0VvlEsgm7nCDW9g==\"
          crossorigin=\"\">
    <script src=\"https://unpkg.com/esri-leaflet-geocoder@2.3.2/dist/esri-leaflet-geocoder.js\"
            integrity=\"sha512-8twnXcrOGP3WfMvjB0jS5pNigFuIWj4ALwWEgxhZ+mxvjF5/FBPVd5uAxqT8dd2kUmTVK9+yQJ4CmTmSg/sXAQ==\"
            crossorigin=\"\"></script>



    <style>

        #map { position: absolute; top:0; bottom:0; right:0; left:0; }
    </style>



    <div id=\"dialog-confirm3\" title=\"Adresse\">
        <!--<div style=\"position: absolute; left: 50px; top: 40px;\"> -->

        <div class=\"container-fluid\">
            <div id=\"map\"></div>
            <input type=\"hidden\" id=\"latlng\" />
        </div>

        <!--</div> -->
    </div>

{%  endblock  %}



    {% block js2 %}



<script>
    \$(document).ready(function () {
        //map
        var theHREF3;

        \$( \"#dialog-confirm3\" ).dialog({
            resizable: true,
            height:500,
            width:800,
            autoOpen: false,
            show: {
                effect: \"blind\",
                duration: 1000
            },
            hide: {
                effect: \"explode\",
                duration: 1000
            },
            modal: true,

        });

        \$(\".confirmModal3\").click(function(e) {
            e.preventDefault();
            theHREF3 = \$(this).attr(\"href\");
            \$(\"#dialog-confirm3\").dialog(\"open\");
            var container = L.DomUtil.get('map'); if(container != null){ container._leaflet_id = null; }
            var map =new L.map('map');
               map .setView([36.853350000000034,10.207450000000051], 15);
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href=\"https://osm.org/copyright\">OpenStreetMap</a> contributors'
            }).addTo(map);

            //L.Control.geocoder().addTo(map);
            var results = L.layerGroup().addTo(map);
            var recuperer= this.id;
            var divis=recuperer.split(';');

            var location = new L.LatLng(divis[0],divis[1]);
            results.addLayer(L.marker(location));



        });

    })
</script>



<script>

</script>

{% endblock %}", "@Back/Livraison/AfficherPlanningDay.html.twig", "C:\\xampp\\htdocs\\pi\\src\\BackBundle\\Resources\\views\\Livraison\\AfficherPlanningDay.html.twig");
    }
}

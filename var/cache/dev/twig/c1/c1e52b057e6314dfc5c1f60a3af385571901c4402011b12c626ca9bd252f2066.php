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

/* @Front/Livraison/AjoutAdressClient.html.twig */
class __TwigTemplate_9b919d708f6796acb23dc2b0b070fcf0e6e376c507f669271482ca4ec7377dab extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Front/Livraison/AjoutAdressClient.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Front/Livraison/AjoutAdressClient.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Front/Livraison/AjoutAdressClient.html.twig", 1);
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


<a href=\"#\" class=\"confirmModal3\"> salut</a>
    <input type=\"text\" id=\"recupAdresseComplete\" /><br>
    <input type=\"text\" id=\"latlng\" />
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

    // line 59
    public function block_js($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 60
        echo "    <script>
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

            });

        })
    </script>



    <script>
        var map = L.map('map').setView([36.80001000000004,10.182700000000068], 4);
        var recuperer=null;
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href=\"https://osm.org/copyright\">OpenStreetMap</a> contributors'
        }).addTo(map);

        var searchControl = L.esri.Geocoding.geosearch().addTo(map);

        var results = L.layerGroup().addTo(map);

        searchControl.on('results', function (data) {
            results.clearLayers();
            for (var i = data.results.length - 1; i >= 0; i--) {
                results.addLayer(L.marker(data.results[i].latlng));

            }
            latlng=data.latlng.lat+\";\"+data.latlng.lng;
            document.getElementById(\"recupAdresseComplete\").value= data.text;
            document.getElementById(\"latlng\").value= latlng;

        });
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Front/Livraison/AjoutAdressClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 60,  124 => 59,  61 => 4,  52 => 3,  30 => 1,);
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


<a href=\"#\" class=\"confirmModal3\"> salut</a>
    <input type=\"text\" id=\"recupAdresseComplete\" /><br>
    <input type=\"text\" id=\"latlng\" />
    <div id=\"dialog-confirm3\" title=\"Adresse\">
        <!--<div style=\"position: absolute; left: 50px; top: 40px;\"> -->

        <div class=\"container-fluid\">
        <div id=\"map\"></div>
            <input type=\"hidden\" id=\"latlng\" />
        </div>

        <!--</div> -->
    </div>






{% endblock %}

{% block js %}
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

            });

        })
    </script>



    <script>
        var map = L.map('map').setView([36.80001000000004,10.182700000000068], 4);
        var recuperer=null;
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href=\"https://osm.org/copyright\">OpenStreetMap</a> contributors'
        }).addTo(map);

        var searchControl = L.esri.Geocoding.geosearch().addTo(map);

        var results = L.layerGroup().addTo(map);

        searchControl.on('results', function (data) {
            results.clearLayers();
            for (var i = data.results.length - 1; i >= 0; i--) {
                results.addLayer(L.marker(data.results[i].latlng));

            }
            latlng=data.latlng.lat+\";\"+data.latlng.lng;
            document.getElementById(\"recupAdresseComplete\").value= data.text;
            document.getElementById(\"latlng\").value= latlng;

        });
    </script>

{% endblock %}

", "@Front/Livraison/AjoutAdressClient.html.twig", "C:\\xampp\\htdocs\\pi\\src\\FrontBundle\\Resources\\views\\Livraison\\AjoutAdressClient.html.twig");
    }
}

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

/* @Front/Panier/cart.html.twig */
class __TwigTemplate_9eebe5fb6e4cff90de6a15d0805927d65e740457452de353c3d3ef30a6282af2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Front/Panier/cart.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Front/Panier/cart.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Front/Panier/cart.html.twig", 1);
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
        echo "    <meta name=\"viewport\" content=\"initial-scale=1,maximum-scale=1,user-scalable=no\" />

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

        </div>

        <!--</div> -->
    </div>

    <section id=\"page-content\" class=\"page-wrapper\">
        <div class=\"banner-area section-padding\">
            <div class=\"container\">
                <div class=\"wishlist-area section-padding\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"wishlist-content\">

                                        <div class=\"wishlist-table table-responsive p-30 text-uppercase\">
                                            <table>
                                                <thead>
                                                <tr>
                                                    <th class=\"product-thumbnail\"></th>
                                                    <th class=\"product-name\"><span class=\"nobr\">Product</span></th>
                                                    <th class=\"product-prices\"><span class=\"nobr\"> Price </span></th>
                                                    <th class=\"product-add-to-cart\"><span class=\"nobr\">Add to Cart </span></th>
                                                    <th class=\"product-remove\"><span class=\"nobr\">Remove</span></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 69
            echo "

                                                    <tr>
                                                        <td class=\"product-thumbnail\"><a href=\"#\" title=\"men’s black t-shirt\"><img style=\"width: 35px;height: 35px\" class=\"imageproduit2\" src=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("photos/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "image", []), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "libelleP", []), "html", null, true);
            echo "\"/></a></td>
                                                        <td class=\"product-name pull-left mt-20\" >
                                                            <a href=\"";
            // line 74
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("details_produitF");
            echo "\" title=\"men’s black t-shirt\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "libelleP", []), "html", null, true);
            echo "</a>
                                                            <p class=\"w-color m-0\">
                                                                <label> Categorie :</label>
                                                                ";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "cat", []), "libelleC", []), "html", null, true);
            echo "
                                                            </p>
                                                            <p class=\"w-size m-0\">
                                                        </td>
                                                        <td class=\"product-prices\"><span class=\"amount\">";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "prixVente", []), "html", null, true);
            echo " TND</span></td>
                                                        <td class=\"product-value\">
                                                            <a class=\"product-remove\">  <a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("decrement", ["idd" => $this->getAttribute($context["p"], "id", [])]), "html", null, true);
            echo "\">-</a></a>
                                                            <input  id=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", []), "html", null, true);
            echo "\" value=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "qte", []), "html", null, true);
            echo "  disabled>
                                                        <a class=\"product-remove\">  <a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("increment", ["idd" => $this->getAttribute($context["p"], "id", [])]), "html", null, true);
            echo "\">+</a></a>

                                                        </td>
                                                        <td class=\"product-remove\"><a href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer", ["idd" => $this->getAttribute($context["p"], "libelleP", []), "calledfromcart" => true]), "html", null, true);
            echo "\">×</a></td>
                                                    </tr>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "

                                                </tbody>
                                            </table>
                                        </div>
                                    <form name=\"ff\" id=\"ff\" method=\"post\" action=\"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("checkout");
        echo "\">
                                        <div class=\"row\">
                                            <div class=\"cart-requerment mt-50 clearfix\">

                                                <div class=\"col-md-4 col-sm-6 clearfix\">
                                                    <div class=\"counpon-info ml-35\">
                                                        <div class=\"cart-title text-uppercase\">
                                                            <h5 class=\"mb-30\"><strong>COUPON DISCOUNT</strong></h5>
                                                        </div>
                                                        <div class=\"coupon-discount\">
                                                            <label class=\"pb-10\">Enter Your Coupon Code Here</label>
                                                            <input id=\"inputcoupon\" type=\"text\">
                                                        </div>
                                                        <a class=\"button extra-small pull-right mt-35\" href=\"#\" title=\"Add to Cart\">
                                                            <span id=\"apply\">Apply Coupon</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class=\"col-md-offset-0 col-md-4 col-sm-offset-3 col-sm-6 clearfix\">
                                                    <div class=\"counpon-total ml-35\">
                                                        <div class=\"cart-title text-uppercase\">
                                                            <h5 class=\"mb-30\"><strong>ADRESSE DU COMMANDE</strong></h5>
                                                        </div>

                                                        <table>
                                                            <tbody>
                                                            <tr class=\"cart-total\">

                                                                <td><a style=\"color: #00aff0\" href=\"#\" class=\"confirmModal3\"> Veuillez saisir votre adresse</a><br>

                                                                    <input readonly=\"readonly\" type=\"text\" id=\"recupAdresseComplete\" name=\"recupAdresseComplete\" /><br>
                                                                    <input type=\"hidden\" id=\"latlng\" name=\"latlng\" />


                                                                </td>
                                                            </tr>

                                                            </tbody>
                                                            </table>


                                                        </div>
                                                    </div>




                                                <div class=\"col-md-offset-0 col-md-4 col-sm-offset-3 col-sm-6 clearfix\">
                                                    <div class=\"counpon-total ml-35\">
                                                        <div class=\"cart-title text-uppercase\">
                                                            <h5 class=\"mb-30\"><strong>CART TOTAL</strong></h5>
                                                        </div>

                                                        <table>
                                                            <tbody>
                                                            <tr class=\"cart-total\">
                                                                <th>Grand Total</th>
                                                                <td><span id=\"total\">";
        // line 154
        echo twig_escape_filter($this->env, ($context["total"] ?? $this->getContext($context, "total")), "html", null, true);
        echo "</span> TND</td>
                                                            </tr>

                                                            </tbody>
                                                        </table>

                                                        <input style=\"background-color: #00a9da ; color: white\" type=\"submit\" class=\"button extra-small pull-right\"  title=\"Add to Cart\" value=\"Procced to checkout\" />


                                                    </div>
                                                </div>


                                    </form>

                                                </div>
                                            </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
    <script language = \"javascript\">

        \$(document).ready(function(){

            \$(\"#apply\").click(function(){

                \$r=\$(\"#inputcoupon\").val();
                \$.ajax({
                    url:        'verifycoupon',
                    type:       'POST',
                    dataType:   'json',
                    data:{'coupon':\$r},
                    async:      true,

                    success: function(data) {
                                if(data['success']){
                                    \$tot= \$(\"#total\").text();
                                    \$newTotal = (\$tot/100)*(100-data['value']);
                                    \$(\"#total\").text(\$newTotal);
                                    alert('coupon valid ' + \$tot);
                                }else {
                                    alert('coupon invalid');
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

    // line 216
    public function block_js($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 217
        echo "    <script>
        \$(document).ready(function () {
            //map
            var theHREF3;

            \$( \"#dialog-confirm3\" ).dialog({
                resizable: true,
                height:700,
                width:1000,
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
        return "@Front/Panier/cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 217,  328 => 216,  257 => 154,  197 => 97,  190 => 92,  180 => 88,  174 => 85,  168 => 84,  164 => 83,  159 => 81,  152 => 77,  144 => 74,  136 => 72,  131 => 69,  127 => 68,  61 => 4,  52 => 3,  30 => 1,);
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

    <div id=\"dialog-confirm3\" title=\"Adresse\">
        <!--<div style=\"position: absolute; left: 50px; top: 40px;\"> -->

        <div class=\"container-fluid\">
            <div id=\"map\"></div>

        </div>

        <!--</div> -->
    </div>

    <section id=\"page-content\" class=\"page-wrapper\">
        <div class=\"banner-area section-padding\">
            <div class=\"container\">
                <div class=\"wishlist-area section-padding\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"wishlist-content\">

                                        <div class=\"wishlist-table table-responsive p-30 text-uppercase\">
                                            <table>
                                                <thead>
                                                <tr>
                                                    <th class=\"product-thumbnail\"></th>
                                                    <th class=\"product-name\"><span class=\"nobr\">Product</span></th>
                                                    <th class=\"product-prices\"><span class=\"nobr\"> Price </span></th>
                                                    <th class=\"product-add-to-cart\"><span class=\"nobr\">Add to Cart </span></th>
                                                    <th class=\"product-remove\"><span class=\"nobr\">Remove</span></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                {% for p in produits %}


                                                    <tr>
                                                        <td class=\"product-thumbnail\"><a href=\"#\" title=\"men’s black t-shirt\"><img style=\"width: 35px;height: 35px\" class=\"imageproduit2\" src=\"{{ asset( 'photos/') }}{{ p.image }}\" alt=\"{{ p.libelleP }}\"/></a></td>
                                                        <td class=\"product-name pull-left mt-20\" >
                                                            <a href=\"{{ path('details_produitF') }}\" title=\"men’s black t-shirt\">{{ p.libelleP }}</a>
                                                            <p class=\"w-color m-0\">
                                                                <label> Categorie :</label>
                                                                {{ p.cat.libelleC }}
                                                            </p>
                                                            <p class=\"w-size m-0\">
                                                        </td>
                                                        <td class=\"product-prices\"><span class=\"amount\">{{ p.prixVente  }} TND</span></td>
                                                        <td class=\"product-value\">
                                                            <a class=\"product-remove\">  <a href=\"{{ path('decrement',{'idd':p.id}) }}\">-</a></a>
                                                            <input  id=\"{{ p.id }}\" value={{p.qte}}  disabled>
                                                        <a class=\"product-remove\">  <a href=\"{{ path('increment',{'idd':p.id}) }}\">+</a></a>

                                                        </td>
                                                        <td class=\"product-remove\"><a href=\"{{ path('supprimer',{'idd':p.libelleP,'calledfromcart':true}) }}\">×</a></td>
                                                    </tr>

                {% endfor %}


                                                </tbody>
                                            </table>
                                        </div>
                                    <form name=\"ff\" id=\"ff\" method=\"post\" action=\"{{ path('checkout') }}\">
                                        <div class=\"row\">
                                            <div class=\"cart-requerment mt-50 clearfix\">

                                                <div class=\"col-md-4 col-sm-6 clearfix\">
                                                    <div class=\"counpon-info ml-35\">
                                                        <div class=\"cart-title text-uppercase\">
                                                            <h5 class=\"mb-30\"><strong>COUPON DISCOUNT</strong></h5>
                                                        </div>
                                                        <div class=\"coupon-discount\">
                                                            <label class=\"pb-10\">Enter Your Coupon Code Here</label>
                                                            <input id=\"inputcoupon\" type=\"text\">
                                                        </div>
                                                        <a class=\"button extra-small pull-right mt-35\" href=\"#\" title=\"Add to Cart\">
                                                            <span id=\"apply\">Apply Coupon</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class=\"col-md-offset-0 col-md-4 col-sm-offset-3 col-sm-6 clearfix\">
                                                    <div class=\"counpon-total ml-35\">
                                                        <div class=\"cart-title text-uppercase\">
                                                            <h5 class=\"mb-30\"><strong>ADRESSE DU COMMANDE</strong></h5>
                                                        </div>

                                                        <table>
                                                            <tbody>
                                                            <tr class=\"cart-total\">

                                                                <td><a style=\"color: #00aff0\" href=\"#\" class=\"confirmModal3\"> Veuillez saisir votre adresse</a><br>

                                                                    <input readonly=\"readonly\" type=\"text\" id=\"recupAdresseComplete\" name=\"recupAdresseComplete\" /><br>
                                                                    <input type=\"hidden\" id=\"latlng\" name=\"latlng\" />


                                                                </td>
                                                            </tr>

                                                            </tbody>
                                                            </table>


                                                        </div>
                                                    </div>




                                                <div class=\"col-md-offset-0 col-md-4 col-sm-offset-3 col-sm-6 clearfix\">
                                                    <div class=\"counpon-total ml-35\">
                                                        <div class=\"cart-title text-uppercase\">
                                                            <h5 class=\"mb-30\"><strong>CART TOTAL</strong></h5>
                                                        </div>

                                                        <table>
                                                            <tbody>
                                                            <tr class=\"cart-total\">
                                                                <th>Grand Total</th>
                                                                <td><span id=\"total\">{{ total }}</span> TND</td>
                                                            </tr>

                                                            </tbody>
                                                        </table>

                                                        <input style=\"background-color: #00a9da ; color: white\" type=\"submit\" class=\"button extra-small pull-right\"  title=\"Add to Cart\" value=\"Procced to checkout\" />


                                                    </div>
                                                </div>


                                    </form>

                                                </div>
                                            </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
    <script language = \"javascript\">

        \$(document).ready(function(){

            \$(\"#apply\").click(function(){

                \$r=\$(\"#inputcoupon\").val();
                \$.ajax({
                    url:        'verifycoupon',
                    type:       'POST',
                    dataType:   'json',
                    data:{'coupon':\$r},
                    async:      true,

                    success: function(data) {
                                if(data['success']){
                                    \$tot= \$(\"#total\").text();
                                    \$newTotal = (\$tot/100)*(100-data['value']);
                                    \$(\"#total\").text(\$newTotal);
                                    alert('coupon valid ' + \$tot);
                                }else {
                                    alert('coupon invalid');
                                }
                    },
                    error : function(xhr, textStatus, errorThrown) {
                        alert('Ajax request failed.');
                    }
                });

            })
        });

    </script>
{% endblock %}

{% block js %}
    <script>
        \$(document).ready(function () {
            //map
            var theHREF3;

            \$( \"#dialog-confirm3\" ).dialog({
                resizable: true,
                height:700,
                width:1000,
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


{% endblock %}", "@Front/Panier/cart.html.twig", "C:\\xampp\\htdocs\\pi\\src\\FrontBundle\\Resources\\views\\Panier\\cart.html.twig");
    }
}

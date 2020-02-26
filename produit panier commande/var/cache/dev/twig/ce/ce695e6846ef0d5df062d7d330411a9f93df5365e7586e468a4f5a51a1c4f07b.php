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
class __TwigTemplate_18166c6e1bbf556954490ab4b1d05e6322363d1ce9e1c63efd402a22738e937b extends \Twig\Template
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
        echo "    <section id=\"page-content\" class=\"page-wrapper\">
        <div class=\"banner-area section-padding\">
            <div class=\"container\">
                <div class=\"wishlist-area section-padding\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"wishlist-content\">
                                    <form name=\"ok\" action=\"#\">
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
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 26
            echo "

                                                    <tr>
                                                        <td class=\"product-thumbnail\"><a href=\"#\" title=\"men’s black t-shirt\"><img class=\"imageproduit2\" src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("photos/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "image", []), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "libelleP", []), "html", null, true);
            echo "\"/></a></td>
                                                        <td class=\"product-name pull-left mt-20\" >
                                                            <a href=\"";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("details_produitF");
            echo "\" title=\"men’s black t-shirt\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "libelleP", []), "html", null, true);
            echo "</a>
                                                            <p class=\"w-color m-0\">
                                                                <label> Categorie :</label>
                                                                ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "cat", []), "libelleC", []), "html", null, true);
            echo "
                                                            </p>
                                                            <p class=\"w-size m-0\">
                                                        </td>
                                                        <td class=\"product-prices\"><span class=\"amount\">";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "prixVente", []), "html", null, true);
            echo " TND</span></td>
                                                        <td class=\"product-value\">
                                                            <a class=\"product-remove\">  <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("decrement", ["idd" => $this->getAttribute($context["p"], "id", [])]), "html", null, true);
            echo "\">-</a></a>
                                                            <input  id=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", []), "html", null, true);
            echo "\" value=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "qte", []), "html", null, true);
            echo "  disabled>
                                                        <a class=\"product-remove\">  <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("increment", ["idd" => $this->getAttribute($context["p"], "id", [])]), "html", null, true);
            echo "\">+</a></a>

                                                        </td>
                                                        <td class=\"product-remove\"><a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer", ["idd" => $this->getAttribute($context["p"], "libelleP", []), "calledfromcart" => true]), "html", null, true);
            echo "\">×</a></td>
                                                    </tr>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "

                                                </tbody>
                                            </table>
                                        </div>
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
                                                            <h5 class=\"mb-30\"><strong>CART TOTAL</strong></h5>
                                                        </div>

                                                        <table>
                                                            <tbody>
                                                            <tr class=\"cart-total\">
                                                                <th>Grand Total</th>
                                                                <td><span id=\"total\">";
        // line 81
        echo twig_escape_filter($this->env, ($context["total"] ?? $this->getContext($context, "total")), "html", null, true);
        echo "</span> TND</td>
                                                            </tr>

                                                            </tbody>
                                                            </table>

                                                            <a class=\"button extra-small pull-right\" href=\"";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("checkout");
        echo "\" title=\"Add to Cart\">
                                                                <span>Procced to checkout</span>
                                                            </a>
                                                        </div>
                                                    </div>
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
    </section>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
    <script language = \"javascript\">

        \$(document).ready(function(){

            \$(\"#apply\").click(function(){

                \$r=\$(\"#inputcoupon\").val();
                \$.ajax({
                    url:        '/verifycoupon',
                    type:       'POST',
                    dataType:   'json',
                    data:{'coupon':\$r},
                    async:      true,

                    success: function(data) {
                                if(data['success']){
                                    \$tot= \$(\"#total\").text();
                                    \$newTotal = (\$tot/100)*(100-data['value']);
                                    \$(\"#total\").text(\$newTotal);
                                    alert('coupon valide ' + \$tot);
                                }else {
                                    alert('coupon invalide');
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
        return "@Front/Panier/cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 87,  180 => 81,  146 => 49,  136 => 45,  130 => 42,  124 => 41,  120 => 40,  115 => 38,  108 => 34,  100 => 31,  92 => 29,  87 => 26,  83 => 25,  60 => 4,  51 => 3,  29 => 1,);
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
    <section id=\"page-content\" class=\"page-wrapper\">
        <div class=\"banner-area section-padding\">
            <div class=\"container\">
                <div class=\"wishlist-area section-padding\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"wishlist-content\">
                                    <form name=\"ok\" action=\"#\">
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
                                                        <td class=\"product-thumbnail\"><a href=\"#\" title=\"men’s black t-shirt\"><img class=\"imageproduit2\" src=\"{{ asset( 'photos/') }}{{ p.image }}\" alt=\"{{ p.libelleP }}\"/></a></td>
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

                                                            <a class=\"button extra-small pull-right\" href=\"{{ path('checkout') }}\" title=\"Add to Cart\">
                                                                <span>Procced to checkout</span>
                                                            </a>
                                                        </div>
                                                    </div>
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
    </section>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
    <script language = \"javascript\">

        \$(document).ready(function(){

            \$(\"#apply\").click(function(){

                \$r=\$(\"#inputcoupon\").val();
                \$.ajax({
                    url:        '/verifycoupon',
                    type:       'POST',
                    dataType:   'json',
                    data:{'coupon':\$r},
                    async:      true,

                    success: function(data) {
                                if(data['success']){
                                    \$tot= \$(\"#total\").text();
                                    \$newTotal = (\$tot/100)*(100-data['value']);
                                    \$(\"#total\").text(\$newTotal);
                                    alert('coupon valide ' + \$tot);
                                }else {
                                    alert('coupon invalide');
                                }
                    },
                    error : function(xhr, textStatus, errorThrown) {
                        alert('Ajax request failed.');
                    }
                });

            })
        });

    </script>
{% endblock %}", "@Front/Panier/cart.html.twig", "/Applications/MAMP/htdocs/pi3/src/FrontBundle/Resources/views/Panier/cart.html.twig");
    }
}

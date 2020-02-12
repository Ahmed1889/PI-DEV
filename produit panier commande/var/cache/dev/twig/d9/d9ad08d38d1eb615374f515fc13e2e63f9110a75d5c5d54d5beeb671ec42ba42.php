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
class __TwigTemplate_4f6ea136eb395dffc91600e0e06ea5c87888f4e605375997becf95e4c0e75509 extends \Twig\Template
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
                                                    <th class=\"product-stock-stauts\"><span class=\"nobr\"> stock status </span></th>
                                                    <th class=\"product-add-to-cart\"><span class=\"nobr\">Add to Cart </span></th>
                                                    <th class=\"product-remove\"><span class=\"nobr\">Remove</span></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 27
            echo "

                                                    <tr>
                                                        <td class=\"product-thumbnail\"><a href=\"#\" title=\"men’s black t-shirt\"><img class=\"imageproduit2\" src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("photos/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "image", []), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "libelleP", []), "html", null, true);
            echo "\"/></a></td>
                                                        <td class=\"product-name pull-left mt-20\" >
                                                            <a href=\"";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("details_produitF");
            echo "\" title=\"men’s black t-shirt\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "libelleP", []), "html", null, true);
            echo "</a>
                                                            <p class=\"w-color m-0\">
                                                                <label> Categorie :</label>
                                                                ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "cat", []), "libelleC", []), "html", null, true);
            echo "
                                                            </p>
                                                            <p class=\"w-size m-0\">
                                                        </td>
                                                        <td class=\"product-prices\"><span class=\"amount\">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "prixVente", []), "html", null, true);
            echo " TND</span></td>
                                                        <td class=\"product-stock-status\"><span class=\"wishlist-in-stock\">In Stock</span></td>
                                                        <td class=\"product-value\">
                                                            <input type=\"number\" id=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", []), "html", null, true);
            echo "\" value=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "qte", []), "html", null, true);
            echo "  >
                                                        </td>
                                                        <td class=\"product-remove\"><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer", ["id" => $this->getAttribute($context["p"], "id", [])]), "html", null, true);
            echo "\">×</a></td>
                                                    </tr>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"cart-requerment mt-50 clearfix\">
                                                <div class=\"col-md-4 col-sm-6 clearfix\">
                                                    <div class=\"cart-title text-uppercase\">
                                                        <h5 class=\"mb-30\"><strong>ESTIMATE SHIPPING AND TAX</strong></h5>
                                                    </div>
                                                    <div class=\"shopping-tax\">
                                                        <div class=\"row\">
                                                            <div class=\"col-sm-6\">
                                                                <div class=\"cart-show-label show-label\">
                                                                    <select>
                                                                        <option selected=\"selected\" value=\"position\">Country</option>
                                                                        <option value=\"Name\">Bangladesh</option>
                                                                        <option value=\"Price\">india</option>
                                                                        <option value=\"Price\">Nepal</option>
                                                                    </select>
                                                                </div>
                                                                <div class=\"cart-show-label show-label mt-15\">
                                                                    <select>
                                                                        <option selected=\"selected\" value=\"position\">State/Province</option>
                                                                        <option value=\"Name\">Sreepur</option>
                                                                        <option value=\"Price\">Mirpur</option>
                                                                        <option value=\"Price\">Rampura</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class=\"col-sm-6\">
                                                                <div class=\"cart-show-label show-label\">
                                                                    <select>
                                                                        <option selected=\"selected\" value=\"position\">City</option>
                                                                        <option value=\"Name\">Bangladesh</option>
                                                                        <option value=\"Price\">dhaka</option>
                                                                        <option value=\"Price\">Delli</option>
                                                                        <option value=\"Price\">kolkata</option>
                                                                        <option value=\"Price\">khulna</option>
                                                                    </select>
                                                                </div>
                                                                <div class=\"cart-show-label show-label mt-15\">
                                                                    <select>
                                                                        <option selected=\"selected\" value=\"position\">Zip/Postal Code</option>
                                                                        <option value=\"Name\">1200</option>
                                                                        <option value=\"Price\">1201</option>
                                                                        <option value=\"Price\">1202</option>
                                                                        <option value=\"Price\">1203</option>
                                                                        <option value=\"Price\">1204</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class=\"button extra-small pull-right mt-20\" href=\"#\" title=\"Add to Cart\">
                                                        <span>Get a Quote</span>
                                                    </a>
                                                </div>
                                                <div class=\"col-md-4 col-sm-6 clearfix\">
                                                    <div class=\"counpon-info ml-35\">
                                                        <div class=\"cart-title text-uppercase\">
                                                            <h5 class=\"mb-30\"><strong>COUPON DISCOUNT</strong></h5>
                                                        </div>
                                                        <div class=\"coupon-discount\">
                                                            <label class=\"pb-10\">Enter Your Coupon Code Here</label>
                                                            <input type=\"text\">
                                                        </div>
                                                        <a class=\"button extra-small pull-right mt-35\" href=\"#\" title=\"Add to Cart\">
                                                            <span>Apply Coupon</span>
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
                                                                <td>";
        // line 130
        echo twig_escape_filter($this->env, ($context["total"] ?? $this->getContext($context, "total")), "html", null, true);
        echo "TND</td>
                                                            </tr>
                                                                </tbody>
                                                            </table>
                                                            <a class=\"button extra-small pull-right\" href=\"";
        // line 134
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
        return array (  230 => 134,  223 => 130,  139 => 48,  129 => 44,  122 => 42,  116 => 39,  109 => 35,  101 => 32,  93 => 30,  88 => 27,  84 => 26,  60 => 4,  51 => 3,  29 => 1,);
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
                                                    <th class=\"product-stock-stauts\"><span class=\"nobr\"> stock status </span></th>
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
                                                        <td class=\"product-stock-status\"><span class=\"wishlist-in-stock\">In Stock</span></td>
                                                        <td class=\"product-value\">
                                                            <input type=\"number\" id=\"{{ p.id }}\" value={{p.qte}}  >
                                                        </td>
                                                        <td class=\"product-remove\"><a href=\"{{ path('supprimer',{'id':p.id}) }}\">×</a></td>
                                                    </tr>

                {% endfor %}


                                                </tbody>
                                            </table>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"cart-requerment mt-50 clearfix\">
                                                <div class=\"col-md-4 col-sm-6 clearfix\">
                                                    <div class=\"cart-title text-uppercase\">
                                                        <h5 class=\"mb-30\"><strong>ESTIMATE SHIPPING AND TAX</strong></h5>
                                                    </div>
                                                    <div class=\"shopping-tax\">
                                                        <div class=\"row\">
                                                            <div class=\"col-sm-6\">
                                                                <div class=\"cart-show-label show-label\">
                                                                    <select>
                                                                        <option selected=\"selected\" value=\"position\">Country</option>
                                                                        <option value=\"Name\">Bangladesh</option>
                                                                        <option value=\"Price\">india</option>
                                                                        <option value=\"Price\">Nepal</option>
                                                                    </select>
                                                                </div>
                                                                <div class=\"cart-show-label show-label mt-15\">
                                                                    <select>
                                                                        <option selected=\"selected\" value=\"position\">State/Province</option>
                                                                        <option value=\"Name\">Sreepur</option>
                                                                        <option value=\"Price\">Mirpur</option>
                                                                        <option value=\"Price\">Rampura</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class=\"col-sm-6\">
                                                                <div class=\"cart-show-label show-label\">
                                                                    <select>
                                                                        <option selected=\"selected\" value=\"position\">City</option>
                                                                        <option value=\"Name\">Bangladesh</option>
                                                                        <option value=\"Price\">dhaka</option>
                                                                        <option value=\"Price\">Delli</option>
                                                                        <option value=\"Price\">kolkata</option>
                                                                        <option value=\"Price\">khulna</option>
                                                                    </select>
                                                                </div>
                                                                <div class=\"cart-show-label show-label mt-15\">
                                                                    <select>
                                                                        <option selected=\"selected\" value=\"position\">Zip/Postal Code</option>
                                                                        <option value=\"Name\">1200</option>
                                                                        <option value=\"Price\">1201</option>
                                                                        <option value=\"Price\">1202</option>
                                                                        <option value=\"Price\">1203</option>
                                                                        <option value=\"Price\">1204</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class=\"button extra-small pull-right mt-20\" href=\"#\" title=\"Add to Cart\">
                                                        <span>Get a Quote</span>
                                                    </a>
                                                </div>
                                                <div class=\"col-md-4 col-sm-6 clearfix\">
                                                    <div class=\"counpon-info ml-35\">
                                                        <div class=\"cart-title text-uppercase\">
                                                            <h5 class=\"mb-30\"><strong>COUPON DISCOUNT</strong></h5>
                                                        </div>
                                                        <div class=\"coupon-discount\">
                                                            <label class=\"pb-10\">Enter Your Coupon Code Here</label>
                                                            <input type=\"text\">
                                                        </div>
                                                        <a class=\"button extra-small pull-right mt-35\" href=\"#\" title=\"Add to Cart\">
                                                            <span>Apply Coupon</span>
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
                                                                <td>{{ total }}TND</td>
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
{% endblock %}", "@Front/Panier/cart.html.twig", "/Applications/MAMP/htdocs/pi3/src/FrontBundle/Resources/views/Panier/cart.html.twig");
    }
}

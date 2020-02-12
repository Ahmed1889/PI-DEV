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

/* default/index.html.twig */
class __TwigTemplate_fd3f33b9ac3480b990d19166aeb6d868e2e2104cf86b5165cbee282d4a1f88f6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        echo "    <div class=\"slider-area\">
        <div id=\"ensign-nivoslider\" class=\"slides\">
            <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/slider/1-1.jpg\" alt=\"\" title=\"#htmlcaption1\"/>
            <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/slider/1-2.jpg\" alt=\"\" title=\"#htmlcaption2\"/>
        </div>
        <!-- direction 1 -->
        <div id=\"htmlcaption1\" class=\"nivo-html-caption slider-caption-1\">
            <div class=\"container slider-height\">
                <div class=\"row slider-height\">
                    <div class=\"col-md-offset-5 col-md-7 slider-height\">
                        <div class=\"slide-text\">
                            <div class=\"cap-title cap-main-title wow bounceInDown mb-35 text-uppercase text-white\" data-wow-duration=\"0.5s\" data-wow-delay=\"0s\">
                                <h2><strong>2016</strong></h2>
                            </div>
                            <div class=\"cap-sub-title cap-main-title wow bounceInDown mb-40 text-uppercase text-white\" data-wow-duration=\"1s\" data-wow-delay=\"0s\">
                                <h2>boutique special collection</h2>
                            </div>
                            <div class=\"cap-sub-title wow bounceInDown mb-30 text-white\" data-wow-duration=\"1.5s\" data-wow-delay=\"0s\">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ipsum dolor sit amet labore et dolore</p>
                            </div>
                            <div class=\"cap-shop wow bounceInUp\" data-wow-duration=\"2s\" data-wow-delay=\".5s\">
                                <a href=\"#\" class=\"button extra-small text-uppercase\">
                                    <span>Shop now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- direction 2 -->
        <div id=\"htmlcaption2\" class=\"nivo-html-caption slider-caption-2\">
            <div class=\"container slider-height\">
                <div class=\"row slider-height\">
                    <div class=\"col-md-offset-5 col-md-7 slider-height\">
                        <div class=\"slide-text\">
                            <div class=\"cap-title cap-main-title wow bounceInDown mb-35 text-uppercase text-white\" data-wow-duration=\"0.5s\" data-wow-delay=\"0s\">
                                <h2><strong>2016</strong></h2>
                            </div>
                            <div class=\"cap-sub-title cap-main-title wow bounceInDown mb-40 text-uppercase text-white\" data-wow-duration=\"1s\" data-wow-delay=\"0s\">
                                <h2>boutique special collection</h2>
                            </div>
                            <div class=\"cap-sub-title wow bounceInDown mb-30 text-white\" data-wow-duration=\"1.5s\" data-wow-delay=\"0s\">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ipsum dolor sit amet labore et dolore</p>
                            </div>
                            <div class=\"cap-shop wow bounceInUp\" data-wow-duration=\"2s\" data-wow-delay=\".5s\">
                                <a href=\"#\" class=\"button extra-small text-uppercase\">
                                    <span>Shop now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of slider area -->
    <!-- Start page content -->
    <section id=\"page-content\" class=\"page-wrapper\">
        <!-- Start Banner Area -->
        <div class=\"banner-area section-padding\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-5\">
                        <div class=\"banner-img banner-hover mb-30\">
                            <a href=\"#\" class=\"b-img\">
                                <img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/banner/1.jpg\" alt=\"\">
                            </a>
                            <div class=\"shop-cart-icon\">
                                <a href=\"#\"><i class=\"zmdi zmdi-shopping-cart\"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-7\">
                        <div class=\"banner-img banner-hover mb-30\">
                            <a href=\"#\" class=\"b-img\">
                                <img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/banner/2.jpg\" alt=\"\">
                            </a>
                            <div class=\"shop-cart-icon\">
                                <a href=\"#\"><i class=\"zmdi zmdi-shopping-cart\"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-7\">
                        <div class=\"banner-img banner-hover rmb-30\">
                            <a href=\"#\" class=\"b-img\">
                                <img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/banner/3.jpg\" alt=\"\">
                            </a>
                            <div class=\"shop-cart-icon\">
                                <a href=\"#\"><i class=\"zmdi zmdi-shopping-cart\"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-5\">
                        <div class=\"banner-img banner-hover\">
                            <a href=\"#\" class=\"b-img\">
                                <img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/banner/4.jpg\" alt=\"\">
                            </a>
                            <div class=\"shop-cart-icon\">
                                <a href=\"#\"><i class=\"zmdi zmdi-shopping-cart\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Banner Area -->
        <!-- Start Product List -->
        <div class=\"product-list-tab pb-90\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"tab-menu section-title section-title  mb-30\">
                            <!-- Nav tabs -->
                            <ul class=\"nav nav-tabs\" role=\"tablist\">
                                <li role=\"presentation\" class=\"first-item active\">
                                    <a href=\"#arrival\" aria-controls=\"arrival\" role=\"tab\" data-toggle=\"tab\">NEW ARRIVAL</a>
                                </li>
                                <li role=\"presentation\">
                                    <a href=\"#sale\" aria-controls=\"sale\" role=\"tab\" data-toggle=\"tab\">BEST SELES</a>
                                </li>
                                <li role=\"presentation\">
                                    <a href=\"#featured\" aria-controls=\"featured\" role=\"tab\" data-toggle=\"tab\">MOST WANTED</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_sort_filter(($context["produit"] ?? $this->getContext($context, "produit")), function ($__a__, $__b__) use ($context) { $context["a"] = $__a__; $context["b"] = $__b__; return ($this->getAttribute(($context["a"] ?? $this->getContext($context, "a")), "dateCreation", []) > $this->getAttribute(($context["b"] ?? $this->getContext($context, "b")), "dateCreation", [])); }), 0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 134
            echo "                        <div class=\"product-list tab-content\">
                            <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"home\">
                                <div class=\"col-md-3 col-sm-4 col-xs-12\">
                                    <div class=\"single-product mb-40\">
                                        <div class=\"product-img-content mb-20\">
                                            <div class=\"product-img\">
                                                <a href=\"";
            // line 140
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("details_produitF", ["id" => $this->getAttribute($context["p"], "id", [])]), "html", null, true);
            echo "\">
                                                    <img class=\"imageproduit2\" src=\"";
            // line 141
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("photos/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "image", []), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "libelleP", []), "html", null, true);
            echo "\">
                                                </a>
                                            </div>
                                            <div class=\"product-action text-center\">
                                                <a href=\"#\" title=\"Quick view\" data-toggle=\"modal\" data-target=\"#productModal\">
                                                    <i class=\"zmdi zmdi-eye\"></i>
                                                </a>
                                                <a href=\"#\" title=\"Add to cart\">
                                                    <i class=\"zmdi zmdi-shopping-cart\"></i>
                                                </a>
                                                <a href=\"#\" title=\"Add to Wishlist\">
                                                    <i class=\"zmdi zmdi-favorite\"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class=\"product-content text-center text-uppercase\">
                                            <a href=\"product-details.html\" >";
            // line 157
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "libelleP", []), "html", null, true);
            echo "</a>
                                            <div class=\"rating-icon\">
                                                <i class=\"zmdi zmdi-star\"></i>
                                                <i class=\"zmdi zmdi-star\"></i>
                                                <i class=\"zmdi zmdi-star\"></i>
                                                <i class=\"zmdi zmdi-star-half\"></i>
                                                <i class=\"zmdi zmdi-star-half\"></i>
                                            </div>
                                            <div class=\"product-price\">
                                                <span class=\"new-price\">";
            // line 166
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "prixVente", []), "html", null, true);
            echo " DT</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "                </div>
            </div>
        </div>
        <!-- End of Product List -->
        <!-- Start Service Area -->
        <div class=\"service-area section-padding\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-4\">
                        <div class=\"single-item text-white pl-120\">
                            <i class=\"zmdi zmdi-shopping-cart\"></i>
                            <h4>FREE SHipping</h4>
                            <p>Lorem ipsum dolor sit amet, onsectetur adipisicing</p>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <div class=\"single-item text-white pl-120\">
                            <i class=\"zmdi zmdi-headset\"></i>
                            <h4>24/7 SUPPORT</h4>
                            <p>Lorem ipsum dolor sit amet, onsectetur adipisicing</p>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <div class=\"single-item text-white pl-120 rm-0\">
                            <i class=\"zmdi zmdi-balance-wallet\"></i>
                            <h4>100% MONEY BACK</h4>
                            <p>Lorem ipsum dolor sit amet, onsectetur adipisicing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Service Area -->
        <!-- Start Sale  Area -->
        <div class=\"sale-area section-padding\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-4 col-sm-6\">
                        <div class=\"section-title text-uppercase mb-40\">
                            <h4>on sale</h4>
                        </div>
                        <div class=\"sale-list\">
                            <div class=\"sinlge-sale mb-30 clearfix\">
                                <div class=\"row\">
                                    <div class=\"col-xs-6\">
                                        <div class=\"sale-img\">
                                            <a href=\"product-details.html\" title=\"Men’s White Short Item\">
                                                <img src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/sale/1.jpg\" alt=\"\">
                                            </a>
                                            <div class=\"sale-shop\">
                                                <a href=\"#\">
                                                    <i class=\"zmdi zmdi-shopping-cart\"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-6\">
                                        <div class=\"product-content mt-60\">
                                            <a href=\"#\" title=\"Men’s White Short Item\">Men’s White Short Item</a>
                                            <div class=\"rating-icon\">
                                                <i class=\"zmdi zmdi-star\"></i>
                                                <i class=\"zmdi zmdi-star\"></i>
                                                <i class=\"zmdi zmdi-star\"></i>
                                                <i class=\"zmdi zmdi-star-half\"></i>
                                                <i class=\"zmdi zmdi-star-half\"></i>
                                            </div>
                                            <div class=\"product-price\">
                                                <span class=\"new-price\">£185.00</span>
                                                <span class=\"old-price\">£190.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"sinlge-sale mb-30 clearfix\">
                                <div class=\"row\">
                                    <div class=\"col-xs-6\">
                                        <div class=\"sale-img\">
                                            <a href=\"product-details.html\" title=\"Men’s White Short Item\">
                                                <img src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/sale/2.jpg\" alt=\"\">
                                            </a>
                                            <div class=\"sale-shop\">
                                                <a href=\"#\">
                                                    <i class=\"zmdi zmdi-shopping-cart\"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-6\">
                                        <div class=\"product-content mt-60\">
                                            <a href=\"#\" title=\"Men’s White Short Item\">Men’s White Short Item</a>
                                            <div class=\"rating-icon\">
                                                <i class=\"zmdi zmdi-star\"></i>
                                                <i class=\"zmdi zmdi-star\"></i>
                                                <i class=\"zmdi zmdi-star\"></i>
                                                <i class=\"zmdi zmdi-star-half\"></i>
                                                <i class=\"zmdi zmdi-star-half\"></i>
                                            </div>
                                            <div class=\"product-price\">
                                                <span class=\"new-price\">£185.00</span>
                                                <span class=\"old-price\">£190.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"sinlge-sale clearfix\">
                                <div class=\"row\">
                                    <div class=\"col-xs-6\">
                                        <div class=\"sale-img\">
                                            <a href=\"product-details.html\" title=\"Men’s White Short Item\">
                                                <img src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/sale/3.jpg\" alt=\"\">
                                            </a>
                                            <div class=\"sale-shop\">
                                                <a href=\"#\">
                                                    <i class=\"zmdi zmdi-shopping-cart\"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-6\">
                                        <div class=\"product-content mt-60\">
                                            <a href=\"#\" title=\"Men’s White Short Item\">Men’s White Short Item</a>
                                            <div class=\"rating-icon\">
                                                <i class=\"zmdi zmdi-star\"></i>
                                                <i class=\"zmdi zmdi-star\"></i>
                                                <i class=\"zmdi zmdi-star\"></i>
                                                <i class=\"zmdi zmdi-star-half\"></i>
                                                <i class=\"zmdi zmdi-star-half\"></i>
                                            </div>
                                            <div class=\"product-price\">
                                                <span class=\"new-price\">£185.00</span>
                                                <span class=\"old-price\">£190.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 col-sm-6\">
                        <div class=\"section-title text-uppercase mb-40\">
                            <h4>Top Rated</h4>
                        </div>
                        <div class=\"sale-list\">
                            <div class=\"sinlge-sale mb-30 clearfix\">
                                <div class=\"row\">
                                    <div class=\"col-xs-6\">
                                        <div class=\"sale-img\">
                                            <a href=\"product-details.html\" title=\"Men’s White Short Item\">
                                                <img src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/sale/4.jpg\" alt=\"\">
                                            </a>
                                            <div class=\"sale-shop\">
                                                <a href=\"#\">
                                                    <i class=\"zmdi zmdi-shopping-cart\"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-6\">
                                        <div class=\"product-content mt-60\">
                                            <a href=\"#\" title=\"Men’s White Short Item\">Men’s White Short Item</a>
                                            <div class=\"rating-icon\">
                                                <i class=\"zmdi zmdi-star\"></i>
                                                <i class=\"zmdi zmdi-star\"></i>
                                                <i class=\"zmdi zmdi-star\"></i>
                                                <i class=\"zmdi zmdi-star-half\"></i>
                                                <i class=\"zmdi zmdi-star-half\"></i>
                                            </div>
                                            <div class=\"product-price\">
                                                <span class=\"new-price\">£185.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"sinlge-sale mb-30 clearfix\">
                                <div class=\"row\">
                                    <div class=\"col-xs-6\">
                                        <div class=\"sale-img\">
                                            <a href=\"product-details.html\" title=\"Men’s White Short Item\">
                                                <img src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/sale/5.jpg\" alt=\"\">
                                            </a>
                                            <div class=\"sale-shop\">
                                                <a href=\"#\">
                                                    <i class=\"zmdi zmdi-shopping-cart\"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-6\">
                                        <div class=\"product-content mt-60\">
                                            <a href=\"#\" title=\"Men’s White Short Item\">Men’s White Short Item</a>
                                            <div class=\"rating-icon\">
                                                <i class=\"zmdi zmdi-star\"></i>
                                                <i class=\"zmdi zmdi-star\"></i>
                                                <i class=\"zmdi zmdi-star\"></i>
                                                <i class=\"zmdi zmdi-star-half\"></i>
                                                <i class=\"zmdi zmdi-star-half\"></i>
                                            </div>
                                            <div class=\"product-price\">
                                                <span class=\"new-price\">£185.00</span>
                                                <span class=\"old-price\">£190.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"sinlge-sale clearfix\">
                                <div class=\"row\">
                                    <div class=\"col-xs-6\">
                                        <div class=\"sale-img\">
                                            <a href=\"product-details.html\" title=\"Men’s White Short Item\">
                                                <img src=\"";
        // line 387
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/sale/6.jpg\" alt=\"\">
                                            </a>
                                            <div class=\"sale-shop\">
                                                <a href=\"#\">
                                                    <i class=\"zmdi zmdi-shopping-cart\"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-6\">
                                        <div class=\"product-content mt-60\">
                                            <a href=\"#\" title=\"Men’s White Short Item\">Men’s White Short Item</a>
                                            <div class=\"rating-icon\">
                                                <i class=\"zmdi zmdi-star\"></i>
                                                <i class=\"zmdi zmdi-star\"></i>
                                                <i class=\"zmdi zmdi-star\"></i>
                                                <i class=\"zmdi zmdi-star-half\"></i>
                                                <i class=\"zmdi zmdi-star-half\"></i>
                                            </div>
                                            <div class=\"product-price\">
                                                <span class=\"new-price\">£185.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 hidden-sm\">
                        <div class=\"offer-banner\">
                            <a href=\"#\">
                                <img src=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/sale/offer.jpg\" alt=\"\">
                            </a>
                            <!-- CountDown -->
                            <div class=\"product-cuntdown white-bg text-center\">
                                <div class=\"timer\">
                                    <div data-countdown=\"2018/06/01\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Of Sale  Area -->
        <!-- Start Testimonial Area -->
        <div class=\"testimonial-area\">
            <div id=\"particles-js\" class=\"pt-90 pb-50\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"testimonial-title text-white text-uppercase text-center mb-40\">
                                <h4>what customer saying</h4>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-offset-2 col-md-8\">
                            <div class=\"testimonial-list\">
                                <div class=\"single-testimonial text-center\">
                                    <img alt=\"\" src=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/testimonial/1.jpg\">
                                    <div class=\"testimonial-info white-bg clearfix\">
                                        <div class=\"testimonial-author text-uppercase\">
                                            <h5>ANIKA MOLLIK</h5>
                                            <p>chairmen</p>
                                        </div>
                                        <p>consectetur adipisicing elit, sed do eiusmod tempor  incididunt
                                            labore et dolore magna aliqua. Ut enim ad minim veniam,voluptate velit esse cillu nulla pariatur. Excepteur sint occaecat</p>
                                    </div>
                                </div>
                                <div class=\"single-testimonial text-center\">
                                    <img alt=\"\" src=\"";
        // line 458
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/testimonial/2.jpg\">
                                    <div class=\"testimonial-info white-bg clearfix\">
                                        <div class=\"testimonial-author text-uppercase\">
                                            <h5>Ashim Kumar</h5>
                                            <p>CEO</p>
                                        </div>
                                        <p>consectetur adipisicing elit, sed do eiusmod tempor  incididunt
                                            labore et dolore magna aliqua. Ut enim ad minim veniam,voluptate velit esse cillu nulla pariatur. Excepteur sint occaecat</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Testimonial Area -->
        <!-- Start Blog Area -->
        <div class=\"blog-area section-padding\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"section-title text-uppercase mb-40\">
                            <h4>latest blog</h4>
                        </div>
                    </div>
                </div>
                <div class=\"blog-list\">
                    <div class=\"row\">
                        <div class=\"col-md-4 col-sm-6\">
                            <div class=\"single-blog\">
                                <div class=\"blog-image\">
                                    <a href=\"#\">
                                        <img alt=\"\" src=\"";
        // line 491
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/blog/1.jpg\">
                                    </a>
                                </div>
                                <div class=\"blog-content pb-20 text-center\">
                                    <div class=\"date-added mb-20 pt-20\"><i class=\"zmdi zmdi-time mr-10\"></i>Date : 26 oct 2016 </div>
                                    <h5><a class=\"blog-title text-capitalize\" href=\"#\">Blog Post Dummy Title</a></h5>
                                    <div class=\"post-info-author mt-30\">
                                            <span class=\"author mr-20\">
                                                <i class=\"zmdi zmdi-account\"></i>
                                                By
                                                <a href=\"#\" title=\"Posts by admin\"> A Mollik </a>
                                            </span>
                                        <span class=\"comments-count mr-20\">
                                                <i class=\"zmdi zmdi-favorite\"></i>
                                                20 Likes
                                            </span>
                                        <span class=\"comments-count\">
                                                <i class=\"zmdi zmdi-comments\"></i>
                                                02 Comments
                                            </span>
                                    </div>
                                </div>
                                <div class=\"blog-content blog-content-overlay pb-20 text-center\">
                                    <div class=\"date-added mb-20 pt-20\"><i class=\"zmdi zmdi-time mr-10\"></i>Date : 26 oct 2016 </div>
                                    <h5><a class=\"blog-title text-capitalize\" href=\"#\">Blog Post Dummy Title</a></h5>
                                    <p>Adipisicing elit, sed do eiusmod tempor incididunt adipisicing elit, sed do eiusmod tempor incididunt dolore magna aliqua. Ut enim ad minim</p>
                                    <div class=\"post-info-author mt-30\">
                                            <span class=\"author mr-20\">
                                                <i class=\"zmdi zmdi-account\"></i>
                                                By
                                                <a href=\"#\" title=\"Posts by admin\"> A Mollik </a>
                                            </span>
                                        <span class=\"comments-count mr-20\">
                                                <i class=\"zmdi zmdi-favorite\"></i>
                                                20 Likes
                                            </span>
                                        <span class=\"comments-count\">
                                                <i class=\"zmdi zmdi-comments\"></i>
                                                02 Comments
                                            </span>
                                    </div>
                                    <a href=\"#\" class=\"button extra-small mt-60 text-uppercase\">
                                        <span>Read More</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4 col-sm-6\">
                            <div class=\"single-blog\">
                                <div class=\"blog-image\">
                                    <a href=\"#\">
                                        <img alt=\"\" src=\"";
        // line 542
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/blog/2.jpg\">
                                    </a>
                                </div>
                                <div class=\"blog-content pb-20 text-center\">
                                    <div class=\"date-added mb-20 pt-20\"><i class=\"zmdi zmdi-time mr-10\"></i>Date : 26 oct 2016 </div>
                                    <h5><a class=\"blog-title text-capitalize\" href=\"#\">Blog Post Dummy Title</a></h5>
                                    <div class=\"post-info-author mt-30\">
                                            <span class=\"author mr-20\">
                                                <i class=\"zmdi zmdi-account\"></i>
                                                By
                                                <a href=\"#\" title=\"Posts by admin\"> A Mollik </a>
                                            </span>
                                        <span class=\"comments-count mr-20\">
                                                <i class=\"zmdi zmdi-favorite\"></i>
                                                20 Likes
                                            </span>
                                        <span class=\"comments-count\">
                                                <i class=\"zmdi zmdi-comments\"></i>
                                                02 Comments
                                            </span>
                                    </div>
                                </div>
                                <div class=\"blog-content blog-content-overlay pb-20 text-center\">
                                    <div class=\"date-added mb-20 pt-20\"><i class=\"zmdi zmdi-time mr-10\"></i>Date : 26 oct 2016 </div>
                                    <h5><a class=\"blog-title text-capitalize\" href=\"#\">Blog Post Dummy Title</a></h5>
                                    <p>Adipisicing elit, sed do eiusmod tempor incididunt adipisicing elit, sed do eiusmod tempor incididunt dolore magna aliqua. Ut enim ad minim</p>
                                    <div class=\"post-info-author mt-30\">
                                            <span class=\"author mr-20\">
                                                <i class=\"zmdi zmdi-account\"></i>
                                                By
                                                <a href=\"#\" title=\"Posts by admin\"> A Mollik </a>
                                            </span>
                                        <span class=\"comments-count mr-20\">
                                                <i class=\"zmdi zmdi-favorite\"></i>
                                                20 Likes
                                            </span>
                                        <span class=\"comments-count\">
                                                <i class=\"zmdi zmdi-comments\"></i>
                                                02 Comments
                                            </span>
                                    </div>
                                    <a href=\"#\" class=\"button extra-small mt-60 text-uppercase\">
                                        <span>Read More</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4 hidden-sm\">
                            <div class=\"single-blog rm-0\">
                                <div class=\"blog-image\">
                                    <a href=\"#\">
                                        <img alt=\"\" src=\"";
        // line 593
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/blog/1.jpg\">
                                    </a>
                                </div>
                                <div class=\"blog-content pb-20 text-center\">
                                    <div class=\"date-added mb-20 pt-20\"><i class=\"zmdi zmdi-time mr-10\"></i>Date : 26 oct 2016 </div>
                                    <h5><a class=\"blog-title text-capitalize\" href=\"#\">Blog Post Dummy Title</a></h5>
                                    <div class=\"post-info-author mt-30\">
                                            <span class=\"author mr-20\">
                                                <i class=\"zmdi zmdi-account\"></i>
                                                By
                                                <a href=\"#\" title=\"Posts by admin\"> A Mollik </a>
                                            </span>
                                        <span class=\"comments-count mr-20\">
                                                <i class=\"zmdi zmdi-favorite\"></i>
                                                20 Likes
                                            </span>
                                        <span class=\"comments-count\">
                                                <i class=\"zmdi zmdi-comments\"></i>
                                                02 Comments
                                            </span>
                                    </div>
                                </div>
                                <div class=\"blog-content blog-content-overlay pb-20 text-center\">
                                    <div class=\"date-added mb-20 pt-20\"><i class=\"zmdi zmdi-time mr-10\"></i>Date : 26 oct 2016 </div>
                                    <h5><a class=\"blog-title text-capitalize\" href=\"#\">Blog Post Dummy Title</a></h5>
                                    <p>Adipisicing elit, sed do eiusmod tempor incididunt adipisicing elit, sed do eiusmod tempor incididunt dolore magna aliqua. Ut enim ad minim</p>
                                    <div class=\"post-info-author mt-30\">
                                            <span class=\"author mr-20\">
                                                <i class=\"zmdi zmdi-account\"></i>
                                                By
                                                <a href=\"#\" title=\"Posts by admin\"> A Mollik </a>
                                            </span>
                                        <span class=\"comments-count mr-20\">
                                                <i class=\"zmdi zmdi-favorite\"></i>
                                                20 Likes
                                            </span>
                                        <span class=\"comments-count\">
                                                <i class=\"zmdi zmdi-comments\"></i>
                                                02 Comments
                                            </span>
                                    </div>
                                    <a href=\"#\" class=\"button extra-small mt-60 text-uppercase\">
                                        <span>Read More</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Of Blog Area -->
        <!-- Start Brand Area -->
        <div class=\"brand-area pb-90\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"brand-list\">
                        <div class=\"col-md-12\">
                            <div class=\"single-brand text-center\">
                                <a href=\"#\">
                                    <img src=\"";
        // line 653
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/brand/1.png\" alt=\"\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"single-brand text-center\">
                                <a href=\"#\">
                                    <img src=\"";
        // line 660
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/brand/2.png\" alt=\"\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"single-brand text-center\">
                                <a href=\"#\">
                                    <img src=\"";
        // line 667
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/brand/3.png\" alt=\"\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"single-brand text-center\">
                                <a href=\"#\">
                                    <img src=\"";
        // line 674
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/brand/4.png\" alt=\"\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"single-brand text-center\">
                                <a href=\"#\">
                                    <img src=\"";
        // line 681
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/brand/5.png\" alt=\"\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"single-brand text-center\">
                                <a href=\"#\">
                                    <img src=\"";
        // line 688
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/brand/6.png\" alt=\"\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"single-brand text-center\">
                                <a href=\"#\">
                                    <img src=\"";
        // line 695
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/brand/1.png\" alt=\"\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"single-brand text-center\">
                                <a href=\"#\">
                                    <img src=\"";
        // line 702
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/brand/2.png\" alt=\"\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"single-brand text-center\">
                                <a href=\"#\">
                                    <img src=\"";
        // line 709
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/brand/3.png\" alt=\"\">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Of Brand Area -->
        <!-- Start Newsletter Area -->
        <div class=\"newsletter-area\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"newsletter-content default-bg clearfix ptb-40\">
                        <div class=\"col-md-offset-2 col-md-3 col-sm-5\">
                            <div class=\"newsletter-title text-white text-uppercase\">
                                <h4>NewsLetter Sign-Up</h4>
                            </div>
                        </div>
                        <div class=\"col-md-5 col-sm-7\">
                            <div class=\"signup-form\">
                                <form class=\"news-form\" action=\"#\">
                                    <input type=\"text\" placeholder=\"Enter your email address...\" class=\"f-form\">
                                    <button class=\"submit text-uppercase\">subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Of Newsletter Area -->
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  870 => 709,  860 => 702,  850 => 695,  840 => 688,  830 => 681,  820 => 674,  810 => 667,  800 => 660,  790 => 653,  727 => 593,  673 => 542,  619 => 491,  583 => 458,  569 => 447,  537 => 418,  503 => 387,  468 => 355,  434 => 324,  392 => 285,  357 => 253,  322 => 221,  273 => 174,  259 => 166,  247 => 157,  225 => 141,  221 => 140,  213 => 134,  209 => 133,  173 => 100,  160 => 90,  147 => 80,  134 => 70,  68 => 7,  64 => 6,  60 => 4,  51 => 3,  29 => 1,);
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
    <div class=\"slider-area\">
        <div id=\"ensign-nivoslider\" class=\"slides\">
            <img src=\"{{ asset('freak/') }}images/slider/1-1.jpg\" alt=\"\" title=\"#htmlcaption1\"/>
            <img src=\"{{ asset('freak/') }}images/slider/1-2.jpg\" alt=\"\" title=\"#htmlcaption2\"/>
        </div>
        <!-- direction 1 -->
        <div id=\"htmlcaption1\" class=\"nivo-html-caption slider-caption-1\">
            <div class=\"container slider-height\">
                <div class=\"row slider-height\">
                    <div class=\"col-md-offset-5 col-md-7 slider-height\">
                        <div class=\"slide-text\">
                            <div class=\"cap-title cap-main-title wow bounceInDown mb-35 text-uppercase text-white\" data-wow-duration=\"0.5s\" data-wow-delay=\"0s\">
                                <h2><strong>2016</strong></h2>
                            </div>
                            <div class=\"cap-sub-title cap-main-title wow bounceInDown mb-40 text-uppercase text-white\" data-wow-duration=\"1s\" data-wow-delay=\"0s\">
                                <h2>boutique special collection</h2>
                            </div>
                            <div class=\"cap-sub-title wow bounceInDown mb-30 text-white\" data-wow-duration=\"1.5s\" data-wow-delay=\"0s\">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ipsum dolor sit amet labore et dolore</p>
                            </div>
                            <div class=\"cap-shop wow bounceInUp\" data-wow-duration=\"2s\" data-wow-delay=\".5s\">
                                <a href=\"#\" class=\"button extra-small text-uppercase\">
                                    <span>Shop now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- direction 2 -->
        <div id=\"htmlcaption2\" class=\"nivo-html-caption slider-caption-2\">
            <div class=\"container slider-height\">
                <div class=\"row slider-height\">
                    <div class=\"col-md-offset-5 col-md-7 slider-height\">
                        <div class=\"slide-text\">
                            <div class=\"cap-title cap-main-title wow bounceInDown mb-35 text-uppercase text-white\" data-wow-duration=\"0.5s\" data-wow-delay=\"0s\">
                                <h2><strong>2016</strong></h2>
                            </div>
                            <div class=\"cap-sub-title cap-main-title wow bounceInDown mb-40 text-uppercase text-white\" data-wow-duration=\"1s\" data-wow-delay=\"0s\">
                                <h2>boutique special collection</h2>
                            </div>
                            <div class=\"cap-sub-title wow bounceInDown mb-30 text-white\" data-wow-duration=\"1.5s\" data-wow-delay=\"0s\">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ipsum dolor sit amet labore et dolore</p>
                            </div>
                            <div class=\"cap-shop wow bounceInUp\" data-wow-duration=\"2s\" data-wow-delay=\".5s\">
                                <a href=\"#\" class=\"button extra-small text-uppercase\">
                                    <span>Shop now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of slider area -->
    <!-- Start page content -->
    <section id=\"page-content\" class=\"page-wrapper\">
        <!-- Start Banner Area -->
        <div class=\"banner-area section-padding\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-5\">
                        <div class=\"banner-img banner-hover mb-30\">
                            <a href=\"#\" class=\"b-img\">
                                <img src=\"{{ asset('freak/') }}images/banner/1.jpg\" alt=\"\">
                            </a>
                            <div class=\"shop-cart-icon\">
                                <a href=\"#\"><i class=\"zmdi zmdi-shopping-cart\"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-7\">
                        <div class=\"banner-img banner-hover mb-30\">
                            <a href=\"#\" class=\"b-img\">
                                <img src=\"{{ asset('freak/') }}images/banner/2.jpg\" alt=\"\">
                            </a>
                            <div class=\"shop-cart-icon\">
                                <a href=\"#\"><i class=\"zmdi zmdi-shopping-cart\"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-7\">
                        <div class=\"banner-img banner-hover rmb-30\">
                            <a href=\"#\" class=\"b-img\">
                                <img src=\"{{ asset('freak/') }}images/banner/3.jpg\" alt=\"\">
                            </a>
                            <div class=\"shop-cart-icon\">
                                <a href=\"#\"><i class=\"zmdi zmdi-shopping-cart\"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-5\">
                        <div class=\"banner-img banner-hover\">
                            <a href=\"#\" class=\"b-img\">
                                <img src=\"{{ asset('freak/') }}images/banner/4.jpg\" alt=\"\">
                            </a>
                            <div class=\"shop-cart-icon\">
                                <a href=\"#\"><i class=\"zmdi zmdi-shopping-cart\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Banner Area -->
        <!-- Start Product List -->
        <div class=\"product-list-tab pb-90\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"tab-menu section-title section-title  mb-30\">
                            <!-- Nav tabs -->
                            <ul class=\"nav nav-tabs\" role=\"tablist\">
                                <li role=\"presentation\" class=\"first-item active\">
                                    <a href=\"#arrival\" aria-controls=\"arrival\" role=\"tab\" data-toggle=\"tab\">NEW ARRIVAL</a>
                                </li>
                                <li role=\"presentation\">
                                    <a href=\"#sale\" aria-controls=\"sale\" role=\"tab\" data-toggle=\"tab\">BEST SELES</a>
                                </li>
                                <li role=\"presentation\">
                                    <a href=\"#featured\" aria-controls=\"featured\" role=\"tab\" data-toggle=\"tab\">MOST WANTED</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    {% for p in produit | sort((a, b) => a.dateCreation > b.dateCreation) | slice(0,4)%}
                        <div class=\"product-list tab-content\">
                            <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"home\">
                                <div class=\"col-md-3 col-sm-4 col-xs-12\">
                                    <div class=\"single-product mb-40\">
                                        <div class=\"product-img-content mb-20\">
                                            <div class=\"product-img\">
                                                <a href=\"{{ path('details_produitF',{'id':p.id}) }}\">
                                                    <img class=\"imageproduit2\" src=\"{{ asset( 'photos/') }}{{ p.image }}\" alt=\"{{ p.libelleP }}\">
                                                </a>
                                            </div>
                                            <div class=\"product-action text-center\">
                                                <a href=\"#\" title=\"Quick view\" data-toggle=\"modal\" data-target=\"#productModal\">
                                                    <i class=\"zmdi zmdi-eye\"></i>
                                                </a>
                                                <a href=\"#\" title=\"Add to cart\">
                                                    <i class=\"zmdi zmdi-shopping-cart\"></i>
                                                </a>
                                                <a href=\"#\" title=\"Add to Wishlist\">
                                                    <i class=\"zmdi zmdi-favorite\"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class=\"product-content text-center text-uppercase\">
                                            <a href=\"product-details.html\" >{{ p.libelleP }}</a>
                                            <div class=\"rating-icon\">
                                                <i class=\"zmdi zmdi-star\"></i>
                                                <i class=\"zmdi zmdi-star\"></i>
                                                <i class=\"zmdi zmdi-star\"></i>
                                                <i class=\"zmdi zmdi-star-half\"></i>
                                                <i class=\"zmdi zmdi-star-half\"></i>
                                            </div>
                                            <div class=\"product-price\">
                                                <span class=\"new-price\">{{ p.prixVente }} DT</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>
        <!-- End of Product List -->
        <!-- Start Service Area -->
        <div class=\"service-area section-padding\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-4\">
                        <div class=\"single-item text-white pl-120\">
                            <i class=\"zmdi zmdi-shopping-cart\"></i>
                            <h4>FREE SHipping</h4>
                            <p>Lorem ipsum dolor sit amet, onsectetur adipisicing</p>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <div class=\"single-item text-white pl-120\">
                            <i class=\"zmdi zmdi-headset\"></i>
                            <h4>24/7 SUPPORT</h4>
                            <p>Lorem ipsum dolor sit amet, onsectetur adipisicing</p>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <div class=\"single-item text-white pl-120 rm-0\">
                            <i class=\"zmdi zmdi-balance-wallet\"></i>
                            <h4>100% MONEY BACK</h4>
                            <p>Lorem ipsum dolor sit amet, onsectetur adipisicing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Service Area -->
        <!-- Start Sale  Area -->
        <div class=\"sale-area section-padding\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-4 col-sm-6\">
                        <div class=\"section-title text-uppercase mb-40\">
                            <h4>on sale</h4>
                        </div>
                        <div class=\"sale-list\">
                            <div class=\"sinlge-sale mb-30 clearfix\">
                                <div class=\"row\">
                                    <div class=\"col-xs-6\">
                                        <div class=\"sale-img\">
                                            <a href=\"product-details.html\" title=\"Men’s White Short Item\">
                                                <img src=\"{{ asset('freak/') }}images/sale/1.jpg\" alt=\"\">
                                            </a>
                                            <div class=\"sale-shop\">
                                                <a href=\"#\">
                                                    <i class=\"zmdi zmdi-shopping-cart\"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-6\">
                                        <div class=\"product-content mt-60\">
                                            <a href=\"#\" title=\"Men’s White Short Item\">Men’s White Short Item</a>
                                            <div class=\"rating-icon\">
                                                <i class=\"zmdi zmdi-star\"></i>
                                                <i class=\"zmdi zmdi-star\"></i>
                                                <i class=\"zmdi zmdi-star\"></i>
                                                <i class=\"zmdi zmdi-star-half\"></i>
                                                <i class=\"zmdi zmdi-star-half\"></i>
                                            </div>
                                            <div class=\"product-price\">
                                                <span class=\"new-price\">£185.00</span>
                                                <span class=\"old-price\">£190.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"sinlge-sale mb-30 clearfix\">
                                <div class=\"row\">
                                    <div class=\"col-xs-6\">
                                        <div class=\"sale-img\">
                                            <a href=\"product-details.html\" title=\"Men’s White Short Item\">
                                                <img src=\"{{ asset('freak/') }}images/sale/2.jpg\" alt=\"\">
                                            </a>
                                            <div class=\"sale-shop\">
                                                <a href=\"#\">
                                                    <i class=\"zmdi zmdi-shopping-cart\"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-6\">
                                        <div class=\"product-content mt-60\">
                                            <a href=\"#\" title=\"Men’s White Short Item\">Men’s White Short Item</a>
                                            <div class=\"rating-icon\">
                                                <i class=\"zmdi zmdi-star\"></i>
                                                <i class=\"zmdi zmdi-star\"></i>
                                                <i class=\"zmdi zmdi-star\"></i>
                                                <i class=\"zmdi zmdi-star-half\"></i>
                                                <i class=\"zmdi zmdi-star-half\"></i>
                                            </div>
                                            <div class=\"product-price\">
                                                <span class=\"new-price\">£185.00</span>
                                                <span class=\"old-price\">£190.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"sinlge-sale clearfix\">
                                <div class=\"row\">
                                    <div class=\"col-xs-6\">
                                        <div class=\"sale-img\">
                                            <a href=\"product-details.html\" title=\"Men’s White Short Item\">
                                                <img src=\"{{ asset('freak/') }}images/sale/3.jpg\" alt=\"\">
                                            </a>
                                            <div class=\"sale-shop\">
                                                <a href=\"#\">
                                                    <i class=\"zmdi zmdi-shopping-cart\"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-6\">
                                        <div class=\"product-content mt-60\">
                                            <a href=\"#\" title=\"Men’s White Short Item\">Men’s White Short Item</a>
                                            <div class=\"rating-icon\">
                                                <i class=\"zmdi zmdi-star\"></i>
                                                <i class=\"zmdi zmdi-star\"></i>
                                                <i class=\"zmdi zmdi-star\"></i>
                                                <i class=\"zmdi zmdi-star-half\"></i>
                                                <i class=\"zmdi zmdi-star-half\"></i>
                                            </div>
                                            <div class=\"product-price\">
                                                <span class=\"new-price\">£185.00</span>
                                                <span class=\"old-price\">£190.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 col-sm-6\">
                        <div class=\"section-title text-uppercase mb-40\">
                            <h4>Top Rated</h4>
                        </div>
                        <div class=\"sale-list\">
                            <div class=\"sinlge-sale mb-30 clearfix\">
                                <div class=\"row\">
                                    <div class=\"col-xs-6\">
                                        <div class=\"sale-img\">
                                            <a href=\"product-details.html\" title=\"Men’s White Short Item\">
                                                <img src=\"{{ asset('freak/') }}images/sale/4.jpg\" alt=\"\">
                                            </a>
                                            <div class=\"sale-shop\">
                                                <a href=\"#\">
                                                    <i class=\"zmdi zmdi-shopping-cart\"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-6\">
                                        <div class=\"product-content mt-60\">
                                            <a href=\"#\" title=\"Men’s White Short Item\">Men’s White Short Item</a>
                                            <div class=\"rating-icon\">
                                                <i class=\"zmdi zmdi-star\"></i>
                                                <i class=\"zmdi zmdi-star\"></i>
                                                <i class=\"zmdi zmdi-star\"></i>
                                                <i class=\"zmdi zmdi-star-half\"></i>
                                                <i class=\"zmdi zmdi-star-half\"></i>
                                            </div>
                                            <div class=\"product-price\">
                                                <span class=\"new-price\">£185.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"sinlge-sale mb-30 clearfix\">
                                <div class=\"row\">
                                    <div class=\"col-xs-6\">
                                        <div class=\"sale-img\">
                                            <a href=\"product-details.html\" title=\"Men’s White Short Item\">
                                                <img src=\"{{ asset('freak/') }}images/sale/5.jpg\" alt=\"\">
                                            </a>
                                            <div class=\"sale-shop\">
                                                <a href=\"#\">
                                                    <i class=\"zmdi zmdi-shopping-cart\"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-6\">
                                        <div class=\"product-content mt-60\">
                                            <a href=\"#\" title=\"Men’s White Short Item\">Men’s White Short Item</a>
                                            <div class=\"rating-icon\">
                                                <i class=\"zmdi zmdi-star\"></i>
                                                <i class=\"zmdi zmdi-star\"></i>
                                                <i class=\"zmdi zmdi-star\"></i>
                                                <i class=\"zmdi zmdi-star-half\"></i>
                                                <i class=\"zmdi zmdi-star-half\"></i>
                                            </div>
                                            <div class=\"product-price\">
                                                <span class=\"new-price\">£185.00</span>
                                                <span class=\"old-price\">£190.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"sinlge-sale clearfix\">
                                <div class=\"row\">
                                    <div class=\"col-xs-6\">
                                        <div class=\"sale-img\">
                                            <a href=\"product-details.html\" title=\"Men’s White Short Item\">
                                                <img src=\"{{ asset('freak/') }}images/sale/6.jpg\" alt=\"\">
                                            </a>
                                            <div class=\"sale-shop\">
                                                <a href=\"#\">
                                                    <i class=\"zmdi zmdi-shopping-cart\"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-6\">
                                        <div class=\"product-content mt-60\">
                                            <a href=\"#\" title=\"Men’s White Short Item\">Men’s White Short Item</a>
                                            <div class=\"rating-icon\">
                                                <i class=\"zmdi zmdi-star\"></i>
                                                <i class=\"zmdi zmdi-star\"></i>
                                                <i class=\"zmdi zmdi-star\"></i>
                                                <i class=\"zmdi zmdi-star-half\"></i>
                                                <i class=\"zmdi zmdi-star-half\"></i>
                                            </div>
                                            <div class=\"product-price\">
                                                <span class=\"new-price\">£185.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 hidden-sm\">
                        <div class=\"offer-banner\">
                            <a href=\"#\">
                                <img src=\"{{ asset('freak/') }}images/sale/offer.jpg\" alt=\"\">
                            </a>
                            <!-- CountDown -->
                            <div class=\"product-cuntdown white-bg text-center\">
                                <div class=\"timer\">
                                    <div data-countdown=\"2018/06/01\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Of Sale  Area -->
        <!-- Start Testimonial Area -->
        <div class=\"testimonial-area\">
            <div id=\"particles-js\" class=\"pt-90 pb-50\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"testimonial-title text-white text-uppercase text-center mb-40\">
                                <h4>what customer saying</h4>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-offset-2 col-md-8\">
                            <div class=\"testimonial-list\">
                                <div class=\"single-testimonial text-center\">
                                    <img alt=\"\" src=\"{{ asset('freak/') }}images/testimonial/1.jpg\">
                                    <div class=\"testimonial-info white-bg clearfix\">
                                        <div class=\"testimonial-author text-uppercase\">
                                            <h5>ANIKA MOLLIK</h5>
                                            <p>chairmen</p>
                                        </div>
                                        <p>consectetur adipisicing elit, sed do eiusmod tempor  incididunt
                                            labore et dolore magna aliqua. Ut enim ad minim veniam,voluptate velit esse cillu nulla pariatur. Excepteur sint occaecat</p>
                                    </div>
                                </div>
                                <div class=\"single-testimonial text-center\">
                                    <img alt=\"\" src=\"{{ asset('freak/') }}images/testimonial/2.jpg\">
                                    <div class=\"testimonial-info white-bg clearfix\">
                                        <div class=\"testimonial-author text-uppercase\">
                                            <h5>Ashim Kumar</h5>
                                            <p>CEO</p>
                                        </div>
                                        <p>consectetur adipisicing elit, sed do eiusmod tempor  incididunt
                                            labore et dolore magna aliqua. Ut enim ad minim veniam,voluptate velit esse cillu nulla pariatur. Excepteur sint occaecat</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Testimonial Area -->
        <!-- Start Blog Area -->
        <div class=\"blog-area section-padding\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"section-title text-uppercase mb-40\">
                            <h4>latest blog</h4>
                        </div>
                    </div>
                </div>
                <div class=\"blog-list\">
                    <div class=\"row\">
                        <div class=\"col-md-4 col-sm-6\">
                            <div class=\"single-blog\">
                                <div class=\"blog-image\">
                                    <a href=\"#\">
                                        <img alt=\"\" src=\"{{ asset('freak/') }}images/blog/1.jpg\">
                                    </a>
                                </div>
                                <div class=\"blog-content pb-20 text-center\">
                                    <div class=\"date-added mb-20 pt-20\"><i class=\"zmdi zmdi-time mr-10\"></i>Date : 26 oct 2016 </div>
                                    <h5><a class=\"blog-title text-capitalize\" href=\"#\">Blog Post Dummy Title</a></h5>
                                    <div class=\"post-info-author mt-30\">
                                            <span class=\"author mr-20\">
                                                <i class=\"zmdi zmdi-account\"></i>
                                                By
                                                <a href=\"#\" title=\"Posts by admin\"> A Mollik </a>
                                            </span>
                                        <span class=\"comments-count mr-20\">
                                                <i class=\"zmdi zmdi-favorite\"></i>
                                                20 Likes
                                            </span>
                                        <span class=\"comments-count\">
                                                <i class=\"zmdi zmdi-comments\"></i>
                                                02 Comments
                                            </span>
                                    </div>
                                </div>
                                <div class=\"blog-content blog-content-overlay pb-20 text-center\">
                                    <div class=\"date-added mb-20 pt-20\"><i class=\"zmdi zmdi-time mr-10\"></i>Date : 26 oct 2016 </div>
                                    <h5><a class=\"blog-title text-capitalize\" href=\"#\">Blog Post Dummy Title</a></h5>
                                    <p>Adipisicing elit, sed do eiusmod tempor incididunt adipisicing elit, sed do eiusmod tempor incididunt dolore magna aliqua. Ut enim ad minim</p>
                                    <div class=\"post-info-author mt-30\">
                                            <span class=\"author mr-20\">
                                                <i class=\"zmdi zmdi-account\"></i>
                                                By
                                                <a href=\"#\" title=\"Posts by admin\"> A Mollik </a>
                                            </span>
                                        <span class=\"comments-count mr-20\">
                                                <i class=\"zmdi zmdi-favorite\"></i>
                                                20 Likes
                                            </span>
                                        <span class=\"comments-count\">
                                                <i class=\"zmdi zmdi-comments\"></i>
                                                02 Comments
                                            </span>
                                    </div>
                                    <a href=\"#\" class=\"button extra-small mt-60 text-uppercase\">
                                        <span>Read More</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4 col-sm-6\">
                            <div class=\"single-blog\">
                                <div class=\"blog-image\">
                                    <a href=\"#\">
                                        <img alt=\"\" src=\"{{ asset('freak/') }}images/blog/2.jpg\">
                                    </a>
                                </div>
                                <div class=\"blog-content pb-20 text-center\">
                                    <div class=\"date-added mb-20 pt-20\"><i class=\"zmdi zmdi-time mr-10\"></i>Date : 26 oct 2016 </div>
                                    <h5><a class=\"blog-title text-capitalize\" href=\"#\">Blog Post Dummy Title</a></h5>
                                    <div class=\"post-info-author mt-30\">
                                            <span class=\"author mr-20\">
                                                <i class=\"zmdi zmdi-account\"></i>
                                                By
                                                <a href=\"#\" title=\"Posts by admin\"> A Mollik </a>
                                            </span>
                                        <span class=\"comments-count mr-20\">
                                                <i class=\"zmdi zmdi-favorite\"></i>
                                                20 Likes
                                            </span>
                                        <span class=\"comments-count\">
                                                <i class=\"zmdi zmdi-comments\"></i>
                                                02 Comments
                                            </span>
                                    </div>
                                </div>
                                <div class=\"blog-content blog-content-overlay pb-20 text-center\">
                                    <div class=\"date-added mb-20 pt-20\"><i class=\"zmdi zmdi-time mr-10\"></i>Date : 26 oct 2016 </div>
                                    <h5><a class=\"blog-title text-capitalize\" href=\"#\">Blog Post Dummy Title</a></h5>
                                    <p>Adipisicing elit, sed do eiusmod tempor incididunt adipisicing elit, sed do eiusmod tempor incididunt dolore magna aliqua. Ut enim ad minim</p>
                                    <div class=\"post-info-author mt-30\">
                                            <span class=\"author mr-20\">
                                                <i class=\"zmdi zmdi-account\"></i>
                                                By
                                                <a href=\"#\" title=\"Posts by admin\"> A Mollik </a>
                                            </span>
                                        <span class=\"comments-count mr-20\">
                                                <i class=\"zmdi zmdi-favorite\"></i>
                                                20 Likes
                                            </span>
                                        <span class=\"comments-count\">
                                                <i class=\"zmdi zmdi-comments\"></i>
                                                02 Comments
                                            </span>
                                    </div>
                                    <a href=\"#\" class=\"button extra-small mt-60 text-uppercase\">
                                        <span>Read More</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4 hidden-sm\">
                            <div class=\"single-blog rm-0\">
                                <div class=\"blog-image\">
                                    <a href=\"#\">
                                        <img alt=\"\" src=\"{{ asset('freak/') }}images/blog/1.jpg\">
                                    </a>
                                </div>
                                <div class=\"blog-content pb-20 text-center\">
                                    <div class=\"date-added mb-20 pt-20\"><i class=\"zmdi zmdi-time mr-10\"></i>Date : 26 oct 2016 </div>
                                    <h5><a class=\"blog-title text-capitalize\" href=\"#\">Blog Post Dummy Title</a></h5>
                                    <div class=\"post-info-author mt-30\">
                                            <span class=\"author mr-20\">
                                                <i class=\"zmdi zmdi-account\"></i>
                                                By
                                                <a href=\"#\" title=\"Posts by admin\"> A Mollik </a>
                                            </span>
                                        <span class=\"comments-count mr-20\">
                                                <i class=\"zmdi zmdi-favorite\"></i>
                                                20 Likes
                                            </span>
                                        <span class=\"comments-count\">
                                                <i class=\"zmdi zmdi-comments\"></i>
                                                02 Comments
                                            </span>
                                    </div>
                                </div>
                                <div class=\"blog-content blog-content-overlay pb-20 text-center\">
                                    <div class=\"date-added mb-20 pt-20\"><i class=\"zmdi zmdi-time mr-10\"></i>Date : 26 oct 2016 </div>
                                    <h5><a class=\"blog-title text-capitalize\" href=\"#\">Blog Post Dummy Title</a></h5>
                                    <p>Adipisicing elit, sed do eiusmod tempor incididunt adipisicing elit, sed do eiusmod tempor incididunt dolore magna aliqua. Ut enim ad minim</p>
                                    <div class=\"post-info-author mt-30\">
                                            <span class=\"author mr-20\">
                                                <i class=\"zmdi zmdi-account\"></i>
                                                By
                                                <a href=\"#\" title=\"Posts by admin\"> A Mollik </a>
                                            </span>
                                        <span class=\"comments-count mr-20\">
                                                <i class=\"zmdi zmdi-favorite\"></i>
                                                20 Likes
                                            </span>
                                        <span class=\"comments-count\">
                                                <i class=\"zmdi zmdi-comments\"></i>
                                                02 Comments
                                            </span>
                                    </div>
                                    <a href=\"#\" class=\"button extra-small mt-60 text-uppercase\">
                                        <span>Read More</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Of Blog Area -->
        <!-- Start Brand Area -->
        <div class=\"brand-area pb-90\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"brand-list\">
                        <div class=\"col-md-12\">
                            <div class=\"single-brand text-center\">
                                <a href=\"#\">
                                    <img src=\"{{ asset('freak/') }}images/brand/1.png\" alt=\"\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"single-brand text-center\">
                                <a href=\"#\">
                                    <img src=\"{{ asset('freak/') }}images/brand/2.png\" alt=\"\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"single-brand text-center\">
                                <a href=\"#\">
                                    <img src=\"{{ asset('freak/') }}images/brand/3.png\" alt=\"\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"single-brand text-center\">
                                <a href=\"#\">
                                    <img src=\"{{ asset('freak/') }}images/brand/4.png\" alt=\"\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"single-brand text-center\">
                                <a href=\"#\">
                                    <img src=\"{{ asset('freak/') }}images/brand/5.png\" alt=\"\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"single-brand text-center\">
                                <a href=\"#\">
                                    <img src=\"{{ asset('freak/') }}images/brand/6.png\" alt=\"\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"single-brand text-center\">
                                <a href=\"#\">
                                    <img src=\"{{ asset('freak/') }}images/brand/1.png\" alt=\"\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"single-brand text-center\">
                                <a href=\"#\">
                                    <img src=\"{{ asset('freak/') }}images/brand/2.png\" alt=\"\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"single-brand text-center\">
                                <a href=\"#\">
                                    <img src=\"{{ asset('freak/') }}images/brand/3.png\" alt=\"\">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Of Brand Area -->
        <!-- Start Newsletter Area -->
        <div class=\"newsletter-area\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"newsletter-content default-bg clearfix ptb-40\">
                        <div class=\"col-md-offset-2 col-md-3 col-sm-5\">
                            <div class=\"newsletter-title text-white text-uppercase\">
                                <h4>NewsLetter Sign-Up</h4>
                            </div>
                        </div>
                        <div class=\"col-md-5 col-sm-7\">
                            <div class=\"signup-form\">
                                <form class=\"news-form\" action=\"#\">
                                    <input type=\"text\" placeholder=\"Enter your email address...\" class=\"f-form\">
                                    <button class=\"submit text-uppercase\">subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Of Newsletter Area -->
    </section>
{% endblock %}
", "default/index.html.twig", "/Applications/MAMP/htdocs/pi3/app/Resources/views/default/index.html.twig");
    }
}

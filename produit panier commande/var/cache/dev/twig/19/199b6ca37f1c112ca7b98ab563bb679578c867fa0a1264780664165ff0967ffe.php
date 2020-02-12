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

/* @Front/Produit/details_produitF.html.twig */
class __TwigTemplate_135194ebf81df7345981f94e95e02450361ed6410669e3c4fe88df133a498533 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Front/Produit/details_produitF.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Front/Produit/details_produitF.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Front/Produit/details_produitF.html.twig", 1);
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
                <section id=\"page-content\" class=\"page-wrapper\">
                    <!-- Start Shop Full Grid View -->
                    <div class=\"product-details-area section-padding\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-sm-5\">
                                    <div class=\"single-product-image\">
                                        <div id=\"product-img-content\">
                                            <div id=\"my-tab-content\" class=\"tab-content mb-30\">
                                                <div class=\"tab-pane b-img active\" id=\"view1\">
                                                    <a class=\"venobox\" href=\"#\"><img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("photos/" . ($context["image"] ?? $this->getContext($context, "image")))), "html", null, true);
        echo "\"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-7\">
                                    <div class=\"product-details-content\">
                                        <div class=\"product-content text-uppercase\">
                                            <h5>";
        // line 26
        echo twig_escape_filter($this->env, ($context["libelleP"] ?? $this->getContext($context, "libelleP")), "html", null, true);
        echo "</h5>
                                            <div class=\"rating-icon pb-30 mt-10\">
                                                <i class=\"zmdi zmdi-star\"></i>
                                                <i class=\"zmdi zmdi-star\"></i>
                                                <i class=\"zmdi zmdi-star\"></i>
                                                <i class=\"zmdi zmdi-star-half\"></i>
                                                <i class=\"zmdi zmdi-star-half\"></i>
                                            </div>
                                            <div class=\"product-price pb-30\">
                                                <span class=\"new-price\">";
        // line 35
        echo twig_escape_filter($this->env, ($context["prixVente"] ?? $this->getContext($context, "prixVente")), "html", null, true);
        echo " DT</span>
                                            </div>
                                        </div>
                                        <div class=\"product-view pb-30\">
                                            <h4 class=\"product-details-tilte text-uppercase\">categorie</h4>
                                            <p>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["categorie"] ?? $this->getContext($context, "categorie")), "libelleC", []), "html", null, true);
        echo "</p>
                                        </div>
                                        <div class=\"product-attributes clearfix\">
                                            <div id=\"quantity-wanted\" class=\"pull-left\">
                                                <h4 class=\"product-details-tilte text-uppercase pb-10\">quantity</h4>
                                                <input type=\"number\" class=\"cart-plus-minus-box\" value=\"1\">
                                            </div>
                                        </div>
                                        <br>
                                        <div class=\"product-action-shop text-center mb-40\">
                                            <a href=\"#\" title=\"Quick view\" data-toggle=\"modal\" data-target=\"#productModal\">
                                                <i class=\"zmdi zmdi-eye\"></i>
                                            </a>
                                            <a title=\"Add to cart\" href=\"#\">
                                                <i class=\"zmdi zmdi-shopping-cart\"></i>
                                            </a>
                                            <a title=\"Add to Wishlist\" href=\"#\">
                                                <i class=\"zmdi zmdi-favorite\"></i>
                                            </a>
                                        </div>
                                        <div class=\"socialsharing-product\">
                                            <h4 class=\"product-details-tilte text-uppercase pb-10\">share this on</h4>
                                            <button type=\"button\"><i class=\"zmdi zmdi-facebook\"></i></button>
                                            <button type=\"button\"><i class=\"zmdi zmdi-instagram\"></i></button>
                                            <button type=\"button\"><i class=\"zmdi zmdi-rss\"></i></button>
                                            <button type=\"button\"><i class=\"zmdi zmdi-twitter\"></i></button>
                                            <button type=\"button\"><i class=\"zmdi zmdi-pinterest\"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"product-details-content pt-90\">
                                        <div class=\"p-details-tab\">
                                            <ul class=\"nav nav-tabs text-uppercase mb-20\" role=\"tablist\">
                                                <li role=\"presentation\" class=\"active\"><a href=\"#description\" aria-controls=\"description\" role=\"tab\" data-toggle=\"tab\">Description</a></li>

                                            </ul>
                                        </div>
                                        <div class=\"clearfix\"></div>
                                        <div class=\"tab-content review\">
                                            <div role=\"tabpanel\" class=\"tab-pane active\" id=\"description\">
                                                <p>";
        // line 83
        echo twig_escape_filter($this->env, ($context["descripion"] ?? $this->getContext($context, "descripion")), "html", null, true);
        echo "</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>

            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Front/Produit/details_produitF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 83,  107 => 40,  99 => 35,  87 => 26,  75 => 17,  60 => 4,  51 => 3,  29 => 1,);
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
                <section id=\"page-content\" class=\"page-wrapper\">
                    <!-- Start Shop Full Grid View -->
                    <div class=\"product-details-area section-padding\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-sm-5\">
                                    <div class=\"single-product-image\">
                                        <div id=\"product-img-content\">
                                            <div id=\"my-tab-content\" class=\"tab-content mb-30\">
                                                <div class=\"tab-pane b-img active\" id=\"view1\">
                                                    <a class=\"venobox\" href=\"#\"><img src=\"{{ asset('photos/' ~ image) }}\"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-7\">
                                    <div class=\"product-details-content\">
                                        <div class=\"product-content text-uppercase\">
                                            <h5>{{ libelleP }}</h5>
                                            <div class=\"rating-icon pb-30 mt-10\">
                                                <i class=\"zmdi zmdi-star\"></i>
                                                <i class=\"zmdi zmdi-star\"></i>
                                                <i class=\"zmdi zmdi-star\"></i>
                                                <i class=\"zmdi zmdi-star-half\"></i>
                                                <i class=\"zmdi zmdi-star-half\"></i>
                                            </div>
                                            <div class=\"product-price pb-30\">
                                                <span class=\"new-price\">{{ prixVente }} DT</span>
                                            </div>
                                        </div>
                                        <div class=\"product-view pb-30\">
                                            <h4 class=\"product-details-tilte text-uppercase\">categorie</h4>
                                            <p>{{ categorie.libelleC }}</p>
                                        </div>
                                        <div class=\"product-attributes clearfix\">
                                            <div id=\"quantity-wanted\" class=\"pull-left\">
                                                <h4 class=\"product-details-tilte text-uppercase pb-10\">quantity</h4>
                                                <input type=\"number\" class=\"cart-plus-minus-box\" value=\"1\">
                                            </div>
                                        </div>
                                        <br>
                                        <div class=\"product-action-shop text-center mb-40\">
                                            <a href=\"#\" title=\"Quick view\" data-toggle=\"modal\" data-target=\"#productModal\">
                                                <i class=\"zmdi zmdi-eye\"></i>
                                            </a>
                                            <a title=\"Add to cart\" href=\"#\">
                                                <i class=\"zmdi zmdi-shopping-cart\"></i>
                                            </a>
                                            <a title=\"Add to Wishlist\" href=\"#\">
                                                <i class=\"zmdi zmdi-favorite\"></i>
                                            </a>
                                        </div>
                                        <div class=\"socialsharing-product\">
                                            <h4 class=\"product-details-tilte text-uppercase pb-10\">share this on</h4>
                                            <button type=\"button\"><i class=\"zmdi zmdi-facebook\"></i></button>
                                            <button type=\"button\"><i class=\"zmdi zmdi-instagram\"></i></button>
                                            <button type=\"button\"><i class=\"zmdi zmdi-rss\"></i></button>
                                            <button type=\"button\"><i class=\"zmdi zmdi-twitter\"></i></button>
                                            <button type=\"button\"><i class=\"zmdi zmdi-pinterest\"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"product-details-content pt-90\">
                                        <div class=\"p-details-tab\">
                                            <ul class=\"nav nav-tabs text-uppercase mb-20\" role=\"tablist\">
                                                <li role=\"presentation\" class=\"active\"><a href=\"#description\" aria-controls=\"description\" role=\"tab\" data-toggle=\"tab\">Description</a></li>

                                            </ul>
                                        </div>
                                        <div class=\"clearfix\"></div>
                                        <div class=\"tab-content review\">
                                            <div role=\"tabpanel\" class=\"tab-pane active\" id=\"description\">
                                                <p>{{ descripion }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>

            </div>
        </div>
    </section>
{% endblock %}", "@Front/Produit/details_produitF.html.twig", "C:\\wamp64\\www\\projet\\PI-DEV\\pi\\src\\FrontBundle\\Resources\\views\\Produit\\details_produitF.html.twig");
    }
}

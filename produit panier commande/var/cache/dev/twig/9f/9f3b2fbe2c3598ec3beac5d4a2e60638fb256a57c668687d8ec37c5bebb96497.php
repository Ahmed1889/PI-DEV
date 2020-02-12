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

/* @Front/Panier/commande.html.twig */
class __TwigTemplate_26e309cc296d90c1c898a0906352ac0c4f8673ba571edd8e7317aa7462ada180 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Front/Panier/commande.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Front/Panier/commande.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Front/Panier/commande.html.twig", 1);
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
        <!-- Start checkout Area -->
        <div class=\"checkout-area section-padding\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"billing-details-info azure-bg p-30\">
                            <div class=\"billing-title text-uppercase mb-30\">
                                <h5><strong>billing details</strong></h5>
                            </div>
                            <p class=\"form-row pb-20 m-0\">
                                <input type=\"text\" placeholder=\"Your Name\">
                            </p>
                            <p class=\"form-row pb-20 m-0\">
                                <input type=\"text\" placeholder=\"Enter Your Here\">
                            </p>
                            <p class=\"form-row pb-20 m-0\">
                                <input type=\"text\" placeholder=\"Phone Here\">
                            </p>
                            <p class=\"form-row pb-20 m-0\">
                                <input type=\"text\" placeholder=\"Company Name Here\">
                            </p>
                            <p class=\"form-row pb-20 m-0\">
                                <input type=\"text\" placeholder=\"Country\">
                            </p>
                            <p class=\"form-row pb-20 m-0\">
                                <input type=\"text\" placeholder=\"State\">
                            </p>
                            <p class=\"form-row pb-20 m-0\">
                                <input type=\"text\" placeholder=\"Town / City\">
                            </p>
                            <p class=\"form-row m-0\">
                                <textarea placeholder=\"Type Your Message\"></textarea>
                            </p>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"order-info azure-bg p-30\">
                            <div class=\"billing-title text-uppercase mb-15\">
                                <h5><strong>your order</strong></h5>
                            </div>
                            <table>
                                <tbody>
                                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 48
            echo "                                <tr>
                                    <th>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "libelleP", []), "html", null, true);
            echo "</th>
                                    <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "PrixVente", []), "html", null, true);
            echo " TND</td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                                <tr>
                                    <th>Women’s Blue T-Shirt</th>
                                    <td>£69.00</td>
                                </tr>
                                <tr>
                                    <th>Cart Subtotal</th>
                                    <td>£155.00</td>
                                </tr>
                                <tr>
                                    <th>Shipping and Handing</th>
                                    <td>£15.00</td>
                                </tr>
                                <tr>
                                    <th>Vat</th>
                                    <td>£00.00</td>
                                </tr>
                                <tr class=\"total\">
                                    <th>Order Total</th>
                                    <td>£325.00</td>
                                </tr>
                                </tbody>
                            </table>
                            <div class=\"billing-title text-uppercase mt-40 pb-30\">
                                <h5><strong>payment method</strong></h5>
                            </div>
                            <div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\" role=\"tab\" id=\"headingOne\">
                                        <h4 class=\"panel-title text-uppercase\">
                                            <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                                direct bank transfer
                                            </a>
                                        </h4>
                                    </div>
                                    <div id=\"collapseOne\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
                                        <div class=\"panel-body\">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                </div>
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\" role=\"tab\" id=\"headingTwo\">
                                        <h4 class=\"panel-title text-uppercase\">
                                            <a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                                                cheque payment
                                            </a>
                                        </h4>
                                    </div>
                                    <div id=\"collapseTwo\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">
                                        <div class=\"panel-body\">
                                            Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.
                                        </div>
                                    </div>
                                </div>
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\" role=\"tab\" id=\"headingThree\">
                                        <h4 class=\"panel-title text-uppercase\">
                                            <a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                                                paypal
                                            </a>
                                        </h4>
                                    </div>
                                    <div id=\"collapseThree\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree\">
                                        <div class=\"panel-body\">
                                            Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a title=\"Add to Cart\" href=\"";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficher_produitF");
        echo "\" class=\"button extra-small\">
                                <span>place order</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Of checkout Area -->

        <!-- Start Brand Area -->
        <div class=\"brand-area pb-90\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"brand-list\">
                        <div class=\"col-md-12\">
                            <div class=\"single-brand text-center\">
                                <a href=\"#\">
                                    <img src=\"images/brand/1.png\" alt=\"\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"single-brand text-center\">
                                <a href=\"#\">
                                    <img src=\"images/brand/2.png\" alt=\"\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"single-brand text-center\">
                                <a href=\"#\">
                                    <img src=\"images/brand/3.png\" alt=\"\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"single-brand text-center\">
                                <a href=\"#\">
                                    <img src=\"images/brand/4.png\" alt=\"\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"single-brand text-center\">
                                <a href=\"#\">
                                    <img src=\"images/brand/5.png\" alt=\"\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"single-brand text-center\">
                                <a href=\"#\">
                                    <img src=\"images/brand/6.png\" alt=\"\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"single-brand text-center\">
                                <a href=\"#\">
                                    <img src=\"images/brand/1.png\" alt=\"\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"single-brand text-center\">
                                <a href=\"#\">
                                    <img src=\"images/brand/2.png\" alt=\"\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"single-brand text-center\">
                                <a href=\"#\">
                                    <img src=\"images/brand/3.png\" alt=\"\">
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
        return "@Front/Panier/commande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 122,  125 => 53,  116 => 50,  112 => 49,  109 => 48,  105 => 47,  60 => 4,  51 => 3,  29 => 1,);
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
        <!-- Start checkout Area -->
        <div class=\"checkout-area section-padding\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"billing-details-info azure-bg p-30\">
                            <div class=\"billing-title text-uppercase mb-30\">
                                <h5><strong>billing details</strong></h5>
                            </div>
                            <p class=\"form-row pb-20 m-0\">
                                <input type=\"text\" placeholder=\"Your Name\">
                            </p>
                            <p class=\"form-row pb-20 m-0\">
                                <input type=\"text\" placeholder=\"Enter Your Here\">
                            </p>
                            <p class=\"form-row pb-20 m-0\">
                                <input type=\"text\" placeholder=\"Phone Here\">
                            </p>
                            <p class=\"form-row pb-20 m-0\">
                                <input type=\"text\" placeholder=\"Company Name Here\">
                            </p>
                            <p class=\"form-row pb-20 m-0\">
                                <input type=\"text\" placeholder=\"Country\">
                            </p>
                            <p class=\"form-row pb-20 m-0\">
                                <input type=\"text\" placeholder=\"State\">
                            </p>
                            <p class=\"form-row pb-20 m-0\">
                                <input type=\"text\" placeholder=\"Town / City\">
                            </p>
                            <p class=\"form-row m-0\">
                                <textarea placeholder=\"Type Your Message\"></textarea>
                            </p>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"order-info azure-bg p-30\">
                            <div class=\"billing-title text-uppercase mb-15\">
                                <h5><strong>your order</strong></h5>
                            </div>
                            <table>
                                <tbody>
                                {% for p in produits %}
                                <tr>
                                    <th>{{ p.libelleP }}</th>
                                    <td>{{ p.PrixVente }} TND</td>
                                </tr>
                                {% endfor %}
                                <tr>
                                    <th>Women’s Blue T-Shirt</th>
                                    <td>£69.00</td>
                                </tr>
                                <tr>
                                    <th>Cart Subtotal</th>
                                    <td>£155.00</td>
                                </tr>
                                <tr>
                                    <th>Shipping and Handing</th>
                                    <td>£15.00</td>
                                </tr>
                                <tr>
                                    <th>Vat</th>
                                    <td>£00.00</td>
                                </tr>
                                <tr class=\"total\">
                                    <th>Order Total</th>
                                    <td>£325.00</td>
                                </tr>
                                </tbody>
                            </table>
                            <div class=\"billing-title text-uppercase mt-40 pb-30\">
                                <h5><strong>payment method</strong></h5>
                            </div>
                            <div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\" role=\"tab\" id=\"headingOne\">
                                        <h4 class=\"panel-title text-uppercase\">
                                            <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                                direct bank transfer
                                            </a>
                                        </h4>
                                    </div>
                                    <div id=\"collapseOne\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
                                        <div class=\"panel-body\">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                    </div>
                                </div>
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\" role=\"tab\" id=\"headingTwo\">
                                        <h4 class=\"panel-title text-uppercase\">
                                            <a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                                                cheque payment
                                            </a>
                                        </h4>
                                    </div>
                                    <div id=\"collapseTwo\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">
                                        <div class=\"panel-body\">
                                            Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.
                                        </div>
                                    </div>
                                </div>
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\" role=\"tab\" id=\"headingThree\">
                                        <h4 class=\"panel-title text-uppercase\">
                                            <a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                                                paypal
                                            </a>
                                        </h4>
                                    </div>
                                    <div id=\"collapseThree\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree\">
                                        <div class=\"panel-body\">
                                            Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a title=\"Add to Cart\" href=\"{{ path('afficher_produitF') }}\" class=\"button extra-small\">
                                <span>place order</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Of checkout Area -->

        <!-- Start Brand Area -->
        <div class=\"brand-area pb-90\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"brand-list\">
                        <div class=\"col-md-12\">
                            <div class=\"single-brand text-center\">
                                <a href=\"#\">
                                    <img src=\"images/brand/1.png\" alt=\"\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"single-brand text-center\">
                                <a href=\"#\">
                                    <img src=\"images/brand/2.png\" alt=\"\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"single-brand text-center\">
                                <a href=\"#\">
                                    <img src=\"images/brand/3.png\" alt=\"\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"single-brand text-center\">
                                <a href=\"#\">
                                    <img src=\"images/brand/4.png\" alt=\"\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"single-brand text-center\">
                                <a href=\"#\">
                                    <img src=\"images/brand/5.png\" alt=\"\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"single-brand text-center\">
                                <a href=\"#\">
                                    <img src=\"images/brand/6.png\" alt=\"\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"single-brand text-center\">
                                <a href=\"#\">
                                    <img src=\"images/brand/1.png\" alt=\"\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"single-brand text-center\">
                                <a href=\"#\">
                                    <img src=\"images/brand/2.png\" alt=\"\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"single-brand text-center\">
                                <a href=\"#\">
                                    <img src=\"images/brand/3.png\" alt=\"\">
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
{% endblock %}", "@Front/Panier/commande.html.twig", "/Applications/MAMP/htdocs/pi3/src/FrontBundle/Resources/views/Panier/commande.html.twig");
    }
}

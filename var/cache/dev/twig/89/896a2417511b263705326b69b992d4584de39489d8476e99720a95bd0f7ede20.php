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
class __TwigTemplate_a28b81d5db84ed559a4e28b28ac6ff89c1ba06d85d8c1bb7a90aa89b7cfe06c4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascript' => [$this, 'block_javascript'],
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
                        <div class=\"order-info azure-bg p-30\">
                            <div class=\"billing-title text-uppercase mb-15\">
                                <h5><strong>your order</strong></h5>
                            </div>
                            <table>
                                <tbody>
                                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 18
            echo "                                <tr>
                                    <th>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "libelleP", []), "html", null, true);
            echo "</th>
                                    <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "PrixVente", []), "html", null, true);
            echo " TND</td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                                <tr class=\"old-price\">
                                    <th>Order Total</th>
                                    <td>";
        // line 25
        echo twig_escape_filter($this->env, ($context["total"] ?? $this->getContext($context, "total")), "html", null, true);
        echo "TND</td>
                                </tr>
                                ";
        // line 27
        if ((isset($context["totalReduit"]) || array_key_exists("totalReduit", $context))) {
            // line 28
            echo "                                    <tr class=\"total\">
                                        <th>Reduction value</th>
                                        <td>";
            // line 30
            echo twig_escape_filter($this->env, ($context["couponValue"] ?? $this->getContext($context, "couponValue")), "html", null, true);
            echo "%</td>
                                    </tr>
                                    <tr class=\"total\">
                                        <th>New Total</th>
                                        <td>";
            // line 34
            echo twig_escape_filter($this->env, ($context["totalReduit"] ?? $this->getContext($context, "totalReduit")), "html", null, true);
            echo "TND</td>
                                    </tr>
                                ";
        }
        // line 37
        echo "                                </tbody>
                            </table>

                            <div class=\"billing-title text-uppercase mt-40 pb-30\">
                                <h5><strong>payment method</strong></h5>
                            </div>
                            <div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\" role=\"tab\" id=\"headingOne\">
                                        <h4 class=\"panel-title text-uppercase\">
                                            <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                                Credit Card Payment
                                            </a>
                                        </h4>
                                    </div>
                                    <div id=\"collapseOne\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
                                        <div class=\"panel-body\">
                                            <script src=\"https://js.stripe.com/v3/\"></script>

                                            <form action=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("payer", ["total" => ($context["total"] ?? $this->getContext($context, "total"))]), "html", null, true);
        echo "\" method=\"post\" id=\"payment-form\">
                                                <div class=\"form-row\">

                                                    <div id=\"card-element\">
                                                        <!-- A Stripe Element will be inserted here. -->
                                                    </div>

                                                    <!-- Used to display Element errors. -->
                                                    <div id=\"card-errors\" role=\"alert\"></div>
                                                </div>
<br>
                                                <button class=\"button extra-small\">Submit Payment </button>
                                            </form>
                                            <script>
                                                var stripe = Stripe('pk_test_SwEiHkJiJHtohdFPEVeMkwXi00xrvXCpPF');
                                                var elements = stripe.elements();
                                                var style = {
                                                    base: {
                                                        // Add your base input styles here. For example:
                                                        fontSize: '16px',
                                                        color: '#32325d',
                                                    },
                                                };

                                                // Create an instance of the card Element.
                                                var card = elements.create('card', {style: style});

                                                // Add an instance of the card Element into the `card-element` <div>.
                                                card.mount('#card-element');
                                                // Create a token or display an error when the form is submitted.
                                                var form = document.getElementById('payment-form');
                                                form.addEventListener('submit', function(event) {
                                                    event.preventDefault();

                                                    stripe.createToken(card).then(function(result) {
                                                        if (result.error) {
                                                            // Inform the customer that there was an error.
                                                            var errorElement = document.getElementById('card-errors');
                                                            errorElement.textContent = result.error.message;
                                                        } else {
                                                            // Send the token to your server.
                                                            stripeTokenHandler(result.token);
                                                        }
                                                    });
                                                });
                                                function stripeTokenHandler(token) {
                                                    // Insert the token ID into the form so it gets submitted to the server
                                                    var form = document.getElementById('payment-form');
                                                    var hiddenInput = document.createElement('input');
                                                    hiddenInput.setAttribute('type', 'hidden');
                                                    hiddenInput.setAttribute('name', 'stripeToken');
                                                    hiddenInput.setAttribute('value', token.id);
                                                    form.appendChild(hiddenInput);

                                                    // Submit the form
                                                    form.submit();
                                                }

                                            </script>

                                            ";
        // line 116
        $this->displayBlock('javascript', $context, $blocks);
        // line 118
        echo "
                                        </div>
                                    </div>
                                </div>
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\" role=\"tab\" id=\"headingTwo\">
                                        <h4 class=\"panel-title text-uppercase\">
                                            <a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                                                Payment A la livraison
                                            </a>
                                        </h4>
                                    </div>
                                    <div id=\"collapseTwo\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">
                                        <div class=\"panel-body\">
                                            S'il vous plait , veuillez apporter le montant exact de votre commande.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a title=\"Add to Cart\" href=\"";
        // line 137
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

    // line 116
    public function block_javascript($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 117
        echo "                                            ";
        
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
        return array (  358 => 117,  349 => 116,  231 => 137,  210 => 118,  208 => 116,  145 => 56,  124 => 37,  118 => 34,  111 => 30,  107 => 28,  105 => 27,  100 => 25,  96 => 23,  87 => 20,  83 => 19,  80 => 18,  76 => 17,  61 => 4,  52 => 3,  30 => 1,);
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
                                <tr class=\"old-price\">
                                    <th>Order Total</th>
                                    <td>{{ total }}TND</td>
                                </tr>
                                {% if totalReduit is defined %}
                                    <tr class=\"total\">
                                        <th>Reduction value</th>
                                        <td>{{ couponValue }}%</td>
                                    </tr>
                                    <tr class=\"total\">
                                        <th>New Total</th>
                                        <td>{{ totalReduit }}TND</td>
                                    </tr>
                                {% endif  %}
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
                                                Credit Card Payment
                                            </a>
                                        </h4>
                                    </div>
                                    <div id=\"collapseOne\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
                                        <div class=\"panel-body\">
                                            <script src=\"https://js.stripe.com/v3/\"></script>

                                            <form action=\"{{ path('payer',{'total':total}) }}\" method=\"post\" id=\"payment-form\">
                                                <div class=\"form-row\">

                                                    <div id=\"card-element\">
                                                        <!-- A Stripe Element will be inserted here. -->
                                                    </div>

                                                    <!-- Used to display Element errors. -->
                                                    <div id=\"card-errors\" role=\"alert\"></div>
                                                </div>
<br>
                                                <button class=\"button extra-small\">Submit Payment </button>
                                            </form>
                                            <script>
                                                var stripe = Stripe('pk_test_SwEiHkJiJHtohdFPEVeMkwXi00xrvXCpPF');
                                                var elements = stripe.elements();
                                                var style = {
                                                    base: {
                                                        // Add your base input styles here. For example:
                                                        fontSize: '16px',
                                                        color: '#32325d',
                                                    },
                                                };

                                                // Create an instance of the card Element.
                                                var card = elements.create('card', {style: style});

                                                // Add an instance of the card Element into the `card-element` <div>.
                                                card.mount('#card-element');
                                                // Create a token or display an error when the form is submitted.
                                                var form = document.getElementById('payment-form');
                                                form.addEventListener('submit', function(event) {
                                                    event.preventDefault();

                                                    stripe.createToken(card).then(function(result) {
                                                        if (result.error) {
                                                            // Inform the customer that there was an error.
                                                            var errorElement = document.getElementById('card-errors');
                                                            errorElement.textContent = result.error.message;
                                                        } else {
                                                            // Send the token to your server.
                                                            stripeTokenHandler(result.token);
                                                        }
                                                    });
                                                });
                                                function stripeTokenHandler(token) {
                                                    // Insert the token ID into the form so it gets submitted to the server
                                                    var form = document.getElementById('payment-form');
                                                    var hiddenInput = document.createElement('input');
                                                    hiddenInput.setAttribute('type', 'hidden');
                                                    hiddenInput.setAttribute('name', 'stripeToken');
                                                    hiddenInput.setAttribute('value', token.id);
                                                    form.appendChild(hiddenInput);

                                                    // Submit the form
                                                    form.submit();
                                                }

                                            </script>

                                            {% block javascript %}
                                            {% endblock %}

                                        </div>
                                    </div>
                                </div>
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\" role=\"tab\" id=\"headingTwo\">
                                        <h4 class=\"panel-title text-uppercase\">
                                            <a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                                                Payment A la livraison
                                            </a>
                                        </h4>
                                    </div>
                                    <div id=\"collapseTwo\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">
                                        <div class=\"panel-body\">
                                            S'il vous plait , veuillez apporter le montant exact de votre commande.
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
{% endblock %}", "@Front/Panier/commande.html.twig", "C:\\xampp\\htdocs\\pi\\src\\FrontBundle\\Resources\\views\\Panier\\commande.html.twig");
    }
}

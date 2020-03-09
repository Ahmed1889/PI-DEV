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
class __TwigTemplate_b60f29c2d54ecce7493f97ce91d63eddb0973b31feaa71772d9d94b0eaf50d05 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'js' => [$this, 'block_js'],
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

    // line 2
    public function block_js($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 3
        echo "    <script>

        \$(document).ready(function(){

            /* 1. Visualizing things on Hover - See next part for action on click */
            \$('#stars td').on('mouseover', function(){
                var onStar = parseInt(\$(this).data('value'), 10); // The star currently mouse on

                // Now highlight all the stars that's not after the current hovered star
                \$(this).parent().children('td.star').each(function(e){
                    if (e < onStar) {
                        \$(this).addClass('hover');
                        \$(this).css(\"color\",\"gold\");
                    }
                    else {
                        \$(this).removeClass('hover');
                        \$(this).css(\"color\",\"\");
                    }
                });

            }).on('mouseout', function(){
                \$(this).parent().children('td.star').each(function(e){
                    \$(this).removeClass('hover');
                });
            });


            /* 2. Action to perform on click */
            \$('#stars td').on('click', function(){
                var onStar = parseInt(\$(this).data('value'), 10); // The star currently selected
                var stars = \$(this).parent().children('td.star');

                for (i = 0; i < stars.length; i++) {
                    \$(stars[i]).removeClass('selected');

                }

                for (i = 0; i < onStar; i++) {
                    \$(stars[i]).addClass('selected');
                    \$(stars[i]).css(\"color\",\"gold\");
                }

                // JUST RESPONSE (Not needed)
                var ratingValue = parseInt(\$('#stars td.selected').last().data('value'), 10);


                responseMessage(ratingValue);

            });


        });


        function responseMessage(ratingValue) {

            var event = \$('#event').val();
            \$.ajax({
                url: 'rating',
                type: \"POST\",
                dataType: \"json\",
                data: {
                    event: event ,
                    rating: ratingValue
                },
                async: true,
                success: function (data) {
                    if (ratingValue > 1) {
                        \$('#rating').html(\"Merci! Vous avez évalué ceci \" + ratingValue + \" étoiles.\");

                        \$('#RatingModel').modal('show');

                    }
                    else {
                        \$('#rating').html(\"Nous nous améliorerons. Vous avez évalué ceci \" + ratingValue + \" étoiles.\");

                        \$('#RatingModel').modal('show');
                    }
                }
            })

        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 87
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 88
        echo "
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
                                                    <a class=\"venobox\" href=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("photos/" . ($context["image"] ?? $this->getContext($context, "image")))), "html", null, true);
        echo "\"><img src=\"";
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
        // line 111
        echo twig_escape_filter($this->env, ($context["libelleP"] ?? $this->getContext($context, "libelleP")), "html", null, true);
        echo "</h5>

                                            <div class=\"product-price pb-30\">
                                                <span class=\"new-price\">";
        // line 114
        echo twig_escape_filter($this->env, ($context["prixVente"] ?? $this->getContext($context, "prixVente")), "html", null, true);
        echo " DT</span>
                                            </div>
                                        </div>
                                        <div class=\"product-view pb-30\">
                                            <h4 class=\"product-details-tilte text-uppercase\">categorie</h4>
                                            <p>";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute(($context["categorie"] ?? $this->getContext($context, "categorie")), "libelleC", []), "html", null, true);
        echo "</p>
                                        </div>

                                        <div class=\"product-view pb-30\">
                                            <i class=\"fas fa-eye\"></i>         <span class=\"new-price\">";
        // line 123
        echo twig_escape_filter($this->env, ($context["nbrVues"] ?? $this->getContext($context, "nbrVues")), "html", null, true);
        echo "</span>
                                        </div>
                                        <input id=\"event\" type=\"text\" value=\"";
        // line 125
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" hidden>

                                        <br>
                                        <div class=\"product-action-shop text-center mb-40\">
                                            <a title=\"Add to cart\" href=\"#\">
                                                <i class=\"zmdi zmdi-shopping-cart\"></i>
                                            </a>
                                        </div>

                                        <section class='rating-widget'>

                                            <!-- Rating Stars Box -->
                                            <div class='rating-stars'>
                                                <table id='stars'>
                                                    <td class='star' title='Poor' data-value='1'>
                                                        <i class='fa fa-star fa-fw'></i>
                                                    </td>
                                                    <td class='star' title='Fair' data-value='2'>
                                                        <i class='fa fa-star fa-fw'></i>
                                                    </td>
                                                    <td class='star' title='Good' data-value='3'>
                                                        <i class='fa fa-star fa-fw'></i>
                                                    </td>
                                                    <td class='star' title='Excellent' data-value='4'>
                                                        <i class='fa fa-star fa-fw'></i>
                                                    </td>
                                                    <td class='star' title='WOW!!!' data-value='5'>
                                                        <i class='fa fa-star fa-fw'></i>
                                                    </td>
                                                </table>
                                            </div>
                                        </section>
                                            <br><br><br>

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
                            <div class=\"product-view pb-30\">
                                <a href=\"";
        // line 171
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficher_produitF");
        echo "\" ><h4 class=\"product-details-tilte text-uppercase\">consulter la liste</h4></a>

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
        // line 187
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
    <div class=\"modal fade\" id=\"RatingModel\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\" style=\"background-color:#ffff99 \">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Succès!</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\" id=\"rating\">
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>

                </div>
            </div>
        </div>
    </div>

<style>
    /*-- Ratings --*/
.rating-stars{
    display: inline-block;
    direction: ltr;

}
    /*-- //Ratings --*/

</style>





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
        return array (  287 => 187,  268 => 171,  219 => 125,  214 => 123,  207 => 119,  199 => 114,  193 => 111,  179 => 102,  163 => 88,  154 => 87,  61 => 3,  52 => 2,  30 => 1,);
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
{% block js %}
    <script>

        \$(document).ready(function(){

            /* 1. Visualizing things on Hover - See next part for action on click */
            \$('#stars td').on('mouseover', function(){
                var onStar = parseInt(\$(this).data('value'), 10); // The star currently mouse on

                // Now highlight all the stars that's not after the current hovered star
                \$(this).parent().children('td.star').each(function(e){
                    if (e < onStar) {
                        \$(this).addClass('hover');
                        \$(this).css(\"color\",\"gold\");
                    }
                    else {
                        \$(this).removeClass('hover');
                        \$(this).css(\"color\",\"\");
                    }
                });

            }).on('mouseout', function(){
                \$(this).parent().children('td.star').each(function(e){
                    \$(this).removeClass('hover');
                });
            });


            /* 2. Action to perform on click */
            \$('#stars td').on('click', function(){
                var onStar = parseInt(\$(this).data('value'), 10); // The star currently selected
                var stars = \$(this).parent().children('td.star');

                for (i = 0; i < stars.length; i++) {
                    \$(stars[i]).removeClass('selected');

                }

                for (i = 0; i < onStar; i++) {
                    \$(stars[i]).addClass('selected');
                    \$(stars[i]).css(\"color\",\"gold\");
                }

                // JUST RESPONSE (Not needed)
                var ratingValue = parseInt(\$('#stars td.selected').last().data('value'), 10);


                responseMessage(ratingValue);

            });


        });


        function responseMessage(ratingValue) {

            var event = \$('#event').val();
            \$.ajax({
                url: 'rating',
                type: \"POST\",
                dataType: \"json\",
                data: {
                    event: event ,
                    rating: ratingValue
                },
                async: true,
                success: function (data) {
                    if (ratingValue > 1) {
                        \$('#rating').html(\"Merci! Vous avez évalué ceci \" + ratingValue + \" étoiles.\");

                        \$('#RatingModel').modal('show');

                    }
                    else {
                        \$('#rating').html(\"Nous nous améliorerons. Vous avez évalué ceci \" + ratingValue + \" étoiles.\");

                        \$('#RatingModel').modal('show');
                    }
                }
            })

        }
    </script>
{% endblock %}
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
                                                    <a class=\"venobox\" href=\"{{ asset('photos/' ~ image) }}\"><img src=\"{{ asset('photos/' ~ image) }}\"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-7\">
                                    <div class=\"product-details-content\">
                                        <div class=\"product-content text-uppercase\">
                                            <h5>{{ libelleP }}</h5>

                                            <div class=\"product-price pb-30\">
                                                <span class=\"new-price\">{{ prixVente }} DT</span>
                                            </div>
                                        </div>
                                        <div class=\"product-view pb-30\">
                                            <h4 class=\"product-details-tilte text-uppercase\">categorie</h4>
                                            <p>{{ categorie.libelleC }}</p>
                                        </div>

                                        <div class=\"product-view pb-30\">
                                            <i class=\"fas fa-eye\"></i>         <span class=\"new-price\">{{ nbrVues }}</span>
                                        </div>
                                        <input id=\"event\" type=\"text\" value=\"{{ id }}\" hidden>

                                        <br>
                                        <div class=\"product-action-shop text-center mb-40\">
                                            <a title=\"Add to cart\" href=\"#\">
                                                <i class=\"zmdi zmdi-shopping-cart\"></i>
                                            </a>
                                        </div>

                                        <section class='rating-widget'>

                                            <!-- Rating Stars Box -->
                                            <div class='rating-stars'>
                                                <table id='stars'>
                                                    <td class='star' title='Poor' data-value='1'>
                                                        <i class='fa fa-star fa-fw'></i>
                                                    </td>
                                                    <td class='star' title='Fair' data-value='2'>
                                                        <i class='fa fa-star fa-fw'></i>
                                                    </td>
                                                    <td class='star' title='Good' data-value='3'>
                                                        <i class='fa fa-star fa-fw'></i>
                                                    </td>
                                                    <td class='star' title='Excellent' data-value='4'>
                                                        <i class='fa fa-star fa-fw'></i>
                                                    </td>
                                                    <td class='star' title='WOW!!!' data-value='5'>
                                                        <i class='fa fa-star fa-fw'></i>
                                                    </td>
                                                </table>
                                            </div>
                                        </section>
                                            <br><br><br>

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
                            <div class=\"product-view pb-30\">
                                <a href=\"{{ path('afficher_produitF') }}\" ><h4 class=\"product-details-tilte text-uppercase\">consulter la liste</h4></a>

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
    <div class=\"modal fade\" id=\"RatingModel\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\" style=\"background-color:#ffff99 \">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Succès!</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\" id=\"rating\">
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>

                </div>
            </div>
        </div>
    </div>

<style>
    /*-- Ratings --*/
.rating-stars{
    display: inline-block;
    direction: ltr;

}
    /*-- //Ratings --*/

</style>





{% endblock %}", "@Front/Produit/details_produitF.html.twig", "C:\\xampp\\htdocs\\pi\\src\\FrontBundle\\Resources\\views\\Produit\\details_produitF.html.twig");
    }
}

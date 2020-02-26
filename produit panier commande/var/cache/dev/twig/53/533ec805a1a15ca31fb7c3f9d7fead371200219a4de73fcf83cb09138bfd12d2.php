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

/* @Front/Produit/affiche_produitF.html.twig */
class __TwigTemplate_9ed952b1e65864adb3e0a3417b148a295341a896bfd83c85f97bb2bd503595e2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Front/Produit/affiche_produitF.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Front/Produit/affiche_produitF.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Front/Produit/affiche_produitF.html.twig", 1);
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
    <br>
    <h2><strong>Liste de produits :</strong></h2>
    <br>
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produit"] ?? $this->getContext($context, "produit")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 11
            echo "
        <div class=\"product-list tab-content\">
            <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"home\">
        <div class=\"col-md-3 col-sm-4 col-xs-12\">
        <div class=\"single-product mb-40\">
            <div class=\"product-img-content mb-20\">
                <div class=\"product-img\">
                    <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("details_produitF", ["id" => $this->getAttribute($context["p"], "id", [])]), "html", null, true);
            echo "\">
                        <img class=\"imageproduit2\" src=\"";
            // line 19
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
                    <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouter_pr_pan", ["idd" => $this->getAttribute($context["p"], "id", [])]), "html", null, true);
            echo "\">
                        <i class=\"zmdi zmdi-shopping-cart\"></i>
                    </a>
                    <a href=\"#\" title=\"Add to Wishlist\">
                        <i class=\"zmdi zmdi-favorite\"></i>
                    </a>
                </div>
            </div>
            <div class=\"product-content text-center text-uppercase\">
                <a href=\"product-details.html\" >";
            // line 35
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
            // line 44
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
        // line 52
        echo "    </div>
    </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Front/Produit/affiche_produitF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 52,  122 => 44,  110 => 35,  98 => 26,  85 => 19,  81 => 18,  72 => 11,  68 => 10,  60 => 4,  51 => 3,  29 => 1,);
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
    <br>
    <h2><strong>Liste de produits :</strong></h2>
    <br>
        {% for p in produit %}

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
                    <a href=\"{{ path('ajouter_pr_pan',{'idd':p.id}) }}\">
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
    </section>
{% endblock %}", "@Front/Produit/affiche_produitF.html.twig", "/Applications/MAMP/htdocs/pi3/src/FrontBundle/Resources/views/Produit/affiche_produitF.html.twig");
    }
}

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

/* @Back/Default/afficherEmployer.html.twig */
class __TwigTemplate_7e1767370e8f98f9d4f7fdd8c25a4caaafc90e03f31c10e16ab5c05f979e7cf1 extends \Twig\Template
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
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Back/Default/afficherEmployer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Back/Default/afficherEmployer.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "@Back/Default/afficherEmployer.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <div class=\"container-fluid\">
    <div class=\"row\">
        <!-- Column -->
        <div class=\"col-md-6 col-lg-2 col-xlg-3\">
            <div class=\"card card-hover\">
                <div class=\"box bg-cyan text-center\">
                    <h1 class=\"font-light text-white\"><i class=\"fas fa-box-open\"></i></h1>
                    <h6 class=\"text-white\">Produits</h6>
                </div>
            </div>
        </div>

        <!-- Column -->
        <div class=\"col-md-6 col-lg-2 col-xlg-3\">
            <div class=\"card card-hover\">
                <div class=\"box bg-warning text-center\">
                    <h1 class=\"font-light text-white\"><i class=\"fas fa-shopping-cart\"></i></h1>
                    <h6 class=\"text-white\">Panier / Commandes </h6>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class=\"col-md-6 col-lg-2 col-xlg-3\">
            <div class=\"card card-hover\">
                <div class=\"box bg-danger text-center\">
                    <h1 class=\"font-light text-white\"><i class=\"fas fa-child\"></i></h1>
                    <h6 class=\"text-white\"><a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("employee_index");
        echo "\">Employés</a></h6>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class=\"col-md-6 col-lg-2 col-xlg-3\">
            <div class=\"card card-hover\">
                <div class=\"box bg-info text-center\">
                    <h1 class=\"font-light text-white\"><i class=\"fas fa-warehouse\"></i></h1>
                    <h6 class=\"text-white\">Stock</h6>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class=\"col-md-6 col-lg-2 col-xlg-3\">
            <div class=\"card card-hover\">
                <div class=\"box bg-success text-center\">
                    <h1 class=\"font-light text-white\"><i class=\"fas fa-dolly\"></i></h1>
                    <h6 class=\"text-white\">Fournisseurs</h6>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class=\"col-md-6 col-lg-2 col-xlg-3\">
            <div class=\"card card-hover\">
                <div class=\"box bg-warning text-center\">
                    <h1 class=\"font-light text-white\"><i class=\"fas fa-shipping-fast\"></i></h1>
                    <h6 class=\"text-white\">Livraison</h6>
                </div>
            </div>
        </div>
        <!-- Column -->

    </div>

    <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class=\"page-breadcrumb\">
            <div class=\"row\">
                <div class=\"col-12 d-flex no-block align-items-center\">
                    <h4 class=\"page-title\">Gestion des employès</h4>

                </div>
            </div>
        </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Back/Default/afficherEmployer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 30,  60 => 3,  51 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}
{% block body %}

    <div class=\"container-fluid\">
    <div class=\"row\">
        <!-- Column -->
        <div class=\"col-md-6 col-lg-2 col-xlg-3\">
            <div class=\"card card-hover\">
                <div class=\"box bg-cyan text-center\">
                    <h1 class=\"font-light text-white\"><i class=\"fas fa-box-open\"></i></h1>
                    <h6 class=\"text-white\">Produits</h6>
                </div>
            </div>
        </div>

        <!-- Column -->
        <div class=\"col-md-6 col-lg-2 col-xlg-3\">
            <div class=\"card card-hover\">
                <div class=\"box bg-warning text-center\">
                    <h1 class=\"font-light text-white\"><i class=\"fas fa-shopping-cart\"></i></h1>
                    <h6 class=\"text-white\">Panier / Commandes </h6>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class=\"col-md-6 col-lg-2 col-xlg-3\">
            <div class=\"card card-hover\">
                <div class=\"box bg-danger text-center\">
                    <h1 class=\"font-light text-white\"><i class=\"fas fa-child\"></i></h1>
                    <h6 class=\"text-white\"><a href=\"{{ path('employee_index') }}\">Employés</a></h6>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class=\"col-md-6 col-lg-2 col-xlg-3\">
            <div class=\"card card-hover\">
                <div class=\"box bg-info text-center\">
                    <h1 class=\"font-light text-white\"><i class=\"fas fa-warehouse\"></i></h1>
                    <h6 class=\"text-white\">Stock</h6>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class=\"col-md-6 col-lg-2 col-xlg-3\">
            <div class=\"card card-hover\">
                <div class=\"box bg-success text-center\">
                    <h1 class=\"font-light text-white\"><i class=\"fas fa-dolly\"></i></h1>
                    <h6 class=\"text-white\">Fournisseurs</h6>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class=\"col-md-6 col-lg-2 col-xlg-3\">
            <div class=\"card card-hover\">
                <div class=\"box bg-warning text-center\">
                    <h1 class=\"font-light text-white\"><i class=\"fas fa-shipping-fast\"></i></h1>
                    <h6 class=\"text-white\">Livraison</h6>
                </div>
            </div>
        </div>
        <!-- Column -->

    </div>

    <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class=\"page-breadcrumb\">
            <div class=\"row\">
                <div class=\"col-12 d-flex no-block align-items-center\">
                    <h4 class=\"page-title\">Gestion des employès</h4>

                </div>
            </div>
        </div>
{% endblock %}", "@Back/Default/afficherEmployer.html.twig", "C:\\xampp\\htdocs\\pi\\src\\BackBundle\\Resources\\views\\Default\\afficherEmployer.html.twig");
    }
}

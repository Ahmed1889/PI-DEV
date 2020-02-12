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

/* Default/indexBack.html.twig */
class __TwigTemplate_70f66342456077ce1154d5413d42ac0900d6e515e0e09e7a5308fb664bd7b18c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'bodyBack' => [$this, 'block_bodyBack'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseBack.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Default/indexBack.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Default/indexBack.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "Default/indexBack.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_bodyBack($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyBack"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyBack"));

        // line 3
        echo "<div class=\"page-breadcrumb\">
    <div class=\"row\">
        <div class=\"col-12 d-flex no-block align-items-center\">
            <h4 class=\"page-title\">Dashboard</h4>
            <div class=\"ml-auto text-right\">
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                        <li class=\"breadcrumb-item active\" aria-current=\"page\">Library</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class=\"container-fluid\">
    <!-- ============================================================== -->
    <!-- Sales Cards  -->
    <!-- ============================================================== -->
    <div class=\"row\">
        <!-- Column -->
        <div class=\"col-md-6 col-lg-2 col-xlg-3\">
            <div class=\"card card-hover\">
                <div class=\"box bg-cyan text-center\">
                    <h1 class=\"font-light text-white\"><i class=\"fas fa-box-open\"></i></h1>
                    <h6 class=\"text-white\">produits</h6>
                </div>
            </div>
        </div>

        <!-- Column -->
        <div class=\"col-md-6 col-lg-2 col-xlg-3\">
            <div class=\"card card-hover\">
                <div class=\"box bg-warning text-center\">
                    <h1 class=\"font-light text-white\"><i class=\"fas fa-shopping-cart\"></i></h1>
                    <h6 class=\"text-white\">panier / commandes </h6>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class=\"col-md-6 col-lg-2 col-xlg-3\">
            <div class=\"card card-hover\">
                <div class=\"box bg-danger text-center\">
                    <h1 class=\"font-light text-white\"><i class=\"fas fa-child\"></i></h1>
                    <h6 class=\"text-white\">employés</h6>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class=\"col-md-6 col-lg-2 col-xlg-3\">
            <div class=\"card card-hover\">
                <div class=\"box bg-info text-center\">
                    <h1 class=\"font-light text-white\"><i class=\"fas fa-warehouse\"></i></h1>
                    <h6 class=\"text-white\">stock</h6>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class=\"col-md-6 col-lg-2 col-xlg-3\">
            <div class=\"card card-hover\">
                <div class=\"box bg-success text-center\">
                    <h1 class=\"font-light text-white\"><i class=\"fas fa-dolly\"></i></h1>
                    <h6 class=\"text-white\">fournisseurs</h6>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class=\"col-md-6 col-lg-2 col-xlg-3\">
            <div class=\"card card-hover\">
                <div class=\"box bg-warning text-center\">
                    <h1 class=\"font-light text-white\"><i class=\"fas fa-shipping-fast\"></i></h1>
                    <h6 class=\"text-white\">livraison</h6>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    <!-- ============================================================== -->
    <!-- Sales chart -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- Sales chart -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Recent comment and chats -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- Recent comment and chats -->
    <!-- ============================================================== -->
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Default/indexBack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 3,  51 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}
{% block bodyBack %}
<div class=\"page-breadcrumb\">
    <div class=\"row\">
        <div class=\"col-12 d-flex no-block align-items-center\">
            <h4 class=\"page-title\">Dashboard</h4>
            <div class=\"ml-auto text-right\">
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                        <li class=\"breadcrumb-item active\" aria-current=\"page\">Library</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class=\"container-fluid\">
    <!-- ============================================================== -->
    <!-- Sales Cards  -->
    <!-- ============================================================== -->
    <div class=\"row\">
        <!-- Column -->
        <div class=\"col-md-6 col-lg-2 col-xlg-3\">
            <div class=\"card card-hover\">
                <div class=\"box bg-cyan text-center\">
                    <h1 class=\"font-light text-white\"><i class=\"fas fa-box-open\"></i></h1>
                    <h6 class=\"text-white\">produits</h6>
                </div>
            </div>
        </div>

        <!-- Column -->
        <div class=\"col-md-6 col-lg-2 col-xlg-3\">
            <div class=\"card card-hover\">
                <div class=\"box bg-warning text-center\">
                    <h1 class=\"font-light text-white\"><i class=\"fas fa-shopping-cart\"></i></h1>
                    <h6 class=\"text-white\">panier / commandes </h6>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class=\"col-md-6 col-lg-2 col-xlg-3\">
            <div class=\"card card-hover\">
                <div class=\"box bg-danger text-center\">
                    <h1 class=\"font-light text-white\"><i class=\"fas fa-child\"></i></h1>
                    <h6 class=\"text-white\">employés</h6>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class=\"col-md-6 col-lg-2 col-xlg-3\">
            <div class=\"card card-hover\">
                <div class=\"box bg-info text-center\">
                    <h1 class=\"font-light text-white\"><i class=\"fas fa-warehouse\"></i></h1>
                    <h6 class=\"text-white\">stock</h6>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class=\"col-md-6 col-lg-2 col-xlg-3\">
            <div class=\"card card-hover\">
                <div class=\"box bg-success text-center\">
                    <h1 class=\"font-light text-white\"><i class=\"fas fa-dolly\"></i></h1>
                    <h6 class=\"text-white\">fournisseurs</h6>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class=\"col-md-6 col-lg-2 col-xlg-3\">
            <div class=\"card card-hover\">
                <div class=\"box bg-warning text-center\">
                    <h1 class=\"font-light text-white\"><i class=\"fas fa-shipping-fast\"></i></h1>
                    <h6 class=\"text-white\">livraison</h6>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    <!-- ============================================================== -->
    <!-- Sales chart -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- Sales chart -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Recent comment and chats -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- Recent comment and chats -->
    <!-- ============================================================== -->
</div>
{% endblock %}", "Default/indexBack.html.twig", "C:\\wamp64\\www\\projet\\PI-DEV\\pi\\app\\Resources\\views\\default\\indexBack.html.twig");
    }
}

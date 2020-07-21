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

/* base2.html.twig */
class __TwigTemplate_2d6b25e07abf22e3957041fdd07ad71cc74b62651ed9390a5b4684cb68bb7f26 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'notif' => [$this, 'block_notif'],
            'bodyBack' => [$this, 'block_bodyBack'],
            'body' => [$this, 'block_body'],
            'js2' => [$this, 'block_js2'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html dir=\"ltr\" lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <!-- Favicon icon -->
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "assets/images/favicon.png\">
    <title>Matrix Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "assets/libs/flot/css/float-chart.css\" rel=\"stylesheet\">
    <!-- Custom CSS -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "dist/css/style.min.css\" rel=\"stylesheet\">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>


<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class=\"preloader\">
    <div class=\"lds-ripple\">
        <div class=\"lds-pos\"></div>
        <div class=\"lds-pos\"></div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id=\"main-wrapper\">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class=\"topbar\" data-navbarbg=\"skin5\">
        <nav class=\"navbar top-navbar navbar-expand-md navbar-dark\">
            <div class=\"navbar-header\" data-logobg=\"skin5\">
                <!-- This is for the sidebar toggle which is visible on mobile only -->
                <a class=\"nav-toggler waves-effect waves-light d-block d-md-none\" href=\"javascript:void(0)\"><i class=\"ti-menu ti-close\"></i></a>
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <a id=\"asss\" class=\"navbar-brand\" href=\"\">
                    <!-- Logo icon -->
                    <b class=\"logo-icon p-l-10\">
                        <!--You can put here icon as well // <i class=\"wi wi-sunset\"></i> //-->
                        <!-- Dark Logo icon -->
                        <img style=\"height: 100px ;width: 100px\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("photos/abc.png"), "html", null, true);
        echo "\" alt=\"homepage\" class=\"light-logo\" />

                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span class=\"logo-text\">
                            ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "username", []), "html", null, true);
        echo "


                        </span>
                    <!-- Logo icon -->
                    <!-- <b class=\"logo-icon\"> -->
                    <!--You can put here icon as well // <i class=\"wi wi-sunset\"></i> //-->
                    <!-- Dark Logo icon -->
                    <!-- <img src=\"../../assets/images/logo-text.png\" alt=\"homepage\" class=\"light-logo\" /> -->

                    <!-- </b> -->
                    <!--End Logo icon -->
                </a>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Toggle which is visible on mobile only -->
                <!-- ============================================================== -->
                <a class=\"topbartoggler d-block d-md-none waves-effect waves-light\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><i class=\"ti-more\"></i></a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class=\"navbar-collapse collapse\" id=\"navbarSupportedContent\" data-navbarbg=\"skin5\">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class=\"navbar-nav float-left mr-auto\">
                    <li class=\"nav-item d-none d-md-block\"><a class=\"nav-link sidebartoggler waves-effect waves-light\" href=\"javascript:void(0)\" data-sidebartype=\"mini-sidebar\"><i class=\"mdi mdi-menu font-24\"></i></a></li>
                    <!-- ============================================================== -->
                    <!-- create new -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->
                    <li class=\"nav-item search-box\"> <a class=\"nav-link waves-effect waves-dark\" href=\"javascript:void(0)\"><i class=\"ti-search\"></i></a>
                        <form class=\"app-search position-absolute\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Search &amp; enter\"> <a class=\"srh-btn\"><i class=\"ti-close\"></i></a>
                        </form>
                    </li>
                </ul>
                <!-- ============================================================== -->
                <!-- Right side toggle and nav items -->
                <!-- ============================================================== -->
                <ul class=\"navbar-nav float-right\">
                    <!-- ============================================================== -->
                    <!-- Comment -->
                    <!-- ============================================================== -->
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle waves-effect waves-dark\" href=\"\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"mdi mdi-bell font-24\" style=\"color: orange\"><span class=\"badge badge-pill badge-danger\">";
        // line 117
        if ((isset($context["count"]) || array_key_exists("count", $context))) {
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
        }
        echo "</span></i></a>

                        <div class=\"dropdown-menu dropdown-menu-right mailbox animated bounceInDown\" aria-labelledby=\"2\">

                            ";
        // line 121
        if ((isset($context["not1"]) || array_key_exists("not1", $context))) {
            // line 122
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["not1"] ?? $this->getContext($context, "not1")));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 123
                echo "                                <p style=\"border: 2px\"><i style=\"color:#EBC72F;font-size: 17px;\" class=\"fa fa-bell\"></i>    L'employé <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["c"], "idEmployee", []), "nom", []), "html", null, true);
                echo "</strong> demande un congé <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "type", []), "html", null, true);
                echo "</strong> de ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["c"], "dateDebut", []), "Y-m-d"), "html", null, true);
                echo " jusqu'à ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["c"], "dateFin", []), "Y-m-d"), "html", null, true);
                echo " <strong> en attente...</strong></p><br>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "                            ";
        }
        // line 126
        echo "                            <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("traiter");
        echo "\" style=\"color: red\">Voir plus...</a><br>

                            ";
        // line 128
        $this->displayBlock('notif', $context, $blocks);
        // line 130
        echo "                        </div>
                    </li>

                    <!-- ============================================================== -->
                    <!-- End Comment -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Messages -->
                    <!-- ============================================================== -->
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle waves-effect waves-dark\" href=\"\" id=\"2\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"font-24 mdi mdi-comment-processing\"></i>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right mailbox animated bounceInDown\" aria-labelledby=\"2\">
                            <ul class=\"list-style-none\">
                                <li>
                                    <div class=\"\">
                                        <!-- Message -->
                                        <a href=\"javascript:void(0)\" class=\"link border-top\">
                                            ";
        // line 148
        if ((isset($context["post"]) || array_key_exists("post", $context))) {
            // line 149
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["post"] ?? $this->getContext($context, "post")));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 150
                echo "                                            <div class=\"d-flex no-block align-items-center p-10\">

                                                <span class=\"btn btn-success btn-circle\"><i class=\"ti-calendar\"></i></span>
                                                <div class=\"m-l-10\">




                                                    <h5 class=\"m-b-0\"> L'employé <strong>";
                // line 158
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "poster", []), "username", []), "html", null, true);
                echo "</strong></h5>
                                                   <span class=\"mail-desc\" style=\"border: 2px;color: #005cbf\">    a posté dans le sujet : <strong>";
                // line 159
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "topic", []), "title", []), "html", null, true);
                echo "</strong></span><br>


                                                </div>

                                            </div>

                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 167
            echo "                                            ";
        }
        // line 168
        echo "                                            <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discutea_forum_homepage");
        echo "\" style=\"color: red\">Voir plus...</a>
                                        </a>
                                        <!-- Message -->

                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Messages -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic\"  data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"fa fa-user\">  ";
        // line 185
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "username", []), "html", null, true);
        echo "</span></a>
                        <div class=\"dropdown-menu dropdown-menu-right user-dd animated\">
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\"><i class=\"ti-user m-r-5 m-l-5\"></i> My Profile</a>
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\"><i class=\"ti-wallet m-r-5 m-l-5\"></i> My Balance</a>
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\"><i class=\"ti-email m-r-5 m-l-5\"></i> Inbox</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\"><i class=\"ti-settings m-r-5 m-l-5\"></i> Account Setting</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"";
        // line 193
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"><i class=\"fa fa-power-off m-r-5 m-l-5\"></i> Logout</a>
                            <div class=\"dropdown-divider\"></div>
                            <div class=\"p-l-30 p-10\"><a href=\"javascript:void(0)\" class=\"btn btn-sm btn-success btn-rounded\">View Profile</a></div>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                </ul>
            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside id=\"ass\" class=\"left-sidebar\" data-sidebarbg=\"skin5\">
        <!-- Sidebar scroll-->
        <div class=\"scroll-sidebar\">
            <!-- Sidebar navigation-->
            <nav class=\"sidebar-nav\">
                <ul id=\"sidebarnav\" class=\"p-t-30\">

                    ";
        // line 218
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 219
            echo "                        <li class=\"sidebar-item\"> <a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notifier");
            echo "\" aria-expanded=\"false\"><i class=\"fas fa-home\"></i><span class=\"hide-menu\">Acceuil Admin</span></a></li>
                    ";
        }
        // line 221
        echo "                    <li class=\"sidebar-item\"> <a class=\"sidebar-link has-arrow waves-effect waves-dark\" href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"fas fa-box-open\"></i><span class=\"hide-menu\">Gestion produits</span></a>
                        <ul aria-expanded=\"false\" class=\"collapse  first-level\">
                            <li class=\"sidebar-item\"><a href=\"";
        // line 223
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajout_categorie");
        echo "\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> ajouter categorie </span></a></li>
                            <li class=\"sidebar-item\"><a href=\"";
        // line 224
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficher_categorie");
        echo "\" class=\"sidebar-link\"><i class=\"fas fa-list\"></i><span class=\"hide-menu\"> lister categories </span></a></li>
                            <li class=\"sidebar-item\"><a href=\"";
        // line 225
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajout_produit");
        echo "\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> ajouter produit </span></a></li>
                            <li class=\"sidebar-item\"><a href=\"";
        // line 226
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficher_produit");
        echo "\" class=\"sidebar-link\"><i class=\"fas fa-list\"></i><span class=\"hide-menu\"> lister produits </span></a></li>
                            <li class=\"sidebar-item\"><a href=\"";
        // line 227
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajout_stock");
        echo "\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> ajouter stock </span></a></li>
                            <li class=\"sidebar-item\"><a href=\"";
        // line 228
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficher_stock");
        echo "\" class=\"sidebar-link\"><i class=\"fas fa-list\"></i><span class=\"hide-menu\"> lister stocks </span></a></li>
                        </ul>

                    </li>
                    <li class=\"sidebar-item\"> <a class=\"sidebar-link has-arrow waves-effect waves-dark\" href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"fas fa-shopping-cart\"></i><span class=\"hide-menu\">Gestion Commandes </span></a>
                        <ul aria-expanded=\"false\" class=\"collapse  first-level\">
                            <li class=\"sidebar-item\"><a href=\"";
        // line 234
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bonreduction_index");
        echo "\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\">Bons De Reductions</span></a></li>
                            <li class=\"sidebar-item\"><a href=\"";
        // line 235
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affichercommande");
        echo "\" class=\"sidebar-link\"><i class=\"fas fa-list\"></i><span class=\"hide-menu\">Historique Commandes </span></a></li>
                        </ul>
                    </li>
                    <li class=\"sidebar-item\"> <a class=\"sidebar-link has-arrow waves-effect waves-dark\" href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"fas fa-child\"></i><span class=\"hide-menu\">Gestion employés </span></a>
                        <ul aria-expanded=\"false\" class=\"collapse  first-level\">
                            ";
        // line 240
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 241
            echo "                            <li class=\"sidebar-item\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("employee_index");
            echo "\" class=\"sidebar-link\"><i class=\"fas fa-child\"></i><span class=\"hide-menu\">Personnel</span></a></li>
                            ";
        }
        // line 243
        echo "                            <li class=\"sidebar-item\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conge_new");
        echo "\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\">Nouveau Congé</span></a></li>

                            <li class=\"sidebar-item\"><a href=\"";
        // line 245
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conge_index");
        echo "\" class=\"sidebar-link\"><i class=\"fas fa-list\"></i><span class=\"hide-menu\">Liste Des Congés</span></a></li>
                            ";
        // line 246
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 247
            echo "                            <li class=\"sidebar-item\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("traiter");
            echo "\" class=\"sidebar-link\"><i class=\"fas fa-check\"></i><span class=\"hide-menu\">Traiter Les Congés</span></a></li>
                            ";
        }
        // line 249
        echo "

                        </ul>
                    </li>
                    <li class=\"sidebar-item\"> <a class=\"sidebar-link has-arrow waves-effect waves-dark\" href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"fas fa-warehouse\"></i><span class=\"hide-menu\">Gestion stock </span></a>
                        <ul aria-expanded=\"false\" class=\"collapse  first-level\">
                            <li class=\"sidebar-item\"><a href=\"";
        // line 255
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("depot_new");
        echo "\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> Ajouter depot </span></a></li>
                            <li class=\"sidebar-item\"><a href=\"";
        // line 256
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("representant_new");
        echo "\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> Ajouter representant </span></a></li>
                            <li class=\"sidebar-item\"><a href=\"";
        // line 257
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("depot_index");
        echo "\" class=\"sidebar-link\"><i class=\"fas fa-list\"></i><span class=\"hide-menu\"> Liste des depots </span></a></li>
                            <li class=\"sidebar-item\"><a href=\"";
        // line 258
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("representant_index");
        echo "\" class=\"sidebar-link\"><i class=\"fas fa-list\"></i><span class=\"hide-menu\"> Liste des representants </span></a></li>
                        </ul>
                    </li>
                    <li class=\"sidebar-item\"> <a class=\"sidebar-link has-arrow waves-effect waves-dark\" href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"fas fa-dolly\"></i><span class=\"hide-menu\">Gestion fournisseurs </span></a>
                        <ul aria-expanded=\"false\" class=\"collapse  first-level\">
                            <li class=\"sidebar-item\"><a href=\"";
        // line 263
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fournisseur_index");
        echo "\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> Liste Fournisseurs </span></a></li>
                            <li class=\"sidebar-item\"><a href=\"";
        // line 264
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("historique_index");
        echo "\" class=\"sidebar-link\"><i class=\"fas fa-list\"></i><span class=\"hide-menu\"> Historique </span></a></li>
                            <li class=\"sidebar-item\"><a href=\"";
        // line 265
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commandef_index");
        echo "\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> Liste Commande </span></a></li>
                            <li class=\"sidebar-item\"><a href=\"";
        // line 266
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("statistique");
        echo "\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> Statistique </span></a></li>
                        </ul>
                    </li>

                    <li class=\"sidebar-item\"> <a class=\"sidebar-link has-arrow waves-effect waves-dark\" href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"fas fa-shipping-fast\"></i><span class=\"hide-menu\">Gestion livraison </span></a>
                        <ul aria-expanded=\"false\" class=\"collapse  first-level\">
                            ";
        // line 272
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") == false)) {
            // line 273
            echo "                                <li class=\"sidebar-item\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affichePlannigDay");
            echo "\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> Planning du jour </span></a></li>
                                <li class=\"sidebar-item\"><a href=\"";
            // line 274
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AfficherPlanning");
            echo "\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> Calendrier Planning livreur </span></a></li>
                            ";
        }
        // line 276
        echo "                            ";
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_LIVREUR") == false)) {
            // line 277
            echo "                                <li class=\"sidebar-item\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajoutTypeVehicule");
            echo "\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> ajouter type vehicule </span></a></li>
                                <li class=\"sidebar-item\"><a href=\"";
            // line 278
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficherTypeVehicules");
            echo "\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> Liste  des types des vehicules </span></a></li>
                                <li class=\"sidebar-item\"><a href=\"";
            // line 279
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficheVehicule");
            echo "\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> Liste  des vehicules </span></a></li>
                                <li class=\"sidebar-item\"><a href=\"";
            // line 280
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajoutVehicule");
            echo "\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> ajouter des vehicules </span></a></li>
                                <li class=\"sidebar-item\"><a href=\"";
            // line 281
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Panne");
            echo "\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> Disponibilité vehicules </span></a></li>
                                <li class=\"sidebar-item\"><a href=\"";
            // line 282
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AfficherPlanningAdmin");
            echo "\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> Consulter Planning des livreurs </span></a></li>
                                <li class=\"sidebar-item\"><a href=\"";
            // line 283
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficherCommandeNonLivre");
            echo "\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> Liste commande non livrée </span></a></li>
                            ";
        }
        // line 285
        echo "                            <li class=\"sidebar-item\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stat");
        echo "\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> Statistique </span></a></li>
                        </ul>
                    </li>
                    <li class=\"sidebar-item\"> <a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"#\" aria-expanded=\"false\"><i class=\"fas fa-comments\"></i><span class=\"hide-menu\">Forum</span></a>
                        <ul aria-expanded=\"false\" class=\"collapse  first-level\">
                            <li class=\"sidebar-item\"><a href=\"";
        // line 290
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discutea_forum_homepage");
        echo "\" class=\"sidebar-link\"><i class=\"fas fa-bars\"></i><span class=\"hide-menu\"> Acceuil </span></a></li>
                            ";
        // line 291
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_EMPLOYE")) {
            // line 292
            echo "                            <li class=\"sidebar-item\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discutea_forum_create_category");
            echo "\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> Ajouter Categorie </span></a></li>
                            ";
        }
        // line 294
        echo "                        </ul>
                    </li>
                    ";
        // line 296
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 297
            echo "                    <li class=\"sidebar-item\"> <a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discutea_forum_admin_dashboard");
            echo "\" aria-expanded=\"false\"><i class=\"mdi mdi-chart-bar\"></i><span class=\"hide-menu\">Forum Admin</span></a></li>
                    ";
        }
        // line 299
        echo "                    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 300
            echo "                        <li class=\"sidebar-item\"> <a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("traiterr");
            echo "\" aria-expanded=\"false\"><i class=\"fas fa-tags\"></i><span class=\"hide-menu\">Reclamations</span></a></li>
                        <li class=\"sidebar-item\"> <a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"";
            // line 301
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ReclamationLivraison");
            echo "\" aria-expanded=\"false\"><i class=\"fas fa-tags\"></i><span class=\"hide-menu\">Reclamations Livraisons</span></a></li>

                    ";
        }
        // line 304
        echo "



                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class=\"page-wrapper\">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class=\"page-breadcrumb\">
            <div class=\"row\">
                <div class=\"col-12 d-flex no-block align-items-center\">

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
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class=\"container-fluid\">
            <!-- ============================================================== -->
            <!-- Sales Cards  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Sales chart -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- Sales chart -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Recent comment and chats -->
            <!-- ============================================================== -->


            <div class=\"container-fluid\">

                ";
        // line 363
        $this->displayBlock('bodyBack', $context, $blocks);
        // line 366
        echo "
            </div>
            ";
        // line 368
        $this->displayBlock('body', $context, $blocks);
        // line 372
        echo "

            <!-- ============================================================== -->
            <!-- Recent comment and chats -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->


    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class=\"footer text-center\">
        All Rights Reserved by DepotMagic. Designed and Developed by <a href=\"https://wrappixel.com\">CTRL C & CTRL V</a>.
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/libs/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/libs/popper.js/dist/umd/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/libs/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/extra-libs/sparkline/sparkline.js"), "html", null, true);
        echo "\"></script>
<!--Wave Effects -->
<script src=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/js/waves.js"), "html", null, true);
        echo "\"></script>
<!--Menu sidebar -->
<script src=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/js/sidebarmenu.js"), "html", null, true);
        echo "\"></script>
<!--Custom JavaScript -->
<script src=\"";
        // line 420
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/js/custom.min.js"), "html", null, true);
        echo "\"></script>
<!--This page JavaScript -->
<!-- <script src=\"../../dist/js/pages/dashboards/dashboard1.js\"></script> -->
<!-- Charts js Files -->
<script src=\"";
        // line 424
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/libs/flot/excanvas.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 425
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/libs/flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 426
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/libs/flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 427
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/libs/flot/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 428
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/libs/flot/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/libs/flot/jquery.flot.crosshair.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 430
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 431
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/js/pages/chart/chart-page-init.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
<link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
<script src=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "dist/js/moment.js \"></script>
<script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
<script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
<script>
    \$( function() {
        var theHREF;
//message suppression
        \$( \"#dialog-confirm\" ).dialog({
            resizable: false,
            height:260,
            width:500,
            autoOpen: false,
            show: {
                effect: \"blind\",
                duration: 1000
            },
            hide: {
                effect: \"explode\",
                duration: 1000
            },
            modal: true,
            buttons: {
                \"Oui\": function() {
                    \$( this ).dialog( \"close\" );
                    window.location.href = theHREF;
                },
                \"Annuler\": function() {
                    \$( this ).dialog( \"close\" );
                }
            }
        });

        \$(\"a.confirmModal\").click(function(e) {
            e.preventDefault();
            theHREF = \$(this).attr(\"href\");
            \$(\"#dialog-confirm\").dialog(\"open\");
        });
//popup modif
        var theHREF2;

        \$( \"#dialog-confirm2\" ).dialog({
            resizable: false,
            height:460,
            width:800,
            autoOpen: false,
            show: {
                effect: \"blind\",
                duration: 1000
            },
            hide: {
                effect: \"explode\",
                duration: 1000
            },
            modal: true,

        });

        \$(\".confirmModal2\").click(function(e) {
            e.preventDefault();
            theHREF2 = \$(this).attr(\"href\");
            \$(\"#dialog-confirm2\").dialog(\"open\");
        });




    });

</script>
<script type=\"text/javascript\" src=\"";
        // line 503
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fullcalendar/js/fullcalendar/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 504
        $this->displayBlock('js2', $context, $blocks);
        // line 506
        echo "</body>
<style>
    .header-left span.badge {
        font-size: 11px;
        font-weight: bold;
        color: #FFF;
        background: #ff6c5f;
        line-height: 15px;
        width: 20px;
        height: 20px;
        border-radius: 2em;
        -webkit-border-radius: 2em;
        -moz-border-radius: 2em;
        -o-border-radius: 2em;
        text-align: center;
        display: inline-block;
        position: absolute;
        top: 16%;
        padding: 2px 0 0;
    }
</style>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 128
    public function block_notif($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "notif"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "notif"));

        // line 129
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 363
    public function block_bodyBack($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyBack"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyBack"));

        // line 364
        echo "
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 368
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 369
        echo "

            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 504
    public function block_js2($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js2"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js2"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  905 => 504,  893 => 369,  884 => 368,  873 => 364,  864 => 363,  854 => 129,  845 => 128,  812 => 506,  810 => 504,  806 => 503,  734 => 434,  728 => 431,  724 => 430,  720 => 429,  716 => 428,  712 => 427,  708 => 426,  704 => 425,  700 => 424,  693 => 420,  688 => 418,  683 => 416,  678 => 414,  674 => 413,  670 => 412,  666 => 411,  661 => 409,  622 => 372,  620 => 368,  616 => 366,  614 => 363,  553 => 304,  547 => 301,  542 => 300,  539 => 299,  533 => 297,  531 => 296,  527 => 294,  521 => 292,  519 => 291,  515 => 290,  506 => 285,  501 => 283,  497 => 282,  493 => 281,  489 => 280,  485 => 279,  481 => 278,  476 => 277,  473 => 276,  468 => 274,  463 => 273,  461 => 272,  452 => 266,  448 => 265,  444 => 264,  440 => 263,  432 => 258,  428 => 257,  424 => 256,  420 => 255,  412 => 249,  406 => 247,  404 => 246,  400 => 245,  394 => 243,  388 => 241,  386 => 240,  378 => 235,  374 => 234,  365 => 228,  361 => 227,  357 => 226,  353 => 225,  349 => 224,  345 => 223,  341 => 221,  335 => 219,  333 => 218,  305 => 193,  294 => 185,  273 => 168,  270 => 167,  256 => 159,  252 => 158,  242 => 150,  237 => 149,  235 => 148,  215 => 130,  213 => 128,  207 => 126,  204 => 125,  189 => 123,  184 => 122,  182 => 121,  173 => 117,  119 => 66,  110 => 60,  65 => 18,  60 => 16,  54 => 13,  40 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html dir=\"ltr\" lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <!-- Favicon icon -->
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ asset('back/') }}assets/images/favicon.png\">
    <title>Matrix Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href=\"{{ asset('back/') }}assets/libs/flot/css/float-chart.css\" rel=\"stylesheet\">
    <!-- Custom CSS -->
    <link href=\"{{ asset('back/') }}dist/css/style.min.css\" rel=\"stylesheet\">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>


<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class=\"preloader\">
    <div class=\"lds-ripple\">
        <div class=\"lds-pos\"></div>
        <div class=\"lds-pos\"></div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id=\"main-wrapper\">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class=\"topbar\" data-navbarbg=\"skin5\">
        <nav class=\"navbar top-navbar navbar-expand-md navbar-dark\">
            <div class=\"navbar-header\" data-logobg=\"skin5\">
                <!-- This is for the sidebar toggle which is visible on mobile only -->
                <a class=\"nav-toggler waves-effect waves-light d-block d-md-none\" href=\"javascript:void(0)\"><i class=\"ti-menu ti-close\"></i></a>
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <a id=\"asss\" class=\"navbar-brand\" href=\"\">
                    <!-- Logo icon -->
                    <b class=\"logo-icon p-l-10\">
                        <!--You can put here icon as well // <i class=\"wi wi-sunset\"></i> //-->
                        <!-- Dark Logo icon -->
                        <img style=\"height: 100px ;width: 100px\" src=\"{{ asset('photos/abc.png') }}\" alt=\"homepage\" class=\"light-logo\" />

                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span class=\"logo-text\">
                            {{app.user.username}}


                        </span>
                    <!-- Logo icon -->
                    <!-- <b class=\"logo-icon\"> -->
                    <!--You can put here icon as well // <i class=\"wi wi-sunset\"></i> //-->
                    <!-- Dark Logo icon -->
                    <!-- <img src=\"../../assets/images/logo-text.png\" alt=\"homepage\" class=\"light-logo\" /> -->

                    <!-- </b> -->
                    <!--End Logo icon -->
                </a>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Toggle which is visible on mobile only -->
                <!-- ============================================================== -->
                <a class=\"topbartoggler d-block d-md-none waves-effect waves-light\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><i class=\"ti-more\"></i></a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class=\"navbar-collapse collapse\" id=\"navbarSupportedContent\" data-navbarbg=\"skin5\">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class=\"navbar-nav float-left mr-auto\">
                    <li class=\"nav-item d-none d-md-block\"><a class=\"nav-link sidebartoggler waves-effect waves-light\" href=\"javascript:void(0)\" data-sidebartype=\"mini-sidebar\"><i class=\"mdi mdi-menu font-24\"></i></a></li>
                    <!-- ============================================================== -->
                    <!-- create new -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->
                    <li class=\"nav-item search-box\"> <a class=\"nav-link waves-effect waves-dark\" href=\"javascript:void(0)\"><i class=\"ti-search\"></i></a>
                        <form class=\"app-search position-absolute\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Search &amp; enter\"> <a class=\"srh-btn\"><i class=\"ti-close\"></i></a>
                        </form>
                    </li>
                </ul>
                <!-- ============================================================== -->
                <!-- Right side toggle and nav items -->
                <!-- ============================================================== -->
                <ul class=\"navbar-nav float-right\">
                    <!-- ============================================================== -->
                    <!-- Comment -->
                    <!-- ============================================================== -->
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle waves-effect waves-dark\" href=\"\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"mdi mdi-bell font-24\" style=\"color: orange\"><span class=\"badge badge-pill badge-danger\">{% if count is defined %}{{ count }}{% endif %}</span></i></a>

                        <div class=\"dropdown-menu dropdown-menu-right mailbox animated bounceInDown\" aria-labelledby=\"2\">

                            {% if not1 is defined %}
                            {% for c in not1 %}
                                <p style=\"border: 2px\"><i style=\"color:#EBC72F;font-size: 17px;\" class=\"fa fa-bell\"></i>    L'employé <strong>{{ c.idEmployee.nom }}</strong> demande un congé <strong>{{ c.type }}</strong> de {{ c.dateDebut|date('Y-m-d') }} jusqu'à {{ c.dateFin|date('Y-m-d') }} <strong> en attente...</strong></p><br>
                            {% endfor %}
                            {% endif %}
                            <a href=\"{{ path('traiter') }}\" style=\"color: red\">Voir plus...</a><br>

                            {% block notif %}
                            {% endblock %}
                        </div>
                    </li>

                    <!-- ============================================================== -->
                    <!-- End Comment -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Messages -->
                    <!-- ============================================================== -->
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle waves-effect waves-dark\" href=\"\" id=\"2\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"font-24 mdi mdi-comment-processing\"></i>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right mailbox animated bounceInDown\" aria-labelledby=\"2\">
                            <ul class=\"list-style-none\">
                                <li>
                                    <div class=\"\">
                                        <!-- Message -->
                                        <a href=\"javascript:void(0)\" class=\"link border-top\">
                                            {% if post is defined %}
                                            {% for p in post %}
                                            <div class=\"d-flex no-block align-items-center p-10\">

                                                <span class=\"btn btn-success btn-circle\"><i class=\"ti-calendar\"></i></span>
                                                <div class=\"m-l-10\">




                                                    <h5 class=\"m-b-0\"> L'employé <strong>{{ p.poster.username }}</strong></h5>
                                                   <span class=\"mail-desc\" style=\"border: 2px;color: #005cbf\">    a posté dans le sujet : <strong>{{ p.topic.title }}</strong></span><br>


                                                </div>

                                            </div>

                                            {% endfor %}
                                            {% endif%}
                                            <a href=\"{{ path('discutea_forum_homepage') }}\" style=\"color: red\">Voir plus...</a>
                                        </a>
                                        <!-- Message -->

                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Messages -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic\"  data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"fa fa-user\">  {{ app.user.username }}</span></a>
                        <div class=\"dropdown-menu dropdown-menu-right user-dd animated\">
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\"><i class=\"ti-user m-r-5 m-l-5\"></i> My Profile</a>
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\"><i class=\"ti-wallet m-r-5 m-l-5\"></i> My Balance</a>
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\"><i class=\"ti-email m-r-5 m-l-5\"></i> Inbox</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\"><i class=\"ti-settings m-r-5 m-l-5\"></i> Account Setting</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"{{ path('fos_user_security_logout') }}\"><i class=\"fa fa-power-off m-r-5 m-l-5\"></i> Logout</a>
                            <div class=\"dropdown-divider\"></div>
                            <div class=\"p-l-30 p-10\"><a href=\"javascript:void(0)\" class=\"btn btn-sm btn-success btn-rounded\">View Profile</a></div>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                </ul>
            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside id=\"ass\" class=\"left-sidebar\" data-sidebarbg=\"skin5\">
        <!-- Sidebar scroll-->
        <div class=\"scroll-sidebar\">
            <!-- Sidebar navigation-->
            <nav class=\"sidebar-nav\">
                <ul id=\"sidebarnav\" class=\"p-t-30\">

                    {% if is_granted('ROLE_ADMIN') %}
                        <li class=\"sidebar-item\"> <a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"{{ path('notifier') }}\" aria-expanded=\"false\"><i class=\"fas fa-home\"></i><span class=\"hide-menu\">Acceuil Admin</span></a></li>
                    {% endif %}
                    <li class=\"sidebar-item\"> <a class=\"sidebar-link has-arrow waves-effect waves-dark\" href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"fas fa-box-open\"></i><span class=\"hide-menu\">Gestion produits</span></a>
                        <ul aria-expanded=\"false\" class=\"collapse  first-level\">
                            <li class=\"sidebar-item\"><a href=\"{{ path('ajout_categorie') }}\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> ajouter categorie </span></a></li>
                            <li class=\"sidebar-item\"><a href=\"{{ path('afficher_categorie') }}\" class=\"sidebar-link\"><i class=\"fas fa-list\"></i><span class=\"hide-menu\"> lister categories </span></a></li>
                            <li class=\"sidebar-item\"><a href=\"{{ path('ajout_produit') }}\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> ajouter produit </span></a></li>
                            <li class=\"sidebar-item\"><a href=\"{{ path('afficher_produit') }}\" class=\"sidebar-link\"><i class=\"fas fa-list\"></i><span class=\"hide-menu\"> lister produits </span></a></li>
                            <li class=\"sidebar-item\"><a href=\"{{ path('ajout_stock') }}\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> ajouter stock </span></a></li>
                            <li class=\"sidebar-item\"><a href=\"{{ path('afficher_stock') }}\" class=\"sidebar-link\"><i class=\"fas fa-list\"></i><span class=\"hide-menu\"> lister stocks </span></a></li>
                        </ul>

                    </li>
                    <li class=\"sidebar-item\"> <a class=\"sidebar-link has-arrow waves-effect waves-dark\" href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"fas fa-shopping-cart\"></i><span class=\"hide-menu\">Gestion Commandes </span></a>
                        <ul aria-expanded=\"false\" class=\"collapse  first-level\">
                            <li class=\"sidebar-item\"><a href=\"{{ path('bonreduction_index') }}\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\">Bons De Reductions</span></a></li>
                            <li class=\"sidebar-item\"><a href=\"{{ path('affichercommande') }}\" class=\"sidebar-link\"><i class=\"fas fa-list\"></i><span class=\"hide-menu\">Historique Commandes </span></a></li>
                        </ul>
                    </li>
                    <li class=\"sidebar-item\"> <a class=\"sidebar-link has-arrow waves-effect waves-dark\" href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"fas fa-child\"></i><span class=\"hide-menu\">Gestion employés </span></a>
                        <ul aria-expanded=\"false\" class=\"collapse  first-level\">
                            {% if is_granted('ROLE_ADMIN') %}
                            <li class=\"sidebar-item\"><a href=\"{{ path('employee_index') }}\" class=\"sidebar-link\"><i class=\"fas fa-child\"></i><span class=\"hide-menu\">Personnel</span></a></li>
                            {% endif %}
                            <li class=\"sidebar-item\"><a href=\"{{ path('conge_new') }}\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\">Nouveau Congé</span></a></li>

                            <li class=\"sidebar-item\"><a href=\"{{ path('conge_index') }}\" class=\"sidebar-link\"><i class=\"fas fa-list\"></i><span class=\"hide-menu\">Liste Des Congés</span></a></li>
                            {% if is_granted('ROLE_ADMIN') %}
                            <li class=\"sidebar-item\"><a href=\"{{ path('traiter') }}\" class=\"sidebar-link\"><i class=\"fas fa-check\"></i><span class=\"hide-menu\">Traiter Les Congés</span></a></li>
                            {% endif %}


                        </ul>
                    </li>
                    <li class=\"sidebar-item\"> <a class=\"sidebar-link has-arrow waves-effect waves-dark\" href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"fas fa-warehouse\"></i><span class=\"hide-menu\">Gestion stock </span></a>
                        <ul aria-expanded=\"false\" class=\"collapse  first-level\">
                            <li class=\"sidebar-item\"><a href=\"{{ path('depot_new')}}\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> Ajouter depot </span></a></li>
                            <li class=\"sidebar-item\"><a href=\"{{ path('representant_new')}}\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> Ajouter representant </span></a></li>
                            <li class=\"sidebar-item\"><a href=\"{{ path('depot_index')}}\" class=\"sidebar-link\"><i class=\"fas fa-list\"></i><span class=\"hide-menu\"> Liste des depots </span></a></li>
                            <li class=\"sidebar-item\"><a href=\"{{ path('representant_index')}}\" class=\"sidebar-link\"><i class=\"fas fa-list\"></i><span class=\"hide-menu\"> Liste des representants </span></a></li>
                        </ul>
                    </li>
                    <li class=\"sidebar-item\"> <a class=\"sidebar-link has-arrow waves-effect waves-dark\" href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"fas fa-dolly\"></i><span class=\"hide-menu\">Gestion fournisseurs </span></a>
                        <ul aria-expanded=\"false\" class=\"collapse  first-level\">
                            <li class=\"sidebar-item\"><a href=\"{{ path('fournisseur_index') }}\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> Liste Fournisseurs </span></a></li>
                            <li class=\"sidebar-item\"><a href=\"{{ path('historique_index') }}\" class=\"sidebar-link\"><i class=\"fas fa-list\"></i><span class=\"hide-menu\"> Historique </span></a></li>
                            <li class=\"sidebar-item\"><a href=\"{{ path('commandef_index') }}\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> Liste Commande </span></a></li>
                            <li class=\"sidebar-item\"><a href=\"{{ path('statistique') }}\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> Statistique </span></a></li>
                        </ul>
                    </li>

                    <li class=\"sidebar-item\"> <a class=\"sidebar-link has-arrow waves-effect waves-dark\" href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"fas fa-shipping-fast\"></i><span class=\"hide-menu\">Gestion livraison </span></a>
                        <ul aria-expanded=\"false\" class=\"collapse  first-level\">
                            {% if is_granted(\"ROLE_ADMIN\") == false %}
                                <li class=\"sidebar-item\"><a href=\"{{ path('affichePlannigDay') }}\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> Planning du jour </span></a></li>
                                <li class=\"sidebar-item\"><a href=\"{{ path('AfficherPlanning') }}\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> Calendrier Planning livreur </span></a></li>
                            {% endif %}
                            {% if is_granted(\"ROLE_LIVREUR\") == false %}
                                <li class=\"sidebar-item\"><a href=\"{{ path('ajoutTypeVehicule') }}\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> ajouter type vehicule </span></a></li>
                                <li class=\"sidebar-item\"><a href=\"{{ path('afficherTypeVehicules') }}\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> Liste  des types des vehicules </span></a></li>
                                <li class=\"sidebar-item\"><a href=\"{{ path('afficheVehicule') }}\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> Liste  des vehicules </span></a></li>
                                <li class=\"sidebar-item\"><a href=\"{{ path('ajoutVehicule') }}\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> ajouter des vehicules </span></a></li>
                                <li class=\"sidebar-item\"><a href=\"{{ path('Panne') }}\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> Disponibilité vehicules </span></a></li>
                                <li class=\"sidebar-item\"><a href=\"{{ path('AfficherPlanningAdmin') }}\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> Consulter Planning des livreurs </span></a></li>
                                <li class=\"sidebar-item\"><a href=\"{{ path('afficherCommandeNonLivre') }}\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> Liste commande non livrée </span></a></li>
                            {% endif %}
                            <li class=\"sidebar-item\"><a href=\"{{ path('stat') }}\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> Statistique </span></a></li>
                        </ul>
                    </li>
                    <li class=\"sidebar-item\"> <a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"#\" aria-expanded=\"false\"><i class=\"fas fa-comments\"></i><span class=\"hide-menu\">Forum</span></a>
                        <ul aria-expanded=\"false\" class=\"collapse  first-level\">
                            <li class=\"sidebar-item\"><a href=\"{{ path('discutea_forum_homepage') }}\" class=\"sidebar-link\"><i class=\"fas fa-bars\"></i><span class=\"hide-menu\"> Acceuil </span></a></li>
                            {% if is_granted('ROLE_EMPLOYE') %}
                            <li class=\"sidebar-item\"><a href=\"{{ path('discutea_forum_create_category') }}\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> Ajouter Categorie </span></a></li>
                            {% endif %}
                        </ul>
                    </li>
                    {% if is_granted('ROLE_ADMIN') %}
                    <li class=\"sidebar-item\"> <a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"{{ path('discutea_forum_admin_dashboard') }}\" aria-expanded=\"false\"><i class=\"mdi mdi-chart-bar\"></i><span class=\"hide-menu\">Forum Admin</span></a></li>
                    {% endif %}
                    {% if is_granted('ROLE_ADMIN') %}
                        <li class=\"sidebar-item\"> <a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"{{ path('traiterr') }}\" aria-expanded=\"false\"><i class=\"fas fa-tags\"></i><span class=\"hide-menu\">Reclamations</span></a></li>
                        <li class=\"sidebar-item\"> <a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"{{ path('ReclamationLivraison') }}\" aria-expanded=\"false\"><i class=\"fas fa-tags\"></i><span class=\"hide-menu\">Reclamations Livraisons</span></a></li>

                    {% endif %}




                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class=\"page-wrapper\">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class=\"page-breadcrumb\">
            <div class=\"row\">
                <div class=\"col-12 d-flex no-block align-items-center\">

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
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class=\"container-fluid\">
            <!-- ============================================================== -->
            <!-- Sales Cards  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Sales chart -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- Sales chart -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Recent comment and chats -->
            <!-- ============================================================== -->


            <div class=\"container-fluid\">

                {% block bodyBack %}

                {% endblock %}

            </div>
            {% block body %}


            {% endblock %}


            <!-- ============================================================== -->
            <!-- Recent comment and chats -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->


    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class=\"footer text-center\">
        All Rights Reserved by DepotMagic. Designed and Developed by <a href=\"https://wrappixel.com\">CTRL C & CTRL V</a>.
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src=\"{{ asset('back/libs/jquery/dist/jquery.min.js') }}\"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src=\"{{ asset('back/libs/popper.js/dist/umd/popper.min.js') }}\"></script>
<script src=\"{{ asset('back/libs/bootstrap/dist/js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('back/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}\"></script>
<script src=\"{{ asset('back/extra-libs/sparkline/sparkline.js') }}\"></script>
<!--Wave Effects -->
<script src=\"{{ asset('back/dist/js/waves.js') }}\"></script>
<!--Menu sidebar -->
<script src=\"{{ asset('back/dist/js/sidebarmenu.js') }}\"></script>
<!--Custom JavaScript -->
<script src=\"{{ asset('back/dist/js/custom.min.js') }}\"></script>
<!--This page JavaScript -->
<!-- <script src=\"../../dist/js/pages/dashboards/dashboard1.js\"></script> -->
<!-- Charts js Files -->
<script src=\"{{ asset('back/libs/flot/excanvas.js') }}\"></script>
<script src=\"{{ asset('back/libs/flot/jquery.flot.js') }}\"></script>
<script src=\"{{ asset('back/libs/flot/jquery.flot.pie.js') }}\"></script>
<script src=\"{{ asset('back/libs/flot/jquery.flot.time.js') }}\"></script>
<script src=\"{{ asset('back/libs/flot/jquery.flot.stack.js') }}\"></script>
<script src=\"{{ asset('back/libs/flot/jquery.flot.crosshair.js') }}\"></script>
<script src=\"{{ asset('back/libs/flot.tooltip/js/jquery.flot.tooltip.min.js') }}\"></script>
<script src=\"{{ asset('back/dist/js/pages/chart/chart-page-init.js') }}\"></script>
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
<link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
<script src=\"{{ asset('back/') }}dist/js/moment.js \"></script>
<script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
<script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
<script>
    \$( function() {
        var theHREF;
//message suppression
        \$( \"#dialog-confirm\" ).dialog({
            resizable: false,
            height:260,
            width:500,
            autoOpen: false,
            show: {
                effect: \"blind\",
                duration: 1000
            },
            hide: {
                effect: \"explode\",
                duration: 1000
            },
            modal: true,
            buttons: {
                \"Oui\": function() {
                    \$( this ).dialog( \"close\" );
                    window.location.href = theHREF;
                },
                \"Annuler\": function() {
                    \$( this ).dialog( \"close\" );
                }
            }
        });

        \$(\"a.confirmModal\").click(function(e) {
            e.preventDefault();
            theHREF = \$(this).attr(\"href\");
            \$(\"#dialog-confirm\").dialog(\"open\");
        });
//popup modif
        var theHREF2;

        \$( \"#dialog-confirm2\" ).dialog({
            resizable: false,
            height:460,
            width:800,
            autoOpen: false,
            show: {
                effect: \"blind\",
                duration: 1000
            },
            hide: {
                effect: \"explode\",
                duration: 1000
            },
            modal: true,

        });

        \$(\".confirmModal2\").click(function(e) {
            e.preventDefault();
            theHREF2 = \$(this).attr(\"href\");
            \$(\"#dialog-confirm2\").dialog(\"open\");
        });




    });

</script>
<script type=\"text/javascript\" src=\"{{ asset('bundles/fullcalendar/js/fullcalendar/fullcalendar.min.js') }}\"></script>
{% block js2 %}
{% endblock %}
</body>
<style>
    .header-left span.badge {
        font-size: 11px;
        font-weight: bold;
        color: #FFF;
        background: #ff6c5f;
        line-height: 15px;
        width: 20px;
        height: 20px;
        border-radius: 2em;
        -webkit-border-radius: 2em;
        -moz-border-radius: 2em;
        -o-border-radius: 2em;
        text-align: center;
        display: inline-block;
        position: absolute;
        top: 16%;
        padding: 2px 0 0;
    }
</style>

</html>
", "base2.html.twig", "C:\\xampp\\htdocs\\pi\\app\\Resources\\views\\base2.html.twig");
    }
}

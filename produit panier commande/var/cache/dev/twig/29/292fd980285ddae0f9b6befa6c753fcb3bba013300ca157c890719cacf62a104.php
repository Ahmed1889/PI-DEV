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

/* baseBack.html.twig */
class __TwigTemplate_2e671f0a7f4bece9824f706407ee96b97a900c16ae42b2ff46705597c65f39c5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'bodyBack' => [$this, 'block_bodyBack'],
            'js2' => [$this, 'block_js2'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseBack.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseBack.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
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
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "assets/images/favicon.png\">
    <title>Matrix Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "assets/libs/flot/css/float-chart.css\" rel=\"stylesheet\">
    <!-- Custom CSS -->
    <link href=\"";
        // line 17
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
                <a class=\"navbar-brand\" href=\"index.html\">
                    <!-- Logo icon -->
                    <b class=\"logo-icon p-l-10\">
                        <!--You can put here icon as well // <i class=\"wi wi-sunset\"></i> //-->
                        <!-- Dark Logo icon -->
                        <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "assets/images/logo-icon.png\" alt=\"homepage\" class=\"light-logo\" />

                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span class=\"logo-text\">
                             <!-- dark Logo text -->
                             <img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "assets/images/logo-text.png\" alt=\"homepage\" class=\"light-logo\" />

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
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <span class=\"d-none d-md-block\">Create New <i class=\"fa fa-angle-down\"></i></span>
                            <span class=\"d-block d-md-none\"><i class=\"fa fa-plus\"></i></span>
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                        </div>
                    </li>
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
                        <a class=\"nav-link dropdown-toggle waves-effect waves-dark\" href=\"\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"mdi mdi-bell font-24\"></i>
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
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
                                            <div class=\"d-flex no-block align-items-center p-10\">
                                                <span class=\"btn btn-success btn-circle\"><i class=\"ti-calendar\"></i></span>
                                                <div class=\"m-l-10\">
                                                    <h5 class=\"m-b-0\">Event today</h5>
                                                    <span class=\"mail-desc\">Just a reminder that event</span>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href=\"javascript:void(0)\" class=\"link border-top\">
                                            <div class=\"d-flex no-block align-items-center p-10\">
                                                <span class=\"btn btn-info btn-circle\"><i class=\"ti-settings\"></i></span>
                                                <div class=\"m-l-10\">
                                                    <h5 class=\"m-b-0\">Settings</h5>
                                                    <span class=\"mail-desc\">You can customize this template</span>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href=\"javascript:void(0)\" class=\"link border-top\">
                                            <div class=\"d-flex no-block align-items-center p-10\">
                                                <span class=\"btn btn-primary btn-circle\"><i class=\"ti-user\"></i></span>
                                                <div class=\"m-l-10\">
                                                    <h5 class=\"m-b-0\">Pavan kumar</h5>
                                                    <span class=\"mail-desc\">Just see the my admin!</span>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href=\"javascript:void(0)\" class=\"link border-top\">
                                            <div class=\"d-flex no-block align-items-center p-10\">
                                                <span class=\"btn btn-danger btn-circle\"><i class=\"fa fa-link\"></i></span>
                                                <div class=\"m-l-10\">
                                                    <h5 class=\"m-b-0\">Luanch Admin</h5>
                                                    <span class=\"mail-desc\">Just see the my new admin!</span>
                                                </div>
                                            </div>
                                        </a>
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
                        <a class=\"nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic\" href=\"\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><img src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "assets/images/users/1.jpg\" alt=\"user\" class=\"rounded-circle\" width=\"31\"></a>
                        <div class=\"dropdown-menu dropdown-menu-right user-dd animated\">
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\"><i class=\"ti-user m-r-5 m-l-5\"></i> My Profile</a>
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\"><i class=\"ti-wallet m-r-5 m-l-5\"></i> My Balance</a>
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\"><i class=\"ti-email m-r-5 m-l-5\"></i> Inbox</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\"><i class=\"ti-settings m-r-5 m-l-5\"></i> Account Setting</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\"><i class=\"fa fa-power-off m-r-5 m-l-5\"></i> Logout</a>
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
    <aside class=\"left-sidebar\" data-sidebarbg=\"skin5\">
        <!-- Sidebar scroll-->
        <div class=\"scroll-sidebar\">
            <!-- Sidebar navigation-->
            <nav class=\"sidebar-nav\">
                <ul id=\"sidebarnav\" class=\"p-t-30\">

                    <li class=\"sidebar-item\"> <a class=\"sidebar-link has-arrow waves-effect waves-dark\" href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"fas fa-box-open\"></i><span class=\"hide-menu\">Gestion produits</span></a>
                        <ul aria-expanded=\"false\" class=\"collapse  first-level\">
                            <li class=\"sidebar-item\"><a href=\"";
        // line 235
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajout_categorie");
        echo "\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> ajouter categorie </span></a></li>
                            <li class=\"sidebar-item\"><a href=\"";
        // line 236
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficher_categorie");
        echo "\" class=\"sidebar-link\"><i class=\"fas fa-list\"></i><span class=\"hide-menu\"> lister categories </span></a></li>
                            <li class=\"sidebar-item\"><a href=\"";
        // line 237
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajout_produit");
        echo "\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> ajouter produit </span></a></li>
                            <li class=\"sidebar-item\"><a href=\"";
        // line 238
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficher_produit");
        echo "\" class=\"sidebar-link\"><i class=\"fas fa-list\"></i><span class=\"hide-menu\"> lister produits </span></a></li>
                        </ul>
                    </li>
                    <li class=\"sidebar-item\"> <a class=\"sidebar-link has-arrow waves-effect waves-dark\" href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"fas fa-shopping-cart\"></i><span class=\"hide-menu\">Gestion panier/commandes </span></a>
                        <ul aria-expanded=\"false\" class=\"collapse  first-level\">
                            <li class=\"sidebar-item\"><a href=\"index2.html\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> Dashboard-2 </span></a></li>
                            <li class=\"sidebar-item\"><a href=\"pages-gallery.html\" class=\"sidebar-link\"><i class=\"fas fa-list\"></i><span class=\"hide-menu\"> Gallery </span></a></li>
                        </ul>
                    </li>
                    <li class=\"sidebar-item\"> <a class=\"sidebar-link has-arrow waves-effect waves-dark\" href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"fas fa-child\"></i><span class=\"hide-menu\">Gestion employés </span></a>
                        <ul aria-expanded=\"false\" class=\"collapse  first-level\">
                            <li class=\"sidebar-item\"><a href=\"index2.html\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> Dashboard-2 </span></a></li>
                            <li class=\"sidebar-item\"><a href=\"pages-gallery.html\" class=\"sidebar-link\"><i class=\"fas fa-list\"></i><span class=\"hide-menu\"> Gallery </span></a></li>
                        </ul>
                    </li>
                    <li class=\"sidebar-item\"> <a class=\"sidebar-link has-arrow waves-effect waves-dark\" href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"fas fa-warehouse\"></i><span class=\"hide-menu\">Gestion stock </span></a>
                        <ul aria-expanded=\"false\" class=\"collapse  first-level\">
                            <li class=\"sidebar-item\"><a href=\"index2.html\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> Dashboard-2 </span></a></li>
                            <li class=\"sidebar-item\"><a href=\"pages-gallery.html\" class=\"sidebar-link\"><i class=\"fas fa-list\"></i><span class=\"hide-menu\"> Gallery </span></a></li>
                        </ul>
                    </li>
                    <li class=\"sidebar-item\"> <a class=\"sidebar-link has-arrow waves-effect waves-dark\" href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"fas fa-dolly\"></i><span class=\"hide-menu\">Gestion fournisseurs </span></a>
                        <ul aria-expanded=\"false\" class=\"collapse  first-level\">
                            <li class=\"sidebar-item\"><a href=\"index2.html\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> Dashboard-2 </span></a></li>
                            <li class=\"sidebar-item\"><a href=\"pages-gallery.html\" class=\"sidebar-link\"><i class=\"fas fa-list\"></i><span class=\"hide-menu\"> Gallery </span></a></li>
                        </ul>
                    </li>
                    <li class=\"sidebar-item\"> <a class=\"sidebar-link has-arrow waves-effect waves-dark\" href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"fas fa-shipping-fast\"></i><span class=\"hide-menu\">Gestion livraison </span></a>
                        <ul aria-expanded=\"false\" class=\"collapse  first-level\">
                            <li class=\"sidebar-item\"><a href=\"index2.html\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> Dashboard-2 </span></a></li>
                            <li class=\"sidebar-item\"><a href=\"pages-gallery.html\" class=\"sidebar-link\"><i class=\"fas fa-list\"></i><span class=\"hide-menu\"> Gallery </span></a></li>
                        </ul>
                    </li>
                    <li class=\"sidebar-item\"> <a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"charts.html\" aria-expanded=\"false\"><i class=\"mdi mdi-chart-bar\"></i><span class=\"hide-menu\">Statistiques</span></a></li>


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
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <div class=\"container-fluid\">
        ";
        // line 303
        $this->displayBlock('bodyBack', $context, $blocks);
        // line 305
        echo "        </div>
        <footer class=\"footer text-center\">
            All Rights Reserved by maxi-entrepot. Designed and Developed by <a href=\"https://wrappixel.com\">Ctrl c/v</a>.
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
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "assets/libs/jquery/dist/jquery.min.js\"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "assets/libs/popper.js/dist/umd/popper.min.js\"></script>
<script src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "assets/libs/bootstrap/dist/js/bootstrap.min.js\"></script>
<script src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js\"></script>
<script src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "assets/extra-libs/sparkline/sparkline.js\"></script>
<!--Wave Effects -->
<script src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "dist/js/waves.js\"></script>
<!--Menu sidebar -->
<script src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "dist/js/sidebarmenu.js\"></script>
<!--Custom JavaScript -->
<script src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "dist/js/custom.min.js\"></script>
<!--This page JavaScript -->
<!-- <script src=\"../../dist/js/pages/dashboards/dashboard1.js\"></script> -->
<!-- Charts js Files -->
<script src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "assets/libs/flot/excanvas.js\"></script>
<script src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "assets/libs/flot/jquery.flot.js\"></script>
<script src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "assets/libs/flot/jquery.flot.pie.js\"></script>
<script src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "assets/libs/flot/jquery.flot.time.js\"></script>
<script src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "assets/libs/flot/jquery.flot.stack.js\"></script>
<script src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "assets/libs/flot/jquery.flot.crosshair.js\"></script>
<script src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js\"></script>
<script src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "dist/js/pages/chart/chart-page-init.js\"></script>
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
<link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
<script>
    \$( function() {
        var theHREF;

        \$( \"#dialog-confirm\" ).dialog({
            resizable: false,
            height:160,
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
    } );
</script>
";
        // line 385
        $this->displayBlock('js2', $context, $blocks);
        // line 387
        echo "</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 303
    public function block_bodyBack($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyBack"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyBack"));

        // line 304
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 385
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
        return "baseBack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  537 => 385,  527 => 304,  518 => 303,  506 => 387,  504 => 385,  462 => 346,  458 => 345,  454 => 344,  450 => 343,  446 => 342,  442 => 341,  438 => 340,  434 => 339,  427 => 335,  422 => 333,  417 => 331,  412 => 329,  408 => 328,  404 => 327,  400 => 326,  395 => 324,  374 => 305,  372 => 303,  304 => 238,  300 => 237,  296 => 236,  292 => 235,  254 => 200,  115 => 64,  105 => 57,  62 => 17,  57 => 15,  51 => 12,  38 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
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
                <a class=\"navbar-brand\" href=\"index.html\">
                    <!-- Logo icon -->
                    <b class=\"logo-icon p-l-10\">
                        <!--You can put here icon as well // <i class=\"wi wi-sunset\"></i> //-->
                        <!-- Dark Logo icon -->
                        <img src=\"{{ asset('back/') }}assets/images/logo-icon.png\" alt=\"homepage\" class=\"light-logo\" />

                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span class=\"logo-text\">
                             <!-- dark Logo text -->
                             <img src=\"{{ asset('back/') }}assets/images/logo-text.png\" alt=\"homepage\" class=\"light-logo\" />

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
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <span class=\"d-none d-md-block\">Create New <i class=\"fa fa-angle-down\"></i></span>
                            <span class=\"d-block d-md-none\"><i class=\"fa fa-plus\"></i></span>
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                        </div>
                    </li>
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
                        <a class=\"nav-link dropdown-toggle waves-effect waves-dark\" href=\"\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"mdi mdi-bell font-24\"></i>
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
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
                                            <div class=\"d-flex no-block align-items-center p-10\">
                                                <span class=\"btn btn-success btn-circle\"><i class=\"ti-calendar\"></i></span>
                                                <div class=\"m-l-10\">
                                                    <h5 class=\"m-b-0\">Event today</h5>
                                                    <span class=\"mail-desc\">Just a reminder that event</span>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href=\"javascript:void(0)\" class=\"link border-top\">
                                            <div class=\"d-flex no-block align-items-center p-10\">
                                                <span class=\"btn btn-info btn-circle\"><i class=\"ti-settings\"></i></span>
                                                <div class=\"m-l-10\">
                                                    <h5 class=\"m-b-0\">Settings</h5>
                                                    <span class=\"mail-desc\">You can customize this template</span>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href=\"javascript:void(0)\" class=\"link border-top\">
                                            <div class=\"d-flex no-block align-items-center p-10\">
                                                <span class=\"btn btn-primary btn-circle\"><i class=\"ti-user\"></i></span>
                                                <div class=\"m-l-10\">
                                                    <h5 class=\"m-b-0\">Pavan kumar</h5>
                                                    <span class=\"mail-desc\">Just see the my admin!</span>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href=\"javascript:void(0)\" class=\"link border-top\">
                                            <div class=\"d-flex no-block align-items-center p-10\">
                                                <span class=\"btn btn-danger btn-circle\"><i class=\"fa fa-link\"></i></span>
                                                <div class=\"m-l-10\">
                                                    <h5 class=\"m-b-0\">Luanch Admin</h5>
                                                    <span class=\"mail-desc\">Just see the my new admin!</span>
                                                </div>
                                            </div>
                                        </a>
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
                        <a class=\"nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic\" href=\"\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><img src=\"{{ asset('back/') }}assets/images/users/1.jpg\" alt=\"user\" class=\"rounded-circle\" width=\"31\"></a>
                        <div class=\"dropdown-menu dropdown-menu-right user-dd animated\">
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\"><i class=\"ti-user m-r-5 m-l-5\"></i> My Profile</a>
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\"><i class=\"ti-wallet m-r-5 m-l-5\"></i> My Balance</a>
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\"><i class=\"ti-email m-r-5 m-l-5\"></i> Inbox</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\"><i class=\"ti-settings m-r-5 m-l-5\"></i> Account Setting</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\"><i class=\"fa fa-power-off m-r-5 m-l-5\"></i> Logout</a>
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
    <aside class=\"left-sidebar\" data-sidebarbg=\"skin5\">
        <!-- Sidebar scroll-->
        <div class=\"scroll-sidebar\">
            <!-- Sidebar navigation-->
            <nav class=\"sidebar-nav\">
                <ul id=\"sidebarnav\" class=\"p-t-30\">

                    <li class=\"sidebar-item\"> <a class=\"sidebar-link has-arrow waves-effect waves-dark\" href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"fas fa-box-open\"></i><span class=\"hide-menu\">Gestion produits</span></a>
                        <ul aria-expanded=\"false\" class=\"collapse  first-level\">
                            <li class=\"sidebar-item\"><a href=\"{{ path('ajout_categorie') }}\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> ajouter categorie </span></a></li>
                            <li class=\"sidebar-item\"><a href=\"{{ path('afficher_categorie') }}\" class=\"sidebar-link\"><i class=\"fas fa-list\"></i><span class=\"hide-menu\"> lister categories </span></a></li>
                            <li class=\"sidebar-item\"><a href=\"{{ path('ajout_produit') }}\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> ajouter produit </span></a></li>
                            <li class=\"sidebar-item\"><a href=\"{{ path('afficher_produit') }}\" class=\"sidebar-link\"><i class=\"fas fa-list\"></i><span class=\"hide-menu\"> lister produits </span></a></li>
                        </ul>
                    </li>
                    <li class=\"sidebar-item\"> <a class=\"sidebar-link has-arrow waves-effect waves-dark\" href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"fas fa-shopping-cart\"></i><span class=\"hide-menu\">Gestion panier/commandes </span></a>
                        <ul aria-expanded=\"false\" class=\"collapse  first-level\">
                            <li class=\"sidebar-item\"><a href=\"index2.html\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> Dashboard-2 </span></a></li>
                            <li class=\"sidebar-item\"><a href=\"pages-gallery.html\" class=\"sidebar-link\"><i class=\"fas fa-list\"></i><span class=\"hide-menu\"> Gallery </span></a></li>
                        </ul>
                    </li>
                    <li class=\"sidebar-item\"> <a class=\"sidebar-link has-arrow waves-effect waves-dark\" href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"fas fa-child\"></i><span class=\"hide-menu\">Gestion employés </span></a>
                        <ul aria-expanded=\"false\" class=\"collapse  first-level\">
                            <li class=\"sidebar-item\"><a href=\"index2.html\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> Dashboard-2 </span></a></li>
                            <li class=\"sidebar-item\"><a href=\"pages-gallery.html\" class=\"sidebar-link\"><i class=\"fas fa-list\"></i><span class=\"hide-menu\"> Gallery </span></a></li>
                        </ul>
                    </li>
                    <li class=\"sidebar-item\"> <a class=\"sidebar-link has-arrow waves-effect waves-dark\" href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"fas fa-warehouse\"></i><span class=\"hide-menu\">Gestion stock </span></a>
                        <ul aria-expanded=\"false\" class=\"collapse  first-level\">
                            <li class=\"sidebar-item\"><a href=\"index2.html\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> Dashboard-2 </span></a></li>
                            <li class=\"sidebar-item\"><a href=\"pages-gallery.html\" class=\"sidebar-link\"><i class=\"fas fa-list\"></i><span class=\"hide-menu\"> Gallery </span></a></li>
                        </ul>
                    </li>
                    <li class=\"sidebar-item\"> <a class=\"sidebar-link has-arrow waves-effect waves-dark\" href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"fas fa-dolly\"></i><span class=\"hide-menu\">Gestion fournisseurs </span></a>
                        <ul aria-expanded=\"false\" class=\"collapse  first-level\">
                            <li class=\"sidebar-item\"><a href=\"index2.html\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> Dashboard-2 </span></a></li>
                            <li class=\"sidebar-item\"><a href=\"pages-gallery.html\" class=\"sidebar-link\"><i class=\"fas fa-list\"></i><span class=\"hide-menu\"> Gallery </span></a></li>
                        </ul>
                    </li>
                    <li class=\"sidebar-item\"> <a class=\"sidebar-link has-arrow waves-effect waves-dark\" href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"fas fa-shipping-fast\"></i><span class=\"hide-menu\">Gestion livraison </span></a>
                        <ul aria-expanded=\"false\" class=\"collapse  first-level\">
                            <li class=\"sidebar-item\"><a href=\"index2.html\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> Dashboard-2 </span></a></li>
                            <li class=\"sidebar-item\"><a href=\"pages-gallery.html\" class=\"sidebar-link\"><i class=\"fas fa-list\"></i><span class=\"hide-menu\"> Gallery </span></a></li>
                        </ul>
                    </li>
                    <li class=\"sidebar-item\"> <a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"charts.html\" aria-expanded=\"false\"><i class=\"mdi mdi-chart-bar\"></i><span class=\"hide-menu\">Statistiques</span></a></li>


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
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <div class=\"container-fluid\">
        {% block bodyBack %}
        {% endblock %}
        </div>
        <footer class=\"footer text-center\">
            All Rights Reserved by maxi-entrepot. Designed and Developed by <a href=\"https://wrappixel.com\">Ctrl c/v</a>.
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
<script src=\"{{ asset('back/') }}assets/libs/jquery/dist/jquery.min.js\"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src=\"{{ asset('back/') }}assets/libs/popper.js/dist/umd/popper.min.js\"></script>
<script src=\"{{ asset('back/') }}assets/libs/bootstrap/dist/js/bootstrap.min.js\"></script>
<script src=\"{{ asset('back/') }}assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js\"></script>
<script src=\"{{ asset('back/') }}assets/extra-libs/sparkline/sparkline.js\"></script>
<!--Wave Effects -->
<script src=\"{{ asset('back/') }}dist/js/waves.js\"></script>
<!--Menu sidebar -->
<script src=\"{{ asset('back/') }}dist/js/sidebarmenu.js\"></script>
<!--Custom JavaScript -->
<script src=\"{{ asset('back/') }}dist/js/custom.min.js\"></script>
<!--This page JavaScript -->
<!-- <script src=\"../../dist/js/pages/dashboards/dashboard1.js\"></script> -->
<!-- Charts js Files -->
<script src=\"{{ asset('back/') }}assets/libs/flot/excanvas.js\"></script>
<script src=\"{{ asset('back/') }}assets/libs/flot/jquery.flot.js\"></script>
<script src=\"{{ asset('back/') }}assets/libs/flot/jquery.flot.pie.js\"></script>
<script src=\"{{ asset('back/') }}assets/libs/flot/jquery.flot.time.js\"></script>
<script src=\"{{ asset('back/') }}assets/libs/flot/jquery.flot.stack.js\"></script>
<script src=\"{{ asset('back/') }}assets/libs/flot/jquery.flot.crosshair.js\"></script>
<script src=\"{{ asset('back/') }}assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js\"></script>
<script src=\"{{ asset('back/') }}dist/js/pages/chart/chart-page-init.js\"></script>
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
<link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
<script>
    \$( function() {
        var theHREF;

        \$( \"#dialog-confirm\" ).dialog({
            resizable: false,
            height:160,
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
    } );
</script>
{% block js2 %}
{% endblock %}
</body>

</html>", "baseBack.html.twig", "C:\\wamp64\\www\\projet\\PI-DEV\\pi\\app\\Resources\\views\\baseBack.html.twig");
    }
}

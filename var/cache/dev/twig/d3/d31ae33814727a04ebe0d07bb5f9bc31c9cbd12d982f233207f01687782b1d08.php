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

/* @DForum/layout.html.twig */
class __TwigTemplate_6e9805293685cff6f7dc72d3b5b5914f26f85469f57d6ce9bb735f609ac7874b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'js2' => [$this, 'block_js2'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DForum/layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DForum/layout.html.twig"));

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
        <a class=\"navbar-brand\" href=\"#\">
          <!-- Logo icon -->
          <b class=\"logo-icon p-l-10\">
            <!--You can put here icon as well // <i class=\"wi wi-sunset\"></i> //-->
            <!-- Dark Logo icon -->
            <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/images/logo-icon.png"), "html", null, true);
        echo "\" alt=\"homepage\" class=\"light-logo\" />

          </b>
          <!--End Logo icon -->
          <!-- Logo text -->
          <span class=\"logo-text\">
                            ";
        // line 65
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
            <a class=\"nav-link dropdown-toggle waves-effect waves-dark\" href=\"\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"mdi mdi-bell font-24\" style=\"color: orange\"><span class=\"badge badge-pill badge-danger\">";
        // line 127
        if ((isset($context["count"]) || array_key_exists("count", $context))) {
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
        }
        echo "</span></i></a>

            <div class=\"dropdown-menu dropdown-menu-right mailbox animated bounceInDown\" aria-labelledby=\"2\">

              ";
        // line 131
        if ((isset($context["cmd"]) || array_key_exists("cmd", $context))) {
            // line 132
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cmd"] ?? $this->getContext($context, "cmd")));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 133
                echo "                  <p style=\"border: 2px\"><i style=\"color:#EBC72F;font-size: 17px;\" class=\"fa fa-bell\"></i>    L'employé <strong>";
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
            // line 135
            echo "              ";
        }
        // line 136
        echo "              <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("traiter");
        echo "\" style=\"color: red\">Voir plus...</a><br>


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
                      ";
        // line 157
        if ((isset($context["post"]) || array_key_exists("post", $context))) {
            // line 158
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["post"] ?? $this->getContext($context, "post")));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 159
                echo "                          <div class=\"d-flex no-block align-items-center p-10\">

                            <span class=\"btn btn-success btn-circle\"><i class=\"ti-calendar\"></i></span>
                            <div class=\"m-l-10\">




                              <h5 class=\"m-b-0\"> L'employé <strong>";
                // line 167
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "poster", []), "username", []), "html", null, true);
                echo "</strong></h5>
                              <span class=\"mail-desc\" style=\"border: 2px;color: #005cbf\">    a posté dans le sujet : <strong>";
                // line 168
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "topic", []), "title", []), "html", null, true);
                echo "</strong></span><br>


                            </div>

                          </div>

                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 176
            echo "                      ";
        }
        // line 177
        echo "                      <a href=\"";
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
        // line 194
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
        // line 202
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
  <aside class=\"left-sidebar\" data-sidebarbg=\"skin5\">
    <!-- Sidebar scroll-->
    <div class=\"scroll-sidebar\">
      <!-- Sidebar navigation-->
      <nav class=\"sidebar-nav\">
        <ul id=\"sidebarnav\" class=\"p-t-30\">

          ";
        // line 227
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 228
            echo "            <li class=\"sidebar-item\"> <a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notifier");
            echo "\" aria-expanded=\"false\"><i class=\"fas fa-home\"></i><span class=\"hide-menu\">Acceuil Admin</span></a></li>
          ";
        }
        // line 230
        echo "          <li class=\"sidebar-item\" hidden> <a class=\"sidebar-link has-arrow waves-effect waves-dark\" href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"fas fa-box-open\"></i><span class=\"hide-menu\">Gestion produits</span></a>
            <ul aria-expanded=\"false\" class=\"collapse  first-level\">
              <li class=\"sidebar-item\"><a href=\"index2.html\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> Dashboard-2 </span></a></li>
              <li class=\"sidebar-item\"><a href=\"pages-gallery.html\" class=\"sidebar-link\"><i class=\"fas fa-list\"></i><span class=\"hide-menu\"> Gallery </span></a></li>

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
              ";
        // line 245
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 246
            echo "                <li class=\"sidebar-item\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("employee_index");
            echo "\" class=\"sidebar-link\"><i class=\"fas fa-child\"></i><span class=\"hide-menu\">Personnel</span></a></li>
              ";
        }
        // line 248
        echo "              <li class=\"sidebar-item\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conge_new");
        echo "\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\">Nouveau Congé</span></a></li>

              <li class=\"sidebar-item\"><a href=\"";
        // line 250
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conge_index");
        echo "\" class=\"sidebar-link\"><i class=\"fas fa-list\"></i><span class=\"hide-menu\">Liste Des Congés</span></a></li>
              ";
        // line 251
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 252
            echo "                <li class=\"sidebar-item\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("traiter");
            echo "\" class=\"sidebar-link\"><i class=\"fas fa-check\"></i><span class=\"hide-menu\">Traiter Les Congés</span></a></li>
              ";
        }
        // line 254
        echo "

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
              <li class=\"sidebar-item\"><a href=\"#\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> Show </span></a></li>
              <li class=\"sidebar-item\"><a href=\"pages-gallery.html\" class=\"sidebar-link\"><i class=\"fas fa-list\"></i><span class=\"hide-menu\"> Gallery </span></a></li>
            </ul>
          </li>

          <li class=\"sidebar-item\"> <a class=\"sidebar-link has-arrow waves-effect waves-dark\" href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"fas fa-shipping-fast\"></i><span class=\"hide-menu\">Gestion livraison </span></a>
            <ul aria-expanded=\"false\" class=\"collapse  first-level\">
              <li class=\"sidebar-item\"><a href=\"index2.html\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> Dashboard-2 </span></a></li>
              <li class=\"sidebar-item\"><a href=\"pages-gallery.html\" class=\"sidebar-link\"><i class=\"fas fa-list\"></i><span class=\"hide-menu\"> Gallery </span></a></li>
            </ul>
          </li>
          <li class=\"sidebar-item\"> <a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"#\" aria-expanded=\"false\"><i class=\"fas fa-comments\"></i><span class=\"hide-menu\">Forum</span></a>
            <ul aria-expanded=\"false\" class=\"collapse  first-level\">
              <li class=\"sidebar-item\"><a href=\"";
        // line 279
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discutea_forum_homepage");
        echo "\" class=\"sidebar-link\"><i class=\"fas fa-bars\"></i><span class=\"hide-menu\"> Acceuil </span></a></li>
              ";
        // line 280
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_EMPLOYE")) {
            // line 281
            echo "                <li class=\"sidebar-item\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discutea_forum_create_category");
            echo "\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> Ajouter Categorie </span></a></li>
              ";
        }
        // line 283
        echo "            </ul>
          </li>
          ";
        // line 285
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 286
            echo "            <li class=\"sidebar-item\"> <a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discutea_forum_admin_dashboard");
            echo "\" aria-expanded=\"false\"><i class=\"mdi mdi-chart-bar\"></i><span class=\"hide-menu\">Forum Admin</span></a></li>
          ";
        }
        // line 288
        echo "          ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 289
            echo "            <li class=\"sidebar-item\"> <a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("traiterr");
            echo "\" aria-expanded=\"false\"><i class=\"fas fa-tags\"></i><span class=\"hide-menu\">Reclamations</span></a></li>
          ";
        }
        // line 291
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
        // line 361
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
      <!-- Sales chart -->
      <!-- ============================================================== -->

      <!-- ============================================================== -->
      <!-- Sales chart -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Recent comment and chats -->
      <!-- ============================================================== -->

      ";
        // line 407
        $this->displayBlock('body', $context, $blocks);
        // line 411
        echo "      <!-- ============================================================== -->
      <!-- Recent comment and chats -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    ";
        // line 421
        ob_start();
        $this->displayBlock('title', $context, $blocks);
        $context["pagetitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 422
        echo "

      <meta charset=\"utf-8\" />
      <!--[if lt IE 9]>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js\"></script>
      <![endif]-->
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\" />
      <title>";
        // line 430
        echo twig_escape_filter($this->env, ($context["pagetitle"] ?? $this->getContext($context, "pagetitle")), "html", null, true);
        echo "</title>
      <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
      <style>
        body {
          padding-top: 50px;
        }
        .starter-template {
          padding: 40px 15px;
        }
      </style>
      ";
        // line 440
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 441
        echo "







        ";
        // line 449
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", []), "all", []));
        foreach ($context['_seq'] as $context["label"] => $context["flashes"]) {
            // line 450
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 451
                echo "            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
                echo "</div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 453
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 454
        echo "


    <!-- /.container -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>


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
        // line 485
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/libs/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src=\"";
        // line 487
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/libs/popper.js/dist/umd/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 488
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/libs/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 489
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 490
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/extra-libs/sparkline/sparkline.js"), "html", null, true);
        echo "\"></script>
<!--Wave Effects -->
<script src=\"";
        // line 492
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/js/waves.js"), "html", null, true);
        echo "\"></script>
<!--Menu sidebar -->
<script src=\"";
        // line 494
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/js/sidebarmenu.js"), "html", null, true);
        echo "\"></script>
<!--Custom JavaScript -->
<script src=\"";
        // line 496
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/js/custom.min.js"), "html", null, true);
        echo "\"></script>
<!--This page JavaScript -->
<!-- <script src=\"../../dist/js/pages/dashboards/dashboard1.js\"></script> -->
<!-- Charts js Files -->
<script src=\"";
        // line 500
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/libs/flot/excanvas.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 501
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/libs/flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 502
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/libs/flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 503
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/libs/flot/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 504
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/libs/flot/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 505
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/libs/flot/jquery.flot.crosshair.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 506
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 507
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/js/pages/chart/chart-page-init.js"), "html", null, true);
        echo "\"></script>
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
        \"Confirmer\": function() {
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
        // line 546
        $this->displayBlock('js2', $context, $blocks);
        // line 548
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

    // line 407
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 408
        echo "

      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 421
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("home.meta.title"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 440
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 546
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
        return "@DForum/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  888 => 546,  871 => 440,  853 => 421,  841 => 408,  832 => 407,  795 => 548,  793 => 546,  751 => 507,  747 => 506,  743 => 505,  739 => 504,  735 => 503,  731 => 502,  727 => 501,  723 => 500,  716 => 496,  711 => 494,  706 => 492,  701 => 490,  697 => 489,  693 => 488,  689 => 487,  684 => 485,  651 => 454,  645 => 453,  634 => 451,  629 => 450,  625 => 449,  615 => 441,  613 => 440,  600 => 430,  590 => 422,  586 => 421,  574 => 411,  572 => 407,  523 => 361,  451 => 291,  445 => 289,  442 => 288,  436 => 286,  434 => 285,  430 => 283,  424 => 281,  422 => 280,  418 => 279,  391 => 254,  385 => 252,  383 => 251,  379 => 250,  373 => 248,  367 => 246,  365 => 245,  348 => 230,  342 => 228,  340 => 227,  312 => 202,  301 => 194,  280 => 177,  277 => 176,  263 => 168,  259 => 167,  249 => 159,  244 => 158,  242 => 157,  217 => 136,  214 => 135,  199 => 133,  194 => 132,  192 => 131,  183 => 127,  118 => 65,  109 => 59,  64 => 17,  59 => 15,  53 => 12,  40 => 1,);
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
        <a class=\"navbar-brand\" href=\"#\">
          <!-- Logo icon -->
          <b class=\"logo-icon p-l-10\">
            <!--You can put here icon as well // <i class=\"wi wi-sunset\"></i> //-->
            <!-- Dark Logo icon -->
            <img src=\"{{ asset('back/images/logo-icon.png') }}\" alt=\"homepage\" class=\"light-logo\" />

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
            <a class=\"nav-link dropdown-toggle waves-effect waves-dark\" href=\"\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"mdi mdi-bell font-24\" style=\"color: orange\"><span class=\"badge badge-pill badge-danger\">{% if count is defined %}{{ count }}{% endif %}</span></i></a>

            <div class=\"dropdown-menu dropdown-menu-right mailbox animated bounceInDown\" aria-labelledby=\"2\">

              {% if cmd is defined %}
                {% for c in cmd %}
                  <p style=\"border: 2px\"><i style=\"color:#EBC72F;font-size: 17px;\" class=\"fa fa-bell\"></i>    L'employé <strong>{{ c.idEmployee.nom }}</strong> demande un congé <strong>{{ c.type }}</strong> de {{ c.dateDebut|date('Y-m-d') }} jusqu'à {{ c.dateFin|date('Y-m-d') }} <strong> en attente...</strong></p><br>
                {% endfor %}
              {% endif %}
              <a href=\"{{ path('traiter') }}\" style=\"color: red\">Voir plus...</a><br>


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
  <aside class=\"left-sidebar\" data-sidebarbg=\"skin5\">
    <!-- Sidebar scroll-->
    <div class=\"scroll-sidebar\">
      <!-- Sidebar navigation-->
      <nav class=\"sidebar-nav\">
        <ul id=\"sidebarnav\" class=\"p-t-30\">

          {% if is_granted('ROLE_ADMIN') %}
            <li class=\"sidebar-item\"> <a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"{{ path('notifier') }}\" aria-expanded=\"false\"><i class=\"fas fa-home\"></i><span class=\"hide-menu\">Acceuil Admin</span></a></li>
          {% endif %}
          <li class=\"sidebar-item\" hidden> <a class=\"sidebar-link has-arrow waves-effect waves-dark\" href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"fas fa-box-open\"></i><span class=\"hide-menu\">Gestion produits</span></a>
            <ul aria-expanded=\"false\" class=\"collapse  first-level\">
              <li class=\"sidebar-item\"><a href=\"index2.html\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> Dashboard-2 </span></a></li>
              <li class=\"sidebar-item\"><a href=\"pages-gallery.html\" class=\"sidebar-link\"><i class=\"fas fa-list\"></i><span class=\"hide-menu\"> Gallery </span></a></li>

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
              <li class=\"sidebar-item\"><a href=\"index2.html\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> Dashboard-2 </span></a></li>
              <li class=\"sidebar-item\"><a href=\"pages-gallery.html\" class=\"sidebar-link\"><i class=\"fas fa-list\"></i><span class=\"hide-menu\"> Gallery </span></a></li>
            </ul>
          </li>
          <li class=\"sidebar-item\"> <a class=\"sidebar-link has-arrow waves-effect waves-dark\" href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"fas fa-dolly\"></i><span class=\"hide-menu\">Gestion fournisseurs </span></a>
            <ul aria-expanded=\"false\" class=\"collapse  first-level\">
              <li class=\"sidebar-item\"><a href=\"#\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> Show </span></a></li>
              <li class=\"sidebar-item\"><a href=\"pages-gallery.html\" class=\"sidebar-link\"><i class=\"fas fa-list\"></i><span class=\"hide-menu\"> Gallery </span></a></li>
            </ul>
          </li>

          <li class=\"sidebar-item\"> <a class=\"sidebar-link has-arrow waves-effect waves-dark\" href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"fas fa-shipping-fast\"></i><span class=\"hide-menu\">Gestion livraison </span></a>
            <ul aria-expanded=\"false\" class=\"collapse  first-level\">
              <li class=\"sidebar-item\"><a href=\"index2.html\" class=\"sidebar-link\"><i class=\"fas fa-plus\"></i><span class=\"hide-menu\"> Dashboard-2 </span></a></li>
              <li class=\"sidebar-item\"><a href=\"pages-gallery.html\" class=\"sidebar-link\"><i class=\"fas fa-list\"></i><span class=\"hide-menu\"> Gallery </span></a></li>
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
      <!-- Sales chart -->
      <!-- ============================================================== -->

      <!-- ============================================================== -->
      <!-- Sales chart -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Recent comment and chats -->
      <!-- ============================================================== -->

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
    {% set pagetitle %}{% block title %}{{ 'home.meta.title'|trans }}{% endblock %}{% endset %}


      <meta charset=\"utf-8\" />
      <!--[if lt IE 9]>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js\"></script>
      <![endif]-->
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\" />
      <title>{{ pagetitle }}</title>
      <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
      <style>
        body {
          padding-top: 50px;
        }
        .starter-template {
          padding: 40px 15px;
        }
      </style>
      {% block stylesheets %}{% endblock %}








        {% for label, flashes in app.session.flashbag.all %}
          {% for flash in flashes %}
            <div class=\"alert alert-{{ label }}\">{{ flash }}</div>
          {% endfor %}
        {% endfor %}



    <!-- /.container -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>


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
        \"Confirmer\": function() {
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
", "@DForum/layout.html.twig", "C:\\xampp\\htdocs\\pi\\vendor\\discutea\\forum-bundle\\Discutea\\DForumBundle\\Resources\\views\\layout.html.twig");
    }
}

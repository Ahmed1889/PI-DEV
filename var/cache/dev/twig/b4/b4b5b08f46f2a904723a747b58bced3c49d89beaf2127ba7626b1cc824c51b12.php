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

/* base.html.twig */
class __TwigTemplate_a91c45cfcc2c7fb20dc643967b4b57ce40d18242dd7e01df365cae2c88049f4f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html class=\"no-js\" lang=\"zxx\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>Freak</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- Favicon -->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(""), "html", null, true);
        echo "images/favicon.ico\">

    <!-- All css files are included here -->
    <!-- Bootstrap fremwork main css -->
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "css/bootstrap.min.css\">
    <!-- This core.css file contents all plugings css file. -->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "css/core.css\">
    <!-- Theme shortcodes/elements style -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "css/shortcode/shortcodes.css\">
    <!-- Theme main style -->
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "style.css\">
    <!-- Responsive css -->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "css/responsive.css\">
    <!-- User style -->
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "css/custom.css\">



    <!-- Modernizr JS -->
    <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "js/vendor/modernizr-2.8.3.min.js\"></script>
</head>

<body>
<!--[if lt IE 8]>
<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Body main wrapper start -->
<div class=\"wrapper\">
    <!-- Start of header area -->
    <header>
        <div class=\"header-top-bar white-bg ptb-20\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-4\">
                        <div class=\"header-top\">
                            <ul>
                                <li class=\"lh-50\">
                                    <a href=\"#\" class=\"pr-20\"><i class=\"zmdi zmdi-search\"></i></a>
                                    <div class=\"header-bottom-search header-top-down header-top-hover lh-35\">
                                        <form class=\"header-search-box\" action=\"#\" method=\"POST\">
                                            <div>
                                                <input type=\"text\" value=\"\" placeholder=\"Search\" autocomplete=\"off\">
                                                <button class=\"btn btn-search\" type=\"submit\">
                                                    <i class=\"zmdi zmdi-search\"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                                <li class=\"lh-50\">
                                    <a href=\"#\" class=\"prl-20 text-uppercase\">USD</a>
                                    <div class=\"header-top-down header-top-hover pl-15 lh-35\">
                                        <ul>
                                            <li><a href=\"#\">USD</a></li>
                                            <li><a href=\"#\">Uero</a></li>
                                            <li><a href=\"#\">Taka</a></li>
                                            <li><a href=\"#\">Pound</a></li>
                                            <li><a href=\"#\">Rupi</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class=\"lh-50\">
                                    <a href=\"#\" class=\"prl-20 text-uppercase\">ENG</a>
                                    <div class=\"header-top-down header-top-hover header-top-down-lang pl-15 lh-35 lh-35\">
                                        <ul>
                                            <li><a href=\"#\">Bengali</a></li>
                                            <li><a href=\"#\">English</a></li>
                                            <li><a href=\"#\">French</a></li>
                                            <li><a href=\"#\">German</a></li>
                                            <li><a href=\"#\">Spanish</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <div class=\"header-logo text-center\">
                            <a href=\"";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">
                                <img style=\"height: 200px ;width: 200px\" src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("photos/abc.png"), "html", null, true);
        echo "\" alt=\"homepage\" class=\"light-logo\" />
                            </a>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <div class=\"header-top header-top-right\">
                            <ul>
                                <li class=\"lh-50\">
                                    <a href=\"#\" class=\"pr-20 text-uppercase\">account</a>
                                    <div class=\"header-top-down header-top-hover pl-15 lh-35\">
                                        <ul>
                                            <li><a href=\"";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Login</a></li>
                                            <li><a href=\"compare.html\">My bag</a></li>
                                            <li><a href=\"";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">Logout</a></li>
                                            <li><a href=\"wishlist.html\">Wishlist</a></li>
                                            <li><a href=\"";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("checkout");
        echo "\">CheckOut</a></li>
                                            <li><a href=\"wishlist.html\">Wishlist</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class=\"lh-50\">
                                    <a href=\"";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cart");
        echo "\" class=\"prl-20 text-uppercase\">check out</a>
                                </li>
                                <li class=\"cart-link lh-50\">
                                    <a href=\"#\" class=\"pl-20\">
                                        <i class=\"zmdi zmdi-shopping-cart\"></i>
                                        ";
        // line 119
        if (((isset($context["panier"]) || array_key_exists("panier", $context)) &&  !twig_test_empty(($context["panier"] ?? $this->getContext($context, "panier"))))) {
            // line 120
            echo "                                            <span>";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["panier"] ?? $this->getContext($context, "panier"))), "html", null, true);
            echo "</span>
                                        ";
        }
        // line 122
        echo "                                    </a>
                                    <div class=\"mini-cart-inner header-top-down p-20\">
                                        <ul class=\"cart-list\">
                                            ";
        // line 125
        if ((isset($context["panier"]) || array_key_exists("panier", $context))) {
            // line 126
            echo "                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["panier"] ?? $this->getContext($context, "panier")));
            foreach ($context['_seq'] as $context["p"] => $context["v"]) {
                // line 127
                echo "                                                    <li class=\"p-10 mb-15\">

                                                        <div class=\"product-details ml-10\">
                                                            <a href=\"";
                // line 130
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer", ["idd" => $context["p"], "calledfromcart" => false]), "html", null, true);
                echo "\" class=\"remove\">
                                                                <i class=\"zmdi zmdi-close\"></i>
                                                            </a>
                                                            <a href=\"#\" class=\"product-name mb-10\">";
                // line 133
                echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                echo "</a>
                                                            <span class=\"selected-size\">";
                // line 134
                echo twig_escape_filter($this->env, $context["v"], "html", null, true);
                echo " </span>
                                                        </div>
                                                    </li>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['p'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "                                            ";
        }
        // line 139
        echo "                                        </ul>
                                        <div class=\"border-bottom\"></div>
                                        <div class=\"cart-footer text-center\">
                                            <p class=\"total mtb-15\">
                                            </p>
                                            <p class=\"buttons m-0\">
                                                <a href=\"";
        // line 145
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cart");
        echo "\" class=\"button extra-small\">
                                                    <span>Checkout</span>
                                                </a>
                                            </p>
                                        </div>
                                    </div>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id=\"sticky-header\" class=\"header-area header-wrapper transparent-header\">
            <div class=\"header-middle-area black-bg\">
                <div class=\"container\">
                    <div class=\"full-width-mega-dropdown\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <nav id=\"primary-menu\">
                                    <ul class=\"main-menu text-center\">
                                        <li><a href=\"";
        // line 167
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Home</a></li>
                                        <li><a href=\"";
        // line 168
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficherCommandes");
        echo "\"> Commande </a></li>

                                        <li><a href=\"";
        // line 170
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficher_produitF");
        echo "\">Produits</a></li>
                                            <ul class=\"dropdown header-top-hover ptb-10\">
                                                <li><a href=\"blog.html\">Blog</a></li>
                                                <li><a href=\"blog-details.html\">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=\"";
        // line 176
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Register</a></li>
                                        <li><a href=\"contact.html\">Contact Us</a>
                                            <ul class=\"dropdown header-top-hover ptb-10\">
                                                <li><a href=\"";
        // line 179
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamation_new");
        echo "\">Réclamation</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=\"contact.html\">Assistance Guidée</a>
                                            <ul class=\"dropdown header-top-hover ptb-10\">
                                                <li><a href=\"";
        // line 184
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affrobot");
        echo "\">FaRobot Assistance</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu Start -->
        <div class=\"mobile-menu-area\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12\">
                        <div class=\"mobile-menu\">
                            <nav id=\"dropdown\">
                                <ul>
                                    <li><a href=\"";
        // line 203
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Home</a></li>
                                    <li><a href=\"about.html\">About</a></li>
                                    <li><a href=\"shop-full.html\">men</a></li>
                                    <li><a href=\"blog.html\">Blog</a>
                                        <ul class=\"dropdown header-top-hover ptb-10\">
                                            <li><a href=\"blog.html\">Blog</a></li>
                                            <li><a href=\"blog-details.html\">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"my-account.html\">my Acoount</a></li>
                                    <li><a href=\"";
        // line 213
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Register</a></li>
                                    <li><a href=\"contact.html\">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu End -->
    </header>

<body>
    ";
        // line 226
        $this->displayBlock('body', $context, $blocks);
        // line 228
        echo "</body>

    <footer id=\"footer\" class=\"footer-area\">
        <div class=\"footer-top-area gray-bg\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"footer-widget\">
                            <div class=\"footer-widget-img pb-30\">
                                <a href=\"#\">
                                    <img style=\"height: 100px ;width: 100px\" src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("photos/abc.png"), "html", null, true);
        echo "\" alt=\"homepage\" class=\"light-logo\" />
                                </a>
                            </div>
                            <ul class=\"toggle-footer text-white\">
                                <li class=\"mb-30 pl-45\">
                                    <i class=\"zmdi zmdi-pin\"></i>
                                    <p>House No 08, Road No 08, <br>
                                        Din Bari, Dhaka, Bangladesh</p>
                                </li>
                                <li class=\"mb-30 pl-45\">
                                    <i class=\"zmdi zmdi-email\"></i>
                                    <p>Username@gmail.com <br>
                                        Damo@gmail.com</p>
                                </li>
                                <li class=\"pl-45\">
                                    <i class=\"zmdi zmdi-phone\"></i>
                                    <p>+660 256 24857<br>
                                        +660 256 24857</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"text-white footer-information\">
                            <h4 class=\"pb-40 m-0 text-uppercase\">information</h4>
                            <ul class=\"footer-menu\">
                                <li><a href=\"#\"><i class=\"zmdi zmdi-chevron-right\"></i>Hot Sale</a></li>
                                <li><a href=\"#\"><i class=\"zmdi zmdi-chevron-right\"></i>best Seller</a></li>
                                <li><a href=\"#\"><i class=\"zmdi zmdi-chevron-right\"></i>Suppliers</a></li>
                                <li><a href=\"#\"><i class=\"zmdi zmdi-chevron-right\"></i>Our Store</a></li>
                                <li><a href=\"#\"><i class=\"zmdi zmdi-chevron-right\"></i>Deal of The Day</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"text-white footer-account\">
                            <h4 class=\"pb-40 m-0 text-uppercase\">MY ACCOUNT</h4>
                            <ul class=\"footer-menu\">
                                <li><a href=\"#\"><i class=\"zmdi zmdi-chevron-right\"></i>My Account</a></li>
                                <li><a href=\"#\"><i class=\"zmdi zmdi-chevron-right\"></i>Personal Information</a></li>
                                <li><a href=\"#\"><i class=\"zmdi zmdi-chevron-right\"></i>Discount</a></li>
                                <li><a href=\"#\"><i class=\"zmdi zmdi-chevron-right\"></i>Orders History</a></li>
                                <li><a href=\"#\"><i class=\"zmdi zmdi-chevron-right\"></i>Payment</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"text-white footer-about-us\">
                            <h4 class=\"pb-40 m-0 text-uppercase\">about us</h4>
                            <p>Lorem ipsum dolor sit amet, consecteir our adipisicing elit, sed do eiusmod tempor the incididunt ut labore et dolore magnaa liqua. Ut enim minimn.</p>
                            <ul class=\"footer-social-icon\">
                                <li><a href=\"#\"><i class=\"zmdi zmdi-facebook\"></i></a></li>
                                <li><a href=\"#\"><i class=\"zmdi zmdi-instagram\"></i></a></li>
                                <li><a href=\"#\"><i class=\"zmdi zmdi-rss\"></i></a></li>
                                <li><a href=\"#\"><i class=\"zmdi zmdi-twitter\"></i></a></li>
                                <li><a href=\"#\"><i class=\"zmdi zmdi-pinterest\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"footer-bottom black-bg ptb-15\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <div class=\"copyright text-white\">
                            <p>Copyright <i class=\"fa fa-copyright\"></i> 2018 <a href=\"https://freethemescloud.com/\" target=\"_blank\" >Free Themes Cloud.</a> All rights reserved. </p>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <div class=\"footer-img\">
                            <img src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/payment.png\" alt=\"\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer area -->
    <!--Quickview Product Start -->
    <div id=\"quickview-wrapper\">
        <!-- Modal -->
        <div class=\"modal fade\" id=\"productModal\" tabindex=\"-1\" role=\"dialog\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"modal-product\">
                            <div class=\"single-product-image\">
                                <div id=\"product-img-content\">
                                    <div id=\"my-tab-content\" class=\"tab-content mb-20\">
                                        <div class=\"tab-pane b-img active\" id=\"view1\">
                                            <a class=\"venobox\" href=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/product/product-details/1.jpg\" data-gall=\"gallery\" title=\"\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/product/product-details/1.jpg\" alt=\"\"></a>
                                        </div>
                                        <div class=\"tab-pane b-img\" id=\"view2\">
                                            <a class=\"venobox\" href=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/product/product-details/2.jpg\" data-gall=\"gallery\" title=\"\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/product/product-details/2.jpg\" alt=\"\"></a>
                                        </div>
                                        <div class=\"tab-pane b-img\" id=\"view3\">
                                            <a class=\"venobox\" href=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/product/product-details/3.jpg\" data-gall=\"gallery\" title=\"\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/product/product-details/3.jpg\" alt=\"\"></a>
                                        </div>
                                        <div class=\"tab-pane b-img\" id=\"view4\">
                                            <a class=\"venobox\" href=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/product/product-details/4.jpg\" data-gall=\"gallery\" title=\"\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/product/product-details/4.jpg\" alt=\"\"></a>
                                        </div>
                                    </div>
                                    <div id=\"viewproduct\" class=\"nav nav-tabs product-view bxslider\" data-tabs=\"tabs\">
                                        <div class=\"pro-view b-img active\"><a href=\"#view1\" data-toggle=\"tab\"><img src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/product/product-details/s-1.jpg\" alt=\"\"></a></div>
                                        <div class=\"pro-view b-img\"><a href=\"#view2\" data-toggle=\"tab\"><img src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/product/product-details/s-2.jpg\" alt=\"\"></a></div>
                                        <div class=\"pro-view b-img\"><a href=\"#view3\" data-toggle=\"tab\"><img src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/product/product-details/s-3.jpg\" alt=\"\"></a></div>
                                        <div class=\"pro-view b-img\"><a href=\"#view4\" data-toggle=\"tab\"><img src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/product/product-details/s-4.jpg\" alt=\"\"></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"product-details-content\">
                                <div class=\"product-content text-uppercase\">
                                    <a href=\"product-details.html\" title=\"Slim Shirt With Stretch\">Slim Shirt With Stretch</a>
                                    <div class=\"rating-icon pb-20 mt-10\">
                                        <i class=\"zmdi zmdi-star\"></i>
                                        <i class=\"zmdi zmdi-star\"></i>
                                        <i class=\"zmdi zmdi-star\"></i>
                                        <i class=\"zmdi zmdi-star-half\"></i>
                                        <i class=\"zmdi zmdi-star-half\"></i>
                                    </div>
                                    <div class=\"product-price pb-20\">
                                        <span class=\"new-price\">£ 185.00</span>
                                        <span class=\"old-price\">£ 200.00</span>
                                    </div>
                                </div>
                                <div class=\"product-view pb-20\">
                                    <h4 class=\"product-details-tilte text-uppercase\">overview</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. luptate. </p>
                                </div>
                                <div class=\"product-size text-uppercase pb-30\">
                                    <h4 class=\"product-details-tilte text-uppercase pb-10\">size</h4>
                                    <ul>
                                        <li><a href=\"#\">s</a></li>
                                        <li><a href=\"#\">m</a></li>
                                        <li><a href=\"#\">l</a></li>
                                        <li><a href=\"#\">xl</a></li>
                                        <li><a href=\"#\">xxl</a></li>
                                    </ul>
                                </div>
                                <div class=\"product-attributes clearfix\">
                                    <div class=\"product-color text-uppercase pb-30\">
                                        <h4 class=\"product-details-tilte text-uppercase pb-10\">color</h4>
                                        <ul>
                                            <li class=\"color-1\"><a href=\"#\"></a></li>
                                            <li class=\"color-2\"><a href=\"#\"></a></li>
                                            <li class=\"color-3\"><a href=\"#\"></a></li>
                                            <li class=\"color-4\"><a href=\"#\"></a></li>
                                        </ul>
                                    </div>
                                    <div class=\"pull-left\" id=\"quantity-wanted\">
                                        <h4 class=\"product-details-tilte text-uppercase pb-10\">quantity</h4>
                                        <input type=\"number\" value=\"1\">
                                    </div>
                                </div>
                                <div class=\"product-action-shop text-center mb-30\">
                                    <a href=\"#\" title=\"Quick view\">
                                        <i class=\"zmdi zmdi-eye\"></i>
                                    </a>
                                    <a href=\"#\" title=\"Add to cart\">
                                        <i class=\"zmdi zmdi-shopping-cart\"></i>
                                    </a>
                                    <a href=\"#\" title=\"Add to Wishlist\">
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
                            <!-- .product-info -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Quickview Product-->
</div>
<!-- Body main wrapper end -->

<!-- Placed js at the end of the document so the pages load faster -->

<!-- jquery latest version -->
<script src=\"";
        // line 431
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "js/vendor/jquery-3.1.1.min.js\"></script>
<!-- Bootstrap framework js -->
<script src=\"";
        // line 433
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "js/bootstrap.min.js\"></script>
<!-- Particles js -->
<script src=\"";
        // line 435
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "js/particles.js\"></script>
<!-- All js plugins included in this file. -->
<script src=\"";
        // line 437
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "js/plugins.js\"></script>
<!-- Main js file that contents all jQuery plugins activation. -->
<script src=\"";
        // line 439
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "js/main.js\"></script>
<script src=\"";
        // line 440
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "dist/js/moment.js \"></script>

<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>

<link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
";
        // line 445
        $this->displayBlock('js', $context, $blocks);
        // line 447
        echo "
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 226
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 227
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 445
    public function block_js($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  675 => 445,  665 => 227,  656 => 226,  643 => 447,  641 => 445,  633 => 440,  629 => 439,  624 => 437,  619 => 435,  614 => 433,  609 => 431,  524 => 349,  520 => 348,  516 => 347,  512 => 346,  503 => 342,  495 => 339,  487 => 336,  479 => 333,  453 => 310,  378 => 238,  366 => 228,  364 => 226,  348 => 213,  335 => 203,  313 => 184,  305 => 179,  299 => 176,  290 => 170,  285 => 168,  281 => 167,  256 => 145,  248 => 139,  245 => 138,  235 => 134,  231 => 133,  225 => 130,  220 => 127,  215 => 126,  213 => 125,  208 => 122,  202 => 120,  200 => 119,  192 => 114,  183 => 108,  178 => 106,  173 => 104,  159 => 93,  155 => 92,  92 => 32,  84 => 27,  79 => 25,  74 => 23,  69 => 21,  64 => 19,  59 => 17,  51 => 12,  38 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html class=\"no-js\" lang=\"zxx\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>Freak</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- Favicon -->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ asset(\"\") }}images/favicon.ico\">

    <!-- All css files are included here -->
    <!-- Bootstrap fremwork main css -->
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('freak/') }}css/bootstrap.min.css\">
    <!-- This core.css file contents all plugings css file. -->
    <link rel=\"stylesheet\" href=\"{{ asset('freak/') }}css/core.css\">
    <!-- Theme shortcodes/elements style -->
    <link rel=\"stylesheet\" href=\"{{ asset('freak/') }}css/shortcode/shortcodes.css\">
    <!-- Theme main style -->
    <link rel=\"stylesheet\" href=\"{{ asset('freak/') }}style.css\">
    <!-- Responsive css -->
    <link rel=\"stylesheet\" href=\"{{ asset('freak/') }}css/responsive.css\">
    <!-- User style -->
    <link rel=\"stylesheet\" href=\"{{ asset('freak/') }}css/custom.css\">



    <!-- Modernizr JS -->
    <script src=\"{{ asset('freak/') }}js/vendor/modernizr-2.8.3.min.js\"></script>
</head>

<body>
<!--[if lt IE 8]>
<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Body main wrapper start -->
<div class=\"wrapper\">
    <!-- Start of header area -->
    <header>
        <div class=\"header-top-bar white-bg ptb-20\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-4\">
                        <div class=\"header-top\">
                            <ul>
                                <li class=\"lh-50\">
                                    <a href=\"#\" class=\"pr-20\"><i class=\"zmdi zmdi-search\"></i></a>
                                    <div class=\"header-bottom-search header-top-down header-top-hover lh-35\">
                                        <form class=\"header-search-box\" action=\"#\" method=\"POST\">
                                            <div>
                                                <input type=\"text\" value=\"\" placeholder=\"Search\" autocomplete=\"off\">
                                                <button class=\"btn btn-search\" type=\"submit\">
                                                    <i class=\"zmdi zmdi-search\"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                                <li class=\"lh-50\">
                                    <a href=\"#\" class=\"prl-20 text-uppercase\">USD</a>
                                    <div class=\"header-top-down header-top-hover pl-15 lh-35\">
                                        <ul>
                                            <li><a href=\"#\">USD</a></li>
                                            <li><a href=\"#\">Uero</a></li>
                                            <li><a href=\"#\">Taka</a></li>
                                            <li><a href=\"#\">Pound</a></li>
                                            <li><a href=\"#\">Rupi</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class=\"lh-50\">
                                    <a href=\"#\" class=\"prl-20 text-uppercase\">ENG</a>
                                    <div class=\"header-top-down header-top-hover header-top-down-lang pl-15 lh-35 lh-35\">
                                        <ul>
                                            <li><a href=\"#\">Bengali</a></li>
                                            <li><a href=\"#\">English</a></li>
                                            <li><a href=\"#\">French</a></li>
                                            <li><a href=\"#\">German</a></li>
                                            <li><a href=\"#\">Spanish</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <div class=\"header-logo text-center\">
                            <a href=\"{{ path('homepage') }}\">
                                <img style=\"height: 200px ;width: 200px\" src=\"{{ asset('photos/abc.png') }}\" alt=\"homepage\" class=\"light-logo\" />
                            </a>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <div class=\"header-top header-top-right\">
                            <ul>
                                <li class=\"lh-50\">
                                    <a href=\"#\" class=\"pr-20 text-uppercase\">account</a>
                                    <div class=\"header-top-down header-top-hover pl-15 lh-35\">
                                        <ul>
                                            <li><a href=\"{{ path('fos_user_security_login') }}\">Login</a></li>
                                            <li><a href=\"compare.html\">My bag</a></li>
                                            <li><a href=\"{{ path('fos_user_security_logout') }}\">Logout</a></li>
                                            <li><a href=\"wishlist.html\">Wishlist</a></li>
                                            <li><a href=\"{{ path('checkout') }}\">CheckOut</a></li>
                                            <li><a href=\"wishlist.html\">Wishlist</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class=\"lh-50\">
                                    <a href=\"{{ path('cart') }}\" class=\"prl-20 text-uppercase\">check out</a>
                                </li>
                                <li class=\"cart-link lh-50\">
                                    <a href=\"#\" class=\"pl-20\">
                                        <i class=\"zmdi zmdi-shopping-cart\"></i>
                                        {% if panier is defined and panier is not empty %}
                                            <span>{{ panier|length }}</span>
                                        {% endif %}
                                    </a>
                                    <div class=\"mini-cart-inner header-top-down p-20\">
                                        <ul class=\"cart-list\">
                                            {% if panier is defined %}
                                                {% for p,v in panier %}
                                                    <li class=\"p-10 mb-15\">

                                                        <div class=\"product-details ml-10\">
                                                            <a href=\"{{ path('supprimer',{'idd':p,'calledfromcart':false}) }}\" class=\"remove\">
                                                                <i class=\"zmdi zmdi-close\"></i>
                                                            </a>
                                                            <a href=\"#\" class=\"product-name mb-10\">{{p}}</a>
                                                            <span class=\"selected-size\">{{ v }} </span>
                                                        </div>
                                                    </li>
                                                {% endfor %}
                                            {% endif %}
                                        </ul>
                                        <div class=\"border-bottom\"></div>
                                        <div class=\"cart-footer text-center\">
                                            <p class=\"total mtb-15\">
                                            </p>
                                            <p class=\"buttons m-0\">
                                                <a href=\"{{ path('cart') }}\" class=\"button extra-small\">
                                                    <span>Checkout</span>
                                                </a>
                                            </p>
                                        </div>
                                    </div>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id=\"sticky-header\" class=\"header-area header-wrapper transparent-header\">
            <div class=\"header-middle-area black-bg\">
                <div class=\"container\">
                    <div class=\"full-width-mega-dropdown\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <nav id=\"primary-menu\">
                                    <ul class=\"main-menu text-center\">
                                        <li><a href=\"{{ path('homepage') }}\">Home</a></li>
                                        <li><a href=\"{{ path('afficherCommandes')}}\"> Commande </a></li>

                                        <li><a href=\"{{ path('afficher_produitF') }}\">Produits</a></li>
                                            <ul class=\"dropdown header-top-hover ptb-10\">
                                                <li><a href=\"blog.html\">Blog</a></li>
                                                <li><a href=\"blog-details.html\">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=\"{{ path('fos_user_registration_register') }}\">Register</a></li>
                                        <li><a href=\"contact.html\">Contact Us</a>
                                            <ul class=\"dropdown header-top-hover ptb-10\">
                                                <li><a href=\"{{ path('reclamation_new') }}\">Réclamation</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=\"contact.html\">Assistance Guidée</a>
                                            <ul class=\"dropdown header-top-hover ptb-10\">
                                                <li><a href=\"{{ path('affrobot') }}\">FaRobot Assistance</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu Start -->
        <div class=\"mobile-menu-area\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12\">
                        <div class=\"mobile-menu\">
                            <nav id=\"dropdown\">
                                <ul>
                                    <li><a href=\"{{ path('homepage') }}\">Home</a></li>
                                    <li><a href=\"about.html\">About</a></li>
                                    <li><a href=\"shop-full.html\">men</a></li>
                                    <li><a href=\"blog.html\">Blog</a>
                                        <ul class=\"dropdown header-top-hover ptb-10\">
                                            <li><a href=\"blog.html\">Blog</a></li>
                                            <li><a href=\"blog-details.html\">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"my-account.html\">my Acoount</a></li>
                                    <li><a href=\"{{ path('fos_user_registration_register') }}\">Register</a></li>
                                    <li><a href=\"contact.html\">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu End -->
    </header>

<body>
    {% block body %}
    {% endblock %}
</body>

    <footer id=\"footer\" class=\"footer-area\">
        <div class=\"footer-top-area gray-bg\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"footer-widget\">
                            <div class=\"footer-widget-img pb-30\">
                                <a href=\"#\">
                                    <img style=\"height: 100px ;width: 100px\" src=\"{{ asset('photos/abc.png') }}\" alt=\"homepage\" class=\"light-logo\" />
                                </a>
                            </div>
                            <ul class=\"toggle-footer text-white\">
                                <li class=\"mb-30 pl-45\">
                                    <i class=\"zmdi zmdi-pin\"></i>
                                    <p>House No 08, Road No 08, <br>
                                        Din Bari, Dhaka, Bangladesh</p>
                                </li>
                                <li class=\"mb-30 pl-45\">
                                    <i class=\"zmdi zmdi-email\"></i>
                                    <p>Username@gmail.com <br>
                                        Damo@gmail.com</p>
                                </li>
                                <li class=\"pl-45\">
                                    <i class=\"zmdi zmdi-phone\"></i>
                                    <p>+660 256 24857<br>
                                        +660 256 24857</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"text-white footer-information\">
                            <h4 class=\"pb-40 m-0 text-uppercase\">information</h4>
                            <ul class=\"footer-menu\">
                                <li><a href=\"#\"><i class=\"zmdi zmdi-chevron-right\"></i>Hot Sale</a></li>
                                <li><a href=\"#\"><i class=\"zmdi zmdi-chevron-right\"></i>best Seller</a></li>
                                <li><a href=\"#\"><i class=\"zmdi zmdi-chevron-right\"></i>Suppliers</a></li>
                                <li><a href=\"#\"><i class=\"zmdi zmdi-chevron-right\"></i>Our Store</a></li>
                                <li><a href=\"#\"><i class=\"zmdi zmdi-chevron-right\"></i>Deal of The Day</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"text-white footer-account\">
                            <h4 class=\"pb-40 m-0 text-uppercase\">MY ACCOUNT</h4>
                            <ul class=\"footer-menu\">
                                <li><a href=\"#\"><i class=\"zmdi zmdi-chevron-right\"></i>My Account</a></li>
                                <li><a href=\"#\"><i class=\"zmdi zmdi-chevron-right\"></i>Personal Information</a></li>
                                <li><a href=\"#\"><i class=\"zmdi zmdi-chevron-right\"></i>Discount</a></li>
                                <li><a href=\"#\"><i class=\"zmdi zmdi-chevron-right\"></i>Orders History</a></li>
                                <li><a href=\"#\"><i class=\"zmdi zmdi-chevron-right\"></i>Payment</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"text-white footer-about-us\">
                            <h4 class=\"pb-40 m-0 text-uppercase\">about us</h4>
                            <p>Lorem ipsum dolor sit amet, consecteir our adipisicing elit, sed do eiusmod tempor the incididunt ut labore et dolore magnaa liqua. Ut enim minimn.</p>
                            <ul class=\"footer-social-icon\">
                                <li><a href=\"#\"><i class=\"zmdi zmdi-facebook\"></i></a></li>
                                <li><a href=\"#\"><i class=\"zmdi zmdi-instagram\"></i></a></li>
                                <li><a href=\"#\"><i class=\"zmdi zmdi-rss\"></i></a></li>
                                <li><a href=\"#\"><i class=\"zmdi zmdi-twitter\"></i></a></li>
                                <li><a href=\"#\"><i class=\"zmdi zmdi-pinterest\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"footer-bottom black-bg ptb-15\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <div class=\"copyright text-white\">
                            <p>Copyright <i class=\"fa fa-copyright\"></i> 2018 <a href=\"https://freethemescloud.com/\" target=\"_blank\" >Free Themes Cloud.</a> All rights reserved. </p>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <div class=\"footer-img\">
                            <img src=\"{{ asset('freak/') }}images/payment.png\" alt=\"\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer area -->
    <!--Quickview Product Start -->
    <div id=\"quickview-wrapper\">
        <!-- Modal -->
        <div class=\"modal fade\" id=\"productModal\" tabindex=\"-1\" role=\"dialog\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"modal-product\">
                            <div class=\"single-product-image\">
                                <div id=\"product-img-content\">
                                    <div id=\"my-tab-content\" class=\"tab-content mb-20\">
                                        <div class=\"tab-pane b-img active\" id=\"view1\">
                                            <a class=\"venobox\" href=\"{{ asset('freak/') }}images/product/product-details/1.jpg\" data-gall=\"gallery\" title=\"\"><img src=\"{{ asset('freak/') }}images/product/product-details/1.jpg\" alt=\"\"></a>
                                        </div>
                                        <div class=\"tab-pane b-img\" id=\"view2\">
                                            <a class=\"venobox\" href=\"{{ asset('freak/') }}images/product/product-details/2.jpg\" data-gall=\"gallery\" title=\"\"><img src=\"{{ asset('freak/') }}images/product/product-details/2.jpg\" alt=\"\"></a>
                                        </div>
                                        <div class=\"tab-pane b-img\" id=\"view3\">
                                            <a class=\"venobox\" href=\"{{ asset('freak/') }}images/product/product-details/3.jpg\" data-gall=\"gallery\" title=\"\"><img src=\"{{ asset('freak/') }}images/product/product-details/3.jpg\" alt=\"\"></a>
                                        </div>
                                        <div class=\"tab-pane b-img\" id=\"view4\">
                                            <a class=\"venobox\" href=\"{{ asset('freak/') }}images/product/product-details/4.jpg\" data-gall=\"gallery\" title=\"\"><img src=\"{{ asset('freak/') }}images/product/product-details/4.jpg\" alt=\"\"></a>
                                        </div>
                                    </div>
                                    <div id=\"viewproduct\" class=\"nav nav-tabs product-view bxslider\" data-tabs=\"tabs\">
                                        <div class=\"pro-view b-img active\"><a href=\"#view1\" data-toggle=\"tab\"><img src=\"{{ asset('freak/') }}images/product/product-details/s-1.jpg\" alt=\"\"></a></div>
                                        <div class=\"pro-view b-img\"><a href=\"#view2\" data-toggle=\"tab\"><img src=\"{{ asset('freak/') }}images/product/product-details/s-2.jpg\" alt=\"\"></a></div>
                                        <div class=\"pro-view b-img\"><a href=\"#view3\" data-toggle=\"tab\"><img src=\"{{ asset('freak/') }}images/product/product-details/s-3.jpg\" alt=\"\"></a></div>
                                        <div class=\"pro-view b-img\"><a href=\"#view4\" data-toggle=\"tab\"><img src=\"{{ asset('freak/') }}images/product/product-details/s-4.jpg\" alt=\"\"></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"product-details-content\">
                                <div class=\"product-content text-uppercase\">
                                    <a href=\"product-details.html\" title=\"Slim Shirt With Stretch\">Slim Shirt With Stretch</a>
                                    <div class=\"rating-icon pb-20 mt-10\">
                                        <i class=\"zmdi zmdi-star\"></i>
                                        <i class=\"zmdi zmdi-star\"></i>
                                        <i class=\"zmdi zmdi-star\"></i>
                                        <i class=\"zmdi zmdi-star-half\"></i>
                                        <i class=\"zmdi zmdi-star-half\"></i>
                                    </div>
                                    <div class=\"product-price pb-20\">
                                        <span class=\"new-price\">£ 185.00</span>
                                        <span class=\"old-price\">£ 200.00</span>
                                    </div>
                                </div>
                                <div class=\"product-view pb-20\">
                                    <h4 class=\"product-details-tilte text-uppercase\">overview</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. luptate. </p>
                                </div>
                                <div class=\"product-size text-uppercase pb-30\">
                                    <h4 class=\"product-details-tilte text-uppercase pb-10\">size</h4>
                                    <ul>
                                        <li><a href=\"#\">s</a></li>
                                        <li><a href=\"#\">m</a></li>
                                        <li><a href=\"#\">l</a></li>
                                        <li><a href=\"#\">xl</a></li>
                                        <li><a href=\"#\">xxl</a></li>
                                    </ul>
                                </div>
                                <div class=\"product-attributes clearfix\">
                                    <div class=\"product-color text-uppercase pb-30\">
                                        <h4 class=\"product-details-tilte text-uppercase pb-10\">color</h4>
                                        <ul>
                                            <li class=\"color-1\"><a href=\"#\"></a></li>
                                            <li class=\"color-2\"><a href=\"#\"></a></li>
                                            <li class=\"color-3\"><a href=\"#\"></a></li>
                                            <li class=\"color-4\"><a href=\"#\"></a></li>
                                        </ul>
                                    </div>
                                    <div class=\"pull-left\" id=\"quantity-wanted\">
                                        <h4 class=\"product-details-tilte text-uppercase pb-10\">quantity</h4>
                                        <input type=\"number\" value=\"1\">
                                    </div>
                                </div>
                                <div class=\"product-action-shop text-center mb-30\">
                                    <a href=\"#\" title=\"Quick view\">
                                        <i class=\"zmdi zmdi-eye\"></i>
                                    </a>
                                    <a href=\"#\" title=\"Add to cart\">
                                        <i class=\"zmdi zmdi-shopping-cart\"></i>
                                    </a>
                                    <a href=\"#\" title=\"Add to Wishlist\">
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
                            <!-- .product-info -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Quickview Product-->
</div>
<!-- Body main wrapper end -->

<!-- Placed js at the end of the document so the pages load faster -->

<!-- jquery latest version -->
<script src=\"{{ asset('freak/') }}js/vendor/jquery-3.1.1.min.js\"></script>
<!-- Bootstrap framework js -->
<script src=\"{{ asset('freak/') }}js/bootstrap.min.js\"></script>
<!-- Particles js -->
<script src=\"{{ asset('freak/') }}js/particles.js\"></script>
<!-- All js plugins included in this file. -->
<script src=\"{{ asset('freak/') }}js/plugins.js\"></script>
<!-- Main js file that contents all jQuery plugins activation. -->
<script src=\"{{ asset('freak/') }}js/main.js\"></script>
<script src=\"{{ asset('back/') }}dist/js/moment.js \"></script>

<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>

<link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
{% block js %}
{% endblock %}

</body>

</html>", "base.html.twig", "C:\\xampp\\htdocs\\pi\\app\\Resources\\views\\base.html.twig");
    }
}

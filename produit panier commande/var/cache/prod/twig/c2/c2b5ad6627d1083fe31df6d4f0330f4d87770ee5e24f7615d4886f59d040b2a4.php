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
class __TwigTemplate_581dc428dca7174cd7233d822d5c1ec09fe3d262625b2074028dcb1066212f23 extends \Twig\Template
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
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "css/bootstrap.min.css\">
    <!-- This core.css file contents all plugings css file. -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "css/core.css\">
    <!-- Theme shortcodes/elements style -->
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "css/shortcode/shortcodes.css\">
    <!-- Theme main style -->
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "style.css\">
    <!-- Responsive css -->
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "css/responsive.css\">
    <!-- User style -->
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "css/custom.css\">


    <!-- Modernizr JS -->
    <script src=\"";
        // line 30
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
                            <a href=\"index.html\">
                                <img alt=\"\" src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/logo/logo.png\">
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
                                            <li><a href=\"login.html\">Login</a></li>
                                            <li><a href=\"compare.html\">My bag</a></li>
                                            <li><a href=\"checkout.html\">Checkout</a></li>
                                            <li><a href=\"wishlist.html\">Wishlist</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class=\"lh-50\">
                                    <a href=\"checkout.html\" class=\"prl-20 text-uppercase\">check out</a>
                                </li>
                                <li class=\"cart-link lh-50\">
                                    <a href=\"#\" class=\"pl-20\">
                                        <i class=\"zmdi zmdi-shopping-cart\"></i>
                                        <span>2</span>
                                    </a>
                                    <div class=\"mini-cart-inner header-top-down p-20\">
                                        <ul class=\"cart-list\">
                                            <li class=\"p-10 mb-15\">
                                                <a href=\"#\" class=\"product-image\">
                                                    <img src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/shop/cart/1.jpg\" alt=\"\">
                                                </a>
                                                <div class=\"product-details ml-10\">
                                                    <a href=\"#\" class=\"remove\">
                                                        <i class=\"zmdi zmdi-close\"></i>
                                                    </a>
                                                    <a href=\"#\" class=\"product-name mb-10\">Men’s Black T..</a>
                                                    <span class=\"selected-color\">Color:  Black</span>
                                                    <span class=\"selected-size\">\$80.00</span>
                                                </div>
                                            </li>
                                            <li class=\"p-10 mb-15\">
                                                <a href=\"#\" class=\"product-image\">
                                                    <img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/shop/cart/2.jpg\" alt=\"\">
                                                </a>
                                                <div class=\"product-details ml-10\">
                                                    <a href=\"#\" class=\"remove\">
                                                        <i class=\"zmdi zmdi-close\"></i>
                                                    </a>
                                                    <a href=\"#\" class=\"product-name mb-10\">Men’s Black T..</a>
                                                    <span class=\"selected-color\">Color:  white</span>
                                                    <span class=\"selected-size\">\$65.00</span>
                                                </div>
                                            </li>
                                            <li class=\"p-10 mb-15\">
                                                <a href=\"#\" class=\"product-image\">
                                                    <img src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/shop/cart/3.jpg\" alt=\"\">
                                                </a>
                                                <div class=\"product-details ml-10\">
                                                    <a href=\"#\" class=\"remove\">
                                                        <i class=\"zmdi zmdi-close\"></i>
                                                    </a>
                                                    <a href=\"#\" class=\"product-name mb-10\">Men’s Black T..</a>
                                                    <span class=\"selected-color\">Color:  Red</span>
                                                    <span class=\"selected-size\">\$100.00</span>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class=\"border-bottom\"></div>
                                        <div class=\"cart-footer text-center\">
                                            <p class=\"total mtb-15\">
                                                Subtotal:
                                                <span class=\"ml-35\">\$190.98</span>
                                            </p>
                                            <p class=\"buttons m-0\">
                                                <a href=\"#\" class=\"button extra-small\">
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
                                        <li><a href=\"index.html\">Home</a></li>
                                        <li><a href=\"about.html\">About</a></li>
                                        <li><a href=\"shop-full.html\">men</a></li>
                                        <li><a href=\"blog.html\">Blog</a>
                                            <ul class=\"dropdown header-top-hover ptb-10\">
                                                <li><a href=\"blog.html\">Blog</a></li>
                                                <li><a href=\"blog-details.html\">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=\"my-account.html\">my Acoount</a></li>
                                        <li><a href=\"login.html\">Register</a></li>
                                        <li><a href=\"contact.html\">Contact Us</a></li>
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
                                    <li><a href=\"index.html\">Home</a></li>
                                    <li><a href=\"about.html\">About</a></li>
                                    <li><a href=\"shop-full.html\">men</a></li>
                                    <li><a href=\"blog.html\">Blog</a>
                                        <ul class=\"dropdown header-top-hover ptb-10\">
                                            <li><a href=\"blog.html\">Blog</a></li>
                                            <li><a href=\"blog-details.html\">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"my-account.html\">my Acoount</a></li>
                                    <li><a href=\"login.html\">Register</a></li>
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


    ";
        // line 238
        $this->displayBlock('body', $context, $blocks);
        // line 240
        echo "

    <footer id=\"footer\" class=\"footer-area\">
        <div class=\"footer-top-area gray-bg\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"footer-widget\">
                            <div class=\"footer-widget-img pb-30\">
                                <a href=\"#\">
                                    <img src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/logo/logo-2.png\" alt=\"\">
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
        // line 322
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
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/product/product-details/1.jpg\" data-gall=\"gallery\" title=\"\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/product/product-details/1.jpg\" alt=\"\"></a>
                                        </div>
                                        <div class=\"tab-pane b-img\" id=\"view2\">
                                            <a class=\"venobox\" href=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/product/product-details/2.jpg\" data-gall=\"gallery\" title=\"\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/product/product-details/2.jpg\" alt=\"\"></a>
                                        </div>
                                        <div class=\"tab-pane b-img\" id=\"view3\">
                                            <a class=\"venobox\" href=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/product/product-details/3.jpg\" data-gall=\"gallery\" title=\"\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/product/product-details/3.jpg\" alt=\"\"></a>
                                        </div>
                                        <div class=\"tab-pane b-img\" id=\"view4\">
                                            <a class=\"venobox\" href=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/product/product-details/4.jpg\" data-gall=\"gallery\" title=\"\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/product/product-details/4.jpg\" alt=\"\"></a>
                                        </div>
                                    </div>
                                    <div id=\"viewproduct\" class=\"nav nav-tabs product-view bxslider\" data-tabs=\"tabs\">
                                        <div class=\"pro-view b-img active\"><a href=\"#view1\" data-toggle=\"tab\"><img src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/product/product-details/s-1.jpg\" alt=\"\"></a></div>
                                        <div class=\"pro-view b-img\"><a href=\"#view2\" data-toggle=\"tab\"><img src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/product/product-details/s-2.jpg\" alt=\"\"></a></div>
                                        <div class=\"pro-view b-img\"><a href=\"#view3\" data-toggle=\"tab\"><img src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/product/product-details/s-3.jpg\" alt=\"\"></a></div>
                                        <div class=\"pro-view b-img\"><a href=\"#view4\" data-toggle=\"tab\"><img src=\"";
        // line 361
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
        // line 443
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "js/vendor/jquery-3.1.1.min.js\"></script>
<!-- Bootstrap framework js -->
<script src=\"";
        // line 445
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "js/bootstrap.min.js\"></script>
<!-- Particles js -->
<script src=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "js/particles.js\"></script>
<!-- All js plugins included in this file. -->
<script src=\"";
        // line 449
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "js/plugins.js\"></script>
<!-- Main js file that contents all jQuery plugins activation. -->
<script src=\"";
        // line 451
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "js/main.js\"></script>

";
        // line 453
        $this->displayBlock('js', $context, $blocks);
        // line 455
        echo "
</body>

</html>";
    }

    // line 238
    public function block_body($context, array $blocks = [])
    {
        // line 239
        echo "    ";
    }

    // line 453
    public function block_js($context, array $blocks = [])
    {
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
        return array (  593 => 453,  589 => 239,  586 => 238,  579 => 455,  577 => 453,  572 => 451,  567 => 449,  562 => 447,  557 => 445,  552 => 443,  467 => 361,  463 => 360,  459 => 359,  455 => 358,  446 => 354,  438 => 351,  430 => 348,  422 => 345,  396 => 322,  321 => 250,  309 => 240,  307 => 238,  213 => 147,  197 => 134,  181 => 121,  148 => 91,  84 => 30,  77 => 26,  72 => 24,  67 => 22,  62 => 20,  57 => 18,  52 => 16,  45 => 12,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "C:\\wamp64\\www\\PI-DEV\\pi\\app\\Resources\\views\\base.html.twig");
    }
}

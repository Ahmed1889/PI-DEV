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

/* default/index.html.twig */
class __TwigTemplate_8ef64b767f2571e38c6bdbb9b192a3330bb0e4660c39bf7cc4927a2ead964d24 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        echo "    <div class=\"slider-area\">
        <div id=\"ensign-nivoslider\" class=\"slides\">


            <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("photos/abcd.jpg"), "html", null, true);
        echo "\" alt=\"\" title=\"#htmlcaption1\"/>
            <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("photos/abcd.jpg"), "html", null, true);
        echo "\" alt=\"\" title=\"#htmlcaption2\"/>
        </div>
        <!-- direction 1 -->
        <div id=\"htmlcaption1\" class=\"nivo-html-caption slider-caption-1\">
            <div class=\"container slider-height\">
                <div class=\"row slider-height\">
                    <div class=\"col-md-offset-5 col-md-7 slider-height\">
                    </div>
                </div>
            </div>
        </div>
        <!-- direction 2 -->
        <div id=\"htmlcaption2\" class=\"nivo-html-caption slider-caption-2\">
            <div class=\"container slider-height\">
                <div class=\"row slider-height\">
                    <div class=\"col-md-offset-5 col-md-7 slider-height\">
                        <div class=\"slide-text\">
                            <div class=\"cap-title cap-main-title wow bounceInDown mb-35 text-uppercase text-white\" data-wow-duration=\"0.5s\" data-wow-delay=\"0s\">
                                <h2><strong>2020</strong></h2>
                            </div>
                            <div class=\"cap-sub-title cap-main-title wow bounceInDown mb-40 text-uppercase text-white\" data-wow-duration=\"1s\" data-wow-delay=\"0s\">
                                <h2>boutique special collection</h2>
                            </div>
                            <div class=\"cap-sub-title wow bounceInDown mb-30 text-white\" data-wow-duration=\"1.5s\" data-wow-delay=\"0s\">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ipsum dolor sit amet labore et dolore</p>
                            </div>
                            <div class=\"cap-shop wow bounceInUp\" data-wow-duration=\"2s\" data-wow-delay=\".5s\">
                                <a href=\"#\" class=\"button extra-small text-uppercase\">
                                    <span>Shop now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of slider area -->
    <!-- Start page content -->
    <section id=\"page-content\" class=\"page-wrapper\">
        <!-- Start Banner Area -->
        <!-- End of Banner Area -->
        <!-- Start Product List -->
        <!-- End of Product List -->
        <!-- Start Service Area -->
        <div class=\"service-area section-padding\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-4\">
                        <div class=\"single-item text-white pl-120\">
                            <i class=\"zmdi zmdi-shopping-cart\"></i>
                            <h4>FREE SHipping</h4>
                            <p>Lorem ipsum dolor sit amet, onsectetur adipisicing</p>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <div class=\"single-item text-white pl-120\">
                            <i class=\"zmdi zmdi-headset\"></i>
                            <h4>24/7 SUPPORT</h4>
                            <p>Lorem ipsum dolor sit amet, onsectetur adipisicing</p>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <div class=\"single-item text-white pl-120 rm-0\">
                            <i class=\"zmdi zmdi-balance-wallet\"></i>
                            <h4>100% MONEY BACK</h4>
                            <p>Lorem ipsum dolor sit amet, onsectetur adipisicing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Service Area -->
        <!-- Start Sale  Area -->
        <!-- End Of Sale  Area -->
        <!-- Start Testimonial Area -->
        <div class=\"testimonial-area\">
            <div id=\"particles-js\" class=\"pt-90 pb-50\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"testimonial-title text-white text-uppercase text-center mb-40\">
                                <h4>MAXI ENTREPOT</h4>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-offset-2 col-md-8\">
                            <div class=\"testimonial-list\">
                                <div class=\"single-testimonial text-center\">
                                    <img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("photos/abc.png"), "html", null, true);
        echo "\" alt=\"homepage\" class=\"light-logo\" />

                                    <div class=\"testimonial-info white-bg clearfix\">
                                        <div class=\"testimonial-author text-uppercase\">
                                            <h5>ANIKA MOLLIK</h5>
                                            <p>chairmen</p>
                                        </div>
                                        <p>consectetur adipisicing elit, sed do eiusmod tempor  incididunt
                                            labore et dolore magna aliqua. Ut enim ad minim veniam,voluptate velit esse cillu nulla pariatur. Excepteur sint occaecat</p>
                                    </div>
                                </div>
                                <div class=\"single-testimonial text-center\">
                                    <img alt=\"\" src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("photos/abcd.jpg"), "html", null, true);
        echo "\">
                                    <div class=\"testimonial-info white-bg clearfix\">
                                        <div class=\"testimonial-author text-uppercase\">
                                            <h5>Ashim Kumar</h5>
                                            <p>CEO</p>
                                        </div>
                                        <p>consectetur adipisicing elit, sed do eiusmod tempor  incididunt
                                            labore et dolore magna aliqua. Ut enim ad minim veniam,voluptate velit esse cillu nulla pariatur. Excepteur sint occaecat</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Testimonial Area -->
        <!-- Start Blog Area -->
        <!-- End Of Blog Area -->
        <!-- Start Brand Area -->
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

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 111,  163 => 99,  70 => 9,  66 => 8,  60 => 4,  51 => 3,  29 => 1,);
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
    <div class=\"slider-area\">
        <div id=\"ensign-nivoslider\" class=\"slides\">


            <img src=\"{{ asset('photos/abcd.jpg') }}\" alt=\"\" title=\"#htmlcaption1\"/>
            <img src=\"{{ asset('photos/abcd.jpg') }}\" alt=\"\" title=\"#htmlcaption2\"/>
        </div>
        <!-- direction 1 -->
        <div id=\"htmlcaption1\" class=\"nivo-html-caption slider-caption-1\">
            <div class=\"container slider-height\">
                <div class=\"row slider-height\">
                    <div class=\"col-md-offset-5 col-md-7 slider-height\">
                    </div>
                </div>
            </div>
        </div>
        <!-- direction 2 -->
        <div id=\"htmlcaption2\" class=\"nivo-html-caption slider-caption-2\">
            <div class=\"container slider-height\">
                <div class=\"row slider-height\">
                    <div class=\"col-md-offset-5 col-md-7 slider-height\">
                        <div class=\"slide-text\">
                            <div class=\"cap-title cap-main-title wow bounceInDown mb-35 text-uppercase text-white\" data-wow-duration=\"0.5s\" data-wow-delay=\"0s\">
                                <h2><strong>2020</strong></h2>
                            </div>
                            <div class=\"cap-sub-title cap-main-title wow bounceInDown mb-40 text-uppercase text-white\" data-wow-duration=\"1s\" data-wow-delay=\"0s\">
                                <h2>boutique special collection</h2>
                            </div>
                            <div class=\"cap-sub-title wow bounceInDown mb-30 text-white\" data-wow-duration=\"1.5s\" data-wow-delay=\"0s\">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ipsum dolor sit amet labore et dolore</p>
                            </div>
                            <div class=\"cap-shop wow bounceInUp\" data-wow-duration=\"2s\" data-wow-delay=\".5s\">
                                <a href=\"#\" class=\"button extra-small text-uppercase\">
                                    <span>Shop now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of slider area -->
    <!-- Start page content -->
    <section id=\"page-content\" class=\"page-wrapper\">
        <!-- Start Banner Area -->
        <!-- End of Banner Area -->
        <!-- Start Product List -->
        <!-- End of Product List -->
        <!-- Start Service Area -->
        <div class=\"service-area section-padding\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-4\">
                        <div class=\"single-item text-white pl-120\">
                            <i class=\"zmdi zmdi-shopping-cart\"></i>
                            <h4>FREE SHipping</h4>
                            <p>Lorem ipsum dolor sit amet, onsectetur adipisicing</p>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <div class=\"single-item text-white pl-120\">
                            <i class=\"zmdi zmdi-headset\"></i>
                            <h4>24/7 SUPPORT</h4>
                            <p>Lorem ipsum dolor sit amet, onsectetur adipisicing</p>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <div class=\"single-item text-white pl-120 rm-0\">
                            <i class=\"zmdi zmdi-balance-wallet\"></i>
                            <h4>100% MONEY BACK</h4>
                            <p>Lorem ipsum dolor sit amet, onsectetur adipisicing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Service Area -->
        <!-- Start Sale  Area -->
        <!-- End Of Sale  Area -->
        <!-- Start Testimonial Area -->
        <div class=\"testimonial-area\">
            <div id=\"particles-js\" class=\"pt-90 pb-50\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"testimonial-title text-white text-uppercase text-center mb-40\">
                                <h4>MAXI ENTREPOT</h4>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-offset-2 col-md-8\">
                            <div class=\"testimonial-list\">
                                <div class=\"single-testimonial text-center\">
                                    <img src=\"{{ asset('photos/abc.png') }}\" alt=\"homepage\" class=\"light-logo\" />

                                    <div class=\"testimonial-info white-bg clearfix\">
                                        <div class=\"testimonial-author text-uppercase\">
                                            <h5>ANIKA MOLLIK</h5>
                                            <p>chairmen</p>
                                        </div>
                                        <p>consectetur adipisicing elit, sed do eiusmod tempor  incididunt
                                            labore et dolore magna aliqua. Ut enim ad minim veniam,voluptate velit esse cillu nulla pariatur. Excepteur sint occaecat</p>
                                    </div>
                                </div>
                                <div class=\"single-testimonial text-center\">
                                    <img alt=\"\" src=\"{{ asset('photos/abcd.jpg') }}\">
                                    <div class=\"testimonial-info white-bg clearfix\">
                                        <div class=\"testimonial-author text-uppercase\">
                                            <h5>Ashim Kumar</h5>
                                            <p>CEO</p>
                                        </div>
                                        <p>consectetur adipisicing elit, sed do eiusmod tempor  incididunt
                                            labore et dolore magna aliqua. Ut enim ad minim veniam,voluptate velit esse cillu nulla pariatur. Excepteur sint occaecat</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Testimonial Area -->
        <!-- Start Blog Area -->
        <!-- End Of Blog Area -->
        <!-- Start Brand Area -->
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
{% endblock %}
", "default/index.html.twig", "C:\\xampp\\htdocs\\pi\\app\\Resources\\views\\default\\index.html.twig");
    }
}

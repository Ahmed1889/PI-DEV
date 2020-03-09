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
class __TwigTemplate_1dce3712432a3258467684327d33b7b8985e350456ec68597e667c23d7ee2f76 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Front/Produit/affiche_produitF.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Front/Produit/affiche_produitF.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Front/Produit/affiche_produitF.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_js($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 4
        echo "    <style>
        /* The container */
        .container {
            display: block;
            position: relative;
            padding-left: 35px;
            margin-bottom: 12px;
            cursor: pointer;
            font-size: 22px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }


        /* Hide the browser's default checkbox */
        .container input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }

        /* Create a custom checkbox */
        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 25px;
            width: 25px;
            background-color: #eee;
        }

        /* On mouse-over, add a grey background color */
        .container:hover input ~ .checkmark {
            background-color: #ccc;
        }

        /* When the checkbox is checked, add a blue background */
        .container input:checked ~ .checkmark {
            background-color: #2196F3;
        }

        /* Create the checkmark/indicator (hidden when not checked) */
        .checkmark:after {
            content: \"\";
            position: absolute;
            display: none;
        }

        /* Show the checkmark when checked */
        .container input:checked ~ .checkmark:after {
            display: block;
        }

        /* Style the checkmark/indicator */
        .container .checkmark:after {
            left: 9px;
            top: 5px;
            width: 5px;
            height: 10px;
            border: solid white;
            border-width: 0 3px 3px 0;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
        }
    </style>
    <script>
        var cats = [];
        \$(document).ready(function(){

            ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cats"] ?? $this->getContext($context, "cats")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 79
            echo "            \$(\"#";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "libelleC", []), "html", null, true);
            echo "\").change(function(){
                if(cats.indexOf(\"";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "libelleC", []), "html", null, true);
            echo "\") == -1)
                    cats.push(\"";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "libelleC", []), "html", null, true);
            echo "\");
                else
                    cats.splice(cats.indexOf(\"";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "libelleC", []), "html", null, true);
            echo "\"), 1);
                if(cats.length>0) {
                    ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cats"] ?? $this->getContext($context, "cats")));
            foreach ($context['_seq'] as $context["_key"] => $context["cc"]) {
                // line 86
                echo "                    if (cats.indexOf(\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cc"], "libelleC", []), "html", null, true);
                echo "\") == -1)
                        \$(\".";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($context["cc"], "libelleC", []), "html", null, true);
                echo "\").hide();
                    else

                        \$(\".";
                // line 90
                echo twig_escape_filter($this->env, $this->getAttribute($context["cc"], "libelleC", []), "html", null, true);
                echo "\").show();
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "                }
                else{
                    ";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cats"] ?? $this->getContext($context, "cats")));
            foreach ($context['_seq'] as $context["_key"] => $context["cc"]) {
                // line 95
                echo "                    \$(\".";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cc"], "libelleC", []), "html", null, true);
                echo "\").show();
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "                }

            });
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "        });
    </script>
    <script>
        function myFunction(libelle, image,prix,categorie) {
            \$(\"#view1img\").attr(\"src\", \"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("photos/"), "html", null, true);
        echo "\"+image);
            \$(\"#title1\").html(libelle)
            \$(\"#categorie1\").html(categorie)
            \$(\"#prix1\").html(prix)
        }
    </script>
    <style>
        .vote{
            width: 150px;
            margin: 50px 0;
            float: right;

        }
        form{
            display: inline-block;
        }
        .vote_bar{

            width: 100%;
            height: 4px;
            background-color: #ff503a;
        }
        .vote_progress{
            height: 4px;
            width: 0%;
            background-color: #1ed005;
        }
        .vote_btns{
            margin-top: 10px;
        }
        .vote_btn{
            border: none;
            padding: 0;
            background: transparent;
            display: inline-block;
            margin: 0 0 0 10px;
            cursor: pointer;
            transition: color 0.3s;
        }
        .vote_like:hover{
            color: #1ed005;
        }
        .vote_dislike:hover{
            color: #ff503a;
        }
    </style>
    <script>

        ";
        // line 153
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dislike"] ?? $this->getContext($context, "dislike")));
        foreach ($context['_seq'] as $context["_key"] => $context["nn"]) {
            // line 154
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["produit"] ?? $this->getContext($context, "produit")));
            foreach ($context['_seq'] as $context["_key"] => $context["pp"]) {
                // line 155
                echo "
        ";
                // line 156
                if ((($this->getAttribute($this->getAttribute($context["nn"], "produit", []), "id", []) == $this->getAttribute($context["pp"], "id", [])) && ($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", []) == $this->getAttribute($context["nn"], "userId", [])))) {
                    // line 157
                    echo "        \$(document).ready(function() {
            \$('#x').hide();
        });
        ";
                }
                // line 161
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pp'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 162
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nn'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["like"] ?? $this->getContext($context, "like")));
        foreach ($context['_seq'] as $context["_key"] => $context["aa"]) {
            // line 164
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["produit"] ?? $this->getContext($context, "produit")));
            foreach ($context['_seq'] as $context["_key"] => $context["pp"]) {
                // line 165
                echo "        ";
                if ((($this->getAttribute($this->getAttribute($context["aa"], "produit", []), "id", []) == $this->getAttribute($context["pp"], "id", [])) && ($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", []) == $this->getAttribute($context["aa"], "userId", [])))) {
                    // line 166
                    echo "        \$(document).ready(function() {

            \$('#";
                    // line 168
                    echo twig_escape_filter($this->env, $this->getAttribute($context["pp"], "id", []), "html", null, true);
                    echo "').hide();

        });
        ";
                }
                // line 172
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pp'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 173
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 178
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 179
        echo "
    <input type=\"hidden\" id=\"libelle\">
    <input type=\"hidden\" id=\"image\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>

    <section id=\"page-content\" class=\"page-wrapper\">

        <div class=\"banner-area section-padding\">
            <div class=\"container\">

                <br>
                ";
        // line 190
        if ((isset($context["catss"]) || array_key_exists("catss", $context))) {
            // line 191
            echo "                <h2><strong>Liste des categories(";
            echo twig_escape_filter($this->env, ($context["catss"] ?? $this->getContext($context, "catss")), "html", null, true);
            echo ") :</strong>
                ";
        }
        // line 193
        echo "                <br>

                ";
        // line 195
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cats"] ?? $this->getContext($context, "cats")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 196
            echo "
                    <label class=\"container\">";
            // line 197
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "libelleC", []), "html", null, true);
            echo "
                        <input type=\"checkbox\" value=\"";
            // line 198
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "libelleC", []), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "libelleC", []), "html", null, true);
            echo "\">
                        <span class=\"checkmark\"></span>

                    </label>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 203
        echo "



                <br>
                <h2><strong>Liste de produits : </strong></h2>
                <br>
                <span style=\"color: darkgray\">";
        // line 210
        echo twig_escape_filter($this->env, ($context["produits"] ?? $this->getContext($context, "produits")), "html", null, true);
        echo " produits trouvés</span>
                <br>
                <br>



                <br>
                <br>

                ";
        // line 219
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produit"] ?? $this->getContext($context, "produit")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 220
            echo "

                    <div class=\"";
            // line 222
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "categorie", []), "libelleC", []), "html", null, true);
            echo "\">
                        <div class=\"product-list tab-content\" >
                            <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"home\">
                                <div class=\"col-md-3 col-sm-4 col-xs-12\">
                                    <div class=\"single-product mb-40\">
                                        <div class=\"product-img-content mb-20\">
                                            <div class=\"product-img\">
                                                <a href=\"";
            // line 229
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("details_produitF", ["id" => $this->getAttribute($context["p"], "id", [])]), "html", null, true);
            echo "\">
                                                    <img class=\"imageproduit2\" src=\"";
            // line 230
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("photos/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "image", []), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "libelleP", []), "html", null, true);
            echo "\">
                                                </a>

                                            </div>
                                            <div class=\"product-action text-center\">
                                                <a href=\"#\" onclick=\"myFunction('";
            // line 235
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "libelleP", []), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "image", []), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "prixVente", []), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "categorie", []), "libelleC", []), "html", null, true);
            echo "')\" title=\"Quick view\" data-toggle=\"modal\" data-target=\"#productModal\">
                                                    <i class=\"zmdi zmdi-eye\"></i>
                                                </a>
                                                <a href=\"";
            // line 238
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouter_pr_pan", ["idd" => $this->getAttribute($context["p"], "id", [])]), "html", null, true);
            echo "\" >
                                                    <i class=\"zmdi zmdi-shopping-cart\"></i>
                                                </a>
                                            </div>
                                        </div>


                                        <div class=\"product-content text-center text-uppercase\">
                                            <a href=\"";
            // line 246
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("details_produitF", ["id" => $this->getAttribute($context["p"], "id", [])]), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "libelleP", []), "html", null, true);
            echo "</a>

                                            <div class=\"product-price\">
                                                <span class=\"new-price\">";
            // line 249
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "prixVente", []), "html", null, true);
            echo " DT</span>
                                            </div>
                                            <div class=\"product-price\">
                                                <i class=\"fas fa-eye\"></i>   <span class=\"new-price\">";
            // line 252
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "nbrVues", []), "html", null, true);
            echo "</span>
                                            </div>
                                            <div class=\"vote\">
                                                <div class=\"vote_bar\">
                                                    <div class=\"vote_progress\" style=\"width: ";
            // line 256
            (((($this->getAttribute($context["p"], "likeCount", []) + $this->getAttribute($context["p"], "dislikeCount", [])) == 0)) ? (print (100)) : (print (twig_escape_filter($this->env, (100 * ($this->getAttribute($context["p"], "likeCount", []) / ($this->getAttribute($context["p"], "likeCount", []) + $this->getAttribute($context["p"], "dislikeCount", [])))), "html", null, true))));
            echo "%;\"></div>
                                                </div>
                                                <div class=\"vote_btns\">
                                                        <a  class=\"vote_btn vote_like\" href=\"";
            // line 259
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("like_produit", ["id" => $this->getAttribute($context["p"], "id", [])]), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", []), "html", null, true);
            echo "\"><i class=\"fas fa-thumbs-up\"></i> </a> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "likeCount", []), "html", null, true);
            echo " ||

                                                        <a class=\"vote_btn vote_dislike\" href=\"";
            // line 261
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dislike_produit", ["id" => $this->getAttribute($context["p"], "id", [])]), "html", null, true);
            echo "\" id=\"x\"><i class=\"fas fa-thumbs-down\"></i> </a> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "dislikeCount", []), "html", null, true);
            echo "


                                                </div>
                                            </div>
                                            <br>
                                            <br>

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
        // line 277
        echo "            </div>
        </div>
    </section>
    <div class=\"navigation text-center\">
        ";
        // line 281
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["produit"] ?? $this->getContext($context, "produit")));
        echo "
    </div>

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
                                            <a class=\"venobox\"  href=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/product/product-details/1.jpg\" data-gall=\"gallery\" title=\"\"><img id=\"view1img\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/product/product-details/1.jpg\" alt=\"\"></a>
                                        </div>
                                        <div class=\"tab-pane b-img\" id=\"view2\">
                                            <a class=\"venobox\" href=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/product/product-details/2.jpg\" data-gall=\"gallery\" title=\"\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/product/product-details/2.jpg\" alt=\"\"></a>
                                        </div>
                                        <div class=\"tab-pane b-img\" id=\"view3\">
                                            <a class=\"venobox\" href=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/product/product-details/3.jpg\" data-gall=\"gallery\" title=\"\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/product/product-details/3.jpg\" alt=\"\"></a>
                                        </div>
                                        <div class=\"tab-pane b-img\" id=\"view4\">
                                            <a class=\"venobox\" href=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/product/product-details/4.jpg\" data-gall=\"gallery\" title=\"\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("freak/"), "html", null, true);
        echo "images/product/product-details/4.jpg\" alt=\"\"></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class=\"product-details-content\">
                                <div class=\"product-content text-uppercase\">
                                    <a id=\"title1\" href=\"product-details.html\" title=\"Slim Shirt With Stretch\">Slim Shirt With Stretchddd</a>

                                    <div class=\"product-price pb-20\">
                                        <span id=\"prix1\" class=\"new-price\"></span>

                                    </div>
                                </div>
                                <div class=\"product-view pb-20\">
                                    <h4  class=\"product-details-tilte text-uppercase\">categorie</h4>
                                    <p id=\"categorie1\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. luptate. </p>
                                </div>

                                <div class=\"product-action-shop text-center mb-30\">

                                    <a href=\"#\" title=\"Add to cart\">
                                        <i class=\"zmdi zmdi-shopping-cart\"></i>
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
        return array (  595 => 310,  587 => 307,  579 => 304,  571 => 301,  548 => 281,  542 => 277,  518 => 261,  509 => 259,  503 => 256,  496 => 252,  490 => 249,  482 => 246,  471 => 238,  459 => 235,  448 => 230,  444 => 229,  434 => 222,  430 => 220,  426 => 219,  414 => 210,  405 => 203,  392 => 198,  388 => 197,  385 => 196,  381 => 195,  377 => 193,  371 => 191,  369 => 190,  356 => 179,  347 => 178,  334 => 174,  328 => 173,  322 => 172,  315 => 168,  311 => 166,  308 => 165,  303 => 164,  298 => 163,  292 => 162,  286 => 161,  280 => 157,  278 => 156,  275 => 155,  270 => 154,  266 => 153,  215 => 105,  209 => 101,  200 => 97,  191 => 95,  187 => 94,  183 => 92,  175 => 90,  169 => 87,  164 => 86,  160 => 85,  155 => 83,  150 => 81,  146 => 80,  141 => 79,  137 => 78,  61 => 4,  52 => 3,  30 => 1,);
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
    <style>
        /* The container */
        .container {
            display: block;
            position: relative;
            padding-left: 35px;
            margin-bottom: 12px;
            cursor: pointer;
            font-size: 22px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }


        /* Hide the browser's default checkbox */
        .container input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }

        /* Create a custom checkbox */
        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 25px;
            width: 25px;
            background-color: #eee;
        }

        /* On mouse-over, add a grey background color */
        .container:hover input ~ .checkmark {
            background-color: #ccc;
        }

        /* When the checkbox is checked, add a blue background */
        .container input:checked ~ .checkmark {
            background-color: #2196F3;
        }

        /* Create the checkmark/indicator (hidden when not checked) */
        .checkmark:after {
            content: \"\";
            position: absolute;
            display: none;
        }

        /* Show the checkmark when checked */
        .container input:checked ~ .checkmark:after {
            display: block;
        }

        /* Style the checkmark/indicator */
        .container .checkmark:after {
            left: 9px;
            top: 5px;
            width: 5px;
            height: 10px;
            border: solid white;
            border-width: 0 3px 3px 0;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
        }
    </style>
    <script>
        var cats = [];
        \$(document).ready(function(){

            {% for c in cats %}
            \$(\"#{{ c.libelleC }}\").change(function(){
                if(cats.indexOf(\"{{ c.libelleC }}\") == -1)
                    cats.push(\"{{ c.libelleC }}\");
                else
                    cats.splice(cats.indexOf(\"{{ c.libelleC }}\"), 1);
                if(cats.length>0) {
                    {% for cc in cats %}
                    if (cats.indexOf(\"{{ cc.libelleC }}\") == -1)
                        \$(\".{{ cc.libelleC }}\").hide();
                    else

                        \$(\".{{ cc.libelleC }}\").show();
                    {% endfor %}
                }
                else{
                    {% for cc in cats %}
                    \$(\".{{ cc.libelleC }}\").show();
                    {% endfor %}
                }

            });
            {% endfor %}
        });
    </script>
    <script>
        function myFunction(libelle, image,prix,categorie) {
            \$(\"#view1img\").attr(\"src\", \"{{ asset('photos/') }}\"+image);
            \$(\"#title1\").html(libelle)
            \$(\"#categorie1\").html(categorie)
            \$(\"#prix1\").html(prix)
        }
    </script>
    <style>
        .vote{
            width: 150px;
            margin: 50px 0;
            float: right;

        }
        form{
            display: inline-block;
        }
        .vote_bar{

            width: 100%;
            height: 4px;
            background-color: #ff503a;
        }
        .vote_progress{
            height: 4px;
            width: 0%;
            background-color: #1ed005;
        }
        .vote_btns{
            margin-top: 10px;
        }
        .vote_btn{
            border: none;
            padding: 0;
            background: transparent;
            display: inline-block;
            margin: 0 0 0 10px;
            cursor: pointer;
            transition: color 0.3s;
        }
        .vote_like:hover{
            color: #1ed005;
        }
        .vote_dislike:hover{
            color: #ff503a;
        }
    </style>
    <script>

        {% for nn in dislike %}
        {% for pp in produit %}

        {% if  nn.produit.id==pp.id and user.id==nn.userId %}
        \$(document).ready(function() {
            \$('#x').hide();
        });
        {% endif %}
        {% endfor %}
        {% endfor %}
        {% for aa in like %}
        {% for pp in produit %}
        {% if  aa.produit.id==pp.id and user.id==aa.userId %}
        \$(document).ready(function() {

            \$('#{{ pp.id }}').hide();

        });
        {% endif %}
        {% endfor %}
        {% endfor %}

    </script>

{% endblock %}
{% block body %}

    <input type=\"hidden\" id=\"libelle\">
    <input type=\"hidden\" id=\"image\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>

    <section id=\"page-content\" class=\"page-wrapper\">

        <div class=\"banner-area section-padding\">
            <div class=\"container\">

                <br>
                {% if catss is defined %}
                <h2><strong>Liste des categories({{ catss }}) :</strong>
                {% endif %}
                <br>

                {% for c in cats %}

                    <label class=\"container\">{{ c.libelleC }}
                        <input type=\"checkbox\" value=\"{{ c.libelleC }}\" id=\"{{ c.libelleC }}\">
                        <span class=\"checkmark\"></span>

                    </label>
                {% endfor %}




                <br>
                <h2><strong>Liste de produits : </strong></h2>
                <br>
                <span style=\"color: darkgray\">{{ produits }} produits trouvés</span>
                <br>
                <br>



                <br>
                <br>

                {% for p in produit %}


                    <div class=\"{{ p.categorie.libelleC }}\">
                        <div class=\"product-list tab-content\" >
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
                                                <a href=\"#\" onclick=\"myFunction('{{ p.libelleP }}','{{ p.image }}','{{ p.prixVente }}','{{ p.categorie.libelleC }}')\" title=\"Quick view\" data-toggle=\"modal\" data-target=\"#productModal\">
                                                    <i class=\"zmdi zmdi-eye\"></i>
                                                </a>
                                                <a href=\"{{ path('ajouter_pr_pan',{'idd':p.id}) }}\" >
                                                    <i class=\"zmdi zmdi-shopping-cart\"></i>
                                                </a>
                                            </div>
                                        </div>


                                        <div class=\"product-content text-center text-uppercase\">
                                            <a href=\"{{ path('details_produitF',{'id':p.id}) }}\" >{{ p.libelleP }}</a>

                                            <div class=\"product-price\">
                                                <span class=\"new-price\">{{ p.prixVente }} DT</span>
                                            </div>
                                            <div class=\"product-price\">
                                                <i class=\"fas fa-eye\"></i>   <span class=\"new-price\">{{ p.nbrVues }}</span>
                                            </div>
                                            <div class=\"vote\">
                                                <div class=\"vote_bar\">
                                                    <div class=\"vote_progress\" style=\"width: {{ (p.likeCount+p.dislikeCount) == 0 ? 100 : (100 * (p.likeCount / (p.likeCount+p.dislikeCount))) }}%;\"></div>
                                                </div>
                                                <div class=\"vote_btns\">
                                                        <a  class=\"vote_btn vote_like\" href=\"{{ path('like_produit',{'id':p.id}) }}\" id=\"{{ p.id }}\"><i class=\"fas fa-thumbs-up\"></i> </a> {{ p.likeCount }} ||

                                                        <a class=\"vote_btn vote_dislike\" href=\"{{ path('dislike_produit',{'id':p.id}) }}\" id=\"x\"><i class=\"fas fa-thumbs-down\"></i> </a> {{ p.dislikeCount }}


                                                </div>
                                            </div>
                                            <br>
                                            <br>

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
    <div class=\"navigation text-center\">
        {{ knp_pagination_render(produit) }}
    </div>

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
                                            <a class=\"venobox\"  href=\"{{ asset('freak/') }}images/product/product-details/1.jpg\" data-gall=\"gallery\" title=\"\"><img id=\"view1img\" src=\"{{ asset('freak/') }}images/product/product-details/1.jpg\" alt=\"\"></a>
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

                                </div>
                            </div>
                            <div class=\"product-details-content\">
                                <div class=\"product-content text-uppercase\">
                                    <a id=\"title1\" href=\"product-details.html\" title=\"Slim Shirt With Stretch\">Slim Shirt With Stretchddd</a>

                                    <div class=\"product-price pb-20\">
                                        <span id=\"prix1\" class=\"new-price\"></span>

                                    </div>
                                </div>
                                <div class=\"product-view pb-20\">
                                    <h4  class=\"product-details-tilte text-uppercase\">categorie</h4>
                                    <p id=\"categorie1\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. luptate. </p>
                                </div>

                                <div class=\"product-action-shop text-center mb-30\">

                                    <a href=\"#\" title=\"Add to cart\">
                                        <i class=\"zmdi zmdi-shopping-cart\"></i>
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

{% endblock %}

", "@Front/Produit/affiche_produitF.html.twig", "C:\\xampp\\htdocs\\pi\\src\\FrontBundle\\Resources\\views\\Produit\\affiche_produitF.html.twig");
    }
}

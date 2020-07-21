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

/* @Back/Livraison/AjoutTypeVehicule.html.twig */
class __TwigTemplate_b8ce7123a708495fca38ea1495fda8160a51743bbaa67d7e4b61746ab71edf45 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'bodyBack' => [$this, 'block_bodyBack'],
            'js2' => [$this, 'block_js2'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Back/Livraison/AjoutTypeVehicule.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Back/Livraison/AjoutTypeVehicule.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "@Back/Livraison/AjoutTypeVehicule.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_bodyBack($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyBack"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyBack"));

        // line 4
        echo "
    <style>

        #error_libellef{position: relative;top: -27px;left: 330px;}
        .autocomplete {
            /*the container must be positioned relative:*/
            position: relative;
            display: inline-block;
        }
        input {
            border: 1px solid transparent;
            background-color: #f1f1f1;
            padding: 10px;
            font-size: 16px;
        }
        input[type=text] {

            width: 100%;
        }
        input[type=submit] {
            background-color: DodgerBlue;
            color: #fff;
        }
        .autocomplete-items {
            position: absolute;
            border: 1px solid #d4d4d4;
            border-bottom: none;
            border-top: none;
            z-index: 99;
            /*position the autocomplete items to be the same width as the container:*/
            top: 100%;
            left: 0;
            right: 0;
        }
        .autocomplete-items div {
            padding: 10px;
            cursor: pointer;
            background-color: #fff;
            border-bottom: 1px solid #d4d4d4;
        }
        .autocomplete-items div:hover {
            /*when hovering an item:*/
            background-color: #e9e9e9;
        }
        .autocomplete-active {
            /*when navigating through the items using the arrow keys:*/
            background-color: DodgerBlue !important;
            color: #ffffff;
        }
    </style>
    <div class=\"error_Text\" ></div>
        ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

    <div class=\"autocomplete\" style=\"width:300px;\">
             ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "libelle", []), 'label');
        echo "
            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "libelle", []), 'widget', ["attr" => ["class" => "form-control "]]);
        echo "

        </div>

        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Ajouter", []), 'label');
        echo "
            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Ajouter", []), 'widget', ["attr" => ["class" => "btn btn-success "]]);
        echo "
    <div id=\"error_libelle\"> </div>
        ";
        // line 66
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "






";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 75
    public function block_js2($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js2"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js2"));

        // line 76
        echo "    <script >


\$(document).ready(function() {
//\$(\"form\").attr(\"autocomplete\",\"off\");
    document.getElementById(\"backbundle_typevehicule_Ajouter\").disabled=true;
            \$(\"#backbundle_typevehicule_libelle\").on(\"blur\", function () {
               \$(\".error\").remove();
               document.getElementById(\"backbundle_typevehicule_Ajouter\").disabled=true;
                if(\$(\"#backbundle_typevehicule_libelle\").val()==\"\")
                    \$(\"#error_libelle\").append(\"<span style='color: red' class='error'>*le type vehicule ne doit pas etre vide </span>\");
                else {
                    if (jQuery.inArray(\$(\"#backbundle_typevehicule_libelle\").val(), typeVe) < 0) {
                        \$(\"#error_libelle\").append(\"<span style='color: orange' class='error'>*type vehicule non correcte </span>\");
                    }else
                        document.getElementById(\"backbundle_typevehicule_Ajouter\").disabled=false;
                }
            });

    \$(\".autocomplete-items\").on(\"click\", function () {
        \$(\".error\").remove();
        document.getElementById(\"backbundle_typevehicule_Ajouter\").disabled=true;
        if(\$(\"#backbundle_typevehicule_libelle\").val()==\"\")
            \$(\"#error_libelle\").append(\"<span style='color: red' class='error'>*le type vehicule ne doit pas etre vide </span>\");
        else {
            if (jQuery.inArray(\$(\"#backbundle_typevehicule_libelle\").val(), typeVe) < 0) {
                \$(\"#error_libelle\").append(\"<span style='color: orange' class='error'>*type vehicule non correcte </span>\");
            }else
                document.getElementById(\"backbundle_typevehicule_Ajouter\").disabled=false;
        }
    });





        });


    </script>


    <script language=\"JavaScript\">
        var typeVe=[\"moto\",\"velo\",\"camion classique\",\"voiture\",\"tricycles\",\"quadricycles\",\"camion à caisse rigide\",\"camion à benne\",\"scooter\"];


        function autocomplete(inp, arr) {
            /*the autocomplete function takes two arguments,
            the text field element and an array of possible autocompleted values:*/
            var currentFocus;
            /*execute a function when someone writes in the text field:*/
            inp.addEventListener(\"input\", function(e) {
                var a, b, i, val = this.value;
                /*close any already open lists of autocompleted values*/
                closeAllLists();
                if (!val) { return false;}
                currentFocus = -1;
                /*create a DIV element that will contain the items (values):*/
                a = document.createElement(\"DIV\");
                a.setAttribute(\"id\", this.id + \"autocomplete-list\");
                a.setAttribute(\"class\", \"autocomplete-items\");
                /*append the DIV element as a child of the autocomplete container:*/
                this.parentNode.appendChild(a);
                /*for each item in the array...*/
                for (i = 0; i < arr.length; i++) {
                    /*check if the item starts with the same letters as the text field value:*/
                    if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                        /*create a DIV element for each matching element:*/
                        b = document.createElement(\"DIV\");

                        /*make the matching letters bold:*/
                        b.innerHTML = \"<strong>\" + arr[i].substr(0, val.length) + \"</strong>\";
                        b.innerHTML += arr[i].substr(val.length);
                        /*insert a input field that will hold the current array item's value:*/
                        b.innerHTML += \"<input type='hidden' value='\" + arr[i] + \"'>\";
                        /*execute a function when someone clicks on the item value (DIV element):*/
                        b.addEventListener(\"click\", function(e) {
                            /*insert the value for the autocomplete text field:*/
                            inp.value = this.getElementsByTagName(\"input\")[0].value;
                            /*close the list of autocompleted values,
                            (or any other open lists of autocompleted values:*/
                            closeAllLists();
                            \$(document).ready( function () {
                                \$(\".error\").remove();
                                document.getElementById(\"backbundle_typevehicule_Ajouter\").disabled=true;
                                if(\$(\"#backbundle_typevehicule_libelle\").val()==\"\")
                                    \$(\"#error_libelle\").append(\"<span style='color: red' class='error'>*le type vehicule ne doit pas etre vide </span>\");
                                else {
                                    if (jQuery.inArray(\$(\"#backbundle_typevehicule_libelle\").val(), typeVe) < 0) {
                                        \$(\"#error_libelle\").append(\"<span style='color: orange' class='error'>*type vehicule non correcte </span>\");
                                    }else
                                        document.getElementById(\"backbundle_typevehicule_Ajouter\").disabled=false;
                                }
                            });




                        });
                        a.appendChild(b);
                    }
                }
            });
            /*execute a function presses a key on the keyboard:*/
            inp.addEventListener(\"keydown\", function(e) {
                var x = document.getElementById(this.id + \"autocomplete-list\");
                if (x) x = x.getElementsByTagName(\"div\");
                if (e.keyCode == 40) {
                    /*If the arrow DOWN key is pressed,
                    increase the currentFocus variable:*/
                    currentFocus++;
                    /*and and make the current item more visible:*/
                    addActive(x);
                } else if (e.keyCode == 38) { //up
                    /*If the arrow UP key is pressed,
                    decrease the currentFocus variable:*/
                    currentFocus--;
                    /*and and make the current item more visible:*/
                    addActive(x);
                } else if (e.keyCode == 13) {
                    /*If the ENTER key is pressed, prevent the form from being submitted,*/
                    e.preventDefault();
                    if (currentFocus > -1) {
                        /*and simulate a click on the \"active\" item:*/
                        if (x) x[currentFocus].click();
                    }
                }
            });
            function addActive(x) {
                /*a function to classify an item as \"active\":*/
                if (!x) return false;
                /*start by removing the \"active\" class on all items:*/
                removeActive(x);
                if (currentFocus >= x.length) currentFocus = 0;
                if (currentFocus < 0) currentFocus = (x.length - 1);
                /*add class \"autocomplete-active\":*/
                x[currentFocus].classList.add(\"autocomplete-active\");
            }
            function removeActive(x) {
                /*a function to remove the \"active\" class from all autocomplete items:*/
                for (var i = 0; i < x.length; i++) {
                    x[i].classList.remove(\"autocomplete-active\");
                }
            }
            function closeAllLists(elmnt) {
                /*close all autocomplete lists in the document,
                except the one passed as an argument:*/
                var x = document.getElementsByClassName(\"autocomplete-items\");
                for (var i = 0; i < x.length; i++) {
                    if (elmnt != x[i] && elmnt != inp) {
                        x[i].parentNode.removeChild(x[i]);
                    }
                }
            }
            /*execute a function when someone clicks in the document:*/
            document.addEventListener(\"click\", function (e) {
                closeAllLists(e.target);
            });
        }

        autocomplete(document.getElementById(\"backbundle_typevehicule_libelle\"), typeVe);
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Back/Livraison/AjoutTypeVehicule.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 76,  158 => 75,  140 => 66,  135 => 64,  131 => 63,  124 => 59,  120 => 58,  114 => 55,  61 => 4,  52 => 3,  30 => 1,);
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

{% block bodyBack %}

    <style>

        #error_libellef{position: relative;top: -27px;left: 330px;}
        .autocomplete {
            /*the container must be positioned relative:*/
            position: relative;
            display: inline-block;
        }
        input {
            border: 1px solid transparent;
            background-color: #f1f1f1;
            padding: 10px;
            font-size: 16px;
        }
        input[type=text] {

            width: 100%;
        }
        input[type=submit] {
            background-color: DodgerBlue;
            color: #fff;
        }
        .autocomplete-items {
            position: absolute;
            border: 1px solid #d4d4d4;
            border-bottom: none;
            border-top: none;
            z-index: 99;
            /*position the autocomplete items to be the same width as the container:*/
            top: 100%;
            left: 0;
            right: 0;
        }
        .autocomplete-items div {
            padding: 10px;
            cursor: pointer;
            background-color: #fff;
            border-bottom: 1px solid #d4d4d4;
        }
        .autocomplete-items div:hover {
            /*when hovering an item:*/
            background-color: #e9e9e9;
        }
        .autocomplete-active {
            /*when navigating through the items using the arrow keys:*/
            background-color: DodgerBlue !important;
            color: #ffffff;
        }
    </style>
    <div class=\"error_Text\" ></div>
        {{ form_start(form) }}

    <div class=\"autocomplete\" style=\"width:300px;\">
             {{ form_label(form.libelle)  }}
            {{ form_widget(form.libelle,{ 'attr': {'class': 'form-control '}})  }}

        </div>

        {{ form_label(form.Ajouter)  }}
            {{ form_widget(form.Ajouter,{ 'attr': {'class': 'btn btn-success '}})  }}
    <div id=\"error_libelle\"> </div>
        {{ form_end(form)  }}






{%  endblock %}

{% block js2 %}
    <script >


\$(document).ready(function() {
//\$(\"form\").attr(\"autocomplete\",\"off\");
    document.getElementById(\"backbundle_typevehicule_Ajouter\").disabled=true;
            \$(\"#backbundle_typevehicule_libelle\").on(\"blur\", function () {
               \$(\".error\").remove();
               document.getElementById(\"backbundle_typevehicule_Ajouter\").disabled=true;
                if(\$(\"#backbundle_typevehicule_libelle\").val()==\"\")
                    \$(\"#error_libelle\").append(\"<span style='color: red' class='error'>*le type vehicule ne doit pas etre vide </span>\");
                else {
                    if (jQuery.inArray(\$(\"#backbundle_typevehicule_libelle\").val(), typeVe) < 0) {
                        \$(\"#error_libelle\").append(\"<span style='color: orange' class='error'>*type vehicule non correcte </span>\");
                    }else
                        document.getElementById(\"backbundle_typevehicule_Ajouter\").disabled=false;
                }
            });

    \$(\".autocomplete-items\").on(\"click\", function () {
        \$(\".error\").remove();
        document.getElementById(\"backbundle_typevehicule_Ajouter\").disabled=true;
        if(\$(\"#backbundle_typevehicule_libelle\").val()==\"\")
            \$(\"#error_libelle\").append(\"<span style='color: red' class='error'>*le type vehicule ne doit pas etre vide </span>\");
        else {
            if (jQuery.inArray(\$(\"#backbundle_typevehicule_libelle\").val(), typeVe) < 0) {
                \$(\"#error_libelle\").append(\"<span style='color: orange' class='error'>*type vehicule non correcte </span>\");
            }else
                document.getElementById(\"backbundle_typevehicule_Ajouter\").disabled=false;
        }
    });





        });


    </script>


    <script language=\"JavaScript\">
        var typeVe=[\"moto\",\"velo\",\"camion classique\",\"voiture\",\"tricycles\",\"quadricycles\",\"camion à caisse rigide\",\"camion à benne\",\"scooter\"];


        function autocomplete(inp, arr) {
            /*the autocomplete function takes two arguments,
            the text field element and an array of possible autocompleted values:*/
            var currentFocus;
            /*execute a function when someone writes in the text field:*/
            inp.addEventListener(\"input\", function(e) {
                var a, b, i, val = this.value;
                /*close any already open lists of autocompleted values*/
                closeAllLists();
                if (!val) { return false;}
                currentFocus = -1;
                /*create a DIV element that will contain the items (values):*/
                a = document.createElement(\"DIV\");
                a.setAttribute(\"id\", this.id + \"autocomplete-list\");
                a.setAttribute(\"class\", \"autocomplete-items\");
                /*append the DIV element as a child of the autocomplete container:*/
                this.parentNode.appendChild(a);
                /*for each item in the array...*/
                for (i = 0; i < arr.length; i++) {
                    /*check if the item starts with the same letters as the text field value:*/
                    if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                        /*create a DIV element for each matching element:*/
                        b = document.createElement(\"DIV\");

                        /*make the matching letters bold:*/
                        b.innerHTML = \"<strong>\" + arr[i].substr(0, val.length) + \"</strong>\";
                        b.innerHTML += arr[i].substr(val.length);
                        /*insert a input field that will hold the current array item's value:*/
                        b.innerHTML += \"<input type='hidden' value='\" + arr[i] + \"'>\";
                        /*execute a function when someone clicks on the item value (DIV element):*/
                        b.addEventListener(\"click\", function(e) {
                            /*insert the value for the autocomplete text field:*/
                            inp.value = this.getElementsByTagName(\"input\")[0].value;
                            /*close the list of autocompleted values,
                            (or any other open lists of autocompleted values:*/
                            closeAllLists();
                            \$(document).ready( function () {
                                \$(\".error\").remove();
                                document.getElementById(\"backbundle_typevehicule_Ajouter\").disabled=true;
                                if(\$(\"#backbundle_typevehicule_libelle\").val()==\"\")
                                    \$(\"#error_libelle\").append(\"<span style='color: red' class='error'>*le type vehicule ne doit pas etre vide </span>\");
                                else {
                                    if (jQuery.inArray(\$(\"#backbundle_typevehicule_libelle\").val(), typeVe) < 0) {
                                        \$(\"#error_libelle\").append(\"<span style='color: orange' class='error'>*type vehicule non correcte </span>\");
                                    }else
                                        document.getElementById(\"backbundle_typevehicule_Ajouter\").disabled=false;
                                }
                            });




                        });
                        a.appendChild(b);
                    }
                }
            });
            /*execute a function presses a key on the keyboard:*/
            inp.addEventListener(\"keydown\", function(e) {
                var x = document.getElementById(this.id + \"autocomplete-list\");
                if (x) x = x.getElementsByTagName(\"div\");
                if (e.keyCode == 40) {
                    /*If the arrow DOWN key is pressed,
                    increase the currentFocus variable:*/
                    currentFocus++;
                    /*and and make the current item more visible:*/
                    addActive(x);
                } else if (e.keyCode == 38) { //up
                    /*If the arrow UP key is pressed,
                    decrease the currentFocus variable:*/
                    currentFocus--;
                    /*and and make the current item more visible:*/
                    addActive(x);
                } else if (e.keyCode == 13) {
                    /*If the ENTER key is pressed, prevent the form from being submitted,*/
                    e.preventDefault();
                    if (currentFocus > -1) {
                        /*and simulate a click on the \"active\" item:*/
                        if (x) x[currentFocus].click();
                    }
                }
            });
            function addActive(x) {
                /*a function to classify an item as \"active\":*/
                if (!x) return false;
                /*start by removing the \"active\" class on all items:*/
                removeActive(x);
                if (currentFocus >= x.length) currentFocus = 0;
                if (currentFocus < 0) currentFocus = (x.length - 1);
                /*add class \"autocomplete-active\":*/
                x[currentFocus].classList.add(\"autocomplete-active\");
            }
            function removeActive(x) {
                /*a function to remove the \"active\" class from all autocomplete items:*/
                for (var i = 0; i < x.length; i++) {
                    x[i].classList.remove(\"autocomplete-active\");
                }
            }
            function closeAllLists(elmnt) {
                /*close all autocomplete lists in the document,
                except the one passed as an argument:*/
                var x = document.getElementsByClassName(\"autocomplete-items\");
                for (var i = 0; i < x.length; i++) {
                    if (elmnt != x[i] && elmnt != inp) {
                        x[i].parentNode.removeChild(x[i]);
                    }
                }
            }
            /*execute a function when someone clicks in the document:*/
            document.addEventListener(\"click\", function (e) {
                closeAllLists(e.target);
            });
        }

        autocomplete(document.getElementById(\"backbundle_typevehicule_libelle\"), typeVe);
    </script>

{% endblock %}", "@Back/Livraison/AjoutTypeVehicule.html.twig", "C:\\xampp\\htdocs\\pi\\src\\BackBundle\\Resources\\views\\Livraison\\AjoutTypeVehicule.html.twig");
    }
}

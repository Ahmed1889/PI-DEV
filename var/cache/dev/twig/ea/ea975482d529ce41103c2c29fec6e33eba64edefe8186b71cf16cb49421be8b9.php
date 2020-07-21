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

/* @Back/produit/modifier_produit.html.twig */
class __TwigTemplate_1a7d64565a8a1c2710b34fa03ab648fa9db6e06dcd76834fb6956a734d9e0292 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'js2' => [$this, 'block_js2'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Back/produit/modifier_produit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Back/produit/modifier_produit.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "@Back/produit/modifier_produit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_js2($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js2"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js2"));

        // line 3
        echo "    <script>
        \$(document).ready(function () {
            \$(\"#libelle\").hide();
            \$(\"#description\").hide();
            \$(\"#prix\").hide();
            \$('#form_libelleP').keyup(function () {


                \$.ajax({

                    success: function () {
                        //var re = /^[A-Za-z]+\$/;
                        var x = \$('#form_libelleP').val();
                        if (isNaN( x.charAt(0))) {

                            \$('#form_modifier').prop('disabled', false);
                            \$('#form_libelleP').css('border',\"1px  black\");
                            \$(\"#libelle\").hide();

                        } else {

                            \$(\"#libelle\").show();
                            //alert('ce champs ne peut pas contenir des nombres');
                            \$('#form_modifier').prop('disabled', true);
                            \$('#form_libelleP').css('border',\"1px solid #db4848\");
                        }
                    }
                });


            });

            \$('#form_description').keyup(function () {


                \$.ajax({

                    success: function () {
                        // var re = /^([a-zA-Z]+[0-9]+)[0-9a-zA-Z]*\$/;
                        var x = \$('#form_description').val();
                        if ( isNaN( x.charAt(0))) {

                            \$('#form_modifier').prop('disabled', false);
                            \$('#form_description').css('border',\"1px  black\");
                            \$(\"#description\").hide();

                        } else {

                            \$(\"#description\").show();
                            //alert('ce champs ne peut pas contenir des nombres');
                            \$('#form_modifier').prop('disabled', true);
                            \$('#form_description').css('border',\"1px solid #db4848\");
                        }
                    }
                });


            });

            \$('#form_prixAchat').keyup(function () {


                \$.ajax({

                    success: function () {
                        //var re = /^[0-9]+\$/;
                        var x = \$('#form_prixAchat').val();
                        if (! isNaN(x)) {

                            \$('#form_modifier').prop('disabled', false);
                            \$('#form_prixAchat').css('border',\"1px  black\");
                            \$(\"#prix\").hide();

                        } else {

                            \$(\"#prix\").show();
                            //alert('ce champs ne peut pas contenir des nombres');
                            \$('#form_modifier').prop('disabled', true);
                            \$('#form_prixAchat').css('border',\"1px solid #db4848\");
                        }
                    }
                });


            });
        })
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 91
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 92
        echo "    <br>
    <h2><strong>Modifier un produit :</strong></h2>
    <br>
    <table class=\"table table-striped\">
        ";
        // line 96
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        <tr>
            <td>";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "libelleP", []), 'label');
        echo "</td>
            <td>";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "libelleP", []), 'widget', ["attr" => ["class" => "form-control "]]);
        echo "</td>
            <td><span class=\"text-danger\" id=\"libelle\"> *cet input n'est pas valide</span></td>
        </tr>
        <tr>
            <td>";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", []), 'label');
        echo "</td>
            <td>";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", []), 'widget', ["attr" => ["class" => "form-control "]]);
        echo "</td>
            <td><span class=\"text-danger\" id=\"description\"> *cet input n'est pas valide</span></td>
        </tr>
        <tr>
            <td>";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "categorie", []), 'label');
        echo "</td>
            <td>";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "categorie", []), 'widget', ["attr" => ["class" => "form-control "]]);
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fournisseur", []), 'label');
        echo "</td>
            <td>";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fournisseur", []), 'widget', ["attr" => ["class" => "form-control "]]);
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prixAchat", []), 'label');
        echo "</td>
            <td>";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prixAchat", []), 'widget', ["attr" => ["class" => "form-control "]]);
        echo "</td>
            <td><span class=\"text-danger\" id=\"prix\"> *cet input n'est pas valide</span></td>
        </tr>
        <tr>
            <td>";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image", []), 'label');
        echo "</td>
            <td>";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image", []), 'widget', ["attr" => ["class" => "form-control "]]);
        echo "</td>
        </tr>
        <tr>
            <td></td>
            <td>";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "modifier", []), 'widget', ["attr" => ["class" => "btn btn-success "]]);
        echo "</td>
        </tr>
        ";
        // line 128
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Back/produit/modifier_produit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 128,  242 => 126,  235 => 122,  231 => 121,  224 => 117,  220 => 116,  214 => 113,  210 => 112,  204 => 109,  200 => 108,  193 => 104,  189 => 103,  182 => 99,  178 => 98,  173 => 96,  167 => 92,  158 => 91,  61 => 3,  52 => 2,  30 => 1,);
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
{% block js2 %}
    <script>
        \$(document).ready(function () {
            \$(\"#libelle\").hide();
            \$(\"#description\").hide();
            \$(\"#prix\").hide();
            \$('#form_libelleP').keyup(function () {


                \$.ajax({

                    success: function () {
                        //var re = /^[A-Za-z]+\$/;
                        var x = \$('#form_libelleP').val();
                        if (isNaN( x.charAt(0))) {

                            \$('#form_modifier').prop('disabled', false);
                            \$('#form_libelleP').css('border',\"1px  black\");
                            \$(\"#libelle\").hide();

                        } else {

                            \$(\"#libelle\").show();
                            //alert('ce champs ne peut pas contenir des nombres');
                            \$('#form_modifier').prop('disabled', true);
                            \$('#form_libelleP').css('border',\"1px solid #db4848\");
                        }
                    }
                });


            });

            \$('#form_description').keyup(function () {


                \$.ajax({

                    success: function () {
                        // var re = /^([a-zA-Z]+[0-9]+)[0-9a-zA-Z]*\$/;
                        var x = \$('#form_description').val();
                        if ( isNaN( x.charAt(0))) {

                            \$('#form_modifier').prop('disabled', false);
                            \$('#form_description').css('border',\"1px  black\");
                            \$(\"#description\").hide();

                        } else {

                            \$(\"#description\").show();
                            //alert('ce champs ne peut pas contenir des nombres');
                            \$('#form_modifier').prop('disabled', true);
                            \$('#form_description').css('border',\"1px solid #db4848\");
                        }
                    }
                });


            });

            \$('#form_prixAchat').keyup(function () {


                \$.ajax({

                    success: function () {
                        //var re = /^[0-9]+\$/;
                        var x = \$('#form_prixAchat').val();
                        if (! isNaN(x)) {

                            \$('#form_modifier').prop('disabled', false);
                            \$('#form_prixAchat').css('border',\"1px  black\");
                            \$(\"#prix\").hide();

                        } else {

                            \$(\"#prix\").show();
                            //alert('ce champs ne peut pas contenir des nombres');
                            \$('#form_modifier').prop('disabled', true);
                            \$('#form_prixAchat').css('border',\"1px solid #db4848\");
                        }
                    }
                });


            });
        })
    </script>
{% endblock %}
{% block body %}
    <br>
    <h2><strong>Modifier un produit :</strong></h2>
    <br>
    <table class=\"table table-striped\">
        {{ form_start(form) }}
        <tr>
            <td>{{ form_label(form.libelleP)  }}</td>
            <td>{{ form_widget(form.libelleP,{ 'attr': {'class': 'form-control '}})  }}</td>
            <td><span class=\"text-danger\" id=\"libelle\"> *cet input n'est pas valide</span></td>
        </tr>
        <tr>
            <td>{{ form_label(form.description)  }}</td>
            <td>{{ form_widget(form.description,{ 'attr': {'class': 'form-control '}})  }}</td>
            <td><span class=\"text-danger\" id=\"description\"> *cet input n'est pas valide</span></td>
        </tr>
        <tr>
            <td>{{ form_label(form.categorie)  }}</td>
            <td>{{ form_widget(form.categorie,{ 'attr': {'class': 'form-control '}})  }}</td>
        </tr>
        <tr>
            <td>{{ form_label(form.fournisseur)  }}</td>
            <td>{{ form_widget(form.fournisseur,{ 'attr': {'class': 'form-control '}})  }}</td>
        </tr>
        <tr>
            <td>{{ form_label(form.prixAchat)  }}</td>
            <td>{{ form_widget(form.prixAchat,{ 'attr': {'class': 'form-control '}})  }}</td>
            <td><span class=\"text-danger\" id=\"prix\"> *cet input n'est pas valide</span></td>
        </tr>
        <tr>
            <td>{{ form_label(form.image)  }}</td>
            <td>{{ form_widget(form.image,{ 'attr': {'class': 'form-control '}})  }}</td>
        </tr>
        <tr>
            <td></td>
            <td>{{ form_widget(form.modifier,{ 'attr': {'class': 'btn btn-success '}})  }}</td>
        </tr>
        {{ form_end(form)  }}
    </table>
{% endblock %}", "@Back/produit/modifier_produit.html.twig", "C:\\xampp\\htdocs\\pi\\src\\BackBundle\\Resources\\views\\produit\\modifier_produit.html.twig");
    }
}

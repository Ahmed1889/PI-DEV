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

/* @Back/produit/ajout_stock.html.twig */
class __TwigTemplate_dfb0e4ed8a30d9f92aa5bd6f19dc8616c0cfa80f67b7a77842525b47c37f7921 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Back/produit/ajout_stock.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Back/produit/ajout_stock.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "@Back/produit/ajout_stock.html.twig", 1);
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
            \$(\"#quatite\").hide();
            \$(\"#seuil\").hide();
            \$('#backbundle_stock_quantite').keyup(function () {


                \$.ajax({

                    success: function () {
                        var re =  /^[0-9]+\$/;
                        var x = \$('#backbundle_stock_quantite').val();
                        var y = \$('#backbundle_stock_seuil').val();
                        if (re.test(x) && x>y) {

                            \$('#backbundle_stock_Submit').prop('disabled', false);
                            \$('#backbundle_stock_quantite').css('border',\"1px  black\");
                            \$('#backbundle_stock_seuil').css('border',\"1px  black\");
                            \$(\"#quatite\").hide();
                            \$(\"#seuil\").hide();

                        } else {

                            \$(\"#quatite\").show();
                            //alert('ce champs ne peut pas contenir des nombres');
                            \$('#backbundle_stock_Submit').prop('disabled', true);
                            \$('#backbundle_stock_quantite').css('border',\"1px solid #db4848\");
                        }
                    }
                });


            });

            \$('#backbundle_stock_seuil').keyup(function () {


                \$.ajax({

                    success: function () {
                        var re =  /^[0-9]+\$/;
                        var x = \$('#backbundle_stock_seuil').val();
                        var y = \$('#backbundle_stock_quantite').val();
                        if (re.test(x) && x<y) {

                            \$('#backbundle_stock_Submit').prop('disabled', false);
                            \$('#backbundle_stock_seuil').css('border',\"1px  black\");
                            \$('#backbundle_stock_quantite').css('border',\"1px  black\");
                            \$(\"#seuil\").hide();
                            \$(\"#quatite\").hide();

                        } else {

                            \$(\"#seuil\").show();
                            //alert('ce champs ne peut pas contenir des nombres');
                            \$('#backbundle_stock_Submit').prop('disabled', true);
                            \$('#backbundle_stock_seuil').css('border',\"1px solid #db4848\");
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

    // line 69
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 70
        echo "    <br>
    <h2><strong>Ajouter un stock :</strong></h2>
    <br>
    <table class=\"table table-striped\">
        ";
        // line 74
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        <tr>
            <td>";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "produit", []), 'label');
        echo "</td>
            <td>";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "produit", []), 'widget', ["attr" => ["class" => "form-control "]]);
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "quantite", []), 'label');
        echo "</td>
            <td>";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "quantite", []), 'widget', ["attr" => ["class" => "form-control "]]);
        echo "</td>
            <td><span class=\"text-danger\" id=\"quatite\"> *cet input n'est pas valide</span></td>
        </tr>
        <tr>
            <td>";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seuil", []), 'label');
        echo "</td>
            <td>";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seuil", []), 'widget', ["attr" => ["class" => "form-control "]]);
        echo "</td>
            <td><span class=\"text-danger\" id=\"seuil\"> *cet input n'est pas valide</span></td>
        </tr>
        <tr>
            <td>";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "depot", []), 'label');
        echo "</td>
            <td>";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "depot", []), 'widget', ["attr" => ["class" => "form-control "]]);
        echo "</td>
        </tr>
        <tr>
            <td></td>
            <td>";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Submit", []), 'widget', ["attr" => ["class" => "btn btn-success "]]);
        echo "</td>
        </tr>
        ";
        // line 97
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Back/produit/ajout_stock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 97,  199 => 95,  192 => 91,  188 => 90,  181 => 86,  177 => 85,  170 => 81,  166 => 80,  160 => 77,  156 => 76,  151 => 74,  145 => 70,  136 => 69,  61 => 3,  52 => 2,  30 => 1,);
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
            \$(\"#quatite\").hide();
            \$(\"#seuil\").hide();
            \$('#backbundle_stock_quantite').keyup(function () {


                \$.ajax({

                    success: function () {
                        var re =  /^[0-9]+\$/;
                        var x = \$('#backbundle_stock_quantite').val();
                        var y = \$('#backbundle_stock_seuil').val();
                        if (re.test(x) && x>y) {

                            \$('#backbundle_stock_Submit').prop('disabled', false);
                            \$('#backbundle_stock_quantite').css('border',\"1px  black\");
                            \$('#backbundle_stock_seuil').css('border',\"1px  black\");
                            \$(\"#quatite\").hide();
                            \$(\"#seuil\").hide();

                        } else {

                            \$(\"#quatite\").show();
                            //alert('ce champs ne peut pas contenir des nombres');
                            \$('#backbundle_stock_Submit').prop('disabled', true);
                            \$('#backbundle_stock_quantite').css('border',\"1px solid #db4848\");
                        }
                    }
                });


            });

            \$('#backbundle_stock_seuil').keyup(function () {


                \$.ajax({

                    success: function () {
                        var re =  /^[0-9]+\$/;
                        var x = \$('#backbundle_stock_seuil').val();
                        var y = \$('#backbundle_stock_quantite').val();
                        if (re.test(x) && x<y) {

                            \$('#backbundle_stock_Submit').prop('disabled', false);
                            \$('#backbundle_stock_seuil').css('border',\"1px  black\");
                            \$('#backbundle_stock_quantite').css('border',\"1px  black\");
                            \$(\"#seuil\").hide();
                            \$(\"#quatite\").hide();

                        } else {

                            \$(\"#seuil\").show();
                            //alert('ce champs ne peut pas contenir des nombres');
                            \$('#backbundle_stock_Submit').prop('disabled', true);
                            \$('#backbundle_stock_seuil').css('border',\"1px solid #db4848\");
                        }
                    }
                });


            });
        })
    </script>
{% endblock %}
{% block body %}
    <br>
    <h2><strong>Ajouter un stock :</strong></h2>
    <br>
    <table class=\"table table-striped\">
        {{ form_start(form) }}
        <tr>
            <td>{{ form_label(form.produit)  }}</td>
            <td>{{ form_widget(form.produit,{ 'attr': {'class': 'form-control '}})  }}</td>
        </tr>
        <tr>
            <td>{{ form_label(form.quantite)  }}</td>
            <td>{{ form_widget(form.quantite,{ 'attr': {'class': 'form-control '}})  }}</td>
            <td><span class=\"text-danger\" id=\"quatite\"> *cet input n'est pas valide</span></td>
        </tr>
        <tr>
            <td>{{ form_label(form.seuil)  }}</td>
            <td>{{ form_widget(form.seuil,{ 'attr': {'class': 'form-control '}})  }}</td>
            <td><span class=\"text-danger\" id=\"seuil\"> *cet input n'est pas valide</span></td>
        </tr>
        <tr>
            <td>{{ form_label(form.depot)  }}</td>
            <td>{{ form_widget(form.depot,{ 'attr': {'class': 'form-control '}})  }}</td>
        </tr>
        <tr>
            <td></td>
            <td>{{ form_widget(form.Submit,{ 'attr': {'class': 'btn btn-success '}})  }}</td>
        </tr>
        {{ form_end(form)  }}
    </table>
{% endblock %}", "@Back/produit/ajout_stock.html.twig", "C:\\xampp\\htdocs\\pi\\src\\BackBundle\\Resources\\views\\produit\\ajout_stock.html.twig");
    }
}

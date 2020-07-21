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

/* @Front/Livraison/Suivi.html.twig */
class __TwigTemplate_f63986aba447d0a8d8121fe769cd8cce380818e282f6ef99637f372e0e266075 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Front/Livraison/Suivi.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Front/Livraison/Suivi.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Front/Livraison/Suivi.html.twig", 1);
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
        echo "    <style>
        .imag{height: 130px; width: 130px}
        .line{height: 130px; width: 130px}
        #demo{font-size: 40px; color: #1e7e34}
        #source{height: 130px;width: 663px}
    </style>
    <section id=\"page-content\" class=\"page-wrapper\" style=\"    height: 800px;\">
        <br> <br>
        <p id=\"demo\" align=\"center\"></p>
        <div style=\"position: relative ; left: 370px\">
<div>
    <img hidden=\"hidden\" id=\"source\" class=\"imag2\"    src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/freak/images/suivi/source.gif"), "html", null, true);
        echo "\" />
</div>
            <input  type=\"hidden\" id=\"etat\" value=\"";
        // line 17
        if ($this->getAttribute(($context["liv"] ?? null), "Commande", [], "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["liv"] ?? $this->getContext($context, "liv")), "Commande", []), "etatLivraion", []), "html", null, true);
        }
        echo "\" />
            <input  type=\"hidden\" id=\"statu\" value=\"";
        // line 18
        if ($this->getAttribute(($context["liv"] ?? null), "statut", [], "any", true, true)) {
            if (($this->getAttribute(($context["liv"] ?? $this->getContext($context, "liv")), "statut", []) == false)) {
                echo "0";
            } else {
                echo "1";
            }
        }
        echo "\" />


            <img id=\"nonaff\"  class=\"imag\"   src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/freak/images/suivi/nonAff.png"), "html", null, true);
        echo "\" />
            <img class=\"line\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/freak/images/suivi/Line.png"), "html", null, true);
        echo "\" />

            <img id=\"route\" class=\"imag\"    src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/freak/images/suivi/EnRoute.png"), "html", null, true);
        echo "\" />
            <img class=\"line\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/freak/images/suivi/Line.png"), "html", null, true);
        echo "\" />
            <img id=\"livre\" class=\"imag\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/freak/images/suivi/Livre.svg"), "html", null, true);
        echo "\" />



        </div>
<input type=\"hidden\" id=\"dat\" ";
        // line 31
        if ($this->getAttribute(($context["liv"] ?? null), "statut", [], "any", true, true)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["liv"] ?? $this->getContext($context, "liv")), "dateLivraison", []), "Y-m-d H:i:s"), "html", null, true);
            echo "\" ";
        }
        echo ">
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 35
    public function block_js($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 36
        echo "

    <script>
        if(document.getElementById(\"demo\").innerHTML != \"Commande  livrée\"){
if(document.getElementById(\"dat\").value.trim()!=\"\") {
    var parts = document.getElementById(\"dat\").value.trim().split(/[- :]/);
    var dat = new Date(parts[0], parts[1] - 1, parts[2], parts[3], parts[4], parts[5]);


    var countDownDate = dat.getTime();

    // Update the count down every 1 second
    var x = setInterval(function () {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id=\"demo\"
        document.getElementById(\"demo\").innerHTML = days + \"d \" + hours + \"h \"
            + minutes + \"m \" + seconds + \"s \";

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById(\"demo\").innerHTML = \"Commande  livrée\";
        }
    }, 1000);
}else {
    document.getElementById(\"demo\").innerHTML = \"Commande  en cours de traitement\";
}
        }
    </script>

<script >
    \$(document).ready(function () {
        \$(\"#source\").hide();
        if ( \$(\"#etat\").val() ==\"\" )
            \$(\"#nonaff\").css('border','5px solid #1e7e34');
        else if (\$(\"#etat\").val().replace(\"&nbsp;\",\"\") == \"affecté\" &&  \$(\"#statu\").val().replace(\" \",\"\")==\"0\"   ){
            \$(\"#route\").css('border','5px solid #1e7e34');
            \$(\"#source\").show();
        }
        else {
            \$(\"#livre\").css('border','5px solid #1e7e34');
            document.getElementById(\"demo\").innerHTML = \"Commande  livrée\";
        }


    })
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Front/Livraison/Suivi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 36,  139 => 35,  122 => 31,  114 => 26,  110 => 25,  106 => 24,  101 => 22,  97 => 21,  85 => 18,  79 => 17,  74 => 15,  61 => 4,  52 => 3,  30 => 1,);
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
    <style>
        .imag{height: 130px; width: 130px}
        .line{height: 130px; width: 130px}
        #demo{font-size: 40px; color: #1e7e34}
        #source{height: 130px;width: 663px}
    </style>
    <section id=\"page-content\" class=\"page-wrapper\" style=\"    height: 800px;\">
        <br> <br>
        <p id=\"demo\" align=\"center\"></p>
        <div style=\"position: relative ; left: 370px\">
<div>
    <img hidden=\"hidden\" id=\"source\" class=\"imag2\"    src=\"{{ asset('/freak/images/suivi/source.gif') }}\" />
</div>
            <input  type=\"hidden\" id=\"etat\" value=\"{% if liv.Commande is defined %}{{ liv.Commande.etatLivraion  }}{% endif %}\" />
            <input  type=\"hidden\" id=\"statu\" value=\"{% if liv.statut is  defined %}{% if liv.statut==false %}0{% else %}1{% endif %}{% endif %}\" />


            <img id=\"nonaff\"  class=\"imag\"   src=\"{{ asset('/freak/images/suivi/nonAff.png') }}\" />
            <img class=\"line\" src=\"{{ asset('/freak/images/suivi/Line.png') }}\" />

            <img id=\"route\" class=\"imag\"    src=\"{{ asset('/freak/images/suivi/EnRoute.png') }}\" />
            <img class=\"line\" src=\"{{ asset('/freak/images/suivi/Line.png') }}\" />
            <img id=\"livre\" class=\"imag\" src=\"{{ asset('/freak/images/suivi/Livre.svg') }}\" />



        </div>
<input type=\"hidden\" id=\"dat\" {% if liv.statut is  defined %} value=\"{{  liv.dateLivraison| date('Y-m-d H:i:s') }}\" {% endif %}>
    </section>
{% endblock %}

{% block js %}


    <script>
        if(document.getElementById(\"demo\").innerHTML != \"Commande  livrée\"){
if(document.getElementById(\"dat\").value.trim()!=\"\") {
    var parts = document.getElementById(\"dat\").value.trim().split(/[- :]/);
    var dat = new Date(parts[0], parts[1] - 1, parts[2], parts[3], parts[4], parts[5]);


    var countDownDate = dat.getTime();

    // Update the count down every 1 second
    var x = setInterval(function () {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id=\"demo\"
        document.getElementById(\"demo\").innerHTML = days + \"d \" + hours + \"h \"
            + minutes + \"m \" + seconds + \"s \";

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById(\"demo\").innerHTML = \"Commande  livrée\";
        }
    }, 1000);
}else {
    document.getElementById(\"demo\").innerHTML = \"Commande  en cours de traitement\";
}
        }
    </script>

<script >
    \$(document).ready(function () {
        \$(\"#source\").hide();
        if ( \$(\"#etat\").val() ==\"\" )
            \$(\"#nonaff\").css('border','5px solid #1e7e34');
        else if (\$(\"#etat\").val().replace(\"&nbsp;\",\"\") == \"affecté\" &&  \$(\"#statu\").val().replace(\" \",\"\")==\"0\"   ){
            \$(\"#route\").css('border','5px solid #1e7e34');
            \$(\"#source\").show();
        }
        else {
            \$(\"#livre\").css('border','5px solid #1e7e34');
            document.getElementById(\"demo\").innerHTML = \"Commande  livrée\";
        }


    })
</script>
{%  endblock %}

", "@Front/Livraison/Suivi.html.twig", "C:\\xampp\\htdocs\\pi\\src\\FrontBundle\\Resources\\views\\Livraison\\Suivi.html.twig");
    }
}

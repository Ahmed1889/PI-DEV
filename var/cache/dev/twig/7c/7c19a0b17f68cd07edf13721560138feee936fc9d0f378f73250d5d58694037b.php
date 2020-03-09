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

/* @Back/Commande/pdf.html.twig */
class __TwigTemplate_384641adbb74a2ee7e4fad827a4a5eb51b2781aee1bbc92db49dc9b3f875e748 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Back/Commande/pdf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Back/Commande/pdf.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>Example 1</title>
    <link rel=\"stylesheet\" href=\"style.css\" media=\"all\" />
</head>
<body>
<style>.clearfix:after {
        content: \"\";
        display: table;
        clear: both;
    }

    a {
        color: #5D6975;
        text-decoration: underline;
    }

    body {
        position: relative;
        width: 21cm;
        height: 29.7cm;
        margin: 0 auto;
        color: #001028;
        background: #FFFFFF;
        font-family: Arial, sans-serif;
        font-size: 12px;
        font-family: Arial;
    }

    header {
        padding: 10px 0;
        margin-bottom: 30px;
    }

    #logo {
        text-align: center;
        margin-bottom: 10px;
    }




    h1 {
        border-top: 1px solid  #5D6975;
        border-bottom: 1px solid  #5D6975;
        color: #5D6975;
        font-size: 2.4em;
        line-height: 1.4em;
        font-weight: normal;
        text-align: center;
        margin: 0 0 20px 0;

    }

    #project {
        float: left;
    }

    #project span {
        color: #5D6975;
        text-align: right;
        width: 52px;
        margin-right: 10px;
        display: inline-block;
        font-size: 0.8em;
    }

    #company {
        float: right;
        text-align: right;
    }

    #project div,
    #company div {
        white-space: nowrap;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 20px;
    }

    table tr:nth-child(2n-1) td {
        background: #F5F5F5;
    }

    table th,
    table td {
        text-align: center;
    }

    table th {
        padding: 5px 20px;
        color: #5D6975;
        border-bottom: 1px solid #C1CED9;
        white-space: nowrap;
        font-weight: normal;
    }

    table .service,
    table .desc {
        text-align: left;
    }

    table td {
        padding: 20px;
        text-align: right;
    }

    table td.service,
    table td.desc {
        vertical-align: top;
    }

    table td.unit,
    table td.qty,
    table td.total {
        font-size: 1.2em;
    }

    table td.grand {
        border-top: 1px solid #5D6975;;
    }

    #notices .notice {
        color: #5D6975;
        font-size: 1.2em;
    }

    footer {
        color: #5D6975;
        width: 100%;
        height: 30px;
        position: absolute;
        bottom: 0;
        border-top: 1px solid #C1CED9;
        padding: 8px 0;
        text-align: center;
    }</style>
<header class=\"clearfix\">
    <div id=\"logo\">
        <img src=\"C:\\xampp\\htdocs\\pi\\web\\photos\\abc.png\" height=\"250\" width=\"250\" align=\"center\" >
    </div>
    <h1>Commande du client : ";
        // line 148
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "username", []), "html", null, true);
        echo " </h1>
    <div id=\"company\" class=\"clearfix\">
        <div>Maxi-Entrepot</div>
        <div>24 555 555</div>
        <div>Maxi-Entrepot@gmail.com</div>
    </div>
</header>
<main>
    <table class=\"table table-striped\">
        <thead>
        <tr>

            <th class=\"service\">Produit</th>
            <th>Quantite</th>
            <th>Prix Unitaire</th>
            <th>TOTAL</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 168
            echo "            <tr>

                <td class=\"desc\">";
            // line 170
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "libelleP", []), "html", null, true);
            echo "</td>
                <td class=\"unit\">";
            // line 171
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "qte", []), "html", null, true);
            echo "</td>
                <td class=\"qty\">";
            // line 172
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "prixVente", []), "html", null, true);
            echo "</td>
                <td class=\"total\">";
            // line 173
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "prixt", []), "html", null, true);
            echo "</td>

            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "        <tr class=\"total\">
            <td></td>
            <td></td>

            <th>Order Total: </th>
            <td>";
        // line 182
        echo twig_escape_filter($this->env, ($context["total"] ?? $this->getContext($context, "total")), "html", null, true);
        echo "TND</td>
        </tr>
        ";
        // line 184
        if ((isset($context["totalReduit"]) || array_key_exists("totalReduit", $context))) {
            // line 185
            echo "            <tr class=\"total\">
                <td></td>
                <td></td>
                <td></td>
                <th>Reduction value: </th>
                <td>";
            // line 190
            echo twig_escape_filter($this->env, ($context["couponValue"] ?? $this->getContext($context, "couponValue")), "html", null, true);
            echo "%</td>
            </tr>
            <tr class=\"total\">
                <td></td>
                <td></td>
                <td></td>
                <th>New Total: </th>
                <td>";
            // line 197
            echo twig_escape_filter($this->env, ($context["totalReduit"] ?? $this->getContext($context, "totalReduit")), "html", null, true);
            echo "TND</td>
            </tr>
        ";
        }
        // line 200
        echo "
        </tbody>
    </table>
    <div id=\"notices\">
        <div>NOTICE:</div>
        <div class=\"notice\">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
    </div>
    <div id=\"logo\">
        <img align=\"right\" src=\"C:\\xampp\\htdocs\\pi\\web\\photos\\sig.png\" width=\"300\" height=\"300\" >
    </div>
</main>
<footer>
    Invoice was created on a computer and is valid without the signature and seal.
</footer>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Back/Commande/pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 200,  268 => 197,  258 => 190,  251 => 185,  249 => 184,  244 => 182,  237 => 177,  227 => 173,  223 => 172,  219 => 171,  215 => 170,  211 => 168,  207 => 167,  185 => 148,  36 => 1,);
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
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>Example 1</title>
    <link rel=\"stylesheet\" href=\"style.css\" media=\"all\" />
</head>
<body>
<style>.clearfix:after {
        content: \"\";
        display: table;
        clear: both;
    }

    a {
        color: #5D6975;
        text-decoration: underline;
    }

    body {
        position: relative;
        width: 21cm;
        height: 29.7cm;
        margin: 0 auto;
        color: #001028;
        background: #FFFFFF;
        font-family: Arial, sans-serif;
        font-size: 12px;
        font-family: Arial;
    }

    header {
        padding: 10px 0;
        margin-bottom: 30px;
    }

    #logo {
        text-align: center;
        margin-bottom: 10px;
    }




    h1 {
        border-top: 1px solid  #5D6975;
        border-bottom: 1px solid  #5D6975;
        color: #5D6975;
        font-size: 2.4em;
        line-height: 1.4em;
        font-weight: normal;
        text-align: center;
        margin: 0 0 20px 0;

    }

    #project {
        float: left;
    }

    #project span {
        color: #5D6975;
        text-align: right;
        width: 52px;
        margin-right: 10px;
        display: inline-block;
        font-size: 0.8em;
    }

    #company {
        float: right;
        text-align: right;
    }

    #project div,
    #company div {
        white-space: nowrap;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 20px;
    }

    table tr:nth-child(2n-1) td {
        background: #F5F5F5;
    }

    table th,
    table td {
        text-align: center;
    }

    table th {
        padding: 5px 20px;
        color: #5D6975;
        border-bottom: 1px solid #C1CED9;
        white-space: nowrap;
        font-weight: normal;
    }

    table .service,
    table .desc {
        text-align: left;
    }

    table td {
        padding: 20px;
        text-align: right;
    }

    table td.service,
    table td.desc {
        vertical-align: top;
    }

    table td.unit,
    table td.qty,
    table td.total {
        font-size: 1.2em;
    }

    table td.grand {
        border-top: 1px solid #5D6975;;
    }

    #notices .notice {
        color: #5D6975;
        font-size: 1.2em;
    }

    footer {
        color: #5D6975;
        width: 100%;
        height: 30px;
        position: absolute;
        bottom: 0;
        border-top: 1px solid #C1CED9;
        padding: 8px 0;
        text-align: center;
    }</style>
<header class=\"clearfix\">
    <div id=\"logo\">
        <img src=\"C:\\xampp\\htdocs\\pi\\web\\photos\\abc.png\" height=\"250\" width=\"250\" align=\"center\" >
    </div>
    <h1>Commande du client : {{ client.username }} </h1>
    <div id=\"company\" class=\"clearfix\">
        <div>Maxi-Entrepot</div>
        <div>24 555 555</div>
        <div>Maxi-Entrepot@gmail.com</div>
    </div>
</header>
<main>
    <table class=\"table table-striped\">
        <thead>
        <tr>

            <th class=\"service\">Produit</th>
            <th>Quantite</th>
            <th>Prix Unitaire</th>
            <th>TOTAL</th>
        </tr>
        </thead>
        <tbody>
        {% for p in produits %}
            <tr>

                <td class=\"desc\">{{ p.libelleP }}</td>
                <td class=\"unit\">{{ p.qte }}</td>
                <td class=\"qty\">{{ p.prixVente }}</td>
                <td class=\"total\">{{ p.prixt }}</td>

            </tr>
        {% endfor %}
        <tr class=\"total\">
            <td></td>
            <td></td>

            <th>Order Total: </th>
            <td>{{ total }}TND</td>
        </tr>
        {% if totalReduit is defined %}
            <tr class=\"total\">
                <td></td>
                <td></td>
                <td></td>
                <th>Reduction value: </th>
                <td>{{ couponValue }}%</td>
            </tr>
            <tr class=\"total\">
                <td></td>
                <td></td>
                <td></td>
                <th>New Total: </th>
                <td>{{ totalReduit }}TND</td>
            </tr>
        {% endif  %}

        </tbody>
    </table>
    <div id=\"notices\">
        <div>NOTICE:</div>
        <div class=\"notice\">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
    </div>
    <div id=\"logo\">
        <img align=\"right\" src=\"C:\\xampp\\htdocs\\pi\\web\\photos\\sig.png\" width=\"300\" height=\"300\" >
    </div>
</main>
<footer>
    Invoice was created on a computer and is valid without the signature and seal.
</footer>
</body>
</html>", "@Back/Commande/pdf.html.twig", "C:\\xampp\\htdocs\\pi\\src\\BackBundle\\Resources\\views\\Commande\\pdf.html.twig");
    }
}

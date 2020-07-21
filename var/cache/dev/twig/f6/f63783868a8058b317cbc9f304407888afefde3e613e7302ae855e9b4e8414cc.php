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

/* @DForum/Moderator/index.moderator.html.twig */
class __TwigTemplate_4ee95589e2f85123312ed93ab66ef1aa1a88395392ba16ca7ed32ea8d6ae667b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@DForum/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DForum/Moderator/index.moderator.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DForum/Moderator/index.moderator.html.twig"));

        $this->parent = $this->loadTemplate("@DForum/layout.html.twig", "@DForum/Moderator/index.moderator.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Admin
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
";
        // line 10
        echo "<div class=\"row\">

  <div class=\"col-xs-12 col-sm-6\">
    <div class=\"widget-box\">
      <div class=\"widget-title\">
        <span class=\"icon\"><i class=\"fa fa-file\"></i></span><h5>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.post.recent"), "html", null, true);
        echo "</h5>
        <span title=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["posts"] ?? $this->getContext($context, "posts"))), "html", null, true);
        echo " Posts\" class=\"label label-success tip-left\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["posts"] ?? $this->getContext($context, "posts"))), "html", null, true);
        echo "</span>
      </div>
      <div class=\"widget-content nopadding\">
        <ul class=\"recent-posts\">

          ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["posts"] ?? $this->getContext($context, "posts")), 0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 22
            echo "          <li>
            <div class=\"user-thumb\">
              <img width=\"40\" height=\"40\" alt=\"User\" src=\"https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQ1kn09Jy4NdTZmgv4issVLY4M3w_dLz5EGUfDk1DGHN1LKsfDa8A\">
            </div>
            <div class=\"article-post\">
              ";
            // line 27
            if ( !(null === $this->getAttribute($context["post"], "poster", []))) {
                // line 28
                echo "                ";
                $context["username"] = $this->getAttribute($this->getAttribute($context["post"], "poster", []), "username", []);
                // line 29
                echo "                ";
                $context["email"] = "-";
                // line 30
                echo "              ";
            } else {
                // line 31
                echo "                ";
                $context["username"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.deleted.user");
                // line 32
                echo "                ";
                $context["email"] = $this->getAttribute($this->getAttribute($context["post"], "poster", []), "email", []);
                // line 33
                echo "              ";
            }
            // line 34
            echo "              <p>
                <span class=\"user-info\">";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.by"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, ($context["username"] ?? $this->getContext($context, "username")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.on"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "date", []), "Y-m-d H:i:s"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, ($context["email"] ?? $this->getContext($context, "email")), "html", null, true);
            echo "</span><br />
                <span class=\"user-info\">";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.location"), "html", null, true);
            echo ": <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discutea_forum_topic", ["slug" => $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "topic", []), "forum", []), "slug", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "topic", []), "forum", []), "name", []), "html", null, true);
            echo "</a> > <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discutea_forum_post", ["slug" => $this->getAttribute($this->getAttribute($context["post"], "topic", []), "slug", [])]), "html", null, true);
            echo "#content";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "topic", []), "title", []), "html", null, true);
            echo "</a> </span>
              </p>
              <p class=\"content\">
                ";
            // line 39
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($context["post"], "content", [])) > 150)) ? ((twig_slice($this->env, $this->getAttribute($context["post"], "content", []), 0, 150) . "...")) : ($this->getAttribute($context["post"], "content", []))), "html", null, true);
            echo "
              </p>
              <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discutea_forum_post", ["slug" => $this->getAttribute($this->getAttribute($context["post"], "topic", []), "slug", [])]), "html", null, true);
            echo "#content";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", []), "html", null, true);
            echo "\" class=\"btn btn-primary btn-xs pull-right\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.see"), "html", null, true);
            echo "</a>
              <div class=\"clearfix\"></div>
            </div>
          </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
        </ul>
      </div>
    </div>
  </div>
          
  <div class=\"col-xs-12 col-sm-6\">
    <div class=\"widget-box\">
      <div class=\"widget-title\">
        <span class=\"icon\"><i class=\"fa fa-file\"></i></span><h5>";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.topic.recent"), "html", null, true);
        echo "</h5>
        <span title=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["topics"] ?? $this->getContext($context, "topics"))), "html", null, true);
        echo " Topics\" class=\"label label-info tip-left\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["topics"] ?? $this->getContext($context, "topics"))), "html", null, true);
        echo "</span>
      </div>
      <div class=\"widget-content nopadding\">
        <ul class=\"recent-posts\">

          ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["topics"] ?? $this->getContext($context, "topics")), 0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["topic"]) {
            // line 62
            echo "          <li>
            <div class=\"user-thumb\">
              <img width=\"40\" height=\"40\" alt=\"User\" src=\"https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQ1kn09Jy4NdTZmgv4issVLY4M3w_dLz5EGUfDk1DGHN1LKsfDa8A\">
            </div>
            <div class=\"article-post\">
              <p>
                <span class=\"user-info\">";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.by"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["topic"], "date", []), "Y-m-d H:i:s"), "html", null, true);
            echo "</span><br />
                <span class=\"user-info\">";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.location"), "html", null, true);
            echo ": <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discutea_forum_topic", ["slug" => $this->getAttribute($this->getAttribute($context["topic"], "forum", []), "slug", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["topic"], "forum", []), "name", []), "html", null, true);
            echo "</a> > <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discutea_forum_post", ["slug" => $this->getAttribute($context["topic"], "slug", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["topic"], "title", []), "html", null, true);
            echo "</a> </span>
              </p>
              <p class=\"content\">
                ";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["topic"], "title", []), "html", null, true);
            echo "
              </p>
              <div class=\"pull-right\">
                <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discutea_forum_topic", ["slug" => $this->getAttribute($this->getAttribute($context["topic"], "forum", []), "slug", [])]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-xs\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.see"), "html", null, true);
            echo "</a>
              </div>
              <div class=\"clearfix\"></div>
            </div>
          </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "
        </ul>
      </div>
    </div>
  </div>

</div>

";
        // line 89
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_MODERATOR")) {
            // line 90
            echo "  ";
            $this->loadTemplate("DForumBundle:Admin:index.admin.html.twig", "@DForum/Moderator/index.moderator.html.twig", 90)->display($context);
        }
        // line 92
        echo " 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@DForum/Moderator/index.moderator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 92,  276 => 90,  274 => 89,  264 => 81,  250 => 75,  244 => 72,  230 => 69,  224 => 68,  216 => 62,  212 => 61,  202 => 56,  198 => 55,  187 => 46,  172 => 41,  167 => 39,  151 => 36,  139 => 35,  136 => 34,  133 => 33,  130 => 32,  127 => 31,  124 => 30,  121 => 29,  118 => 28,  116 => 27,  109 => 22,  105 => 21,  95 => 16,  91 => 15,  84 => 10,  81 => 8,  72 => 7,  61 => 4,  52 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@DForum/layout.html.twig\" %}

{% block title %}
  Admin
{% endblock %}

{% block body %}

{# Posts and Topic #}
<div class=\"row\">

  <div class=\"col-xs-12 col-sm-6\">
    <div class=\"widget-box\">
      <div class=\"widget-title\">
        <span class=\"icon\"><i class=\"fa fa-file\"></i></span><h5>{{ 'discutea.forum.post.recent'|trans }}</h5>
        <span title=\"{{ posts|length }} Posts\" class=\"label label-success tip-left\">{{ posts|length }}</span>
      </div>
      <div class=\"widget-content nopadding\">
        <ul class=\"recent-posts\">

          {% for post in posts|slice(0, 5) %}
          <li>
            <div class=\"user-thumb\">
              <img width=\"40\" height=\"40\" alt=\"User\" src=\"https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQ1kn09Jy4NdTZmgv4issVLY4M3w_dLz5EGUfDk1DGHN1LKsfDa8A\">
            </div>
            <div class=\"article-post\">
              {% if post.poster is not null %}
                {% set username = post.poster.username %}
                {% set email = '-' %}
              {% else %}
                {% set username = 'discutea.forum.deleted.user'|trans %}
                {% set email = post.poster.email %}
              {% endif %}
              <p>
                <span class=\"user-info\">{{ 'discutea.forum.by'|trans }}: {{ username }} {{ 'discutea.forum.on'|trans }} {{ post.date|date(\"Y-m-d H:i:s\") }}, {{ email }}</span><br />
                <span class=\"user-info\">{{ 'discutea.forum.location'|trans }}: <a href=\"{{ path('discutea_forum_topic', {'slug': post.topic.forum.slug}) }}\">{{ post.topic.forum.name }}</a> > <a href=\"{{ path('discutea_forum_post', {'slug': post.topic.slug}) }}#content{{ post.id }}\">{{ post.topic.title }}</a> </span>
              </p>
              <p class=\"content\">
                {{ post.content|length > 150 ? post.content|slice(0, 150) ~ '...' : post.content  }}
              </p>
              <a href=\"{{ path('discutea_forum_post', {'slug': post.topic.slug}) }}#content{{ post.id }}\" class=\"btn btn-primary btn-xs pull-right\">{{ 'discutea.forum.see'|trans }}</a>
              <div class=\"clearfix\"></div>
            </div>
          </li>
          {% endfor %}

        </ul>
      </div>
    </div>
  </div>
          
  <div class=\"col-xs-12 col-sm-6\">
    <div class=\"widget-box\">
      <div class=\"widget-title\">
        <span class=\"icon\"><i class=\"fa fa-file\"></i></span><h5>{{ 'discutea.forum.topic.recent'|trans }}</h5>
        <span title=\"{{ topics|length }} Topics\" class=\"label label-info tip-left\">{{ topics|length }}</span>
      </div>
      <div class=\"widget-content nopadding\">
        <ul class=\"recent-posts\">

          {% for topic in topics|slice(0, 5) %}
          <li>
            <div class=\"user-thumb\">
              <img width=\"40\" height=\"40\" alt=\"User\" src=\"https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQ1kn09Jy4NdTZmgv4issVLY4M3w_dLz5EGUfDk1DGHN1LKsfDa8A\">
            </div>
            <div class=\"article-post\">
              <p>
                <span class=\"user-info\">{{ 'discutea.forum.by'|trans }}: {{ topic.date|date(\"Y-m-d H:i:s\") }}</span><br />
                <span class=\"user-info\">{{ 'discutea.forum.location'|trans }}: <a href=\"{{ path('discutea_forum_topic', {'slug': topic.forum.slug}) }}\">{{ topic.forum.name }}</a> > <a href=\"{{ path('discutea_forum_post', {'slug': topic.slug}) }}\">{{ topic.title }}</a> </span>
              </p>
              <p class=\"content\">
                {{ topic.title }}
              </p>
              <div class=\"pull-right\">
                <a href=\"{{ path('discutea_forum_topic', {'slug': topic.forum.slug}) }}\" class=\"btn btn-primary btn-xs\">{{ 'discutea.forum.see'|trans }}</a>
              </div>
              <div class=\"clearfix\"></div>
            </div>
          </li>
          {% endfor %}

        </ul>
      </div>
    </div>
  </div>

</div>

{% if is_granted('ROLE_MODERATOR') %}
  {% include 'DForumBundle:Admin:index.admin.html.twig' %}
{% endif %}
 
{% endblock %}
", "@DForum/Moderator/index.moderator.html.twig", "C:\\xampp\\htdocs\\pi\\vendor\\discutea\\forum-bundle\\Discutea\\DForumBundle\\Resources\\views\\Moderator\\index.moderator.html.twig");
    }
}

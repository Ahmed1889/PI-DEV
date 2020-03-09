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

/* @Back/Default/robot.html.twig */
class __TwigTemplate_2c31564470f6caacb78645abd0d6b5d9ca72a3a416eaa3d6913c6d649e3115a5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Back/Default/robot.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Back/Default/robot.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "@Back/Default/robot.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "     <div  class=\"row\">

        <div class=\"col-8\" >
            <a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" >Home</a>
            <div class=\"card\" >
                <div class=\"card-body\">

                    <h4 class=\"card-title\">Parlez à FaRobot</h4>
                    <div class=\"chat-box scrollable\" style=\"height:475px;\">
                        <!--chat Row -->
                        <ul id=\"idchat\" class=\"chat-list\">

                        </ul>
                    </div>
                </div>
                <div class=\"card-body border-top\">
                    <div class=\"row\">
                        <div class=\"col-10\">
                            <div class=\"input-field m-t-0 m-b-0\">
                                <textarea id=\"textarea1\" placeholder=\"Dites Bonjour à FaRobot...\" class=\"form-control border-0\"></textarea>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <button id=\"btnf\" class=\"btn-circle btn-lg btn-cyan float-right text-white\" ><i class=\"fas fa-paper-plane\"></i></button>
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

    // line 34
    public function block_js2($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js2"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js2"));

        // line 35
        echo "    <script type=\"text/javascript\"
            src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        jQuery(document).ready(function () {
            \$(\"#ass\").hide();
            \$(\"#asss\").hide();

        });
    </script>
    <script type=\"text/javascript\">
        jQuery(document).ready(function () {
            \$(\"#resultat\").hide();
            var i=1;
            var searchRequest = null;
            \$(\"#btnf\").click(function () {
                var minlength = 1;

                var value = \$('#textarea1').val();
                //var entitySelector = \$(\"#aff\").html('');
                if (value.length >= minlength) {
                    if (searchRequest != null)
                        searchRequest.abort();
                    searchRequest = \$.ajax({
                        type: \"GET\",
                        url: \"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("robot");
        echo "\",
                        data: {
                            'q': value
                        },
                        dataType: \"text\",
                        success: function (msg) {
                            i+=1;
                            if (value !=null) {
                                var result = JSON.parse(msg);

                                \$.each(result, function (key, arr) {
                                    \$.each(arr, function (id, value) {
                                        if (key === 'question') {
                                            if (id !== 'error') {
                                              //  alert(value[0]);

                                                \$('#idchat').append(



                                                '<li class=\"odd chat-item\">'+
                                                '<div class=\"chat-content\">'+
                                                '<h6 class=\"font-medium\">User</h6>'+
                                                '<div class=\"box bg-light-inverse\" id=\"dsl'+i+'\">'+ \$(\"#textarea1\").val()+'</div>'+
                                                '<br>'+
                                                '</div>'+
                                                '<div class=\"chat-time\">'+new Date().getHours()+':'+new Date().getMinutes()+'</div>'+
                                                '</li>'+

                                                '<li class=\"chat-item rt'+i+'\">'+
                                                '<div class=\"chat-img\"></div>'+
                                                '<div class=\"chat-content\">'+

                                                '<h6 class=\"font-medium\">'+'<img style=\"height: 40px;width: 40px\" src=\"http://localhost/pi/web/photos/farobot.png\">FaRobot</h6>'+

                                                    '<div class=\"box bg-light-info\" >'+value[0]+'</div>'+

                                                ' </div>'+
                                                '<div class=\"chat-time\">'+new Date().getHours()+':'+new Date().getMinutes()+'</div>'+
                                                ' </li>'
                                                );
                                                if (\$(\"#textarea1\").val()==\"merde\"){

                                                    \$(\"#dsl\"+i).html('*****');
                                                }
                                                \$(\".rt\"+i).hide();


                                                \$(\".rt\"+i).show(3000);

                                                \$(\"#textarea1\").val(\"\");

                                            } else {

                                            }

                                        }
                                    });
                                });


                            }

                        },
                        error:function (msg) {
                            \$('#idchat').append(



                                '<li class=\"odd chat-item\">'+
                                '<div class=\"chat-content\">'+
                                '<h6 class=\"font-medium\">User</h6>'+
                                '<div class=\"box bg-light-inverse\" >'+ \$(\"#textarea1\").val()+'</div>'+
                                '<br>'+
                                '</div>'+
                                '<div class=\"chat-time\">'+new Date().getHours()+':'+new Date().getMinutes()+'</div>'+
                                '</li>'+

                                '<li class=\"chat-item rtt'+i+'\">'+
                                '<div class=\"chat-img\"></div>'+
                                '<div class=\"chat-content\">'+
                                '<h6 class=\"font-medium\">'+'<img style=\"height: 40px;width: 40px\" src=\"http://localhost/pi/web/photos/farobot.png\">FaRobot</h6>'+
                                '<div class=\"box bg-light-info\" >'+'J\\'ai pas compris votre question veuillez préciser s\\'il vous plait 😞 '+'</div>'+

                                ' </div>'+
                                '<div class=\"chat-time\">'+new Date().getHours()+':'+new Date().getMinutes()+'</div>'+
                                ' </li>'
                            );
                            \$(\".rtt\"+i).hide();


                            \$(\".rtt\"+i).show(3000);
                            \$(\"#textarea1\").val(\"\");

                        }
                    });
                }
            });
        });
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Back/Default/robot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 59,  116 => 36,  113 => 35,  104 => 34,  66 => 6,  61 => 3,  52 => 2,  30 => 1,);
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
{% block body %}
     <div  class=\"row\">

        <div class=\"col-8\" >
            <a href=\"{{ path('homepage') }}\" >Home</a>
            <div class=\"card\" >
                <div class=\"card-body\">

                    <h4 class=\"card-title\">Parlez à FaRobot</h4>
                    <div class=\"chat-box scrollable\" style=\"height:475px;\">
                        <!--chat Row -->
                        <ul id=\"idchat\" class=\"chat-list\">

                        </ul>
                    </div>
                </div>
                <div class=\"card-body border-top\">
                    <div class=\"row\">
                        <div class=\"col-10\">
                            <div class=\"input-field m-t-0 m-b-0\">
                                <textarea id=\"textarea1\" placeholder=\"Dites Bonjour à FaRobot...\" class=\"form-control border-0\"></textarea>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <button id=\"btnf\" class=\"btn-circle btn-lg btn-cyan float-right text-white\" ><i class=\"fas fa-paper-plane\"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
{% block js2 %}
    <script type=\"text/javascript\"
            src=\"{{ asset(\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\") }}\"></script>
    <script>
        jQuery(document).ready(function () {
            \$(\"#ass\").hide();
            \$(\"#asss\").hide();

        });
    </script>
    <script type=\"text/javascript\">
        jQuery(document).ready(function () {
            \$(\"#resultat\").hide();
            var i=1;
            var searchRequest = null;
            \$(\"#btnf\").click(function () {
                var minlength = 1;

                var value = \$('#textarea1').val();
                //var entitySelector = \$(\"#aff\").html('');
                if (value.length >= minlength) {
                    if (searchRequest != null)
                        searchRequest.abort();
                    searchRequest = \$.ajax({
                        type: \"GET\",
                        url: \"{{ path('robot') }}\",
                        data: {
                            'q': value
                        },
                        dataType: \"text\",
                        success: function (msg) {
                            i+=1;
                            if (value !=null) {
                                var result = JSON.parse(msg);

                                \$.each(result, function (key, arr) {
                                    \$.each(arr, function (id, value) {
                                        if (key === 'question') {
                                            if (id !== 'error') {
                                              //  alert(value[0]);

                                                \$('#idchat').append(



                                                '<li class=\"odd chat-item\">'+
                                                '<div class=\"chat-content\">'+
                                                '<h6 class=\"font-medium\">User</h6>'+
                                                '<div class=\"box bg-light-inverse\" id=\"dsl'+i+'\">'+ \$(\"#textarea1\").val()+'</div>'+
                                                '<br>'+
                                                '</div>'+
                                                '<div class=\"chat-time\">'+new Date().getHours()+':'+new Date().getMinutes()+'</div>'+
                                                '</li>'+

                                                '<li class=\"chat-item rt'+i+'\">'+
                                                '<div class=\"chat-img\"></div>'+
                                                '<div class=\"chat-content\">'+

                                                '<h6 class=\"font-medium\">'+'<img style=\"height: 40px;width: 40px\" src=\"http://localhost/pi/web/photos/farobot.png\">FaRobot</h6>'+

                                                    '<div class=\"box bg-light-info\" >'+value[0]+'</div>'+

                                                ' </div>'+
                                                '<div class=\"chat-time\">'+new Date().getHours()+':'+new Date().getMinutes()+'</div>'+
                                                ' </li>'
                                                );
                                                if (\$(\"#textarea1\").val()==\"merde\"){

                                                    \$(\"#dsl\"+i).html('*****');
                                                }
                                                \$(\".rt\"+i).hide();


                                                \$(\".rt\"+i).show(3000);

                                                \$(\"#textarea1\").val(\"\");

                                            } else {

                                            }

                                        }
                                    });
                                });


                            }

                        },
                        error:function (msg) {
                            \$('#idchat').append(



                                '<li class=\"odd chat-item\">'+
                                '<div class=\"chat-content\">'+
                                '<h6 class=\"font-medium\">User</h6>'+
                                '<div class=\"box bg-light-inverse\" >'+ \$(\"#textarea1\").val()+'</div>'+
                                '<br>'+
                                '</div>'+
                                '<div class=\"chat-time\">'+new Date().getHours()+':'+new Date().getMinutes()+'</div>'+
                                '</li>'+

                                '<li class=\"chat-item rtt'+i+'\">'+
                                '<div class=\"chat-img\"></div>'+
                                '<div class=\"chat-content\">'+
                                '<h6 class=\"font-medium\">'+'<img style=\"height: 40px;width: 40px\" src=\"http://localhost/pi/web/photos/farobot.png\">FaRobot</h6>'+
                                '<div class=\"box bg-light-info\" >'+'J\\'ai pas compris votre question veuillez préciser s\\'il vous plait 😞 '+'</div>'+

                                ' </div>'+
                                '<div class=\"chat-time\">'+new Date().getHours()+':'+new Date().getMinutes()+'</div>'+
                                ' </li>'
                            );
                            \$(\".rtt\"+i).hide();


                            \$(\".rtt\"+i).show(3000);
                            \$(\"#textarea1\").val(\"\");

                        }
                    });
                }
            });
        });
    </script>

{% endblock %}", "@Back/Default/robot.html.twig", "C:\\xampp\\htdocs\\pi\\src\\BackBundle\\Resources\\views\\Default\\robot.html.twig");
    }
}

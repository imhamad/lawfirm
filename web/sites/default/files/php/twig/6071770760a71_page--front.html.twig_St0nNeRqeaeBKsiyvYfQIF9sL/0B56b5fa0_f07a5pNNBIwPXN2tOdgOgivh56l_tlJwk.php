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

/* themes/porto/templates/page--front.html.twig */
class __TwigTemplate_c2c29128e968c3bc2897fcf2220f4d61f6a10082026c76b929ce2633d73d6345 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["include" => 2, "if" => 4];
        $filters = ["escape" => 5];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div id=\"wrapper\">
    ";
        // line 2
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/includes/header.html.twig"), "themes/porto/templates/page--front.html.twig", 2)->display($context);
        // line 3
        echo "    <div role=\"main\" class=\"main\">
        ";
        // line 4
        if ($this->getAttribute(($context["page"] ?? null), "slide_show", [])) {
            // line 5
            echo "                ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "slide_show", [])), "html", null, true);
            echo "
        ";
        }
        // line 7
        echo "        ";
        if (($context["messages"] ?? null)) {
            // line 8
            echo "            <section id=\"messages\" class=\"messages\">
                <div class=\"container\">
                    ";
            // line 10
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["messages"] ?? null)), "html", null, true);
            echo "
                </div>
            </section>
        ";
        }
        // line 14
        echo "         ";
        if ((($context["arg"] ?? null) == "page-coming-soon")) {
            // line 15
            echo "            <div class=\"page-coming-soon\">
                ";
            // line 16
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
                ";
            // line 17
            if ($this->getAttribute(($context["page"] ?? null), "after_content", [])) {
                // line 18
                echo "                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-6 col-md-offset-3\">
                                ";
                // line 21
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "after_content", [])), "html", null, true);
                echo "
                            </div>
                        </div>
                    </div>
                ";
            }
            // line 26
            echo "            </div>
        ";
        } else {
            // line 28
            echo "            ";
            if (($this->getAttribute(($context["page"] ?? null), "left_sidebar", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "right_sidebar", [])))) {
                // line 29
                echo "                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-3 sidebar shop-sidebar\">
                            <div class=\"panel-group\">
                                ";
                // line 33
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "left_sidebar", [])), "html", null, true);
                echo "
                            </div>
                        </div>
                        <div class=\"col-md-9\">
                            ";
                // line 37
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
                echo "
                        </div>
                    </div>
                </div>
            ";
            } elseif (($this->getAttribute(            // line 41
($context["page"] ?? null), "right_sidebar", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "left_sidebar", [])))) {
                // line 42
                echo "                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-9\">
                            ";
                // line 45
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
                echo "
                            ";
                // line 46
                if ($this->getAttribute(($context["page"] ?? null), "related_product", [])) {
                    // line 47
                    echo "                            ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "related_product", [])), "html", null, true);
                    echo "
                            ";
                }
                // line 49
                echo "                        </div>
                        <div class=\"col-md-3\">
                            <aside class=\"sidebar\">
                                ";
                // line 52
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "right_sidebar", [])), "html", null, true);
                echo "
                            </aside>
                        </div>
                    </div>
                </div>
            ";
            } elseif (($this->getAttribute(            // line 57
($context["page"] ?? null), "right_sidebar", []) && $this->getAttribute(($context["page"] ?? null), "left_sidebar", []))) {
                // line 58
                echo "                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <aside class=\"sidebar\">
                                ";
                // line 62
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "left_sidebar", [])), "html", null, true);
                echo "
                            </aside>
                        </div>
                        <div class=\"col-md-6\">
                            ";
                // line 66
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
                echo "
                        </div>
                        <div class=\"col-md-3\">
                            <aside class=\"sidebar\">
                                ";
                // line 70
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "right_sidebar", [])), "html", null, true);
                echo "
                            </aside>
                        </div>
                    </div>
                </div>
            ";
            } else {
                // line 76
                echo "                ";
                if ($this->getAttribute(($context["page"] ?? null), "before_content", [])) {
                    // line 77
                    echo "                    ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "before_content", [])), "html", null, true);
                    echo "
                ";
                }
                // line 79
                echo "                    ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
                echo "
                    ";
                // line 80
                if ($this->getAttribute(($context["page"] ?? null), "related_product", [])) {
                    // line 81
                    echo "                        ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "related_product", [])), "html", null, true);
                    echo "
                    ";
                }
                // line 83
                echo "            ";
            }
            // line 84
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "after_content", [])) {
                // line 85
                echo "                ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "after_content", [])), "html", null, true);
                echo "
            ";
            }
            // line 87
            echo "        ";
        }
        // line 88
        echo "    </div>
    ";
        // line 89
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/includes/footer.html.twig"), "themes/porto/templates/page--front.html.twig", 89)->display($context);
        // line 90
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 90,  240 => 89,  237 => 88,  234 => 87,  228 => 85,  225 => 84,  222 => 83,  216 => 81,  214 => 80,  209 => 79,  203 => 77,  200 => 76,  191 => 70,  184 => 66,  177 => 62,  171 => 58,  169 => 57,  161 => 52,  156 => 49,  150 => 47,  148 => 46,  144 => 45,  139 => 42,  137 => 41,  130 => 37,  123 => 33,  117 => 29,  114 => 28,  110 => 26,  102 => 21,  97 => 18,  95 => 17,  91 => 16,  88 => 15,  85 => 14,  78 => 10,  74 => 8,  71 => 7,  65 => 5,  63 => 4,  60 => 3,  58 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/porto/templates/page--front.html.twig", "/Users/hamad/WebServer/lawfirm/web/themes/porto/templates/page--front.html.twig");
    }
}

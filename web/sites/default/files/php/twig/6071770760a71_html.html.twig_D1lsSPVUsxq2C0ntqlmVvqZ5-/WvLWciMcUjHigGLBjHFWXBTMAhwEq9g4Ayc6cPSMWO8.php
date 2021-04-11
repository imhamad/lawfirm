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

/* themes/porto/templates/html.html.twig */
class __TwigTemplate_29bbe870e1032dce8031f6c81a96fff14e9bc2b7eb967be84f1ce82cfaa74be5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 2, "if" => 12];
        $filters = ["clean_class" => 4, "escape" => 12, "raw" => 15, "safe_join" => 16, "t" => 33];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 'raw', 'safe_join', 't'],
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
        // line 2
        $context["body_classes"] = [0 => ((        // line 3
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), 1 => (( !        // line 4
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null)))))), 2 => ((        // line 5
($context["node_type"] ?? null)) ? (("page-node-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null))))) : ("")), 3 => ((        // line 6
($context["db_offline"] ?? null)) ? ("db-offline") : ("")), 4 => ((        // line 7
($context["current_path"] ?? null)) ? (("context" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["current_path"] ?? null))))) : (""))];
        // line 10
        echo "
<!DOCTYPE html>
<html";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null)), "html", null, true);
        echo " class=\"";
        if ((($context["h_semi_transparent_option"] ?? null) == 1)) {
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("side-header side-header-semi-transparent ");
        } else {
            if ((($context["arg"] ?? null) == "index-header-side-header-semi-transparent")) {
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("side-header side-header-semi-transparent");
            }
        }
        if ((($context["header_option"] ?? null) == "h_left")) {
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("side-header");
        } elseif ((($context["header_option"] ?? null) == "h_right")) {
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("side-header side-header-right");
        } else {
            if ((($context["arg"] ?? null) == "index-header-side-header-left")) {
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("side-header");
            } elseif ((($context["arg"] ?? null) == "index-header-side-header-right")) {
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("side-header side-header-right");
            }
        }
        echo " ";
        if ((($context["arg"] ?? null) == "index-layout-boxed")) {
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("boxed");
        } elseif ((($context["arg"] ?? null) == "index-layout-dark")) {
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("dark");
        } else {
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["layout_option"] ?? null)), "html", null, true);
        }
        echo "\">

<head>
    <head-placeholder token=\"";
        // line 15
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)));
        echo "\">
        <title>";
        // line 16
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null)), " | "));
        echo "</title>
        <meta name=\"viewport\" content=\"width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <link href=\"https://fonts.googleapis.com/css?family=Great+Vibes|Open+Sans:300,400,400i,600,700,800\" rel=\"stylesheet\">
        <css-placeholder token=\"";
        // line 19
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)));
        echo "\">
            
        ";
        // line 21
        if ( !twig_test_empty(($context["your_css"] ?? null))) {
            // line 22
            echo "            <style>
                ";
            // line 23
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["your_css"] ?? null)), "html", null, true);
            echo "
            </style>
        ";
        }
        // line 26
        echo "        <js-placeholder token=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)));
        echo "\">
        <meta name=\"HandheldFriendly\" content=\"true\" />
        <meta name=\"apple-touch-fullscreen\" content=\"YES\" />
</head>
<body ";
        // line 30
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method")), "html", null, true);
        echo " data-spy=\"scroll\" data-offset=\"100\">

<a href=\"#main-content\" class=\"visually-hidden focusable\">
    ";
        // line 33
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Skip to main content"));
        echo "
</a>
<div class=\"body\">
    ";
        // line 36
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null)), "html", null, true);
        echo "
    ";
        // line 37
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null)), "html", null, true);
        echo "
    ";
        // line 38
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null)), "html", null, true);
        echo "
</div>
<js-bottom-placeholder token=\"";
        // line 40
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)));
        echo "\">
</body>
</html>

";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 40,  153 => 38,  149 => 37,  145 => 36,  139 => 33,  133 => 30,  125 => 26,  119 => 23,  116 => 22,  114 => 21,  109 => 19,  103 => 16,  99 => 15,  66 => 12,  62 => 10,  60 => 7,  59 => 6,  58 => 5,  57 => 4,  56 => 3,  55 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/porto/templates/html.html.twig", "/Users/hamad/WebServer/lawfirm/web/themes/porto/templates/html.html.twig");
    }
}

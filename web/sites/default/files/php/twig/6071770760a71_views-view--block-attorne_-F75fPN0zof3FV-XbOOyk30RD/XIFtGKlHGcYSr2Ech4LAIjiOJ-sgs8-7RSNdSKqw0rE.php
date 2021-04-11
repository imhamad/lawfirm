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

/* themes/porto/templates/views/views-view--block-attorneys-slider.html.twig */
class __TwigTemplate_2e722405197eb0d10ea23617f12c8c752806fca9e40e63d4154300076ed16856 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 3, "if" => 12];
        $filters = ["clean_class" => 5, "escape" => 14];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
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
        echo "
";
        // line 3
        $context["classes"] = [0 => "view", 1 => ("view-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 5
($context["id"] ?? null)))), 2 => ("view-id-" . $this->sandbox->ensureToStringAllowed(        // line 6
($context["id"] ?? null))), 3 => ("view-display-id-" . $this->sandbox->ensureToStringAllowed(        // line 7
($context["display_id"] ?? null))), 4 => ((        // line 8
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null)))) : (""))];
        // line 11
        echo " 
  ";
        // line 12
        if (($context["exposed"] ?? null)) {
            // line 13
            echo "    <div class=\"view-filters\">
      ";
            // line 14
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 17
        echo "  ";
        if (($context["attachment_before"] ?? null)) {
            // line 18
            echo "    <div class=\"attachment attachment-before\">
      ";
            // line 19
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 22
        echo "
  ";
        // line 23
        if (($context["rows"] ?? null)) {
            // line 24
            echo "    <div class=\"container\">
      <div";
            // line 25
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
            echo ">
        ";
            // line 26
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
            echo "
        <div class=\"row\">
        <div class=\"col-md-12 center\">
          ";
            // line 29
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null)), "html", null, true);
            echo "
        </div>
      </div>
      <div class=\"row mt-lg\">
        <div class=\"owl-carousel owl-theme owl-team-custom show-nav-title\" data-plugin-options='{\"items\": 4, \"margin\": 10, \"loop\": false, \"nav\": true, \"dots\": false}'>
            ";
            // line 34
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null)), "html", null, true);
            echo "
          </div>
          </div>
          ";
            // line 37
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
            echo "
        </div>
    </div>
  ";
        } elseif (        // line 40
($context["empty"] ?? null)) {
            // line 41
            echo "    <div class=\"view-empty\">
      ";
            // line 42
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 45
        echo "
  ";
        // line 46
        if (($context["pager"] ?? null)) {
            // line 47
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 49
        echo "  ";
        if (($context["attachment_after"] ?? null)) {
            // line 50
            echo "    <div class=\"attachment attachment-after\">
      ";
            // line 51
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 54
        echo "  ";
        if (($context["more"] ?? null)) {
            // line 55
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 57
        echo "  ";
        if (($context["footer"] ?? null)) {
            // line 58
            echo "    <div class=\"view-footer\">
      ";
            // line 59
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 62
        echo "  ";
        if (($context["feed_icons"] ?? null)) {
            // line 63
            echo "    <div class=\"feed-icons\">
      ";
            // line 64
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 67
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/views/views-view--block-attorneys-slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 67,  189 => 64,  186 => 63,  183 => 62,  177 => 59,  174 => 58,  171 => 57,  165 => 55,  162 => 54,  156 => 51,  153 => 50,  150 => 49,  144 => 47,  142 => 46,  139 => 45,  133 => 42,  130 => 41,  128 => 40,  122 => 37,  116 => 34,  108 => 29,  102 => 26,  98 => 25,  95 => 24,  93 => 23,  90 => 22,  84 => 19,  81 => 18,  78 => 17,  72 => 14,  69 => 13,  67 => 12,  64 => 11,  62 => 8,  61 => 7,  60 => 6,  59 => 5,  58 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/porto/templates/views/views-view--block-attorneys-slider.html.twig", "/Users/hamad/WebServer/lawfirm/web/themes/porto/templates/views/views-view--block-attorneys-slider.html.twig");
    }
}

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

/* themes/porto/templates/node/node--view--latest-news--block-latest-news.html.twig */
class __TwigTemplate_6b2487eaffb2a5c4cb43ae7ec1b7fff99f5abcfcde641d47e5e1eb9256d8443d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 1];
        $filters = ["date" => 1, "escape" => 4, "striptags" => 12, "slice" => 18];
        $functions = ["file_url" => 5];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['date', 'escape', 'striptags', 'slice'],
                ['file_url']
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
        $context["createdDate"] = twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["node"] ?? null), "getCreatedTime", [])), "F d, Y");
        // line 2
        echo "<span class=\"thumb-info thumb-info-side-image thumb-info-no-zoom mb-xl\">
\t<span class=\"thumb-info-side-image-wrapper p-none hidden-xs\">
\t\t<a title=\"\" href=\"";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
        echo "\">
\t\t\t<img src=\"";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_image", []), "entity", []), "fileuri", []))]), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" style=\"width: 195px;\">
\t\t</a>
\t</span>
\t<span class=\"thumb-info-caption\">
\t\t<span class=\"thumb-info-caption-text\">
\t\t\t<h2 class=\"mb-md mt-xs\"><a title=\"\" class=\"text-dark\" href=\"";
        // line 10
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
        echo "</a></h2>
\t\t\t<span class=\"post-meta\">
\t\t\t\t<span>";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["createdDate"] ?? null)), "html", null, true);
        echo " | <a href=\"#\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed(($context["author_name"] ?? null))), "html", null, true);
        echo "</a></span>
\t\t\t</span>
\t\t\t";
        // line 14
        ob_start(function () { return ''; });
        echo "\t\t\t\t\t            \t
\t\t\t\t";
        // line 15
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "body", [])), "html", null, true);
        echo "
\t\t\t";
        $context["conBody"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 16
        echo " 
\t\t\t<p class=\"font-size-md\"> 
\t\t\t";
        // line 18
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_slice($this->env, strip_tags($this->sandbox->ensureToStringAllowed(($context["conBody"] ?? null))), 1, 200), "html", null, true);
        echo "...</p>
\t\t\t<a class=\"mt-md\" href=\"";
        // line 19
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
        echo "\">Read More <i class=\"fa fa-long-arrow-right\"></i></a>
\t\t</span>
\t</span>
</span>";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/node/node--view--latest-news--block-latest-news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 19,  100 => 18,  96 => 16,  91 => 15,  87 => 14,  80 => 12,  73 => 10,  65 => 5,  61 => 4,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/porto/templates/node/node--view--latest-news--block-latest-news.html.twig", "/Users/hamad/WebServer/lawfirm/web/themes/porto/templates/node/node--view--latest-news--block-latest-news.html.twig");
    }
}

<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/contrib/like_and_dislike/templates/like-and-dislike-icons.html.twig */
class __TwigTemplate_b9b0ec9dcaac215f2cca61cfe2c9144f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "<div class=\"vote-widget-wrapper\">
  <div class=\"vote-widget vote-widget--like-and-dislike\">
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["icons"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["icon"]) {
            // line 20
            echo "      <div class=\"vote-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["type"], 20, $this->source), "html", null, true);
            echo " type-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["entity_type"] ?? null), 20, $this->source), "html", null, true);
            echo "\" id=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["type"], 20, $this->source), "html", null, true);
            echo "-container-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["entity_type"] ?? null), 20, $this->source), "html", null, true);
            echo "-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["entity_id"] ?? null), 20, $this->source), "html", null, true);
            echo "\">
        <a ";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["icon"], "attributes", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["icon"], "label", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
            echo "</a>
        <span class=\"count\">";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["icon"], "count", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "</span>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['icon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/like_and_dislike/templates/like-and-dislike-icons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  66 => 22,  60 => 21,  47 => 20,  43 => 19,  39 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * The template file to display icons for the like and dislike links.
 *
 * Available variables:
 *   - entity_id: The id of the entity for which is the vote is done.
 *   - entity_type: The entity type id of the entity for which the vote is
 *     done.
 *   - icons: An associative array of icons keyed by type. Each icon contains
 *     the following properties:
 *     - label: The label for the vote type.
 *     - count: The number of votes.
 *     - attributes: HTML attributes for the vote link.
 */
#}
<div class=\"vote-widget-wrapper\">
  <div class=\"vote-widget vote-widget--like-and-dislike\">
    {% for type, icon in icons %}
      <div class=\"vote-{{ type }} type-{{ entity_type }}\" id=\"{{ type }}-container-{{ entity_type }}-{{ entity_id }}\">
        <a {{ icon.attributes }}>{{ icon.label }}</a>
        <span class=\"count\">{{ icon.count }}</span>
      </div>
    {% endfor %}
  </div>
</div>
", "modules/contrib/like_and_dislike/templates/like-and-dislike-icons.html.twig", "/var/www/web/modules/contrib/like_and_dislike/templates/like-and-dislike-icons.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 19);
        static $filters = array("escape" => 20);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}

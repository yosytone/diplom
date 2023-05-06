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

/* modules/contrib/youtube/templates/youtube-video.html.twig */
class __TwigTemplate_fbafabb9c96c580d3adb1ac7b367357c extends \Twig\Template
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
        // line 28
        echo "<figure";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 28, $this->source), "html", null, true);
        echo ">
  <iframe";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 29, $this->source), "html", null, true);
        echo " allowfullscreen></iframe>
</figure>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/youtube/templates/youtube-video.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 29,  39 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display an embedded YouTube video.
 *
 * Available variables:
 * - video_id: The ID of the YouTube video. Used to construct the iframe's src.
 * - entity_title: The title of the entity with the YouTube video field value.
 * - settings: An array of settings selected in the module's configuration and
 *   in the field's display settings.
 * - content_attributes: array of HTML attributes populated by modules, intended
 *   to be added to the iframe of the embedded YouTube video player.
 *   - src: The URL of the YouTube video to be embedded. Contains a query string
 *     with parameter values derived from options selected in the module's
 *     configuration and the field's display settings.
 *   - width: A pixel or percentage value, derived from the display settings.
 *   - height: A pixel or percentage value, derived from the display settings.
 *   - id: A valid HTML ID and guaranteed unique.
 *   - title: A title value, assigned for accessibility.
 * - attributes: array of HTML attributes populated by modules, intended to be
 *   added to the element wrapping the embedded YouTube video player.
 *
 * @see template_preprocess_youtube_video()
 *
 * @ingroup themeable
 */
#}
<figure{{ attributes }}>
  <iframe{{ content_attributes }} allowfullscreen></iframe>
</figure>
", "modules/contrib/youtube/templates/youtube-video.html.twig", "/var/www/web/modules/contrib/youtube/templates/youtube-video.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 28);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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

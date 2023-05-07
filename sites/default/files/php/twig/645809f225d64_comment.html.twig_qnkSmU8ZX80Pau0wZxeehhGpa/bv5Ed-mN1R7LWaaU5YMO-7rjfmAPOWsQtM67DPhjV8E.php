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

/* themes/contrib/freelancer_zymphonies_theme/templates/content/comment.html.twig */
class __TwigTemplate_2f653709c328ba5f942171253f2196a8 extends \Twig\Template
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
        // line 67
        if (($context["threaded"] ?? null)) {
            // line 68
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("classy/indented"), "html", null, true);
            echo "
";
        }
        // line 71
        $context["classes"] = [0 => "comment_card", 1 => "comment", 2 => "js-comment", 3 => (((        // line 75
($context["status"] ?? null) != "published")) ? (($context["status"] ?? null)) : ("")), 4 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 76
($context["comment"] ?? null), "owner", [], "any", false, false, true, 76), "anonymous", [], "any", false, false, true, 76)) ? ("by-anonymous") : ("")), 5 => (((        // line 77
($context["author_id"] ?? null) && (($context["author_id"] ?? null) == twig_get_attribute($this->env, $this->source, ($context["commented_entity"] ?? null), "getOwnerId", [], "method", false, false, true, 77)))) ? ((("by-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["commented_entity"] ?? null), "getEntityTypeId", [], "method", false, false, true, 77), 77, $this->source)) . "-author")) : (""))];
        // line 80
        echo "
<article";
        // line 81
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 81), 81, $this->source), "html", null, true);
        echo ">
<mark class=\"hidden\" data-comment-timestamp=\"";
        // line 82
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["new_indicator_timestamp"] ?? null), 82, $this->source), "html", null, true);
        echo "\"></mark>
  <footer class=\"comment-wrap\">
    <div class=\"row\">
      <div class=\"col-10\">
        <div class=\"row_comments\">
          ";
        // line 87
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_picture"] ?? null), 87, $this->source), "html", null, true);
        echo "
        </div>
        <div class=\"row_comments\">
          <div class=\"comment_author\">";
        // line 90
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author"] ?? null), 90, $this->source), "html", null, true);
        echo "</div>
          <div class=\"comment_created\">";
        // line 91
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["created"] ?? null), 91, $this->source), "html", null, true);
        echo "</div>
        </div>
      </div>
      <div class=\"col-10\">
        <div class=\"comment_content\">";
        // line 95
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 95, $this->source), "html", null, true);
        echo "</div>
      </div>
    </div>
  </footer>
</article>


";
    }

    public function getTemplateName()
    {
        return "themes/contrib/freelancer_zymphonies_theme/templates/content/comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 95,  77 => 91,  73 => 90,  67 => 87,  59 => 82,  55 => 81,  52 => 80,  50 => 77,  49 => 76,  48 => 75,  47 => 71,  41 => 68,  39 => 67,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for comments.
 *
 * Available variables:
 * - author: Comment author. Can be a link or plain text.
 * - content: The content-related items for the comment display. Use
 *   {{ content }} to print them all, or print a subset such as
 *   {{ content.field_example }}. Use the following code to temporarily suppress
 *   the printing of a given child element:
 *   @code
 *   {{ content|without('field_example') }}
 *   @endcode
 * - created: Formatted date and time for when the comment was created.
 *   Preprocess functions can reformat it by calling format_date() with the
 *   desired parameters on the 'comment.created' variable.
 * - changed: Formatted date and time for when the comment was last changed.
 *   Preprocess functions can reformat it by calling format_date() with the
 *   desired parameters on the 'comment.changed' variable.
 * - permalink: Comment permalink.
 * - submitted: Submission information created from author and created
 *   during template_preprocess_comment().
 * - user_picture: The comment author's profile picture.
 * - status: Comment status. Possible values are:
 *   unpublished, published, or preview.
 * - title: Comment title, linked to the comment.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class may contain one or more of the following classes:
 *   - comment: The current template type; e.g., 'theming hook'.
 *   - by-anonymous: Comment by an unregistered user.
 *   - by-{entity-type}-author: Comment by the author of the parent entity,
 *     eg. by-node-author.
 *   - preview: When previewing a new or edited comment.
 *   The following applies only to viewers who are registered users:
 *   - unpublished: An unpublished comment visible only to administrators.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - content_attributes: List of classes for the styling of the comment content.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - threaded: A flag indicating whether the comments are threaded or not.
 *
 * These variables are provided to give context about the parent comment (if
 * any):
 * - comment_parent: Full parent comment entity (if any).
 * - parent_author: Equivalent to author for the parent comment.
 * - parent_created: Equivalent to created for the parent comment.
 * - parent_changed: Equivalent to changed for the parent comment.
 * - parent_title: Equivalent to title for the parent comment.
 * - parent_permalink: Equivalent to permalink for the parent comment.
 * - parent: A text string of parent comment submission information created from
 *   'parent_author' and 'parent_created' during template_preprocess_comment().
 *   This information is presented to help screen readers follow lengthy
 *   discussion threads. You can hide this from sighted users using the class
 *   visually-hidden.
 *
 * These two variables are provided for context:
 * - comment: Full comment object.
 * - entity: Entity the comments are attached to.
 *
 * @see template_preprocess_comment()
 */
#}
{% if threaded %}
  {{ attach_library('classy/indented') }}
{% endif %}
{%
  set classes = [
    'comment_card',
    'comment',
    'js-comment',
    status != 'published' ? status,
    comment.owner.anonymous ? 'by-anonymous',
    author_id and author_id == commented_entity.getOwnerId() ? 'by-' ~ commented_entity.getEntityTypeId() ~ '-author',
  ]
%}

<article{{ attributes.addClass(classes) }}>
<mark class=\"hidden\" data-comment-timestamp=\"{{ new_indicator_timestamp }}\"></mark>
  <footer class=\"comment-wrap\">
    <div class=\"row\">
      <div class=\"col-10\">
        <div class=\"row_comments\">
          {{ user_picture }}
        </div>
        <div class=\"row_comments\">
          <div class=\"comment_author\">{{ author }}</div>
          <div class=\"comment_created\">{{ created }}</div>
        </div>
      </div>
      <div class=\"col-10\">
        <div class=\"comment_content\">{{ content }}</div>
      </div>
    </div>
  </footer>
</article>


", "themes/contrib/freelancer_zymphonies_theme/templates/content/comment.html.twig", "/var/www/web/themes/contrib/freelancer_zymphonies_theme/templates/content/comment.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 67, "set" => 71);
        static $filters = array("escape" => 68);
        static $functions = array("attach_library" => 68);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape'],
                ['attach_library']
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

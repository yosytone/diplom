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

/* modules/custom/custom_comment_form/templates/comment-form--node--post--field-comments.html.twig */
class __TwigTemplate_ac11f1f7e55bd6467e68446ecdc28ac6 extends \Twig\Template
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
        // line 1
        echo "<script>
  var x = 0;
  var accItem = document.getElementsByClassName('accordionItem');
  var accHD = document.getElementsByClassName('accordionItemHeading');

  var accClose = document.getElementsByClassName('close_btn');

  for (i = 0; i < accHD.length; i++) {
    accHD[i].addEventListener('click', toggleItem, false);
  }

  for (i = 0; i < accClose.length; i++) {
    accClose[i].addEventListener('click', toggleItemClose, false);
  }

  function toggleItem() {
    var itemClass = this.parentNode.className;
    for (i = 0; i < accItem.length; i++) {
      accItem[i].className = 'accordionItem close';
    }
    if (itemClass === 'accordionItem close') {
      x = x + 1;
      this.parentNode.className = 'accordionItem open ' + x;
    }
  }

  function toggleItemClose() {
    var itemClass1 = this.parentNode;
    var itemClass2 = itemClass1.parentNode;

    itemClass2.className = 'accordionItem close';
  }
</script>

  <div class=\"accordionItem close\">
    <div class=\"accordionItemHeading\">Написать комментарий...</div>
      <div class=\"accordionItemContent\">
        ";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 38, $this->source), "html", null, true);
        echo "
        <div class=\"close_btn\">Отмена</div>
      </div>
    </div>
  </div>

<p class=\"comment_bottom\">.</p>";
    }

    public function getTemplateName()
    {
        return "modules/custom/custom_comment_form/templates/comment-form--node--post--field-comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 38,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
  var x = 0;
  var accItem = document.getElementsByClassName('accordionItem');
  var accHD = document.getElementsByClassName('accordionItemHeading');

  var accClose = document.getElementsByClassName('close_btn');

  for (i = 0; i < accHD.length; i++) {
    accHD[i].addEventListener('click', toggleItem, false);
  }

  for (i = 0; i < accClose.length; i++) {
    accClose[i].addEventListener('click', toggleItemClose, false);
  }

  function toggleItem() {
    var itemClass = this.parentNode.className;
    for (i = 0; i < accItem.length; i++) {
      accItem[i].className = 'accordionItem close';
    }
    if (itemClass === 'accordionItem close') {
      x = x + 1;
      this.parentNode.className = 'accordionItem open ' + x;
    }
  }

  function toggleItemClose() {
    var itemClass1 = this.parentNode;
    var itemClass2 = itemClass1.parentNode;

    itemClass2.className = 'accordionItem close';
  }
</script>

  <div class=\"accordionItem close\">
    <div class=\"accordionItemHeading\">Написать комментарий...</div>
      <div class=\"accordionItemContent\">
        {{ form }}
        <div class=\"close_btn\">Отмена</div>
      </div>
    </div>
  </div>

<p class=\"comment_bottom\">.</p>", "modules/custom/custom_comment_form/templates/comment-form--node--post--field-comments.html.twig", "/var/www/web/modules/custom/custom_comment_form/templates/comment-form--node--post--field-comments.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 38);
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

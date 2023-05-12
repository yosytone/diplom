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

/* themes/contrib/freelancer_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_c197873d9b28c94da2fad9e9f07a1924 extends \Twig\Template
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
        // line 60
        echo "
<!-- Start: Top Bar -->
<div class=\"top-nav\">

  ";
        // line 64
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "email", [], "any", false, false, true, 64)) {
            // line 65
            echo "    <div class=\"top-email\">
      <i class=\"fa fa-envelope\"></i>
      ";
            // line 67
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "email", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 70
        echo "  
  ";
        // line 71
        if (($context["show_social_icon"] ?? null)) {
            // line 72
            echo "    <div class=\"top-social-media social-media\">
      Follow us 
      ";
            // line 74
            if (($context["facebook_url"] ?? null)) {
                // line 75
                echo "        <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 75, $this->source), "html", null, true);
                echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
      ";
            }
            // line 77
            echo "      ";
            if (($context["twitter_url"] ?? null)) {
                // line 78
                echo "        <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 78, $this->source), "html", null, true);
                echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
      ";
            }
            // line 80
            echo "      ";
            if (($context["linkedin_url"] ?? null)) {
                // line 81
                echo "        <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 81, $this->source), "html", null, true);
                echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
      ";
            }
            // line 83
            echo "      ";
            if (($context["instagram_url"] ?? null)) {
                // line 84
                echo "        <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null), 84, $this->source), "html", null, true);
                echo "\" class=\"instagram\" target=\"_blank\" ><i class=\"fab fa-instagram\"></i></a>
      ";
            }
            // line 86
            echo "      ";
            if (($context["rss_url"] ?? null)) {
                // line 87
                echo "        <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null), 87, $this->source), "html", null, true);
                echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
      ";
            }
            // line 89
            echo "    </div>
  ";
        }
        // line 91
        echo "
  ";
        // line 92
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_menu", [], "any", false, false, true, 92)) {
            // line 93
            echo "    <div class=\"top-menu\">
      ";
            // line 94
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_menu", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 97
        echo "
</div>
<!-- End: Region -->


<!-- Start: Header -->
<div class=\"container-\">
<div class=\"header\">
  <div class=\"container-\">
    <div class=\"row\">

      <div class=\"navbar-header col-md-3\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <i class=\"fas fa-bars\"></i>
        </button>
        ";
        // line 112
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 112)) {
            // line 113
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 115
        echo "      </div>

      ";
        // line 117
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 117) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 117))) {
            // line 118
            echo "        <div class=\"col-md-9\">
          ";
            // line 119
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 119)) {
                // line 120
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 120), 120, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 122
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 122)) {
                // line 123
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 125
            echo "        </div>
      ";
        }
        // line 127
        echo "
    </div>
  </div>
</div>
</div>

<!-- End: Region -->


<!-- Start: Slides -->

";
        // line 138
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 139
            echo "  <div class=\"container-\">
    <div class=\"flexslider\">
      <ul class=\"slides\">
        <li>
          <div class=\"container breaking-news\">
            <div class=\"row align-items-start\">
              <div class=\"col\">
                Одна из трёх колонок
              </div>
              <div class=\"col\">
                Одна из трёх колонок
              </div>
            </div>
            <div class=\"row align-items-start\">
              <div class=\"col\">
                Одна из трёх колонок
              </div>
              <div class=\"col\">
                Одна из трёх колонок
              </div>
              <div class=\"col\">
                Одна из трёх колонок
              </div>
            </div>
          </div>
        </li>
         <li>
          <div class=\"container breaking-news\">
            <div class=\"row align-items-start\">
              <div class=\"col\">
                Одна из трёх колонок
              </div>
              <div class=\"col\">
                Одна из трёх колонок
              </div>
            </div>
            <div class=\"row align-items-start\">
              <div class=\"col\">
                Одна из трёх колонок
              </div>
              <div class=\"col\">
                Одна из трёх колонок
              </div>
              <div class=\"col\">
                Одна из трёх колонок
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
";
        }
        // line 192
        echo "<!-- End: Region -->

<!--Start: Top Message -->
";
        // line 195
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topmessage", [], "any", false, false, true, 195)) {
            // line 196
            echo "  <div class=\"top-message\">
    <div class=\"container\">
      ";
            // line 198
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topmessage", [], "any", false, false, true, 198), 198, $this->source), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 202
        echo "<!-- End: Region -->


<!-- Start: Top widget -->
";
        // line 206
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 206) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 206)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 206))) {
            // line 207
            echo "  
  <div class=\"topwidget\" id=\"topwidget\">

    <div class=\"container\">
      ";
            // line 211
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_title", [], "any", false, false, true, 211)) {
                // line 212
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 213
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_title", [], "any", false, false, true, 213), 213, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 216
            echo "
        <div class=\"row topwidget-list clearfix\">
          ";
            // line 218
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 218)) {
                // line 219
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 219, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 219), 219, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 221
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 221)) {
                // line 222
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 222, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 222), 222, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 224
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 224)) {
                // line 225
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 225, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 225), 225, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 227
            echo "        </div>
    </div>
  </div>

";
        }
        // line 232
        echo "<!-- End: Region -->

    
<!--Start: Highlighted -->
";
        // line 236
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 236)) {
            // line 237
            echo "  <div class=\"highlighted\">
    <div class=\"container\">
      ";
            // line 239
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 239), 239, $this->source), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 243
        echo "<!--End: Highlighted -->


<!--Start: Title -->
";
        // line 247
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 247) &&  !($context["is_front"] ?? null))) {
            // line 248
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <div class=\"container\">
        ";
            // line 251
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 251), 251, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 256
        echo "<!--End: Title -->


<div class=\"main-content\">
  <div class=\"container\">
    <div class=\"\">

      ";
        // line 263
        if ( !($context["is_front"] ?? null)) {
            // line 264
            echo "        <div class=\"row\">
          <div class=\"col-md-12\">";
            // line 265
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 265), 265, $this->source), "html", null, true);
            echo "</div>
        </div>
      ";
        }
        // line 268
        echo "
      <div class=\"row layout\">

        ";
        // line 271
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 271)) {
            // line 272
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null), 272, $this->source), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 274
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 274), 274, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 278
        echo "
        ";
        // line 279
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 279)) {
            // line 280
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null), 280, $this->source), "html", null, true);
            echo ">
            <div class=\"content_layout\">
              ";
            // line 282
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 282), 282, $this->source), "html", null, true);
            echo "
            </div>              
          </div>
        ";
        }
        // line 286
        echo "        
        ";
        // line 287
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 287)) {
            // line 288
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null), 288, $this->source), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 290
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 290), 290, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 294
        echo "        
      </div>
    
    </div>
  </div>
</div>
<!-- End: Region -->


<!-- Start: Features -->
";
        // line 304
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 304) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 304)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 304))) {
            // line 305
            echo "
  <div class=\"features\">
    <div class=\"container\">

      ";
            // line 309
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_title", [], "any", false, false, true, 309)) {
                // line 310
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 311
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_title", [], "any", false, false, true, 311), 311, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 314
            echo "
      <div class=\"row features-list\">
        ";
            // line 316
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 316)) {
                // line 317
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_first_class"] ?? null), 317, $this->source), "html", null, true);
                echo ">
            ";
                // line 318
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 318), 318, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 321
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 321)) {
                // line 322
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 322, $this->source), "html", null, true);
                echo ">
            ";
                // line 323
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 323), 323, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 326
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 326)) {
                // line 327
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 327, $this->source), "html", null, true);
                echo ">
            ";
                // line 328
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 328), 328, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 331
            echo "      </div>
    </div>
  </div>
";
        }
        // line 335
        echo "<!-- End: Region -->


<!-- Start: Updates widgets -->
";
        // line 339
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_first", [], "any", false, false, true, 339) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_second", [], "any", false, false, true, 339)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_third", [], "any", false, false, true, 339))) {
            // line 340
            echo "
  <div class=\"updates\" id=\"updates\">    
    <div class=\"container\">

      ";
            // line 344
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_title", [], "any", false, false, true, 344)) {
                // line 345
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 346
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_title", [], "any", false, false, true, 346), 346, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 349
            echo "
      <div class=\"row updates-list\">
        ";
            // line 351
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_first", [], "any", false, false, true, 351)) {
                // line 352
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 352, $this->source), "html", null, true);
                echo ">
            ";
                // line 353
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_first", [], "any", false, false, true, 353), 353, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 356
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_second", [], "any", false, false, true, 356)) {
                // line 357
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 357, $this->source), "html", null, true);
                echo ">
            ";
                // line 358
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_second", [], "any", false, false, true, 358), 358, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 360
            echo "       
        ";
            // line 361
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_third", [], "any", false, false, true, 361)) {
                // line 362
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 362, $this->source), "html", null, true);
                echo ">
            ";
                // line 363
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_third", [], "any", false, false, true, 363), 363, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 365
            echo "       
        ";
            // line 366
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_forth", [], "any", false, false, true, 366)) {
                // line 367
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 367, $this->source), "html", null, true);
                echo ">
            ";
                // line 368
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_forth", [], "any", false, false, true, 368), 368, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 371
            echo "      </div>
    </div>
  </div>
";
        }
        // line 375
        echo "<!-- End: Region -->


<!-- Start: Middle widgets -->
";
        // line 379
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_first", [], "any", false, false, true, 379) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_second", [], "any", false, false, true, 379)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_third", [], "any", false, false, true, 379)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_forth", [], "any", false, false, true, 379))) {
            // line 380
            echo "
  <div class=\"midwidget\" id=\"midwidget\">    
    <div class=\"container\">

      ";
            // line 384
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_title", [], "any", false, false, true, 384)) {
                // line 385
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 386
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_title", [], "any", false, false, true, 386), 386, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 389
            echo "
      <div class=\"row midwidget-list\">
        ";
            // line 391
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_first", [], "any", false, false, true, 391)) {
                // line 392
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["midwidget_class"] ?? null), 392, $this->source), "html", null, true);
                echo ">
            ";
                // line 393
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_first", [], "any", false, false, true, 393), 393, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 396
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_second", [], "any", false, false, true, 396)) {
                // line 397
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["midwidget_class"] ?? null), 397, $this->source), "html", null, true);
                echo ">
            ";
                // line 398
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_second", [], "any", false, false, true, 398), 398, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 401
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_third", [], "any", false, false, true, 401)) {
                // line 402
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["midwidget_class"] ?? null), 402, $this->source), "html", null, true);
                echo ">
            ";
                // line 403
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_third", [], "any", false, false, true, 403), 403, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 406
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_forth", [], "any", false, false, true, 406)) {
                // line 407
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["midwidget_class"] ?? null), 407, $this->source), "html", null, true);
                echo ">
            ";
                // line 408
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_forth", [], "any", false, false, true, 408), 408, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 411
            echo "      </div>
    </div>
  </div>
";
        }
        // line 415
        echo "<!-- End: Region -->


<!-- Start: Clients -->
";
        // line 419
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients", [], "any", false, false, true, 419)) {
            echo " 
  <div class=\"clients\" id=\"clients\">
    <div class=\"container\">
      ";
            // line 422
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients_title", [], "any", false, false, true, 422)) {
                // line 423
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 424
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients_title", [], "any", false, false, true, 424), 424, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 427
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients", [], "any", false, false, true, 427), 427, $this->source), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 431
        echo "<!-- End: Region -->


<!-- Start: Bottom widgets -->
";
        // line 435
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 435) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 435)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 435)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 435))) {
            // line 436
            echo "
  <div class=\"bottom-widget\" id=\"bottom-widget\">    
    <div class=\"container\">

      ";
            // line 440
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_title", [], "any", false, false, true, 440)) {
                // line 441
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 442
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_title", [], "any", false, false, true, 442), 442, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 445
            echo "
      <div class=\"row bottom-widget-list\">
        ";
            // line 447
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 447)) {
                // line 448
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 448, $this->source), "html", null, true);
                echo ">
            ";
                // line 449
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 449), 449, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 452
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 452)) {
                // line 453
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 453, $this->source), "html", null, true);
                echo ">
            ";
                // line 454
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 454), 454, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 456
            echo "      
        ";
            // line 457
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 457)) {
                // line 458
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 458, $this->source), "html", null, true);
                echo ">
            ";
                // line 459
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 459), 459, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 462
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 462)) {
                // line 463
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 463, $this->source), "html", null, true);
                echo ">
            ";
                // line 464
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 464), 464, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 467
            echo "      </div>
    </div>
  </div>
";
        }
        // line 471
        echo "<!-- End: Region -->


<!-- Start: Footer widgets -->
";
        // line 475
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 475) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 475)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 475))) {
            // line 476
            echo "
  <div class=\"footer\" id=\"footer\">
    <div class=\"container\">

      ";
            // line 480
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_title", [], "any", false, false, true, 480)) {
                // line 481
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 482
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_title", [], "any", false, false, true, 482), 482, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 485
            echo "
      <div class=\"row\">
        ";
            // line 487
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 487)) {
                // line 488
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 488, $this->source), "html", null, true);
                echo ">
            ";
                // line 489
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 489), 489, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 492
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 492)) {
                // line 493
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 493, $this->source), "html", null, true);
                echo ">
            ";
                // line 494
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 494), 494, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 497
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 497)) {
                // line 498
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 498, $this->source), "html", null, true);
                echo ">
            ";
                // line 499
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 499), 499, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 502
            echo "      </div>
    </div>
  </div>
";
        }
        // line 506
        echo "<!-- End: Region -->


<!-- Start: Copyright -->
<div class=\"copyright\">
  <div class=\"container\">
    <span>Copyright © ";
        // line 512
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". All rights reserved.</span>
    ";
        // line 513
        if (($context["show_credit_link"] ?? null)) {
            // line 514
            echo "      <span class=\"credit-link\">Designed By <a href=\"https://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></span>
    ";
        }
        // line 516
        echo "  </div>
</div>
<!-- End: Region -->





";
    }

    public function getTemplateName()
    {
        return "themes/contrib/freelancer_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  938 => 516,  934 => 514,  932 => 513,  928 => 512,  920 => 506,  914 => 502,  908 => 499,  903 => 498,  900 => 497,  894 => 494,  889 => 493,  886 => 492,  880 => 489,  875 => 488,  873 => 487,  869 => 485,  863 => 482,  860 => 481,  858 => 480,  852 => 476,  850 => 475,  844 => 471,  838 => 467,  832 => 464,  827 => 463,  824 => 462,  818 => 459,  813 => 458,  811 => 457,  808 => 456,  802 => 454,  797 => 453,  794 => 452,  788 => 449,  783 => 448,  781 => 447,  777 => 445,  771 => 442,  768 => 441,  766 => 440,  760 => 436,  758 => 435,  752 => 431,  744 => 427,  738 => 424,  735 => 423,  733 => 422,  727 => 419,  721 => 415,  715 => 411,  709 => 408,  704 => 407,  701 => 406,  695 => 403,  690 => 402,  687 => 401,  681 => 398,  676 => 397,  673 => 396,  667 => 393,  662 => 392,  660 => 391,  656 => 389,  650 => 386,  647 => 385,  645 => 384,  639 => 380,  637 => 379,  631 => 375,  625 => 371,  619 => 368,  614 => 367,  612 => 366,  609 => 365,  603 => 363,  598 => 362,  596 => 361,  593 => 360,  587 => 358,  582 => 357,  579 => 356,  573 => 353,  568 => 352,  566 => 351,  562 => 349,  556 => 346,  553 => 345,  551 => 344,  545 => 340,  543 => 339,  537 => 335,  531 => 331,  525 => 328,  520 => 327,  517 => 326,  511 => 323,  506 => 322,  503 => 321,  497 => 318,  492 => 317,  490 => 316,  486 => 314,  480 => 311,  477 => 310,  475 => 309,  469 => 305,  467 => 304,  455 => 294,  448 => 290,  442 => 288,  440 => 287,  437 => 286,  430 => 282,  424 => 280,  422 => 279,  419 => 278,  412 => 274,  406 => 272,  404 => 271,  399 => 268,  393 => 265,  390 => 264,  388 => 263,  379 => 256,  371 => 251,  366 => 248,  364 => 247,  358 => 243,  351 => 239,  347 => 237,  345 => 236,  339 => 232,  332 => 227,  324 => 225,  321 => 224,  313 => 222,  310 => 221,  302 => 219,  300 => 218,  296 => 216,  290 => 213,  287 => 212,  285 => 211,  279 => 207,  277 => 206,  271 => 202,  264 => 198,  260 => 196,  258 => 195,  253 => 192,  198 => 139,  196 => 138,  183 => 127,  179 => 125,  173 => 123,  170 => 122,  164 => 120,  162 => 119,  159 => 118,  157 => 117,  153 => 115,  147 => 113,  145 => 112,  128 => 97,  122 => 94,  119 => 93,  117 => 92,  114 => 91,  110 => 89,  104 => 87,  101 => 86,  95 => 84,  92 => 83,  86 => 81,  83 => 80,  77 => 78,  74 => 77,  68 => 75,  66 => 74,  62 => 72,  60 => 71,  57 => 70,  51 => 67,  47 => 65,  45 => 64,  39 => 60,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 * - logo: The url of the logo image, as defined in theme settings.
 * - site_name: The name of the site. This is empty when displaying the site
 *   name has been disabled in the theme settings.
 * - site_slogan: The slogan of the site. This is empty when displaying the site
 *   slogan has been disabled in theme settings.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - messages: Status and error messages. Should be displayed prominently.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.navigation: Items for the Navigation region.
 * - page.page_title: Used by Current page Title.
 * - page.banner: Items for the banner region.
 * - page.highlighted: Items for the highlighted top  region.
 * - page.content_top: The main content top of the current page.
 * - page.help: Item for the help region.
 * - page.breadcrumb: Item for the Breadcrumb region.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.content_bottom: Items for the bottom in content region.
 * - page.footer_top: Items for the footer top region.
 * - page.footer_first: Items for the footer first region.
 * - page.footer_second: Items for the footer Second region.
 * - page.footer_third: Items for the footer third region.
 * - page.footer_bottom: Items for the footer bottom region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 *
 * @ingroup themeable
 */
#}

<!-- Start: Top Bar -->
<div class=\"top-nav\">

  {% if page.email %}
    <div class=\"top-email\">
      <i class=\"fa fa-envelope\"></i>
      {{ page.email }}
    </div>
  {% endif %}
  
  {% if show_social_icon %}
    <div class=\"top-social-media social-media\">
      Follow us 
      {% if facebook_url %}
        <a href=\"{{ facebook_url }}\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
      {% endif %}
      {% if twitter_url %}
        <a href=\"{{ twitter_url }}\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
      {% endif %}
      {% if linkedin_url %}
        <a href=\"{{ linkedin_url }}\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
      {% endif %}
      {% if instagram_url %}
        <a href=\"{{ instagram_url }}\" class=\"instagram\" target=\"_blank\" ><i class=\"fab fa-instagram\"></i></a>
      {% endif %}
      {% if rss_url %}
        <a href=\"{{ rss_url }}\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
      {% endif %}
    </div>
  {% endif %}

  {% if page.top_menu %}
    <div class=\"top-menu\">
      {{ page.top_menu }}
    </div>
  {% endif %}

</div>
<!-- End: Region -->


<!-- Start: Header -->
<div class=\"container-\">
<div class=\"header\">
  <div class=\"container-\">
    <div class=\"row\">

      <div class=\"navbar-header col-md-3\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <i class=\"fas fa-bars\"></i>
        </button>
        {% if page.header %}
          {{ page.header }}
        {% endif %}
      </div>

      {% if page.primary_menu or page.search %}
        <div class=\"col-md-9\">
          {% if page.search %}
            {{ page.search }}
          {% endif %}
          {% if page.primary_menu %}
            {{ page.primary_menu }}
          {% endif %}
        </div>
      {% endif %}

    </div>
  </div>
</div>
</div>

<!-- End: Region -->


<!-- Start: Slides -->

{% if is_front and show_slideshow %}
  <div class=\"container-\">
    <div class=\"flexslider\">
      <ul class=\"slides\">
        <li>
          <div class=\"container breaking-news\">
            <div class=\"row align-items-start\">
              <div class=\"col\">
                Одна из трёх колонок
              </div>
              <div class=\"col\">
                Одна из трёх колонок
              </div>
            </div>
            <div class=\"row align-items-start\">
              <div class=\"col\">
                Одна из трёх колонок
              </div>
              <div class=\"col\">
                Одна из трёх колонок
              </div>
              <div class=\"col\">
                Одна из трёх колонок
              </div>
            </div>
          </div>
        </li>
         <li>
          <div class=\"container breaking-news\">
            <div class=\"row align-items-start\">
              <div class=\"col\">
                Одна из трёх колонок
              </div>
              <div class=\"col\">
                Одна из трёх колонок
              </div>
            </div>
            <div class=\"row align-items-start\">
              <div class=\"col\">
                Одна из трёх колонок
              </div>
              <div class=\"col\">
                Одна из трёх колонок
              </div>
              <div class=\"col\">
                Одна из трёх колонок
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
{% endif %}
<!-- End: Region -->

<!--Start: Top Message -->
{% if page.topmessage %}
  <div class=\"top-message\">
    <div class=\"container\">
      {{ page.topmessage }}
    </div>
  </div>
{% endif %}
<!-- End: Region -->


<!-- Start: Top widget -->
{% if page.topwidget_first or page.topwidget_second or page.topwidget_third %}
  
  <div class=\"topwidget\" id=\"topwidget\">

    <div class=\"container\">
      {% if page.topwidget_title %}
        <div class=\"custom-block-title\" >
          {{ page.topwidget_title }}
        </div>
      {% endif %}

        <div class=\"row topwidget-list clearfix\">
          {% if page.topwidget_first %}
            <div class = {{ topwidget_class }}>{{ page.topwidget_first }}</div>
          {% endif %}
          {% if page.topwidget_second %}
            <div class = {{ topwidget_class }}>{{ page.topwidget_second }}</div>
          {% endif %}
          {% if page.topwidget_third %}
            <div class = {{ topwidget_class }}>{{ page.topwidget_third }}</div>
          {% endif %}
        </div>
    </div>
  </div>

{% endif %}
<!-- End: Region -->

    
<!--Start: Highlighted -->
{% if page.highlighted %}
  <div class=\"highlighted\">
    <div class=\"container\">
      {{ page.highlighted }}
    </div>
  </div>
{% endif %}
<!--End: Highlighted -->


<!--Start: Title -->
{%  if page.page_title and not is_front %}
  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <div class=\"container\">
        {{ page.page_title }}
      </div>
    </div>
  </div>
{% endif %}
<!--End: Title -->


<div class=\"main-content\">
  <div class=\"container\">
    <div class=\"\">

      {% if not is_front %}
        <div class=\"row\">
          <div class=\"col-md-12\">{{ page.breadcrumb }}</div>
        </div>
      {% endif %}

      <div class=\"row layout\">

        {% if page.sidebar_first %}
          <div class={{sidebarfirst}}>
            <div class=\"sidebar\">
              {{ page.sidebar_first }}
            </div>
          </div>
        {% endif %}

        {% if page.content %}
          <div class={{contentlayout}}>
            <div class=\"content_layout\">
              {{ page.content }}
            </div>              
          </div>
        {% endif %}
        
        {% if page.sidebar_second %}
          <div class={{sidebarsecond}}>
            <div class=\"sidebar\">
              {{ page.sidebar_second }}
            </div>
          </div>
        {% endif %}
        
      </div>
    
    </div>
  </div>
</div>
<!-- End: Region -->


<!-- Start: Features -->
{% if page.features_first or page.features_second or page.features_third %}

  <div class=\"features\">
    <div class=\"container\">

      {% if page.features_title %}
        <div class=\"custom-block-title\" >
          {{ page.features_title }}
        </div>
      {% endif %}

      <div class=\"row features-list\">
        {% if page.features_first %}
          <div class = {{ features_first_class }}>
            {{ page.features_first }}
          </div>
        {% endif %}
        {% if page.features_second %}
          <div class = {{ features_class }}>
            {{ page.features_second }}
          </div>
        {% endif %}
        {% if page.features_third %}
          <div class = {{ features_class }}>
            {{ page.features_third }}
          </div>
        {% endif %}
      </div>
    </div>
  </div>
{% endif %}
<!-- End: Region -->


<!-- Start: Updates widgets -->
{% if page.updates_first or page.updates_second or page.updates_third %}

  <div class=\"updates\" id=\"updates\">    
    <div class=\"container\">

      {% if page.updates_title %}
        <div class=\"custom-block-title\" >
          {{ page.updates_title }}
        </div>
      {% endif %}

      <div class=\"row updates-list\">
        {% if page.updates_first %}
          <div class = {{ updates_class }}>
            {{ page.updates_first }}
          </div>
        {% endif %}
        {% if page.updates_second %}
          <div class = {{ updates_class }}>
            {{ page.updates_second }}
          </div>
        {% endif %}       
        {% if page.updates_third %}
          <div class = {{ updates_class }}>
            {{ page.updates_third }}
          </div>
        {% endif %}       
        {% if page.updates_forth %}
          <div class = {{ updates_class }}>
            {{ page.updates_forth }}
          </div>
        {% endif %}
      </div>
    </div>
  </div>
{% endif %}
<!-- End: Region -->


<!-- Start: Middle widgets -->
{% if page.midwidget_first or page.midwidget_second or page.midwidget_third or page.midwidget_forth %}

  <div class=\"midwidget\" id=\"midwidget\">    
    <div class=\"container\">

      {% if page.midwidget_title %}
        <div class=\"custom-block-title\" >
          {{ page.midwidget_title }}
        </div>
      {% endif %}

      <div class=\"row midwidget-list\">
        {% if page.midwidget_first %}
          <div class = {{ midwidget_class }}>
            {{ page.midwidget_first }}
          </div>
        {% endif %}
        {% if page.midwidget_second %}
          <div class = {{ midwidget_class }}>
            {{ page.midwidget_second }}
          </div>
        {% endif %}
        {% if page.midwidget_third %}
          <div class = {{ midwidget_class }}>
            {{ page.midwidget_third }}
          </div>
        {% endif %}
        {% if page.midwidget_forth %}
          <div class = {{ midwidget_class }}>
            {{ page.midwidget_forth }}
          </div>
        {% endif %}
      </div>
    </div>
  </div>
{% endif %}
<!-- End: Region -->


<!-- Start: Clients -->
{% if page.clients %} 
  <div class=\"clients\" id=\"clients\">
    <div class=\"container\">
      {% if page.clients_title %}
        <div class=\"custom-block-title\" >
          {{ page.clients_title }}
        </div>
      {% endif %}
      {{ page.clients }}
    </div>
  </div>
{% endif %}
<!-- End: Region -->


<!-- Start: Bottom widgets -->
{% if page.bottom_first or page.bottom_second or page.bottom_third or page.bottom_forth %}

  <div class=\"bottom-widget\" id=\"bottom-widget\">    
    <div class=\"container\">

      {% if page.bottom_title %}
        <div class=\"custom-block-title\" >
          {{ page.bottom_title }}
        </div>
      {% endif %}

      <div class=\"row bottom-widget-list\">
        {% if page.bottom_first %}
          <div class = {{ bottom_class }}>
            {{ page.bottom_first }}
          </div>
        {% endif %}
        {% if page.bottom_second %}
          <div class = {{ bottom_class }}>
            {{ page.bottom_second }}
          </div>
        {% endif %}      
        {% if page.bottom_third %}
          <div class = {{ bottom_class }}>
            {{ page.bottom_third }}
          </div>
        {% endif %}
        {% if page.bottom_forth %}
          <div class = {{ bottom_class }}>
            {{ page.bottom_forth }}
          </div>
        {% endif %}
      </div>
    </div>
  </div>
{% endif %}
<!-- End: Region -->


<!-- Start: Footer widgets -->
{% if page.footer_first or page.footer_second or page.footer_third %}

  <div class=\"footer\" id=\"footer\">
    <div class=\"container\">

      {% if page.footer_title %}
        <div class=\"custom-block-title\" >
          {{ page.footer_title }}
        </div>
      {% endif %}

      <div class=\"row\">
        {% if page.footer_first %}
          <div class = {{ footer_class }}>
            {{ page.footer_first }}
          </div>
        {% endif %}
        {% if page.footer_second %}
          <div class = {{ footer_class }}>
            {{ page.footer_second }}
          </div>
        {% endif %}
        {% if page.footer_third %}
          <div class = {{ footer_class }}>
            {{ page.footer_third }}
          </div>
        {% endif %}
      </div>
    </div>
  </div>
{% endif %}
<!-- End: Region -->


<!-- Start: Copyright -->
<div class=\"copyright\">
  <div class=\"container\">
    <span>Copyright © {{ \"now\"|date(\"Y\") }}. All rights reserved.</span>
    {% if show_credit_link %}
      <span class=\"credit-link\">Designed By <a href=\"https://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></span>
    {% endif %}
  </div>
</div>
<!-- End: Region -->





", "themes/contrib/freelancer_zymphonies_theme/templates/layout/page.html.twig", "/var/www/web/themes/contrib/freelancer_zymphonies_theme/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 64);
        static $filters = array("escape" => 67, "date" => 512);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'date'],
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

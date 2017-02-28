<?php

/* themes/custom/subtheme/templates/page.html.twig */
class __TwigTemplate_94f2d3337d2f01b3921f488a98f532397770115591e0ecf2319344c3acf4a8fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 77, "spaceless" => 84);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'spaceless'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 65
        echo "<div id=\"page\" role=\"document\">

   \t";
        // line 68
        echo "\t";
        // line 69
        echo "
\t";
        // line 75
        echo "
\t<header class=\"header\">
\t\t";
        // line 77
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        }
        // line 78
        echo "\t\t<div id=\"hamburger\"><span></span></div>
\t</header>

\t<main id=\"main\">\t\t\t\t
\t\t<section id=\"page-top\">
\t\t\t";
        // line 83
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 84
            echo "\t\t\t\t";
            ob_start();
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 85
            echo "\t\t\t";
        }
        echo "\t\t\t\t
\t\t</section>

\t\t<div class=\"row\">
\t\t\t<div class=\"main ";
        // line 89
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["main_grid"]) ? $context["main_grid"] : null), "html", null, true));
        echo " column";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            echo " large-pull-3";
        }
        echo "\">\t\t\t\t\t\t
\t\t\t\t<a id=\"main-content\"></a>
\t\t\t\t";
        // line 104
        echo "\t\t\t\t
\t\t\t\t";
        // line 105
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
\t
\t\t\t</div><!-- // .main -->\t

\t\t\t";
        // line 109
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 110
            echo "\t\t\t<div id=\"sidebar-first\" class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebar_first_grid"]) ? $context["sidebar_first_grid"] : null), "html", null, true));
            echo " column sidebar\">
\t\t\t\t";
            // line 111
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
\t\t\t</div>
\t\t\t";
        }
        // line 114
        echo "\t\t\t
\t\t\t";
        // line 115
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 116
            echo "\t\t\t<div id=\"sidebar-second\" class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebar_sec_grid"]) ? $context["sidebar_sec_grid"] : null), "html", null, true));
            echo " column sidebar large-push-9\">
\t\t\t\t";
            // line 117
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
\t\t\t</div>
\t\t\t";
        }
        // line 119
        echo "\t

\t\t</div>
\t</main>\t
\t
\t<footer id=\"footer\">\t\t  \t
\t\t";
        // line 125
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
        }
        // line 126
        echo "\t</footer>
</div>

";
        // line 129
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "messages", array())) {
            echo "<div id=\"messages\" class=\"row\"><div class=\"large-12 column\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "messages", array()), "html", null, true));
            echo "</div></div>";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/subtheme/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 129,  142 => 126,  138 => 125,  130 => 119,  124 => 117,  119 => 116,  117 => 115,  114 => 114,  108 => 111,  103 => 110,  101 => 109,  94 => 105,  91 => 104,  82 => 89,  74 => 85,  69 => 84,  67 => 83,  60 => 78,  56 => 77,  52 => 75,  49 => 69,  47 => 68,  43 => 65,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Zurb Foundations's theme implementation to display a single page.*/
/*  **/
/*  * Available variables:*/
/*  **/
/*  * General utility variables:*/
/*  * - base_path: The base URL path of the Drupal installation. Will usually be*/
/*  *   "/" unless you have installed Drupal in a sub-directory.*/
/*  * - is_front: A flag indicating if the current page is the front page.*/
/*  * - logged_in: A flag indicating if the user is registered and signed in.*/
/*  * - is_admin: A flag indicating if the user has permission to access*/
/*  *   administration pages.*/
/*  **/
/*  * Site identity:*/
/*  * - front_page: The URL of the front page. Use this instead of base_path when*/
/*  *   linking to the front page. This includes the language domain or prefix.*/
/*  * - logo: The url of the logo image, as defined in theme settings.*/
/*  * - linked_logo: The logo image, linked to <front>.*/
/*  * - site_name: The name of the site. This is empty when displaying the site*/
/*  *   name has been disabled in the theme settings.*/
/*  * - linked_site_name: The name of the site that also links to <front>.*/
/*  * - site_slogan: The slogan of the site. This is empty when displaying the site*/
/*  *   slogan has been disabled in theme settings.*/
/*  * - hide_site_name: A flag indicating if the site name has been toggled off on*/
/*  *   the theme settings page. If hidden, the "visually-hidden" class is added*/
/*  *   to make the site name visually hidden, but still accessible.*/
/*  * - hide_site_slogan: A flag indicating if the site slogan has been toggled off*/
/*  *   on the theme settings page. If hidden, the "visually-hidden" class is*/
/*  *   added to make the site slogan visually hidden, but still accessible.*/
/*  **/
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title: The page title, for use in the actual content.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the*/
/*  *   view and edit tabs when displaying a node).*/
/*  * - action_links: Actions local to the page, such as "Add menu" on the menu*/
/*  *   administration interface.*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  * Regions:*/
/*  * - page.meta_header*/
/*  * - page.header*/
/*  * - page.help*/
/*  * - page.highlighted*/
/*  * - page.content*/
/*  * - page.sidebar_first*/
/*  * - page.sidebar_second*/
/*  * - page.footer_first*/
/*  * - page.footer_middle*/
/*  * - page.footer_last*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see bartik_preprocess_page()*/
/*  * @see html.html.twig*/
/*  *//* */
/* #}*/
/* <div id="page" role="document">*/
/* */
/*    	{# <aside class="left-off-canvas-menu">{{ page.left_off_canvas }}</aside> #}*/
/* 	{# <aside class="right-off-canvas-menu">{{ page.right_off_canvas }}</aside> #}*/
/* */
/* 	{# {% if page.meta_header %}*/
/*        	{% if meta_header_grid %}<div class="row"><div class="large-12 column">{% endif %}*/
/* 		{{ page.meta_header }}*/
/* 		{% if meta_header_grid %}</div></div>{% endif %}*/
/* 	{% endif %} #}*/
/* */
/* 	<header class="header">*/
/* 		{% if page.header %}{{ page.header }}{% endif %}*/
/* 		<div id="hamburger"><span></span></div>*/
/* 	</header>*/
/* */
/* 	<main id="main">				*/
/* 		<section id="page-top">*/
/* 			{% if page.highlighted %}*/
/* 				{% spaceless %}{{ page.highlighted }}{% endspaceless %}*/
/* 			{% endif %}				*/
/* 		</section>*/
/* */
/* 		<div class="row">*/
/* 			<div class="main {{ main_grid }} column{% if page.sidebar_second %} large-pull-3{% endif %}">						*/
/* 				<a id="main-content"></a>*/
/* 				{# {% if breadcrumb %} {{ breadcrumb }} {% endif %}*/
/* */
/* 				{% if title and not is_front %}*/
/* 			    	{{ title_prefix }}<h1 id="page-title" class="title">{{ title }}</h1>{{ title_suffix }}*/
/* 				{% endif %}*/
/* 			*/
/* 				{% if tabs %}{{ tabs }}{% if tabs2 %}{{ tabs2 }}{% endif %}{% endif %}*/
/* 			*/
/* 				{% if action_links %}*/
/* 			    	<ul class="action-links">*/
/* 						{{ action_links }}*/
/* 					</ul>*/
/* 				{% endif %} #}*/
/* 				*/
/* 				{{ page.content }}*/
/* 	*/
/* 			</div><!-- // .main -->	*/
/* */
/* 			{% if page.sidebar_first %}*/
/* 			<div id="sidebar-first" class="{{ sidebar_first_grid }} column sidebar">*/
/* 				{{ page.sidebar_first }}*/
/* 			</div>*/
/* 			{% endif %}*/
/* 			*/
/* 			{% if page.sidebar_second %}*/
/* 			<div id="sidebar-second" class="{{ sidebar_sec_grid }} column sidebar large-push-9">*/
/* 				{{ page.sidebar_second }}*/
/* 			</div>*/
/* 			{% endif %}	*/
/* */
/* 		</div>*/
/* 	</main>	*/
/* 	*/
/* 	<footer id="footer">		  	*/
/* 		{% if page.footer %}{{ page.footer }}{% endif %}*/
/* 	</footer>*/
/* </div>*/
/* */
/* {% if page.messages %}<div id="messages" class="row"><div class="large-12 column">{{ page.messages }}</div></div>{% endif %}*/

<?php

/* themes/custom/subtheme/templates/html.html.twig */
class __TwigTemplate_14437f165a969e32220223c3f366f8953041dc15da143509dd492380952cd6f5 extends Twig_Template
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
        $tags = array("set" => 28, "if" => 51);
        $filters = array("clean_class" => 29, "raw" => 35, "safe_join" => 38, "t" => 47);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class', 'raw', 'safe_join', 't'),
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

        // line 28
        $context["body_classes"] = array(0 => (((isset($context["logged_in"]) ? $context["logged_in"] : null)) ? ("user-logged-in") : ("")), 1 => (( !        // line 29
(isset($context["root_path"]) ? $context["root_path"] : null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass((isset($context["root_path"]) ? $context["root_path"] : null))))), 2 => ((        // line 30
(isset($context["node_type"]) ? $context["node_type"] : null)) ? (("node--type-" . \Drupal\Component\Utility\Html::getClass((isset($context["node_type"]) ? $context["node_type"] : null)))) : ("")), 3 => ((        // line 31
(isset($context["db_offline"]) ? $context["db_offline"] : null)) ? ("db-offline") : ("")));
        // line 34
        echo "<!DOCTYPE html>
<html ";
        // line 35
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["html_attributes"]) ? $context["html_attributes"] : null)));
        echo ">
\t<head>
    \t<head-placeholder token=\"";
        // line 37
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
\t\t<title>";
        // line 38
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->safeJoin($this->env, (isset($context["head_title"]) ? $context["head_title"] : null), " | ")));
        echo "</title>
\t\t
\t\t<!-- Add favicons -->
\t\t<!-- Add webfonts -->

\t\t<css-placeholder token=\"";
        // line 43
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
\t\t<js-placeholder token=\"";
        // line 44
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
\t</head>
\t<body";
        // line 46
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["body_classes"]) ? $context["body_classes"] : null)), "method"), "html", null, true));
        echo ">
\t\t<a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">";
        // line 47
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Skip to main content")));
        echo "</a>
\t\t";
        // line 48
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_top"]) ? $context["page_top"] : null), "html", null, true));
        echo "
\t\t";
        // line 49
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true));
        echo "
\t\t";
        // line 50
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_bottom"]) ? $context["page_bottom"] : null), "html", null, true));
        echo "
\t\t";
        // line 51
        if ((isset($context["map_locations_script"]) ? $context["map_locations_script"] : null)) {
            echo "<script type=\"text/javascript\">window.locationsGEO = ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["map_locations_script"]) ? $context["map_locations_script"] : null)));
            echo "</script>";
        }
        // line 52
        echo "\t\t<js-bottom-placeholder token=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/subtheme/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 52,  97 => 51,  93 => 50,  89 => 49,  85 => 48,  81 => 47,  77 => 46,  72 => 44,  68 => 43,  60 => 38,  56 => 37,  51 => 35,  48 => 34,  46 => 31,  45 => 30,  44 => 29,  43 => 28,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for the basic structure of a single Drupal page.*/
/*  **/
/*  * Variables:*/
/*  * - logged_in: A flag indicating if user is logged in.*/
/*  * - root_path: The root path of the current page (e.g., node, admin, user).*/
/*  * - node_type: The content type for the current node, if the page is a node.*/
/*  * - head_title: List of text elements that make up the head_title variable.*/
/*  *   May contain or more of the following:*/
/*  *   - title: The title of the page.*/
/*  *   - name: The name of the site.*/
/*  *   - slogan: The slogan of the site.*/
/*  * - page_top: Initial rendered markup. This should be printed before 'page'.*/
/*  * - page: The rendered page markup.*/
/*  * - page_bottom: Closing rendered markup. This variable should be printed after*/
/*  *   'page'.*/
/*  * - db_offline: A flag indicating if the database is offline.*/
/*  * - placeholder_token: The token for generating head, css, js and js-bottom*/
/*  *   placeholders.*/
/*  * - html_attributes: Raw HTML attributes for the <html> tag.*/
/*  *   Contains langcode and text direction.*/
/*  **/
/*  * @see template_preprocess_html()*/
/*  *//* */
/* #}*/
/* {% set body_classes = [ logged_in ? 'user-logged-in', */
/* 						not root_path ? 'path-frontpage' : 'path-' ~ root_path|clean_class, */
/* 						node_type ? 'node--type-' ~ node_type|clean_class,*/
/* 						db_offline ? 'db-offline',*/
/* 					  ] */
/* %}*/
/* <!DOCTYPE html>*/
/* <html {{ html_attributes|raw }}>*/
/* 	<head>*/
/*     	<head-placeholder token="{{ placeholder_token|raw }}">*/
/* 		<title>{{ head_title|safe_join(' | ') }}</title>*/
/* 		*/
/* 		<!-- Add favicons -->*/
/* 		<!-- Add webfonts -->*/
/* */
/* 		<css-placeholder token="{{ placeholder_token|raw }}">*/
/* 		<js-placeholder token="{{ placeholder_token|raw }}">*/
/* 	</head>*/
/* 	<body{{ attributes.addClass(body_classes) }}>*/
/* 		<a href="#main-content" class="visually-hidden focusable skip-link">{{ 'Skip to main content'|t }}</a>*/
/* 		{{ page_top }}*/
/* 		{{ page }}*/
/* 		{{ page_bottom }}*/
/* 		{% if map_locations_script %}<script type="text/javascript">window.locationsGEO = {{ map_locations_script|raw }}</script>{% endif %}*/
/* 		<js-bottom-placeholder token="{{ placeholder_token|raw }}">*/
/* 	</body>*/
/* </html>*/
/* */

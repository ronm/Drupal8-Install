<?php

/* themes/custom/subtheme/templates/container.html.twig */
class __TwigTemplate_140173312f06047be53f6f2d617699239b2a02b18d2d69cdda5fe8abafe988ea extends Twig_Template
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
        $tags = array("set" => 24, "if" => 26);
        $filters = array("length" => 26, "trim" => 26);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array('length', 'trim'),
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

        // line 24
        $context["classes"] = array(0 => (((isset($context["has_parent"]) ? $context["has_parent"] : null)) ? ("js-form-wrapper") : ("")), 1 => (((isset($context["has_parent"]) ? $context["has_parent"] : null)) ? ("form-wrapper") : ("")));
        // line 25
        $context["attributes_formatted"] = $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method");
        // line 26
        if (twig_length_filter($this->env, trim((isset($context["attributes_formatted"]) ? $context["attributes_formatted"] : null)))) {
            echo "<div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes_formatted"]) ? $context["attributes_formatted"] : null), "html", null, true));
            echo ">";
        }
        // line 27
        echo "\t";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "
";
        // line 28
        if (twig_length_filter($this->env, trim((isset($context["attributes_formatted"]) ? $context["attributes_formatted"] : null)))) {
            echo "</div>";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/subtheme/templates/container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 28,  53 => 27,  47 => 26,  45 => 25,  43 => 24,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation of a container used to wrap child elements.*/
/*  **/
/*  * Used for grouped form items. Can also be used as a theme wrapper for any*/
/*  * renderable element, to surround it with a <div> and HTML attributes.*/
/*  * See \Drupal\Core\Render\Element\RenderElement for more*/
/*  * information on the #theme_wrappers render array property, and*/
/*  * \Drupal\Core\Render\Element\container for usage of the container render*/
/*  * element.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the containing element.*/
/*  * - children: The rendered child elements of the container.*/
/*  * - has_parent: A flag to indicate that the container has one or more parent*/
/*      containers.*/
/*  **/
/*  * @see template_preprocess_container()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% set classes = [ has_parent ? 'js-form-wrapper', has_parent ? 'form-wrapper', ] %}*/
/* {% set attributes_formatted = attributes.addClass(classes) %}*/
/* {% if attributes_formatted|trim|length %}<div{{ attributes_formatted }}>{% endif %}*/
/* 	{{ children }}*/
/* {% if attributes_formatted|trim|length %}</div>{% endif %}*/

<?php

/* themes/custom/subtheme/templates/block.html.twig */
class __TwigTemplate_ea001c68828cdc9cdbc8f8fefd417a32560a942000f6c151b0cb6d51f945060f extends Twig_Template
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
        $tags = array("if" => 50);
        $filters = array("length" => 61, "trim" => 61);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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

        // line 45
        echo "
";
        // line 47
        echo "


";
        // line 50
        if (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "delta", array()) != "main")) {
            // line 51
            echo "<section";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
            echo ">
  ";
        }
        // line 53
        echo "
  ";
        // line 54
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
  ";
        // line 55
        if ((isset($context["label"]) ? $context["label"] : null)) {
            // line 56
            echo "    <h2 ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</h2>
  ";
        }
        // line 58
        echo "  ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "


  ";
        // line 61
        if (twig_length_filter($this->env, trim((isset($context["content_attributes"]) ? $context["content_attributes"] : null)))) {
            // line 62
            echo "  <div ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content_attributes"]) ? $context["content_attributes"] : null), "html", null, true));
            echo ">
    ";
        }
        // line 64
        echo "   
   ";
        // line 65
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
   
    ";
        // line 67
        if (twig_length_filter($this->env, trim((isset($context["content_attributes"]) ? $context["content_attributes"] : null)))) {
            // line 68
            echo "  </div>
  ";
        }
        // line 70
        echo "
  ";
        // line 71
        if (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "delta", array()) != "main")) {
            // line 72
            echo "</section>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/subtheme/templates/block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 72,  108 => 71,  105 => 70,  101 => 68,  99 => 67,  94 => 65,  91 => 64,  85 => 62,  83 => 61,  76 => 58,  68 => 56,  66 => 55,  62 => 54,  59 => 53,  53 => 51,  51 => 50,  46 => 47,  43 => 45,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a block.*/
/*  **/
/*  * Available variables:*/
/*  * - block.subject: Block title.*/
/*  * - content: Block content.*/
/*  * - block.module: Module that generated the block.*/
/*  * - block.delta: An ID for the block, unique within each module.*/
/*  * - block.region: The block region embedding the current block.*/
/*  * - classes: String of classes that can be used to style contextually through*/
/*  *   CSS. It can be manipulated through the variable classes_array from*/
/*  *   preprocess functions. The default values can be one or more of the following:*/
/*  *   - block: The current template type, i.e., "theming hook".*/
/*  *   - block-[module]: The module generating the block. For example, the user module*/
/*  *     is responsible for handling the default user navigation block. In that case*/
/*  *     the class would be "block-user".*/
/*  * - title_prefix (array): An array containing additional output populated by*/
/*  *   modules, intended to be displayed in front of the main title tag that*/
/*  *   appears in the template.*/
/*  * - title_suffix (array): An array containing additional output populated by*/
/*  *   modules, intended to be displayed after the main title tag that appears in*/
/*  *   the template.*/
/*  **/
/*  * Helper variables:*/
/*  * - classes_array: Array of html class attribute values. It is flattened*/
/*  *   into a string within the variable classes.*/
/*  * - block_zebra: Outputs 'odd' and 'even' dependent on each block region.*/
/*  * - zebra: Same output as block_zebra but independent of any block region.*/
/*  * - block_id: Counter dependent on each block region.*/
/*  * - id: Same output as block_id but independent of any block region.*/
/*  * - is_front: Flags true when presented in the front page.*/
/*  * - logged_in: Flags true when the current user is a logged-in member.*/
/*  * - is_admin: Flags true when the current user is an administrator.*/
/*  * - block_html_id: A valid HTML ID and guaranteed unique.*/
/*  * - content_attributes: Raw HTML attributes for block content.*/
/*  * - title_attributes: Raw HTML attributes for the block title tag.*/
/*  **/
/*  * @see template_preprocess()*/
/*  * @see template_preprocess_block()*/
/*  * @see template_process()*/
/*  *//* */
/* #}*/
/* */
/* {# {% if content.field_class %}{{ content.field_class["#items"][0].value }}{% endif %} #}*/
/* */
/* */
/* */
/* {% if block.delta != 'main' %}*/
/* <section{{ attributes }}>*/
/*   {% endif %}*/
/* */
/*   {{ title_prefix }}*/
/*   {% if label %}*/
/*     <h2 {{ title_attributes }}>{{ label }}</h2>*/
/*   {% endif %}*/
/*   {{ title_suffix }}*/
/* */
/* */
/*   {% if content_attributes|trim|length %}*/
/*   <div {{ content_attributes }}>*/
/*     {% endif %}*/
/*    */
/*    {{ content }}*/
/*    */
/*     {% if content_attributes|trim|length %}*/
/*   </div>*/
/*   {% endif %}*/
/* */
/*   {% if block.delta != 'main' %}*/
/* </section>*/
/* {% endif %}*/
/* */

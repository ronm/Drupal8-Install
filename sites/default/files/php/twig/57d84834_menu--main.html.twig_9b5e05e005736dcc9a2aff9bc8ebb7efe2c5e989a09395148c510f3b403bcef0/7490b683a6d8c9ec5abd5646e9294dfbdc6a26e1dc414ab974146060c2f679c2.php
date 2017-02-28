<?php

/* themes/custom/subtheme/templates/menu--main.html.twig */
class __TwigTemplate_77124f45349acf27a256dec5a59fe194a81df8af7c4d3e7d0136ebaa9eab4458 extends Twig_Template
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
        $tags = array("import" => 16, "macro" => 25, "if" => 27, "for" => 29, "set" => 30);
        $filters = array();
        $functions = array("link" => 33);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('import', 'macro', 'if', 'for', 'set'),
                array(),
                array('link')
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

        // line 16
        $context["menus"] = $this;
        // line 17
        echo "
";
        // line 22
        echo "
";
        // line 23
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links((isset($context["items"]) ? $context["items"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), 0, 0)));
        echo "

";
    }

    // line 25
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__top_bar__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "top_bar" => $__top_bar__,
            "varargs" => func_num_args() > 4 ? array_slice(func_get_args(), 4) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 26
            echo "\t";
            $context["menus"] = $this;
            // line 27
            echo "\t";
            if ((isset($context["items"]) ? $context["items"] : null)) {
                // line 28
                echo "\t\t<ul";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) ? ($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "menu"), "method")) : (" class=\"menu\"")), "html", null, true));
                echo ">
\t\t";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 30
                    echo "        \t";
                    $context["item_classes"] = array(0 => (( !twig_test_empty($this->getAttribute($context["item"], "below", array()))) ? ("has-flyout") : ("")), 1 => (($this->getAttribute($context["item"], "in_active_trail", array())) ? ("active-trail") : ("")));
                    // line 31
                    echo "\t\t\t";
                    $context["child_class"] = "flyout";
                    echo "        
\t\t\t<li";
                    // line 32
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => (isset($context["item_classes"]) ? $context["item_classes"] : null)), "method"), "html", null, true));
                    echo ">
\t\t\t";
                    // line 33
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array())), "html", null, true));
                    echo "
\t\t\t";
                    // line 34
                    if ($this->getAttribute($context["item"], "below", array())) {
                        // line 35
                        echo "\t\t\t\t<a href=\"#\" class=\"flyout-toggle\"><span></span></a>
\t\t\t\t<ul class=\"";
                        // line 36
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["child_class"]) ? $context["child_class"] : null), "html", null, true));
                        echo "\">
\t\t\t\t\t";
                        // line 37
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), (isset($context["attributes"]) ? $context["attributes"] : null), ((isset($context["menu_level"]) ? $context["menu_level"] : null) + 1), (isset($context["top_bar"]) ? $context["top_bar"] : null))));
                        echo "
\t\t\t\t</ul>
\t\t\t";
                    }
                    // line 40
                    echo "\t\t\t</li>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "\t\t</ul>
\t";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/custom/subtheme/templates/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 42,  119 => 40,  113 => 37,  109 => 36,  106 => 35,  104 => 34,  100 => 33,  96 => 32,  91 => 31,  88 => 30,  84 => 29,  79 => 28,  76 => 27,  73 => 26,  58 => 25,  51 => 23,  48 => 22,  45 => 17,  43 => 16,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display a menu.*/
/*  **/
/*  * Available variables:*/
/*  * - menu_name: The machine name of the menu.*/
/*  * - items: A nested list of menu items. Each menu item contains:*/
/*  *   - attributes: HTML attributes for the menu item.*/
/*  *   - below: The menu item child items.*/
/*  *   - title: The menu link title.*/
/*  *   - url: The menu link url, instance of \Drupal\Core\Url*/
/*  *   - localized_options: Menu link localized options.*/
/*  *//* */
/* #}*/
/* {% import _self as menus %}*/
/* */
/* {#*/
/*   We call a macro which calls itself to render the full tree.*/
/*   @see http://twig.sensiolabs.org/doc/tags/macro.html*/
/* #}*/
/* */
/* {{ menus.menu_links(items, attributes, 0, 0) }}*/
/* */
/* {% macro menu_links(items, attributes, menu_level, top_bar) %}*/
/* 	{% import _self as menus %}*/
/* 	{% if items %}*/
/* 		<ul{{ menu_level == 0 ? attributes.addClass('menu') : ' class="menu"' }}>*/
/* 		{% for item in items %}*/
/*         	{% set item_classes = [ item.below is not empty ? 'has-flyout', item.in_active_trail ? 'active-trail' ] %}*/
/* 			{% set child_class = 'flyout' %}        */
/* 			<li{{ item.attributes.addClass(item_classes) }}>*/
/* 			{{ link(item.title, item.url) }}*/
/* 			{% if item.below %}*/
/* 				<a href="#" class="flyout-toggle"><span></span></a>*/
/* 				<ul class="{{ child_class }}">*/
/* 					{{ menus.menu_links(item.below, attributes, menu_level + 1, top_bar) }}*/
/* 				</ul>*/
/* 			{% endif %}*/
/* 			</li>*/
/* 		{% endfor %}*/
/* 		</ul>*/
/* 	{% endif %}*/
/* {% endmacro %}*/

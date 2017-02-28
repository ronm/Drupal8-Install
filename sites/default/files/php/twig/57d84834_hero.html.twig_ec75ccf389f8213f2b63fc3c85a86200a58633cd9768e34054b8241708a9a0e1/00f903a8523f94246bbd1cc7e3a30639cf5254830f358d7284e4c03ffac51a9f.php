<?php

/* profiles/starter/modules/contrib/helpers/helpers_hero/templates/hero.html.twig */
class __TwigTemplate_31330d5022c0f7d8a1ad3cb895d37525d9b3b14beac532732067fc42633e832f extends Twig_Template
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
        $tags = array("if" => 1, "for" => 3);
        $filters = array("raw" => 8);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for'),
                array('raw'),
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

        // line 1
        if ((isset($context["slides"]) ? $context["slides"] : null)) {
            // line 2
            echo "<div class=\"hero\">
";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["slides"]) ? $context["slides"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
                // line 4
                echo "\t<div class=\"hero-slide row align-middle align-center text-center\" style=\"background-image:url('";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["slide"], "image", array()), "html", null, true));
                echo "');\">
\t\t";
                // line 5
                if (($this->getAttribute($context["slide"], "title", array()) || $this->getAttribute($context["slide"], "body", array()))) {
                    // line 6
                    echo "\t\t<div class=\"column small-12\">
\t\t\t";
                    // line 7
                    if ($this->getAttribute($context["slide"], "title", array())) {
                        echo "<h1>";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["slide"], "title", array()), "html", null, true));
                        echo "</h1>";
                    }
                    // line 8
                    echo "\t\t\t";
                    if ($this->getAttribute($context["slide"], "body", array())) {
                        echo "<div class=\"body\">";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($context["slide"], "body", array())));
                        echo "</div>";
                    }
                    // line 9
                    echo "\t\t</div>
\t\t";
                }
                // line 11
                echo "\t</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "\t<a href=\"#\" class=\"arrow\" data-scroll></a>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "profiles/starter/modules/contrib/helpers/helpers_hero/templates/hero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 13,  79 => 11,  75 => 9,  68 => 8,  62 => 7,  59 => 6,  57 => 5,  52 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }
}
/* {% if slides %}*/
/* <div class="hero">*/
/* {% for slide in slides %}*/
/* 	<div class="hero-slide row align-middle align-center text-center" style="background-image:url('{{ slide.image }}');">*/
/* 		{% if slide.title or slide.body %}*/
/* 		<div class="column small-12">*/
/* 			{% if slide.title %}<h1>{{ slide.title }}</h1>{% endif %}*/
/* 			{% if slide.body %}<div class="body">{{ slide.body|raw }}</div>{% endif %}*/
/* 		</div>*/
/* 		{% endif %}*/
/* 	</div>*/
/* {% endfor %}*/
/* 	<a href="#" class="arrow" data-scroll></a>*/
/* </div>*/
/* {% endif %}*/

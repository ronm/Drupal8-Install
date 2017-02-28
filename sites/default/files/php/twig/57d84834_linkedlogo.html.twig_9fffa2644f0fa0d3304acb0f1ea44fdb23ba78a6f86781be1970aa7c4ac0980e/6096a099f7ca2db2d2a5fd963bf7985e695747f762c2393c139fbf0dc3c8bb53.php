<?php

/* profiles/starter/modules/contrib/helpers/helpers_linkedlogo/templates/linkedlogo.html.twig */
class __TwigTemplate_41a6aea02563fd9297bc4b5e019225cb0cd4a1a67e66135c7080aaf20cba4f3d extends Twig_Template
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
        $tags = array("if" => 1);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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

        // line 1
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 2
            echo "<a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "link", array()), "html", null, true));
            echo "\" class=\"logo\">
\t<img src=\"";
            // line 3
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "logo", array()), "url", array()), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "sitename", array()), "html", null, true));
            echo "\" />
</a>
";
        }
    }

    public function getTemplateName()
    {
        return "profiles/starter/modules/contrib/helpers/helpers_linkedlogo/templates/linkedlogo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 3,  45 => 2,  43 => 1,);
    }
}
/* {% if content %}*/
/* <a href="{{ content.link }}" class="logo">*/
/* 	<img src="{{ content.logo.url }}" alt="{{ content.sitename }}" />*/
/* </a>*/
/* {% endif %}*/

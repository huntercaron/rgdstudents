<?php

/* modular/imageText.html.twig */
class __TwigTemplate_31190b2ad338fa3710fcdd42be3b1d6d7db77b5c3a3ec57cff1f43231978f3fc extends Twig_Template
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
        // line 1
        $context["imageText_image"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())), "grayscale", array(), "method"), "contrast", array(0 => 20), "method"), "brightness", array(0 =>  -125), "method"), "colorize", array(0 =>  -35, 1 => 81, 2 => 122), "method");
        // line 2
        if ((isset($context["imageText_image"]) ? $context["imageText_image"] : null)) {
            // line 3
            echo "\t<div class=\"modular-row showcase flush-top\" style=\"background-image: url(";
            echo $this->getAttribute((isset($context["imageText_image"]) ? $context["imageText_image"] : null), "url", array());
            echo ");\">
";
        } else {
            // line 5
            echo "<div class=\"modular-row showcase\">
";
        }
        // line 7
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "

    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "buttons", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 10
            echo "        <a class=\"button";
            if ($this->getAttribute($context["button"], "primary", array())) {
                echo " primary";
            }
            echo "\" href=\"";
            echo $this->getAttribute($context["button"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["button"], "text", array());
            echo "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/imageText.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 12,  43 => 10,  39 => 9,  33 => 7,  29 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set imageText_image = page.media.images|first.grayscale().contrast(20).brightness(-125).colorize(-35,81,122) %}*/
/* {% if imageText_image %}*/
/* 	<div class="modular-row showcase flush-top" style="background-image: url({{ imageText_image.url }});">*/
/* {% else %}*/
/* <div class="modular-row showcase">*/
/* {% endif %}*/
/*     {{ content }}*/
/* */
/*     {% for button in page.header.buttons %}*/
/*         <a class="button{% if button.primary %} primary{% endif %}" href="{{ button.url }}">{{ button.text }}</a>*/
/*     {% endfor %}*/
/* */
/* </div>*/
/* */

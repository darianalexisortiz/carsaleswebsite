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

/* modules/contrib/better_exposed_filters/templates/bef-links.html.twig */
class __TwigTemplate_b8a1f844baca670de9bb8edaee8a8611 extends \Twig\Template
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
        // line 2
        $context["classes"] = [0 => "bef-links", 1 => ((        // line 4
($context["is_nested"] ?? null)) ? ("bef-nested") : (""))];
        // line 7
        $context["is_nested"] = true;
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hiddens"] ?? null));
        foreach ($context['_seq'] as $context["name"] => $context["value"]) {
            // line 9
            echo "<input type=\"hidden\" name=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["name"], 9, $this->source), "html", null, true);
            echo "\" value=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 9, $this->source), "html", null, true);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 11), 11, $this->source), "html", null, true);
        echo ">
  ";
        // line 12
        $context["current_nesting_level"] = 0;
        // line 13
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["children"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 14
            echo "    ";
            $context["item"] = twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), $context["child"], [], "any", false, false, true, 14);
            // line 15
            echo "    ";
            if (twig_in_filter($context["child"], ($context["selected"] ?? null))) {
                // line 16
                echo "      ";
                $context["new_nesting_level"] = twig_get_attribute($this->env, $this->source, ($context["depth"] ?? null), $context["child"], [], "any", false, false, true, 16);
                // line 17
                echo "      ";
                $context["item"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["item"] ?? null), 17, $this->source), ["#attributes" => ["class" => "bef-link-active"]]);
                // line 18
                echo "    ";
            }
            // line 19
            echo "    ";
            $context["new_nesting_level"] = twig_get_attribute($this->env, $this->source, ($context["depth"] ?? null), $context["child"], [], "any", false, false, true, 19);
            // line 20
            echo "    ";
            $this->loadTemplate("@better_exposed_filters/bef-nested-elements.html.twig", "modules/contrib/better_exposed_filters/templates/bef-links.html.twig", 20)->display($context);
            // line 21
            echo "    ";
            $context["current_nesting_level"] = ($context["new_nesting_level"] ?? null);
            // line 22
            echo "  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/better_exposed_filters/templates/bef-links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 23,  108 => 22,  105 => 21,  102 => 20,  99 => 19,  96 => 18,  93 => 17,  90 => 16,  87 => 15,  84 => 14,  66 => 13,  64 => 12,  59 => 11,  48 => 9,  44 => 8,  42 => 7,  40 => 4,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/better_exposed_filters/templates/bef-links.html.twig", "/home4/isosite/public_html/mazzuchellirastorza_html/mazzuchellirastorza/modules/contrib/better_exposed_filters/templates/bef-links.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "for" => 8, "if" => 15, "include" => 20);
        static $filters = array("escape" => 9, "merge" => 17);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if', 'include'],
                ['escape', 'merge'],
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

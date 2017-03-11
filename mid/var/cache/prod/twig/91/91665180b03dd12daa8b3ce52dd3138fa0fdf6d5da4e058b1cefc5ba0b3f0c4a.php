<?php

/* index.html.twig */
class __TwigTemplate_4b6d8cde1fd374c37d8d4b11e89578d41858637d9553740d9ee65b4e042e7074 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Index</title>
    </head>
    <body>
    \t<div class=\"form\">
        ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
\t\t";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
\t\t";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
\t\t</div>

\t\t<table border=\"1\">
\t\t<tr>
\t\t    <th>Product name</th>
\t\t    <th>Price</th>
\t\t    <th>Type</th>
\t\t</tr>
\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 20
            echo "    \t\t<tr>
    \t\t<th>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "names", array()), "html", null, true);
            echo "</th><th>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "prices", array()), "html", null, true);
            echo "</th><th>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getTypeName", array(), "method"), "html", null, true);
            echo "</th>
    \t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t\t</ul>
\t\t</table>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 24,  55 => 21,  52 => 20,  48 => 19,  36 => 10,  32 => 9,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html.twig", "E:\\OpenServer\\domains\\Dziat.local\\mid\\app\\Resources\\views\\index.html.twig");
    }
}

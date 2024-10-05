<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* standard.html.twig */
class __TwigTemplate_61284944ec08cb46f41bb1103592a937a7b9e9100510b2d1fd56f11b46147486 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "
";
        // line 2
        $this->loadTemplate("partizioni/header.html.twig", "standard.html.twig", 2)->display($context);
        // line 3
        echo "  <div class=\"wrapper\">
    <main class=\"content\">
        ";
        // line 5
        $this->displayBlock('content', $context, $blocks);
        // line 8
        echo "    </main>
    ";
        // line 9
        $this->loadTemplate("partizioni/footer.html.twig", "standard.html.twig", 9)->display($context);
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        // line 6
        echo "            ";
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "standard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 6,  49 => 5,  45 => 9,  42 => 8,  40 => 5,  36 => 3,  34 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
{% include 'partizioni/header.html.twig' %}
  <div class=\"wrapper\">
    <main class=\"content\">
        {% block content %}
            {{ page.content|raw }}
        {% endblock %}
    </main>
    {% include 'partizioni/footer.html.twig' %}
", "standard.html.twig", "C:\\xampp\\htdocs\\grav-admin\\user\\themes\\gasl\\templates\\standard.html.twig");
    }
}

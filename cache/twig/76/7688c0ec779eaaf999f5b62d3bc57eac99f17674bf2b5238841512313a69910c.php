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

/* portfolio.html.twig */
class __TwigTemplate_d3167aff7f76c7112a5f498ab7047563dae7e33c75f863ebdda58fea15310c30 extends \Twig\Template
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
        $this->loadTemplate("partizioni/header.html.twig", "portfolio.html.twig", 1)->display($context);
        // line 2
        echo "  <div class=\"wrapper\">
    <main class=\"content\">
        ";
        // line 4
        $this->displayBlock('content', $context, $blocks);
        // line 9
        echo "    </main>
    ";
        // line 10
        $this->loadTemplate("partizioni/footer.html.twig", "portfolio.html.twig", 10)->display($context);
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        // line 5
        echo "        ";
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
        <section class=\"portfolio\" id=\"portfolio\">
        </section>
        ";
    }

    public function getTemplateName()
    {
        return "portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  46 => 4,  42 => 10,  39 => 9,  37 => 4,  33 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% include 'partizioni/header.html.twig' %}
  <div class=\"wrapper\">
    <main class=\"content\">
        {% block content %}
        {{ page.content|raw }}
        <section class=\"portfolio\" id=\"portfolio\">
        </section>
        {% endblock %}
    </main>
    {% include 'partizioni/footer.html.twig' %}
", "portfolio.html.twig", "C:\\xampp\\htdocs\\grav-admin\\user\\themes\\gasl\\templates\\portfolio.html.twig");
    }
}

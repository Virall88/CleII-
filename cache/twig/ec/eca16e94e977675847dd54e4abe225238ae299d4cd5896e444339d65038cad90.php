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

/* partizioni/footer.html.twig */
class __TwigTemplate_1bfecbf27bbe8e847670a8c8261abbeac7a6626b32b58a61e92e13de00ab3266 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'footer' => [$this, 'block_footer'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $this->displayBlock('footer', $context, $blocks);
        // line 6
        $this->displayBlock('bottom', $context, $blocks);
        // line 9
        echo "  </div>
</body>
</html>";
    }

    // line 1
    public function block_footer($context, array $blocks = [])
    {
        // line 2
        echo "    <footer>
        <p>&copy; 2024 gaslunich</p>
    </footer>
";
    }

    // line 6
    public function block_bottom($context, array $blocks = [])
    {
        // line 7
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "partizioni/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  55 => 7,  52 => 6,  45 => 2,  42 => 1,  36 => 9,  34 => 6,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% block footer %}
    <footer>
        <p>&copy; 2024 gaslunich</p>
    </footer>
{% endblock %}
{% block bottom %}
    {{ assets.js('bottom')|raw }}
{% endblock %}
  </div>
</body>
</html>", "partizioni/footer.html.twig", "C:\\xampp\\htdocs\\grav-admin\\user\\themes\\gasl\\templates\\partizioni\\footer.html.twig");
    }
}

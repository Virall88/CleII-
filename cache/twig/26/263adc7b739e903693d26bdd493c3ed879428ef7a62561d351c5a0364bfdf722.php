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

/* partizioni/header.html.twig */
class __TwigTemplate_29ff0e2aadff46bd913671c3aa14e7955afda89e2628fdc5fd15c9f9312f6700 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
            'header' => [$this, 'block_header'],
        ];
        $this->deferred = $this->env->getExtension('Twig\DeferredExtension\DeferredExtension');
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["compress"] = (($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "production-mode")) ? (".min.css") : (".css"));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"it\">
<head>
    ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 10
        echo "
    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "
    ";
        // line 18
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "
    ";
        // line 22
        $this->displayBlock('assets', $context, $blocks);
        // line 26
        echo "</head>
<body>
    ";
        // line 28
        $this->displayBlock('header', $context, $blocks);
        $this->deferred->resolve($this, $context, $blocks);
    }

    public function block_head($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'head');
    }

    // line 5
    public function block_head_deferred($context, array $blocks = [])
    {
        // line 6
        echo "
    <meta charset=\"UTF-8\">
    <title>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []));
        echo "</title>
    ";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 12
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compilato/spectre" . ($context["compress"] ?? null))], "method");
        // line 13
        echo "        ";
        if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "spectre.exp")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compilato/spectre-exp" . ($context["compress"] ?? null))], "method");
        }
        // line 14
        echo "        ";
        if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "spectre.icons")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compilato/spectre-icons" . ($context["compress"] ?? null))], "method");
        }
        // line 15
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css"], "method");
        // line 16
        echo "    ";
    }

    // line 18
    public function block_javascripts($context, array $blocks = [])
    {
        // line 19
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/mycode.js", 1 => ["group" => "bottom"]], "method");
        // line 20
        echo "    ";
    }

    public function block_assets($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'assets');
    }

    // line 22
    public function block_assets_deferred($context, array $blocks = [])
    {
        // line 23
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
        ";
        // line 24
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
    ";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 28
    public function block_header($context, array $blocks = [])
    {
        // line 29
        echo "    <header>
        <!--<h1 style=\"color:";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "color", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "info", []), "html", null, true);
        echo "</h1>-->
        <!-- Icona Burger menu -->
        <div class=\"navbar\">
            <div class=\"burger-menu\" id=\"burger-menu\">
                <span></span>
                <span></span>
                <span></span>            
            </div>
        </div> 
        <!-- Menu di navigazione -->
        <nav class=\"nav-menu\" id=\"nav-menu\">
            <ul>
                ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pages"] ?? null), "children", []));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 43
            echo "                    ";
            if (($this->getAttribute($this->getAttribute($context["page"], "children", []), "count", []) > 0)) {
                // line 44
                echo "                        <li class=\"dropdown\" id=\"dropdown\">
                            <a href=\"#\" class=\"dropbtn\">";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "menu", []), "html", null, true);
                echo "</a>
                            <ul class=\"dropdown-content\" id=\"dropdown-content\">
                                ";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["page"], "children", []));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 48
                    echo "                                    <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "url", []), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "menu", []), "html", null, true);
                    echo "</a></li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "                            </ul>
                        </li>
                    ";
            } else {
                // line 53
                echo "                        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "url", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "menu", []), "html", null, true);
                echo "</a></li>
                    ";
            }
            // line 55
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "            </ul>
        </nav>
        <div class=\"spaziatore\"></div>
    </header>
    ";
    }

    public function getTemplateName()
    {
        return "partizioni/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 56,  207 => 55,  199 => 53,  194 => 50,  183 => 48,  179 => 47,  174 => 45,  171 => 44,  168 => 43,  164 => 42,  147 => 30,  144 => 29,  141 => 28,  134 => 24,  129 => 23,  126 => 22,  117 => 20,  114 => 19,  111 => 18,  107 => 16,  104 => 15,  99 => 14,  94 => 13,  91 => 12,  88 => 11,  81 => 8,  77 => 6,  74 => 5,  64 => 28,  60 => 26,  58 => 22,  55 => 21,  53 => 18,  50 => 17,  48 => 11,  45 => 10,  43 => 5,  38 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set compress = theme_var('production-mode') ? '.min.css' : '.css' %}
<!DOCTYPE html>
<html lang=\"it\">
<head>
    {% block head deferred %}

    <meta charset=\"UTF-8\">
    <title>{{ page.title|e }}</title>
    {% endblock head %}

    {% block stylesheets %}
        {% do assets.addCss('theme://css-compilato/spectre'~compress) %}
        {% if theme_var('spectre.exp') %}{% do assets.addCss('theme://css-compilato/spectre-exp'~compress)  %}{% endif %}
        {% if theme_var('spectre.icons') %}{%  do assets.addCss('theme://css-compilato/spectre-icons'~compress) %}{% endif %}
        {% do assets.addCss('theme://css/custom.css') %}
    {% endblock %}

    {% block javascripts %}
        {% do assets.addJs('theme://js/mycode.js',{group:'bottom'}) %}
    {% endblock %}

    {% block assets deferred %}
        {{ assets.css()|raw }}
        {{ assets.js()|raw }}
    {% endblock %}
</head>
<body>
    {% block header %}
    <header>
        <!--<h1 style=\"color:{{ theme.color }}\">{{ theme.info }}</h1>-->
        <!-- Icona Burger menu -->
        <div class=\"navbar\">
            <div class=\"burger-menu\" id=\"burger-menu\">
                <span></span>
                <span></span>
                <span></span>            
            </div>
        </div> 
        <!-- Menu di navigazione -->
        <nav class=\"nav-menu\" id=\"nav-menu\">
            <ul>
                {% for page in pages.children %}
                    {% if page.children.count > 0 %}
                        <li class=\"dropdown\" id=\"dropdown\">
                            <a href=\"#\" class=\"dropbtn\">{{ page.menu }}</a>
                            <ul class=\"dropdown-content\" id=\"dropdown-content\">
                                {% for child in page.children %}
                                    <li><a href=\"{{ child.url }}\">{{ child.menu }}</a></li>
                                {% endfor %}
                            </ul>
                        </li>
                    {% else %}
                        <li><a href=\"{{ page.url }}\">{{ page.menu }}</a></li>
                    {% endif %}
                {% endfor %}
            </ul>
        </nav>
        <div class=\"spaziatore\"></div>
    </header>
    {% endblock %}
", "partizioni/header.html.twig", "C:\\xampp\\htdocs\\grav-admin\\user\\themes\\gasl\\templates\\partizioni\\header.html.twig");
    }
    private $deferred;
}

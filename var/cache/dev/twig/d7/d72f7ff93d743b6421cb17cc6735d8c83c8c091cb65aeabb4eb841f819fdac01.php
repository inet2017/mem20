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

/* standar/pagina2.html.twig */
class __TwigTemplate_e2770ca6502944aefe0f562b4f21d5dc000da642bcde56120ef6e8fba870b5af extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "standar/pagina2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "standar/pagina2.html.twig"));

        // line 1
        echo "Hola Parámetro ";
        echo twig_escape_filter($this->env, (isset($context["param1"]) || array_key_exists("param1", $context) ? $context["param1"] : (function () { throw new RuntimeError('Variable "param1" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "
<br><br>

";
        // line 5
        echo "
";
        // line 6
        $context["variable"] = "Esto es una variable. ";
        // line 7
        echo "
";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["variable"]) || array_key_exists("variable", $context) ? $context["variable"] : (function () { throw new RuntimeError('Variable "variable" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "
<br><br>
";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency("1000000", "EUR"), "html", null, true);
        echo "
<a href=\" ";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\"> Página  principal</a>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "standar/pagina2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 11,  63 => 10,  58 => 8,  55 => 7,  53 => 6,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Hola Parámetro {{param1}}
<br><br>

{# este es un comentario.s#}

{% set variable= 'Esto es una variable. ' %}

{{ variable }}
<br><br>
{{ '1000000'|format_currency('EUR') }}
<a href=\" {{ path('index')}}\"> Página  principal</a>
", "standar/pagina2.html.twig", "C:\\xampp\\htdocs\\mem20\\templates\\standar\\pagina2.html.twig");
    }
}

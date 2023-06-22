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

/* order/recap.html.twig */
class __TwigTemplate_e9d6a60151b66085eb4a7cb017076b9f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/recap.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/recap.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order/recap.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"flex flex-col items-center border-b bg-white py-4 sm:flex-row sm:px-10 lg:px-20 xl:px-32\">
    <a href=\"#\" class=\"text-2xl font-bold text-gray-800\">Did you find your solemate ?</a>
    <div class=\"mt-4 py-2 text-xs sm:mt-0 sm:ml-auto sm:text-base\">
    <div class=\"relative\">
    <ul class=\"relative flex w-full items-center justify-between space-x-2 sm:space-x-4\">
    <li class=\"flex items-center space-x-3 text-left sm:space-x-4\">
    <a class=\"flex h-6 w-6 items-center justify-center rounded-full bg-emerald-200 text-xs font-semibold text-emerald-700\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
        echo "\"
    ><svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M5 13l4 4L19 7\" /></svg
    ></a>
    <span class=\"font-semibold text-gray-900\">Boutique</span>
    </li>
    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9 5l7 7-7 7\" />
    </svg>
    <li class=\"flex items-center space-x-3 text-left sm:space-x-4\">
    <a class=\"flex h-6 w-6 items-center justify-center rounded-full bg-emerald-200 text-xs font-semibold text-emerald-700\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
        echo "\"
    ><svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M5 13l4 4L19 7\" /></svg
    ></a>
    <span class=\"font-semibold text-gray-900\">Recapitulatif</span>
    </li>
    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9 5l7 7-7 7\" />
    </svg>
          <li class=\"flex items-center space-x-3 text-left sm:space-x-4\">
            <a class=\"flex h-6 w-6 items-center justify-center rounded-full bg-gray-600 text-xs font-semibold text-white ring ring-gray-600 ring-offset-2\" href=\"#\">3</a>
            <span class=\"font-semibold text-gray-900\">Paiement</span>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <h1 class=\"text-center text-3xl font-bold mt-10\">Verifier la commande</h1>
  <h3 class=\"fs-base fw-normal text-body text-uppercase pb-1 pb-sm-1\">1. <span class=\"fw-medium\">Les détails d'expédition</span></h3>

  <div class=\"form-check\" mb-4\">
    <input class=\"form-check-input\" type=\"radio\" name=\"shipping\" checked>
    <label class=\"form-check-label\" d-flex justify-content-between\"><span>
        <span class=\"d-block fs-base text-dark fw-medium mb-1\">";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transporter"]) || array_key_exists("transporter", $context) ? $context["transporter"] : (function () { throw new RuntimeError('Variable "transporter" does not exist.', 44, $this->source); })()), "title", [], "any", false, false, false, 44), "html", null, true);
        echo "</span>
      <span class=\"d-block fs-sm text-muted\">";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transporter"]) || array_key_exists("transporter", $context) ? $context["transporter"] : (function () { throw new RuntimeError('Variable "transporter" does not exist.', 45, $this->source); })()), "content", [], "any", false, false, false, 45), "html", null, true);
        echo "</span></span>
        <span class=\"d-block fs-base text-muted\">";
        // line 46
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transporter"]) || array_key_exists("transporter", $context) ? $context["transporter"] : (function () { throw new RuntimeError('Variable "transporter" does not exist.', 46, $this->source); })()), "price", [], "any", false, false, false, 46), 2, ",", "."), "html", null, true);
        echo " €</span>
    </label>
    </div>
    <h3 class=\"fs-base fw-normal text-body text-uppercase pb-1 pb-sm-1\">2. <span class=\"fw-medium\">Adresse de livraison</span></h3>
    <div class=\"form-check\" mb-4\">
        <input class=\"form-check-input\" type=\"radio\" checked>
        <label class=\"form-check-label d-flex justify-content-between\">
            <span class=\"d-block fs-base text-dark fw-medium mb-1\">";
        // line 53
        echo (isset($context["deliveryinfo"]) || array_key_exists("deliveryinfo", $context) ? $context["deliveryinfo"] : (function () { throw new RuntimeError('Variable "deliveryinfo" does not exist.', 53, $this->source); })());
        echo "</span>
        </label>
    </div>
</div>

<div class=\"col-lg-5 offset-lg-1 pt-1\">
    <h2 class=\"pb-2 pt-1 mb-2\">Récapitulatif de la commande <span
    class=\"fs-base fw-normal text-muted\">(";
        // line 60
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["recapBasket"]) || array_key_exists("recapBasket", $context) ? $context["recapBasket"] : (function () { throw new RuntimeError('Variable "recapBasket" does not exist.', 60, $this->source); })())), "html", null, true);
        echo " produits)</span></h2>
    ";
        // line 61
        $context["total"] = null;
        // line 62
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recapBasket"]) || array_key_exists("recapBasket", $context) ? $context["recapBasket"] : (function () { throw new RuntimeError('Variable "recapBasket" does not exist.', 62, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 63
            echo "    <div class=\"d-sm-flex align-items-center border-top py-4\">
        <a class=\"d-inline-block flex-shrink-0 bg-secondary rounded-1 p-sm-2 p-xl-3 mb-2 mb-sm-0\"
        href=\"product-single.html\">
        <img src=\"\" width=\"110\" alt=\"Product\"></a>
        <div class=\"w-100 pt-1 ps-sm-4\">
            <div class=\"d-flex\">
                <div class=\"me-3\">
                    <h3 class=\"h5 mb-2\"><a href=\"product-single.html\" class=\"fs-base\">";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 70), "name", [], "any", false, false, false, 70), "html", null, true);
            echo "</a></h3>
                </div>
                <div class=\"pt-2\">
                    <h6 class=\"mb-2 text-muted\">Prix : ";
            // line 73
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 73), "price", [], "any", false, false, false, 73) / 100), 2, ",", "."), "html", null, true);
            echo " €</h6>
                </div>
            </div>
        </div>
       
    </div>
    ";
            // line 79
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 79, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 79), "price", [], "any", false, false, false, 79) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 79)));
            // line 80
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "        
        <ul class=\"list-unstyled py-3 mb-0\">
            <li class=\"d-flex justify-content-between mb-2\">Sous-total:<span class=\"fw-medium\">";
        // line 83
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 83, $this->source); })()) / 100), 2, ",", "."), "html", null, true);
        echo " €</span></li>
            <li class=\"d-flex justify-content-between mb-2\">Frais de livraison:<span class=\"fw-medium\">";
        // line 84
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["transporter"]) || array_key_exists("transporter", $context) ? $context["transporter"] : (function () { throw new RuntimeError('Variable "transporter" does not exist.', 84, $this->source); })()), "price", [], "any", false, false, false, 84) / 100), 2, ",", "."), "html", null, true);
        echo " €</span></li>
        </ul>
        <div class=\"d-flex align-items-center justify-content-between border-top fs-xl pt-4\">Total:<span
            class=\"fs-3 fw-semibold text-dark ms-2\">";
        // line 87
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 87, $this->source); })()) / 100) + (twig_get_attribute($this->env, $this->source, (isset($context["transporter"]) || array_key_exists("transporter", $context) ? $context["transporter"] : (function () { throw new RuntimeError('Variable "transporter" does not exist.', 87, $this->source); })()), "price", [], "any", false, false, false, 87) / 100)), 2, ",", "."), "html", null, true);
        echo " €</span>
        </div>
            <div class=\"mt-4 text-center\">

                ";
        // line 91
        if (((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 91, $this->source); })()) == "stripe")) {
            // line 92
            echo "
                <form method=\"POST\" action=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payment_stripe", ["reference" => (isset($context["reference"]) || array_key_exists("reference", $context) ? $context["reference"] : (function () { throw new RuntimeError('Variable "reference" does not exist.', 93, $this->source); })())]), "html", null, true);
            echo "\">
                    <Button class=\"btn btn-secondary\" type=\"submit\" 
                    style=\"border-radius: 6px; position:relative; top:20px;\">
                        Payer par Stripe
                        | ";
            // line 97
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 97, $this->source); })()) / 100) + (twig_get_attribute($this->env, $this->source, (isset($context["transporter"]) || array_key_exists("transporter", $context) ? $context["transporter"] : (function () { throw new RuntimeError('Variable "transporter" does not exist.', 97, $this->source); })()), "price", [], "any", false, false, false, 97) / 100)), 2, ",", "."), "html", null, true);
            echo " €
                </button>
            </form>
            ";
        } else {
            // line 101
            echo "

            <form method=\"POST\" action=\"#\">
                <Button class=\"btn btn-primary\" type=\"submit\" 
                style=\"border-radius: 6px; position:relative; top:20px;\">
                    Payer par Paypal
                    | ";
            // line 107
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 107, $this->source); })()) / 100) + (twig_get_attribute($this->env, $this->source, (isset($context["transporter"]) || array_key_exists("transporter", $context) ? $context["transporter"] : (function () { throw new RuntimeError('Variable "transporter" does not exist.', 107, $this->source); })()), "price", [], "any", false, false, false, 107) / 100)), 2, ",", "."), "html", null, true);
            echo " €
            </button>
        </form>
        ";
        }
        // line 111
        echo "    </div>
</div>
</div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "order/recap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 111,  235 => 107,  227 => 101,  220 => 97,  213 => 93,  210 => 92,  208 => 91,  201 => 87,  195 => 84,  191 => 83,  187 => 81,  181 => 80,  179 => 79,  170 => 73,  164 => 70,  155 => 63,  150 => 62,  148 => 61,  144 => 60,  134 => 53,  124 => 46,  120 => 45,  116 => 44,  89 => 20,  76 => 10,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"flex flex-col items-center border-b bg-white py-4 sm:flex-row sm:px-10 lg:px-20 xl:px-32\">
    <a href=\"#\" class=\"text-2xl font-bold text-gray-800\">Did you find your solemate ?</a>
    <div class=\"mt-4 py-2 text-xs sm:mt-0 sm:ml-auto sm:text-base\">
    <div class=\"relative\">
    <ul class=\"relative flex w-full items-center justify-between space-x-2 sm:space-x-4\">
    <li class=\"flex items-center space-x-3 text-left sm:space-x-4\">
    <a class=\"flex h-6 w-6 items-center justify-center rounded-full bg-emerald-200 text-xs font-semibold text-emerald-700\" href=\"{{ path('product_index') }}\"
    ><svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M5 13l4 4L19 7\" /></svg
    ></a>
    <span class=\"font-semibold text-gray-900\">Boutique</span>
    </li>
    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9 5l7 7-7 7\" />
    </svg>
    <li class=\"flex items-center space-x-3 text-left sm:space-x-4\">
    <a class=\"flex h-6 w-6 items-center justify-center rounded-full bg-emerald-200 text-xs font-semibold text-emerald-700\" href=\"{{ path('product_index') }}\"
    ><svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M5 13l4 4L19 7\" /></svg
    ></a>
    <span class=\"font-semibold text-gray-900\">Recapitulatif</span>
    </li>
    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9 5l7 7-7 7\" />
    </svg>
          <li class=\"flex items-center space-x-3 text-left sm:space-x-4\">
            <a class=\"flex h-6 w-6 items-center justify-center rounded-full bg-gray-600 text-xs font-semibold text-white ring ring-gray-600 ring-offset-2\" href=\"#\">3</a>
            <span class=\"font-semibold text-gray-900\">Paiement</span>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <h1 class=\"text-center text-3xl font-bold mt-10\">Verifier la commande</h1>
  <h3 class=\"fs-base fw-normal text-body text-uppercase pb-1 pb-sm-1\">1. <span class=\"fw-medium\">Les détails d'expédition</span></h3>

  <div class=\"form-check\" mb-4\">
    <input class=\"form-check-input\" type=\"radio\" name=\"shipping\" checked>
    <label class=\"form-check-label\" d-flex justify-content-between\"><span>
        <span class=\"d-block fs-base text-dark fw-medium mb-1\">{{ transporter.title }}</span>
      <span class=\"d-block fs-sm text-muted\">{{ transporter.content }}</span></span>
        <span class=\"d-block fs-base text-muted\">{{ transporter.price|number_format(2, ',', '.') }} €</span>
    </label>
    </div>
    <h3 class=\"fs-base fw-normal text-body text-uppercase pb-1 pb-sm-1\">2. <span class=\"fw-medium\">Adresse de livraison</span></h3>
    <div class=\"form-check\" mb-4\">
        <input class=\"form-check-input\" type=\"radio\" checked>
        <label class=\"form-check-label d-flex justify-content-between\">
            <span class=\"d-block fs-base text-dark fw-medium mb-1\">{{ deliveryinfo | raw }}</span>
        </label>
    </div>
</div>

<div class=\"col-lg-5 offset-lg-1 pt-1\">
    <h2 class=\"pb-2 pt-1 mb-2\">Récapitulatif de la commande <span
    class=\"fs-base fw-normal text-muted\">({{ recapBasket|length }} produits)</span></h2>
    {% set total = null %}
    {% for product in recapBasket %}
    <div class=\"d-sm-flex align-items-center border-top py-4\">
        <a class=\"d-inline-block flex-shrink-0 bg-secondary rounded-1 p-sm-2 p-xl-3 mb-2 mb-sm-0\"
        href=\"product-single.html\">
        <img src=\"\" width=\"110\" alt=\"Product\"></a>
        <div class=\"w-100 pt-1 ps-sm-4\">
            <div class=\"d-flex\">
                <div class=\"me-3\">
                    <h3 class=\"h5 mb-2\"><a href=\"product-single.html\" class=\"fs-base\">{{ product.product.name }}</a></h3>
                </div>
                <div class=\"pt-2\">
                    <h6 class=\"mb-2 text-muted\">Prix : {{ (product.product.price / 100)|number_format(2, ',', '.') }} €</h6>
                </div>
            </div>
        </div>
       
    </div>
    {% set total = total + (product.product.price * product.quantity) %}
    {% endfor %}
        
        <ul class=\"list-unstyled py-3 mb-0\">
            <li class=\"d-flex justify-content-between mb-2\">Sous-total:<span class=\"fw-medium\">{{ (total / 100)|number_format(2, ',', '.') }} €</span></li>
            <li class=\"d-flex justify-content-between mb-2\">Frais de livraison:<span class=\"fw-medium\">{{ (transporter.price / 100)|number_format(2, ',', '.') }} €</span></li>
        </ul>
        <div class=\"d-flex align-items-center justify-content-between border-top fs-xl pt-4\">Total:<span
            class=\"fs-3 fw-semibold text-dark ms-2\">{{ (total / 100 + (transporter.price / 100 ))|number_format(2, ',', '.') }} €</span>
        </div>
            <div class=\"mt-4 text-center\">

                {% if method == 'stripe' %}

                <form method=\"POST\" action=\"{{ path('payment_stripe', {reference: reference })}}\">
                    <Button class=\"btn btn-secondary\" type=\"submit\" 
                    style=\"border-radius: 6px; position:relative; top:20px;\">
                        Payer par Stripe
                        | {{ (total / 100 + (transporter.price / 100 ))|number_format(2, ',', '.') }} €
                </button>
            </form>
            {% else %}


            <form method=\"POST\" action=\"#\">
                <Button class=\"btn btn-primary\" type=\"submit\" 
                style=\"border-radius: 6px; position:relative; top:20px;\">
                    Payer par Paypal
                    | {{ (total / 100 + (transporter.price / 100 ))|number_format(2, ',', '.') }} €
            </button>
        </form>
        {% endif %}
    </div>
</div>
</div>
</div>

{% endblock %}", "order/recap.html.twig", "/Users/walidbelmezouar/Documents/prog/SoleFrenzyR/templates/order/recap.html.twig");
    }
}

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

/* order/index.html.twig */
class __TwigTemplate_8746c199a8f88cd689ded13bcf4ee8c0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Checkout";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"flex flex-col items-center border-b bg-white py-4 sm:flex-row sm:px-10 lg:px-20 xl:px-32\">
    <a href=\"#\" class=\"text-2xl font-bold text-gray-800\">Did you find your solemate ?</a>
    <div class=\"mt-4 py-2 text-xs sm:mt-0 sm:ml-auto sm:text-base\">
      <div class=\"relative\">
        <ul class=\"relative flex w-full items-center justify-between space-x-2 sm:space-x-4\">
          <li class=\"flex items-center space-x-3 text-left sm:space-x-4\">
            <a class=\"flex h-6 w-6 items-center justify-center rounded-full bg-emerald-200 text-xs font-semibold text-emerald-700\" href=\"";
        // line 13
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
            <a class=\"flex h-6 w-6 items-center justify-center rounded-full bg-gray-600 text-xs font-semibold text-white ring ring-gray-600 ring-offset-2\" href=\"#\">2</a>
            <span class=\"font-semibold text-gray-900\">Récapitulatif</span>
          </li>
          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9 5l7 7-7 7\" />
          </svg>
          <li class=\"flex items-center space-x-3 text-left sm:space-x-4\">
            <a class=\"flex h-6 w-6 items-center justify-center rounded-full bg-gray-400 text-xs font-semibold text-white\" href=\"#\">3</a>
            <span class=\"font-semibold text-gray-500\">Paiement</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class=\"grid sm:px-10 lg:grid-cols-2 lg:px-20 xl:px-32\">
    <div class=\"px-4 pt-8\">
        ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_prepare")]);
        echo "
      <p class=\"text-xl font-medium\">Recapitulatif</p>
      <p class=\"text-gray-400\">Vérifiez votre commande et selectionnez le livreur qui vous convient</p>
      <p class=\"text-xl font-medium\">
        <span class=\"text-gray-400\">Shipping details</span>
      </p>
      <p>Si vous n'avez pas d'adresse ajouté dans votre profil,<a href=\"#\"> <strong>Ajoutez en une<strong>

      </p>

        <h3 class=\"text-lg font-medium\">Où souhaitez vous être livré</h3>
        ";
        // line 50
        echo twig_replace_filter($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "addresses", [], "any", false, false, false, 50), 'row'), ["[-br]" => "<br/>"]);
        echo "
        
        <h3 class=\"text-lg font-medium\">Mode de livraison</h3>
        ";
        // line 53
        echo twig_replace_filter($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "transporter", [], "any", false, false, false, 53), 'row'), ["[-br]" => "<br/>"]);
        echo "
    </div>
</div>

    <div class=\"col-lg-5 offset-lg-1 pt-1\">
      
        ";
        // line 59
        $context["total"] = null;
        // line 60
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recapBasket"]) || array_key_exists("recapBasket", $context) ? $context["recapBasket"] : (function () { throw new RuntimeError('Variable "recapBasket" does not exist.', 60, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 61
            echo "            ";
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 61, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 61), "price", [], "any", false, false, false, 61) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 61)));
            // line 62
            echo "            <div class=\"d-flex flex-row align-items-center justify-content-between mt-4 mb-3 p-3 bg-white rounded shadow-sm\">
                <div class=\"d-flex flex-row align-items-center\">
                    <img src=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset(twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 64), "attachmentFile"), "html", null, true);
            echo "\" width=\"50\" height=\"50\" class=\"rounded-circle\">
                    <div class=\"ml-2\">
                        <span class=\"font-weight-bold d-block\">";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 66), "name", [], "any", false, false, false, 66), "html", null, true);
            echo "</span>
                        <span class=\"spec\">Quantité : x";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 67), "html", null, true);
            echo " - Prix du produit: ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 67), "price", [], "any", false, false, false, 67) / 100), 2, ",", "."), "html", null, true);
            echo "€</span>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "        <div class=\"d-flex flex-row align-items-center justify-content-between mt-4 mb-3 p-3 bg-white rounded shadow-sm\">
            Total: <span class=\"text-primary font-weight-bold\">";
        // line 73
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 73, $this->source); })()) / 100), 2, ",", "."), "html", null, true);
        echo " €</span>
</div>
<div class=\"mt-5 text-center\">
    <button type=\"submit\" class=\"btn btn-primary btn-block\">Valider la commande</button>
    </div>
";
        // line 78
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), 'form_end');
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "order/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 78,  194 => 73,  191 => 72,  178 => 67,  174 => 66,  169 => 64,  165 => 62,  162 => 61,  157 => 60,  155 => 59,  146 => 53,  140 => 50,  126 => 39,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Checkout{% endblock %}

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
            <a class=\"flex h-6 w-6 items-center justify-center rounded-full bg-gray-600 text-xs font-semibold text-white ring ring-gray-600 ring-offset-2\" href=\"#\">2</a>
            <span class=\"font-semibold text-gray-900\">Récapitulatif</span>
          </li>
          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9 5l7 7-7 7\" />
          </svg>
          <li class=\"flex items-center space-x-3 text-left sm:space-x-4\">
            <a class=\"flex h-6 w-6 items-center justify-center rounded-full bg-gray-400 text-xs font-semibold text-white\" href=\"#\">3</a>
            <span class=\"font-semibold text-gray-500\">Paiement</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class=\"grid sm:px-10 lg:grid-cols-2 lg:px-20 xl:px-32\">
    <div class=\"px-4 pt-8\">
        {{ form_start(form, {action:path('order_prepare')}) }}
      <p class=\"text-xl font-medium\">Recapitulatif</p>
      <p class=\"text-gray-400\">Vérifiez votre commande et selectionnez le livreur qui vous convient</p>
      <p class=\"text-xl font-medium\">
        <span class=\"text-gray-400\">Shipping details</span>
      </p>
      <p>Si vous n'avez pas d'adresse ajouté dans votre profil,<a href=\"#\"> <strong>Ajoutez en une<strong>

      </p>

        <h3 class=\"text-lg font-medium\">Où souhaitez vous être livré</h3>
        {{ form_row(form.addresses)|replace({'[-br]' : '<br/>'})|raw }}
        
        <h3 class=\"text-lg font-medium\">Mode de livraison</h3>
        {{ form_row(form.transporter)|replace({'[-br]' : '<br/>'})|raw }}
    </div>
</div>

    <div class=\"col-lg-5 offset-lg-1 pt-1\">
      
        {% set total = null %}
        {% for product in recapBasket %}
            {% set total = total + (product.product.price * product.quantity) %}
            <div class=\"d-flex flex-row align-items-center justify-content-between mt-4 mb-3 p-3 bg-white rounded shadow-sm\">
                <div class=\"d-flex flex-row align-items-center\">
                    <img src=\"{{ vich_uploader_asset(product.product, 'attachmentFile')}}\" width=\"50\" height=\"50\" class=\"rounded-circle\">
                    <div class=\"ml-2\">
                        <span class=\"font-weight-bold d-block\">{{ product.product.name }}</span>
                        <span class=\"spec\">Quantité : x{{ product.quantity }} - Prix du produit: {{ (product.product.price / 100)|number_format(2, ',', '.')}}€</span>
                    </div>
                </div>
            </div>
        {% endfor %}
        <div class=\"d-flex flex-row align-items-center justify-content-between mt-4 mb-3 p-3 bg-white rounded shadow-sm\">
            Total: <span class=\"text-primary font-weight-bold\">{{ (total / 100)|number_format(2, ',', '.') }} €</span>
</div>
<div class=\"mt-5 text-center\">
    <button type=\"submit\" class=\"btn btn-primary btn-block\">Valider la commande</button>
    </div>
{{ form_end(form) }}
    </div>
{% endblock %}
", "order/index.html.twig", "/Users/walidbelmezouar/Documents/prog/SoleFrenzyR/templates/order/index.html.twig");
    }
}

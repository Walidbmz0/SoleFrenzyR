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

/* basket/index.html.twig */
class __TwigTemplate_4e74ad61787900e0d86bccc173344b6e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "basket/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "basket/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "basket/index.html.twig", 1);
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

        echo "Panier";
        
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
<main class=\"page-wrapper\">

    ";
        // line 9
        if ((twig_length_filter($this->env, (isset($context["basket"]) || array_key_exists("basket", $context) ? $context["basket"] : (function () { throw new RuntimeError('Variable "basket" does not exist.', 9, $this->source); })())) > 0)) {
            // line 10
            echo "

                
                
                <style>
                    @layer utilities {
                        input[type=\"number\"]::-webkit-inner-spin-button,
                        input[type=\"number\"]::-webkit-outer-spin-button {
                            -webkit-appearance: none;
                            margin: 0;
                        }
                    }
                </style>
                
                <body>
                    
                    <h1 class=\"mb-10 text-center text-2xl font-bold\">Mon panier</h1>
                    <div class=\"mx-auto max-w-5xl justify-center px-6 md:flex md:space-x-6 xl:px-0\">
                      <div class=\"rounded-lg md:w-2/3\">
                        <a href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("basket_removeAll");
            echo "\" class=\"btn btn-outline-dark btn-sm\">Vider le panier</a>
                        ";
            // line 30
            $context["total"] = null;
            // line 31
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["basket"]) || array_key_exists("basket", $context) ? $context["basket"] : (function () { throw new RuntimeError('Variable "basket" does not exist.', 31, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 32
                echo "                        ";
                $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 32, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 32), "price", [], "any", false, false, false, 32) * twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 32)));
                // line 33
                echo "                        <div class=\"justify-between mb-6 rounded-lg bg-white p-6 shadow-md sm:flex sm:justify-start\">
                          <img src=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset(twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 34), "attachmentFile"), "html", null, true);
                echo "\" alt=\"product-image\" class=\"w-full rounded-lg sm:w-40\" />
                          <div class=\"sm:ml-4 sm:flex sm:w-full sm:justify-between\">
                            <div class=\"mt-5 sm:mt-0\">
                              <h2 class=\"text-lg font-bold text-gray-900\">";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 37), "name", [], "any", false, false, false, 37), "html", null, true);
                echo "</h2>
                              <p class=\"mt-1 text-xs text-gray-700\">";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 38), "size", [], "any", false, false, false, 38), "html", null, true);
                echo "</p>
                            </div>
                            <div class=\"mt-4 flex justify-between sm:space-y-6 sm:mt-0 sm:block sm:space-x-6\">
                              
                              <div class=\"flex items-center border-gray-100\">
                                
                                <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("basket_decrease", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44)]), "html", null, true);
                echo "\"><span class=\"cursor-pointer rounded-l bg-gray-100 py-1 px-3.5 duration-100 hover:bg-blue-500 hover:text-blue-50\" data-decrement> - </span>
                                  <input class=\"h-8 w-8 border bg-white text-center text-xs outline-none\" type=\"number\" value=\"";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 45), "html", null, true);
                echo "\" min=\"1\" />
                                  
                                  <a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("basket_add", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47)]), "html", null, true);
                echo "\"><span class=\"cursor-pointer rounded-r bg-gray-100 py-1 px-3 duration-100 hover:bg-blue-500 hover:text-blue-50\" data-increment> + </span>
                                  </div>
                                  
                                  <div class=\"flex items-center space-x-4\">
                                    <p class=\"text-lg font-bold text-gray-900\">";
                // line 51
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 51, $this->source); })()) / 100), 2, ",", "."), "html", null, true);
                echo " €</p>
                                    
                                    
                                    <button class=\"btn btn-circle\">
                                      <a href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("basket_decrease", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 55), "id", [], "any", false, false, false, 55)]), "html", null, true);
                echo "\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\" /></svg>
                                      </button>
                                      
                                    </div>
                                  </div>
                                </div>
                              </div>
                              
                              <form action=\"";
                // line 64
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_index");
                echo "\">
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                Nombre de produit :
                ";
            // line 67
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["basket"]) || array_key_exists("basket", $context) ? $context["basket"] : (function () { throw new RuntimeError('Variable "basket" does not exist.', 67, $this->source); })())), "html", null, true);
            echo "
                <br>
                
                <ul class=\"list-unstyled py-3 mb-0\">
                    <li class=\"d-flex justify-content-between align-items-center border-bottom py-3\">
                        <strong class=\"text-muted\">Total</strong>
                        <h5 class=\"font-weight-bold\">";
            // line 73
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 73, $this->source); })()) / 100), 2, ",", "."), "html", null, true);
            echo " €</h5>
                    </li>
                </ul>
                <div class=\"d-flex justify-content-between align-items-center pt-3 mb-4\">
                    <a class=\"btn btn-outline-dark btn-sm\" href=\"";
            // line 77
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
            echo "\">Continuer mes achats</a>
                    <button class=\"btn btn-primary btn-sm\" type=\"submit\">Valider mon panier</button>
                
        </form>
                
    ";
        } else {
            // line 83
            echo "<div class=\"container d-flex flex-column justify-content-center min-vh-100 py-5\">
    <div class=\"text-center pt-4 mt-lg-2\">
        <h1 class=\"display-5\">Votre panier est vide</h1>
        <p class=\"fs-lg pb-2 pb-md-0 mb-4 mb-md-5\">Commencez votre shopping dès maintenant !</p>
        <a class=\"btn btn-primary btn-lg\" href=\"";
            // line 87
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
            echo "\">Voir les articles</a>
    </div>
    ";
        }
        // line 90
        echo "
</main>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "basket/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 90,  229 => 87,  223 => 83,  214 => 77,  207 => 73,  198 => 67,  195 => 66,  187 => 64,  175 => 55,  168 => 51,  161 => 47,  156 => 45,  152 => 44,  143 => 38,  139 => 37,  133 => 34,  130 => 33,  127 => 32,  122 => 31,  120 => 30,  116 => 29,  95 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Panier{% endblock %}

{% block body %}

<main class=\"page-wrapper\">

    {% if basket|length > 0 %}


                
                
                <style>
                    @layer utilities {
                        input[type=\"number\"]::-webkit-inner-spin-button,
                        input[type=\"number\"]::-webkit-outer-spin-button {
                            -webkit-appearance: none;
                            margin: 0;
                        }
                    }
                </style>
                
                <body>
                    
                    <h1 class=\"mb-10 text-center text-2xl font-bold\">Mon panier</h1>
                    <div class=\"mx-auto max-w-5xl justify-center px-6 md:flex md:space-x-6 xl:px-0\">
                      <div class=\"rounded-lg md:w-2/3\">
                        <a href=\"{{ path('basket_removeAll') }}\" class=\"btn btn-outline-dark btn-sm\">Vider le panier</a>
                        {% set total =null %}
                        {% for item in basket %}
                        {% set total = total + item.product.price * item.quantity %}
                        <div class=\"justify-between mb-6 rounded-lg bg-white p-6 shadow-md sm:flex sm:justify-start\">
                          <img src=\"{{ vich_uploader_asset(item.product, 'attachmentFile')}}\" alt=\"product-image\" class=\"w-full rounded-lg sm:w-40\" />
                          <div class=\"sm:ml-4 sm:flex sm:w-full sm:justify-between\">
                            <div class=\"mt-5 sm:mt-0\">
                              <h2 class=\"text-lg font-bold text-gray-900\">{{ item.product.name }}</h2>
                              <p class=\"mt-1 text-xs text-gray-700\">{{ item.product.size }}</p>
                            </div>
                            <div class=\"mt-4 flex justify-between sm:space-y-6 sm:mt-0 sm:block sm:space-x-6\">
                              
                              <div class=\"flex items-center border-gray-100\">
                                
                                <a href=\"{{ path('basket_decrease', {id:item.product.id})}}\"><span class=\"cursor-pointer rounded-l bg-gray-100 py-1 px-3.5 duration-100 hover:bg-blue-500 hover:text-blue-50\" data-decrement> - </span>
                                  <input class=\"h-8 w-8 border bg-white text-center text-xs outline-none\" type=\"number\" value=\"{{ item.quantity }}\" min=\"1\" />
                                  
                                  <a href=\"{{ path('basket_add', {id:item.product.id})}}\"><span class=\"cursor-pointer rounded-r bg-gray-100 py-1 px-3 duration-100 hover:bg-blue-500 hover:text-blue-50\" data-increment> + </span>
                                  </div>
                                  
                                  <div class=\"flex items-center space-x-4\">
                                    <p class=\"text-lg font-bold text-gray-900\">{{ (total/100)|number_format(2, ',', '.') }} €</p>
                                    
                                    
                                    <button class=\"btn btn-circle\">
                                      <a href=\"{{path ('basket_decrease', {id: item.product.id})}}\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\" /></svg>
                                      </button>
                                      
                                    </div>
                                  </div>
                                </div>
                              </div>
                              
                              <form action=\"{{ path ('order_index')}}\">
                {% endfor %}
                Nombre de produit :
                {{ basket|length }}
                <br>
                
                <ul class=\"list-unstyled py-3 mb-0\">
                    <li class=\"d-flex justify-content-between align-items-center border-bottom py-3\">
                        <strong class=\"text-muted\">Total</strong>
                        <h5 class=\"font-weight-bold\">{{ (total/100)|number_format(2, ',', '.') }} €</h5>
                    </li>
                </ul>
                <div class=\"d-flex justify-content-between align-items-center pt-3 mb-4\">
                    <a class=\"btn btn-outline-dark btn-sm\" href=\"{{ path('product_index') }}\">Continuer mes achats</a>
                    <button class=\"btn btn-primary btn-sm\" type=\"submit\">Valider mon panier</button>
                
        </form>
                
    {% else %}
<div class=\"container d-flex flex-column justify-content-center min-vh-100 py-5\">
    <div class=\"text-center pt-4 mt-lg-2\">
        <h1 class=\"display-5\">Votre panier est vide</h1>
        <p class=\"fs-lg pb-2 pb-md-0 mb-4 mb-md-5\">Commencez votre shopping dès maintenant !</p>
        <a class=\"btn btn-primary btn-lg\" href=\"{{ path('product_index') }}\">Voir les articles</a>
    </div>
    {% endif %}

</main>


{% endblock %}
", "basket/index.html.twig", "/Users/walidbelmezouar/Documents/prog/SoleFrenzyR/templates/basket/index.html.twig");
    }
}

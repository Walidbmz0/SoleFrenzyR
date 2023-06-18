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

/* partials/_header.html.twig */
class __TwigTemplate_0a39f4df67ebdb0b41353ee9d46536b1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_header.html.twig"));

        // line 1
        echo "


<nav class=\"bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700\">
    <div class=\"max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4\">
      <a href=\"/\" class=\"flex items-center\">
          <img src=\"https://flowbite.com/docs/images/logo.svg\" class=\"h-8 mr-3\" alt=\"Flowbite Logo\" />
          <span class=\"self-center text-2xl font-semibold whitespace-nowrap dark:text-white\">Sole Frenzy</span>
      </a>
      <button data-collapse-toggle=\"navbar-dropdown\" type=\"button\" class=\"inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600\" aria-controls=\"navbar-dropdown\" aria-expanded=\"false\">
        <span class=\"sr-only\">Open main menu</span>
        <svg class=\"w-6 h-6\" aria-hidden=\"true\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><path fill-rule=\"evenodd\" d=\"M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z\" clip-rule=\"evenodd\"></path></svg>
      </button>
      <div class=\"hidden w-full md:block md:w-auto\" id=\"navbar-dropdown\">
        <ul class=\"flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700\">
          <li>
            <a href=\"/\" class=\"block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500 dark:bg-blue-600 md:dark:bg-transparent\" aria-current=\"page\">Accueil</a>
          </li>
          <li>
              <button id=\"dropdownNavbarLink\" data-dropdown-toggle=\"dropdownNavbar\" class=\"flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent\">🥷🏽 <svg class=\"w-5 h-5 ml-1\" aria-hidden=\"true\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><path fill-rule=\"evenodd\" d=\"M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z\" clip-rule=\"evenodd\"></path></svg></button>
              <!-- Dropdown menu -->
              <div id=\"dropdownNavbar\" class=\"z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600\">
                  <ul class=\"py-2 text-sm text-gray-700 dark:text-gray-400\" aria-labelledby=\"dropdownLargeButton\">
                    <li>
                      <a href=\"#\" class=\"block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white\">Mon compte</a>
                    </li>
                    <li>
                      <a href=\"#\" class=\"block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white\">paramètres</a>
                    </li>
                    <li>
                      <a href=\"#\" class=\"block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white\">Mes favoris</a>
                    </li>
                  </ul>
                  <div class=\"py-1\">
                      ";
        // line 35
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 36
            echo "                      <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white\">Deconnexion</a>
                    ";
        } else {
            // line 38
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white\">Connexion</a>
                    ";
        }
        // line 40
        echo "                  </div>
              </div>
          </li>
          <li>
            <a href=\"/clothes\" class=\"block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent\">Vêtements</a>
          </li>
          <li>
            <a href=\"/shoes\" class=\"block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent\">Chaussures</a>
          </li>
          <li>
            <a href=\"/accessories\" class=\"block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent\">Accessoire</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 40,  87 => 38,  81 => 36,  79 => 35,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("


<nav class=\"bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700\">
    <div class=\"max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4\">
      <a href=\"/\" class=\"flex items-center\">
          <img src=\"https://flowbite.com/docs/images/logo.svg\" class=\"h-8 mr-3\" alt=\"Flowbite Logo\" />
          <span class=\"self-center text-2xl font-semibold whitespace-nowrap dark:text-white\">Sole Frenzy</span>
      </a>
      <button data-collapse-toggle=\"navbar-dropdown\" type=\"button\" class=\"inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600\" aria-controls=\"navbar-dropdown\" aria-expanded=\"false\">
        <span class=\"sr-only\">Open main menu</span>
        <svg class=\"w-6 h-6\" aria-hidden=\"true\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><path fill-rule=\"evenodd\" d=\"M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z\" clip-rule=\"evenodd\"></path></svg>
      </button>
      <div class=\"hidden w-full md:block md:w-auto\" id=\"navbar-dropdown\">
        <ul class=\"flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700\">
          <li>
            <a href=\"/\" class=\"block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500 dark:bg-blue-600 md:dark:bg-transparent\" aria-current=\"page\">Accueil</a>
          </li>
          <li>
              <button id=\"dropdownNavbarLink\" data-dropdown-toggle=\"dropdownNavbar\" class=\"flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent\">🥷🏽 <svg class=\"w-5 h-5 ml-1\" aria-hidden=\"true\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><path fill-rule=\"evenodd\" d=\"M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z\" clip-rule=\"evenodd\"></path></svg></button>
              <!-- Dropdown menu -->
              <div id=\"dropdownNavbar\" class=\"z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600\">
                  <ul class=\"py-2 text-sm text-gray-700 dark:text-gray-400\" aria-labelledby=\"dropdownLargeButton\">
                    <li>
                      <a href=\"#\" class=\"block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white\">Mon compte</a>
                    </li>
                    <li>
                      <a href=\"#\" class=\"block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white\">paramètres</a>
                    </li>
                    <li>
                      <a href=\"#\" class=\"block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white\">Mes favoris</a>
                    </li>
                  </ul>
                  <div class=\"py-1\">
                      {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
                      <a href=\"{{ path('app_logout') }}\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white\">Deconnexion</a>
                    {% else %}
                    <a href=\"{{ path('app_login') }}\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white\">Connexion</a>
                    {% endif %}
                  </div>
              </div>
          </li>
          <li>
            <a href=\"/clothes\" class=\"block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent\">Vêtements</a>
          </li>
          <li>
            <a href=\"/shoes\" class=\"block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent\">Chaussures</a>
          </li>
          <li>
            <a href=\"/accessories\" class=\"block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent\">Accessoire</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>", "partials/_header.html.twig", "/Users/walidbelmezouar/Documents/prog/SoleFrenzyR/templates/partials/_header.html.twig");
    }
}

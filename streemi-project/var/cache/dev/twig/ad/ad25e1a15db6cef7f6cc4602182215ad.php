<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* login.html.twig */
class __TwigTemplate_1937f7640a1c8eb10b1e2a24fd58c1de extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link href=\"style/style.css\" rel=\"stylesheet\">
    <title>Streemi - Connexion</title>
    <script src=\"https://cdn.tailwindcss.com\"></script>
</head>

<body class=\"font-montserrat text-sm bg-white\">
<div class=\"flex min-h-screen\">
    <aside class=\" w-1/6 py-10 pl-10  min-w-min  border-r border-gray-300  hidden md:block \">

        <div class=\" font-bold text-lg flex items-center gap-x-3\">
            <svg class=\"h-8 w-8 fill-red-600\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                <path d=\"M10 15.5v-7c0-.41.47-.65.8-.4l4.67 3.5c.27.2.27.6 0 .8l-4.67 3.5c-.33.25-.8.01-.8-.4Zm11.96-4.45c.58 6.26-4.64 11.48-10.9 10.9 -4.43-.41-8.12-3.85-8.9-8.23 -.26-1.42-.19-2.78.12-4.04 .14-.58.76-.9 1.31-.7v0c.47.17.75.67.63 1.16 -.2.82-.27 1.7-.19 2.61 .37 4.04 3.89 7.25 7.95 7.26 4.79.01 8.61-4.21 7.94-9.12 -.51-3.7-3.66-6.62-7.39-6.86 -.83-.06-1.63.02-2.38.2 -.49.11-.99-.16-1.16-.64v0c-.2-.56.12-1.17.69-1.31 1.79-.43 3.75-.41 5.78.37 3.56 1.35 6.15 4.62 6.5 8.4ZM5.5 4C4.67 4 4 4.67 4 5.5 4 6.33 4.67 7 5.5 7 6.33 7 7 6.33 7 5.5 7 4.67 6.33 4 5.5 4Z\"></path>
            </svg>
            <div class=\"tracking-wide\">Streemi<span class=\"text-red-600\">.</span></div>
        </div>

        <!-- Menu -->
        <div class=\"mt-12 flex flex-col gap-y-4 text-gray-500 fill-gray-500 text-sm\">
            <div class=\"text-gray-400/70  font-medium uppercase\">Menu</div>

            <a class=\"flex items-center space-x-2 py-1font-semibold  border-r-4 border-r-red-600 pr-20 \" href=\"#\">
                <svg class=\"h-5 w-5 fill-red-600 \" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                    <path d=\"M5 22h14v0c1.1 0 2-.9 2-2v-9 0c0-.27-.11-.53-.29-.71l-8-8v0c-.4-.39-1.02-.39-1.41 0l-8 8h0c-.2.18-.3.44-.3.71v9 0c0 1.1.89 2 2 2Zm5-2v-5h4v5Zm-5-8.59l7-7 7 7V20h-3v-5 0c0-1.11-.9-2-2-2h-4v0c-1.11 0-2 .89-2 2v5H5Z\"></path>
                </svg>
                <span>Accueil</span> </a>
            <a class=\" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold\" href=\"#\">
                <svg class=\"h-5 w-5 group-hover:fill-red-600\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                    <g>
                        <path d=\"M12 2C6.48 2 2 6.48 2 12c0 5.51 4.48 10 10 10 5.51 0 10-4.49 10-10 0-5.52-4.49-10-10-10Zm0 18c-4.42 0-8-3.59-8-8 0-4.42 3.58-8 8-8 4.41 0 8 3.58 8 8 0 4.41-3.59 8-8 8Z\"></path>
                        <path d=\"M8 16l5.991-2 2-6 -6 2Z\"></path>
                    </g>
                </svg>
                <span>Découvrir</span> </a>
            <a class=\" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold \" href=\"#\">
                <svg class=\"h-5 w-5 group-hover:fill-red-600\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                    <g>
                        <path d=\"M12 2C6.48 2 2 6.48 2 12c0 5.51 4.48 10 10 10 5.51 0 10-4.49 10-10 0-5.52-4.49-10-10-10Zm0 18c-4.42 0-8-3.59-8-8 0-4.42 3.58-8 8-8 4.41 0 8 3.58 8 8 0 4.41-3.59 8-8 8Z\"></path>
                        <path d=\"M13 7h-2v5.414l3.29 3.29 1.41-1.42 -2.71-2.71Z\"></path>
                    </g>
                </svg>
                <span>Mes listes</span> </a>

            <div class=\"mt-8 text-gray-400/70  font-medium uppercase\">Social</div>
            <a class=\" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold \" href=\"#\">
                <svg class=\"h-5 w-5 group-hover:fill-red-600\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                    <path d=\"M12 2v0C9.23 2 7 4.23 7 7c0 2.76 2.23 5 5 5 2.76 0 5-2.24 5-5v0c0-2.77-2.24-5-5-5Zm0 8v0c-1.66 0-3-1.35-3-3 0-1.66 1.34-3 3-3 1.65 0 3 1.34 3 3v0c0 1.65-1.35 3-3 3Zm9 11v-1 0c0-3.87-3.14-7-7-7h-4v0c-3.87 0-7 3.13-7 7v1h2v-1 0c0-2.77 2.23-5 5-5h4v0c2.76 0 5 2.23 5 5v1Z\"></path>
                </svg>
                <span>Mon profil</span> </a>
            <a class=\" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold \" href=\"#\">
                <svg class=\"h-5 w-5 group-hover:fill-red-600\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                    <g>
                        <path d=\"M12 2v0C6.47 2 2 6.47 2 12c0 5.52 4.47 10 10 10 5.52 0 10-4.48 10-10v-.001c0-5.53-4.48-10-10-10Zm0 18v0c-4.42 0-8-3.59-8-8 0-4.42 3.58-8 8-8 4.41 0 8 3.58 8 8v0c0 4.41-3.59 8-8 8Z\"></path>
                        <path d=\"M12 8v0c-2.21 0-4 1.79-4 4 0 2.2 1.79 4 4 4 2.2 0 4-1.8 4-4v0c0-2.21-1.8-4-4-4Zm0 6v0c-1.11 0-2-.9-2-2 0-1.11.89-2 2-2 1.1 0 2 .89 2 2v0c0 1.1-.9 2-2 2Z\"></path>
                    </g>
                </svg>
                <span>Mes abonnements</span> </a>

            <div class=\"mt-8 text-gray-400/70  font-medium uppercase\">General</div>

            <a class=\" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold \" href=\"#\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 group-hover:stroke-red-600\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z\"/>
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15 12a3 3 0 11-6 0 3 3 0 016 0z\"/>
                </svg>
                <span>Paramètres</span> </a>
            <a class=\" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold\" href=\"#\">
                <svg class=\"h-5 w-5 group-hover:fill-red-600\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                    <g>
                        <path d=\"M16 13v-2H7V8l-5 4 5 4v-3Z\"></path>
                        <path d=\"M20 3h-9c-1.11 0-2 .89-2 2v4h2V5h9v14h-9v-4H9v4c0 1.1.89 2 2 2h9c1.1 0 2-.9 2-2V5c0-1.11-.9-2-2-2Z\"></path>
                    </g>
                </svg>
                <span>Déconnexion</span> </a>

        </div><!-- /Menu -->

    </aside><!-- /Left Sidebar -->
    <main class=\"flex-1\">
        <header class=\" font-bold text-lg flex items-center md:hidden\">
                <span class=\"mr-6\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-7 w-7 text-gray-700\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M4 6h16M4 12h16M4 18h7\"/>
                      </svg>
                </span>
            <svg class=\"h-8 w-8 fill-red-600 shrink-0\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                <path d=\"M10 15.5v-7c0-.41.47-.65.8-.4l4.67 3.5c.27.2.27.6 0 .8l-4.67 3.5c-.33.25-.8.01-.8-.4Zm11.96-4.45c.58 6.26-4.64 11.48-10.9 10.9 -4.43-.41-8.12-3.85-8.9-8.23 -.26-1.42-.19-2.78.12-4.04 .14-.58.76-.9 1.31-.7v0c.47.17.75.67.63 1.16 -.2.82-.27 1.7-.19 2.61 .37 4.04 3.89 7.25 7.95 7.26 4.79.01 8.61-4.21 7.94-9.12 -.51-3.7-3.66-6.62-7.39-6.86 -.83-.06-1.63.02-2.38.2 -.49.11-.99-.16-1.16-.64v0c-.2-.56.12-1.17.69-1.31 1.79-.43 3.75-.41 5.78.37 3.56 1.35 6.15 4.62 6.5 8.4ZM5.5 4C4.67 4 4 4.67 4 5.5 4 6.33 4.67 7 5.5 7 6.33 7 7 6.33 7 5.5 7 4.67 6.33 4 5.5 4Z\"></path>
            </svg>
            <div class=\"tracking-wideflex-1\">StrEEMI<span class=\"text-red-600\">.</span></div>
        </header>
        <section class=\"h-full relative\">
            <div style=\"background-image: url('https://blog.compose.fr/wp-content/uploads/2024/05/Marathon-Cinema.webp')\" class=\"bg-cover bg-no-repeat h-full before:bg-black/40 before:content-[''] before:top-0 before:left-0 before:right-0 before:absolute before:w-full before:h-full\">
                <div class=\"p-8 lg:w-1/2 mx-auto h-full flex items-center justify-center\">
                    <div class=\"bg-white rounded-lg p-8 relative w-full\">
                        <h1 class=\"text-center text-lg font-bold\">Se connecter avec</h1>
                        <div class=\"flex items-center justify-center space-x-4 mt-10\">
                            <button class=\"max-w-xs font-bold shadow-sm rounded-lg py-3 px-6 bg-gray-100 hover:opacity-90 hover:scale-105 text-gray-800 flex items-center justify-center transition-all duration-300 ease-in-out focus:outline-none hover:shadow focus:shadow-sm focus:shadow-outline\">
                                <svg class=\"h-7 mr-3 fill-red-600\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>netflix</title><path d=\"M6.5,2H10.5L13.44,10.83L13.5,2H17.5V22C16.25,21.78 14.87,21.64 13.41,21.58L10.5,13L10.43,21.59C9.03,21.65 7.7,21.79 6.5,22V2Z\" /></svg>
                                Netflix
                            </button>
                            <button class=\"max-w-xs font-bold shadow-sm rounded-lg py-3 px-6 bg-gray-100 hover:opacity-90 hover:scale-105 text-gray-800 flex items-center justify-center transition-all duration-300 ease-in-out focus:outline-none hover:shadow focus:shadow-sm focus:shadow-outline\">
                                <svg class=\"h-7 mr-3\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 48 48\">
                                    <path fill=\"#29b6f6\" d=\"M31.473,14.813c0.273-0.163,0.556-0.339,0.852-0.492c0.765-0.392,1.616-0.59,2.481-0.547\tc0.623,0.034,1.192,0.208,1.628,0.666c0.416,0.426,0.568,0.95,0.613,1.518c0.011,0.121,0.011,0.24,0.011,0.371v5.658\tc0,0.492-0.066,0.556-0.556,0.556H35.17c-0.087,0-0.174,0-0.263-0.011c-0.13-0.011-0.24-0.121-0.263-0.25\tc-0.023-0.121-0.023-0.24-0.023-0.36v-5.059c0.011-0.208-0.011-0.403-0.066-0.6c-0.087-0.339-0.392-0.579-0.742-0.6\tc-0.645-0.043-1.289,0.087-1.879,0.361c-0.087,0.023-0.142,0.11-0.13,0.197v5.747c0,0.11,0,0.208-0.023,0.316\tc0,0.153-0.121,0.263-0.273,0.263l0,0c-0.163,0.011-0.327,0.011-0.503,0.011h-1.158c-0.403,0-0.492-0.099-0.492-0.503v-5.168\tc0-0.186-0.011-0.384-0.053-0.568c-0.076-0.371-0.392-0.634-0.765-0.655c-0.655-0.043-1.321,0.087-1.913,0.371\tc-0.087,0.023-0.142,0.121-0.121,0.208v5.823c0,0.403-0.087,0.492-0.492,0.492h-1.465c-0.384,0-0.479-0.11-0.479-0.479v-7.583\tc0-0.087,0.011-0.174,0.034-0.263c0.043-0.13,0.174-0.208,0.305-0.208h1.366c0.197,0,0.316,0.121,0.384,0.305\tc0.053,0.153,0.087,0.297,0.142,0.46c0.11,0,0.174-0.076,0.25-0.121c0.6-0.371,1.234-0.689,1.945-0.819\tc0.547-0.11,1.092-0.11,1.639,0c0.513,0.11,0.973,0.416,1.268,0.852c0.023,0.034,0.043,0.053,0.066,0.076\tC31.452,14.79,31.462,14.79,31.473,14.813z M15.327,15.229c0.076-0.023,0.142-0.066,0.186-0.13c0.197-0.197,0.403-0.384,0.623-0.556\tc0.568-0.437,1.279-0.655,1.989-0.6c0.284,0.011,0.384,0.099,0.403,0.371c0.023,0.371,0.011,0.753,0.011,1.126\tc0.011,0.153,0,0.297-0.023,0.448c-0.043,0.197-0.121,0.273-0.316,0.297c-0.153,0.011-0.297,0-0.448-0.011\tc-0.732-0.066-1.442,0.076-2.131,0.305c-0.153,0.053-0.153,0.163-0.153,0.284v5.241c0,0.099,0,0.186-0.011,0.284\tc-0.011,0.142-0.121,0.25-0.263,0.25c-0.076,0.011-0.163,0.011-0.24,0.011h-1.421c-0.076,0-0.163,0-0.24-0.011\tc-0.142-0.011-0.25-0.13-0.263-0.273c-0.011-0.087-0.011-0.174-0.011-0.263v-7.43c0-0.503,0.053-0.556,0.556-0.556h1.05\tc0.284,0,0.416,0.099,0.492,0.371C15.195,14.66,15.261,14.934,15.327,15.229z M19.587,18.265v-3.878\tc0.011-0.263,0.11-0.361,0.371-0.371c0.568-0.011,1.137-0.011,1.705,0c0.25,0,0.327,0.076,0.35,0.327\tc0.011,0.099,0.011,0.186,0.011,0.284v7.276c0,0.121-0.011,0.24-0.023,0.36c-0.011,0.142-0.121,0.24-0.263,0.25\tc-0.066,0.011-0.121,0.011-0.186,0.011h-1.518c-0.053,0-0.099,0-0.153-0.011c-0.153-0.011-0.284-0.13-0.297-0.284\tc-0.011-0.087-0.011-0.174-0.011-0.263C19.587,20.755,19.587,19.51,19.587,18.265z M20.855,10.104\tc0.174-0.011,0.35,0.023,0.513,0.076c0.59,0.197,0.895,0.71,0.842,1.376c-0.043,0.568-0.469,1.026-1.039,1.115\tc-0.24,0.043-0.492,0.043-0.732,0c-0.623-0.121-1.081-0.579-1.039-1.366C19.466,10.53,19.98,10.104,20.855,10.104z M11.404,17.37\tc-0.043-0.568-0.197-1.126-0.426-1.639c-0.448-0.939-1.137-1.628-2.184-1.868c-1.202-0.263-2.284,0-3.268,0.732\tc-0.066,0.066-0.142,0.121-0.229,0.163c-0.023-0.011-0.043-0.023-0.043-0.034c-0.034-0.11-0.053-0.218-0.087-0.327\tc-0.087-0.273-0.197-0.371-0.492-0.371c-0.327,0-0.666,0.011-0.994,0c-0.25-0.011-0.479,0.023-0.655,0.218\tc0,3.823,0,7.659,0.011,11.47c0.142,0.229,0.36,0.273,0.613,0.263c0.392-0.011,0.787,0,1.179,0c0.689,0,0.689,0,0.689-0.677v-3.113\tc0-0.076-0.034-0.163,0.043-0.229c0.547,0.426,1.213,0.689,1.902,0.753c0.963,0.099,1.834-0.142,2.568-0.797\tc0.536-0.492,0.929-1.126,1.137-1.826C11.461,19.194,11.48,18.287,11.404,17.37z M8.793,19.631c-0.076,0.339-0.25,0.645-0.503,0.874\tc-0.284,0.24-0.634,0.384-1.005,0.384c-0.556,0.034-1.103-0.087-1.595-0.35c-0.121-0.053-0.197-0.174-0.186-0.305v-1.978\tc0-0.655,0.011-1.312,0-1.966c-0.011-0.153,0.076-0.284,0.218-0.339c0.6-0.284,1.224-0.416,1.879-0.284\tc0.46,0.066,0.852,0.361,1.039,0.787c0.163,0.35,0.263,0.732,0.284,1.115C8.991,18.265,8.991,18.965,8.793,19.631z M41.045,18.976\tc0.819,0.153,1.66,0.163,2.481,0.034c0.479-0.066,0.939-0.208,1.366-0.437c0.492-0.284,0.852-0.677,1.005-1.224\tc0.384-1.376-0.208-2.765-1.639-3.276c-0.7-0.229-1.442-0.305-2.174-0.208c-1.726,0.197-2.85,1.147-3.363,2.797\tc-0.36,1.126-0.316,2.271-0.023,3.408c0.384,1.453,1.344,2.316,2.797,2.621c0.829,0.186,1.671,0.153,2.502,0.023\tc0.437-0.076,0.874-0.186,1.289-0.35c0.25-0.099,0.384-0.25,0.371-0.536c-0.011-0.263,0-0.536,0-0.808\tc0-0.327-0.13-0.426-0.448-0.35c-0.318,0.076-0.623,0.142-0.939,0.208c-0.677,0.142-1.376,0.142-2.055,0.023\tc-0.929-0.186-1.529-0.982-1.476-1.966C40.837,18.944,40.945,18.953,41.045,18.976z M40.771,17.305\tc0.034-0.263,0.11-0.513,0.208-0.753c0.327-0.797,1.016-1.071,1.715-1.026c0.197,0.011,0.392,0.053,0.579,0.13\tc0.284,0.121,0.469,0.384,0.503,0.689c0.034,0.186,0.023,0.384-0.034,0.568c-0.13,0.392-0.448,0.556-0.829,0.634\tc-0.229,0.053-0.469,0.076-0.71,0.053c-0.426,0-0.863-0.034-1.289-0.099C40.748,17.479,40.748,17.479,40.771,17.305z\"></path><path fill=\"#29b6f6\" d=\"M25.127,38.063c-0.414-0.011-0.83-0.011-1.242,0c-0.57-0.03-1.14-0.052-1.71-0.093\tc-1.513-0.115-3.017-0.342-4.487-0.685c-5.09-1.181-9.557-3.555-13.455-7.006c-0.364-0.323-0.705-0.653-1.058-0.986\tc-0.082-0.074-0.156-0.177-0.197-0.28c-0.063-0.145-0.03-0.301,0.074-0.414c0.104-0.113,0.271-0.156,0.414-0.093\tc0.093,0.041,0.186,0.082,0.271,0.134c3.722,2.302,7.784,3.98,12.044,4.975c1.431,0.332,2.87,0.59,4.322,0.778\tc2.083,0.26,4.186,0.353,6.28,0.28c1.129-0.03,2.25-0.134,3.369-0.28c2.612-0.332,5.194-0.923,7.691-1.752\tc1.316-0.434,2.601-0.934,3.856-1.513c0.186-0.104,0.414-0.134,0.622-0.082c0.342,0.082,0.549,0.434,0.466,0.778\tc-0.011,0.041-0.03,0.093-0.052,0.134c-0.082,0.156-0.197,0.29-0.342,0.393c-1.192,0.934-2.478,1.752-3.835,2.436\tc-2.56,1.294-5.298,2.218-8.116,2.747C28.414,37.824,26.777,38,25.127,38.063z M42.946,27.957c0.685,0.022,1.357,0.063,2.02,0.238\tc0.186,0.052,0.364,0.115,0.538,0.197c0.238,0.093,0.393,0.323,0.425,0.57c0.041,0.29,0.052,0.59,0.03,0.891\tc-0.134,1.773-0.685,3.482-1.597,5.006c-0.332,0.549-0.735,1.047-1.201,1.483c-0.093,0.093-0.208,0.167-0.332,0.208\tc-0.197,0.052-0.323-0.052-0.332-0.249c0.011-0.104,0.03-0.208,0.074-0.312c0.364-0.975,0.715-1.938,0.995-2.944\tc0.167-0.549,0.28-1.108,0.353-1.68c0.022-0.208,0.03-0.414,0.011-0.622c-0.011-0.353-0.238-0.653-0.581-0.757\tc-0.323-0.104-0.653-0.167-0.995-0.186c-0.954-0.041-1.906,0-2.851,0.125l-1.253,0.156c-0.134,0.011-0.26,0-0.332-0.125\tc-0.074-0.125-0.041-0.249,0.03-0.373c0.082-0.115,0.186-0.219,0.312-0.29c0.767-0.549,1.628-0.882,2.54-1.099\tC41.505,28.048,42.22,27.978,42.946,27.957z\"></path>
                                </svg>
                                Prime
                            </button>
                        </div>
                        <p class=\"text-center text-sm font-medium mt-10\"> Ou connectez-vous avec vos identifiants </p>
                        <form class=\"mt-10\">
                            <div class=\"relative\">
                                <input class=\"w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white\" id=\"username\" type=\"text\" placeholder=\"Adresse Email\"/>
                            </div>
                            <div class=\"relative mt-3\">
                                <input class=\"w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white\" id=\"password\" type=\"password\" placeholder=\"Mot de passe\"/>
                                <button class=\"absolute right-2 inset-y-0 flex items-center px-2 opacity-50 hover:opacity-100 transition\">
                                    <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>eye</title><path d=\"M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z\" /></svg>
                                </button>
                            </div>
                            <div class=\"flex items-center justify-center mt-8\">
                                <button class=\"relative flex w-full bg-red-600 flex-row p-3 items-center justify-center rounded-lg overflow-hidden border cursor-pointer transition text-white hover:opacity-90 hover:scale-105\">
                                    <svg class=\"h-5 w-5 fill-current mr-2\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>login</title><path d=\"M11 7L9.6 8.4L12.2 11H2V13H12.2L9.6 15.6L11 17L16 12L11 7M20 19H12V21H20C21.1 21 22 20.1 22 19V5C22 3.9 21.1 3 20 3H12V5H20V19Z\" /></svg>
                                    Se connecter
                                </button>
                            </div>

                            <div class=\"flex items-center justify-center mt-16\">
                                <a class=\"text-red-600 cursor-pointer transition hover:text-red-700 hover:scale-105\">
                                    Vous avez oubliez votre mot de passe ?
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

</body>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "login.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link href=\"style/style.css\" rel=\"stylesheet\">
    <title>Streemi - Connexion</title>
    <script src=\"https://cdn.tailwindcss.com\"></script>
</head>

<body class=\"font-montserrat text-sm bg-white\">
<div class=\"flex min-h-screen\">
    <aside class=\" w-1/6 py-10 pl-10  min-w-min  border-r border-gray-300  hidden md:block \">

        <div class=\" font-bold text-lg flex items-center gap-x-3\">
            <svg class=\"h-8 w-8 fill-red-600\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                <path d=\"M10 15.5v-7c0-.41.47-.65.8-.4l4.67 3.5c.27.2.27.6 0 .8l-4.67 3.5c-.33.25-.8.01-.8-.4Zm11.96-4.45c.58 6.26-4.64 11.48-10.9 10.9 -4.43-.41-8.12-3.85-8.9-8.23 -.26-1.42-.19-2.78.12-4.04 .14-.58.76-.9 1.31-.7v0c.47.17.75.67.63 1.16 -.2.82-.27 1.7-.19 2.61 .37 4.04 3.89 7.25 7.95 7.26 4.79.01 8.61-4.21 7.94-9.12 -.51-3.7-3.66-6.62-7.39-6.86 -.83-.06-1.63.02-2.38.2 -.49.11-.99-.16-1.16-.64v0c-.2-.56.12-1.17.69-1.31 1.79-.43 3.75-.41 5.78.37 3.56 1.35 6.15 4.62 6.5 8.4ZM5.5 4C4.67 4 4 4.67 4 5.5 4 6.33 4.67 7 5.5 7 6.33 7 7 6.33 7 5.5 7 4.67 6.33 4 5.5 4Z\"></path>
            </svg>
            <div class=\"tracking-wide\">Streemi<span class=\"text-red-600\">.</span></div>
        </div>

        <!-- Menu -->
        <div class=\"mt-12 flex flex-col gap-y-4 text-gray-500 fill-gray-500 text-sm\">
            <div class=\"text-gray-400/70  font-medium uppercase\">Menu</div>

            <a class=\"flex items-center space-x-2 py-1font-semibold  border-r-4 border-r-red-600 pr-20 \" href=\"#\">
                <svg class=\"h-5 w-5 fill-red-600 \" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                    <path d=\"M5 22h14v0c1.1 0 2-.9 2-2v-9 0c0-.27-.11-.53-.29-.71l-8-8v0c-.4-.39-1.02-.39-1.41 0l-8 8h0c-.2.18-.3.44-.3.71v9 0c0 1.1.89 2 2 2Zm5-2v-5h4v5Zm-5-8.59l7-7 7 7V20h-3v-5 0c0-1.11-.9-2-2-2h-4v0c-1.11 0-2 .89-2 2v5H5Z\"></path>
                </svg>
                <span>Accueil</span> </a>
            <a class=\" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold\" href=\"#\">
                <svg class=\"h-5 w-5 group-hover:fill-red-600\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                    <g>
                        <path d=\"M12 2C6.48 2 2 6.48 2 12c0 5.51 4.48 10 10 10 5.51 0 10-4.49 10-10 0-5.52-4.49-10-10-10Zm0 18c-4.42 0-8-3.59-8-8 0-4.42 3.58-8 8-8 4.41 0 8 3.58 8 8 0 4.41-3.59 8-8 8Z\"></path>
                        <path d=\"M8 16l5.991-2 2-6 -6 2Z\"></path>
                    </g>
                </svg>
                <span>Découvrir</span> </a>
            <a class=\" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold \" href=\"#\">
                <svg class=\"h-5 w-5 group-hover:fill-red-600\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                    <g>
                        <path d=\"M12 2C6.48 2 2 6.48 2 12c0 5.51 4.48 10 10 10 5.51 0 10-4.49 10-10 0-5.52-4.49-10-10-10Zm0 18c-4.42 0-8-3.59-8-8 0-4.42 3.58-8 8-8 4.41 0 8 3.58 8 8 0 4.41-3.59 8-8 8Z\"></path>
                        <path d=\"M13 7h-2v5.414l3.29 3.29 1.41-1.42 -2.71-2.71Z\"></path>
                    </g>
                </svg>
                <span>Mes listes</span> </a>

            <div class=\"mt-8 text-gray-400/70  font-medium uppercase\">Social</div>
            <a class=\" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold \" href=\"#\">
                <svg class=\"h-5 w-5 group-hover:fill-red-600\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                    <path d=\"M12 2v0C9.23 2 7 4.23 7 7c0 2.76 2.23 5 5 5 2.76 0 5-2.24 5-5v0c0-2.77-2.24-5-5-5Zm0 8v0c-1.66 0-3-1.35-3-3 0-1.66 1.34-3 3-3 1.65 0 3 1.34 3 3v0c0 1.65-1.35 3-3 3Zm9 11v-1 0c0-3.87-3.14-7-7-7h-4v0c-3.87 0-7 3.13-7 7v1h2v-1 0c0-2.77 2.23-5 5-5h4v0c2.76 0 5 2.23 5 5v1Z\"></path>
                </svg>
                <span>Mon profil</span> </a>
            <a class=\" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold \" href=\"#\">
                <svg class=\"h-5 w-5 group-hover:fill-red-600\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                    <g>
                        <path d=\"M12 2v0C6.47 2 2 6.47 2 12c0 5.52 4.47 10 10 10 5.52 0 10-4.48 10-10v-.001c0-5.53-4.48-10-10-10Zm0 18v0c-4.42 0-8-3.59-8-8 0-4.42 3.58-8 8-8 4.41 0 8 3.58 8 8v0c0 4.41-3.59 8-8 8Z\"></path>
                        <path d=\"M12 8v0c-2.21 0-4 1.79-4 4 0 2.2 1.79 4 4 4 2.2 0 4-1.8 4-4v0c0-2.21-1.8-4-4-4Zm0 6v0c-1.11 0-2-.9-2-2 0-1.11.89-2 2-2 1.1 0 2 .89 2 2v0c0 1.1-.9 2-2 2Z\"></path>
                    </g>
                </svg>
                <span>Mes abonnements</span> </a>

            <div class=\"mt-8 text-gray-400/70  font-medium uppercase\">General</div>

            <a class=\" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold \" href=\"#\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 group-hover:stroke-red-600\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z\"/>
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15 12a3 3 0 11-6 0 3 3 0 016 0z\"/>
                </svg>
                <span>Paramètres</span> </a>
            <a class=\" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold\" href=\"#\">
                <svg class=\"h-5 w-5 group-hover:fill-red-600\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                    <g>
                        <path d=\"M16 13v-2H7V8l-5 4 5 4v-3Z\"></path>
                        <path d=\"M20 3h-9c-1.11 0-2 .89-2 2v4h2V5h9v14h-9v-4H9v4c0 1.1.89 2 2 2h9c1.1 0 2-.9 2-2V5c0-1.11-.9-2-2-2Z\"></path>
                    </g>
                </svg>
                <span>Déconnexion</span> </a>

        </div><!-- /Menu -->

    </aside><!-- /Left Sidebar -->
    <main class=\"flex-1\">
        <header class=\" font-bold text-lg flex items-center md:hidden\">
                <span class=\"mr-6\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-7 w-7 text-gray-700\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M4 6h16M4 12h16M4 18h7\"/>
                      </svg>
                </span>
            <svg class=\"h-8 w-8 fill-red-600 shrink-0\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                <path d=\"M10 15.5v-7c0-.41.47-.65.8-.4l4.67 3.5c.27.2.27.6 0 .8l-4.67 3.5c-.33.25-.8.01-.8-.4Zm11.96-4.45c.58 6.26-4.64 11.48-10.9 10.9 -4.43-.41-8.12-3.85-8.9-8.23 -.26-1.42-.19-2.78.12-4.04 .14-.58.76-.9 1.31-.7v0c.47.17.75.67.63 1.16 -.2.82-.27 1.7-.19 2.61 .37 4.04 3.89 7.25 7.95 7.26 4.79.01 8.61-4.21 7.94-9.12 -.51-3.7-3.66-6.62-7.39-6.86 -.83-.06-1.63.02-2.38.2 -.49.11-.99-.16-1.16-.64v0c-.2-.56.12-1.17.69-1.31 1.79-.43 3.75-.41 5.78.37 3.56 1.35 6.15 4.62 6.5 8.4ZM5.5 4C4.67 4 4 4.67 4 5.5 4 6.33 4.67 7 5.5 7 6.33 7 7 6.33 7 5.5 7 4.67 6.33 4 5.5 4Z\"></path>
            </svg>
            <div class=\"tracking-wideflex-1\">StrEEMI<span class=\"text-red-600\">.</span></div>
        </header>
        <section class=\"h-full relative\">
            <div style=\"background-image: url('https://blog.compose.fr/wp-content/uploads/2024/05/Marathon-Cinema.webp')\" class=\"bg-cover bg-no-repeat h-full before:bg-black/40 before:content-[''] before:top-0 before:left-0 before:right-0 before:absolute before:w-full before:h-full\">
                <div class=\"p-8 lg:w-1/2 mx-auto h-full flex items-center justify-center\">
                    <div class=\"bg-white rounded-lg p-8 relative w-full\">
                        <h1 class=\"text-center text-lg font-bold\">Se connecter avec</h1>
                        <div class=\"flex items-center justify-center space-x-4 mt-10\">
                            <button class=\"max-w-xs font-bold shadow-sm rounded-lg py-3 px-6 bg-gray-100 hover:opacity-90 hover:scale-105 text-gray-800 flex items-center justify-center transition-all duration-300 ease-in-out focus:outline-none hover:shadow focus:shadow-sm focus:shadow-outline\">
                                <svg class=\"h-7 mr-3 fill-red-600\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>netflix</title><path d=\"M6.5,2H10.5L13.44,10.83L13.5,2H17.5V22C16.25,21.78 14.87,21.64 13.41,21.58L10.5,13L10.43,21.59C9.03,21.65 7.7,21.79 6.5,22V2Z\" /></svg>
                                Netflix
                            </button>
                            <button class=\"max-w-xs font-bold shadow-sm rounded-lg py-3 px-6 bg-gray-100 hover:opacity-90 hover:scale-105 text-gray-800 flex items-center justify-center transition-all duration-300 ease-in-out focus:outline-none hover:shadow focus:shadow-sm focus:shadow-outline\">
                                <svg class=\"h-7 mr-3\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 48 48\">
                                    <path fill=\"#29b6f6\" d=\"M31.473,14.813c0.273-0.163,0.556-0.339,0.852-0.492c0.765-0.392,1.616-0.59,2.481-0.547\tc0.623,0.034,1.192,0.208,1.628,0.666c0.416,0.426,0.568,0.95,0.613,1.518c0.011,0.121,0.011,0.24,0.011,0.371v5.658\tc0,0.492-0.066,0.556-0.556,0.556H35.17c-0.087,0-0.174,0-0.263-0.011c-0.13-0.011-0.24-0.121-0.263-0.25\tc-0.023-0.121-0.023-0.24-0.023-0.36v-5.059c0.011-0.208-0.011-0.403-0.066-0.6c-0.087-0.339-0.392-0.579-0.742-0.6\tc-0.645-0.043-1.289,0.087-1.879,0.361c-0.087,0.023-0.142,0.11-0.13,0.197v5.747c0,0.11,0,0.208-0.023,0.316\tc0,0.153-0.121,0.263-0.273,0.263l0,0c-0.163,0.011-0.327,0.011-0.503,0.011h-1.158c-0.403,0-0.492-0.099-0.492-0.503v-5.168\tc0-0.186-0.011-0.384-0.053-0.568c-0.076-0.371-0.392-0.634-0.765-0.655c-0.655-0.043-1.321,0.087-1.913,0.371\tc-0.087,0.023-0.142,0.121-0.121,0.208v5.823c0,0.403-0.087,0.492-0.492,0.492h-1.465c-0.384,0-0.479-0.11-0.479-0.479v-7.583\tc0-0.087,0.011-0.174,0.034-0.263c0.043-0.13,0.174-0.208,0.305-0.208h1.366c0.197,0,0.316,0.121,0.384,0.305\tc0.053,0.153,0.087,0.297,0.142,0.46c0.11,0,0.174-0.076,0.25-0.121c0.6-0.371,1.234-0.689,1.945-0.819\tc0.547-0.11,1.092-0.11,1.639,0c0.513,0.11,0.973,0.416,1.268,0.852c0.023,0.034,0.043,0.053,0.066,0.076\tC31.452,14.79,31.462,14.79,31.473,14.813z M15.327,15.229c0.076-0.023,0.142-0.066,0.186-0.13c0.197-0.197,0.403-0.384,0.623-0.556\tc0.568-0.437,1.279-0.655,1.989-0.6c0.284,0.011,0.384,0.099,0.403,0.371c0.023,0.371,0.011,0.753,0.011,1.126\tc0.011,0.153,0,0.297-0.023,0.448c-0.043,0.197-0.121,0.273-0.316,0.297c-0.153,0.011-0.297,0-0.448-0.011\tc-0.732-0.066-1.442,0.076-2.131,0.305c-0.153,0.053-0.153,0.163-0.153,0.284v5.241c0,0.099,0,0.186-0.011,0.284\tc-0.011,0.142-0.121,0.25-0.263,0.25c-0.076,0.011-0.163,0.011-0.24,0.011h-1.421c-0.076,0-0.163,0-0.24-0.011\tc-0.142-0.011-0.25-0.13-0.263-0.273c-0.011-0.087-0.011-0.174-0.011-0.263v-7.43c0-0.503,0.053-0.556,0.556-0.556h1.05\tc0.284,0,0.416,0.099,0.492,0.371C15.195,14.66,15.261,14.934,15.327,15.229z M19.587,18.265v-3.878\tc0.011-0.263,0.11-0.361,0.371-0.371c0.568-0.011,1.137-0.011,1.705,0c0.25,0,0.327,0.076,0.35,0.327\tc0.011,0.099,0.011,0.186,0.011,0.284v7.276c0,0.121-0.011,0.24-0.023,0.36c-0.011,0.142-0.121,0.24-0.263,0.25\tc-0.066,0.011-0.121,0.011-0.186,0.011h-1.518c-0.053,0-0.099,0-0.153-0.011c-0.153-0.011-0.284-0.13-0.297-0.284\tc-0.011-0.087-0.011-0.174-0.011-0.263C19.587,20.755,19.587,19.51,19.587,18.265z M20.855,10.104\tc0.174-0.011,0.35,0.023,0.513,0.076c0.59,0.197,0.895,0.71,0.842,1.376c-0.043,0.568-0.469,1.026-1.039,1.115\tc-0.24,0.043-0.492,0.043-0.732,0c-0.623-0.121-1.081-0.579-1.039-1.366C19.466,10.53,19.98,10.104,20.855,10.104z M11.404,17.37\tc-0.043-0.568-0.197-1.126-0.426-1.639c-0.448-0.939-1.137-1.628-2.184-1.868c-1.202-0.263-2.284,0-3.268,0.732\tc-0.066,0.066-0.142,0.121-0.229,0.163c-0.023-0.011-0.043-0.023-0.043-0.034c-0.034-0.11-0.053-0.218-0.087-0.327\tc-0.087-0.273-0.197-0.371-0.492-0.371c-0.327,0-0.666,0.011-0.994,0c-0.25-0.011-0.479,0.023-0.655,0.218\tc0,3.823,0,7.659,0.011,11.47c0.142,0.229,0.36,0.273,0.613,0.263c0.392-0.011,0.787,0,1.179,0c0.689,0,0.689,0,0.689-0.677v-3.113\tc0-0.076-0.034-0.163,0.043-0.229c0.547,0.426,1.213,0.689,1.902,0.753c0.963,0.099,1.834-0.142,2.568-0.797\tc0.536-0.492,0.929-1.126,1.137-1.826C11.461,19.194,11.48,18.287,11.404,17.37z M8.793,19.631c-0.076,0.339-0.25,0.645-0.503,0.874\tc-0.284,0.24-0.634,0.384-1.005,0.384c-0.556,0.034-1.103-0.087-1.595-0.35c-0.121-0.053-0.197-0.174-0.186-0.305v-1.978\tc0-0.655,0.011-1.312,0-1.966c-0.011-0.153,0.076-0.284,0.218-0.339c0.6-0.284,1.224-0.416,1.879-0.284\tc0.46,0.066,0.852,0.361,1.039,0.787c0.163,0.35,0.263,0.732,0.284,1.115C8.991,18.265,8.991,18.965,8.793,19.631z M41.045,18.976\tc0.819,0.153,1.66,0.163,2.481,0.034c0.479-0.066,0.939-0.208,1.366-0.437c0.492-0.284,0.852-0.677,1.005-1.224\tc0.384-1.376-0.208-2.765-1.639-3.276c-0.7-0.229-1.442-0.305-2.174-0.208c-1.726,0.197-2.85,1.147-3.363,2.797\tc-0.36,1.126-0.316,2.271-0.023,3.408c0.384,1.453,1.344,2.316,2.797,2.621c0.829,0.186,1.671,0.153,2.502,0.023\tc0.437-0.076,0.874-0.186,1.289-0.35c0.25-0.099,0.384-0.25,0.371-0.536c-0.011-0.263,0-0.536,0-0.808\tc0-0.327-0.13-0.426-0.448-0.35c-0.318,0.076-0.623,0.142-0.939,0.208c-0.677,0.142-1.376,0.142-2.055,0.023\tc-0.929-0.186-1.529-0.982-1.476-1.966C40.837,18.944,40.945,18.953,41.045,18.976z M40.771,17.305\tc0.034-0.263,0.11-0.513,0.208-0.753c0.327-0.797,1.016-1.071,1.715-1.026c0.197,0.011,0.392,0.053,0.579,0.13\tc0.284,0.121,0.469,0.384,0.503,0.689c0.034,0.186,0.023,0.384-0.034,0.568c-0.13,0.392-0.448,0.556-0.829,0.634\tc-0.229,0.053-0.469,0.076-0.71,0.053c-0.426,0-0.863-0.034-1.289-0.099C40.748,17.479,40.748,17.479,40.771,17.305z\"></path><path fill=\"#29b6f6\" d=\"M25.127,38.063c-0.414-0.011-0.83-0.011-1.242,0c-0.57-0.03-1.14-0.052-1.71-0.093\tc-1.513-0.115-3.017-0.342-4.487-0.685c-5.09-1.181-9.557-3.555-13.455-7.006c-0.364-0.323-0.705-0.653-1.058-0.986\tc-0.082-0.074-0.156-0.177-0.197-0.28c-0.063-0.145-0.03-0.301,0.074-0.414c0.104-0.113,0.271-0.156,0.414-0.093\tc0.093,0.041,0.186,0.082,0.271,0.134c3.722,2.302,7.784,3.98,12.044,4.975c1.431,0.332,2.87,0.59,4.322,0.778\tc2.083,0.26,4.186,0.353,6.28,0.28c1.129-0.03,2.25-0.134,3.369-0.28c2.612-0.332,5.194-0.923,7.691-1.752\tc1.316-0.434,2.601-0.934,3.856-1.513c0.186-0.104,0.414-0.134,0.622-0.082c0.342,0.082,0.549,0.434,0.466,0.778\tc-0.011,0.041-0.03,0.093-0.052,0.134c-0.082,0.156-0.197,0.29-0.342,0.393c-1.192,0.934-2.478,1.752-3.835,2.436\tc-2.56,1.294-5.298,2.218-8.116,2.747C28.414,37.824,26.777,38,25.127,38.063z M42.946,27.957c0.685,0.022,1.357,0.063,2.02,0.238\tc0.186,0.052,0.364,0.115,0.538,0.197c0.238,0.093,0.393,0.323,0.425,0.57c0.041,0.29,0.052,0.59,0.03,0.891\tc-0.134,1.773-0.685,3.482-1.597,5.006c-0.332,0.549-0.735,1.047-1.201,1.483c-0.093,0.093-0.208,0.167-0.332,0.208\tc-0.197,0.052-0.323-0.052-0.332-0.249c0.011-0.104,0.03-0.208,0.074-0.312c0.364-0.975,0.715-1.938,0.995-2.944\tc0.167-0.549,0.28-1.108,0.353-1.68c0.022-0.208,0.03-0.414,0.011-0.622c-0.011-0.353-0.238-0.653-0.581-0.757\tc-0.323-0.104-0.653-0.167-0.995-0.186c-0.954-0.041-1.906,0-2.851,0.125l-1.253,0.156c-0.134,0.011-0.26,0-0.332-0.125\tc-0.074-0.125-0.041-0.249,0.03-0.373c0.082-0.115,0.186-0.219,0.312-0.29c0.767-0.549,1.628-0.882,2.54-1.099\tC41.505,28.048,42.22,27.978,42.946,27.957z\"></path>
                                </svg>
                                Prime
                            </button>
                        </div>
                        <p class=\"text-center text-sm font-medium mt-10\"> Ou connectez-vous avec vos identifiants </p>
                        <form class=\"mt-10\">
                            <div class=\"relative\">
                                <input class=\"w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white\" id=\"username\" type=\"text\" placeholder=\"Adresse Email\"/>
                            </div>
                            <div class=\"relative mt-3\">
                                <input class=\"w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white\" id=\"password\" type=\"password\" placeholder=\"Mot de passe\"/>
                                <button class=\"absolute right-2 inset-y-0 flex items-center px-2 opacity-50 hover:opacity-100 transition\">
                                    <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>eye</title><path d=\"M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z\" /></svg>
                                </button>
                            </div>
                            <div class=\"flex items-center justify-center mt-8\">
                                <button class=\"relative flex w-full bg-red-600 flex-row p-3 items-center justify-center rounded-lg overflow-hidden border cursor-pointer transition text-white hover:opacity-90 hover:scale-105\">
                                    <svg class=\"h-5 w-5 fill-current mr-2\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>login</title><path d=\"M11 7L9.6 8.4L12.2 11H2V13H12.2L9.6 15.6L11 17L16 12L11 7M20 19H12V21H20C21.1 21 22 20.1 22 19V5C22 3.9 21.1 3 20 3H12V5H20V19Z\" /></svg>
                                    Se connecter
                                </button>
                            </div>

                            <div class=\"flex items-center justify-center mt-16\">
                                <a class=\"text-red-600 cursor-pointer transition hover:text-red-700 hover:scale-105\">
                                    Vous avez oubliez votre mot de passe ?
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

</body>

</html>
", "login.html.twig", "/Users/alexis/Documents/EEMI-cours/Master1/Framework Symfony/streemi-tp-symfony/streemi-project/templates/login.html.twig");
    }
}

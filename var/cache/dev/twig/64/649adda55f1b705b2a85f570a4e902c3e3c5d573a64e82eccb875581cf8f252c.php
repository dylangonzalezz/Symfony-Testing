<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6c775e4c4ccdb3af11f3aa2031a382d5c0ed87f26f326c1f292fdbc62fcd4060 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01d57c7ebf28c20b8f5a350cf5939e572cadc7e791a2079d7d60a64ac7b2f8a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01d57c7ebf28c20b8f5a350cf5939e572cadc7e791a2079d7d60a64ac7b2f8a7->enter($__internal_01d57c7ebf28c20b8f5a350cf5939e572cadc7e791a2079d7d60a64ac7b2f8a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_4a4e09538c4a197a9fbbccec49cadc4d9fdae1b7653b46988553103fdef17cac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a4e09538c4a197a9fbbccec49cadc4d9fdae1b7653b46988553103fdef17cac->enter($__internal_4a4e09538c4a197a9fbbccec49cadc4d9fdae1b7653b46988553103fdef17cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01d57c7ebf28c20b8f5a350cf5939e572cadc7e791a2079d7d60a64ac7b2f8a7->leave($__internal_01d57c7ebf28c20b8f5a350cf5939e572cadc7e791a2079d7d60a64ac7b2f8a7_prof);

        
        $__internal_4a4e09538c4a197a9fbbccec49cadc4d9fdae1b7653b46988553103fdef17cac->leave($__internal_4a4e09538c4a197a9fbbccec49cadc4d9fdae1b7653b46988553103fdef17cac_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_453a6b24bd9152273281157c970fbce74a538e10e7f2b701c3c0be62c4629490 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_453a6b24bd9152273281157c970fbce74a538e10e7f2b701c3c0be62c4629490->enter($__internal_453a6b24bd9152273281157c970fbce74a538e10e7f2b701c3c0be62c4629490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1db546ad9f42b47028ee041510679d9ed1fbd544eb2a6a4662b0667d8bb49bfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1db546ad9f42b47028ee041510679d9ed1fbd544eb2a6a4662b0667d8bb49bfb->enter($__internal_1db546ad9f42b47028ee041510679d9ed1fbd544eb2a6a4662b0667d8bb49bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1db546ad9f42b47028ee041510679d9ed1fbd544eb2a6a4662b0667d8bb49bfb->leave($__internal_1db546ad9f42b47028ee041510679d9ed1fbd544eb2a6a4662b0667d8bb49bfb_prof);

        
        $__internal_453a6b24bd9152273281157c970fbce74a538e10e7f2b701c3c0be62c4629490->leave($__internal_453a6b24bd9152273281157c970fbce74a538e10e7f2b701c3c0be62c4629490_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7f902a82325308fac2c79ec53ab9c9c0d51275d21eb6db4d7935807ab31daf0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f902a82325308fac2c79ec53ab9c9c0d51275d21eb6db4d7935807ab31daf0c->enter($__internal_7f902a82325308fac2c79ec53ab9c9c0d51275d21eb6db4d7935807ab31daf0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f1fe3a0d3007cef89e261d0fb8c0a672ccb082f2dee6d06d29e08f6ae930a522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1fe3a0d3007cef89e261d0fb8c0a672ccb082f2dee6d06d29e08f6ae930a522->enter($__internal_f1fe3a0d3007cef89e261d0fb8c0a672ccb082f2dee6d06d29e08f6ae930a522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f1fe3a0d3007cef89e261d0fb8c0a672ccb082f2dee6d06d29e08f6ae930a522->leave($__internal_f1fe3a0d3007cef89e261d0fb8c0a672ccb082f2dee6d06d29e08f6ae930a522_prof);

        
        $__internal_7f902a82325308fac2c79ec53ab9c9c0d51275d21eb6db4d7935807ab31daf0c->leave($__internal_7f902a82325308fac2c79ec53ab9c9c0d51275d21eb6db4d7935807ab31daf0c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_590b2fd2103e0a36edf29d9173681b50d90976096036d61173af33ea34ee5c31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_590b2fd2103e0a36edf29d9173681b50d90976096036d61173af33ea34ee5c31->enter($__internal_590b2fd2103e0a36edf29d9173681b50d90976096036d61173af33ea34ee5c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1911b9dfcb79819ec701b727a2f61f7d661d40be820532afaefd389208dfaba7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1911b9dfcb79819ec701b727a2f61f7d661d40be820532afaefd389208dfaba7->enter($__internal_1911b9dfcb79819ec701b727a2f61f7d661d40be820532afaefd389208dfaba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1911b9dfcb79819ec701b727a2f61f7d661d40be820532afaefd389208dfaba7->leave($__internal_1911b9dfcb79819ec701b727a2f61f7d661d40be820532afaefd389208dfaba7_prof);

        
        $__internal_590b2fd2103e0a36edf29d9173681b50d90976096036d61173af33ea34ee5c31->leave($__internal_590b2fd2103e0a36edf29d9173681b50d90976096036d61173af33ea34ee5c31_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/dylangonzalez/Documents/Learning/Symfony/projects/Test/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_4e3271903e33ece75271e854a17246dc43a169ac90a69a863843468c5ada6dd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_7acd12d3bc765769f50c0fec4de57de7750535ff73bc8acbfc19283223fdc78b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7acd12d3bc765769f50c0fec4de57de7750535ff73bc8acbfc19283223fdc78b->enter($__internal_7acd12d3bc765769f50c0fec4de57de7750535ff73bc8acbfc19283223fdc78b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_8ab9cc6e7b23f6ba0eb8c293dd78215a39a75c0f2f3a79f5c94f24ce9b6e9fde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ab9cc6e7b23f6ba0eb8c293dd78215a39a75c0f2f3a79f5c94f24ce9b6e9fde->enter($__internal_8ab9cc6e7b23f6ba0eb8c293dd78215a39a75c0f2f3a79f5c94f24ce9b6e9fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7acd12d3bc765769f50c0fec4de57de7750535ff73bc8acbfc19283223fdc78b->leave($__internal_7acd12d3bc765769f50c0fec4de57de7750535ff73bc8acbfc19283223fdc78b_prof);

        
        $__internal_8ab9cc6e7b23f6ba0eb8c293dd78215a39a75c0f2f3a79f5c94f24ce9b6e9fde->leave($__internal_8ab9cc6e7b23f6ba0eb8c293dd78215a39a75c0f2f3a79f5c94f24ce9b6e9fde_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0a6d0b34da0cb918e085935c5063465754da473a2c9dee0df43d72403f24c2a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a6d0b34da0cb918e085935c5063465754da473a2c9dee0df43d72403f24c2a3->enter($__internal_0a6d0b34da0cb918e085935c5063465754da473a2c9dee0df43d72403f24c2a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_78d5902d9db8e764bcd71bd4dfbdcb3c296c6a9ca9bc06a24791f9243222c08f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78d5902d9db8e764bcd71bd4dfbdcb3c296c6a9ca9bc06a24791f9243222c08f->enter($__internal_78d5902d9db8e764bcd71bd4dfbdcb3c296c6a9ca9bc06a24791f9243222c08f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_78d5902d9db8e764bcd71bd4dfbdcb3c296c6a9ca9bc06a24791f9243222c08f->leave($__internal_78d5902d9db8e764bcd71bd4dfbdcb3c296c6a9ca9bc06a24791f9243222c08f_prof);

        
        $__internal_0a6d0b34da0cb918e085935c5063465754da473a2c9dee0df43d72403f24c2a3->leave($__internal_0a6d0b34da0cb918e085935c5063465754da473a2c9dee0df43d72403f24c2a3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ff0d55d4f27ca79aed5fee859c3717bbfa0c7d224ccf8d6290b2f498ee29bf05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff0d55d4f27ca79aed5fee859c3717bbfa0c7d224ccf8d6290b2f498ee29bf05->enter($__internal_ff0d55d4f27ca79aed5fee859c3717bbfa0c7d224ccf8d6290b2f498ee29bf05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2019bb1a60b4eab1ed357479db9b5c1666cd52cc2e52437c95f631407df7a874 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2019bb1a60b4eab1ed357479db9b5c1666cd52cc2e52437c95f631407df7a874->enter($__internal_2019bb1a60b4eab1ed357479db9b5c1666cd52cc2e52437c95f631407df7a874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_2019bb1a60b4eab1ed357479db9b5c1666cd52cc2e52437c95f631407df7a874->leave($__internal_2019bb1a60b4eab1ed357479db9b5c1666cd52cc2e52437c95f631407df7a874_prof);

        
        $__internal_ff0d55d4f27ca79aed5fee859c3717bbfa0c7d224ccf8d6290b2f498ee29bf05->leave($__internal_ff0d55d4f27ca79aed5fee859c3717bbfa0c7d224ccf8d6290b2f498ee29bf05_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5aac34aff8730279d3d68dc25cd5f52a4c18a8a08a9bd57a758faf598dd59fd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aac34aff8730279d3d68dc25cd5f52a4c18a8a08a9bd57a758faf598dd59fd5->enter($__internal_5aac34aff8730279d3d68dc25cd5f52a4c18a8a08a9bd57a758faf598dd59fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_999af29a442a8dcd034de19c3008e229368ab2ccf5c21fc01767bc61e0100282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_999af29a442a8dcd034de19c3008e229368ab2ccf5c21fc01767bc61e0100282->enter($__internal_999af29a442a8dcd034de19c3008e229368ab2ccf5c21fc01767bc61e0100282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_999af29a442a8dcd034de19c3008e229368ab2ccf5c21fc01767bc61e0100282->leave($__internal_999af29a442a8dcd034de19c3008e229368ab2ccf5c21fc01767bc61e0100282_prof);

        
        $__internal_5aac34aff8730279d3d68dc25cd5f52a4c18a8a08a9bd57a758faf598dd59fd5->leave($__internal_5aac34aff8730279d3d68dc25cd5f52a4c18a8a08a9bd57a758faf598dd59fd5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/dylangonzalez/Documents/Learning/Symfony/projects/Test/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}

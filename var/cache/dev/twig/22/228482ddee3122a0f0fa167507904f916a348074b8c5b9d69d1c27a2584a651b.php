<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_7f9ef577faef357a172e6ba4d7892a15a1e56f5fd91733d4526b6a90faecf3a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_abc7aa6eb66d3734764f60b85cf791af5264f2dcaaa02fd9476a51e675ffd6d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abc7aa6eb66d3734764f60b85cf791af5264f2dcaaa02fd9476a51e675ffd6d9->enter($__internal_abc7aa6eb66d3734764f60b85cf791af5264f2dcaaa02fd9476a51e675ffd6d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_65e89f7eeb53c167528d94d5f427b52a20de08d71126f55fe76e75f66024c245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65e89f7eeb53c167528d94d5f427b52a20de08d71126f55fe76e75f66024c245->enter($__internal_65e89f7eeb53c167528d94d5f427b52a20de08d71126f55fe76e75f66024c245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abc7aa6eb66d3734764f60b85cf791af5264f2dcaaa02fd9476a51e675ffd6d9->leave($__internal_abc7aa6eb66d3734764f60b85cf791af5264f2dcaaa02fd9476a51e675ffd6d9_prof);

        
        $__internal_65e89f7eeb53c167528d94d5f427b52a20de08d71126f55fe76e75f66024c245->leave($__internal_65e89f7eeb53c167528d94d5f427b52a20de08d71126f55fe76e75f66024c245_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f5dade09b8bd426589d98120fa56d9743bc179dcf26b29e6b7c7b302071d4107 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5dade09b8bd426589d98120fa56d9743bc179dcf26b29e6b7c7b302071d4107->enter($__internal_f5dade09b8bd426589d98120fa56d9743bc179dcf26b29e6b7c7b302071d4107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_397912372a17158f3cfd121e55b05e19103053780c725af55a5956eb6e844146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_397912372a17158f3cfd121e55b05e19103053780c725af55a5956eb6e844146->enter($__internal_397912372a17158f3cfd121e55b05e19103053780c725af55a5956eb6e844146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_397912372a17158f3cfd121e55b05e19103053780c725af55a5956eb6e844146->leave($__internal_397912372a17158f3cfd121e55b05e19103053780c725af55a5956eb6e844146_prof);

        
        $__internal_f5dade09b8bd426589d98120fa56d9743bc179dcf26b29e6b7c7b302071d4107->leave($__internal_f5dade09b8bd426589d98120fa56d9743bc179dcf26b29e6b7c7b302071d4107_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/dylangonzalez/Documents/Learning/Symfony/projects/Test/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}

<?php

/* default/index.html.twig */
class __TwigTemplate_c12f1c8e427dafa37c304deaf8933f5490e0b276f70ac2796157b4e87ca63c80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_92001251146b66a0e67db2860b696331b7aea10be8890576fd948a2b70c59d28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92001251146b66a0e67db2860b696331b7aea10be8890576fd948a2b70c59d28->enter($__internal_92001251146b66a0e67db2860b696331b7aea10be8890576fd948a2b70c59d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_0eb4ada245ad82466801abc9ada9136df3d8825e6ebd4898bd2548eec6e67cf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eb4ada245ad82466801abc9ada9136df3d8825e6ebd4898bd2548eec6e67cf9->enter($__internal_0eb4ada245ad82466801abc9ada9136df3d8825e6ebd4898bd2548eec6e67cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92001251146b66a0e67db2860b696331b7aea10be8890576fd948a2b70c59d28->leave($__internal_92001251146b66a0e67db2860b696331b7aea10be8890576fd948a2b70c59d28_prof);

        
        $__internal_0eb4ada245ad82466801abc9ada9136df3d8825e6ebd4898bd2548eec6e67cf9->leave($__internal_0eb4ada245ad82466801abc9ada9136df3d8825e6ebd4898bd2548eec6e67cf9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_042387091b47ae24300c221e9dffb2c2609514df2697ec49dae9b5a6ce9971a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_042387091b47ae24300c221e9dffb2c2609514df2697ec49dae9b5a6ce9971a8->enter($__internal_042387091b47ae24300c221e9dffb2c2609514df2697ec49dae9b5a6ce9971a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0bfde4b0280f363cea11b48f6c95f19a67a184989b0133bbfffabca6362fa75d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bfde4b0280f363cea11b48f6c95f19a67a184989b0133bbfffabca6362fa75d->enter($__internal_0bfde4b0280f363cea11b48f6c95f19a67a184989b0133bbfffabca6362fa75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   lolol
    ";
        // line 5
        echo twig_escape_filter($this->env, ($context["wot"] ?? $this->getContext($context, "wot")), "html", null, true);
        echo "
";
        
        $__internal_0bfde4b0280f363cea11b48f6c95f19a67a184989b0133bbfffabca6362fa75d->leave($__internal_0bfde4b0280f363cea11b48f6c95f19a67a184989b0133bbfffabca6362fa75d_prof);

        
        $__internal_042387091b47ae24300c221e9dffb2c2609514df2697ec49dae9b5a6ce9971a8->leave($__internal_042387091b47ae24300c221e9dffb2c2609514df2697ec49dae9b5a6ce9971a8_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_99e426fba6bb3bdf50d9c9bd3b80905ad64ed3f8ecc741cbfd0ff5afba1f6e46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99e426fba6bb3bdf50d9c9bd3b80905ad64ed3f8ecc741cbfd0ff5afba1f6e46->enter($__internal_99e426fba6bb3bdf50d9c9bd3b80905ad64ed3f8ecc741cbfd0ff5afba1f6e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_731970580f2f306c8ce573f1baf3fab866189a0132b24f339e7b052bd6c8e322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_731970580f2f306c8ce573f1baf3fab866189a0132b24f339e7b052bd6c8e322->enter($__internal_731970580f2f306c8ce573f1baf3fab866189a0132b24f339e7b052bd6c8e322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "
";
        
        $__internal_731970580f2f306c8ce573f1baf3fab866189a0132b24f339e7b052bd6c8e322->leave($__internal_731970580f2f306c8ce573f1baf3fab866189a0132b24f339e7b052bd6c8e322_prof);

        
        $__internal_99e426fba6bb3bdf50d9c9bd3b80905ad64ed3f8ecc741cbfd0ff5afba1f6e46->leave($__internal_99e426fba6bb3bdf50d9c9bd3b80905ad64ed3f8ecc741cbfd0ff5afba1f6e46_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 9,  65 => 8,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
   lolol
    {{ wot }}
{% endblock %}

{% block stylesheets %}

{% endblock %}
", "default/index.html.twig", "/Users/dylangonzalez/Documents/Learning/Symfony/projects/Test/app/Resources/views/default/index.html.twig");
    }
}

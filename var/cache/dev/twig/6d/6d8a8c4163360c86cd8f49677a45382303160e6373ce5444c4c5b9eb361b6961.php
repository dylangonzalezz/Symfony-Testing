<?php

/* base.html.twig */
class __TwigTemplate_ef6a598e82a5011af52d5b328f0cd2f8830bea5f4c88506ad9e23671aec9697a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3976d15fb92a7678ba3ab923cb679cf5f8e3f07117c98353ad2aa44a115ddf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3976d15fb92a7678ba3ab923cb679cf5f8e3f07117c98353ad2aa44a115ddf2->enter($__internal_f3976d15fb92a7678ba3ab923cb679cf5f8e3f07117c98353ad2aa44a115ddf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_64630a8d578b1c86c2a1a79a89dae15f4374e7334fd398181c0ce8d1c83fbc32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64630a8d578b1c86c2a1a79a89dae15f4374e7334fd398181c0ce8d1c83fbc32->enter($__internal_64630a8d578b1c86c2a1a79a89dae15f4374e7334fd398181c0ce8d1c83fbc32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_f3976d15fb92a7678ba3ab923cb679cf5f8e3f07117c98353ad2aa44a115ddf2->leave($__internal_f3976d15fb92a7678ba3ab923cb679cf5f8e3f07117c98353ad2aa44a115ddf2_prof);

        
        $__internal_64630a8d578b1c86c2a1a79a89dae15f4374e7334fd398181c0ce8d1c83fbc32->leave($__internal_64630a8d578b1c86c2a1a79a89dae15f4374e7334fd398181c0ce8d1c83fbc32_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_da789fbb9bc9536e5b2a0b05e8cfb5da9161420e598de7a2b2feb61d63a9147d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da789fbb9bc9536e5b2a0b05e8cfb5da9161420e598de7a2b2feb61d63a9147d->enter($__internal_da789fbb9bc9536e5b2a0b05e8cfb5da9161420e598de7a2b2feb61d63a9147d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ddf4b751cda0dc56d0595192b464b8436b996c9c19352d9966f7f941e1d3bc6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddf4b751cda0dc56d0595192b464b8436b996c9c19352d9966f7f941e1d3bc6b->enter($__internal_ddf4b751cda0dc56d0595192b464b8436b996c9c19352d9966f7f941e1d3bc6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ddf4b751cda0dc56d0595192b464b8436b996c9c19352d9966f7f941e1d3bc6b->leave($__internal_ddf4b751cda0dc56d0595192b464b8436b996c9c19352d9966f7f941e1d3bc6b_prof);

        
        $__internal_da789fbb9bc9536e5b2a0b05e8cfb5da9161420e598de7a2b2feb61d63a9147d->leave($__internal_da789fbb9bc9536e5b2a0b05e8cfb5da9161420e598de7a2b2feb61d63a9147d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fece0b5d2fe56c410428c191b6fda8a33e53312581b435ef59c8eae9ad371fcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fece0b5d2fe56c410428c191b6fda8a33e53312581b435ef59c8eae9ad371fcb->enter($__internal_fece0b5d2fe56c410428c191b6fda8a33e53312581b435ef59c8eae9ad371fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c6fbaeed1bd1d51cac6a1e92c88a80d5cde6cc0451b48be0130e0d5da604675f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6fbaeed1bd1d51cac6a1e92c88a80d5cde6cc0451b48be0130e0d5da604675f->enter($__internal_c6fbaeed1bd1d51cac6a1e92c88a80d5cde6cc0451b48be0130e0d5da604675f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c6fbaeed1bd1d51cac6a1e92c88a80d5cde6cc0451b48be0130e0d5da604675f->leave($__internal_c6fbaeed1bd1d51cac6a1e92c88a80d5cde6cc0451b48be0130e0d5da604675f_prof);

        
        $__internal_fece0b5d2fe56c410428c191b6fda8a33e53312581b435ef59c8eae9ad371fcb->leave($__internal_fece0b5d2fe56c410428c191b6fda8a33e53312581b435ef59c8eae9ad371fcb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e45a030e4c4f9b7438a663756e10b98092a95f2ede7f73e58289ee2ca8027699 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e45a030e4c4f9b7438a663756e10b98092a95f2ede7f73e58289ee2ca8027699->enter($__internal_e45a030e4c4f9b7438a663756e10b98092a95f2ede7f73e58289ee2ca8027699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c09c00baf1e1ecccd9f861ebc23ed4578597d4c386409ec9ec604535afdeba00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c09c00baf1e1ecccd9f861ebc23ed4578597d4c386409ec9ec604535afdeba00->enter($__internal_c09c00baf1e1ecccd9f861ebc23ed4578597d4c386409ec9ec604535afdeba00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c09c00baf1e1ecccd9f861ebc23ed4578597d4c386409ec9ec604535afdeba00->leave($__internal_c09c00baf1e1ecccd9f861ebc23ed4578597d4c386409ec9ec604535afdeba00_prof);

        
        $__internal_e45a030e4c4f9b7438a663756e10b98092a95f2ede7f73e58289ee2ca8027699->leave($__internal_e45a030e4c4f9b7438a663756e10b98092a95f2ede7f73e58289ee2ca8027699_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7e5df6e4a5f58a44e11413a85f80b76c4bf902cfe7f64a262f58a2ab17faad9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e5df6e4a5f58a44e11413a85f80b76c4bf902cfe7f64a262f58a2ab17faad9f->enter($__internal_7e5df6e4a5f58a44e11413a85f80b76c4bf902cfe7f64a262f58a2ab17faad9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f3db367c9be41477f4a5c05454fc1d58a3044cdbd20d697ef09dfbac83138d1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3db367c9be41477f4a5c05454fc1d58a3044cdbd20d697ef09dfbac83138d1e->enter($__internal_f3db367c9be41477f4a5c05454fc1d58a3044cdbd20d697ef09dfbac83138d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f3db367c9be41477f4a5c05454fc1d58a3044cdbd20d697ef09dfbac83138d1e->leave($__internal_f3db367c9be41477f4a5c05454fc1d58a3044cdbd20d697ef09dfbac83138d1e_prof);

        
        $__internal_7e5df6e4a5f58a44e11413a85f80b76c4bf902cfe7f64a262f58a2ab17faad9f->leave($__internal_7e5df6e4a5f58a44e11413a85f80b76c4bf902cfe7f64a262f58a2ab17faad9f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/dylangonzalez/Documents/Learning/Symfony/projects/Test/app/Resources/views/base.html.twig");
    }
}

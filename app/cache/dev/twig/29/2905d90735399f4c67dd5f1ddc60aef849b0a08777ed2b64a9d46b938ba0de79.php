<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_280c0cc66852fdf913aa566c269f0cac0e4dc84b7489d2640f0e322cfe87a667 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_68028d786a081ed3fe21a85b525e302dc01f451d987a2b2f0464636dd654be92 = $this->env->getExtension("native_profiler");
        $__internal_68028d786a081ed3fe21a85b525e302dc01f451d987a2b2f0464636dd654be92->enter($__internal_68028d786a081ed3fe21a85b525e302dc01f451d987a2b2f0464636dd654be92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68028d786a081ed3fe21a85b525e302dc01f451d987a2b2f0464636dd654be92->leave($__internal_68028d786a081ed3fe21a85b525e302dc01f451d987a2b2f0464636dd654be92_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_744a1d74e113c7e859f4838eb00ede4f4d8fbba28559bf853290c365cf6b1c25 = $this->env->getExtension("native_profiler");
        $__internal_744a1d74e113c7e859f4838eb00ede4f4d8fbba28559bf853290c365cf6b1c25->enter($__internal_744a1d74e113c7e859f4838eb00ede4f4d8fbba28559bf853290c365cf6b1c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_744a1d74e113c7e859f4838eb00ede4f4d8fbba28559bf853290c365cf6b1c25->leave($__internal_744a1d74e113c7e859f4838eb00ede4f4d8fbba28559bf853290c365cf6b1c25_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */

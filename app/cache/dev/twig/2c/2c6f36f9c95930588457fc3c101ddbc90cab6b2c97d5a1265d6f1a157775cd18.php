<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_0feaf182d9213fe24af157924a6925b7899f0efb6572480ac58f9364a8741766 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_776af5f9872e0aa4bbebcc0655f74970c87dbbb499d0b5ddb4a2e3b20ed9274e = $this->env->getExtension("native_profiler");
        $__internal_776af5f9872e0aa4bbebcc0655f74970c87dbbb499d0b5ddb4a2e3b20ed9274e->enter($__internal_776af5f9872e0aa4bbebcc0655f74970c87dbbb499d0b5ddb4a2e3b20ed9274e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_776af5f9872e0aa4bbebcc0655f74970c87dbbb499d0b5ddb4a2e3b20ed9274e->leave($__internal_776af5f9872e0aa4bbebcc0655f74970c87dbbb499d0b5ddb4a2e3b20ed9274e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e6805f36c4f04288e61d4007bffadf65ca827fbb93f749a802bed70e9b78dfa8 = $this->env->getExtension("native_profiler");
        $__internal_e6805f36c4f04288e61d4007bffadf65ca827fbb93f749a802bed70e9b78dfa8->enter($__internal_e6805f36c4f04288e61d4007bffadf65ca827fbb93f749a802bed70e9b78dfa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_e6805f36c4f04288e61d4007bffadf65ca827fbb93f749a802bed70e9b78dfa8->leave($__internal_e6805f36c4f04288e61d4007bffadf65ca827fbb93f749a802bed70e9b78dfa8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

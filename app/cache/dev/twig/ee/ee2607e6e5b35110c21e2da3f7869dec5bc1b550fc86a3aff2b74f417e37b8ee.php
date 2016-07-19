<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b72f361cfcbc33a564e09ddc9af0df68fd05bf155672d98b137a0c22143597e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dee565cafcae374a6713d75352dd0181c44d604a5704514aca34eac2660a13dc = $this->env->getExtension("native_profiler");
        $__internal_dee565cafcae374a6713d75352dd0181c44d604a5704514aca34eac2660a13dc->enter($__internal_dee565cafcae374a6713d75352dd0181c44d604a5704514aca34eac2660a13dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dee565cafcae374a6713d75352dd0181c44d604a5704514aca34eac2660a13dc->leave($__internal_dee565cafcae374a6713d75352dd0181c44d604a5704514aca34eac2660a13dc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0898ddfaad1c1fe5f681be5237b408aadd1199b68949f9b8412750d6474f1587 = $this->env->getExtension("native_profiler");
        $__internal_0898ddfaad1c1fe5f681be5237b408aadd1199b68949f9b8412750d6474f1587->enter($__internal_0898ddfaad1c1fe5f681be5237b408aadd1199b68949f9b8412750d6474f1587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0898ddfaad1c1fe5f681be5237b408aadd1199b68949f9b8412750d6474f1587->leave($__internal_0898ddfaad1c1fe5f681be5237b408aadd1199b68949f9b8412750d6474f1587_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_492ba55329cce22131d99726d22278d632f24a64154aca781b2cdf9d1db61d7e = $this->env->getExtension("native_profiler");
        $__internal_492ba55329cce22131d99726d22278d632f24a64154aca781b2cdf9d1db61d7e->enter($__internal_492ba55329cce22131d99726d22278d632f24a64154aca781b2cdf9d1db61d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_492ba55329cce22131d99726d22278d632f24a64154aca781b2cdf9d1db61d7e->leave($__internal_492ba55329cce22131d99726d22278d632f24a64154aca781b2cdf9d1db61d7e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e846e60ffbd0edc976f9890ee9bf0eb95b82f42adb408f65eccffa979066457b = $this->env->getExtension("native_profiler");
        $__internal_e846e60ffbd0edc976f9890ee9bf0eb95b82f42adb408f65eccffa979066457b->enter($__internal_e846e60ffbd0edc976f9890ee9bf0eb95b82f42adb408f65eccffa979066457b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e846e60ffbd0edc976f9890ee9bf0eb95b82f42adb408f65eccffa979066457b->leave($__internal_e846e60ffbd0edc976f9890ee9bf0eb95b82f42adb408f65eccffa979066457b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */

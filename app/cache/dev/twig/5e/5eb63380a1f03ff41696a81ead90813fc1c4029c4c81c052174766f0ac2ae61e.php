<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_bef56821d34744dc7b6dcb32f5ae3029b01f8fbb2e8748e59136dbaa01853085 extends Twig_Template
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
        $__internal_589f4ee6bad21f5e6a81896324b5a61ef51171d295f12dcb8f7c0d68bc515c85 = $this->env->getExtension("native_profiler");
        $__internal_589f4ee6bad21f5e6a81896324b5a61ef51171d295f12dcb8f7c0d68bc515c85->enter($__internal_589f4ee6bad21f5e6a81896324b5a61ef51171d295f12dcb8f7c0d68bc515c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_589f4ee6bad21f5e6a81896324b5a61ef51171d295f12dcb8f7c0d68bc515c85->leave($__internal_589f4ee6bad21f5e6a81896324b5a61ef51171d295f12dcb8f7c0d68bc515c85_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6432a88c7d26e1bd0032fe45fd3e6606d58139a3826e4b324573ee83b6c58833 = $this->env->getExtension("native_profiler");
        $__internal_6432a88c7d26e1bd0032fe45fd3e6606d58139a3826e4b324573ee83b6c58833->enter($__internal_6432a88c7d26e1bd0032fe45fd3e6606d58139a3826e4b324573ee83b6c58833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6432a88c7d26e1bd0032fe45fd3e6606d58139a3826e4b324573ee83b6c58833->leave($__internal_6432a88c7d26e1bd0032fe45fd3e6606d58139a3826e4b324573ee83b6c58833_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_00b9928d1e6346d0b424ccfd5cb4bfacc34da3cb6f55bb011cc3f21d44f80762 = $this->env->getExtension("native_profiler");
        $__internal_00b9928d1e6346d0b424ccfd5cb4bfacc34da3cb6f55bb011cc3f21d44f80762->enter($__internal_00b9928d1e6346d0b424ccfd5cb4bfacc34da3cb6f55bb011cc3f21d44f80762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_00b9928d1e6346d0b424ccfd5cb4bfacc34da3cb6f55bb011cc3f21d44f80762->leave($__internal_00b9928d1e6346d0b424ccfd5cb4bfacc34da3cb6f55bb011cc3f21d44f80762_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_59a526fef079aabebb3ca054d9e98af08a0a6bd172e7eee8895ad5d9ffcd791b = $this->env->getExtension("native_profiler");
        $__internal_59a526fef079aabebb3ca054d9e98af08a0a6bd172e7eee8895ad5d9ffcd791b->enter($__internal_59a526fef079aabebb3ca054d9e98af08a0a6bd172e7eee8895ad5d9ffcd791b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_59a526fef079aabebb3ca054d9e98af08a0a6bd172e7eee8895ad5d9ffcd791b->leave($__internal_59a526fef079aabebb3ca054d9e98af08a0a6bd172e7eee8895ad5d9ffcd791b_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */

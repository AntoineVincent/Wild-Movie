<?php

/* CommentaireBundle:Default:comment.html.twig */
class __TwigTemplate_746d8d75812156877c86ec300900be1383411ceee4686db8fa4fb92a6207ac29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CommentaireBundle:Default:comment.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3606b30c1013063d6ee99ad23365cf90746e1d6b6f0e4f1f311719936c69a72d = $this->env->getExtension("native_profiler");
        $__internal_3606b30c1013063d6ee99ad23365cf90746e1d6b6f0e4f1f311719936c69a72d->enter($__internal_3606b30c1013063d6ee99ad23365cf90746e1d6b6f0e4f1f311719936c69a72d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommentaireBundle:Default:comment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3606b30c1013063d6ee99ad23365cf90746e1d6b6f0e4f1f311719936c69a72d->leave($__internal_3606b30c1013063d6ee99ad23365cf90746e1d6b6f0e4f1f311719936c69a72d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e24e19a01903f88076bdf0efd0b9f00cc05df4e1ecc2c2f9a4afa886741f41d = $this->env->getExtension("native_profiler");
        $__internal_9e24e19a01903f88076bdf0efd0b9f00cc05df4e1ecc2c2f9a4afa886741f41d->enter($__internal_9e24e19a01903f88076bdf0efd0b9f00cc05df4e1ecc2c2f9a4afa886741f41d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"col-md-3\"></div>
<div class=\"col-md-6 form-comment\">
\t<div class=\"col-md-12\">
\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array()));
        foreach ($context['_seq'] as $context["label"] => $context["flashes"]) {
            // line 9
            echo "\t    \t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 10
                echo "\t        \t<div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\">
\t            \t\t";
                // line 11
                echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
                echo "
\t        \t</div>
\t    \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t</div>
\t<div class=\"col-md-12 input-div\">
\t\t<h4 class=\"com-title-form\">Poster un Commentaire sur le film : ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "titre", array()), "html", null, true);
        echo "</h4>
\t</div>
\t<form action=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_com", array("id" => $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
\t\t<div class=\"col-md-12 input-div\">
\t\t\t<div class=\"col-md-5\">
\t\t\t\t<label class=\"comment-label\" for=\"date\">Date:</label>
\t\t\t</div> 
\t\t\t<div class=\"col-md-7\">
\t\t\t\t<p>";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "</p>
\t\t\t\t<input type=\"hidden\" name=\"date\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "\"/>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-12 input-div\">
\t\t\t<div class=\"col-md-5\">
\t\t\t\t<label class=\"comment-label\" for=\"titre\">Titre:</label>
\t\t\t</div> 
\t\t\t<div class=\"col-md-7\">
\t\t\t\t<input type=\"float \"name=\"titre\" value=\"\"/>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-12 input-div\">
\t\t\t<div class=\"col-md-5\">
\t\t\t\t<label class=\"comment-label\" for=\"contenu\">Commentaire:</label>
\t\t\t</div> 
\t\t\t<div class=\"col-md-7\">
\t\t\t\t<textarea type=\"text \"name=\"contenu\" value=\"\"></textarea>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-12 input-div\">
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<input type=\"hidden\" name=\"hidden\" value=\"1\"/>
\t\t\t\t<input type=\"submit\" class=\"btn btn-primary\" value=\"Envoyer\"/>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\"></div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<a class=\"btn-primary btn\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("film_show", array("id" => $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "id", array()))), "html", null, true);
        echo "\"> Retour Fiche </a>
\t\t\t</div>
\t\t</div>
\t</form>
</div>
<div class=\"col-md-3\"></div>



";
        
        $__internal_9e24e19a01903f88076bdf0efd0b9f00cc05df4e1ecc2c2f9a4afa886741f41d->leave($__internal_9e24e19a01903f88076bdf0efd0b9f00cc05df4e1ecc2c2f9a4afa886741f41d_prof);

    }

    public function getTemplateName()
    {
        return "CommentaireBundle:Default:comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 52,  97 => 26,  93 => 25,  84 => 19,  79 => 17,  75 => 15,  69 => 14,  60 => 11,  55 => 10,  50 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* <div class="col-md-3"></div>*/
/* <div class="col-md-6 form-comment">*/
/* 	<div class="col-md-12">*/
/* 		{% for label, flashes in app.session.flashbag.all %}*/
/* 	    	{% for flash in flashes %}*/
/* 	        	<div class="alert alert-{{ label }}">*/
/* 	            		{{ flash }}*/
/* 	        	</div>*/
/* 	    	{% endfor %}*/
/* 		{% endfor %}*/
/* 	</div>*/
/* 	<div class="col-md-12 input-div">*/
/* 		<h4 class="com-title-form">Poster un Commentaire sur le film : {{ movie.titre }}</h4>*/
/* 	</div>*/
/* 	<form action="{{ path('post_com', { 'id': movie.id }) }}" method="post">*/
/* 		<div class="col-md-12 input-div">*/
/* 			<div class="col-md-5">*/
/* 				<label class="comment-label" for="date">Date:</label>*/
/* 			</div> */
/* 			<div class="col-md-7">*/
/* 				<p>{{ "now"|date("d/m/Y") }}</p>*/
/* 				<input type="hidden" name="date" value="{{ "now"|date("d/m/Y") }}"/>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="col-md-12 input-div">*/
/* 			<div class="col-md-5">*/
/* 				<label class="comment-label" for="titre">Titre:</label>*/
/* 			</div> */
/* 			<div class="col-md-7">*/
/* 				<input type="float "name="titre" value=""/>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="col-md-12 input-div">*/
/* 			<div class="col-md-5">*/
/* 				<label class="comment-label" for="contenu">Commentaire:</label>*/
/* 			</div> */
/* 			<div class="col-md-7">*/
/* 				<textarea type="text "name="contenu" value=""></textarea>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="col-md-12 input-div">*/
/* 			<div class="col-md-4">*/
/* 				<input type="hidden" name="hidden" value="1"/>*/
/* 				<input type="submit" class="btn btn-primary" value="Envoyer"/>*/
/* 			</div>*/
/* 			<div class="col-md-4"></div>*/
/* 			<div class="col-md-4">*/
/* 				<a class="btn-primary btn" href="{{ path('film_show', {'id': movie.id}) }}"> Retour Fiche </a>*/
/* 			</div>*/
/* 		</div>*/
/* 	</form>*/
/* </div>*/
/* <div class="col-md-3"></div>*/
/* */
/* */
/* */
/* {% endblock %}*/

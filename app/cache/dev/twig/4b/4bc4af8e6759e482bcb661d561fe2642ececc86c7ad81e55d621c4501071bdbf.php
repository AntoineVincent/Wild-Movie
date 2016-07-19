<?php

/* FrontendBundle:Default:show.html.twig */
class __TwigTemplate_27b49c056acc22e820584ee0bc5266cef9175ef6307963395bde89183fb3583b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FrontendBundle:Default:show.html.twig", 1);
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
        $__internal_4b788f573bceb32a98c98c91d4886a8de987842364e8b7f6dec52b885cc6ea79 = $this->env->getExtension("native_profiler");
        $__internal_4b788f573bceb32a98c98c91d4886a8de987842364e8b7f6dec52b885cc6ea79->enter($__internal_4b788f573bceb32a98c98c91d4886a8de987842364e8b7f6dec52b885cc6ea79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Default:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b788f573bceb32a98c98c91d4886a8de987842364e8b7f6dec52b885cc6ea79->leave($__internal_4b788f573bceb32a98c98c91d4886a8de987842364e8b7f6dec52b885cc6ea79_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7160184b248475f794cf1848d3025915aa5ac2f065aa56187a420c5b4438a7b = $this->env->getExtension("native_profiler");
        $__internal_b7160184b248475f794cf1848d3025915aa5ac2f065aa56187a420c5b4438a7b->enter($__internal_b7160184b248475f794cf1848d3025915aa5ac2f065aa56187a420c5b4438a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"col-md-12\">
\t\t<div class=\"col-md-5 col-md-offset-1 left\">
\t\t\t<img class=\"img-style-3\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((("uploads/film/" . $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "folder", array())) . "")), "html", null, true);
        echo "\">
\t\t</div>
\t\t<div class=\"col-md-5\">

\t\t\t<h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "titre", array()), "html", null, true);
        echo "</h2>
\t\t\t<hr>
\t\t\t<p>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "description", array()), "html", null, true);
        echo "</p>
\t\t\t
\t\t</div>
\t</div>
\t<div class=\"col-md-10 col-md-offset-1\">
\t\t<div class=\"col-md-12 comment-div\">
\t\t\t<h2>Commentaires : </h2>
\t\t\t<hr>
\t\t\t";
        // line 20
        if (twig_test_empty((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")))) {
            // line 21
            echo "\t\t\t\t\t<p class=\"comment-none\">Aucun Commentaires sur ce film</p>
\t\t\t";
        } else {
            // line 23
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 24
                echo "\t\t\t\t\t<div class=\"col-md-12 comment\">
\t\t\t\t\t\t<div class=\"col-md-12 entete\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<h4><span class=\"glyphicon glyphicon-tag\" aria-hidden=\"true\"></span> ";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "titre", array()), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<p class=\"infos\">publié par ";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "author", array()), "html", null, true);
                echo " et
\t\t\t\t\t\t\t\tPoster le : ";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "date", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<p class=\"content\">";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "contenu", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "\t\t\t";
        }
        // line 40
        echo "\t\t</div>
\t\t<a class=\"btn-primary btn\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("new_com", array("id" => $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "id", array()))), "html", null, true);
        echo "\"> Ajouter un Commentaire </a>
\t</div>

";
        
        $__internal_b7160184b248475f794cf1848d3025915aa5ac2f065aa56187a420c5b4438a7b->leave($__internal_b7160184b248475f794cf1848d3025915aa5ac2f065aa56187a420c5b4438a7b_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 41,  113 => 40,  110 => 39,  100 => 35,  93 => 31,  89 => 30,  83 => 27,  78 => 24,  73 => 23,  69 => 21,  67 => 20,  56 => 12,  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* 	<div class="col-md-12">*/
/* 		<div class="col-md-5 col-md-offset-1 left">*/
/* 			<img class="img-style-3" src="{{ asset('uploads/film/' ~ movie.folder ~ '') }}">*/
/* 		</div>*/
/* 		<div class="col-md-5">*/
/* */
/* 			<h2>{{ movie.titre }}</h2>*/
/* 			<hr>*/
/* 			<p>{{ movie.description }}</p>*/
/* 			*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="col-md-10 col-md-offset-1">*/
/* 		<div class="col-md-12 comment-div">*/
/* 			<h2>Commentaires : </h2>*/
/* 			<hr>*/
/* 			{% if comments is empty %}*/
/* 					<p class="comment-none">Aucun Commentaires sur ce film</p>*/
/* 			{% else %}*/
/* 				{% for comment in comments %}*/
/* 					<div class="col-md-12 comment">*/
/* 						<div class="col-md-12 entete">*/
/* 							<div class="col-md-6">*/
/* 								<h4><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> {{ comment.titre }}</h4>*/
/* 							</div>*/
/* 							<div class="col-md-6">*/
/* 								<p class="infos">publié par {{ comment.author }} et*/
/* 								Poster le : {{ comment.date }}</p>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-md-12">*/
/* 							<p class="content">{{ comment.contenu }}</p>*/
/* 						</div>*/
/* 					</div>*/
/* 				{% endfor %}*/
/* 			{% endif %}*/
/* 		</div>*/
/* 		<a class="btn-primary btn" href="{{ path('new_com', { 'id': movie.id }) }}"> Ajouter un Commentaire </a>*/
/* 	</div>*/
/* */
/* {% endblock %}*/

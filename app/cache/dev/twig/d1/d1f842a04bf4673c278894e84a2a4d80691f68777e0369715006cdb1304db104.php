<?php

/* FrontendBundle:Default:article.html.twig */
class __TwigTemplate_9a4d3945d9e8b81702d8ae06c942502de5ed1bda6d1a699e5c76f3dcbfdc0a81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FrontendBundle:Default:article.html.twig", 1);
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
        $__internal_b32af8aaf6bc30c6ab4e5ad5df0bd216013b24fe5bb66ce07e9efef98910ac7a = $this->env->getExtension("native_profiler");
        $__internal_b32af8aaf6bc30c6ab4e5ad5df0bd216013b24fe5bb66ce07e9efef98910ac7a->enter($__internal_b32af8aaf6bc30c6ab4e5ad5df0bd216013b24fe5bb66ce07e9efef98910ac7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Default:article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b32af8aaf6bc30c6ab4e5ad5df0bd216013b24fe5bb66ce07e9efef98910ac7a->leave($__internal_b32af8aaf6bc30c6ab4e5ad5df0bd216013b24fe5bb66ce07e9efef98910ac7a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e8c2d67c4f56d8271d18906c16caa959206265ee6a8f4e8ba53defa85aafebf = $this->env->getExtension("native_profiler");
        $__internal_7e8c2d67c4f56d8271d18906c16caa959206265ee6a8f4e8ba53defa85aafebf->enter($__internal_7e8c2d67c4f56d8271d18906c16caa959206265ee6a8f4e8ba53defa85aafebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"col-md-12\">
\t\t<h1 class=\"article-tlt\"> Kaamelott, les films vont enfin arriver</h1>
\t</div>
\t<div class=\"col-md-12\">
\t\t<div class=\"col-md-8\">
\t\t\t<img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/date.jpg"), "html", null, true);
        echo "\" alt=\"kaaradoc\" class=\"article-img\">
\t\t\t<p class=\"art-desc\">Il y a un mois, Alexandre Astier faisait un révélation que les fans de Kaamelott attendaient depuis longtemps : l'annonce du grand retour de la saga... au cinéma ! On en sait à présent un peu plus sur ses intentions et la façon dont ses projets se déclineront.</p>

\t\t\t<p class=\"art-desc\">On se demandait en effet si Kaamelott allait également revenir en série télé, ou uniquement au cinéma. Et s'il s'agirait d'une trilogie comme Alexandre Astier l'avait évoqué. A nos confrères de MetroNews, le comédien, scénariste et réalisateur a répondu à une bonne partie de ces interrogations.</p>

\t\t\t<p class=\"art-desc\">\"La fin de la saga, dans mon esprit a toujours été une trilogie de films. Mais il y a une période que je veux raconter qui s’appelle \"Kaamelott Résistance\", qui parle du moment où Arthur n’est pas en Bretagne et Lancelot est au pouvoir et où les personnages qu’on connaît sont partagés entre résistance et collaboration. Je me suis demandé si je devais retourner à la télévision pour la raconter. Et puis j’ai décidé que non. Parce que je ne pense pas qu'on puisse faire un grand un retour en télé, puis un autre grand retour au cinéma. (...) Je ne pense pas écrire le même film aujourd’hui que si je l’avais écrit il y a 6 ou 7 ans, poursuit-il. Ça va suivre ce que j’ai envie d’y voir maintenant, les acteurs avec lesquels j’ai envie de jouer, la couleur que j’ai envie d’y mettre. Elle aurait peut-être été plus sombre à l’époque, en sortant direct de la série. Mais maintenant que je ne suis plus dans le même état d'esprit, j’aurais peut-être plus envie de déconner.\"</p>

\t\t\t<p class=\"art-desc\">Selon TéléLoisirs, le tournage de Kaamelott pour le cinéma pourrait commencer dès l'année prochaine, visant une sortie en 2017.</p>
\t\t</div>

\t\t<div class=\"col-md-4\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<h3 class=\"other-art\"> Nos Autres Articles </h3>
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"col-md-1\"></div>
\t\t\t\t<div class=\"col-md-10 encart-link\">
\t\t\t\t\t<div class=\"col-md-12 link-art-img\">
\t\t\t\t\t\t<img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/grumeau.png"), "html", null, true);
        echo "\" alt=\"grumeau\" class=\"link-art-img\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-12 title-link\">
\t\t\t\t\t\t<h4><a href=\"#\"> Link to another article</a></h4>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-1\"></div>
\t\t\t</div>

\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"col-md-1\"></div>
\t\t\t\t<div class=\"col-md-10 encart-link\">
\t\t\t\t\t<div class=\"col-md-12 link-div-img\">
\t\t\t\t\t\t<img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/pignouf.jpg"), "html", null, true);
        echo "\" alt=\"pignouf\" class=\"link-art-img\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-12 title-link\">
\t\t\t\t\t\t<h4><a href=\"#\"> Link to another article</a></h4>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-1\"></div>
\t\t\t</div>

\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"col-md-1\"></div>
\t\t\t\t<div class=\"col-md-10 encart-link\">
\t\t\t\t\t<div class=\"col-md-12 link-art-img\">
\t\t\t\t\t\t<img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/puceau.jpg"), "html", null, true);
        echo "\" alt=\"puceau\" class=\"link-art-img\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-12 title-link\">
\t\t\t\t\t\t<h4><a href=\"#\"> Link to another article</a></h4>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-1\"></div>
\t\t\t</div>

\t\t</div>
\t</div>
";
        
        $__internal_7e8c2d67c4f56d8271d18906c16caa959206265ee6a8f4e8ba53defa85aafebf->leave($__internal_7e8c2d67c4f56d8271d18906c16caa959206265ee6a8f4e8ba53defa85aafebf_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 53,  84 => 40,  68 => 27,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* 	<div class="col-md-12">*/
/* 		<h1 class="article-tlt"> Kaamelott, les films vont enfin arriver</h1>*/
/* 	</div>*/
/* 	<div class="col-md-12">*/
/* 		<div class="col-md-8">*/
/* 			<img src="{{ asset('img/date.jpg') }}" alt="kaaradoc" class="article-img">*/
/* 			<p class="art-desc">Il y a un mois, Alexandre Astier faisait un révélation que les fans de Kaamelott attendaient depuis longtemps : l'annonce du grand retour de la saga... au cinéma ! On en sait à présent un peu plus sur ses intentions et la façon dont ses projets se déclineront.</p>*/
/* */
/* 			<p class="art-desc">On se demandait en effet si Kaamelott allait également revenir en série télé, ou uniquement au cinéma. Et s'il s'agirait d'une trilogie comme Alexandre Astier l'avait évoqué. A nos confrères de MetroNews, le comédien, scénariste et réalisateur a répondu à une bonne partie de ces interrogations.</p>*/
/* */
/* 			<p class="art-desc">"La fin de la saga, dans mon esprit a toujours été une trilogie de films. Mais il y a une période que je veux raconter qui s’appelle "Kaamelott Résistance", qui parle du moment où Arthur n’est pas en Bretagne et Lancelot est au pouvoir et où les personnages qu’on connaît sont partagés entre résistance et collaboration. Je me suis demandé si je devais retourner à la télévision pour la raconter. Et puis j’ai décidé que non. Parce que je ne pense pas qu'on puisse faire un grand un retour en télé, puis un autre grand retour au cinéma. (...) Je ne pense pas écrire le même film aujourd’hui que si je l’avais écrit il y a 6 ou 7 ans, poursuit-il. Ça va suivre ce que j’ai envie d’y voir maintenant, les acteurs avec lesquels j’ai envie de jouer, la couleur que j’ai envie d’y mettre. Elle aurait peut-être été plus sombre à l’époque, en sortant direct de la série. Mais maintenant que je ne suis plus dans le même état d'esprit, j’aurais peut-être plus envie de déconner."</p>*/
/* */
/* 			<p class="art-desc">Selon TéléLoisirs, le tournage de Kaamelott pour le cinéma pourrait commencer dès l'année prochaine, visant une sortie en 2017.</p>*/
/* 		</div>*/
/* */
/* 		<div class="col-md-4">*/
/* 			<div class="col-md-12">*/
/* 				<h3 class="other-art"> Nos Autres Articles </h3>*/
/* 			</div>*/
/* 			<div class="col-md-12">*/
/* 				<div class="col-md-1"></div>*/
/* 				<div class="col-md-10 encart-link">*/
/* 					<div class="col-md-12 link-art-img">*/
/* 						<img src="{{ asset('img/grumeau.png') }}" alt="grumeau" class="link-art-img">*/
/* 					</div>*/
/* 					<div class="col-md-12 title-link">*/
/* 						<h4><a href="#"> Link to another article</a></h4>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col-md-1"></div>*/
/* 			</div>*/
/* */
/* 			<div class="col-md-12">*/
/* 				<div class="col-md-1"></div>*/
/* 				<div class="col-md-10 encart-link">*/
/* 					<div class="col-md-12 link-div-img">*/
/* 						<img src="{{ asset('img/pignouf.jpg') }}" alt="pignouf" class="link-art-img">*/
/* 					</div>*/
/* 					<div class="col-md-12 title-link">*/
/* 						<h4><a href="#"> Link to another article</a></h4>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col-md-1"></div>*/
/* 			</div>*/
/* */
/* 			<div class="col-md-12">*/
/* 				<div class="col-md-1"></div>*/
/* 				<div class="col-md-10 encart-link">*/
/* 					<div class="col-md-12 link-art-img">*/
/* 						<img src="{{ asset('img/puceau.jpg') }}" alt="puceau" class="link-art-img">*/
/* 					</div>*/
/* 					<div class="col-md-12 title-link">*/
/* 						<h4><a href="#"> Link to another article</a></h4>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col-md-1"></div>*/
/* 			</div>*/
/* */
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/

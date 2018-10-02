<?php

/* default/index.html.twig */
class __TwigTemplate_82cf623b1365d44781b76b8d3f311fafdb03d597da16ead3ec79a6c040f1040d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " | Esempi";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"container my-5\">
  <main class=\"bd-content\">
    <h1 class=\"bd-title\" id=\"content\">Esempi</h1>
    <p class=\"bd-lead\"></p>
  <p>Di seguito sono riportati alcuni esempi per il corretto utilizzo dei componenti, secondo le linee guida di design.</p>
  
    <div class=\"row\">
      <div class=\"col-sm-6 col-md-4 col-xl-3 mb-3\">
        <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kitchen-sink");
        echo "\" class=\"\">
          <img class=\"img-thumbnail mb-3\" src=\"https://italia.github.io//bootstrap-italia/docs/esempi/screenshots/kitchen-sink.png\" alt=\"Kitchen-Sink screenshot\" width=\"960\" height=\"600\">
          <h5 class=\"mb-1\">Kitchen-Sink</h5>
        </a>
        <p class=\"text-muted\">Una lunghissima pagina di test che mostra tutti i principali componenti.</p>
      </div>
    
  
    
      <div class=\"col-sm-6 col-md-4 col-xl-3 mb-3\">
        <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel");
        echo "\" class=\"\">
          <img class=\"img-thumbnail mb-3\" src=\"https://italia.github.io//bootstrap-italia/docs/esempi/screenshots/carousel.png\" alt=\"Carousel screenshot\" width=\"960\" height=\"600\">
          <h5 class=\"mb-1\">Carousel</h5>
        </a>
        <p class=\"text-muted\">Un esempio di corretto utilizzo del componente Carousel.</p>
      </div>
    
  
    
      <div class=\"col-sm-6 col-md-4 col-xl-3 mb-3\">
        <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cookiebar");
        echo "\">
          <img class=\"img-thumbnail mb-3\" src=\"https://italia.github.io//bootstrap-italia/docs/esempi/screenshots/cookiebar.png\" alt=\"Cookiebar screenshot\" width=\"960\" height=\"600\">
          <h5 class=\"mb-1\">Cookiebar</h5>
        </a>
        <p class=\"text-muted\">Una barra di avviso sui cookie basata su un cookie nominato 'cookies_consent'.</p>
      </div>
    
  
    
      <div class=\"col-sm-6 col-md-4 col-xl-3 mb-3\">
        <a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("offcanvas");
        echo "\">
          <img class=\"img-thumbnail mb-3\" src=\"https://italia.github.io//bootstrap-italia/docs/esempi/screenshots/offcanvas.png\" alt=\"Offcanvas screenshot\" width=\"960\" height=\"600\">
          <h5 class=\"mb-1\">Offcanvas</h5>
        </a>
        <p class=\"text-muted\">Trasforma la tua barra di navigazione in un menu a comparsa.</p>
      </div>
    
  
    
      <div class=\"col-sm-6 col-md-4 col-xl-3 mb-3\">
        <a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comuni");
        echo "\">
          <img class=\"img-thumbnail mb-3\" src=\"https://italia.github.io//bootstrap-italia/docs/esempi/screenshots/comuni.png\" alt=\"Comuni screenshot\" width=\"960\" height=\"600\">
          <h5 class=\"mb-1\">Comuni</h5>
        </a>
        <p class=\"text-muted\">Pagina di esempio per il sito di un comune.</p>
      </div>
    </div>

  </main>
</div>

";
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
        return array (  101 => 53,  88 => 43,  75 => 33,  62 => 23,  49 => 13,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/index.html.twig", "/Users/riccardomariani/Documents/DevIta/repo/simevo/symfony3-italia/app/Resources/views/default/index.html.twig");
    }
}

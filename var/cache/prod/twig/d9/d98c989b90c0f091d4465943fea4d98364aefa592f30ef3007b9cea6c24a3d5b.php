<?php

/* default/carousel.html.twig */
class __TwigTemplate_28ac1c5d06cd68e27ea5c2db0479abde45f084c9e11bc8b0e3c4cf6fdf0211b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/carousel.html.twig", 1);
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
        echo " | Carousel";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <main role=\"main\">

      <div class=\"container\">

        <div id=\"myCarousel\" class=\"carousel slide\" data-wrap=\"false\">
          <ol class=\"carousel-indicators\">
            <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
          </ol>
          <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
              <img class=\"d-block w-100\" data-src=\"holder.js/800x400?auto=yes&bg=777&fg=555&text=First slide\" alt=\"Prima diapositiva\">
              <div class=\"carousel-caption d-none d-md-block\">
                <h5>Titolo prima diapositiva</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
              </div>
            </div>
            <div class=\"carousel-item\">
              <img class=\"d-block w-100\" data-src=\"holder.js/800x400?auto=yes&bg=666&fg=444&text=Second slide\" alt=\"Seconda diapositiva\">
              <div class=\"carousel-caption d-none d-md-block\">
                <h5>Titolo seconda diapositiva</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>
            <div class=\"carousel-item\">
              <img class=\"d-block w-100\" data-src=\"holder.js/800x400?auto=yes&bg=555&fg=333&text=Third slide\" alt=\"Terza diapositiva\">
              <div class=\"carousel-caption d-none d-md-block\">
                <h5>Titolo terza diapositiva</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
              </div>
            </div>
          </div>
          <a class=\"carousel-control-prev\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
          </a>
          <a class=\"carousel-control-next\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
          </a>
        </div>

      </div>
    </main>
";
    }

    public function getTemplateName()
    {
        return "default/carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/carousel.html.twig", "/Users/riccardomariani/Documents/DevIta/repo/simevo/symfony3-italia/app/Resources/views/default/carousel.html.twig");
    }
}

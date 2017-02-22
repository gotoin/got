<?php

/* home.html */
class __TwigTemplate_c65a5973d864b28eb9bd499992b6f15822658f7f15058cbffbbad86a1e73a575 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<head>

</head>
<body>
";
        // line 6
        echo twig_escape_filter($this->env, ($context["test"] ?? null), "html", null, true);
        echo "123dfgdsfgdfgdgdg
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "home.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home.html", "D:\\www\\got\\app\\views\\home.html");
    }
}

<?php

/* home.html */
class __TwigTemplate_d62e05fcd11e02829ab70e3a526f8cdcba6d8fc21ed400ffb653cedd050d675a extends Twig_Template
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
        echo "123dfgdsfgdfgdgdg245676sadfsadf
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
        return new Twig_Source("<html>
<head>

</head>
<body>
{{test}}123dfgdsfgdfgdgdg245676sadfsadf
</body>
</html>", "home.html", "D:\\www\\got\\app\\views\\home.html");
    }
}

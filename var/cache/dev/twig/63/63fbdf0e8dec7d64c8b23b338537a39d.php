<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* lavagna/lavagna_find_veicolo.php */
class __TwigTemplate_89e08464d1502e94cae2c09002a1a1a1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lavagna/lavagna_find_veicolo.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lavagna/lavagna_find_veicolo.php"));

        // line 1
        echo "<?php

\$findveicolo = \$_GET['findveicolo'];

\$dbName = 'GRENT';
\$uid = 'Massimo';
\$pwd = 'accornero1';
\$options = array(
    \"Database\" => \$dbName,
    \"UID\" => \$uid,
    \"PWD\" => \$pwd
);
if (isset(\$findveicolo)) {
    \$db = sqlsrv_connect(\"localhost\", \$options);
    if (\$db === false) {
        die(print_r(sqlsrv_errors(), true));
    }
    print(\"<br/>  OK\");
    \$sql = 'SELECT * FROM veicoli WHERE descrizion like \"%' . \$stringToFind . '%\"';
    \$res = sqlsrv_query(\$db, \$sql);
    if (sqlsrv_fetch(\$res) === false) {
        die(print_r(sqlsrv_errors(), true));
    }

    while (\$sVeicoli = sqlsrv_fetch_array(\$res, MYSQLI_ASSOC)) {
        \$findveicolo[] = array(
            \"id\" => \$sVeicoli['id_veicolo'],
            \"descrizion\" => \$sVeicoli['descrizion']
        );
        echo json_encode(\$findveicolo);
    }
}

?>



";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "lavagna/lavagna_find_veicolo.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

\$findveicolo = \$_GET['findveicolo'];

\$dbName = 'GRENT';
\$uid = 'Massimo';
\$pwd = 'accornero1';
\$options = array(
    \"Database\" => \$dbName,
    \"UID\" => \$uid,
    \"PWD\" => \$pwd
);
if (isset(\$findveicolo)) {
    \$db = sqlsrv_connect(\"localhost\", \$options);
    if (\$db === false) {
        die(print_r(sqlsrv_errors(), true));
    }
    print(\"<br/>  OK\");
    \$sql = 'SELECT * FROM veicoli WHERE descrizion like \"%' . \$stringToFind . '%\"';
    \$res = sqlsrv_query(\$db, \$sql);
    if (sqlsrv_fetch(\$res) === false) {
        die(print_r(sqlsrv_errors(), true));
    }

    while (\$sVeicoli = sqlsrv_fetch_array(\$res, MYSQLI_ASSOC)) {
        \$findveicolo[] = array(
            \"id\" => \$sVeicoli['id_veicolo'],
            \"descrizion\" => \$sVeicoli['descrizion']
        );
        echo json_encode(\$findveicolo);
    }
}

?>



", "lavagna/lavagna_find_veicolo.php", "C:\\wamp64\\www\\grent\\templates\\lavagna\\lavagna_find_veicolo.php");
    }
}

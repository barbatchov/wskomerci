<?php
$client = new \SoapClient('https://ecommerce.redecard.com.br/pos_virtual/wskomerci/cap.asmx?WSDL');
$functions = $client->__getFunctions();
$types = $client->__getTypes();

$namespaceGlob = 'ws\komerci';
$namespaceTypes = $namespaceGlob . '\types';

$formatedTypes = array();
foreach($types as $type) {
	$type = preg_replace('/(\n\r|\n|\r)/', PHP_EOL, $type);
	$exploded = explode(PHP_EOL, $type);
	
	$class = preg_replace('/struct (.*?) \{/', '$1', $exploded[0]);
	$formatedTypes[$class] = array('class' => PHP_EOL . 
			"namespace $namespaceTypes;" . PHP_EOL . PHP_EOL .
			"use \\$namespaceGlob\KomerciEntityAbstract;" .  PHP_EOL . 
			"use \\$namespaceGlob\KomerciServiceInterface;" .  PHP_EOL .  PHP_EOL .
			'class ' . $class . ' extends KomerciEntityAbstract implements KomerciServiceInterface {', 
			'attr' => array(), 'get' => array(), 'set' => array(), 'endClass' => '}');
	
	for ($i = 1; $i < sizeof($exploded) - 1; $i++){
		preg_match('/ (.*?) (.*);/', $exploded[$i], $matches);
		$paramType = $matches[1];
		$paramName = $matches[2];
		$namespace = "\\$namespaceTypes\\";
		
		if ($paramType == 'string') 
			$namespace = '';

		if ($paramType == '<anyXML>') {
			$namespace = '';
			$paramType = '';
		}
		
		$formatedTypes[$class]['attr'][] = implode(PHP_EOL, array(
			($paramType ? "     /** @var $namespace$paramType */" : "     /** @var any */"),  
			"    private \$$paramName;",
			''
		));
		
		$formatedTypes[$class]['get'][] = implode(PHP_EOL, array(
			'    /**',
			($paramType ? "     * @return $namespace$paramType" : "     * @return any"),
			"     */",
			"    public function get$paramName() {",
			"        return \$this->$paramName;",
			"    }",
			'',
		));
		
		$formatedTypes[$class]['set'][] = implode(PHP_EOL, array(
			'    /**',
			($paramType ? "     * @param $namespace$paramType" : '     * @param any'),
			"     * @return $namespace$class",
			"     */",
			"    public function set$paramName($namespace$paramType \$param = null) {",
			"        \$this->$paramName = \$param;",
			"        return \$this;",
			"    }",
			'',
		));
		
	}
	$formatedTypes[$class]['attr'] = implode(PHP_EOL, $formatedTypes[$class]['attr']);
	$formatedTypes[$class]['get'] = implode(PHP_EOL, $formatedTypes[$class]['get']);
	$formatedTypes[$class]['set'] = implode(PHP_EOL, $formatedTypes[$class]['set']);
	
	
	file_put_contents('./ws/komerci/types/' . $class . '.php', '<?PHP' . PHP_EOL . implode(PHP_EOL, $formatedTypes[$class]) );
}

$fcns = array('<?php', '', 'namespace ws\komerci;', '', '/**');
foreach($functions as $fn) {
	preg_match('/(^.*)?\s(.*)?\((.*?)\s/', $fn, $matches);
	$returnType = $matches[1];
	$method = $matches[2];
	$paramType = $matches[3];
	
	$fcns[] = " * @method \\$namespaceTypes\\$returnType $method(\\$namespaceTypes\\$paramType \$param)";
}
$fcns[] = ' */';

$facade = implode(PHP_EOL, $fcns) . PHP_EOL . "class KomerciFacade extends \SoapClient {}";
file_put_contents('./ws/komerci/KomerciFacade.php', $facade);
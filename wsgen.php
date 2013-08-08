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
			"use \\$namespaceGlob\KomerciServiceInterface;" .  PHP_EOL . 
			"use \\$namespaceGlob\decorators\KomerciValidableInterface;" .  PHP_EOL .  PHP_EOL .
			'class ' . $class . ' extends KomerciEntityAbstract implements KomerciServiceInterface, KomerciValidableInterface {', 
			'attr' => array(), 'get' => array(), 'set' => array(), 'endClass' => '}');
	
	for ($i = 1; $i < sizeof($exploded) - 1; $i++){
		preg_match('/ (.*?) (.*);/', $exploded[$i], $matches);
		$paramType = $matches[1];
		$paramName = ucfirst($matches[2]);
		$namespace = "\\$namespaceTypes\\";
		
		if ($paramType == 'string') 
			$namespace = '\\';

		if ($paramType == '<anyXML>') {
			$namespace = '';
			$paramType = '';
		}
		
		$formatedTypes[$class]['attr'][] = implode(PHP_EOL, array(
			($paramType ? "     /** @var $namespace$paramType */" : "     /** @var any */"),  
			"    protected \$$paramName;",
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
			"     * @return $class",
			"     */",
			"    public function set$paramName(" . ($paramType == 'string' || $paramType == 'any' ? '' : $namespace . $paramType . ' ') . "\$param = null) {",
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
	
	// test class
	$testClass = implode(PHP_EOL, array(
		'<?php', 
		'use \test\ws\komerci\BasicEntityTestCase;',
		'use \ws\komerci\types\\' . $class . ';', '',
		"class {$class}Test extends BasicEntityTestCase {", '',
		'    /**',
		'     * @return \ws\komerci\types\\' . $class,
		'     */',
		"    public function getEntity() {",
		"        return new $class();", 
		"    }", 
		"}", 
	));
	
	file_put_contents('./test/ws/komerci/types/' . $class . 'Test.php', $testClass);
	
	// typemaps
	$typemaps[$class] = array(
		'<?php',
		'namespace ws\komerci\typemaps;', '',
		'uses' => array(
				//'use \ws\komerci\typemaps\TypemapInterface;', 
				'use \ws\komerci\typemaps\GenericAttributes;'), '',
		"class {$class}Map implements TypemapInterface {",
		'consts' => array(), '',
		'properties' => array(
			'/**',
			' * @return \ws\komerci\typemaps\GenericAttributes',
			' */',
			'public function getProperty($name = \'\') {',
			'    $array = array(',
			'arrays' => array(),
			'    );',
			'',
			'    return (isset($array[$name])) ? new GenericAttributes($array[$name]) : null;',
			'}'
		 ),
		'}',
	);
	
	for ($i = 1; $i < sizeof($exploded) - 1; $i++){
		preg_match('/ (.*?) (.*);/', $exploded[$i], $matches);
		$paramType = $matches[1];
		$paramName = ucfirst($matches[2]);
		$paramUpper = camelCaseToUpperUnderscores($matches[2]);
		$namespace = "\\$namespaceTypes\\";
		
		if ($paramType == '<anyXML>') {
			$paramType = 'string';
		}
		
		$typemaps[$class]['consts'][] = "    const $paramUpper = '$paramName';";
		
		$type = implode(PHP_EOL . '    ',array(
			"'$paramName' => array('name' => '$paramName', 'type' => '$paramType', 'size' => null)",
		));
		
		$typemaps[$class]['properties']['arrays'][] = $type;
	}
	$typemaps[$class]['properties']['arrays'] = '        ' . implode(',' . PHP_EOL . '            ' , $typemaps[$class]['properties']['arrays']);
	$typemaps[$class]['uses'] = implode(PHP_EOL, $typemaps[$class]['uses']);
	$typemaps[$class]['consts'] = implode(PHP_EOL, $typemaps[$class]['consts']);
	$typemaps[$class]['properties'] = '    ' . implode(PHP_EOL . '    ', $typemaps[$class]['properties']);
	//print_r($typemaps); die();
	file_put_contents('./ws/komerci/typemaps/' . $class . 'Map.php', implode(PHP_EOL, $typemaps[$class]));
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


/**
 * Returns an underscored word from a camel case word
 *
 * @param string $str
 * @return string
 */
function camelCaseToUpperUnderscores($str)
{
	$str[0] = strtolower($str[0]);
	$func = create_function('$c', 'return "_" . strtolower($c[1]);');
	return strtoupper( preg_replace_callback('/([A-Z])/', $func, $str));
}
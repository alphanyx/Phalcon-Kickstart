<?php
namespace Module;
use Phalcon\Exception;

class Loader
{
	const MODULE_PATH = 'app/modules';
	private static $_instance;

	public static function instance() {
		if (!self::$_instance) {
			$currentClassName = __CLASS__;
			self::$_instance = new $currentClassName();
		}
		return self::$_instance;
	}

	protected $_modules = array();
	protected $_loadedModules = array();

	protected $_modulesDirectory;

	public function init() {
		if (is_dir(PHALCON_ROOT . self::MODULE_PATH)) {
			$this->_modulesDirectory = realpath(PHALCON_ROOT . self::MODULE_PATH) . DS;
		}

		if (!$this->_modulesDirectory) {
			throw new Exception ('Module Directory does not exists in: ' . PHALCON_ROOT . self::MODULE_PATH);
		}

		return $this;
	}

	public function reset() {
		$this->_modules = array();

		return $this;
	}

	public function addModules(array $modules) {
		$this->_modules = array_merge($this->_modules, $modules);

		return $this;
	}

	public function setModules(array $modules) {
		$this->_modules = $modules;

		return $this;
	}

	public function removeModule($moduleName) {
		if (isset($this->_modules[$moduleName])) {
			unset($this->_modules[$moduleName]);
		}

		return $this;
	}

	public function isModule($moduleName) {
		return isset($this->_modules[$moduleName]);
	}

	public function apply() {
		if (is_array($this->_modules) && count($this->_modules)) {
			foreach ($this->_modules as $module => $modulePath) {
				if (strpos($modulePath, 'MODULE:') !== false) {
					$modulePath = str_replace('MODULE:', $this->_modulesDirectory, $modulePath);
				} else {
					$modulePath = PHALCON_ROOT . $modulePath;
				}
				if (is_dir($modulePath)) {
					$MODULE_PATH = realpath($modulePath) . DS;

					if (file_exists($MODULE_PATH . 'init.php')) {
						require $MODULE_PATH . 'init.php';
					}
				} else {
					throw new Exception ('The Module ' . $module . ' was not found in: ' . $modulePath);
				}
			}
		}
	}
}
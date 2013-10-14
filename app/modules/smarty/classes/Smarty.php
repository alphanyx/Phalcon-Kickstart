<?php
namespace Modules\Smarty;
use Phalcon\Exception;

class Smarty
{
	const CONFIGURATION = 'config/smarty';

	private static $_instance;

	protected $_config;

	public static function instance() {
		if (!self::$_instance) {
			$currentClassName = __CLASS__;
			self::$_instance = new $currentClassName();
		}
		return self::$_instance;
	}


	protected $smartyInstance;
	public function __construct() {

		$smarty = new \Smarty();

		$smartyConfig = \Modules\Config::instance()->load(MODULE_SMARTY_PATH . 'config/smarty.php');

		// Search for template and plugin dirs
		$tpl_dirs = array();
		$plugin_dirs = array();

		if(file_exists(PHALCON_ROOT . 'app/smarty_plugins')) $plugin_dirs[] = PHALCON_ROOT . 'app/smarty_plugins';
		if(file_exists(PHALCON_ROOT . 'app/views')) $tpl_dirs[] = PHALCON_ROOT . 'app/views';

		$moduleLoader = \Module\Loader::instance();


		foreach ($moduleLoader->getModules() as $module) {
			$module = $moduleLoader->translateModulePath($module);

			$plugin_path = $module . 'smarty_plugins' . DIRECTORY_SEPARATOR;
			if (file_exists($plugin_path)) {
				$plugin_dirs[] = $plugin_path;
			}

			$template_path = $module . 'views' . DIRECTORY_SEPARATOR;
			if (file_exists($template_path)) {
				$tpl_dirs[] = $template_path;
			}
		}

		$options = $smartyConfig->get('smarty_config');

		// Set template and plugin dirs
		$smarty->setTemplateDir(array_merge($tpl_dirs, $options->template_dir->toArray()));
		$smarty->plugins_dir = array_merge($smarty->plugins_dir, $plugin_dirs, (array) $options->plugin_dir->toArray());
		$options->template_dir = null;
		$options->plugin_dir = null;

		// Set config form configfile and options
		foreach ( $options as $key => $value ) {
			if ($value !== null) {
				$smarty->$key = $value;
			}
		}

		// Check if folders are writeable
		if ( !is_writeable($smarty->compile_dir) ) throw new Exception('Smarty compile_dir is not writable');
		if ( !is_writeable($smarty->cache_dir) ) throw new Exception('Smarty cache_dir is not writable');

		$this->smartyInstance = $smarty;
	}

	public function getSmarty() {
		return $this->smartyInstance;
	}
}
/*
<?php

class Kohana_SmartyView extends View {
	private static $_smarty;



	public function set_filename($file) {
		if (($path = Kohana::find_file('views', $file, Kohana::$config->load('smarty')->get('tpl_extension'))) === FALSE) {
			throw new View_Exception('The requested view :file could not be found', array(
				':file' => $file,
				));
		}

		// Store the file path locally
		$this->_file = $path;

		return $this;
	}

	public function render($file = NULL) {
		if ($file !== NULL) {
			$this->set_filename($file);
		}

		$token = Profiler::start('smarty', "render: {$this->_file}");

		if (empty($this->_file)) {
			throw new View_Exception('You must set the file to use within your view before rendering');
		}

		$smarty = self::instance();

		array_walk($this->_data, function($value, $key, &$smarty) {
			$smarty->assign($key, $value);
		}, $smarty);

		$content = $smarty->fetch($this->_file);

		return $content;
	}
}
*/
<?php
namespace app\ucenter\controller;

use app\common\controller\UcenterBase;
use think\Db;

/**
 * 后台首页
 * Class Index
 * @package app\admin\controller
 */
class Index extends UcenterBase {
    protected function _initialize() {
        parent::_initialize();
    }

    /**
     * 首页
     * @return mixed
     */
    public function main() {

        $version = Db::query('SELECT VERSION() AS ver');
        $config  = [
            'url'             => $_SERVER['HTTP_HOST'],
            'document_root'   => $_SERVER['DOCUMENT_ROOT'],
            'server_os'       => PHP_OS,
            'server_port'     => $_SERVER['SERVER_PORT'],
            'server_ip'       => $_SERVER['SERVER_ADDR'],
            'server_soft'     => $_SERVER['SERVER_SOFTWARE'],
            'php_version'     => PHP_VERSION,
            'mysql_version'   => $version[0]['ver'],
            'max_upload_size' => ini_get('upload_max_filesize')
        ];

        return $this->fetch('main', ['config' => $config]);
    }
	
	public function index() {
        return $this->fetch();
    }
}
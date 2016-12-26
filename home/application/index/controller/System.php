<?php
namespace app\index\controller;

use app\common\controller\UcenterBase;
use think\Cache;
use think\Db;

/**
 * 系统配置
 * Class System
 * @package app\admin\controller
 */
class System extends UcenterBase {
    public function _initialize() {
        parent::_initialize();
    }

    /**
     * 清除缓存
     */
    public function clear() {
        if (delete_dir_file(CACHE_PATH) || delete_dir_file(TEMP_PATH)) {
            $this->success('清除缓存成功');
        } else {
            $this->error('清除缓存失败');
        }
    }
}
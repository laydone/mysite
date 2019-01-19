<?php
namespace app\common\controller;

/**
 * 测试控制器
 *
 * @author lidong<947714443@qq.com>
 * @date 2019年1月17日
 *
 */
class TestController extends CommonBaseController {
	
	public function index(){
		return $this->fetch();
	}
	
	public function test(){
		return $this->fetch('a');
	}

}
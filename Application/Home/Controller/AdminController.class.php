<?php
namespace Home\Controller;
use Think\Controller;
class AdminController extends AuthorizedController {
	public function dashboard() {
		$this->display();
	}
	public function statistics() {
		$statistics_data['user_sign'] = M('Login')->count();
		$statistics_data['user_active'] = M('Login')->where(array('active' => 1))->count();
		$flow_data = M('User')->field('u,d')->select();
		$flow_used = 0;
		for ($i=0; $i < count($flow_data); $i++) {
			$flow_used = $flow_used + $flow_data[$i]['u'] + $flow_data[$i]['d'];
		}
		$statistics_data['flow_used'] = round($flow_used / 1048576, 2);
		$this->assign('statistics_data', $statistics_data);
		$this->display();
	}
	public function userManage(){
		$User = M('Login');
		$count      = $User->count();
		$Page       = new \Think\Page($count,15);
		$show       = $Page->show();
		$list = $User->order('create_time')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);
		$this->assign('page',$show);
		$this->display();
	}
	public function nodeManage() {
		$node_data = D('NodeComboView')->where(array('status' => 1))->select();
		$this->assign('node_data', $node_data);
		$this->display();
	}
	public function comboManage() {
		$combo_data = M('Combo')->select();
		$this->assign('combo_data', $combo_data);
		$this->display();
	}
	public function inviteManage() {
		$this->display();
	}
}
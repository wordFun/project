<?php
namespace app\index\controller;
use think\Controller;
class Index extends Controller
{
    public function index()
    {
    	
    	$arr1 = array(
    		array(
    			'id'=>1,
				'bname' => 'one'
    		),
    		array(
    			'id'=>2,
				'bname' => 'two'
    		),array(
    			'id'=>3,
    			'bname' => 'three'
    		)
    		
    	);

    
    	$arr2 = array(
    		array(
    			'pid'=>1,
				'cname'=>'xiao1',
				'name' =>'1-1'
    		),
    		
    		array(
    			'pid'=>2,
    			'cname'=>'xiao2',
    			'name' => '2-1'
    		),
    		array(
    			'pid' => 2,
    			'cname' => 'xiao22',
    			'name' => '2-2'
    		)
    		,
    		array(
    			'pid'=>3,
    			'cname'=>'xiao3',
    			'name' => '3-1'
    		)
    	
    	);
    	
    	$result['arr1'] = $arr1;
    	$result['arr2'] = $arr2;
    	
    	$this->assign('result',$result);
        return $this->fetch();
    }
    public function vray(){

    	$msg='';
    	if (!empty($_POST)) {
    		$p = $_POST;
    		if ($p['name'] == '1-1') {
				
    			$msg = array('msg'=>'<div style="color:red;">这是第一个</div>');
    		
    		}
    		if ($p['name'] == '2-1') {
    			$msg = array('msg'=>'<div style="color:blue;">这是第2-1个</div>');
    		}
    		if ($p['name'] == '2-2') {
    			$msg = array('msg'=>'<div style="color:blue;">这是第2-2个</div>');
    		}
    		if ($p['name'] == '3-1') {
    			$msg = array('msg'=>'<div style="color:blue;">这是第3个</div>');
    		}
    		
  				
    	}
    	
    	return json($msg);
    		
    	
    }
}

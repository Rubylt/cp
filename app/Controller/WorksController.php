<?php
	class WorksController extends AppController{
		public function index(){
			if($this->request->is('post')){
				$this->Work->create();
				echo print_r($this->request->data);
				 move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$_FILES["file"]["name"]);
				if($this->Work->save($this->request->data)){
					$this->Session->setFlash(__('您的作业已经提交。3Q'),'default',array('class'=>'success'));
					return $this->redirect(array('action'=>'index'));
				}
				$this->Session->setFlash(__('无法提交作业，请重试'));
			}
		}

		public function result(){
			$this->set('Works',$this->Work->find('all'));
		}
	}

?>
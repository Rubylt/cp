<?php
	class SurveysController extends AppController{
		
		public function beforefilter(){
			$this->layout="survey";
			$this->set('title_for_layout',"Ru的课堂调查");	
		}
		public function index(){
			if($this->request->is('post')){
				$this->Survey->create();
				if($this->Survey->save($this->request->data)){
					$this->Session->setFlash(__('您的信息已经提交。3Q'),'default',array('class'=>'success'));
					return $this->redirect(array('action'=>'index'));
				}
				$this->Session->setFlash(__('无法提交数据，请重试'));
			}

		}

		public function result(){
			$this->set('surveys',$this->Survey->find('all'));
		}

	}

?>
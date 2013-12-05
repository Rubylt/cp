<div class="form">

<?php 
	echo $this->Form->create('Survey');
	echo $this->Form->input('name',array('label'=>'姓名'));
	echo $this->Form->input('seat',array('label'=>'座位'));
	echo $this->Form->label('对课程的建议');
	echo $this->Form->textarea('sug_course');
	echo $this->Form->label('对Ru的建议');
	echo $this->Form->textarea('sug_teacher');
	echo $this->Form->end("提交");
?>

</div>
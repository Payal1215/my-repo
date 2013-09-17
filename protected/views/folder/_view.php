<?php
/* @var $this FolderController */
/* @var $data Folder */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('folder_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->folder_id), array('view', 'id'=>$data->folder_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category_id')); ?>:</b>
	<?php echo CHtml::encode($data->category_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('folder_name')); ?>:</b>
	<?php echo CHtml::encode($data->folder_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('folder_description')); ?>:</b>
	<?php echo CHtml::encode($data->folder_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reference_link')); ?>:</b>
	<?php echo CHtml::encode($data->reference_link); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time_log')); ?>:</b>
	<?php echo CHtml::encode($data->time_log); ?>
	<br />


</div>
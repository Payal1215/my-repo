<?php
/* @var $this AssetsController */
/* @var $data Assets */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('asset_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->asset_id), array('view', 'id'=>$data->asset_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('folder_id')); ?>:</b>
	<?php echo CHtml::encode($data->folder_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asset_current_path')); ?>:</b>
	<?php echo CHtml::encode($data->asset_current_path); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asset_cloud_path')); ?>:</b>
	<?php echo CHtml::encode($data->asset_cloud_path); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asset_name')); ?>:</b>
	<?php echo CHtml::encode($data->asset_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('thumbnail_path')); ?>:</b>
	<?php echo CHtml::encode($data->thumbnail_path); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time_log')); ?>:</b>
	<?php echo CHtml::encode($data->time_log); ?>
	<br />


</div>
<?php
/* @var $this FolderController */
/* @var $model Folder */

$this->breadcrumbs=array(
	'Folders'=>array('index'),
	$model->folder_id,
);

$this->menu=array(
	array('label'=>'List Folder', 'url'=>array('index')),
	array('label'=>'Create Folder', 'url'=>array('create')),
	array('label'=>'Update Folder', 'url'=>array('update', 'id'=>$model->folder_id)),
	array('label'=>'Add assets',    'url'=>array('assets/create', 'id'=>$model->folder_id)),
	array('label'=>'Delete Folder', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->folder_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Folder', 'url'=>array('admin')),
);
?>

<h1>View Folder #<?php echo $model->folder_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'folder_id',
		'user_id',
		'category_id',
		'folder_name',
		'folder_description',
		'reference_link',
		'time_log',
	),
)); ?>

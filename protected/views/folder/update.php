<?php
/* @var $this FolderController */
/* @var $model Folder */

$this->breadcrumbs=array(
	'Folders'=>array('index'),
	$model->folder_id=>array('view','id'=>$model->folder_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Folder', 'url'=>array('index')),
	array('label'=>'Create Folder', 'url'=>array('create')),
	array('label'=>'View Folder', 'url'=>array('view', 'id'=>$model->folder_id)),
	array('label'=>'Manage Folder', 'url'=>array('admin')),
);
?>

<h1>Update Folder <?php echo $model->folder_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
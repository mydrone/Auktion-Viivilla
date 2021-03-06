<?php
/* @var $this PagesController */
/* @var $data Pages */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('page_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->page_id), array('view', 'id'=>$data->page_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('page_name')); ?>:</b>
	<?php echo CHtml::encode($data->page_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('page_content')); ?>:</b>
	<?php echo CHtml::encode($data->page_content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('page_created')); ?>:</b>
	<?php echo CHtml::encode($data->page_created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('page_updated')); ?>:</b>
	<?php echo CHtml::encode($data->page_updated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('page_status')); ?>:</b>
	<?php echo CHtml::encode($data->page_status); ?>
	<br />


</div>
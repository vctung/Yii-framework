 <?php


$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Add Slide Show',
);
?>


<div class="rowd">
	<div class="col-md-12">
		
		<div class="panel panel-default">

			<div class="panel-heading">
				<i class="icon-external-link-sign"></i>
				Add Slide Show Box 
				<div class="panel-tools">
					<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
					</a>
					<a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
						<i class="icon-wrench"></i>
					</a>
					<a class="btn btn-xs btn-link panel-refresh" href="#">
						<i class="icon-refresh"></i>
					</a>
					<a class="btn btn-xs btn-link panel-expand" href="#">
						<i class="icon-resize-full"></i>
					</a>
					<a class="btn btn-xs btn-link panel-close" href="#">
						<i class="icon-remove"></i>
					</a>
				</div>
			</div>


			<div class="panel-body">
				

						<?php $form=$this->beginWidget('CActiveForm', array(
						        'enableClientValidation'=>true,
						        'clientOptions'=>array(
						            'validateOnSubmit'=>true,
						        ),
						         'htmlOptions'=>array(
							        'class'=>'form-horizontal',
							        'enctype' => 'multipart/form-data'
							    ),
						    ));
					     ?>


					     <div class="form-group">
							<label class="col-sm-2 control-label" for="form-field-1">
								<?php echo $form->labelEx($model,'name'); ?>
							</label>
							<div class="col-sm-9">
								<?php echo $form->textField($model,'name', array('class' => "form-control", 'placeholder' => 'Slide title')); ?>
								<?php echo $form->error($model,'name'); ?>
							</div>
						</div>


						<div class="form-group">
							<label class="col-sm-2 control-label" for="form-field-1">
								<?php echo $form->labelEx($model,'image'); ?>
							</label>
							<div class="col-sm-9">
								<?php echo $form->FileField($model,'image', array('class' => "form-control", 'placeholder' => 'Slide title')); ?>
								<?php echo $form->error($model,'image'); ?>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label" for="form-field-1">
								<?php echo $form->labelEx($model,'text'); ?>
							</label>
							<div class="col-sm-9">
								<?php echo $form->textArea($model,'text', array('class' => "form-control ckeditor", 'placeholder' => 'Slide title')); ?>
								<?php echo $form->error($model,'text'); ?>
							</div>
						</div>


						<div class="row">
							<div class="col-md-7 col-md-offset-1">
								<i>
									*Note : Check infomation before save !!!!
								</i>
							</div>
							<div class="col-md-3">
								<button class="btn btn-yellow btn-block" type="submit">
									Update Slide <i class="icon-circle-arrow-right"></i>
								</button>
							</div>
						</div>



					     <?php $this->endWidget(); ?>

				

			</div>
			<!--- End pannel body -->



		</div>
			<!--- End panel panel default -->
	</div>
</div>


<script type="text/javascript">
	var ids  ="<?php echo $this->getUniqueId(); ?>";//get Controller name ( like ID values in file menu.php)
	var action_name = "<?php echo Yii::app()->controller->action->id; ?>";
	jQuery(document).ready(function($) {
		actionRun(ids, action_name);

	});


</script>
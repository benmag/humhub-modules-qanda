<?php
/* @var $this QuestionController */
/* @var $model Question */
/* @var $form CActiveForm */
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'question-new_question-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                	<strong>Ask</strong> a new question
	            </div>
	            <div class="panel-body">
	            	<?php echo $form->errorSummary($model); ?>
            		<?php echo $form->error($model,'post_title'); ?>
            		<?php echo $form->textArea($model,'post_title',array('id'=>'contentForm_question', 'class' => 'form-control autosize contentForm', 'rows' => '1', "tabindex" => "1", "placeholder" => "Ask something...")); ?>

                    
                    <div class="contentForm_options">
                    	<?php echo $form->error($model,'post_text'); ?>
                    	<?php echo $form->textArea($model,'post_text',array('id' => "contentForm_answersText", 'rows' => '5', 'style' => 'height: auto !important;', "class" => "form-control contentForm", "tabindex" => "2", "placeholder" => "Question details...")); ?>
                    </div>

					<?php echo CHtml::submitButton('Submit'); ?>
                </div>
            </div>

        </div>
   </div>
</div>

<?php $this->endWidget(); ?>

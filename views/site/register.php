<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?> 
<div class="container">
    
    <!--content -->
    <div class="current-page">
        <?php
        //$this->pageTitle = Yii::app()->name . ' - Register';
        $this->breadcrumbs = array(
            'Register',
        );
        ?>
    </div>
    <!--        <div class="current-page">
                <a href="index.html"><i class="fa fa-home"></i> <i class="fa fa-angle-double-right"></i></a> Request <i class="fa fa-angle-double-right"></i> Incoming Request <i class="fa fa-angle-double-right"></i> All Request
            </div>   / .current-page -->

    <div class="ccr-gallery-ttile">
        <span></span> 
        <p>Register</p>
    </div>
    <div id="big-form" class="well auth-box">
    <p>Please fill out the following form to register:</p> 

    <!-- form --> 


    <div class="form"> 

        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'registration-form',
            'enableAjaxValidation' => false,
        ));
        ?> 

        <p  class="note">Fields  with  <span  class="required">*</span>  are 
            required.</p> 
        <?php echo $form->errorSummary($model); ?> 
        <div class="row"> 
            <?php echo $form->labelEx($model, 'first_name'); ?> 

            <?php echo $form->textField($model, 'first_name'); ?> 
            <?php echo $form->error($model, 'first_name'); ?> 
        </div> 

        <div class="row"> 
            <?php echo $form->labelEx($model, 'last_name'); ?> 
            <?php echo $form->textField($model, 'last_name'); ?> 
            <?php echo $form->error($model, 'last_name'); ?> 
        </div> 

        <div class="row"> 
            <?php echo $form->labelEx($model, 'address'); ?> 
            <?php echo $form->textField($model, 'address'); ?> 
            <?php echo $form->error($model, 'address'); ?> 
        </div> 

        <div class="row"> 
            <?php echo $form->labelEx($model, 'email'); ?> 
            <?php echo $form->textField($model, 'email'); ?> 
            <?php echo $form->error($model, 'email'); ?> 
        </div> 

        <div class="row"> 
            <?php echo $form->labelEx($model, 'date_of_birth'); ?> 
            <?php echo $form->textField($model, 'date_of_birth'); ?> 
            <?php echo $form->error($model, 'date_of_birth'); ?>
        </div> 
        <div class="row"> 
            <?php echo $form->labelEx($model, 'sex'); ?> 
            <?php echo $form->textField($model, 'sex'); ?> 
            <?php echo $form->error($model, 'sex'); ?> 
        </div> 
        <div class="row"> 
            <?php echo $form->labelEx($model, 'username'); ?> 
            <?php echo $form->textField($model, 'username'); ?> 
            <?php echo $form->error($model, 'username'); ?> 
        </div> 
        <div class="row"> 
            <?php echo $form->labelEx($model, 'password'); ?> 
            <?php echo $form->passwordField($model, 'password'); ?> 
            <?php echo $form->error($model, 'password'); ?> 
        </div> 
        <div class="row"> 
            <?php echo $form->labelEx($model, 'repassword'); ?> 
            <?php echo $form->passwordField($model, 'repassword'); ?> 
            <?php echo $form->error($model, 'repassword'); ?> 
        </div> 
        <div class="row buttons"> 
            <?php echo CHtml::submitButton('Register'); ?> 
        </div> 
        <?php $this->endWidget(); ?> 
    </div><!-- form -->
    </div>
</div>
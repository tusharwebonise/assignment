<h1>Contact Sachin</h1>
<?php echo $this->Form->create('contact', array('class' => 'form-horizontal')); ?>

<div class="control-group">
    <label class="control-label" for="inputNameFirst">First Name</label>
    <div class="controls">
        <?php
        echo $this->Form->input('Modelname.0' , array(
            'id' => 'inputNameFirst',
            'placeholder' => 'First Name'))
        ?>
    </div>
</div>
<div class="control-group">
    <label class="control-label" for="inputNameLast">Last Name</label>
    <div class="controls">
        <?php
        echo $this->Form->input('Modelname.0' , array(
            'id' => 'inputNameLast',
            'placeholder' => 'Last Name'))
        ?>
    </div>
</div>
<div class="control-group">
    <label class="control-label" for="inputEmail">Email</label>
    <div class="controls">
        <?php
        echo $this->Form->input('Modelname.0' , array(
            'id' => 'inputEmail',
            'placeholder' => 'Email'))
        ?>
    </div>
</div>
<div class="control-group">
    <label class="control-label" for="message">Message</label>
    <div class="controls">
        <?php
        echo $this->Form->textarea('Modelname.0' , array(
            'id' => 'message',
            'placeholder' => 'Message'))
        ?>
    </div>
</div>
<div class="control-group">
    <div class="controls">
        <?php
        echo $this->Form->button('Submit', array('type'=>'submit', 'class' => 'btn btn-inverse'));
        ?>
    </div>
</div>
<?php echo $this->Form->end(); ?>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
        <fieldset>
            <legend>Sign Up</legend>
            <div class="form-group">
                <?php echo $this -> Form -> control('email',['class'=>'form-control', 'placeholder' => 'Enter email']); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form -> control('phone',['class'=>'form-control','placeholder'=>'Enter Phone Number']) ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->control('password',['type'=>'password','placeholder'=>'Enter your password']) ?>   
            </div>
            <?= $this->Form->button(__('Sign Up'),['class' => 'btn btn-primary']) ?>
        </fieldset>
        <?= $this->Form->end() ?>
</div>

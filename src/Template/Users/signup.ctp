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
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Phone</label>
            <input type="text" class="form-control" id="exampleInputPhone1" name="phone" aria-describedby="emailHelp" placeholder="Enter Phone Number">
            </div>
            <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
            </div>
            <?= $this->Form->button(__('Sign Up'),['class' => 'btn btn-primary']) ?>
        </fieldset>
        <?= $this->Form->end() ?>
</div>

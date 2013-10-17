<div class="form-group">
    <label for="name">Name:</label>
    <input id="name" class="form-control" name="name" type="text" value="<?php echo set_value('name'); ?>">
    <?php echo form_error('name', '<label for="name" class="error">', '</label>'); ?>
</div>
<div class="form-group">
    <label for="email">Email:</label>
    <input id="email" class="form-control" name="email" type="text" value="<?php echo set_value('email'); ?>">
    <?php echo form_error('email', '<label for="email" class="error">', '</label>'); ?>
</div>
<div class="form-group">
    <label for="message">Message:</label>
    <textarea id="message" class="form-control" name="message" rows="5"><?php echo set_value('message'); ?></textarea>
    <?php echo form_error('message', '<label for="message" class="error">', '</label>'); ?>
</div>

<div class="form-group pull-right">
    <label for="captcha">What colour is the sky?</label>
    <input id="captcha" class="form-control" name="captcha" type="text" value="<?php echo set_value('captcha'); ?>">
    <?php echo form_error('captcha', '<label for="captcha" class="error">', '</label>'); ?>
</div>

<div class="clearfix"></div>

<button type="submit" class="btn btn-primary pull-right">Submit</button>

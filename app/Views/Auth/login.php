<?= $this->extend('layouts/auth_layout') ?>
<?= $this->section('main') ?>

<?php if (session()->getFlashdata('success')): ?>
	<div class="notif-success" id="successNotification">
		<span><?= session()->getFlashdata('success') ?></span>
		<button class="close-btn" onclick="closeNotification()">×</button>
	</div>
<?php endif; ?>

<form action="<?= url_to('login') ?>" method="post" class="login-form">
	<?= csrf_field() ?>
	<div class="flex-row">
		<label class="lf--label" for="username">
			<!-- SVG Icon -->
		</label>
		<input id="username" class='lf--input' placeholder='Username' name="username" type='text'>
	</div>
	<div class="flex-row">
		<label class="lf--label" for="password">
			<!-- SVG Icon -->
		</label>
		<input id="password" class='lf--input' placeholder='Password' name="password" type='password'>
	</div>
	<input class='lf--submit' type='submit' value='LOGIN'>
</form>
<a class='lf--forgot' href='#'>Forgot password?</a>

<?= $this->endSection() ?>
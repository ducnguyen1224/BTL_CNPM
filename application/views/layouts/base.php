<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $title ?? 'Admin'; ?></title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
	<script type="text/javascript" src="<?php echo base_url() ?>vendor/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url()?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url()?>vendor/font-awesome.css">
	<link rel="stylesheet" href="<?php echo base_url()?>1.css">
</head>
<body>

<div>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
			<a class="navbar-brand" href="<?= site_url('/') ?>">Admin</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
					aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="<?= site_url('nhansu') ?>">Nhân Sự</a>
					</li>
				</ul>
				<?php if ($this->session->userdata('logged_in')) { ?>
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="<?php echo site_url('auth/logout'); ?>">Logout</a>
						</li>
					</ul>
				<?php } ?>
			</div>
		</div>
	</nav>

	<?php echo $content ?? ''; ?>

</div>
<script src="<?php echo base_url()?>1.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>

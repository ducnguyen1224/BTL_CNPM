<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Profile Card</title>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
	<link rel="stylesheet" href="<?php echo base_url('vendor/bootstrap.css') ?>"
	<link rel="stylesheet" href="<?php echo base_url('vendor/font-awesome.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('1.css') ?>">
</head>

<body>
<div class="container">
</div>
<div class="container">
	<?php foreach ($mangketqua as $value): ?>
		<div class="profile-card">
			<div class="wrapper">
				<div class="background-wrapper">
					<div class="profile-image">
						<img src="<?= $value['avatarimg'] ?>" alt="Avatar"/>
					</div>
				</div>
				<div class="info-wrapper">
					<div class="contents">
						<p class="name"><?= $value['name'] ?></p>
						<div class="socials">
							<a href="<?= $value['linkpin'] ?>" class="social"><i class="fa-brands fa-pinterest"
																				 style="font-size: 150%;"></i></a>
							<a href="<?= $value['linkfb'] ?>" class="social"><i class="fa-brands fa-facebook-f"
																				style="font-size: 150%;"></i></a>
							<a href="<?= $value['linkgit'] ?>" class="social"><i class="fa-brands fa-github"
																				 style="font-size: 150%;"></i></a>
						</div>
						<div class="card-block">
							<div class="card-text-age-phone" style="margin-bottom: 7%;">
								<b>Age</b> : <?= $value['age'] ?>
								<i class="fa-solid fa-phone" style="margin-left:5%"></i> : <?= $value['phone'] ?>
							</div>
							<p class="card-text positon"><b>Position</b> : <?= $value['position'] ?></p>
							<p class="card-text department"><b>Department</b> : <?= $value['department'] ?></p>
							<p class="card-text projects"><b>Completed projects</b> : <?= $value['projects'] ?></p>
							<a href="<?= base_url() ?>/index.php/nhansu/sua_nhansu/<?= $value['id'] ?>"
							   class="social"><i class="fa-sharp fa-solid fa-user-pen"
												 style="margin-right:15%;font-size: 150%;"></i></a>
						</div>
						<p class="socials">
							<a href="<?= base_url() ?>/index.php/nhansu/sua_nhansu/<?= $value['id'] ?>"
							   class="social"><i class="fa-sharp fa-solid fa-user-pen"
												 style="margin-right:15%;font-size: 150%;"></i></a>
							<a href="<?= base_url() ?>/index.php/nhansu/xoa_nhansu/<?= $value['id'] ?>"
							   class="social"><i class="fa-sharp fa-solid fa-trash"
												 style="margin-left:15%;font-size:150%;"></i></a>
						</p>
					</div>
					<svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
						 viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
						<defs>
							<path id="gentle-wave"
								  d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"/>
						</defs>
						<g class="parallax">
							<use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(186,186,119,0.7"/>
							<use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)"/>
							<use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)"/>
							<use xlink:href="#gentle-wave" x="48" y="7" fill="#ffffff"/>
						</g>
					</svg>
				</div>
			</div>
		</div>
	<?php endforeach ?>
</div>
<div class="container">
	<!-- Nút Back về trang chủ -->
	<button onclick="loadHomePage()" class="btn btn-outline-primary">Back to Home</button>

	<script>
		(function ($) {
			function loadHomePage() {
				// Gửi yêu cầu Ajax đến trang chủ
				$.ajax({
					url: '<?= base_url() ?>index.php/nhansu/', // Thay thế '<?= base_url() ?>' bằng đường dẫn đến trang chủ của bạn
					type: 'GET',
					success: function (response) {
						// Cập nhật nội dung của trang hiện tại với nội dung của trang chủ
						$('body').html(response);
					},
					error: function (xhr, status, error) {
						console.error(error);
					}
				});
			}
		})(jQuery);
	</script>
</div>
</body>

</html>

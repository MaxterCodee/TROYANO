<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:title" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:image" content="<?php echo e(asset('social-image.png')); ?>">
    <meta name="format-detection" content="telephone=no">
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs"></script>

    <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/coco-ssd"></script>
    
    <!-- PAGE TITLE HERE -->
    <title>Admin Dashboard</title>
    
    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="<?php echo e(asset('favicon.png')); ?>">
    <link href="<?php echo e(asset('vendor/jquery-nice-select/css/nice-select.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendor/owl-carousel/owl.carousel.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('vendor/nouislider/nouislider.min.css')); ?>">
    
    <!-- Style css -->
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
	
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
		<div class="nav-header">
            <a href="index.html" class="brand-logo">
				<svg class="logo-abbr" width="55" height="55" viewbox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M27.5 0C12.3122 0 0 12.3122 0 27.5C0 42.6878 12.3122 55 27.5 55C42.6878 55 55 42.6878 55 27.5C55 12.3122 42.6878 0 27.5 0ZM28.0092 46H19L19.0001 34.9784L19 27.5803V24.4779C19 14.3752 24.0922 10 35.3733 10V17.5571C29.8894 17.5571 28.0092 19.4663 28.0092 24.4779V27.5803H36V34.9784H28.0092V46Z" fill="url(#paint0_linear)"></path>
					<defs>
					</defs>
				</svg>
				<div class="brand-title">
					<h2 class="">Troyanos.</h2>
				</div>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		<!--**********************************
            Chat box start
        ***********************************-->
		<!--**********************************
            Chat box End
        ***********************************-->
		
		<!--**********************************
            Header start
        ***********************************-->
        <div class="header border-bottom">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
							<div class="dashboard_bar">
                                Dashboard
                            </div>
                        </div>
                    </div>
				</nav>
			</div>
		</div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->
	
        <!--**********************************
            Sidebar start
        ***********************************-->
        
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
		<div class="content-body" style="min-height: 891px;">
			<!-- row -->
			<div class="container-fluid">
				<div class="row">
							<?php echo $__env->yieldContent('content'); ?>
					</div>
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
		


		
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="../index.htm" target="_blank">DexignLab</a> 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->
		
        <!--**********************************
           Support ticket button end
        ***********************************-->


	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <!-- Required vendors -->

    <script src="<?php echo e(asset('vendor/global/global.min.js')); ?>"></script>

    <script src="<?php echo e(asset('vendor/chart.js/Chart.bundle.min.js')); ?>"></script>

    <script src="<?php echo e(asset('vendor/jquery-nice-select/js/jquery.nice-select.min.js')); ?>"></script>



    <!-- Apex Chart -->

    <script src="<?php echo e(asset('vendor/apexchart/apexchart.js')); ?>"></script>



    <script src="<?php echo e(asset('vendor/chart.js/Chart.bundle.min.js')); ?>"></script>



    <!-- Chart piety plugin files -->

    <script src="<?php echo e(asset('vendor/peity/jquery.peity.min.js')); ?>"></script>

    <!-- Dashboard 1 -->

    <script src="<?php echo e(asset('js/dashboard/dashboard-1.js')); ?>"></script>



    <script src="<?php echo e(asset('vendor/owl-carousel/owl.carousel.js')); ?>"></script>



    <script src="<?php echo e(asset('js/custom.min.js')); ?>"></script>

    <script src="<?php echo e(asset('js/dlabnav-init.js')); ?>"></script>

    <script src="<?php echo e(asset('js/demo.js')); ?>"></script>

    <script src="<?php echo e(asset('js/styleSwitcher.js')); ?>"></script>


	<script>
		function cardsCenter()
		{
			
			/*  testimonial one function by = owl.carousel.js */
			
	
			
			jQuery('.card-slider').owlCarousel({
				loop:true,
				margin:0,
				nav:true,
				center:true,
				slideSpeed: 3000,
				paginationSpeed: 3000,
				dots: true,
				navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
				responsive:{
					0:{
						items:1
					},
					576:{
						items:1
					},	
					800:{
						items:1
					},			
					991:{
						items:1
					},
					1200:{
						items:1
					},
					1600:{
						items:1
					}
				}
			})
		}
		
		jQuery(window).on('load',function(){
			setTimeout(function(){
				cardsCenter();
			}, 1000); 
		});
		
	</script>

</body>
</html>
<?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/maximiliano/Desktop/TROYANO/resources/views/app.blade.php ENDPATH**/ ?>
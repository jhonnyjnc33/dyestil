<header>
	{{-- @include("components.barinfo") --}}
	<!-- tt-mobile menu -->
	<nav class="panel-menu mobile-main-menu">
		<ul>
			<li><a href="index.html">HOME</a></li>
			<li><a href="listing-left-column.html">SHOP</a></li>
			<li><a href="blog-listing-without-col.html">BLOG</a></li>
		</ul>
		<div class="mm-navbtn-names">
			<div class="mm-closebtn">Close</div>
			<div class="mm-backbtn">Back</div>
		</div>
	</nav>
	<!-- tt-mobile-header -->
	<div class="tt-mobile-header">
		<div class="container-fluid">
			<div class="tt-header-row">
				<div class="tt-mobile-parent-menu">
					<div class="tt-menu-toggle">
						<i class="icon-03"></i>
					</div>
				</div>
				<!-- search -->
				<div class="tt-mobile-parent-search tt-parent-box"></div>
				<!-- /search -->
				<!-- cart -->
				<div class="tt-mobile-parent-cart tt-parent-box"></div>
				<!-- /cart -->
				<!-- account -->
				<div class="tt-mobile-parent-account tt-parent-box"></div>
				<!-- /account -->
				<!-- currency -->
				<div class="tt-mobile-parent-multi tt-parent-box"></div>
				<!-- /currency -->
			</div>
		</div>
		<div class="container-fluid tt-top-line">
			<div class="row">
				<div class="tt-logo-container">
					<!-- mobile logo -->
					<a class="tt-logo tt-logo-alignment" href="index.html"><img src="{{asset('vendor/images/custom/logo.jpeg')}}" alt=""></a>
					<!-- /mobile logo -->
				</div>
			</div>
		</div>
	</div>
	<!-- tt-desktop-header -->
	<div class="tt-desktop-header">
		<div class="container">
			<div class="tt-header-holder">
				<div class="tt-obj-logo obj-aligment-center">
					<!-- logo -->
					<a class="tt-logo tt-logo-alignment" href="index.html"><img src="{{asset('vendor/images/custom/logo.jpeg')}}" alt=""></a>
					<!-- /logo -->
				</div>
				{{-- @include("components.baroptions") --}}
			</div>
		</div>
		<div class="container">
			<div class="tt-header-holder">
				<div class="tt-obj-menu obj-aligment-center">
					<!-- tt-menu -->
					<div class="tt-desctop-parent-menu tt-parent-box">
						<div class="tt-desctop-menu tt-menu-small">
							<nav>
								<ul>
									<li class="dropdown tt-megamenu-col-02 selected"><a href="#">HOME</a></li>
									<li class="dropdown megamenu"><a href="listing-collection.html">SHOP</a></li>
									<li class="dropdown tt-megamenu-col-01"><a href="blog-listing-without-col.html">BLOG</a></li>
								</ul>
							</nav>
						</div>
					</div>
					<!-- /tt-menu -->
				</div>
			</div>
		</div>
	</div>
	<!-- stuck nav -->
	<div class="tt-stuck-nav">
		<div class="container">
			<div class="tt-header-row ">
				<div class="tt-stuck-parent-menu"></div>
				<div class="tt-stuck-parent-search tt-parent-box"></div>
				<div class="tt-stuck-parent-cart tt-parent-box"></div>
				<div class="tt-stuck-parent-account tt-parent-box"></div>
				<div class="tt-stuck-parent-multi tt-parent-box"></div>
			</div>
		</div>
	</div>
</header>
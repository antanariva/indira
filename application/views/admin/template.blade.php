@include('admin.head')
	<body id="body" class="admin">
		<input hidden style="display:none" id="loader" name="loader" value="{{ rawurlencode(Config::get('application.default_loader')) }}" />
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span4">
					<h1>Indira<sup><i class="icon-lemon"></i></sup><sub>CMS</sub></h1>
				</div>
				<div class="8">
				</div>
			</div>
		</div>
		<div id="main_container" class="container-fluid">
			<div class="inner">
				<div class="row-fluid">
					<div class="span12">
						@include('admin.sidebar')
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<div id="work_area">
							@section('content_area')
							@yield_section
						</div>
					</div>
				</div>
			</div>
		</div>
		@include('admin.assets.footer')
		@include('admin.assets.password_recovery')
	</body>
</html>
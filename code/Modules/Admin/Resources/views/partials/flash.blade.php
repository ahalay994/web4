@if (session()->has('msg.success'))
<div class="alert bg-success alert-styled-left">
	<button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only"></span></button>
	{{ session('msg.success') }}
</div>
@endif

@if (session()->has('msg.error'))
<div class="alert bg-danger alert-styled-left">
	<button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Закрыть</span></button>
	{{ session('msg.error') }}
</div>
@endif
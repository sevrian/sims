<form id="hapus" action="{{route($setting->delete['url'],$row->id)}}" method="POST">
	 @csrf
	 @method('DELETE')	
	<div class="">
		@if($setting->edit['status'])
		<a class="btn btn-warning btn-sm" href="{{route($setting->edit['url'],$row->id)}}">Edit</a>		
		@endif
		@if($setting->delete['status'])
		<button type="submit"   class="btn btn-danger waves-effect waves-light btn-sm">Hapus</button>
		@endif
	</div>
</form>
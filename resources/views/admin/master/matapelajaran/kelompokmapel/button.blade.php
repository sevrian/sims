<form id="hapus{{$row->id}}" action="{{route($setting->delete['url'],$row->id)}}" method="POST">
	 @csrf
	 @method('DELETE')	
	<div class="">
		@if($setting->edit['status'])
		<a class="btn btn-warning btn-sm" href="{{route($setting->edit['url'],$row->id)}}">Edit</a>		
		@endif
		@if($setting->delete['status'])
		<button type="button" onclick="hapus(this)" id="{{$row->id}}"  class="btn btn-danger waves-effect waves-light btn-sm">Hapus</button>
		@endif
	</div>
</form>
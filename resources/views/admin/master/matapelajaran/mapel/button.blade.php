<form id="hapus{{$row->id}}" action="{{route($setting->delete['url'],$row->id)}}" method="POST">
	 @csrf
	 @method('DELETE')	
	<div class="btn-group">
		@if($setting->edit['status'])
		<a class="btn btn-warning btn-md" href="{{route($setting->edit['url'],$row->id)}}"><span class="feather icon-edit"></span></a>		
		@endif
		@if($setting->delete['status'])
		<button type="button" onclick="hapus(this)" id="{{$row->id}}"  class="btn btn-danger waves-effect waves-light btn-md"><span class="feather icon-trash"></span></button>
		@endif
	</div>
</form>
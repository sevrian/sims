<?php 

function actionbtn($id,$setting){
	echo '
	<form id="hapus'.$id.'" action="'.route($setting->delete['url'],$id).'" method="POST">
		'.$setting->extend.'
		<div class="btn-group">';
			if($setting->edit['status']){
				echo '
				<a class="btn btn-warning btn-md" href="'.route($setting->edit['url'],$id).'"><span class="feather icon-edit"></span></a>';
			}
			if($setting->delete['status']){
				echo '
				<button type="button" onclick="hapus(this)" id="{{$id}}"  class="btn btn-danger waves-effect waves-light btn-md"><span class="feather icon-trash"></span></button>';
			}
		echo '	
		</div>
	</form>';
}
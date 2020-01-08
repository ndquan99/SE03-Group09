@extends('admin.master_admin')
@section('content')
	
			<div class = "col-lg-12">
					<h1 class="page-header">Người dùng
						<small>Sửa</small>
					</h1>
			</div>
			<div class="col-12" style="padding-bottom:120px">
					@include('admin.block.error')
					@include('admin.thongbao')
					<form id = "form_edit" action="{!! URL::route('admin.user.edit', $user->id) !!}" method="POST" enctype="multipart/form-data" >
						
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<input type = "hidden" name = "id" autofocus="autofocus"  value="{!! $user->id !!}" ></input>
						
						<div class="form-group">		
							<label>Tên người dùng</label>
							<input  class = "form-control input" id = "name" type = "text" name = "name" autofocus="autofocus"  value="{!! $user->name !!}" placeholder = "Tên người dùng"></input>
						</div>				
					
						<div class="form-group">
						
							<input id = "changePassword" type = "checkbox" onclick="doimail(this)" name = "changeEmail"></input><label>Đổi email</label>
							<input class = "form-control input" id = "email" type = "email" name = "email" autofocus="autofocus"  value="{!! $user->email !!}" placeholder = "Email" disabled=""></input>

						</div>	
					
						<div class="form-group">
							<input id = "changePassword" type = "checkbox" onclick="changePassWord(this)" name = "changePass"></input><label>Đổi mật khẩu</label>
							<input class="form-control input" id = "password" type = "password" name = "password" placeholder = "Đổi Mật khẩu"  disabled = ""></input>
						</div>
									
						<div class="form-group">
							<label>Nhập lại mật khẩu</label>
							<input class="form-control input" id = "passwordAgain" type = "password" name = "passwordAgain" placeholder = "Nhập lại mật khẩu"  disabled=""></input>
						</div>
						
						<div class="form-group">
							<label style="display: inherit;">Ảnh đại diện</label>
							<img id = "avar" name = "avar"  width="100px" height="30%" alt="avatar" src="{{asset($user->user_avartar)}}" accept="image/*"/>
							<input style="margin-top: 5px;" type = "file"  name = "avatar" value="{{asset($user->user_avartar)}}"  onchange="readURL(this);"></input>
							<script>
								function readURL(input) {
										if (input.files && input.files[0]) {
											var reader = new FileReader();
											reader.onload = function (e) {
												$('#avar')
													.attr('src', e.target.result)
													.width(150)
													.height(150);	
											};
											reader.readAsDataURL(input.files[0]);
										}
								}
							</script>
						</div>	
					
						<div class="form-group">
							<label >Level</label>
							<label class="radio-inline">
								<input type = "radio" name = "type" @if("$user->user_type"==1) checked="checked" @endif value="1">Admin</input>
							</label>
							<label class="radio-inline">
								<input type = "radio" name = "type" @if("$user->user_type"==0) checked="checked" @endif value="0">Thường</input>
							</label>
						</div>
						
						<button type = "submit" class="btn btn-default " onclick = "save_function()" style="background-color:#b4f1ee">Lưu</button>
						<button type="button" class="btn btn-default " onclick = "cancel_function()" style="margin-left: 28px;background-color:#b4f1ee">Cancel</button>
						
					</form>
		</div>
	
		<script>
			function cancel_function(){
				window.location.href = "{{route('admin.user.getList')}}";

			}
			function changePassWord(object){
				var inputpassword = document.getElementById('password');
				var inputpasswordAgain = document.getElementById('passwordAgain');
				if(object.checked == true){
					inputpassword.disabled = false;
					inputpasswordAgain.disabled = false;
				}
				else{
					inputpassword.disabled = true;
					inputpasswordAgain.disabled = true;
				}
			}
			function doimail(object){
				var emailObject = document.getElementById('email');
				console.log(emailObject);
				if(object.checked == true){
					emailObject.disabled = false;
					emailObject.disabled = false;
				}
				else{
					emailObject.disabled = true;
					emailObject.disabled = true;
				}
			}
		</script>
	</div>
@endsection()
@section('script')
	
@endsection

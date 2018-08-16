@extends('Layouts.Customer.background')
@section('contents')

    @include('Repeat.Customer.backgroundheader')

    <div class="container-fluid" style="margin-top: 40px;">
        <div class="row">

            @include('Repeat.Customer.backgroundmenu')

            <div id="main_right" class="col-md-10" style="width:88.33333333%;">

                <div class="col-md-12">

                    <div class="row">

                        <div class="col-md-4 col-md-offset-4" style="text-align: center;">
                            <h2>客戶-(修改)簡訊群組</h2>
                        </div>

                    </div>

                    <div class="row" style="margin:20px 0px;">
                        <p>工具說明</p>
                        <p>修改客戶群組。</p>
                    </div>
					<div class="row" style="margin:20px 0px;">
                        <div class="col-md-12">
                            {!! Form::open(['id' => 'smsgroupupdate', 'action' => ['CustomerGroupController@update', $customergroup->id], 'method' => 'PUT', 'files' => true ]) !!}


                            <div class="row">
                                <div class="col-md-12" style="height: 97px;">
                                    <div class="form-group">
                                        <label for="name">名稱</label>
                                        <input value="{{ $customergroup->name }}" id="name" name="name" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>

							<div class="row" style="margin:0px 0px 10px 0px">
								<p>請點選需要加入群組的客戶</p>
								<div class="col-md-12" style="border-radius: 5px;overflow-y: scroll;height: 300px;border: 1px solid #dddddd;">
									@foreach($reinfo as $reinfovalue)
									<div class="col-md-3" style="margin: 15px 0px 10px 0px;text-align: center;">
										<div class="input-group">
											<div class="input-group-addon">
												<input {{ (($reinfovalue['check'] == 1) ?'checked':'') }} type="checkbox" name="addcheckboxgroup[]" value="{{ $reinfovalue['id'] }}">
											</div>
											<input value="{{ $reinfovalue['name'] }} ( {{ $reinfovalue['phone'] }} )" style="text-align: center;" type="text" class="form-control" disabled="true">
										</div>
									</div>
									@endforeach
								</div>
							</div>							

                            <div class="row">

                                <div class="col-md-12" style="text-align: right;">
                                    <button onclick="btn_check_submit()" type="button" class="btn btn-primary">修改</button>
                                </div>

                            </div>

                            {!! Form::close() !!}
                        </div>
                    </div>                    

                </div>
            </div>

        </div>
    </div>

@endsection

@section('scripts')
	<script type="text/javascript">
		$("#main_left").css({ "min-height" : ($( window ).height() - 50) });
		function btn_check_submit(){
		    let Check_Tmp = '';

		    if( $("#name").val() == ""){
		    	alert("名稱不能為空");
		    }else{
		     	if($('input[name="addcheckboxgroup[]"]:checked').length <=0){
		     		alert("請選擇需要加入的客戶...");
		        }else{
					if(confirm("確定修改？？")){
						$("#smsgroupupdate").submit();
					}
		        };   	
		    }
		};
	</script>
@endsection

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
                            <h2>客戶-(新增)簡訊群組</h2>
                        </div>

                    </div>

                    <div class="row" style="margin:20px 0px;">
                        <p>工具說明</p>
                        <p>建立新的客戶群組。</p>
                    </div>

                    <div class="row" style="margin:20px 0px;">
                        <div class="col-md-12">
                            {!! Form::open([ 'method' => 'POST', 'files' => true ]) !!}

                            <div class="row">

                                <div class="col-md-6" style="height: 97px;">
                                    <div class="form-group">
                                        <label for="name">名稱</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-6" style="height: 97px;">
                                    <div class="form-group">
                                        <label for="name">類型</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                            </div>

                            <div class="row" style="margin:0px 0px 10px 0px">
                                <p>請點選需要加入群組的客戶</p>
                                <div class="col-md-12" style="border-radius: 5px;overflow-y: scroll;height: 300px;border: 1px solid #dddddd;">
                                    @for($i=0;$i<40;$i++)
                                    <div class="col-md-3" style="margin: 15px 0px 10px 0px;text-align: center;">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <input type="checkbox" name="addcheckboxgroup[]" value="1">
                                            </div>
                                            <input placeholder="鄒年寶 ( 09xxxxxxxx )" style="text-align: center;" type="text" class="form-control" disabled="true">
                                        </div>
                                    </div>
                                    @endfor
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-12" style="text-align: right;">
                                    <button type="submit" class="btn btn-primary">送出</button>
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

@endsection

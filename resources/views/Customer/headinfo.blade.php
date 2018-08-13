@extends('Layouts.Customer.background')
@section('contents')

    @include('Repeat.Customer.backgroundheader')

    <div class="container-fluid" style="margin-top: 40px;">
        <div class="row">

            @include('Repeat.Customer.backgroundmenu')

            <div id="main_right" class="col-md-10" style="width:88.33333333%;">

                <div class="col-md-12">

                    <div class="row">
                        <div class="col-md-4" style="margin-top: 20px;">
                            {{--<a href="{{ url('success') }}" class="btn btn-warning">返回</a>--}}
                        </div>
                        <div class="col-md-4" style="text-align: center;">
                            <h2>管理者設定</h2>
                        </div>
                    </div>

                    <div class="row" style="margin:20px 0px;">
                        <p>工具說明</p>
                        <p>管理者：目前擁有此系統的設定。</p>
                        <p>ＳＭＳ：設定主要發送擁有者( 主要:管理者 )。</p>
                    </div>

                    <div class="row" style="margin:20px 0px;">

                        <div class="col-md-6" style="padding-left: 0;">

                            {!! Form::open(['id'=>'hrform','method'=>'POST', 'files'=>true]) !!}
                            <input type="hidden" name="hr" value="1">

                            <div class="form-group">
                                <p>管理者設定</p>
                            </div>

                            <div style="height: 97px;margin-bottom: 0px;" class="form-group {{ $errors->has('uid') ? ' has-error' : '' }}">
                                <label for="uid">帳號</label>
                                <input type="text" class="form-control" name="uid" id="uid" value="1">
                                @if ($errors->has('uid'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('uid') }}</strong>
                                        </span>
                                @endif
                            </div>
                            <div style="height: 97px;margin-bottom: 0px;" class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password">密碼</label>
                                <input type="text" class="form-control" id="password" name="password" placeholder="密碼不顯示，直接填寫進行修正">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <button type="button" onclick="btnhr()"  class="btn btn-block btn-warning">修改</button>
                            </div>
                            {!! Form::close() !!}
                        </div>

                        <div class="col-md-6" style="padding-left: 0;">
                            {!! Form::open(['id'=>'smsform', 'method'=>'POST', 'files'=>true]) !!}
                            <input type="hidden" name="hr" value="2">
                            <div class="form-group">
                                <p>SMS簡訊設定</p>
                            </div>
                            <div style="height: 97px;margin-bottom: 0px;" class="form-group {{ $errors->has('smsid') ? ' has-error' : '' }}">
                                <label for="smsid">帳號 (手機號)</label>
                                <input type="text" class="form-control" name="smsid" id="smsid" value="1">
                                @if ($errors->has('smsid'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('smsid') }}</strong>
                                        </span>
                                @endif
                            </div>
                            <div style="height: 97px;margin-bottom: 0px;" class="form-group {{ $errors->has('smspwd') ? ' has-error' : '' }}">
                                <label for="smspwd">密碼</label>
                                <input type="text" class="form-control" id="smspwd" name="smspwd" value="1">
                                @if ($errors->has('smspwd'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('smspwd') }}</strong>
                                        </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <button type="button" onclick="btnsms()" class="btn btn-block btn-warning">修改</button>
                            </div>
                            {!! Form::close() !!}
                        </div>

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

        function btnhr(){
            if(confirm("確定修改？？")){
                // $("#hrform").submit();
            };
        };

        function btnecpay(){
            if(confirm("確定修改？？")){
                // $("#ecpayform").submit();
            };
        };

        function btnsms(){
            if(confirm("確定修改？？")){
                // $("#smsform").submit();
            };
        };

    </script>
@endsection

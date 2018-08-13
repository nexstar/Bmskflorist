@extends('Layouts.Customer.background')
@section('contents')

    @include('Repeat.Customer.backgroundheader')

    <div class="container-fluid" style="margin-top: 40px;">
        <div class="row">

            @include('Repeat.Customer.backgroundmenu')

            <div id="main_right" class="col-md-10" style="overflow-y: scroll;width:88.33333333%;">

                <div class="col-md-12">

                    <div class="row">
                        <div class="col-md-4" style="margin-top: 20px;">
                            {{--<a href="{{ url('success') }}" class="btn btn-warning">返回</a>--}}
                        </div>
                        <div class="col-md-4" style="text-align: center;">
                            <h2>新增客戶資料</h2>
                        </div>
                    </div>

                    <div class="row" style="margin:20px 0px;">
                        <p>工具說明</p>
                        <p>針對新的客戶做紀錄新增。</p>
                    </div>

                    <div class="row" style="margin:20px 0px;">
                        {!! Form::open([ 'method' => 'POST', 'files' => true ]) !!}
                        {{--個人--}}
                        <div class="col-md-12" style="margin-bottom: 20px;border-bottom: 1px solid #dddddd;">
                            <div class="col-md-2" style="height: 97px;">
                                <div class="form-group">
                                    <label for="name">私人-行動電話</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-2" style="height: 97px;">
                                <div class="form-group">
                                    <label for="name">姓氏</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-2" style="height: 97px;">
                                <div class="form-group">
                                    <label for="name">名字</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-2" style="height: 97px;">
                                <div class="form-group">
                                    <label for="name">英文名</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-2" style="height: 97px;">
                                <div class="form-group">
                                    <label for="name">暱稱</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-2" style="height: 97px;">
                                <div class="form-group">
                                    <label for="name">生日</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-2" style="height: 97px;">
                                <div class="form-group">
                                    <label for="name">性別</label>
                                    {!! Form::select('sex', [ 0 => '女性', 1 => '男性' ], 1, ['class' => 'form-control']) !!}
                                </div>
                            </div>

                            <div class="col-md-2" style="height: 97px;">
                                <div class="form-group">
                                    <label for="name">年齡</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4" style="height: 97px;">
                                <div class="form-group">
                                    <label for="name">住家-國家/地區</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-2" style="height: 97px;">
                                <div class="form-group">
                                    <label for="name">住家-室內電話</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-2" style="height: 97px;"></div>

                            <div class="col-md-6" style="height: 97px;">
                                <div class="form-group">
                                    <label for="name">住家-地址</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6" style="height: 97px;">
                                <div class="form-group">
                                    <label for="name">私人-電子郵件</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>

                        {{--公司--}}
                        <div class="col-md-12" style="margin-bottom: 20px;border-bottom: 1px solid #dddddd;">
                            <div class="col-md-4" style="height: 97px;">
                                <div class="form-group">
                                    <label for="name">公司名</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-2" style="height: 97px;">
                                <div class="form-group">
                                    <label for="name">部門</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-2" style="height: 97px;">
                                <div class="form-group">
                                    <label for="name">職稱</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-2" style="height: 97px;">
                                <div class="form-group">
                                    <label for="name">公司-統一編號</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-2" style="height: 97px;">
                                <div class="form-group">
                                    <label for="name">公司-室內電話</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4" style="height: 97px;">
                                <div class="form-group">
                                    <label for="name">公司-地址</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4" style="height: 97px;">
                                <div class="form-group">
                                    <label for="name">公司-電子郵件</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4" style="height: 97px;">
                                <div class="form-group">
                                    <label for="name">公司-網址</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-3" style="height: 97px;">
                                <div class="form-group">
                                    <label for="name">公司-傳真號碼</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-3" style="height: 97px;">
                                <div class="form-group">
                                    <label for="name">公司-電話</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-3" style="height: 97px;">
                                <div class="form-group">
                                    <label for="name">公司-行動電話</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="col-md-12">
                                <div class="form-group {{ $errors->has('note') ? ' has-error' : '' }}">
                                    <label for="note">備註</label>
                                    <textarea id="note" name="note" style="font-size: 15px;border-radius: 5px;width: 100%;height: 150px;resize: none;background-color: rgba(155,155,155,0);border: 1px solid #dddddd;"></textarea>
                                    @if ($errors->has('note'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('note') }}</strong>
                                            </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-12" style="text-align: right;">
                                <button type="submit" class="btn btn-primary">儲存</button>
                            </div>
                        </div>

                        {!! Form::close() !!}
                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection

@section('scripts')

    <script type="text/javascript">
        $("#main_right").css({ "max-height" : ($( window ).height() - 50) });
    </script>

@endsection

@extends('Layouts.Customer.background')
@section('contents')

    @include('Repeat.Customer.backgroundheader')

    <div class="container-fluid" style="margin-top: 40px;">
        <div class="row">

            @include('Repeat.Customer.backgroundmenu')

            <div id="main_right" class="col-md-10" style="width:88.33333333%;">
                <div class="col-md-12">

                    <div class="row" style="margin:20px 0px;">
                        <p>工具說明</p>
                        <p>發送：利用勾選，選出發送的對象。</p>
                        <p>新增：點選新增客戶資料。</p>
                        <p>修改與刪除：每一位客戶都擁有。</p>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            {{--{!! Form::open(['id' => 'ch_data_id','method' => 'POST','files' => true]) !!}--}}
                            {{--<button onclick="btn_check_submit()" type="button" class="btn btn-primary" style="border: 0;background-color: #80B1EA;">發訊息</button>--}}
                            {{--{!! Form::close() !!}--}}
                            <a href="{{ url('sms') }}" class="btn btn-primary" style="border: 0;background-color: #80B1EA;">發訊息</a>
                        </div>
                        <div class="col-md-4 col-md-offset-4" style="text-align: right;">
                            <a href="#" class="btn btn-primary" style="border: 0;background-color: #8AAC68;">匯出會員資料</a>
                            <a href="{{ url('create') }}" class="btn btn-primary" style="border: 0;background-color: #80B1EA;margin-right: 20px;">新增客戶資料</a>
                        </div>
                    </div>

                    <div id="main_table" class="col-md-12" style="margin-top: 15px;">
                        <div class="row">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>
                                        <input type="checkbox" name="ch_all">
                                    </th>
                                    <th>姓名</th>
                                    <th>性別</th>
                                    <th>電話</th>
                                    <th>註解</th>
                                    <th>動作</th>
                                </tr>
                                </thead>
                                <tbody id="main_table_tbody">
                                @for($i=0;$i<5;$i++)
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="ch_user[]" value="1">
                                        </td>
                                        <td>鄒年寶</td>
                                        <td>男性</td>
                                        <td>09xxxxxxxx</td>
                                        <td style="width: 50%">
                                            <p class="text-justify">
                                                根據中央氣象局通報，原位於關島北北西方海面的熱帶性低氣壓已於今天凌晨2時，增強為今年第15號颱風麗琵（Leepi），預計將朝北北西方向前進。
                                                中央氣象局指出，輕度颱風麗琵，中心位置位於北緯20.90度、東經143.50度，以每小時19公里速度，向北北西進行。颱風中心氣壓998百帕，近中心最大風速每秒18公尺，瞬間最大陣風每秒25公尺，七級風半徑100公里。
                                                此外，日本放送協會（NHK）報導，第15號颱風於12日凌晨在小笠原群島近海生成。
                                                報導稱，根據日本氣象廳觀測，12日凌晨0時（台灣11日晚間11時），位於小笠原群島近海的熱帶性低氣壓已變成第15號颱風，中心氣壓998百帕，近中心最大風速每秒20公尺，瞬間最大陣風每秒30公尺，中心東側220公里以內以及中心西側110公里以內，吹著每秒15公尺以上強風。
                                            </p>
                                        </td>
                                        <td>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <button onclick="btn_remove_submit('1')" type="button" class="btn btn-block btn-danger">刪除</button>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <a href="{{ url('edit') }}" class="btn btn-block btn-warning">修改</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endfor
                                </tbody>
                            </table>
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

        var _main_table = $( window ).height() - 255;
        $("#main_table").css({"height":_main_table, "overflow-y": "scroll"});

        $('input[name="ch_all"]').on('click',function(){
            $('input[name="ch_user[]"]').prop( "checked", false );
            if($('input[name="ch_all"]:checked').length > 0){
                $('input[name="ch_user[]"]').prop( "checked", true );
            };
        });

        function btn_check_submit(){
            let Check_Tmp = '';
            if($('input[name="ch_user[]"]:checked').length >= 1){
                $('input[name="ch_user[]"]:checked').each(function(i){
                    Check_Tmp += '<input type="hidden" name="ch_data[]" value="'+$(this).val()+'">';
                });
                console.log(Check_Tmp);
                // $("#ch_data_id").append(Check_Tmp).submit();
            }else{
                alert("請選擇需要發送的客戶...");
            };
        };

        function btn_modify_submit($data){
            if(confirm("確定修改？？")){
                alert("確定修改");
                // $("#modifyform"+$data).submit();
            };
        };

        function btn_remove_submit($data){
            if(confirm("確定刪除？？")){
                alert("確定刪除");
                // $("#removeform"+$data).submit();
            };
        };

    </script>

    <style type="text/css">
        table, th{
            text-align: center;
        }
        input[type="checkbox"] {
            width: 20px;height: 20px;
        }
    </style>
@endsection

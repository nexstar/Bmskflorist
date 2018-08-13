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
                            <h2>客戶-簡訊群組</h2>
                        </div>

                    </div>

                    <div class="row" style="margin:20px 0px;">
                        <p>工具說明</p>
                        <p>利用群組把同性質的客戶結合，同時發送訊息。</p>
                    </div>

                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4 col-md-offset-4" style="text-align: right;">
                            <a href="{{ url('GroupSms/create') }}" class="btn btn-primary">增加新群組</a>
                        </div>
                    </div>

                    <div id="main_table" class="col-md-12" style="margin-top: 15px;">
                        <div class="row">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>發送</th>
                                    <th>名稱</th>
                                    <th>人數</th>
                                    <th>備註</th>
                                    <th>動作</th>
                                </tr>
                                </thead>
                                <tbody id="main_table_tbody">
                                @for($i=0;$i<5;$i++)
                                    <tr>
                                        <td style="width:5%;">
                                            <a href="{{ url('sms') }}" class="btn btn-block btn-primary">進入發送區</a>
                                        </td>
                                        <td>好客人</td>
                                        <td>30</td>
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
                                                    <a href="#" class="btn btn-block btn-danger">刪除</a>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <a href="{{ route('GroupSms.edit', $i) }}" class="btn btn-block btn-warning">修改</a>
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
        var _main_table = $( window ).height() - 255;
        $("#main_table").css({"height":_main_table, "overflow-y": "scroll"});
    </script>
    <style type="text/css">
        table, th{
            text-align: center;
        }
    </style>
@endsection

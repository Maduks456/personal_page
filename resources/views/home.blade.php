<x-layout>
    <div class="main">
        <div class="main_title">
            @guest
                <h1>Hello Guest<br> to my page </h1>
                @endguest
                @auth
                   <h1>Hello Maduks :)</h1> 
                @endauth
        </div>
        <div class="short_hor-line"></div>
        <div class="main_box_column">
            <div class="main_box_side">
                <div class="main_box_side_title">
                    <h2>Calender</h2> 
                </div>
            </div>
            <div class="main_box_side">
                <div class="main_box_side_box">
                    <div>
                        <h3>About The Calender</h3>
                    </div>
                    <div class="left">
                        <p>In the calender you can see  which days I (Maduks) have created or updated a project info on the database.</p>
                        <p><b class="green">Green</b> means i have added a new project. </p>
                        <p><b class="yellow">Yellow</b> means i have updated a project info.</p>
                        <p>If its a graidiant than both happened.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="short_hor-line"></div>
        <div class="main_box_column">
                <div class="main_title">
                    <h2>
                        @if($month-1 < 1)
                            <a href="/?month=12&year={{$year-1}}">Prev</a>
                        @else
                            <a href="/?month={{$month-1}}&year={{$year}}">Prev</a>
                        @endif

                        | {{$lable}} | 
                        @if($month+1 > 12)
                            <a href="/?month=1&year={{$year+1}}">next</a>
                        @else
                            <a href="/?month={{$month+1}}&year={{$year}}">next</a>
                        @endif
                    </h2>
                </div>
                <div>
                    <div class="grid_days">
                        <div>Monday</div>
                        <div>Tuesday</div>
                        <div>Wendsday</div>
                        <div>thursday</div>
                        <div>friday</div>
                        <div>saturday</div>
                        <div>sunday</div>
                    </div>
                    <div class="grid">
                        @for($i =0;$i < $startofmonth; $i++)
                            <div></div>
                        @endfor
                        @for($i=0; $i< $days; $i++)
                            @if(in_array($i+1,$createddays->toArray()) && in_array($i+1,$updateddays->toArray()))
                            <div class="grid_div graidiant">{{$i+1}}</div>
                            @elseif(in_array($i+1,$createddays->toArray()))
                                <div class="grid_div green_body">{{$i+1}}</div>
                            @elseif(in_array($i+1,$updateddays->toArray()))
                                <div class="grid_div yellow_body">{{$i+1}}</div>
                            @else
                                <div class="grid_div">{{$i+1}}</div>
                            @endif
                        @endfor
                    </div>
                </div>
            </div>
    </div>
</x-layout>

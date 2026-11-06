<x-layout>
    <div class="main">
        <div class="main_title">
            <h1>About me<br>myself and I</h1>
        </div>
        <div class="short_hor-line"></div>
        <div class="main_box_column">
            <div class="about_box">
                <div></div>
                <div class="big_text">
                    Hello!
                </div>
                <div class="main_text">
                    <p>
                        Hello, My name is Madars Eduards Dāvis. Im 18 years old.<br> I havent been programming a long time but the first time I work any programming langueges<br> was in the 9th grade about HTML and CSS. Those lesons where the funnest<br> and coolest things I had done and see a website that I made with my own hands was so amaizing. <br>I feel like my passion about programming came from those lesons and art.  
                    </p>
                </div>
                <div></div>
            </div>
            <div class="short_hor-line"></div>
            <div class="about_box">
                <div></div>
                <div class="main_text">
                    <p>
                        HTML, PHP, Laravel, C++, MySQL and VS Code
                    </p>
                </div>
                <div class="big_text">
                    Technologies <br>and Tools
                </div>
                <div></div>
            </div>
            <div class="short_hor-line"></div>
            <div class="about_box">
                <div></div>
                <div class="big_text">
                    Contacts:
                </div>
                <div class="main_text">
                    <p>Gmail: <a href="mailto:ipa24.m.davis@vtdt.edu.lv">ipa24.m.davis@vtdt.edu.lv</a></p><br>
                    <p>GitHub: <a href="https://github.com/Maduks456">https://github.com/Maduks456</a></p><br>
                    <p>Discord: @maduks456</p>
                </div>
                <div></div>
            </div>
        </div>
        <div class="short_hor-line"></div>
        <div class="main_box_column">
            <div class="main_box_side">
                <div class="main_box_side_title">
                    <h2>Calendar</h2> 
                </div>
            </div>
            <div class="main_box_side">
                <div class="main_box_side_box">
                    <div>
                        <h3>About The Calendar</h3>
                    </div>
                    <div class="left">
                        <p>In the calendar you can see  which days I (Maduks) have created or updated a project info on the database.</p>
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

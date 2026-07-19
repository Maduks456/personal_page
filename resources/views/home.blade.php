<x-layout>
    Hello guest to my page 
    <a href="/login">login qwick
    </a>
    {{now()->format(' F j, Y')}}
    <div class="flex">
        <div>
            @if($month-1 < 1)
                <a href="/?month=12&year={{$year-1}}">Prev</a>
            @else
                 <a href="/?month={{$month-1}}&year={{$year}}">Prev</a>
            @endif
            {{$lable}}
            @if($month+1 > 12)
                <a href="/?month=1&year={{$year+1}}">next</a>
            @else
                 <a href="/?month={{$month+1}}&year={{$year}}">next</a>
            @endif
        </div>
        <div class="grid">
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
                <div>{{$i+1}}</div>
            @endfor
        </div>
    </div>
</x-layout>

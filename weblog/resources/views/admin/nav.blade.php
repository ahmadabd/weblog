

<nav class="navbar navbar-expand-md bg-dark navbar-dark" style="flex-direction: row-reverse;font-family: majid;font-size: 20px;" id="nav1">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar" style="justify-content: flex-end;">

        <ul class="navbar-nav" style="flex-direction:row-reverse;height:50px;padding:5px">
            <li class="nav-item">
                <a @if ($page = 'weblog')
                    class="nav-link active"
                    @else
                    class="nav-link"
                @endif 
                href="{{ route('adminBlog') }}" style="margin-right:25px;">وبلاگ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="margin-right:25px;">پادکست</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="margin-right:25px;">پروژه</a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="#" style="margin-right:25px">ویدیو</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="margin-right:25px;">رزومه</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" style="margin-right:25px;">خروج</a>
            </li>
        </ul>
    </div>
</nav>
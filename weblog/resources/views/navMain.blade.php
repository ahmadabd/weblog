<nav class="navbar navbar-expand-md bg-info navbar-dark" style="flex-direction: row-reverse;" id="nav1" >

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar" style="justify-content: flex-end;">

        <ul class="navbar-nav" style="flex-direction:row-reverse;height:50px;padding:5px">
            <li class="nav-item">
                <a @if ($page == 'weblog')
                    class="nav-link active" 
                @else
                    class="nav-link" 
                @endif
                href="{{ url('/blog') }}" style="margin-right:15px;">وبلاگ</a>
            </li>
            <li class="nav-item">
                <a @if ($page == 'contact')
                    class="nav-link active" 
                @else
                    class="nav-link" 
                @endif
                class="nav-link" href="{{ url('/contact') }}" style="margin-right:15px;">تماس با ما</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="margin-right:15px;">پروژه ها</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="margin-right:15px;">ویدیوها</a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="#" style="margin-right:15px">پادکست ها</a>
            </li>
        </ul>
    </div>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <form class="form-inline mr-auto">
            <input class="form-control text-right" type="text" placeholder="جستجو" aria-label="Search">
            <button class="btn btn-info-color btn-rounded btn-md my-0 ml-sm-2 btn-primary" type="submit">جستجو</button>
        </form>
    </div>
</nav>

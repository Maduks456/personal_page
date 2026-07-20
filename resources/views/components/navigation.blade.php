<header clss="position: relative;">
    <div class="nav">
        <div class="nav_container">
            <div class="nav_container_box">
                <label for="menu-input">
                    Menu 
                </label>
                <input type="checkbox" id="menu-input">
                <nav>
                    <div class="nav_container_box_navbox">
                        <div>
                            <a href="/">Home</a>
                        </div>
                        <div>
                            <a href="/about">About me</a>
                        </div>
                        <div>
                            <a href="/projects">Projects</a>
                        </div>
                        <div>
                            <a href="/tags">Tags</a>
                        </div>
                        <div>
                            <a href="/hall-of-fame">Hall Of Fame</a>
                        </div>
                        
                        @guest
                            <div>
                                <a href="/login" class="hidden">Login </a>
                            </div>
                        @endguest
                        @auth
                            <div>
                                <a href="/projects/create">Create a Project</a>
                            </div>
                            <div>
                                <a href="/tags/create">Create a Tag</a>
                            </div>
                            <div>
                                <form action="logout" method="POST">
                                    <button>
                                        Logout
                                    </button>
                                </form>  
                            </div> 
                        @endauth
                    </div>
                </nav>
            </div>
            <div class="nav_container_box">
                <div class="ver-line"></div>
            </div>
            <div class="nav_container_box">
                <div class="ver-line"></div>
            </div>
            <div class="nav_container_box">
                <div class="ver-line"></div>
            </div>
            <div class="nav_container_date">
                Taday: {{now()->format(' F j, Y')}}
            </div>
        </div>
        <div class="hor-line"></div>
    </div>
    
</header>
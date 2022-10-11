@include('dashboard-admin.layouts.header')
<div
    class="side-navbar active-nav d-flex justify-content-between flex-wrap flex-column"
    id="sidebar"
>
    <ul class="nav flex-column text-white w-100">
        <a href="/" class="nav-link h4 text-white my-2"> Entry UKDW </a>
        <a href="/" class="nav-link {{($title === "Dashboard") ? 'active' : ''}}">
            <i class="bx bxs-dashboard"></i>
            <span class="mx-2">Dashboard</span>
        </a>
        <a href="/users" class="nav-link {{($title === "Users") ? 'active' : ''}}">
            <i class='bx bxs-user-circle'></i>
            <span class="mx-2">Users</span>
        </a>
        <a href="/rooms" class="nav-link {{($title === "Rooms") ? 'active' : ''}}">
            <i class='bx bxs-school'></i>
            <span class="mx-2">Rooms</span>
        </a>
        <a href="/komplain" class="nav-link {{($title === "Komplain") ? 'active' : ''}}">
            <i class="bx bx-conversation"></i>
            <span class="mx-2">Komplain</span>
        </a>
        <br>
        @Auth
        <a href="/login" class="nav-link {{($title === "Login") ? 'active' : ''}}">
            <i class='bx bxs-user'></i>
            <span class="mx-2">Login</span>
        </a>
            
        @else  
        <form action="/logout" method="get">
            <button>
                <a href="" class="nav-link">
                    <i class='bx bxs-right-arrow-square'></i>
                    <span class="mx-2">Logout</span>
                </a>
            </button>
        </form>
        @endauth
    </ul>

    <span class="nav-link h4 w-100 mb-5">
        <a href="https://www.instagram.com/ukdwyogyakarta/"><i class="bx bxl-instagram-alt text-white"></i></a>
        <a href="https://twitter.com/ukdwyogyakarta"><i class='bx bxl-twitter' ></i></a>
        <a href="https://www.facebook.com/ukdwyogyakarta/"><i class="bx bxl-facebook text-white"></i></a>
    </span>
</div>
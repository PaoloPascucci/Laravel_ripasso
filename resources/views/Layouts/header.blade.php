<header>
    <div class="container-fluid p-4 navbar">
        <div class="row w-100">
            <div class="d-flex align-items-center">

                @include('Layouts.logo')
                <div class="col-6 d-inline-block">
                    <ul class="nav nav-tabs|pills">

                        <li class="nav-item">
                            <a href="#" class="nav-link">Shows</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link">Music</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Games</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Comics</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Apps</a>
                        </li>
                    </ul>

                </div>
                <div class="col-3 header_input">
                    <i class="fas fa-search"></i>
                    <input type="search" name="" id="" placeholder="aaaaa">
                </div>
            </div>
        </div>
    </div>
</header>
<style>
.navbar {
    z-index: 99999;
    position: fixed;
    background-color: #d3d3d32e;
}

.header_input {
    display: flex;
    justify-content: flex-end;
    flex-direction: row;
    height: fit-content;

}

input {
    width: 150px;
}


.col-3 {
    max-height: 50px;
}

.nav-link {
    color: #fff;
    font-size: 1rem;
    font-weight: bold;
    text-transform: uppercase;

}

.nav-link:hover {
    color: #0d6efd;
}

.nav {
    justify-content: space-evenly;
}
</style>
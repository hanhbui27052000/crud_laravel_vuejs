<template>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="">CRUD LARAVEL & VUEJS</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        <ul class="navbar-nav d-flex d-none d-md-inline-block ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="row">
                <li class="nav-item">
                    <a class="nav-link" href="">EN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">VI</a>
                </li>
                <li class="nav-item">
                    <span class="nav-link">|</span>
                </li>
            </div>
        </ul>
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Admin</a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Profile</a>
                    <a class="dropdown-item" href="#" onclick="">Logout</a>
                    <form id="logout-form" action="#" method="GET" style="display: none;">
                    
                    </form>
                </div>
            </li>
        </ul>
    </nav>
</template>
<script>
export default {
    
}
</script>
<style lang="">
    
</style>
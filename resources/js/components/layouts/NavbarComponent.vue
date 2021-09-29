<template>
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">TRANG CHỦ</div>
                <a class="nav-link collapsed" href="">
                    <div class="sb-nav-link-icon"><i class="fa fa-home"></i></div>
                    Trang Chủ
                    <div class="sb-sidenav-collapse-arrow"></div>
                </a>
                <div class="sb-sidenav-menu-heading">Quản Lí</div>
                <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapsePosts"
                    aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Quản Lí Bài Viết
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePosts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <router-link class="nav-link" to="/post">Danh Sách Bài Viết</router-link>
                        <router-link class="nav-link" to="/post/add">Thêm Mới Bài Viết</router-link>
                    </nav>
                </div>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Login In As:</div>
            <span>ADMIN</span> 
        </div>
    </nav>
</template>
<script>
export default {
    
}
</script>
<style>
    
</style>
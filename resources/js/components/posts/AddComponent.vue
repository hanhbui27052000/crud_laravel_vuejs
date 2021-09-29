<template>
    <div>
        <header-component/>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <navbar-component/>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Thêm Mới Bài Viết</h1>
                        <div class="row">
                            <div class="col-md-6">
                                <form @submit.prevent="addPost">
                                    <div class="form-group">
                                        <label for="inputTitle">Tiêu Đề Bài Viết</label>
                                        <input type="text" class="form-control" v-model="post.title" placeholder="Tiêu Đề Bài Viết">
                                        <strong v-if="errors.title">{{errors.title[0]}}</strong>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputDescription">Nội Dung</label>
                                        <textarea type="text" class="form-control" v-model="post.description" placeholder="Nội Dung"></textarea>
                                        <strong v-if="errors.description">{{errors.description[0]}}</strong>
                                    </div>
                                    <router-link to="/post" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Thoát</router-link>
                                    <button type="submit" class="btn btn-primary">Lưu <i class="fa fa-save"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
                <footer-component/>
            </div>                                              
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                post : {
                    title : '',
                    description : ''
                },
                errors : []
            }
        },
        methods : { 
            addPost(){
                this.axios.post('http://localhost:8000/api/admin/post/',this.post)
                .then(response => (this.$router.push({name: 'post'})))
                .catch((error)=>{
                    this.errors = error.response.data.errors;
                });
            }
        }
    }
</script>

<style>
    textarea.form-control {
        height: 200px;
    }
</style>

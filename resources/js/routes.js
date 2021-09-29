import AppComponent from './components/AppComponent.vue'
import IndexPostComponent from './components/posts/IndexComponent.vue'
import AddPostComponent from './components/posts/AddComponent.vue'
import EditPostComponent from './components/posts/EditComponent.vue'
export default {
    mode : 'history',
    base : '/admin',
    fallback : true,
    routes : [
        {
            path : '/',
            component : AppComponent,
            name : AppComponent
        },
        {
            path : '/post',
            component : IndexPostComponent,
            name : 'post'
        },
        {
            path : '/post/add',
            component : AddPostComponent,
            name : AddPostComponent
        },
        {
            path : '/post/edit/:id',
            component : EditPostComponent,
            name : 'edit'
        }
    ]
}
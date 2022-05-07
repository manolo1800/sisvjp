import {createRouter, createWebHistory} from "vue-router";
import Ventas from '../components/venta/mostrar.vue';
import Sidebar from '../layouts/Sidebar';

const routes = [
    {
        path:'/',   
        name:'Ventas', 
        component:Ventas
            
            
    }

];

const router = createRouter({
    history: createWebHistory(),
    routes
})


export default router;
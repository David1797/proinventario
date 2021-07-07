import VueRouter from 'vue-router'
import Categoria from './components/Categoria'
import Dashboard from './components/Dashboard'
import Producto from './components/Producto'
import Provedor from "./components/Proveedor";
import Compra from "./components/Compra";
import Proveedor from "./components/Proveedor";
import Venta from "./components/Venta";
import Cliente from "./components/Cliente";
import Usuario from "./components/User";
import Rol from "./components/Rol";

export const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            redirect: '/main/'
        },
        {
            path: '/main/',
            name: 'dashboard',
            component: Dashboard
        },
        {
            path: '/main/categoria',
            name: 'categoria',
            component: Categoria
        },
        {
            path: '/main/producto',
            name: 'producto',
            component: Producto
        },
        {
            path: '/main/provedor',
            name: 'provedor',
            component: Provedor
        },
        {
            path: '/main/compra',
            name: 'compra',
            component: Compra
        },
        {
            path: '/main/proveedor',
            name: 'proveedor',
            component: Proveedor
        },
        {
            path: '/main/venta',
            name: 'venta',
            component: Venta
        },
        {
            path: '/main/cliente',
            name: 'cliente',
            component: Cliente
        },
        {
            path: '/main/usuario',
            name: 'usuario',
            component: Usuario
        },
        {
            path: '/main/rol',
            name: 'rol',
            component: Rol
        },
        {
            path: "/main/*",
            component:Dashboard
        },
    ]
})

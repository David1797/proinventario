<div class="sidebar">
    <nav class="sidebar-nav ps ps--active-y">
        <ul class="nav">
            <li @click="menu=0" class="nav-item">
                <router-link :to="{name:'dashboard'}" class="nav-link"  >
                    <i class="icon-speedometer"></i> Dashbord
                </router-link>
            </li>
            <li class="nav-title">
                Menú
            </li>


            <li @click="menu=1" class="nav-item">
                <router-link :to="{name:'categoria'}" class="nav-link"  >
                    <i class="fa fa-tags"></i>
                    Categorías
                </router-link>
            </li>

            <li @click="menu=2" class="nav-item">
                <router-link :to="{name:'producto'}" class="nav-link"  >
                    <i class="fa fa-archive"></i>
                    Productos
                </router-link>
            </li>


            <li @click="menu=3" class="nav-item">
                <router-link :to="{name:'compra'}" class="nav-link"  >
                    <i class="fa fa-shopping-cart"></i> Compras
                </router-link>
            </li>

            <li @click="menu=4" class="nav-item">
                <router-link :to="{name:'proveedor'}" class="nav-link"  >
                    <i class="fa fa-users"></i>
                    Proveedores
                </router-link>
            </li>


            <li @click="menu=5" class="nav-item">
                <router-link :to="{name:'venta'}" class="nav-link"  >
                    <i class="fa fa-suitcase"></i> Ventas
                </router-link>
            </li>

            <li @click="menu=6" class="nav-item">
                <router-link :to="{name:'cliente'}" class="nav-link"  >
                    <i class="fa fa-users"></i> Clientes
                </router-link>
            </li>


            <li @click="menu=7" class="nav-item">
                <router-link :to="{name:'usuario'}" class="nav-link"  >
                    <i class="fa fa-user"></i> Usuarios
                </router-link>
            </li>

            <li @click="menu=8" class="nav-item">
                <router-link :to="{name:'rol'}" class="nav-link"  >
                    <i class="fa fa-key"></i> Roles
                </router-link>
            </li>


        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>

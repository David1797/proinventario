<div class="sidebar">
            <nav class="sidebar-nav">
                <ul class="nav">
                    <li @click="menu=0" class="nav-item">
                        <router-link :to="{name:'dashboard'}" class="nav-link"  >
                            <i class="icon-speedometer"></i> Dashbord</router-link>
                    </li>
                    <li class="nav-title">
                        Menú
                    </li>


                    <li @click="menu=1" class="nav-item">
                        <router-link :to="{name:'categoria'}" class="nav-link"  >
                            <i class="fa fa-list"></i> Categorías
                        </router-link>
                    </li>

                    <li @click="menu=2" class="nav-item">
                        <router-link :to="{name:'producto'}" class="nav-link"  >
                            <i class="fa fa-tasks"></i> Productos
                        </router-link>
                    </li>


                    <li @click="menu=5" class="nav-item">
                        <router-link :to="{name:'venta'}" class="nav-link"  >
                            <i class="fa fa-suitcase"></i> Ventas</router-link>
                    </li>

                    <li @click="menu=6" class="nav-item">
                        <router-link :to="{name:'cliente'}" class="nav-link"  >
                            <i class="fa fa-users"></i> Clientes</router-link>
                    </li>


                </ul>
            </nav>
            <button class="sidebar-minimizer brand-minimizer" type="button"></button>
        </div>

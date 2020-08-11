<template>
<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-lg-down-none">
        <svg class="c-sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
        <use xlink:href="admin/assets/brand/coreui.svg#full"></use>
        </svg>
        <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
        <use xlink:href="admin/assets/brand/coreui.svg#signet"></use>
        </svg>
    </div>
    
    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <router-link class="c-sidebar-nav-link" to="/1730142-TAW-42/Market/public/admin/clientes">
                <svg class="c-sidebar-nav-icon">
                </svg> Clientes
            </router-link>
        </li>  
        <li class="c-sidebar-nav-item">
            <router-link class="c-sidebar-nav-link" to="/1730142-TAW-42/Market/public/admin/categorias">
                <svg class="c-sidebar-nav-icon">
                </svg> Categorias
            </router-link>
        </li>  
        <li class="c-sidebar-nav-item">
            <router-link class="c-sidebar-nav-link" to="/1730142-TAW-42/Market/public/admin/productos">
                <svg class="c-sidebar-nav-icon">
                </svg> Productos
            </router-link>
        </li> 
        <li class="c-sidebar-nav-item">
            <router-link class="c-sidebar-nav-link" to="/1730142-TAW-42/Market/public/admin/servicios">
                <svg class="c-sidebar-nav-icon">
                </svg> Servicios
            </router-link>
        </li> 
        <li class="c-sidebar-nav-item">
            <router-link class="c-sidebar-nav-link" to="/1730142-TAW-42/Market/public/admin/cotizaciones">
                <svg class="c-sidebar-nav-icon">
                </svg> Cotizaciones
            </router-link>
        </li> 
       
        
    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
    </div>
    
</template>
<script>
export default {
    mounted() {
        console.log('Component mounted.')
    }
}
</script>

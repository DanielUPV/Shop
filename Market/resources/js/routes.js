//Dashboard
import Dashboard from './components/Dashboard.vue';

//Productos
import ProductosLista from './components/ProductosLista.vue';
import ProductosVista from './components/ProductosVista.vue';

//Servicios
import ServiciosLista from './components/ServiciosLista.vue';
import ServiciosVista from './components/ServiciosVista.vue';

//Categorias
import CategoriasLista from './components/CategoriasLista.vue';
import CategoriasVista from './components/CategoriasVista.vue';

//Clientes
import ClientesLista from './components/ClientesLista.vue';
import ClientesVista from './components/ClientesVista.vue';

//Sitios
import SitiosLista from './components/SitiosLista.vue';
import SitiosVista from './components/SitiosVista.vue';

//Cotizaciones
import CotizacionesLista from './components/CotizacionesLista.vue';
import CotizacionesVista from './components/CotizacionesVista.vue';

//Mapa

export const routes = [
    {
        name: 'dashboard',
        path: '/1730142-TAW-42/Market/public/admin/dashboard', props: true,
        component: Dashboard
    },{
        name: 'clientes',
        path: '/1730142-TAW-42/Market/public/admin/clientes', props: true,
        component: ClientesLista
    }, {
        name: 'clientesVista',
        path: '/1730142-TAW-42/Market/public/admin/clientes/:id', props: true,
        component: ClientesVista
    }, {
        name: 'sitios',
        path: '/1730142-TAW-42/Market/public/admin/sitios/', props: true,
        component: SitiosLista
    }, {
        name: 'sitiosVista',
        path: '/1730142-TAW-42/Market/public/admin/sitios/:id', props: true,
        component: SitiosVista
    }, {
        name: 'productos',
        path: '/1730142-TAW-42/Market/public/admin/productos/', props: true,
        component: ProductosLista
    }, {
        name: 'productosVista',
        path: '/1730142-TAW-42/Market/public/admin/productos/:id', props: true,
        component: ProductosVista
    }, {
        name: 'servicios',
        path: '/1730142-TAW-42/Market/public/admin/servicios/', props: true,
        component: ServiciosLista
    }, {
        name: 'serviciosVista',
        path: '/1730142-TAW-42/Market/public/admin/servicios/:id', props: true,
        component: ServiciosVista
    },  {
        name: 'categorias',
        path: '/1730142-TAW-42/Market/public/admin/categorias/', props: true,
        component: CategoriasLista
    }, {
        name: 'categoriasVista',
        path: '/1730142-TAW-42/Market/public/admin/categorias/:id', props: true,
        component: CategoriasVista
    }, {
        name: 'cotizacionesLista',
        path: '/1730142-TAW-42/Market/public/admin/cotizaciones/', props: true,
        component: CotizacionesLista
    }, {
        name: 'cotizacionesVista',
        path: '/1730142-TAW-42/Market/public/admin/cotizaciones/:id', props: true,
        component: CotizacionesVista
    }
];

export default { routes };
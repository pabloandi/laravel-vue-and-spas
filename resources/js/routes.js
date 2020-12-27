import Logo from './pages/Logo';
import LogoSymbol from './pages/LogoSymbol';
import Colors from './pages/Colors';
import Typography from './pages/Typography';
import Mascot from './pages/Mascot';
import Illustrations from './pages/Illustrations';
import Wallpapers from './pages/Wallpapers';
import NotFound from './pages/NotFound';
import SiteStats from './pages/SiteStats';
import Achievements from './pages/Achievements';

let Loaders = () => import(/* webpackChunkName: "loaders" */'./pages/Loaders');

export default {
    mode: 'history',
    linkActiveClass: 'selected-link',
    linkExactActiveClass: 'selected-exact-link',
    routes: [
        {
            path: '*',
            component: NotFound
        },
        {
            path: '/',
            component: Logo
        },
        {
            path: '/logo-symbol',
            component: LogoSymbol,
        },
        {
            path: '/colors',
            component: Colors,
        },
        {
            path: '/typography',
            component: Typography,
        },
        {
            path: '/mascot',
            component: Mascot,
        },
        {
            path: '/illustrations',
            component: Illustrations,
        },
        {
            path: '/loaders',
            component: Loaders,
        },
        {
            path: '/wallpapers',
            component: Wallpapers,
        },
        {
            path: '/site-stats',
            component: SiteStats,
        },
        {
            path: '/achievements',
            component: Achievements,
        },
    ]
}

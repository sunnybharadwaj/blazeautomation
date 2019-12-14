import VueRouter from 'vue-router';

import LandingPage from './components/pages/LandingPageComponent'
import FnBPage from './components/pages/FnbComponent'
import RealEstatePage from './components/pages/RealEstateComponent'
import RetailPage from './components/pages/RetailComponent'
import OfficesPage from './components/pages/OfficesComponent'
import AboutPage from './components/pages/AboutComponent'
import ContactPage from './components/pages/ContactUsComponent'
import ProductDetailPage from './components/pages/ProductDetailComponent'
import NewsPage from './components/pages/NewsComponent'
import CopyrightPage from './components/pages/CopyrightComponent'
import TermsPage from './components/pages/TermsComponent'
import PrivacyPage from './components/pages/PrivacyComponent'

let routes = [
    {
        path: '/',
        component: LandingPage
    },
    {
        path: '/real-estate-developers',
        component: RealEstatePage
    },
    {
        path: '/retail',
        component: RetailPage
    },
    {
        path: '/f-and-b',
        component: FnBPage
    },
    {
      path:'/news',
      component: NewsPage
    },
    {
        path: '/office',
        component: OfficesPage
    },
    {
        path: '/about-us',
        component: AboutPage
    },
    {
        path: '/contact-us',
        component: ContactPage
    },
    {
        path: '/product/:product',
        component: ProductDetailPage,
        props: true,
        name: 'Product'
    },
    {
        path:'/copyright-dispute-policy',
        component: CopyrightPage
    },
    {
        path:'/terms-of-use',
        component: TermsPage
    },
    {
        path:'/privacy-policy',
        component: PrivacyPage
    }
];

const router = new VueRouter({
    mode: 'history',
    routes,
    scrollBehavior (to, from, savedPosition) {
        return { x: 0, y: 0}
    }
});


export default router;
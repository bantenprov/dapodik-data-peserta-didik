# dapodik-data-peserta-didik
Statistik rekapitulasi dapodik data peserta didik tingkat provinsi


[![Join the chat at https://gitter.im/dapodik-data-peserta-didik/Lobby](https://badges.gitter.im/dapodik-data-peserta-didik/Lobby.svg)](https://gitter.im/dapodik-data-peserta-didik/Lobby?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/bantenprov/dapodik-data-peserta-didik/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/bantenprov/dapodik-data-peserta-didik/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/bantenprov/dapodik-data-peserta-didik/badges/build.png?b=master)](https://scrutinizer-ci.com/g/bantenprov/dapodik-data-peserta-didik/build-status/master)


## install via composer

- Development snapshot
```bash
$ composer require bantenprov/dapodik-data-peserta-didik:dev-master
```
- Latest release:

## download via github
```bash
$ git clone https://github.com/bantenprov/dapodik-data-peserta-didik.git
```
#### Edit `config/app.php` :
```php

'providers' => [

    /*
    * Laravel Framework Service Providers...
    */
    Illuminate\Auth\AuthServiceProvider::class,
    Illuminate\Broadcasting\BroadcastServiceProvider::class,
    Illuminate\Bus\BusServiceProvider::class,
    Illuminate\Cache\CacheServiceProvider::class,
    Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    Illuminate\Cookie\CookieServiceProvider::class,
    //....
    Bantenprov\DDPesertaDidik\DDPesertaDidikServiceProvider::class,

```

#### Untuk publish component vue :

```bash
$ php artisan vendor:publish --tag=dd-peserta-didik-assets
$ php artisan vendor:publish --tag=dd-peserta-didik-public
```
#### Tambahkan route di dalam route : `resources/assets/js/routes.js` :

```javascript
path: '/dashboard',
component: layout('Default'),
children: [
  {
    path: '/dashboard',
    components: {
      main: resolve => require(['./components/views/DashboardHome.vue'], resolve),
      navbar: resolve => require(['./components/Navbar.vue'], resolve),
      sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
    },
    meta: {
      title: "Dashboard"
    }
  },
  //== ...
  {
    path: '/dashboard/dd-peserta-didik',
    components: {
        main: resolve => require(['./components/views/bantenprov/dd-peserta-didik/DashboardDDPesertaDidik.vue'], resolve),
        navbar: resolve => require(['./components/Navbar.vue'], resolve),
        sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
    },
    meta: {
        title: "DD Peserta Didik"
    }
	}
```

```javascript
{
path: '/admin',
redirect: '/admin/dashboard',
component: resolve => require(['./AdminLayout.vue'], resolve),
children: [
//== ...
    {
			path: '/admin/dashboard/dd-peserta-didik',
			components: {
				main: resolve => require(['./components/bantenprov/dd-peserta-didik/DDPesertaDidikAdmin.show.vue'], resolve),
				navbar: resolve => require(['./components/Navbar.vue'], resolve),
				sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
			},
			meta: {
				title: "DD Peserta Didik"
			}
		}
 //== ...   
  ]
},

```
#### Edit menu `resources/assets/js/menu.js`

```javascript
{
  name: 'Dashboard',
  icon: 'fa fa-dashboard',
  childType: 'collapse',
  childItem: [
        {
          name: 'Dashboard',
          link: '/dashboard',
          icon: 'fa fa-angle-double-right'
        },
        {
          name: 'Entity',
          link: '/dashboard/entity',
          icon: 'fa fa-angle-double-right'
        },
        //== ...
        {
          name: 'Angka partisipasi kasar',
          link: '/dashboard/ap-kasar',
          icon: 'fa fa-angle-double-right'
        }
  ]
},
//== ...        
      {
        name: 'Dapodik Data Peserta Didik',
        link: '/dashboard/dd-peserta-didik',
        icon: 'fa fa-angle-double-right'
      },
```

#### Tambahkan components `resources/assets/js/components.js` :

```javascript

//== DD peserta-didik

import DDPesertaDidik from './components/bantenprov/dd-peserta-didik/DDPesertaDidik.chart.vue';
Vue.component('echarts-dd-peserta-didik', DDPesertaDidik);

import DDPesertaDidikKota from './components/bantenprov/dd-peserta-didik/DDPesertaDidikKota.chart.vue';
Vue.component('echarts-dd-peserta-didik-kota', DDPesertaDidikKota);

import DDPesertaDidikTahun from './components/bantenprov/dd-peserta-didik/DDPesertaDidikTahun.chart.vue';
Vue.component('echarts-dd-peserta-didik-tahun', DDPesertaDidikTahun);

import DDPesertaDidikAdminShow from './components/bantenprov/dd-peserta-didik/DDPesertaDidikAdmin.show.vue';
Vue.component('admin-view-dd-peserta-didik-tahun', DDPesertaDidikAdminShow);

//== Echarts DD Pegawai

import DDPesertaDidikBar01 from './components/views/bantenprov/dd-peserta-didik/DDPesertaDidikBar01.vue';
Vue.component('dd-peserta-didik-bar-01', DDPesertaDidikBar01);

import DDPesertaDidikBar02 from './components/views/bantenprov/dd-peserta-didik/DDPesertaDidikBar02.vue';
Vue.component('dd-peserta-didik-bar-02', DDPesertaDidikBar02);

//== mini bar charts
import DDPesertaDidikBar03 from './components/views/bantenprov/dd-peserta-didik/DDPesertaDidikBar03.vue';
Vue.component('dd-peserta-didik-bar-03', DDPesertaDidikBar03);

import DDPesertaDidikPie01 from './components/views/bantenprov/dd-peserta-didik/DDPesertaDidikPie01.vue';
Vue.component('dd-peserta-didik-pie-01', DDPesertaDidikPie01);

import DDPesertaDidikPie02 from './components/views/bantenprov/dd-peserta-didik/DDPesertaDidikPie02.vue';
Vue.component('dd-peserta-didik-pie-02', DDPesertaDidikPie02);

//== mini pie charts
import DDPesertaDidikPie03 from './components/views/bantenprov/dd-peserta-didik/DDPesertaDidikPie03.vue';
Vue.component('dd-peserta-didik-pie-03', DDPesertaDidikPie03);
```

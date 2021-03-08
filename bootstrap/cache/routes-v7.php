<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/admin/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backpack.auth.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::T7Wrvgl2YfKkjuXs',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backpack.auth.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RvONDmP8Fnzkppbf',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backpack.auth.register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qUPlVZWOJlMYr8Lr',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backpack.auth.password.reset',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DQPl7Z3BVXZ4v03L',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backpack.auth.password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backpack.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backpack',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/edit-account-info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backpack.account.info',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backpack.account.info.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/change-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backpack.account.password',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/charts/purchase-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'charts.purchase-order.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/charts/counter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'charts.counter.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/warehouseout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'warehouseout.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'warehouseout.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/warehouseout/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'warehouseout.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/warehouseout/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'warehouseout.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/generate-do-pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bZKMEWaXASHikKjh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/item_to-bag' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kEtF87GQuRwIPR5d',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/item_on-bag' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IcZZwYequ6fLszuV',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete-item_on-bag' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zD7vVkwEuuKTU8pI',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/accept' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DxWI3fj90LEKyY5Z',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/decline' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yLWn658fFKOEU5O1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/warehouseout-pic' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7k5peucrO3fxYhLr',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/warehousein' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'warehousein.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'warehousein.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/warehousein/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'warehousein.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/warehousein/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'warehousein.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/warehousein-pic' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::u67x3gIFD1jBhqqh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/generate-po-pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MQS5x0kO2cbB0Zhf',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/item_to-bag_in' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tuIIOUm4QcRX6p6S',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/item_on-bag_in' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QQtolnllp4eryiaD',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete-item_on-bag_in' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MbP9kFiiN8b1e4F4',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/deliverynote' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deliverynote.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'deliverynote.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/deliverynote/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deliverynote.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/deliverynote/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deliverynote.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/item' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'item.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'item.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/item/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'item.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/item/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'item.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/company' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'company.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/company/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/company/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/role' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'role.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'role.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/role/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'role.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/role/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'role.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'category.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/category/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/category/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/brand' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brand.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'brand.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/brand/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brand.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/brand/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brand.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/unit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'unit.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'unit.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/unit/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'unit.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/unit/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'unit.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/stackholder' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stackholder.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'stackholder.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/stackholder/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stackholder.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/stackholder/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stackholder.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/salesorder' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salesorder.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'salesorder.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/salesorder/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salesorder.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/salesorder/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salesorder.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/salesorder-pic' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VCnxp59JCaOcMV8g',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/generate-so-pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::drSgaSJ9o1vqbly7',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/generate-so-dn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gJjVxky0nDOxts3B',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/salesorderdetail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salesorderdetail.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'salesorderdetail.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/salesorderdetail/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salesorderdetail.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/salesorderdetail/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salesorderdetail.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/salesdn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salesdn.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'salesdn.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/salesdn/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salesdn.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/salesdn/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salesdn.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/generate-dn-pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TV43c8zRtRyI3UTs',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/generate-sdn-pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::89datgKj1OtSLqlb',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/deliverynotedetail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deliverynotedetail.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'deliverynotedetail.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/deliverynotedetail/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deliverynotedetail.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/deliverynotedetail/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deliverynotedetail.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/Api/SalesOrderDetail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bndjSsQbekqxZMaD',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/Api/PurchaseOrderDetail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7xxkwyAtStD6TMYM',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/Api/DeliveryOrderDetail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nw9vndTssxrABhna',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/Api/SubmissionFormDetail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EEkPW9zufewg0qWl',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/Api/DeliverySODetail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::14cKk3urMRcoJopi',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/Api/DeliveryBySalesDetail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sNjw1goRN1j5i2Qo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/bagitemwarehousein' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bagitemwarehousein.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'bagitemwarehousein.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/bagitemwarehousein/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bagitemwarehousein.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/bagitemwarehousein/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bagitemwarehousein.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/bagitemwarehouseout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bagitemwarehouseout.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'bagitemwarehouseout.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/bagitemwarehouseout/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bagitemwarehouseout.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/bagitemwarehouseout/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bagitemwarehouseout.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/submissionform' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'submissionform.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'submissionform.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/submissionform/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'submissionform.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/submissionform/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'submissionform.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/generate-sf-pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WAZ5nvacCSzjv7i2',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/submissionformdetail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'submissionformdetail.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'submissionformdetail.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/submissionformdetail/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'submissionformdetail.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/submissionformdetail/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'submissionformdetail.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/gudang' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gudang.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'gudang.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/gudang/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gudang.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/gudang/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gudang.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/deliverybysales' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deliverybysales.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'deliverybysales.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/deliverybysales/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deliverybysales.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/deliverybysales/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deliverybysales.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/generate-ds-pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oH2OS7DtXCpPgxUj',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/deliverybysalesdetail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deliverybysalesdetail.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'deliverybysalesdetail.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/deliverybysalesdetail/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deliverybysalesdetail.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/deliverybysalesdetail/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deliverybysalesdetail.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reportpurchaserequisition' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reportpurchaserequisition.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'reportpurchaserequisition.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reportpurchaserequisition/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reportpurchaserequisition.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reportpurchaserequisition/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reportpurchaserequisition.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reportsalesorder' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reportsalesorder.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'reportsalesorder.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reportsalesorder/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reportsalesorder.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reportsalesorder/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reportsalesorder.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reportdeliverybysales' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reportdeliverybysales.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'reportdeliverybysales.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reportdeliverybysales/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reportdeliverybysales.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reportdeliverybysales/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reportdeliverybysales.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reportpurchaseorder' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reportpurchaseorder.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'reportpurchaseorder.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reportpurchaseorder/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reportpurchaseorder.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reportpurchaseorder/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reportpurchaseorder.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reportdeliveryorder' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reportdeliveryorder.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'reportdeliveryorder.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reportdeliveryorder/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reportdeliveryorder.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reportdeliveryorder/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reportdeliveryorder.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reportdeliverynote' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reportdeliverynote.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'reportdeliverynote.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reportdeliverynote/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reportdeliverynote.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reportdeliverynote/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reportdeliverynote.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/permission' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'permission.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'permission.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/permission/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'permission.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/permission/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'permission.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Q4ChQZTjT4DYlX69',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/item_bagpack' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SzejjScBt4NL8xsP',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kPpitNoVo9z7B3S3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nnhOBtx2mGEfqemK',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/admin/(?|p(?|assword/reset/([^/]++)(*:43)|urchase(?|\\-order/([^/]++)/(?|accept(*:86)|denied(*:99))|order/([^/]++)/(?|accept(*:131)|denied(*:145)))|ermission/([^/]++)(?|/(?|details(*:187)|edit(*:199))|(*:208)))|warehouse(?|out/(?|([^/]++)(?|/(?|details(*:259)|edit(*:271)|show(*:283))|(*:292))|process(*:308))|in/(?|([^/]++)(?|/(?|details(*:345)|edit(*:357)|show(*:369))|(*:378))|process(*:394)))|delivery(?|\\-order/([^/]++)/(?|accept(*:441)|denied(*:455))|order/([^/]++)/(?|accept(*:488)|denied(*:502))|note(?|/(?|([^/]++)(?|/(?|details(*:544)|edit(*:556)|show(*:568)|pdf(*:579))|(*:588)|(*:596))|process(*:612))|detail/(?|([^/]++)(?|/(?|details(*:653)|edit(*:665)|show(*:677))|(*:686))|edit(*:699)|([^/]++)/(?|accept(*:725)|denied(*:739))))|bysales(?|/(?|([^/]++)(?|/(?|details(*:786)|edit(*:798)|show(*:810))|(*:819))|process(*:835))|detail/(?|([^/]++)(?|/(?|details(*:876)|edit(*:888)|show(*:900))|(*:909))|edit(*:922))))|item/([^/]++)(?|/(?|details(*:960)|edit(*:972)|show(*:984))|(*:993))|c(?|ompany/([^/]++)(?|/(?|details(*:1035)|edit(*:1048)|show(*:1061))|(*:1071))|ategory/([^/]++)(?|/(?|details(*:1111)|edit(*:1124)|show(*:1137))|(*:1147)))|r(?|ole/([^/]++)(?|/(?|details(*:1188)|edit(*:1201)|show(*:1214))|(*:1224))|eport(?|purchase(?|requisition/([^/]++)(?|/(?|details(*:1287)|edit(*:1300)|show(*:1313))|(*:1323))|order/([^/]++)(?|/(?|details(*:1361)|edit(*:1374)|show(*:1387))|(*:1397)))|salesorder/([^/]++)(?|/(?|details(*:1441)|edit(*:1454)|show(*:1467))|(*:1477))|delivery(?|bysales/([^/]++)(?|/(?|details(*:1528)|edit(*:1541)|show(*:1554))|(*:1564))|order/([^/]++)(?|/(?|details(*:1602)|edit(*:1615)|show(*:1628))|(*:1638))|note/([^/]++)(?|/(?|details(*:1675)|edit(*:1688)|show(*:1701))|(*:1711)))))|b(?|rand/([^/]++)(?|/(?|details(*:1755)|edit(*:1768)|show(*:1781))|(*:1791))|agitemwarehouse(?|in/(?|([^/]++)(?|/(?|details(*:1847)|edit(*:1860)|show(*:1873))|(*:1883))|edit(*:1897)|qc(*:1908))|out/([^/]++)(?|/(?|details(*:1944)|edit(*:1957)|show(*:1970))|(*:1980))))|u(?|nit/([^/]++)(?|/(?|details(*:2022)|edit(*:2035)|show(*:2048))|(*:2058))|ser/([^/]++)(?|/(?|details(*:2094)|edit(*:2107))|(*:2117)))|s(?|tackholder/([^/]++)(?|/(?|details(*:2165)|edit(*:2178)|show(*:2191))|(*:2201))|ales(?|order(?|/(?|([^/]++)(?|/(?|details(*:2252)|edit(*:2265)|show(*:2278))|(*:2288))|process(*:2305)|([^/]++)/(?|accept(*:2332)|denied(*:2347)))|detail/([^/]++)(?|/(?|de(?|tails(*:2390)|nied(*:2403))|edit(*:2417)|show(*:2430)|accept(*:2445))|(*:2455)))|dn/([^/]++)(?|/(?|details(*:2491)|edit(*:2504)|show(*:2517))|(*:2527)))|ubmissionform(?|/([^/]++)(?|/(?|details(*:2577)|edit(*:2590)|show(*:2603))|(*:2613))|detail/([^/]++)(?|/(?|de(?|tails(*:2655)|nied(*:2668))|edit(*:2682)|show(*:2695)|accept(*:2710))|(*:2720))))|Api/(?|S(?|alesOrderDetail_update/([^/]++)(*:2774)|ubmissionFormDetail_update/([^/]++)(*:2818))|DeliveryOrderDetail_update/([^/]++)(*:2863))|gudang/([^/]++)(?|/(?|details(*:2902)|edit(*:2915)|show(*:2928))|(*:2938))))/?$}sDu',
    ),
    3 => 
    array (
      43 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backpack.auth.password.reset.token',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      86 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AsQVB05v9s8bVzf6',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      99 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::K7pPihQewQOY4eFq',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      131 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::H4OIEkVVsU4pzrZ0',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      145 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fOHDH2JCaQybhVdZ',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      187 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'permission.showDetailsRow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      199 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'permission.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      208 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'permission.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'permission.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      259 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'warehouseout.showDetailsRow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      271 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'warehouseout.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      283 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'warehouseout.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      292 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'warehouseout.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'warehouseout.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      308 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::e8dbaQr0ULHvyd4l',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      345 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'warehousein.showDetailsRow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      357 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'warehousein.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      369 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'warehousein.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      378 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'warehousein.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'warehousein.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      394 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cC1QDxEunE2zc8QE',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      441 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mNhUUG5zyqTtBI7F',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      455 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZToeRwuqjkbABrnT',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      488 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WkoPifTCQEZhZOaB',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      502 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Fsqf1uKhWq9084ie',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      544 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deliverynote.showDetailsRow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      556 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deliverynote.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      568 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deliverynote.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      579 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ItXAhl5JLbgVWR5U',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      588 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deliverynote.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'deliverynote.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      596 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fxXYRLLN53CJ5dGu',
          ),
          1 => 
          array (
            0 => 'warehouse_out_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      612 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WV7VVcOq3r0NqEJh',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      653 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deliverynotedetail.showDetailsRow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      665 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deliverynotedetail.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      677 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deliverynotedetail.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      686 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deliverynotedetail.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'deliverynotedetail.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      699 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nNF6jTzeiUTTyTFm',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      725 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dsvkn02kEVFEuWEB',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      739 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ja7jR3VxBoKAwn0g',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      786 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deliverybysales.showDetailsRow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      798 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deliverybysales.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      810 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deliverybysales.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      819 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deliverybysales.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'deliverybysales.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      835 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::r8DlpC2FlXxthbXD',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      876 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deliverybysalesdetail.showDetailsRow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      888 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deliverybysalesdetail.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      900 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deliverybysalesdetail.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      909 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deliverybysalesdetail.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'deliverybysalesdetail.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      922 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AipFUdghisy1Rhk2',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      960 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'item.showDetailsRow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      972 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'item.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      984 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'item.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      993 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'item.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'item.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1035 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.showDetailsRow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1048 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1061 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1071 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'company.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1111 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category.showDetailsRow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1124 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1137 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1147 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'category.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1188 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'role.showDetailsRow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1201 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'role.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1214 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'role.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1224 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'role.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'role.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1287 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reportpurchaserequisition.showDetailsRow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1300 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reportpurchaserequisition.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1313 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reportpurchaserequisition.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1323 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reportpurchaserequisition.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'reportpurchaserequisition.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1361 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reportpurchaseorder.showDetailsRow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1374 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reportpurchaseorder.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1387 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reportpurchaseorder.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1397 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reportpurchaseorder.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'reportpurchaseorder.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1441 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reportsalesorder.showDetailsRow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1454 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reportsalesorder.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1467 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reportsalesorder.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1477 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reportsalesorder.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'reportsalesorder.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1528 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reportdeliverybysales.showDetailsRow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1541 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reportdeliverybysales.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1554 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reportdeliverybysales.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1564 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reportdeliverybysales.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'reportdeliverybysales.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1602 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reportdeliveryorder.showDetailsRow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1615 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reportdeliveryorder.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1628 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reportdeliveryorder.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1638 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reportdeliveryorder.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'reportdeliveryorder.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1675 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reportdeliverynote.showDetailsRow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1688 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reportdeliverynote.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1701 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reportdeliverynote.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1711 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reportdeliverynote.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'reportdeliverynote.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1755 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brand.showDetailsRow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1768 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brand.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1781 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brand.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1791 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brand.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'brand.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1847 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bagitemwarehousein.showDetailsRow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1860 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bagitemwarehousein.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1873 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bagitemwarehousein.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1883 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bagitemwarehousein.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'bagitemwarehousein.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1897 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Bp9ppIxUVyoiQ1bx',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1908 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nk1VBMTAmhFEck2K',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1944 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bagitemwarehouseout.showDetailsRow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1957 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bagitemwarehouseout.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1970 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bagitemwarehouseout.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1980 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bagitemwarehouseout.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'bagitemwarehouseout.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2022 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'unit.showDetailsRow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2035 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'unit.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2048 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'unit.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2058 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'unit.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'unit.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2094 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.showDetailsRow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2107 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2117 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2165 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stackholder.showDetailsRow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2178 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stackholder.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2191 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stackholder.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2201 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stackholder.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'stackholder.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2252 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salesorder.showDetailsRow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2265 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salesorder.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2278 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salesorder.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2288 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salesorder.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'salesorder.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2305 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hCR4gPhirpKekWVo',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2332 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6ju5X5fJMoAfF6vt',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2347 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BspfXNbsd75ZHWkp',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2390 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salesorderdetail.showDetailsRow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2403 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lL27gGCW5gsZpbrC',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2417 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salesorderdetail.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2430 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salesorderdetail.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2445 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4dgVvRXDJa9B5gq6',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2455 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salesorderdetail.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'salesorderdetail.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2491 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salesdn.showDetailsRow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2504 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salesdn.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2517 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salesdn.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2527 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salesdn.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'salesdn.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2577 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'submissionform.showDetailsRow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2590 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'submissionform.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2603 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'submissionform.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2613 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'submissionform.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'submissionform.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2655 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'submissionformdetail.showDetailsRow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2668 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::79bTwBo2k96xqVAT',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2682 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'submissionformdetail.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2695 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'submissionformdetail.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2710 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::y5hzqKNomMEeqDY7',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2720 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'submissionformdetail.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'submissionformdetail.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2774 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::w2Xd1CgksPhMXF0u',
          ),
          1 => 
          array (
            0 => 'sales_order_detail_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2818 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::whAwsvrl7yHiIyQb',
          ),
          1 => 
          array (
            0 => 'submission_form_detail_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2863 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::H1tlkhoSM3AVqLhz',
          ),
          1 => 
          array (
            0 => 'delivery_order_detail_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2902 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gudang.showDetailsRow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2915 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gudang.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2928 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gudang.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2938 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gudang.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'gudang.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'backpack.auth.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'controller' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'backpack.auth.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::T7Wrvgl2YfKkjuXs' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Auth\\LoginController@login',
        'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::T7Wrvgl2YfKkjuXs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backpack.auth.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/logout',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'backpack.auth.logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::RvONDmP8Fnzkppbf' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/logout',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::RvONDmP8Fnzkppbf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backpack.auth.register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/register',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'controller' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'backpack.auth.register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::qUPlVZWOJlMYr8Lr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/register',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Auth\\RegisterController@register',
        'controller' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Auth\\RegisterController@register',
        'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::qUPlVZWOJlMYr8Lr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backpack.auth.password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/password/reset',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'backpack.auth.password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::DQPl7Z3BVXZ4v03L' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/password/reset',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'controller' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::DQPl7Z3BVXZ4v03L',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backpack.auth.password.reset.token' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/password/reset/{token}',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'controller' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'backpack.auth.password.reset.token',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backpack.auth.password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/password/email',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'backpack.auth.password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backpack.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@dashboard',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@dashboard',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'backpack.dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backpack' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Backpack\\CRUD\\app\\Http\\Controllers\\AdminController@redirect',
        'controller' => 'Backpack\\CRUD\\app\\Http\\Controllers\\AdminController@redirect',
        'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'backpack',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backpack.account.info' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edit-account-info',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Backpack\\CRUD\\app\\Http\\Controllers\\MyAccountController@getAccountInfoForm',
        'controller' => 'Backpack\\CRUD\\app\\Http\\Controllers\\MyAccountController@getAccountInfoForm',
        'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'backpack.account.info',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backpack.account.info.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/edit-account-info',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Backpack\\CRUD\\app\\Http\\Controllers\\MyAccountController@postAccountInfoForm',
        'controller' => 'Backpack\\CRUD\\app\\Http\\Controllers\\MyAccountController@postAccountInfoForm',
        'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'backpack.account.info.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backpack.account.password' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/change-password',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Backpack\\CRUD\\app\\Http\\Controllers\\MyAccountController@postChangePasswordForm',
        'controller' => 'Backpack\\CRUD\\app\\Http\\Controllers\\MyAccountController@postChangePasswordForm',
        'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'backpack.account.password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'charts.purchase-order.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/charts/purchase-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Charts\\PurchaseOrderChartController@response',
        'controller' => 'App\\Http\\Controllers\\Admin\\Charts\\PurchaseOrderChartController@response',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'charts.purchase-order.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'charts.counter.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/charts/counter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Charts\\CounterChartController@response',
        'controller' => 'App\\Http\\Controllers\\Admin\\Charts\\CounterChartController@response',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'charts.counter.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'warehouseout.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/warehouseout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'warehouseout.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@index',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'warehouseout.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/warehouseout/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'warehouseout.search',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@search',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'warehouseout.showDetailsRow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/warehouseout/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'warehouseout.showDetailsRow',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@showDetailsRow',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@showDetailsRow',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'warehouseout.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/warehouseout/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'warehouseout.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@create',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'warehouseout.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/warehouseout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'warehouseout.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@store',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'warehouseout.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/warehouseout/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'warehouseout.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@edit',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'warehouseout.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/warehouseout/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'warehouseout.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@update',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'warehouseout.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/warehouseout/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'warehouseout.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@destroy',
        'operation' => 'delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'warehouseout.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/warehouseout/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'warehouseout.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@show',
        'operation' => 'show',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::bZKMEWaXASHikKjh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/generate-do-pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@pdf',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@pdf',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::bZKMEWaXASHikKjh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::kEtF87GQuRwIPR5d' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/item_to-bag',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ApiController@itemToBag',
        'controller' => 'App\\Http\\Controllers\\Admin\\ApiController@itemToBag',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::kEtF87GQuRwIPR5d',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::IcZZwYequ6fLszuV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/item_on-bag',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ApiController@checkItemOnBagById',
        'controller' => 'App\\Http\\Controllers\\Admin\\ApiController@checkItemOnBagById',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::IcZZwYequ6fLszuV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::zD7vVkwEuuKTU8pI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/delete-item_on-bag',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ApiController@deleteItemOnBag',
        'controller' => 'App\\Http\\Controllers\\Admin\\ApiController@deleteItemOnBag',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::zD7vVkwEuuKTU8pI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::DxWI3fj90LEKyY5Z' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/accept',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ApiController@accept',
        'controller' => 'App\\Http\\Controllers\\Admin\\ApiController@accept',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::DxWI3fj90LEKyY5Z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::yLWn658fFKOEU5O1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/decline',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ApiController@decline',
        'controller' => 'App\\Http\\Controllers\\Admin\\ApiController@decline',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::yLWn658fFKOEU5O1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::7k5peucrO3fxYhLr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/warehouseout-pic',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@storePic',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@storePic',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::7k5peucrO3fxYhLr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::e8dbaQr0ULHvyd4l' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/warehouseout/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@process',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@process',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::e8dbaQr0ULHvyd4l',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::mNhUUG5zyqTtBI7F' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/delivery-order/{id}/accept',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@accept',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@accept',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::mNhUUG5zyqTtBI7F',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ZToeRwuqjkbABrnT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/delivery-order/{id}/denied',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@denied',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@denied',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::ZToeRwuqjkbABrnT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::WkoPifTCQEZhZOaB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deliveryorder/{id}/accept',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@acceptHeader',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@acceptHeader',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::WkoPifTCQEZhZOaB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Fsqf1uKhWq9084ie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deliveryorder/{id}/denied',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@deniedHeader',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@deniedHeader',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Fsqf1uKhWq9084ie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'warehousein.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/warehousein',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'warehousein.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@index',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'warehousein.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/warehousein/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'warehousein.search',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@search',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'warehousein.showDetailsRow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/warehousein/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'warehousein.showDetailsRow',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@showDetailsRow',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@showDetailsRow',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'warehousein.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/warehousein/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'warehousein.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@create',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'warehousein.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/warehousein',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'warehousein.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@store',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'warehousein.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/warehousein/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'warehousein.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@edit',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'warehousein.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/warehousein/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'warehousein.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@update',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'warehousein.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/warehousein/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'warehousein.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@destroy',
        'operation' => 'delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'warehousein.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/warehousein/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'warehousein.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@show',
        'operation' => 'show',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::cC1QDxEunE2zc8QE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/warehousein/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@process',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@process',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::cC1QDxEunE2zc8QE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::u67x3gIFD1jBhqqh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/warehousein-pic',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@storePic',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@storePic',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::u67x3gIFD1jBhqqh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::MQS5x0kO2cbB0Zhf' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/generate-po-pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@pdf',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@pdf',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::MQS5x0kO2cbB0Zhf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::tuIIOUm4QcRX6p6S' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/item_to-bag_in',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ApiController@itemToBagIn',
        'controller' => 'App\\Http\\Controllers\\Admin\\ApiController@itemToBagIn',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::tuIIOUm4QcRX6p6S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::QQtolnllp4eryiaD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/item_on-bag_in',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ApiController@checkItemOnBagInById',
        'controller' => 'App\\Http\\Controllers\\Admin\\ApiController@checkItemOnBagInById',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::QQtolnllp4eryiaD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::MbP9kFiiN8b1e4F4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/delete-item_on-bag_in',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ApiController@deleteItemOnBagIn',
        'controller' => 'App\\Http\\Controllers\\Admin\\ApiController@deleteItemOnBagIn',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::MbP9kFiiN8b1e4F4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::AsQVB05v9s8bVzf6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/purchase-order/{id}/accept',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@accept',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@accept',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::AsQVB05v9s8bVzf6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::K7pPihQewQOY4eFq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/purchase-order/{id}/denied',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@denied',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@denied',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::K7pPihQewQOY4eFq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::H4OIEkVVsU4pzrZ0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/purchaseorder/{id}/accept',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@acceptHeader',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@acceptHeader',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::H4OIEkVVsU4pzrZ0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::fOHDH2JCaQybhVdZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/purchaseorder/{id}/denied',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@deniedHeader',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@deniedHeader',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::fOHDH2JCaQybhVdZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverynote.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deliverynote',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverynote.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@index',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverynote.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/deliverynote/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverynote.search',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@search',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverynote.showDetailsRow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deliverynote/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverynote.showDetailsRow',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@showDetailsRow',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@showDetailsRow',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverynote.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deliverynote/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverynote.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@create',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverynote.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/deliverynote',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverynote.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@store',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverynote.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deliverynote/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverynote.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@edit',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverynote.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/deliverynote/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverynote.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@update',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverynote.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/deliverynote/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverynote.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@destroy',
        'operation' => 'delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverynote.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deliverynote/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverynote.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@show',
        'operation' => 'show',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::fxXYRLLN53CJ5dGu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deliverynote/{warehouse_out_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@generateDeliveryNote',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@generateDeliveryNote',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::fxXYRLLN53CJ5dGu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ItXAhl5JLbgVWR5U' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deliverynote/{id}/pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@pdf',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@pdf',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::ItXAhl5JLbgVWR5U',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::WV7VVcOq3r0NqEJh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/deliverynote/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@process',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@process',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::WV7VVcOq3r0NqEJh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'item.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/item',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'item.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemCrudController@index',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemCrudController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'item.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/item/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'item.search',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemCrudController@search',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemCrudController@search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'item.showDetailsRow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/item/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'item.showDetailsRow',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemCrudController@showDetailsRow',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemCrudController@showDetailsRow',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'item.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/item/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'item.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemCrudController@create',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemCrudController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'item.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/item',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'item.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemCrudController@store',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemCrudController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'item.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/item/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'item.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemCrudController@edit',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemCrudController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'item.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/item/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'item.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemCrudController@update',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemCrudController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'item.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/item/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'item.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemCrudController@destroy',
        'operation' => 'delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemCrudController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'item.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/item/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'item.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemCrudController@show',
        'operation' => 'show',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemCrudController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'company.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\CompanyCrudController@index',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\CompanyCrudController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/company/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'company.search',
        'uses' => 'App\\Http\\Controllers\\Admin\\CompanyCrudController@search',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\CompanyCrudController@search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.showDetailsRow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'company.showDetailsRow',
        'uses' => 'App\\Http\\Controllers\\Admin\\CompanyCrudController@showDetailsRow',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\CompanyCrudController@showDetailsRow',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'company.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\CompanyCrudController@create',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\CompanyCrudController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/company',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'company.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\CompanyCrudController@store',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\CompanyCrudController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'company.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\CompanyCrudController@edit',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CompanyCrudController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/company/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'company.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\CompanyCrudController@update',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CompanyCrudController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/company/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'company.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\CompanyCrudController@destroy',
        'operation' => 'delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\CompanyCrudController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'company.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\CompanyCrudController@show',
        'operation' => 'show',
        'controller' => 'App\\Http\\Controllers\\Admin\\CompanyCrudController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'role.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/role',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'role.index',
        'uses' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\RoleCrudController@index',
        'operation' => 'list',
        'controller' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\RoleCrudController@index',
        'namespace' => 'Backpack\\PermissionManager\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'role.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/role/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'role.search',
        'uses' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\RoleCrudController@search',
        'operation' => 'list',
        'controller' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\RoleCrudController@search',
        'namespace' => 'Backpack\\PermissionManager\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'role.showDetailsRow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/role/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'role.showDetailsRow',
        'uses' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\RoleCrudController@showDetailsRow',
        'operation' => 'list',
        'controller' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\RoleCrudController@showDetailsRow',
        'namespace' => 'Backpack\\PermissionManager\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'role.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/role/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'role.create',
        'uses' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\RoleCrudController@create',
        'operation' => 'create',
        'controller' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\RoleCrudController@create',
        'namespace' => 'Backpack\\PermissionManager\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'role.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/role',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'role.store',
        'uses' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\RoleCrudController@store',
        'operation' => 'create',
        'controller' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\RoleCrudController@store',
        'namespace' => 'Backpack\\PermissionManager\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'role.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/role/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'role.edit',
        'uses' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\RoleCrudController@edit',
        'operation' => 'update',
        'controller' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\RoleCrudController@edit',
        'namespace' => 'Backpack\\PermissionManager\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'role.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/role/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'role.update',
        'uses' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\RoleCrudController@update',
        'operation' => 'update',
        'controller' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\RoleCrudController@update',
        'namespace' => 'Backpack\\PermissionManager\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'role.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/role/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'role.destroy',
        'uses' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\RoleCrudController@destroy',
        'operation' => 'delete',
        'controller' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\RoleCrudController@destroy',
        'namespace' => 'Backpack\\PermissionManager\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'role.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/role/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'role.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleCrudController@show',
        'operation' => 'show',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleCrudController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'category.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'category.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryCrudController@index',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryCrudController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'category.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/category/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'category.search',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryCrudController@search',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryCrudController@search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'category.showDetailsRow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/category/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'category.showDetailsRow',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryCrudController@showDetailsRow',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryCrudController@showDetailsRow',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'category.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/category/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'category.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryCrudController@create',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryCrudController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'category.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'category.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryCrudController@store',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryCrudController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'category.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/category/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'category.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryCrudController@edit',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryCrudController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'category.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/category/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'category.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryCrudController@update',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryCrudController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'category.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/category/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'category.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryCrudController@destroy',
        'operation' => 'delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryCrudController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'category.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/category/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'category.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryCrudController@show',
        'operation' => 'show',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryCrudController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'brand.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/brand',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'brand.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\BrandCrudController@index',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\BrandCrudController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'brand.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/brand/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'brand.search',
        'uses' => 'App\\Http\\Controllers\\Admin\\BrandCrudController@search',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\BrandCrudController@search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'brand.showDetailsRow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/brand/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'brand.showDetailsRow',
        'uses' => 'App\\Http\\Controllers\\Admin\\BrandCrudController@showDetailsRow',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\BrandCrudController@showDetailsRow',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'brand.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/brand/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'brand.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\BrandCrudController@create',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\BrandCrudController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'brand.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/brand',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'brand.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\BrandCrudController@store',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\BrandCrudController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'brand.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/brand/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'brand.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\BrandCrudController@edit',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\BrandCrudController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'brand.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/brand/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'brand.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\BrandCrudController@update',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\BrandCrudController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'brand.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/brand/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'brand.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\BrandCrudController@destroy',
        'operation' => 'delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\BrandCrudController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'brand.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/brand/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'brand.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\BrandCrudController@show',
        'operation' => 'show',
        'controller' => 'App\\Http\\Controllers\\Admin\\BrandCrudController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'unit.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/unit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'unit.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\UnitCrudController@index',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\UnitCrudController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'unit.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/unit/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'unit.search',
        'uses' => 'App\\Http\\Controllers\\Admin\\UnitCrudController@search',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\UnitCrudController@search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'unit.showDetailsRow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/unit/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'unit.showDetailsRow',
        'uses' => 'App\\Http\\Controllers\\Admin\\UnitCrudController@showDetailsRow',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\UnitCrudController@showDetailsRow',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'unit.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/unit/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'unit.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\UnitCrudController@create',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\UnitCrudController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'unit.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/unit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'unit.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\UnitCrudController@store',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\UnitCrudController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'unit.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/unit/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'unit.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\UnitCrudController@edit',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\UnitCrudController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'unit.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/unit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'unit.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\UnitCrudController@update',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\UnitCrudController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'unit.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/unit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'unit.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\UnitCrudController@destroy',
        'operation' => 'delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\UnitCrudController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'unit.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/unit/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'unit.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\UnitCrudController@show',
        'operation' => 'show',
        'controller' => 'App\\Http\\Controllers\\Admin\\UnitCrudController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'stackholder.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/stackholder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'stackholder.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\StackholderCrudController@index',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\StackholderCrudController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'stackholder.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/stackholder/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'stackholder.search',
        'uses' => 'App\\Http\\Controllers\\Admin\\StackholderCrudController@search',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\StackholderCrudController@search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'stackholder.showDetailsRow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/stackholder/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'stackholder.showDetailsRow',
        'uses' => 'App\\Http\\Controllers\\Admin\\StackholderCrudController@showDetailsRow',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\StackholderCrudController@showDetailsRow',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'stackholder.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/stackholder/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'stackholder.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\StackholderCrudController@create',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\StackholderCrudController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'stackholder.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/stackholder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'stackholder.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\StackholderCrudController@store',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\StackholderCrudController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'stackholder.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/stackholder/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'stackholder.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\StackholderCrudController@edit',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\StackholderCrudController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'stackholder.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/stackholder/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'stackholder.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\StackholderCrudController@update',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\StackholderCrudController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'stackholder.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/stackholder/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'stackholder.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\StackholderCrudController@destroy',
        'operation' => 'delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\StackholderCrudController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'stackholder.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/stackholder/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'stackholder.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\StackholderCrudController@show',
        'operation' => 'show',
        'controller' => 'App\\Http\\Controllers\\Admin\\StackholderCrudController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesorder.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/salesorder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesorder.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@index',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesorder.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/salesorder/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesorder.search',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@search',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesorder.showDetailsRow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/salesorder/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesorder.showDetailsRow',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@showDetailsRow',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@showDetailsRow',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesorder.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/salesorder/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesorder.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@create',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesorder.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/salesorder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesorder.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@store',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesorder.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/salesorder/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesorder.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@edit',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesorder.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/salesorder/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesorder.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@update',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesorder.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/salesorder/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesorder.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@destroy',
        'operation' => 'delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesorder.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/salesorder/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesorder.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@show',
        'operation' => 'show',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::VCnxp59JCaOcMV8g' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/salesorder-pic',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@storePic',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@storePic',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::VCnxp59JCaOcMV8g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::hCR4gPhirpKekWVo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/salesorder/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@process',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@process',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::hCR4gPhirpKekWVo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::6ju5X5fJMoAfF6vt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/salesorder/{id}/accept',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@acceptHeader',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@acceptHeader',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::6ju5X5fJMoAfF6vt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::BspfXNbsd75ZHWkp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/salesorder/{id}/denied',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@deniedHeader',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@deniedHeader',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::BspfXNbsd75ZHWkp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::drSgaSJ9o1vqbly7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/generate-so-pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@pdf',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@pdf',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::drSgaSJ9o1vqbly7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::gJjVxky0nDOxts3B' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/generate-so-dn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@dn',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@dn',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::gJjVxky0nDOxts3B',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesorderdetail.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/salesorderdetail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesorderdetail.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderDetailCrudController@index',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderDetailCrudController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesorderdetail.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/salesorderdetail/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesorderdetail.search',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderDetailCrudController@search',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderDetailCrudController@search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesorderdetail.showDetailsRow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/salesorderdetail/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesorderdetail.showDetailsRow',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderDetailCrudController@showDetailsRow',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderDetailCrudController@showDetailsRow',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesorderdetail.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/salesorderdetail/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesorderdetail.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderDetailCrudController@create',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderDetailCrudController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesorderdetail.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/salesorderdetail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesorderdetail.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderDetailCrudController@store',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderDetailCrudController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesorderdetail.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/salesorderdetail/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesorderdetail.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderDetailCrudController@edit',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderDetailCrudController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesorderdetail.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/salesorderdetail/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesorderdetail.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderDetailCrudController@update',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderDetailCrudController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesorderdetail.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/salesorderdetail/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesorderdetail.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderDetailCrudController@destroy',
        'operation' => 'delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderDetailCrudController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesorderdetail.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/salesorderdetail/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesorderdetail.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderDetailCrudController@show',
        'operation' => 'show',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderDetailCrudController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesdn.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/salesdn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesdn.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesDnCrudController@index',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesDnCrudController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesdn.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/salesdn/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesdn.search',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesDnCrudController@search',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesDnCrudController@search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesdn.showDetailsRow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/salesdn/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesdn.showDetailsRow',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesDnCrudController@showDetailsRow',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesDnCrudController@showDetailsRow',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesdn.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/salesdn/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesdn.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesDnCrudController@create',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesDnCrudController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesdn.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/salesdn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesdn.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesDnCrudController@store',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesDnCrudController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesdn.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/salesdn/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesdn.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesDnCrudController@edit',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesDnCrudController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesdn.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/salesdn/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesdn.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesDnCrudController@update',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesDnCrudController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesdn.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/salesdn/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesdn.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesDnCrudController@destroy',
        'operation' => 'delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesDnCrudController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesdn.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/salesdn/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesdn.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesDnCrudController@show',
        'operation' => 'show',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesDnCrudController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::TV43c8zRtRyI3UTs' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/generate-dn-pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@pdf',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@pdf',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::TV43c8zRtRyI3UTs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::89datgKj1OtSLqlb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/generate-sdn-pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesDnCrudController@pdf',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesDnCrudController@pdf',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::89datgKj1OtSLqlb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverynotedetail.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deliverynotedetail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverynotedetail.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteDetailCrudController@index',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteDetailCrudController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverynotedetail.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/deliverynotedetail/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverynotedetail.search',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteDetailCrudController@search',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteDetailCrudController@search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverynotedetail.showDetailsRow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deliverynotedetail/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverynotedetail.showDetailsRow',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteDetailCrudController@showDetailsRow',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteDetailCrudController@showDetailsRow',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverynotedetail.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deliverynotedetail/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverynotedetail.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteDetailCrudController@create',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteDetailCrudController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverynotedetail.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/deliverynotedetail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverynotedetail.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteDetailCrudController@store',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteDetailCrudController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverynotedetail.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deliverynotedetail/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverynotedetail.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteDetailCrudController@edit',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteDetailCrudController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverynotedetail.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/deliverynotedetail/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverynotedetail.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteDetailCrudController@update',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteDetailCrudController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverynotedetail.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/deliverynotedetail/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverynotedetail.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteDetailCrudController@destroy',
        'operation' => 'delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteDetailCrudController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverynotedetail.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deliverynotedetail/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverynotedetail.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteDetailCrudController@show',
        'operation' => 'show',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteDetailCrudController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::nNF6jTzeiUTTyTFm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/deliverynotedetail/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteDetailCrudController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteDetailCrudController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::nNF6jTzeiUTTyTFm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::4dgVvRXDJa9B5gq6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/salesorderdetail/{id}/accept',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderDetailCrudController@accept',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderDetailCrudController@accept',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::4dgVvRXDJa9B5gq6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::lL27gGCW5gsZpbrC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/salesorderdetail/{id}/denied',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderDetailCrudController@denied',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderDetailCrudController@denied',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::lL27gGCW5gsZpbrC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::dsvkn02kEVFEuWEB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deliverynotedetail/{id}/accept',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteDetailCrudController@accept',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteDetailCrudController@accept',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::dsvkn02kEVFEuWEB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Ja7jR3VxBoKAwn0g' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deliverynotedetail/{id}/denied',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteDetailCrudController@denied',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteDetailCrudController@denied',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Ja7jR3VxBoKAwn0g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::bndjSsQbekqxZMaD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/Api/SalesOrderDetail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Api\\SalesOrderController@getSalesOrderDetailById',
        'controller' => 'App\\Http\\Controllers\\Admin\\Api\\SalesOrderController@getSalesOrderDetailById',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::bndjSsQbekqxZMaD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::w2Xd1CgksPhMXF0u' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/Api/SalesOrderDetail_update/{sales_order_detail_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Api\\SalesOrderController@UpdateSalesOrder',
        'controller' => 'App\\Http\\Controllers\\Admin\\Api\\SalesOrderController@UpdateSalesOrder',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::w2Xd1CgksPhMXF0u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::7xxkwyAtStD6TMYM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/Api/PurchaseOrderDetail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Api\\PurchaseOrderController@getPurchaseOrderDetailById',
        'controller' => 'App\\Http\\Controllers\\Admin\\Api\\PurchaseOrderController@getPurchaseOrderDetailById',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::7xxkwyAtStD6TMYM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::nw9vndTssxrABhna' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/Api/DeliveryOrderDetail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Api\\DeliveryOrderController@getDeliveryOrderDetailById',
        'controller' => 'App\\Http\\Controllers\\Admin\\Api\\DeliveryOrderController@getDeliveryOrderDetailById',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::nw9vndTssxrABhna',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::H1tlkhoSM3AVqLhz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/Api/DeliveryOrderDetail_update/{delivery_order_detail_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Api\\DeliveryOrderController@UpdateDeliveryOrder',
        'controller' => 'App\\Http\\Controllers\\Admin\\Api\\DeliveryOrderController@UpdateDeliveryOrder',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::H1tlkhoSM3AVqLhz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::EEkPW9zufewg0qWl' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/Api/SubmissionFormDetail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Api\\SubmissionFormController@getSubmissionFormDetailById',
        'controller' => 'App\\Http\\Controllers\\Admin\\Api\\SubmissionFormController@getSubmissionFormDetailById',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::EEkPW9zufewg0qWl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::whAwsvrl7yHiIyQb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/Api/SubmissionFormDetail_update/{submission_form_detail_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Api\\SubmissionFormController@UpdateDeliveryOrder',
        'controller' => 'App\\Http\\Controllers\\Admin\\Api\\SubmissionFormController@UpdateDeliveryOrder',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::whAwsvrl7yHiIyQb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::14cKk3urMRcoJopi' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/Api/DeliverySODetail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Api\\DeliverySalesOrderController@getDeliverySalesOrderById',
        'controller' => 'App\\Http\\Controllers\\Admin\\Api\\DeliverySalesOrderController@getDeliverySalesOrderById',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::14cKk3urMRcoJopi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::sNjw1goRN1j5i2Qo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/Api/DeliveryBySalesDetail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryBySalesDetailCrudController@getDetail',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryBySalesDetailCrudController@getDetail',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::sNjw1goRN1j5i2Qo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'bagitemwarehousein.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/bagitemwarehousein',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'bagitemwarehousein.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseInCrudController@index',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseInCrudController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'bagitemwarehousein.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/bagitemwarehousein/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'bagitemwarehousein.search',
        'uses' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseInCrudController@search',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseInCrudController@search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'bagitemwarehousein.showDetailsRow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/bagitemwarehousein/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'bagitemwarehousein.showDetailsRow',
        'uses' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseInCrudController@showDetailsRow',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseInCrudController@showDetailsRow',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'bagitemwarehousein.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/bagitemwarehousein/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'bagitemwarehousein.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseInCrudController@create',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseInCrudController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'bagitemwarehousein.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/bagitemwarehousein',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'bagitemwarehousein.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseInCrudController@store',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseInCrudController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'bagitemwarehousein.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/bagitemwarehousein/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'bagitemwarehousein.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseInCrudController@edit',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseInCrudController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'bagitemwarehousein.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/bagitemwarehousein/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'bagitemwarehousein.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseInCrudController@update',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseInCrudController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'bagitemwarehousein.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/bagitemwarehousein/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'bagitemwarehousein.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseInCrudController@destroy',
        'operation' => 'delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseInCrudController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'bagitemwarehousein.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/bagitemwarehousein/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'bagitemwarehousein.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseInCrudController@show',
        'operation' => 'show',
        'controller' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseInCrudController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Bp9ppIxUVyoiQ1bx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/bagitemwarehousein/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseInCrudController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseInCrudController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Bp9ppIxUVyoiQ1bx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::nk1VBMTAmhFEck2K' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/bagitemwarehousein/qc',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseInCrudController@qc',
        'controller' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseInCrudController@qc',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::nk1VBMTAmhFEck2K',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'bagitemwarehouseout.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/bagitemwarehouseout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'bagitemwarehouseout.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseOutCrudController@index',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseOutCrudController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'bagitemwarehouseout.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/bagitemwarehouseout/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'bagitemwarehouseout.search',
        'uses' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseOutCrudController@search',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseOutCrudController@search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'bagitemwarehouseout.showDetailsRow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/bagitemwarehouseout/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'bagitemwarehouseout.showDetailsRow',
        'uses' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseOutCrudController@showDetailsRow',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseOutCrudController@showDetailsRow',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'bagitemwarehouseout.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/bagitemwarehouseout/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'bagitemwarehouseout.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseOutCrudController@create',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseOutCrudController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'bagitemwarehouseout.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/bagitemwarehouseout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'bagitemwarehouseout.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseOutCrudController@store',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseOutCrudController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'bagitemwarehouseout.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/bagitemwarehouseout/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'bagitemwarehouseout.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseOutCrudController@edit',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseOutCrudController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'bagitemwarehouseout.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/bagitemwarehouseout/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'bagitemwarehouseout.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseOutCrudController@update',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseOutCrudController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'bagitemwarehouseout.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/bagitemwarehouseout/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'bagitemwarehouseout.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseOutCrudController@destroy',
        'operation' => 'delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseOutCrudController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'bagitemwarehouseout.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/bagitemwarehouseout/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'bagitemwarehouseout.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseOutCrudController@show',
        'operation' => 'show',
        'controller' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseOutCrudController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'submissionform.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/submissionform',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'submissionform.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionFormCrudController@index',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionFormCrudController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'submissionform.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/submissionform/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'submissionform.search',
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionFormCrudController@search',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionFormCrudController@search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'submissionform.showDetailsRow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/submissionform/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'submissionform.showDetailsRow',
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionFormCrudController@showDetailsRow',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionFormCrudController@showDetailsRow',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'submissionform.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/submissionform/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'submissionform.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionFormCrudController@create',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionFormCrudController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'submissionform.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/submissionform',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'submissionform.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionFormCrudController@store',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionFormCrudController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'submissionform.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/submissionform/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'submissionform.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionFormCrudController@edit',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionFormCrudController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'submissionform.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/submissionform/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'submissionform.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionFormCrudController@update',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionFormCrudController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'submissionform.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/submissionform/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'submissionform.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionFormCrudController@destroy',
        'operation' => 'delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionFormCrudController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'submissionform.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/submissionform/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'submissionform.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionFormCrudController@show',
        'operation' => 'show',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionFormCrudController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::WAZ5nvacCSzjv7i2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/generate-sf-pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionFormCrudController@pdf',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionFormCrudController@pdf',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::WAZ5nvacCSzjv7i2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'submissionformdetail.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/submissionformdetail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'submissionformdetail.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionFormDetailCrudController@index',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionFormDetailCrudController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'submissionformdetail.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/submissionformdetail/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'submissionformdetail.search',
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionFormDetailCrudController@search',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionFormDetailCrudController@search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'submissionformdetail.showDetailsRow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/submissionformdetail/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'submissionformdetail.showDetailsRow',
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionFormDetailCrudController@showDetailsRow',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionFormDetailCrudController@showDetailsRow',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'submissionformdetail.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/submissionformdetail/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'submissionformdetail.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionFormDetailCrudController@create',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionFormDetailCrudController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'submissionformdetail.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/submissionformdetail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'submissionformdetail.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionFormDetailCrudController@store',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionFormDetailCrudController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'submissionformdetail.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/submissionformdetail/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'submissionformdetail.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionFormDetailCrudController@edit',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionFormDetailCrudController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'submissionformdetail.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/submissionformdetail/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'submissionformdetail.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionFormDetailCrudController@update',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionFormDetailCrudController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'submissionformdetail.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/submissionformdetail/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'submissionformdetail.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionFormDetailCrudController@destroy',
        'operation' => 'delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionFormDetailCrudController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'submissionformdetail.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/submissionformdetail/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'submissionformdetail.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionFormDetailCrudController@show',
        'operation' => 'show',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionFormDetailCrudController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::y5hzqKNomMEeqDY7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/submissionformdetail/{id}/accept',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionFormDetailCrudController@accept',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionFormDetailCrudController@accept',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::y5hzqKNomMEeqDY7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::79bTwBo2k96xqVAT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/submissionformdetail/{id}/denied',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionFormDetailCrudController@denied',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionFormDetailCrudController@denied',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::79bTwBo2k96xqVAT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'gudang.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/gudang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'gudang.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseCrudController@index',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseCrudController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'gudang.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/gudang/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'gudang.search',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseCrudController@search',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseCrudController@search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'gudang.showDetailsRow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/gudang/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'gudang.showDetailsRow',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseCrudController@showDetailsRow',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseCrudController@showDetailsRow',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'gudang.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/gudang/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'gudang.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseCrudController@create',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseCrudController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'gudang.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/gudang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'gudang.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseCrudController@store',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseCrudController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'gudang.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/gudang/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'gudang.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseCrudController@edit',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseCrudController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'gudang.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/gudang/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'gudang.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseCrudController@update',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseCrudController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'gudang.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/gudang/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'gudang.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseCrudController@destroy',
        'operation' => 'delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseCrudController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'gudang.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/gudang/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'gudang.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseCrudController@show',
        'operation' => 'show',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseCrudController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverybysales.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deliverybysales',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverybysales.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryBySalesCrudController@index',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryBySalesCrudController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverybysales.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/deliverybysales/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverybysales.search',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryBySalesCrudController@search',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryBySalesCrudController@search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverybysales.showDetailsRow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deliverybysales/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverybysales.showDetailsRow',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryBySalesCrudController@showDetailsRow',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryBySalesCrudController@showDetailsRow',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverybysales.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deliverybysales/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverybysales.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryBySalesCrudController@create',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryBySalesCrudController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverybysales.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/deliverybysales',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverybysales.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryBySalesCrudController@store',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryBySalesCrudController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverybysales.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deliverybysales/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverybysales.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryBySalesCrudController@edit',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryBySalesCrudController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverybysales.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/deliverybysales/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverybysales.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryBySalesCrudController@update',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryBySalesCrudController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverybysales.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/deliverybysales/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverybysales.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryBySalesCrudController@destroy',
        'operation' => 'delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryBySalesCrudController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverybysales.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deliverybysales/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverybysales.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryBySalesCrudController@show',
        'operation' => 'show',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryBySalesCrudController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::oH2OS7DtXCpPgxUj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/generate-ds-pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryBySalesCrudController@pdf',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryBySalesCrudController@pdf',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::oH2OS7DtXCpPgxUj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::r8DlpC2FlXxthbXD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/deliverybysales/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryBySalesCrudController@process',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryBySalesCrudController@process',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::r8DlpC2FlXxthbXD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverybysalesdetail.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deliverybysalesdetail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverybysalesdetail.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryBySalesDetailCrudController@index',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryBySalesDetailCrudController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverybysalesdetail.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/deliverybysalesdetail/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverybysalesdetail.search',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryBySalesDetailCrudController@search',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryBySalesDetailCrudController@search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverybysalesdetail.showDetailsRow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deliverybysalesdetail/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverybysalesdetail.showDetailsRow',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryBySalesDetailCrudController@showDetailsRow',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryBySalesDetailCrudController@showDetailsRow',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverybysalesdetail.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deliverybysalesdetail/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverybysalesdetail.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryBySalesDetailCrudController@create',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryBySalesDetailCrudController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverybysalesdetail.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/deliverybysalesdetail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverybysalesdetail.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryBySalesDetailCrudController@store',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryBySalesDetailCrudController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverybysalesdetail.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deliverybysalesdetail/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverybysalesdetail.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryBySalesDetailCrudController@edit',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryBySalesDetailCrudController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverybysalesdetail.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/deliverybysalesdetail/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverybysalesdetail.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryBySalesDetailCrudController@update',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryBySalesDetailCrudController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverybysalesdetail.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/deliverybysalesdetail/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverybysalesdetail.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryBySalesDetailCrudController@destroy',
        'operation' => 'delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryBySalesDetailCrudController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverybysalesdetail.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deliverybysalesdetail/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverybysalesdetail.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryBySalesDetailCrudController@show',
        'operation' => 'show',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryBySalesDetailCrudController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::AipFUdghisy1Rhk2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/deliverybysalesdetail/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryBySalesDetailCrudController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryBySalesDetailCrudController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::AipFUdghisy1Rhk2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportpurchaserequisition.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reportpurchaserequisition',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportpurchaserequisition.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportPurchaseRequisitionCrudController@index',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportPurchaseRequisitionCrudController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportpurchaserequisition.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/reportpurchaserequisition/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportpurchaserequisition.search',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportPurchaseRequisitionCrudController@search',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportPurchaseRequisitionCrudController@search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportpurchaserequisition.showDetailsRow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reportpurchaserequisition/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportpurchaserequisition.showDetailsRow',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportPurchaseRequisitionCrudController@showDetailsRow',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportPurchaseRequisitionCrudController@showDetailsRow',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportpurchaserequisition.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reportpurchaserequisition/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportpurchaserequisition.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportPurchaseRequisitionCrudController@create',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportPurchaseRequisitionCrudController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportpurchaserequisition.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/reportpurchaserequisition',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportpurchaserequisition.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportPurchaseRequisitionCrudController@store',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportPurchaseRequisitionCrudController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportpurchaserequisition.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reportpurchaserequisition/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportpurchaserequisition.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportPurchaseRequisitionCrudController@edit',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportPurchaseRequisitionCrudController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportpurchaserequisition.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/reportpurchaserequisition/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportpurchaserequisition.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportPurchaseRequisitionCrudController@update',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportPurchaseRequisitionCrudController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportpurchaserequisition.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/reportpurchaserequisition/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportpurchaserequisition.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportPurchaseRequisitionCrudController@destroy',
        'operation' => 'delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportPurchaseRequisitionCrudController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportpurchaserequisition.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reportpurchaserequisition/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportpurchaserequisition.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportPurchaseRequisitionCrudController@show',
        'operation' => 'show',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportPurchaseRequisitionCrudController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportsalesorder.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reportsalesorder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportsalesorder.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportSalesOrderCrudController@index',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportSalesOrderCrudController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportsalesorder.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/reportsalesorder/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportsalesorder.search',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportSalesOrderCrudController@search',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportSalesOrderCrudController@search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportsalesorder.showDetailsRow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reportsalesorder/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportsalesorder.showDetailsRow',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportSalesOrderCrudController@showDetailsRow',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportSalesOrderCrudController@showDetailsRow',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportsalesorder.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reportsalesorder/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportsalesorder.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportSalesOrderCrudController@create',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportSalesOrderCrudController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportsalesorder.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/reportsalesorder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportsalesorder.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportSalesOrderCrudController@store',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportSalesOrderCrudController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportsalesorder.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reportsalesorder/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportsalesorder.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportSalesOrderCrudController@edit',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportSalesOrderCrudController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportsalesorder.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/reportsalesorder/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportsalesorder.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportSalesOrderCrudController@update',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportSalesOrderCrudController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportsalesorder.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/reportsalesorder/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportsalesorder.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportSalesOrderCrudController@destroy',
        'operation' => 'delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportSalesOrderCrudController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportsalesorder.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reportsalesorder/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportsalesorder.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportSalesOrderCrudController@show',
        'operation' => 'show',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportSalesOrderCrudController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportdeliverybysales.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reportdeliverybysales',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportdeliverybysales.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryBySalesCrudController@index',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryBySalesCrudController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportdeliverybysales.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/reportdeliverybysales/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportdeliverybysales.search',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryBySalesCrudController@search',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryBySalesCrudController@search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportdeliverybysales.showDetailsRow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reportdeliverybysales/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportdeliverybysales.showDetailsRow',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryBySalesCrudController@showDetailsRow',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryBySalesCrudController@showDetailsRow',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportdeliverybysales.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reportdeliverybysales/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportdeliverybysales.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryBySalesCrudController@create',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryBySalesCrudController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportdeliverybysales.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/reportdeliverybysales',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportdeliverybysales.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryBySalesCrudController@store',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryBySalesCrudController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportdeliverybysales.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reportdeliverybysales/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportdeliverybysales.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryBySalesCrudController@edit',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryBySalesCrudController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportdeliverybysales.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/reportdeliverybysales/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportdeliverybysales.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryBySalesCrudController@update',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryBySalesCrudController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportdeliverybysales.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/reportdeliverybysales/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportdeliverybysales.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryBySalesCrudController@destroy',
        'operation' => 'delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryBySalesCrudController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportdeliverybysales.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reportdeliverybysales/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportdeliverybysales.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryBySalesCrudController@show',
        'operation' => 'show',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryBySalesCrudController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportpurchaseorder.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reportpurchaseorder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportpurchaseorder.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportPurchaseOrderCrudController@index',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportPurchaseOrderCrudController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportpurchaseorder.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/reportpurchaseorder/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportpurchaseorder.search',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportPurchaseOrderCrudController@search',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportPurchaseOrderCrudController@search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportpurchaseorder.showDetailsRow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reportpurchaseorder/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportpurchaseorder.showDetailsRow',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportPurchaseOrderCrudController@showDetailsRow',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportPurchaseOrderCrudController@showDetailsRow',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportpurchaseorder.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reportpurchaseorder/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportpurchaseorder.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportPurchaseOrderCrudController@create',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportPurchaseOrderCrudController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportpurchaseorder.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/reportpurchaseorder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportpurchaseorder.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportPurchaseOrderCrudController@store',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportPurchaseOrderCrudController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportpurchaseorder.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reportpurchaseorder/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportpurchaseorder.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportPurchaseOrderCrudController@edit',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportPurchaseOrderCrudController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportpurchaseorder.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/reportpurchaseorder/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportpurchaseorder.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportPurchaseOrderCrudController@update',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportPurchaseOrderCrudController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportpurchaseorder.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/reportpurchaseorder/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportpurchaseorder.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportPurchaseOrderCrudController@destroy',
        'operation' => 'delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportPurchaseOrderCrudController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportpurchaseorder.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reportpurchaseorder/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportpurchaseorder.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportPurchaseOrderCrudController@show',
        'operation' => 'show',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportPurchaseOrderCrudController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportdeliveryorder.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reportdeliveryorder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportdeliveryorder.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryOrderCrudController@index',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryOrderCrudController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportdeliveryorder.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/reportdeliveryorder/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportdeliveryorder.search',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryOrderCrudController@search',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryOrderCrudController@search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportdeliveryorder.showDetailsRow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reportdeliveryorder/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportdeliveryorder.showDetailsRow',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryOrderCrudController@showDetailsRow',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryOrderCrudController@showDetailsRow',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportdeliveryorder.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reportdeliveryorder/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportdeliveryorder.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryOrderCrudController@create',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryOrderCrudController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportdeliveryorder.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/reportdeliveryorder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportdeliveryorder.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryOrderCrudController@store',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryOrderCrudController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportdeliveryorder.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reportdeliveryorder/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportdeliveryorder.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryOrderCrudController@edit',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryOrderCrudController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportdeliveryorder.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/reportdeliveryorder/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportdeliveryorder.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryOrderCrudController@update',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryOrderCrudController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportdeliveryorder.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/reportdeliveryorder/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportdeliveryorder.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryOrderCrudController@destroy',
        'operation' => 'delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryOrderCrudController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportdeliveryorder.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reportdeliveryorder/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportdeliveryorder.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryOrderCrudController@show',
        'operation' => 'show',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryOrderCrudController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportdeliverynote.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reportdeliverynote',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportdeliverynote.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryNoteCrudController@index',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryNoteCrudController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportdeliverynote.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/reportdeliverynote/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportdeliverynote.search',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryNoteCrudController@search',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryNoteCrudController@search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportdeliverynote.showDetailsRow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reportdeliverynote/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportdeliverynote.showDetailsRow',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryNoteCrudController@showDetailsRow',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryNoteCrudController@showDetailsRow',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportdeliverynote.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reportdeliverynote/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportdeliverynote.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryNoteCrudController@create',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryNoteCrudController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportdeliverynote.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/reportdeliverynote',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportdeliverynote.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryNoteCrudController@store',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryNoteCrudController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportdeliverynote.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reportdeliverynote/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportdeliverynote.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryNoteCrudController@edit',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryNoteCrudController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportdeliverynote.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/reportdeliverynote/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportdeliverynote.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryNoteCrudController@update',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryNoteCrudController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportdeliverynote.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/reportdeliverynote/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportdeliverynote.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryNoteCrudController@destroy',
        'operation' => 'delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryNoteCrudController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reportdeliverynote.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reportdeliverynote/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'reportdeliverynote.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryNoteCrudController@show',
        'operation' => 'show',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportDeliveryNoteCrudController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'permission.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/permission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'permission.index',
        'uses' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\PermissionCrudController@index',
        'operation' => 'list',
        'controller' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\PermissionCrudController@index',
        'namespace' => 'Backpack\\PermissionManager\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'permission.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/permission/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'permission.search',
        'uses' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\PermissionCrudController@search',
        'operation' => 'list',
        'controller' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\PermissionCrudController@search',
        'namespace' => 'Backpack\\PermissionManager\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'permission.showDetailsRow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/permission/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'permission.showDetailsRow',
        'uses' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\PermissionCrudController@showDetailsRow',
        'operation' => 'list',
        'controller' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\PermissionCrudController@showDetailsRow',
        'namespace' => 'Backpack\\PermissionManager\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'permission.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/permission/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'permission.create',
        'uses' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\PermissionCrudController@create',
        'operation' => 'create',
        'controller' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\PermissionCrudController@create',
        'namespace' => 'Backpack\\PermissionManager\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'permission.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/permission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'permission.store',
        'uses' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\PermissionCrudController@store',
        'operation' => 'create',
        'controller' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\PermissionCrudController@store',
        'namespace' => 'Backpack\\PermissionManager\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'permission.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/permission/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'permission.edit',
        'uses' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\PermissionCrudController@edit',
        'operation' => 'update',
        'controller' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\PermissionCrudController@edit',
        'namespace' => 'Backpack\\PermissionManager\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'permission.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/permission/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'permission.update',
        'uses' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\PermissionCrudController@update',
        'operation' => 'update',
        'controller' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\PermissionCrudController@update',
        'namespace' => 'Backpack\\PermissionManager\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'permission.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/permission/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'permission.destroy',
        'uses' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\PermissionCrudController@destroy',
        'operation' => 'delete',
        'controller' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\PermissionCrudController@destroy',
        'namespace' => 'Backpack\\PermissionManager\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'user.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'user.index',
        'uses' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\UserCrudController@index',
        'operation' => 'list',
        'controller' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\UserCrudController@index',
        'namespace' => 'Backpack\\PermissionManager\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'user.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/user/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'user.search',
        'uses' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\UserCrudController@search',
        'operation' => 'list',
        'controller' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\UserCrudController@search',
        'namespace' => 'Backpack\\PermissionManager\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'user.showDetailsRow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'user.showDetailsRow',
        'uses' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\UserCrudController@showDetailsRow',
        'operation' => 'list',
        'controller' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\UserCrudController@showDetailsRow',
        'namespace' => 'Backpack\\PermissionManager\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'user.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'user.create',
        'uses' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\UserCrudController@create',
        'operation' => 'create',
        'controller' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\UserCrudController@create',
        'namespace' => 'Backpack\\PermissionManager\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'user.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'user.store',
        'uses' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\UserCrudController@store',
        'operation' => 'create',
        'controller' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\UserCrudController@store',
        'namespace' => 'Backpack\\PermissionManager\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'user.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'user.edit',
        'uses' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\UserCrudController@edit',
        'operation' => 'update',
        'controller' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\UserCrudController@edit',
        'namespace' => 'Backpack\\PermissionManager\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'user.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/user/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'user.update',
        'uses' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\UserCrudController@update',
        'operation' => 'update',
        'controller' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\UserCrudController@update',
        'namespace' => 'Backpack\\PermissionManager\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'user.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/user/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'user.destroy',
        'uses' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\UserCrudController@destroy',
        'operation' => 'delete',
        'controller' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\UserCrudController@destroy',
        'namespace' => 'Backpack\\PermissionManager\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Q4ChQZTjT4DYlX69' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":291:{@6RdTC9QCR9Z27bJWOEQKPdOc/AG6B9vY7a5ho/fFTKY=.a:5:{s:3:"use";a:0:{}s:8:"function";s:79:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000013b32e720000000014c02978";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Q4ChQZTjT4DYlX69',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::SzejjScBt4NL8xsP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/item_bagpack',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Admin\\ApiController@itemToBag',
        'controller' => 'Admin\\ApiController@itemToBag',
        'namespace' => NULL,
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::SzejjScBt4NL8xsP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::kPpitNoVo9z7B3S3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => '\\Illuminate\\Routing\\RedirectController@__invoke',
        'controller' => '\\Illuminate\\Routing\\RedirectController',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::kPpitNoVo9z7B3S3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'destination' => '/admin/dashboard',
        'status' => 302,
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::nnhOBtx2mGEfqemK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => 'home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => '\\Illuminate\\Routing\\RedirectController@__invoke',
        'controller' => '\\Illuminate\\Routing\\RedirectController',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::nnhOBtx2mGEfqemK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'destination' => '/admin/dashboard',
        'status' => 302,
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
  ),
)
);
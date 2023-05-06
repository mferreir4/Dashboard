<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}
 
/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('/');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/','Home::index');

//controller Login
$routes->get('/login','Login::login');
$routes->get('/Admin','Login::login');

//controller Cadastro
$routes->get('/cadastro','Cadastro::cadastroEmail');
$routes->post('/cadastro/email', 'Cadastro::verificaEmail');
$routes->get('/dados','Cadastro::cadastrodados');
$routes->get('/produto','Cadastro::cadastroproduto');
$routes->get('/info','Cadastro::cadastroInfo');

//controller User
$routes->get('/local/produto','User::produtos');
$routes->get('/local/contato','User::contato');
$routes->get('/local/usuario','User::userPadrao');

//controller Update
$routes->get('/update','Update::update');

//controller 
$routes->get('','');

//Analitico


//Dashboard
$routes->get('/dashboard/login_dash','Dash::Login_dash');
$routes->get('/dashboard','Dash::dashboard');
$routes->get('/dashboard/perfil','Dash::Perfil');
$routes->post('/dashboard/logar','Dash::Logar');
$routes->get('/dashboard/(:num)','Dash::delete/$1');
$routes->get('/dashboard/confirme/(:num)','Dash::Servico_Compl/$1');
$routes->post('/dashboard/confirm','Dash::Add_Valor');

//Servicos
$routes->get('/dashboard/servico','Dash::servico');
$routes->post('/dashboard/servico','Dash::Add_Servico');
$routes->get('/dashboard/servico_list','Dash::Servico_list');

//Fornecedores
$routes->get('/dashboard/fornecedor','Dash::Fornecedores');
$routes->get('/dashboard/fornecedor_insert','Dash::Fornecedor_insert');
$routes->post('/dashboard/fornecedor_add','Dash::Fornecedor_add');
$routes->get('/fornecedor/(:num)','Dash::edit_Forn/$1');
$routes->get('/fornecedor/delete(:num)','Dash::del_Forn/$1');

//Produtos
$routes->get('/dashboard/produtos','Dash::produtos');
$routes->post('/dashboard/produtos_add','Dash::Add_produto');
$routes->get('/dashboard/produtos_list','Dash::Produto_List');
$routes->get('/produto/(:num)','Dash::edit/$1');
$routes->get('/produto/del(:num)','Dash::Delete_prod/$2');
$routes->get('/produto/vend(:num)','Dash::produto_venda/$1');
$routes->post('/dashboard/produto_venda','Dash::Venda_prod');

//Cliente
$routes->get('/dashboard/cliente_insert','Dash::Cliente_insert');
$routes->post('/dashboard/cliente_insert','Dash::Cliente_add');
$routes->get('/dashboard/cliente_list','Dash::Cliente_list');
$routes->get('/cliente/(:num)','Dash::Cliente_edit/$1');
$routes->get('/cliente/delete(:num)','Dash::delete_cli/$1');








/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
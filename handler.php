<?php
ini_set('allow_url_fopen',1);
switch(@parse_url($_SERVER['REQUEST_URI'])['path']) {
    case '/':
        require 'index.php';
        break;
    case '/index':
        require 'index.php';
        break;
    case '/index.php':
        require 'index.php';
        break;
    case '/2facheck.php':
        require '2facheck.php';
        break;
    case '/2fadisable.php':
        require '2fadisable.php';
        break;
    case '/2faenable.php':
        require '2faenable.php';
        break;
    case '/2falogin.php':
        require '2falogin.php';
        break;
    case '/2falogincheck.php':
        require '2falogincheck.php';
        break;
    case '/2faloginstatus.php':
        require '2faloginstatus.php';
        break;
    case '/2faqr.php':
        require '2faqr.php';
        break;
    case '/2fastatus.php':
        require '2fastatus.php';
        break;
    case '/aboutus.php':
        require 'aboutus.php';
        break;
    case '/addproduct.php':
        require 'addproduct.php';
        break;
    case '/address.php':
        require 'address.php';
        break;
    case '/adminauth.php':
        require 'adminauth.php';
        break;
    case '/Authenticator.php':
        require 'Authenticator.php';
        break;
    case '/cart.php':
        require 'cart.php';
        break;
    case '/changeaddress.php':
        require 'changeaddress.php';
        break;
    case '/changepassword.php':
        require 'changepassword.php';
        break;
    case '/checkout.php':
        require 'checkout.php';
        break;
    case '/chicart.php':
        require 'chicart.php';
        break;
    case '/chinavbar.php':
        require 'chinavbar.php';
        break;
    case '/chisearch.php':
        require 'chisearch.php';
        break;
    case '/chisearched.php':
        require 'chisearched.php';
        break;
    case '/dbcon.php':
        require 'dbcon.php';
        break;
    case '/editproduct.php':
        require 'editproduct.php';
        break;
    case '/footer.php':
        require 'footer.php';
        break;
    case '/footerchi.php':
        require 'footerchi.php';
        break;
    case '/forgetpassword.php':
        require 'forgetpassword.php';
        break;
    case '/forgetpasswordform.php':
        require 'forgetpasswordform.php';
        break;
    case '/homepage.php':
        require 'homepage.php';
        break;
    case '/indexchi.php':
        require 'indexchi.php';
        break;
    case '/indexmalay.php':
        require 'indexmalay.php';
        break;
    case '/indextamil.php':
        require 'indextamil.php';
        break;
    case '/log_in.php':
        require 'log_in.php';
        break;
    case '/login.php':
        require 'login.php';
        break;
    case '/logout.php':
        require 'logout.php';
        break;
    case '/malaycart.php':
        require 'malaycart.php';
        break;
    case '/malayfooter.php':
        require 'malayfooter.php';
        break;
    case '/malaynavbar.php':
        require 'malaynavbar.php';
        break;
    case '/malaysearch.php':
        require 'malaysearch.php';
        break;
    case '/malaysearched.php':
        require 'malaysearched.php';
        break;
    case '/navbar.php':
        require 'navbar.php';
        break;
    case '/newfooter.php':
        require 'newfooter.php';
        break;
    case '/orderhistory.php':
        require 'orderhistory.php';
        break;
    case '/paymentmethod.php':
        require 'paymentmethod.php';
        break;
    case '/productmanagement.php':
        require 'productmanagement.php';
        break;
    case '/profile.php':
        require 'profile.php';
        break;
    case '/register.php':
        require 'register.php';
        break;
    case '/search.php':
        require 'search.php';
        break;
    case '/searched.php':
        require 'searched.php';
        break;
    case '/tamilcart.php':
        require 'tamilcart.php';
        break;
    case '/tamilfooter.php':
        require 'tamilfooter.php';
        break;
    case '/tamilnavbar.php':
        require 'tamilnavbar.php';
        break;
    case '/tamsearch.php':
        require 'tamsearch.php';
        break;
    case '/tamsearched.php':
        require 'tamsearched.php';
        break;
    case '/updateproduct.php':
        require 'updateproduct.php';
        break;
    case '/updateuser.php':
        require 'updateuser.php';
        break;
    case '/useredit.php':
        require 'useredit.php';
        break;
    case '/usermanagement.php':
        require 'usermanagement.php';
        break;
    default:
        http_response_code(404);
        echo @parse_url($_SERVER['REQUEST_URI'])['path'];
        exit('Not Found');
    
}
?>
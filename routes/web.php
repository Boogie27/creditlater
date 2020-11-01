<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Web\IndexController;
use App\Http\Controllers\Web\ProductController;
use App\Http\Controllers\Web\DetailController;
use App\Http\Controllers\Web\CategoryController;
use App\Http\Controllers\Web\WishlistController;
use App\Http\Controllers\Web\LogoutController;
use App\Http\Controllers\Web\CartController;
use App\Http\Controllers\Web\UserController;
use App\Http\Controllers\Web\loginController;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get("/", [IndexController::class, "index"]);
// Route::post("/", [IndexController::class, "quick_view_ajax"]);


Route::get("/detail", [DetailController::class, "index"]);
Route::get("/detail/{product_id}", [DetailController::class, "show"]);


Route::get("/category", [CategoryController::class, "index"]);
Route::get("category/{category_name}", [CategoryController::class, "show"]);


Route::get("/products", [ProductController::class, "index"]);
Route::get("/products/{string}", [ProductController::class, "create"]);
Route::post("/products", [ProductController::class, "show"]);
Route::post("/quick-view", [ProductController::class, "quick_view_ajax"]);


Route::get("/cart", [CartController::class, "index"]);
Route::post("/add-to-cart", [CartController::class, "add_to_cart_ajax"]);
Route::post("/cart-item-delete", [CartController::class, "cart_item_delete_ajax"]);
Route::post("/get-cart-quantity", [CartController::class, "get_cart_quantity_ajax"]);
Route::post("/quick-add-to-cart", [CartController::class, "quick_add_to_cart_ajax"]);
Route::post("/get-cart-dropdown", [CartController::class, "get_cart_dropdown_ajax"]);
Route::post("/delete-cart-dropdown", [CartController::class, "delete_cart_dropdown_ajax"]);


Route::get("/wishlist", [WishlistController::class, "index"])->middleware('guest');
Route::post("/add-to-wishlist", [WishlistController::class, "add_to_wishlist_ajax"]);
Route::post("/delete-wishlist-item", [WishlistController::class, "delete_wishlist_item_ajax"]);
Route::post("/quick-add-to-wishlist", [WishlistController::class, "quick_add_to_wishlist_ajax"]);
Route::post("/get-wishlist-quantity", [WishlistController::class, "get_list_quantity_ajax"]);
Route::post("/get-quick-wishlist-items", [WishlistController::class, "get_quick_wishlist_items_ajax"]);
Route::post("/quick-delete-wishlist-item", [WishlistController::class, "quick_delete_wishlist_item_ajax"]);




Route::get("/register", [UserController::class, "index"]);
Route::post("/register", [UserController::class, "store"]);

Route::get("/login", [loginController::class, "index"]);
Route::post("/login", [loginController::class, "show"]);
Route::post("/login-ajax", [loginController::class, "login_ajax"]);

Route::get("/logout", [LogoutController::class, "create"]);
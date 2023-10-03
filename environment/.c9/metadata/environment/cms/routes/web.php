{"filter":false,"title":"web.php","tooltip":"/cms/routes/web.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":31,"column":0},"action":"remove","lines":["<?php","","use App\\Http\\Controllers\\ProfileController;","use Illuminate\\Support\\Facades\\Route;","","/*","|--------------------------------------------------------------------------","| Web Routes","|--------------------------------------------------------------------------","|","| Here is where you can register web routes for your application. These","| routes are loaded by the RouteServiceProvider and all of them will","| be assigned to the \"web\" middleware group. Make something great!","|","*/","","Route::get('/', function () {","    return view('welcome');","});","","Route::get('/dashboard', function () {","    return view('dashboard');","})->middleware(['auth', 'verified'])->name('dashboard');","","Route::middleware('auth')->group(function () {","    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');","    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');","    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');","});","","require __DIR__.'/auth.php';",""],"id":2},{"start":{"row":0,"column":0},"end":{"row":38,"column":0},"action":"insert","lines":["<?php","use App\\Http\\Controllers\\ProfileController;//9.43.x~","use Illuminate\\Support\\Facades\\Route;","use Illuminate\\Http\\Request;","use App\\Http\\Controllers\\BookController; //Add","use App\\Models\\Book; //Add","","//本：ダッシュボード表示(books.blade.php)","Route::get('/', [BookController::class,'index'])->middleware(['auth'])->name('book_index');","Route::get('/dashboard', [BookController::class,'index'])->middleware(['auth'])->name('dashboard');","","//本：追加 ","Route::post('/books',[BookController::class,\"store\"])->name('book_store');","","//本：削除 ","Route::delete('/book/{book}', [BookController::class,\"destroy\"])->name('book_destroy');","","//本：更新画面","Route::post('/booksedit/{book}',[BookController::class,\"edit\"])->name('book_edit'); //通常","Route::get('/booksedit/{book}', [BookController::class,\"edit\"])->name('edit');      //Validationエラーありの場合","","//本：更新画面","Route::post('/books/update',[BookController::class,\"update\"])->name('book_update');","","/**","* 「ログイン機能」インストールで追加されています ","*/","//Route::get('/dashboard', function () {","//    return view('dashboard');","//})->middleware(['auth', 'verified'])->name('dashboard');","","Route::middleware('auth')->group(function () {","    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');","    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');","    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');","});","","require __DIR__.'/auth.php';",""]}]]},"ace":{"folds":[],"scrolltop":11.999999999999998,"scrollleft":0,"selection":{"start":{"row":38,"column":0},"end":{"row":38,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1695909751862,"hash":"d14320d1ca5170dac17c86aed8260af4ec0c47bb"}
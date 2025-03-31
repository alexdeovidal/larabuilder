use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::resource('products', ProductController::class);
Route::get('contact', [ContactController::class, 'show'])->name('contact');
Route::post('contact/send', [ContactController::class, 'send'])->name('contact.send');
Route::get('about', function () {
    return view('pages.about');
})->name('about');
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/db-test', function () {
    try {
        DB::connection()->getPdo();
        return "✅ Database connected: " . DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
        return "❌ DB Error: " . $e->getMessage();
    }
});

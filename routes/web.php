<?php

use App\Http\Controllers\Admin\AdminRDVController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\FormationController;
use App\Http\Controllers\Admin\RecrutementController;
use App\Http\Controllers\User\AccueilController;
use App\Http\Controllers\User\AproposController;
use App\Http\Controllers\User\FormationsController;
use App\Http\Controllers\User\RDVController;
use App\Http\Controllers\User\ServicesController;





Route::get('/', [AccueilController::class, 'index'])->name('accueil');
Route::post('/submit-consultation', [RDVController::class, 'rdv'])->name('rdv');

Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('detail_service_{service}', [ServicesController::class, 'details'])->name('services_details');

Route::get('/a-propos', [AproposController::class, 'index'])->name('a_propos');



Route::get('/formations', [FormationsController::class, 'index'])->name('formations');
Route::get('formations_{id}', [FormationsController::class, 'show'])->name('formations_details');
Route::get('inscription_{id}',[FormationsController::class, 'form_inscription'])->name('inscription');
Route::post('/inscription', [FormationsController::class, 'store'])->name('inscription.store');























Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('admin')->group(function () {
        Route::prefix('services')->group(function () {
            Route::get('/index', [ServiceController::class, 'index'])->name('services.index');
            Route::get('/create', [ServiceController::class, 'create'])->name('services.create');
            Route::post('/', [ServiceController::class, 'store'])->name('services.store');
            Route::get('/{service}/edit', [ServiceController::class, 'edit'])->name('services.edit');
            Route::put('/{service}', [ServiceController::class, 'update'])->name('services.update');
            Route::delete('/{service}', [ServiceController::class, 'destroy'])->name('services.destroy');
        });

        // Routes pour l'administration des formations
        Route::prefix('formations')->group(function () {
            Route::get('/index', [FormationController::class, 'index'])->name('formations.index');
            Route::get('/create', [FormationController::class, 'create'])->name('formations.create');
            Route::post('/', [FormationController::class, 'store'])->name('formations.store');
            Route::get('/{formation}/edit', [FormationController::class, 'edit'])->name('formations.edit');
            Route::put('/{formation}', [FormationController::class, 'update'])->name('formations.update');
            Route::delete('/{formation}', [FormationController::class, 'destroy'])->name('formations.destroy');
            Route::get('/liste_inscrption',[FormationController::class, 'form_list'])->name('liste.inscription');
        });

          // Routes pour l'administration des recrutements
          Route::prefix('recrutements')->group(function () {
            Route::get('/index', [RecrutementController::class, 'index'])->name('recrutements.index');
            Route::get('/create', [RecrutementController::class, 'create'])->name('recrutements.create');
            Route::post('/', [RecrutementController::class, 'store'])->name('recrutements.store');
            Route::get('/{recrutements}/edit', [RecrutementController::class, 'edit'])->name('recrutements.edit');
            Route::put('/{recrutements}', [RecrutementController::class, 'update'])->name('recrutements.update');
            Route::delete('/{recrutements}', [RecrutementController::class, 'destroy'])->name('recrutements.destroy');
        });

        Route::prefix('articles')->group(function () {
            Route::get('/index', [ArticleController::class, 'index'])->name('articles.index');
            Route::get('/create', [ArticleController::class, 'create'])->name('articles.create');
            Route::post('/', [ArticleController::class, 'store'])->name('articles.store');
            Route::get('/admin/articles/{article}', [ArticleController::class, 'show'])->name('articles.show');
            Route::get('/{articles}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
            Route::put('/{articles}', [ArticleController::class, 'update'])->name('articles.update');
            Route::delete('/{articarticlesles}', [ArticleController::class, 'destroy'])->name('articles.destroy');
        });

        Route::prefix('rdv')->group(function () {
            Route::get('/index', [AdminRDVController::class, 'index'])->name('rdvs.index');
        });


       
    });
});

require __DIR__ . '/auth.php';
 
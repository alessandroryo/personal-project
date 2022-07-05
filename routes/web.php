<?php

use App\Http\Controllers\AssessmentController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserManagementController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // User Management
    Route::get('user-management',[UserManagementController::class, 'index'])->name('user-management');
    Route::put('user-management/{id}',[UserManagementController::class, 'update']);

    // Report
    // Route::resource('reports', ReportController::class);
    Route::get('reports', [ReportController::class, 'index'])->name('reports.index');
    Route::get('reports/create', [ReportController::class, 'create'])->name('reports.create');
    Route::post('reports', [ReportController::class, 'store'])->name('reports.store');
    Route::get('reports/{report}', [ReportController::class, 'show'])->name('reports.show');
    Route::get('reports/{report}/edit', [ReportController::class, 'edit'])->name('reports.edit');

    // Route::resource('reports/{id}/subjects', SubjectController::class);
    Route::get('reports/{report}/subjects', [SubjectController::class, 'index'])->name('subjects.index');
    Route::get('reports/{report}/subjects/create', [SubjectController::class, 'create'])->name('subjects.create');
    Route::post('reports/{report}/subjects', [SubjectController::class, 'store'])->name('subjects.store');
    Route::get('reports/{report}/subjects/{subject}', [SubjectController::class, 'show'])->name('subjects.show');

    // Route::resource('assessments',AssessmentController::class);
    Route::get('reports/{report}/subjects/{subject}/assessment/create', [AssessmentController::class, 'create'])->name('assessments.create');
    Route::post('reports/{report}/subjects/{subject}/assessment', [AssessmentController::class, 'store'])->name('assessments.store');
});

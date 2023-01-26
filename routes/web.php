<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\UserController;
use App\Models\Attendance;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Leave;
use App\Models\Notice;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Traits\Network\UserNetwork;
use Carbon\Carbon;

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
    if(Auth::user()->role_id == 1){
        return redirect()->route('profile');
    }else{
        $total_employee = User::where('role_id', 1)->count();
        $total_department = Department::count();
        $total_designation = Designation::count();
        $total_notice = Notice::count();
        $attendances = Attendance::latest()->get();
        $notices = Notice::latest()->get();
        return view('dashboard', compact('total_employee','total_department', 'total_designation', 'total_notice', 'attendances', 'notices'));
    }
})->middleware('auth');;

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(["middleware" => ['auth']], function () {
    /* user create */
    Route::resource('user', UserController::class);
    Route::get('profile', [UserController::class, 'profile'])->name('profile');
    Route::get('logouts', [UserController::class, 'logouts'])->name('logouts');
    Route::put('password/change', [UserController::class, 'change_password'])->name('password.change');

    /* department */
    Route::resource('department', DepartmentController::class);

    /* designation */
    Route::resource('designation', DesignationController::class);

    /* attendance */
    Route::resource('attendance', AttendanceController::class);
    Route::get('punch/in', [AttendanceController::class, 'punchIn']);
    Route::get('punch/out', [AttendanceController::class, 'punchOut']);

    /* report */
    Route::get('report/individual', [ReportController::class, 'individual'])->name('report.individual');
    Route::post('report/search', [ReportController::class, 'individual'])->name('report.search');
    Route::get('report/summary', [ReportController::class, 'summary'])->name('report.summary');

    /* leave */
    Route::resource('leave', LeaveController::class);
    Route::get('leave/status/{id}', [LeaveController::class, 'status'])->name('leave.status');

    /* salary */
    Route::resource('salary', SalaryController::class);
    Route::get('salary/status/{id}', [SalaryController::class, 'status'])->name('salary.status');

    /* notice */
    Route::resource('notice', NoticeController::class);
 
    /* setting */
    Route::resource('role', RoleController::class);
    Route::resource('permission', PermissionController::class);
});

<?php

use App\Http\Controllers\MenegerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Meneger\SettingController;
use App\Http\Controllers\Meneger\HodimController;
use App\Http\Controllers\Meneger\TashrifController;
use App\Http\Controllers\Meneger\GropsController;
use App\Http\Controllers\Meneger\MoliyaController;
use App\Http\Controllers\Meneger\BalansController;
use App\Http\Controllers\Meneger\ChartController;
use App\Http\Controllers\Meneger\ProfelController;
use App\Http\Controllers\Meneger\HisobotController;
use App\Http\Controllers\Meneger\DarsJadvalController;
Route::middleware('auth')->group(function () {
    Route::get('/meneger', [MenegerController::class, 'index'])->name('meneger.home');
    /*  Start Setting  */
        Route::get('/meneger/setting/room', [SettingController::class, 'rooms'])->name('meneger.rooms');
        Route::POST('/meneger/setting/room/create', [SettingController::class, 'roomsCreate'])->name('meneger.rooms_create');
        Route::POST('/meneger/setting/room/block', [SettingController::class, 'roomsBlock'])->name('meneger.rooms_Block');
        Route::get('/meneger/setting/paymart', [SettingController::class, 'paymart'])->name('meneger.paymart');
        Route::POST('/meneger/setting/paymart/create', [SettingController::class, 'paymartCreate'])->name('meneger.paymart_reate');
        Route::POST('/meneger/setting/paymart/delete', [SettingController::class, 'paymartDelete'])->name('meneger.paymart_delete');
        Route::get('/meneger/setting/message', [SettingController::class, 'message'])->name('meneger.message');
        Route::get('/meneger/setting/message/show', [SettingController::class, 'messageShow'])->name('meneger.message_show');
        Route::post('/meneger/setting/update', [SettingController::class, 'messageUpdate'])->name('meneger.message_update');
        Route::get('/meneger/setting/cours', [SettingController::class, 'cours'])->name('meneger.cours');
        Route::get('/meneger/setting/cours/show/{id}', [SettingController::class, 'coursShow'])->name('meneger.cours_show');
        Route::post('/meneger/setting/cours/create', [SettingController::class, 'courscreate'])->name('meneger.cours_create');
        Route::post('/meneger/setting/cours/delete', [SettingController::class, 'coursdelete'])->name('meneger.cours_delete');
        Route::post('/meneger/setting/cours/create/video', [SettingController::class, 'courscreatevideo'])->name('meneger.cours_create_video');
        Route::post('/meneger/setting/cours/delete/video', [SettingController::class, 'courscreatevideodelete'])->name('meneger.cours_create_video_delete');
        Route::post('/meneger/setting/cours/create/test', [SettingController::class, 'courscreatetest'])->name('meneger.cours_create_test');
        Route::post('/meneger/setting/cours/delete/test', [SettingController::class, 'courscreatetestdelete'])->name('meneger.cours_create_test_delete');
    /*  End Setting  */

    /*  Start Hodimlar */
        Route::get('/meneger/employee', [HodimController::class, 'hodim'])->name('meneger.hodim');
        Route::post('/meneger/employee/unlock', [HodimController::class, 'hodimUnlock'])->name('meneger.hodim_unlock');
        Route::get('/meneger/employee/create', [HodimController::class, 'hodimCreate'])->name('meneger.hodim_create');
        Route::post('/meneger/employee/create', [HodimController::class, 'hodimCreateStore'])->name('meneger.hodim_create_store');
        Route::post('/meneger/employee/update', [HodimController::class, 'hodimUpdateStore'])->name('meneger.hodim_update_store');
        Route::post('/meneger/employee/statistik/clear', [HodimController::class, 'hodimStatistikClear'])->name('meneger.hodim_statistik_clear');
        Route::get('/meneger/employee/show/{id}', [HodimController::class, 'hodimShow'])->name('meneger.hodim_show');
        Route::post('/meneger/employee/update/password', [HodimController::class, 'hodimUpdatePassword'])->name('meneger.hodim_update_password');
        Route::post('/meneger/employee/paymart', [HodimController::class, 'paymartHodim'])->name('meneger.hodim_paymart');

        Route::get('/meneger/techer', [HodimController::class, 'techer'])->name('meneger.techer');
        Route::get('/meneger/techer/create', [HodimController::class, 'techerCreate'])->name('meneger.techer_create');
        Route::post('/meneger/techer/create', [HodimController::class, 'techerCreateStore'])->name('meneger.techer_create_store');
        Route::get('/meneger/techer/show/{id}', [HodimController::class, 'techerShow'])->name('meneger.techer_show');
        Route::post('/meneger/techer/update/password', [HodimController::class, 'techerUpdatePassword'])->name('meneger.techer_update_password');
        Route::post('/meneger/techer/update', [HodimController::class, 'techerUpdateStore'])->name('meneger.techer_update_store');
        Route::post('/meneger/techer/paymart', [HodimController::class, 'paymartTecher'])->name('meneger.techer_paymart');
    /*  End Hodimlar */
 
    /* Start Tashriflar */
        Route::get('/meneger/student/all', [TashrifController::class, 'allTashrif'])->name('meneger.all_tashrif');
        Route::get('/meneger/student/search', [TashrifController::class, 'TashrifSearch'])->name('meneger.all_search');
        Route::get('/meneger/student/debit', [TashrifController::class, 'allDebet'])->name('meneger.all_debet');
        Route::get('/meneger/student/debit/search', [TashrifController::class, 'TashrifDebitSearch'])->name('meneger.all_debet_search');
        Route::get('/meneger/student/create', [TashrifController::class, 'allCreate'])->name('meneger.all_create');
        Route::post('/meneger/student/create', [TashrifController::class, 'allCreateStory'])->name('meneger.all_create_story');
        Route::get('/meneger/student/show/{id}', [TashrifController::class, 'allShow'])->name('meneger.all_show');
        Route::post('/meneger/student/add/group', [TashrifController::class, 'userAddGroup'])->name('meneger.user_add_group');
        Route::post('/meneger/student/delete/group', [TashrifController::class, 'userDeleteGroup'])->name('meneger.user_delete_group');
        Route::post('/meneger/student/password/update', [TashrifController::class, 'allPasswordUpdate'])->name('meneger.password_update');
        Route::post('/meneger/student/update', [TashrifController::class, 'studentUpdate'])->name('meneger.student_update');
        Route::post('/meneger/student/eslatma/create', [TashrifController::class, 'studentCreatEslatma'])->name('meneger.create_eslatma');

        Route::post('/meneger/student/paymart', [TashrifController::class, 'UserPaymarts'])->name('meneger.paymarts');
        Route::post('/meneger/student/repet/paymart', [TashrifController::class, 'UserRepertPaymarts'])->name('meneger.paymarts_reperts');
        Route::post('/meneger/student/chegirma/paymart', [TashrifController::class, 'UserChegirmaPaymarts'])->name('meneger.paymarts_chegirma');
        
        Route::get('/meneger/student/leseen/table', [TashrifController::class, 'darsJadvali'])->name('meneger.dars_jadval');
    /* End Tashriflar */

    /* Start Guruhlar */
        Route::get('/meneger/groups/all', [GropsController::class, 'allGroups'])->name('meneger_groups');
        Route::get('/meneger/groups/end', [GropsController::class, 'ebdGroups'])->name('meneger_groups_end');
        Route::get('/meneger/groups/create', [GropsController::class, 'createGroups'])->name('meneger_groups_create');
        Route::post('/meneger/groups/create', [GropsController::class, 'createGroupsStoryOne'])->name('meneger_groups_create_story');
        Route::get('/meneger/groups/create/two', [GropsController::class, 'createGroupsTwo'])->name('meneger_groups_create_two');
        Route::get('/meneger/groups/create/two/{room_id}', [GropsController::class, 'darsvaqtlari']);
        Route::post('/meneger/groups/create/two', [GropsController::class, 'createGroupsStoreTwo'])->name('meneger_groups_create_story_two');
        Route::get('/meneger/groups/show/{id}', [GropsController::class, 'showGroups'])->name('meneger_groups_show');
        Route::post('/meneger/groups/next/create/story', [GropsController::class, 'createNextStoryGroups'])->name('meneger_groups_next_create_story');
        Route::get('/meneger/groups/next/create/two', [GropsController::class, 'createNextTwoGroups'])->name('meneger_groups_next_create_two');
        Route::post('/meneger/groups/next/create/story/end', [GropsController::class, 'createNextStoryEnd'])->name('meneger_groups_next_create_story_end');
        Route::get('/meneger/groups/next/create/{id}', [GropsController::class, 'createNextGroups'])->name('meneger_groups_next_create');
        Route::post('/meneger/groups/updates', [GropsController::class, 'groupsUpdates'])->name('meneger_groups_updates');
        Route::post('/meneger/groups/debet/messege', [GropsController::class, 'groupsDebetMessege'])->name('meneger_groups_debet_messege');
    /* End Guruhlar */

    /* Start Molya */
        Route::get('/meneger/moliya/home', [MoliyaController::class, 'moliyaHome'])->name('meneger_moliya_home');
        Route::post('/meneger/moliya/kassa/chiqim', [MoliyaController::class, 'kassadanChiqim'])->name('meneger_moliya_kassadan_chiqim');
        Route::post('/meneger/moliya/kassa/chiqim/delete', [MoliyaController::class, 'kassadanChiqimDelete'])->name('meneger_moliya_kassadan_chiqim_delete');
        Route::post('/meneger/moliya/kassa/chiqim/check', [MoliyaController::class, 'kassadanChiqimCheck'])->name('meneger_moliya_kassadan_chiqim_check');
    /* End Molya */

    
    /* Start Balans */
        Route::get('/meneger/balans/home', [BalansController::class, 'balansHome'])->name('meneger_balans_home');
        Route::post('/meneger/balans/ish/haqi', [BalansController::class, 'balansIshHaqi'])->name('meneger_profel_ish_haqi');
        Route::post('/meneger/balans/chiqimlar', [BalansController::class, 'balansChiqimlar'])->name('meneger_profel_chiqimlar');
    /* End Balans */

    /* Start Profel */
        Route::get('/meneger/profel/home', [ProfelController::class, 'profel'])->name('meneger_profel');
        Route::post('/meneger/profel/update/password', [ProfelController::class, 'profelUpdatePassword'])->name('meneger_profel_update_password');
    /* End Profel */
//message_show
    /* Start Chart */
        Route::get('/chart/days', [ChartController::class, 'days'])->name('chart_days');
        Route::get('/chart/days/table', [ChartController::class, 'dayTable'])->name('chart_days_table');
        Route::get('/chart/month', [ChartController::class, 'month'])->name('chart_monch');
        Route::get('/chart/month/table', [ChartController::class, 'monthTable'])->name('chart_monch_table');
    /* End Chart */

    /* Start report */
        Route::get('/report/student', [HisobotController::class, 'student'])->name('report_student');
        Route::post('/report/student', [HisobotController::class, 'studentSearch'])->name('report_student_search');
        Route::get('/report/hodim', [HisobotController::class, 'hodimlar'])->name('report_hodim');
        Route::post('/report/hodim', [HisobotController::class, 'hodimlarSearch'])->name('report_hodim_search');
        Route::get('/report/moliya', [HisobotController::class, 'moliya'])->name('report_moliya');
        Route::post('/report/moliya', [HisobotController::class, 'moliyaSearch'])->name('report_moliya_search');
        Route::get('/report/activ', [HisobotController::class, 'active'])->name('report_active_user');
        Route::post('/report/activ', [HisobotController::class, 'activeSearch'])->name('report_active_user_search');
    /* End report */

    /* Start Dars Jadvali */
        Route::get('/dars/jadval', [DarsJadvalController::class, 'darsJadval'])->name('dars_jadval');
    /* End Dars Jadvali */
}); 
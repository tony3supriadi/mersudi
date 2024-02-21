<?php

namespace App\Http\Middleware;

use App\Models\Anggota;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class AnggotaMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();
        $anggota = Anggota::where('user_id', $user->id);
        $anggota_oldb = DB::connection('mysql_oldb')
            ->table('anggota')
            ->where('agt_email', $user->email)
            ->exists();

        if ($user->hasRole('Anggota')) {

            if ($user->datatype == null) {
                if ($anggota->count() == 0) {
                    if ($anggota_oldb) {
                        return redirect()->route('anggota.registrasi.oldb');
                    } else {
                        $user->update([
                            'datatype' => User::USER_NEW_DATATYPE,
                        ]);
                        return redirect()->route('anggota.registrasi');
                    }
                }
            } else {
                if ($anggota->count() == 0) {
                    return redirect()->route('anggota.registrasi');
                } else {
                    $data_anggota = $anggota->first();
                    if ($data_anggota->status != 3) {
                        if ($data_anggota->hasKta()) {
                            return $next($request);
                        } else {
                            return redirect()->route('anggota.registrasi.step03');
                        }
                    } else {
                        return redirect()->route('anggota.registrasi.step02');
                    }
                }
            }
        } else {
            return $next($request);
        }
    }
}

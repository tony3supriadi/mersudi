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
        if ($user->hasRole('Anggota')) {
            $anggota = Anggota::where('user_id', $user->id)->count();
            if ($user->datatype == null) {
                if ($anggota == 0) {
                    $oldb_anggota = DB::table('oldb_anggota')
                        ->where('agt_email', $user->email)
                        ->count();

                    if ($oldb_anggota == 1) {
                        return redirect()->route('anggota.pemutakhiran.oldb');
                    } else {
                        $user->update([
                            'datatype' => User::USER_NEW_DATATYPE,
                        ]);
                        return redirect()->route('anggota.pemutakhiran');
                    }
                } else {
                    return redirect()->route('dashboard');
                }
            } else {
                if ($anggota == 0) {
                    if (request()->routeIs('anggota.pemutakhiran')) {
                        return $next($request);
                    } else {
                        return redirect()->route('anggota.pemutakhiran');
                    }
                } else {
                    return redirect()->route('dashboard');
                }
            }
            return $next($request);
        } else {
            abort(404);
        }
    }
}

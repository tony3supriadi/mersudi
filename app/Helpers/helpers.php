<?php

if (!function_exists('initial_name')) {
    function initial_name($val)
    {
        $init_name = [];
        $split_name = explode(" ", $val);
        $length = count($split_name) > 1 ? 2 : 1;
        for ($i = 0; $i < $length; $i++) {
            $init_name[$i] = strtoupper(substr($split_name[$i], 0, 1));
        }
        return implode("", $init_name);
    }
}

if (!function_exists('nickname')) {
    function nickname($fullname)
    {
        $fullname = str_replace(["Drs. ", "Ir. ", "dr. ", "Ns. ", "Apt. "], "", $fullname);
        $split_fullname = explode(" ", $fullname);
        return $split_fullname[0];
    }
}

if (!function_exists('get_reg_number')) {
    function get_reg_number($sprintf = false)
    {
        $reg_number = 100;
        $query = \App\Models\Anggota::orderBy('nomor_urut_registrasi', 'desc');
        if ($query->count() > 0) {
            $reg_number = $query->first()->nomor_urut_registrasi + 1;
        }
        return $sprintf ? sprintf("%08d", $reg_number) : $reg_number;
    }
}

if (!function_exists('get_nomor_urut_registrasi')) {
    function get_member_number($sprintf = false)
    {
        $member_number = get_reg_number();
        while (\App\Models\Anggota::where('nomor_urut_anggota', sprintf("%08d", $member_number))->exists()) {
            $member_number += 1;
        }
        return sprintf("%06d", $member_number);
    }
}

if (!function_exists('get_nomor_urut_anggota')) {
    function set_member_card_number($member)
    {
        $code01 = sprintf("%02d", $member->daerah_id); //$member->daerah_id
        $code02 = sprintf("%03d", $member->cabang_id); //$member->cabang_id
        $code03 = $member->nomor_urut_anggota;
        return $code01 . '.' . $code02 . '.' . $code03;
    }
}

if (!function_exists('get_setting')) {
    function get_setting($name)
    {
        $query = \App\Models\Setting::where('name', $name);
        if ($query->count() > 0) {
            return $query->first()->value;
        } else if ($query->count() > 1) {
            return $query->pluck('value')->toArray();
        } else {
            return null;
        }
    }
}

if (!function_exists('set_invoice_number')) {
    function set_anggota_invoice_number()
    {
        $invoice = \App\Models\AnggotaInvoice::orderBy('created_at', 'DESC');
        if ($invoice->count() > 0) {
            $invoice_number = $invoice->first()->invoice_number + 1;
        } else {
            $invoice_number = 1;
        }
        return $invoice_number;
    }
}

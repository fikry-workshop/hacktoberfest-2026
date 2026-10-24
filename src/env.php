<?php
// Pembaca .env sederhana: BARIS "KUNCI=nilai", tanda kutip dan BOM Windows ditangani.
function muat_env(string $path): array {
    $hasil = [];
    if (!is_readable($path)) return $hasil;
    $isi = preg_replace('/^\xEF\xBB\xBF/', '', (string) file_get_contents($path));
    foreach (preg_split('/\R/', $isi) as $baris) {
        $baris = trim($baris);
        if ($baris === '' || $baris[0] === '#' || strpos($baris, '=') === false) continue;
        [$k, $v] = explode('=', $baris, 2);
        $hasil[trim($k)] = trim(trim($v), "\"'");
    }
    return $hasil;
}

<?php

/*
╔══════════════════════════════════════════════════════════════════╗
║                         APA ITU INTERFACE?                        ║
╠══════════════════════════════════════════════════════════════════╣
║                                                                   ║
║  Interface adalah "kerangka/kontrak murni" yang berisi           ║
║  daftar method yang WAJIB diimplementasikan oleh class           ║
║  yang menggunakannya.                                             ║
║                                                                   ║
║  Analogi: Seperti "daftar pekerjaan" dalam kontrak kerja.        ║
║  Interface bilang: "Kamu HARUS bisa melakukan ini, ini, ini"     ║
║  Tapi TIDAK bilang CARANYA bagaimana.                            ║
║                                                                   ║
╚══════════════════════════════════════════════════════════════════╝
*/

// CONTOH INTERFACE SEDERHANA
interface Hewan 
{
    // Cukup tulis nama method dan parameter saja
    // TIDAK BOLEH ada isi / kurung kurawal {}
    public function bersuara(); // WAJIB diisi oleh class anak
    public function bergerak(); // WAJIB diisi oleh class anak
}

/*
 * PENJELASAN:
 * - Interface Hewan membuat aturan: semua hewan HARUS bisa bersuara dan bergerak
 * - TAPI interface tidak peduli bagaimana cara bersuara dan bergeraknya
 * - Nanti class anak yang menentukan detailnya
 */

// Class Kucing "menandatangani kontrak" dengan interface Hewan
class Kucing implements Hewan  // implements = menandatangani kontrak
{
    // WAJIB mengisi method bersuara() karena sudah dijanjikan di interface
    public function bersuara() {
        return "Meow! Meow!";  // Kucing bersuara dengan "Meow"
    }
    
    // WAJIB mengisi method bergerak() karena sudah dijanjikan di interface
    public function bergerak() {
        return "Berjalan pelan dan lincah";  // Kucing bergerak dengan cara ini
    }
}

class Anjing
{
    public function bersuara() {
        return "Guk! Guk! Guk!";  // Anjing bersuara berbeda dengan kucing
    }
    
    public function bergerak() {
        return "Berlari kencang";  // Anjing bergerak berbeda dengan kucing
    }
}

// PENGGUNAAN
$kucing = new Kucing();
echo $kucing->bersuara();  // Output: Meow! Meow!
echo "<br>";
echo $kucing->bergerak();  // Output: Berjalan pelan dan lincah

$anjing = new Anjing();
echo $anjing->bersuara();  // Output: Guk! Guk! Guk!

?>
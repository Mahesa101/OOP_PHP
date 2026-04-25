<?php

/*
╔══════════════════════════════════════════════════════════════════╗
║                        APA ITU NAMESPACE?                         ║
╠══════════════════════════════════════════════════════════════════╣
║                                                                   ║
║  Namespace adalah "folder virtual" untuk mengelompokkan kode.    ║
║                                                                   ║
║  Masalah: Tidak bisa punya 2 class dengan nama sama.             ║
║  Solusi: Pakai namespace, biar nama class boleh sama asal        ║
║          namespace-nya berbeda.                                  ║
║                                                                   ║
║  Analogi: Seperti nama orang.                                    ║
║  - Di kelas A: ada "Budi"                                        ║
║  - Di kelas B: ada "Budi" juga                                   ║
║  - Panggil "Budi dari kelas A" atau "Budi dari kelas B"          ║
║                                                                   ║
╚══════════════════════════════════════════════════════════════════╝
*/

// Contoh tanpa namespace (ERROR jika ada 2 class dengan nama sama)
// class Hewan { }  // Class pertama
// class Hewan { }  // ERROR! Cannot declare class Hewan again

// Contoh DENGAN namespace (BOLEH, karena beda namespace)
namespace HewanDarat {
    class Hewan {
        public function info() {
            return "Hewan darat";
        }
    }
}

namespace HewanLaut {
    class Hewan {
        public function info() {
            return "Hewan laut";
        }
    }
}

// Cara menggunakan
$hewan1 = new HewanDarat\Hewan();
echo $hewan1->info(); // Hewan darat

$hewan2 = new HewanLaut\Hewan();
echo $hewan2->info(); // Hewan laut

?>
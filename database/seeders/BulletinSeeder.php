<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\bulletin;

class BulletinSeeder extends Seeder{
    public function run(){
        bulletin::create(['img' => '01.jpg','url' => 'https://mega.nz/file/7l4g1C6a#aErbIqX90fV4x2zocT6yIuvRdip_ja8bqxlAO2R2IMg','file' => '2020-01-BL-Kaleidoskop 2019.pdf' ]);
        bulletin::create(['img' => '02.jpg','url' => 'https://mega.nz/file/H05QGCDQ#fTpXPCVM3WhxUhpn8vbO0-lrl1bpN-Q2cYpAyYufsbs','file' => '2020-02-BL-FEBRUARI 2020.pdf' ]);
        bulletin::create(['img' => '03.jpg','url' => 'https://mega.nz/file/6h4GBazR#0bw-67EzT4XjVhrKqENUFk8UX2MG1jRHCSBgdyNeX2g','file' => '2020-03-BL- MARET 2020.pdf' ]);
        bulletin::create(['img' => '04.jpg','url' => 'https://mega.nz/file/fhxC1Y4Z#qZys0csN2eSjO0w8wSmrJP_5sCGs35fgkjZ7xws1Y_4','file' => '2020-04-BL-APRIL 2020.pdf' ]);
        bulletin::create(['img' => '05.jpg','url' => 'https://mega.nz/file/D8xk1SyZ#PxMGm6Bj324aiz5BEir08xdtQmPq4Ge8Ep8MitpM_W0','file' => '2020-05-BL-MEI 2020.pdf' ]);
        bulletin::create(['img' => '06.jpg','url' => 'https://mega.nz/file/T9pVBIjT#D9E3dIUdoBdIr-rOXSiNdW12AhixoWUml7RaZ5s_sNo','file' => '2020-06-BL-JUNI 2020.pdf' ]);
        bulletin::create(['img' => '07.jpg','url' => 'https://mega.nz/file/GlAnhKrK#lyUUpY1T2e7seH-gy45WNPaMpoO2-iJPCbM7bPKQUE4','file' => '2020-07-BL-JULI 2020.pdf' ]);
        bulletin::create(['img' => '08.jpg','url' => 'https://mega.nz/file/u8RTDazC#52AD1QWLyUskckdBCvKuEhru6JCoABu6C44spy1IW54','file' => '2020-08-BL-AGUSTUS 2020.pdf' ]);
        bulletin::create(['img' => '09.jpg','url' => 'https://mega.nz/file/r1AXXCDB#-9cgrw0F9r22fG-li6JqrmZoRbE51C47h2hwrMDi7Qs','file' => '2020-09-BL-SEPT 2020.pdf' ]);
        bulletin::create(['img' => '10.jpg','url' => 'https://mega.nz/file/SlgGUIpZ#e8tji3P06t5po1VWy_dIKb2BIPzQJOAClEbjz2d2pww','file' => '2020-10-BL-OKT 2020.pdf' ]);
        bulletin::create(['img' => '11.jpg','url' => 'https://mega.nz/file/W0InWQ5K#CdZasnRFsXB_GTV54bjI6zRbX0k_2akuU72Lc1iPH9k','file' => '2020-11-BL-NOV 2020.pdf' ]);
        bulletin::create(['img' => '12.jpg','url' => 'https://mega.nz/file/jlRnFSTD#okH5vw2sRk1jQG5kIyxRIFNV_1yrXIWe6_7YCgPAZXI','file' => '2020-12-BL-DES 2020.pdf' ]);
        bulletin::create(['img' => '13.jpg','url' => 'https://mega.nz/file/z1BXGa7I#OfDV2e88jbHXqwbhVVSgvxRgKg4B7EBEiqKomkMUmW8','file' => '2021-01-BL-Kaleidoskop 2020.pdf' ]);
        bulletin::create(['img' => '14.jpg','url' => 'https://mega.nz/file/n1ZG1brT#6zOe6iCMVULuCyxdpFXEhJkUtwe2vBquaVhubHmMl_g','file' => 'ANNUAL REPORT 2020.pdf' ]);
        bulletin::create(['img' => '15.jpg','url' => 'https://mega.nz/file/y9pD0AoI#ny2fjhuNqVTxmmhRdCGOkyx4EhgfFsdTn1vkfIHnt2Y','file' => 'BL FEB 2021-UPDATE.pdf' ]);
        bulletin::create(['img' => '16.jpg','url' => 'https://mega.nz/file/DgRl1a6b#DuBjm_oQTcNHk7xe6flaHhlUtPcaaneUutcUGwbVJ1A','file' => 'BL MAR 2021-UPDATE.pdf' ]);
    }
}

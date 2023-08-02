<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => "Maybelline x ITZY Stage Look Bundle Set #NotShyYourWay",
                'slug' => "Maybelline x ITZY Stage Look Bundle Set #NotShyYourWay",
                'description' => "Maskara waterproof yang memanjangkan, menebalkan, dan melentikan bulu mata hanya dalam satu menit dengan mudah tanpa perlu ke salon. Falsies Lash Lift Mascara dari Maybelline memberikan efek lash lift hanya dalam satu menit tanpa harus ke salon! Foundation bertekstur cair dengan formula yang ringan dan dapat digunakan sehari-hari. Coverage: light to medium, terlihat natural di wajah. Non-comedogenic: tidak menyumbat pori-pori. Mengandung micro-powder yang memberikan hasil akhir matte, sehingga kulit bebas kilap seharian. Bisa diratakan di kulit menggunakan jari, spons atau brush.  Warna 220 Natural Beige cocok untuk Kulit sawo matang & kuning langsat dengan undertone netral",
                'cover' => "products/1.webp",
                'price' => 419000,
                'weight' => 05,
                'views' => 901,
                'stock' => 12,
                'status' => "PUBLISH"
            ],
            [
                'name' => "Rice Sunscreen",
                'slug' => "Rice Sunscreen",
                'description' => "Mineral sunscreen dengan SPF 50+ PA++++ dan mengandung 41% Goami (ekstrak beras dari Yeoju, Korea Selatan yang dapat melindungi kulit dari paparan sinar matahari dan membantu mencerahkan rona kulit wajah. Selain itu dapat juga membantu menenangkan kulit iritasi karena paparan radiasi UV Memiliki tekstur yang ringan sehingga dapat dengan mudah menyerap tanpa rasa lengket dan tidak meninggalkan whitecast pada kulit",
                'cover' => "products/2.png",
                'price' => 465500,
                'weight' => 1,
                'views' => 190,
                'stock' => 20,
                'status' => "PUBLISH"
            ],
            [
                'name' => "Carasun Solar Smart UV Protector 70ml Duo",
                'slug' => "Carasun Solar Smart UV Protector 70ml Duo",
                'description' => "Solar Smart UV Protector melindungi optimal dengan SPF 45 yang menangkal 97.8% UVB, dan PA++++ perlindungan tertinggi terhadap UVA yang dapat memicu hyperpigmentasi dan penuaan dini. Berkat teknologi yang dipatenkan CloudLike, Carasun memiliki tekstur unik seringan awan yang non-comedogenic, membuat kulitmu terasa nyaman dan tetap fresh hingga 8 jam! Formulanya yang Halal dibuat tanpa alkohol, teruji klinis sesuai untuk kulit sensitif. Diperkaya Ekstrak Beras dan CityStem, menutrisi kulit serta melindungi dari radikal bebas.",
                'cover' => "products/3.png",
                'price' => 222600, 'weight' => 1,
                'views' => 120, 'stock' => 25,
                'status' => "PUBLISH"
            ],
            ['name' => "Miraculous divine aura series", 'slug' => "Miraculous divine aura series", 'description' => "Solar Smart UV Protector melindungi optimal dengan SPF 45 yang menangkal 97.8% UVB, dan PA++++ perlindungan tertinggi terhadap UVA yang dapat memicu hyperpigmentasi dan penuaan dini. Berkat teknologi yang dipatenkan CloudLike, Carasun memiliki tekstur unik seringan awan yang non-comedogenic, membuat kulitmu terasa nyaman dan tetap fresh hingga 8 jam! Formulanya yang Halal dibuat tanpa alkohol, teruji klinis sesuai untuk kulit sensitif. Diperkaya Ekstrak Beras dan CityStem, menutrisi kulit serta melindungi dari radikal bebas.", 'cover' => "products/4.png", 'price' => 222600, 'weight' => 1, 'views' => 330, 'stock' => 25, 'status' => "PUBLISH"],
            ['name' => "Organic Glow & Bright Booster Pack", 'slug' => "Organic Glow & Bright Booster Pack", 'description' => "Strong sun protection, healthy skin. Dengan mempergunakan teknologi Mexoryl dan formula yang telah sama-sama dipatenkan, terciptalah sebuah sistem tujuh fiter yang dapat memberikan perlindungan menyeluruh terhadap sinar UV.  Cetaphil® UVA/UVB Defence SPF 50+ memberikan perlindungan luar biasa terhadap kulit sekaligus menyegarkan dan melembabkan kulit.", 'cover' => "products/5.png", 'price' => 347981, 'weight' => 1, 'views' => 109, 'stock' => 12, 'status' => "PUBLISH"],
            ['name' => "Uva/Uvb Defense Spf 50", 'slug' => "Uva/Uvb Defense Spf 50", 'description' => "Strong sun protection, healthy skin. Dengan mempergunakan teknologi Mexoryl dan formula yang telah sama-sama dipatenkan, terciptalah sebuah sistem tujuh fiter yang dapat memberikan perlindungan menyeluruh terhadap sinar UV.  Cetaphil® UVA/UVB Defence SPF 50+ memberikan perlindungan luar biasa terhadap kulit sekaligus menyegarkan dan melembabkan kulit.", 'cover' => "products/6.png", 'price' => 380880, 'weight' => 1, 'views' => 239, 'stock' => 125, 'status' => "PUBLISH"],
            ['name' => "Advanced Snail Mucin 96 Power Essence", 'slug' => "Advanced Snail Mucin 96 Power Essence", 'description' => "Advanced Snail 96 Mucin Power Essence diformulasikan dengan 96% Snail Secretion Filtrate (Mucin)yang dapat memberi kelembapan ekstra kepada kulit serta memperbaiki tekstur kulit menjadi lebih sehat dan kenyal. Memiliki tekstur yang agak kental tetapi terasa ringan di kulit.", 'cover' => "products/7.jpg", 'price' => 206250, 'weight' => 1, 'views' => 459, 'stock' => 200, 'status' => "PUBLISH"],
            ['name' => "Hydro Sense Comfort Refill 4", 'slug' => "Hydro Sense Comfort Refill 4", 'description' => "Hydro 5 Sense® Sensitive Refills, dengan ekstrak herbal, membantu kenyamanan kulit sensitif.", 'cover' => "products/8.png", 'price' => 289820, 'weight' => 1, 'views' => 303, 'stock' => 20, 'status' => "PUBLISH"],
            ['name' => "BIES Blossom Avenue BATH & BODY", 'slug' => "BIES Blossom Avenue BATH & BODY", 'description' => "Aroma Floral yang dominan dengan perpaduan sensasi powdery membuat aroma terkesan soft. Sensasi fresh di middle notes yang diakhiri dengan aroma musk. BODY LOTION : membantu menjaga kulit tetap sehat & muda sepanjang tahun. Kulit lembab, lembut & halus.", 'cover' => "products/9.png", 'price' => 206250, 'weight' => 1, 'views' => 988, 'stock' => 520, 'status' => "PUBLISH"],
            ['name' => "Perfect Renew 3x Serum Set", 'slug' => "Perfect Renew 3x Serum Set", 'description' => "Warna mengkilap yang memberi Anda kilau menghidrasi instan dan noda tahan lama dalam satu sapuan", 'cover' => "products/10.png",  'price' => 120000, 'weight' => 3,  'views' => 890,  'stock' => 20, 'status' => "PUBLISH"],
            ['name' => "Perfect Brow Goals Set", 'slug' => "Perfect Brow Goals Set",  'description' => "Sudah termasuk dengan Micro-Fiber Browcara yang dapat digunakan untuk membuat alis terlihat tebal dan natural dengan cepat dan instan, ujung Pensil Alis dengan bentuk Diamond yang dapat digunakan untuk menggambar serat alis dan mengisi alismu dengan sempurna, serta Spoolie yang dapat digunakan untuk merapikan alismu!", 'cover' => "products/11.png", 'price' => 154360, 'weight' => 2, 'views' => 8190, 'stock' => 40, 'status' => "PUBLISH"],
            ['name' => "Lilybyred Little Bitty Moment Shadow", 'slug' => "Lilybyred Little Bitty Moment Shadow", 'description' => "lilybyred Little Bitty Moment Shadow merupakan Palet eye shadow duo yang terdiri dari jenis Matte & Glitter. Perpaduan creamy matte dan melting glitter yang menyatu dengan halus tanpa menggumpal.    Eyeshadow mini ini sangat kecil dan ringkas sehingga Anda dapat dibawa ke mana pun Anda pergi", 'cover' => "products/12.png", 'price' => 346250, 'weight' => 2, 'views' => 290, 'stock' => 50, 'status' => "PUBLISH"],
            ['name' => 'Performance Eye 8x Pallete', 'slug' => 'Performance Eye 8x Pallete', 'description' => 'Merupakan foundation berbentuk cushion yang ringan dan tahan lama mampu menutupi kulit kusam atau noda sehingga membuat kulit tampak cerah dan mulus. Alas bedak dengan coverage tinggi memberikan hasil kulit cerah yang maksimal dengan kulit yang tampak flawless dan Coverage yang tahan lama memberikan kulit halus bersih tanpa penggumpalan.', 'cover' => 'products/14.png', 'price' => 407150, 'weight' => 1, 'views' => 300, 'stock' => 610, 'status' => 'PUBLISH'],
            ['name' => 'Eyeliner', 'slug' => 'Eyeliner', 'description' => 'Eyeliner kami adalah eyeliner cair sempurna dalam warna hitam yang sangat berpigmen, tahan air, dan anti-noda.', 'cover' => 'products/15.png', 'price' => 81150, 'weight' => 1, 'views' => 200, 'stock' => 410, 'status' => 'PUBLISH'],
            ['name' => 'YOU Cloud Touch Fixing Tint (Limited Edition)', 'slug' => 'YOU Cloud Touch Fixing Tint (Limited Edition)', 'description' => 'Sebuah lip tint ringan seperti awan lembut dengan formula transfer rendah yang memberikan noda matte tahan lama, mengandung Ekstrak Daun Strawberry dan Ceramide untuk meninggalkan bibir tampak sehat dan bergizi. A weightless, soft cloud-like lip tint with low transfer formula that give long lasting matte stain, contains Strawberry Leaf Extract and Ceramide to leave healthy-looking and nourished lips.', 'cover' => 'products/13.png', 'price' => 72550, 'weight' => 1, 'views' => 300, 'stock' => 210, 'status' => 'PUBLISH'],

        ];
        DB::table('products')->insert($products);
    }
}

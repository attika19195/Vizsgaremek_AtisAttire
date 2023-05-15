<?php

use App\Models\Modell;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modells', function (Blueprint $table) {
            $table->id('modell_id');
            $table->string('nev');
            $table->foreignId('tervezo')->references('t_azon')->on('tervezos');
            $table->text('leiras');
            $table->string('kep');
            $table->char('szezon');
            $table->foreignId('kategoria')->references('kategoria_id')->on('kategorias');
            $table->integer('ar');
            $table->timestamps();
        });

        Modell::create(['nev' => 'DIOR COTTON TROUSERS', 'tervezo' => '1', 'leiras' => 'Ez a nadrág magas minőségű pamut készült, amely tartós és kényelmes anyag. A nadrág karcsú, de nem túl szoros szabása kiemeli a férfias alakot. A klasszikus fazon, az elegáns megjelenés, és a letisztult vonalak teszik a nadrágot tökéletes választássá üzleti találkozókra és különleges alkalmakra.', 'kep' => 'https://cdn.shopify.com/s/files/1/1383/8317/products/kakicottongurkhatrousers_1_800x.jpg?v=1633975134', 'szezon' => 'Nyár', 'kategoria' => '1', 'ar' => 609000]);

        Modell::create(['nev' => 'GAP Jeans original', 'tervezo' => '3', 'leiras' => 'Ez a nadrág a legjobb minőségű, prémium farmer anyagból készült. A szűk, modern szabás, és az elegáns részletek - mint a bőrvarrás - teszik igazán stílusossá a nadrágot. A nadrág alkalmas különböző eseményekre, de ugyanolyan jól mutat egy informális programon is.', 'kep' => 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcToBmPxvRw686l5__paOqQh6fFfBqtLKaSZvsf2ZcaBdCj-Q03h_I6JpEvQ38bwDfrYTwB-zrAeIBEdsK7AxJrsTq_vHU7ITfpk4zJ2B0DjaisLIXeqGDidFA&usqp=CAE', 'szezon' => 'Nyár', 'kategoria' => '1', 'ar' => 409000]);

        Modell::create(['nev' => 'PRADA cashmere jogging pants', 'tervezo' => '6', 'leiras' => 'Ez a nadrág prémium kasmír anyagból készült, amely nagyon puha, kényelmes és kellemes az érzés. A nadrág egyenes fazonja és magas derékrésze tökéletesen illik a férfias alakhoz, és az elegáns megjelenést kölcsönöz. A kasmír nadrág tökéletes választás lehet különleges alkalmakra, mint esküvő, ünnepség, de a hétköznapokban is tökéletesen mutat egy elegáns megjelenéssel párosítva.', 'kep' => 'https://cdn.shopify.com/s/files/1/0516/1179/5648/products/Cashmere-Camel-Beige-Joggers-Made-in-Italy-_0844-_1_70847715-3478-4fd7-91c2-0ab741366810_1024x1024@2x.jpg?v=1624627258', 'szezon' => 'Nyár', 'kategoria' => '1', 'ar' => 1009000]);

        Modell::create(['nev' => 'HAN KJOBENHAVN Crewneck Knit Cashmere', 'tervezo' => '2', 'leiras' => 'Ez a férfi pulóver prémium minőségű kasmírból készült, amely nagyon puhává és kellemes tapintásúvá teszi. A pulóver könnyű, de melegen tart, és jól szellőzik, így akár hideg időben is kényelmes viselet. A pulóver egyszerű, de elegáns dizájnja miatt alkalmas különféle alkalmakra, de a hétköznapokban is stílusos megjelenést biztosít.', 'kep' => 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQdrMQiabo8lyWVib0KXfSjycok9edi9uWAKmVzCfLd_l0QFEhani5ohSgxpHhkWoisznBrfDuczvGPF5KmsTW968LQlWPDAgMspCqKERl1JHzeAV6jvDA9SQ&usqp=CAE', 'szezon' => 'Tél', 'kategoria' => '2', 'ar' => 230000]);

        Modell::create(['nev' => 'VISVIM Cable-knit wool sweater', 'tervezo' => '7', 'leiras' => 'Ez a férfi pulóver magas minőségű merinó gyapjúból készült, amely kellemesen puha érzetet biztosít. A pulóver rugalmas és könnyű anyaga miatt kényelmesen illeszkedik a testhez, és megfelelő védelmet nyújt a hideg időjárás ellen. A pulóver stílusos, letisztult dizájnnal rendelkezik, amely megfelelő lehet különféle alkalmakra.', 'kep' => 'https://img.mytheresa.com/1094/1236/66/jpeg/catalog/product/d8/P00792355_b2.jpg', 'szezon' => 'Tél', 'kategoria' => '2', 'ar' => 83000]);

        Modell::create(['nev' => 'CHANEL chasmere wool', 'tervezo' => '8', 'leiras' => 'Ez a férfi pulóver kiváló minőségű kaschmir pamutból készült, amely kellemesen puha és könnyű érzést biztosít. A pulóver magas nyakú, így kiválóan alkalmas hidegebb időkre is. A pulóver különleges textúrája és szövése miatt stílusos és elegáns megjelenést kölcsönöz a viselőjének, így alkalmas különböző alkalmakra, de akár a hétköznapokban is viselhető.', 'kep' => 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcTiyNkDbneRAPNvFuuMMuAPN-W81HT4wlA_EGymNAXMlEo5jLppNiH-SZtc1JP6o3ZHD-evqEem5KJxwIJ3xloGgWsJ4O9w7RBUBIPFHg-OVn5xZWY_M3OyEQ&usqp=CAE', 'szezon' => 'Tél', 'kategoria' => '2', 'ar' => 53000]);

        Modell::create(['nev' => 'Polo Ralph Lauren CLASSIC SPORT CAP Baseball', 'tervezo' => '5', 'leiras' => 'Ez a férfi sapka prémium minőségű kasmír anyagból készült, amely nagyon puha és kellemes érzetet biztosít a fejen. A sapka könnyű és melegen tart, így ideális viselet hideg időben. A sapka egyszerű, letisztult dizájnnal rendelkezik, amely alkalmas mindennapi viseletre, de elegánsabb eseményeken is megállja a helyét.', 'kep' => 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcRNTdhldU6fOYeDhpUFcugj2KKBiD7ggdNemAmOLFMca91HCa8q6eHBG-u6H55bmQQMbXuuBunA3-4s0RrEBw9AJ9npAmk_3FmXPYSPpUC3epcrr-wK4LnA8Os&usqp=CAE', 'szezon' => 'Ősz', 'kategoria' => '3', 'ar' => 120000]);

        Modell::create(['nev' => 'PRADA Duchesse baseball cap with crystals', 'tervezo' => '2', 'leiras' => 'Ez a férfi sapka prémium minőségű bőrből készült, amely tartós és stílusos anyag. A sapka jól illeszkedik a fejre, és az elegáns részletek - mint a bőrvarrás - teszik igazán stílusossá. A sapka alkalmas különböző alkalmakra, de a hétköznapokban is megállja a helyét.', 'kep' => 'https://www.prada.com/content/dam/pradabkg_products/1/1HC/1HC274/2CLAF0522/1HC274_2CLA_F0522_SLF.jpg/jcr:content/renditions/cq5dam.web.hebebed.1000.1000.crop.jpg', 'szezon' => 'Ősz', 'kategoria' => '3', 'ar' => 520000]);

        Modell::create(['nev' => 'DIOR CHRISTIAN DIOR COUTURE BASEBALL CAP', 'tervezo' => '3', 'leiras' => 'Ez a férfi sapka magas minőségű gyapjúból készült, amely puha és kellemes tapintású anyag. A sapka jól szellőzik, így kényelmes viselet még melegebb időben is. A sapka egyszerű, letisztult dizájnnal rendelkezik, ami tökéletesen illik a mindennapi viselethez, de alkalmasabb eseményekre is hordható.', 'kep' => 'https://media.dior.com/couture/ecommerce/media/catalog/product/C/A/1673531114_243C904G4511_C900_E03_ZHC.jpg?imwidth=1080', 'szezon' => 'Ősz', 'kategoria' => '3', 'ar' => 230000]);





        Modell::create(['nev' => 'Polo Ralph Lauren', 'tervezo' => '10', 'leiras' => 'Ez a férfi zokni prémium minőségű kasmír anyagból készült, amely rendkívül puha és kellemes viseletet biztosít a lábaknak. A zokni jól szellőzik, így megakadályozza a lábak izzadását, és szárazon tartja azokat. A zokni stílusos és elegáns, alkalmasabb eseményekre is, de a hétköznapokban is jól mutat.', 'kep' => 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcR7XqyeyAUVxCZq9E94siu1fLTZ_3m7KBynrfFAMEXPy3BwarfAzKWa3Oe2NI0Yk1FS6F7pbFmvpUfvm3t0PWsbkcVYNxmNdg1unlpxUGlBGMnNH2DDghJ8-g&usqp=CAE', 'szezon' => 'Tavasz', 'kategoria' => '4', 'ar' => 50000]);

        Modell::create(['nev' => 'GANT', 'tervezo' => '9', 'leiras' => ' Ez a férfi zokni magas minőségű merinó gyapjúból készült, amely kényelmes és rugalmas anyag. A zokni melegen tartja a lábakat hideg időben, és jól szellőzik, így megakadályozza a lábak izzadását melegebb időben. A zokni egyszerű, letisztult dizájnnal rendelkezik, ami a mindennapi viseletre is tökéletes választás.', 'kep' => 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcScd5cOhep3UTYPZyFPAIPVmBUxOtDHYf7wUlbzRpJYPY1MpzGTJEOJbx2iFNNIcT23SejKsgjaGPYKt1Ja9AxHLjsS9wFskWkNzAWNt6YwVkxln4cZ2csZhw&usqp=CAE', 'szezon' => 'Tavasz', 'kategoria' => '4', 'ar' => 40000]);

        Modell::create(['nev' => 'Massimo Dutti', 'tervezo' => '8', 'leiras' => 'Ez a férfi zokni prémium minőségű selyemből készült, amely nagyon finom és puha érzetet biztosít a lábaknak. A selyem anyaga kiváló nedvesség elvezető képességgel rendelkezik, így hűvösen tartja a lábakat melegebb időben is. A zokni elegáns és stílusos, így alkalmasabb eseményekre is, de akár a mindennapi viseletben is kényelmesen viselhető.', 'kep' => 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcRsc7t6xcQQQ0-9DHDm0I2A4XKlgXXc7Aiu27ZJgjgDG8YZN-dllv0xVTdzmPLQQDiKSevMs7IaRpJqQlVOCInvlDj3uA7fXsot_s6mqf-XFUGiD8rAFqsLr7Y&usqp=CAE', 'szezon' => 'Tavasz', 'kategoria' => '4', 'ar' => 100000]);


        Modell::create(['nev' => 'Gucci chasmere shirt', 'tervezo' => '7', 'leiras' => 'Ez a férfi ing a legjobb minőségű kasimir anyagból készült, ami rendkívül puha és kényelmes viseletet biztosít. A kasimir anyag könnyedén szellőzik, így hűvösen tartja a testet melegebb időben is, és melegen tartja a testet hideg időben. Az ing elegáns és letisztult dizájnnal rendelkezik, ami tökéletes választás lehet egyéni stílusú, elegáns eseményekre, vagy akár az irodába is.', 'kep' => 'https://media.gucci.com/style/HEXD6D7D2_Center_0_0_800x800/1676570476/740694_ZANF6_9200_001_100_0000_Light-Oxford-cotton-shirt-with-embroidery.jpg', 'szezon' => 'Ősz', 'kategoria' => '5', 'ar' => 1800000]);

        Modell::create(['nev' => 'Gucci silk shirt', 'tervezo' => '6', 'leiras' => 'Ez a férfi ing prémium minőségű selyem anyagból készült, amely rendkívül sima és kellemes tapintást nyújt. Az ing könnyű és légáteresztő, így hűvös és kényelmes viselet a melegebb időben is. Az ing elegáns és stílusos, alkalmas üzleti találkozókra, különleges eseményekre vagy akár a hétköznapi elegáns megjelenésre is.', 'kep' => 'https://media.gucci.com/style/DarkGray_Center_0_0_800x800/1680092140/740319_ZANKM_9130_001_100_0000_Light-Silk-twill-equestrian-print-shirt.jpg', 'szezon' => 'Ősz', 'kategoria' => '5', 'ar' => 800000]);
        
        Modell::create(['nev' => 'Gucci cotton shirt', 'tervezo' => '5', 'leiras' => 'Ez a férfi ing elegáns kombinációját nyújtja a prémium minőségű gyapjú és selyem anyagnak. Az ing puha és meleg érzést nyújt a viselőjének, miközben megőrzi a légáteresztő képességét. Az ing stílusos és kifinomult, alkalmas formális eseményekre, esti összejövetelekre vagy elegáns megjelenésre. A gyapjú-selyem kombináció a kényelmet és a stílust tökéletesen egyesíti.', 'kep' => 'https://media.gucci.com/style/HEXD6D7D2_Center_0_0_800x800/1676313939/736991_ZALUK_9128_001_100_0000_Light-Striped-cotton-shirt.jpg', 'szezon' => 'Ősz', 'kategoria' => '5', 'ar' => 2800000]);


        Modell::create(['nev' => 'Daily Paper Refarid Short Sleeve T-Shirt', 'tervezo' => '5', 'leiras' => 'Ez a férfi poló elegáns kombinációját nyújtja a prémium minőségű gyapjú és selyem anyagnak. Az ing puha és meleg érzést nyújt a viselőjének, miközben megőrzi a légáteresztő képességét. A poló stílusos és kifinomult, alkalmas formális eseményekre, esti összejövetelekre vagy elegáns megjelenésre. A gyapjú-selyem kombináció a kényelmet és a stílust tökéletesen egyesíti.', 'kep' => 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcTTMfKopzBerqGKvWTy8eTG5Nf3eemHBig7wHCoTqhfXwCdjZhpUzajQfRmupikrSliwyzvLMguxdha1gf6Dn0KyHJ60PszOJj0N69rX7OBQGhXVks8HwbQpw&usqp=CAE', 'szezon' => 'Tél', 'kategoria' => '6', 'ar' => 223000]);

        Modell::create(['nev' => 'DIOR coat', 'tervezo' => '4', 'leiras' => 'Ez a férfi kabát prémium minőségű anyagokból készült, amelyek ellenállnak az időjárás viszontagságainak és biztosítják a viselő kényelmét és melegségét. A kabát vastag és puha bélésével, valamint a széles, többrétegű gallérjával és zsebeivel tökéletesen megvédi a viselőt a hidegtől és a szélvészektől.', 'kep' => 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcSvqJ9YUsKYvrzf9huhWixPNEuoFyDGDLTNT4J0osC2HCUeBqkynJndoX9_6M4O505cXZjNwR9gIql9AXF7xSD2Ey41SuXoGJWKcMioTGu8X3gkX6981CrTjA&usqp=CAE', 'szezon' => 'Tél', 'kategoria' => '7', 'ar' => 1500000]);


        Modell::create(['nev' => 'DIOR gloves', 'tervezo' => '3', 'leiras' => 'Ezek a férfi kesztyűk kiváló minőségű bőrből készültek, amelyek rendkívül puha és sima tapintást nyújtanak. A kesztyűk kezeletlen és természetes bőr felülete kifinomult és elegáns megjelenést kölcsönöz a viselőjének.', 'kep' => 'https://media.dior.com/couture/ecommerce/media/catalog/product/B/6/1678967520_5023RUACH_H830_E01_ZHC.jpg?imwidth=1080', 'szezon' => 'Tél', 'kategoria' => '8', 'ar' => 230000]);


        Modell::create(['nev' => 'Gucci scarf', 'tervezo' => '2', 'leiras' => 'Ez a férfi sál luxus minőségű anyagokból készült, amelyek lágy és kellemes tapintást nyújtanak. A sál hőszigetelő képessége segít megvédeni a viselőjét a hideg időjárás viszontagságaitól, ugyanakkor szellőző képessége révén nem okoz izzadást és kellemetlen szagokat.', 'kep' => 'https://media.gucci.com/style/HEXF1E9FB_Center_0_0_800x800/1668105947/715497_4GAAA_1079_001_100_0000_Light-Wool-with-Interlocking-G-scarf.jpg', 'szezon' => 'Nyár', 'kategoria' => '9', 'ar' => 240000]);

        Modell::create(['nev' => 'Emperio Armani', 'tervezo' => '1', 'leiras' => 'Ez a férfi zakó kiváló minőségű anyagból készült, amely kiemelkedő tartósságot és kényelmet biztosít a viselőjének. A zakó szabása és kidolgozása precíz és kifinomult, a finom részletek és a tökéletes illeszkedés pedig elegáns és stílusos megjelenést biztosítanak.', 'kep' => 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcRs40vKarj13ju0ksVvmFcx0WdgKXnM92f5QWynWJITaYuvVQ1WV3owm7-SLid6MVId8l0PEQKJvZidn2ps3ZBKODjMyM96ksrj8SNhFJbnb7ZX87yU7xkcbAg&usqp=CAE', 'szezon' => 'Tél', 'kategoria' => '10', 'ar' => 2600000]);

    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modells');
    }
};
